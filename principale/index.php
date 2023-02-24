<br><br>
<?php
 $get=isset($_GET['p'])?$_GET['p']:"Acceuil";
 $get1=isset($_GET['d'])?$_GET['d']:"apropos";
  ?>
<div class="w3-container">
		<br><br>
	<div class="w3-sidebar w3-collapse w3-third w3-animate-left w3-card w3-padding">
	
		<div class="w3-display-container w3-margin-bottom">
			<img src="webimg/deco5.jpg" class="w3-round-jumbo" style="width: 100%">
			<h2 class="w3-display-middle"><span class="w3-tag w3-round-xlarge">e-</span> commerce</h2>
		</div>
		<hr class="w3-clear" style="font-size:10px !important">
	<?php
	if(isset($_GET['dex']))
	{
		$redux=strrev($_GET['dex']);
		$pro=select($base1,"code",$redux);
		?>
		<h1 class="text-success text-center">Confirmation</h1>
		
		<i class="fa fa-arrow-circle-o-down"></i>	<h4 class="w3-margin-right"><?=$pro['code'] ?></h4>
	
		<?php
	}
	elseif ($get=="achete") {
		$repre=input_text($form,"acheter","entre votre non de banque");
		$repre1=input_text($form,"acheter","code de votre carte");
		$repre3=input_password($form,"acheter","code compte");
		$repre2=submit_primary($form,"acheter");
		echo post($form,$repre.$repre1.$repre3.$repre2);
	}
	elseif (isset($_GET['get'])) {
		?>
		<h1 class="text-primary text-center">recuperation compte</h1>
		
	
	
		<?php
	}
	elseif (isset($_GET['co'])) {
		?>
		<h1 class="text-primary text-center">dexieme etape 2</h1>
		
	
	
		<?php
	}
	elseif (isset($_GET['fin'])) {
		?>
		<h1 class="text-primary text-center">etape finale</h1>
		
	
	
		<?php
	}
else{
	?>
		<div class="w3-white w3-card">
			<ul class="nav nav-pills w3-margin">
				<li><a href="index.php?d=contact&&p=<?=$get?>" class="btn btn-primary m-1">Contact</a></li>
				<li><a href="index.php?d=produits&&p=<?=$get?>" class="btn btn-primary m-1">Produit +</a></li>
				<li><a href="index.php?d=Article&&p=<?=$get?>" class="btn btn-primary m-1">Article +</a></li>
				<li><a href="index.php?d=notif&&p=<?=$get?>" class="btn btn-primary m-1">notification</a></li>
			</ul>
		</div>
	<?php
		}
	 
			require "page/".$get1.".php";
		 ?>
	</div>
	<div class="w3-twothird w3-container" style="margin-left: 36%">
		<?php 
			
			require "page/".$get.".php";

		 ?>
	</div>
</div>