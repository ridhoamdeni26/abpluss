<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Site extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form','url'));
		$this->load->library('parser');
		$this->API="http://localhost/mwm/";
        $this->load->library('session');
        $this->load->library('form_validation');
        $this->load->library('curl');

	}

	public function index()
	{
		
			$data['contents'] = 'app/dashboard';
			$this->load->view('layout/index',$data);
	}

	// function login()
	// {
	// 		//set form validation
	//         $this->form_validation->set_rules('username', 'Username', 'trim|required');
	//         $this->form_validation->set_rules('password', 'Password', 'trim|required');
	//         //set message form validation
	//         $this->form_validation->set_message('required', '<div class="alert alert-danger" style="margin-top: 3px">
	//                     <div class="header"><b><i class="fa fa-exclamation-circle"></i> {field}</b> harus diisi</div></div>');

	//         if ($this->form_validation->run() == FALSE)
	// 		{
	// 				$this->load->view('app/login');
	// 		}
	// 		else
	// 		{
	// 				$data = array(
	// 				'username' = $this->input->post('username');
	// 				'password' = $this->input->post('password'));
	// 				// $insert =  $this->curl->simple_post($this->API.'/kontak', $data, array(CURLOPT_BUFFERSIZE => 10));

	// 		}
		
	// }

	function logout(){
		$this->load->view('app/login');
	}
}
