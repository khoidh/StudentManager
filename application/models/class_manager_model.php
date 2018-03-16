<?php
	class class_manager_model extends CI_Model
	{
		
		public function __construct()
		{
			parent::__construct();
			$this->load->database();
		}

		public function get_all(){
			//$query = $this->db->query("Select * from class where delete_flag = '0'");
			$query = $this->db->get_where('class', array('delete_flag' => 0));

			$table= $query->result();		
			return $table;
		}
		
		/**

		**/
		public function get_class_ID($id){
			//$query = $this->db->query("Select * from class where id = '$id' and delete_flag = '0'");
			$query = $this->db->get_where('class', array('id' => $id,'delete_flag' => 0)); 
			$row = $query->row();
			return $row;
		}

		public function delete($class_id){	

			//Delete subject of class ($class_id)
			$this->db->set('delete_flag', '1', FALSE);
			$this->db->where('class_id', $class_id);
			$delete1 = $this->db->update('class_subject'); // gives UPDATE student SET delete_flag = 1 WHERE class_id = $class_id

			//delete student by class_id
			$this->db->set('delete_flag', '1', FALSE);
			$this->db->where('class_id', $class_id);
			$delete1 = $this->db->update('student'); // gives UPDATE student SET delete_flag = 1 WHERE class_id = $class_id

			//delete class by class_id
			$this->db->set('delete_flag', '1', FALSE);
			$this->db->where('id', $class_id);
			$delete2 = $this->db->update('class'); // gives UPDATE class SET delete_flag = 1 WHERE id = $id

			return ( $delete and $delete2 )?true:false;
		}

		public function update($data){
			$this->db->where('id',$data['id']);
	        return $this->db->update('class',$data);;
		}

		 /*
	     * Insert class
	     */
	    public function insert($data )
	    {    	        
	        return $this->db->insert('class', $data);
	    }

	}
?>



