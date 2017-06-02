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
	<form method="POST" action="">
        Inventory ID:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        <input type="text" name="inv_id"><p>
		Brand:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        <input type="text" name="brand"><p>
        Accesories Name:&nbsp&nbsp&nbsp
        <input type="text" name="model" /><p>
		Type:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        <input type="text" name="dimension"/><p>
		Warranty:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        <input type="text" name="warr" /><p>
		Details:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		<textarea name = "details"  rows = "3" cols = "30">
            </textarea><p><p>
		</textarea><p>

		Stock:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        <input type="number" name="stock" /><p>
		Price:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
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
 $inv=$_POST["inv_id"];
 $brand=$_POST["brand"];
 $model=$_POST["model"];
 $dimension=$_POST["dimension"];
 $warr=$_POST["warr"];
 $details=$_POST["details"];
 $stock=$_POST["stock"];
 $price=$_POST["price"];
 
 if($inv=='' OR $brand=='' OR $model=='' OR $dimension=='' OR $warr=='' OR $details=='' OR $stock=='' OR $price=='')
 {
	echo "<script>alert('fill in the all field')</script>";
    echo "<script>window.open('addaccessorie.php','_self')</script>";
	}
	
	$query="insert into addaccessories(inv_id,brand,model,dimension,warr,details,stock,price) values('$inv','$brand','$model','$dimension','$warr','$details','$stock','$price')";
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