<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct() {
    	parent::__construct();
    	//$this->load->model('Home_model');
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
		setcookie('type', 'Transfer', time() + (86400 * 30* $ck_expire_day));
		$this->load->view('header');
		$this->load->view('home/index');
//		$this->load->view('realtime_view');
		$this->load->view('footer');
	}
	 
	
	
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */