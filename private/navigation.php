<?php

class navigation

{
 
    public function nav_premier($donne)
    {
       
        return "
        <div class='w3-top'>
            <div class='w3-bar w3-white w3-padding w3-card' style='letter-spacing:4px;'>
                <a href='{$donne[0][0]}' class='w3-bar-item w3-button w3-right {$donne[5]}'>{$donne[0][1]}</a>
                <div class='w3-left w3-hide-small'>
                <a href='{$donne[1][0]}' class='w3-bar-item w3-button {$donne[5]}'>{$donne[1][1]}</a>
                <a href='{$donne[2][0]}' class='w3-bar-item w3-button {$donne[5]}'>{$donne[2][1]}</a>
                <a href='{$donne[3][0]}' class='w3-bar-item w3-button {$donne[5]}'>{$donne[3][1]}</a>
                <a href='{$donne[4][0]}' class='w3-bar-item w3-button {$donne[5]}'>{$donne[4][1]}</a>
                </div>
            </div>
        </div><br><br><br>";
    }
    public function positif($index)
    {
        
     if($index>10)
        {
            return "<span class='w3-badge w3-right w3-small w3-round-xxlarge w3-red'>+{$index}</span>";
        }
        else
        {
            return "<span class='w3-badge w3-right w3-small w3-green'>{$index}</span>";
        }
     

        
    }
   public function nav_deuxieme($donne=[])
   {
        $bill=$donne['bill'];

        return "
        <div class='w3-top w3-card-24 w3-black'>
        <div class='w3-bar w3-theme-d2 w3-left-align w3-large'>
        <a href='$donne[href1]' class='w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white' title='actualite'><i class='fa fa-globe m-2'></i>{$this->positif($bill[0])}</a>
        <a href='$donne[href2]' class='w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white' title='actualite'><i class='fa fa-bell m-2'></i>{$this->positif($bill[1])}</a>
        <a href='$donne[href3]' class='w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white' title='amis'><i class='fa fa-user m-2'></i>{$this->positif($bill[2])}</a>
        <a href='$donne[href4]' class='w3-bar-item w3-button w3-hide-small w3-right w3-padding-large w3-hover-white' title='deconnecte'><i class='fa fa-power-off m-2'></i></a>
        <a href='$donne[href5]' class='w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white' title='Messages'><i class='fa fa-dollar m-2'></i>{$this->positif($bill[3])}</a>
        <a href='$donne[href7]' class='w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white' title='Messages'><i class='fa fa-comment m-2'></i>{$this->positif($bill[4])}</a>
        <a href='$donne[href6]' class='w3-bar-item w3-button w3-hide-small w3-right w3-padding-large w3-hover-white' title='My Account'>
        <img src='$donne[img]' class='w3-round' style='height:35px;width:75px' alt='profil'>
            </a>
        </div>
        </div>
        <br><br>

";
   } 


 
}


?>
