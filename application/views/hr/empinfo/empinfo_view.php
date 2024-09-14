<head>
    <style>
        .breadcrumb {
            color: olivedrab;
        }

        .class {
            border: 2px solid black;
            border-radius: 10px;
            background-color: red;
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
                        <div class="breadcrumb">
                            <h1>Employee Information.</h1>
                        </div>
                        <hr>
                        <div class="breadcrumb">
                        <h3 style="color:#1f3f49;text-align:left;font-weight:600">Personal Information</h3>
                        </div>
                        <form role="form" id="Form" action="" method="post">
                            <div class="row">
                                <!-- <input class="form-control" id="Id" type="text" placeholder="Enter your ID" name="Id"
                                    value="<?php if (!empty($data))
                                                echo $data[0]->Id; ?>" type="text" /> -->
                                <div class="col-md-4 form-group mb-3">
                                    <label for="EmployeeName" style="color:black;">Employee Name<spam style="color:red;">*</spam></label>
                                    <input class="form-control" id="EmployeeName" type="text" name="EmployeeName" value="<?php if (!empty($data))
                                    echo $data[0]->EmployeeName; ?>" />
                                </div>

                                <div class="col-md-2 form-group mb-3">
                                    <label for="Mobile">Primary Mobile<spam style="color:red;">*</spam></label>
                                    <input class="form-control" id="Mobile" type="text" maxlength="10" name="Mobile" value="<?php if (!empty($data))
                                    echo $data[0]->Mobile; ?>" />
                                </div>

                                <div class="col-md-3 form-group mb-3">
                                    <label for="Email">Email<span style="color:red;">*</span></label>
                                    <input class="form-control" type="email" id="Email" name="Email" value="<?php if (!empty($data))
                                    echo $data[0]->Email; ?>">
                                </div>
                                <div class="col-md-3 form-group">
                                    <label for="Place">User Type</label>
                                    <select class="form-control" name="Place" id="Place">
                                        <option value="Admin">Admin</option>
                                        <option value="Emp">Emp</option>

                                    </select>
                                </div>

                                <div class="col-md-3 form-group mb-3">
                                    <label for="UserName" style="color:black;">User Name</label>
                                    <input class="form-control" id="UserName" type="text" name="UserName" value="<?php if (!empty($data))
                                    echo $data[0]->UserName; ?>" />
                                </div>

                                <div class="col-md-3 form-group mb-3">
                                    <label for="Password" style="color:black;">Password<span style="color:red;">*</span></label>
                                    <input class="form-control" id="Password" type="text" name="Password" value="<?php if (!empty($data))
                                    echo $data[0]->Password; ?>" />
                                </div>

                                <div class="col-md-4 form-group mb-3">
                                    <label for="Address">Address</label>
                                    <textarea class="form-control" id="Address" type="" name="Address" value=""></textarea>
                                </div>




                            </div>

                            <!-- <div class="container"> -->
                            <div class="row ">
                                <div class="col-md-4 col-sm-4">
                                    <ul class="nav nav-pills nav-fill" id="myTab">
                                        <li class="nav-item">

                                            <a class="nav-link active" data-toggle="pill" href="#form1" style="font-weight:600"> <i class="fa-solid fa-circle-info"></i> Details</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="pill" href="#form2" style="font-weight:600"><i class="fa-solid fa-location-arrow"></i> Location</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="pill" href="#form3" style="font-weight:600"><i class="fa-solid fa-circle-check"></i> Select</a>
                                        </li>

                                    </ul>
                                </div>
                            </div>


                            <div class="tab-content" id="myTabContent">
                            <div class="breadcrumb">
                                <h3 style="color:#1f3f49;text-align:left;font-weight:600;">Other Information</h3>
                            </div>


                                <div class="tab-pane fade show active " id="form1">


                                    <div class="row">

                                        <!-- <input class="form-control" id="Id" type="text" placeholder="Enter your ID" name="Id"
                                    value="<?php if (!empty($data))
                                                echo $data[0]->Id; ?>" type="text" /> -->
                                        <!-- <div class="col-md-4 form-group mb-3">
                                            <label for="EmployeeName" style="color:black;">Employee Name</label>
                                            <input class="form-control" id="EmployeeName" type="text" name="EmployeeName" value="<?php if (!empty($data))
                                                                                                                                        echo $data[0]->EmployeeName; ?>" />
                                        </div> -->

                                        <div class="col-md-2 form-group mb-3">
                                            <label for="Mobile">Secondary Mob. No. <spam style="color:red;">*</spam>
                                            </label>
                                            <input class="form-control" id="Mobile" type="text" maxlength="10" name="Mobile" value="<?php if (!empty($data))
                                                                                                                                        echo $data[0]->Mobile; ?>" />
                                        </div>

                                        <div class="col-md-2 form-group mb-3">
                                            <label for="PinCode">PinCode</label>
                                            <input class="form-control" type="text" id="PinCode" name="PinCode" value="<?php if (!empty($data))
                                                                                                                            echo $data[0]->PinCode; ?>">
                                        </div>

                                        <div class="col-md-3 form-group " style="margin-top:2rem;">
                                            <label for="gender" id="gender">Gender:</label>
                                            <input type="radio" name="gender" id="male" value="male" required>
                                            <label for="male">
                                                Male
                                            </label>
                                            <input type="radio" name="gender" id="female" value="female">
                                            <label for="female">Female
                                            </label>
                                        </div>








                                    </div>



                                    <div class="row">
                                        <div class="col-md-12 text-right">
                                            <button class="btn btn-primary  text-white" style="background-color:green;font-weight:900" type="button" name="btn_save" id="btn_save"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle" viewBox="0 0 16 16">
                                                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16" />
                                                    <path d="m10.97 4.97-.02.022-3.473 4.425-2.093-2.094a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05" />
                                                </svg>&nbsp Save</button>

                                            <button class="btn btn-danger text-white" type="button" name="cancel" id="cancel" style="background-color:red;"><i class="fa-solid fa-xmark fa-xl"></i>&nbsp Cancel</button>

                                        </div>
                                    </div>


                                </div>

                                <div class="tab-pane fade " id="form2">

                                    <div class="row">
                                        <!-- <input class="form-control" id="Id" type="text" placeholder="Enter your ID" name="Id"
                                    value="<?php if (!empty($data))
                                                echo $data[0]->Id; ?>" type="text" /> -->

                                        <div class="col-md-2 form-group mb-3">
                                            <label for="Photo">Photo:</label>
                                            <input class="form-control" type="File" id="Photo" name="Photo" value="<?php if (!empty($data))
                                                                                                                        echo $data[0]->Photo; ?>">

                                        </div>
                                    </div>


                                    <h4 style="color:black;text-align:left;">Select Your Options:</h4>
                                    <div class="row">

                                        <div class="col-md-2 form-group">
                                            <label for="Country">Country*</label>
                                            <select class="form-control" name="Country" id="Country">
                                                <option value="India">India</option>
                                                <option value="Mumbai">Mumbai</option>
                                                <option value="Pune">Pune</option>
                                            </select>
                                        </div>

                                        <div class="col-md-2 form-group">
                                            <label for="State">State*</label>
                                            <select class="form-control" name="State" id="State">
                                                <option value="Maharashtra">Maharashtra</option>
                                                <option value="Mumbai">Mumbai</option>
                                                <option value="Pune">Pune</option>
                                            </select>
                                        </div>

                                        <div class="col-md-2 form-group">
                                            <label for="District">District.*</label>
                                            <select class="form-control" name="District" id="District">
                                                <option value="District">--District--</option>
                                                <option value="Mumbai">Mumbai</option>
                                                <option value="Pune">Pune</option>
                                            </select>
                                        </div>

                                        <div class="col-md-2 form-group">
                                            <label for="Taluka">Taluka*</label>
                                            <select class="form-control" name="Taluka" id="Taluka">
                                                <option value="Taluka">--Taluka--</option>
                                                <option value="Mumbai">Mumbai</option>
                                                <option value="Pune">Pune</option>
                                            </select>
                                        </div>

                                        <div class="col-md-2 form-group">
                                            <label for="Village">Village.*</label>
                                            <select class="form-control" name="Village" id="Village">
                                                <option value="Village">--Village--</option>
                                                <option value="Mumbai">Mumbai</option>
                                                <option value="Pune">Pune</option>
                                            </select>
                                        </div>




                                    </div>



                                    <div class="row">
                                        <div class="col-md-12 text-right">
                                            <button class="btn btn-primary  text-white" style="background-color:green;font-weight:900" type="button" name="btn_save" id="btn_save"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle" viewBox="0 0 16 16">
                                                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16" />
                                                    <path d="m10.97 4.97-.02.022-3.473 4.425-2.093-2.094a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05" />
                                                </svg>&nbsp Save</button>

                                            <button class="btn btn-danger text-white" type="button" name="cancel" id="cancel" style="background-color:red;"><i class="fa-solid fa-xmark fa-xl"></i>&nbsp Cancel</button>

                                        </div>
                                    </div>


                                </div>

                                <div class="tab-pane fade " id="form3">
                                    <div class="row">

                                        <div class="col-md-3 form-group">
                                            <label for="LicenceInfo">Licence Info.*</label>
                                            <select class="form-control" name="LicenceInfo" id="LicenceInfo">
                                                <option value="Licence">--Licence--</option>
                                                <option value="Mumbai">Mumbai</option>
                                                <option value="Pune">Pune</option>
                                            </select>
                                        </div>

                                        <div class="col-md-4 form-group">
                                            <label for="LicenceNo">Licence No. <span style="color:red">*</span></label>
                                            <input class="form-control" type="number" id="LicenceNo" name="LicenceNo" value="<?php if (!empty($data))
                                            echo $data[0]->LicenceNo; ?>">
                                        </div>

                                        <div class="col-md-2 form-group mb-3">
                                            <label for="StartDate">Start Date</label>
                                            <input class="form-control" type="date" id="StartDate" name="StartDate" value="<?php echo date('Y-m-d'); ?>" />
                                        </div>

                                        <div class="col-md-2 form-group mb-3">
                                            <label for="ExpiryDate">Expiry Date</label>
                                            <input class="form-control" type="date" id="ExpiryDate" name="ExpiryDate" value="<?php echo date('Y-m-d'); ?>" />
                                        </div>

                                        <div class="col-md-3 form-group mb-3">
                                            <label for="warning">Warning before expiry </label>
                                            <input class="form-control" type="text" id="warning" name="warning" value="<?php if (!empty($data))
                                            echo $data[0]->warning; ?>">
                                        </div>






                                    </div>

                                    <div class="row">
                                        <div class="col-md-12 text-right">
                                            <button class="btn btn-primary  text-white" style="background-color:orange;font-weight:900;" type="button" name="btn_save" id="btn_save">
                                                <i class="fa-solid fa-file-lines fa-xl"></i>&nbsp ADD TO LIST</button>

                                            <!-- <button class="btn btn-warning text-white" type="button" name="cancel" id="cancel">Cancel</button> -->

                                        </div>
                                    </div>

                                    <div class="breadcrumb" style="margin: 0 0 -1.5rem">
                                <h3 style="color:#663399;text-align:left;font-weight:600;">Licence Details</h3>
                            </div>
                    
                                    <div class="row">
                                        <div class="table m-2">
                                            <div class="table-responsive">
                                                <table class="display table table-striped table-bordered" id="example" style="width:100%;text-align:center;">
                                                    <thead style="background-color:lightyellow ;">
                                                        <tr>

                                                            <th>Operation</th>
                                                            <th>Licence id</th>
                                                            <th>Licence info</th>
                                                            <th>Licence No</th>
                                                            <th>Start Date</th>
                                                            <th>Expiry Date</th>
                                                            <th>Warning before expiry</th>

                                                        </tr>
                                                    </thead>
                                                    <tbody>



                                                        <!-- <?php
                                                                $i = 0;
                                                                foreach ($alldata as $rw => $value) {
                                                                    echo "<tr>";
                                                                    echo '<td><i class="fas fa-eye" style="font-size: 14px;"></i></a> 
                                                                    </td>';
                                                                    echo "<td>" . $value->id . "</td>";
                                                                    echo "<td>" . $value->EnquiryName . "</td>";
                                                                    echo "<td>" . $value->EnquiryTime . "</td>";
                                                                }
                                                                ?>  -->


                                                    </tbody>

                                                </table>
                                            </div>
                                        
                                        </div>




                                    </div>



                                    <div class="row">
                                        <div class="col-md-12 text-right">
                                            <button class="btn btn-primary  text-white" style="background-color:green;font-weight:500 ;box-shadow: 1px 2px 3px 0px black;color:white;" type="button" name="btn_save" id="btn_save"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle" viewBox="0 0 16 16">
                                                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16" />
                                                    <path d="m10.97 4.97-.02.022-3.473 4.425-2.093-2.094a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05" />
                                                </svg>&nbsp Save</button>

                                            <button class="btn btn-danger text-white" type="button" name="cancel" id="cancel" style="color:white;background-color:red;font-weight:500;box-shadow: 1px 2px 3px 0px black;"><i class="fa-solid fa-xmark fa-xl"></i>&nbsp Cancel</button>

                                        </div>
                                    </div>




                                </div>
                            </div>
                    </div>

                    </form>
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
                if (PersonName === "" || GateInDate === "" || GateInTime == "" || Reason === "" || DriverName === "" || Mobile === "" || VehicleName === "0" || VehicleNo === "" || GateOutDate === "" || GateOutTime === "" || FrontPhoto === "" || BackPhoto === "") {
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