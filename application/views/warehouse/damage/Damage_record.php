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
                    <form role="form" id="Form" action="" method="post">
                        

                        <div class="row">
                        <div class="col-md-4 form-group mb-3">
                                    <label for="DamageName">Damage Name<span class="text-danger">*</span></label>
                                    <input class="form-control" type="text" id="DamageName" name="DamageName" value="" required/>
                                    <!-- <select class="form-control"  name="DamageName" id="DamageName">
                                            <option value="0">-Select-</option>
                                            <?php foreach($equipmentdata as $value)
                                            {
                                                // $selected="";
                                                // if(!empty($data[0]->FkStockId)){

                                                //     if($value->StockID == $data[0]->FkStockId) {
                                                //       $selected="selected=selected";
                                                //     } 
                                                // }  
                                                                
                                                echo '<option value="'.$value->id.'" '.$selected.'>'.$value->EquipmentName.'</option>';
                                            }
                                            ?> 
                                            </select> -->
                                </div>

                                <div class="col-md-2 form-group mb-3">
                                    <label for="DamageQuantity">Damage Quantity<span class="text-danger">*</span></label>
                                    <input type ="number" name="DamageQuantity" id="DamageQuantity" class="form-control" required/>

                                </div>

                                <div class="col-md-2 form-group mb-3">
                                            <label for="Person">Person<span class="text-danger">*</span></label>
                                            <input class="form-control" type="text" id="Person" name="Person" value="" required/>
                                </div>

                                <div class="col-md-4 form-group mb-3">
                                            <label for="Reason">Reason<span class="text-danger">*</span></label>
                                            <textarea  name="Reason" id="Reason" class="form-control" required></textarea>
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
        var DamageName = $('#DamageName').val();
        var DamageQuantity = $("#DamageQuantity").val();
        var Person = $("#Person").val();
        var Reason = $('#Reason').val();
       
        

// Check if no gender is selected

        // Check if any of the required fields are empty or haven't been selected
        if (DamageName === "" || DamageQuantity === "" ||Person=="" || Reason === "" ) {
            Swal.fire(
                'Opps!',
                'Please Enter Required Fields!',
                'error'
            );
        } else {
            a = true;

            $.ajax({
                url: base_path + "WareHouse/DamageMaintenance/insertDamageMaintenance",
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
</script>
