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
    // public function showStudent()
    // {
    // 	$this->data = array();
    //     $this->data['page'] ='student/index'; 
    //     $this->data['result'] =  $this->student_model->get_all(); 
    //     $this->load->view('admin/master',$this->data);
    // }
    // public function showClass()
    // {
    // 	$this->data = array();
    //     $this->data['page'] ='class/index';
    //     $this->data['result'] =  $this->class_manager_model->get_all();
    //     $this->load->view('admin/master',$this->data);
    // }
    // public function showSubject()
    // {
    // 	$this->data = array();
    //     $this->data['page'] ='subject/index';
    //     $this->data['result'] = $this->subject_model->get_all();
    //     $this->load->view('admin/master',$this->data);
    // }
    // public function showPoint()
    // {
    // 	$this->data = array();
    //     $this->data['page'] ='point/index';
    //     $this->data['result'] = $this->point_model->get_all();
    //     $this->data['point_type'] = $this->point_model->get_point_type();
    //     $this->load->view('admin/master',$this->data);
    // }

}