<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     * 	- or -
     * 		http://example.com/index.php/welcome/index
     * 	- or -
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

    //--------------------------------------
    public function index() {

        $data['cateGoryList'] = $this->Control_model->getMotocycleCategory('1');
        $data['categoryList_acces'] = $this->Control_model->getAccessoriesCategory1('1');
//		$page=1; $rowperpage=3;
//		$data['showNewsList']=$this->Control_model->news_listWWW($page,$rowperpage);
        //--------------------------------
        $data['SlideDetail'] = $this->Control_model->getSlideDetail1();
        $this->load->view('header', $data);
        $this->load->view('index');
        $this->load->view('footer');
        //$this->load->view('welcome_message');
    }

    //--------------------------------------
}
