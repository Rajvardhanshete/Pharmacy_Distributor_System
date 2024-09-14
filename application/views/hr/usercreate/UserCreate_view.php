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
            <!-- <h1>Inward</h1> -->
        </div>
      <!-- <hr> -->
                    <form role="form" id="Form" action="" method="post">
                        

                        <div class="row">
                            <h5>User Create</h5>
                                <div class="col-md-4 form-group mb-3">
                                    <label for="EmployeeName">Employee Name <span class="text-danger">*</span></label>
                                    <select class="form-control"  name="EmployeeName" id="EmployeeName">
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
                                </div>

                                <div class="col-md-4 form-group mb-3">
                                    <label for="Branch">Branch<span class="text-danger">*</span></label>
                                    <input type="text" name="Branch" id="Branch" class="form-control">
                                    <!-- <select class="form-control"  name="Branch" id="Branch">
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
                                            </select> -->
                                </div>

                                <div class="col-md-2 form-group mb-3">
                                    <label for="UserName">UserName<span class="text-danger">*</span></label>
                                    <input class="form-control" id="UserName" type="text"
                                        name="UserName" value="Enter User Name" />
                                </div>
                                <div class="col-md-2 form-group mb-3">
                                    <label for="UserPassword">UserPassword<span class="text-danger">*</span></label>
                                    <input class="form-control" id="UserPassword" type="text"
                                        name="UserPassword" value="Enter User Password" />
                                </div>

                               
                            </div>

                            <div class="row">
                                <div class="col-md-2 form-group mb-3">
                                    <label for="ConformPassword">Conform Password<span class="text-danger">*</span></label>
                                    <input class="form-control" id="ConformPassword" type="text"
                                        name="ConformPassword" value="Enter User Password" />
                                </div>

                                <div class="col-md-2 form-group mb-3">
                                    <label for="UserRole">User Role<span class="text-danger">*</span></label>
                                    <select class="form-control"  name="UserRole" id="UserRole">
                                            <option value="0">-Select User Role-</option>
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
                                </div>
                               
                                <div class="col-md-2 form-group mb-3">
                                    <label for="ProfilePhoto">Profile  Photo<span class="text-danger">*</span></label>
                                    <input type="file" id="ProfilePhoto" name="ProfilePhoto">
                                </div>

                                
                            </div>   

                            
                            
                            <div class="row">
                                <div class="col-md-12 text-left">
                                    <h4 class="text-left">User Access</h4>
                                </div>
                            </div>
                            <hr class="mt-0">
                            <div class="row">
                                
                                <div class="col-md-12">
                                    <input type="checkbox" id="select-all" value="">Select All Rights
                                </div>
                            </div>
                            <div class=" ml-3">
                                <div class="row">
                                <div class="col-md-12">
                                    <input type="checkbox" name="check" value="Enquiry Add">Enquiry Add 
                                </div> 
                                </div> 
                                <div class="row">
                                <div class="col-md-12">
                                    <input type="checkbox" name="check" value="Enquiry Edit">Enquiry Edit 
                                </div>
                                </div>
                                <div class="row">
                                <div class="col-md-12">
                                    <input type="checkbox" name="check" value="Complaint Add">Complaint Add 
                                </div> 
                                </div> 
                                <div class="row">
                                <div class="col-md-12">
                                    <input type="checkbox" name="check" value="Visitor Book">Visitor Book 
                                </div> 
                                </div> 
                                <div class="row">
                                <div class="col-md-12">
                                    <input type="checkbox" name="check" value="Visitor Book Edit">Visitor Book Edit 
                                </div> 
                                </div> 
                                <div class="row">
                                <div class="col-md-12">
                                    <input type="checkbox" name="check" value="Phone Call Log">Phone Call Log 
                                </div> 
                                </div> 
                                <div class="row">
                                <div class="col-md-12">
                                    <input type="checkbox" name="check" value="Phone Call Log Edit">Phone Call Log Edit 
                                </div> 
                                </div> 
                                <div class="row">
                                <div class="col-md-12">
                                    <input type="checkbox" name="check" value="PostalDispatch">PostalDispatch 
                                </div> 
                                </div> 
                                <div class="row">
                                <div class="col-md-12">
                                    <input type="checkbox" name="check" value="PostalDispatch Edit">PostalDispatch Edit 
                                </div> 
                                </div> 
                                <div class="row">
                                <div class="col-md-12">
                                    <input type="checkbox" name="check" value="Staff Message">Staff Message 
                                </div> 
                                </div> 
                            </div>

                        
                            <!-- <div class="row">
                                <div class="col-md-12 text-left ml-2">
                                <button class="btn btn-primary" type="button" name="btn_save" id="btn_save" style="background-color: #a82eda;font-weight:900 ;color:white;"><i class="fa-solid fa-floppy-disk" style="color: white; margin-right:.2rem"></i>Save</button>
                                <a class="btn btn-danger" style="color: white;" href="<?= base_url() ?>" type="button" name="cancel" id="cancel"><i class="fa-solid fa-xmark" style="color: white; margin-right:.2rem"></i>Cancel</a>
                                    
                                </div>


                            </div> -->
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



        <!-- <script>
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
        var PersonName = $('#PersonName').val();
        var GateInDate = $("#GateInDate").val();
        var GateInTime = $("#GateInTime").val();
        var Reason = $('#Reason').val();
        var DriverName = $('#DriverName').val();
        var Mobile = $('#Mobile').val();
        var VehicleName = $('#VehicleName').val();
        var VehicleNo = $('#VehicleNo').val();
        var GateOutDate = $('#GateOutDate').val();
        var GateOutTime = $('#GateOutTime').val();
        var FrontPhoto = $('#FrontPhoto').val();
        var BackPhoto = $('#BackPhoto').val();
        

// Check if no gender is selected

        // Check if any of the required fields are empty or haven't been selected
        if (PersonName === "" || GateInDate === "" ||GateInTime=="" || Reason === "" || DriverName === "" || Mobile === "" || VehicleName === "0" || VehicleNo === "" || GateOutDate === "" || GateOutTime === "" || FrontPhoto === "" || BackPhoto === "") {
            Swal.fire(
                'Opps!',
                'Please Enter Required Fields!',
                'error'
            );
        } else {
            a = true;

            $.ajax({
                url: base_path + "pass/insertPASS",
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
</script> -->
