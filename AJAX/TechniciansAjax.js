function insertTechnician(){
   var tFirstName = $('#txtTechFirstName').val();
   var tLastName = $('#txtTechLastName').val();
   var tStatus = $('#txtTechStatus').val();
   var tEmail = $('#txtTechEmail').val();
   var tUserName = $('#txtTechUserName').val();
   var tPassword = $('#txtTechPassword').val();
   var Technician = {};
   
   Technician.FirstName = tFirstName;
   Technician.LastName = tLastName;
   Technician.Status = tStatus;
   Technician.Email = tEmail;
   Technician.UserName = tUserName;
   Technician.Password = tPassword;
   
   
   
   
   var tdata = JSON.stringify(Technician);
   
   $.ajax({
           url: 'TechniciansController.php',
           type: 'POST',
           contentType: 'application/json',
           data: tdata
       }).done(function(){
       alert("Insert call successful");
   }).fail(function(){
       alert("Insert call failed");
   });
   
   
}