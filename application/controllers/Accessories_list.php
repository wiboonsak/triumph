<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class accessories_list extends CI_Controller {

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
	
		$data['categoryList_acces']=$this->Control_model->getAccessoriesCategory1('1');
                $data['cateGoryList']=$this->Control_model->getMotocycleCategory1('1');
                $data['accessoriesdata'] = $this->Control_model->getAccessoriesDetail();
		//--------------------------------
		$this->load->view('header',$data);
		$this->load->view('product_acces');
		$this->load->view('footer');

	}
	//--------------------------------------------------
	//---------------------------------
	public function category($cateGoryID=NULL,$page=null){
		$data['categoryList_acces']=$this->Control_model->getAccessoriesCategory1('1');
                $data['cateGoryList']=$this->Control_model->getMotocycleCategory1('1');
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
			$this->load->view('product_acces' , $data);
		}else{
			$cateGoryName=$this->Control_model->pCategoryDetail1($cateGoryID);
			foreach($cateGoryName->result() AS $cate){ }
			$data['cateGoryName']=$cate->category_title;
                        $data['page'] = $page;
                        $data['perpage'] = $perpage; 
			$data['productList_acces']=$this->Control_model->productList($cateGoryID,$limit,$notUse,$start,$perpage);
			$this->load->view('product_acces' , $data);
			
		}
		
		$this->load->view('footer');
		
	}
        //----------------------------------
       //----------------------------------
        public function product_detail($cataid=null,$productID=null) {
   
           $data['cateGoryList']=$this->Control_model->getMotocycleCategory1('1');
           $data['categoryList_acces']=$this->Control_model->getAccessoriesCategory1('1');
           $limit='2';
           $data['productID']=$productID;
           $data['catalogueList']=$this->Control_model->getPdetailcatalogue2($productID);
           $data['productDetail']=$this->Control_model->getPdetailCategory2($productID);
           $data['imagesList']=$this->Control_model->loadProductImg_acces($productID);
          $data['productList_acces']=$this->Control_model->productList($cataid,$limit,$productID,'-100','-100');
          $data['productList']=$this->Control_model->getAccessoriesDetail($productID);
	
	
          
           $this->load->view('header',$data);
           $this->load->view('product_acces_detail',$data);
            $this->load->view('footer');
            
       }
    
    
  
        
}
