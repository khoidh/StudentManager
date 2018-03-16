<?php
	class Point_model extends CI_Model
	{
		
		public function __construct()
		{
			parent::__construct();
			$this->load->database();
		}

		/**
		 * get points 
		 *
		 * @param
	 	 * @param
		 * @return	array_object points
		 */
		public function get_all(){
			// SELECT DISTINCT POINT.id, fullname, student_id, subject_id, point_type_id, subject.name AS subject_name, point_type.name AS point_type_name, point.point
			// FROM POINT 
			// INNER JOIN student ON student.id = point.student_id 
			// INNER JOIN SUBJECT ON subject.id = point.subject_id 			
			// INNER JOIN point_type ON point_type.id = point.`point_type_id` 
			// WHERE point.delete_flag = 0
			$this->db->distinct();
			$this->db->select('point.id,fullname, student_id, subject_id, point_type_id, subject.name AS subject_name, point_type.name AS point_type_name, point.point');
			$this->db->from('point');
			$this->db->join('student', 'student.id = point.student_id');
			$this->db->join('subject', 'subject.id = point.subject_id');
			$this->db->join('point_type', 'point_type.id = point.point_type_id');
			$this->db->where(array('point.delete_flag' => 0));

			$query = $this->db->get();
			return $query->result();
		}

		public function get_point_type(){
			$query = $this->db->get('point_type');  // Produces: SELECT * FROM point_type
			$table= $query->result();			
			return $table;
		}

		public function delete($id) {
			// gives UPDATE point SET delete_flag = 1 WHERE id = $id
			$this->db->set('delete_flag', '1', FALSE);
			$this->db->where('id', $id);
			$delete = $this->db->update('point'); 

	        return $delete?true:false;
		}


		//Load info point by $id
		public function get_point_ID($id){

			// SELECT DISTINCT point.id, fullname, student_id, subject_id, point_type_id, subject.name AS subject_name, point_type.name AS point_type_name, point.point
			// FROM point
			// INNER JOIN student ON student.id = point.student_id 
			// INNER JOIN SUBJECT ON subject.id = point.subject_id 			
			// INNER JOIN point_type ON point_type.id = point.`point_type_id` 
			// WHERE point.delete_flag = 0, point.id = $id
			$this->db->distinct();
			$this->db->select('point.id,fullname, student_id, subject_id, point_type_id, subject.name AS subject_name, point_type.name AS point_type_name, point.point');
			$this->db->from('point');
			$this->db->join('student', 'student.id = point.student_id');
			$this->db->join('subject', 'subject.id = point.subject_id');
			$this->db->join('point_type', 'point_type.id = point.point_type_id');
			$this->db->where(array('point.delete_flag' => 0,'point.id' => $id));


			// //SELECT point.* ,fullname,className FROM 'point' INNER JOIN 'class' ON point.class_id = class.id 
			// //		WHERE point.id = $id AND point.delete_flag = 0 AND class.delete_flag = 0
			// $this->db->select('point.*, point.fullname, class.name as className');
			// $this->db->from('point');
			// $this->db->join('class', 'point.class_id = class.id');
			// $this->db->where(array('point.id' => $id,'point.delete_flag' => 0,'class.delete_flag' => 0)); 
			// $where = "name='Joe' AND status='boss' OR status='active'";
			// $this->db->where($where);
			// $query = $this->db->get();
			$query = $this->db->get();
			$row = $query->row(0);
			return $row;
		}

		public function update($data){
			$this->db->where('id',$data['id']);
	        return $this->db->update('point',$data);;
		}		

		 /*
	     * Insert point
	     */
	    public function insert($data )
	    {    	        
	        return $this->db->insert('point', $data);
	    }
	}
?>