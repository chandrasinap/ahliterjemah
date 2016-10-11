<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class BackendNews extends CI_Controller {



	public function __construct() {

		parent::__construct();



		$this->load->library('session');

		$this->load->helper(['form', 'url']);

		$this->load->model('news');

		$this->load->database();

		if(!$_SESSION['admin']) {

			redirect(base_url('backend/login'));

		}

	}



	public function index() {
		
		$data = [];
		
		$content = [
			
			'content' => $this->load->view('backend/dashboard', ['count' => $this->news->countNews()], true)
			
		];
		
		$this->load->view('backend/layout', $content);
		
	}



	public function debug($data) {

		echo "<pre>";

		print_r($data);

		echo "</pre>";

	}



	/**

	 * news list page

	 * @return mixed

	 */

	public function newsList($page = 1) {

		// SET LIMIT OFFEST
		$limit  = 10;
		$offset = ($page - 1) * $limit; 

		$getNews = $this->news->listNews($limit, $offset);
		$this->load->library('pagination');

		$config['base_url'] = base_url()."/backend/news_list/";
		$config['total_rows'] = $this->news->countNews(); // Count total rows in the query
		$config['full_tag_open'] = '<div class="box-footer clearfix"><ul class="pagination pagination-sm no-margin pull-right">';
		$config['full_tag_close'] = '</ul></div>';
		$config['per_page'] = $limit;
		$config['page_query_string'] = FALSE;
		$config['prev_link'] = '&lt; Prev';
		$config['prev_tag_open'] = '<li>';
		$config['prev_tag_close'] = '</li>';
		$config['next_link'] = 'Next &gt;';
		$config['next_tag_open'] = '<li>';
		$config['next_tag_close'] = '</li>';
		$config['cur_tag_open'] = '<li class="active"><a href="#">';
		$config['cur_tag_close'] = '</a></li>';
		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';
		$config['first_link'] = FALSE;
		$config['last_link'] = FALSE;


		$this->pagination->initialize($config);

		if(!empty($getNews)) {

			foreach ($getNews as $key => $value) {

				$this->db->select('*');

				$this->db->where_in('tag_id', json_decode($value->news_tag));

				$this->db->from('tag');

				$q = $this->db->get();

				if(!empty($q)) {
					$getNews[$key]->list_tag = $q->result();
				}

			}

		}



		$data = [

			'news' => $getNews,
			'pagination' => $this->pagination->create_links()

		];



		$content = [

			'content' => $this->load->view('backend/news_list', $data, true)

		];



		$this->load->view('backend/layout', $content);

	}



	/**

	 * news add page

	 * @return mixed

	 */

	public function newsAdd() {



		if(!empty($_POST)) {

			$tag = [];

			if(!empty($this->input->post('tag'))) {

				foreach ($this->input->post('tag') as $key => $value) {

					if(!is_numeric($value)) {

						$tag_id = $this->news->insertTag($value);

						$tag[] = "$tag_id";

					}

					else {

						$tag[] = $value;

					}

				}

			}

			$data = [

				'news_id'              => '',

				'news_title'           => $this->input->post('title'),

				'news_synopsis'        => $this->input->post('synopsis'),

				'news_content'         => $this->input->post('content'),

				'news_tag'             => json_encode($tag),

				'news_image_headline'  => $this->input->post('image_headline'),

				'news_image_thumbnail' => $this->input->post('image_thumbnail'),

				'news_level'           => $this->input->post('level'),

				'news_datacreate'      => date('Y-m-d H:i:s'),

				'news_datepublish'     => ($this->input->post('level') == '1' ? date('Y-m-d H:i:s') : '0000-00-00 00:00:00'),

				'news_author'          => $_SESSION['admin']->users_id,

			];



			$action = $this->news->insertNews($data);

			echo "<script>alert('Berhasil ditambahkan');</script>";

			echo "<script>window.location.href='".base_url() ."backend/news_list';</script>";

		}



		$content = [

			'content' => $this->load->view('backend/news_add', [], true)

		];



		$this->load->view('backend/layout', $content);

	}



	/**

	 * news edit page

	 * @param  integer $id news_id value

	 * @return mixed

	 */

	public function newsEdit($id = '') {



		if(!empty($_POST)) {

			$tag = [];

			if(!empty($this->input->post('tag'))) {

				foreach ($this->input->post('tag') as $key => $value) {

					if(!is_numeric($value)) {

						$tag_id = $this->news->insertTag($value);

						$tag[] = "$tag_id";

					}

					else {

						$tag[] = $value;

					}

				}

			}

			$data = [

				'news_title'           => $this->input->post('title'),

				'news_synopsis'        => $this->input->post('synopsis'),

				'news_content'         => $this->input->post('content'),

				'news_tag'             => json_encode($tag),

				'news_image_headline'  => $this->input->post('image_headline'),

				'news_image_thumbnail' => $this->input->post('image_thumbnail'),

				'news_level'           => $this->input->post('level'),

				'news_datepublish'     => ($this->input->post('datepublish') == '0000-00-00 00:00:00' ? date('Y-m-d H:i:s') : $this->input->post('datepublish')),

				'news_author'          => '',

			];

			$this->news->updateNews($this->input->post('id'), $data);

			echo "<script>alert('Berhasil diperbarui');</script>";

			echo "<script>window.location.href='".base_url() ."backend/news_list';</script>";

		}



		if(!empty($id)) {

			$getNews = $this->news->editNews($id);

		}



		if(empty($getNews)) {

			echo "<script>alert('illegal action');</script>";

			redirect('https://www.google.com');

		}



		$data = [

			'news' => $getNews

		];



		$content = [

			'content' => $this->load->view('backend/news_edit', $data, true)

		];



		$this->load->view('backend/layout', $content);

	}

	public function newsTrash () {
		
		$data['news'] = $this->news->listNewsRestore();
		$data['pagination'] = '';
		
		$this->load->view('backend/layout', ['content' => $this->load->view('backend/news_trash', $data, true)]);
	}

	public function newsDelete($id = '') {

		if(empty($id)) {

			die('404');

		}

		$this->news->deleteNews($id);

		echo "<script>alert('Berhasil dihapus');</script>";

		echo "<script>window.location.href='".base_url() ."backend/news_list';</script>";

	}
	
	public function newsRestore($status='', $id = '') {
		
		if(empty($id))die('404');
		
		if($status=='1'){
			$status='Delete Forever';
			$this->news->deleteForever($id);
		} else {
			$status='Restore';
			$this->news->restoreNews($id);
		}
		
		echo "<script>alert('Berhasil $status');</script>";
		
		echo "<script>window.location.href='".base_url() ."backend/news_trash';</script>";
		
	}
	
	public function uploadImageHeadline() {

		$config = array(

			'upload_path'   => "./assets/news_image/",

			'allowed_types' => "jpg|jpeg",

			'overwrite'     => TRUE,

			'max_size'      => "2048000", // Can be set to particular file size , here it is 2 MB(2048 Kb)

			'max_height'    => "768",

			'max_width'     => "1024"

		);

		$this->load->library('upload', $config);

		if($this->upload->do_upload())

		{

			$data = array('upload_data' => $this->upload->data());

			// rename image name 

			$img_name = $data['upload_data']['raw_name'] . uniqid() . $data['upload_data']['file_ext'];

			rename(

				'./assets/news_image/'.$data['upload_data']['raw_name'].$data['upload_data']['file_ext'], 

				'./assets/news_image/'.$img_name

			);

			$img_loc = base_url('assets/news_image/'.$img_name);

			$img_src = 'assets/news_image/'.$img_name;

			$result = [

				'img_name' => $img_name,

				'img_loc'  => $img_loc,

				'img_src'  => $img_src

			];

			echo json_encode($result);

			die();

		}

		else

		{

			$error = array('error' => $this->upload->display_errors());

			echo json_encode($error);

			die();

		}

	}



	public function uploadImageContent() {

		$config = array(

			'upload_path'   => "./assets/news_content/",

			'allowed_types' => "jpg|jpeg",

			'overwrite'     => TRUE,

			'max_size'      => "2048000", // Can be set to particular file size , here it is 2 MB(2048 Kb)

			'max_height'    => "768",

			'max_width'     => "1024"

		);

		$this->load->library('upload', $config);

		if($this->upload->do_upload())

		{

			$data = array('upload_data' => $this->upload->data());

			$img_name = $data['upload_data']['raw_name'] . uniqid() . $data['upload_data']['file_ext'];

			rename(

				'./assets/news_content/'.$data['upload_data']['raw_name'].$data['upload_data']['file_ext'], 

				'./assets/news_content/'.$img_name

			);

			$img_loc = base_url('assets/news_content/'.$img_name);

			echo $img_loc;

			die();

		}

		else

		{

			$error = array('error' => $this->upload->display_errors());

			echo json_encode($error);

			die();

		}

	}



	public function cropHeadline() {

		$x = $this->input->post('x');

		$y = $this->input->post('y');

		$w = $this->input->post('w');

		$h = $this->input->post('h');

		$sc_img    = $this->input->post('img_src');

		$file_name = $this->input->post('img_name');



		$img_coor    = "{$x}:{$y}";

		$img_resize  = ['970x400'];

		$img_w_h     = "{$w}:{$h}";

		$target_path = 'assets/news_image/';



		$headline = $this->cropAndResizeImage($sc_img, $target_path, $file_name, $img_coor, $img_resize, $img_w_h);



		echo $headline[0];



	}



	public function cropThumbnail() {

		$x = $this->input->post('x');

		$y = $this->input->post('y');

		$w = $this->input->post('w');

		$h = $this->input->post('h');

		$sc_img = $this->input->post('img_src');

		$file_name = $this->input->post('img_name');



		$img_coor    = "{$x}:{$y}";

		$img_resize  = ['300x200'];

		$img_w_h     = "{$w}:{$h}";

		$target_path = 'assets/news_image/';



		$thumbnail = $this->cropAndResizeImage($sc_img, $target_path, $file_name, $img_coor, $img_resize, $img_w_h);



		echo $thumbnail[0];



	}



	public function tagList() {

		$listTag = $this->news->listTag();

		echo json_encode($listTag);

	}



	/*

	* Copyright (c) 2016 - www.pasmata.com

	* Function name: cropAndResizeImage()

	**/

	public function cropAndResizeImage($sc_img, $target_path, $image_name, $img_coor, $img_resize, $img_ratio)

	{

		$result = [];

		foreach ($img_resize as $key => $value) {

			// init resize

			$resize = explode("x", $value);

			$src = $sc_img;

			$coor = explode(":", $img_coor);

			$x = $coor[0];

			$y = $coor[1];

			$get_info = $this->getImageInfo($sc_img);



			// init ration

			$ratio = explode(":", $img_ratio);



			//---------------------------------//

			// init w_frame & h_frame

			$w_selisih = 0;

			$h_selisih  = 0;



			$w_frame = 570;

			$h_frame = 0;



			if($get_info['width'] > $w_frame) {

				$prosentase_w = ($w_frame / $get_info['width']) * 100;

				

				$h_frame = ($prosentase_w / 100) * $get_info['height'];



				$w_selisih = $get_info['width'] - $w_frame;

				$h_selisih = $get_info['height'] - $h_frame;



				$w_crop = $ratio[0] + $w_selisih;

				$h_crop = $ratio[1] + $h_selisih;

			}

			else {

				$w_crop = $ratio[0];

				$h_crop = $ratio[1];

			}

			//---------------------------------//

			

			$targ_w = $resize[0];

			$targ_h = $resize[1];

			$jpeg_quality = 100;





			if($get_info['ext'] == 'jpg') {

				$img_r = imagecreatefromjpeg($src);

			}

			elseif($get_info['ext'] == 'png') {

				$img_r = imagecreatefrompng($src);

			}



			$dst_r = ImageCreateTrueColor( $targ_w, $targ_h );

			

			imagecopyresampled($dst_r,$img_r,0,0,$x,$y,

			$targ_w,$targ_h,$w_crop,$h_crop);



			$result_image = $target_path.$targ_w.'x'.$targ_h.'-'.$image_name;



			header('Content-type: image/jpeg');

			imagejpeg($dst_r, $result_image, $jpeg_quality);



			$result[] = $result_image;

			

		}



		return $result;



	}



	/*

	* Copyright (c) 2016 - www.pasmata.com

	* Function name: cropAndResizeImage()

	**/

	public function getImageInfo($sc_img)

	{

		$info = getimagesize($sc_img);



		if($info['mime'] == 'image/gif' ) {

			$ext = "gif";

		}

		elseif($info['mime'] == 'image/jpeg' ) {

			$ext = "jpg";

		}

		elseif($info['mime'] == 'image/png' ) {

			$ext = "png";

		}



		return [

			'ext'    => $ext,

			'mime'   => $info['mime'],

			'width'  => $info[0],

			'height' => $info[1],

		];

	}





}