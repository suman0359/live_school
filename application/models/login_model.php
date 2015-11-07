<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Login_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function check_login($username, $password) {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('user_name', $username);
        $this->db->where('user_password', $password);
        $query = $this->db->get();
        if ($query->num_rows() == 1) {
            return $query->row_array();
        } else {
            return FALSE;
        }
    }

    public function get_pic_by_user_id($userID) {
        $query = $this->db->query("SELECT employee_profile_picture FROM employee WHERE employee_user_id = {$userID}");
        if ($query) {
            return $query->row('employee_profile_picture');
        } else {
            return FALSE;
        }
    }

}

?>