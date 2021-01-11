<!DOCTYPE HTML>
<html>
<head>
    <title>School Portal</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">     
     
</head>
<body>
    <div class="container-fluid">
        <header class="page-header">
            <h1>Register</h1>
        </header>
<?php 
include("config/database.php"); 
?>

    <div class="container">    
        <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
            <div class="panel panel-info" >
                    <div class="panel-heading">
                        <div class="panel-title">Registration Page</div>
                      
                    </div>     

                    <div style="padding-top:30px" class="panel-body" >

                        <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                            
                        <form action="insert.php" class="form-horizontal" method="post">
                                    
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Username</label>
                        <div class="col-sm-6">
                            <!-- <input id="login-username" type="text" class="form-control" name="username" value="" placeholder="username"  autofocus required>                                         -->
                            <input id="login-username" type="text" name="username" class="form-control" placeholder="enter username" autofocus required/>
                        </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Email</label>
                            <div class="col-sm-6">
                            <input id="login-email" type="email" class="form-control" name="email" placeholder="Enter email" required>
                            </div>
                        </div>   
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Password</label>
                            <div class="col-sm-6">
                            <input id="login-password" type="password" class="form-control" name="password" placeholder="password" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Select usertype</label>
                            <div class="col-sm-6">
                            <select id="login-user_level" class="form-control" name="usertype">
                            <option value="" selected="selected"> - select role - </option>
                            <option value="teacher">Teacher</option>
                            <option value="student">Student</option>
                            </select>
                            </div>
                        </div> 

                                <div style="margin-top:10px" class="form-group">
                                    <!-- Button -->

                                    <div class="col-sm-12 controls">
                                
         <input type="button" class="btn btn-primary pull-right" style='margin-left:25px' value="Cancel" 
          title="Click to return to main page." onclick="location.href = 'index.php';">                           
           <button type="submit" class="btn btn-primary pull-right" title="Click here to save the records in the database." >Register</button>
             
                                             
            </div>
        </div>
       </form>
    </div>
    </div>
    </div> 
   </div>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script> 
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
</body>
</html>