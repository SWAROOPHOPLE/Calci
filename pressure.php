
<div class="container-fluid">
<div class="row">
<div class="col-sm-3">

</div>
<?php
error_reporting(0);
$x=$_POST['one'];
$con1=$_POST['three'];
$con2=$_POST['four'];

if($con1=='Atmosphere')
{    if($con2=='Atmosphere')
	{   
		$z=$x;
	}
	else  if($con2=='Bars')
	{    
		$z=($x*1.01325);
	}
	else  if($con2=='Millimeters of mercury')
	{   
		$z=($x*760.1275);
	}
	else  if($con2=='Pascal')
	{   
		$z=($x*101325);
	}

}

else if($con1=='Bars')
{    if($con2=='Atmosphere')
	{   
		$z=($x*0.986923);
	}
	else  if($con2=='Bars')
	{   
		$z=($x);
	}
	else  if($con2=='Millimeters of mercury')
	{   
		$z=($x*750.1875);
	}
	else  if($con2=='Pascal')
	{   
		$z=($x*100000);
	}

}

else if($con1=='Millimeters of mercury')
{    if($con2=='Atmosphere')
	{   
		$z=($x*0.001316);
	}
	else  if($con2=='Bars')
	{   
		$z=($x*0.001333);
	}
	else  if($con2=='Millimeters of mercury')
	{   
		$z=($x);
	}
	else  if($con2=='Pascal')
	{   
		$z=($x*133.3);
	}

}

else if($con1=='Pascal')
{    if($con2=='Atmosphere')
	{   
		$z=($x*0.00001);
	}
	else  if($con2=='Bars')
	{   
		$z=($x*0.00001);
	}
	else  if($con2=='Millimeters of mercury')
	{   
		$z=($x*0.007502);
	}
	else  if($con2=='Pascal')
	{   
		$z=($x);
	}

}


?>
<div class="col-sm-6">
<center><hr>
<form class="form-inline " action="pressure.php" method="POST"><div class="form-title-row">
                <h3>Conversion - Pressure</h3>
            </div><hr><br>
<label>Enter Pressure :&nbsp;&nbsp;&nbsp;</label><input type="number" name="one" class="form-control"value="<?php echo @$x; ?>" placeholder="&nbsp;&nbsp;Enter a number" required="required">&nbsp;&nbsp;&nbsp;<br><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select class="form-control"name="three">
<option <?php if($con1=='Atmosphere') echo'selected="selected"'; ?>>Atmosphere</option>
<option <?php if($con1=='Bars') echo'selected="selected"'; ?>>Bars</option>
<option <?php if($con1=='Millimeters of mercury') echo'selected="selected"'; ?>>Millimeters of mercury</option>
<option <?php if($con1=='Pascal') echo'selected="selected"'; ?>>Pascal</option>

</select><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TO<br><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<select name="four"class="form-control" >
<option <?php if($con2=='Atmosphere') echo'selected="selected"'; ?>>Atmosphere</option>
<option <?php if($con2=='Bars') echo'selected="selected"'; ?>>Bars</option>
<option <?php if($con2=='Millimeters of mercury') echo'selected="selected"'; ?>>Millimeters of mercury</option>
<option <?php if($con2=='Pascal') echo'selected="selected"'; ?>>Pascal</option>

</select><br><br>
<label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Your Result :&nbsp;&nbsp;&nbsp;</label><input type="number" class="form-control"name="two" value="<?php echo @$z;?>" placeholder="&nbsp;&nbsp;Your Result" disabled>&nbsp;&nbsp;&nbsp;<br><br>
<hr><button type="submit" name="submit" class="btn btn-default" >
                	<i class="glyphicon glyphicon-refresh"></i> &nbsp; Convert
            </button><hr>
</form>
<br><br>
</div>
<div class="col-sm-3">

</div>
</center>
 </div></div>

</body>
</html>
















