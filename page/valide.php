<br><br>
<?php 

$get=$_GET['trasaction'];
$budge=select($base2,"pseudo",$get);
$profil=select($base1,"pseudo",$get);
 ?>
<div class="w3-container">
	<div class="w3-half w3-container">
		<img src="<?=$profil['img'] ?>" class="w3-round-xlarge w3-hover" style="width: 100%">
	</div>
	<div class="w3-half w3-container">
		<p class="alert alert-primary text-center">votre trasaction acceder</p>
		<p class="text-text-success"> <i style="font-size: 25px;letter-spacing: 7px" class="fa fa-user"> <?=$profil['pseudo']?></i></p>
		<p class="text-text-success"> <i style="font-size: 20px;letter-spacing: 1px" class="fa fa-envelope"> <span class="text-primary"><?=$profil['mail']?></span> </i></p>
		<p>votre solde est : <span class="" style="font-size: 25px"><?=$budge['argent']; ?></span> <span style="font-size: 45px">,000 Ar</span></p>
		<p class="text-center text-danger"><i class="text-center fa fa-check-square fa-4x"></i></p>
		<div class="">
		
			<h2 class="text-center"><span class="w3-tag w3-round-xlarge w3-blue">e-</span>commerce</h2>
		</div>
	</div>
</div>