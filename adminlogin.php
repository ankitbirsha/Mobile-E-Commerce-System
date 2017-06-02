<?php
   session_start();
        
?>
<?php
mysql_connect("localhost","root","");
mysql_select_db("mces");
if(isset($_POST['submit'])){
	$ph=$_POST['id'];
	$pass=$_POST['pd'];
	
	echo $ph;
	echo $pass;
	$query="select * from adminreg where username='$ph' AND password='$pass'";
	$run=mysql_query($query);
	if(mysql_num_rows($run)>0){
		$_SESSION['ph']=$ph;
		
		echo "<script>alert('Login successfull')</script>";
		echo "<script>window.open('adminpage.html','_self')</script>";
		
	}
	else{
		echo "<script>alert('usename or password incorrect')</script>";
		echo "<script>window.open('adminlogin.html','_self')</script>";
	}
}

?>
 