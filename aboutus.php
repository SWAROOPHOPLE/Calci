<?php
error_reporting(0);
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$connection = mysql_connect("localhost", "root", "");
// Selecting Database
$db = mysql_select_db("cal", $connection);
session_start();// Starting Session
// Storing Session
$user_check=$_SESSION['login_user'];
// SQL Query To Fetch Complete Information Of User
$ses_sql=mysql_query("select username from registration where username='$user_check'", $connection);
$row = mysql_fetch_assoc($ses_sql);
$login_session =$row['username'];

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>swaroophople.com</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<style type="text/css">
body{background-color:#f8f8f8;
  }

</style>
<style> .bg-4 { 
      background-color: #2f2f2f; /* Black Gray */
      color: #fff;
	   padding-top: 40px;
      padding-bottom: 40px;
  }
</style>
  </head>
<body id="myPage">
<nav class="navbar navbar-inverse navbar-fixed-top navbar navbar-light" style="background-color:#2f2f2f" data-offset-top="197">
  <div class="container-fluid">
    <div class="navbar-header">
<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Study Forum</a>
	  
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li ><a href="2.php">Home</a></li>
        <li class="dropdown ">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Converters
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="conversion_length.php">Length</a></li>
            <li><a href="conversion_weightandmass.php">Weight and Mass</a></li>
            <li><a href="conversion_tempreture.php">Tempreture</a></li>
            <li><a href="conversion_energy.php">Energy</a></li>
            <li><a href="conversion_time.php">Time</a></li> 			
            <li><a href="conversion_angle.php">Angle</a></li> 			
            <li><a href="conversion_pressure.php">Pressure</a></li> 			
 			
          </ul>
        </li>
		<li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Calculators
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="calculator_standard.php">Standard Calculator</a></li>
            <li><a href="calculator_scientific.php">Scientific Calculator</a></li>
            <li><a href="calculator_dectoall.php">Decimal to All* Calculator</a></li>
            <li><a href="calculator_bintoall.php">Binary to All* Calculator</a></li>
            <li><a href="calculator_hextoall.php">Hexadecimal to All* Calculator </a></li> 			
            <li><a href="calculator_octtoall.php">Octal to All* Calculator</a></li> 			
 			 <h6><b><br>&nbsp;* All <br>&nbsp;&nbsp;&nbsp;= Hexadecimal , Octal , Binary <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Decimal
 			</b></h6>
          </ul>
        </li>
         <li><a href="login.php">Download Source Code</a></li>
		<li><a href="aboutus.php">About us</a></li>
        
      </ul>
	  <ul class="nav navbar-nav navbar-right">
        
        
		
		<?php
 	
   if(isset($_SESSION['login_user']))
	{
		echo"<li><a href='logout.php'><span class='glyphicon glyphicon-user'></span>&nbsp;Logout $login_session </a></li>";}
   else {
	    echo"<li><a href='signup.php'><span class='glyphicon glyphicon-user'></span> Sign Up</a></li>
	    <li><a href='login.php'><span class='glyphicon glyphicon-log-in'></span> Login</a></li>";
	   
	   
   }
   
   

   ?>
		
      </ul>
    </div>
  </div>
</nav>
  <br><br><br>
<div class="container">
<div class="row" >
<div class="col-sm-3" ><font color="black" face="Georgia" size=3><center><div class="form-title-row">
                <hr><h3>About Developer</h3>
            </div><hr><center>
			<img src="ceo.jpg" class="img-circle" alt="Swaroop Hople" width="204" height="236" style="padding:10px; background-color:;"></center><center><br><b>Swaroop Hople</b><br><br>Currently , the developer is studying in<br>
 TY B.TECH<br>[Information Technology]<br> in VJTI.<br> He is fond of coding and PHP mainly.<br>Here is his first official site.</center> 
</font></center></div>

<div class="col-sm-6">
<hr><center><font color="black" face="Georgia" size=3>
<div class="form-title-row">
                <h3>Our Aim</h3>
            </div><hr><br><em>We love Coding !</em>
 <h3><b>We make life easier...!!!</b></h3><br>
<br><b>It always seems impossible until its done.<br> And Finally it's done.. :)</b><br><br>
<br><br>Hiiii, as the web based world is rising we are unable to find some basic functionalities from the giant web based world so here is our website for some basic terminological contents
we assure you as per our best knowledge the site is good to use ,we request you , if anyone find any bugs in the website we congratulate you to mail to us so we can improve our work.

<br><br><br><b>Thank You for visiting our site...!!!</b><br><br><b>Have a good day..!!!</b> 
<br><br></center></font>
</div>
<div class="col-sm-3" ><center><font color="black" face="Georgia" size=3>
<div class="form-title-row"><hr>
                <h3>Contact Us</h3>
            </div><hr><br>
<br><br>Swaroop Hople<br>
	<br>Mob no:+918767320103<br><br>hopleswaroop@gmail.com	
 </font></center></div>
 
 
 </div>
 </div>
 <footer class="container-fluid bg-4 text-center">
 <a class="up-arrow" href="#myPage" data-toggle="tooltip" title="TO TOP">
    <span class="glyphicon glyphicon-chevron-up"></span>
	
  </a><br><br>
  
<font color="#B9B9B9"><p>Copyright ©  <?php echo date("Y")?> Study Forum.com</p> </font>
</footer>
</body>
</html>
















