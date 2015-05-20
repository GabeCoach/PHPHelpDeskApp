function insertCustomer(){
   var cFirstName = $('#txtCustFirstName').val();
   var cLastName = $('#txtCustLastName').val();
   var cStatus = $('#txtCustStatus').val();
   var cEmail = $('#txtCustEmail').val();
   var cUserName = $('#txtCustUserName').val();
   var cPassword = $('#txtCustPassword').val();
   var Customer = {};
   
   Customer.FirstName = cFirstName;
   Customer.LastName = cLastName;
   Customer.Status = cStatus;
   Customer.Email = cEmail;
   Customer.UserName = cUserName;
   Customer.Password = cPassword;
   
   
   
   
   var CustData = JSON.stringify(Customer);
   
   $.ajax({
           url: 'CustomersController.php',
           type: 'POST',
           contentType: 'application/json',
           data: CustData
       }).done(function(){
       alert("Insert call successful");
   }).fail(function(){
       alert("Insert call failed");
   });
   }