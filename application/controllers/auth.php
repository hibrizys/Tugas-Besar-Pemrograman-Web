<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        
    }

    public function index()
    {
        if($this->session->userdata('email')) {
            redirect('user');
        } 

        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        if ($this->form_validation->run() == false){
            $data['title'] = 'PoV SignIn';
            $this->load->view('Templates/sign_header', $data);
            $this->load->view('auth/signin');
            $this->load->view('Templates/sign_footer');
        } else {
            //validasinya sukses
            $this->_login();
        }
        
    }
    private function _login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $user = $this->db->get_where('user', ['email' => $email])->row_array();

        if($user) {
            //user ada
             if($user['is_active'] == 1){
                    if(password_verify($password, $user['password'])){
                        $data = [
                            'email' => $user['email'],
                            'role_id' => $user['role_id'],
                        ];
                        $this->session->set_userdata($data);

                        if ($user['role_id'] == 1){
                            redirect('admin');   
                        } else {
                            redirect('user');
                        }
                    
                    } else {
                        $this->session->set_flashdata('message', '
                        <div class="container" role="alert" style="
                        color: red;
                        bg: #d1e7dd;
                        border-color: #badbcc; 
                        text-color: #d1e7dd;
                        ">
                            Wrong password!
                        </div>');
                        redirect('auth');
                    }
             } else {
                    $this->session->set_flashdata('message', '
                    <div class="container" role="alert" style="
                    color: red;
                    bg: #d1e7dd;
                    border-color: #badbcc; 
                    text-color: #d1e7dd;
                    ">
                        This email has not been activated!
                    </div>');
                    redirect('auth');
             }
        } else {
            $this->session->set_flashdata('message', '
                <div class="container" role="alert" style="
                color: red;
                bg: #d1e7dd;
                border-color: #badbcc; 
                text-color: #d1e7dd;
                ">
                    Email is not Registered!
                </div>');
            redirect('auth');
        }
    }

    public function signup()
    {
        if($this->session->userdata('email')) {
            redirect('user');
        } 

        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
            'is_unique' => 'This email has already registered!'
        ]);
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]', 
        [   'matches' => 'Password dont match!',
            'min_length' => 'Pasword too short'
        ]
        );
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');

        if($this->form_validation->run() == false) {
        $data['title'] = 'PoV SignUp';
        $this->load->view('Templates/sign_header', $data);
        $this->load->view('auth/signup');
        $this->load->view('Templates/sign_footer');
        } else {
            $data = [
                'name' => htmlspecialchars($this->input->post('name', true)),
                'email' =>htmlspecialchars($this->input->post('email', true)),
                'image' => 'user.svg',
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'role_id' => 2,
                'role' => 'Basic',
                'Comments' => 0,
                'Reviews' => 0,
                'status' => 'Approved',
                'is_active' => 1,
                'date_created' => time()
            ];
           
            $this->db->insert('user', $data);
            $this->session->set_flashdata('message', '
                <div class="container" role="alert" style="
                color: green;
                bg: #d1e7dd;
                border-color: #badbcc; 
                text-color: #d1e7dd;
                ">
                    Congratulation! your account has been created. Pelase Login
                </div>');
            redirect('auth');
        }
        
    }

    public function signout()
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role_id');

        $this->session->set_flashdata('message', '
                <div class="container" role="alert" style="
                color: green;
                bg: #d1e7dd;
                border-color: #badbcc; 
                text-color: #d1e7dd;
                ">
                    You have been logged out!
                </div>');
            redirect('auth');
    }
}