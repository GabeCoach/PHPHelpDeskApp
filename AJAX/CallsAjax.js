function insertCall(){
   var cCustomerID = $('#txtCallCustomer').val();
   var cProductID = $('#txtCallProduct').val();
   var cTechnicianID = $('#txtCallTechnician').val();
   var CallDesc = $('#txtCallDesc').val();
   var Date = $('#txtCallDate').val();
   var call = {};
   
   call.CustomerID = cCustomerID;
   call.ProductID = cProductID;
   call.TechnicianID = cTechnicianID;
   call.CallDescription = CallDesc;
   call.DateTime = Date;
   
   
   alert("2")
   var data = JSON.stringify(call);
   alert("2")
   $.ajax({
           url: 'CallsController.php',
           type: 'POST',
           contentType: 'application/json',
           data: data
       }).done(function(){
           alert("3")
       alert("Insert call successful");
   }).fail(function(){
       alert("Insert call failed");
   });
   
   
}

