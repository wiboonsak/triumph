<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Control extends CI_Controller {

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
		 if($this->session->userdata('user_id')==''){
			    redirect(base_url('login'), 'refresh');
			    exit();
			 
		  }
			
          $this->load->model('Control_model');  
		 
    }
	//---------------------
	public function index()
	{
		
		$this->load->view('control/control_header');
		$this->load->view('control/control_index');
		$this->load->view('control/control_footer');
	}
	//---------------------
     public function motocycle_category(){
		$data['categoryList']=$this->Control_model->getMotocycleCategory('1');
		$this->load->view('control/control_header');
		$this->load->view('control/motocycle_category',$data);
		$this->load->view('control/control_footer');
		$this->load->view('control/category_script');
	 }
          public function accessories_category(){
		$data['categoryList']=$this->Control_model->getAccessoriesCategory('1');
		$this->load->view('control/control_header');
		$this->load->view('control/accessories_category',$data);
		$this->load->view('control/control_footer');
		$this->load->view('control/category_script_acces');
	 }
	//-----------------
	public function motocycle_category_add($cateID=NULL){
		if($cateID!=''){
			$selectData=$this->Control_model->pCategoryDetail($cateID);
			foreach($selectData->result() AS $abc){ }
			$data['category_title']= $abc->category_title;			
			$data['dataID']= $cateID;
		}else{
			$data['category_title']='';			
			$data['dataID']= $cateID;;
		}

		$this->load->view('control/control_header');
		$this->load->view('control/motocycle_category_add',$data);
		$this->load->view('control/control_footer');
		$this->load->view('control/category_script');
	}
        public function accessories_category_add($cateID=NULL){
		if($cateID!=''){
			$selectData=$this->Control_model->pCategoryDetail1($cateID);
			foreach($selectData->result() AS $abc){ }
			$data['category_title']= $abc->category_title;			
			$data['dataID']= $cateID;
		}else{
			$data['category_title']='';			
			$data['dataID']= $cateID;;
		}

		$this->load->view('control/control_header');
		$this->load->view('control/accessories_category_add',$data);
		$this->load->view('control/control_footer');
		$this->load->view('control/category_script_acces');
	}
	//---------------
	public function DoAddProductCategory(){
				$category_title = $this->input->post('category_title');
				$dataID = $this->input->post('dataID');

		    $resultUpdateBooking = $this->Control_model->DoAddProductCategory($category_title , $dataID );
		  	
		echo $resultUpdateBooking;
	}
        public function DoAddProductCategory1(){
				$category_title = $this->input->post('category_title');
				$dataID = $this->input->post('dataID');

		    $resultUpdateBooking = $this->Control_model->DoAddProductCategory1($category_title , $dataID );
		  	
		echo $resultUpdateBooking;
	}
	 //------------------ 
	public function deletePcate(){
		$DataID=$this->input->post('DataID');
		$result = $this->Control_model->deletePcate($DataID);
		echo $result;
	}
        public function deletePcateAcces(){
		$DataID=$this->input->post('DataID');
		$result = $this->Control_model->deletePcateAcces($DataID);
		echo $result;
	}
//------------------ 
//	public function deleteSubcate(){
//		$DataID=$this->input->post('DataID');
//		$result = $this->Control_model->deleteSubcate($DataID);
//		echo $result;
//	}
	 //------------------dataID changeValue //
	public  function updateOrderCate(){
		$dataID = $this->input->post('dataID');
		$changeValue = $this->input->post('changeValue');
		$result = $this->Control_model->updateOrderCate($dataID,$changeValue);
		echo $result;
		
	} 
	public  function updateOrderCate_acces(){
		$dataID = $this->input->post('dataID');
		$changeValue = $this->input->post('changeValue');
		$result = $this->Control_model->updateOrderCate_acces($dataID,$changeValue);
		echo $result;
		
	} 
 //------------------dataID changeValue //
//	public  function updateOrderSubCate(){
//		$dataID = $this->input->post('dataID');
//		$changeValue = $this->input->post('changeValue');
//		$result = $this->Control_model->updateOrderSubCate($dataID,$changeValue);
//		echo $result;
//		
//	} 	
	 //------------------  subCateID
//	public function product_detail_subc($mainCateId, $MainCateName=NULL){
//		
//		
//			$cateData=$this->Control_model->pCategoryDetail($mainCateId); 
//			foreach($cateData->result() AS $cateDetail);
//			$data['mainCateName'] = $cateDetail->category_title;
//			$data['mainCateName2'] = $cateDetail->category_title;
//		
//		
//		$data['categoryList']=$this->Control_model->getSubCate($mainCateId);
//		
//		$MainCateName = str_replace('%',' ',$MainCateName);
//		$MainCateName = str_replace(":",'',$MainCateName);
//		$MainCateName = str_replace("'",'',$MainCateName);    
//		
//		//$data['mainCateName']=$MainCateName;
//		$data['mainCateId']=$mainCateId;
//
//		//$data['subCateID']=$subCateID;
//		$this->load->view('control/control_header');
//		$this->load->view('control/product_detail_subc',$data);
//		$this->load->view('control/control_footer');
//		$this->load->view('control/subcategory_script');
//	}
	 //------------------  
//	public function product_subcategory_add($MainCateID=NULL,$dataID=NULL){
//		
//		$cateData=$this->Control_model->pCategoryDetail($MainCateID); 
//		foreach($cateData->result() AS $cateDetail);
//		$data['mainCateName'] = $cateDetail->category_title;
//		$data['mainCateName2'] = $cateDetail->category_title;
//		
//		$checkIsMainCate = $this->Control_model->checkIsMainCate($MainCateID);
//		$data['abc']=$MainCateID;
//		
//		if($checkIsMainCate==''){
//			 redirect(base_url('control/product_category'));
//			exit();
//		}else{ 
//			$selectData=$this->Control_model->pSubCategoryDetail($dataID);
//			foreach($selectData->result() AS $abc){ }
//			if(isset($abc->subcate_name)){ $data['subcate_name']=$abc->subcate_name;   }else{ $data['subcate_name']=''; } 
//			if(isset($abc->file_name)){ $data['oldImg']=$abc->file_name;   }else{ $data['oldImg']=''; } 
//			if(isset($abc->file_name)){ $data['showImg']= base_url($abc->file_name);   }else{ $data['showImg']= base_url('asset/control/assets/images/small/img-8.png'); } 
//			
//			if(isset($abc->id)){ $data['dataID']=$abc->id;   }else{ $data['dataID']=''; } 
//				
//			$data['MainCateID']=$checkIsMainCate;
//			
//			$this->load->view('control/control_header');
//			$this->load->view('control/product_subcategory_add',$data);
//			$this->load->view('control/control_footer');
//			$this->load->view('control/subcategory_script.php');
//		}
//
//		
//	}
	 //------------------ 
//	 public function DoAddSubCategory(){
//
//				$oldImg = $this->input->post('oldImg');
//				$subcate_name = $this->input->post('subcate_name');
//				$dataID = $this->input->post('dataID');
//				$main_cate_id = $this->input->post('main_cate_id');
//				$imgNameUpdate=$oldImg;
//				$upload_path = './uploadfile/';
//				$upload_pathName = 'uploadfile/';
//				$config['upload_path'] = $upload_path;
//				//allowed file types. * means all types
//				$config['allowed_types'] = 'jpg|png|gif';
//				//allowed max file size. 0 means unlimited file size
//				$config['max_size'] = '0';
//				//max file name size
//				$config['max_filename'] = '255';
//				//whether file name should be encrypted or not
//				$config['encrypt_name'] = TRUE;
//				//store image info once uploaded
//				$image_data = array();
//				//check for errors
//				$is_file_error = FALSE;
            //check if file was selected for upload
//              if (!$_FILES) {
//                   $imgNameUpdate=$oldImg;
//              }else{
//				 $this->load->library('upload', $config);
//				  if (!$this->upload->do_upload('files')) {
//    					  //echo "ErrorUpload"; 
//					 // $imgNameUpdate=$oldImg;
//                 } else {
//				  	$image_data = $this->upload->data();
//                    $config['image_library'] = 'gd2';
//                    $config['source_image'] = $image_data['full_path']; //get original image
//                    $config['maintain_ratio'] = TRUE;
//                    $config['width'] = 1024;
//                    $config['height'] = 1024;
//                    $this->load->library('image_lib', $config);
//					if (!$this->image_lib->resize()) {
//                        echo "ErrorResize";
//                    }else{
//						$imgNameUpdate = $upload_pathName.$this->upload->data('file_name');
//					}
//				}
//				//----------------
//			}
		   //--------------------
//		    $result = $this->Control_model->DoAddSubCategory($subcate_name , $imgNameUpdate , $dataID , $main_cate_id );
//		  	if($result!='Error'){
//					//echo $imgNameUpdate;
//					$this->load->helper("file");
//					$path = base_url('./');
//					if($oldImg!=$imgNameUpdate){ @unlink('./'.$oldImg); } 
//				}else{
//					//echo 'ไม่สามารถเพิ่มรูปได้';
//				}
//		    //------------------
//		 echo $result;
//	}
	 //------------------  
	public function motocycle_add($curentID=NULL){
		$datatype='1';
		$data['listCategory']=$this->Control_model->getMotocycleCategory($datatype);
		$productData = $this->Control_model->getMotocycleDetail($curentID);
		
		if($productData->num_rows() > 0){
			foreach($productData->result() AS $product){}
			$data['motorcycle_name']=$product->motorcycle_name;
			$data['motorcycle_category']=$product->motorcycle_category;
			$data['motorcycle_desc']=$product->motorcycle_desc;
                        $data['motorcycle_price']=$product->motorcycle_price;
                        $data['motorcycle_detail']=$product->motorcycle_detail;
			$data['motorcycle_youtubecode']=$product->motorcycle_youtubecode;
                        $data['engine_Type']=$product->engine_Type;
			$data['engine_Capacity']=$product->engine_Capacity;
			$data['engine_BoreStroke']=$product->engine_BoreStroke;
			$data['engine_Compression']=$product->engine_Compression;
			$data['engine_MaxPowerEC']=$product->engine_MaxPowerEC;
			$data['engine_MaxTorqueEC']=$product->engine_MaxTorqueEC;
			$data['engine_System']=$product->engine_System;
			$data['engine_Exhaust']=$product->engine_Exhaust;
			$data['engine_FinalDrive']=$product->engine_FinalDrive;
			$data['engine_Clutch']=$product->engine_Clutch;
			$data['engine_Gearbox']=$product->engine_Gearbox;
			$data['chassis_Frame']=$product->chassis_Frame;
			$data['chassis_Swingarm']=$product->chassis_Swingarm;
			$data['chassis_FrontWheel']=$product->chassis_FrontWheel;
			$data['chassis_RearWheel']=$product->chassis_RearWheel;
			$data['chassis_FrontTyre']=$product->chassis_FrontTyre;
			$data['chassis_RearTyre']=$product->chassis_RearTyre;
			$data['chassis_FrontSuspension']=$product->chassis_FrontSuspension;
			$data['chassis_RearSuspension']=$product->chassis_RearSuspension;
			$data['chassis_FrontBrakes']=$product->chassis_FrontBrakes;
			$data['chassis_RearBrakes']=$product->chassis_RearBrakes;
			$data['chassis_Display']=$product->chassis_Display;
			$data['dimension_WidthHandlebars']=$product->dimension_WidthHandlebars;
			$data['dimension_HeightWithoutMirror']=$product->dimension_HeightWithoutMirror;
			$data['dimension_SeatHeight']=$product->dimension_SeatHeight;
			$data['dimension_Wheelbase']=$product->dimension_Wheelbase;
			$data['dimension_Rake']=$product->dimension_Rake;
			$data['dimension_Trail']=$product->dimension_Trail;
			$data['dimension_DryWeight']=$product->dimension_DryWeight;
			$data['dimension_TankCapacity']=$product->dimension_TankCapacity;
			$data['dimension_Length']=$product->dimension_Length;
			$data['dimension_TotalWeight']=$product->dimension_TotalWeight;
			$data['wastage_Area']=$product->wastage_Area;
			$data['wastage_Constant56mph']=$product->wastage_Constant56mph;
			$data['wastage_Constant75mph']=$product->wastage_Constant75mph;
			$data['wastage_FuelConsumption']=$product->wastage_FuelConsumption;
			$data['wastage_CO2Figures']=$product->wastage_CO2Figures;
                       
			$data['currentID']=$product->id;
		
		 }else{
			$data['motorcycle_category']=0;
			
		}
		$this->load->view('control/control_header');
		$this->load->view('control/motocycle_add',$data);
		$this->load->view('control/control_footer');
		$this->load->view('control/motocycle_script');
	}
        public function accessories_add($curentID=NULL){
		$datatype='1';
		$data['listCategory']=$this->Control_model->getAccessoriesCategory($datatype);
		$productData = $this->Control_model->getAccessoriesDetail($curentID);
		
		if($productData->num_rows() > 0){
			foreach($productData->result() AS $product){}
			$data['accessories_name']=$product->accessories_name;
			$data['accessories_category']=$product->accessories_category;
			$data['accessories_desc']=$product->accessories_desc;
			$data['accessories_detail']=$product->accessories_detail;
                        $data['accessories_price']=$product->accessories_price;
			$data['currentID']=$product->id;
		
		 }else{
			$data['accessories_category']=0;
			
		}
		$this->load->view('control/control_header');
		$this->load->view('control/accessories_add',$data);
		$this->load->view('control/control_footer');
		$this->load->view('control/accessories_script');
	}

	 //------------------
     public function addProduct(){
		 $motorcycle_name =$this->input->post('motorcycle_name');
		 $motorcycle_desc =$this->input->post('motorcycle_desc');
		 $motorcycle_detail =$this->input->post('motorcycle_detail');
		 $currentID =$this->input->post('currentID');
                 $motorcycle_price =$this->input->post('motorcycle_price');
		 $motorcycle_category =$this->input->post('motorcycle_category');
		 $engine_Type =$this->input->post('engine_Type');
		 $engine_Capacity =$this->input->post('engine_Capacity');
		 $engine_BoreStroke =$this->input->post('engine_BoreStroke');
		 $engine_Compression =$this->input->post('engine_Compression');
		 $engine_MaxPowerEC =$this->input->post('engine_MaxPowerEC');
		 $engine_MaxTorqueEC =$this->input->post('engine_MaxTorqueEC');
		 $engine_System =$this->input->post('engine_System');
		 $engine_Exhaust =$this->input->post('engine_Exhaust');
		 $engine_FinalDrive =$this->input->post('engine_FinalDrive');
		 $engine_Clutch =$this->input->post('engine_Clutch');
		 $engine_Gearbox =$this->input->post('engine_Gearbox');
		 $chassis_Frame =$this->input->post('chassis_Frame');
		 $chassis_Swingarm =$this->input->post('chassis_Swingarm');
		 $chassis_FrontWheel =$this->input->post('chassis_FrontWheel');
		 $chassis_RearWheel =$this->input->post('chassis_RearWheel');
		 $chassis_FrontTyre =$this->input->post('chassis_FrontTyre');
		 $chassis_RearTyre =$this->input->post('chassis_RearTyre');
		 $chassis_FrontSuspension =$this->input->post('chassis_FrontSuspension');
		 $chassis_RearSuspension =$this->input->post('chassis_RearSuspension');
		 $chassis_FrontBrakes =$this->input->post('chassis_FrontBrakes');
		 $chassis_RearBrakes =$this->input->post('chassis_RearBrakes');
		 $chassis_Display =$this->input->post('chassis_Display');
		 $dimension_WidthHandlebars =$this->input->post('dimension_WidthHandlebars');
		 $dimension_HeightWithoutMirror =$this->input->post('dimension_HeightWithoutMirror');
		 $dimension_SeatHeight =$this->input->post('dimension_SeatHeight');
		 $dimension_Wheelbase =$this->input->post('dimension_Wheelbase');
		 $dimension_Rake =$this->input->post('dimension_Rake');
		 $dimension_Trail =$this->input->post('dimension_Trail');
		 $dimension_DryWeight =$this->input->post('dimension_DryWeight');
		 $dimension_TankCapacity =$this->input->post('dimension_TankCapacity');
		 $dimension_Length =$this->input->post('dimension_Length');
		 $dimension_TotalWeight =$this->input->post('dimension_TotalWeight');
		 $wastage_Area =$this->input->post('wastage_Area');
		 $wastage_Constant56mph =$this->input->post('wastage_Constant56mph');
		 $wastage_Constant75mph =$this->input->post('wastage_Constant75mph');
		 $wastage_FuelConsumption =$this->input->post('wastage_FuelConsumption');
		 $wastage_CO2Figures =$this->input->post('wastage_CO2Figures');
		 $motorcycle_youtubecode =$this->input->post('motorcycle_youtubecode');
		 $txtTitle =$this->input->post('txtTitle');
		 
		 
		 $currentID = $this->Control_model->addProduct($currentID , $motorcycle_name ,$motorcycle_desc , $motorcycle_detail, $motorcycle_category,$motorcycle_price,$motorcycle_youtubecode,$engine_Type,$engine_Capacity,$engine_BoreStroke,$engine_Compression,$engine_MaxPowerEC,$engine_MaxTorqueEC,$engine_System,$engine_Exhaust,$engine_FinalDrive,$engine_Clutch,$engine_Gearbox,$chassis_Frame,$chassis_Swingarm,$chassis_FrontWheel,$chassis_RearWheel,$chassis_FrontTyre,$chassis_RearTyre,$chassis_FrontSuspension,$chassis_RearSuspension,$chassis_FrontBrakes,$chassis_RearBrakes,$chassis_Display,$dimension_WidthHandlebars,$dimension_HeightWithoutMirror,$dimension_SeatHeight,$dimension_Wheelbase,$dimension_Rake,$dimension_Trail,$dimension_DryWeight,$dimension_TankCapacity,$dimension_Length,$dimension_TotalWeight,$wastage_Area,$wastage_Constant56mph,$wastage_Constant75mph,$wastage_FuelConsumption,$wastage_CO2Figures );
//		
		 
		  //--------upload file------------//
		 
			$countFiles = count($_FILES['userFiles']['name']);
		   
		 		$upload_path = './uploadfile/product';
				$upload_pathName = 'uploadfile/product';
				$config['upload_path'] = $upload_path;
				//allowed file types. * means all types
				$config['allowed_types'] = 'jpg|png|gif';
				//allowed max file size. 0 means unlimited file size
				$config['max_size'] = '0';
				//max file name size
				$config['max_filename'] = '255';
				//whether file name should be encrypted or not
				$config['encrypt_name'] = TRUE;
				//store image info once uploaded
				$image_data = array();
				//check for errors
				$is_file_error = FALSE;
		 	
		    $this->load->library('upload', $config);
       if($countFiles>0){ 
			for($i=0; $i<$countFiles; $i++)
			{           
				//---------------------------
				$_FILES['userFile']['name'] = $_FILES['userFiles']['name'][$i];
                $_FILES['userFile']['type'] = $_FILES['userFiles']['type'][$i];
                $_FILES['userFile']['tmp_name'] = $_FILES['userFiles']['tmp_name'][$i];
                $_FILES['userFile']['error'] = $_FILES['userFiles']['error'][$i];
                $_FILES['userFile']['size'] = $_FILES['userFiles']['size'][$i];


               
                $this->upload->initialize($config);
                if($this->upload->do_upload('userFile')){
                    $fileData = $this->upload->data();
                    $uploadData[$i]['file_name'] = $fileData['file_name'];
					$this->Control_model->AddImagesData($uploadData[$i]['file_name'],$currentID);
                }
				
			}
		}
		 	//-----------------------------------
		       $countFiles2 = count($_FILES['catFiles']['name']);
		   
		 		$upload_path = './uploadfile/catalogue';
				$upload_pathName = 'uploadfile/catalogue';
				$config['upload_path'] = $upload_path;
				//allowed file types. * means all types
				$config['allowed_types'] = 'jpg|png|gif|xls|xlsx|pdf|doc|docx|zip|txt|rar';
				//allowed max file size. 0 means unlimited file size
				$config['max_size'] = '0';
				//max file name size
				$config['max_filename'] = '255';
				//whether file name should be encrypted or not
				$config['encrypt_name'] = TRUE;
				//store image info once uploaded
				$image_data = array();
		 		//check for errors
				$is_file_error = FALSE;
		 	
		    $this->load->library('upload', $config);
       if($countFiles>0){ 
			for($i=0; $i<$countFiles2; $i++)
			{           
				//---------------------------
				$_FILES['userFile']['name'] = $_FILES['catFiles']['name'][$i];
                $_FILES['userFile']['type'] = $_FILES['catFiles']['type'][$i];
                $_FILES['userFile']['tmp_name'] = $_FILES['catFiles']['tmp_name'][$i];
                $_FILES['userFile']['error'] = $_FILES['catFiles']['error'][$i];
                $_FILES['userFile']['size'] = $_FILES['catFiles']['size'][$i];

                $this->upload->initialize($config);
                if($this->upload->do_upload('userFile')){
                    $fileData = $this->upload->data();
                    $uploadData[$i]['file_name'] = $fileData['file_name'];
					//$this->Control_model->AddImagesData($uploadData[$i]['file_name'],$currentID);
					$this->Control_model->AddCatalogueData($uploadData[$i]['file_name'],$currentID,$txtTitle);
                }
				
			}
		} 
		//--------------------------
		 
		 echo $currentID;
		
	 }
          public function addProduct_acces(){
		 $accessories_name =$this->input->post('accessories_name');
		 $accessories_desc =$this->input->post('accessories_desc');
		 $accessories_detail =$this->input->post('accessories_detail');
		 $accessories_price =$this->input->post('accessories_price');
		 $currentID =$this->input->post('currentID');
		 $accessories_category =$this->input->post('accessories_category');
		 $txtTitle =$this->input->post('txtTitle');
		 
		 
		 $currentID = $this->Control_model->addProduct_acces($currentID , $accessories_name ,$accessories_desc , $accessories_detail, $accessories_category,$accessories_price );
		 
		 
		  //--------upload file------------//
		 
			$countFiles = count($_FILES['userFiles']['name']);
		   
		 		$upload_path = './uploadfile/product';
				$upload_pathName = 'uploadfile/product';
				$config['upload_path'] = $upload_path;
				//allowed file types. * means all types
				$config['allowed_types'] = 'jpg|png|gif';
				//allowed max file size. 0 means unlimited file size
				$config['max_size'] = '0';
				//max file name size
				$config['max_filename'] = '255';
				//whether file name should be encrypted or not
				$config['encrypt_name'] = TRUE;
				//store image info once uploaded
				$image_data = array();
				//check for errors
				$is_file_error = FALSE;
		 	
		    $this->load->library('upload', $config);
       if($countFiles>0){ 
			for($i=0; $i<$countFiles; $i++)
			{           
				//---------------------------
				$_FILES['userFile']['name'] = $_FILES['userFiles']['name'][$i];
                $_FILES['userFile']['type'] = $_FILES['userFiles']['type'][$i];
                $_FILES['userFile']['tmp_name'] = $_FILES['userFiles']['tmp_name'][$i];
                $_FILES['userFile']['error'] = $_FILES['userFiles']['error'][$i];
                $_FILES['userFile']['size'] = $_FILES['userFiles']['size'][$i];


               
                $this->upload->initialize($config);
                if($this->upload->do_upload('userFile')){
                    $fileData = $this->upload->data();
                    $uploadData[$i]['file_name'] = $fileData['file_name'];
					$this->Control_model->AddImagesData_acces($uploadData[$i]['file_name'],$currentID);
                }
				
			}
		}
		 	//-----------------------------------
		       $countFiles2 = count($_FILES['catFiles']['name']);
		   
		 		$upload_path = './uploadfile/catalogue';
				$upload_pathName = 'uploadfile/catalogue';
				$config['upload_path'] = $upload_path;
				//allowed file types. * means all types
				$config['allowed_types'] = 'jpg|png|gif|xls|xlsx|pdf|doc|docx|zip|txt|rar';
				//allowed max file size. 0 means unlimited file size
				$config['max_size'] = '0';
				//max file name size
				$config['max_filename'] = '255';
				//whether file name should be encrypted or not
				$config['encrypt_name'] = TRUE;
				//store image info once uploaded
				$image_data = array();
		 		//check for errors
				$is_file_error = FALSE;
		 	
		    $this->load->library('upload', $config);
       if($countFiles>0){ 
			for($i=0; $i<$countFiles2; $i++)
			{           
				//---------------------------
				$_FILES['userFile']['name'] = $_FILES['catFiles']['name'][$i];
                $_FILES['userFile']['type'] = $_FILES['catFiles']['type'][$i];
                $_FILES['userFile']['tmp_name'] = $_FILES['catFiles']['tmp_name'][$i];
                $_FILES['userFile']['error'] = $_FILES['catFiles']['error'][$i];
                $_FILES['userFile']['size'] = $_FILES['catFiles']['size'][$i];

                $this->upload->initialize($config);
                if($this->upload->do_upload('userFile')){
                    $fileData = $this->upload->data();
                    $uploadData[$i]['file_name'] = $fileData['file_name'];
					//$this->Control_model->AddImagesData($uploadData[$i]['file_name'],$currentID);
					$this->Control_model->AddCatalogueData_acces($uploadData[$i]['file_name'],$currentID,$txtTitle);
                }
				
			}
		} 
		//--------------------------
		 
		 echo $currentID;
		
	 }
	 //-----------------------------------------------  
	 public function loadProductImg(){
		 $ProID = $this->input->post('ProID');
		 $imglist = $this->Control_model->loadProductImg($ProID);
		 echo '<table class="table table-bordered table-hover">';
		 foreach($imglist->result() AS $data){ 
			 echo '<tr id = "RowImg'.$data->id.'">';
			 echo '<td><span class="text-danger"><img src="'.base_url('uploadfile/product/').$data->imge_name.'" style="width:150px;" class="thumbnail"></span></td>';
			 echo '<td width="30"><button type="button" class="btn btn-danger btn-sm" onclick="comfirmDelete(\''.$data->id.'\' , \'imgfile\', \''.$data->imge_name.'\')"><i class="icon-trash"></i></button></td>';
			 echo '</tr>';
		 }
		 echo '</table>';
	 } 
	 //----------------------------------------------- 
	 public function loadProductFile(){
		 $ProID = $this->input->post('ProID');
		 $imglist = $this->Control_model->loadProductFile($ProID);
		 echo '<table class="table table-bordered table-hover">';
		 foreach($imglist->result() AS $data){ 
			 echo '<tr id = "RowFile'.$data->id.'">';
			 echo '<td><span class="text-suceess">';
			 echo $data->txtTitle.'&nbsp;';
			 echo'<a href="'.base_url('uploadfile/catalogue/').$data->imge_name.'" target="_blanl"><i class="icon-arrow-down-circle">&nbsp;Download</i></a></span></td>';
			 echo '<td width="30"><button type="button" class="btn btn-danger btn-sm" onclick="comfirmDelete(\''.$data->id.'\' , \'catalgoue\' , \''.$data->imge_name.'\')"><i class="icon-trash"></i></button></td>';
			 echo '</tr>';
		 }
		 echo '</table>';
                 //--------------------------------------
	 }  public function loadProductImg_acces(){
		 $ProID = $this->input->post('ProID');
		 $imglist = $this->Control_model->loadProductImg_acces($ProID);
		 echo '<table class="table table-bordered table-hover">';
		 foreach($imglist->result() AS $data){ 
			 echo '<tr id = "RowImg'.$data->id.'">';
			 echo '<td><span class="text-danger"><img src="'.base_url('uploadfile/product/').$data->imge_name.'" style="width:150px;" class="thumbnail"></span></td>';
			 echo '<td width="30"><button type="button" class="btn btn-danger btn-sm" onclick="comfirmDelete(\''.$data->id.'\' , \'imgfile\', \''.$data->imge_name.'\')"><i class="icon-trash"></i></button></td>';
			 echo '</tr>';
		 }
		 echo '</table>';
	 } 
	 //----------------------------------------------- 
	 public function loadProductFile_acces(){
		 $ProID = $this->input->post('ProID');
		 $imglist = $this->Control_model->loadProductFile_acces($ProID);
		 echo '<table class="table table-bordered table-hover">';
		 foreach($imglist->result() AS $data){ 
			 echo '<tr id = "RowFile'.$data->id.'">';
			 echo '<td><span class="text-suceess">';
			 echo $data->txtTitle.'&nbsp;';
			 echo'<a href="'.base_url('uploadfile/catalogue/').$data->imge_name.'" target="_blanl"><i class="icon-arrow-down-circle">&nbsp;Download</i></a></span></td>';
			 echo '<td width="30"><button type="button" class="btn btn-danger btn-sm" onclick="comfirmDelete(\''.$data->id.'\' , \'catalgoue\' , \''.$data->imge_name.'\')"><i class="icon-trash"></i></button></td>';
			 echo '</tr>';
		 }
		 echo '</table>';
	 } 		
	//---------// deletePorductFile DataID fileType  images file 
	 public function deletePorductFile(){ 
	 	 $fileType = $this->input->post('fileType');
	 	 $DataID = $this->input->post('DataID');
	 	 $FileName = $this->input->post('FileName');
		 $result = $this->Control_model->deleteProductFile($DataID, $fileType, $FileName);
		 echo $result;
	 }
	//-------------------------------
	 public function deletePorductFile1(){ 
	 	 $DataID = $this->input->post('DataID');
	 	 $FileName = $this->input->post('FileName');
		 $result = $this->Control_model->deleteProductFile1($DataID, $FileName);
		 echo $result;
	 }
	//-------------------------------
    public function motocycle_list(){
		$data['productList']=$this->Control_model->getMotocycleList();
		$this->load->view('control/control_header');
		$this->load->view('control/motocycle_list',$data);
		$this->load->view('control/control_footer');
		$this->load->view('control/motocycle_list_script');
	}
         public function accessories_list(){
		$data['productList']=$this->Control_model->getAccessoriesList();
		$this->load->view('control/control_header');
		$this->load->view('control/accessories_list',$data);
		$this->load->view('control/control_footer');
		$this->load->view('control/accessories_list_script');
	}
	//-------------------------------
	public function  deleteProduct(){
		$DataID = $this->input->post('DataID');
		$result = $this->Control_model->DeleteProduct($DataID);
		echo $result;
		
		
	}
        public function  deleteProduct_acces(){
		$DataID = $this->input->post('DataID');
		$result = $this->Control_model->DeleteProduct_acces($DataID);
		echo $result;
		
		
	}
	//-------------------------------
	public function news_add($curentID=NULL){
		
		$NewDetail = $this->Control_model->getNewDetail($curentID);
		if($NewDetail->num_rows() > 0){
			foreach($NewDetail->result() AS $news){}
			$data['news_title']=$news->news_title;
			$data['news_detail']=$news->news_detail; 
			$data['currentID']=$news->id;
			$data['news_date_add']=$news->news_date_add;
		 }else{
			$data['news_title']='';
			$data['news_detail']=''; 
			$data['currentID']='';
			$data['news_date_add']='';
		}
		$this->load->view('control/control_header');
		$this->load->view('control/news_add',$data);
		$this->load->view('control/control_footer');
		$this->load->view('control/news_add_script');		
	}
	//-------------------------------
	public function slide_add($curentID=NULL){
		
		$slideDetail = $this->Control_model->getslideDetail($curentID);
		if($slideDetail->num_rows() > 0){
			foreach($slideDetail->result() AS $slide){}
			$data['slide_title']=$slide->slide_title;
			$data['slide_detail']=$slide->slide_detail;
			$data['slide_desc']=$slide->slide_desc;
			$data['currentID']=$slide->id;
			
		 }else{
			$data['slide_title']='';
			$data['slide_detail']='';
			$data['slide_desc']='';
			$data['currentID']='';
			
		}
		$this->load->view('control/control_header');
		$this->load->view('control/slide_add',$data);
		$this->load->view('control/control_footer');
		$this->load->view('control/slide_add_script');		
	}
	//-------------------------------
	public function service_add($curentID=NULL){
		
		$serviceDetail = $this->Control_model->getserviceDetail($curentID);
		if($serviceDetail->num_rows() > 0){
			foreach($serviceDetail->result() AS $service){}
			$data['service_name']=$service->service_name;
			$data['service_desc']=$service->service_desc; 
			$data['currentID']=$service->id;
                        $data['date_add']=$service->date_add;
		 }else{
			$data['service_name']='';
			$data['service_desc']=''; 
			$data['currentID']='';
                        $data['date_add']='';
		}
		$this->load->view('control/control_header');
		$this->load->view('control/service_add',$data);
		$this->load->view('control/control_footer');
		$this->load->view('control/service_add_script');		
	}
	//-------------------------------    
	public function addNews(){
		 $currentID =$this->input->post('currentID');
		 $news_detail =$this->input->post('news_detail');
		 $news_title =$this->input->post('news_title');
		 $news_date_add =$this->input->post('news_date_add');
		 
		 
		 $currentID = $this->Control_model->addNews($news_title , $news_detail ,$currentID , $news_date_add );
		 //--------uploadfile------------//
		$countFiles = count($_FILES['userFiles']['name']);
		   
		 		$upload_path = './uploadfile/news';
				$upload_pathName = 'uploadfile/news';
				$config['upload_path'] = $upload_path;
				//allowed file types. * means all types
				$config['allowed_types'] = 'jpg|png|gif';
				//allowed max file size. 0 means unlimited file size
				$config['max_size'] = '0';
				//max file name size
				$config['max_filename'] = '255';
				//whether file name should be encrypted or not
				$config['encrypt_name'] = TRUE;
				//store image info once uploaded
				$image_data = array();
				//check for errors
				$is_file_error = FALSE;
		 	
		    $this->load->library('upload', $config);
       if($countFiles>0){ 
			for($i=0; $i<$countFiles; $i++)
			{           
				//---------------------------
				$_FILES['userFile']['name'] = $_FILES['userFiles']['name'][$i];
                $_FILES['userFile']['type'] = $_FILES['userFiles']['type'][$i];
                $_FILES['userFile']['tmp_name'] = $_FILES['userFiles']['tmp_name'][$i];
                $_FILES['userFile']['error'] = $_FILES['userFiles']['error'][$i];
                $_FILES['userFile']['size'] = $_FILES['userFiles']['size'][$i];


               
                $this->upload->initialize($config);
                if($this->upload->do_upload('userFile')){
                    $fileData = $this->upload->data();
                    $uploadData[$i]['file_name'] = $fileData['file_name'];
					$this->Control_model->AddNewsImg($uploadData[$i]['file_name'],$currentID);
                }
				
			}
		}
		
		 echo $currentID;
		 
	}
	//-------------------------------    
	public function addSlide(){
		 $currentID =$this->input->post('currentID');
		 $slide_title =$this->input->post('slide_title');
		 $slide_detail =$this->input->post('slide_detail');
		 $slide_desc =$this->input->post('slide_desc');
		 
		 
		 $currentID = $this->Control_model->addSlide($slide_title , $slide_detail ,$currentID , $slide_desc );
		 //--------uploadfile------------//
		$countFiles = count($_FILES['userFiles']['name']);
		   
		 		$upload_path = './uploadfile/banner';
				$upload_pathName = 'uploadfile/banner';
				$config['upload_path'] = $upload_path;
				//allowed file types. * means all types
				$config['allowed_types'] = 'jpg|png|gif';
				//allowed max file size. 0 means unlimited file size
				$config['max_size'] = '0';
				//max file name size
				$config['max_filename'] = '255';
				//whether file name should be encrypted or not
				$config['encrypt_name'] = TRUE;
				//store image info once uploaded
				$image_data = array();
				//check for errors
				$is_file_error = FALSE;
		 	
		    $this->load->library('upload', $config);
       if($countFiles>0){ 
			for($i=0; $i<$countFiles; $i++)
			{           
				//---------------------------
				$_FILES['userFile']['name'] = $_FILES['userFiles']['name'][$i];
                $_FILES['userFile']['type'] = $_FILES['userFiles']['type'][$i];
                $_FILES['userFile']['tmp_name'] = $_FILES['userFiles']['tmp_name'][$i];
                $_FILES['userFile']['error'] = $_FILES['userFiles']['error'][$i];
                $_FILES['userFile']['size'] = $_FILES['userFiles']['size'][$i];


               
                $this->upload->initialize($config);
                if($this->upload->do_upload('userFile')){
                    $fileData = $this->upload->data();
                    $uploadData[$i]['file_name'] = $fileData['file_name'];
                    $this->Control_model->AddSlideImg($uploadData[$i]['file_name'],$currentID);
                }
				
			}
		}
		
		 echo $currentID;
		 
	}
	//-------------------------------   // imageID 
	public function deleteNewsImg(){
		$imageID = $this->input->post('imageID');
		$imageName = $this->input->post('imageName');
		$result = $this->Control_model->deleteNewsImg($imageID,$imageName);
		echo $result;
	} 
	
	//-------------------------------
	public function loadNewsImages(){
		$ProID=$this->input->post('ProID');
		$data['newsImg'] = $this->Control_model->loadNewsImg($ProID);
		$this->load->view('control/news_images_list',$data);
		
	}
	//-------------------------------
	public function loadSlideImages(){
		$ProID=$this->input->post('ProID');
		$data['slideImg'] = $this->Control_model->loadSlideImg($ProID);
                $this->load->view('control/slide_images_list',$data);

		
	}
	//-------------------------------
	public function news_list(){
		$data['NewsList']=$this->Control_model->news_list();
		$this->load->view('control/control_header');
		$this->load->view('control/news_list',$data);
		$this->load->view('control/control_footer');
		$this->load->view('control/news_list_script');	
	}
	//-------------------------------
	public function slide_list(){
            
		$data['SlideList']=$this->Control_model->slide_list();
		$this->load->view('control/control_header');
		$this->load->view('control/slide_list',$data);
		$this->load->view('control/control_footer');
		$this->load->view('control/slide_list_script');	
	}
        //-------------------------------
        //-------------------
    public function set_ShowOnWeb() {
        $dataID = $this->input->post('dataID');
        $check = $this->input->post('check');
        $table = $this->input->post('table');
        $result = $this->Control_model->update_ShowOnWeb($dataID, $check, $table);
        echo $result;
    }
	//-------------------------------
	public function service_list(){
		$data['service_list']=$this->Control_model->service_list();
		$this->load->view('control/control_header');
		$this->load->view('control/service_list',$data);
		$this->load->view('control/control_footer');
		$this->load->view('control/service_list_script');	
	}
	//-------------------------------------
        //-------------------------------    
	public function addservice(){
		 $currentID =$this->input->post('currentID');
		 $service_name =$this->input->post('service_name');
		 $service_desc =$this->input->post('service_desc');
		 $date_add =$this->input->post('date_add');
		 
		 
		 $currentID1 = $this->Control_model->addservice($service_name , $service_desc ,$currentID , $date_add );
        
	echo $currentID1;
}
	//------------------------------- deleteNews 
	public function deleteNews(){
		$DataID=$this->input->post('DataID');
		$result = $this->Control_model->deleteNews($DataID);
		echo $result;
	}
	public function deleteSlide(){
		$DataID=$this->input->post('DataID');
		$result = $this->Control_model->deleteSlide($DataID);
		echo $result;
	}
        //--------------------------------------
	public function deleteservice(){
		$DataID=$this->input->post('DataID');
		$result = $this->Control_model->deleteservice($DataID);
		echo $result;
	}
	//-------------------------------
	
	
	
	
	//-------------------------------deleteSlideImg 
	public function deleteSlideImg(){
		$DataID=$this->input->post('currentID');
		$imge_name=$this->input->post('image_name');
		$result = $this->Control_model->deleteSlideImg($DataID,$imge_name);
		echo $result;
	}

	//-------------------------------
	public function getSubCateSlect(){
		$MainCateID=$this->input->post('MainCateID');
		$listSubCate = $this->Control_model->getSubCate($MainCateID);
		$data=array();
		foreach($listSubCate->result() AS $row){
			$data[]=$row;
		}
		
		echo json_encode($data);
	}  
	//-------------------------------	
   public function cangePassForm(){
	   $this->load->view('changepassform');
   }

	//-------------------------------  doChangePass') ', { newpass
    public function doChangePass(){
		$newpass = trim($this->input->post('newpass'));
		
		$result = $this->Control_model->doChangePass($newpass);
		echo $result;
	}
	//-------------------------------
}