<?php

$conn = new mysqli ('localhost' , 'root' , '' , 'digi_saccco');
session_start();

if(isset($_POST['email']) && isset($_POST['password'])){
  $email = $conn->real_escape_string($_POST['email']);
  $password =$conn->real_escape_string ( $_POST['password']);
  echo $email;
}

//$User= $_POST['user'];

//check if user with that email allready exists
$sql = "SELECT * FROM signin WHERE email = '$email' AND password = '$password' ";
echo $sql;

$stmt = $conn->query($sql);

echo var_dump($stmt);

if ($stmt) {         
  if  ($stmt->num_rows > 0) {
 
  $row=$stmt->fetch_assoc();   
  //selct from database

  $email=$row['email'];
  $password=$row['password'];

  session_start();
  $_SESSION['email']=$email;
  $_SESSION['password']=$password;
  // echo "you are logged in";
  header('location:home2.php');
} else {
    echo "invalid log in kindly confirm with SACCO manager";
  }
}

$conn->close();

?>