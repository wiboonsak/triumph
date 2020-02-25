 <?php  if(!isset($currentID)){ $currentID='';}
		if(!isset($service_name)){ $service_name ='';}
		if(!isset($service_desc)){ $service_desc ='';}
		if(!isset($date_add)){ $date_add =date("Y-m-d");}


?>  
<div class="wrapper">
            <div class="container-fluid">

                <!-- Page-Title -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="page-title-box">
                           
                            <h4 class="page-title">Service</h4>
							<div class="row">
                    			<div class="col-sm-12">
									<div class="card m-b-30 card-body">
										<h5 class="card-title">
											<div class="progress mb-0" style="display: none">
										<div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
										</div>
										</h5>
						<form enctype="multipart/form-data" id="serviceForm" name="serviceForm">
						 <div class="form-group row">
							  <label class="col-sm-2 col-form-label">หัวข้อ</label>
								<div class="col-sm-6">
									<input type="text" id="service_name" name="service_name" class="form-control form-control-sm" value="<?php echo $service_name?>" >
								</div>
							   <div class="col-sm-4">	</div>
						</div>
						 <div class="form-group row">
							  <label class="col-sm-2 col-form-label">รายละเอียด</label>
								<div class="col-sm-6">
									<textarea id="service_desc" name="service_desc" class="form-control form-control-sm" ><?php echo $service_desc?></textarea>
								</div>
							   <div class="col-sm-4">	</div>
						</div>	
							 <div class="form-group row">
							  <label class="col-sm-2 col-form-label">วันที่</label>
								<div class="col-sm-6">
									<input   type="date" id="date_add" name="date_add" value="<?php echo $date_add?>" class="form-control form-control-sm"/> 
								</div>
							   <div class="col-sm-4">	</div>
						</div>	
						<div class="form-group row" >
							<div class="col-sm-6" style="text-align: center">
							<button type="button" class="btn btn-success btn-sm" onClick="Add()">เพิ่ม/แก้ไขข้อมูล</button>
							<input type="hidden" name="currentID" id="currentID" value="<?php echo $currentID?>">
							</div>
					</div>					
											
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