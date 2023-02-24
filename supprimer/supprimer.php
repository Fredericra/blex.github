<?php 
require "../private/loding.php";
require "../function/function.php";
loding::auto();
$base=new base("message");
$eto=$_POST['valide'];
if(!empty($eto))
{
	delete($base,"id",$eto);
	echo "bien";
}


 ?>