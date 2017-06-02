<?php
	mysql_connect("localhost","root","");
	mysql_select_db("mces");
	$q1="select * from cart where visibility=1";
	$run=mysql_query($q1);
	
	$vis=0;
	while ($row=mysql_fetch_array($run))
	{
		$model_name=$row['model'];
		
		$q3="select * from addmob where model='$model_name'";
		$run3=mysql_query($q3);
		$row3=mysql_fetch_array($run3);
		$st=$row3['stock'];
		$pric=$row3['price'];
		$st=$st+1;
		$q4="UPDATE addmob SET stock=$st where model='$model_name'";
		$run4=mysql_query($q4);
		
		$q5="select * from amount where sn='0'";
		$run5=mysql_query($q5);
		$row5=mysql_fetch_array($run5);
		$tot=$row5['total'];
		$tot=$tot-$pric;
		$query6="UPDATE amount SET total=$tot where sn='0'";
		$run6=mysql_query($query6);

		
	}
	$q2="delete from cart";
	if( $run_post=mysql_query($q2))
  	{
	echo "<script>alert('Logged Out')</script>";
  	echo "<script>window.open('close.php','_self')</script>";
	}
?>
