<?php
class Login extends CI_Controller{
  function __construct(){
    parent::__construct();
    $this->load->model('home_model');
  }

  function index(){
    $this->load->view('login');
  }

  function auth(){
    $email    = $this->input->post('email',TRUE);
    $password = password_verify($this->input->post('password',TRUE));
    $validate = $this->home_model->validate($email,$password);
    if($validate->num_rows() > 0){
        $data  = $validate->row_array();
        $name  = $data['user_name'];
        $email = $data['user_email'];
        $level = $data['user_level'];
        $sesdata = array(
            'username'  => $name,
            'email'     => $email,
            'level'     => $level,
            'logged_in' => TRUE
        );
        $this->session->set_userdata($sesdata);
        // access login for admin
        if($level === '1'){
            redirect('home');

        // access login for staff
        }elseif($level === '2'){
            redirect('home');

        // access login for author
        }else{
            redirect('home');
        }
    }else{
        echo $this->session->set_flashdata('msg','*Username or Password is Wrong');
        redirect('login');
    }
  }

  function logout(){
      $this->session->sess_destroy();
      redirect('login');
  }

  
  
}
