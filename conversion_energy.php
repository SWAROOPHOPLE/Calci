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
  }body{background-color:#f8f8f8;}
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
<div class="container-fluid">
<div class="row">
<div class="col-sm-3">
 <center><hr><div class="form-title-row">
                <h3>Conversions</h3>
            </div><hr><br>
<div class="list-group">
  <a href="conversion_length.php" class="list-group-item ">Length</a>
  <a href="conversion_weightandmass.php" class="list-group-item">Weight and Mass</a>
  <a href="conversion_tempreture.php" class="list-group-item">Tempreture</a>
  <a href="conversion_energy.php" class="list-group-item active">Energy</a>
  <a href="conversion_time.php" class="list-group-item">Time</a>
  <a href="conversion_angle.php" class="list-group-item">Angle</a>
  <a href="conversion_pressure.php" class="list-group-item">Pressure</a>

  </div> </center>
</div>
<?php
error_reporting(0);
$x=$_POST['one'];
$con1=$_POST['three'];
$con2=$_POST['four'];

if($con1=='Electron Volt')
{    if($con2=='Electron Volt')
	{   
		$z=$x;
	}
	else  if($con2=='Joules')
	{    
		$z=($x*1.602177e-19);
	}
	else  if($con2=='Kilojoules')
	{   
		$z=($x*1.602177e-22);
	}
	else  if($con2=='Thermal Calories')
	{   
		$z=($x*3.829294e-20);
	}
	else  if($con2=='Food Calories')
	{   
		$z=($x*3.829294e-23);
	}
	else  if($con2=='Foot-Pounds')
	{   
		$z=($x*1.181705e-19);
	}
	else  if($con2=='British Thermal Units')
	{   
		$z=($x*1.518570e-22);
	}

}

else if($con1=='Joules')
{    if($con2=='Electron Volt')
	{   
		$z=($x*6.241509e+18);
	}
	else  if($con2=='Joules')
	{   
		$z=($x);
	}
	else  if($con2=='Kilojoules')
	{   
		$z=($x*0.001);
	}
	else  if($con2=='Thermal Calories')
	{   
		$z=($x*0.239006);
	}
	else  if($con2=='Food Calories')
	{   
		$z=($x*0.000239);
	}
	else  if($con2=='Foot-Pounds')
	{   
		$z=($x*0.737562);
	}
	else  if($con2=='British Thermal Units')
	{   
		$z=($x*0.000948);
	}
	
}

else if($con1=='Kilojoules')
{    if($con2=='Electron Volt')
	{   
		$z=($x*6.241509e+21);
	}
	else  if($con2=='Joules')
	{   
		$z=($x*1000);
	}
	else  if($con2=='Kilojoules')
	{   
		$z=($x);
	}
	else  if($con2=='Thermal Calories')
	{   
		$z=($x*239.0057);
	}
	else  if($con2=='Food Calories')
	{   
		$z=($x*0.239006);
	}
	else  if($con2=='Foot-Pounds')
	{   
		$z=($x*737.5621);
	}
	else  if($con2=='British Thermal Units')
	{   
		$z=($x*0.947817);
	}

}

else if($con1=='Thermal Calories')
{    if($con2=='Electron Volt')
	{   
		$z=($x*2.611448e+19);
	}
	else  if($con2=='Joules')
	{   
		$z=($x*4.184);
	}
	else  if($con2=='Kilojoules')
	{   
		$z=($x*0.004184);
	}
	else  if($con2=='Thermal Calories')
	{   
		$z=($x);
	}
	else  if($con2=='Food Calories')
	{   
		$z=($x*0.001);
	}
	else  if($con2=='Foot-Pounds')
	{   
		$z=($x*3.08596);
	}
	else  if($con2=='British Thermal Units')
	{   
		$z=($x*0.003966);
	}

}

else if($con1=='Food Calories')
{    if($con2=='Electron Volt')
	{   
		$z=($x*2.611448e+22);
	}
	else  if($con2=='Joules')
	{   
		$z=($x*4184);
	}
	else  if($con2=='Kilojoules')
	{   
		$z=($x*4.184);
	}
	else  if($con2=='Thermal Calories')
	{   
		$z=($x*1000);
	}
	else  if($con2=='Food Calories')
	{   
		$z=($x);
	}
	else  if($con2=='Foot-Pounds')
	{   
		$z=($x*3085.96);
	}
	else  if($con2=='British Thermal Units')
	{   
		$z=($x*3.965666);
	}
}

else if($con1=='Foot-Pounds')
{    if($con2=='Electron Volt')
	{   
		$z=($x*8.462350e+18);
	}
	else  if($con2=='Joules')
	{   
		$z=($x*1.355818);
	}
	else  if($con2=='Kilojoules')
	{   
		$z=($x*0.001356);
	}
	else  if($con2=='Thermal Calories')
	{   
		$z=($x*0.324048);
	}
	else  if($con2=='Food Calories')
	{   
		$z=($x*0.000324);
	}
	else  if($con2=='Foot-Pounds')
	{   
		$z=($x);
	}
	else  if($con2=='British Thermal Units')
	{   
		$z=($x*0.001285);
	}

}

else if($con1=='British Thermal Units')
{    if($con2=='Electron Volt')
	{   
		$z=($x*6.585142e+21);
	}
	else  if($con2=='Joules')
	{   
		$z=($x*1055.056);
	}
	else  if($con2=='Kilojoules')
	{   
		$z=($x*1.055056);
	}
	else  if($con2=='Thermal Calories')
	{   
		$z=($x*252.1644);
	}
	else  if($con2=='Food Calories')
	{   
		$z=($x*0.252164);
	}
	else  if($con2=='Foot-Pounds')
	{   
		$z=($x*778.1694);
	}
	else  if($con2=='British Thermal Units')
	{   
		$z=($x);
	}
	
}

?>
<div class="col-sm-6">
<center><hr>
<form  class="form-inline " action="conversion_energy.php" method="POST"><div class="form-title-row">
                <h3>Conversion - Energy</h3>
            </div><hr><br>
<label>Enter Energy :&nbsp;&nbsp;&nbsp;</label><input type="number" name="one" class="form-control"value="<?php echo @$x; ?>" placeholder="&nbsp;&nbsp;Enter a number" required="required">&nbsp;&nbsp;&nbsp;<br><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select name="three"class="form-control">
<option <?php if($con1=='Electron Volt') echo'selected="selected"'; ?>>Electron Volt</option>
<option <?php if($con1=='Joules') echo'selected="selected"'; ?>>Joules</option>
<option <?php if($con1=='Kilojoules') echo'selected="selected"'; ?>>Kilojoules</option>
<option <?php if($con1=='Thermal Calories') echo'selected="selected"'; ?>>Thermal Calories</option>
<option <?php if($con1=='Food Calories') echo'selected="selected"'; ?>>Food Calories</option>
<option <?php if($con1=='Foot-Pounds') echo'selected="selected"'; ?>>Foot-Pounds</option>
<option <?php if($con1=='British Thermal Units') echo'selected="selected"'; ?>>British Thermal Units</option>

</select><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TO<br><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<select name="four" class="form-control">
<option <?php if($con2=='Electron Volt') echo'selected="selected"'; ?>>Electron Volt</option>
<option <?php if($con2=='Joules') echo'selected="selected"'; ?>>Joules</option>
<option <?php if($con2=='Kilojoules') echo'selected="selected"'; ?>>Kilojoules</option>
<option <?php if($con2=='Thermal Calories') echo'selected="selected"'; ?>>Thermal Calories</option>
<option <?php if($con2=='Food Calories') echo'selected="selected"'; ?>>Food Calories</option>
<option <?php if($con2=='Foot-Pounds') echo'selected="selected"'; ?>>Foot-Pounds</option>
<option <?php if($con2=='British Thermal Units') echo'selected="selected"'; ?>>British Thermal Units</option>

</select><br><br>
<label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Your Result :&nbsp;&nbsp;&nbsp;</label><input class="form-control"type="number" name="two" value="<?php echo @$z;?>" placeholder="&nbsp;&nbsp;Your Result" disabled>&nbsp;&nbsp;&nbsp;<br><br>
<hr><button type="submit" name="submit" class="btn btn-default" >
                	<i class="glyphicon glyphicon-refresh"></i> &nbsp; Convert
            </button>
<hr></form>
<br><br>
</div>
<div class="col-sm-3">
<center><hr><div class="form-title-row">
                <h3>Calculator</h3>
            </div><hr><br>
<div class="list-group">
            <a href="calculator_standard.php" class="list-group-item ">Standard Calculator</a>
            <a href="calculator_scientific.php" class="list-group-item ">Scientific Calculator</a>
            <a href="calculator_dectoall.php" class="list-group-item ">Decimal to All* Calculator</a>
            <a href="calculator_bintoall.php" class="list-group-item ">Binary to All* Calculator</a>
            <a href="calculator_hextoall.php" class="list-group-item ">Hexadecimal to All* Calculator </a> 			
            <a href="calculator_octtoall.php" class="list-group-item ">Octal to All* Calculator</a> 			
 			<h6><b><br>&nbsp;* All <br>&nbsp;&nbsp;&nbsp;= Hexadecimal , Octal , Binary <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Decimal
 			</b></h6>

  </div> </center>
</div>
</center>
 </div></div>
 <footer class="container-fluid bg-4 text-center">
 <a class="up-arrow" href="#myPage" data-toggle="tooltip" title="TO TOP">
    <span class="glyphicon glyphicon-chevron-up"></span>
	
  </a><br><br>
  
<p>Copyright ©  <?php echo date("Y")?> Study Forum.com</p> 
</footer>
</body>
</html>
















