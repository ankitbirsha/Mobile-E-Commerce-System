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
    background-size: 100%100%;
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
            <li><a href="about.html">about us</a></li>
            <li><a href="category.html">mobiles</a></li>
            <li><a href="accessories.html">accessories</a></li>
            <li><a href="details.html">trending</a></li>
            <li><a href="contact.html">contact</a></li>
            </ul>
        </div>     
            
            
       </div> 
       
       
       <div class="center_content">
       	<div class="left_content">
            <div class="title"><span class="title_icon"><img src="images/bullet1.gif" alt="" title="" /></span>Mobile List</div>
        
        	<div class="feat_prod_box_details">
            
            <table class="cart_table">
            	<tr class="cart_title">
                	<td>Item pic</td>
                	<td>Brand</td>
                    <td>Model</td>
                    <td>Price</td>               
                </tr>
                <?php
						mysql_connect("localhost","root","");
						mysql_select_db("mces");
						if(isset($_POST['submit'])) 
						{
		
							$br=$_POST["brand"];
							$mn=$_POST["name"];
							$p=$_POST["price"];
		
		

							if ($br!='')
							{
								$q1="select * from addmob where brand='$br' order by price";
								$run=mysql_query($q1);
				
			
								while ($row=mysql_fetch_array($run))
								{
				?>	
            	<tr>
                	<td><img src="cartimages/<?php echo $row['model'];?>.jpg" alt="" title="" border="0" class="cart_thumb" /></td>
                	<td><?php echo $row["brand"] . "<br />";?></td>
					<td><a href="desc.php?var=<?php echo $row['model']?>"><?php echo $row['model']?></a></td>
					<td><?php echo $row["price"] . "<br />";?></td>              
                </tr>                            
            
            
            
				<?php		}
						}
						else if ($mn!='')
							{
								$q1="select * from addmob where model='$mn' order by price";
								$run=mysql_query($q1);
				
			
								while ($row=mysql_fetch_array($run))
								{
				?>	
            	<tr>
                	<td><img src="cartimages/<?php echo $row['model'];?>.jpg" alt="" title="" border="0" class="cart_thumb" /></td>
                	<td><?php echo $row["brand"] . "<br />";?></td>
					<td><a href="desc.php?var=<?php echo $row['model']?>"><?php echo $row['model']?></a></td>
					<td><?php echo $row["price"] . "<br />";?></td>              
                </tr>                            
            
            
            
				<?php		}
						}
						else if ($p!='')
							{
								$q1="select * from addmob";
								$run=mysql_query($q1);
				
			
								while ($row=mysql_fetch_array($run))
								{
									if($p>=$row['price']){
				?>	
            	<tr>
                	<td><img src="cartimages/<?php echo $row['model'];?>.jpg" alt="" title="" border="0" class="cart_thumb" /></td>
                	<td><?php echo $row["brand"] . "<br />";?></td>
					<td><a href="desc.php?var=<?php echo $row['model']?>"><?php echo $row['model']?></a></td>
					<td><?php echo $row["price"] . "<br />";?></td>              
                </tr>                            
            
           
            
								<?php	}	
								}
						}
						}
					
				?>  
				</table>
					<a href="index.html" class="continue">&lt; Home</a>
					<a href="search.html" class="checkout"> Search&gt;</a>
            
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
                <a href="#" class="selected">INR</a>
                <a href="#">EUR</a>
                <a href="#" >USD</a>
                </div>
                
                
              <div class="cart">
                  <div class="title"><span class="title_icon"><img src="images/cart.gif" alt="" title="" /></span>My cart</div>
                  
                  <a href="cart.php" class="view_cart">view cart</a>
				  <a href="logout.php" class="view_cart">Logout</a>
              
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
             
             <div class="right_box">
             
             	<div class="title"><span class="title_icon"><img src="images/bullet4.gif" alt="" title="" /></span>Promotions</div> 
                    <div class="new_prod_box">
                        <a href="details.html">Blackberry 581</a>
                        <div class="new_prod_bg">
                        <span class="new_icon"><img src="images/promo_icon.gif" alt="" title="" /></span>
                        <a href="details.html"><img src="images/thumb1.jpg" alt="" title="" class="thumb" border="0" /></a>
                        </div>           
                    </div>
                    
                    <div class="new_prod_box">
                        <a href="details.html">Microsoft Lumia 535</a>
                        <div class="new_prod_bg">
                        <span class="new_icon"><img src="images/promo_icon.gif" alt="" title="" /></span>
                        <a href="details.html"><img src="images/thumb2.jpg" alt="" title="" class="thumb" border="0" /></a>
                        </div>           
                    </div>                    
                    
                    <div class="new_prod_box">
                        <a href="details.html">Samsung 5620</a>
                        <div class="new_prod_bg">
                        <span class="new_icon"><img src="images/promo_icon.gif" alt="" title="" /></span>
                        <a href="details.html"><img src="images/thumb3.jpg" alt="" title="" class="thumb" border="0" /></a>
                        </div>           
                    </div>              
             
             </div>
             
             <div class="right_box">
             
             	<div class="title"><span class="title_icon"><img src="images/bullet5.gif" alt="" title="" /></span>Categories</div> 
                
                <ul class="list">
                <li><a href="#">accesories</a></li>
                <li><a href="#">gifts</a></li>
                <li><a href="#">specials</a></li>
                <li><a href="#">holidays gifts</a></li>
                <li><a href="#">mobiles</a></li>
                                                              
                </ul>
                
             	<div class="title"><span class="title_icon"><img src="images/bullet6.gif" alt="" title="" /></span>Partners</div> 
                
                <ul class="list">
                <li><a href="#">Accord Mobiles</a></li>
                
                <li><a href="#">Acer Mobiles</a></li>
                <li><a href="#">Apple</a></li>
                <li><a href="#">Blackberry</a></li>
                <li><a href="#">Dell Mobiles</a></li>
                <li><a href="#">HTC</a></li>
                <li><a href="#">LG Mobiles</a></li>
                <li><a href="#">Micromax Mobiles</a></li>
				<li><a href="#">Microsoft</a></li>
				<li><a href="#">Samsung</a></li>
				<li><a href="#">RedMi</a></li>
                </ul>      
             
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