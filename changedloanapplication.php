
<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width">
   <meta name="descrption" content="Easy loan application">
   <meta name="keywords" content="loan, loan application">
   <meta name="author" content="Dennis Mureti">


  <title>Loan application changes</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <style type="text/css">
    table,th,td{
      border-collapse: collapse;
      width: 80%;
    }
    td,th{
      border:1px solid #dddddd;
      text-align: left;
      padding: 6px;
    }

    tr:nth-child(even){
      background-color: #dddddd;
    }
    body{
      background:white;
      font-size: 18px;
      font-family: Times New Roman;
    }
  </style>
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
               <li><a href="retreive.php">view applications</a></li>
               <li class="current"><a href="changedloanapplication.php">view modified</a></li>
               <li><a href="managerfind.php">view specific</a></li>
               <li><a href="managerlogout.php">Log out</a></li>

            </ul>
           </nav>
           </div>
    </header>

<h1 style="font-family: cursive;text-align: center;">View changed Applications</h1>
<?php
/*$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDB";*/

// Create connection
$conn = new mysqli('localhost' , 'root' , '' , 'digi_saccco');
// Check connection
if (mysqli_connect_error($conn)) {
    die("Connection failed: " .mysqli_connect_error($conn));
} 

$sql = "SELECT * FROM loan_application_changes";
$result = mysqli_query($conn,$sql);

if (mysqli_num_rows($result) > 0) {

  echo "<table border='1' cellpadding='10s'>";
    echo "<tr><th>ID</th><th>First Name</th><th>Last Name</th><th>Email</th><th>contact</th><th>First Guarantor Name</th><th>First Guarantor Contact</th><th>First Guarantor Email</th><th>Second Guarantor Name</th><th>Second Guarantor Contact</th><th>Second Guarantor Email </th><th>Loan Type</th><th>Loan amount</th> <th>Duration</th>  
   <th>Monthly salary</th><th>Status</th></tr>";
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>".$row["id"]."</td>";
        echo "<td>".$row["first_name"]."</td>";
        echo "<td>".$row["last_name"]."</td>";
        echo "<td>".$row["email"]."</td>";
        echo "<td>".$row["contact"]."</td>";
        echo "<td>".$row["first_Guarantor_Name"]."</td>";
        echo "<td>".$row["first_Guarantor_contact"]."</td>";
        echo "<td>".$row["first_email"]."</td>";
        echo "<td>".$row["second_Guarantor_Name"]."</td>";
        echo "<td>".$row["second_Guarantor_contact"]."</td>";
        echo "<td>".$row["second_email"]."</td>";
        echo "<td>".$row["loan_type"]."</td>";
        echo "<td>".$row["Loan_amount"]."</td>";
        echo "<td>".$row["Duration"]."</td>";
        echo "<td>".$row["Monthly_salary"]."</td>";
        echo "<td>".$row["status"]."</td>";

        
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
mysqli_close($conn);
?>



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
    <p>Saccos are a major boost to make your maximizing on your savings. Visit any of the saccos close to you and start saving now.</p>
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