<?php
	class Subject_model extends CI_Model
	{
		
		public function __construct()
		{
			parent::__construct();
			$this->load->database();
		}

		public function get_all(){
			// SELECT * FROM subject WHERE  'delete_flag' = 0
			$query = $this->db->get_where('subject', array('delete_flag' => 0)); 
			return $query->result();
		}
        /**
         * Lay tong so
         */
        function get_total($input = array())
        {
            // SELECT * FROM subject WHERE  'delete_flag' = 0
            $query = $this->db->get_where('subject', array('delete_flag' => 0));

            return $query->num_rows();
        }

		/**
		 * delete Subject by id_Subject
		 *
		 * @param 	int 	$id 	id_Subject wants to delete
	 	 * @param
		 * @return	bool 	true: success
		 */
		public function delete($id)
		{
			//Delete point of student of subject in point table
			$this->db->set('delete_flag', '1', FALSE);
			$this->db->where('id', $id);
			$delete = $this->db->update('point'); 		

			//Delete subject class_subject table
			$this->db->set('delete_flag', '1', FALSE);
			$this->db->where('id', $id);
			$delete = $this->db->update('class_subject'); 			

			// gives UPDATE subject SET delete_flag = 1 WHERE id = $id
			$this->db->set('delete_flag', '1', FALSE);
			$this->db->where('id', $id);
			$delete = $this->db->update('subject'); 

	        return $delete?true:false;
		}


		//Load info subject by $id
		public function get_subject_ID($id){

			// SELECT * FROM subject WHERE  'delete_flag' = 0 AND id=$id
			$query = $this->db->get_where('subject', array('id' => $id,'delete_flag' => 0)); 
			$row = $query->row(0);
			return $row;
		}
		public function update($data){
			$this->db->where('id',$data['id']);
	        return $this->db->update('subject',$data);;
		}		

		 /*
	     * Insert subject
	     */
	    public function insert($data )
	    {    	        
	        return $this->db->insert('subject', $data);
	    }
	}
?>