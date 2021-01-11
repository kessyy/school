<!DOCTYPE HTML>
<html>
<head>
    <title>School Portal</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">     
     
</head>
<body>
    <div class="container-fluid">
        <header class="page-header">
            <h1>Log in</h1>
        </header>
<?php 

$errors = array(
1=>"Invalid user name or password, Try again",
2=>"Please login to access this area"
);

$error_id = isset($_GET['err']) ? (int)$_GET['err'] : 0;

if ($error_id == 1) {
    echo '<p class="text-danger">'.$errors[$error_id].'</p>';
}
elseif 
($error_id == 2) {
    echo '<p class="text-danger">'.$errors[$error_id].'</p>';
}
?> 
<div class="container">    
        <div id="loginbox" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
            <div class="panel panel-info" >
                    <div class="panel-heading">
                        <div class="panel-title">Sign in Page</div>
                      
                    </div>     

                    <div style="padding-top:30px" class="panel-body" >

                        <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div> 

    <form action="authenticate.php" method="POST" class="form-signin form-horizontal" role="form">  
        <div class="form-group">
            <label class="col-sm-3 control-label">Username</label>
            <div class="col-sm-6">
        <input type="text" name="username" class="form-control" placeholder="Username" required autofocus><br/>
        </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label">Username</label>
            <div class="col-sm-6">
        <input type="password" name="password" class="form-control" placeholder="Password" required><br/>
        </div>
        </div>

        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button><br/>
                                  
    </form>
    <a href="register.php"><button class="btn btn-lg btn-primary left" type="submit">Register Now</button></a>
</div>
</div>
</div>
</div>
</div>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script> 
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
</body>
</html>