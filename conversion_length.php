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
<div class="container-fluid">
<div class="row">
<div class="col-sm-3" >
<center><hr><div class="form-title-row">
                <h3>Conversions</h3>
            </div><hr><br>
<div class="list-group" >
  <a href="conversion_length.php" class="list-group-item active">Length</a>
  <a href="conversion_weightandmass.php" class="list-group-item ">Weight and Mass</a>
  <a href="conversion_tempreture.php" class="list-group-item">Tempreture</a>
  <a href="conversion_energy.php" class="list-group-item">Energy</a>
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

if($con1=='Mile')
{    if($con2=='Mile')
	{   
		$z=$x;
	}
	else  if($con2=='Kilometer')
	{    
		$z=($x*1.609344);
	}
	else  if($con2=='Yard')
	{   
		$z=($x*1760);
	}
	else  if($con2=='Meter')
	{   
		$z=($x*1609.344);
	}
	else  if($con2=='Centimeter')
	{   
		$z=($x*160934.4);
	}
	else  if($con2=='Inch')
	{   
		$z=($x*63360);
	}
	else  if($con2=='Foot')
	{   
		$z=($x*5280);
	}
	else  if($con2=='Milimeter')
	{   
		$z=($x*1609344);
	}
}

else if($con1=='Kilometer')
{    if($con2=='Mile')
	{   
		$z=($x*00.621371);
	}
	else  if($con2=='Kilometer')
	{   
		$z=($x);
	}
	else  if($con2=='Yard')
	{   
		$z=($x*1093.613);
	}
	else  if($con2=='Meter')
	{   
		$z=($x*1000);
	}
	else  if($con2=='Centimeter')
	{   
		$z=($x*1000*100);
	}
	else  if($con2=='Inch')
	{   
		$z=($x*39370.08);
	}
	else  if($con2=='Foot')
	{   
		$z=($x*3280.84);
	}
	else  if($con2=='Milimeter')
	{   
		$z=($x*1000000);
	}
}

else if($con1=='Yard')
{    if($con2=='Mile')
	{   
		$z=($x*0.000568);
	}
	else  if($con2=='Kilometer')
	{   
		$z=($x*0.000914);
	}
	else  if($con2=='Yard')
	{   
		$z=($x);
	}
	else  if($con2=='Meter')
	{   
		$z=($x*0.9144);
	}
	else  if($con2=='Centimeter')
	{   
		$z=($x*91.44);
	}
	else  if($con2=='Inch')
	{   
		$z=($x*36);
	}
	else  if($con2=='Foot')
	{   
		$z=($x*3);
	}
	else  if($con2=='Milimeter')
	{   
		$z=($x*914.4);
	}
}

else if($con1=='Meter')
{    if($con2=='Mile')
	{   
		$z=($x*0.000621);
	}
	else  if($con2=='Kilometer')
	{   
		$z=($x*0.001);
	}
	else  if($con2=='Yard')
	{   
		$z=($x*1.093613);
	}
	else  if($con2=='Meter')
	{   
		$z=($x);
	}
	else  if($con2=='Centimeter')
	{   
		$z=($x*100);
	}
	else  if($con2=='Inch')
	{   
		$z=($x*39.37008);
	}
	else  if($con2=='Foot')
	{   
		$z=($x*3.28084);
	}
	else  if($con2=='Milimeter')
	{   
		$z=($x*1000);
	}
}

else if($con1=='Centimeter')
{    if($con2=='Mile')
	{   
		$z=($x*0.000006);
	}
	else  if($con2=='Kilometer')
	{   
		$z=($x*0.00001);
	}
	else  if($con2=='Yard')
	{   
		$z=($x*0.010936);
	}
	else  if($con2=='Meter')
	{   
		$z=($x*0.01);
	}
	else  if($con2=='Centimeter')
	{   
		$z=($x);
	}
	else  if($con2=='Inch')
	{   
		$z=($x*0.393701);
	}
	else  if($con2=='Foot')
	{   
		$z=($x*0.032808);
	}
	else  if($con2=='Milimeter')
	{   
		$z=($x*10);
	}
}

else if($con1=='Inch')
{    if($con2=='Mile')
	{   
		$z=($x*0.000016);
	}
	else  if($con2=='Kilometer')
	{   
		$z=($x*0.000025);
	}
	else  if($con2=='Yard')
	{   
		$z=($x*0.027778);
	}
	else  if($con2=='Meter')
	{   
		$z=($x*0.0254);
	}
	else  if($con2=='Centimeter')
	{   
		$z=($x*2.54);
	}
	else  if($con2=='Inch')
	{   
		$z=($x);
	}
	else  if($con2=='Foot')
	{   
		$z=($x*0.083333);
	}
	else  if($con2=='Milimeter')
	{   
		$z=($x*25.4);
	}
}

else if($con1=='Foot')
{    if($con2=='Mile')
	{   
		$z=($x*0.000189);
	}
	else  if($con2=='Kilometer')
	{   
		$z=($x*0.000305);
	}
	else  if($con2=='Yard')
	{   
		$z=($x*0.333333);
	}
	else  if($con2=='Meter')
	{   
		$z=($x*0.3048);
	}
	else  if($con2=='Centimeter')
	{   
		$z=($x*30.48);
	}
	else  if($con2=='Inch')
	{   
		$z=($x*12);
	}
	else  if($con2=='Foot')
	{   
		$z=($x);
	}
	else  if($con2=='Milimeter')
	{   
		$z=($x*304.8);
	}
}

else if($con1=='Millimeter')
{    if($con2=='Mile')
	{   
		$z=($x*0.00000062137119);
	}
	else  if($con2=='Kilometer')
	{   
		$z=($x*0.000001);
	}
	else  if($con2=='Yard')
	{   
		$z=($x*0.001094);
	}
	else  if($con2=='Meter')
	{   
		$z=($x*0.001);
	}
	else  if($con2=='Centimeter')
	{   
		$z=($x*0.1);
	}
	else  if($con2=='Inch')
	{   
		$z=($x*0.03937);
	}
	else  if($con2=='Foot')
	{   
		$z=($x*0.003281);
	}
	else  if($con2=='Millimeter')
	{   
		$z=($x);
	}
}

?>
<div class="col-sm-6">
<center><hr>
<form class="form-inline "action="conversion_length.php" method="POST"><div class="form-title-row">
                <h3>Conversion - Length</h3>
            </div><hr><br>
<label>&nbsp;&nbsp;&nbsp;&nbsp;Enter Length :&nbsp;&nbsp;&nbsp;</label><input type="number" class="form-control" name="one" value="<?php echo @$x; ?>" placeholder="&nbsp;&nbsp;Enter a number" required="required">&nbsp;&nbsp;&nbsp;<br><br>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select class="form-control" name="three">
<option <?php if($con1=='Mile') echo'selected="selected"'; ?>>Mile</option>
<option <?php if($con1=='Kilometer') echo'selected="selected"'; ?>>Kilometer</option>
<option <?php if($con1=='Yard') echo'selected="selected"'; ?>>Yard</option>
<option <?php if($con1=='Meter') echo'selected="selected"'; ?>>Meter</option>
<option <?php if($con1=='Centimeter') echo'selected="selected"'; ?>>Centimeter</option>
<option <?php if($con1=='Inch') echo'selected="selected"'; ?>>Inch</option>
<option <?php if($con1=='Foot') echo'selected="selected"'; ?>>Foot</option>
<option <?php if($con1=='Millimeter') echo'selected="selected"'; ?>>Millimeter</option>
</select><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TO<br><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<select name="four" class="form-control" >
<option <?php if($con2=='Mile') echo'selected="selected"'; ?>>Mile</option>
<option <?php if($con2=='Kilometer') echo'selected="selected"'; ?>>Kilometer</option>
<option <?php if($con2=='Yard') echo'selected="selected"'; ?>>Yard</option>
<option <?php if($con2=='Meter') echo'selected="selected"'; ?>>Meter</option>
<option <?php if($con2=='Centimeter') echo'selected="selected"'; ?>>Centimeter</option>
<option <?php if($con2=='Inch') echo'selected="selected"'; ?>>Inch</option>
<option <?php if($con2=='Foot') echo'selected="selected"'; ?>>Foot</option>
<option <?php if($con2=='Millimeter') echo'selected="selected"'; ?>>Millimeter</option>
</select><br><br>
<label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Your Result :&nbsp;&nbsp;&nbsp;</label><input type="number" class="form-control" name="two" value="<?php echo @$z;?>" placeholder="&nbsp;&nbsp;Your Result" disabled>&nbsp;&nbsp;&nbsp;<br><br>
<hr><button type="submit" name="submit" class="btn btn-default" >
                	<i class="glyphicon glyphicon-refresh"></i> &nbsp; Convert
            </button>
<hr></form>
<br><br></div>
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

  </div> <h6><b><br>&nbsp;* All <br>&nbsp;&nbsp;&nbsp;= Hexadecimal , Octal , Binary <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Decimal
 		</b></h6>
</center>
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
















