

 
 <!DOCTYPE html>
<html>
<head>
<title></title>
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
               <li><a href="home.php">Home</a></li>
               <li><a href="aboutus.php">About Us</a></li>
               <li><a href="contact.php">Contact</a></li>
               <li class="current"><a href="signup.php">SIGN UP</a></li>
               <li><a href="login.php">LOG IN</a></li>

            </ul>
           </nav>1`
           </div>
    </header>
    <div id="signin">
<form action="signup.php" method="post" style="text-align: center;background-color: #ffffff;margin: solid;"><br>

<h1 style="font-family: cursive;text-align: center;position: center;margin-bottom: 2px;">Sign up</h1>


  
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
  
  <button type="submit" class="btn btn-default">SIGN UP</button><br><br>
</form>
</div>
<footer>
  <p>Member sign up, Copyright &copy; 2019</p>

</footer>

</body>
</html>