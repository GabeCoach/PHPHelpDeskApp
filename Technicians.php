<?php
include('mysql_inc.php');

$data = $_POST['data'];
echo $data;
?>

<div class="container col-lg-12">
    <h3>Input Technicians</h3>
    <div class ="row col-lg-5">
        <form class="form-inline" role="form">
            <div class="form-group">
                <div>
                    <label for="txtTechFirstName" class="col-lg-2 control-label ">First Name:</label>                   
                    <input type="text" id="txtTechFirstName" class="form-control pull-right"  placeholder="First Name"> 
                </div>
            </div> 
            <div class="form-group">
                <div>
                    <label for="txtTechLastName" class="col-lg-2 control-label">Last Name:</label>                   
                    <input type="text" id="txtTechLastName" class="form-control pull-right"  placeholder="Last Name">                    
                </div>
            </div>
            <div class="form-group">
                <div>
                    <label for="txtTechStatus" class="col-lg-2 control-label">Status:</label>                
                    <input type="text" id="txtTechStatus" class="form-control pull-right"  placeholder="Status">
                </div>
            </div>
           
            <div class="form-group">
                <div>
                    <label for="txtTechEmail" class="col-lg-2 control-label">Email:</label>                
                    <input type="text" id="txtTechEmail" class="form-control pull-right"  placeholder="Email">
                </div>
            </div>
            
            <div class="form-group">
                <div>
                    <label for="txtTechUsername" class="col-lg-2 control-label">User Name:</label>                
                    <input type="text" id="txtTechUsername" class="form-control pull-right"  placeholder="User Name">
                </div>
            </div>
            <div class="form-group">
                <div>
                    <label for="txtTechPassword" class="col-lg-2 control-label">Password:</label>                
                    <input type="text" id="txtTechPassword" class="form-control pull-right"  placeholder="Password">
                </div>
            </div>
            
                           
        
    
    
    </form>
    </div>
    </div>

    <div class ="row">
        <button type="button" id="btnTechSave" class="btn btn-default navbar-btn ">Save</button>
        <button type="button" id="btnTechSearch" class="btn btn-default navbar-btn ">Search</button>
        <button type="button" id="btnTechDelete" class="btn btn-default navbar-btn ">Delete</button>
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
    $('#btnTechSave').click(function(){
                   insertTechnician();
               });
</script>
