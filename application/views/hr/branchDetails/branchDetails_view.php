<head>
    <style>
        .breadcrumb {
            color: olivedrab;
        }

        .class {
            border: 2px solid black;
            border-radius: 10px;
            background-color: olivedrab;
            color: white;

            transition: all 0.6s ease;

        }

        .class:hover {
            background-color: blueviolet;
        }
    </style>
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
                        <form role="form" id="Form" action="" method="post">

                        
                            <div class="h3 text-left">Branch Information</div>
                            <div class="row">

                                <div class="col-md-3 form-group mb-3">
                                    <label for="BranchName">Branch Name <span class="text-danger">*</span></label>
                                    <input class="form-control" id="BranchName" type="text" name="BranchName" placeholder="Enter Branch Name" required />
                                </div>

                                <div class="col-md-2 form-group mb-3">
                                    <label for="PartyName">Party Name</label>
                                    <select class="form-control" name="PartyName" id="PartyName">
                                        <option value="">Select Party Name</option>
                                        <option value="">Select Party Name</option>
                                        <option value="">Select Party Name</option>
                                        <option value="">Select Party Name</option>
                                        <option value="">Select Party Name</option>
                                    </select>
                                </div>

                                <div class="col-md-3 form-group mb-3">
                                    <label for="GSTNumber">GST Number</label>
                                    <input class="form-control" id="GSTNumber" type="text" name="GSTNumber" placeholder="Enter GST Number" />
                                </div>

                                <div class="col-md-3 form-group mb-3">
                                    <label for="PANNumber">PAN Number</label>
                                    <input class="form-control" id="PANNumber" type="text" name="PANNumber" placeholder="Enter PAN Number" />
                                </div>

                                <div class="col-md-3 form-group mb-3">
                                    <div class="row">

                                        <div class="col-5 form-group mb-3">
                                            <label for="StartTime">Office Time</label>
                                            <input class="form-control" id="StartTime" type="Time" name="StartTime" value="<?php if (!empty($data))
                                                                                                                                    echo $data[0]->StartTime; ?>" />
                                        </div>

                                        <div class="col-2 form-group mb-3 mt-4 text-center">
                                            To
                                        </div>
    
                                        <div class="col-5 form-group mb-3 mt-1">
                                            <label for="EndTime"> </label>
                                            <input class="form-control" id="EndTime" type="Time" name="EndTime" value="<?php if (!empty($data))
                                                                                                                                    echo $data[0]->EndTime; ?>" />
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-3 form-group mb-3">
                                    <label for="HACDisplayName">HAC Display Name</label>
                                    <textarea class="form-control" id="HACDisplayName" name="HACDisplayName" placeholder="Enter HAC Display Name"></textarea>
                                </div>
                            </div>

                            <div class="h3 text-left">Branch Contact</div>

                            <div class="row">

                                <div class="col-md-3 form-group mb-3">
                                    <label for="ContactNo">Contact No <span class="text-danger">*</span></label>
                                    <input class="form-control" id="ContactNo" type="text" name="ContactNo" placeholder="Enter Contact No" required />
                                </div>

                                <div class="col-md-3 form-group mb-3">
                                    <label for="Email">Email <span class="text-danger">*</span></label>
                                    <input class="form-control" id="Email" type="email" name="Email" placeholder="Enter Email" required />
                                </div>

                                <div class="col-md-3 form-group mb-3">
                                    <label for="PurchaseEmail">Purchase Email</label>
                                    <input class="form-control" id="PurchaseEmail" type="email" name="PurchaseEmail" placeholder="Enter Purchase Email"/>
                                </div>

                                <div class="col-md-3 form-group mb-3">
                                    <label for="SalesEmail">Sales Email</label>
                                    <input class="form-control" id="SalesEmail" type="email" name="SalesEmail" placeholder="Enter Sales Email"/>
                                </div>

                                <div class="col-md-3 form-group mb-3">
                                    <label for="Website">Website</label>
                                    <input class="form-control" id="Website" type="text" name="Website" placeholder="Enter Website"/>
                                </div>

                                <div class="col-md-3 form-group mb-3">
                                    <label for="FacebookLink">Facebook Link</label>
                                    <input class="form-control" id="FacebookLink" type="text" name="FacebookLink" placeholder="Enter Facebook Link"/>
                                </div>

                                <div class="col-md-3 form-group mb-3">
                                    <label for="GooglePlus">Google Plus</label>
                                    <input class="form-control" id="GooglePlus" type="text" name="GooglePlus" placeholder="Enter Google Plus"/>
                                </div>

                                <div class="col-md-3 form-group mb-3">
                                    <label for="TwitterLink">Twitter Link</label>
                                    <input class="form-control" id="TwitterLink" type="text" name="TwitterLink" placeholder="Enter Twitter Link"/>
                                </div>

                                <div class="col-md-3 form-group mb-3">
                                    <label for="LinkedinLink">Linkedin Link</label>
                                    <input class="form-control" id="LinkedinLink" type="text" name="LinkedinLink" placeholder="Enter Linkedin Link"/>
                                </div>

                                <div class="col-md-3 form-group mb-3">
                                    <label for="InstagramLink">Instagram</label>
                                    <input class="form-control" id="InstagramLink" type="text" name="InstagramLink" placeholder="Enter Instagram Link"/>
                                </div>

                            </div>



                            <div class="row">
                                <div class="col-md-12 text-right">
                                    <button class="btn btn-primary" type="button" name="btn_save" id="btn_save" style="background-color: #a82eda;font-weight:900 ;color:black;"><i class="bi bi-floppy2"></i>Save</button>
                                    <a class="btn btn-warning text-white" href="<?= base_url() ?>" type="button" name="cancel" id="cancel">Cancel</a>
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
            var VisitorName = $('#VisitorName').val();
            var date = $("#date").val();
            var TimeIn = $("#TimeIn").val();
            var TimeOut = $('#TimeOut').val();
            var Address = $('#Address').val();
            var Reasone = $('#Reasone').val();
            // var EnquiryReason = $('#EnquiryReason').val();



            // Check if no gender is selected

            // Check if any of the required fields are empty or haven't been selected
            if (VisitorName === "" || date === "" || TimeIn == "0" || TimeOut === "" || Address === "" || Reasone === "") {
                Swal.fire(
                    'Opps!',
                    'Please Enter Required Fields!',
                    'error'
                );
            } else {
                a = true;

                $.ajax({
                    url: base_path + "visitor/insertVisit",
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