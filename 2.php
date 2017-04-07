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
   <style> .bg-4 { 
      background-color: #2f2f2f; /* Black Gray */
      color: #fff;
	   padding-top: 40px;
      padding-bottom: 40px;
  }body{background-color:#f8f8f8;
  background-image:url(s5.jpg);
  background-repeat:no-repeat;
  background-position:0px 0px;
  background-size:2966px 1080px;}
 
  
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
      
    </ul>
    </div>
  </div>
</nav>
  <br><br><br>

 


<font color="#b6b6b4" face="Georgia" size=3 >



<font color="" face="Georgia" size=3 >
<div class="container-fluid bg-3 text-center">
  <h3 class="margin">Where To Find What?</h3><br>
  <div class="row"><center>
    <div class="col-sm-4">
      <b><h3>Conversions</h3></b><p>This section contains the conversions like length, weight, mass, tempreture, etc</p>
      <button type="button" class="btn btn-info"><a href="conversion_length.php"><font color="#2f2f2f">Conversions</font></a></button>
    </div>
    <div class="col-sm-4">
      <b><h3>Calculators</h3></b><p>This section contains the calculators like standard, scientific, programmers, etc</p>
      <button type="button" class="btn btn-info"><a href="calculator_standard.php"><font color="#2f2f2f">Calculators</font></a></button>
    </div>
    <div class="col-sm-4">
      <b><h3>Downloads</h3></b><p>This section contains the source code of all project and all individually</p>
      <button type="button" class="btn btn-info"><a href="login.php"><font color="#2f2f2f">Download Source code</font></a></button>
    </div></center>
  </div>
</div>

<br><br><br><div  class="container"><center>
  <h3>About Website</h3><br><br>
  <p>This website is all about conversions and calculators such as standard,programmers,etc.</p>
  <p>The downloads contain the source code of the whole project as well as subunits also</p>
</center></div>
</font></font>

  <br><br><br><br><br><br><br><br><br>
 <footer class="container-fluid bg-4 text-center">
 <a class="up-arrow" href="#myPage" data-toggle="tooltip" title="TO TOP">
    <span class="glyphicon glyphicon-chevron-up"></span>
	
  </a><br><br>
  
<p>Copyright ©  <?php echo date("Y")?> Study Forum.com</p> 
</footer>
</body>
</html>
















