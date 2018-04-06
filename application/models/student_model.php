<?php
	class Student_model extends CI_Model
	{
        var $table='student';
        public function __construct()
		{
			parent::__construct();
			$this->load->database();
		}

		/**
		 * get students 
		 *
		 * @param
	 	 * @param
		 * @return	array_object students
		 */
		public function get_all(){
			// gives UPDATE student SET delete_flag = 1 WHERE id = $id
			$this->db->select('student.id, student.fullname, student.mail, student.address, student.image, student.class_id, class.name as className');
			$this->db->from('student');
			$this->db->join('class', 'student.class_id = class.id');
			$this->db->where(array('student.delete_flag' => 0,'class.delete_flag' => 0));

			$query = $this->db->get();
			return $query->result();
		}

		public function delete($id) {
			// gives UPDATE student SET delete_flag = 1 WHERE id = $id
			$this->db->set('delete_flag', '1', FALSE);
			$this->db->where('id', $id);
			$delete = $this->db->update('student'); 

	        return $delete?true:false;
		}

        /**
         * Lay tong so
         */
        function get_total($input = array())
        {
            //$this->get_list_set_input($input);
            $this->db->select('student.id, student.fullname, student.mail, student.address, student.image, student.class_id, class.name as className');
            $this->db->from($this->table);
            $this->db->join('class', 'student.class_id = class.id');
            $this->db->where(array('student.delete_flag' => 0,'class.delete_flag' => 0));

            $query = $this->db->get();

            return $query->num_rows();
        }

		//Load info student by $id
		public function get_student_ID($id){

			//SELECT student.* ,fullname,className FROM 'student' INNER JOIN 'class' ON student.class_id = class.id 
			//		WHERE student.id = $id AND student.delete_flag = 0 AND class.delete_flag = 0
			$this->db->select('student.*, student.fullname, class.name as className');
			$this->db->from('student');
			$this->db->join('class', 'student.class_id = class.id');
			$this->db->where(array('student.id' => $id,'student.delete_flag' => 0,'class.delete_flag' => 0)); 
			// $where = "name='Joe' AND status='boss' OR status='active'";
			// $this->db->where($where);
			// $query = $this->db->get();
			$query = $this->db->get();
			$row = $query->row(0);
			return $row;
		}

		public function update($data){
			$this->db->where('id',$data['id']);
	        return $this->db->update('student',$data);;
		}		

		 /*
	     * Insert student
	     */
	    public function insert($data )
	    {    	        
	        return $this->db->insert('student', $data);
	    }

        public function getStudentsWhereLike($field, $search)
        {

//            $sql = 'SELECT * FROM $this->table
//            WHERE $field LIKE '%$search%'
//            ORDER BY `students`.`registered_at`
//        ';
//            $query = $this->db->query($sql);
//            return $query->result();

            $query = $this->db->like($field, $search)->orderBy('id')->get($this->table);
            return $query->result();
        }
	}
?>