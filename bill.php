<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Invoice</title>
	<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
<style type="text/css">
body{
    background-image: url("bill.jpg");
    background-size: 100%;
    background-repeat: no-repeat;
    border-width:5px;
    border-color:#69D2E7;
    border-style:plain;
}
</style>
<?php
mysql_connect("localhost","root","");
mysql_select_db("mces");
if(isset($_POST['submit']))
{
	$ed=$_POST["eid"];
$q1="select * from registration where email='$ed'";
$run1=mysql_query($q1);
$row1=mysql_fetch_array($run1);
?>
		<center><table class="cart_table" border="border">
            	<tr class="cart_title">
                	<th colspan = "2"> Invoice </th>
				</tr>
				<tr>
                	<th colspan = "2"><?php echo $row1["name"] . "<br />";?></th>
				</tr>
				<tr>
                	<th colspan = "2" align="left"><?php echo $row1["name"] . "<br />";
											echo $row1["email"] . "<br />";
											echo $row1["ph"] . "<br />";
											echo $row1["address"] . "<br />";
											echo $row1["ct"] . "<br />";
											echo $row1["pin"] . "<br />";
											echo $row1["state"] . "<br />";?></th>
					
					
				</tr>
<?php
$q2="select * from cart where visibility=1";
$run2=mysql_query($q2);
while ($row2=mysql_fetch_array($run2))
{
?>
				<tr>
					<th colspan = "2" align="left"><?php echo $row2["brand"] . "<br />";
														 echo $row2['model'] . "<br />";
														 echo $row2["price"] . "<br />";?>
					</th>
                </tr>  
<?php		
								}
					$q2="select * from amount";
								$run2=mysql_query($q2);
								$row=mysql_fetch_array($run2);
				?>
                <tr>
					<td colspan="4" class="cart_total"><span class="red">TOTAL:</span></td>
					<td><?php echo $row["total"] . "<br />";?></td>                
                </tr>                  
            
            </table><br><br>				
<?php
}
?>
<div align="center"><a href="postlogout.php" >Print and Logout</a></div>
</body>
</html>