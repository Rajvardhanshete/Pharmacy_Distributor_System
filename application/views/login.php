

<head>
    <style>
        .form-container{
    font-family: 'Poppins', sans-serif;
    position: relative;
    z-index: 1;
}
.form-container .form-horizontal{
    background-color: #fff;
    padding: 30px 30px 10px;
    border: 1px solid #e7e7e7;
}
.form-container .form-horizontal:before,
.form-container .form-horizontal:after{
    content: '';
    background-color: #fff;
    height: 100%;
    width: 100%;
    border: 1px solid #e7e7e7;
    transform: rotate(3deg);
    position: absolute;
    left: 0;
    top: 0;
    z-index: -1;
}
.form-container .form-horizontal:after{ transform: rotate(-3deg); }
.form-container .title{
    color: #777;
    background: linear-gradient(to right,#f5f5f5,transparent,transparent,transparent,#f5f5f5);
    font-size: 23px;
    font-weight: 600;
    text-align: center;
    text-transform: capitalize;
    padding: 2px;
    margin: 0 0 20px 0;
}
.form-horizontal .form-group{
    background-color: #eaeaea;
    font-size: 0;
    margin: 0 0 15px;
    border: 1px solid #d1d1d1;
    border-radius: 3px;
}
.form-horizontal .input-icon{
    color: #888;
    font-size: 18px;
    text-align: center;
    line-height: 40px;
    height: 40px;
    width: 40px;
    vertical-align: top;
    display: inline-block;
}
.form-horizontal .form-control{
    color: #555;
    background-color: transparent;
    font-size: 14px;
    letter-spacing: 1px;
    width: calc(100% - 55px);
    height: 40px;
    padding: 2px 10px 2px 0;
    box-shadow: none;
    border: none;
    border-radius: 0;
    display: inline-block;
    transition: all 0.3s;
}
.form-horizontal .form-control:focus{
    box-shadow: none;
    border: none;
}
.form-horizontal .form-control::placeholder{
    color: rgba(0,0,0,0.7);
    font-size: 14px;
    text-transform: capitalize;
}
.form-horizontal .btn{
    color: #fff;
    background: linear-gradient(#1dd1a1,#10ac84);
    font-size: 16px;
    font-weight: 600;
    text-transform: capitalize;
    width: 100px;
    padding: 5px 18px;
    margin: 0 0 15px 0;
    border: none;
    border-radius: 30px;
    display: inline-block;
    transition: all 0.3s ease;
}
.form-horizontal .btn:hover,
.form-horizontal .btn:focus{
    color: #fff;
    letter-spacing: 2px;
}
.form-horizontal .forgot-pass{
    font-size: 12px;
    text-align: right;
    width: calc(100% - 105px);
    display: inline-block;
    vertical-align: top;
}
.form-horizontal .forgot-pass a,
.form-horizontal .register a{
    color: #999;
    transition: all 0.3s ease;
}
.form-horizontal .forgot-pass a:hover,
.form-horizontal .register a:hover{
    color: #555;
    text-decoration: underline;
}
.form-horizontal .register{
    font-size: 12px;
    text-align: center;
    padding-top: 8px;
    border-top: 1px solid #e7e7e7;
    display: block;
}
    </style>
</head>



<div class="form-bg">
    <div class="container mt-5">
        <div class="row d-flex justify-content-center">
            <div class="col-md-offset-4 col-md-4 col-sm-offset-3 col-sm-6">
                <div class="form-container">
                    <form class="form-horizontal">
                        <h3 class="title">Login Form</h3>
                        <div class="form-group">
                            <span class="input-icon"><i class="fa fa-user"></i></span>
                            <input class="form-control" type="email" id="UserName" name="UserName" placeholder="Username">
                        </div>
                        <div class="form-group">
                            <span class="input-icon"><i class="fa fa-lock"></i></span>
                            <input class="form-control" type="password" id="password" name="password" placeholder="Password">
                        </div>
                        <button class="btn signin">Log in</button>
<!--                         <span class="forgot-pass"><a href="#">Lost password?</a></span>
                        <span class="register"><a href="#">Register / Signup</a></span> -->
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

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
        var UserName = $('#UserName').val();
        var password = $("#password").val();
        var EquipmentCategory = $("#EquipmentCategory").val();
        var Description = $('#Description').val();
        var WareHouseName = $('#WareHouseName').val();
        var Maintainace =  $('.messageCheckbox:checked').val();
        var MaintainaceDuration = $('#MaintainaceDuration').val();
        

// Check if no gender is selected

        // Check if any of the required fields are empty or haven't been selected
        if (UserName === "" || password === "") {
            Swal.fire(
                'Opps!',
                'Please Enter Required Fields!',
                'error'
            );
        } 
        else 
        {
            if(id > 0)
            {
                a = true;
                var form = $("#Form").closest("form");
                var formData = new FormData(form[0]);

                $.ajax({
                    url: base_path + "WareHouse/EquipmentMaster/updateEquipments",
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
            window.location.href = base_path+"WareHouse/EquipmentMaster/index";
                
                
            }
        });

        }
        else {
            a = true;

            $.ajax({
                url: base_path + "Login/logincheck",
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
}
</script>
