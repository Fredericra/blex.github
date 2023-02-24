<div class="w3-container">
	<h3 class="text-center text-primary">cettte page <span class="text-success">admin</span> autorise</h3>
	<p>si vous a compte de vente <span>veuillez clique sur cette lien <span><a href="index.php?p=rejoint">connect<i class="fa  fa-arrow-circle-o-down"></i></a></span></span></p>
<hr class="w3-clear">
<?php 
$select=select($base1,"pseudo",value($form,"admin"));
$select1=select($base1,"mail",value($form,"mail"));
$verify=input1(value($form,"admin"),toast($toast,"veuillez entre votre pseudo"));
$verify2=input(value($form,"nom"),toast($toast,"veuillez entre votre nom"));
$verify3=input(value($form,"prenom"),toast($toast,"veuillez entre votre prenom"));
$verify4=verify_mdp(value($form,"pass"),toast($toast,"mots de pass entre 8 et 15"));
$verify5=compare(value($form,"pass"),value($form,"confirm"),"mots de pass non identique");
$verify6=compare_meme(isset($select['pseudo'])?$select['pseudo']:null,value($form,"admin"),toast($toast,"cette pseudo est deja pris"));
$verify7=compare_meme(isset($select1['mail'])?$select1['mail']:null,value($form,"mail"),toast($toast,"cette mail est deja pris"));
$code=confirm(30);$input=input_text($form,"admin","veuillez votre pseudo");
$input1=input_text($form,"nom","veuillez votre nom");
$input2=input_text($form,"prenom","veuillez votre prenom");
$input3=input_mail($form,"mail","veuillez votre mail actif");
$input4=input_password($form,"pass","veuillez entre votre mots de pass");
$input5=input_password($form,"confirm","confirm votre mots de pass");
$submit=submit_primary($form,"connect");

if($verify6==null && $verify7==null && $verify==null && $verify2==null && $verify3==null && $verify4==null && $verify5==null)
{
	$pseudo=value($form,"admin");
	$nom=value($form,"nom");
	$prenom=value($form,"prenom");
	$mail=value($form,"mail");


	$has=password_hash(value($form,"pass"), PASSWORD_BCRYPT);
	insertion($base1,'
		pseudo="'.$pseudo.'",
		nom="'.$nom.'",
		prenom="'.$prenom.'",
		mail="'.$mail.'",
		mdp="'.$has.'",
		code="'.$code.'"



		');
	$ret=select($base1,"pseudo",$pseudo);
	$ok=strrev($ret['code']);
	header("location:index.php?p=confirm&&dex=$ok");
}
else
{
	echo $verify;
	echo $verify2;
	echo $verify3;
	echo $verify4;
	echo $verify5;
	echo $verify6;
	echo $verify7;
}

echo post($form,$input.$input1.$input2.$input3.$input4.$input5.$submit);

 ?>
<hr class="w3-clear">
</div>