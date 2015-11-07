<?php

class Creation_model extends CI_Model {

    public function add_school_name($data) {
        if ($this->db->insert('create_school', $data)) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function optional_list() {
        $query = $this->db->query("SELECT * FROM  `subject` WHERE is_optional = 0 ");
        return $query->result();
    }

    public function __construct() {
        parent::__construct();
    }

    public function add_group($data) {
        $insert_group = $this->db->insert('group', $data);

        if ($insert_group) {
            return true;
        } else {
            return false;
        }
    }

    public function get_group() {
        $this->db->select('*');
        $query = $this->db->get('group');
        if ($query) {
            return $query->result();
        } else {
            return false;
        }
    }

    public function edit_group($data, $group_id) {
        $this->db->where('group_id', $group_id);
        if ($this->db->update('group', $data)) {
            return true;
        } else {
            return false;
        }
    }

    public function group_list() {
        $this->db->select('*');
        $query = $this->db->get('group');
        if ($query) {
            return $query->result();
        } else {
            return false;
        }
    }

    public function group_delete($id) {
        $this->db->where('group_id', $id);
        $this->db->delete('group');
    }

////////////////////////////////////////////// add shift /////////////////////////

    public function add_shift($data) {
        $insert_shift = $this->db->insert('shift', $data);

        if ($insert_shift) {
            return true;
        } else {
            return false;
        }
    }
	
	public function get_shift() {
        $this->db->select('*');
        $query = $this->db->get('shift');
        if ($query) {
            return $query->result();
        } else {
            return false;
        }
    }

    public function edit_shift($data, $shift_id) {
        $this->db->where('shift_id', $shift_id);
        if ($this->db->update('shift', $data)) {
            return true;
        } else {
            return false;
        }
    }

    public function shift_list() {
        $this->db->select('*');
        $query = $this->db->get('shift');
        if ($query) {
            return $query->result();
        } else {
            return false;
        }
    }

    public function shift_delete($id) {
        $this->db->where('shift_id', $id);
        $this->db->delete('shift');
    }
	
	
	////////////////////////////////////////////// add Version /////////////////////////

    public function add_version($data) {
        $insert_version = $this->db->insert('version', $data);

        if ($insert_version) {
            return true;
        } else {
            return false;
        }
    }
	
	public function get_version() {
        $this->db->select('*');
        $query = $this->db->get('version');
        if ($query) {
            return $query->result();
        } else {
            return false;
        }
    }

    public function edit_version($data, $version_id) {
        $this->db->where('version_id', $version_id);
        if ($this->db->update('version', $data)) {
            return true;
        } else {
            return false;
        }
    }

    public function version_list() {
        $this->db->select('*');
        $query = $this->db->get('version');
        if ($query) {
            return $query->result();
        } else {
            return false;
        }
    }

    public function version_delete($id) {
        $this->db->where('version_id', $id);
        $this->db->delete('version');
    }
	
	
////////////////////////////////////////////////////////add_exam ///////////////////////////////////////////////////////////////////////

    public function add_exam($data) {
        $insert_exam = $this->db->insert('exam', $data);

        if ($insert_exam) {
            return true;
        } else {
            return false;
        }
    }

    public function get_exam() {
        $this->db->select('*');
        $query = $this->db->get('exam');
        if ($query) {
            return $query->result();
        } else {
            return false;
        }
    }

    public function edit_exam($data, $exam_id) {
        $this->db->where('exam_id', $exam_id);
        if ($this->db->update('exam', $data)) {
            return true;
        } else {
            return false;
        }
    }

    public function exam_list() {
        $this->db->select('*');
        $query = $this->db->get('exam');
        if ($query) {
            return $query->result();
        } else {
            return false;
        }
    }

    public function exam_delete($id) {
        $this->db->where('exam_id', $id);
        $this->db->delete('exam');
    }
	
	////////////////////////////////////////////// add_subject /////////////////////////

    public function add_subject($data) {
        $insert_subject = $this->db->insert('subject', $data);

        if ($insert_subject) {
            return true;
        } else {
            return false;
        }
    }

    public function get_subject() {
        $this->db->select('*');
        $query = $this->db->get('subject');
        if ($query) {
            return $query->result();
        } else {
            return false;
        }
    }

    public function edit_subject($data, $subject_id) {
        $this->db->where('subject_id', $subject_id);
        if ($this->db->update('subject', $data)) {
            return true;
        } else {
            return false;
        }
    }

    public function subject_list() {
        $this->db->select('*');
        $query = $this->db->get('subject');
        if ($query) {
            return $query->result();
        } else {
            return false;
        }
    }

    public function subject_delete($id) {
        $this->db->where('subject_id', $id);
        $this->db->delete('subject');
    }

    

////////////////////////////////////////////// add section /////////////////////////

    public function add_section($data) {
        $insert_section = $this->db->insert('section', $data);

        if ($insert_section) {
            return true;
        } else {
            return false;
        }
    }

    public function get_section() {
        $this->db->select('*');
        $query = $this->db->get('section');
        if ($query) {
            return $query->result();
        } else {
            return false;
        }
    }

    public function edit_section($data, $section_id) {
        $this->db->where('section_id', $section_id);
        if ($this->db->update('section', $data)) {
            return true;
        } else {
            return false;
        }
    }

    public function section_list() {
        $this->db->select('*');
        $query = $this->db->get('section');
        if ($query) {
            return $query->result();
        } else {
            return false;
        }
    }

    public function section_delete($id) {
        $this->db->where('section_id', $id);
        $this->db->delete('section');
    }
	
	////////////////////////////////////////////// add hostel /////////////////////////

    public function add_hostel($data) {
        $insert_hostel = $this->db->insert('hostel', $data);

        if ($insert_hostel) {
            return true;
        } else {
            return false;
        }
    }

    public function get_hostel() {
        $this->db->select('*');
        $query = $this->db->get('hostel');
        if ($query) {
            return $query->result();
        } else {
            return false;
        }
    }

    public function edit_hostel($data, $hostel_id) {
        $this->db->where('hostel_id', $hostel_id);
        if ($this->db->update('hostel', $data)) {
            return true;
        } else {
            return false;
        }
    }

    public function hostel_list() {
        $this->db->select('*');
        $query = $this->db->get('hostel');
        if ($query) {
            return $query->result();
        } else {
            return false;
        }
    }

    public function hostel_delete($id) {
        $this->db->where('hostel_id', $id);
        $this->db->delete('hostel');
    }

////////////////////////////////////////////// add Class /////////////////////////

    public function add_class($data) {
        $insert_class = $this->db->insert('class', $data);

        if ($insert_class) {
            return true;
        } else {
            return false;
        }
    }

    public function get_the_class() {
        $this->db->select('*');
        $query = $this->db->get('class');
        if ($query) {
            return $query->result();
        } else {
            return false;
        }
    }

    public function edit_class($data, $class_id) {
        $this->db->where('class_id', $class_id);
        if ($this->db->update('class', $data)) {
            return true;
        } else {
            return false;
        }
    }

    public function class_list() {
        $this->db->select('*');
        $query = $this->db->get('class');
        if ($query) {
            return $query->result();
        } else {
            return false;
        }
    }

    public function class_delete($id) {
        $this->db->where('class_id', $id);
        $this->db->delete('class');
    }

////////////////////////////////////////////// add designation /////////////////////////

    public function add_designation($data) {
        $insert_designation = $this->db->insert('designation', $data);

        if ($insert_designation) {
            return true;
        } else {
            return false;
        }
    }

    public function get_designation() {
        $this->db->select('*');
        $query = $this->db->get('designation');
        if ($query) {
            return $query->result();
        } else {
            return false;
        }
    }

    public function edit_designation($data, $designation_id) {
        $this->db->where('designation_id', $designation_id);
        if ($this->db->update('designation', $data)) {
            return true;
        } else {
            return false;
        }
    }

    public function designation_list() {
        $this->db->select('*');
        $query = $this->db->get('designation');
        if ($query) {
            return $query->result();
        } else {
            return false;
        }
    }

    public function designation_delete($id) {
        $this->db->where('designation_id', $id);
        $this->db->delete('designation');
    }

    public function insert_data($data) {
        if ($this->db->insert_batch('result', $data)) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function get_all_subject_name_group_by_group($groupID) {
        $this->db->select('*');
        $this->db->where('subject.group_id', $groupID);
        $query = $this->db->get('subject');
        if ($query) {
            return $query->result_array();
        } else {
            return false;
        }
    }

    public function get_mark_by_subject_wise($subId, $groupID) {
        $this->db->where('subject.group_id', $groupID);
        $this->db->where('subject.subject_id', $subId);
        $query = $this->db->get('subject');
        if ($query) {
            return $query->row_array();
        } else {
            return false;
        }
    }

    public function get_exam__name($exam) {
        $this->db->where('exam.exam_id', $exam);
        $query = $this->db->get('exam');
        if ($query) {
            return $query->row_array();
        } else {
            return false;
        }
    }

    public function get_subject__name($subject) {
        $this->db->where('subject.subject_id', $subject);
        $query = $this->db->get('subject');
        if ($query) {
            return $query->row_array();
        } else {
            return false;
        }
    }


}
