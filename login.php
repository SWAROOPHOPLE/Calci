<?php
error_reporting(0);
session_start(); // Starting Session
$error=''; // Variable To Store Error Message
if (isset($_POST['submit'])) {
if (empty($_POST['username']) || empty($_POST['password'])) {
$error = "Username or Password is invalid";
}
else
{
// Define $username and $password
$username=$_POST['username'];
$password=$_POST['password'];
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$connection = mysql_connect("localhost", "root", "");
// To protect MySQL injection for Security purpose
$username = stripslashes($username);
$password = stripslashes($password);
$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);
// Selecting Database
$db = mysql_select_db("cal", $connection);
// SQL query to fetch information of registerd users and finds user match.
$query = mysql_query("select * from registration where password='$password' AND username='$username'", $connection);
$rows = mysql_num_rows($query);



$sql = mysql_query("SELECT * FROM signup WHERE username = '$username'", $connection);
$count = mysql_num_rows($sql);


}
}

if(isset($_SESSION['login_user'])){
header("location:download.php");
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
 <title>swaroophople.com</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <style> .bg-4 { 
      background-color: #2f2f2f; /* Black Gray */
      color: #fff;
	   padding-top: 40px;
      padding-bottom: 40px;
  }
 body{background-color:#f8f8f8;
 }
         
		 #rcorners{border-radius:25px;
		 border:2px solid;
		 padding:20px;
		 width:480px;
		 height:500px;}
  </style>
  
</head>
<body>
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
		   echo"<li><a href='logout.php'><span class='glyphicon glyphicon-user'></span>Logout</a></li>";}
        else {
	       echo"<li><a href='signup.php'><span class='glyphicon glyphicon-user'></span> Sign Up</a></li>
	    ";
	   
      }
      ?>
     </ul>
    </div>
  </div>
</nav>

  <br><br><br>

<div class="container-fluid">
<div class="col-sm-4"></div>
<div class="col-sm-4"  id="rcorners">
<?php if ($_SERVER["REQUEST_METHOD"] == "POST"){
if ($rows == 1) {
$_SESSION['login_user']=$username; // Initializing Session
header("location:download.php"); // Redirecting To Other Page
} 

else {
	 if($count==1)
	 {
		 echo"<font color='red'><center><b>Wrong Password</b></center></font>";
		 
	 }
	 else echo"<font color='red'><center><b>User doesnot exist and <br>Please SIGN UP</b></center></font>";	 
	 
	 
	 
	 

}}?>

<hr>
  <h2>LOG IN</h2><br>
  <form class="form-horizontal" role="form" action="" method="post" >
  
   <div class="form-group">
   <label class="control-label col-sm-2" for="username">Username:</label>
   <div class="col-sm-10">
        <input type="text" class="form-control" name="username" id="username" placeholder="Username" required />
        <span id="check-e"></span>
        </div>
		</div>
  
  
    
    <div class="form-group">
      <label class="control-label col-sm-2" for="password">Password:</label>
      <div class="col-sm-10">
        <input type="password" class="form-control" id="password" name="password" placeholder="Enter password" required />
      </div>
    </div>
    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <div class="checkbox">
          <label><input type="checkbox"> Remember me</label>
        </div>
      </div>
    </div>
   <div class="form-group">
   <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" name="submit" class="btn btn-default">
                	<i class="glyphicon glyphicon-log-in"></i> &nbsp; SIGN UP
            </button>
        </div>
     </div>		
	
	
      	<br />
            <label>Don't have an account yet ! &nbsp;<a href="signup.php">Sign Up</a></label>
			<label>Forgot password ???  &nbsp;<a href="forgot.php">Click Here...!!!</a></label>
				<br /><hr>
  </form>
</div><div class="col-sm-4"></div></font></div>

<br><br><br><br><br>
 <footer class="container-fluid bg-4 text-center">
 <a class="up-arrow" href="#myPage" data-toggle="tooltip" title="TO TOP">
    <span class="glyphicon glyphicon-chevron-up"></span>
	
  </a><br><br>
  
<font color="#B9B9B9"><p>Copyright ©  <?php echo date("Y")?> Study Forum.com</p> </font>
</footer>
</body>
</html>

