<?php
include('mysql_inc.php');

$data = $_POST['data'];
echo $data;
?>

<div class="container col-lg-12">
    <h3>Input Calls</h3>
    <div class ="row col-lg-5">
        <form class="form-inline" role="form">
            <div class="form-group">
                <div>
                    <label for="txtCallCustomer" class="col-lg-2 control-label ">Customer:</label>                   
                    <input type="text" id="txtCallCustomer" class="form-control pull-right"  placeholder="Customer"> 
                </div>
            </div> 
            <div class="form-group">
                <div>
                    <label for="txtCallProduct" class="col-lg-2 control-label">Product:</label>                   
                    <input type="text" id="txtCallProduct" class="form-control pull-right"  placeholder="Product">                    
                </div>
            </div>
            <div class="form-group">
                <div>
                    <label for="txtCallTechnician" class="col-lg-2 control-label">Technician:</label>                
                    <input type="text" id="txtCallTechnician" class="form-control pull-right"  placeholder="Technician">
                </div>
            </div>
           
            <div class="form-group">
                <div>
                    <label for="txtCallDate" class="col-lg-2 control-label">Date/Time:</label>                
                    <input type="text" id="txtCallDate" class="form-control pull-right"  placeholder="Date/Time">
                </div>
            </div>
            
            <div class="form-group">
                <div>
                    <label for="txtCallStatus" class="col-lg-2 control-label">Status:</label>                
                    <input type="text" id="txtCallStatus" class="form-control pull-right"  placeholder="Status">
                </div>
            </div>
            <div class="form-group">
                <div>
                    <label for="txtCallRefNo" class="col-lg-2 control-label">Reference Number:</label>                
                    <input type="text" id="txtCallRefNo" class="form-control pull-right"  placeholder="Reference Number">
                </div>
            </div>
            <div class="form-group">
                <div>
                    <label for="txtCallDesc" class="col-lg-2 control-label">Call Description:</label>               
                    <textarea id="txtCallDesc" class="form-control pull-right"  placeholder="Description"></textarea>
                </div>
            </div>
                           
        
    
    
    </form>
    </div>
    </div>

    <div class ="row">
        <button type="button" id="btnCallSave" class="btn btn-default navbar-btn ">Save</button>
        <button type="button" id="btnCallSearch" class="btn btn-default navbar-btn ">Search</button>
        <button type="button" id="btnCallDelete" class="btn btn-default navbar-btn ">Delete</button>
    </div>
    <div class ="row">
        <table class="table table-bordered table-hover">  
            <tr>
                <th>Call ID</th>
                <th>Customer Name</th>
                <th>Product Name</th>
                <th>Technician Name</th>
                <th>Date and Time</th>
                <th>Status</th>
                <th>Reference Number</th>
                <th>Call Description</th>
            </tr>
            <tr>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
            </tr>
            <tr>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
            </tr>
        </table>
    </div>
</div>  

<script type="text/javascript">
    $('#btnCallSave').click(function(){
                   insertCall();
               });
</script>