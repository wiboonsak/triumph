<div class="wrapper">
    <div class="container-fluid">

        <!-- Page-Title -->
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <div class="btn-group pull-right">
                        <ol class="breadcrumb hide-phone p-0 m-0">
                            <li class="breadcrumb-item"><a href="<?php echo base_url('control') ?>">Control</a></li>
                            <li class="breadcrumb-item"><a href="<?php echo base_url('control/motocycle_category') ?>">หมวดสินค้า</a></li>-->
                        </ol>
                    </div>
                    <h4 class="page-title">หมวดสินค้า</h4>
                    <!----->
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card m-b-30 card-body">
                                <h5 class="card-title">รายชื่อหมวดสินค้า 
                                    <div class="pull-right">
                                        <button type="button" class="btn btn-success btn-sm" onClick="window.location.href = '<?php echo base_url('control/motocycle_category_add') ?>'"><i class="icon-plus"></i>&nbsp;&nbsp;เพิ่มหมวดสินค้า</button></div>
                                </h5>
                                <table class="table table-bordered table-hover table-strip">
                                    <thead>
                                        <tr>
                                            <th width="10">No</th>
                                            <th>หมวดสินค้า</th>
                                            <td width="200">เรียงลำดับ</td>
                                            <th  width="100">แก้ไข</th>
                                            <th  width="100">ลบ</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $n = 1;
                                        foreach ($categoryList->result() AS $data) {
                                            ?>
                                            <tr id="row<?php echo $data->id ?>">
                                                <td><?php echo $n ?></td>
                                                <td><?php echo $data->category_title ?></td>
                                                <td><input id="order<?php echo $data->id ?>" type="text" class="form-control form-control-sm OrderCate" value="<?php echo $data->category_order ?>" onChange="updateOrder('<?php echo $data->id ?>', 'category_order', this.value)">
                                                    <input type="hidden" id="chkOrder<?php echo $data->id ?>" value="<?php echo $data->category_order ?>">
                                                <td><button type="button" class="btn btn-success btn-sm" onClick="window.location.href = '<?php echo base_url('control/motocycle_category_add/' . $data->id) ?>'"><i class="icon-pencil"></i></button></td>
                                                <td><button type="button" class="btn btn-danger btn-sm" onClick="comfirmDelete('<?php echo $data->id ?>', '<?php echo $data->category_title ?>')"><i class="icon-trash"></i></button>

                                                </td>
                                            </tr>
                                            <?php $n++;
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>
                    <!----->
                </div>
            </div>
        </div>
        <!-- end page title end breadcrumb -->

    </div> <!-- end container -->
</div>