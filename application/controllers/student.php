<?php
/**
* 
*/
class Student extends CI_Controller
{
	public $_base_url = 'student';
	public function __construct()
	{
		parent::__construct();
		$this->load->model('student_model');
		$this->load->model('class_manager_model');

      	$this->load->library('form_validation');
      	$this->load->library('session');
      	$this->load->helper('url');
	}

	public function index(){
        $this->data['page'] ='student/index'; 
        $this->data['result'] =  $this->student_model->get_all(); 
        $this->load->view('admin/master',$this->data);
	}

	//Delete student by id
	public function delete($id){
		$this->student_model->delete($id);
		redirect(base_url($this->_base_url));
	}

	/**
    * edit Data from this method. load data và gọi view edit
    *
    * @return Response
	*/
	public function edit($id)
	{
		$this->data['result'] = $this->student_model->get_student_ID($id);;

		//Load class list from DB
		$this->data['class'] = $this->class_manager_model->get_all();

        $this->data['page'] ='student/edit';
        $this->load->view('admin/master',$this->data);	
	}
	public function update($id)
	{
		$input = $this->input->post();
		$this->add1($input);
		
		//var_dump($input);die;
		$this->student_model->update($input);
		redirect(base_url($this->_base_url));     
	}

	/**
    * add Data from this method.
    *
    * @return Response
	*/
	public function add()
	{
		//Load class list from DB
		$this->data['class'] = $this->class_manager_model->get_all();
        $this->data['page'] ='student/add';
        $this->load->view('admin/master',$this->data);	
	}

	public function add_student()
	{
		$input = $this->input->post();
		$this->add1($input);
		$this->student_model->insert($input);
		redirect(base_url($this->_base_url));
	}

	public function upload(&$data)
	{
		// $config['upload_path'] = base_url('upload/images/');
		$config['upload_path'] = 'upload/images';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '100';
		$config['max_width']  = '1024';
		$config['max_height']  = '768';
		$config['file_name'] = $data['image'];

		$this->load->library('upload', $config);
		$this->upload->initialize($config);
		if ( ! $this->upload->do_upload('image'))
		{
			$error = array('error' => $this->upload->display_errors());
			//$this->load->view('upload_form', $error);
		}
		else
		{
			$data = array('upload_data' => $this->upload->data());
			//$this->load->view('upload_success', $data);
		}
	}


	public function add1(&$data)
	{
	      if (!empty($_FILES['image']['name'])) 
	      {
		        $config['upload_path'] = 'upload/images';
		        $config['allowed_types'] = 'jpg|jpeg|png|gif';
		        $config['file_name'] = $_FILES['image']['name'];

		        $this->load->library('upload', $config);
		        $this->upload->initialize($config);
		       //var_dump($_FILES['image']['name']);die;

		        if ($this->upload->do_upload('image')) {
		          $uploadData = $this->upload->data();
		          $data["image"] = $uploadData['file_name'];
		        } else{
		          $data["image"] = '';
		        }
	      }else{
	       		$data["image"] = '';
	      }
	}
}
?>