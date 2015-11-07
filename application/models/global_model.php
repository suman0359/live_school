<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Global_Model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function get_image_path($tbl_name, $pKey, $path_field, $id) {
        $this->db->where($pKey, $id);
        $this->db->from($tbl_name);
        $this->db->select($path_field);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->row()->$path_field;
        } else {
            return FALSE;
        }
    }

}
