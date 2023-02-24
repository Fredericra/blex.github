<?php 

require "private/loding.php";
require "function/function.php";
loding::auto();
$nav=new nav();
$nav->class="w3-round w3-hover-black";
$base=new base("produit");
$base1=new base("admin");
$form=new form($_POST);
$file=new form($_FILES);
$base2=new base("budge");
$base3=new base("amis");
$base4=new base("message");
$toast=new toast(["img"=>"webimg/deco1.jpg","date"=>date("y-m-d"),"send"=>"<i class='w3-display-middle'><span class='w3-tag w3-round-xlarge'>e-</span> commerce</i>"]);
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 	<link rel="icon"  type="icon" href="webimg/deco1.jpg">
 	<link rel="stylesheet" type="text/css" href="w3/w3.css">
 	<link rel="stylesheet" type="text/css" href="fa/css/font-awesome.min.css">
 	<link rel="stylesheet" type="text/css" href="bootstrap/bootstrap.min.css">
 	<link rel="stylesheet" type="text/css" href="aos/aos.css">
 	<script type="text/javascript" src="jquery/jquery.js"></script>
<script type="text/javascript" src="bootstrap/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="aos/aos.js"></script>
 	<style type="text/css">
 		body{
 			font-family: comic sans;

 		}
 		input[type='file']
 		{
 			display: none;
 		}

 	</style>
 </head>
 <body>
		 <?php 

require "parametre/navigation.php";
$requete=isset($_GET['p'])?$_GET['p']:"Acceuil";
$gra=isset($_GET['page'])?$_GET['page']:null;
if(isset($_GET['page']))
{
	session_start();
	isset($_SESSION['code'])?$_SESSION['code']:header("location:index.php?p=Acceuil");
	$redux=$_SESSION['code'];
	$pro=select($base1,"code",$redux);
	$rect=pdo()->prepare("SELECT * FROM produit WHERE pseudo=?");
	$rect->execute(array($pro['pseudo']));
	$isa=$rect->rowCount();
	$rect1=pdo()->prepare("SELECT * FROM produit");
	$rect1->execute();
	$isa1=$rect1->rowCount();
	$rect2=pdo()->prepare("SELECT * FROM admin");
	$rect2->execute();
	$isa2=$rect2->rowCount();
	$rect3=pdo()->prepare('SELECT * FROM message WHERE inter LIKE "%'.$pro['pseudo'].'%" ');
	$rect3->execute();
	$isa3=$rect3->rowCount();
	$img=isset($pro['img'])?$pro['img']:null ;
	$donne=
	[
		"href1"=>"index.php?page=actualite",
		"href2"=>"index.php?page=notif&&",
		"href3"=>"index.php?page=user&&",
		"href4"=>"index.php?page=deco&&",
		"href5"=>"index.php?page=reference",
		"href6"=>"index.php?page=compte",
		"href7"=>"index.php?page=message",
		"bill"=>[$isa1,$isa,$isa2+1,0,$isa3],
		"img"=>$pro['img']


	];
	$navigateur=new navigation();
	echo $navigateur->nav_deuxieme($donne);
	$creer=new creer();
	admin($creer,$pro);
	require "donne/".$pro['code'].".php";

	if($statue==="h")
	{
		unset($_SESSION['code']);
		header("location:index.php?p=Acceuil");
	}elseif (isset($_GET['page']) && $_GET['page']=="deco") {

		update($base1,"statue='h'","pseudo",$pro['pseudo']);
		session_destroy();
		header("location:index.php?p=Acceuil&&");
	}
	elseif ($_GET['page']==="notif") {
		require "compte/notif.php";
		
	}
	elseif($_GET['page']==="actualite")
	{
		require "compte/actualite.php";

	}
	elseif($_GET['page']==="user")
	{
		require "compte/user.php";
	}
	elseif($_GET['page']==="message")
	{
		require "compte/message.php";
	}
	else
	{
		require "deux/deux.php";
	}
	
}
else
{
	echo $navigation=navi($nav,$donne);
	if($requete==="Acceuil")
	{
		require "page/Acceuil.php";
	}elseif($requete==="consulte")
	require "page/consulte.php";
	elseif($requete==="achete")
		require "page/achete.php";
	elseif($requete==="remise")
		require "page/remise.php";
	else
	{
			require "principale/index.php";

	}

}


		  ?>
		  <div class="w3-container">
		  	
		  		  <div id="mymodal" class="modal" aria-hidden="true">
				  <span class="close" style="font-size:80px !important;cursor: pointer;margin-left: 75%;background:">&times;</span>
				  <div class="w3-half w3-container">
				  <img class="modal-content" id="image" style="height:;width:;margin-left: 60%">
				  <div id="caption"></div>
				  <h1 id="text"></h1>
				  </div>
				  <div class="w3-half w3-container">
				  	
				  </div>
		  	</div>
		  </div>
		
		 
		  <div class="w3-container w3-bottom w3-card w3-padding">
		  	 <i class="">www.e-commerce.mg</i><i class="w3-right">copyright 2023 frederic </i>
		  </div>
		 

<script type="text/javascript">
	$(function()
		{
		AOS.init();

		});

window.addEventListener("click", async function(e)
{

	
	if(e.target.localName==="button")
	{
		name=e.target.id;

		fils=document.getElementById(name);

		if(/delete_/.test(name))
		{
			$.ajax({
				url:"supprime/supprime.php",
				method:"post",
				data:{id:name},
				success:function(donne)
				{
					parent=fils.parentElement;
					if(donne==="bien")
					{
						setTimeout(()=>{
							parent.remove();
						},3000)

					}
				}
			});
		}
		else if(/_/.test(name) && /actualite/.test(location.href))
		{
			$.ajax({
				url:"aime/aime.php",
				method:"post",
				data:{id:name},
				success:function(donne)
				{
					reg=document.getElementById(name);
					reg.firstChild.innerHTML=donne;
				}
			})
		}
	}
	else if(e.target.localName=="i")
	{
		if(/&/.test(e.target.id))
		{
			donne=e.target.id;
			$.ajax({
				url:"ajouter/ajouter.php",
				method:"post",
				data:{ajouter:donne},
				success:function(tous)
				{
					console.log(tous);
				}
			})
		}
		else if(/@/.test(e.target.id))
		{
			blex=e.target.id.replace("@","&&");
			location.href="index.php?"+blex+"";
		}

		
	}
	

                                          window.addEventListener("mousedown",function(e) 
                                          {
                                           
                                            id=e.target.id;
                                            
                                              type=e.target.localName;

                                            if(type=="img")
                                            {
                                            	text=document.getElementById("text");
                                              modal=document.getElementById("mymodal");
                                               image1=document.getElementById("image");
                                              img=document.getElementById(id);
                                              parent=img.parentElement;

                                              
                                              caption=document.getElementById("caption");
                                              close=document.getElementsByClassName("close")[0];
                                              img.onclick=function()
                                              {
                                                modal.style.display="block";
                                                text.style.marginLeft="500px";
                                                text.innerHTML="image";
                                              image1.src=img.src;
                                             
                                              
                                              }
                                              close.onclick=function()
                                              {
                                                modal.style.display="none";
                                              }
                                          
                                            
                                            }
                                             });

})
</script>
 </body>
 </html>
