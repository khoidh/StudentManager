<?php
/*
* 
*/
class Point extends CI_Controller
{
	public $_base_url = 'point/';
	public function __construct()
	{
		parent::__construct();
		$this->load->model('point_model');
		$this->load->model('student_model');
		$this->load->model('subject_model');
		$this->load->model('point_type_model');

      	$this->load->library('form_validation');
      	$this->load->library('session');
      	$this->load->helper('url');
	}

        public function index(){
        $this->data['result'] = $this->point_model->get_all();
        $this->data['point_type'] = $this->point_model->get_point_type();

        $total=$this->point_model->get_total();
        $this->data['total']=$total;

        $this->data['page'] ='point/index';
        $this->load->view('admin/master',$this->data);
	}

	//Delete point by id
	public function delete($id){
		$this->point_model->delete($id);
		redirect(base_url($this->_base_url));
	}

	/*
    * edit Data from this method. load data và gọi view edit
    *
    * @return Response
	*/
	public function edit($id)
	{
		$this->data['result'] = $this->point_model->get_point_ID($id);

		//Load student list from DB
		$this->data['student'] = $this->student_model->get_all();
		//Load subject list from DB
		$this->data['subject'] = $this->subject_model->get_all();
		//Load point_type list from DB
		$this->data['point_type'] = $this->point_type_model->get_all();

		// $this->load->view('point/edit', $data);
		$this->data['page'] ='point/edit';
        $this->load->view('admin/master',$this->data);
	}
	public function update($id)
	{
		$input = $this->input->post();
		$data1 = $this->point_model->update($input);
		redirect(base_url($this->_base_url));       
	}

	/*
    * add Data from this method.
    *
    * @return Response
	*/
	public function add()
	{
		//Load point list from DB
		$this->data['student'] = $this->student_model->get_all();
		//Load subject list from DB
		$this->data['subject'] = $this->subject_model->get_all();
		//Load point_type list from DB
		$this->data['point_type'] = $this->point_type_model->get_all();

   		// $this->load->view('point/add',$data);
        $this->data['page'] ='point/add';
        $this->load->view('admin/master',$this->data);
	}

	public function add_point()
	{
		$input = $this->input->post();
		$this->point_model->insert($input);
		redirect(base_url($this->_base_url));
	}
}
?>