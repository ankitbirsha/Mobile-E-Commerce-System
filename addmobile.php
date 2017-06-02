<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Mobile Store</title>
</head>
<body>

<style type="text/css">
body{
    background-image: url("w123.png");
    background-size: 100%;
    background-repeat: no-repeat;
    border-width:5px;
    border-color:#69D2E7;
    border-style:plain;
}
</style>

	<form  method="POST" action="">
        Inventory ID:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        <input type="text" name="inv_id"><p>
		Brand:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        <input type="text" name="brand"><p>
        Model Name:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        <input type="text" name="model" /><p>
		Sim Type:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		<select name = "sim_type"> &nbsp&nbsp
			<option> Single </option>
			<option> Double </option>
			<option> Triple </option>
		</select><p>
		Touchscreen:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		<select name = "touch">
			<option> YES </option>
			<option> NO </option>
		</select><p>
		Display:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        <input type="text" name="disp" /><p>
		Resolution:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        <input type="text" name="resol"/><p>
		Operating System:&nbsp&nbsp
        <input type="text" name="os" /><p>
		Internal Memory:&nbsp&nbsp&nbsp
        <input type="text" name="im" /><p>
		RAM:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        <input type="text" name="ram" /><p>
		Expandable:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        <input type="text" name="expand" /><p>
		Primary Camera:&nbsp&nbsp&nbsp&nbsp
        <input type="text" name="pc" /><p>
		Secondary Camera:
        <input type="text" name="sc" /><p>
		Flash:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		<select name = "flash"> 
			<option> YES </option>
			<option> NO </option>
		</select><p>
		Network Type:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        <input type="text" name="nt" /><p>
		Battery:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        <input type="text" name="batt" /><p>
		Warranty:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        <input type="text" name="warr" /><p>
		Stock:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        <input type="number" name="stock" /><p>
		Price:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        <input type="number" name="price" /><p>
        <p><p>
                    <br><center><input type="submit" name="submit" value="Submit"/></center></br>
      </form>

</body>
</html>
<?php
mysql_connect("localhost","root","");
mysql_select_db("mces");
	
	if(isset($_POST['submit'])) 
	{
		$iid=$_POST["inv_id"];
	$brand=$_POST["brand"];
	$model=$_POST["model"];
	$s_t=$_POST["sim_type"];
	$touch=$_POST["touch"];
    $disp =$_POST["disp"];
	$resol    =$_POST["resol"];
	$os     =$_POST["os"];
	$im     =$_POST["im"];
	$ram     =$_POST["ram"];
	$expand     =$_POST["expand"];
	$pc    =$_POST["pc"];
	$sc    =$_POST["sc"];
	$flash    =$_POST["flash"];
	$nt     =$_POST["nt"];
	$bat     =$_POST["batt"];
	$warr     =$_POST["warr"];
	$stock     =$_POST["stock"];
	$price     =$_POST["price"];
	
	if($iid=='' OR $brand=='' OR $model=='' OR 	$s_t=='' OR  $touch=='' OR $disp=='' OR $resol=='' OR   $os=='' OR  $im=='' OR   $ram=='' OR $expand=='' OR   $pc=='' OR 
	$sc=='' OR $flash=='' OR  $nt=='' OR  $bat=='' OR  $warr=='' OR  $stock=='' OR     $price =='')
	{
		echo "<script>alert('fill in the all field')</script>";
    echo "<script>window.open('addmobile.php','_self')</script>";
	}
	
	$query="insert into addmob(iid,brand,model,s_t,touch,disp,resol,os,im,ram,expand,pc,sc,flash,nt,bat,warr,stock,price ) values('$iid', '$brand', '$model', '$s_t', '$touch', '$disp',
	'$resol', '$os', '$im', '$ram', '$expand', '$pc', '$sc', '$flash', '$nt', '$bat', '$warr', '$stock',  '$price')" ;   

    if( $run_post=mysql_query($query))
  	{

	
	echo "<script>alert('Added Successfull')</script>";
  	echo "<script>window.open('adminpage.html','_self')</script>";

}
else {
	echo "hello";
}
}

?>