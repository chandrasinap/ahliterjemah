<?php 

class Tag extends CI_Model {

	public function __construct() {
		parent::__construct();
	}

	public function getTagNameById($id){
        
        return $this->db->select('tag_name')
        ->from('tag')
        ->where('tag_id', $id)
        ->get()
        ->result()[0]->tag_name;
        
    }
    
}

?>