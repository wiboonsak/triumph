<script>
	
	//---------------------------------------- 
	
	function comfirmDelete(DataID , fileType , FileName){
		var currentID = $('#currentID').val();
       swal({
                title: 'ต้องการลบข้อมูล ?',
                text: "กรุณายืนยันการลบข้อมูล !",
                type: 'warning',
                showCancelButton: true,
                confirmButtonText: 'ยืนยันการลบข้อมูล',
                cancelButtonText: 'ยกเลิก',
                confirmButtonClass: 'btn btn-success mt-2',
                cancelButtonClass: 'btn btn-danger ml-2 mt-2',
                buttonsStyling: false
            }).then(function () {
		   		$.post('<?php echo base_url('control/deletePorductFile1')?>', { DataID : DataID , fileType : fileType , FileName : FileName }, function(data){  
					console.log(data);
					   if(data=='1'){
						     swal({
								title: 'Deleted !',
								text: "ข้อมูลได้ลบเรียบร้อยแล้ว",
								type: 'success',
								confirmButtonClass: 'btn btn-confirm mt-2'   
							}) 
						   //------------------------ catalgoue RowImg19
						   if(fileType=='imgfile'){
							     $('#RowImg'+DataID).remove(); 
							     console.log('#RowImg'+DataID)
						   }
						   if(fileType=='catalgoue'){
							     $('#RowFile'+DataID).remove();  
							   console.log('#RowFile'+DataID)
						   }						  
						   
						   //------ images RowImg   file RowFile
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
	//--------------------------- 
	function  loadImages(ProID){
		$.post('<?php echo base_url('control/loadProductImg_acces')?>' , { ProID : ProID }, function(data){
			$('#showImage').empty();
			$('#showImage').html(data);
			
		})
		
	}	
	function  loadFile(ProID){
		$.post('<?php echo base_url('control/loadProductFile_acces')?>' , { ProID : ProID }, function(data){
			$('#showCat').empty();
			$('#showCat').html(data);
			
		})
		
	}
	
	//---------------------- txtTitle catFiles 
	function Addproduct(){
		var accessories_name = $('#accessories_name').val();
		var accessories_desc = $('#accessories_desc').val();
		var accessories_detail = $('#accessories_detail').val();
		var accessories_price = $('#accessories_price').val();                
		var accessories_category = $('#accessories_category option:selected').val();
		var txtTitle = $('#txtTitle').val();
		var cFiles = $('#cFiles').val();
		
		console.log(accessories_name+' txtTitle>'+txtTitle)
		if(accessories_name==''){
				  swal(
					{
						title: '	กรุณาใส่ชื่อสินค้า !',
						confirmButtonClass: 'btn btn-confirm mt-2',
						type: 'warning'
					}
				)
		}else if(accessories_category=='x'){ 
			    swal(
					{
						title: ' กรุณาเลือกหมวดสินค้า !',
						confirmButtonClass: 'btn btn-confirm mt-2',
						type: 'warning'
					}
				)
		}else if((cFiles!='')&&(txtTitle=='')){
			swal(
					{
						title: '	กรุณาใส่หัวข้อแคทตาล๊อก !',
						confirmButtonClass: 'btn btn-confirm mt-2',
						type: 'warning'
					}
				)

		}else{
			//----------------------------------------------
		var postData = new FormData($("#productForm")[0]);	
		$.ajax({
		 type:'POST',
		 url:'<?php echo base_url('control/addProduct_acces')?>',
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
				 loadFile(data);
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

			//------------------------------------------------
			
		}
	}
//-------------------------
	$(document).ready(function(){ 
		var currentID = $('#currentID').val();
		
		var accessories_category = $('#accessories_category option:selected').val();
	
			loadImages(currentID);
			loadFile(currentID);
//		if(accessories_category!=0){
//			getSubCateSlect(accessories_category);
//			
//		}
		
	})

	
</script>
<??>