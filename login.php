<?php
include("config/database.php"); 
$tbl_name="users"; 

$username=$_POST['username']; 
$password=$_POST['password']; 
$usertype=$_POST['usertype'];

$username = stripslashes($username);
$password = stripslashes($password);
$usertype = stripslashes($usertype);

$query = "SELECT * FROM $tbl_name WHERE username='$username', password='$password', usertype='$usertype'";
$stmt = $con->prepare($query);
$stmt->execute();

$num = $stmt->rowCount();
while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
if($num != 1){
      echo "<script>alert(' Wrong Username or Password Access Denied !!! Try Again');
      window.location='indexpdo.php';
      </script>";
     }else{ 
      if($row['usertype'] == 'teacher'){
       header('location: create.php');
      }else if($row['usertype'] == 'student' ){
       header("Location: questions.php");
      }
      else{
       echo "<script>alert('Wrong Username or Password Access Denied !!! Try Again');
      window.location='indexpdo.php';
      </script>";
      }
     }
    }
?>
