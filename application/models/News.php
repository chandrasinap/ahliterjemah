<?php 

class News extends CI_Model {

	public function __construct() {
		parent::__construct();
	}

	public function listNews($limit, $offset){
		$this->db->select('*')
		->from('news')
		->limit($limit)
		->offset($offset)
		->where_not_in('news_level', '9')
		->order_by('news_datacreate', 'DESC');
		
		$q = $this->db->get();
		
		return $q->result();
	}
	
	public function listNewsRestore(){
		$this->db->select('*')
		->from('news')
		->where('news_level', '9')
		->order_by('news_datacreate', 'DESC');
		
		$q = $this->db->get();
		
		return $q->result();
	}
	
	public function countNews(){
		$this->db->select('*')
		->from('news')
		->where_not_in('news_level', '9');
		
		return $this->db->count_all_results();
	}

	public function insertNews($data) {
		$this->db->insert('news', $data);
	}

	public function listTag(){
		$this->db->select('*');
		$this->db->from('tag');

		$q = $this->db->get();

		return $q->result();
	}

	public function insertTag($tag) {
		$this->db->insert('tag', ['tag_name' => $tag]);
		$insert_id = $this->db->insert_id();

		return $insert_id;
	}

	public function editNews($id) {
		$this->db->select('*');
		$this->db->from('news');
		$this->db->where('news_id', $id);

		$q = $this->db->get();

		return $q->result()[0];
	}

	public function updateNews($id, $data) {
		$this->db->where('news_id', $id);
		$action = $this->db->update('news', $data);

		return $action;
	}

	public function deleteNews($id) {
		return $this->db->where('news_id', $id)
				->update('news', ['news_level' => '9']);
		
	}
	
	public function restoreNews($id) {
		return $this->db->where('news_id', $id)
				->update('news', ['news_level' => '1']);
		
	}
	
	public function deleteForever ($id) {
		return $this->db->where('news_id', $id)
				->delete('news');
	}
	
	public function getNewsById ($id) {
		
		return $this->db->select('*')
		->from('news')
		->where('news_id', $id)
		->get()
		->result()[0];
		
	}

}