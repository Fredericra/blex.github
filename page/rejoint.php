<div class="w3-container">
	<h3 class="text-center text-primary">cettte page <span class="text-success">admin</span> autorise</h3>
	<p>si vous creer compte de vente <span>veuillez clique sur cette lien <span><a href="index.php?p=inscrire"> inscrire<i class="fa  fa-arrow-circle-o-down"></i></a></span></span></p>
<hr class="w3-clear">
<?php 

$input=input_text($form,"admin","veuillez entre votre numero telephone,mail ou pseudo");
$input1=input_password($form,"pass","veuillez entre votre mots de pass");
$submit=submit_primary($form,"connect");

$select_pseudo=select($base1,"pseudo",htmlspecialchars(value($form,"admin")));
$select_mail=select($base1,"mail",htmlspecialchars(value($form,"admin")));
$v=str_replace(" ","_", value($form,"admin"));
if($select_mail or $select_pseudo)

{
	$requte=isset($select_mail['mdp'])?$select_mail['mdp']:$select_pseudo['mdp'] ;
	$mdp=password_verify(value($form,"pass") ,$requte);
	if($mdp)
	{
	$ret=isset($select_pseudo['code'])?$select_pseudo['code']:$select_mail['code'];
	$metis=strrev($ret);
	update($base1,"statue='l'","code",$ret);
		session_start();
	$_SESSION['code']=$ret;
	header("location:index.php?page=actualite");

	}
	else
	{
		echo toast($toast,"mots de pass inccorect");
	}
}
else
{
	echo toast($toast,"mail ou pseudo n'exite pas");

	 

}

echo post($form,$input.$input1.$submit);

 ?>
<hr class="w3-clear">
</div>
<h2 class="" style="display: <?=!empty($_POST['pass'])?'block':'none'?>">mots de pass  <a href="index.php?p=recupe&&get=<?=$v?>"><i class="fa">oublier</i></a></h2>