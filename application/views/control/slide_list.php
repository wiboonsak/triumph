
<div class="wrapper">
            <div class="container-fluid">

                <!-- Page-Title -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="page-title-box">
                           
                            <h4 class="page-title">Slide</h4>
							<div class="row">
                    			<div class="col-sm-12">
									<div class="card m-b-30 card-body">
										<h5 class="card-title">
											<div class="progress mb-0" style="display: none">
										<div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
										</div>

										</h5>
										<div id="showData">
										<table id="datatable" class="table table-hover">
                                <thead>
                                <tr>
                                    <th width="10">#</th>
                                    <th>หัวข้อ</th>
                                    <th style="text-align: center">กำหนดแสดงหน้าเว็บ</th>
                                   <th width="5" style="text-align: center">แก้ไข</th>
                                                                    <th width="5" style="text-align: center">ลบ</th>
                                </tr>
                                </thead>
                                <tbody>
								<?php $n=1; foreach($SlideList->result() AS $data){ ?>	
                                <tr id="row<?php echo $data->id?>">
                                    <th scope="row"><?php echo $n?></th>
                                    <td><?php echo $data->slide_title?></td>
                                  <td align="center">
                                                                            <label>
                                                                                <input id="ch<?php echo $data->id ?>"  type="checkbox" class="js-switch js-check-change" onClick="setShow_onWeb('<?php echo $data->id ?>', this.value, 'tbl_slide_data')" value="<?php echo $data->show_onweb ?>"  <?php
                                                                                      if ($data->show_onweb == '1') {
                                                                                           echo 'checked';
                                                                                       }
                                                                                       ?> data-plugin="switchery" data-color="#007bff" data-size="small"  /></label>
                                                                        </td>
                                                                <?php}?>
                                   
                                    <td><button type="button" class="btn btn-success btn-sm" onClick="window.location.href='<?php echo base_url('control/slide_add/'.$data->id)?>'"><i class="icon-pencil"></i></button></td>
                                    <td><button type="button" class="btn btn-danger btn-sm" onClick="comfirmDelete('<?php echo $data->id?>' , '<?php echo $data->slide_title?>')"><i class="icon-trash"></i></button></td>
                                </tr>
                                <?php $n++; }?>
                                </tbody>
                            </table>
											
										</div>
									</div>
								</div>
								
							</div>
                        </div>
                    </div>
                </div>
                <!-- end page title end breadcrumb -->

            </div> <!-- end container -->
        </div>