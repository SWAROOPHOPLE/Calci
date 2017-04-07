
<div class="container-fluid">
<div class="row">
<div class="col-sm-3">

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
<form  class="form-inline " action="energy.php" method="POST"><div class="form-title-row">
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

</div>
</center>
 </div></div>

</body>
</html>
















