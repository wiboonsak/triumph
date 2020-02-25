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
		   		$.post('<?php echo base_url('control/deletePorductFile')?>', { DataID : DataID , fileType : fileType , FileName : FileName }, function(data){  
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
		$.post('<?php echo base_url('control/loadProductImg')?>' , { ProID : ProID }, function(data){
			$('#showImage').empty();
			$('#showImage').html(data);
			
		})
		
	}	
	function  loadFile(ProID){
		$.post('<?php echo base_url('control/loadProductFile')?>' , { ProID : ProID }, function(data){
			$('#showCat').empty();
			$('#showCat').html(data);
			
		})
		
	}
	
	//---------------------- txtTitle catFiles 
	function Addproduct(){
		var motorcycle_name = $('#motorcycle_name').val();
		var motorcycle_desc = $('#motorcycle_desc').val();
		var motorcycle_detail = $('#motorcycle_detail').val();
		var motorcycle_category = $('#motorcycle_category option:selected').val();
                var motorcycle_price = $('#motorcycle_price').val();
                var engine_Type = $('#engine_Type').val();
                var engine_Capacity = $('#engine_Capacity').val();
                var engine_BoreStroke = $('#engine_BoreStroke').val();
                var engine_Compression = $('#engine_Compression').val();
                var engine_MaxPowerEC = $('#engine_MaxPowerEC').val();
                var engine_MaxTorqueEC = $('#engine_MaxTorqueEC').val();
                var engine_System = $('#engine_System').val();
                var engine_Exhaust = $('#engine_Exhaust').val();
                var engine_FinalDrive = $('#engine_FinalDrive').val();
                var engine_Clutch = $('#engine_Clutch').val();
                var engine_Gearbox = $('#engine_Gearbox').val();
                var chassis_Frame = $('#chassis_Frame').val();
                var chassis_Swingarm = $('#chassis_Swingarm').val();
                var chassis_FrontWheel = $('#chassis_FrontWheel').val();
                var chassis_RearWheel = $('#chassis_RearWheel').val();
                var chassis_FrontTyre = $('#chassis_FrontTyre').val();
                var chassis_RearTyre = $('#chassis_RearTyre').val();
                var chassis_FrontSuspension = $('#chassis_FrontSuspension').val();
                var chassis_RearSuspension = $('#chassis_RearSuspension').val();
                var chassis_FrontBrakes = $('#chassis_FrontBrakes').val();
                var chassis_RearBrakes = $('#chassis_RearBrakes').val();
                var chassis_Display = $('#chassis_Display').val();
                var dimension_WidthHandlebars = $('#dimension_WidthHandlebars').val();
                var dimension_HeightWithoutMirror = $('#dimension_HeightWithoutMirror').val();
                var dimension_SeatHeight = $('#dimension_SeatHeight').val();
                var dimension_Wheelbase = $('#dimension_Wheelbase').val();
                var dimension_Rake = $('#dimension_Rake').val();
                var dimension_Trail = $('#dimension_Trail').val();
                var dimension_DryWeight = $('#dimension_DryWeight').val();
                var dimension_TankCapacity = $('#dimension_TankCapacity').val();
                var dimension_Length = $('#dimension_Length').val();
                var dimension_TotalWeight = $('#dimension_TotalWeight').val();
                var wastage_Area = $('#wastage_Area').val();
                var wastage_Constant56mph = $('#wastage_Constant56mph').val();
                var wastage_Constant75mph = $('#wastage_Constant75mph').val();
                var wastage_FuelConsumption = $('#wastage_FuelConsumption').val();
                var wastage_CO2Figures = $('#wastage_CO2Figures').val();
                var motorcycle_youtubecode = $('#motorcycle_youtubecode').val();              
		var txtTitle = $('#txtTitle').val();
		var cFiles = $('#cFiles').val();
		
		console.log(motorcycle_name+' txtTitle>'+txtTitle)
		if(motorcycle_name==''){
				  swal(
					{
						title: '	กรุณาใส่ชื่อสินค้า !',
						confirmButtonClass: 'btn btn-confirm mt-2',
						type: 'warning'
					}
				)
		}else if(motorcycle_category=='x'){ 
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
		 url:'<?php echo base_url('control/addProduct')?>',
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
		
		var motorcycle_category = $('#motorcycle_category option:selected').val();
	
			loadImages(currentID);
			loadFile(currentID);
//		if(motorcycle_category!=0){
//			getSubCateSlect(motorcycle_category);
//			
//		}
		
	})

	
</script>
<??>