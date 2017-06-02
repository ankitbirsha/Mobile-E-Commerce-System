<?php
   session_start();
        
?>
<?php
mysql_connect("localhost","root","");
mysql_select_db("mces");
if(isset($_POST['submit'])){
	$ph=$_POST['id'];
	$pass=$_POST['pd'];
	
	
	$query="select * from registration where uname='$ph' AND pw='$pass'";
	$run=mysql_query($query);
	if(mysql_num_rows($run)>0){
		$_SESSION['ph']=$ph;
		
		echo "<script>alert('Login successfull')</script>";
		echo "<script>window.open('index.html','_self')</script>";
		
	}
	else{
		
		echo "<script>alert('usename or password incorrect')</script>";
		echo "<script>window.open('myaccount.html','_self')</script>";		
	}
}

?>
 