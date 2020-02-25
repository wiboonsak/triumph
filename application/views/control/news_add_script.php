<script>
	//-------------  
	function removeMe(imageID,imageName){
		 swal({
                title: 'ต้องการลบรูปนี้ ?',
                text: "กรุณายืนยันการลบข้อมูล !",
                type: 'warning',
                showCancelButton: true,
                confirmButtonText: 'ยืนยันการลบข้อมูล',
                cancelButtonText: 'ยกเลิก',
                confirmButtonClass: 'btn btn-success mt-2',
                cancelButtonClass: 'btn btn-danger ml-2 mt-2',
                buttonsStyling: false
            }).then(function () {
		   		$.post('<?php echo base_url('control/deleteNewsImg')?>', { imageID : imageID , imageName:imageName }, function(data){ 
					console.log(data);
					   if(data=='1'){
						     swal({
								title: 'Deleted !',
								text: "ข้อมูลได้ลบเรียบร้อยแล้ว",
								type: 'success',
								confirmButtonClass: 'btn btn-confirm mt-2'
							}) 
						    $('#Dimg'+imageID).remove();
						 
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
	
	//-----------------------------------
	function AddNews(){  // news_title  news_detail
		var news_title = $('#news_title').val();
		var news_detail = $('#news_detail').val();
		if(news_title==''){
			swal({
					title: 'คำเตือน !',
					text: "กรุณาใส่หัวข้อข่าว",
					type: 'warning',
					confirmButtonClass: 'btn btn-confirm mt-2'
			}) 
			
		}else if(news_detail==''){
				swal({
					title: 'คำเตือน !',
					text: "กรุณาใส่รายละเอียดข่าว",
					type: 'warning',
					confirmButtonClass: 'btn btn-confirm mt-2'
			}) 
		}else{
					var postData = new FormData($("#productForm")[0]);	
		$.ajax({
		 type:'POST',
		 url:'<?php echo base_url('control/addNews')?>',
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
			console.log(data);
			$('#currentID').val(data);
		  // console.log("File Uploaded");
			console.log('data->'+data+'  status->'+status);
			$('#oldImg').val(data);
			$(".progress-bar").css("width", + 0 +"%");
			$(".progress").hide();
			$('#ImagesFiles').val('');
			$('#cFiles').val('');
			 $('#txtTitle').val('');
			if(status=='success'){
				 loadImages(data);
				 //loadFile(data);
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

		 }
			});
			//----------------------------
		}
	}
	//---------------------------------
	//--------------------------- 
	function  loadImages(ProID){
		$.post('<?php echo base_url('control/loadNewsImages')?>' , { ProID : ProID }, function(data){
			$('#showImage').empty();
			$('#showImage').html(data);
			
		})
		
	}
	//--------------------------
	$(document).ready(function(){
		var currentID = $('#currentID').val();
		//if(currentID!=''){ 
			loadImages(currentID);
		//}	
	})
</script>


