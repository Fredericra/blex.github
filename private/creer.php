<?php 


class creer
{
    public function mk()
    {
        $dossier = 'donne';
        if(file_exists($dossier))
        {

        }else
        {
            mkdir($dossier);
        }

    }
    public function dossier($donne)
    {
        $this->mk();
        $return =
        "<?php 
        
        $*pseudo='$donne[pseudo]';
        $*nom='$donne[nom]';
        $*prenom='$donne[prenom]';
        $*mail='$donne[mail]';
        $*profil='$donne[img]';
         $*couverture='$donne[couverture]';
        $*statue='$donne[statue]';
        $*confirm='$donne[confirm]';
        $*password='$donne[mdp]';
        $*code='$donne[code]';
        ?>";
        $str = str_replace("*", "", $return);
        file_put_contents("donne/" . $donne['code'] . ".php", $str);
    }
}



?>