<!doctype html>
<html>
<head>
    <title>Mobile Store</title>
    
<style type="text/css">
body{
    
    background-size: 100% 100%;
    background-color:yellow;
    background-repeat: no-repeat;
    border-width:10px;
    border-color:#69D2E7;
    border-style:dotted groove;
}
</style>
</head>
<body>
    <center><h3>Total Amount:
	<?php
						mysql_connect("localhost","root","");
						mysql_select_db("mces");
						$q2="select * from amount";
								$run2=mysql_query($q2);
								$row=mysql_fetch_array($run2);
								 echo $row["total"] . "<br />";
	?>
	</h3></center>
    <form action="" method="POST">
        <fieldset><legend><h4>Credit Card Details</h4></legend>
        <img src = "cp.jpg" 
         style = "float: right" />
       <left> Type of Card: VISA:<input type="radio" name="card_type" value="visa" checked="checked"/>
        &nbsp&nbsp&nbsp&nbsp&nbsp&nbspMASTERCARD:<input type="radio" name="card_type" value="mastercard"/>
        &nbsp&nbsp&nbsp&nbsp&nbsp&nbspMAESTRO:<input type="radio" name="card_type" value="maestro"/><p>
                Account Number:<input type="text" name="acc_number"><p>      
                Expiry Date:<input type="month" name="expiry_date">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspCVV:<input type="password" name="cvv"><p>        
                        Name on Card:<input type="text" name="name"><p>
                            Amount to be paid:<input type="text" name="amount" placeholder="in rupees"><p>
                       
                        <br><input type="submit" name="submit" value="Submit"/></br></left>
        </fieldset>
      </form>  
<P> &nbsp; <P> &nbsp; <P>
    <P> &nbsp; <P> &nbsp; <P>
        <P> &nbsp;
            
<div class="col-md-5 col-xs-8">
				<p class="text-right"><a class="text-white" href="http://piccadilyhotels.com/sitemap.xml">Sitemap</a> | <a class="text-white" href="contact-us.php">Contact Us</a> | <a class="text-white" href="terms-and-conditions.php">Terms & Conditions</a> | <a class="text-white" href="privacy-policy.php">Privacy Policy</a> | <a class="text-white" href="reservation-policy.php">Reservation Policy</a></p>
			</div>
</body>
</html>
<?php
mysql_connect("localhost","root","");
mysql_select_db("mces");
	if(isset($_POST['submit'])) 
{
	$cardtype=$_POST["card_type"];
	$accno=$_POST["acc_number"];
	$expdate=$_POST["expiry_date"];
	$cvv=$_POST["cvv"];
	$nameoncard=$_POST["name"];
	$amountpaid=$_POST["amount"];
	
	if($cardtype=='' OR $accno=='' OR $expdate=='' OR $cvv=='' OR $nameoncard=='' OR $amountpaid==''){
    echo "<script>alert('fill in the all field')</script>";
    echo "<script>window.open('add_payement.php','_self')</script>";
	}
			
	//2.query
	$query="insert into payment(cardtype,acc_number,expdate,cvv,nameoncard,amount) values('$cardtype','$accno','$expdate','$cvv','$nameoncard','$amountpaid')";
	if( $run_post=mysql_query($query))
  	{

	echo "<script>alert('Registration Successfull')</script>";
  	echo "<script>window.open('confirmcod.php','_self')</script>";
	}
	else 
	{
		echo "hello";
	}
}
	
?>