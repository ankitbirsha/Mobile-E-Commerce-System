<?php
mysql_connect("localhost","root","");
mysql_select_db("mces");
	
	if(isset($_POST['submit'])) 
	{
		$sr=$_POST["sr"];
		$p=$_POST["pin"];
		if($sr=='' OR $p==''  )
		{
			echo "<script>alert('fill in the all field')</script>";
			echo "<script>window.open('addpin.html','_self')</script>";
		}
		$query="insert into pincodes(sn,pin) values('$sr', '$p')" ;   
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