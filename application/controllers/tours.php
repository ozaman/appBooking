<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Tours extends CI_Controller {
	public function __construct() {
	    parent::__construct();
	    $this->load->model('Tours_model');
	    // $this->load->model('Getuser_model');
	  }

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
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	 
	public function index()
	{
		$ck_expire_day=365;
		
		setcookie('type', 'Tour', time() + (86400 * 30 * $ck_expire_day)); // 86400 = 1 day
		$this->load->view('header');
		
		$this->load->view('footer');
		$this->load->view('tours/tours');
	}
	function loadgallery(){
		//$this->index();
      $data = $this->Tours_model->loadgallery();
	  //$array = array($age);
	  echo json_encode($data);

	}
	 
	
	// public function index2()
	// {
	// 	$this->load->view('welcome_message');
	// }
	
	
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */