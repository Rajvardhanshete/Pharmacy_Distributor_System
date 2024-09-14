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
    <style>
        #optionalinfo {
            display: none;
            /* background-color: #f4f4f4; */
            /* padding: 10px; */
            /* border: 1px solid #ddd; */
            /* margin-top: 10px; */
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
            <h1>Equipment Master</h1>
        </div>
      <hr>
                    <form role="form" id="Form" action="<?php echo base_url('update/'.(isset($data -> id)?'updateEquipments':'insertEquipment'))?>" method="post">
                        

                        <div class="row">
                                <div class="col-md-3 form-group mb-3">
                        <input name="id" id="id" type="hidden"   value="<?= isset($data->id)? $data->id: ''?> " />
                                    <label for="EquipmentName">Equipment Name <span class="text-danger">*</span></label>
                                    <input class="form-control" type="text" name="EquipmentName" id="EquipmentName" value="<?= isset($data->EquipmentName)? $data->EquipmentName:''?>"/>
                                </div>

                                <div class="col-md-2 form-group mb-3">
                                    <label for="EquipmentCode">Equipment Code/No <span class="text-danger">*</span></label>
                                    <input class="form-control" id="EquipmentCode" type="text"
                                        name="EquipmentCode" value="<?= isset($data->EquipmentCode)? $data->EquipmentCode:''?>" />
                                </div>

                                <div class="col-md-3 form-group mb-3">
                                    <label for="EquipmentCategory">Equipment Category<span class="text-danger">*</span></label>
                                    <select class="form-control"  name="EquipmentCategory" id="EquipmentCategory">
                                            <option value="0">-Select-</option>
                                            <?php foreach($Refdata as $value)
                                            {
                                                // $selected="";
                                                // if(!empty($data[0]->FkStockId)){

                                                //     if($value->StockID == $data[0]->FkStockId) {
                                                //       $selected="selected=selected";
                                                //     } 
                                                // }  
                                                                
                                                // echo '<option value="'.$value->ID.'" '.$selected.'>'.$value->Name.'</option>';

                                                $selected="";
                                            if($data->CallType){
                                                if($value->id == $data->CallType) {
                                                    $selected="selected=selected";
                                                    echo '<option value="'.$data->CallType.'" ' . $selected . '>' . $value->Calltype . '</option>';
                                                } 
                                                echo '<option value="'.$value->id.'" ' . $selected . '>' . $value->Calltype . '</option>';

                                            }
                                            else{
                                                echo '<option value="'.$value->id.'" ' . $selected . '>' . $value->Calltype . '</option>';
                                            }
                                            }
                                            ?> 
                                            </select>
                                </div>

                               
                                <div class="col-md-4 form-group mb-3">
                                    <label for="Description">Description<span class="text-danger">*</span></label>
                                    <!-- <textarea  name="Description" id="Description" class="form-control"></textarea> -->
                                    <?php
                                                  echo '<textarea class="form-control" id="Description" type="text" name="Description" value=""> '. $data->Description .'</textarea>';
                                    ?>
                                </div>
                            </div>
                            <div class="row">

                                <div class="col-md-3 form-group mb-3">
                                    <label for="WareHouseName">WareHouseName<span class="text-danger">*</span></label>
                                    <select class="form-control"  name="WareHouseName" id="WareHouseName">
                                            <option value="0">-Select-</option>
                                            <?php foreach($warehousedata as $value)
                                            {
                                                // $selected="";
                                                // if(!empty($data[0]->FkStockId)){

                                                //     if($value->StockID == $data[0]->FkStockId) {
                                                //       $selected="selected=selected";
                                                //     } 
                                                // }  
                                                                
                                                // echo '<option value="'.$value->id.'" '.$selected.'>'.$value->	WarehouseName.'</option>';

                                                $selected="";
                                            if($data->WareHouseName){
                                                if($value->id == $data->WareHouseName ) {
                                                    $selected="selected=selected";
                                                    echo '<option value="'.$data->WareHouseName.'" ' . $selected . '>' . $value->WarehouseName . '</option>';
                                                } 
                                                echo '<option value="'.$value->id.'" ' . $selected . '>' . $value->WarehouseName. '</option>';

                                            }
                                            else{
                                                echo '<option value="'.$value->id.'" ' . $selected . '>' . $value->WarehouseName . '</option>';
                                            }
                                            }
                                            ?> 
                                            </select>
                                </div>
                                <div class="col-md-1 form-group mt-4 p-2" onloadeddata="myFunction">
                                    
                                    <input class="messageCheckbox" type="checkbox" name="Maintainace" id="Maintainace" value="1"   <?php if(($data->Maintainace)=="1") { ?> checked="checked" <?php } ?> />
                                    <label for="Maintainace">Maintainace</label>
                                </div>

                                <div class="col-md-4 form-group mb-3 mt-2"  id="optionalinfo">
                                   <div class="col-md-4 form-group mb-3 d-flex flex-column">
                                        <label for="MaintainaceDuration">Maintainace Duration</label>
                                        <select class="form-control w-50"  name="MaintainaceDuration" id="MaintainaceDuration">
                                            <?php
                                                 if($data->MaintainaceDuration){
                                                        $selected="selected=selected";
                                                        echo '<option value="'.$data->id.'" ' . $selected . '>' . $data->MaintainaceDuration . '</option>';
                                                    } 
                                            ?>
                                            <option value="0">-Select-</option>
                                            <option value="1">less-1 year</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5 or more</option>
                                           
                                        </select>
                                    </div>
                                    
                                </div>
                                
                                <script>
                                    document.getElementById('Maintainace').addEventListener('change', function() {
                                        var optionalinfo = document.getElementById('optionalinfo');
                                        if (this.checked) {
                                            optionalinfo.style.display = 'contents';
                                        } else {
                                            optionalinfo.style.display = 'none';
                                        }
                                    });
                                    function myFunction() {
                                    var mid = document.getElementById('Maintainace');
                                    alert("Page is loaded".mid);
                                        var optionalinfo = document.getElementById('optionalinfo');
                                        if (mid == "1") {
                                            optionalinfo.style.display = 'contents';
                                        } else {
                                            optionalinfo.style.display = 'none';
                                        }
                                   
                                }
                                </script>

                               
                            </div>


                        
                            <div class="row">
                                <div class="col-md-12 text-left ml-2">
                                <button class="btn btn-primary" type="button" name="btn_save" id="btn_save" style="background-color: #a82eda;font-weight:900 ;color:white;"><i class="fa-solid fa-floppy-disk" style="color: white; margin-right:.2rem"></i>Save</button>
                                <a class="btn btn-danger" style="color: white;" href="<?= base_url() ?>" type="button" name="cancel" id="cancel"><i class="fa-solid fa-xmark" style="color: white; margin-right:.2rem"></i>Cancel</a>
                                    
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
        var EquipmentName = $('#EquipmentName').val();
        var EquipmentCode = $("#EquipmentCode").val();
        var EquipmentCategory = $("#EquipmentCategory").val();
        var Description = $('#Description').val();
        var WareHouseName = $('#WareHouseName').val();
        var Maintainace =  $('.messageCheckbox:checked').val();
        var MaintainaceDuration = $('#MaintainaceDuration').val();
        

// Check if no gender is selected

        // Check if any of the required fields are empty or haven't been selected
        if (EquipmentName === "" || EquipmentCode === "" ||EquipmentCategory=="" || Description === "" || WareHouseName === "" || Maintainace === "" || MaintainaceDuration === "" ) {
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
                    url: base_path + "WareHouse/EquipmentMaster/updateEquipments",
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
            window.location.href = base_path+"WareHouse/EquipmentMaster/index";
                
                
            }
        });

        }
        else {
            a = true;

            $.ajax({
                url: base_path + "WareHouse/EquipmentMaster/insertEquipment",
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
