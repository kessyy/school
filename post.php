<!DOCTYPE HTML>
<html>
<head>
    <title>School Portal</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">     
</head>
<body>
    <div class="container-fluid">
   
        <header class="page-header">
            <h1>Post Answers</h1>
        </header>
<?php
if($_POST){
    include 'config/database.php';
    try{

        $query = "INSERT INTO answers SET name=:name, reg_no=:reg_no, course=:course, answered=:answered, created=:created";
        $stmt = $con->prepare($query);

        $name=htmlspecialchars(strip_tags($_POST['name']));
        $reg_no=htmlspecialchars(strip_tags($_POST['reg_no']));
        $course=htmlspecialchars(strip_tags($_POST['course']));
        $answered=htmlspecialchars(strip_tags($_POST['answered']));

        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':reg_no', $reg_no);
        $stmt->bindParam(':course', $course);
        $stmt->bindParam(':answered', $answered);
         
        // specify when this record was inserted to the database
        $created=date('Y-m-d H:i:s');
        $stmt->bindParam(':created', $created);

        if($stmt->execute()){
            echo "<div class='alert alert-success'>Answer was saved.</div>";
        }else{
            echo "<div class='alert alert-danger'>Unable to save answer.</div>";
        }
         
    }
    catch(PDOException $exception){
        die('ERROR: ' . $exception->getMessage());
    }
}
?>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
    <table class='table table-hover table-responsive table-bordered'>
        <tr>
            <td>Student Name</td>
            <td><input type='text' name='name' class='form-control' /></td>
        </tr>
        <tr>
            <td>Reg_No.</td>
            <td><input type='text' name='reg_no' class='form-control' /></td>
        </tr>
        <tr>
            <td>Course Unit</td>
            <td><input type='text' name='course' class='form-control' /></td>
        </tr>
        <tr>
            <td>Answers</td>
            <td><textarea name='answered' class='form-control'></textarea></td>
        </tr>
        <tr>
            <td></td>
            <td>
                <input type='submit' value='Save' class='btn btn-primary' />
                <a href='student.php' class='btn btn-danger'>Back to Answers</a>
            </td>
        </tr>
    </table>
</form>
    </div>
      
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script> 
</body>
</html>