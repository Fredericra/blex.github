
<?php 

$acceuill=pdo()->query("SELECT * FROM admin INNER JOIN produit ON produit.pseudo=admin.pseudo");
$tou=$acceuill->fetch();

$nn=$acceuill->rowCount();
$image=new photo($tou);
if($tou)
{

}

 ?>
 <br>	<br>	<br>	
 <div class="w3-container">
	<?php

	while($tou=$acceuill->fetch()) {
		$ex=explode("/",$tou['image']);
		?>
		 <div class="w3-third w3-container w3-card-24 w3-padding w3-margin" data-aos="fade-up" data-aos-delay="200" style="min-height: 600px;width: 375px" id="pub_<?=$tou['id']?>">
    	<h2 class="w3-blue text-center"><?=$tou['titre']?></h2>
    	<div class="w3-container w3-white" style="min-height: 100px">
        <p><b><?=$tou['text']?></b></p>
         <p>PRIX : <b><?=!empty($tou['prix'])?$tou['prix']:"aucu reference" ?></b>  <span class="w3-tag w3-round" style="font-size: 22px ">AR</span></p>
        <p>QUANTITE: <b><?=empty($tou['prix'])?$tou['prix']:"aucu reference" ?></b></p>
      </div>
      <img src="pub/<?=$ex[0]?>" alt="Norway" style="width:100%;height: 300px" class="w3-hover-opacity" id="image_<?=$tou['id'] ?>">
      <br><br>
      <div class="w3-center">
      	<i class="w3-button w3-round"><a href="index.php?p=consulte&&&&preg=<?=$tou['id']?>"><i class="fa fa-eye"> Consulter</i></a></i>
      	<i class="w3-button w3-round"><a href="index.php?p=achete&&preg=<?=$tou['id']?>"><i class="fa fa-dollar">Acheter </i></a> <span class="w3-tag w3-small w3-right w3-round"><?=$tou["achete"]?></span></i>
     	 </div>
    	</div>
		<?php
		
	}

 
	  ?>
 
  </div>