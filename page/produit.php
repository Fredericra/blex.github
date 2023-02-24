<br><br><br>
<?php 	

$produit =pdo()->query("SELECT * FROM admin INNER JOIN produit ON produit.pseudo=admin.pseudo");
$product=$produit->fetch();
$image=new photo($product);
while ($product=$produit->fetch()) {
	echo image_pub($image,$product);
}

 ?>