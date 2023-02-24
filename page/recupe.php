<br>

<div class="w3-container">
	<h2><span class="w3-tag w3-round-xlarge">e-</span>commerce</h2>
</div>
<br>
<?php 
if(isset($_GET['co']))
{
$input=input_text($form,"nom","veuillez entre nom");
$input1=input_text($form,"prenom","veuillez entre prenom");
$submit=submit_primary($form,"etape 2");
echo post($form,$input.$input1.$submit);
$select2=select($base1,"mail",$_GET['co']);
if($select2['nom']==value($form,"nom") && $select2['prenom']==value($form,"prenom"))
{
	$se=$_GET['co'];
	 ?>
  <br><br>
 <div class="w3-container">
 	<h2 class="text-primary">verification bien suivant <a href="index.php?p=recupe&&fin=<?=$_GET['co']?>"> <i class="fa fa-thumbs-up"></i></a></h2>
 </div>

 <?php 
}else
{
	 ?>
  <br><br>
 <div class="w3-container">
 	<h1 class="text-danger">cher utilisateur, votre prenom et nom n'exite</h1>
 </div>

 <?php 
}
}
elseif (isset($_GET['fin'])) {
	?>
<h1 class="text-center ">Retianilisation de mots de pass</h1>

 <?php 

$input=input_password($form,"pass","veuillez entre votre nouveau mots de pass");
$input1=input_password($form,"confirm","veuillez confirmer votre pass");
$submit=submit_primary($form,"etape 2");
echo post($form,$input.$input1.$submit);
$verify= verify_mdp(value($form,"pass") ,toast($toast,"veuillez entre mots de pass entre 8 et 15 caracteur"));
$compare=compare(value($form,"pass"),value($form,"confirm"),toast($toast,"mots de pass non identique, errer de comfirm"));
if($verify==null && $compare==null)
{
	$has=password_hash(value($form,'pass') , PASSWORD_BCRYPT);
	$sec=select($base1,"mail",$_GET['fin']);
	$dec=strrev($sec['code']);
	update($base1,"mdp='$has',statue='l'","mail",$_GET['fin']);
	header("location:index.php?page=actualite&&regex=$dec");
}
else
{
	echo $verify;
	echo $compare;
}



}
else
{
$input=input_mail($form,"admin","veuillez entre votre mail actuel");
$submit=submit_primary($form,"etape suivant");
echo post($form,$input.$submit);
$select=select($base1,"mail",value($form,"admin"));
$se=isset($select['mail'])?$select['mail']:null;
 ?>
  <br><br>
 <div class="w3-container">
 	<h2 class="text-primary" style="display: <?=$select?'block':'none'?>">verification bien suivant <a href="index.php?p=recupe&&co=<?=$se?>"> <i class="fa fa-thumbs-up"></i></a></h2>
 	<h2 class="text-danger" style="display: <?=!$select?'block':'none'?>">cher utilisateur, compte introuvable</h2>
 </div>

 <?php 
}

 ?>
