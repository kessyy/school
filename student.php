<!DOCTYPE HTML>
<html>
<head>
    <title>School Portal</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">     
     
</head>
<body>
    <div class="container-fluid">
        <header class="page-header">
            <h1>Posted answers</h1>
        </header>
<?php
include 'config/database.php';

$query = "SELECT id, name, reg_no, course, answered FROM answers ORDER BY id ASC";
$stmt = $con->prepare($query);
$stmt->execute();
 
$num = $stmt->rowCount();

echo "<a href='post.php' class='btn btn-primary'>Answer new question</a>";
if($num>0){
    //database table
    echo "<table class='table table-hover table-responsive table-bordered'>";
    echo "<tr>";
        echo "<th>ID</th>";
        echo "<th>Student Name</th>";
        echo "<th>Reg_No.</th>";
        echo "<th>Course Unit</th>";
        echo "<th>Answers</th>";
        echo "<th>Action</th>";
    echo "</tr>";
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){

    extract($row);
    echo "<tr>";
        echo "<td>{$id}</td>";
        echo "<td>{$name}</td>";
        echo "<td>{$reg_no}</td>";
        echo "<td>{$course}</td>";
        echo "<td>{$answered}</td>";
        echo "<td>";

            echo "<a href='single_answer.php?id={$id}' class='btn btn-info m-r-1em'>View</a>";
            echo "<a href='edit_answer.php?id={$id}' class='btn btn-primary m-r-1em'>Edit</a>";
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