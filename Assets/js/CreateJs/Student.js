 var a=false;
$(document).ready(function(){
$("#btn_save").click(function(){
    // alert("hi");
  if(a==false){
    
    saveperform();
   }
  }); 
 
});


 function saveperform() 
{ 
     var Id=$('#Id').val();
     var FullName = $('#FullName').val();
     var Address = $("#Address").val();
     var Mobile = $("#Mobile").val();
     var Email = $('#Email').val();
     var Std = $('#Std').val();
     var Subject = $('#Subject').val();
     var DOB = $('#DOB').val();
     var Gender = $('#Gender').val();
  
 
     if(FullName=="" || Address=="" || Mobile=="" || Email=="" || Gender=="" )  {
        Swal.fire(
            'Oops!',
            'Please Enter Required Fields!',
            'error'
        );
    }
  else
  {
        if(Id>0)
        {
        alert(Id);
            a=true;

            var form = $("#Form").closest("form");
            var formData = new FormData(form[0]);
        
            $.ajax({
        url:base_path+"Student/updateSTUDENT",
        type: "POST",
        data: formData,
        processData: false,
        contentType: false,
        // data: $('#Form').serialize(),
         beforeSend: function(){
               $('#btn_save').prop('disabled', true);
               $('#btn_save').html('Loading');
          }, 
        success: function(data) {
          console.log(data);
           $('#btn_save').prop('disabled', false);
           $('#btn_save').html('Save');

           Swal.fire(
            'Good job!',
            'Data Updated Successfully!',
            'success'
          );
        
         a=false;
        
          }
      });
        }
        else
        {
        a=true;
            var form = $("#Form").closest("form");
            var formData = new FormData(form[0]);
            
            $.ajax({
        url:base_path+"Student/insertSTUDENT",
        type: "POST",
        data: formData,
        processData: false,
        contentType: false,
        // data: $('#Form').serialize(),
         beforeSend: function(){
               $('#btn_save').prop('disabled', true);
               $('#btn_save').html('Loading');
          }, 
        success: function(data) {
          console.log(data);
            $('#btn_save').prop('disabled', false);
           $('#btn_save').html('Save');
             $("#Form").trigger("reset");

             // alert("hi");

             Swal.fire(
              'Good job!',
              'Data Submitted Successfully!',
              'success'
            );
           
           a=false;
           
                }
      });
        }
      }
 }



