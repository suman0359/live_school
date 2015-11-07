<?php

if (!defined('BASEPATH'))
   exit('No direct script access allowed');

class Dashboard extends CI_Controller {

   public function __construct() {
      parent::__construct();
      if ($this->session->userdata('check')) {
         
      } else {
         redirect(base_url() . 'login');
      }
   }

   public function index() {
      $data['title'] = 'Dashboard';
      $this->load->view('header', $data);
      $this->load->view('sidemenu');
      $this->load->view('dashboard', $data);
      $this->load->view('footer');
   }

}
