<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Mobile Details</title>
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
<?php
mysql_connect("localhost","root","");
mysql_select_db("mces");
$model_name=$_GET['var'];
$q1="select * from addmob where model='$model_name'";
$run=mysql_query($q1);
?>
			<center><table class="cart_table" border="border">
            	<tr class="cart_title">
                	<th colspan = "2"> <?php echo $model_name;?> </th>
				</tr>
               
                
<?php
$row=mysql_fetch_array($run);
?>
			<tr>
                	<th colspan = "2"><img src="cartimages/<?php echo $model_name;?>.jpg" alt="" title="" border="0" /></th>
			</tr>
			<tr >
				<th>Brand</th>
				<td><?php echo $row["brand"] . "<br />";?></td> 
			</tr>
			<tr>
				<th>Model</th>
				<td><?php echo $row["model"] . "<br />";?></td> 
			</tr>
			<tr>
				<th>Sim Type</th>
				<td><?php echo $row["s_t"] . "<br />";?></td> 
			</tr>
			<tr>
				<th>TouchScreen</th>
				<td><?php echo $row["touch"] . "<br />";?></td> 
			</tr>
			<tr>
				<th>Display</th>
				<td><?php echo $row["disp"] . "<br />";?></td> 
			</tr>
			<tr>
				<th>Resolution</th>
				<td><?php echo $row["resol"] . "<br />";?></td> 
			</tr>
			<tr>
				<th>Operating System</th>
				<td><?php echo $row["os"] . "<br />";?></td> 
			</tr>
			<tr>
				<th>Internal Memory</th>
				<td><?php echo $row["im"] . "<br />";?></td> 
			</tr>
			<tr>
				<th>Ram</th>
				<td><?php echo $row["ram"] . "<br />";?></td> 
			</tr>
			<tr>
				<th>Expandable</th>
				<td><?php echo $row["expand"] . "<br />";?></td> 
			</tr>
			<tr>
				<th>Primary Camera</th>
				<td><?php echo $row["pc"] . "<br />";?></td> 
			</tr>
			<tr>
				<th>Secondary Camera</th>
				<td><?php echo $row["sc"] . "<br />";?></td> 
			</tr>
			<tr>
				<th>Flash</th>
				<td><?php echo $row["flash"] . "<br />";?></td> 
			</tr>
			<tr>
				<th>Network Type</th>
				<td><?php echo $row["nt"] . "<br />";?></td> 
			</tr>
			<tr>
				<th>Battery</th>
				<td><?php echo $row["bat"] . "<br />";?></td> 
			</tr>
			<tr>
				<th>Warranty(in months)</th>
				<td><?php echo $row["warr"] . "<br />";?></td> 
			</tr>
			<tr>
				<th>Price</th>
				<td><?php echo $row["price"] . "<br />";?></td> 
			</tr>
			
		</table></center><br><br>
		<center><a href="search.html">&lt; Search</a>
		&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		<a href="dispfeed.php?var=<?php echo $row['model']?>">Feedback</a>
		&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		<a href="addcart.php?var=<?php echo $row['model']?>"> Add to Cart&gt;</a><center>
		
</body>
</html>