<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Detail extends CI_Controller {

	public function __construct() {
        parent::__construct();
		
		$this->load->helper(['url']);
		$this->load->model(['news', 'tag']);
		
	}

	public function index($url='')
	{
		$row = $this->news->getNewsById(explode('-', $url)[0]);
		
		$tag = $item = '';
		if($row->news_tag != '[]') {
			
			foreach(json_decode($row->news_tag) as $k => $v)
				$item .= '<a class="item-tag">'.ucwords($this->tag->getTagNameById($v)).', </a>';
			
			$tag = $this->load->view('detail/tag_related', ['item' => $item], true);
		}
			
		
		$data['title'] = ucwords($row->news_title);
		$data['synopsis'] = $row->news_synopsis;
		$data['content'] = $row->news_content;
		$data['date'] = date('d/m/Y', strtotime($row->news_datepublish));
		$data['tag_related'] = $tag;
		$data['img'] = base_url().'assets/news_image/970x400-'.$row->news_image_headline;
		
		$dt['meta_title'] = ucwords($row->news_title).' | ahliterjemah.com';
		$dt['meta_desc'] = 'Jasa translate bahasa';
		$dt['meta_keyw'] = str_replace(' ', ', ', strtolower($row->news_title)).', Jasa, translate, bahasa';
		$dt['header'] = $this->load->view('header/_container', ['url_dtl' => '/'], true);
		$dt['content'] = $this->load->view('detail/_container', $data, true);
		
		$this->load->view('templates/main', $dt);
		
	}
	
}