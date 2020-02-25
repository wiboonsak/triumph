<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Motocycle_list extends CI_Controller {

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
                $data['motocycledata'] = $this->Control_model->getMotocycleDetail();
		//--------------------------------
		$this->load->view('header',$data);
		$this->load->view('product');
		$this->load->view('footer');

	}
	//--------------------------------------------------
	//---------------------------------
	public function category($cateGoryID=NULL,$page=null){
		$data['cateGoryList']=$this->Control_model->getMotocycleCategory1('1');
                $data['categoryList_acces']=$this->Control_model->getAccessoriesCategory1('1');
                $perpage = 6; $limit =''; $notUse = '';
               if ($page == ''){
                   $page = 1;
               }else{
                   $page = $page;
               }
               $start = ($page - 1) * $perpage;
		//--------------------------------
		$this->load->view('header',$data);
		if($cateGoryID==''){ 
			$this->load->view('product' , $data);
		}else{
			$cateGoryName=$this->Control_model->pCategoryDetail($cateGoryID);
			foreach($cateGoryName->result() AS $cate){ }
			$data['cateGoryName']=$cate->category_title;
                        $data['page'] = $page;
                        $data['perpage'] = $perpage;                        
			$data['productList']=$this->Control_model->productListByCate($cateGoryID,$limit,$notUse,$start,$perpage);                        
			$this->load->view('product' , $data);
			
		}
		
		$this->load->view('footer');
		
	}
        //----------------------------------
        public function product_detail($cataid=null,$productID=null) {
   
           $data['cateGoryList']=$this->Control_model->getMotocycleCategory1('1');
           $data['categoryList_acces']=$this->Control_model->getAccessoriesCategory1('1');
            $limit='2';
           
           $data['productID']=$productID;
           $data['catalogueList']=$this->Control_model->getPdetailcatalogue($productID);
           $data['productDetail']=$this->Control_model->getPdetailCategory($productID);
           $data['imagesList']=$this->Control_model->loadProductImg($productID);
          //$data['product']=$this->Control_model->productListByCate($cataid,$limit,$productID);
           $data['product']=$this->Control_model->productListByCate($cataid,$limit,$productID,'-100','-100');
          $data['productList']=$this->Control_model->getMotocycleDetail($productID);
	
	
           
            $this->load->view('header',$data);
            $this->load->view('product_detail',$data);
            $this->load->view('footer');
            
        }
    
  
        
}
