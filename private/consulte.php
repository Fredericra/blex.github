<?php  


class consulte
{
    private $donne;
    public function __construct($donne=[])
    {
        $this->donne=$donne;
    }
    public function mapisy($donne)
    {
        
        if(isset($donne))
        {
            $pseudo=$this->donne['pseudo'];
            if($donne['pseudo']==$pseudo)
            {
                return "<button type='button' class='w3-button w3-theme-d2 w3-margin-bottom w3-round-xlarge w3-small' id='delete_$donne[id]'>supprimer</button>";
            }

        }
       
    
    }
   
    public function sans($donne)
    {
       
        return "
        <div class='w3-container w3-card w3-white w3-round w3-margin' id='pub$donne[id]'><br>
        <img src='$donne[img_profil]' alt='Avatar' class='w3-left w3-round w3-margin-right' style='width:60px'>
        <span class='w3-right w3-opacity'>{$donne['date']}</span>
        <hr class='w3-clear'>
        <h4>$donne[pseudo]</h4><br>
        <h3>{$donne['titre']}</h3>
        <p>{$donne['text']}</p>
        <button type='button' class='w3-button w3-theme-d1 w3-margin-bottom w3-round-xlarge w3-small w3-margin-left' id='aime_$donne[id]'><i class='fa fa-thumbs-up'></i>  aime</button> 
        <button type='button' class='w3-button w3-theme-d2 w3-margin-bottom w3-round-xlarge w3-small' id='naime_$donne[id]'><i class='fa fa-thumbs-down'></i>  n'aime</button> 
        <button type='button' class='w3-button w3-theme-d1 w3-margin-bottom w3-round-xlarge w3-small' id='consulte_$donne[id]'> consulte</button> 
        <button type='button' class='w3-button w3-theme-d2 w3-margin-bottom w3-round-xlarge w3-small' id='partage_$donne[id]'>  partage</button> 
        {$this->mapisy($donne)}
        
      </div> 
        
        ";

    }
    public function une_image($donne)
    {
        return "
        <div class='w3-container w3-card w3-white w3-round w3-margin'><br>
        <img src='$donne[img_profil]' alt='Avatar' class='w3-left w3-round w3-margin-right' style='width:60px'>
        <span class='w3-right w3-opacity'>{$donne['date']}</span>
        <hr class='w3-clear'>
        <h4>$donne[pseudo]</h4><br>
        <h3>{$donne['titre']}</h3>
        <p>{$donne['text']}</p>
        <img src='pub/{$donne['image']}' id='$donne[image]' style='width:100%' class='w3-margin-bottom'>
        <button type='button' class='w3-button w3-theme-d1 w3-margin-bottom w3-round-xlarge w3-small w3-margin-left' id='aime_$donne[id]'><i class='fa fa-thumbs-up'></i>  aime</button> 
        <button type='button' class='w3-button w3-theme-d2 w3-margin-bottom w3-round-xlarge w3-small' id='naime_$donne[id]'><i class='fa fa-thumbs-down'></i>  n'aime</button> 
        <button type='button' class='w3-button w3-theme-d1 w3-margin-bottom w3-round-xlarge w3-small' id='consulte_$donne[id]'> consulte</button> 
        <button type='button' class='w3-button w3-theme-d2 w3-margin-bottom w3-round-xlarge w3-small' id='partage_$donne[id]'>  partage</button> 
        {$this->mapisy($donne)}
        </div> 
        ";
    }
    public function deux_image($donne)
    {
        $image = explode("/", $donne['image']);
        return "
        <div class='w3-container w3-card w3-white w3-round w3-margin'><br>
        <img src='$donne[img_profil]' alt='Avatar' class='w3-left w3-round w3-margin-right' style='width:60px'>
        <span class='w3-right w3-opacity'>$donne[date]</span>
        <hr class='w3-clear'>
        <h4>$donne[pseudo]</h4><br>
        <h3>{$donne['titre']}</h3>
        <p>{$donne['text']}</p>
        <div class='w3-row-padding' style='margin:0 -16px'>
        <div class='w3-half'>
        <img src='pub/$image[0]' id='$image[0]' style='width:100%' alt='Northern Lights' class='w3-margin-bottom'></div>
        <div class='w3-half'>
        <img src='pub/$image[1]' id='$image[1]' style='width:100%' alt='Nature' class='w3-margin-bottom'></div>
        </div>
        <button type='button' class='w3-button w3-theme-d1 w3-margin-bottom w3-round-xlarge w3-small w3-margin-left' id='aime_$donne[id]'><i class='fa fa-thumbs-up'></i>  aime</button> 
        <button type='button' class='w3-button w3-theme-d2 w3-margin-bottom w3-round-xlarge w3-small' id='naime_$donne[id]'><i class='fa fa-thumbs-down'></i>  n'aime</button> 
        <button type='button' class='w3-button w3-theme-d1 w3-margin-bottom w3-round-xlarge w3-small' id='consulte_$donne[id]'> consulte</button> 
        <button type='button' class='w3-button w3-theme-d2 w3-margin-bottom w3-round-xlarge w3-small' id='partage_$donne[id]'>  partage</button> 
        {$this->mapisy($donne)}
        </div>";
    }
    public function trois_image($donne)
    {
        $image = explode("/", $donne['image']);
        return "
        
        <div class='w3-container w3-card w3-white w3-round w3-margin'><br>
        <img src='$donne[img_profil]' alt='Avatar' class='w3-left w3-round w3-margin-right' style='width:60px'>
        <span class='w3-right w3-opacity'>$donne[date]</span>
        <hr class='w3-clear'>
        <h4>$donne[pseudo]</h4><br>
        <h3>{$donne['titre']}</h3>
        <p>{$donne['text']}</p>
        <div class='w3-row-padding' style='margin:0 -16px' >
        <div class='w3-container'>
        <img src='pub/$image[0]' id='$image[0]' style='width: 100%;height:125px' alt='' srcset=''class='w3-margin-bottom'>
        </div>
        </div>
        <div class='w3-row-padding' style='margin:0 -10px'>
        <div class='w3-container w3-half'>
        <img src='pub/$image[1]' id='$image[1]' style='width: 100%;height:125px' alt='' srcset=''class='w3-margin-bottom'>
        </div>
        <div class='w3-container w3-half'>
        <img src='pub/$image[2]' id='$image[2]' style='width: 100%;height:125px' alt='' srcset=''class='w3-margin-bottom'>
        </div>
        </div>
        <button type='button' class='w3-button w3-theme-d1 w3-margin-bottom w3-round-xlarge w3-small w3-margin-left' id='aime_$donne[id]'><i class='fa fa-thumbs-up'></i>  aime</button> 
        <button type='button' class='w3-button w3-theme-d2 w3-margin-bottom w3-round-xlarge w3-small' id='naime_$donne[id]'><i class='fa fa-thumbs-down'></i>  n'aime</button> 
        <button type='button' class='w3-button w3-theme-d1 w3-margin-bottom w3-round-xlarge w3-small' id='consulte_$donne[id]'> consulte</button> 
        <button type='button' class='w3-button w3-theme-d2 w3-margin-bottom w3-round-xlarge w3-small' id='partage_$donne[id]'>  partage</button> 
        {$this->mapisy($donne)}
        </div>  ";
    }
    public function quatre_image($donne)
    {
        $image = explode("/", $donne['image']);
        return "
        <div class='w3-container w3-card w3-white w3-round w3-margin'><br>
        <img src='$donne[img_profil]' alt='Avatar' class='w3-left w3-round w3-margin-right' style='width:60px'>
        <span class='w3-right w3-opacity'>$donne[date]</span>
        <hr class='w3-clear'>
        <h4>$donne[pseudo]</h4><br>
        <h3>{$donne['titre']}</h3>
        <p>{$donne['text']}</p>
        <div class='w3-row-padding' style='margin:0 -10px'>
        <div class='w3-container w3-half'>
        <img src='pub/$image[0]' id='$image[0]' style='width: 100%;height:125px' alt='' srcset=''class='w3-margin-bottom'>
        </div>
        <div class='w3-container w3-half'>
        <img src='pub/$image[1]' id='$image[1]' style='width: 100%;height:125px' alt='' srcset=''class='w3-margin-bottom'>
        </div>
        </div>
        <div class='w3-row-padding' style='margin:0 -10px'>
        <div class='w3-container w3-half'>
        <img src='pub/$image[2]' id='$image[2]' style='width: 100%;height:125px' alt='' srcset=''class='w3-margin-bottom'>
        </div>
        <div class='w3-container w3-half'>
        <img src='pub/$image[3]' id='$image[3]' style='width: 100%;height:125px' alt='' srcset=''class='w3-margin-bottom'>
        </div>
        </div>
        <button type='button' class='w3-button w3-theme-d1 w3-margin-bottom w3-round-xlarge w3-small w3-margin-left' id='aime_$donne[id]'><i class='fa fa-thumbs-up'></i>  aime</button> 
        <button type='button' class='w3-button w3-theme-d2 w3-margin-bottom w3-round-xlarge w3-small' id='naime_$donne[id]'><i class='fa fa-thumbs-down'></i>  n'aime</button> 
        <button type='button' class='w3-button w3-theme-d1 w3-margin-bottom w3-round-xlarge w3-small' id='consulte_$donne[id]'> consulte</button> 
        <button type='button' class='w3-button w3-theme-d2 w3-margin-bottom w3-round-xlarge w3-small' id='partage_$donne[id]'>  partage</button> 
        {$this->mapisy($donne)}
        </div> 
        
        ";

    }
    public function quatre_image_plus($donne)
    {
        $image = explode("/", $donne['image']);
        return "
        <div class='w3-container w3-card w3-white w3-round w3-margin'><br>
        <img src='$donne[img_profil]' alt='Avatar' class='w3-left w3-round w3-margin-right' style='width:60px'>
        <span class='w3-right w3-opacity'>$donne[date]</span>
        <hr class='w3-clear'>
        <h4>$donne[pseudo]</h4><br>
        <h3>{$donne['titre']}</h3>
        <p>{$donne['text']}</p>
        <div class='w3-row-padding' style='margin:0 -10px'>
        <div class='w3-container w3-half'>
        <img src='pub/$image[0]' id='$image[0]' style='width: 100%;height:125px' alt='' srcset=''class='w3-margin-bottom'>
        </div>
        <div class='w3-container w3-half'>
        <img src='pub/$image[1]' id='$image[1]' style='width: 100%;height:125px' alt='' srcset=''class='w3-margin-bottom'>
        </div>
        </div>
        <div class='w3-row-padding' style='margin:0 -10px'>
        <div class='w3-container w3-half'>
        <img src='pub/$image[2]' id='$image[3]' style='width: 100%;height:125px' alt='' srcset=''class='w3-margin-bottom'>
        </div>
        <div class='w3-container w3-half w3-display-container'>
        <img src='pub/$image[3]' id='$image[3]' style='width: 100%;height:125px' alt='' srcset=''class='w3-margin-bottom'>
        <i class='w3-display-middle fa fa-plus fa-2x'></i>
        </div>
        </div>
        <button type='button' class='w3-button w3-theme-d1 w3-margin-bottom w3-round-xlarge w3-small w3-margin-left' id='aime_$donne[id]'><i class='fa fa-thumbs-up'></i>  aime</button> 
        <button type='button' class='w3-button w3-theme-d2 w3-margin-bottom w3-round-xlarge w3-small' id='naime_$donne[id]'><i class='fa fa-thumbs-down'></i>  n'aime</button> 
        <button type='button' class='w3-button w3-theme-d1 w3-margin-bottom w3-round-xlarge w3-small' id='consulte_$donne[id]'> consulte</button> 
        <button type='button' class='w3-button w3-theme-d2 w3-margin-bottom w3-round-xlarge w3-small' id='partage_$donne[id]'>  partage</button> 
        {$this->mapisy($donne)}
        
        </div>
        
        ";
    }
}




?>
