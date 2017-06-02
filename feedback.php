<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />
<title>Mobile Store</title>
<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body><style type="text/css">
body{
    background-image: url("andimages.jpg");
    background-size: 100% 100%;
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
        <div id="menu">
            <ul>                                                                       
            <li><a href="index.html">home</a></li>
            <li class="selected"><a href="about.html">feedback</a></li>
            <li><a href="category.html">mobiles</a></li>
            <li><a href="accessories.html">accesories</a></li>
            <li><a href="details.html">trending</a></li>
            <li><a href="contact.html">contact</a></li>
            </ul>
        </div>     
            
            
       </div> 
       
       
       <div class="center_content">
       	<div class="left_content">
            <div class="title"><span class="title_icon"><img src="images/bullet1.gif" alt="" title="" /></span>FeedBack</div>
        
        	<div class="feat_prod_box_details">
            <p class="details">
             We need your feedback to improve and it can guide other customers also====>
            </p>
            
              	<div class="contact_form">
                <div class="form_subtitle">Be Generous</div>          
                      
					<form method="POST" action="">
		E-mail:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        <input type="text" name="eid" value="" placeholder="name"><p><br>
        Brand:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        <input type="text" name="brand" value="" placeholder="name"><p><br>
        Model Name:&nbsp&nbsp&nbsp&nbsp
        <input type="text" name="name" /><p><br>
        Feedback:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        <textarea name = "feedback"  rows = "3" cols = "30">
            </textarea><p><p>
                    <br><center><input type="submit" name="submit" value="Submit"/></center></br>
      </form>
					  
                </div>  
                
          </div>	
            
              

            

            
        <div class="clear"></div>
        </div><!--end of left content-->
        
        <div class="right_content">
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
                  <div class="title"><span class="title_icon"><img src="images/cart.gif" alt="" title="" /></span>My cart</div>
                  
                  <a href="cart.php" class="view_cart">view cart</a><p>
                  <form action="logout.php" >
					&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
					<input type="submit"  value="Logout" />
				  </form>
              
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
  $ed=$_POST['eid'];
  $brand = $_POST['brand'];
  $modelname = $_POST['name'];
  $feedback = $_POST['feedback'];
   
  if($ed=='' OR $brand=='' OR $modelname=='' OR $feedback==''){
    echo "<script>alert('fill in the all field')</script>";
   echo "<script>window.open('feedback.php','_self')</script>";
  }


 $insert_feedback="insert into feedback(email,brand,modname,feedback) values('$ed','$brand','$modelname','$feedback')";
    
  if(  $run_post=mysql_query($insert_feedback))
  {
  	echo "<script>alert('Registration Successfull')</script>";
  	echo "<script>window.open('index.html','_self')</script>";

}
else
	echo "hello";
}
?>
