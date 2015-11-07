<?php

class Manage_student_model extends CI_Model {

    public function add_student($data) {
        $result = $this->db->insert("student", $data);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    public function student_list($school_code) {
        $this->db->where('student.school_code', $school_code);
        $query = $this->db->get('student');
        if ($query->num_rows() > 0) {
            return $query->result();
        } else
            return false;
    }

    public function student_check($name) {
        $query = $this->db->query("SELECT * FROM student WHERE first_Name='" . $name . "' ");
        return $query->result();
    }

    public function edit_student_list($id) {
        $query = $this->db->query("SELECT * FROM student WHERE student_id=$id ");
        return $query->result();
    }

    public function update_student($student_id, $data) {
        $this->db->where('student_id', $student_id);
        if ($this->db->update('student', $data))
            return true;
        else
            return false;
    }

    public function check_student_unique_code($school_code, $unique_code) {
        $this->db->where('student.school_code', $school_code);
        $this->db->where('student.unique_code', $unique_code);
        $query = $this->db->get('student');
        if ($query->num_rows() > 0) {
            return true;
        } else
            return false;
    }

    public function check_student_position($class_position, $stu_class, $school_code) {
        $this->db->where('student.school_code', $school_code);
        $this->db->where('student.class_position', $class_position);
        $this->db->where('student.student_class', $stu_class);
        $query = $this->db->get('student');
        if ($query->num_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function get_single_student($id) {
        $this->db->where('student.student_id', $id);
        $query = $this->db->get('student');
        if ($query) {
            return $query->result();
        } else {
            return false;
        }
    }

}

?>