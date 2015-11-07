<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('login_model');
    }

    public function index() {
        $data['title'] = "Login";
        $this->load->view('login', $data);
    }

    public function check_login() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[5]|max_length[20]|xss_clean');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[5]|max_length[20]|xss_clean');

        if ($this->form_validation->run() === FALSE) {
            $this->index();
        } else {
            $username = $this->input->post('username');
            $password = md5($this->input->post('password'));

            // LOAD MODEL HERE
            $data = $this->login_model->check_login($username, $password);
//            $this->pr($data);
//            die('AAAAAAAAAAAAAAA');
            if ($data) {
                if ($data['user_role'] != 1) {
                    $this->session->set_flashdata('errorenable', '<div class="error-container">' . "You are not able to login" . '</div>');
                    redirect(base_url() . "login");
                } elseif ($data['user_status'] == 2) {
                    $this->session->set_flashdata('errordisable', '<div class="error-container">' . "You are Disable User" . '</div>');
                    redirect(base_url() . "login");
                } else {
                    $session_data = array(
                        'user_id' => $data['user_id'],
                        'user_name' => $data['user_name'],
                        'user_status' => $data['user_status'],
                        'user_role' => $data['user_role'],
                        'profile_img' => $this->login_model->get_pic_by_user_id($data['user_id']),
                        'is_logged_in' => TRUE
                    );
                    $this->session->set_userdata('check', $session_data);

                    redirect(base_url() . 'dashboard');
                }
            } else {
                $this->session->set_flashdata('error', '<div class="error-container">' . "Invalid Username or Password" . '</div>');
                redirect(base_url() . "login");
            }
        }
    }

    public function logout() {
        $array_items = array('username' => '', 'is_logged_in' => '');
        $this->session->unset_userdata($array_items);
        $this->session->sess_destroy();
        redirect('login');
    }

}
