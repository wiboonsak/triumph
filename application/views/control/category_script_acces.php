<script>
	function updateOrder(dataID,FieldName,changeValue){
		var returnValue = $('#chkOrder'+dataID).val();
		console.log('returnValue:-'+returnValue)
		 if((changeValue=='')){
							swal({
								title: 'คำเตือน !',
								text: "กรุณาใส่หมายเลขเรียงลำดับ",
								type: 'success',
								confirmButtonClass: 'btn btn-confirm mt-2'
							}) 
			 $('#order'+dataID).val(returnValue);
			 return false;   
		}else{
			$.post('<?php echo base_url('control/updateOrderCate')?>',{ dataID:dataID , FieldName:FieldName , changeValue:changeValue }
				  ,function(data){ 
						if(data==1){
							 $.toast({
									heading: 'บันทึกข้อมูลสำเร็จแล้ว!',
									text: '',
									position: 'top-right',
									loaderBg: '#5ba035',
									icon: 'success',
									hideAfter: 3000,
									stack: 1
								});
						}else{
								$.toast({
									heading: 'ไม่สามารถแก้ไขข้อมูลได้!',
									text: '',
									position: 'top-right',
									loaderBg: '#FF5B5E',
									icon: 'warning',
									hideAfter: 3000,
									stack: 1
								});
						}
			   })
		}
	}
	//-------------------------
	function comfirmDelete(DataID , cateName) {
       swal({
                title: 'ต้องการลบข้อมูล ?'+cateName,
                text: "กรุณายืนยันการลบข้อมูล !",
                type: 'warning',
                showCancelButton: true,
                confirmButtonText: 'ยืนยันการลบข้อมูล',
                cancelButtonText: 'ยกเลิก',
                confirmButtonClass: 'btn btn-success mt-2',
                cancelButtonClass: 'btn btn-danger ml-2 mt-2',
                buttonsStyling: false
            }).then(function () {
		   		$.post('<?php echo base_url('control/deletePcateAcces')?>', { DataID : DataID }, function(data){  
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
	//---------------------------------
	function AddCateGory(){
		
		var files = $('#files').val()
		var category_title = $('#category_title').val();
		var oldImg=$('#oldImg').val();
		console.log(files);
		var postData = new FormData($("#categoryForm")[0]);
		
		 if(category_title==''){
						alert('กรุณาใส่ชื่อหมวดสินค้า');
						 return false;
		}else{
				$.ajax({
						 type:'POST',
						 url:'<?php echo base_url('control/DoAddProductCategory1')?>',
						 processData: false,
						 contentType: false,
						 data : postData,
						 xhr: function(){
							//upload Progress
							var xhr = $.ajaxSettings.xhr();
							if (xhr.upload) {
								$(".progress").show();
								xhr.upload.addEventListener('progress', function(event) {
									var percent = 0;
									var position = event.loaded || event.position;
									var total = event.total;
									if (event.lengthComputable) {
										percent = Math.ceil(position / total * 100);
									}
									//update progressbar
									$(".progress-bar").css("width", + percent +"%");
									$('#progress_bar_id' + " .status").text(percent +"%");
								}, true);
							}
							return xhr;
						},
						 success:function(data, status){
						  // console.log("File Uploaded");
						    console.log('data->'+data+'  status->'+status);
						  	$('#oldImg').val(data);
							$(".progress-bar").css("width", + 0 +"%");
							$(".progress").hide();
							if(status=='success'){
								$('#dataID').val(data);
								 $.toast({
									heading: 'บันทึกข้อมูลสำเร็จแล้ว!',
									text: '',
									position: 'top-right',
									loaderBg: '#5ba035',
									icon: 'success',
									hideAfter: 3000,
									stack: 1
								});
							}else{
									$.toast({
									heading: 'ไม่สามารถแก้ไขข้อมูลได้!',
									text: '',
									position: 'top-right',
									loaderBg: '#FF5B5E',
									icon: 'warning',
									hideAfter: 3000,
									stack: 1
								});
						    }
							if(oldImg==''){ window.location.href="<?php echo base_url('control/accessories_category_add/')?>"+data;  } 
							
							 
						 }
				});
		}

	}
	
	//-----------------
	$(".progress").hide();
	
	$(document).ready(function () {
  //called when key is pressed in textbox
		  $(".OrderCate").keypress(function (e) {
			 //if the letter is not digit then display error and don't type anything
			 if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
				//display error message
				//$("#errmsg").html("Digits Only").show().fadeOut("slow");
					   return false;
			}
		   });
	});
	
</script>
