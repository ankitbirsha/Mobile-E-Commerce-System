<?php
	mysql_connect("localhost","root","");
	mysql_select_db("mces");
	$q1="delete from amount";
	$run=mysql_query($q1);
	$q2="delete from cart";
	if( $run_post=mysql_query($q2))
  	{
	echo "<script>alert('Cart Emptied')</script>";
  	echo "<script>window.open('close.php','_self')</script>";
	}
?>