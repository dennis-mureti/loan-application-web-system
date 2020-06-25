
<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width">
   <meta name="descrption" content="Easy loan application">
   <meta name="keywords" content="loan, loan application">
   <meta name="author" content="Dennis Mureti">


  <title>loan application</title>
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
               <li ><a href="home.php">Home</a></li>
               <li><a href="aboutus.php">About Us</a></li>
               <li><a href="contact.php">Contact</a></li>
               <li class="current"><a href="loanapplication.php">APPLY lOAN</a></li>
               <li><a href="find.php">View application</a></li>
               <li><a href="logout.php">LOG OUT</a></li>

            </ul>
           </nav>
           </div>
    </header>



<form style="text-align: center;background-color: #ffffff; font-weight: bold; font-size: 18px;border-style: double;"  method="POST" action="applicationlink.php">

<h1 style="font-family: cursive;text-align: center;">Loan Application</h1>
<h2 style="font-weight: normal; font-size: 13px;">Fill in all the feilds in the form below and be attentive on the data that you  input for you cant update. We advice you to be free from any disturbance while filling this form. Thank you</h2>
  First Name:<input style="width: 400px; border-radius: 4px;" type="text" name="first_name" required="first_name">
  Last Name:<input  style="width: 400px; border-radius: 4px;" type="text" name="last_name" required="last_name"><br><br>
  Email:<input  style="width: 400px; border-radius: 4px;" type="email" name="email" required="email">
  Contact:<input  style="width: 400px; border-radius: 4px;" type="number" name="contact" required="contact"><br><br>
  First Guarantor Name:<input  style="width: 200px; border-radius: 4px;" type="text" name="first_Guarantor_name" required="first_Guarantor_name">
  First Guarantor contact:<input  style="width: 200px; border-radius: 4px;" type="number" name="first_Guarantor_contact" required="first_Guarantor_contact">
  First Guarantor Email:<input  style="width: 200px; border-radius: 4px;" type="email" name="first_email" required="first_email"><br><br>

  Second Guarantor Name:<input  style="width: 180px; border-radius: 4px;" type="text" name="second_Guarantor_name" required="second_Guarantor_name">
  Second Guarantor contact:<input  style="width: 180px; border-radius: 4px;" type="number" name="second_Guarantor_contact" required="second_Guarantor_contact">
  Second Guarantor Email:<input  style="width: 160px; border-radius: 4px;" type="email" name="second_email" required="second_email"><br><br>
  Loan type:<input  style="width: 300px; border-radius: 4px;" type="text" name="loan_type" required="loan_type">
  Loan Amount:<input  style="width: 300px; border-radius: 4px;" type="number" name="Loan_amount" required="Loan_amount">
  Duration in Months:<input  style="width: 200px; border-radius: 4px;" type="number" name="Duration" required="Duration"><br><br>
  Monthly salary:<br><input  style="width: 800px; border-radius: 4px;" type="number" name="Monthly_salary" required="Monthly_salary"><br><br>


  <button style="border-radius: 8px;background-color:skyblue;width: 300px;font-size: 17px;" type="submit" class="btn btn-default">APPLY</button><br><br>
  

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
    <p>For more details on how to use the system.<br> contact: 0708797047<br>Facebook: Digi-SACCO<br>Intagram: digi-SACCO</p>
  </div>
</div>
</section>


<footer>
  <p>Loan application, Copyright &copy; 2019</p>

</footer>
</body>
</html>