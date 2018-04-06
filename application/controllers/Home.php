<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Home extends MY_Controller {
    function __construct() {
        parent::__construct();

        $this->load->model('student_model');
        $this->load->model('class_manager_model');
        $this->load->model('subject_model');
        $this->load->model('point_model');

        $this->load->library('form_validation');
        $this->load->library('session');
        $this->load->helper('url');
    }
    public function index() {

        $this->data = array();
        $this->data['page'] ='admin/home'; 
        //$this->data['data'] =
        $this->load->view('admin/master',$this->data);
    }
}