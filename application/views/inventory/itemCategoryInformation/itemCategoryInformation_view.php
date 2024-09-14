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
                            <div class="h3 text-left">Item Category Information</div>
                            <div class="row">
                                <div class="col-md-4 form-group mb-3">
                                    <label for="ItemCategoryName">Item Category Name <span class="text-danger">*</span></label>
                                    <input class="form-control" id="ItemCategoryName" type="text" name="ItemCategoryName" value="" required />
                                </div>

                                <div class="col-md-4 form-group mb-3">
                                    <label for="ItemCategoryShortName">Item Category Short Name</label>
                                    <input class="form-control" id="ItemCategoryShortName" type="text" name="ItemCategoryShortName" value="" />
                                </div>

                                <div class="col-md-4 form-group mb-3">
                                    <label for="Brands">Brands <span class="text-danger">*</span></label>
                                    <input class="form-control" id="Brands" type="text" name="Brands" value="" required />
                                </div>


                                <div class="col-md-4 form-group mb-3">
                                    <label for="Description">Description</label>
                                    <textarea class="form-control" id="Description" type="" name="Description" value=""></textarea>
                                </div>

                                <div class="form-check col-md-4 mt-5 mx-2" style="font-size: .9 rem;">
                                    <input type="checkbox" class="form-check-input" id="CheckboxActive" name="CheckboxActive">
                                    <label for="CheckboxActive">Active</label>
                                </div>


                            </div>



                            <div class="row">
                                <div class="col-md-12 text-right">
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