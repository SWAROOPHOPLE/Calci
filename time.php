
<div class="container-fluid">
<div class="row">
<div class="col-sm-3">

</div>
<?php
error_reporting(0);
$x=$_POST['one'];
$con1=$_POST['three'];
$con2=$_POST['four'];

if($con1=='Microseconds')
{    if($con2=='Microseconds')
	{   
		$z=$x;
	}
	else  if($con2=='Milliseconds')
	{    
		$z=($x*0.001);
	}
	else  if($con2=='Seconds')
	{   
		$z=($x*0.000001);
	}
	else  if($con2=='Minutes')
	{   
		$z=($x*0.00000001666667);
	}
	else  if($con2=='Hours')
	{   
		$z=($x*0.00000000027778);
	}
	else  if($con2=='Days')
	{   
		$z=($x*0.00000000001157);
	}
	else  if($con2=='Weeks')
	{   
		$z=($x*0.00000000000165);
	}
	else  if($con2=='Years')
	{   
		$z=($x*0.00000000000003);
	}
}

else if($con1=='Milliseconds')
{    if($con2=='Microseconds')
	{   
		$z=($x*1000);
	}
	else  if($con2=='Milliseconds')
	{   
		$z=($x);
	}
	else  if($con2=='Seconds')
	{   
		$z=($x*0.001);
	}
	else  if($con2=='Minutes')
	{   
		$z=($x*0.000017);
	}
	else  if($con2=='Hours')
	{   
		$z=($x*0.00000027777778);
	}
	else  if($con2=='Days')
	{   
		$z=($x*0.00000001157407);
	}
	else  if($con2=='Weeks')
	{   
		$z=($x*0.00000000165344);
	}
	else  if($con2=='Years')
	{   
		$z=($x*0.00000000003169);
	}
}

else if($con1=='Seconds')
{    if($con2=='Microseconds')
	{   
		$z=($x*1000000);
	}
	else  if($con2=='Milliseconds')
	{   
		$z=($x*1000);
	}
	else  if($con2=='Seconds')
	{   
		$z=($x);
	}
	else  if($con2=='Minutes')
	{   
		$z=($x*0.016667);
	}
	else  if($con2=='Hours')
	{   
		$z=($x*0.000278);
	}
	else  if($con2=='Days')
	{   
		$z=($x*0.000012);
	}
	else  if($con2=='Weeks')
	{   
		$z=($x*0.000002);
	}
	else  if($con2=='Years')
	{   
		$z=($x*0.00000003168809);
	}
}

else if($con1=='Minutes')
{    if($con2=='Microseconds')
	{   
		$z=($x*60000000);
	}
	else  if($con2=='Milliseconds')
	{   
		$z=($x*60000);
	}
	else  if($con2=='Seconds')
	{   
		$z=($x*60);
	}
	else  if($con2=='Minutes')
	{   
		$z=($x);
	}
	else  if($con2=='Hours')
	{   
		$z=($x*0.016667);
	}
	else  if($con2=='Days')
	{   
		$z=($x*0.000694);
	}
	else  if($con2=='Weeks')
	{   
		$z=($x*0.000099);
	}
	else  if($con2=='Years')
	{   
		$z=($x*0.000002);
	}
}

else if($con1=='Hours')
{    if($con2=='Microseconds')
	{   
		$z=($x*3600000000);
	}
	else  if($con2=='Milliseconds')
	{   
		$z=($x*3600000);
	}
	else  if($con2=='Seconds')
	{   
		$z=($x*3600);
	}
	else  if($con2=='Minutes')
	{   
		$z=($x*60);
	}
	else  if($con2=='Hours')
	{   
		$z=($x);
	}
	else  if($con2=='Days')
	{   
		$z=($x*0.041667);
	}
	else  if($con2=='Weeks')
	{   
		$z=($x*0.005952);
	}
	else  if($con2=='Years')
	{   
		$z=($x*0.000114);
	}
}

else if($con1=='Days')
{    if($con2=='Microseconds')
	{   
		$z=($x*86400000000);
	}
	else  if($con2=='Milliseconds')
	{   
		$z=($x*0.000025);
	}
	else  if($con2=='Seconds')
	{   
		$z=($x*86400000);
	}
	else  if($con2=='Minutes')
	{   
		$z=($x*86400);
	}
	else  if($con2=='Hours')
	{   
		$z=($x*24);
	}
	else  if($con2=='Days')
	{   
		$z=($x);
	}
	else  if($con2=='Weeks')
	{   
		$z=($x*0.142857);
	}
	else  if($con2=='Years')
	{   
		$z=($x*0.002738);
	}
}

else if($con1=='Weeks')
{    if($con2=='Microseconds')
	{   
		$z=($x*604800000000);
	}
	else  if($con2=='Milliseconds')
	{   
		$z=($x*604800000);
	}
	else  if($con2=='Seconds')
	{   
		$z=($x*604800);
	}
	else  if($con2=='Minutes')
	{   
		$z=($x*10080);
	}
	else  if($con2=='Hours')
	{   
		$z=($x*168);
	}
	else  if($con2=='Days')
	{   
		$z=($x*7);
	}
	else  if($con2=='Weeks')
	{   
		$z=($x);
	}
	else  if($con2=='Years')
	{   
		$z=($x*0.019165);
	}
}

else if($con1=='Years')
{    if($con2=='Microseconds')
	{   
		$z=($x*31557600000000);
	}
	else  if($con2=='Milliseconds')
	{   
		$z=($x*31557600000);
	}
	else  if($con2=='Seconds')
	{   
		$z=($x*31557600);
	}
	else  if($con2=='Minutes')
	{   
		$z=($x*525960);
	}
	else  if($con2=='Hours')
	{   
		$z=($x*8766);
	}
	else  if($con2=='Days')
	{   
		$z=($x*365.25);
	}
	else  if($con2=='Weeks')
	{   
		$z=($x*52.17857);
	}
	else  if($con2=='Years')
	{   
		$z=($x);
	}
}

?>
<div class="col-sm-6">
<center><hr>
<form class="form-inline " action="time.php" method="POST"><div class="form-title-row">
                <h3>Conversion - Time</h3>
            </div><hr><br>
<label>&nbsp;&nbsp;&nbsp;&nbsp;Enter Time :&nbsp;&nbsp;&nbsp;</label><input type="number" class="form-control"name="one" value="<?php echo @$x; ?>" placeholder="&nbsp;&nbsp;Enter a number" required="required">&nbsp;&nbsp;&nbsp;<br><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select name="three"class="form-control">
<option <?php if($con1=='Microseconds') echo'selected="selected"'; ?>>Microseconds</option>
<option <?php if($con1=='Milliseconds') echo'selected="selected"'; ?>>Milliseconds</option>
<option <?php if($con1=='Seconds') echo'selected="selected"'; ?>>Seconds</option>
<option <?php if($con1=='Minutes') echo'selected="selected"'; ?>>Minutes</option>
<option <?php if($con1=='Hours') echo'selected="selected"'; ?>>Hours</option>
<option <?php if($con1=='Days') echo'selected="selected"'; ?>>Days</option>
<option <?php if($con1=='Weeks') echo'selected="selected"'; ?>>Weeks</option>
<option <?php if($con1=='Years') echo'selected="selected"'; ?>>Years</option>
</select><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TO<br><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<select name="four" class="form-control">
<option <?php if($con2=='Microseconds') echo'selected="selected"'; ?>>Microseconds</option>
<option <?php if($con2=='Milliseconds') echo'selected="selected"'; ?>>Milliseconds</option>
<option <?php if($con2=='Seconds') echo'selected="selected"'; ?>>Seconds</option>
<option <?php if($con2=='Minutes') echo'selected="selected"'; ?>>Minutes</option>
<option <?php if($con2=='Hours') echo'selected="selected"'; ?>>Hours</option>
<option <?php if($con2=='Days') echo'selected="selected"'; ?>>Days</option>
<option <?php if($con2=='Weeks') echo'selected="selected"'; ?>>Weeks</option>
<option <?php if($con2=='Years') echo'selected="selected"'; ?>>Years</option>
</select><br><br>
<label>&nbsp;&nbsp;&nbsp;&nbsp;Your Result :&nbsp;&nbsp;&nbsp;</label><input type="number" name="two" class="form-control"value="<?php echo @$z;?>" placeholder="&nbsp;&nbsp;Your Result" disabled>&nbsp;&nbsp;&nbsp;<br><br>
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
















