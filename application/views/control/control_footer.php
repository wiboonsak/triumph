      <!-- Footer -->
        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                         Copyrights 2018. <span>TRIUMPH</span> | <span>HATYAI. </span> All rights reserved. Developed by <a href="http://www.me-fi.com" target="_blank">ME-FI.com</a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- End Footer -->
  

	<!-- Modal -->
      <!-- sample modal content -->
	<div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
					<h4 class="modal-title titleA" id="myModalLabel">Modal Heading</h4>
				</div>
				<div class="modal-body bodyA"></div>
				<div class="modal-footer">
					<button type="button" class="btn btn-light waves-effect" data-dismiss="modal">Close</button>

				</div>
			</div><!-- /.modal-content -->
		</div><!-- /.modal-dialog -->
	</div><!-- /.modal -->



	<div id="modal_Large" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
		<div class="modal-dialog modal-lg">
			 <div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
					<h4 class="modal-title" id="myModalLabel">Modal Heading</h4>
				</div>
				<div class="modal-body"></div>
				<div class="modal-footer">
					<button type="button" class="btn btn-light waves-effect" data-dismiss="modal">Close</button>                                           
				</div>
			</div><!-- /.modal-content -->
		</div><!-- /.modal-dialog -->
	</div><!-- /.modal -->


    <!-- sample modal content -->
                            <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            <h4 class="modal-title" id="myModalLabel">Modal Heading</h4>
                                        </div>
                                        <div class="modal-body">
                                           
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-light waves-effect" data-dismiss="modal">Close</button>
                                           
                                        </div>
                                    </div><!-- /.modal-content -->
                                </div><!-- /.modal-dialog -->
                            </div><!-- /.modal -->

                       



       <!-- jQuery  -->
        <script src="<?php echo base_url('asset/control/assets/js/jquery.min.js')?>"></script>
        <script src="<?php echo base_url('asset/control/assets/js/popper.min.js')?>"></script>
        <script src="<?php echo base_url('asset/control/assets/js/bootstrap.min.js')?>"></script>
        <script src="<?php echo base_url('asset/control/assets/js/waves.js')?>"></script>
        <script src="<?php echo base_url('asset/control/assets/js/jquery.slimscroll.js')?>"></script>

		<!-- Modal-Effect -->
        <script src="<?php echo base_url('asset/control/plugins/custombox/js/custombox.min.js')?>"></script>
        <script src="<?php echo base_url('asset/control/plugins/custombox/js/legacy.min.js')?>"></script>

		<!-- Bootstrap fileupload js -->
        <script src="<?php echo base_url('asset/control/plugins/bootstrap-fileupload/bootstrap-fileupload.js')?>"></script>
 		<!-- Dropzone js -->
        <script src="<?php echo base_url('asset/control/plugins/dropzone/dropzone.js')?>"></script>

        <script src="<?php echo base_url('asset/control/plugins/switchery/switchery.min.js')?>"></script>
		 <!-- Toastr js -->
        <script src="<?php echo base_url('asset/control/plugins/jquery-toastr/jquery.toast.min.js')?>" type="text/javascript"></script>
        <script src="<?php echo base_url('asset/control/assets/pages/jquery.toastr.js')?>" type="text/javascript"></script>

		 <!-- Sweet Alert Js  -->
        <script src="<?php echo base_url('asset/control/plugins/sweet-alert/sweetalert2.min.js')?>"></script>
        <script src="<?php echo base_url('asset/control/assets/pages/jquery.sweet-alert.init.js')?>"></script>
		

		 <!-- Required datatable js -->
		<script src="<?php echo base_url('asset/control/plugins/datatables/jquery.dataTables.min.js')?>"></script>
		<script src="<?php echo base_url('asset/control/plugins/datatables/dataTables.bootstrap4.min.js')?>"></script>
 <!-- App js -->
        <script src="<?php echo base_url('asset/control/assets/js/jquery.core.js')?>"></script>
        <script src="<?php echo base_url('asset/control/assets/js/jquery.app.js')?>"></script>
		<script>
			function cangePassForm(){
				$.post('<?php echo base_url('control/cangePassForm')?>' , { }, function(data){
						$('#myModal .modal-body').empty();
						$('#myModalLabel').text('เปลี่ยนรหัสผ่าน');
						$('.bodyA').html(data);
						$('#myModal').modal('show');	
				})
			}
			//-----------------------newpass cnewpass
			function DoChangePass(){
				var newpass = $('#newpass').val();
				var cnewpass = $('#cnewpass').val();
				if(newpass==''){
					$('#ShowError').html('<span class="text-danger">กรุณาใส่รหัสผ่านใหม่</span>');
					return false;
				}else if(cnewpass==''){
					$('#ShowError').html('<span class="text-danger">กรุณายืนยันรหัสผ่านใหม่</span>');
					return false;	
				}else if(newpass!=cnewpass){
					$('#ShowError').html('<span class="text-danger">รหัสผ่านและยืนยันรหัสผ่านต้องตรงกัน</span>');
					return false;	
				}else{
					$('#ShowError').empty();
					$.post('<?php echo base_url('control/doChangePass')?>', { newpass : newpass  }, function(data){
						if(data==1){
							alert('เปลียนรหัสผ่านเรียบร้อย');
							$('#myModal').modal('hide');	
						}else{
							$('#ShowError').html('<span class="text-danger">Error ไม่สามารถเปลียนรหัสผ่านได้</span>');
						}
					})
				}
			}
		</script>
