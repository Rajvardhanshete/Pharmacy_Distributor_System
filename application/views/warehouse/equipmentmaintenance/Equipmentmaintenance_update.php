<head>
    <style>
        .breadcrumb{
            color:olivedrab;
        }
     .class{
            border:2px solid black;
            border-radius: 10px;
            background-color: red;
            color:white;
         
            transition: all 0.6s ease;

        }
        .class:hover{
            background-color:blueviolet;
        }
     
    </style>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- <script>
        $(document).ready(function(){
            $("#Form #select-all").click(function(){
                $("#Form input[type='checkbox']").prop('checked',this.checked);
            });
        });
    </script> -->
</head>
<!-- =============== Left side End ================-->
<div class="main-content-wrap sidenav-open d-flex flex-column">
    <!-- ============ Body content start ============= -->
    <div class="main-content">
        
        <div class="separator-breadcrumb border-top"></div>
        <div class="row">
          
            <div class="col-md-12">
                <div class="card mb-4">
                    <div class="card-body">
                    <div class="breadcrumb">
            <h1>Equipment Maintenance</h1>
        </div>
      <hr>
                    <form role="form" id="Form" action="<?php echo base_url('update/'.(isset($data -> id)?'updateEquipmentMaintenance':'insertEquipmentMaintenance'))?>" method="post">
                        

                        <div class="row">
                        <div class="col-md-4 form-group mb-3">
                        <input name="id" id="id" type="hidden"   value="<?= isset($data->id)? $data->id: ''?> " />

                                    <label for="Equipment">Equipment<span class="text-danger">*</span></label>
                                    <select class="form-control"  name="Equipment" id="Equipment">
                                            <option value="0">-Select-</option>
                                            <?php foreach($equipmentdata as $value)
                                            {
                                                // $selected="";
                                                // if(!empty($data[0]->FkStockId)){

                                                //     if($value->StockID == $data[0]->FkStockId) {
                                                //       $selected="selected=selected";
                                                //     } 
                                                // }  
                                                                
                                                // echo '<option value="'.$value->id.'" '.$selected.'>'.$value->EquipmentName.'</option>';


                                                $selected="";
                                                if($data->Equipment){
                                                    if($value->id == $data->Equipment) {
                                                        $selected="selected=selected";
                                                        echo '<option value="'.$data->Equipment.'" ' . $selected . '>' . $value->EquipmentName . '</option>';
                                                    } 
                                                    echo '<option value="'.$value->id.'" ' . $selected . '>' . $value->EquipmentName . '</option>';
    
                                                }
                                                else{
                                                    echo '<option value="'.$value->id.'" ' . $selected . '>' . $value->EquipmentName . '</option>';
                                                }
                                            }
                                            ?> 
                                            </select>
                                </div>

                                <div class="col-md-4 form-group mb-3">
                                    <label for="MaintenanceDetail">Maintenance Detail<span class="text-danger">*</span></label>
                                    <!-- <textarea  name="MaintenanceDetail" id="MaintenanceDetail" class="form-control"></textarea> -->
                                    <?php
                                                  echo '<textarea class="form-control" id="MaintenanceDetail" type="text" name="MaintenanceDetail" value=""> '. $data->MaintenanceDetail .'</textarea>';
                                    ?>
                                </div>

                                <div class="col-md-2 form-group mb-3">
                                            <label for="MaintenanceDate">MaintenanceDate</label>
                                            <input class="form-control" type="date" id="MaintenanceDate" name="MaintenanceDate" value="<?= isset($data->MaintenanceDate)? $data->MaintenanceDate:date('Y-m-d');?>"/>
                                </div>

                                <div class="col-md-2 form-group mb-3">
                                            <label for="NextMaintenanceDate">NextMaintenanceDate</label>
                                            <input class="form-control" type="date" id="NextMaintenanceDate" name="NextMaintenanceDate" value="<?= isset($data->NextMaintenanceDate)? $data->NextMaintenanceDate:date('Y-m-d');?>"/>
                                </div>

                                <div class="col-md-4 form-group mb-3">
                                    <label for="Remark">Remark<span class="text-danger">*</span></label>
                                    <!-- <textarea  name="Remark" id="Remark" class="form-control"></textarea> -->
                                    <?php
                                                  echo '<textarea class="form-control" id="Remark" type="text" name="Remark" value=""> '. $data->Remark .'</textarea>';
                                    ?>
                                </div>



                              
                            <!-- <div class="row">

                                <div class="col-md-3 form-group mb-3">
                                    <label for="WareHouseName">WareHouseName<span class="text-danger">*</span></label>
                                    <select class="form-control"  name="WareHouseName" id="WareHouseName">
                                            <option value="0">-Select-</option>
                                            <?php foreach($Refdata as $value)
                                            {
                                                // $selected="";
                                                // if(!empty($data[0]->FkStockId)){

                                                //     if($value->StockID == $data[0]->FkStockId) {
                                                //       $selected="selected=selected";
                                                //     } 
                                                // }  
                                                                
                                                echo '<option value="'.$value->ID.'" '.$selected.'>'.$value->Name.'</option>';
                                            }
                                            ?> 
                                            </select>
                                </div>-->
                               

                               
                            </div> 

                        
                            <div class="row">
                                <div class="col-md-12 text-right">
                                    <button class="btn btn-primary  " style="background-color:green;font-weight:500 ;box-shadow: 1px 2px 3px 0px black;color:white; width: 6rem;" type="button" name="btn_save" id="btn_save"><i class="fa-regular fa-circle-check"></i>&nbsp; Save</button>

                                    <button class="btn btn-danger text-white" type="button" name="cancel" id="cancel" style="color:white;background-color:red;font-weight:500;box-shadow: 1px 2px 3px 0px black;"><a class="text-white" href="<?php echo base_url(); ?>WareHouse/EquipmentMaintenance/index"><i class="fa-regular fa-circle-xmark"></i>&nbsp; Cancel</a></button>

                                </div>
                            </div>

                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>


        <!-- <script  src="<?php echo base_url('web_resources'); ?>/dist/js/jquery.min.js"></script>          
        <script  src="<?php echo base_url('web_resources'); ?>/dist/js/controllers/StudentCreate.js"></script> -->

        <script src="<?php echo base_url(); ?>Assets/js/jquery.min.js"></script>

        <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>

        <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>



        <script>
    var base_path = "<?php echo base_url();?>";
    var a = false;

    $(document).ready(function(){
        $("#btn_save").click(function(){
           // if (!a) {
                saveperform();
           // }
        }); 
    });

    function saveperform() {
        var id = $("#id").val();
        var Equipment = $('#Equipment').val();
        var MaintenanceDetail = $("#MaintenanceDetail").val();
        var MaintenanceDate = $("#MaintenanceDate").val();
        var NextMaintenanceDate = $('#NextMaintenanceDate').val();
        var Remark = $('#Remark').val();
       
        

// Check if no gender is selected

        // Check if any of the required fields are empty or haven't been selected
        if (Equipment === "" || MaintenanceDetail === "" ||MaintenanceDate=="" || NextMaintenanceDate === "" || Remark === "" ) {
            Swal.fire(
                'Opps!',
                'Please Enter Required Fields!',
                'error'
            );
        }
        else 
        {
            if(id > 0)
            {
                a = true;
                var form = $("#Form").closest("form");
                var formData = new FormData(form[0]);

                $.ajax({
                    url: base_path + "WareHouse/EquipmentMaintenance/updateEquipmentMaintenance",
                    type: "POST",
                    data: formData,
                    processData: false,
             contentType: false,
             beforeSend: function(){
                $('#btn_save').prop('disabled', true);
                $('#btn_save').html('<i class="fa fa-spinner " style="padding-right:2%;"></i> Loading');
                }, 
             success: function(data) { 
                $("#Form").trigger("reset");
                $('#btn_save').html('<i class="fa fa-check-circle" style="font-size: 20px;color: #FFF;"></i>Save');
                $('#btn_save').prop('disabled', false);

        

                swal({
                title:"",
                text:"Data Update Successfully",
                type:"success",
                showCancelButton: false, 
                showConfirmButton: false,
                width: '1000px',
                timer:2000
            });
            window.location.href = base_path+"WareHouse/EquipmentMaintenance/index";
                
                
            }
        });

        }
         else {
            a = true;

            $.ajax({
                url: base_path + "WareHouse/EquipmentMaintenance/insertEquipmentMaintenance",
                type: "POST",
                data: $('#Form').serialize(),
                beforeSend: function(){
                    $('#btn_save').prop('disabled', true);
                    $('#btn_save').html('Loading');
                }, 
                success: function(data) {
                    $('#btn_save').prop('disabled', false);
                    $('#btn_save').html('Save');
                    $("#Form").trigger("reset");
                    
                    Swal.fire(
                        'Good job!',
                        'Data Submitted Successfully!',
                        'success'
                    );
                    
                    a = false;
                },
                error: function(xhr, textStatus, errorThrown) {
                    // Handle errors here
                    console.error("Error:", errorThrown);
                    Swal.fire(
                        'Error!',
                        'An error occurred during submission. Please try again.',
                        'error'
                    );
                }
            });
        }
    }
}
</script>
