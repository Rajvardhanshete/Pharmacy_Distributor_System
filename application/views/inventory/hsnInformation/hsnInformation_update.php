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
                        <form role="form" id="Form" action="<?php echo base_url('update/' . (isset($data->id) ? 'updateHsnInfo' : 'insertHsnInfo')) ?>" method="post">
                            <div class="h3 text-left">HSN Information</div>
                            <div class="row">

                                <div class="col-md-3 form-group mb-3">
                                    <input name="id" id="id" type="hidden" value="<?= isset($data->id) ? $data->id : '' ?> ">
                                    <label for="HSNCode4digit">HSN/SAC Code 4 Digit <span class="text-danger">*</span></label>
                                    <input class="form-control" id="HSNCode4digit" type="text" name="HSNCode4digit" value="<?= isset($data->HSNCode4digit) ? $data->HSNCode4digit : '' ?>" placeholder="" required />
                                </div>

                                <div class="col-md-3 form-group mb-3">
                                    <label for="HSNCode">HSN/SAC Code <span class="text-danger">*</span></label>
                                    <input class="form-control" id="HSNCode" type="text" name="HSNCode" value="<?= isset($data->HSNCode) ? $data->HSNCode : '' ?>" placeholder="" required />
                                </div>

                                <div class="col-md-2 form-group mb-3">
                                    <label for="Services">Good/Services <span class="text-danger">*</span></label>
                                    <select class="form-control" name="Services" id="Services" required>
                                        <option value="0">-Select-</option>
                                        <?php foreach ($ServicesData as $value) {
                                            $selected = "";
                                            if ($data->Services) {
                                                if ($value->ID == $data->Services) {
                                                    $selected = "selected=selected";
                                                    echo '<option value="' . $data->Services . '" ' . $selected . '>' . $value->GoodServices . '</option>';
                                                }
                                                echo '<option value="' . $value->ID . '" ' . $selected . '>' . $value->GoodServices . '</option>';
                                            } else {
                                                echo '<option value="' . $value->ID . '" ' . $selected . '>' . $value->GoodServices . '</option>';
                                            }
                                        }
                                        ?>
                                    </select>
                                </div>

                                <div class="col-md-2 form-group mb-3">
                                    <label for="GSTType">GST Type <span class="text-danger">*</span></label>
                                    <select class="form-control" name="GSTType" id="GSTType" required>
                                        <option value="0">-Select-</option>
                                        <?php foreach ($GstTypeData as $value) {
                                            $selected = "";
                                            if ($data->GSTType) {
                                                if ($value->ID == $data->GSTType) {
                                                    $selected = "selected=selected";
                                                    echo '<option value="' . $data->GSTType . '" ' . $selected . '>' . $value->Gsttype . '</option>';
                                                }
                                                echo '<option value="' . $value->ID . '" ' . $selected . '>' . $value->Gsttype . '</option>';
                                            } else {
                                                echo '<option value="' . $value->ID . '" ' . $selected . '>' . $value->Gsttype . '</option>';
                                            }
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>



                            <div class="row">
                                <div class="col-md-12 text-right">
                                    <button class="btn btn-primary" type="button" name="btn_save" id="btn_save" style="background-color: #a82eda;font-weight:900 ;color:white;"><i class="fa-solid fa-floppy-disk" style="color: white; margin-right:.2rem"></i>Save</button>
                                    <a class="btn btn-danger" style="color: white;" href="<?= base_url() ?>/inventory/HsnInformation/create" type="button" name="cancel" id="cancel"><i class="fa-solid fa-xmark" style="color: white; margin-right:.2rem"></i>Cancel</a>
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
            var id = $('#id').val();
            var HSNCode4digit = $('#HSNCode4digit').val();
            var HSNCode = $("#HSNCode").val();
            var Services = $("#Services").val();
            var GSTType = $('#GSTType').val();



            // Check if no gender is selected

            // Check if any of the required fields are empty or haven't been selected
            if (HSNCode4digit === "" || HSNCode === "" || Services == "" || GSTType === "") {
                Swal.fire(
                    'Opps!',
                    'Please Enter Required Fields!',
                    'error'
                );
            } else {
                if (id > 0) {
                    a = true;
                    var form = $("#Form").closest("form");
                    var formData = new FormData(form[0]);

                    $.ajax({
                        url: base_path + "Inventory/HsnInformation/updateHsnInfo",
                        type: "POST",
                        data: formData,
                        processData: false,
                        contentType: false,
                        beforeSend: function() {
                            $('#btn_save').prop('disabled', true);
                            $('#btn_save').html('<i class="fa fa-spinner " style="padding-right:2%;"></i> Loading');
                        },
                        success: function(data) {
                            $("#Form").trigger("reset");
                            $('#btn_save').html('<i class="fa fa-check-circle" style="font-size: 20px;color: #FFF;"></i>Save');
                            $('#btn_save').prop('disabled', false);



                            swal({
                                title: "",
                                text: "Data Update Successfully",
                                type: "success",
                                showCancelButton: false,
                                showConfirmButton: false,
                                width: '1000px',
                                timer: 2000
                            });
                            window.location.href = base_path + "Inventory/HsnInformation/index";


                        }
                    });

                } else {
                    a = true;

                    $.ajax({
                        url: base_path + "Inventory/HsnInformation/insertHsnInfo",
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
                            window.location.href = base_path + "Inventory/HsnInformation/index";

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