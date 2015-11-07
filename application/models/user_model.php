<?php

class User_model extends CI_Model {

   public function add_user($data) {
      $result = $this->db->insert("user", $data);
      if ($result) {
         return true;
      } else {
         return false;
      }
   }

   public function add_employee($data) {
      $result = $this->db->insert("employee", $data);
      if ($result) {
         return true;
      } else {
         return false;
      }
   }

   public function user_list() {
      $query = $this->db->query("SELECT * FROM user");
      return $query->result();
   }

   public function user_check($name) {
      $query = $this->db->query("SELECT * FROM user WHERE user_name='" . $name . "' ");
      return $query->result();
   }

   public function edit_user_list($id) {
      $query = $this->db->query("SELECT * FROM user WHERE user_id=$id ");
      return $query->result();
   }

   public function update_user($user_id, $data) {
      $this->db->where('user_id', $user_id);
      if ($this->db->update('user', $data))
         return true;
      else
         return false;
   }

}

?>