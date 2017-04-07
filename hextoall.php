
<div class="container-fluid">
<div class="row">
<div class="col-sm-3">
 
</div>
<div class="col-sm-6">
<center><hr>
<form class="form-inline "action="hextoall.php" method="POST"><div class="form-title-row">
                <h3>Calculator - Hexadecimal to All</h3>
            </div><hr><br>
<?php
error_reporting(0);
$x=$_POST['one'];
$op=$_POST['op'];if ($_SERVER["REQUEST_METHOD"] == "POST"){
if (eregi('[0-9]',$x)|| (eregi('[a-f]',$x)) || (eregi('[a-f]',$x) && eregi('[0-9]',$x))){
if($op=='dec')
{
	$z=hexdec($x);
}
else if($op=='oct')
{
	$z=base_convert($x,16,8);
}
else if($op=='bin')
{
	
	$z =hexdec($x);
    $z= decbin($z);
}

else if($op=='Clear')
{
	$x='';
	$y='';
}}else echo'<font color="red"><b>Enter a valid input</b><br><b>Input should be in tems of 0-9 and a-f format eg.7d </b></font>';}
?>
<br><br>
<label>Enter a Hexadecimal number :&nbsp;&nbsp;&nbsp;</label><input type="text" class="form-control"name="one" value="<?php echo @$x; ?>" placeholder="&nbsp;&nbsp;Enter a number" required="required">&nbsp;&nbsp;&nbsp;<br>
<br><b>Convert to</b><br>
<br>
    <input type="radio" value="dec" name="op" <?php if($op=='dec') echo'checked'; ?> /> <b> Decimal </b>&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="radio"  value="oct" name="op" <?php if($op=='oct') echo'checked'; ?> /> <b> Octal </b>&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="radio"  value="bin" name="op" <?php if($op=='bin') echo'checked'; ?> /> <b> Binary </b>&nbsp;&nbsp;&nbsp;&nbsp;
	  


<br><br><br>
<label>&nbsp;&nbsp;&nbsp;Your Result :&nbsp;&nbsp;&nbsp;</label><input type="text" class="form-control"name="three" value="<?php echo @$z;?>" placeholder="&nbsp;&nbsp;Your Result" disabled>&nbsp;&nbsp;&nbsp;<br><br>
<hr><button type="submit" name="submit" class="btn btn-default" >
                	<i class="glyphicon glyphicon-refresh"></i>&nbsp;Convert
            </button> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button type="submit" value="Clear" name="op" class="btn btn-default" >
                	<i class="glyphicon glyphicon-remove"></i>&nbsp;Clear
            </button> <hr>
</form>
<br><br></div>

<div class="col-sm-3">

</div>
</center>
 </div></div>

</body>
</html>
















