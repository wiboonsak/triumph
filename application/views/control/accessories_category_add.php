<!-- Bootstrap fileupload css -->
<link href="<?php echo base_url('asset/control/plugins/bootstrap-fileupload/bootstrap-fileupload.css') ?>" rel="stylesheet" />

<div class="wrapper">
    <div class="container-fluid">

        <!-- Page-Title -->
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">

                    <h4 class="page-title">เพิ่ม/แก้ไขหมวดสินค้า</h4>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card m-b-30 card-body">
                                <h5 class="card-title">
                                    <div class="progress mb-0" style="display: none">
                                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
                                    </div>
                                    <div class="pull-right">
                                        <button type="button" class="btn btn-success btn-sm" onClick="window.location.href = '<?php echo base_url('control/accessories_category_add') ?>'"><i class="icon-plus"></i>&nbsp;&nbsp;เพิ่มหมวดสินค้าใหม่</button>
                                        &nbsp;&nbsp;
                                        <button type="button" class="btn btn-info btn-sm" onClick="window.location.href = '<?php echo base_url('control/accessories_category') ?>'"><i class=" icon-arrow-left-circle"></i>&nbsp;&nbsp;กลับหน้าหมวดสินค้า</button></div>
                                </h5>


                                <!----->
                                <form id="categoryForm" name="categoryForm">
                                    <div class="form-group row">
                                        <label class="col-sm-2">
                                            ชื่อหมวดสินค้า 
                                        </label>
                                        <div class="col-sm-6">
                                            <input id="category_title" name="category_title" type="text" class="form-control form-control-sm" value="<?php echo $category_title ?>" > 
                                        </div>
                                    </div>

                                    <div>		 
                                        <input type="hidden" name="dataID" id="dataID" value="<?php echo $dataID ?>"> 
                                    </div>




                                    <div class="form-group row" >
                                        <div class="col-sm-8" style="text-align: center">
                                            <button type="button" class="btn btn-success btn-sm" onClick="AddCateGory()">เพิ่ม/แก้ไขข้อมูล</button>
                                        </div>
                                    </div>
                                    <div class="form-group row" >
                                        <div id="showError"></div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <!----->


            </div>
        </div>

    </div>
</div>

<!-- end page title end breadcrumb -->

