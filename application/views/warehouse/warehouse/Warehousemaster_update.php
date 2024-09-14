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
    <script>
        $(document).ready(function(){
            $("#Form #select-all").click(function(){
                $("#Form input[type='checkbox']").prop('checked',this.checked);
            });
        });
    </script>
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
            <h1>Warehouse Master</h1>
        </div>
      <hr>
                    <form role="form" id="Form" action="<?php echo base_url('update/'.(isset($data -> id)?'updateWarehouse':'insertWarehouse'))?>" method="post">
                        

                        <div class="row">
                                <div class="col-md-4 form-group mb-3">
                        <input name="id" id="id" type="hidden"   value="<?= isset($data->id)? $data->id: ''?> " />
                                    <label for="WarehouseName">Warehouse Name <span class="text-danger">*</span></label>
                                    <input class="form-control" type="text" name="WarehouseName" id="WarehouseName" value="<?= isset($data->WarehouseName)? $data->WarehouseName:''?>"/>
                                </div>

                                <div class="col-md-4 form-group mb-3">
                                    <label for="Location">Location<span class="text-danger">*</span></label>
                                    <!-- <textarea  name="Location" id="Location" class="form-control"></textarea> -->
                                    <?php
                                                  echo '<textarea class="form-control" id="Location" type="text" name="Location" value=""> '. $data->Location .'</textarea>';
                                    ?>
                                </div>

                                <div class="col-md-2 form-group mb-3">
                                    <label for="ContactPersonName">Contact Person Name<span class="text-danger">*</span></label>
                                    <input class="form-control" id="ContactPersonName" type="text"
                                        name="ContactPersonName" value="<?= isset($data->ContactPersonName)? $data->ContactPersonName:''?>" />
                                </div>
                                <div class="col-md-2 form-group mb-3">
                                    <label for="Contact1">Contact 1<span class="text-danger">*</span></label>
                                    <input class="form-control" id="Contact1" type="text"
                                        name="Contact1" value="<?= isset($data->Contact1)? $data->Contact1:''?>" />
                                </div>
                                <div class="col-md-2 form-group mb-3">
                                    <label for="Contact2">Contact 2<span class="text-danger">*</span></label>
                                    <input class="form-control" id="Contact2" type="text"
                                        name="Contact2" value="<?= isset($data->Contact2)? $data->Contact2:''?>" />
                                </div>
                                <div class="col-md-2 form-group mb-3">
                                    <label for="Email">Email<span class="text-danger">*</span></label>
                                    <input class="form-control" id="Email" type="text"
                                        name="Email" value="<?= isset($data->Email)? $data->Email:''?>" />
                                </div>

                               
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
        var WarehouseName = $('#WarehouseName').val();
        var Location = $("#Location").val();
        var ContactPersonName = $("#ContactPersonName").val();
        var Contact1 = $('#Contact1').val();
        var Contact2 = $('#Contact2').val();
        var Email = $('#Email').val();
        
        

// Check if no gender is selected

        // Check if any of the required fields are empty or haven't been selected
        if (WarehouseName === "" || Location === "" ||ContactPersonName=="" || Contact1 === "" || Contact2 === "" || Email === "" ) {
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
                    url: base_path + "WareHouse/WarehouseMaster/updateWarehouse",
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
            window.location.href = base_path+"WareHouse/WarehouseMaster/index";
                
                
            }
        });

        }
        else {
            a = true;

            $.ajax({
                url: base_path + "WareHouse/WarehouseMaster/insertWarehouse",
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
