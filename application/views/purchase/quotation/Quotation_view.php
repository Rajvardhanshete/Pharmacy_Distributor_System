<head>
    <style>
        .breadcrumb{
            color:olivedrab;
        }
     .class{
            border:2px solid black;
            border-radius: 10px;
            background-color: red;
            color:white;
         
            transition: all 0.6s ease;

        }
        .class:hover{
            background-color:blueviolet;
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
            <h1>Party Quotation</h1>
        </div>
      <hr>
                        <form role="form" id="Form" action="" method="post">
                            <div class="row">
                                <!-- <input class="form-control" id="Id" type="text" placeholder="Enter your ID" name="Id"
                                    value="<?php if (!empty($data))
                                        echo $data[0]->Id; ?>" type="text" /> -->
                                <div class="col-md-3 form-group mb-3">
                                    <label for="PersonName"style="color:black;">Party Name<span class="text-danger">*</span></label>
                                    <select class="form-control"  name="ReferenceType" id="ReferenceType">
                                            <option value="0">-Select-</option>
                                            <?php foreach($Refdata as $value)
                                            {
                                                // $selected="";
                                                // if(!empty($data[0]->FkStockId)){

                                                //     if($value->StockID == $data[0]->FkStockId) {
                                                //       $selected="selected=selected";
                                                //     } 
                                                // }  
                                                                
                                                echo '<option value="'.$value->ID.'" '.$selected.'>'.$value->Name.'</option>';
                                            }
                                            ?> 
                                            </select>
                                </div>

                                <!-- <div class="col-md-4 form-group mb-3">
                                    <label for="GateInDate"> Gate-In Date</label>
                                    <input class="form-control" id="GateInDate" type="date"
                                     name="GateInDate" value="<?php if (!empty($data))
                                            echo $data[0]->GateInDate; ?> value="<?php echo date('Y-m-d'); ?>" />
                                </div> -->
                                <div class="col-md-3 form-group mb-3">
                                    <label for="date">Branch Name<span class="text-danger">*</span></label>
                                    <select class="form-control"  name="ReferenceType" id="ReferenceType">
                                            <option value="0">-Select-</option>
                                            <?php foreach($Refdata as $value)
                                            {
                                                // $selected="";
                                                // if(!empty($data[0]->FkStockId)){

                                                //     if($value->StockID == $data[0]->FkStockId) {
                                                //       $selected="selected=selected";
                                                //     } 
                                                // }  
                                                                
                                                echo '<option value="'.$value->ID.'" '.$selected.'>'.$value->Name.'</option>';
                                            }
                                            ?> 
                                            </select>

                                            </div>
                               

                                <div class="col-md-2 form-group mb-3">
                                    <label for="RequestedDate">Requested Date<span class="text-danger">*</span></label>
                                    <input class="form-control" id="RequestedDate" type="date"
                                     name="RequestedDate" value="<?php echo date('Y-m-d');?>" />
                                </div>

                                
                              
                                
                                <div class="col-md-2 form-group mb-3">
                                    <label for="QuotationStartDate">Quotation Start Date<span class="text-danger">*</span></label>
                                    <input class="form-control" id="QuotationStartDate" type="date"
                                     name="QuotationStartDate" value="<?php echo date('Y-m-d');?>" />
                                </div>
                               
                                <div class="col-md-2 form-group mb-3">
                                    <label for="QuotationExpiryDate">Quotation Expiry Date<span class="text-danger">*</span></label>
                                    <input class="form-control" id="QuotationExpiryDate" type="date"
                                     name="QuotationExpiryDate" value="<?php echo date('Y-m-d');?>" />
                                </div>

                                <!-- <div class="col-md-2 form-group mb-3">
                                    <label for="Date">Requested Date<span class="text-danger">*</span></label>
                                    <input class="form-control btn" id="Date" type="button"
                                     name="Date" value="" />
                                </div>                                -->
                                <!-- <div class="col-md-2 form-group mb-3">
                                    <label for="Date">Requested Date<span class="text-danger">*</span></label>
                                    <input class="form-control btn" id="Date" type="button"
                                     name="Date" value="" />
                                </div>                                -->

                            </div>
                            

                            <div class="row">
                                <fieldset class="border rounded border-dark p-2 w-100 p-3 ">
                                <legend class="w-auto">Item Description</legend>
                                        <div class="row">


                                        <div class="col-md-3 form-group mb-3">
                                    <label for="ItemName">Item Name<span class="text-danger">*</span></label>
                                    <select class="form-control"  name="ItemName" id="ItemName">
                                            <option value="0">-Select-</option>
                                            <?php foreach($Refdata as $value)
                                            {
                                                // $selected="";
                                                // if(!empty($data[0]->FkStockId)){

                                                //     if($value->StockID == $data[0]->FkStockId) {
                                                //       $selected="selected=selected";
                                                //     } 
                                                // }  
                                                                
                                                echo '<option value="'.$value->ID.'" '.$selected.'>'.$value->Name.'</option>';
                                            }
                                            ?> 
                                            </select>
                                </div>

                                <div class="col-md-2 form-group mb-3">
                                    <label for="UnitUMO">Unit(UMO)<span class="text-danger">*</span></label>
                                    <select class="form-control"  name="UnitUMO" id="UnitUMO">
                                            <option value="0">-Select-</option>
                                            <?php foreach($Refdata as $value)
                                            {
                                                // $selected="";
                                                // if(!empty($data[0]->FkStockId)){

                                                //     if($value->StockID == $data[0]->FkStockId) {
                                                //       $selected="selected=selected";
                                                //     } 
                                                // }  
                                                                
                                                echo '<option value="'.$value->ID.'" '.$selected.'>'.$value->Name.'</option>';
                                            }
                                            ?> 
                                            </select>
                                </div>

                                <div class="col-md-2 form-group mb-3">
                                    <label for="Quantity">Quantity<span class="text-danger">*</span></label>
                                    <input class="form-control" id="Quantity" type="text"
                                     name="Quantity" value="" />
                                </div>

                                <div class="col-md-2 form-group mb-3">
                                    <label for="Rate">Rate</label>
                                    <input class="form-control" id="Rate" type="text"
                                        name="Rate" value="<?php if (!empty($data))
                                            echo $data[0]->PersonName; ?>" />
                                </div>

                                <div class="col-md-2 form-group mb-3">
                                    <label for="Amount">Amount</label>
                                    <input class="form-control" id="Amount" type="text"
                                        name="Amount" value="<?php if (!empty($data))
                                            echo $data[0]->PersonName; ?>" />
                                </div>

                                </div>
                                <div class="row">
                                <div class="col-md-2 form-group mb-3">
                                    <label for="TotalAmount">Total Amount</label>
                                    <input class="form-control" id="TotalAmount" type="text"
                                        name="TotalAmount" value="<?php if (!empty($data))
                                            echo $data[0]->PersonName; ?>" />
                                </div>
                                </div>

                                <div class="row">
                            <button class="btn btn-primary ml-4" style=""><a href="<?=base_url() ?>/create" class="text-white text-decoration-none"><i class="fa-solid fa-plus text-white"></i>&nbsp;Add to List</a></button>
                            </div>
                                
                                <div class="row">
                                    <div class="table m-2">
                                    <div class="table-responsive">
                                   <table class="display table table-striped table-bordered" id="example" style="width:100%">
                                   <thead>
                                            <tr>
                                                <th>Operation</th>
                                                <th>Item Name</th>
                                                <th>Unit(UOM)</th>
                                                <th>Quantity</th>
                                                <th>Rate</th>
                                                <th>Amount</th>
                                                <th>HSN</th>
                                                <th>GST</th>
                                                <th>GST Amount</th>
                                                <th>Discount in %</th>
                                                <th>Discount Amount</th>
                                                <th>Total Amount</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        
                                          

                                        <!-- <?php 
                                            $i=0;
                                            foreach($alldata as $rw=>$value){
                                            echo "<tr>";
                                            echo '<td><i class="fas fa-eye" style="font-size: 14px;"></i></a> 
                                              </td>';
                                            echo "<td>".$value->id."</td>";
                                            echo "<td>".$value->EnquiryName."</td>";
                                            echo "<td>".$value->EnquiryTime."</td>";
                                                            
                                        }
                                        ?>  -->
                            
                                          
                                        </tbody>
                                        
                                    </table>
                                    </div>
                                </div>

                                <div class="row">
                                <div class="col-md-5 form-group mb-3 m-3">
                                            <label for="Description">Description</label>
                                            <textarea class="form-control" id="Description" type="text" name="Description" cols="350" rows="5" value=""></textarea>
                                        </div>
                                        <div class="col-md-6 form-group mb-3 m-3 d-flex justify-content-end">
                                            <table class="text-right ">
                                                <tr>
                                                    <td>Amount : &nbsp</td>
                                                    <td><input type="text" class="border-bottom-success rounded" name="Amount" id="Amount"></td>
                                                </tr>
                                                <tr>
                                                    <td>Taxes(+) : &nbsp</td>
                                                    <td><input type="text" class="border-bottom-success rounded" name="Taxes" id="Taxes"></td>
                                                </tr>
                                                <tr>
                                                    <td>Discount(-) : &nbsp</td>
                                                    <td><input type="text" class="border-bottom-success rounded" name="Discount" id="Discount"></td>
                                                </tr>
                                                <tr>
                                                    <td>Total Amount : &nbsp</td>
                                                    <td><input type="text" class="border-bottom-success  bg-danger rounded" name="TotalAmount" id="TotalAmount"></td>
                                                </tr>
                                            </table>
                                            
                                        </div>
                                </div>
                                </div>


                                
                                
                               




                                  
                            
                                <div class="row">
                                <div class="col-md-12 text-left ml-4">
                                    
                                   <button class="btn btn-primary" type="button" name="btn_save" id="btn_save" style="background-color: #a82eda;font-weight:900 ;color:white;"><i class="fa-solid fa-floppy-disk" style="color: white; margin-right:.2rem"></i>Save</button>
                                   <a class="btn btn-danger" style="color: white;" href="<?= base_url() ?>" type="button" name="cancel" id="cancel"><i class="fa-solid fa-xmark" style="color: white; margin-right:.2rem"></i>Cancel</a>
                                   


                                    </fieldset>
                                    </div>
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



        <!-- <script>
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
        if (PersonName === "" || GateInDate === "" ||GateInTime=="" || Reason === "" || DriverName === "" || Mobile === "" || VehicleName === "0" || VehicleNo === "" || GateOutDate === "" || GateOutTime === "" || FrontPhoto === "" || BackPhoto === "") {
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
</script> -->
