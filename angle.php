
<div class="container-fluid">
<div class="row">
<div class="col-sm-3">

</div>
<?php
error_reporting(0);
$x=$_POST['one'];
$con1=$_POST['three'];
$con2=$_POST['four'];

if($con1=='Degree')
{    if($con2=='Degree')
	{   
		$z=$x;
	}
	else  if($con2=='Radian')
	{    
		$z=($x*0.017453);
	}
	else  if($con2=='Gradian')
	{   
		$z=($x*1.111111);
	}
	
}

else if($con1=='Radian')
{    if($con2=='Degree')
	{   
		$z=($x*57.29578);
	}
	else  if($con2=='Radian')
	{   
		$z=($x);
	}
	else  if($con2=='Gradian')
	{   
		$z=($x*63.66198);
	}
	
}

else if($con1=='Gradian')
{    if($con2=='Degree')
	{   
		$z=($x*0.9);
	}
	else  if($con2=='Radian')
	{   
		$z=($x*0.015708);
	}
	else  if($con2=='Gradian')
	{   
		$z=($x);
	}
	
}



?>
<div class="col-sm-6">
<center><hr>
<form  class="form-inline " action="angle.php" method="POST"><div class="form-title-row">
                <h3>Conversion - Angle</h3>
            </div><hr><br>
<label>Enter Angle :&nbsp;&nbsp;&nbsp;</label><input type="number"class="form-control" name="one" value="<?php echo @$x; ?>" placeholder="&nbsp;&nbsp;Enter a number" required="required">&nbsp;&nbsp;&nbsp;<br><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select name="three"class="form-control">
<option <?php if($con1=='Degree') echo'selected="selected"'; ?>>Degree</option>
<option <?php if($con1=='Radian') echo'selected="selected"'; ?>>Radian</option>
<option <?php if($con1=='Gradian') echo'selected="selected"'; ?>>Gradian</option>

</select><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TO<br><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<select name="four" class="form-control">
<option <?php if($con2=='Degree') echo'selected="selected"'; ?>>Degree</option>
<option <?php if($con2=='Radian') echo'selected="selected"'; ?>>Radian</option>
<option <?php if($con2=='Gradian') echo'selected="selected"'; ?>>Gradian</option>

</select><br><br>
<label>&nbsp;&nbsp;&nbsp;&nbsp;Your Result :&nbsp;&nbsp;&nbsp;</label><input type="number"class="form-control" name="two" value="<?php echo @$z;?>" placeholder="&nbsp;&nbsp;Your Result" disabled>&nbsp;&nbsp;&nbsp;<br><br>
<hr><button type="submit" name="submit" class="btn btn-default" >
                	<i class="glyphicon glyphicon-refresh"></i> &nbsp; Convert
            </button><hr>
</form>
<br><br></div>
<div class="col-sm-3">

</div>
</center>

</body>
</html>
















