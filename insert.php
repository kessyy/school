<?php

include("config/database.php");  

$username=$_POST['username']; 
$password=$_POST['password']; 
$email=$_POST['email'];
$usertype = $_POST['usertype']; 

$query = "INSERT INTO users (username,email,usertype,password) 
          VALUES 
          ('$username','$email','$usertype','$password')";
$stmt = $con->prepare($query);

if($stmt->execute())
{
echo "<script>alert('User Account has been saved, please log in.');
      window.location='index.php';
      </script>";
}      
else
{
  echo"The query did not run";
} 
?>