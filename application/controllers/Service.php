<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Service extends CI_Controller {

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
	function __construct() {
       parent::__construct();
	   $this->load->model('Control_model');  
    }
	public function index()
	{
	
		$data['cateGoryList']=$this->Control_model->getMotocycleCategory1('1');
                $data['categoryList_acces']=$this->Control_model->getAccessoriesCategory1('1');
                $data['serviceDetail'] = $this->Control_model->getServiceDetail1();
		
		//--------------------------------
		$this->load->view('header',$data);
		$this->load->view('service',$data);
		$this->load->view('footer');

        }
        

}