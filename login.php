<!DOCTYPE html>
<html>
<head>
<title>login</title>
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
               <li><a href="signup.php">SIGN UP</a></li>
               <li class="current"><a href="login.php">LOG IN</a></li>

               

            </ul>
           </nav>1`
           </div>
    </header>

<h1 style="font-family: cursive;text-align: center;">Log in</h1>


<form style="text-align: center;background-color: #ffffff;"  method="POST" action="loginlink.php">

  Email:<input style="border-radius: 4px" type="email" name="email" required="email" placeholder="Email"><br><br>
  Password:<input style="border-radius: 4px" type="password" name="password" required="password" placeholder="Password"><br><br>
 
  <button type="submit" class="btn btn-default">LOG IN</button><br><br>
</form>

<footer>
  <p>Member Log in, Copyright &copy; 2019</p>

</footer>

</body>
</html>
