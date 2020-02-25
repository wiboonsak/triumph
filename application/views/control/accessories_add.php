<?php
	if(!isset($accessories_name)){ $accessories_name ='';}
	if(!isset($accessories_desc)){ $accessories_desc ='';}
	if(!isset($accessories_category)){ $accessories_category ='';}
        if(!isset($accessories_price)){ $accessories_price ='';}
	if(!isset($accessories_detail)){ $accessories_detail ='';}
	if(!isset($currentID)){ $currentID ='';}
?>
<div class="wrapper">
<div class="container-fluid">

<!-- Page-Title -->
<div class="row">
	<div class="col-sm-12">
		<div class="page-title-box">

			<h4 class="page-title">ข้อมูลสินค้า</h4>
			<div class="row">
				<div class="col-sm-12">
					<div class="card m-b-30 card-body">
						<h5 class="card-title">
							<div class="progress mb-0" style="display: none">
						<div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
						</div>

							<div class="pull-right">
								<button type="button" class="btn btn-success btn-sm" onClick="window.location.href='<?php echo base_url('control/accessories_add')?>'"><i class="fa fa-plus"></i> เพิ่มสินค้าใหม่</button> 
						    &nbsp;&nbsp;
								<button type="button" class="btn btn-info btn-sm" onClick="window.location.href='<?php echo base_url('control/accessories_list')?>'">กลับหน้ารายการสินค้า</button></div>
						</h5>
						<!-------------->
						<form enctype="multipart/form-data" id="productForm" name="productForm">
						 <div class="form-group row">
							  <label class="col-sm-2 col-form-label">ชื่อสินค้า</label>
								<div class="col-sm-6">
									<input type="text" id="accessories_name" name="accessories_name" class="form-control form-control-sm" value="<?php echo $accessories_name?>">
								</div>
							   <div class="col-sm-4">	</div>
						</div>
						 <div class="form-group row">
							  <label class="col-sm-2 col-form-label">หมวดสินค้า</label>
								<div class="col-sm-6">
									<select id="accessories_category" name="accessories_category"  class="form-control form-control-sm" >
										<option value="0">---เลือกหมวดสินค้า---</option>
										<?php foreach($listCategory->result() AS $category){ ?>
										<option value="<?php echo $category->id?>" <?php if($category->id==$accessories_category){ echo "selected";}?> ><?php echo $category->category_title?></option>
										<?php }?>
									</select>
								</div>
							   
							   <div class="col-sm-4">	</div>
						</div>	
						 <div class="form-group row">
							  <label class="col-sm-2 col-form-label">DESCRIPTION</label>
								<div class="col-sm-6">
									<textarea id="accessories_desc" name="accessories_desc" class="form-control form-contol-sm"><?php echo $accessories_desc?></textarea>
								</div>
							   <div class="col-sm-4">	</div>
						</div> 
                                                    <div class="form-group row">
							  <label class="col-sm-2 col-form-label">ราคา</label>
								<div class="col-sm-6">
									<input type="text" id="accessories_price" name="accessories_price" class="form-control form-control-sm" value="<?php echo $accessories_price?>">
								</div>
							   <div class="col-sm-4">	</div>
						</div>
						<!--<div class="form-group row">
							  <label class="col-sm-2 col-form-label">รายละเอียด</label>
								<div class="col-sm-6">
									<textarea id="product_detail_th" name="product_detail_th" class="form-control form-contol-sm"><?php //echo $product_detail_th?></textarea>
								</div>
							   <div class="col-sm-4">	</div>
						</div>-->

						<div class="form-group row" >
							<div class="col-sm-6" style="text-align: center">
								
							<button type="button" class="btn btn-success btn-sm" onClick="Addproduct()">เพิ่ม/แก้ไขข้อมูล</button>
							<input type="hidden" name="currentID" id="currentID" value="<?php echo $currentID?>">
						
							<input type="hidden" name="accessories_detail" id="accessories_detail" value="<?php echo $accessories_detail?>">
							</div>
					</div>
					<div class="form-group row" >
						 <div id="showError"></div>
					</div>
					<div class="row">
							<div class="col-lg-6">
								<div class="card m-b-30">
									<h6 class="card-header">รูปภาพ</h6>
									<div class="card-body">
									 <input   type="file" id="ImagesFiles" name="userFiles[]" id="multiple" multiple="" /> 
										<a href="#" class="btn btn-custom waves-effect waves-light" onClick="Addproduct()">เพิ่มรูป</a>
										<div id="showImage" style="margin-top: 5px;"></div>
									</div>
								</div>
							</div>

							<div class="col-lg-6">
								<div class="card m-b-30">
									<div class="card-header">
											CATALOUGE
									</div>
									<div class="card-body">
										 <div class="form-group row">
											 <label class="col-2">หัวข้อแคทตาล๊อก</label>
											 <div class="col-4">
											 	<input type="text" id="txtTitle" name="txtTitle" class="form-control form-control-sm">
											 </div>
											  <div class="col-3"> 
												  <input   type="file" id="cFiles" name="catFiles[]" />
											 </div>
											
											 <div class="col-1"> 
												  <a href="#" class="btn btn-custom waves-effect waves-light" onClick="Addproduct()">เพิ่ม Catalogue</a>
											 </div>
										 </div>
										
										<div id="showCat"></div>
									</div>
								</div>
							</div>
					</div>	
						<!-------------->
					</form>
					</div>
				</div>

			</div>
		</div>
	</div>
</div>
<!-- end page title end breadcrumb -->

</div> <!-- end container -->
</div>