<?php


  


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cal";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

if(isset($_REQUEST['send']))
{

$name=$_REQUEST['name'];
$email=$_REQUEST['email'];
$username=$_REQUEST['username'];
$password=$_REQUEST['password'];
$repassword=$_REQUEST['repassword'];

    if($password==$repassword){
				 $sql = "INSERT INTO signup(sname, semail,username)
                VALUES ('$name', '$email','$username')";
				$conn->query($sql);
				 
                  $sql1 = "INSERT INTO registration(username,password)
                VALUES ('$username','$password')";
				$conn->query($sql1); 
                
	}

 header("location:login.php");
}

$conn->close();
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
  body{background-color:black;
         }
		 #rcorners{border-radius:25px;
		 border:2px solid;
		 padding:20px;
		 width:480px;
		 height:500px;}
		 .error {color: #FF0000;}
  </style>
</head>
<body>
<body id="myPage">
<nav class="navbar navbar-inverse navbar-fixed-top" data-offset-top="197">
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
        
		<li><a href="aboutus.php">About us</a></li>
        
      </ul>
	  <ul class="nav navbar-nav navbar-right">
      
      <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
    </div>
  </div>
</nav>
  <br><br><br><br><br><br><br><br><br>

<div class="container-fluid">
<div class="col-sm-4"></div>
<div class="col-sm-4" style="background-color:#C0C0C0;" id="rcorners"><br>
  <h2>SIGN UP</h2><br>
  <form class="form-horizontal" role="form" >
    <div class="form-group">
      <label class="control-label col-sm-2" for="name">Name:</label>
      <div class="col-sm-10">
        <input type="Text" class="form-control" name="name" id="name" placeholder="Enter Name"required />
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Email:</label>
      <div class="col-sm-10">
        <input type="email" class="form-control" name="email" id="email" placeholder="Enter email"required />
      </div>
    </div>
	
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
        <input type="password" class="form-control" name="password" id="password" placeholder="Enter password"required />
      </div>
    </div>
	
   <div class="form-group">
   <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" name="send" class="btn btn-default" onClick="Submit()">
                	<i class="glyphicon glyphicon-log-in"></i> &nbsp; SIGN UP
            </button>
        </div>
     </div>		
      	<br />
            <label>Have an account ! <a href="login.php">&nbsp;LOG IN</a></label>
				<br />
  </form>
</div></div><div class="col-sm-4"></div><br><br><br><br><br>
 <footer class="container-fluid bg-4 text-center">
 <a class="up-arrow" href="#myPage" data-toggle="tooltip" title="TO TOP">
    <span class="glyphicon glyphicon-chevron-up"></span>
	
  </a><br><br>
  
<font color="#B9B9B9"><p>Copyright ©  <?php echo date("Y")?> Study Forum.com</p> </font>
</footer>

</body>
</html>

