
<div class="container-fluid">
<div class="row">
<div class="col-sm-3" >

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
<form class="form-inline "action="length.php" method="POST"><div class="form-title-row">
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

</div>
</center>
 </div></div>

</body>
</html>
















