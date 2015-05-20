<?php
include('mysql_inc.php');

$data = $_POST['data'];
echo $data;
?>

<div class="container col-lg-12">
    <h3>Input Customers</h3>
    <div class ="row col-lg-5">
        <form class="form-inline" role="form">
            <div class="form-group">
                <div>
                    <label for="txtCustFirstName" class="col-lg-2 control-label ">First Name:</label>                   
                    <input type="text" id="txtCustFirstName" class="form-control pull-right"  placeholder="First Name"> 
                </div>
            </div> 
            <div class="form-group">
                <div>
                    <label for="txtCustLastName" class="col-lg-2 control-label">Last Name:</label>                   
                    <input type="text" id="txtCustLastName" class="form-control pull-right"  placeholder="Last Name">                    
                </div>
            </div>
            <div class="form-group">
                <div>
                    <label for="txtCustStatus" class="col-lg-2 control-label">Status:</label>                
                    <input type="text" id="txtCustStatus" class="form-control pull-right"  placeholder="Status">
                </div>
            </div>
           
            <div class="form-group">
                <div>
                    <label for="txtCustEmail" class="col-lg-2 control-label">Email:</label>                
                    <input type="text" id="txtCustEmail" class="form-control pull-right"  placeholder="Email">
                </div>
            </div>
            
            <div class="form-group">
                <div>
                    <label for="txtCustUsername" class="col-lg-2 control-label">User Name:</label>                
                    <input type="text" id="txtCustUsername" class="form-control pull-right"  placeholder="User Name">
                </div>
            </div>
            <div class="form-group">
                <div>
                    <label for="txtCustPassword" class="col-lg-2 control-label">Password:</label>                
                    <input type="text" id="txtCustPassword" class="form-control pull-right"  placeholder="Password">
                </div>
            </div>
            
                           
        
    
    
    </form>
    </div>
    </div>

    <div class ="row">
        <button type="button" id="btnCustSave" class="btn btn-default navbar-btn ">Save</button>
        <button type="button" id="btnCustSearch" class="btn btn-default navbar-btn ">Search</button>
        <button type="button" id="btnCustDelete" class="btn btn-default navbar-btn ">Delete</button>
    </div>
    <div class ="row">
        <table class="table table-bordered table-hover">  
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Status</th>
                <th>E-Mail</th>
                <th>User Name</th>
                <th>Password</th>
                
            </tr>
            <tr>
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
                
            </tr>
        </table>
    </div>
</div>  

<script type="text/javascript">
    $('#btnCustSave').click(function(){
                   insertCustomer();
               });
</script>