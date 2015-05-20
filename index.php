<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        
        <link href="bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <script src="bootstrap/js/bootstrap.js" type="text/javascript"></script>
        <script src="bootstrap/js/jquery-2.1.4.js" type="text/javascript"></script>
        <script src="AJAX/CallsAjax.js" type="text/javascript"></script>
        <script src="AJAX/CustomersAjax.js" type="text/javascript"></script>
        <script src="AJAX/ProductsAjax.js" type="text/javascript"></script>
        <script src="AJAX/TechniciansAjax.js" type="text/javascript"></script>
        <title></title>
        <script type="text/javascript">
            
            $(document).ready(function(){
               $('#btnCalls').click(function(){
                   GetDisplayView('Calls.php');
                  
               });
               
               $('#btnProduct').click(function(){
                   GetDisplayView('Products.php');
               })
               
               $('#btnTechnician').click(function(){
                   GetDisplayView('Technicians.php');
               })
               
               $('#btnCustomer').click(function(){
                   GetDisplayView('Customers.php');
               })
               
               
                 
                
                
            });
            
            
            function GetDisplayView(viewName){
                $.ajax(viewName).done(function(response){
                    $('#DisplayView').html(response);
                });
            };   

               
   
   

            
        </script>
    </head>
    <body>
        <?php
        // put your code here
        ?>
        <div class ="container">
            <div class="row">
                
            </div>
            <div class="row">
                <div class="col-lg-3">
                    <button type="button" id="btnCalls" class="btn btn-default navbar-btn col-lg-10">Calls</button>
                    <button type="button" id="btnProduct" class="btn btn-default navbar-btn col-lg-10">Product</button>
                    <button type="button" id="btnTechnician" class="btn btn-default navbar-btn col-lg-10">Technician</button>
                    <button type="button" id="btnCustomer" class="btn btn-default navbar-btn col-lg-10">Customer</button>
                </div>
                <div class="col-lg-9">
                    <div id="DisplayView">
                        
                    </div> 
                </div>
            </div>
            <div class="row">
                
            </div>
        </div>
        
    </body>
</html>

