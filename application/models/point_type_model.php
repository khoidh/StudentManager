<?php
	class Point_type_model extends CI_Model
	{
		
		public function __construct()
		{
			parent::__construct();
			$this->load->database();
		}

		public function get_all(){
			//$query = $this->db->query("Select * from point_type where delete_flag = '0'");
			$query = $this->db->get_where('point_type', array('delete_flag' => 0));

			$table= $query->result();		
			return $table;
		}
		
		/**

		**/
		public function get_point_type_ID($id){
			//$query = $this->db->query("Select * from point_type where id = '$id' and delete_flag = '0'");
			$query = $this->db->get_where('point_type', array('id' => $id,'delete_flag' => 0)); 
			$row = $query->row();
			return $row;
		}

		public function delete($id){	

			//delete point by point_type_id
			$this->db->set('delete_flag', '1', FALSE);
			$this->db->where('point_type_id', $id);
			$delete = $this->db->update('point'); // gives UPDATE point_type SET delete_flag = 1 WHERE id = $id

			if($delete)
			{
				//delete point_type by id
				$this->db->set('delete_flag', '1', FALSE);
				$this->db->where('id', $id);
				$delete = $this->db->update('point_type'); // gives UPDATE point_type SET delete_flag = 1 WHERE id = $id
			}

			return $delete ?true:false;
		}

		public function update($data){
			$this->db->where('id',$data['id']);
	        return $this->db->update('point_type',$data);;
		}

		 /*
	     * Insert point_type
	     */
	    public function insert($data )
	    {    	        
	        return $this->db->insert('point_type', $data);
	    }

	}
?>



