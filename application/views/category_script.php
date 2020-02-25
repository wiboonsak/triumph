<script>

		function getProductDetail(productID){
		console.log(productID)
		//$j('#showProductDetail').text(productID)
		$j('#showProductDetail').empty();
		$j.post('<?php echo base_url('Motocycle_list/getproductDetail/')?>', { productID:productID } ,function(data){
			$j('#showProductDetail').html(data);
		});
		
	}	

	//-------------------------
		function getProductList(mainCate , subcategory){
		   $j.post('<?php echo base_url('products_list/getProductList')?>' , { mainCate : mainCate , subcategory : subcategory }
			  ,function(data){
			$j('#showProductDetail').empty();
			$j('#showProductDetail').html(data);
		})
	}

</script>