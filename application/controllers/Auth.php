<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
	public function __construct() {
		parent::__construct();
        
		$this->load->library('session');
        $this->load->helper('url');
        
	}



	public function login() {
        
        if($this->session->has_userdata('admin'))
            redirect(base_url('backend'));
		
        
		if(!empty($_POST)) {

			$this->load->database();

			$username = $this->input->post('username');

			$password = $this->input->post('password');



			$this->db->select('*');

			$this->db->where('users_username', $username);

			$this->db->where('users_password', md5(strrev($password).md5($password)));

			$this->db->from('users');

			$q = $this->db->get()->result();



			if(empty($q)) {

				echo "<script>alert('Login failed!!');</script>";

				echo "<script>window.location.href='".base_url()."'</script>";

			}

			else {

				$_SESSION['admin'] = $q[0];

				echo "<script>alert('Granted!!');</script>";
				echo "<script>window.location.href='".base_url()."backend'</script>";

			}



		}

		$this->load->view('backend/login');

	}
    
    public function logout()
    {
        session_destroy();
        redirect(base_url());
    }

}