<?php
/**
* 
*/
class subject extends CI_Controller
{
	public $_base_url = 'subject';
	public function __construct()
	{
		parent::__construct();
		$this->load->model('subject_model');
		// $this->load->model('class_manager_model');

      	$this->load->library('form_validation');
      	$this->load->library('session');
      	$this->load->helper('url');
	}

	public function index(){
		$this->data = array();
        $this->data['page'] ='subject/index';
        $this->data['result'] = $this->subject_model->get_all();
        $this->load->view('admin/master',$this->data);
	}

	//Delete subject by id
	public function delete($id){
		$this->subject_model->delete($id);
		redirect(base_url($this->$_base_url));
	}

	/**
    * edit Data from this method. load data và gọi view edit
    *
    * @return Response
	*/
	public function edit($id)
	{
		$this->data['result'] = $this->subject_model->get_subject_ID($id);
		
        $this->data['page'] ='subject/edit';
        $this->load->view('admin/master',$this->data);	
	}
	public function update($id)
	{
		$input = $this->input->post();
		$data1 = $this->subject_model->update($input);
		redirect(base_url($this->_base_url));      
	}

		/**
    * add Data from this method.
    *
    * @return Response
	*/
	public function add()
	{		
        $this->data['page'] ='subject/add';
        $this->load->view('admin/master',$this->data);	
	}

	public function add_subject()
	{
		$input = $this->input->post();
		$this->subject_model->insert($input);
		redirect(base_url($this->_base_url));
	}
}
?>