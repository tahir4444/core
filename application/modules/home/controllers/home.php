<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends MX_Controller {
	
	public function __construct()
	{
		parent::__construct();
		
		$this->lang->load('home'); // Load language file
	}
	
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/home
	 *	- or -  
	 * 		http://example.com/home/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to home/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$data['test'] = 'somedata from controller'; // passing some sample data
		
		$this->parser->parse('home', $data); // Load template
	}
}

/* End of file home.php */
/* Location: ./application/modules/home/controllers/home.php */