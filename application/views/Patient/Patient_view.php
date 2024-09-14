<!-- =============== Left side End ================-->
<div class="main-content-wrap sidenav-open d-flex flex-column">
    <!-- ============ Body content start ============= -->
    <div class="main-content">
        <!-- <div class="separator-breadcrumb border-top"></div> -->
        <div class="row">
            <div class="col-md-12">
                <div class="card mb-4">
                    <div class="card-body">
                        <form role="form" id="Form" action="" method="post">
                            <div class="row">
                                <div class="col-md-5 col-10 form-group mb-3">
                                    <label for="PatientName">Patient Name<span style="color:red">*</span></label>
                                    <select class="form-control" name="PatientName" id="PatientName">
                                        <option value="0">---Select Customer---</option>
                                        <option value="MP">MP</option>
                                        <option value="PM">PM</option>
                                        <option value="CM">CM</option>
                                        <option vlaue="DCM">DCM</option>
                                    </select>
                                </div>
                                <div class="col-md-0 col-0 form-group mb-3 mt-4">
                                    <button class="btn btn-dark">+</button>
                                </div>
                                <div class="col-md-2 form-group mb-3">
                                    <label for="Date">Date<span style="color:red">*</span></label>
                                    <input class="form-control" type="date" id="Date" name="Date"
                                        value="<?php echo date('Y-m-d'); ?>" />
                                </div>
                                <div class="col-md-2"></div>
                                <div class="col-md-2 form-group mt-4" style="font-size:1.2rem; font-weight:700">
                                    <p>Patient History</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-7 ">
                                    <div class="table-responsive" style="position: relative;
                                            overflow: auto;
                                            display: block;border-top:1px solid #dee2e6 !important;">
                                        <table id="item_details_table" class="table table-bordered "
                                            style="height: 180px;">
                                            <thead>
                                                <tr style="background-color: rgb(174, 171, 171);">
                                                    <th></th>
                                                    <th>Sph.</th>
                                                    <th>Cyl.</th>
                                                    <th>Axis.</th>
                                                    <th>Sph.</th>
                                                    <th>Cyl.</th>
                                                    <th>Axis.</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td style="background-color: rgb(174, 171, 171);">D.V</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td style="background-color: rgb(174, 171, 171);">N.V</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="table-responsive" style="position: relative;
                                    overflow: auto;
                                    display: block;border-top:1px solid #dee2e6 !important;">
                                        <table id="item_details_table" class="table table-bordered">
                                            <thead>
                                                <tr style="background-color: rgb(174, 171, 171);">
                                                    <th>ID</th>
                                                    <th>Date</th>
                                                    <th>BillAmt</th>
                                                    <th>PaidAmt</th>
                                                    <th>REAmt</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="text-center">
                                                    <td colspan="5">No record found</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-3 form-group mb-3">
                                    <label for="Remark">Remark</label>
                                    <select class="form-control" name="Remark" id="Remark">
                                        <option value="0">-Select-</option>
                                        <option value="MP">MP</option>
                                        <option value="PM">PM</option>
                                    </select>
                                </div>
                                <div class="col-md-2 form-group mb-3">
                                    <label for="FrameUses">Frame Uses</label>
                                    <select class="form-control" name="FrameUses" id="FrameUses">
                                        <option value="0">-Select-</option>
                                        <option value="MP">MP</option>
                                        <option value="PM">PM</option>
                                    </select>
                                </div>
                                <div class="col-md-2 form-group mb-3">
                                    <label for="Type">Type</label>
                                    <select class="form-control" name="Type" id="Type">
                                        <option value="0">-Select-</option>
                                        <option value="MP">MP</option>
                                        <option value="PM">PM</option>
                                    </select>
                                </div>

                                <div class="col-md-2 form-group mb-3">
                                    <label for="Unit">Unit<span style="color:red">*</span></label>
                                    <select class="form-control" name="Unit" id="Unit">
                                        <option value="0">-Select-</option>
                                        <option value="MP">MP</option>
                                        <option value="PM">PM</option>
                                    </select>
                                </div>
                                <div class="col-md-3 form-group mb-3">
                                    <label for="GlassType">GlassType<span style="color:red">*</span></label>
                                    <select class="form-control" name="GlassType" id="GlassType">
                                        <option value="0">-Select-</option>
                                        <option value="MP">MP</option>
                                        <option value="PM">PM</option>
                                    </select>
                                </div>
                            </div>
                            <div class="mb-2">
                                <fieldset class="border p-3 border-info">
                                    <legend class="w-auto">Payment Details </legend>
                                    <div class="row">
                                        <div class="col-md-2 form-group mb-3">
                                            <label for="BIllAmount">Bill Amount<span style="color:red">*</span></label>
                                            <input class="form-control" id="BIllAmount" type="text" name="BIllAmount" value="" />
                                        </div>
                                        <div class="col-md-2 form-group mb-3">
                                            <label for="remainingAmount">Remaining Amount<span style="color:red">*</span></label>
                                            <input class="form-control" id="Amount" type="text" name="remainingAmount" 
                                                value="" />
                                        </div>
                                        <div class="col-md-2 form-group mb-3">
                                            <label for="TotalPaidAmount">Total Paid Amount<span
                                                    style="color:red">*</span></label>
                                            <input class="form-control" id="TotalPaidAmount" type="text" name="TotalPaidAmount"
                                                value="" />
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3 form-group mb-3">
                                            <label for="firstPaymentMode">Payment Mode</label>
                                            <select class="form-control" name="firstPaymentMode" id="firstPaymentMode">
                                                <option value="0">-Select-</option>
                                                <option value="Online">Online</option>
                                                <option value="Offline">Offline</option>
                                            </select>
                                        </div>
                                        <div class="col-md-2 form-group mb-3">
                                            <label for="firstAmount">1st Amount<span style="color:red">*</span></label>
                                            <input class="form-control" id="firstAmount" type="text" name="firstAmount"
                                                value="" />
                                        </div>
                                        <div class="col-md-2 form-group mb-3"></div>
                                        <div class="col-md-3 form-group mb-3">
                                            <label for="secondPaymentMode">Payment Mode</label>
                                            <select class="form-control" name="secondPaymentMode" id="secondPaymentMode">
                                                <option value="0">-Select-</option>
                                                <option value="MP">MP</option>
                                                <option value="PM">PM</option>
                                            </select>
                                        </div>
                                        <div class="col-md-2 form-group mb-3">
                                            <label for="secondAmount">2nd Amount<span style="color:red">*</span></label>
                                            <input class="form-control" id="secondAmount" type="text" name="secondAmount"
                                                value="" />
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3 form-group mb-3">
                                            <label for="thirdPaymentMode">Payment Mode</label>
                                            <select class="form-control" name="thirdPaymentMode" id="thirdPaymentMode">
                                                <option value="0">-Select-</option>
                                                <option value="MP">MP</option>
                                                <option value="PM">PM</option>
                                            </select>
                                        </div>
                                        <div class="col-md-2 form-group mb-3">
                                            <label for="thirdAmount">3rd Amount<span style="color:red">*</span></label>
                                            <input class="form-control" id="thirdAmount" type="text" name="thirdAmount"
                                                value="" />
                                        </div>
                                        <div class="col-md-2 form-group mb-3"></div>
                                        <div class="col-md-3 form-group mb-3">
                                            <label for="forthPaymentMode">Payment Mode</label>
                                            <select class="form-control" name="forthPaymentMode" id="forthPaymentMode">
                                                <option value="0">-Select-</option>
                                                <option value="MP">MP</option>
                                                <option value="PM">PM</option>
                                            </select>
                                        </div>
                                        <div class="col-md-2 form-group mb-3">
                                            <label for="forthAmount">4st Amount<span style="color:red">*</span></label>
                                            <input class="form-control" id="forthAmount" type="text" name="forthAmount"
                                                value="" />
                                        </div>
                                    </div>
                                </fieldset>
                            </div>
                            <div class="row">
                                <div class="col-md-12 form-group mb-3">
                                    <label for="Note">Note</label>
                                    <textarea class="form-control" rows="5" name="Note" id="Note"></textarea>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12 text-right">
                                    <button class="btn btn-primary" type="button" name="btn_save" id="btn_save">
                                        Submit</button>
                                    <a class="btn btn-warning text-white" href="<?= base_url() ?>Patient/index">
                                        Details</a>
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
        var PatientName = $('#PatientName').val();
        var Date = $('#Date').val();
        
        var Remark = $('#Remark').val();
        var FrameUses = $('#FrameUses').val();
        var Type = $('#Type').val();
        var Unit = $('#Unit').val();
        var GlassType = $('#GlassType').val();
        var BIllAmount = $('#BIllAmount').val();
        var firstPaymentMode = $("#firstPaymentMode").val();
        var firstAmount = $("#firstAmount").val();
        var secondPaymentMode = $('#secondPaymentMode').val();
        var secondAmount = $('#secondAmount').val();
        var thirdPaymentMode = $('#thirdPaymentMode').val();
        var thirdAmount = $('#DOB').val();
        var forthPaymentMode = $('#forthPaymentMode').val();
        var forthAmount = $('#forthAmount').val();
        var remainingAmount = $('#remainingAmount').val();
        var TotalPaidAmount = $('#TotalPaidAmount').val();
        var Note = $('#Note').val();
       
        

// Check if no gender is selected

        // Check if any of the required fields are empty or haven't been selected
        if (PatientName === "" || Date === "0" || Remark === "0" || FrameUses === "" || Type === "" || Unit === "" || GlassType === "" || BIllAmount === "" || firstPaymentMode === "" ||firstAmount=="" || secondPaymentMode === "" || secondAmount === "" || thirdPaymentMode === "" || thirdAmount === "" || forthPaymentMode === "" || forthAmount === "" || remainingAmount === "" || TotalPaidAmount === "" || Note === "") {
            Swal.fire(
                'Opps!',
                'Please Enter Required Fields!',
                'error'
            );
        } else {
            a = true;

            $.ajax({
                url: base_path + "Patient/insertPATIENT",
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
