<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width">
   <meta name="descrption" content="Easy loan application">
   <meta name="keywords" content="loan, loan application">
   <meta name="author" content="Dennis Mureti">


  <title>Update</title>
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
               <li><a href="signup.php">Add members</a></li>
               <li><a href="retreivemember.php">View member</a></li>
               <li class="current"><a href="retreive.php">view applications</a></li>
               <li><a href="managerfind.php">view specific</a></li>
               <li><a href="logout.php">Log out</a></li>

            </ul>
           </nav>
           </div>
    </header>

<h1 style="font-family: cursive;text-align: center;">View Applications</h1>

<?php
$conn = new mysqli('localhost' , 'root' , '' , 'digi_saccco');



if(isset($_GET['id']))
{
  $id = $_GET['id'];
  $res = $conn->query("SELECT * FROM loan_application WHERE id = '$id' ");

  
}

 if (isset ($_POST['update'])) {

  $first_name = $_POST['first_name'];
  $last_name = $_POST['last_name'];
  $email = $_POST['email'];
  $contact = $_POST['contact'];
  $first_Guarantor_name = $_POST['first_Guarantor_name'];
  $first_Guarantor_contact = $_POST['first_Guarantor_contact'];
  $first_email = $_POST['first_email'];
  $second_Guarantor_name = $_POST['second_Guarantor_name'];
  $second_Guarantor_contact = $_POST['second_Guarantor_contact'];
  $second_email = $_POST['second_email'];
  $loan_type = $_POST['loan_type'];
  $Loan_amount = $_POST['Loan_amount'];
  $Duration = $_POST['Duration'];
  $Monthly_salary = $_POST['Monthly_salary'];
  $status = $_POST['status'];
  //$id = $_POST['id'];


   $sql = "UPDATE loan_application SET first_name='$first_name', last_name= '$last_name', email= '$email', contact='$contact', first_Guarantor_Name= '$first_Guarantor_name', first_Guarantor_contact= '$first_Guarantor_contact', first_email= '$first_email', second_Guarantor_Name= '$second_Guarantor_name', second_Guarantor_contact= '$second_Guarantor_contact', second_email= '$second_email', loan_type= '$loan_type', Loan_amount= '$Loan_amount', Duration= '$Duration', Monthly_salary= '$Monthly_salary', status= '$status'  WHERE id='$id' ";
  //$sql = "UPDATE loan_application SET first_name = '$newfirst_name' WHERE id='$id' ";
  $conn->query($sql) === TRUE;
?>
  <script>
    alert("The loan application has been updated.");
    window.location.href = "retreive.php";
  </script>

<?php

}

if($res){
  while($row = $res->fetch_assoc()){
  $first_name = $row['first_name'];
  $last_name = $row['last_name'];
  $email = $row['email'];
  $contact = $row['contact'];
  $first_Guarantor_name = $row['first_Guarantor_Name'];
  $first_Guarantor_contact = $row['first_Guarantor_contact'];
  $first_email = $row['first_email'];
  $second_Guarantor_name = $row['second_Guarantor_Name'];
  $second_Guarantor_contact = $row['second_Guarantor_contact'];
  $second_email = $row['second_email'];
  $loan_type = $row['loan_type'];
  $Loan_amount = $row['Loan_amount'];
  $Duration = $row['Duration'];
  $Monthly_salary =$row['Monthly_salary'];
  $status =$row['status'];

  }
  }
  //   else{ echo ""}
  ?>


<form style="text-align: center;background-color: #ffffff; outline-style: outset; font-weight: bold; font-size: 18px;border-style: double;border-style: double;"  method="post" action="">

  First Name:<input style="width: 400px; border-radius: 4px;" type="text" name="first_name" required="first_name" value="<?PHP echo $first_name; ?>">
  Last Name:<input  style="width: 400px; border-radius: 4px;" type="text" name="last_name" required="last_name" value="<?PHP echo $last_name;?>"><br><br>
  Email:<input  style="width: 400px; border-radius: 4px;" type="email" name="email" required="email" value="<?PHP echo $email ?>">
  Contact:<input  style="width: 400px; border-radius: 4px;" type="number" name="contact" required="contact" value="<?PHP echo $contact; ?>"><br><br>
  First Guarantor Name:<input  style="width: 200px; border-radius: 4px;" type="text" name="first_Guarantor_name" required="first_Guarantor_name" value="<?PHP echo $first_Guarantor_name; ?>">
  First Guarantor contact:<input  style="width: 200px; border-radius: 4px;" type="number" name="first_Guarantor_contact" required="first_Guarantor_contact" value="<?PHP echo $first_Guarantor_contact; ?>">
  First Guarantor Email:<input  style="width: 200px; border-radius: 4px;" type="email" name="first_email" required="first_email" value="<?PHP echo $first_email; ?>"><br><br>
  Second Guarantor Name:<input  style="width: 180px; border-radius: 4px;" type="text" name="second_Guarantor_name" required="second_Guarantor_name" value="<?PHP echo $second_Guarantor_name; ?>">
  Second Guarantor contact:<input  style="width: 180px; border-radius: 4px;" type="number" name="second_Guarantor_contact" required="second_Guarantor_contact" value="<?PHP echo $second_Guarantor_contact; ?>">
  Second Guarantor Email:<input  style="width: 160px; border-radius: 4px;" type="email" name="second_email" required="second_email" value="<?PHP echo $second_email; ?>"><br><br>
  Loan type:<input  style="width: 300px; border-radius: 4px;" type="text" name="loan_type" required="loan_type" value="<?PHP echo $loan_type; ?>">
  Loan Amount:<input  style="width: 300px; border-radius: 4px;" type="number" name="Loan_amount" required="Loan_amount" value="<?PHP echo $Loan_amount; ?>">
  Duration in Months:<input  style="width: 200px; border-radius: 4px;" type="number" name="Duration" required="Duration" value="<?PHP echo $Duration; ?>"><br><br>
  Monthly salary:<br><input  style="width: 800px; border-radius: 4px;" type="number" name="Monthly_salary" required="Monthly_salary" value="<?PHP echo $Monthly_salary; ?>"><br><br>
  Status:<br> <input type="radio" name="status" value="Pending" value="<?PHP echo $status; ?>"> Pending <br>
              <input type="radio" name="status" value="Accepted" value="<?PHP echo $status; ?>"> Accepted<br>
              <input type="radio" name="status" value="Rejected" value="<?PHP echo $status; ?>"> Rejected<br><br>

            <input style="width: 800px; border-radius: 4px;" type="hidden" name="id" required="first_name" value="<?PHP echo $row[0]; ?>">


  <input style="border-radius: 8px;background-color:skyblue;width: 300px;font-size: 17px;" type="submit" name="update" class="btn btn-default" value="Update"><br><br>

  </form>

  <section id="boxes">  
<div class="container">
  <div class="box">
  <img src="images/lo1.jpg">
    <h3>Loan application</h3>
    <p>There is no need of spending endless hours in traffic to go apply for a loan. There are is an easier and faster way of doing that which is provided for you here.</p>
  </div>
  <div class="box">
  <img src="images/sa1.png">
    <h3>Savings</h3>
    <p>Saccos are a mojor boost to make your savings grow. Vist=it any of the saccos close to you and start saving</p>
  </div>
  <div class="box">
  <img src="images/co1.png">
    <h3>contact us</h3>
    <p>For more details on how to use the sytem.<br> contact: 0708797047<br>Facebook: Digi-SACCO<br>Intagram: digi-SACCO</p>
  </div>
</div>
</section>


<footer>
  <p>Loan application, Copyright &copy; 2019</p>

</footer>
</body>
</html>


