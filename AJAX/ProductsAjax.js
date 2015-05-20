function insertProduct(){
   var ProductName = $('#txtProdName').val();
   var ProductType = $('#txtProdType').val();
  var Product = {};
   
   Product.ProductName = ProductName;
   Product.ProductType = ProductType;
   
   
   
   
   var ProdData = JSON.stringify(Product);
   
   $.ajax({
           url: 'Controllers/ProductsController.php',
           type: 'POST',
           contentType: 'application/json',
           data: ProdData
       }).done(function(){
       alert("Insert call successful");
   }).fail(function(){
       alert("Insert call failed");
   });
   
   
}

function GetProduct(){
    $.ajax({
           url: 'Controllers/GetProductsController.php',
           type: 'GET',
       }).done(function(response){
       $('#ProductTable').html(response);
   }).fail(function(){
       alert("Insert call failed");
   });
}