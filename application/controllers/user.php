<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class User extends CI_Controller {

    public function __construct() {
        parent::__construct();
        if ($this->session->userdata('check')) {
            
        } else {
            redirect(base_url() . 'login');
        }
        $this->load->model("user_model");
        //$this->load->model("school_profile_model");
    }

    public function add_user() {
        $data['title'] = 'Add User';
		$data['lists'] = $this->user_model->user_list();
        //$data['get_school_code'] = $this->school_profile_model->get_school_code();
//        echo '<pre>';
//        print_r($data['get_school_code']);
//        echo '</pre>';
//        exit();
        $this->load->view('header', $data);
        $this->load->view('sidemenu');
        $this->load->view('add_user', $data);
        $this->load->view('footer');
    }

    public function create_user() {
        $data['title'] = 'Create User';
        $this->load->library('form_validation');
        $this->form_validation->set_rules('user', 'User Name', 'trim|required|trim|callback_username_check|xss_clean');
        $this->form_validation->set_rules('school_code', 'School Code', 'trim|required|xss_clean');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean|matches[password1]');
        $this->form_validation->set_rules('password1', 'Re Password', 'trim|required|xss_clean');
        $this->form_validation->set_rules('status', 'Status', 'trim|required|xss_clean');
        $this->form_validation->set_rules('user_role', 'User Role', 'trim|required|xss_clean');

        if ($this->form_validation->run() === FALSE) {
            $this->add_user();
        } else {

            $this->load->helper('security');
            $this->load->helper('date');
            $datetime = new DateTime();

            $config['upload_path'] = './upload/user_profile/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            // $config['overwrite'] = TRUE;

            $config['overwrite'] = FALSE;
            $config['file_name'] = $datetime->format('U');

            $this->upload->initialize($config);

            $source_image = '';

            if ($this->upload->do_upload('img')) {
                $image_info = $this->upload->data();

                $source_image = $image_info['file_name'];
            } else {
                echo $this->upload->display_errors();
            }
            $data = array(
                'user_id' => '',
                'user_name' => $this->input->post('user'),
                'school_code' => $this->input->post('school_code'),
                'user_password' => MD5($this->input->post('password')),
                'user_status' => $this->input->post('status'),
                'user_profile_image' =>'./upload/user_profile/'.$source_image,
                'user_role' => $this->input->post('user_role')
            );
            $flag = $this->user_model->add_user($data);
            if (!$flag) {
                $sData = array(
                    'action_status' => 2,
                    'action_message' => 'Insertion Failed !'
                );
                $this->session->set_userdata($sData);
                redirect(base_url() . 'user/add_user/failed');
            } else {
                $sData = array(
                    'action_status' => 1,
                    'action_message' => 'Successfully Inserted !'
                );
                $this->session->set_userdata($sData);
                redirect(base_url() . 'user/add_user/success');
            }
        }
    }

    public function username_check($name) {
        $this->load->model("user_model");
        $flag = $this->user_model->user_check($name);

        if ($flag) {
            $this->form_validation->set_message('username_check', 'The Username is already used');
            return FALSE;
        } else {
            return TRUE;
        }
    }

    public function list_user() {
        $this->load->model("user_model");
        $data['lists'] = $this->user_model->user_list();
        $data['title'] = 'User List';

        $this->load->view('header', $data);
        $this->load->view('sidemenu');
        $this->load->view('list_user', $data);
        $this->load->view('footer');
    }

    public function user_edit($user_id = '') {
        $this->load->model("user_model");
        $data['lists'] = $this->user_model->edit_user_list($user_id);
        $data['title'] = 'User Edit';
        $this->load->view('header', $data);
        $this->load->view('sidemenu');
        $this->load->view('user_edit', $data);
        $this->load->view('footer');
    }

    public function user_edit_action() {
        $this->load->library('form_validation');
        $id = $this->input->post('id');
        $password = $this->input->post('password');
        $this->form_validation->set_rules('password', 'Password', 'trim|xss_clean|matches[password1]');
        $this->form_validation->set_rules('password1', 'Password1', 'trim|xss_clean');

        $this->form_validation->set_rules('status', 'Status', 'trim|required|xss_clean');
        $this->form_validation->set_rules('user_role', 'User Role', 'trim|required|xss_clean');
        if ($this->form_validation->run() === FALSE) {
            $this->user_edit($id);
        } else {

            if ($password) {
                $data = array(
                    'user_password' => MD5($this->input->post('password')),
                    'user_status' => $this->input->post('status'),
                    'user_role' => $this->input->post('user_role')
                );
            } else {
                $data = array(
                    'user_status' => $this->input->post('status'),
                    'user_role' => $this->input->post('user_role')
                );
            }


            $this->load->model("user_model");
            $this->user_model->update_user($id, $data);

            redirect(base_url() . 'user/list_user/success');
        }
    }

}
