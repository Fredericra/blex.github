<?php 
require "../private/loding.php";
require "../function/function.php";
loding::auto();
$base=new base("message");
$base1=new base("admin");
$donne=$_POST['donne'];
$value=nl2br($_POST['value']);
$send=strstr($donne,"&",true);
$envoyer=substr(strstr($donne,"&"),1);
$mivadika=$envoyer."&".$send;
if(!empty($value))

{
	insertion($base,"message='$value',pseudo='$send',inter='$donne'");
	$select=pdo()->prepare("SELECT * FROM message WHERE inter=? ORDER BY id DESC");
	$select->execute(array($mivadika));
	$mahite=$select->fetch();
	$mandefa=select($base1,"pseudo",$send);
	$mandray=select($base1,"pseudo",$envoyer);
	$array=[$mandefa,$mahite,$value,$mandray];
	echo json_encode($array);
}


 ?>