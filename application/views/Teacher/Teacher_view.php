<!-- =============== Left side End ================-->
<div class="main-content-wrap sidenav-open d-flex flex-column">
    <!-- ============ Body content start ============= -->
    <div class="main-content">
        <div class="breadcrumb">
            <h1>Teacher Registration</h1>
        </div>
        <div class="separator-breadcrumb border-top"></div>
        <div class="row">
            <div class="col-md-12">
                <div class="card mb-4">
                    <div class="card-body">
                        <form role="form" id="Form" action="" method="post">
                            <div class="row">
                                <div class="col-md-4 form-group mb-3">
                                    <label for="firstName1"> Full Name</label>
                                    <input class="form-control" id="" type="text"
                                        placeholder="Enter your full name" name="FullName" value="" />
                                </div>
                                <div class="col-md-4 form-group mb-3">
                                    <label for="firstName1"> Address</label>
                                    <input class="form-control" id="Address" type="text"
                                        placeholder="Enter your  address" name="Address" value="" />
                                </div>
                                <div class="col-md-2 form-group mb-3">
                                    <label for="date">Join Date</label>
                                    <input class="form-control" type="date" id="JoinDate" name="JoinDate"
                                        value="<?php echo date('Y-m-d'); ?>" />
                                </div>
                                <div class="col-md-2 form-group mb-3">
                                    <label for="date">End Date</label>
                                    <input class="form-control" type="date" id="EndDate" name="EndDate" value="" />
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-2 form-group">
                                    <label for="">Qualification</label>
                                    <select class="form-control" name="Qualification" id="Qualification">
                                    <option value="">--Select--</option>
                                      <?php foreach($Refdata as $value)
                                            {
                                                // $selected="";
                                                // if(!empty($data[0]->FkStockId)){

                                                //     if($value->StockID == $data[0]->FkStockId) {
                                                //       $selected="selected=selected";
                                                //     } 
                                                // }  
                                                                
                                                echo '<option value="'.$value->Id.'" '.$selected.'>'.$value->qualification.'</option>';
                                            }
                                            ?> 
                                    </select>
                                    </select>
                                </div>
                                <div class="col-md-2 form-group">
                                    <label for="">Experience</label>
                                    <select class="form-control" name="Experience" id="Experience">
                                    <option value="">--Select--</option>
                                      <?php foreach($deodata as $value)
                                            {
                                                // $selected="";
                                                // if(!empty($data[0]->FkStockId)){

                                                //     if($value->StockID == $data[0]->FkStockId) {
                                                //       $selected="selected=selected";
                                                //     } 
                                                // }  
                                                                
                                                echo '<option value="'.$value->Id.'" '.$selected.'>'.$value->experience.'</option>';
                                            }
                                            ?> 
                                    </select>
                                    </select>
                                </div>
                                <div class="col-md-2 form-group mb-3">
                                    <label for="DateOB">Date of Birth</label>
                                    <input class="form-control" type="date" id="DateOB" name="DateOB" value="" />
                                </div>
                                <div class="col-md-2 form-group mb-3">
                                    <label for="Mobile">Mobile No.</label>
                                    <input class="form-control" id="Mobile" type="text" maxlength="10"
                                        placeholder="Enter phone" name="Mobile" value="" />
                                </div>

                                <div class="col-md-2 form-group">
                                    <label for="Gender">Gender</label><br>
                                    <label for="Gender">male</label>&nbsp;
                                    <input id="Gender" name="Gender" value="Male" type="radio">&nbsp;&nbsp;&nbsp;
                                    <label for="">female</label>&nbsp;
                                    <input id="Gender" name="Gender" value="Female" type="radio">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 text-right">
                                    <button class="btn btn-primary" type="button" name="btn_save"
                                        id="btn_save">Submit</button>
                                    <a class="btn btn-warning text-white"
                                        href="<?= base_url() ?>Teacher/index">Details</a>
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
        var JoinDate = $("#JoinDate").val();
        var EndDate = $('#EndDate').val();
        var Qualification = $('#Qualification').val();
        var Experience = $('#Experience').val();
        var DateOB = $('#DateOB').val();
        var Mobile = $('#Mobile').val();
        var Gender = $('#Gender').val();
         
        

// Check if no gender is selected

        // Check if any of the required fields are empty or haven't been selected
        if (FullName === "" || Address === "" ||JoinDate=="0" || EndDate === "" || Qualification === "0" || Experience === "0" || DateOB === "" || Mobile === "" || Gender === "") {
            Swal.fire(
                'Opps!',
                'Please Enter Required Fields!',
                'error'
            );
        } else {
            a = true;

            $.ajax({
                url: base_path + "teacher/insertTEACHER",
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