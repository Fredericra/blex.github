<?php 
require "../private/loding.php";
require "../function/function.php";
loding::auto();
$base=new base("produit");
$base1=new base("amis");
$ajouter=$_POST['ajouter'];
$premier=strstr($ajouter,"&",true);
$dexieme=substr(strstr($ajouter,"&"), 1);

$select=select($base1,"inter",$ajouter);
$ajouter1=$dexieme."&".$premier;
$inter=isset($select['inter'])?$select['inter']:null;

if($inter==$ajouter1 or $inter==$ajouter)
{
	echo "cette amis";
}
else
{
	$insertion=insertion($base1,"pseudo='$premier',pseudo1='$dexieme',inter='$ajouter'");
}

 ?>