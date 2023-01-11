<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class user extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        check_logged_in();
    }

    public function index()
    {
        $data['title'] = 'my PoV ';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['kalender'] = $this->kalender();

        $this->load->view('templates/header', $data);
        $this->load->view('main/index', $data);
        $this->load->view('templates/footer', $data);
    }

    public function details()
    {
        $data['title'] = 'my Catalog ';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['kalender'] = $this->kalender();

        $this->load->view('templates/header', $data);
        $this->load->view('main/details', $data);
        $this->load->view('templates/footer', $data);
    }

    public function catalog()
    {
        $data['title'] = 'my Catalog ';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['kalender'] = $this->kalender();

        $this->load->view('templates/header', $data);
        $this->load->view('main/catalog', $data);
        $this->load->view('templates/footer', $data);
    }

    public function pricing()
    {
        $data['title'] = 'my Pricing ';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['kalender'] = $this->kalender();

        $this->load->view('templates/header', $data);
        $this->load->view('main/pricing', $data);
        $this->load->view('templates/footer', $data);
    }

    public function about()
    {
        $data['title'] = 'my About ';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['kalender'] = $this->kalender();

        $this->load->view('templates/header', $data);
        $this->load->view('main/about', $data);
        $this->load->view('templates/footer', $data);
    } 

    public function profile()
    {
        $data['title'] = 'my Profile ';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['kalender'] = $this->kalender();
        $this->form_validation->set_rules('name', 'Full Name', 'required|trim');
        if ($this->form_validation->run() == false){
            $this->load->view('templates/header', $data);
            $this->load->view('main/profile', $data);
            $this->load->view('templates/footer', $data);
        } else {
            $name = $this->input->post('name');
            $email = $this->input->post('email');

            $this->db->set('name', $name);
            $this->db->where('email', $email);
            $this->db->update('user');
            
            $this->session->set_flashdata('message', '
                <center class="col-10" style="
                color: green;
                bg: #d1e7dd;
                border-color: #badbcc; 
                text-color: #d1e7dd;
                ">
                    <h2> Your profile has been updated! </h2>
                </center>');
            redirect('user/profile');
        }
        
    }

    public function changePassword()
    {
        $data['title'] = 'my Profile ';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['kalender'] = $this->kalender();
        $this->form_validation->set_rules('nPassword1','New Password', 'required|trim|min_length[3]|matches[nPassword2]');
        $this->form_validation->set_rules('nPassword2','Confirm New Password', 'required|trim|min_length[3]|matches[nPassword1]');
        if ($this->form_validation->run() == false){
            $this->load->view('templates/header', $data);
            $this->load->view('main/profile', $data);
            $this->load->view('templates/footer', $data);
        } else {
            $cPassword = $this->input->post('cPassword');
            $nPassword1 = $this->input->post('nPassword1');
            if(!password_verify($cPassword, $data['user']['password'])){
                $this->session->set_flashdata('message', '
                <center class="col-10" style="
                color: red;
                bg: #d1e7dd;
                border-color: #badbcc; 
                text-color: #d1e7dd;
                ">
                    <h2> Wrong current password! </h2>
                </center>');
            redirect('user/profile');
            } else {
                if($cPassword == $nPassword1){
                    $this->session->set_flashdata('message', '
                    <center class="col-10" style="
                    color: red;
                    bg: #d1e7dd;
                    border-color: #badbcc; 
                    text-color: #d1e7dd;
                    ">
                        <h2> New pasword cannot be the same as Current Password </h2>
                    </center>');
                    redirect('user/profile');
                } else {
                    $pHash = password_hash($nPassword1, PASSWORD_DEFAULT);

                    $this->db->set('password', $pHash);
                    $this->db->where('email', $this->session->userdata('email'));
                    $this->db->update('user');

                    $this->session->set_flashdata('message', '
                    <center class="col-10" style="
                    color: green;
                    bg: #d1e7dd;
                    border-color: #badbcc; 
                    text-color: #d1e7dd;
                    ">
                        <h2> Password Change! </h2>
                    </center>');
                    redirect('user/profile');
                }
            }
        }
    }
    public function contacts()
    {
        $data = $formData = array();
        $data['title'] = 'my Contact ';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['kalender'] = $this->kalender();

        if($this->input->post('contactSubmit')){
            $formData = $this->input->post();

            $this->form_validation->set_rules('name', 'Name', 'required');
            $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
            $this->form_validation->set_rules('subject', 'Subject', 'required');
            $this->form_validation->set_rules('message', 'Message', 'required');

            if ($this->form_validation->run() == true){
                $mailData = array(
                    'name' => $formData['name'],
                    'email' => $formData['email'],
                    'subject' => $formData['subject'],
                    'message' => $formData['message']
                );

                $send = $this->sendEmail($mailData);

                if ($send){
                    echo "<script type='text/javascript'>alert('Sukses Terkirim');</script>";
                } else {
                    echo "<script type='text/javascript'>alert('Gagal Terkirim');</script>";

                }
            }
        }

        $data['postData'] = $formData;
        $this->load->view('templates/header', $data);
        $this->load->view('main/contacts', $data);
        $this->load->view('templates/footer', $data);
    }

    private function sendEmail($mailData)
    {
        $config['protocol'] = 'smtp';
        $config['smtp_host'] = 'ssl://smtp.gmail.com';
        $config['smtp_port'] = 465;
        $config['smtp_user'] = 'hibrizys@gmail.com';
        $config['smtp_pass'] = 'suakonxzhiikwfau';
        $config['charset'] = 'iso-8859-1';
        $config['mailtype'] = 'html';
        $config['newline'] = '\r\n';

        $to = 'hibrizys@gmail.com';
        $from = 'sulistiyo@gmail.com';
        $fromName = 'hibrizy sulistiyo';
        $mailSubject = 'Contact Request Submitted by'.$mailData['name'];

        $mailContent = '
            <h2> Contact Request Submitted </h2>
            <p><b>Name: </b> '.$mailData['name'].'</p>
            <p><b>Email: </b> '.$mailData['email'].'</p>
            <p><b>Subject: </b> '.$mailData['subject'].' </p>
            <p><b>Message: </b> '.$mailData['message'].' </p>
        ';

        $this->email->initialize($config);
        $this->email->to($to);
        $this->email->set_newline("\r\n");
        $this->email->set_crlf("\r\n");
        $this->email->from($from,$fromName);
        $this->email->subject($mailSubject);
        $this->email->message($mailContent);

        return $this->email->send()?true:false;
    }

    public function kalender()
    {
        $prefs = array(
            'start_day'    => 'sunday',
            'show_next_prev' => TRUE
        );
        $this->calendar->initialize($prefs);
        $year = $this->uri->segment(3);
        $month = $this->uri->segment(4);
        $query = $this->calendar->generate($year, $month);
        return $query;
    }
    public function faq()
    {
        $data['title'] = 'my FAQ ';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['kalender'] = $this->kalender();

        $this->load->view('templates/header', $data);
        $this->load->view('main/faq', $data);
        $this->load->view('templates/footer', $data);
    }

    public function privacy()
    {
        $data['title'] = 'my About ';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['kalender'] = $this->kalender();

        $this->load->view('templates/header', $data);
        $this->load->view('main/privacy', $data);
        $this->load->view('templates/footer', $data);
    }

    public function notFound(){
        $data['title'] = 'Error Not Found ';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['kalender'] = $this->kalender();

        
        $this->load->view('Templates/sign_header', $data);
        $this->load->view('main/notFound', $data);
        $this->load->view('Templates/sign_footer', $data);
        
    }

    public function notFound2(){
        $data['title'] = 'Error Not Found ';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['kalender'] = $this->kalender();

        $this->load->view('templates/header', $data);
        $this->load->view('main/notFound2', $data);
        $this->load->view('templates/footer', $data);
    }
    
}