<!-- DataTables -->
<link href="<?php echo base_url('asset/control/plugins/datatables/dataTables.bootstrap4.min.css') ?>" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url('asset/control/plugins/datatables/buttons.bootstrap4.min.css') ?>" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url('asset/control/plugins/datatables/select.bootstrap4.min.css') ?>" rel="stylesheet" type="text/css" />


<div class="wrapper">
    <div class="container-fluid">

        <!-- Page-Title -->
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">

                    <h4 class="page-title">Service & Support</h4>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card m-b-30 card-body">
                                <h5 class="card-title">
                                    <div class="progress mb-0" style="display: none">
                                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
                                    </div>

                                </h5>
                                <div id="showData">
                                    <table id="datatable" class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th width="10">#</th>
                                                <th>หัวข้อ</th>
                                                <th>วันที่</th>

                                                <th  width="50">แก้ไข</th>
                                                <th  width="50">ลบ</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $n = 1;
                                            foreach ($service_list->result() AS $data) { ?>	
                                                <tr id="row<?php echo $data->id ?>">
                                                    <th scope="row"><?php echo $n ?></th>
                                                    <td><?php echo $data->service_name ?></td>
                                                    <td><?php echo $this->Control_model->getDayMonthYear($data->date_add); ?></td>
                                                    <td><button type="button" class="btn btn-success btn-sm" onClick="window.location.href = '<?php echo base_url('control/service_add/' . $data->id) ?>'"><i class="icon-pencil"></i></button></td>
                                                    <td><button type="button" class="btn btn-danger btn-sm" onClick="comfirmDelete('<?php echo $data->id ?>', '<?php echo $data->service_name ?>')"><i class="icon-trash"></i></button></td>
                                                </tr>
    <?php $n++;
} ?>
                                        </tbody>
                                    </table>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- end page title end breadcrumb -->

    </div> <!-- end container -->
</div>