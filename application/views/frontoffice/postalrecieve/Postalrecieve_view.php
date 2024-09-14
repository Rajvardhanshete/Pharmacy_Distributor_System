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
                            <h1>Postal Recieve</h1>
                        </div>
                        <hr>

                        <form role="form" id="Form" action="" method="post">
                            <div class="h3 text-center">Inward Letter Transaction Information</div>
                            <div class="row">
                                <div class="col-md-2 form-group mb-3">
                                    <label for="InwordNo">Inword no.*</label>
                                    <input class="form-control" id="InwordNo" type="text" name="InwordNo" value="" />
                                </div>
                                <!-- <div class="col-md-2 form-group mb-3">
                                    <label for="OutwordLetterNo">Inword Letter no.*</label>
                                    <input class="form-control" id="OutwordLetterNo" type="text" name="OutwordLetterNo"
                                        value="" />
                                </div> -->
                                <div class="col-md-2 form-group mb-3">
                                    <label for="InwordDate">Inword Date</label>
                                    <input class="form-control" type="date" id="InwordDate" name="InwordDate" value="<?php echo date('Y-m-d'); ?>" />
                                </div>
                            </div>
                            <div class="h3 text-center">To Whom correspondence</div>

                            <div class="row">
                                <div class="col-md-3 form-group mb-3">
                                    <label for="Name">Name</label>
                                    <input class="form-control" id="Name" type="text" name="Name" value="" />
                                </div>
                                <div class="col-md-3 form-group">
                                    <label for="Place">Place.*</label>
                                    <select class="form-control" name="Place" id="Place">
                                    <option value="">--Select--</option>
                                    <?php foreach( $deodata as $value)
                                            {
                                                // $selected="";
                                                // if(!empty($data[0]->FkStockId)){

                                                //     if($value->StockID == $data[0]->FkStockId) {
                                                //       $selected="selected=selected";
                                                //     } 
                                                // }  
                                                                
                                                echo '<option value="'.$value->Id.'" '.$selected.'>'.$value->Location.'</option>';
                                            }
                                            ?> 
                                    </select>
                                </div>
                                <div class="col-md-4 form-group mb-3">
                                    <label for="Address">Address</label>
                                    <textarea class="form-control" id="Address" type="" name="Address" value=""></textarea>
                                </div>
                                <div class="col-md-2 form-group mb-3">
                                    <label for="InNoReference">Incoming Number for Reference</label>
                                    <input class="form-control" id="InNoReference" type="text" name="InNoReference" value="" />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2 form-group mb-3">
                                    <label for="InDateReference">Incoming Date for Reference</label>
                                    <input class="form-control" type="date" id="InDateReference" name="InDateReference" value="<?php echo date('Y-m-d'); ?>" />
                                </div>
                                <div class="col-md-4 form-group">
                                    <label for="SubjectOfCorres">The subject of correspondence.*</label>
                                    <textarea class="form-control" id="SubjectOfCorres" type="text" name="SubjectOfCorres" value="">
                                    </textarea>
                                </div>
                                <div class="col-md-4 form-group mb-3">
                                    <label for="Remark">Remark</label>
                                    <textarea class="form-control " rows="1" id="Remark" type="text" name="Remark" value="">
                                    </textarea>
                                </div>
                                <div class="col-md-2 form-group mb-3">
                                    <label for="PostalCharges">Postal Charges</label>
                                    <input class="form-control" id="PostalCharges" type="text" name="PostalCharges" value="" />
                                </div>

                            </div>
                            <!-- <div class="row">
                                <div class="col-md-12 text-right">
                                    <button class="btn btn-primary "style="color:black;background-color:#a82eda;font-weight:900;" type="button" name="btn_save" id="btn_save"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle" viewBox="0 0 16 16">
                                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16" />
                                            <path d="m10.97 4.97-.02.022-3.473 4.425-2.093-2.094a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05" />
                                        </svg>&nbsp Submit</button>
                                    <a class="btn btn-primary btn-warning"style="font-weight:900; color:black;" href="<?= base_url() ?>frontoffice/postalrecieve/index"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z" />
                                        </svg>&nbsp Details</a>
                                    <button class="btn btn-warning text-white" type="button" name="cancel" id="cancel">Cancel</button>

                                </div>
                            </div> -->

                            <div class="row">
                                <div class="col-md-12 text-right">
                                    <button class="btn btn-primary  " style="background-color:green;font-weight:500 ;box-shadow: 1px 2px 3px 0px black;color:white; width: 6rem;" type="button" name="btn_save" id="btn_save"><i class="fa-regular fa-circle-check"></i>&nbsp; Save</button>

                                    <button class="btn btn-danger text-white" type="button" name="cancel" id="cancel" style="color:white;background-color:red;font-weight:500;box-shadow: 1px 2px 3px 0px black;"><a class="text-white" href="http://localhost/ProjectTemplate1/frontoffice/postalrecieve/create"><i class="fa-regular fa-circle-xmark"></i>&nbsp; Cancel</a></button>

                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
            <!-- </div> -->
            <!-- </div> -->
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
                var InwordNo = $('#InwordNo').val();
                var InwordDate = $("#InwordDate").val();
                var Name = $('#Name').val();
                var Place = $('#Place').val();
                var Address = $('#Address').val();
                var InNoReference = $('#InNoReference').val();
                var InDateReference = $('#InDateReference').val();
                var SubjectOfCorres = $('#SubjectOfCorres').val();
                var Remark = $('#Remark').val();
                var PostalCharges = $('#PostalCharges').val();
                // var Gender = $('#Gender').val();



                // Check if no gender is selected

                // Check if any of the required fields are empty or haven't been selected
                if (InwordNo === "" || InwordDate == "" || Name === "" || Place === "" || Address === "" || InNoReference === "" || InDateReference == "" || SubjectOfCorres === "" || Remark === "" || PostalCharges === "") {
                    Swal.fire(
                        'Opps!',
                        'Please Enter Required Fields!',
                        'error'
                    );
                } else {
                    a = true;

                    $.ajax({
                        url: base_path + "FrontOffice/Postalrecieve/insertPostalrecieve",
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
        </script>