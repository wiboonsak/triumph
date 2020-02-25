<script>

	//-----------------------------------
	function Add(){  // news_title  news_detail
		var service_name = $('#service_name').val();
		var service_desc = $('#service_desc').val();
                var date_add = $('#date_add').val(); 
		if(service_name ==''){
			swal(
                    {
                        title: '	กรุณาใส่หัวข้อ !',
                        confirmButtonClass: 'btn btn-confirm mt-2',
                        type: 'warning'
                    }
            )
		}else if(service_desc ==''){
				swal(
					{
						title: ' กรุณาใส่รายละเอียด !',
						confirmButtonClass: 'btn btn-confirm mt-2',
						type: 'warning'
					}
				)
		}else if(date_add ==''){
				swal(
					{
						title: ' กรุณาใส่วันที่ !',
						confirmButtonClass: 'btn btn-confirm mt-2',
						type: 'warning'
					}
				)
		}else{
					var postData = new FormData($("#serviceForm")[0]);	
		$.ajax({
		 type:'POST',
		 url:'<?php echo base_url('control/addservice')?>',
		 processData: false,
		 contentType: false,
		 data : postData, 
		 success:function(data, status){
			console.log(data);
			$('#currentID').val(data);
		  
			console.log('data->'+data+'  status->'+status);
			if(status=='success'){
				$.toast({
					heading: 'บันทึกข้อมูลสำเร็จแล้ว!',
					text: '',
					position: 'top-right',
					loaderBg: '#5ba035',
					icon: 'success',
					hideAfter: 3000,
					stack: 1
				});
                        setTimeout(function () {
                            window.location.href = "<?php echo base_url('Control/service_add/') ?>" + data;
                        }, 2000);
			
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
	
</script>


