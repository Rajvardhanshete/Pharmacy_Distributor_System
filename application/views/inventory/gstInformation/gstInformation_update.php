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
                            <h1>Call Log</h1>
                        </div>
                        <hr>
                        <form role="form" id="Form" action="<?php echo base_url('update/'.(isset($data -> id)?'updateGstInformation':'insertGstInformation'))?>" method="post">
                            <div class="row">
                                
                                <div class="col-md-2 form-group mb-3">
                                    <input name="id" id="id" type="hidden"   value="<?= isset($data->id)? $data->id: ''?> " />

                                    <label for="GSTName">GST Name <span class="text-danger">*</span></label>
                                    <input class="form-control" id="GSTName" type="text" name="GSTName" placeholder="Enter GST Name" value="<?= isset($data->GSTName)? $data->GSTName:''?>" required/>
                                </div>

                                <div class="col-md-2 form-group mb-3">
                                    <label for="GSTShortName">GST Short Name <span class="text-danger">*</span></label>
                                    <input class="form-control" id="GSTShortName" type="text" name="GSTShortName" placeholder="Enter Short Name" value="<?= isset($data->GSTShortName)? $data->GSTShortName:''?>" required />
                                </div>

                                <div class="col-md-2 form-group mb-3">
                                    <label for="GSTPercentage">GST Percentage Value <span class="text-danger">*</span></label>
                                    <input class="form-control" id="GSTPercentage" type="text" name="GSTPercentage" placeholder="Enter GST Percentage Value" value="<?= isset($data->GSTPercentage)? $data->GSTPercentage:''?>" required />
                                </div>

                                <div class="col-md-2 form-group mb-3">
                                    <label for="IGSTValue">IGST Value <span class="text-danger">*</span></label>
                                    <input class="form-control" id="IGSTValue" type="text" name="IGSTValue" placeholder="00.00" value="<?= isset($data->IGSTValue)? $data->IGSTValue:''?>" required />
                                </div>

                                <div class="col-md-2 form-group mb-3">
                                    <label for="CGSTValue">CGST Value <span class="text-danger">*</span></label>
                                    <input class="form-control" id="CGSTValue" type="text" name="CGSTValue" placeholder="00.00" value="<?= isset($data->CGSTValue)? $data->CGSTValue:''?>" required />
                                </div>

                                <div class="col-md-2 form-group mb-3">
                                    <label for="SGSTValue">SGST Value <span class="text-danger">*</span></label>
                                    <input class="form-control" id="SGSTValue" type="text" name="SGSTValue" placeholder="00.00" value="<?= isset($data->SGSTValue)? $data->SGSTValue:''?>" required />
                                </div>

                                <div class="col-md-4 form-group mb-3">
                                    <label for="Description">Description</label>
                                    <!-- <textarea class="form-control" id="Description" name="Description" placeholder="Please Enter Description" value="<?= isset($data->Description)? $data->Description:''?>" ></textarea> -->
                                    <?php
                                                  echo '<textarea class="form-control" id="Description" type="text" name="Description" value=""> '. $data->Description .'</textarea>';
                                    ?>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12 text-right">
                                    <button class="btn btn-primary  " style="background-color:green;font-weight:500 ;box-shadow: 1px 2px 3px 0px black;color:white; width: 6rem;" type="button" name="btn_save" id="btn_save"><i class="fa-regular fa-circle-check"></i>&nbsp; Save</button>

                                    <button class="btn btn-danger text-white" type="button" name="cancel" id="cancel" style="color:white;background-color:red;font-weight:500;box-shadow: 1px 2px 3px 0px black;"><a class="text-white" href="http://localhost/ProjectTemplate1/frontoffice/Calllogs/create"><i class="fa-regular fa-circle-xmark"></i>&nbsp; Cancel</a></button>

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
            var base_path = "<?php echo base_url(); ?>";
            var a = false;

            $(document).ready(function() {
                $("#btn_save").click(function() {
                    // if (!a) {
                    saveperform();
                    // }
                });
            });

            function saveperform() {
                var id = $("#id").val();
                var GSTName = $('#GSTName').val();
                var GSTShortName = $('#GSTShortName').val();
                var GSTPercentage = $("#GSTPercentage").val();
                var IGSTValue = $('#IGSTValue').val();
                var CGSTValue = $('#CGSTValue').val();
                var SGSTValue = $('#SGSTValue').val();
                var Description = $('#Description').val();
                // var NextFollowDate = $('#NextFollowDate').val();
                // var CallDescription = $('#CallDescription').val();
                // var Feedback = $('#Feedback').val();



                // Check if no gender is selected

                // Check if any of the required fields are empty or haven't been selected
                if (GSTName === "" || GSTShortName === "" || GSTPercentage == "" || IGSTValue === "" || CGSTValue === "" || SGSTValue === "" || Description === "") {
                    Swal.fire(
                        'Opps!',
                        'Please Enter Required Fields!',
                        'error'
                    );
                }else 
        {
            if(id > 0)
            {
                a = true;
                var form = $("#Form").closest("form");
                var formData = new FormData(form[0]);

                $.ajax({
                    url: base_path + "Inventory/GstInformation/updateGstInformation",
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
            window.location.href = base_path+"Inventory/GstInformation/index";
                
                
            }
        });

        } 
        else {
                    a = true;

                    $.ajax({
                        url: base_path + "Inventory/GstInformation/insertGstInformation",
                        type: "POST",
                        data: $('#Form').serialize(),
                        beforeSend: function() {
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