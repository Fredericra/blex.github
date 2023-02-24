<?php 
require "../private/loding.php";
require "../function/function.php";
loding::auto();
$base=new base("produit");
$id=substr(strstr($_POST['id'],"_"), 1);
$value=strstr($_POST['id'] ,"_",true);
if($value==="aime")
{
	$nbr=select($base,"id",$id);
	$aime=$nbr['aime'];
	$aime=1;
	update($base,"aime='$aime'","id",$id);
	echo $aime;
}
elseif($value==="naime")
{
	$nbr=select($base,"id",$id);
	$aime1=$nbr['aime'];
	$aime2=$nbr['naime'];
	$aime1=1;
	$aime=$aime1-$aime2;
	update($base,"aime='$aime',naime='$aime1'","id",$id);
	echo $aime1;
}

 ?>