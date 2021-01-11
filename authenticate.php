<?php 
 require 'config/database.php';

 session_start();

 $username = "";
 $password = "";
 
 if(isset($_POST['username'])){
  $username = $_POST['username'];
 }
 if (isset($_POST['password'])) {
  $password = $_POST['password'];

 }
 

 $query = 'SELECT * FROM users WHERE username=:username AND password=:password';

 $stmt = $con->prepare($query);

 $stmt->execute(array(':username' => $username, ':password' => $password));


 if($stmt->rowCount() == 0){
  header('Location: index.php?err=1');
 }else{

  $row = $stmt->fetch(PDO::FETCH_ASSOC);

  session_regenerate_id();
  $_SESSION['sess_user_id'] = $row['id'];
  $_SESSION['sess_username'] = $row['username'];
        $_SESSION['sess_userrole'] = $row['usertype'];

        echo $_SESSION['sess_userrole'];
  session_write_close();

  if( $_SESSION['sess_userrole'] == "teacher"){
   header('Location: create.php');
  }else{
   header('Location: questions.php');
  }
  
  
 }
?>