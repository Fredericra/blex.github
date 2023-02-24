<?php
$query=$_GET['preg'];
$conslte=pdo()->prepare("SELECT * FROM produit WHERE id=?");
$conslte->execute(array($query));
$t=$conslte->fetch();
$explode=explode("/", $t['image']);
 ?>
 <br><br><br>
<div class="w3-container">
	<div class="w3-third w3-container">
		<img src="pub/<?=$explode[0] ?>"  style="width: 100%">
		<br>
		<?php 	
			if(count($explode)>=3)

			{
				 ?>
				 <img src="pub/<?=$explode[2]?>" class="w3-margin-top" style="width:100%">
				 <?php 	

			}


		 ?>
	</div>
	<div class="w3-third w3-container">
		<?php 	
			if(count($explode)>=2)

			{
				 ?>
				 <img src="pub/<?=$explode[1]?>"  style="width:100%">
				 <?php 	

			}
			if(count($explode)>=4)
			{
				 ?>
				  <img src="pub/<?=$explode[3]?>"  class="w3-margin-top" style="width:100%">
				 <?php 	
			}

		 ?>
		
	</div>
	<div class="w3-third w3-container w3-card-24 w3-padding">
		<h2 class="text-primary">@<?=$t['pseudo'] ?></h2>
		<h2 class="text-center"><?=$t['titre']?></h2>
		<br>	
		<h4><?=$t['text'] ?></h4>
		<p>PRIX:	<b>	<?=$t['prix'] ?></b></p>
		<br>	
		<?php 	
			$input=input_area($form,"comment","commentaire");
				$sub=submit_primary($form,"comment");
				echo post($form,$input.$sub);


		 ?>
	</div>
</div>