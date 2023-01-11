<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        check_logged_in();
        $this->load->model('users_model');
        $this->load->library('form_validation');
        
    }

    public function index()
    {
        $data['title'] = 'PoV  Admin';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('Templates/headerA', $data);
        $this->load->view('Templates/sidebarA', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('Templates/footerA');
    }

    public function catalog()
    {
        $data['title'] = 'Catalog PoV ';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('Templates/headerA', $data);
        $this->load->view('Templates/sidebarA', $data);
        $this->load->view('admin/catalog', $data);
        $this->load->view('Templates/footerA');
    }

    public function addItem()
    {
        $data['title'] = 'Add Item PoV';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('Templates/headerA', $data);
        $this->load->view('Templates/sidebarA', $data);
        $this->load->view('admin/add-item', $data);
        $this->load->view('Templates/footerA');
    }

    public function users()
    {
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        //$this->form_validation->set_rules('password', 'Password', 'trim|required');

        if($this->form_validation->run() == false) {
            $data['title'] = 'Users PoV';
            $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
            $data['users'] = $this->users_model->get_data('user')->result();
            $this->load->view('Templates/headerA', $data);
            $this->load->view('Templates/sidebarA', $data);
            $this->load->view('admin/users', $data);
            $this->load->view('Templates/footerA');
        } 
    }

    public function addUser()
    {
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
        $data['title'] = 'Add User';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('Templates/headerA', $data);
        $this->load->view('Templates/sidebarA', $data);
        $this->load->view('admin/add-user', $data);
        $this->load->view('Templates/footerA');
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
                <center class="col-10" style="
                color: green;
                bg: #d1e7dd;
                border-color: #badbcc; 
                text-color: #d1e7dd;
                ">
                    <h2> Congratulation! User has been created. </h2>
                </center>');
            redirect('admin/users');
        }
    }
    
    public function viewUser()
    {   
        $data['title'] = 'Add Item PoV';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('Templates/headerA', $data);
        $this->load->view('Templates/sidebarA', $data);
        $this->load->view('admin/view-user', $data);
        $this->load->view('Templates/footerA');
    }
    public function editUser($id)
    {
        $data['title'] = 'Edit User PoV';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['users'] = $this->users_model->get_data('user')->result();
        

        $this->form_validation->set_rules('name', 'Full Name', 'required|trim');

        if ($this->form_validation->run() == false){
            $this->load->view('Templates/headerA', $data);
            $this->load->view('Templates/sidebarA', $data);
            $this->load->view('admin/users', $data);
            $this->load->view('Templates/footerA');
        } else {
            $data = array(
                'id' => $id,
                'name' => $this->input->post('name'),
                'email' => $this->input->post('email'),
            );
            $this->users_model->update_data($data, 'user');
            $this->session->set_flashdata('message', '
                <center class="col-10" style="
                color: green;
                bg: #d1e7dd;
                border-color: #badbcc; 
                text-color: #d1e7dd;
                ">
                    <h2> Your profile has been updated! </h2>
                </center>');
            redirect('admin/users');
        }
        
    }

  public function deleteUser($id)
  {
    $where = array('id' => $id);

    $this->users_model->delete_user($where, 'user');
    $this->session->set_flashdata('message', '
                <center class="col-10" style="
                color: red;
                bg: #d1e7dd;
                border-color: #badbcc; 
                text-color: #d1e7dd;
                ">
                <h2> The account has been deleted! </h2>
                </center>');
            redirect('admin/users');
  }

    public function comments()
    {
        $data['title'] = 'Comments PoV';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('Templates/headerA', $data);
        $this->load->view('Templates/sidebarA', $data);
        $this->load->view('admin/comments', $data);
        $this->load->view('Templates/footerA');
    }

    public function reviews()
    {
		$this->session;
        $data['title'] = 'Reviews PoV';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['profile'] = $this->users_model->getUsers($_SESSION['email']); // get data user only 1 row
        $this->load->view('Templates/headerA', $data);
        $this->load->view('Templates/sidebarA', $data);
        $this->load->view('admin/reviews', $data);
        $this->load->view('Templates/footerA');
    }
}
