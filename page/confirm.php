<?php 
$red=$_GET['dex'];
$redux=strrev($_GET['dex']);
$pro=select($base1,"code",$redux);
if($pro)
 {
 	 ?>
 	 <div class="w3-container">
	<div class="w3-quarter w3-container"><h2>Bienvenue,</h2></div>
	<div class="w3-half w3-container"><h2><?=$pro["pseudo"]?></h2></div>
</div>
<div class="w3-container">
	<h2 class="text-primary text-center">vous etez sur le liste, veuillez comfirme</h2>
</div>
<br>
<div class="w3-container w3-card-24 w3-padding w3-round-xlarge">
	<?php 
	$input2=input_text($form,"stand","nom de stand");
	$input=input_password($form,"mdp","reecrire votre mots de pass");
	$input1=input_text($form,"confirm","entre votre confirmation");
	$sub=submit_primary($form,"confirmation");
	echo post($form,$input2.$input.$input1.$sub);
	$mapitovy=compare($pro['code'],value($form,"confirm"),toast($toast,"code non indentique"));
	$reel=password_verify(value($form,"mdp") ,$pro['mdp']);
	if($reel)

	{
		if($mapitovy==null)
		{
			$stand=value($form,'stand');
			update($base1,"confirm='Y',nom_stand='$stand',statue='l'","pseudo",$pro['pseudo']);
			header("location:index.php?page=compte&&regex=$red");
		}else
		{
			echo $mapitovy;
		}
	}else
	{
		echo toast($toast,"mots de pass oublier");

	}



	 ?>
</div>
 	 <?php 
 }
 	?>
 	<br><br>
 	<h2 style="display: <?= !$reel?'block':'none'; ?>">mots de pass oblier <a href="index.php?p=inscrire">inscrire</a></h2>
	<?php 


 ?>
