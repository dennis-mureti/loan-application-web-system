
 <?php

session_start();

$mysqli = new mysqli ('localhost' , 'root' , '' , 'digi_saccco');

if ($_SERVER["REQUEST_METHOD"] == "POST"){

  //to make sure password are alike
  if ($_POST["password"] == $_POST ["confirmpassword"]){


$manager_name = $mysqli->real_escape_string($_POST['manager_name']);
$manager_email = $mysqli->real_escape_string($_POST['manager_email']);
$location = $mysqli->real_escape_string($_POST['location']);
$password = $mysqli->real_escape_string($_POST['password']);{

$_SESSION["Full name"] = $manager_name;

$sql = "INSERT INTO manager ( manager_name,manager_email,location,password)
 VALUES ('$manager_name','$manager_email','$location','$password')"; 

//if query is successfull
if($mysqli->query($sql) === true){
?>
  <script>
    alert("Your signup is successsful. Please login");
    window.location.href = "managerlogin.php";
  </script>

<?php
}
else{
  echo "unable to sign you in please confirm your credentials";
  header("refresh:10; url=managersignup.php");
}



}
  }
}
 ?>

 
<!DOCTYPE html>
<html>
<head>
<title>Manager signin</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
<header>
   <div class="container">
   <div id="branding">
           <h1 style="font-family: cursive;"><span class="highlight">Digi</span> SACCO</h1>

           </div>
           <nav>
            <ul>
               <li><a href="mangerhome.php">Home</a></li>
               <li><a href="manageraboutus.php">About Us</a></li>
               <li><a href="managercontact.php">Contact</a></li>
               <li class="current"><a href="managersignup.php">SIGN UP</a></li>
               <li><a href="managerlogin.php">LOG IN</a></li>

            </ul>
           </nav>
           </div>
    </header>

<h1 style="font-family: cursive;text-align: center;position: center;margin-bottom: 2px;">Sign up</h1>

<form action="managersignup.php" method="post" style="text-align: center;background-color: #ffffff;margin: solid;"><br>
  
 
 Full name:<input style="border-radius: 8px" type="text" name="manager_name" required="manager_name"><br><br>
 Email:<input style="border-radius: 8px" type="email" name="manager_email" required="manager_email"><br><br>
 Location:<input style="border-radius: 8px" type="text" name="location" required="location"><br><br>
 Password:<input style="border-radius: 8px" type="password" name="password" required="password"><br><br>
 Confirm password:<input style="border-radius: 8px" type="password" name="confirmpassword" required="confirmpassword"><br><br>
  
  <button type="submit" class="btn btn-default">SIGN UP</button><br><br>
</form>
<footer>
  <p>Manager sign up, Copyright &copy; 2019</p>

</footer>

</body>
</html>