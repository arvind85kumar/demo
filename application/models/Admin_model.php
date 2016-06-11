<?php
class Admin_model extends CI_Model {
 
    /**
    * Responsable for auto load the database
    * @return void
    */
    public function __construct()
    {
        $this->load->database();
    }

    public function industry_type()
    {
		return $result=$this->db->query("SELECT *FROM `industry`")->result_array();
		
    }
		public function stateList()
		{
			$state=$this->db->query("SELECT DISTINCT(state) FROM statelist")->result_array();
			return $state;
		}
		
 
	
	//show product detail.
	
    public function productShow($id)
    {  
		$this->db->select('*');
		$this->db->from('product');
	    $this->db->where('product_id', $id);
        $query = $this->db->get();
		return  $query->row();	
    }
	
	
	public function customProductShow()
	{

	$query=$this->db->query("SELECT * FROM product where  userid='".$this->session->userdata('user_id')."'");
	
	return $query->result_array(); 	
	}
	
	public function store_products($data)
	{
	$insert = $this->db->insert('product', $data);
	return $insert;
	}
	
	function update_product($product_id, $data)
	{
	$this->db->where('product_id', $product_id);
	$result=$this->db->update('product', $data);
	return $result;
	}
	
	function delete_products($id){
		$this->db->where('product_id', $id);
		$this->db->delete('product'); 
	}
}
?>	
	
