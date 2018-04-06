
<?php

/**
* 
*/
class ClassManager extends CI_Controller
{
	public $_base_url = 'classManager/';
	public function __construct()
	{
		parent::__construct();
		$this->load->model('class_manager_model');
	    $this->load->helper('url');
	}

	public function index(){
    	$this->data = array();
        $this->data['page'] ='class/index';
        $this->data['result'] =  $this->class_manager_model->get_all();

        $total=$this->class_manager_model->get_total();
        $this->data['total']=$total;

        $this->load->view('admin/master',$this->data);
	}

	public function delete($id){
		$this->class_manager_model->delete($id);
		redirect(base_url($this->_base_url));
	}	

	/**
    * edit Data from this method. load data và gọi view edit
    *
    * @return Response
	*/
   public function edit($id)
	{
		$this->data = array();
        $this->data['page'] ='class/edit';
        $this->data['result'] = $this->class_manager_model->get_class_ID($id);
        $this->load->view('admin/master',$this->data);
	}

   public function update($id)
	{
		$input = $this->input->post();
		$data1 = $this->class_manager_model->update($input);
		redirect(base_url($this->_base_url));       
	}

	/**
    * add Data from this method.
    *
    * @return Response
	*/
	public function add()
	{
        $this->data['page'] ='class/add';
        $this->load->view('admin/master',$this->data);
	}

	public function add_class()
	{
		$input = $this->input->post();
		$this->class_manager_model->insert($input);
		redirect(base_url($this->_base_url));
	}

}