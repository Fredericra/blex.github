<br><br><br>

<?php 

$selection=pdo()->prepare("SELECT * FROM admin INNER JOIN produit ON admin.pseudo=produit.pseudo ORDER BY produit.id ASC");
$selection->execute();
$sele=$selection->fetch();
$photo=new image($sele);
while ($tous=$selection->fetch())
 {
	echo image_pub($photo,$tous);
}

 ?>