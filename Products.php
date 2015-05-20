<?php
include('mysql_inc.php');

$data = $_POST['data'];
echo $data;
?>

<div class="container">
    <h3>Input Products</h3>
    <div class="row">
        <div class="form-group">
            <div>
                <label for="txtProdName" class="col-lg-2 control-label">Product Name:</label>
                <input type="text" id="txtProdName" class="form-control pull-right" placeholder="Product Name">
            </div>
        </div>
         <div class="form-group">
                <div>
                    <label for="txtProdType" class="col-lg-2 control-label">Product Type:</label>                
                    <input type="text" id="txtProdType" class="form-control pull-right"  placeholder="Product Type">
                </div>
        </div>
    </div>
    <div class="row">
        <button type="button" id="btnProdSave" class="btn btn-success navbar-btn ">Save</button>
        <button type="button" id="btnProdSearch" class="btn btn-default navbar-btn ">Search</button>
        <button type="button" id="btnProdDelete" class="btn btn-default navbar-btn ">Delete</button>
    </div>
    <p class="bg-primary col-lg-12">Products Data</p>
    <div class="row">
        <div class="col-lg-5">
            <div id="ProductTable">
                
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    $('#btnProdSave').click(function(){
                   insertProduct();
               });
               
    GetProduct();
</script>