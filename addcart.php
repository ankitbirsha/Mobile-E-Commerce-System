<?php
mysql_connect("localhost","root","");
mysql_select_db("mces");
$model_name=$_GET['var'];
$q1="select * from addmob where model='$model_name'";
$run=mysql_query($q1);
$row=mysql_fetch_array($run);
$id=$row['iid'];
$brand=$row['brand'];
$price=$row['price'];
$vis=1;
$st=$row['stock'];
$st=$st-1;
$queryx="UPDATE addmob SET stock=$st where model='$model_name'";
$runx=mysql_query($queryx);

$x=0;
$q4="insert into amount(sn) values('$x')";
$run4=mysql_query($q4);
$q3="select * from amount where sn='0'";
$run3=mysql_query($q3);
$row=mysql_fetch_array($run3);
$tot=$row['total'];
$tot=$tot+$price;
$queryn="UPDATE amount SET total=$tot where sn='0'";
$run2=mysql_query($queryn);
	
$q2="insert into cart(invid,brand,model,price,visibility) values('$id','$brand','$model_name','$price','$vis')";
if($run_post=mysql_query($q2))
{
  	echo "<script>alert('Added Successfully')</script>";
echo "<script>window.open('search.html','_self')</script>";
  	//echo "<script>window.open('pat_reg.php','_self')</script>";
}
else
	echo "hello";


?>