

<?php 


$id = "";
$first_name = "";
$last_name = "";
$email = "";
$contact = "";
$first_Guarantor_Name= "";
$first_Guarantor_contact= "";
$first_email= "";
$second_Guarantor_Name= "";
$second_Guarantor_contact= "";
$second_email= "";
$loan_type="";
$Loan_amount= "";
$Duration="";
$Monthly_salary= "";
$status= "";


try{

$conn = new mysqli ('localhost' , 'root' , '' , 'digi_saccco');
} catch (Exception $ex)  {
  echo "Error";
}

function getposts()
{
  $posts = array();
  $posts[0] = $_POST['id'];
  $posts[1] = $_POST['first_name'];
  $posts[2] = $_POST['last_name'];
  $posts[3] = $_POST['email'];
  $posts[4] = $_POST['contact'];
  $posts[5] = $_POST['first_Guarantor_Name'];
  $posts[6] = $_POST['first_Guarantor_contact'];
  $posts[7] = $_POST['first_email'];
  $posts[8] = $_POST['second_Guarantor_Name'];
  $posts[9] = $_POST['second_Guarantor_contact'];
  $posts[10] = $_POST['second_email'];
  $posts[11] = $_POST['loan_type'];
  $posts[12] = $_POST['Loan_amount'];
  $posts[13] = $_POST['Duration'];
  $posts[14] = $_POST['Monthly_salary'];
  $posts[14] = $_POST['status'];
  return $posts;
}

//search

if (isset($_POST['search']))
 {
  $data = getposts();

  $search_Query = "SELECT * FROM loan_application WHERE id = $data[0] "; 

  $search_Result = mysqli_query($conn, $search_Query);

  if($search_Result)
  {
    if(mysqli_num_rows ($search_Result))
    {
      while ($row = mysqli_fetch_array($search_Result))
       {
        $id = $row['id'];
        $first_name = $row['first_name'];
        $last_name = $row['last_name'];
        $email = $row['email'];
        $contact = $row['contact'];
        $first_Guarantor_Name = $row['first_Guarantor_Name'];
        $first_Guarantor_contact = $row['first_Guarantor_contact'];
        $first_email = $row['first_email'];
        $second_Guarantor_Name = $row['second_Guarantor_Name'];
        $second_Guarantor_contact = $row['second_Guarantor_contact'];
        $second_email = $row['second_email'];
        $loan_type = $row['loan_type'];
        $Loan_amount = $row['Loan_amount'];
        $Duration = $row['Duration'];
        $Monthly_salary = $row['Monthly_salary'];
        $status = $row['status'];
      }
    }else{
      echo "There is no data for this id!!";
    }
  }else{
    echo "Results error";
  }
}

 ?>

 <!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width">
   <meta name="descrption" content="Easy loan application">
   <meta name="keywords" content="loan, loan application">
   <meta name="author" content="Dennis Mureti">


  <title>View specific</title>
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
               <li><a href="signup.php">Add member</a></li>
               <li><a href="retreivemember.php">View member</a></li>
               <li><a href="retreive.php">View applications</a></li>
               <li><a href="changedloanapplication.php">view modified</a></li>
               <li  class="current"><a href="managerfind.php">View specific</a></li>
               <li><a href="managerlogout.php">LOG OUT</a></li>

            </ul>
           </nav>
           </div>
    </header>


 <form style="text-align: center; font-weight: bold;border-style: double;" action="managerfind.php" method="post">
 <h1 style="font-family: cursive;text-align: center;">Loan Application</h1>

<h2 style="text-align: center; font-family: italic;">Kindly input member loan id to view application</h2>

 <input type="number" name="id" placeholder="id" value="<?php echo $id; ?>"><br><br>
 First Name: <input type="text" name="first_name" value="<?php echo $first_name;?>">
 Last Name: <input type="text" name="last_name"  value="<?php echo $last_name;?>" ><br><br>
 Email: <input type="email" name="email"  value="<?php echo $email;?>" >
 Contact: <input type="number" name="contact"  value="<?php echo $contact;?>" ><br><br>
 First Guarantor Name: <input type="text" name="first_Guarantor_Name"  value="<?php echo $first_Guarantor_Name;?>" >
 First Guarantor Contact: <input type="number" name="first_Guarantor_contact"  value="<?php echo "$first_Guarantor_contact";?>" >
 First Guarantor Email: <input type="email" name="first_email"  value="<?php echo $first_email;?>" ><br><br>
 Second Guarantor Name: <input type="text" name="second_Guarantor_Name"  value="<?php echo $second_Guarantor_Name;?>" >
 Second Guarantor Contact: <input type="number" name="second_Guarantor_contact"  value="<?php echo $second_Guarantor_contact;?>">
 Second Guarantor Email: <input type="email" name="second_email"  value="<?php echo $second_email;?>"><br><br>
 Loan Type: <input type="text" name="loan_type"  value="<?php echo $loan_type;?>" >
 Loan Amount: <input type="number" name="Loan_amount"  value="<?php echo $Loan_amount;?>">
 Duration of payment: <input type="number" name="Duration"  value="<?php echo $Duration;?>"><br><br>
 Monthly Salary: <input type="number" name="Monthly_salary"  value="<?php echo $Monthly_salary;?>"><br><br>
 Status: <input type="text" name="status"  value="<?php echo $status;?>"><br><br>



<div>
  <input type="submit" name="search" value="View">

</div>
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
  <p>View application, Copyright &copy; 2019</p>

</footer>
</body>
</html>