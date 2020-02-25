<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

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

    public function index() {

        $data['cateGoryList'] = $this->Control_model->getMotocycleCategory('1');
        $data['categoryList_acces'] = $this->Control_model->getAccessoriesCategory1('1');
        $this->load->view('header', $data);
        $this->load->view('contact');
        $this->load->view('footer');
    }
    //---------------------- inputName inputEmail inputPhone textareaMessage
	public function sendContactMail(){
		$inputName = $this->input->post('inputName');
		$inputEmail = $this->input->post('inputEmail');
		$inputPhone = $this->input->post('inputPhone');
		$textareaMessage = $this->input->post('textareaMessage');
		//$textareaMessage = strip_tags($textareaMessage);
		$this->load->library('email');
                //$config['protocol'] = 'smtp';
//$config['smtp_host'] = 'smtp.gmail.com';
//$config['smtp_crypto'] = 'tls'; 
//$config['smtp_port'] = 587;
//$config['smtp_user'] = 'อีเมล์';
//$config['smtp_pass'] = 'รหัสผ่านเมล์';  
//$config['charset']='utf-8';
//$config['newline']="\r\n";
//$config['wordwrap'] = TRUE;
//$config['mailtype'] = 'html';
	 	$config['protocol'] = 'smtp';
		$config['mailtype'] = 'html';
		$config['charset'] = 'utf-8';
		$config['wordwrap'] = TRUE;
	   
		$this->load->library('email',$config);

		$this->email->from($inputEmail, $inputName );
		$this->email->to('wiboonsak.suw@gmail.com'); 
		
		$this->email->subject('จดหมายติดต่อจากคุณ '.$inputName);
		$this->email->message(''.htmlspecialchars($textareaMessage).'');    
		
		if($this->email->send()){
			echo " <script>alert('Your message has been send.');</script>";
			redirect(base_url());
		}else{
			echo " <script>alert('Error Send mail.');</script>";
		}
	
	}
}
