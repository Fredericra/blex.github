<?php

function tag($tag,$class,$html)
{
  return "<{$tag} class='$class'>{$html}</{$tag} >";
}
function navi($objet,$donne)
{
	return $objet->navigation($donne);
}
/**
 * input mail
 * @param mixed $objet=$form
 * @param mixed $name=name input return id
 * @param mixed $label
 * @return mixed
 */
function input_mail($objet,$name,$label)
{
    $mail="email";
    return $objet->input($mail, $name, $label);
}
/**
 * input text
 * @param mixed $objet=$form
 * @param mixed $name=name input return id
 * @param mixed $label
 * @return mixed
 */
function input_text($objet,$name,$label)
{
    $mail="text";
    return $objet->input($mail, $name, $label);
}
/**
 * input password
 * @param mixed $objet=$form
 * @param mixed $name=name input return id
 * @param mixed $label
 * @return mixed
 */
function input_password($objet,$name,$label)
{
    $mail="password";
    return $objet->input($mail, $name, $label);
}
function input_search($objet,$name,$label)
{
    $mail="search";
    return $objet->input($mail, $name, $label);
}
/**
 * return ala ligne vide
 * @param mixed $objet class form
 * @return mixed
 */
function ligne_vide($objet)
{
    $tag = "";
  return $objet->ligne($tag);
}
/**
 * return ala ligne avec
 * @param mixed $objet class form
 * @return mixed
 */
function ligne($objet,$tag)
{

  return $objet->ligne($tag);
}
/**
 * submit couleur primary
 * @param mixed $objet $form
 * @param mixed $value
 * @return mixed
 */
function submit_primary($objet,$value)
{
    $couleur = "btn btn-primary";
    return $objet->submit($couleur, $value);
}
/**
 * submit couleur success
 * @param mixed $objet $form
 * @param mixed $value
 * @return mixed
 */
function submit_success($objet,$value)
{
    $couleur = "btn btn-success";
    return $objet->submit($couleur, $value);
}
/**
 * submit couleur danger
 * @param mixed $objet $form
 * @param mixed $value
 * @return mixed
 */
function submit_danger($objet,$value)
{
    $couleur = "btn btn-danger";
    return $objet->submit($couleur, $value);
}
/**
 * mitovy aminy $_POST ihany
 * @param mixed $objet class form
 * @param mixed $index=nom de input
 * @return mixed
 */
function value($objet,$index)
{
    return $objet->value($index);
}
/**
 * form post
 * @return mixed
 */
function post($objet,$contenue)
{
    $post="post";
    return $objet->form($post,$contenue);
}
/**
 * form get
 * @return mixed
 */
function get($objet,$contenue)
{
    $post="get";
    return $objet->form($post,$contenue);
}
/**
 * message toast
 * @param mixed $donne=toast
 * @return mixed
 */
function toast($objet,$message)
{
    return $objet->message($message);
}
/**
 * message toast
 * @param mixed $donne=toast
 * @return mixed
 */
function toast_evoyer($objet)
{
    return $objet->toast_input();
}
/**
 * verify un input entre carateur a et z
 * @param mixed $value index $_POST
 * @param mixed $contenue
 * @return mixed
 */
function input($value,$contenue)
{
    if(empty($value)||!preg_match('/^[a-z A-Z]+$/',$value))
    {
        return $contenue;
    }
    else
    {
        return null;
    }
}
/**
 * verify un input entre carateur a et z ET 0-9
 * @param mixed $value index $_POST
 * @param mixed $contenue
 * @return mixed
 */
function input1($value,$contenue)
{
    if(empty($value)||!preg_match('/^[a-z A-Z 0-9]+$/',$value))
    {
        return $contenue;
    }
    else
    {
        return null;
    }
}
/**
 * compare de deux objet
 * @param mixed $value index $_POST
 * @param mixed $contenue
 * @return mixed
 */
function compare($value,$value1,$contenue)
{
    if($value!=$value1)
    {
        return $contenue;
    }
    else
    {
        return null;
    }
}
/**
 * compare de deux objet
 * @param mixed $value index $_POST
 * @param mixed $contenue
 * @return mixed
 */
function compare_meme($value,$value1,$contenue)
{
    if($value==$value1)
    {
        return $contenue;
    }
    else
    {
        return null;
    }
}
/** 
 * verify pass
 * @param mixed $value index $_POST
 * @param mixed $contenue
 * @return mixed
 */
function verify_mdp($index,$contenue)
{
    $value=strlen($index);
    if(empty($value) || $value>15 || $value<8)
    {
        return $contenue;
    }
    else
    {
        return null;
    }
}
/**
 * insertion to base de donne
 * @param mixed $objet=$base
 * @param mixed $index=index of value
 * @param mixed $execute=excute value
 * @return mixed
 */
function insertion($objet,$index)
{

    return $objet->insertion($index);
}

/**
 * select un objet
 * @param mixed $objet
 * @param mixed $index
 * @param mixed $execute
 * @return mixed
 */
function select_tous($objet)
{
  return $objet->selection_tous();
}
/**
 * select un objet
 * @param mixed $objet
 * @param mixed $index
 * @param mixed $execute
 * @return mixed
 */
function select($objet,$index,$execute)
{
    return $objet->select($index,$execute);
   
}
/**
 * delete un de table
 * @param mixed $objet=$base depend de class
 * @param mixed $index where?
 * @param mixed $execute array()
 * @return mixed
 */
function delete($objet,$index,$execute)
{
    return $objet->delete($index, $execute);
}
function input_area($objet,$name,$style)
{
  return $objet->textarea($name,$style);
}
/**
 * update de nouveau colone
 * @param mixed $objet=$base
 * @param mixed $table=depend de constructeur
 * @param mixed $where where?
 * @param mixed $execute execute array
 * @return mixed
 */
function update($objet,$table,$where,$execute)
{
    return $objet->upgrade($table, $where, $execute);
}
/**
 * code confiramtion return 
 * @param mixed $halava
 * @return string
 */
function confirm($halava)
{
    $lettre="azertyuiopqsdfghjklwxcvbnAZERUIOPMQDMKFJGQDPW1203456789";
    return substr(str_shuffle(str_repeat($lettre, $halava)), 0, $halava);  
}
function confirm1($halava)
{
   $lettre="0123456789";
    return "e-".substr(str_shuffle(str_repeat($lettre, $halava)), 0, $halava);  
}
/**
 * creeer dossier admin
 * @param mixed $objet
 * @param mixed $donne
 * @return mixed
 */
function admin($objet,$donne)
{
    return $objet->dossier($donne);
}
 /**
  * multiple image
  * @param mixed $name=^form
  * @return mixed
  */
 function multiple_image($objet,$name,$class)
{
    return $objet->image_miltiple($name,$class);
}
 /**
  * input image simple
  * @param mixed $objet$for
  * @param mixed $name
  * @return mixed
  */
 function simple_image($objet,$name,$class)
{
    return $objet->image_simple($name,$class);
}
 /**
  * video mutlple
  * @param mixed $objet
  * @param mixed $name
  * @return mixed
  */
 function multiple_video($objet,$name,$class)
{
   return $objet->video_miltiple($name,$class);
}
 /**
  * simple video
  * @param mixed $objet
  * @param mixed $name
  * @return mixed
  */
 function simple_video($objet,$name,$class)
{
    return $objet->video_simple($name,$class);
}
function formfile($objet,$contenue)
{
    return $objet->formfile($contenue);
}
 function input_simple($objet,$name,$place)
{
    return $objet->simple_input($name,$place);

}
function submit_simple($objet,$donne)
{
    return $objet->submit_simple($donne);
}
/**
 * change un photo 
 * @param mixed $objet=$objet0 [base de donne], $objet1 [$toast] $objet2[] votre message $objet2[] votre message eurreur
 * @param mixed $name=name return array 0= name de file,1fichier vers
 * @return void
 */
function changer_photo($objet,$tous,$name)
{
    if (isset($_FILES[$name[1]]) && !empty($_FILES[$name[1]]['name'])) 
    {
            $type =strtolower(substr(strstr($_FILES[$name[1]]['name'],"."),1)) ;
            $type_accepte = ["jpeg", "jpg", "png", "gif"];
            $name1=preg_replace("/[-,*, copie,()]/","",strtolower(strstr($_FILES[$name[1]]['name'],".",true))) ;
            $file_name = $name1. "." . $type;
            $mk =str_replace(" ","_",$tous['pseudo'] . $name[1]) ;
            file_exists($mk) ? null : mkdir($mk);
             $file = $mk."/".$file_name;
        if (in_array($type, $type_accepte)) {
           
                update($objet[0], "$name[0]='$file'", "pseudo", $tous['pseudo']);
                @move_uploaded_file($_FILES[$name[1]]['tmp_name'], $file);
                echo toast($objet[1], $objet[2]);
            }
            else
            {
              
                update($objet[0], "$name[0]='$file'", "pseudo", $tous['pseudo']);
                @move_uploaded_file($_FILES[$name[1]]['tmp_name'], $file);
                echo toast($objet[1], $objet[3]);
            }
        }       
  } 


/**
 * relation tous les deux table
 * @param mixed $objet=$base en tan objet
 * @param mixed $colonne=conne deux menme objet
 * @param mixed $table1=dexieme colonne
 * @param mixed $execute=execution array execute ->execute ->array();
  * @param mixed $index=whre ? WHERE =?
 * @return mixed
 */
function relation_table($objet,$colonne,$table1,$execute,$index,$cou)
{
    return $objet->relation($colonne, $table1, $execute,$index,$cou);
}
{

}
function input_select($objet,$name)
{
  $objet->iselect($name);
}
/**
 * deplacement des plusieur fichier
 * @param mixed $donne=array 0=>non de dossier emplace, 1=>name de fichier
 * @return void
 */
function deplace_plusieur($objet,$donne=[])
{
   $id=$donne[0];
   $file=file_exists($donne[2])?null:mkdir($donne[2]);
    foreach ($_FILES[$donne[1]]["error"] as $key => $error) {
    if ($error == UPLOAD_ERR_OK) {
    $tmp_name = $_FILES[$donne[1]]["tmp_name"][$key];
    $name=preg_replace("/[*, ,(),-]/", "",basename($_FILES[$donne[1]]["name"][$key]) );
    $type=strtolower(substr(strstr($name,"."),1));
    $type_name=strstr($name,".",true)."_".$id;
    $accepte=["mp4","jpg","jpeg","pnj"];
    if(in_array($type, $accepte))
    {
      $namet=$type_name.".".$type."/";
      $explode=explode("/", $namet);
      $remove=@move_uploaded_file($tmp_name, $donne[2]."/".$namet);
     if($remove)
     {
      $objet->upgrade('image="'.$namet.'"',"id",$id);
     }
     
    }
    
    }
}
}
function lastid($objet)
{
    return $objet->last();
}
/**
 * publication image
 * @param mixed $objet=$pub
 * @param mixed $donne;tous les donne
 * @return mixed
 */
function image_pub($objet,$donne)
{
    $image = $donne["image"];
    $explode = explode("/", $image);
    $count=count($explode);
  if($explode[0]=="")
  {
        return $objet->sans($donne);
  }
  elseif($count==1)
  {
        return $objet->une_image($donne);
  }
  elseif($count==2)
  {
        return $objet->deux_image($donne);
  }
  elseif($count==3)
  {
        return $objet->trois_image($donne);
  }
  elseif($count==4)
  {
        return $objet->quatre_image($donne);
  }
  elseif($count==5)
  {
        return $objet->quatre_image_plus($donne);
  }
}
function image_slide($objet,$donne)
{
    $image = $donne["image"];
    $explode = explode("/", $image);
    $count=count($explode);
  if($explode[0]=="")
  {
        return $objet->sans($donne);
  }
  elseif($count==1)
  {
        return $objet->une_image($donne);
  }
  elseif($count==2)
  {
        return $objet->deux_image($donne);
  }
  elseif($count==3)
  {
        return $objet->trois_image($donne);
  }
  elseif($count==4)
  {
        return $objet->quatre_image($donne);
  }
  elseif($count==5)
  {
        return $objet->cinq_image($donne);
  }
   elseif($count==6)
  {
        return $objet->six_image($donne);
  }
}
function pdo()
{
 
        $new = new PDO(
            "mysql:host=localhost;dbname=commerce",
            "root",
            "",
            [
                PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION
            ]
        );
        return $new;
   
}

?>