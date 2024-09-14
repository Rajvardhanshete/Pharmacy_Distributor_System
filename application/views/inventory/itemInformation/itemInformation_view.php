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
                            <div class="h3 text-left">Item Information</div>
                            <div class="row">
                                <div class="col-md-3 form-group mb-3">
                                    <label for="ItemName">Item Name <span class="text-danger">*</span></label>
                                    <input class="form-control" id="ItemName" type="text" name="ItemName" placeholder="Enter Item Name" required />
                                </div>

                                <div class="col-md-3 form-group">
                                    <label for="ItemCategory">Item Category <span class="text-danger">*</span></label>
                                    <select class="form-control" name="ItemCategory" id="ItemCategory" required>
                                        <option value="">Select item category</option>
                                        <option value="">Select item category</option>
                                        <option value="">Select item category</option>
                                        <option value="">Select item category</option>
                                        <option value="">Select item category</option>
                                    </select>
                                </div>

                                <div class="col-md-2 form-group mb-3">
                                    <label for="BrandName">Brand Name <span class="text-danger">*</span></label>
                                    <select class="form-control" name="BrandName" id="BrandName" required>
                                        <option value="">Select Brand Name</option>
                                        <option value="">Select Brand Name</option>
                                        <option value="">Select Brand Name</option>
                                        <option value="">Select Brand Name</option>
                                        <option value="">Select Brand Name</option>
                                    </select>
                                </div>

                                <div class="col-md-2 form-group mb-3">
                                    <label for="Unit">Unit(UOM)</label>
                                    <select class="form-control" name="Unit" id="Unit">
                                        <option value="">Select Unit</option>
                                        <option value="">Select Unit</option>
                                        <option value="">Select Unit</option>
                                        <option value="">Select Unit</option>
                                        <option value="">Select Unit</option>
                                    </select>
                                </div>

                                <div class="col-md-2 form-group mb-3">
                                    <label for="MinStock">Min Stock</label>
                                    <input class="form-control" type="text" id="MinStock" name="MinStock" placeholder="Enter Min Stock"/>
                                </div>

                                <div class="col-md-2 form-group mb-3">
                                    <label for="MaxStock">Max Stock</label>
                                    <input class="form-control" type="text" id="MaxStock" name="MaxStock" placeholder="Enter Max Stock"/>
                                </div>

                                <div class="col-md-2 form-group mb-3">
                                    <label for="PurchasePrice">Purchase Price</label>
                                    <input class="form-control" type="text" id="PurchasePrice" name="PurchasePrice" placeholder="Enter Purchase Price"/>
                                </div>

                                <div class="col-md-2 form-group mb-3">
                                    <label for="SalePrice">Sale Price</label>
                                    <input class="form-control" type="text" id="SalePrice" name="SalePrice" placeholder="Enter Sale Price"/>
                                </div>

                                <div class="col-md-6 form-group mb-3">
                                    <label for="Party">Party</label>
                                    <input class="form-control" type="text" id="Party" name="Party" placeholder=""/>
                                </div>

                                <div class="col-md-6 form-group mb-3">
                                    <label for="ItemDescription">Item Description</label>
                                    <textarea class="form-control" id="ItemDescription" name="ItemDescription" placeholder="Please Enter Description"></textarea>
                                </div>

                                <div class="form-check col-md-2 mt-5" style="font-size: .9 rem;">
                                    <input type="checkbox" class="form-check-input" id="CheckboxWarranty" name="CheckboxWarranty">
                                    <label for="CheckboxWarranty">Warranty</label>
                                </div>
                                <div class="form-check col-md-2 mt-5" style="font-size: .9 rem;">
                                    <input type="checkbox" class="form-check-input" id="CheckboxProgramming" name="CheckboxProgramming">
                                    <label for="CheckboxProgramming">Programming</label>
                                </div>
                                <div class="form-check col-md-2 mt-5" style="font-size: .9 rem;">
                                    <input type="checkbox" class="form-check-input" id="CheckboxActive" name="CheckboxActive">
                                    <label for="CheckboxActive">Active</label>
                                </div>

                                <div class="col-md-2 form-group mb-3">
                                    <label for="HSN">HSN</label>
                                    <select class="form-control" name="HSN" id="HSN">
                                        <option value="">Select HSN</option>
                                        <option value="">Select HSN</option>
                                        <option value="">Select HSN</option>
                                        <option value="">Select HSN</option>
                                        <option value="">Select HSN</option>
                                    </select>
                                </div>

                                <div class="col-md-2 form-group mb-3">
                                    <label for="GST">GST</label>
                                    <select class="form-control" name="GST" id="GST">
                                        <option value="">Select GST</option>
                                        <option value="">Select GST</option>
                                        <option value="">Select GST</option>
                                        <option value="">Select GST</option>
                                        <option value="">Select GST</option>
                                    </select>
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