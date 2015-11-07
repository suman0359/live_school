<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Creation extends CI_Controller {

    public function __construct() {
        parent::__construct();
        if ($this->session->userdata('check')) {
            
        } else {
            redirect(base_url() . 'login');
        }
        $this->load->model("user_model");
        //$this->load->model("school_profile_model");
        $this->load->model("creation_model");
    }

    public function create_school_name() {
        $data['title'] = 'Create Schhol Name';
//        echo '<pre>';
//        print_r($data['get_school_code']);
//        echo '</pre>';
//        exit();
        $this->load->view('header', $data);
        $this->load->view('sidemenu');
        $this->load->view('create_school_name', $data);
        $this->load->view('footer');
    }

    public function submit_school_name_info() {
        $data['title'] = 'Create School Name';
        $this->load->library('form_validation');


        $this->form_validation->set_rules('school_name', 'School Name', 'trim|required|trim|callback_username_check|xss_clean');
        $this->form_validation->set_rules('school_code', 'School Code', 'trim|required|xss_clean|matches[school_code1]');
        $this->form_validation->set_rules('school_code1', 'Confirm School Code', 'trim|required|trim|xss_clean');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|xss_clean');
        $this->form_validation->set_rules('phone', 'Phone', 'trim|required|xss_clean');
        $this->form_validation->set_rules('mobile', 'Mobile', 'trim|required|xss_clean');
        $this->form_validation->set_rules('address', 'Address', 'trim|required|xss_clean');

        if ($this->form_validation->run() === FALSE) {
            $this->create_school_name();
        } else {

            $this->load->helper('security');
            $this->load->helper('date');
            $datetime = new DateTime();

            $config['upload_path'] = './upload/school_pic/';
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
            $config['upload_path'] = './upload/school_logo/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            // $config['overwrite'] = TRUE;

            $config['overwrite'] = FALSE;
            $config['file_name'] = $datetime->format('U');

            $this->upload->initialize($config);

            $school_logo = '';

            if ($this->upload->do_upload('school_logo')) {
                $image_info = $this->upload->data();

                $school_logo = $image_info['file_name'];
            } else {
                echo $this->upload->display_errors();
            }
            $data = array(
                'school_name' => $this->input->post('school_name'),
                'school_code' => $this->input->post('school_code'),
                'email' => $this->input->post('email'),
                'phone' => $this->input->post('phone'),
                'mobile' => $this->input->post('mobile'),
                'address' => $this->input->post('address'),
                'school_profile_picture' => 'upload/school_pic/' . $source_image,
                'school_logo' => 'upload/school_logo/' . $school_logo
            );
            $flag = $this->creation_model->add_school_name($data);
            if (!$flag) {
                $sData = array(
                    'action_status' => 2,
                    'action_message' => 'Insertion Failed !'
                );
                $this->session->set_userdata($sData);
                redirect(base_url() . 'creation/create_school_name/failed');
            } else {
                $sData = array(
                    'action_status' => 1,
                    'action_message' => 'Successfully Inserted !'
                );
                $this->session->set_userdata($sData);
                redirect(base_url() . 'creation/create_school_name/success');
            }
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
	
	
	///////////////////////////////////////// Add Group //////////////////////////////////////////////////////////////////////////////////////////////////

    public function add_group() {
        $data['title'] = 'Add Group';
        $data['get_group'] = $this->creation_model->get_group();
        $data['group_list'] = $this->creation_model->group_list();
        //echo '<pre>';
        //print_r($data['group_list']);		
        //echo '</pre>';
        //exit();

        $this->load->view('header', $data);
        $this->load->view('sidemenu');
        $this->load->view('add_group', $data);
        $this->load->view('footer');
    }

    public function create_group() {

        if ($this->input->post()) {
            $this->form_validation->set_rules('group_name', 'Group', 'trim|required|xss_clean');
            if ($this->form_validation->run() === FALSE) {
                $this->add_group();
            } else {
                $data = array(
                    'group_name' => $this->input->post('group_name')
                );

                $this->creation_model->add_group($data);
                redirect(base_url() . 'creation/add_group');
            }
        }
    }

    public function edit_group() {
        if ($this->input->post()) {
            $this->form_validation->set_rules('group_name', 'trim|required|xss_clean');
            $this->form_validation->set_rules('new_group', 'new group', 'trim|required|xss_clean|callback_check_facility');
            if ($this->form_validation->run() === FALSE) {
                $this->group();
            } else {
                $group_id = $this->input->post('group_name');
                $data = array(
                    'group_name' => $this->input->post('new_group')
                );

                $this->creation_model->edit_group($data, $group_id);
                redirect(base_url() . 'creation/add_group');
            }
        }
    }

    public function delete_group($id) {
        $this->creation_model->group_delete($id);
        redirect(base_url() . 'creation/add_group');
    }

    
	
		///////////////////////////////////////// Add subject //////////////////////////////////////////////////////////////////////////////////////////////////
		

    public function add_subject() {
        $data['title'] = 'Add Subject';
        $data['get_subject'] = $this->creation_model->get_subject();
        $data['subject_list'] = $this->creation_model->subject_list();
        $data['group_list'] = $this->creation_model->group_list();
        //echo '<pre>';
        //print_r($data['subject_list']);  
        //echo '</pre>';
        //exit();

        $this->load->view('header', $data);
        $this->load->view('sidemenu');
        $this->load->view('add_subject', $data);
        $this->load->view('footer');
    }
	
	public function create_subject() {

        if ($this->input->post()) {
            $this->form_validation->set_rules('subject_name', 'Subject', 'trim|required|xss_clean');
            $this->form_validation->set_rules('group', 'Group id', 'trim|required|xss_clean');
            $this->form_validation->set_rules('subject_assign_subjective_marks', 'subject assign subjective marks', 'trim|required|xss_clean');
            $this->form_validation->set_rules('subject_assign_objective_marks', 'subject assign objective marks', 'trim|required|xss_clean');
            $this->form_validation->set_rules('practical_marks', 'practical marks', 'trim|required|xss_clean');
            $this->form_validation->set_rules('subject_assign_ct_marks', 'subject assign ct marks', 'trim|required|xss_clean');
            $this->form_validation->set_rules('subject_assign_mt_marks', 'subject assign mt marks', 'trim|required|xss_clean');
            if ($this->form_validation->run() === FALSE) {
                $this->add_subject();
            } else {
                $session_data = $this->session->userdata('check');
                $data = array(
                    'subject_name' => $this->input->post('subject_name'),
                    'school_code' => $session_data['school_code'],
                    'group_id' => $this->input->post('group'),
                    'subject_assign_subjective_marks' => $this->input->post('subject_assign_subjective_marks'),
                    'subject_assign_objective_marks' => $this->input->post('subject_assign_objective_marks'),
                    'practical_marks' => $this->input->post('practical_marks'),
                    'subject_assign_ct_marks' => $this->input->post('subject_assign_ct_marks'),
                    'subject_assign_mt_marks' => $this->input->post('subject_assign_mt_marks')
                );


                $this->creation_model->add_subject($data);
                redirect(base_url() . 'creation/add_subject');
            }
        }
    }

    public function edit_subject() {
        if ($this->input->post()) {
            $this->form_validation->set_rules('subject_name', 'trim|required|xss_clean');
            $this->form_validation->set_rules('new_subject', 'new subject', 'trim|required|xss_clean');
            if ($this->form_validation->run() === FALSE) {
                $this->add_subject();
            } else {
                $subject_id = $this->input->post('subject_name');
                $data = array(
                    'subject_name' => $this->input->post('new_subject'),
                    'school_code' => $this->input->post('school_code'), //hidden field
                    'group_id' => $this->input->post('group_id'),
                    'subject_assign_subjective_marks' => $this->input->post('subject_assign_subjective_marks'),
                    'subject_assign_objective_marks' => $this->input->post('subject_assign_objective_marks'),
                    'practical_marks' => $this->input->post('practical_marks'),
                    'subject_assign_ct_marks' => $this->input->post('subject_assign_ct_marks'),
                    'subject_assign_mt_marks' => $this->input->post('subject_assign_mt_marks')
                );

                $this->creation_model->edit_subject($data, $subject_id);
                redirect(base_url() . 'creation/add_subject');
            }
        }
    }

    public function delete_subject($id) {
        $this->creation_model->subject_delete($id);
        redirect(base_url() . 'creation/add_subject');
    }

    ////////////////////////////////////////////// add Exam //////////////////////////////////////////////////////////////////////////////////
    public function add_exam() {
        $data['title'] = 'Add Examination';
        $data['exam_list'] = $this->creation_model->exam_list();
        $data['get_exam'] = $this->creation_model->get_exam();
        $this->load->view('header', $data);
        $this->load->view('sidemenu');
        $this->load->view('add_exam', $data);
        $this->load->view('footer');
    }

    public function create_exam() {

        if ($this->input->post()) {
            $this->form_validation->set_rules('exam_name', 'Exam', 'trim|required|xss_clean');
            if ($this->form_validation->run() === FALSE) {
                $this->add_designation();
            } else {
                $session_data = $this->session->userdata('check');
                $data = array(
                    'exam_name' => $this->input->post('exam_name')
                );


                $flag = $this->creation_model->add_exam($data);
                if (!$flag) {
                    $sData = array(
                        'action_status' => 2,
                        'action_message' => 'Insert Failed !'
                    );
                    $this->session->set_userdata($sData);
                    redirect(base_url() . 'creation/add_exam/failed');
                } else {
                    $sData = array(
                        'action_status' => 1,
                        'action_message' => 'Successfully Insert!'
                    );
                    $this->session->set_userdata($sData);
                    redirect(base_url() . 'creation/add_exam/success');
                }
            }
        }
    }

    public function edit_exam() {
        if ($this->input->post()) {
            $this->form_validation->set_rules('exam_name', 'trim|required|xss_clean');
            $this->form_validation->set_rules('new_exam', 'new exam', 'trim|required|xss_clean');
            if ($this->form_validation->run() === FALSE) {
                $this->add_exam();
            } else {
                $designation_id = $this->input->post('exam_name');
                $data = array(
                    'exam_name' => $this->input->post('new_exam'),
                    'school_code' => $session_data['school_code']
                );

                $this->creation_model->edit_exam($data, $designation_id);
                redirect(base_url() . 'creation/add_exam');
            }
        }
    }

    public function delete_exam($id) {
        $this->creation_model->exam_delete($id);
        redirect(base_url() . 'creation/add_exam');
    }
	
	
	////////////////////////////////////////////// add Shift //////////////////////////////////////////////////////////////////////////////////

    public function add_shift() {
        $data['title'] = 'Add Shift';
        $data['shift_list'] = $this->creation_model->shift_list();
        $data['get_shift'] = $this->creation_model->get_shift();
        $this->load->view('header', $data);
        $this->load->view('sidemenu');
        $this->load->view('add_shift', $data);
        $this->load->view('footer');
    }

    public function create_shift() {

        if ($this->input->post()) {
            $this->form_validation->set_rules('shift_name', 'Shift', 'trim|required|xss_clean');
            if ($this->form_validation->run() === FALSE) {
                $this->add_shift();
            } else {
                $data = array(
                    'shift_name' => $this->input->post('shift_name')
                );
				
				
				$flag = $this->creation_model->add_shift($data);
                if (!$flag) {
                    $sData = array(
                        'action_status' => 2,
                        'action_message' => 'Insert Failed !'
                    );
                    $this->session->set_userdata($sData);
                    redirect(base_url() . 'creation/add_shift/failed');
                } else {
                    $sData = array(
                        'action_status' => 1,
                        'action_message' => 'Successfully Insert!'
                    );
                    $this->session->set_userdata($sData);
                    redirect(base_url() . 'creation/add_shift/success');
                }

                
                
            }
        }
    }

    public function edit_shift() {
        if ($this->input->post()) {
            $this->form_validation->set_rules('shift_name', 'trim|required|xss_clean');
            $this->form_validation->set_rules('new_shift', 'new shift', 'trim|required|xss_clean|callback_check_facility');
            if ($this->form_validation->run() === FALSE) {
                $this->shift();
            } else {
                $shift_id = $this->input->post('shift_name');
                $data = array(
                    'shift_name' => $this->input->post('new_shift')
                );

                $this->creation_model->edit_shift($data, $shift_id);
                redirect(base_url() . 'creation/add_shift');
            }
        }
    }

    public function delete_shift($id) {
        $this->creation_model->shift_delete($id);
        redirect(base_url() . 'creation/add_shift');
    }
	
	
	////////////////////////////////////////////// add Version //////////////////////////////////////////////////////////////////////////////////

    public function add_version() {
        $data['title'] = 'Add Version';
        $data['version_list'] = $this->creation_model->version_list();
        $data['get_version'] = $this->creation_model->get_version();
        $this->load->view('header', $data);
        $this->load->view('sidemenu');
        $this->load->view('add_version', $data);
        $this->load->view('footer');
    }

    public function create_version() {

        if ($this->input->post()) {
            $this->form_validation->set_rules('version_name', 'version', 'trim|required|xss_clean');
            if ($this->form_validation->run() === FALSE) {
                $this->add_version();
            } else {
                $data = array(
                    'version_name' => $this->input->post('version_name')
                );
				
				
				$flag = $this->creation_model->add_version($data);
                if (!$flag) {
                    $sData = array(
                        'action_status' => 2,
                        'action_message' => 'Insert Failed !'
                    );
                    $this->session->set_userdata($sData);
                    redirect(base_url() . 'creation/add_version/failed');
                } else {
                    $sData = array(
                        'action_status' => 1,
                        'action_message' => 'Successfully Insert!'
                    );
                    $this->session->set_userdata($sData);
                    redirect(base_url() . 'creation/add_version/success');
                }

                
                
            }
        }
    }

    public function edit_version() {
        if ($this->input->post()) {
            $this->form_validation->set_rules('version_name', 'trim|required|xss_clean');
            $this->form_validation->set_rules('new_version', 'new version', 'trim|required|xss_clean');
            if ($this->form_validation->run() === FALSE) {
                $this->version();
            } else {
                $version_id = $this->input->post('version_name');
                $data = array(
                    'version_name' => $this->input->post('new_version')
                );
				
				$flag = $this->creation_model->edit_version($data, $version_id);
                if (!$flag) {
                    $sData = array(
                        'action_status' => 2,
                        'action_message' => 'Edit version Failed !'
                    );
                    $this->session->set_userdata($sData);
                    redirect(base_url() . 'creation/add_version/failed');
                } else {
                    $sData = array(
                        'action_status' => 1,
                        'action_message' => 'Successfully Edit Version!'
                    );
                    $this->session->set_userdata($sData);
                    redirect(base_url() . 'creation/add_version/success');
                }

                
                
            }
        }
    }

    public function delete_version($id) {
        $this->creation_model->version_delete($id);
        redirect(base_url() . 'creation/add_version');
    }

    ////////////////////////////////////////////// add section /////////////////////////

    public function add_section() {
        $data['title'] = 'Add Section';
        $data['section_list'] = $this->creation_model->section_list();
        $data['get_section'] = $this->creation_model->get_section();
        $this->load->view('header', $data);
        $this->load->view('sidemenu');
        $this->load->view('add_section', $data);
        $this->load->view('footer');
    }

    public function create_section() {

        if ($this->input->post()) {
            $this->form_validation->set_rules('section_name', 'Section', 'trim|required|xss_clean');
            if ($this->form_validation->run() === FALSE) {
                $this->add_section();
            } else {
                $data = array(
                    'section_name' => $this->input->post('section_name')
                );

                $this->creation_model->add_section($data);
                redirect(base_url() . 'creation/add_section');
            }
        }
    }

    public function edit_section() {
        if ($this->input->post()) {
            $this->form_validation->set_rules('section_name', 'trim|required|xss_clean');
            $this->form_validation->set_rules('new_section', 'new section', 'trim|required|xss_clean|callback_check_facility');
            if ($this->form_validation->run() === FALSE) {
                $this->add_section();
            } else {
                $section_id = $this->input->post('section_name');
                $data = array(
                    'section_name' => $this->input->post('new_section')
                );

                $this->creation_model->edit_section($data, $section_id);
                redirect(base_url() . 'creation/add_section');
            }
        }
    }

    public function delete_section($id) {
        $this->creation_model->section_delete($id);
        redirect(base_url() . 'creation/add_section');
    }
	
	////////////////////////////////////////////// add Hostel /////////////////////////

    public function add_hostel() {
        $data['title'] = 'Add Hostel Name';
        $data['hostel_list'] = $this->creation_model->hostel_list();
        $data['get_hostel'] = $this->creation_model->get_hostel();
        $this->load->view('header', $data);
        $this->load->view('sidemenu');
        $this->load->view('add_hostel', $data);
        $this->load->view('footer');
    }

    public function create_hostel() {

        if ($this->input->post()) {
            $this->form_validation->set_rules('hostel_name', 'Hostel', 'trim|required|xss_clean');
            if ($this->form_validation->run() === FALSE) {
                $this->add_hostel();
            } else {
                $data = array(
                    'hostel_name' => $this->input->post('hostel_name')
                );

                $this->creation_model->add_hostel($data);
                redirect(base_url() . 'creation/add_hostel');
            }
        }
    }

    public function edit_hostel() {
        if ($this->input->post()) {
            $this->form_validation->set_rules('hostel_name', 'trim|required|xss_clean');
            $this->form_validation->set_rules('new_hostel', 'new hostel', 'trim|required|xss_clean');
            if ($this->form_validation->run() === FALSE) {
                $this->add_hostel();
            } else {
                $hostel_id = $this->input->post('hostel_name');
                $data = array(
                    'hostel_name' => $this->input->post('new_hostel')
                );

                $this->creation_model->edit_hostel($data, $hostel_id);
                redirect(base_url() . 'creation/add_hostel');
            }
        }
    }

    public function delete_hostel($id) {
        $this->creation_model->hostel_delete($id);
        redirect(base_url() . 'creation/add_hostel');
    }

    ////////////////////////////////////////////// add Class /////////////////////////

    public function add_class() {
        $data['title'] = 'Add Class';
        $data['class_list'] = $this->creation_model->class_list();
        $data['get_the_class'] = $this->creation_model->get_the_class();
        $this->load->view('header', $data);
        $this->load->view('sidemenu');
        $this->load->view('add_class', $data);
        $this->load->view('footer');
    }

    public function create_class() {

        if ($this->input->post()) {
            $this->form_validation->set_rules('class_name', 'Class', 'trim|required|xss_clean');
            if ($this->form_validation->run() === FALSE) {
                $this->add_class();
            } else {
                $data = array(
                    'class_name' => $this->input->post('class_name')
                );

                $flag = $this->creation_model->add_class($data);
                if (!$flag) {
                    $sData = array(
                        'action_status' => 2,
                        'action_message' => 'Insertion Failed !'
                    );
                    $this->session->set_userdata($sData);
                    redirect(base_url() . 'creation/add_class/failed');
                } else {
                    $sData = array(
                        'action_status' => 1,
                        'action_message' => 'Successfully Inserted !'
                    );
                    $this->session->set_userdata($sData);
                    redirect(base_url() . 'creation/add_class/success');
                }
            }
        }
    }

    public function edit_class() {
        if ($this->input->post()) {
            $this->form_validation->set_rules('class_name', 'trim|required|xss_clean');
            $this->form_validation->set_rules('new_class', 'new class', 'trim|required|xss_clean|callback_check_facility');
            if ($this->form_validation->run() === FALSE) {
                $this->add_class();
            } else {
                $class_id = $this->input->post('class_name');
                $data = array(
                    'class_name' => $this->input->post('new_class')
                );

                $flag = $this->creation_model->edit_class($data, $class_id);
                if (!$flag) {
                    $sData = array(
                        'action_status' => 2,
                        'action_message' => 'Updatr Failed !'
                    );
                    $this->session->set_userdata($sData);
                    redirect(base_url() . 'creation/add_class/failed');
                } else {
                    $sData = array(
                        'action_status' => 1,
                        'action_message' => 'Successfully Updated!'
                    );
                    $this->session->set_userdata($sData);
                    redirect(base_url() . 'creation/add_class/success');
                }
            }
        }
    }

    public function delete_class($id) {
        $flag = $this->creation_model->class_delete($id);
        if ($flag) {
            $sData = array(
                'action_status' => 2,
                'action_message' => 'Failed to  Delete!'
            );
            $this->session->set_userdata($sData);
            redirect(base_url() . 'creation/add_class/failed');
        } else {
            $sData = array(
                'action_status' => 1,
                'action_message' => 'Successfully Deleted!'
            );
            $this->session->set_userdata($sData);
            redirect(base_url() . 'creation/add_class/success');
        }
    }

    ////////////////////////////////////////////// add designation /////////////////////////

    public function add_designation() {
        $data['title'] = 'Add Designation';
        $data['designation_list'] = $this->creation_model->designation_list();
        $data['get_designation'] = $this->creation_model->get_designation();
        $this->load->view('header', $data);
        $this->load->view('sidemenu');
        $this->load->view('add_designation', $data);
        $this->load->view('footer');
    }

    public function create_designation() {

        if ($this->input->post()) {
            $this->form_validation->set_rules('designation_name', 'Designation', 'trim|required|xss_clean');
            if ($this->form_validation->run() === FALSE) {
                $this->add_designation();
            } else {
                $data = array(
                    'designation_name' => $this->input->post('designation_name')
                );

                $this->creation_model->add_designation($data);
                redirect(base_url() . 'creation/add_designation');
            }
        }
    }

    public function edit_designation() {
        if ($this->input->post()) {
            $this->form_validation->set_rules('designation_name', 'trim|required|xss_clean');
            $this->form_validation->set_rules('new_designation', 'new designation', 'trim|required|xss_clean|callback_check_facility');
            if ($this->form_validation->run() === FALSE) {
                $this->add_designation();
            } else {
                $designation_id = $this->input->post('designation_name');
                $data = array(
                    'designation_name' => $this->input->post('new_designation')
                );

                $this->creation_model->edit_designation($data, $designation_id);
                redirect(base_url() . 'creation/add_designation');
            }
        }
    }

    public function delete_designation($id) {
        $this->creation_model->designation_delete($id);
        redirect(base_url() . 'creation/add_designation');
    }

    public function get_all_subject_name_by_group($groupID) {

        $data = $this->creation_model->get_all_subject_name_group_by_group($groupID);

        $output = '<option value="">- SELECT Subject-</option>';
        foreach ($data as $sub_name) {
            $output .= '<option value="' . $sub_name['subject_id'] . '">' . $sub_name['subject_name'] . '</option>';
        }
        echo json_encode(array('output' => $output));
        exit();
    }

    public function get_mark_by_subject_wise($subId, $groupID) {
//        echo $subId .$groupID ;
//        exit();
        $data = $this->creation_model->get_mark_by_subject_wise($subId, $groupID);

        $return = array(
            'sub_mark' => $data['subject_assign_subjective_marks'],
            'ob_mark' => $data['subject_assign_objective_marks'],
            'prac_mark' => $data['practical_marks'],
            'ct' => $data['subject_assign_ct_marks'],
            'mt' => $data['subject_assign_mt_marks'],
        );
//        echo'<pre>';
//        print_r($return);
//        echo'<pre>';
//        exit();
        echo json_encode($return);
        exit();
    }

    public function get_exam_suject_name($exam, $subject) {
        
    }

}
