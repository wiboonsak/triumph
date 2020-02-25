<script>
	function comfirmDelete(DataID , NewsTitle) {
       swal({
                title: 'ต้องการลบข้อมูล ?'+NewsTitle,
                text: "กรุณายืนยันการลบข้อมูล !",
                type: 'warning',
                showCancelButton: true,
                confirmButtonText: 'ยืนยันการลบข้อมูล',
                cancelButtonText: 'ยกเลิก',
                confirmButtonClass: 'btn btn-success mt-2',
                cancelButtonClass: 'btn btn-danger ml-2 mt-2',
                buttonsStyling: false
            }).then(function () {
		   		$.post('<?php echo base_url('control/deleteNews')?>', { DataID : DataID }, function(data){ 
					console.log(data); 
					   if(data=='1'){
						     swal({
								title: 'Deleted !',
								text: "ข้อมูลได้ลบเรียบร้อยแล้ว",
								type: 'success',
								confirmButtonClass: 'btn btn-confirm mt-2'
							}) 
						    $('#row'+DataID).remove();
					   }else{
						   swal({
							title: 'Error',
							text: "ไม่สามารถลบข้อมูลได้",
							type: 'error',
							confirmButtonClass: 'btn btn-confirm mt-2'
                    		})
					   }
				});
               
            }, function (dismiss) {
                // dismiss can be 'cancel', 'overlay',
                // 'close', and 'timer'
                if (dismiss === 'cancel') {
                    swal({
                        title: 'Cancelled',
                        text: "คุณได้ยกเลิกการลบข้อมูล",
                        type: 'error',
                        confirmButtonClass: 'btn btn-confirm mt-2'
                    })
                }
            })
  }
//------------------------------
$('#datatable').DataTable();

</script>