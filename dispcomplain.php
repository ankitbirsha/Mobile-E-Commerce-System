<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Complaints</title>
	
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
$q1="select * from complain";
$run=mysql_query($q1);
while ($row=mysql_fetch_array($run))
{
?>
<div>Email-Id:<?php echo $row["email"] . "<br />";?></div><br>
<div>Brand:<?php echo $row["brand"] . "<br />";?></div><br>
<div>Model:<?php echo $row["model"] . "<br />";?></div><br>
<div>Phone No.:<?php echo $row["phone"] . "<br />";?></div><br>
<div>Buy Date:<?php echo $row["date"] . "<br />";?></div><br>
<div>Complaint:<?php echo $row["complaint"] . "<br />";?></div><br>
==================================================================================================================================
<?php
}
?>
</body>
</html>