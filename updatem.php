<?php
mysql_connect("localhost","root","");
mysql_select_db("mces");
if(isset($_POST['submit'])) 
	{
		$invid=$_POST["inv_id"];
		$ustock=$_POST["stock"];
		if($invid=='' OR  $ustock=='' )
	{
		echo "<script>alert('fill in the all field')</script>";
    echo "<script>window.open('updatem.html','_self')</script>";
	}
	
	$q1="select stock from addmob where iid='$invid'";
	$run=mysql_query($q1);
	$row=mysql_fetch_array($run);
	$count_stock=$row['stock'];
	$count_stock+=$ustock;
	$queryn="UPDATE addmob SET stock=$count_stock WHERE iid='$invid'";
	if ($run2=mysql_query($queryn))
	{
	echo "<script>alert('Update successfull')</script>";
	echo "<script>window.open('adminpage.html','_self')</script>";
	}
	}
?>