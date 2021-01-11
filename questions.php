<!DOCTYPE HTML>
<html>
<head>
    <title>School Portal</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">     
     
</head>
<body>
    <div class="container-fluid">
        <header class="page-header">
            <h1>Questions</h1>
        </header>

<?php
include 'config/database.php';

// using prepared statements
$query = "SELECT id, course, instructions FROM work ORDER BY id DESC";
$stmt = $con->prepare($query);
$stmt->execute();
 
$num = $stmt->rowCount();
echo "<a href='student.php' class='btn btn-primary'>View your answers</a>";
if($num>0){
    //database table
    echo "<table class='table table-hover table-responsive table-bordered'>";
    echo "<tr>";
        echo "<th>ID</th>";
        echo "<th>Course Unit</th>";
        echo "<th>Instructions</th>";
        echo "<th>Action</th>";
    echo "</tr>";
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){

    extract($row);
    echo "<tr>";
        echo "<td>{$id}</td>";
        echo "<td>{$course}</td>";
        echo "<td>{$instructions}</td>";
        echo "<td>";
            echo "<a href='post.php' class='btn btn-info m-r-1em'>Answer</a>";
        echo "</td>";
    echo "</tr>";
}
echo "</table>";
}
else{
    echo "<div class='alert alert-danger'>No records found.</div>";
}
?>
    </div>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script> 
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
</body>
</html>