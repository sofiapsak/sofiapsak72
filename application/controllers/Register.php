<?php
class register extends CI_Controller{
  function __construct(){
    parent::__construct();
    $this->load->model('home_model');
  }

  function index(){
    $this->load->view('register_bdo');
  }

    function register_user(){
        
        $this->form_validation->set_rules('user_name', 'user_name','trim|required|min_length[1]|max_length[255]');
        $this->form_validation->set_rules('user_password', 'user_password','trim|required|min_length[1]|max_length[255]');
        $this->form_validation->set_rules('user_email', 'user_email','trim|required|min_length[1]|max_length[255]');
        $this->form_validation->set_rules('user_level', 'user_level','trim|required|min_length[1]|max_length[1]');

        if ($this->form_validation->run()==true)
        {
        $username   = $this->input->post('user_name');
        $password   = $this->input->post('user_password');
        $user_email = $this->input->post('user_email');
        $level      = $this->input->post('user_level');
        $this->home_model->register($username,$password,$user_email,$level);
        $this->session->set_flashdata('success_register','Proses Pendaftaran User Berhasil');
        redirect('login');
        }
        else
        {
        $this->session->set_flashdata('error', validation_errors());
        redirect('register_bdo');
        }
    }
}