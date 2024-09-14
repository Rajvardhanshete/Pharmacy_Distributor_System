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
            <h1>Invoice Information</h1>
        </div>
        <hr>
                        <form role="form" id="Form" action="" method="post">
                        <div class="col-md-4 form-group mt-4" style="font-size:1.2rem; font-weight:700"><a
                                        href="#">Customer Details</a>
                                </div>
                            <div class="row">
                                <!-- <div class="col-md-1 form-group mb-3">
                                    <label for="id">Id<span style="color:red">*</span></label>
                                    <input class="form-control" id="id" type="text" name="id" placeholder="Id"
                                        value="" />
                                </div> -->
                                <div class="col-md-4 form-group mb-3">
                                    <label for="CustomerName"> Customer Name<span style="color:red">*</span></label>
                                    <select class="form-control" name="ReferenceType" id="ReferenceType">
                                        <option value="0">---Select Customer---</option>
                                        <option value="MP">MP</option>
                                        <option value="PM">PM</option>
                                        <option value="CM">CM</option>
                                        <option vlaue="DCM">DCM</option>
                                    </select>
                                </div>
                                <div class="col-md-2 form-group mb-3">
                                    <label for="date">Date<span style="color:red">*</span></label>
                                    <input class="form-control" type="date" id="EndDate" name="EndDate"
                                        value="<?php echo date('Y-m-d'); ?>" />
                                </div>
                                
                                
                          

                           
                                <div class="col-md-2 form-group mb-3">
                                    <label for="Barcode">Barcode</label>
                                    <input class="form-control" id="Barcode" type="text" name="Barcode"
                                        placeholder="Barcode" value="" />
                                </div>
                                <!-- <div class="col-md-1 form-group mb-3">
                                    <label for="Id">Id<span style="color:red">*</span></label>
                                    <input class="form-control" id="Id" type="text" name="Id" placeholder="Id"
                                        value="" />
                                </div> -->
                                <div class="col-md-3 form-group mb-3">
                                    <label for="ProductName">Product Name<span style="color:red">*</span></label>
                                    <select class="form-control" name="ProductName" id="ProductName">
                                        <option value="0">---Select Product---</option>
                                        <option value="MP">MP</option>
                                        <option value="PM">PM</option>
                                    </select>
                                </div>
                                <div class="col-md-2 form-group mb-3">
                                    <label for="Unit">Unit<span style="color:red">*</span></label>
                                    <select class="form-control" name="Unit" id="Unit">
                                        <option value="0">---Select---</option>
                                        <option value="MP">MP</option>
                                        <option value="PM">PM</option>
                                    </select>
                                </div>
                                <div class="col-md-2 form-group mb-3">
                                    <label for="Batch">Batch<span style="color:red">*</span> <span><a href="#" style="text-decoration:underline;">Batch
                                                History</a></span></label>
                                    <select class="form-control" name="Batch" id="Batch">
                                        <option value="0">---Select---</option>
                                        <option value="MP">MP</option>
                                        <option value="PM">PM</option>
                                    </select>
                                </div>
                                <div class="col-md-2 form-group mb-3">
                                    <label for="ExpiryDate">Expiry Date<span style="color:red">*</span></label>
                                    <input class="form-control" id="ExpiryDate" type="Date" name="ExpiryDate"
                                        value="<?php echo date('Y-m-d'); ?>" />
                                </div>
                            </div>
                            <div class="col-md-4 form-group mt-4" style="font-size:1.2rem; font-weight:700"><a
                                        href="#">GST & Discount</a>
                                </div>
                            <div class="row">
                                <div class="col-md-1 form-group mb-3">
                                    <label for="Rate">Rate<span style="color:red">*</span></label>
                                    <input class="form-control" id="Rate" type="text" name="Rate" placeholder="00:00"
                                        value="" />
                                </div>
                                <div class="col-md-1 form-group mb-3">
                                    <label for="Qty">Qty<span style="color:red">*</span></label>
                                    <input class="form-control" id="Qty" type="text" name="Qty" placeholder="00:00"
                                        value="" />
                                </div>
                                <div class="col-md-1 form-group mb-3">
                                    <label for="FreeQty">Free Qty<span style="color:red">*</span></label>
                                    <input class="form-control" id="FreeQty" type="text" name="FreeQty"
                                        placeholder="00:00" value="" />
                                </div>
                                <div class="col-md-1 form-group mb-3">
                                    <label for="Amount">Amount<span style="color:red">*</span></label>
                                    <input class="form-control" id="Amount" type="text" name="Amount"
                                        placeholder="00:00" value="" />
                                </div>
                                <div class="col-md-2 form-group mb-3">
                                    <label for="TotalAmount">Total Amount<span style="color:red">*</span></label>
                                    <input class="form-control" id="TotalAmount" type="text" name="TotalAmount" 
                                        placeholder="00:00" value="" />
                                </div>
                               
                            </div>

                            <div class="row">
                                <div class="col-md-12 text-right">
                                    <button class="btn btn-primary" type="button" name="btn_save" id="btn_save">
                                        Submit</button>
                                    <a class="btn btn-warning text-white" href="<?= base_url() ?>Invoice/index">
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
        var CustomerName = $('#CustomerName').val();
        var Date = $("#Date").val();
        var Barcode = $("#Barcode").val();
       
        var ProductName = $('#ProductName').val();
        var Unit = $('#Unit').val();
        var Batch = $('#Batch').val();
        var ExpiryDate = $('#ExpiryDate').val();
        var Rate = $('#Rate').val();
        var Qty = $('#Qty').val();
        var FreeQty = $('#FreeQty').val();
        var Amount = $('#Amount').val();
        var TotalAmount = $('#TotalAmount').val();
      
        

// Check if no gender is selected

        // Check if any of the required fields are empty or haven't been selected
        if (CustomerName === "" || Date === "" ||Barcode=="" || ProductName === "" || Unit === "" || Batch === "" || ExpiryDate === "" || Rate === "" || Qty === "" || FreeQty === "" || Amount === "" || TotalAmount === "") {
            Swal.fire(
                'Opps!',
                'Please Enter Required Fields!',
                'error'
            );
        } else {
            a = true;

            $.ajax({
                url: base_path + "Invoice/insertINVOICE",
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
