<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Mobile Details</title>
	
</head>
<body>
<style type="text/css">
body{
    background-image: url("andimages.jpg");
    background-size: 100%;
    background-repeat: no-repeat;
    border-width:5px;
    border-color:#69D2E7;
    border-style:plain;
}
</style>
<?php
mysql_connect("localhost","root","");
mysql_select_db("mces");
$model_name=$_GET['var'];
$q1="select * from feedback where modname='$model_name'";
$run=mysql_query($q1);
while ($row=mysql_fetch_array($run))
{
?>
<div>Email-Id:<?php echo $row["email"] . "<br />";?></div><br>
<div>Brand:<?php echo $row["brand"] . "<br />";?></div><br>
<div>Model:<?php echo $row["modname"] . "<br />";?></div><br>
<div>FeedBack:<?php echo $row["feedback"] . "<br />";?></div><br>
==================================================================================================================================
<?php
}
?>
</body>
</html>