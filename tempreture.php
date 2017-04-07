
<div class="container-fluid">
<div class="row">
<div class="col-sm-3">

</div>
<?php
error_reporting(0);
$x=$_POST['one'];
$con1=$_POST['three'];
$con2=$_POST['four'];

if($con1=='Celsius')
{    if($con2=='Celsius')
	{   
		$z=$x;
	}
	else  if($con2=='Fahrenheit')
	{    
		$z=((($x*180)/100)+32);
	}
	else  if($con2=='Kelvin')
	{   
		$z=((($x*100)/100)+273.15);
	}
	
}

else if($con1=='Fahrenheit')
{    if($con2=='Celsius')
	{   
		$z=((($x-32)/180)*100);
	}
	else  if($con2=='Fahrenheit')
	{   
		$z=($x);
	}
	else  if($con2=='Kelvin')
	{   
		$z=(((($x-32)/180)*100)+273.15);
	}
	
}

else if($con1=='Kelvin')
{    if($con2=='Celsius')
	{   
		$z=((($x-273.15)/100)*100);
	}
	else  if($con2=='Fahrenheit')
	{   
		$z=(((($x-32)/180)*100)+273.15);
	}
	else  if($con2=='Kelvin')
	{   
		$z=($x);
	}
	
}



?>
<div class="col-sm-6">
<center><hr>
<form  class="form-inline "action="tempreture.php" method="POST"><div class="form-title-row">
                <h3>Conversion - Tempreture</h3>
            </div><hr><br>
<label>Enter Tempreture :&nbsp;&nbsp;&nbsp;</label><input type="number" class="form-control"name="one" value="<?php echo @$x; ?>" placeholder="&nbsp;&nbsp;Enter a number" required="required">&nbsp;&nbsp;&nbsp;<br><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select name="three"class="form-control">
<option <?php if($con1=='Celsius') echo'selected="selected"'; ?>>Celsius</option>
<option <?php if($con1=='Fahrenheit') echo'selected="selected"'; ?>>Fahrenheit</option>
<option <?php if($con1=='Kelvin') echo'selected="selected"'; ?>>Kelvin</option>

</select><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TO<br><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<select name="four"class="form-control" >
<option <?php if($con2=='Celsius') echo'selected="selected"'; ?>>Celsius</option>
<option <?php if($con2=='Fahrenheit') echo'selected="selected"'; ?>>Fahrenheit</option>
<option <?php if($con2=='Kelvin') echo'selected="selected"'; ?>>Kelvin</option>

</select><br><br>
<label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Your Result :&nbsp;&nbsp;&nbsp;</label><input class="form-control"type="number" name="two" value="<?php echo @$z;?>" placeholder="&nbsp;&nbsp;Your Result" disabled>&nbsp;&nbsp;&nbsp;<br><br>
<hr><button type="submit" name="submit" class="btn btn-default" >
                	<i class="glyphicon glyphicon-refresh"></i> &nbsp; Convert
            </button>
<hr></form>
<br><br></div>
<div class="col-sm-3">

</div>

</center>
 </div></div>

</body>
</html>
















