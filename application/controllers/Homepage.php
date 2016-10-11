<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Homepage extends CI_Controller {

	public function __construct() {
        parent::__construct();
		
		$this->load->helper(['url']);
		$this->load->model(['news']);
		
	}

	public function index()
	{
		$detail='';
		foreach($this->news->listNews(3, 0) as $k => $v) {
			
			$v->date = date('d', strtotime($v->news_datepublish));
			$v->month = date('M', strtotime($v->news_datepublish));
			$v->date_full = date('F d, Y', strtotime($v->news_datepublish));
			$v->href = base_url().'article/'.$v->news_id.'-'.str_replace(' ', '-', strtolower($v->news_title)).'.html';
			$v->img = base_url().'assets/news_image/300x200-'.$v->news_image_thumbnail;
			
			$detail .= $this->load->view('homepage/box_detail', $v, true);
			
		}
		
		$dt['meta_title'] = 'AHLI TERJEMAH : Jasa translate bahasa';
		$dt['meta_desc'] = 'Jasa translate bahasa';
		$dt['meta_keyw'] = 'Jasa, translate, bahasa';
		$dt['header'] = '';//$this->load->view('header/_container', ['url_dtl' => ''], true);
		$dt['content'] = $this->load->view('homepage/_container', ['detail' => $detail], true);
		
		$this->load->view('templates/main', $dt);
	}
	
}