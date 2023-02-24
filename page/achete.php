<br>
<br>
<br>
<br>
<?php 	
$clients=isset($_GET['trasaction'])?str_replace("/"," ",$_GET['trasaction']):null;
	$i=isset($_GET['preg'])?$_GET['preg']:$_GET['val'];
$achete=pdo()->prepare("SELECT * FROM admin INNER JOIN produit ON admin.pseudo=produit.pseudo WHERE produit.id=?");
$achete->execute(array($i));
$eto=$achete->fetch();
$section=select($base2,"pseudo",$eto['pseudo']);
 ?>
<div class="w3-container">
	<div class="w3-quarter w3-container">

		<?php 
	if(isset($_GET['preg']))
	{

			echo tag("h4","text-center","Entre votre code carte");
	
		$achete=input_area($form,"carte",["",1,5,"entre numero card..."]);
		$achete2=input_area($form,"mail",["",1,5,"entre votre mail s'il vous plais..."]);
		$achete1=submit_primary($form,"acceder");
		echo post($form,$achete2.$achete.$achete1);
		$value=value($form,"carte");
		$value1=value($form,"mail");
		$select=select($base1,"mail",$value1);

		if($select)
		{
			$pseudo=str_replace(" ","/", $select['pseudo']);
			$bugde=select($base2,"pseudo",$select['pseudo']);
			$bugde1=isset($bugde["code"])?$bugde["code"]:null;
			if($bugde1===$value && $eto['pseudo']!=$select['pseudo'])
			{
					header("location:index.php?p=achete&&val=$i&&trasaction=$pseudo");
			}
			else
			{
				echo toast($toast,"code non accepter");
			}
		}
		else
		{
			echo toast($toast,"transaction occupe, non trouve");
		}

	}
	elseif (isset($_GET['val']))
	 {
	 	$bugde_client=select($base2,"pseudo",$clients);
	 	$propos=select($base1,"pseudo",$clients);
	 	 ?>
	 	 <p class="text-center alert alert-primary"><?=$clients?></p>
	 	 <p>votre solde <b><?=$bugde_client['argent'] ?></b> <span style="font-size: 25px">,000 Ar</span></p>
	 	<?php 
	 	
		$achete=input_password($form,"carte","entre votre mots de pass");
		$achete1=submit_primary($form,"acceder");
		echo post($form,$achete.$achete1);
		$mdp=password_verify(value($form,"carte") ,$propos['mdp']);
		$mpivarotra=$section['argent']+$eto['prix'];
		$pividy=$bugde_client['argent']-$eto['prix'];
		$rachete=select($base,"id",$i);
		$achete4=$rachete['achete'];
		if($mdp)
		{
			if($bugde_client['argent']>$eto['prix'])
			{
				$mety=update($base2,"argent='$mpivarotra'","pseudo",$section['pseudo']);
				if($mety)
				{
					$achete4=$achete4+1;
						update($base2,"argent='$pividy'","pseudo",$clients);
						update($base,"achete='$achete4'","id",$i);
						header("location:index.php?p=valide&&trasaction=$clients");
						

				}
			}
			else
			{
				echo toast($toast,"insuffisance de votre compte");
			}
			
		
		}
		else
		{
			echo toast($toast,"verification mots de pass incorecct");
		}
	}
		 ?>
	</div>
	<div class="w3-threequarter w3-container">
		
<?php 
if (isset($_GET['preg'])) {
	$image=new photo($eto);
echo image_slide($image,$eto);
}
elseif (isset($_GET['val'])) {
	echo tag("h1","alert alert-success text-center","cher clients de ".$eto['pseudo']);
		?>
	 	<div class="w3-container">
	 		<div class="w3-third w3-container">
	 			<h2 class="alert alert-primary"><i class="fa fa-bookmark"></i>  <?=$eto['prix'] ?> <span style="font-size: 15px"> AR</span></h2>
	 		</div>
	 		<div class="w3-third w3-container alert-danger w3-center"><i class="fa fa-exchange fa-4x"></i></div>
	 		<div class="w3-third w3-container">
	 			<p><b><?=$clients?></b></p>
	 			<p style="display: <?=$bugde_client['argent']>$eto['prix']?'block':'none'?>"><b>SOLDE RESTE <span style="font-size: 18px" class="alert alert-success"><?=$bugde_client['argent']-$eto['prix']; ?> Ar</span></b></p>
	 			<p>prix de objet: <?=$eto['prix']?>Ar <span class="text-primary">et</span> votre solde: <?=$bugde_client['argent'] ?>Ar 	</p>
	 			<p style="display: <?=$bugde_client['argent']>$eto['prix']?'none':'block'?>" class="alert alert-danger"><b>ERREUR DE TRASACTION</b></p>
	 		</div>
	 	</div>
	 	<br><br>
	 	<div class="w3-container">
	 		<h1 style="display: <?=$bugde_client['argent']>$eto['prix']?'block':'none'?>"><span class="text-primary">cher client</span> <span style="cursor: pointer;" class="text-success">@<?=$clients?> </span>achats vaide</h1>
	 		<h1 class="text-center"><span class="w3-tag w3-round-xlarge">e-</span> commerce</h1>
	 	</div>
	 	<?php 
}


 ?>


	</div>
</div>