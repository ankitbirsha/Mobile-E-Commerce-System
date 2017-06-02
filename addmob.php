<?php
mysql_connect("localhost","root","");
mysql_select_db("mces");
	
	if(isset($_POST['submit'])) 
	{
		$iid=$_POST["inv_id"];
	$brand=$_POST["brand"];
	$model=$_POST["model"];
	$s_t=$_POST["sim_type"];
	$touch=$_POST["touch"];
    $disp =$_POST["disp"];
	$resol    =$_POST["resol"];
	$os     =$_POST["os"];
	$im     =$_POST["im"];
	$ram     =$_POST["ram"];
	$expand     =$_POST["expand"];
	$pc    =$_POST["pc"];
	$sc    =$_POST["sc"];
	$flash    =$_POST["flash"];
	$nt     =$_POST["nt"];
	$bat     =$_POST["bat"];
	$warr     =$_POST["warr"];
	$stock     =$_POST["stock"];
	$price     =$_POST["price"];
	
	if($iid=='' OR $brand=='' OR $model=='' OR 	$s_t=='' OR  $touch=='' OR $disp=='' OR $resol=='' OR   $os=='' OR  $im=='' OR   $ram=='' OR $expand=='' OR   $pc=='' OR 
	$sc=='' OR $flash=='' OR  $nt=='' OR  $bat=='' OR  $warr=='' OR  $stock=='' OR     $price =='' OR   )
	{
		echo "<script>alert('fill in the all field')</script>";
    echo "<script>window.open('addmobile.html','_self')</script>";
	}
	
	$query="insert into addmob(iid,brand,model,s_t,touch,disp,resol,os,im,ram,expand,pc,sc,flash,nt,bat,warr,stock,price ) values('$iid', '$brand', '$model', '$s_t', '$touch', '$disp',
	'$resol', '$os', '$im', '$ram', '$expand', '$pc', '$sc', '$flash', '$nt', '$bat', '$warr', '$stock',  '$price')" ;   

    if( $run_post=mysql_query($query))
  	{

	
	echo "<script>alert('Added Successfull')</script>";
  	echo "<script>window.open('addmobile.html','_self')</script>";

}
else {
	echo "hello";
}
}

?>