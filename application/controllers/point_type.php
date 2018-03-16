
<?php

/**
* 
*/
class Point_type extends CI_Controller
{
	public $_base_url = 'point_type/index';
	public function __construct()
	{
		parent::__construct();
		$this->load->model('point_type_model');
	      $this->load->helper('url');
	}

	public function index(){
		$data1 = $this->point_type_model->get_all();
		$data['result'] = $data1;
		$this->load->view('point_type/index', $data);
	}

	public function delete($id){
		$this->point_type_model->delete($id);
		redirect($this->_base_url);  
	}	

	/**
    * edit Data from this method. load data và gọi view edit
    *
    * @return Response
	*/
   public function edit($id)
	{
		$this->data['result'] = $this->point_type_model->get_point_type_ID($id);
		// $this->load->view('point_type/edit', $data);

        $this->data['page'] ='point_type/edit';
        $this->load->view('admin/master',$this->data);		
	}

   public function update($id)
	{
		$input = $this->input->post();
		$data1 = $this->point_type_model->update($input);
		redirect($this->_base_url);        
	}

	/**
    * add Data from this method.
    *
    * @return Response
	*/
	public function add()
	{
        $this->data['page'] ='point_type/add';
        $this->load->view('admin/master',$this->data);	
	}

	public function add_point_type()
	{
		$input = $this->input->post();
		$this->point_type_model->insert($input);
		redirect($this->_base_url); 
	}

}