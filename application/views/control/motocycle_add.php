<?php
if (!isset($motorcycle_name)) {
    $motorcycle_name = '';
}
if (!isset($motorcycle_desc)) {
    $motorcycle_desc = '';
}
if (!isset($motorcycle_category)) {
    $motorcycle_category = '';
}
if (!isset($motorcycle_price)) {
    $motorcycle_price = '';
}
if (!isset($motorcycle_detail)) {
    $motorcycle_detail = '';
}
if (!isset($engine_Type)) {
    $engine_Type = '';
}
if (!isset($engine_Capacity)) {
    $engine_Capacity = '';
}
if (!isset($engine_BoreStroke)) {
    $engine_BoreStroke = '';
}
if (!isset($engine_Compression)) {
    $engine_Compression = '';
}
if (!isset($engine_MaxPowerEC)) {
    $engine_MaxPowerEC = '';
}
if (!isset($engine_MaxTorqueEC)) {
    $engine_MaxTorqueEC = '';
}
if (!isset($engine_System)) {
    $engine_System = '';
}
if (!isset($engine_Exhaust)) {
    $engine_Exhaust = '';
}
if (!isset($engine_FinalDrive)) {
    $engine_FinalDrive = '';
}
if (!isset($engine_Clutch)) {
    $engine_Clutch = '';
}
if (!isset($engine_Gearbox)) {
    $engine_Gearbox = '';
}
if (!isset($chassis_Frame)) {
    $chassis_Frame = '';
}
if (!isset($chassis_Swingarm)) {
    $chassis_Swingarm = '';
}
if (!isset($chassis_FrontWheel)) {
    $chassis_FrontWheel = '';
}
if (!isset($chassis_RearWheel)) {
    $chassis_RearWheel = '';
}
if (!isset($chassis_FrontTyre)) {
    $chassis_FrontTyre = '';
}
if (!isset($chassis_RearTyre)) {
    $chassis_RearTyre = '';
}
if (!isset($chassis_FrontSuspension)) {
    $chassis_FrontSuspension = '';
}
if (!isset($chassis_RearSuspension)) {
    $chassis_RearSuspension = '';
}
if (!isset($chassis_FrontBrakes)) {
    $chassis_FrontBrakes = '';
}
if (!isset($chassis_RearBrakes)) {
    $chassis_RearBrakes = '';
}
if (!isset($chassis_Display)) {
    $chassis_Display = '';
}
if (!isset($dimension_WidthHandlebars)) {
    $dimension_WidthHandlebars = '';
}
if (!isset($dimension_HeightWithoutMirror)) {
    $dimension_HeightWithoutMirror = '';
}
if (!isset($dimension_SeatHeight)) {
    $dimension_SeatHeight = '';
}
if (!isset($dimension_Wheelbase)) {
    $dimension_Wheelbase = '';
}
if (!isset($dimension_Rake)) {
    $dimension_Rake = '';
}
if (!isset($dimension_Trail)) {
    $dimension_Trail = '';
}
if (!isset($dimension_DryWeight)) {
    $dimension_DryWeight = '';
}
if (!isset($dimension_TankCapacity)) {
    $dimension_TankCapacity = '';
}
if (!isset($dimension_Length)) {
    $dimension_Length = '';
}
if (!isset($dimension_TotalWeight)) {
    $dimension_TotalWeight = '';
}
if (!isset($wastage_Area)) {
    $wastage_Area = '';
}
if (!isset($wastage_Constant56mph)) {
    $wastage_Constant56mph = '';
}
if (!isset($wastage_Constant75mph)) {
    $wastage_Constant75mph = '';
}
if (!isset($wastage_FuelConsumption)) {
    $wastage_FuelConsumption = '';
}
if (!isset($wastage_CO2Figures)) {
    $wastage_CO2Figures = '';
}
if (!isset($motorcycle_youtubecode)) {
    $motorcycle_youtubecode = '';
}
if (!isset($currentID)) {
    $currentID = '';
}
?>
<div class="wrapper">
    <div class="container-fluid">

        <!-- Page-Title -->
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">

                    <h4 class="page-title">ข้อมูลสินค้า</h4>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card m-b-30 card-body">
                                <h5 class="card-title">
                                    <div class="progress mb-0" style="display: none">
                                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
                                    </div>

                                    <div class="pull-right">
                                        <button type="button" class="btn btn-success btn-sm" onClick="window.location.href = '<?php echo base_url('control/motocycle_add') ?>'"><i class="fa fa-plus"></i> เพิ่มสินค้าใหม่</button> 
                                        &nbsp;&nbsp;
                                        <button type="button" class="btn btn-info btn-sm" onClick="window.location.href = '<?php echo base_url('control/motocycle_list') ?>'">กลับหน้ารายการสินค้า</button></div>
                                </h5>
                                <!-------------->
                                <form enctype="multipart/form-data" id="productForm" name="productForm">
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">ชื่อสินค้า</label>
                                        <div class="col-sm-6">
                                            <input type="text" id="motorcycle_name" name="motorcycle_name" class="form-control form-control-sm" value="<?php echo $motorcycle_name ?>">
                                        </div>
                                        <div class="col-sm-4">	</div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">หมวดสินค้า</label>
                                        <div class="col-sm-6">
                                            <select id="motorcycle_category" name="motorcycle_category"  class="form-control form-control-sm" >
                                                <option value="0">---เลือกหมวดสินค้า---</option>
<?php foreach ($listCategory->result() AS $category) { ?>
                                                    <option value="<?php echo $category->id ?>" <?php if ($category->id == $motorcycle_category) {
        echo "selected";
    } ?> ><?php echo $category->category_title ?></option>
<?php } ?>
                                            </select>
                                        </div>

                                        <div class="col-sm-4">	</div>
                                    </div>	
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">DESCRIPTION</label>
                                        <div class="col-sm-6">
                                            <textarea id="motorcycle_desc" name="motorcycle_desc" class="form-control form-contol-sm" ><?php echo $motorcycle_desc ?></textarea>
                                        </div>
                                        <div class="col-sm-4">	</div>
                                    </div> 
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">ราคาเริ่มต้นจาก</label>
                                        <div class="col-sm-6">
                                            <input id="motorcycle_price" name="motorcycle_price" class="form-control form-contol-sm" value="<?php echo $motorcycle_price ?>">
                                        </div>
                                        <div class="col-sm-4">	</div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">link Youtube</label>
                                        <div class="col-sm-6">
                                            <input id="motorcycle_youtubecode" name="motorcycle_youtubecode" class="form-control form-contol-sm" value="<?php echo $motorcycle_youtubecode ?>">
                                        </div>
                                        <div class="col-sm-4">	</div>
                                    </div> 
                                    <div class='row'> 
                                        <div class="col-md-6">
                                    <h6 style="color: blue" class="page-title">เครื่องยนต์และระบบส่งกำลัง</h6>
                                    <br>

                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">ประเภท</label>
                                        <div class="col-sm-8">
                                            <input id="engine_Type" name="engine_Type" class="form-control form-contol-sm" value="<?php echo $engine_Type ?>">
                                        </div>
                                        <div class="col-sm-4">	</div>
                                    </div> <!--
-->                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">ความจุ</label>
                                        <div class="col-sm-8">
                                            <input id="engine_Capacity" name="engine_Capacity" class="form-control form-contol-sm"value="<?php echo $engine_Capacity ?>">
                                        </div>
                                        <div class="col-sm-4">	</div>
                                    </div> <!--
-->                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Bore Stroke</label>
                                        <div class="col-sm-8">
                                            <input id="engine_BoreStroke" name="engine_BoreStroke" class="form-control form-contol-sm"value="<?php echo $engine_BoreStroke ?>">
                                        </div>
                                        <div class="col-sm-4">	</div>
                                    </div> 
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Compression</label>
                                        <div class="col-sm-8">
                                            <input id="engine_Compression" name="engine_Compression" class="form-control form-contol-sm"value="<?php echo $engine_Compression ?>">
                                        </div>
                                        <div class="col-sm-4">	</div>
                                    </div> 
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">กำลัง ec สูงสุด</label>
                                        <div class="col-sm-8">
                                            <input id="engine_MaxPowerEC" name="engine_MaxPowerEC" class="form-control form-contol-sm"value="<?php echo $engine_MaxPowerEC ?>">
                                        </div>
                                        <div class="col-sm-4">	</div>
                                    </div> 
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">แรงบิด ec สูงสุด</label>
                                        <div class="col-sm-8">
                                            <input id="engine_MaxTorqueEC" name="engine_MaxTorqueEC" class="form-control form-contol-sm"value="<?php echo $engine_MaxTorqueEC ?>">
                                        </div>
                                        <div class="col-sm-4">	</div>
                                    </div> 
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">ระบบ</label>
                                        <div class="col-sm-8">
                                            <input id="engine_System" name="engine_System" class="form-control form-contol-sm"value="<?php echo $engine_System ?>">
                                        </div>
                                        <div class="col-sm-4">	</div>
                                    </div> 
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">ท่อไอเสีย</label>
                                        <div class="col-sm-8">
                                            <input id="engine_Exhaust" name="engine_Exhaust" class="form-control form-contol-sm"value="<?php echo $engine_Exhaust ?>">
                                        </div>
                                        <div class="col-sm-4">	</div>
                                    </div> 
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">ไฟนอลไดรฟ์</label>
                                        <div class="col-sm-8">
                                            <input id="engine_FinalDrive" name="engine_FinalDrive" class="form-control form-contol-sm"value="<?php echo $engine_FinalDrive ?>">
                                        </div>
                                        <div class="col-sm-4">	</div>
                                    </div> 
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">คลัตช์</label>
                                        <div class="col-sm-8">
                                            <input id="engine_Clutch" name="engine_Clutch" class="form-control form-contol-sm"value="<?php echo $engine_Clutch ?>">
                                        </div>
                                        <div class="col-sm-4">	</div>
                                    </div> 
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">กระปุกเกียร์</label>
                                        <div class="col-sm-8">
                                            <input id="engine_Gearbox" name="engine_Gearbox" class="form-control form-contol-sm"value="<?php echo $engine_Gearbox ?>">
                                        </div>
                                        <div class="col-sm-4">	</div>
                                    </div>
                                        </div>
                                        <div class="col-md-6">
                                    <h6 style="color: blue" class="page-title">โครงรถ</h6>
                                    <br>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">เฟรม</label>
                                        <div class="col-sm-8">
                                            <input id="chassis_Frame" name="chassis_Frame" class="form-control form-contol-sm"value="<?php echo $chassis_Frame ?>">
                                        </div>
                                        <div class="col-sm-4">	</div>
                                    </div> 
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">สวิงอาร์ม</label>
                                        <div class="col-sm-8">
                                            <input id="chassis_Swingarm" name="chassis_Swingarm" class="form-control form-contol-sm"value="<?php echo $chassis_Swingarm ?>">
                                        </div>
                                        <div class="col-sm-4">	</div>
                                    </div> 
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">ล้อหน้า</label>
                                        <div class="col-sm-8">
                                            <input id="chassis_FrontWheel" name="chassis_FrontWheel" class="form-control form-contol-sm"value="<?php echo $chassis_FrontWheel ?>">
                                        </div>
                                        <div class="col-sm-4">	</div>
                                    </div> 
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">ล้อหลัง</label>
                                        <div class="col-sm-8">
                                            <input id="chassis_RearWheel" name="chassis_RearWheel" class="form-control form-contol-sm"value="<?php echo $chassis_RearWheel ?>">
                                        </div>
                                        <div class="col-sm-4">	</div>
                                    </div> 
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">ยางหน้า</label>
                                        <div class="col-sm-8">
                                            <input id="chassis_FrontTyre" name="chassis_FrontTyre" class="form-control form-contol-sm"value="<?php echo $chassis_FrontTyre ?>">
                                        </div>
                                        <div class="col-sm-4">	</div>
                                    </div> 
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">ยางหลัง</label>
                                        <div class="col-sm-8">
                                            <input id="chassis_RearTyre" name="chassis_RearTyre" class="form-control form-contol-sm"value="<?php echo $chassis_RearTyre ?>">
                                        </div>
                                        <div class="col-sm-4">	</div>
                                    </div> 
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">ระบบกันสะเทือนหน้า</label>
                                        <div class="col-sm-8">
                                            <input id="chassis_FrontSuspension" name="chassis_FrontSuspension" class="form-control form-contol-sm"value="<?php echo $chassis_FrontSuspension ?>">
                                        </div>
                                        <div class="col-sm-4">	</div>
                                    </div> 
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">ระบบกันสะเทือนหลัง</label>
                                        <div class="col-sm-8">
                                            <input id="chassis_RearSuspension" name="chassis_RearSuspension" class="form-control form-contol-sm"value="<?php echo $chassis_RearSuspension ?>">
                                        </div>
                                        <div class="col-sm-4">	</div>
                                    </div> 
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">เบรกหน้า</label>
                                        <div class="col-sm-8">
                                            <input id="chassis_FrontBrakes" name="chassis_FrontBrakes" class="form-control form-contol-sm"value="<?php echo $chassis_FrontBrakes ?>">
                                        </div>
                                        <div class="col-sm-4">	</div>
                                    </div> 
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">เบรกหลัง</label>
                                        <div class="col-sm-8">
                                            <input id="chassis_RearBrakes" name="chassis_RearBrakes" class="form-control form-contol-sm"value="<?php echo $chassis_RearBrakes ?>">
                                        </div>
                                        <div class="col-sm-4">	</div>
                                    </div> 
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">แผงหน้าปัดและฟังก์ชัน</label>
                                        <div class="col-sm-8">
                                            <textarea id="chassis_Display" name="chassis_Display" class="form-control form-contol-sm"><?php echo $chassis_Display ?></textarea>
                                        </div>
                                        <div class="col-sm-4">	</div>
                                    </div> 
                                        </div>
                                    </div>
                                    <div class='row'>
                                         <div class="col-md-6">
                                    <h6 style="color: blue" class="page-title">DIMENSIONS AND WEIGHTS</h6>
                                    <br>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">ความยาว</label>
                                        <div class="col-sm-8">
                                            <input id="dimension_Length" name="dimension_Length" class="form-control form-contol-sm"value="<?php echo $dimension_Length ?>">
                                        </div>
                                        <div class="col-sm-4">	</div>
                                    </div> 
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">ความกว้างของแฮนด์รถ</label>
                                        <div class="col-sm-8">
                                            <input id="dimension_WidthHandlebars" name="dimension_WidthHandlebars" class="form-control form-contol-sm"value="<?php echo $dimension_WidthHandlebars ?>">
                                        </div>
                                        <div class="col-sm-4">	</div>
                                    </div> 
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">ความสูงโดยไม่รวมกระจก</label>
                                        <div class="col-sm-8">
                                            <input id="dimension_HeightWithoutMirror" name="dimension_HeightWithoutMirror" class="form-control form-contol-sm"value="<?php echo $dimension_HeightWithoutMirror ?>">
                                        </div>
                                        <div class="col-sm-4">	</div>
                                    </div> 
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">ความสูงของเบาะนั่ง</label>
                                        <div class="col-sm-8">
                                            <input id="dimension_SeatHeight" name="dimension_SeatHeight" class="form-control form-contol-sm"value="<?php echo $dimension_SeatHeight ?>">
                                        </div>
                                        <div class="col-sm-4">	</div>
                                    </div> 
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">ระยะระหว่างล้อหน้ากับล้อหลัง</label>
                                        <div class="col-sm-8">
                                            <input id="dimension_Wheelbase" name="dimension_Wheelbase" class="form-control form-contol-sm"value="<?php echo $dimension_Wheelbase ?>">
                                        </div>
                                        <div class="col-sm-4">	</div>
                                    </div> 
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">เรค</label>
                                        <div class="col-sm-8">
                                            <input id="dimension_Rake" name="dimension_Rake" class="form-control form-contol-sm"value="<?php echo $dimension_Rake ?>">
                                        </div>
                                        <div class="col-sm-4">	</div>
                                    </div> 
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">เทรล</label>
                                        <div class="col-sm-8">
                                            <input id="dimension_Trail" name="dimension_Trail" class="form-control form-contol-sm"value="<?php echo $dimension_Trail ?>">
                                        </div>
                                        <div class="col-sm-4">	</div>
                                    </div> 
                            
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">น้ำหนักแห้ง</label>
                                <div class="col-sm-8">
                                    <input id="dimension_DryWeight" name="dimension_DryWeight" class="form-control form-contol-sm"value="<?php echo $dimension_DryWeight ?>">
                                </div>
                                <div class="col-sm-4">	</div>
                            </div> 
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">น้ำหนักของตัวรถรวมอุปกรณ์มาตรฐานของตัวรถ</label>
                                <div class="col-sm-8">
                                    <input id="dimension_TotalWeight" name="dimension_TotalWeight" class="form-control form-contol-sm"value="<?php echo $dimension_TotalWeight ?>">
                                </div>
                                <div class="col-sm-4">	</div>
                            </div> 
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">ความจุถัง</label>
                                <div class="col-sm-8">
                                    <input id="dimension_TankCapacity" name="dimension_TankCapacity" class="form-control form-contol-sm"value="<?php echo $dimension_TankCapacity ?>">
                                </div>
                                <div class="col-sm-4">	</div>
                            </div> 
                                         </div>
                                        <div class="col-md-6">
                                    <h6 style="color: blue" class="page-title">อัตราการสิ้นเปลืองน้ำมันเชื้อเพลิง</h6>
                            <br>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">เขตเมือง</label>
                                <div class="col-sm-8">
                                    <input id="wastage_Area" name="wastage_Area" class="form-control form-contol-sm"value="<?php echo $wastage_Area ?>">
                                </div>
                                <div class="col-sm-4">	</div>
                            </div>   
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Constant Speed 56mph 90kph</label>
                                <div class="col-sm-8">
                                    <input id="wastage_Constant56mph" name="wastage_Constant56mph" class="form-control form-contol-sm"value="<?php echo $wastage_Constant56mph?>">
                                </div>
                                <div class="col-sm-4">	</div>
                            </div>   
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">ความเร็วคงที่ 120 กิโลเมตรต่อชั่วโมง(75mph)</label>
                                <div class="col-sm-8">
                                    <input id="wastage_Constant75mph" name="wastage_Constant75mph" class="form-control form-contol-sm"value="<?php echo $wastage_Constant75mph?>">
                                </div>
                                <div class="col-sm-4">	</div>
                            </div>   
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Fuel Consumption</label>
                                <div class="col-sm-8">
                                    <input id="wastage_FuelConsumption" name="wastage_FuelConsumption" class="form-control form-contol-sm"value="<?php echo $wastage_FuelConsumption?>">
                                </div>
                                <div class="col-sm-4">	</div>
                            </div>   
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">CO2 Figures</label>
                                <div class="col-sm-8">
                                    <textarea id="wastage_CO2Figures" name="wastage_CO2Figures" class="form-control form-contol-sm"><?php echo $wastage_CO2Figures?></textarea>
                                </div>
                                <div class="col-sm-4">	</div>
                            </div>  
                                     
                            <!--<div class="form-group row">
                                      <label class="col-sm-2 col-form-label">รายละเอียด</label>
                                            <div class="col-sm-6">
                                                    <textarea id="product_detail_th" name="product_detail_th" class="form-control form-contol-sm"><?php //echo $product_detail_th ?></textarea>
                                            </div>
                                       <div class="col-sm-4">	</div>
                            </div>-->

                            <div  >
                                
                                <div  style="text-align: center">

                                    <button type="button" class="btn btn-success btn-sm" style="font-size: 16px" onClick="Addproduct()">เพิ่ม/แก้ไขข้อมูล</button>
                                    <input type="hidden" name="currentID" id="currentID" value="<?php echo $currentID ?>">

                                    <input type="hidden" name="motorcycle_detail" id="motorcycle_detail" value="<?php echo $motorcycle_detail ?>">
                                </div>
                            </div>
                               </div>
                                    </div>
                            
                            
                            
                            
                            <div class="form-group row" >
                                <div id="showError"></div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="card m-b-30">
                                        <h6 class="card-header">รูปภาพ</h6>
                                        <div class="card-body">
                                            <input   type="file" id="ImagesFiles" name="userFiles[]" id="multiple" multiple="" /> 
                                            <a href="#" class="btn btn-custom waves-effect waves-light" onClick="Addproduct()">เพิ่มรูป</a>
                                            <div id="showImage" style="margin-top: 5px;"></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="card m-b-30">
                                        <div class="card-header">
                                            CATALOUGE
                                        </div>
                                        <div class="card-body">
                                            <div class="form-group row">
                                                <label class="col-2">หัวข้อแคทตาล๊อก</label>
                                                <div class="col-4">
                                                    <input type="text" id="txtTitle" name="txtTitle" class="form-control form-control-sm">
                                                </div>
                                                <div class="col-3"> 
                                                    <input   type="file" id="cFiles" name="catFiles[]" />
                                                </div>

                                                <div class="col-1"> 
                                                    <a href="#" class="btn btn-custom waves-effect waves-light" onClick="Addproduct()">เพิ่ม Catalogue</a>
                                                </div>
                                            </div>

                                            <div id="showCat"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>	
                            <!-------------->
                            </form>
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