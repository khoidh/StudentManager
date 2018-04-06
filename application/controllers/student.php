<?php
/**
* 
*/
class Student extends CI_Controller
{
	public $_base_url = 'student';
	public $_sendEmail='chantroibinhyentk5l@gmail.com';
	public $_sendName='Đàm Huy Khởi';

	public function __construct()
	{
		parent::__construct();
		$this->load->model('student_model');
		$this->load->model('class_manager_model');

      	$this->load->library('form_validation');
      	$this->load->library('session');
      	$this->load->helper('url');

      	//Thư viện gửi mail
        //$this->load->library('email');
	}


	public function index(){

        $total=$this->student_model->get_total();
        $this->data['total']=$total;

        //Load class list from DB
        $this->data['class'] = $this->class_manager_model->get_all();

        $this->data['page'] ='student/index';
        $this->data['result'] =  $this->student_model->get_all();
        $this->load->view('admin/master',$this->data);
	}

	//Delete student by id
	public function delete($id){
		$this->student_model->delete($id);
		redirect(base_url($this->_base_url));
	}

	public function edit($id)
	{
        $input = $this->input->post();
        if($input)
        {
            $this->upload($input);

            $this->student_model->update($input);
            redirect(base_url($this->_base_url));
            return;
        }

        $this->data['result'] = $this->student_model->get_student_ID($id);

        //Load class list from DB
        $this->data['class'] = $this->class_manager_model->get_all();

        $this->data['page'] ='student/edit';
        $this->load->view('admin/master',$this->data);
	}

	/**
    * add Data from this method.
    *
    * @return Response
	*/
	public function add()
	{
        $input = $this->input->post();
	    if($input)
        {
            $this->upload($input);
            $this->student_model->insert($input);
            redirect(base_url($this->_base_url));
            return;
        }
		//Load class list from DB
		$this->data['class'] = $this->class_manager_model->get_all();
        $this->data['page'] ='student/add';
        $this->load->view('admin/master',$this->data);

	}

	//Upload images
	public function upload(&$data)
	{
	      if (!empty($_FILES['image']['name']))
	      {
              $config['upload_path'] = 'upload/images';
              $config['allowed_types'] = 'jpg|jpeg|png|gif';
              $config['file_name'] = $_FILES['image']['name'];

              $this->load->library('upload', $config);
              $this->upload->initialize($config);

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

	public function sendMail($id)
    {
        $input = $this->input->post();
        if($input)
        {
            $this->send($input);
            redirect(base_url($this->_base_url));
            return;
        }
        $data = $this->student_model->get_student_ID($id);
        $this->data['id'] =  $id;
        $this->data['mail'] =  $data->mail;
        $this->data['page'] ='student/sendMail';
        $this->load->view('admin/master',$this->data);
    }

    public function send($data)
    {
        $config = array(
            "protocol" => "smtp",
            "smtp_host" => "ssl://smtp.googlemail.com",
            "smtp_port" => 465,
            "smtp_user" => "chantroibinhyentk5l@gmail.com",
            "smtp_pass" => "Khoidh070187utehy",
        );

        $this->load->library("email", $config);
        $this->email->set_newline("\r\n");
        $this->email->from("chantroibinyentk5l@gmail.com", "Mr.test");
        $this->email->to($data["mail"]);
        $this->email->subject($data["subject"]);
        $this->email->message($data["message"]);

        if(!$this->email->send())
            show_error($this->email->print_debugger());
    }

    public function send11($data)
    {
        $this->load->library('email');
        // Cấu hình
        $config['protocol'] = 'sendmail';
        $config['charset'] = 'utf-8';
        $config['mailtype'] = 'html';
        $config['wordwrap'] = TRUE;
        $this->email->initialize($config);

        //cau hinh email va ten nguoi gui
        $this->email->from($this->_sendMail, $this._sendName);
        //cau hinh nguoi nhan
        $this->email->to($data->email);

        $this->email->subject($data->subject);
        $this->email->message($data->message);

        //dinh kem file
        if(!empty($data->attach) )
            $this->email->attach($data->attach);
        //thuc hien gui
        if ( ! $this->email->send())
        {
            // Generate error
            //echo $this->email->print_debugger();
            return false;
        }else{
//            echo 'Gửi email thành công';
            return true;
        }
    }


    public function index1()
    {

        $filter = $this->input->post('filter');
        $field  = $this->input->post('field');
        $search = $this->input->post('search');

        if (isset($filter) && isset($field) && !empty($search)) {
           // $this->load->model('student_model');
            var_dump($field);
            die;
            $this->data['result'] = $this->student_model->getStudentsWhereLike($field, $search);
        } else {
            //$this->load->model('student_model');
            $this->data['result'] = $this->student_model->get_all();
        }

        $this->data['module']    = 'admin';
        $this->data['view_file'] = 'students/view';
        //Load class list from DB
        $this->data['class'] = $this->class_manager_model->get_all();
        $this->data['total']=$this->student_model->get_total();;
        $this->data['page'] ='student/index';

//
//        $this->load->module('templates');
//        $this->templates->admin($data);
        $this->load->view('admin/master',$this->data);

    }
}
?>


