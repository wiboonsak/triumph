 <?php  if(!isset($currentID)){ $currentID='';}
		if(!isset($news_title)){ $news_title ='';}
		if(!isset($news_detail)){ $news_detail ='';}
		if(!isset($news_date_add)){ $news_date_add =date("d-m-Y");}


?>  
<div class="wrapper">
            <div class="container-fluid">

                <!-- Page-Title -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="page-title-box">
                           
                            <h4 class="page-title">ข้อมูลข่าวสาร</h4>
							<div class="row">
                    			<div class="col-sm-12">
									<div class="card m-b-30 card-body">
										<h5 class="card-title">
											<div class="progress mb-0" style="display: none">
										<div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
										</div>
										</h5>
						<form enctype="multipart/form-data" id="productForm" name="productForm">
						 <div class="form-group row">
							  <label class="col-sm-2 col-form-label">หัวข้อข่าวสาร</label>
								<div class="col-sm-6">
									<input type="text" id="news_title" name="news_title" class="form-control form-control-sm" value="<?php echo $news_title?>" >
								</div>
							   <div class="col-sm-4">	</div>
						</div>
						 <div class="form-group row">
							  <label class="col-sm-2 col-form-label">รายละเอียดข่าวสาร</label>
								<div class="col-sm-6">
									<textarea id="news_detail" name="news_detail" class="form-control form-control-sm" ><?php echo $news_detail?></textarea>
								</div>
							   <div class="col-sm-4">	</div>
						</div>	
							 <div class="form-group row">
							  <label class="col-sm-2 col-form-label">วันที่</label>
								<div class="col-sm-6">
									<input   type="date" id="news_date_add" name="news_date_add" value="<?php echo $news_date_add?>" class="form-control form-control-sm"/> 
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
							<button type="button" class="btn btn-success btn-sm" onClick="AddNews()">เพิ่ม/แก้ไขข้อมูล</button>
							<input type="hidden" name="currentID" id="currentID" value="<?php echo $currentID?>">
							</div>
					</div>					
											
						</form>					
										<div id="showImage"></div>
									</div>
								</div>
								
							</div>
                        </div>
                    </div>
                </div>
                <!-- end page title end breadcrumb -->

            </div> <!-- end container -->
        </div>