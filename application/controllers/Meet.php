<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Meet extends CI_Controller {

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
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		$this->load->view('helloThere');
		
	}

	public function yeet($param = null){
		$this->load->helper('url');
		if($param != null){
			$data['roomId'] = $param;
			$this->load->view('meetNow',$data);
		}if($param == null){
		  if($some = $this->input->post('room')){
			$data['roomId'] = $some;
			$this->load->view('meetNow',$data);
		  }else{
			redirect(base_url,'refresh');
		  }
		}
			
	}
}
