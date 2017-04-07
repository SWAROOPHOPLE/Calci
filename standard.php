
<div class="container-fluid">
<div class="row">
<div class="col-sm-3">

</div>
<div class="col-sm-6">
<center><hr>
<form  class="form-inline" action="standard.php" method="POST"><div class="form-title-row">
                <h3>Calculator - Standard</h3>
            </div><hr><br>
<?php
error_reporting(0);
$x=$_POST['one'];
$y=$_POST['two'];
$op=$_POST['op'];if ($_SERVER["REQUEST_METHOD"] == "POST"){
if((eregi('[0-9]',$x))&&(eregi('[0-9]',$y))){
if($op=='add')
{
	$z=$x+$y;
}
else if($op=='sub')
{
	$z=$x-$y;
}
else if($op=='mul')
{
	$z=$x*$y;
}
else if($op=='div')
{
	$z=$x/$y;
}
else if($op=='mod')
{
	$z=$x%$y;
}
else if($op=='Clear')
{
	$x='';
	$y='';
}}else echo'<font color="red"><b>Enter a valid input</b></font>';}
?>
<br><br>
<label>Enter a number :&nbsp;&nbsp;&nbsp;</label><input type="text" class="form-control" name="one" value="<?php echo @$x; ?>" placeholder="&nbsp;&nbsp;Enter a number" required="required">&nbsp;&nbsp;&nbsp;<br><br>
<label>Enter a number :&nbsp;&nbsp;&nbsp;</label><input type="text"  class="form-control"name="two" value="<?php echo @$y; ?>" placeholder="&nbsp;&nbsp;Enter a number" required="required">&nbsp;&nbsp;&nbsp;<br><br>

    <input type="radio" value="add" name="op" <?php if($op=='add') echo'checked'; ?> /> <b> + </b>&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="radio"  value="sub" name="op" <?php if($op=='sub') echo'checked'; ?> /> <b> - </b>&nbsp;&nbsp;&nbsp;&nbsp;
   <input type="radio"  value="mul" name="op" <?php if($op=='mul') echo'checked'; ?> /> <b> x </b>&nbsp;&nbsp;&nbsp;&nbsp;
	    
      <input type="radio"  value="div" name="op" <?php if($op=='div') echo'checked'; ?> /> <b> / </b>&nbsp;&nbsp;&nbsp;&nbsp;
	  <input type="radio"  value="mod" name="op" <?php if($op=='mod') echo'checked'; ?> /> <b> % </b><br><br>
	  



<label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Your Result :&nbsp;&nbsp;&nbsp;</label><input type="number"class="form-control" name="three" value="<?php echo @$z;?>" placeholder="&nbsp;&nbsp;Your Result" disabled>&nbsp;&nbsp;&nbsp;<br><br>
<hr><button type="submit" name="submit" class="btn btn-default" >
                	<i class="glyphicon glyphicon-refresh"></i>&nbsp;Convert
            </button> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button type="submit" value="Clear" name="op" class="btn btn-default" >
                	<i class="glyphicon glyphicon-remove"></i>&nbsp;Clear
            </button> 
</form>
<br><br>
</div>
<div class="col-sm-3">

</div>
</center>
 </div></div>

</body>
</html>
















