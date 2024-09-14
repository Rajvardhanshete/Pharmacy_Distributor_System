<!-- =============== Left side End ================-->
<div class="main-content-wrap sidenav-open d-flex flex-column">
    <!-- ============ Body content start ============= -->
    <div class="main-content">
        <div class="breadcrumb">
            <h1>Student Registration</h1>
        </div>
        <div class="separator-breadcrumb border-top"></div>
        <div class="row">
            <div class="col-md-12">
                <div class="card mb-4">
                    <div class="card-body">
                        <form role="form" id="Form" action="" method="post">
                            <div class="row">
                                <!-- <input class="form-control" id="Id" type="text" placeholder="Enter your ID" name="Id"
                                    value="<?php if (!empty($data))
                                        echo $data[0]->Id; ?>" type="text" /> -->
                                <div class="col-md-4 form-group mb-3">
                                    <label for="fullName">Full Name</label>
                                    <input class="form-control" id="FullName" type="text"
                                        placeholder="Enter your full name" name="FullName" value="<?php if (!empty($data))
                                            echo $data[0]->FullName; ?>" />
                                </div>

                                <div class="col-md-4 form-group mb-3">
                                    <label for="Address"> Address</label>
                                    <input class="form-control" id="Address" type="text"
                                        placeholder="Enter your  address" name="Address" value="<?php if (!empty($data))
                                            echo $data[0]->Address; ?>" />
                                </div>
                                <div class="col-md-2 form-group mb-3">
                                    <label for="Mobile">Mobile No.</label>
                                    <input class="form-control" id="Mobile" type="text" maxlength="10"
                                        placeholder="Enter phone" name="Mobile" value="<?php if (!empty($data))
                                            echo $data[0]->Mobile; ?>" />
                                </div>

                                <div class="col-md-2 form-group mb-3">
                                    <label for="Email">Enter your email:</label>
                                    <input class="form-control" type="email" placeholder="Enter email" id="Email"
                                        name="Email" value="<?php if (!empty($data))
                                            echo $data[0]->Email; ?>">
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-md-2 form-group">
                                    <label for="Std">Std</label>
                                    <select class="form-control" name="Std" id="Std">
                                        <option value="">--Select--</option>
                                      <?php foreach($Refdata as $value)
                                            {
                                                // $selected="";
                                                // if(!empty($data[0]->FkStockId)){

                                                //     if($value->StockID == $data[0]->FkStockId) {
                                                //       $selected="selected=selected";
                                                //     } 
                                                // }  
                                                                
                                                echo '<option value="'.$value->Id.'" '.$selected.'>'.$value->Name.'</option>';
                                            }
                                            ?> 
                                    </select>
                                </div>

                                <div class="col-md-2 form-group">
                                    <label for="Subject">Subject</label>
                                    <select class="form-control" name="Subject" id="Subject">
                                    <option value="">--Select--</option>
                                      <?php foreach($deodata as $value)
                                            {
                                                // $selected="";
                                                // if(!empty($data[0]->FkStockId)){

                                                //     if($value->StockID == $data[0]->FkStockId) {
                                                //       $selected="selected=selected";
                                                //     } 
                                                // }  
                                                                
                                                echo '<option value="'.$value->Id.'" '.$selected.'>'.$value->Sub.'</option>';
                                            }
                                            ?> 
                                    </select>
                                </div>

                                <div class="col-md-2 form-group mb-3">
                                    <label for="DOB">Date of Birth</label>
                                    <input class="form-control" type="date" id="DOB" name="DOB" value="<?php if (!empty($data))
                                        echo $data[0]->DOB; ?>" />
                                </div>

                                <div class="col-md-2 form-group">
                                    <label for="Gender">Gender</label><br>
                                    <label for="Gender">male</label>&nbsp;
                                    <input id="Gender" name="Gender" value="Male" type="radio">&nbsp;&nbsp;&nbsp;
                                    <label for="Gender">female</label>&nbsp;
                                    <input id="Gender" name="Gender" value="Female" type="radio">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12 text-right">
                                    <button class="btn btn-primary" type="button" name="btn_save"
                                        id="btn_save">Submit</button>
                                    <a class="btn btn-warning text-white"
                                        href="<?= base_url() ?>Student/index">Details</a>
                                    <!-- <button class="btn btn-warning text-white" type="button" name="cancel" id="cancel">Cancel</button> -->
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
        var FullName = $('#FullName').val();
        var Address = $("#Address").val();
        var Mobile = $("#Mobile").val();
        var Email = $('#Email').val();
        var Std = $('#Std').val();
        var Subject = $('#Subject').val();
        var DOB = $('#DOB').val();
        var Gender = $('#Gender').val();
        

// Check if no gender is selected

        // Check if any of the required fields are empty or haven't been selected
        if (FullName === "" || Address === "" ||Mobile=="" || Email === "" || Std === "" || Subject === "" || DOB === "0" || Gender === "") {
            Swal.fire(
                'Opps!',
                'Please Enter Required Fields!',
                'error'
            );
        } else {
            a = true;

            $.ajax({
                url: base_path + "student/insertSTUDENT",
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
