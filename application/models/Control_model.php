<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Control_model extends CI_Model {

    //---------------------- 
    function checklogin($username, $password) {
        $password = md5($password);
        $this->db->where('user_name', $username);
        $this->db->where('password', $password);
        $this->db->where('data_status', '1');
        $query = $this->db->get('tbl_user_data');

        //SELECT * FROM users WHERE username = '$username' AND password = '$password'
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row)
                ;
            $userdata = array(
                'user_id' => $row->id,
                'name' => $row->name_sname,
                'userLv' => $row->position_level,
                'depart_id' => $row->depart_id,
                'branch_id' => $row->brach_id
            );

            $this->session->set_userdata($userdata);
            $pass = 1;
            //-----------last update----------//
            date_default_timezone_set('Asia/Bangkok');
            $now = date("Y-m-d H:i:s");
            $data = array(
                'last_login' => $now
            );
            $this->db->where('id', $row->id);
            $this->db->update('tbl_user_data', $data);
        } else {
            $pass = 0;
        }
        return $pass;
    }

    //-------------------------
    function getMotocycleCategory($datatype = null) {
        $sql = $this->db->query("SELECT * FROM tb_motorcyclecategory WHERE category_status='" . $datatype . "' ORDER BY category_order ASC ");
        return $sql;
    }

    //---------------------- 
    function getMotocycleCategory1($datatype = null) {

        $sql = $this->db->query("SELECT COUNT(*) AS TotalCount, b.id,b.category_title FROM tb_motorcycle_data a INNER JOIN tb_motorcyclecategory b ON a.motorcycle_category = b.id where b.category_status = '" . $datatype . "' GROUP BY b.id,b.category_title");
        return $sql;
    }

    //------------------------------------
    //-------------------------
    function getAccessoriesCategory($datatype = null) {
        $sql = $this->db->query("SELECT * FROM tb_accessoriescategory WHERE category_status='" . $datatype . "' ORDER BY category_order ASC ");
        return $sql;
    }

    //--------------------------tb_accessoriescategory
    function getAccessoriesCategory1($datatype = null) {
        $sql = $this->db->query("SELECT COUNT(*)TotalCount, b.id,b.category_title FROM tb_accessories_data a INNER JOIN tb_accessoriescategory b ON a.accessories_category = b.id where b.category_status = '" . $datatype . "' GROUP BY b.id,b.category_title");
        return $sql;
    }

    //---------------------- 
//	 function getProductSubCategory($datatype){
//		 $sql=$this->db->query("SELECT * FROM tb_product_subcatagory WHERE subcate_status='".$datatype."' ORDER BY subcate_order ASC ");
//		 return $sql;
//	 }
    //---------------------
    function DoAddProductCategory($category_title, $dataID = NULL) {
        if ($dataID == '') {
            $sql = $this->db->query("SELECT MAX(category_order) AS nNax FROM tb_motorcyclecategory WHERE category_status='1' ");
            foreach ($sql->result() AS $data) {
                
            }
            $nMaxIns = $data->nNax + 1;

            $data = array('category_title' => $category_title, 'category_order' => $nMaxIns);
            if ($this->db->insert('tb_motorcyclecategory', $data)) {
                $pass = $this->db->insert_id();
                ;
            } else {
                $pass = 'Error';
            }
        } else {
            $data = array('category_title' => $category_title);
            $this->db->where('id', $dataID);
            if ($this->db->update('tb_motorcyclecategory', $data)) {
                $pass = $dataID;
            } else {
                $pass = 'Error';
            }
        }

        return $pass;
    }

    function DoAddProductCategory1($category_title, $dataID = NULL) {
        if ($dataID == '') {
            $sql = $this->db->query("SELECT MAX(category_order) AS nNax FROM tb_accessoriescategory WHERE category_status='1' ");
            foreach ($sql->result() AS $data) {
                
            }
            $nMaxIns = $data->nNax + 1;

            $data = array('category_title' => $category_title, 'category_order' => $nMaxIns);
            if ($this->db->insert('tb_accessoriescategory', $data)) {
                $pass = $this->db->insert_id();
                ;
            } else {
                $pass = 'Error';
            }
        } else {
            $data = array('category_title' => $category_title);
            $this->db->where('id', $dataID);
            if ($this->db->update('tb_accessoriescategory', $data)) {
                $pass = $dataID;
            } else {
                $pass = 'Error';
            }
        }

        return $pass;
    }

    //---------------------
    function pCategoryDetail($cateID) {
        $sql = $this->db->query("SELECT * FROM tb_motorcyclecategory WHERE id='" . $cateID . "' ");
        return $sql;
    }

    function pCategoryDetail1($cateID=null) {
        $sql = $this->db->query("SELECT * FROM tb_accessoriescategory WHERE id='" . $cateID . "' ");
        return $sql;
    }

    //-------------------------
    function list_cateData($dataID = NULL,$cate=null) {
        if($cate == '1'){
            $this->db->order_by('id', 'RANDOM');
        }
        if ($dataID != '') {
            $this->db->where('id', $dataID);
        }
        $this->db->where('category_status', '1');
        $this->db->select('*');
        $query = $this->db->get('tb_motorcyclecategory');
        return $query;
    }
    //-------------------------
    function list_cateDataAcces($dataID = NULL,$cate=null) {
        if($cate == '1'){
            $this->db->order_by('id', 'RANDOM');
        }
        if ($dataID != '') {
            $this->db->where('id', $dataID);
        }
        $this->db->where('category_status', '1');
        $this->db->select('*');
        $query = $this->db->get('tb_accessoriescategory');
        return $query;
    }


    //---------------------
    function productAndCategory($dataType = NULL) {
        $sql = "SELECT a.* ,b.id AS CateID , b.category_title , b.category_order FROM  tb_product_data a LEFT JOIN tb_product_catagory b ON a.product_category=b.id ORDER BY b.category_order ASC , a.id ASC ";
        $query = $this->db->query($sql);
        return $query;
    }

    //---------------------
    function deletePcate($DataID) {
        $data = array('category_status' => '0');
        $this->db->where('id', $DataID);
        if ($this->db->update('tb_motorcyclecategory', $data)) {
            $pass = '1';
        } else {
            $pass = 'Error';
        }
        return $pass;
    }

    function deletePcateAcces($DataID) {
        $data = array('category_status' => '0');
        $this->db->where('id', $DataID);
        if ($this->db->update('tb_accessoriescategory', $data)) {
            $pass = '1';
        } else {
            $pass = 'Error';
        }
        return $pass;
    }

    //---------------------
//	 function deleteSubcate($DataID){
//		     $data=array('subcate_status'=>'0');
//			 $this->db->where('id', $DataID);
//             if($this->db->update('tb_product_subcatagory', $data)){
//				  $pass = '1';
//			 }else{
//				 $pass = 'Error';
//			}
//		 return $pass;
//	 }
    //--------------------
    function productListByCate($cateID = null, $limit = null, $notUse = null, $start = null, $perpage = null) {
        if ($limit != '') {
            $txtWhere = 'LIMIT ' . $limit;
        } else {
            $txtWhere = '';
        }
        if ($notUse != '') {
            $txtNot = "AND id !='" . $notUse . "' ";
        } else {
            $txtNot = '';
        }
        if (($start >= 0) && ($perpage >= 0)) {
            $txtStart = 'LIMIT ' . $start . ',' . $perpage;
        } else {
            $txtStart = '';
        }

        $sql = "SELECT * FROM tb_motorcycle_data WHERE motorcycle_category ='" . $cateID . "' AND data_status='1' $txtNot $txtWhere $txtStart ";
        $query = $this->db->query($sql);
        return $query;
    }

    //--------------------
    function productList($cateID1 = null, $limit = null, $notUse = null, $start = null, $perpage = null) {
        if ($limit != '') {
            $txtWhere = 'LIMIT ' . $limit;
        } else {
            $txtWhere = '';
        }if ($notUse != '') {
            $txtNot = "AND id !='" . $notUse . "' ";
        } else {
            $txtNot = '';
        }
        if (($start >= 0) && ($perpage >= 0)) {
            $txtStart = 'LIMIT ' . $start . ',' . $perpage;
        } else {
            $txtStart = '';
        }
        $sql = "SELECT * FROM tb_accessories_data WHERE accessories_category ='" . $cateID1 . "' AND data_status='1' $txtNot $txtWhere $txtStart ";
        $query = $this->db->query($sql);
        return $query;
    }

    //---------------------
    function getPdetailCategory($productID = NULL) {
        $sql = "SELECT a.* , b.id AS CategoryID, a.id AS productID , b.motorcycle_name ,b.motorcycle_price,b.motorcycle_desc,b.engine_Type,b.engine_Capacity,b.engine_BoreStroke,b.engine_Compression,b.engine_MaxPowerEC,b.engine_MaxTorqueEC,b.engine_System,b.engine_Exhaust,b.engine_FinalDrive,b.engine_Clutch,b.engine_Gearbox,b.chassis_Frame,b.chassis_Swingarm,b.chassis_FrontWheel,b.chassis_RearWheel,b.chassis_FrontTyre,b.chassis_RearTyre,b.chassis_FrontSuspension,b.chassis_RearSuspension,b.chassis_FrontBrakes,b.chassis_RearBrakes,b.chassis_Display,b.dimension_WidthHandlebars,b.dimension_HeightWithoutMirror,b.dimension_SeatHeight,b.dimension_Wheelbase,b.dimension_Rake,b.dimension_Trail,b.dimension_DryWeight,b.dimension_TankCapacity,b.dimension_Length,b.dimension_TotalWeight,b.wastage_Area,b.wastage_Constant56mph,b.wastage_Constant75mph,b.wastage_FuelConsumption,b.wastage_CO2Figures,b.motorcycle_youtubecode, b.data_status  FROM tb_motorcycle_data b "
                . "LEFT JOIN tb_motorcyclecategory a ON b.motorcycle_category=a.id "
                . "WHERE  b.id='" . $productID . "' ";
        $query = $this->db->query($sql);
        return $query;
    }

    //---------------------
    function getPdetailCategory2($productID = NULL) {
        $sql = "SELECT a.* , b.id AS CategoryID, a.id AS productID , b.*  FROM tb_accessories_data b "
                . "LEFT JOIN tb_accessoriescategory a ON b.accessories_category=a.id "
                . "WHERE  b.id='" . $productID . "' ";
        $query = $this->db->query($sql);
        return $query;
    }

    // $sql=$this->db->query("SELECT a.* ,  b.category_title FROM tb_motorcycle_data a LEFT JOIN tb_motorcyclecategory b ON a.motorcycle_category=b.id WHERE a.data_status='1' AND b.category_status='1'  ORDER BY b.id ASC , b.id ASC ");
    //return $sql; 
    //----------------------
    function checkIsMainCate($MainCateID) {
        $sql = $this->db->query("SELECT id FROM tb_product_catagory WHERE id = '" . $MainCateID . "'  ");
        foreach ($sql->result() AS $data) {
            
        }
        return $data->id;
    }

    //----------------------
    function searchProduct($txtSearch) {

        $sql = "SELECT a.* ,b.id AS CateID , b.category_title , b.category_order FROM  tb_product_data a LEFT JOIN tb_product_catagory b ON a.product_category=b.id WHERE a.product_name_th LIKE '%" . $txtSearch . "%' ORDER BY b.category_order ASC , a.id ASC ";
        $query = $this->db->query($sql);
        return $query;
    }

    //---------------------SELECT * FROM `tb_product_catalogue` ORDER BY `tb_product_catalogue`.`id` ASC
    function getPdetailcatalogue($productID) {
        $sql = "SELECT * FROM tb_motorcycle_catalogue WHERE motorcycle_id ='" . $productID . "' ORDER BY id ASC ";
        $query = $this->db->query($sql);
        return $query;
    }

    //---------------------SELECT * FROM `tb_product_catalogue` ORDER BY `tb_product_catalogue`.`id` ASC
    function getPdetailcatalogue2($productID) {
        $sql = "SELECT * FROM tb_accessories_catalogue WHERE accessories_id ='" . $productID . "' ORDER BY id ASC ";
        $query = $this->db->query($sql);
        return $query;
    }

    //---------------------
    function getFirstImg($dataId) {
        $sql = $this->db->query("SELECT * FROM tb_motorcycle_img WHERE motorcycle_id = '" . $dataId . "' ORDER BY id ASC LiMIT 0,1 ");
        foreach ($sql->result() AS $data) {
            
        }
        return $data->imge_name;
    }

    //---------------------
    function getFirstImg1($dataid) {
        $sql = $this->db->query("SELECT * FROM tb_accessories_img WHERE accessories_id = '" . $dataid . "' ORDER BY id ASC LiMIT 0,1 ");
        foreach ($sql->result() AS $data1) {
            
        }
        return $data1->imge_name;
    }

    //---------------------
    function getNewsImg($dataId) {
        $sql = $this->db->query("SELECT * FROM tbl_news_images WHERE news_id = '" . $dataId . "' ORDER BY id ASC LiMIT 0,1 ");
        foreach ($sql->result() AS $data) {
            
        }
        return $data->images_name;
    }
    //---------------------
    function getSlideImg($dataId) {
        $sql = $this->db->query("SELECT * FROM tbl_slide_img WHERE slide_id = '" . $dataId . "' ORDER BY id ASC LiMIT 0,1 ");
        foreach ($sql->result() AS $data) {
            
        }
        return $data->image_name;
    }

    //---------------------
//    
    function addProduct($currentID, $motorcycle_name, $motorcycle_desc, $motorcycle_detail, $motorcycle_category, $motorcycle_price, $motorcycle_youtubecode, $engine_Type, $engine_Capacity, $engine_BoreStroke, $engine_Compression, $engine_MaxPowerEC, $engine_MaxTorqueEC, $engine_System, $engine_Exhaust, $engine_FinalDrive, $engine_Clutch, $engine_Gearbox, $chassis_Frame, $chassis_Swingarm, $chassis_FrontWheel, $chassis_RearWheel, $chassis_FrontTyre, $chassis_RearTyre, $chassis_FrontSuspension, $chassis_RearSuspension, $chassis_FrontBrakes, $chassis_RearBrakes, $chassis_Display, $dimension_WidthHandlebars, $dimension_HeightWithoutMirror, $dimension_SeatHeight, $dimension_Wheelbase, $dimension_Rake, $dimension_Trail, $dimension_DryWeight, $dimension_TankCapacity, $dimension_Length, $dimension_TotalWeight, $wastage_Area, $wastage_Constant56mph, $wastage_Constant75mph, $wastage_FuelConsumption, $wastage_CO2Figures) {
        $dateUpdate = date("Y-m-d");
        $data = array('motorcycle_name' => $motorcycle_name,
            'motorcycle_category' => $motorcycle_category,
            'motorcycle_desc' => $motorcycle_desc,
            'motorcycle_detail' => $motorcycle_detail,
            'motorcycle_price' => $motorcycle_price,
            'motorcycle_youtubecode' => $motorcycle_youtubecode,
            'engine_Type' => $engine_Type,
            'engine_Capacity' => $engine_Capacity,
            'engine_BoreStroke' => $engine_BoreStroke,
            'engine_Compression' => $engine_Compression,
            'engine_MaxPowerEC' => $engine_MaxPowerEC,
            'engine_MaxTorqueEC' => $engine_MaxTorqueEC,
            'engine_System' => $engine_System,
            'engine_Exhaust' => $engine_Exhaust,
            'engine_FinalDrive' => $engine_FinalDrive,
            'engine_Clutch' => $engine_Clutch,
            'engine_Gearbox' => $engine_Gearbox,
            'chassis_Frame' => $chassis_Frame,
            'chassis_Swingarm' => $chassis_Swingarm,
            'chassis_FrontWheel' => $chassis_FrontWheel,
            'chassis_RearWheel' => $chassis_RearWheel,
            'chassis_FrontTyre' => $chassis_FrontTyre,
            'chassis_RearTyre' => $chassis_RearTyre,
            'chassis_FrontSuspension' => $chassis_FrontSuspension,
            'chassis_RearSuspension' => $chassis_RearSuspension,
            'chassis_FrontBrakes' => $chassis_FrontBrakes,
            'chassis_RearBrakes' => $chassis_RearBrakes,
            'chassis_Display' => $chassis_Display,
            'dimension_WidthHandlebars' => $dimension_WidthHandlebars,
            'dimension_HeightWithoutMirror' => $dimension_HeightWithoutMirror,
            'dimension_SeatHeight' => $dimension_SeatHeight,
            'dimension_Wheelbase' => $dimension_Wheelbase,
            'dimension_Rake' => $dimension_Rake,
            'dimension_Trail' => $dimension_Trail,
            'dimension_DryWeight' => $dimension_DryWeight,
            'dimension_TankCapacity' => $dimension_TankCapacity,
            'dimension_Length' => $dimension_Length,
            'dimension_TotalWeight' => $dimension_TotalWeight,
            'wastage_Area' => $wastage_Area,
            'wastage_Constant56mph' => $wastage_Constant56mph,
            'wastage_Constant75mph' => $wastage_Constant75mph,
            'wastage_FuelConsumption' => $wastage_FuelConsumption,
            'wastage_CO2Figures' => $wastage_CO2Figures,
        );

        if ($currentID == '') {

            if ($this->db->insert('tb_motorcycle_data', $data)) {
                $currentID = $this->db->insert_id();
            } else {
                $currentID = 'Error';
            }
        } else {
            $this->db->where('id', $currentID);
            if ($this->db->update('tb_motorcycle_data', $data)) {
                $currentID = $currentID;
            } else {
                $currentID = 'Error';
            }
        }

        return $currentID;
    }

    function addProduct_acces($currentID, $accessories_name, $accessories_desc, $accessories_detail, $accessories_category, $accessories_price) {
        $dateUpdate = date("Y-m-d");
        $data = array('accessories_name' => $accessories_name,
            'accessories_category' => $accessories_category,
            'accessories_desc' => $accessories_desc,
            'accessories_detail' => $accessories_detail,
            'accessories_price' => $accessories_price
        );

        if ($currentID == '') {

            if ($this->db->insert('tb_accessories_data', $data)) {
                $currentID = $this->db->insert_id();
            } else {
                $currentID = 'Error';
            }
        } else {
            $this->db->where('id', $currentID);
            if ($this->db->update('tb_accessories_data', $data)) {
                $currentID = $currentID;
            } else {
                $currentID = 'Error';
            }
        }

        return $currentID;
    }

    //---------------------------- 
    function getOtherNews($newsID, $limit) {
        $sql = "SELECT * FROM tbl_news_data WHERE id NOT IN ('" . $newsID . "')";
        $query = $this->db->query($sql);
        return $query;
    }

    //---------------------------- 
    function AddImagesData($file_name, $Motorcycle_ID) {
        $data = array('imge_name' => $file_name,
            'motorcycle_id' => $Motorcycle_ID
        );
        $result = $this->db->insert('tb_motorcycle_img', $data);
    }

    function AddImagesData_acces($file_name, $Accessories_ID) {
        $data = array('imge_name' => $file_name,
            'accessories_id' => $Accessories_ID
        );
        $result = $this->db->insert('tb_accessories_img', $data);
    }

    //----------------------------
    function loadProductImg($ProID) {
        $sql = $this->db->query("SELECT * FROM `tb_motorcycle_img` WHERE motorcycle_id ='" . $ProID . "'  ");
        return $sql;
    }

    function loadProductImg_acces($ProID) {
        $sql = $this->db->query("SELECT * FROM `tb_accessories_img` WHERE accessories_id ='" . $ProID . "'  ");
        return $sql;
    }

    //----------------------------
    function loadNewsImg($ProID) {
        $sql = $this->db->query("SELECT * FROM `tbl_news_images` WHERE news_id ='" . $ProID . "'  ");
        return $sql;
    }

    //----------------------------
    function loadSlideImg($ProID) {
        $sql = $this->db->query("SELECT * FROM `tbl_slide_img` WHERE slide_id ='" . $ProID . "'  ");
        return $sql;
    }

    //----------------------------
    function loadProductFile($ProID) {
        $sql = $this->db->query("SELECT * FROM `tb_motorcycle_catalogue` WHERE motorcycle_id ='" . $ProID . "'  ");
        return $sql;
    }

    function loadProductFile_acces($ProID) {
        $sql = $this->db->query("SELECT * FROM `tb_accessories_catalogue` WHERE accessories_id ='" . $ProID . "'  ");
        return $sql;
    }

    //----------------------------AddCatalogueData($uploadData[$i]['file_name'],$ResultAddProduct)
    function AddCatalogueData($file_name, $MotorcycleID, $txtTitle) {
        $data = array('imge_name' => $file_name,
            'motorcycle_id' => $MotorcycleID,
            'txtTitle' => $txtTitle);
        $result = $this->db->insert('tb_motorcycle_catalogue', $data);
    }

    function AddCatalogueData_acces($file_name, $AccessoriesID, $txtTitle) {
        $data = array('imge_name' => $file_name,
            'accessories_id' => $AccessoriesID,
            'txtTitle' => $txtTitle);
        $result = $this->db->insert('tb_accessories_catalogue', $data);
    }

    //----------deleteProductFile($DataID, $fileType);fileType  images file  deleteProductFile
    function deleteProductFile($DataID, $fileType, $fileName) {
        if ($fileType == 'imgfile') {
            $this->db->where('imge_name', $fileName);
            if ($this->db->delete('tb_motorcycle_img')) {
                $pass = 1;
                @unlink('./uploadfile/product/' . $fileName);
            } else {
                $pass = 0;
            }
        } else if ($fileType == 'catalgoue') {
            $this->db->where('imge_name', $fileName);
            if ($this->db->delete('tb_motorcycle_catalogue')) {
                $pass = 1;
                @unlink('./uploadfile/catalogue/' . $fileName);
            } else {
                $pass = 0;
            }
        }
        return $pass;
    }

    function deleteProductFile1($DataID, $fileType, $fileName) {
        if ($fileType == 'imgfile') {
            $this->db->where('imge_name', $fileName);
            if ($this->db->delete('tb_accessories_img')) {
                $pass = 1;
                @unlink('./uploadfile/product/' . $fileName);
            } else {
                $pass = 0;
            }
        } else if ($fileType == 'catalgoue') {
            $this->db->where('imge_name', $fileName);
            if ($this->db->delete('tb_accessories_catalogue')) {
                $pass = 1;
                @unlink('./uploadfile/catalogue/' . $fileName);
            } else {
                $pass = 0;
            }
        }
        return $pass;
    }

    //------------------------------------ getProductDetail($curentID)
    function getMotocycleDetail($productID) {
        $sql = $this->db->query("SELECT * FROM tb_motorcycle_data WHERE id = '" . $productID . "' ");
        return $sql;
    }

    //-------------------------------------
    function getAccessoriesDetail($productID) {
        $sql = $this->db->query("SELECT * FROM tb_accessories_data WHERE id = '" . $productID . "' ");
        return $sql;
    }
    //-------------------------------------
   
    //----------------------------------------
    function getServiceDetail1() {
        $sql = $this->db->query("SELECT * FROM tb_service_data WHERE data_status = '1' ");
        return $sql;
    }

    //----------------------------------------
    function getNewsDetail1($limit = null, $notUse = null, $start = null, $perpage = null) {
        if ($limit != '') {
            $txtWhere = 'LIMIT ' . $limit;
        } else {
            $txtWhere = '';
        }if ($notUse != '') {
            $txtNot = "AND id !='" . $notUse . "' ";
        } else {
            $txtNot = '';
        }
        if (($start >= 0) && ($perpage >= 0)) {
            $txtStart = 'LIMIT ' . $start . ',' . $perpage;
        } else {
            $txtStart = '';
        }
        $sql = $this->db->query("SELECT * FROM  tbl_news_data WHERE news_status = '1' $txtWhere $txtNot $txtStart");
        return $sql;
    }
    //--------------------------------
    function getSlideDetail1(){
        $sql = $this->db->query("SELECT * FROM  tbl_slide_data WHERE show_onweb = '1'") ;
        return $sql;
    }

    //----------------------------------------
    function getNewsDetailByID($productID) {
        $sql = $this->db->query("SELECT * FROM  tbl_news_data WHERE id = '" . $productID . "' AND news_status = '1' ");
        return $sql;
    }

    //------------------------------------ 
    function getMotocycleList() {

        $sql = $this->db->query("SELECT a.* ,  b.category_title FROM tb_motorcycle_data a LEFT JOIN tb_motorcyclecategory b ON a.motorcycle_category=b.id WHERE a.data_status='1' AND b.category_status='1'  ORDER BY b.category_order ASC,a.id ASC");
        return $sql;
    }

    function getAccessoriesList() {
        $sql = $this->db->query("SELECT a.* ,  b.category_title FROM tb_accessories_data a LEFT JOIN tb_accessoriescategory b ON a.accessories_category=b.id WHERE a.data_status='1' AND b.category_status='1' ORDER BY b.id ASC , b.id ASC ");
        return $sql;
    }

    //------------------------------------ 
    function DeleteProduct_acces($DataID) {
        //-------------images----------//
        $sqlImage = $this->db->query("SELECT * FROM tb_accessories_img WHERE accessories_id ='" . $DataID . "' ");
        foreach ($sqlImage->result() AS $image) {
            @unlink('./uploadfile/product/' . $image->imge_name);
        }
        $this->db->where('accessories_id', $DataID);
        $this->db->delete('tb_accessories_img');
        //-------------catalogue----------//
        $sqlCat = $this->db->query("SELECT * FROM tb_accessories_catalogue WHERE accessories_id ='" . $DataID . "' ");
        foreach ($sqlCat->result() AS $image) {
            @unlink('./uploadfile/catalogue/' . $image->imge_name);
        }
        $this->db->where('accessories_id', $DataID);
        $this->db->delete('tb_accessories_catalogue');
        //-------------data-------------//
        $this->db->where('id', $DataID);
        if ($this->db->delete('tb_accessories_data')) {
            $pass = 1;
        } else {
            $pass = 0;
        }
        return $pass;
    }

    function DeleteProduct($DataID) {
        //-------------images----------//
        $sqlImage = $this->db->query("SELECT * FROM tb_motorcycle_img WHERE motorcycle_id ='" . $DataID . "' ");
        foreach ($sqlImage->result() AS $image) {
            @unlink('./uploadfile/product/' . $image->imge_name);
        }
        $this->db->where('motorcycle_id', $DataID);
        $this->db->delete('tb_motorcycle_img');
        //-------------catalogue----------//
        $sqlCat = $this->db->query("SELECT * FROM tb_motorcycle_catalogue WHERE motorcycle_id ='" . $DataID . "' ");
        foreach ($sqlCat->result() AS $image) {
            @unlink('./uploadfile/catalogue/' . $image->imge_name);
        }
        $this->db->where('motorcycle_id', $DataID);
        $this->db->delete('tb_motorcycle_catalogue');
        //-------------data-------------//
        $this->db->where('id', $DataID);
        if ($this->db->delete('tb_motorcycle_data')) {
            $pass = 1;
        } else {
            $pass = 0;
        }
        return $pass;
    }

    //------------------------------------
    function updateOrderCate($dataID, $changeValue) {
        $data = array('category_order' => $changeValue);
        $this->db->where('id', $dataID);
        if ($this->db->update('tb_motorcyclecategory', $data)) {
            $pass = 1;
        } else {
            $pass = 0;
        }
        return $pass;
    }

    function updateOrderCate_acces($dataID, $changeValue) {
        $data = array('category_order' => $changeValue);
        $this->db->where('id', $dataID);
        if ($this->db->update('tb_accessoriescategory', $data)) {
            $pass = 1;
        } else {
            $pass = 0;
        }
        return $pass;
    }

    //------------------------------------
    function updateOrderSubCate($dataID, $changeValue) {
        $data = array('subcate_order' => $changeValue);
        $this->db->where('id', $dataID);
        if ($this->db->update('tb_product_subcatagory', $data)) {
            $pass = 1;
        } else {
            $pass = 0;
        }
        return $pass;
    }

    //------------------------------------
    function addNews($news_title, $news_detail, $currentID, $news_date_add) {
        $data = array('news_title' => $news_title, 'news_detail' => $news_detail, 'news_date_add' => $news_date_add);
        if ($currentID == '') {
            if ($this->db->insert('tbl_news_data', $data)) {
                $pass = $this->db->insert_id();
            } else {
                $pass = 'Error';
            }
        } else {
            $this->db->where('id', $currentID);
            if ($this->db->update('tbl_news_data', $data)) {
                $pass = $currentID;
            } else {
                $pass = 'Error';
            }
        }

        return $pass;
    }

    //------------------------------------
    function addSlide($slide_title, $slide_detail, $currentID, $slide_desc) {
        $data = array('slide_title' => $slide_title, 'slide_detail' => $slide_detail, 'slide_desc' => $slide_desc);
        if ($currentID == '') {
            if ($this->db->insert('tbl_slide_data', $data)) {
                $pass = $this->db->insert_id();
            } else {
                $pass = 'Error';
            }
        } else {
            $this->db->where('id', $currentID);
            if ($this->db->update('tbl_slide_data', $data)) {
                $pass = $currentID;
            } else {
                $pass = 'Error';
            }
        }

        return $pass;
    }

    //------------------------------------
    function addservice($service_name, $service_desc, $currentID, $date_add) {
        $data = array('service_name' => $service_name, 'service_desc' => $service_desc, 'date_add' => $date_add);
        if ($currentID == '') {
            if ($this->db->insert(' tb_service_data', $data)) {
                $pass = $this->db->insert_id();
            } else {
                $pass = 'Error';
            }
        } else {
            $this->db->where('id', $currentID);
            if ($this->db->update(' tb_service_data', $data)) {
                $pass = $currentID;
            } else {
                $pass = 'Error';
            }
        }

        return $pass;
    }

    //------------------------------------
    function AddNewsImg($file_name, $ProductID) {
        $data = array('images_name' => $file_name,
            'news_id' => $ProductID
        );
        if ($result = $this->db->insert('tbl_news_images', $data)) {
            $pass = '';
        } else {
            $pass = 'Errpr';
        }
    }

    //------------------------------------
    function AddSlideImg($file_name, $ProductID) {
        $data = array('image_name' => $file_name,
            'slide_id' => $ProductID
        );
        if ($result = $this->db->insert('tbl_slide_img', $data)) {
            $pass = '';
        } else {
            $pass = 'Errpr';
        }
    }

    //------------------------------------
    function deleteNewsImg($imageID, $imageName) {
        $this->db->where('id', $imageID);
        if ($this->db->delete('tbl_news_images')) {
            @unlink('./uploadfile/news/' . $imageName);
            $pass = 1;
        } else {
            $pass = 0;
        }
        return $pass;
    }

    //------------------------------------
    function news_list() {
        $sql = $this->db->query("SELECT * FROM tbl_news_data WHERE news_status = '1' ORDER BY id ");
        return $sql;
    }

    //---------------------------
    function slide_list() {
        $sql = $this->db->query("SELECT * FROM tbl_slide_data WHERE show_onweb = '1' ORDER BY id ");
        return $sql;
    }

//-------------------------------
//---------------------------	 
    function update_ShowOnWeb($dataID = NULL, $check = NULL, $table = NULL) {
        $data = array(
            'show_onweb' => $check
        );
        $this->db->where('id', $dataID);
        if ($this->db->update($table, $data)) {
            $pass = 1;
        } else {
            $pass = 0;
            //$this->db->_error_message(); 
        }
        return $pass;
    }

    //------------------------------------
    function service_list() {
        $sql = $this->db->query("SELECT * FROM tb_service_data WHERE data_status = '1' ORDER BY id ");
        return $sql;
    }

    //------------------------------------
    function news_listWWW($page, $rowPerpage) {


        if (isset($page)) {
            $page = intval($page);
        } else {
            $page = 1;
        }
        $calc = $rowPerpage * $page;
        $start = $calc - $rowPerpage;

        $sql = "SELECT * FROM tbl_news_data ORDER BY id DESC LIMIT $start , $rowPerpage  ";
        $query = $this->db->query($sql);
        return $query;
    }

    //------------------------------------
    function getNewDetail($curentID) {
        $this->db->where('id', $curentID);
        $sql = $this->db->get('tbl_news_data');
        return $sql;
    }

    //------------------------------------
    function getslideDetail($curentID=null) {
        $this->db->where('id', $curentID);
        $sql = $this->db->get('tbl_slide_data');
        return $sql;
    }

    //------------------------------------
    function getserviceDetail($curentID) {
        $this->db->where('id', $curentID);
        $sql = $this->db->get('tb_service_data');
        return $sql;
    }

    //------------------------------------
    function deleteNews($DataID) {
        $sql = $this->db->query("SELECT * FROM tbl_news_images WHERE news_id ='" . $DataID . "' ");
        foreach ($sql->result() AS $data) {
            @unlink('./uploadfile/news/' . $data->images_name);
        }
        $this->db->where('news_id', $DataID);
        $this->db->delete('tbl_news_images');
        $data = array('news_status' => '0');
        $this->db->where('id', $DataID);
        if ($this->db->update('tbl_news_data', $data)) {
            $pass = '1';
        } else {
            $pass = 'Error';
        }
        return $pass;
    }

    //------------------------------------
    function deleteSlide($DataID=null) {
        $sql = $this->db->query("SELECT * FROM tbl_slide_img WHERE slide_id ='" . $DataID . "' ");
        foreach ($sql->result() AS $data) {
            @unlink('./uploadfile/banner/' . $data->image_name);
        }
        $this->db->where('slide_id', $DataID);
        $this->db->delete('tbl_slide_img');
      $this->db->where('id', $DataID);
        if($this->db->delete('tbl_slide_data')){
            $pass = '1';
        }else{
            $pass = 'Error';
        }
        return $pass;
    }

    //------------------------------------
    function deleteservice($DataID) {

        $data = array('data_status' => '0');
        $this->db->where('id', $DataID);
        if ($this->db->update('tb_service_data', $data)) {
            $pass = '1';
        } else {
            $pass = 'Error';
        }
        return $pass;
    }

    //------------------------------------
    function firsnImgNews($newsId) {
        $sql = $this->db->query("SELECT * FROM tbl_news_images WHERE news_id ='" . $newsId . "' ORDER BY id ASC LIMIT 0,1  ");
        foreach ($sql->result() AS $data) {
            
        }
        return $data->images_name;
    }

    //------------------------------------
    function bannger_list() {
        $this->db->order_by('id', 'DESC');
        $sql = $this->db->get('tbl_images_slide');
        return $sql;
    }

    //------------------------------------
    function DoAddBannerImg($file_name) {
        $data = array('imge_name' => $file_name);
        if ($result = $this->db->insert('tbl_images_slide', $data)) {
            $pass = '1';
        } else {
            $pass = 'Errpr';
        }
        return $pass;
    }

    //------------------------------------
    function deleteSlideImg($DataID, $imge_name) {
        $this->db->where('id', $DataID);
        if ($this->db->delete('tbl_slide_img')) {
            @unlink('./uploadfile/banner/' . $imge_name);
            $pass = 1;
        } else {
            $pass = 0;
        }
        return $pass;
    }

    //------------------------------------
    function html_cut($text, $max_length) {
        $tags = array();
        $result = "";

        $is_open = false;
        $grab_open = false;
        $is_close = false;
        $in_double_quotes = false;
        $in_single_quotes = false;
        $tag = "";

        $i = 0;
        $stripped = 0;

        $stripped_text = strip_tags($text);

        while ($i < strlen($text) && $stripped < strlen($stripped_text) && $stripped < $max_length) {
            $symbol = $text{$i};
            $result .= $symbol;

            switch ($symbol) {
                case '<':
                    $is_open = true;
                    $grab_open = true;
                    break;

                case '"':
                    if ($in_double_quotes)
                        $in_double_quotes = false;
                    else
                        $in_double_quotes = true;

                    break;

                case "'":
                    if ($in_single_quotes)
                        $in_single_quotes = false;
                    else
                        $in_single_quotes = true;

                    break;

                case '/':
                    if ($is_open && !$in_double_quotes && !$in_single_quotes) {
                        $is_close = true;
                        $is_open = false;
                        $grab_open = false;
                    }

                    break;

                case ' ':
                    if ($is_open)
                        $grab_open = false;
                    else
                        $stripped++;

                    break;

                case '>':
                    if ($is_open) {
                        $is_open = false;
                        $grab_open = false;
                        array_push($tags, $tag);
                        $tag = "";
                    } else if ($is_close) {
                        $is_close = false;
                        array_pop($tags);
                        $tag = "";
                    }

                    break;

                default:
                    if ($grab_open || $is_close)
                        $tag .= $symbol;

                    if (!$is_open && !$is_close)
                        $stripped++;
            }

            $i++;
        }

        while ($tags)
            $result .= "</" . array_pop($tags) . ">";


        return $result;
    }

    //------------------------------
    function str_limit_html($value, $limit) {

        if (mb_strwidth($value, 'UTF-8') <= $limit) {
            return $value;
        }

        // Strip text with HTML tags, sum html len tags too.
        // Is there another way to do it?
        do {
            $len = mb_strwidth($value, 'UTF-8');
            $len_stripped = mb_strwidth(strip_tags($value), 'UTF-8');
            $len_tags = $len - $len_stripped;

            $value = mb_strimwidth($value, 0, $limit + $len_tags, '', 'UTF-8');
        } while ($len_stripped > $limit);

        // Load as HTML ignoring errors
        $dom = new DOMDocument();
        @$dom->loadHTML('<?xml encoding="utf-8" ?>' . $value, LIBXML_HTML_NODEFDTD);

        // Fix the html errors
        $value = $dom->saveHtml($dom->getElementsByTagName('body')->item(0));

        // Remove body tag
        $value = mb_strimwidth($value, 6, mb_strwidth($value, 'UTF-8') - 13, '', 'UTF-8'); // <body> and </body>
        // Remove empty tags
        return preg_replace('/<(\w+)\b(?:\s+[\w\-.:]+(?:\s*=\s*(?:"[^"]*"|"[^"]*"|[\w\-.:]+))?)*\s*\/?>\s*<\/\1\s*>/', '', $value);
    }

//------------------------------------
    function getDay($strDate = NULL) {
        $dateArray = explode("-", $strDate);
        $date2 = $dateArray[2];
        $mon = $dateArray[1];
        $year = $dateArray[0];


        $monthArray = array("01" => "Jan", "02" => "Feb", "03" => "Mar", "04" => "Apr", "05" => "May", "06" => "Jun", "07" => "Jul", "08" => "Aug", "09" => "Sep", "10" => "Oct", "11" => "Nov", "12" => "Dec");
        if ($dateArray[0] == 2018) {
            $year = $dateArray[0] + 543;
        }
        if ($date2 < 10) {
            $date2 = str_replace("0", "", $date2);
        }
        $day = $date2 . "&nbsp;&nbsp;" . $monthArray[$mon] . "&nbsp;&nbsp;" . $year;
        return $date2;
    }

//------------------------------------
    function getMonth($strDate = NULL) {
        $dateArray = explode("-", $strDate);
        $date2 = $dateArray[2];
        $mon = $dateArray[1];
        $year = $dateArray[0];


        $monthArray = array("01" => "Jan", "02" => "Feb", "03" => "Mar", "04" => "Apr", "05" => "May", "06" => "Jun", "07" => "Jul", "08" => "Aug", "09" => "Sep", "10" => "Oct", "11" => "Nov", "12" => "Dec");
        if ($dateArray[0] == 2018) {
            $year = $dateArray[0] + 543;
        }
        if ($date2 < 10) {
            $date2 = str_replace("0", "", $date2);
        }
        $day = $date2 . "&nbsp;&nbsp;" . $monthArray[$mon] . "&nbsp;&nbsp;" . $year;
        return $monthArray[$mon];
    }

//------------------------------------
    function getYear($strDate = NULL) {
        $dateArray = explode("-", $strDate);
        $date2 = $dateArray[2];
        $mon = $dateArray[1];
        $year = $dateArray[0];


        $monthArray = array("01" => "Jan", "02" => "Feb", "03" => "Mar", "04" => "Apr", "05" => "May", "06" => "Jun", "07" => "Jul", "08" => "Aug", "09" => "Sep", "10" => "Oct", "11" => "Nov", "12" => "Dec");
        if ($dateArray[0] == 2018) {
            $year = $dateArray[0];
        }
        if ($date2 < 10) {
            $date2 = str_replace("0", "", $date2);
        }
        $day = $date2 . "&nbsp;&nbsp;" . $monthArray[$mon] . "&nbsp;&nbsp;" . $year;
        return $year;
    }

    //$strMonthCut =array("01"=>"Jan","02"=>"Feb","03"=>"Mar","04"=>"Apr","05"=>"May","06"=>"Jun","07"=>"Jul","08"=>"Aug","09"=>"Sep","10"=>"Oct","11"=>"Nov","12"=>"Dec");
    //------------------------------------
    function getDayMonthYear($strDate = NULL) {
        $dateArray = explode("-", $strDate);
        $date2 = $dateArray[2];
        $mon = $dateArray[1];
        $year = $dateArray[0];


        $monthArray = array("01" => "Jan", "02" => "Feb", "03" => "Mar", "04" => "Apr", "05" => "May", "06" => "Jun", "07" => "Jul", "08" => "Aug", "09" => "Sep", "10" => "Oct", "11" => "Nov", "12" => "Dec");
        if ($dateArray[0] == 2018) {
            $year = $dateArray[0];
        }
        if ($date2 < 10) {
            $date2 = str_replace("0", "", $date2);
        }
        $day = $date2 . "&nbsp;&nbsp;" . $monthArray[$mon] . "&nbsp;&nbsp;" . $year;
        return $day;
    }

//------------------------------------	
//------------------------------------
    function CountSubCate($mainCateID) {
        $sql = $this->db->query("SELECT COUNT(id) AS NumSubCate FROM tb_product_subcatagory WHERE main_cate_id='" . $mainCateID . "' AND subcate_status='1' ");
        foreach ($sql->result() AS $data) {
            
        }
        return $data->NumSubCate;
    }

//------------------------------------
    function getSubCate($mainCateID) {
        $sql = $this->db->query("SELECT * FROM  tb_product_subcatagory WHERE main_cate_id='" . $mainCateID . "' AND subcate_status='1' ORDER BY subcate_order ASC ");
        return $sql;
    }

    //-----------------------------------
    function getProductList($mainCate, $subcategory) {
        $sql = "SELECT * FROM  tb_product_data WHERE  product_category ='" . $mainCate . "' AND product_sub_category = '" . $subcategory . "' ";
        $query = $this->db->query($sql);
        return $query;
    }

    //-------------------------------------
    function doChangePass($newpass) {
        $newpass = md5($newpass);
        $sql = "UPDATE tbl_user_data SET `password` = '" . $newpass . "' ";
        if ($this->db->query($sql)) {
            return 1;
        } else {
            return 0;
        }
    }

    //-------------------------------------
}
