<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />
<title>Mobile Store</title>
<link rel="stylesheet" type="text/css" href="style.css" />
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
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp<a href="index.html">
<a href="index.html"><img src="images/Logo123.jpg" alt="" title="" border="0" /></a>
<div id="wrap">

       <div class="header">
       		<div class="logo"><a href="index.html"><img src="" alt="" title="" border="0" /></a></div>  
				</p></p></p></p>           
        
            
            
       </div> 
       
       
       <div class="center_content">
       	<div class="left_content">
            <div class="title"><span class="title_icon"><img src="images/bullet1.gif" alt="" title="" /></span>Register</div>
        
        	<div class="feat_prod_box_details">
            <p class="details">
             Register and Log In to enter the whole new digital world fullfilling all your mobile needs.
			 One stop where you can find all mobile phones related products.
			 Wanna go hi-tech log-in and find it out youself:
            </p>
            
              	<div class="contact_form">
                <div class="form_subtitle">create new account</div>
                 <form method="POST" action="">          
                    Username:&nbsp&nbsp&nbsp&nbsp
						<input type="text" name="username"><p> 

                    Password:&nbsp&nbsp&nbsp&nbsp&nbsp
						<input type="password" name="password"><p>

					Name:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
						<input type="text" name="name"><p>
					
					
                    E-mail:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
						<input type="text" name="eid"><p>
					
                    Phone:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
						<input type="text" name="phone"><p>
                    
                    Address:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
						<textarea name = "address"  rows = "3" cols = "30">
						</textarea><p><p>  

					City:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
						<input type="text" name="city"><p>
					
					Pin Code:&nbsp&nbsp&nbsp&nbsp&nbsp
						<input type="text" name="pin"><p>
					
					State:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
						<input type="text" name="state"><p>

                    
                    </div> 

                    
                    <div class="form_row">
                    <center> <input type="submit"  value="submit" name="submit"></button></a></center>
                    </div>   
                  </form>     
                </div>  
            
          </div>	
            
              

            

            
        <div class="clear"></div>
        </div><!--end of left content-->
        
        <div class="right_content">
			<br>
        	<div class="languages_box">
            <span class="red">Languages:</span>
            <a href="#" class="selected"><img src="images/de.gif" alt="" title="" border="0" /></a>
            <a href="#"><img src="images/fr.gif" alt="" title="" border="0" /></a>
            <a href="#"><img src="images/gb.gif" alt="" title="" border="0" /></a>
            </div>
                <div class="currency">
                <span class="red">Currency: </span>
                <a href="#"class="selected">INR</a>
                <a href="#">EUR</a>
                <a href="#">USD</a>
                </div>
                
                
              <div class="cart">
				
                 <center><a href="adminlogin.html"> <button type="button" >Admin Log-In</button></a></center>
              </div>
                       
            	
        
        
             <div class="title"><span class="title_icon"><img src="images/bullet3.gif" alt="" title="" /></span>About Our Store</div> 
             <div class="about">
             <p>
             <img src="images/about.gif" alt="" title="" class="right" />
             Gone are the days, when you had to go on exhausting shopping trips and wait in long queues to buy something.
			 Flipkart makes online shopping as hassle-free as possible. You can always rest assured about the quality of products you are buying online at our site. 
			 Together with our trusted partners we promise to deliver only original and brand-new products, with the correct bill.
             </p>
             
             </div>
                 
             
        
        </div><!--end of right content-->
        
        
       
       
       <div class="clear"></div>
       </div><!--end of center content-->
       
              
       <div class="footer">
       	<div class="left_footer"><img src="images/footer_logo.gif" alt="" title="" /><br /> <a href="index.html" title=""><img src="images/csscreme.gif" alt="" title="" border="0" /></a></div>
        <div class="right_footer">
        <a href="#">home</a>
        <a href="#">about us</a>
        <a href="#">services</a>
        <a href="#">privacy policy</a>
        <a href="#">contact us</a>
       
        </div>
        
       
       </div>
    

</div>

</body>
</html>
<?php

mysql_connect("localhost","root","");
mysql_select_db("mces");

if(isset($_POST['submit'])) {
  
  $un = $_POST['username'];
  $pw = $_POST['password'];
  $name = $_POST['name'];
  $email = $_POST['eid'];
  $ph = $_POST['phone'];
  $add = $_POST['address'];
  $ct=$_POST['city'];
  $pin=$_POST['pin'];
  $st=$_POST['state'];
  
  
  if($un=='' OR $pw=='' OR $name=='' OR $email=='' OR $ph=='' OR $add==''  OR $ct=='' OR $pin=='' OR $st==''){
  echo "<script>alert('fill in the all field')</script>";
   echo "<script>window.open('register.php','_self')</script>";
  }
  
   $insert_reg="insert into registration(uname,pw,name,email,ph,address,ct,pin,state) values('$un','$pw','$name','$email','$ph','$add','$ct','$pin','$st')";
echo "hello";
     if($run_post=mysql_query($insert_reg))
  	echo "<script>alert('Registration Successfull')</script>";
echo "<script>window.open('myaccount.html','_self')</script>";
  	//echo "<script>window.open('pat_reg.php','_self')</script>";

}
else
	echo "hello";
?>