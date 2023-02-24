<?php 
$get=$_SESSION['code'];
$page=$_GET['page'];
$mety=isset($_GET['page'])?$_GET['page']:"reference";
 ?>
<br>
<div class="w3-container">
	<div class="w3-third w3-sidebar w3-collapse w3-card">
		<div class="w3-container w3-padding">
			<ul class="nav nav-pills" style="cursor: pointer;">
				<li class="w3-margin-left" id="li1"><a href="index.php?page=<?=$page?>&&redux=search"><i class="fa fa-search"> cherche</i></a></li>
				<li class="w3-margin-left" id="li2"><a href="index.php?page=<?=$page?>&&redux=param"><i class="fa fa-cogs"> parametre</i></a> </li>
				<li class="w3-margin-left" id="li3"><a href="index.php?page=<?=$page?>&&redux=change"> <i class="fa fa-camera"> outils</i></a> </li>
				<li class="w3-margin-left" id="li4"><a href="index.php?page=<?=$page?>&&redux=carte"><i class="fa fa-cc-visa"> carte</i></a> </li>
				<li class="w3-margin-left" id="li5"><a href="index.php?page=<?=$page?>&&redux=budge"><i class="fa fa-dollar"> budge</i></a>  </li>
			</ul>
		</div>
		<div class="w3-container">
			<?php 
			$redux=isset($_GET['redux'])?$_GET['redux']:null;
				if($redux=="search")
				{
					echo tag("h1","text-center text-primary","recherche");
					$input8=input_simple($form,"serach","veuillez rechereche...");
					$su=submit_simple($form,["chercher","w3-block w3-button w3-round"]);
					echo post($form,$input8.$su);

	$value=isset($_POST['serach'])?$_POST['serach']:null;
	$personne=pdo()->prepare('SELECT * FROM admin WHERE pseudo LIKE "%'.$value.'%"');
	$personne->execute();




				}elseif ($redux=="param") {
					 ?>
					 <br>
					 <div class="w3-container">
					 	<p class="text-primary" style="cursor: pointer;">modification profil <i class="fa fa-exchange text-success"></i></p>
					 	<ul class="nav navbar-nav"  id="param">
					 		<li id="pseudo" style="cursor: pointer;"><i class="fa fa-user"></i> Modifier Pseudo</li>
					 		<li id="mail" style="cursor: pointer;"><i class="fa fa-envelope"></i> Modifier mail</li>
					 		<li id="tel" style="cursor: pointer;"><i class="fa fa-phone"></i> Ajouter Numero telephone</li>
					 		<li id="date" style="cursor: pointer;"><i class="fa fa-calendar"></i> Ajouter Date de creation</li>
					 		<li id="stand" style="cursor: pointer;"><i class="fa fa-chevron-right"></i> Modifier nom de stands</li>
					 	</ul>
					 </div><br>
					 <div class="form">
					 	<form method="post">
					 		<input type="text" name="modifier" class="form-control" placeholder=""><br>
					 		<input type="submit" id="mod" class="w3-block w3-button" name="" value="">
					 	</form>
					 </div>
					<?php 
				}
				elseif ($redux=="carte") {
					$visa=select($base2,"pseudo",$pro['pseudo']);
					?>
					<br><br>
					<div class="w3-container">
						<div class="w3-half w3-container">
							<div class="w3-container w3-padding w3-round w3-card">
								<p class="" style="color: <?=preg_match("/[access]/", $visa['nom'])?"blue":"black"?>">Access Banque <i class="fa fa-bank"></i></p>

							</div>
						</div>
						<div class="w3-half w3-container">
							<div class="w3-container w3-padding w3-round w3-card">
								<p class=""style="color: <?=preg_match("/[bfv]/", $visa['nom'])?"blue":"black"?>">BFV <i class="fa fa-bank"></i></p>
							</div>
						</div>
					</div>
					<br>
					<h4 class="">votre code card <i class="fa fa-cc-visa"></i> </h4>
					<h4 class="w3-center w3-tag w3-blue w3-round w3-padding w3-margin-left" style="display: <?=isset($visa['code'])?'block':'none'?>"><?=isset($visa['code'] )?$visa['code'] :null ?></h4>
					<div class="w3-container">
						<?php 
						$d=confirm1(18);
						
							$bank=input_text($form,"bank","ajouter plus de bank...");
							$bank_sub=submit_simple($form,["ajouter","w3-block w3-button"]);
							echo post($form,$bank.$bank_sub);
							$Banque1=value($form,"bank");
							$sc=select($base2,"pseudo",$pro['pseudo']);
							if(isset($_POST['bank']) && !empty($_POST['bank']))
							{
								if(!$sc)
								{
									insertion($base2,'nom="'.$Banque1.'",code="'.$d.'",argent="100,000",card="e-commerce",pseudo="'.$pro['pseudo'] .'"');
								}elseif ($sc) {
									echo toast($toast,"vous etez deja creer un compte budge..");
								}
							}
							
						 ?>
					</div>
					<?php 
					
				}
				elseif ($redux==="budge") {
					$b=select($base2,"pseudo",$pro['pseudo']);
					 ?>
					 <h2 class="text-center">votre compte</h2>
					 <div class="w3-container">
					 	<div class=""><span style="font-size: 25px"><?=isset($b['argent'])?$b['argent']:null ?>,000</span><span class="text-primary" style="font-size: 50px">Ar</span></div>
					 </div>
					 <h4>retire sur <i class="fa fa-cc-discover"></i></h4>
					 <?php 
					  $argent1=input_text($form,"argentN","votre code card...");
					 $argent=input_text($form,"argent","somme argent retire...");
					 $argent_sub=submit_simple($form,["retire","w3-block w3-button w3-white"]);
					 echo post($form,$argent.$argent1.$argent_sub);

					  ?>
					 <?php 
				}
				elseif ($redux=="change") {
					$re="bien";
					$prof=simple_image($form,"profile","");
					$prof_sub=submit_simple($form,["changer photo de profil","w3-button w3-white w3-hover-white"]);
					echo formfile($form,$prof.$prof_sub);
					if(isset($_FILES['profile'])&& !empty($_FILES['profile']['name']))
					{
						changer_photo([$base1,$toast,"modifier avec success <i class='fa fa-smile-o text-primary'></i>"],$pro,["img","profile"]);
					}
					$prof1=simple_image($form,"couverture","");
					$prof_sub1=submit_simple($form,["changer photo de couverture","w3-button w3-white w3-hover-white"]);
					echo formfile($form,$prof1.$prof_sub1);
					if(isset($_FILES['couverture'])&& !empty($_FILES['couverture']['name']))
					{
						changer_photo([$base1,$toast,"modifier avec success <i class='fa fa-smile-o text-primary'></i>"],$pro,["couverture","couverture"]);
					}
					echo tag("h2","text-center text-primary","publier");
					$input=input_text($form,"publier","titre phote publication");
					$input1=input_area($form,"mark",["","3","50px",""]);
					$input2=input_text($form,"prix","prix article");
					$su=submit_simple($form,["Publier","w3-block w3-button w3-round"]);
					$photo=multiple_image($form,"image","fa-2x");
					echo formfile($form,$input.$input1.$input2.$photo.$su);
					$date=date("y-m-d h/i/s");
						$produit=pdo()->query("SELECT * FROM produit");
						$mapisy=$produit->rowCount();
					
					

					if(isset($_POST) && !empty($_POST['publier']) && !empty($_POST['mark']) && !empty($_POST['prix']))
					{
						$publier=htmlspecialchars(value($form,"publier"));
						$mark=nl2br(htmlspecialchars(value($form,"mark")));
						$prix=htmlspecialchars(value($form,"prix"));
					   	$file=file_exists("pub")?null:mkdir("pub");
					    foreach ($_FILES["image"]["error"] as $key => $error) {
					    if ($error == UPLOAD_ERR_OK) {
					    $tmp_name = $_FILES["image"]["tmp_name"][$key];
					    $name=preg_replace("/[*, ,(),-]/", "",basename($_FILES['image']["name"][$key]) );
					    $type=strtolower(substr(strstr($name,"."),1));
					    $type_name=strstr($name,".",true)."_".$mapisy;
					    $accepte=["mp4","jpg","jpeg","pnj"];
					    if(in_array($type, $accepte))
					    {
					      $namet=$type_name.".".$type."/";
					      $explode=explode("/", $namet);
					      $remove=@move_uploaded_file($tmp_name, "pub"."/".$namet);
					      $record=preg_replace("/[*, ,(),-]/","", implode("/",$_FILES['image']['name']));
							$record1=strtolower(str_replace(".", "_".$mapisy.".", $record));

					    }
					    
					    }
					   
					}
					 $requet=isset($record1)?$record1:null;
					    insertion($base,'image="'.$requet.'",titre="'.$publier.'",text="'.$mark.'",prix="'.$prix.'",pseudo="'.$pro['pseudo'] .'",date="'.$date .'"');
					}
				}
				elseif ($mety=="actualite") {
					require "astuce/".$mety.'.php';
				}
			

			
			 ?>

		</div>
	</div>
	<div class="w3-theequarter w3-container" style="margin-left: 35%">
		<?php 
		if($redux=="search")
		{
			
			 ?>
			 <p class="text-center">votre rechere...<i class="fa fa-search"></i></p>

			<?php 
			$mety=isset($personne)?$personne:null;
			if($mety)
			{
					while ($mety=$personne->fetch()) {
					 ?>
					 <br>	
						<div class="w3-container w3-card-12">
			 			<div class="row">
				 		<div class="col-md-2"><img src="<?=$mety['img'] ?>" class="w3-round" style="width: 75px;height: 65px"></div>
				 		<div class="col-md-4"><p style="cursor: pointer;" class="text-primary"><?=$mety['pseudo'] ?></p><p class="text-primary"><?=$mety['mail'] ?></p></div>
				 		<div class="col-md-4"></div>
				 		<div class="col-md-2" style="cursor: pointer;"><?= $pseudo==$mety['pseudo']?" <i class='fa-2x'>moi</i>":"<i class='fa fa-user-plus fa-2x w3-margin-top'></i>"; ?></div>
				 		</div>
				 		</div>
					<?php 
					}
			
			}
		}
		else{
			
		require "compte/".$mety.".php";
		}
		

		 ?>

	</div>
</div>


