<?php 
require "../function/function.php";
$post=$_POST['id'];
$str=substr(strstr($post, '_'), 1);
$dele=pdo()->prepare("DELETE FROM produit WHERE id=?");
$dele->execute(array($str));
echo "bien";
 ?>