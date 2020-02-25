 <?php  if(!isset($currentID)){ $currentID='';}
		if(!isset($slide_title)){ $slide_title ='';}
		if(!isset($slide_detail)){ $slide_detail ='';}
		if(!isset($slide_desc)){ $slide_desc ='';}
		


?>  
<div class="wrapper">
            <div class="container-fluid">

                <!-- Page-Title -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="page-title-box">
                           
                            <h4 class="page-title">ข้อมูล</h4>
							<div class="row">
                    			<div class="col-sm-12">
									<div class="card m-b-30 card-body">
										<h5 class="card-title">
											<div class="progress mb-0" style="display: none">
										<div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
										</div>
										</h5>
						<form enctype="multipart/form-data" id="slideForm" name="slideForm">
						 <div class="form-group row">
							  <label class="col-sm-2 col-form-label">หัวข้อ</label>
								<div class="col-sm-6">
									<input type="text" id="slide_title" name="slide_title" class="form-control form-control-sm" value="<?php echo $slide_title?>" >
								</div>
							   <div class="col-sm-4">	</div>
						</div>
						 <div class="form-group row">
							  <label class="col-sm-2 col-form-label">รายละเอียด</label>
								<div class="col-sm-6">
									<textarea id="slide_detail" name="slide_detail" class="form-control form-control-sm" ><?php echo $slide_detail?></textarea>
								</div>
							   <div class="col-sm-4">	</div>
						</div>	
						 <div class="form-group row">
							  <label class="col-sm-2 col-form-label">ข้อความ</label>
								<div class="col-sm-6">
									<textarea id="slide_desc" name="slide_desc" class="form-control form-control-sm" ><?php echo $slide_desc?></textarea>
								</div>
							   <div class="col-sm-4">	</div>
						</div>	
						 <div class="form-group row">
							  <label class="col-sm-2 col-form-label">รูปภาพ</label>
								<div class="col-sm-6">
									<input   type="file" id="ImagesFiles" name="userFiles[]" multiple /> 
								</div>
							   <div class="col-sm-4">	</div>
						</div>	
						<div class="form-group row" >
							<div class="col-sm-6" style="text-align: center">
							<button type="button" class="btn btn-success btn-sm" onClick="AddSlide()">เพิ่ม/แก้ไขข้อมูล</button>
							<input type="hidden" name="currentID" id="currentID" value="<?php echo $currentID?>">
							</div>
					</div>					
											
						</form>					
										<div id="showImage" style="margin-top: 5px;"></div>
									</div>
								</div>
								
							</div>
                        </div>
                    </div>
                </div>
                <!-- end page title end breadcrumb -->

            </div> <!-- end container -->
        </div>