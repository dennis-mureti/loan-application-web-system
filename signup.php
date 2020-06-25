 
 <?php

session_start();

$mysqli = new mysqli ('localhost' , 'root' , '' , 'digi_saccco');

if ($_SERVER["REQUEST_METHOD"] == "POST"){

  //to make sure passwords are alike
  if ($_POST["password"] == $_POST ["confirmpassword"]){


$firstname = $mysqli->real_escape_string($_POST['first_name']);
$lastname = $mysqli->real_escape_string($_POST['last_name']);
$gender = $mysqli->real_escape_string($_POST['gender']);
$address = $mysqli->real_escape_string($_POST['address']);
$contact = $mysqli->real_escape_string($_POST['contact']);
$email = $mysqli->real_escape_string($_POST['email']);
$password =$mysqli->real_escape_string ($_POST['password']);{

$_SESSION["First name"] = $firstname;

$sql = "INSERT INTO signin ( first_name,last_name,gender,address,contact,email,password)
 VALUES ('$firstname','$lastname','$gender','$address','$contact','$email','$password')"; 

//if query is successfull
if($mysqli->query($sql) === true){
  ?>
  <script>
    alert("Member has been successfully added.Member is now able to login");
    window.location.href = "mangerhome2.php";
  </script>

<?php
//echo "Signin successful! Please log in"; 
  //header("refresh:2; url=login.php");
}
else{
  echo "unable to add member please confirm cridentials and confirm all feilds";
}



}
  }
}
 ?>

 
 <!DOCTYPE html>
<html>
<head>
<title>Add member</title>
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
               <li><a href="mangerhome2.php">Home</a></li>
               <li><a href="manageraboutus.php">About Us</a></li>
               <li><a href="managercontact.php">Contact</a></li>
               <li class="current"><a href="signup.php">Add member</a></li>
               <li><a href="retreivemember.php">View member</a></li>
               <li><a href="retreive.php">view applications</a></li>
               <li><a href="changedloanapplication.php">view modified</a></li>
               <li><a href="managerfind.php">view specific</a></li>
               <li><a href="managerlogout.php">Log out</a></li>

            </ul>
           </nav>1`
           </div>
    </header>
    <div id="signin">
<form action="signup.php" method="post" style="text-align: center;background-color: #ffffff;margin: solid;"><br>

<h1 style="font-family: cursive;text-align: center;position: center;margin-bottom: 2px;">Sign up member</h1>


  
 First name: <input style="border-radius: 4px" type="text" name="first_name" required="first_name" placeholder="First Name"><br><br>
 Last name: <input style="border-radius: 4px" type="text" name="last_name" required="last_name" placeholder="Last Name"><br><br>

 Gender<br>
 Male: <input style="border-radius: 4px" type="radio" name="gender" value="Male"><br>
 Female: <input style="border-radius: 4px" type="radio" name="gender" value="Female"><br><br>

 Address: <input style="border-radius: 4px" type="number" name="address" required="address" placeholder="Address"><br><br>
 Contact: <input style="border-radius: 4px" type="number" name="contact" required="contact" placeholder="Contact"><br><br>
 Email: <input style="border-radius: 4px" type="email" name="email" required="email" placeholder="Email"><br><br>
 Password: <input style="border-radius: 4px" type="password" name="password" required="password" placeholder="Password"><br><br>
 Confirm password: <input style="border-radius: 4px" type="password" name="confirmpassword" required="password" placeholder="Password"><br><br>
  
  <button type="submit" class="btn btn-default">ADD MEMBER</button><br><br>
</form>
</div>
<footer>
  <p>Member sign up, Copyright &copy; 2019</p>

</footer>

</body>
</html>