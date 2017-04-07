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
<div class="col-sm-3">
<center><hr><div class="form-title-row">
                <h3>Conversions</h3>
            </div><hr><br>
<div class="list-group">
  <a href="conversion_length.php" class="list-group-item ">Length</a>
  <a href="conversion_weightandmass.php" class="list-group-item active">Weight and Mass</a>
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

if($con1=='Milligram')
{    if($con2=='Milligram')
	{   
		$z=$x;
	}
	else  if($con2=='Decagram')
	{    
		$z=($x*0.0001);
	}
	else  if($con2=='Decigram')
	{   
		$z=($x*0.01);
	}
	else  if($con2=='Gram')
	{   
		$z=($x*0.001);
	}
	else  if($con2=='Centigram')
	{   
		$z=($x*0.1);
	}
	else  if($con2=='Hectogram')
	{   
		$z=($x*0.00001);
	}
	else  if($con2=='Kilogram')
	{   
		$z=($x*5280);
	}
	else  if($con2=='Metric tonnes')
	{   
		$z=($x*0.000001);
	}
	else  if($con2=='Ounces')
	{   
		$z=($x*0.000035);
	}
	else  if($con2=='Pounds')
	{   
		$z=($x*0.000002);
	}
}

else if($con1=='Decagram')
{    if($con2=='Milligram')
	{   
		$z=($x*10000);
	}
	else  if($con2=='Decagram')
	{   
		$z=($x);
	}
	else  if($con2=='Decigram')
	{   
		$z=($x*100);
	}
	else  if($con2=='Gram')
	{   
		$z=($x*10);
	}
	else  if($con2=='Centigram')
	{   
		$z=($x*1000);
	}
	else  if($con2=='Hectogram')
	{   
		$z=($x*0.1);
	}
	else  if($con2=='Kilogram')
	{   
		$z=($x*0.01);
	}
	else  if($con2=='Metric tonnes')
	{   
		$z=($x*0.00001);
	}
	else  if($con2=='Ounces')
	{   
		$z=($x*0.35274);
	}
	else  if($con2=='Pounds')
	{   
		$z=($x*0.022046);
	}
}

else if($con1=='Decigram')
{    if($con2=='Milligram')
	{   
		$z=($x*100);
	}
	else  if($con2=='Decagram')
	{   
		$z=($x*0.01);
	}
	else  if($con2=='Decigram')
	{   
		$z=($x);
	}
	else  if($con2=='Gram')
	{   
		$z=($x*0.1);
	}
	else  if($con2=='Centigram')
	{   
		$z=($x*10);
	}
	else  if($con2=='Hectogram')
	{   
		$z=($x*0.001);
	}
	else  if($con2=='Kilogram')
	{   
		$z=($x*0.0001);
	}
	else  if($con2=='Metric tonnes')
	{   
		$z=($x*0.0000001);
	}
	else  if($con2=='Ounces')
	{   
		$z=($x*0.003527);
	}
	else  if($con2=='Pounds')
	{   
		$z=($x*0.00022);
	}
}

else if($con1=='Gram')
{    if($con2=='Milligram')
	{   
		$z=($x*1000);
	}
	else  if($con2=='Decagram')
	{   
		$z=($x*0.1);
	}
	else  if($con2=='Decigram')
	{   
		$z=($x*10);
	}
	else  if($con2=='Gram')
	{   
		$z=($x);
	}
	else  if($con2=='Centigram')
	{   
		$z=($x*100);
	}
	else  if($con2=='Hectogram')
	{   
		$z=($x*0.01);
	}
	else  if($con2=='Kilogram')
	{   
		$z=($x*0.001);
	}
	else  if($con2=='Metric tonnes')
	{   
		$z=($x*0.000001);
	}
	else  if($con2=='Ounces')
	{   
		$z=($x*0.035274);
	}
	else  if($con2=='Pounds')
	{   
		$z=($x*0.002205);
	}
}

else if($con1=='Centigram')
{    if($con2=='Milligram')
	{   
		$z=($x*10);
	}
	else  if($con2=='Decagram')
	{   
		$z=($x*0.001);
	}
	else  if($con2=='Decigram')
	{   
		$z=($x*0.1);
	}
	else  if($con2=='Gram')
	{   
		$z=($x*0.01);
	}
	else  if($con2=='Centigram')
	{   
		$z=($x);
	}
	else  if($con2=='Hectogram')
	{   
		$z=($x*0.0001);
	}
	else  if($con2=='Kilogram')
	{   
		$z=($x*0.00001);
	}
	else  if($con2=='Metric tonnes')
	{   
		$z=($x*0.00000001);
	}
	else  if($con2=='Ounces')
	{   
		$z=($x*0.000353);
	}
	else  if($con2=='Pounds')
	{   
		$z=($x*0.000022);
	}
}

else if($con1=='Hectogram')
{    if($con2=='Milligram')
	{   
		$z=($x*100000);
	}
	else  if($con2=='Decagram')
	{   
		$z=($x*10);
	}
	else  if($con2=='Decigram')
	{   
		$z=($x*0.027778);
	}
	else  if($con2=='Gram')
	{   
		$z=($x*100);
	}
	else  if($con2=='Centigram')
	{   
		$z=($x*10000);
	}
	else  if($con2=='Hectogram')
	{   
		$z=($x);
	}
	else  if($con2=='Kilogram')
	{   
		$z=($x*0.1);
	}
	else  if($con2=='Metric tonnes')
	{   
		$z=($x*0.0001);
	}
	else  if($con2=='Ounces')
	{   
		$z=($x*3.527396);
	}
	else  if($con2=='Pounds')
	{   
		$z=($x*0.220462);
	}
}

else if($con1=='Kilogram')
{    if($con2=='Milligram')
	{   
		$z=($x*1000000);
	}
	else  if($con2=='Decagram')
	{   
		$z=($x*100);
	}
	else  if($con2=='Decigram')
	{   
		$z=($x*10000);
	}
	else  if($con2=='Gram')
	{   
		$z=($x*1000);
	}
	else  if($con2=='Centigram')
	{   
		$z=($x*100000);
	}
	else  if($con2=='Hectogram')
	{   
		$z=($x*10);
	}
	else  if($con2=='Kilogram')
	{   
		$z=($x);
	}
	else  if($con2=='Metric tonnes')
	{   
		$z=($x*0.001);
	}
	else  if($con2=='Ounces')
	{  
		$z=($x*35.27396);
	}
	else  if($con2=='Pounds')
	{   
		$z=($x*2.204623);
	}
}

else if($con1=='Metric tonnes')
{    if($con2=='Milligram')
	{   
		$z=($x*1000000000);
	}
	else  if($con2=='Decagram')
	{   
		$z=($x*100000);
	}
	else  if($con2=='Decigram')
	{   
		$z=($x*10000000);
	}
	else  if($con2=='Gram')
	{   
		$z=($x*1000000);
	}
	else  if($con2=='Centigram')
	{   
		$z=($x*100000000);
	}
	else  if($con2=='Hectogram')
	{   
		$z=($x*10000);
	}
	else  if($con2=='Kilogram')
	{   
		$z=($x*1000);
	}
	else  if($con2=='Metric tonnes')
	{   
		$z=($x);
	}
	else  if($con2=='Ounces')
	{   
		$z=($x*35273.96);
	}
	else  if($con2=='Pounds')
	{   
		$z=($x*2204.623);
	}
}

else if($con1=='Ounces')
{    if($con2=='Milligram')
	{   
		$z=($x*28349.52);
	}
	else  if($con2=='Decagram')
	{   
		$z=($x*2.834952);
	}
	else  if($con2=='Decigram')
	{   
		$z=($x*283.4952);
	}
	else  if($con2=='Gram')
	{   
		$z=($x*28.34952);
	}
	else  if($con2=='Centigram')
	{   
		$z=($x*2864.952);
	}
	else  if($con2=='Hectogram')
	{   
		$z=($x*0.283495);
	}
	else  if($con2=='Kilogram')
	{   
		$z=($x*0.02835);
	}
	else  if($con2=='Metric tonnes')
	{   
		$z=($x*0.000028);
	}
	else  if($con2=='Ounces')
	{   
		$z=($x);
	}
	else  if($con2=='Pounds')
	{   
		$z=($x*0.0625);
	}
}

else if($con1=='Pounds')
{    if($con2=='Milligram')
	{   
		$z=($x*453592.4);
	}
	else  if($con2=='Decagram')
	{   
		$z=($x*45.35924);
	}
	else  if($con2=='Decigram')
	{   
		$z=($x*4535.924);
	}
	else  if($con2=='Gram')
	{   
		$z=($x*453.5924);
	}
	else  if($con2=='Centigram')
	{   
		$z=($x*45359.24);
	}
	else  if($con2=='Hectogram')
	{   
		$z=($x*4.535924);
	}
	else  if($con2=='Kilogram')
	{   
		$z=($x*0.453592);
	}
	else  if($con2=='Metric tonnes')
	{   
		$z=($x*0.000454);
	}
	else  if($con2=='Ounces')
	{   
		$z=($x*16);
	}
	else  if($con2=='Pounds')
	{   
		$z=($x);
	}
}


?>
<div class="col-sm-6">
<center><hr>
<form class="form-inline "action="conversion_weightandmass.php" method="POST"><div class="form-title-row">
                <h3>Conversion - Weight &amp; Mass </h3>
            </div><hr><br>
<label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Enter Weight or Mass :&nbsp;&nbsp;&nbsp;</label><input class="form-control"type="number" name="one" value="<?php echo @$x; ?>" placeholder="&nbsp;&nbsp;Enter a number" required="required">&nbsp;&nbsp;&nbsp;<br><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select name="three"class="form-control">
<option <?php if($con1=='Milligram') echo'selected="selected"'; ?>>Milligram</option>
<option <?php if($con1=='Decagram') echo'selected="selected"'; ?>>Decagram</option>
<option <?php if($con1=='Decigram') echo'selected="selected"'; ?>>Decigram</option>
<option <?php if($con1=='Gram') echo'selected="selected"'; ?>>Gram</option>
<option <?php if($con1=='Centigram') echo'selected="selected"'; ?>>Centigram</option>
<option <?php if($con1=='Hectogram') echo'selected="selected"'; ?>>Hectogram</option>
<option <?php if($con1=='Kilogram') echo'selected="selected"'; ?>>Kilogram</option>
<option <?php if($con1=='Metric tonnes') echo'selected="selected"'; ?>>Metric tonnes</option>
<option <?php if($con1=='Ounces') echo'selected="selected"'; ?>>Ounces</option>
<option <?php if($con1=='Pounds') echo'selected="selected"'; ?>>Pounds</option>
</select><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TO<br><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<select name="four" class="form-control">
<option <?php if($con2=='Milligram') echo'selected="selected"'; ?>>Milligram</option>
<option <?php if($con2=='Decagram') echo'selected="selected"'; ?>>Decagram</option>
<option <?php if($con2=='Decigram') echo'selected="selected"'; ?>>Decigram</option>
<option <?php if($con2=='Gram') echo'selected="selected"'; ?>>Gram</option>
<option <?php if($con2=='Centigram') echo'selected="selected"'; ?>>Centigram</option>
<option <?php if($con2=='Hectogram') echo'selected="selected"'; ?>>Hectogram</option>
<option <?php if($con2=='Kilogram') echo'selected="selected"'; ?>>Kilogram</option>
<option <?php if($con2=='Metric tonnes') echo'selected="selected"'; ?>>Metric tonnes</option>
<option <?php if($con2=='Ounces') echo'selected="selected"'; ?>>Ounces</option>
<option <?php if($con2=='Pounds') echo'selected="selected"'; ?>>Pounds</option>
</select><br><br>
<label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Your Result :&nbsp;&nbsp;&nbsp;</label><input type="number" class="form-control"name="two" value="<?php echo @$z;?>" placeholder="&nbsp;&nbsp;Your Result" disabled>&nbsp;&nbsp;&nbsp;<br><br>
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
















