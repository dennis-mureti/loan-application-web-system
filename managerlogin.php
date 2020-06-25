<!DOCTYPE html>
<html>
<head>
<title>Manager login</title>
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
               <li><a href="managersignup.php">SIGN UP</a></li>
               <li class="current"><a href="managerlogin.php">LOG IN</a></li>
               

            </ul>
           </nav>1`
           </div>
    </header>

<h1 style="font-family: cursive;text-align: center;">Log in</h1>


<form style="text-align: center;background-color: #ffffff;"  method="POST" action="managerloginlink.php">

  Email:<input style="border-radius: 8px" type="email" name="manager_email" required="email"><br><br>
  Password:<input style="border-radius: 8px" type="password" name="password" required="password"><br><br>
 
  <button type="submit" class="btn btn-default">LOG IN</button><br><br>
</form>

<footer>
  <p>Manager Log in, Copyright &copy; 2019</p>

</footer>

</body>
</html>