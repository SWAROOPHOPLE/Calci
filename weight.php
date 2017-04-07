
<div class="container-fluid">
<div class="row">
<div class="col-sm-3">

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
<form class="form-inline "action="weight.php" method="POST"><div class="form-title-row">
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

</div>
</center>
 </div></div>

</body>
</html>
















