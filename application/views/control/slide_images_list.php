<table class="table table-bordered table-hover">
    <?php foreach($slideImg->result() AS $data){ ?>
	<tr id="Dimg<?php echo $data->id?>">
	<td><span class="text-danger"><img src="<?php echo base_url('uploadfile/banner/').$data->image_name?>" class="img-thumbnail" style="width:300px;"></span></td>
	<td width="30">
            <button type="button"  style="margin-top: 80px" class="btn btn-danger btn-sm" onClick="removeMe('<?php echo $data->id?>','<?php echo $data->image_name?>')"><i class="icon-close"></i> ลบ</button></td>
        </tr>

<?php }?>
</table>
 
			