<?php

session_start();

$mysqli =new mysqli ('localhost' , 'root' , '' , 'digi_saccco');

if(!$mysqli)
{
	echo "Not connected to database";
}

if ($_SERVER["REQUEST_METHOD"] === "POST"){

  //to make sure password are alike
  //if ($_POST["password"] == $_POST ["confirmpassword"]){

$first_name = $mysqli->real_escape_string($_POST['first_name']);
$last_name = $mysqli->real_escape_string($_POST['last_name']);
$email = $mysqli->real_escape_string($_POST['email']);
$contact = $mysqli->real_escape_string($_POST['contact']);
$first_Guarantor_Name= $mysqli->real_escape_string($_POST['first_Guarantor_name']);
$first_Guarantor_contact= $mysqli->real_escape_string($_POST['first_Guarantor_contact']);
$first_email= $mysqli->real_escape_string($_POST['first_email']);
$second_Guarantor_Name= $mysqli->real_escape_string($_POST['second_Guarantor_name']);
$second_Guarantor_contact= $mysqli->real_escape_string($_POST['second_Guarantor_contact']);
$second_email= $mysqli->real_escape_string($_POST['second_email']);
$loan_type= $mysqli->real_escape_string($_POST['loan_type']);
$loan_amount= $mysqli->real_escape_string($_POST['Loan_amount']);
$Duration= $mysqli->real_escape_string($_POST['Duration']);
$Monthly_salary= $mysqli->real_escape_string($_POST['Monthly_salary']);
$status='pending';
$reason='reason';

$sql = "SELECT * FROM signin WHERE first_name = $first_name";
//$result = mysqli_query($conn,$sql);


//$_SESSION["First name"] = $firstname;

$sql = "INSERT INTO loan_application (first_name,last_name,email,contact,first_Guarantor_Name,first_Guarantor_contact,first_email,second_Guarantor_Name,second_Guarantor_contact,second_email,loan_type,Loan_amount,Duration,Monthly_salary)
 VALUES ('$first_name','$last_name','$email','$contact','$first_Guarantor_Name','$first_Guarantor_contact','$first_email','$second_Guarantor_Name','$second_Guarantor_contact','$second_email','$loan_type','$loan_amount','$Duration','$Monthly_salary')"; 

//if query is successfull
if(!$mysqli->query($sql)){
	echo "Not inserted";
}
else{
  ?>
  <script>
    alert("Your loan application is successsfull.");
    window.location.href = "home2.php";
  </script>

<?php
}
}

header('refresh:5; url=home2.php');


 ?>  