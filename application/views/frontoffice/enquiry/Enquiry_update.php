<head>
    <style>
        .breadcrumb{
            color:olivedrab;
        }
     .class{
            border:2px solid black;
            border-radius: 10px;
            background-color: olivedrab;
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
            <h1>Enquiry</h1>
        </div>
        <hr>
                        <form role="form" id="Form" action="<?php echo base_url('update/'.(isset($data -> id)?'updateEnquiry':'insertEnquiry'))?>" method="post">
                        <div class="row">
                                        <div class="col-md-3 form-group mb-3">
                                        <input name="id" id="id" type="hidden"   value="<?= isset($data->id)? $data->id: ''?> " >
                                            <label for="EnquiryName">Enquiry Name</label>
                                            <input class="form-control" id="EnquiryName" type="text"  name="EnquiryName" value="<?= isset($data->EnquiryName)? $data->EnquiryName:''?>"/>
                                        </div>
                                        <div class="col-md-2 form-group mb-3">
                                            <label for="EnquiryTime"> Enquiry Time</label>
                                            <input class="form-control" id="EnquiryTime" type="time" name="EnquiryTime" value="<?= isset($data->EnquiryTime)? $data->EnquiryTime:''?>"/>
                                        </div>
                                        <div class="col-md-2 form-group mb-3">
                                            <label for="date">Date</label>
                                            <input class="form-control" type="date" id="Date" name="Date" value="<?php echo date('Y-m-d');?>"/>
                                        </div>
                                        <div class="col-md-2 form-group mb-3">
                                        <label for="ReferenceType">Reference Type</label>
                                            <select class="form-control"  name="ReferenceType" id="ReferenceType">
                                            <option value="">-Select-</option>
                                            <?php foreach($Refdata as $value)
                                            {
                                                // $selected="";
                                                // if(!empty($data[0]->FkStockId)){

                                                //     if($value->StockID == $data[0]->FkStockId) {
                                                //       $selected="selected=selected";
                                                //     } 
                                                // }  
                                                                
                                                // echo '<option value="'.$value->ID.'" '.$selected.'>'.$value->Name.'</option>';


                                                $selected="";
                                                if($data->ReferenceType){
                                                    if($value->ID == $data->ReferenceType) {
                                                        $selected="selected=selected";
                                                        echo '<option value="' . $data->ReferenceType . '" '  . $selected . '>' . $value->Name . '</option>';
                                                    } 
                                                }
                                                else{
                                                    echo '<option value="'.$value->ID.'" '.$selected.'>'.$value->Name.'</option>';
                                                }
                                            }
                                            ?> 
                                            </select>
                                        </div> 
                                        <div class="col-md-3 form-group mb-3">
                                            <label for="ReferenceName">Reference Name</label>
                                            <input class="form-control" type="text" id="ReferenceName" name="ReferenceName" value="<?= isset($data->ReferenceName)? $data->ReferenceName:''?>"/>
                                        </div>   

                                        <div class="col-md-2 form-group mb-3">
                                            <label for="ReferenceNo">Reference Number</label>
                                            <input class="form-control" type="text" id="ReferenceNo" name="ReferenceNo" value="<?= isset($data->ReferenceNo)? $data->ReferenceNo:''?>"/>
                                        </div>  

                                        <div class="col-md-4 form-group">
                                    <label for="EnquiryReason">Reason<span style="color:red">*</span></label>
                                    <!-- <textarea class="form-control" id="EnquiryReason" type="text" name="EnquiryReason" value="">
                                    </textarea> -->
                                    <?php
                                        echo '<textarea class="form-control" id="EnquiryReason" type="text" name="EnquiryReason" value=""> '. $data->EnquiryReason .'</textarea>';
                                    ?>
                                </div>
                                    </div>
                                
                                
                            
                                    <!-- <div class="row">
                                <div class="col-md-12 text-right">
                                    <button class="btn btn-primary"style="color:black;background-color: #a82eda;font-weight:900" type="button" name="btn_save" id="btn_save"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-check-circle" viewBox="0 0 16 16">
                                            <path
                                                d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16" />
                                            <path
                                                d="m10.97 4.97-.02.022-3.473 4.425-2.093-2.094a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05" />
                                        </svg>&nbsp Submit</button>
                                    <a class="btn btn-warning  "style="font-weight:900;color:black;" href="<?= base_url() ?>frontoffice/Enquiry/index"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                            <path
                                                d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                            <path fill-rule="evenodd"
                                                d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z" />
                                        </svg>&nbsp Details</a>
                                    <button class="btn btn-warning text-white" type="button" name="cancel" id="cancel">Cancel</button>

                                </div>
                            </div> -->

                            <div class="row">
                                <div class="col-md-12 text-right">
                                    <button class="btn btn-primary  " style="background-color:green;font-weight:500 ;box-shadow: 1px 2px 3px 0px black;color:white; width: 6rem;" type="button" name="btn_save" id="btn_save"><i class="fa-regular fa-circle-check"></i>&nbsp; Save</button>

                                    <button class="btn btn-danger text-white" type="button" name="cancel" id="cancel" style="color:white;background-color:red;font-weight:500;box-shadow: 1px 2px 3px 0px black;"><a class="text-white" href="http://localhost/ProjectTemplate1/frontoffice/Enquiry/create"><i class="fa-regular fa-circle-xmark"></i>&nbsp; Cancel</a></button>

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
           if (a==false) {
                saveperform();
           }
        }); 
    });

    function saveperform() {
        var id = $("#id").val();
        var EnquiryName = $('#EnquiryName').val();
        var EnquiryTime = $("#EnquiryTime").val();
        var Date = $("#Date").val();
        var ReferenceType = $('#ReferenceType').val();
        var ReferenceName = $('#ReferenceName').val();
        var ReferenceNo = $('#ReferenceNo').val();
        var EnquiryReason = $('#EnquiryReason').val();
      
        

        // Check if no gender is selected

        // Check if any of the required fields are empty or haven't been selected
        if (EnquiryName === "" || EnquiryTime === "" ||Date=="0" || ReferenceType === "" || ReferenceName === "" || ReferenceNo === "" || EnquiryReason === "") {
            Swal.fire(
                'Opps!',
                'Please Enter Required Fields!',
                'error'
            );
        } else 
        {
            if(id > 0)
            {
                a = true;
                var form = $("#Form").closest("form");
                var formData = new FormData(form[0]);

                $.ajax({
                    url: base_path + "FrontOffice/Enquiry/updateEnquiry",
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
            window.location.href = base_path+"FrontOffice/Enquiry/index";
                
                
            }
        });

        }

        else 
        {
            a = true;

            $.ajax({
                url: base_path + "FrontOffice/Enquiry/insertEnquiry",
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
                    window.location.href = base_path+"FrontOffice/Enquiry/index";
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