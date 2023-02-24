<?php  


class photo 
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
            if(isset($this->donne['pseudo']) && $donne['pseudo']==$pseudo)
            {
                return "<button type='button' class='w3-button w3-theme-d2 w3-margin-bottom w3-round-xlarge w3-small' id='delete[id]'>supprimer</button>";
            }

        }
       
    
    }
   

    public function sans($donne)
    {
     

        return "
        <div class='w3-container w3-card w3-white w3-round w3-margin' id='pub$donne[id]'><br>
        <img src='$donne[img]' alt='Avatar' class='w3-left w3-;height:155pxround w3-margin-right' style='width:60px'>
        <span class='w3-right w3-opacity'>{$donne['date']}</span>
        <hr class='w3-clear'>
        <h4>$donne[pseudo]</h4><br>
        <h3>{$donne['titre']}</h3>
        <p>{$donne['text']}</p>
        <button type='button' class='w3-button w3-theme-d1 w3-margin-bottom w3-round-xlarge w3-small w3-margin-left' id='aime_$donne[id]'><i class='fa fa-thumbs-up'></i>  aime</button> 
        <button type='button' class='w3-button w3-theme-d2 w3-margin-bottom w3-round-xlarge w3-small' id='naime_$donne[id]'><i class='fa fa-thumbs'aime'donne[3][1]}'></i>  n'aime</button> 
        <button type='button' class='w3-button w3-theme-d1 w3-margin-bottom w3-round-xlarge w3-small' id='consulte_$donne[id]'> consulte</button> 
        <button type='button' class='w3-button w3-theme-d2 w3-margin-bottom w3-round-xlarge w3-small' id='partage_$donne[id]'>  partage</button> 
        {$this->mapisy($donne)}
        
      </div> 
        
        ";

    }
    public function une_image($donne)
    {
       
        return "
        <div class='w3-container w3-card w3-white w3-round w3-margin' id='pub$donne[id]'><br>
        <img src='$donne[img]' alt='Avatar' class='w3-left w3-;height:155pxround w3-margin-right' style='width:60px'>
        <span class='w3-right w3-opacity'>{$donne['date']}</span>
        <hr class='w3-clear'>
        <h4>$donne[pseudo]</h4><br>
        <h3>{$donne['titre']}</h3>
        <p>{$donne['text']}</p>
        <img src='pub/{$donne['image']}' id='$donne[image]' style='width: 100%;max-height:450px' class='w3-margin-bottom'>
        <button type='button' class='w3-button w3-theme-d1 w3-margin-bottom w3-round-xlarge w3-small w3-margin-left' id='aime_$donne[id]'><i class='fa fa-thumbs-up'></i>  aime</button> 
        <button type='button' class='w3-button w3-theme-d2 w3-margin-bottom w3-round-xlarge w3-small' id='naime_$donne[id]'><i class='fa fa-thumbs'aime'donne[3][1]}'></i>  n'aime</button> 
        <button type='button' class='w3-button w3-theme-d1 w3-margin-bottom w3-round-xlarge w3-small' id='consulte_$donne[id]'> consulte</button> 
        <button type='button' class='w3-button w3-theme-d2 w3-margin-bottom w3-round-xlarge w3-small' id='partage_$donne[id]'>  partage</button> 
        </div> 
        ";
    }
    public function deux_image($donne)
    {
        $image = explode("/", $donne['image']);
        return "
       <div class='w3-container' id='$donne[id]' data-aos='fade-left' data-aos-delay='650' data-aos-duration='2000' style='height:600px;min-width:900px'>
  <h1 class='w3-blue w3-round text-center'>Publication de {$donne['pseudo']}</h1>
<div class='w3-half w3-container'>
  

<div id='carouselExampleCaptions_$donne[id]' class='carousel slide' data-bs-ride='carousel'>
  <div class='carousel-indicators'>
    <button type='button' data-bs-target='#carouselExampleCaptions_$donne[id]' data-bs-slide-to='0' class='active' aria-current='true' aria-label='Slide 1'></button>
    <button type='button' data-bs-target='#carouselExampleCaptions_$donne[id]' data-bs-slide-to='1' aria-label='Slide 2'></button>
  </div>
  <div class='carousel-inner' style='max-height:375px'>
    <div class='carousel-item active'>
      <img src='pub/$image[0]' id='$image[0]' class='d-block w-100' alt='...' style='height:355px'>
      <div class='carousel-caption d-none d-md-block'>
        <h5>www.blex {$donne['titre']} .mg</h5>
      </div>
    </div>
    <div class='carousel-item'>
      <img src='pub/$image[1]' id='$image[1]' class='d-block w-100' alt='...' style='height:355px'>
      <div class='carousel-caption d-none d-md-block'>
        <h5>www.blex {$donne['titre']} .mg</h5>
      </div>
    </div>
  </div>
  <button class='carousel-control-prev' type='button' data-bs-target='#carouselExampleCaptions_$donne[id]' data-bs-slide='prev'>
    <span class='carousel-control-prev-icon' aria-hidden='true'></span>
    <span class='visually-hidden'>Previous</span>
  </button>
  <button class='carousel-control-next' type='button' data-bs-target='#carouselExampleCaptions_$donne[id]' data-bs-slide='next'>
    <span class='carousel-control-next-icon' aria-hidden='true'></span>
    <span class='visually-hidden'>Next</span>
  </button>
</div>



</div>
<div class='w3-half w3-container'>
  <div class='w3-container'>
    <div class='w3-twothird w3-container'>
      <h2 class='text-primary text-center'>{$donne['titre']}</h2>
      <p class=''> <h5>{$donne['text']}</h5></p>
     </div>
      <div class='w3-display-container w3-third w3-right' style='margin-top: 80px'>
        <img src='$donne[img]' alt='Avatar' style='width: 100%;height:155px' class='w3-round'>
        <h4 class='w3-display-middle text-success'>{$donne['pseudo']}</h4>
      </div>
  </div>
    <div class='w3-container w3-margin-top'>
      <div class='w3-treequarter w3-container'>
        <button type='button' class='btn btn-primary position-relative  w3-margin' id='aime_$donne[id]'  title='aime'>
          <i class='fa fa-thumbs-down'></i><span class='position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger'>{$donne['aime']}
          <span class='visually-hidden'>unread messages</span></span>
        </button>
        <button type='button' class='btn btn-primary position-relative w3-margin'  id='naime_$donne[id]' title='pas aime pas'>
          <i class='fa fa-thumbs-up'></i><span class='position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger'>
          {$donne['aime']}<span class='visually-hidden'>unread messages</span></span>
        </button>
         <button type='button' class='btn btn-primary position-relative w3-margin'  id='note_$donne[id]' title='notification'>
          <i class='fa fa-bell'></i><span class='position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger'>
           {$donne['consulter']}<span class='visually-hidden'>unread messages</span></span>
        </button>
         <button type='button' class='btn btn-primary position-relative w3-margin'  id='voir_$donne[id]' title='voir'>
          <i class='fa fa-exchange'></i><span class='position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger'>
          {$donne['consulter']}<span class='visually-hidden'>unread messages</span></span>
        </button>
      </div>
    </div>
    <p class='w3-blue w3-round text-center w3-padding'><span class='w3-tag w3-round'>e-</span>commerce <i class='fa fa-thumbs-up'></i></p>
</div>

</div>
<br><br>

        
        ";

    }



    public function trois_image($donne)
    {
        $image = explode("/", $donne['image']);
        return "
       <div class='w3-container' id='$donne[id]' data-aos='fade-left' data-aos-delay='650' data-aos-duration='2000' style='height:600px;min-width:900px'>
  <h1 class='w3-blue w3-round text-center'>Publication de {$donne['pseudo']}</h1>
<div class='w3-half w3-container'>
  

<div id='carouselExampleCaptions_$donne[id]' class='carousel slide' data-bs-ride='carousel'>
  <div class='carousel-indicators'>
    <button type='button' data-bs-target='#carouselExampleCaptions_$donne[id]' data-bs-slide-to='0' class='active' aria-current='true' aria-label='Slide 1'></button>
    <button type='button' data-bs-target='#carouselExampleCaptions_$donne[id]' data-bs-slide-to='1' aria-label='Slide 2'></button>
    <button type='button' data-bs-target='#carouselExampleCaptions_$donne[id]' data-bs-slide-to='2' aria-label='Slide 3'></button>
  </div>
  <div class='carousel-inner' style='max-height:375px'>
    <div class='carousel-item active'>
      <img src='pub/$image[0]' id='$image[0]' class='d-block w-100' alt='...' style='height:355px'>
      <div class='carousel-caption d-none d-md-block'>
        <h5>www.blex {$donne['titre']} .mg</h5>
      </div>
    </div>
    <div class='carousel-item'>
      <img src='pub/$image[1]' id='$image[1]' class='d-block w-100' alt='...' style='height:355px'>
      <div class='carousel-caption d-none d-md-block'>
        <h5>www.blex {$donne['titre']} .mg</h5>
      </div>
    </div>
    
  </div>
  <button class='carousel-control-prev' type='button' data-bs-target='#carouselExampleCaptions_$donne[id]' data-bs-slide='prev'>
    <span class='carousel-control-prev-icon' aria-hidden='true'></span>
    <span class='visually-hidden'>Previous</span>
  </button>
  <button class='carousel-control-next' type='button' data-bs-target='#carouselExampleCaptions_$donne[id]' data-bs-slide='next'>
    <span class='carousel-control-next-icon' aria-hidden='true'></span>
    <span class='visually-hidden'>Next</span>
  </button>
</div>



</div>
<div class='w3-half w3-container'>
  <div class='w3-container'>
    <div class='w3-twothird w3-container'>
      <h2 class='text-primary text-center'>{$donne['titre']}</h2>
      <p class=''> <h5>{$donne['text']}</h5></p>
     </div>
      <div class='w3-display-container w3-third w3-right' style='margin-top: 80px'>
        <img src='$donne[img]' alt='Avatar' style='width: 100%;height:155px' class='w3-round'>
        <h4 class='w3-display-middle text-success'>{$donne['pseudo']}</h4>
      </div>
  </div>
    <div class='w3-container w3-margin-top'>
      <div class='w3-treequarter w3-container'>
       <button type='button' class='btn btn-primary position-relative  w3-margin' id='aime_$donne[id]'  title='aime'>
          <i class='fa fa-thumbs-down'></i><span class='position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger'>{$donne['aime']}
          <span class='visually-hidden'>unread messages</span></span>
        </button>
        <button type='button' class='btn btn-primary position-relative w3-margin'  id='naime_$donne[id]' title='pas aime pas'>
          <i class='fa fa-thumbs-up'></i><span class='position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger'>
          {$donne['aime']}<span class='visually-hidden'>unread messages</span></span>
        </button>
         <button type='button' class='btn btn-primary position-relative w3-margin'  id='note_$donne[id]' title='notification'>
          <i class='fa fa-bell'></i><span class='position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger'>
           {$donne['consulter']}<span class='visually-hidden'>unread messages</span></span>
        </button>
         <button type='button' class='btn btn-primary position-relative w3-margin'  id='voir_$donne[id]' title='voir'>
          <i class='fa fa-eye'></i><span class='position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger'>
          {$donne['consulter']}<span class='visually-hidden'>unread messages</span></span>
        </button>
      </div>
    </div>
    <p class='w3-blue w3-round text-center w3-padding'><span class='w3-tag w3-round'>e-</span>commerce <i class='fa fa-thumbs-up'></i></p>
</div>

</div>
<br><br>

        
        ";

    }
    public function quatre_image($donne)
    {
        $image = explode("/", $donne['image']);
            return "
       <div class='w3-container' id='$donne[id]' data-aos='fade-left' data-aos-delay='650' data-aos-duration='2000' style='height:600px;min-width:900px'>
  <h1 class='w3-blue w3-round text-center'>Publication de {$donne['pseudo']}</h1>
<div class='w3-half w3-container'>
  

<div id='carouselExampleCaptions_$donne[id]' class='carousel slide' data-bs-ride='carousel'>
  <div class='carousel-indicators'>
    <button type='button' data-bs-target='#carouselExampleCaptions_$donne[id]' data-bs-slide-to='0' class='active' aria-current='true' aria-label='Slide 1'></button>
    <button type='button' data-bs-target='#carouselExampleCaptions_$donne[id]' data-bs-slide-to='1' aria-label='Slide 2'></button>
    <button type='button' data-bs-target='#carouselExampleCaptions_$donne[id]' data-bs-slide-to='2' aria-label='Slide 3'></button>
     <button type='button' data-bs-target='#carouselExampleCaptions_$donne[id]' data-bs-slide-to='3' aria-label='Slide 4'></button>
  </div>
 <div class='carousel-inner' style='max-height:375px'>
    <div class='carousel-item active'>
      <img src='pub/$image[0]' id='$image[0]' class='d-block w-100' alt='...' style='height:355px'>
      <div class='carousel-caption d-none d-md-block'>
        <h5>www.blex {$donne['titre']} .mg</h5>
      </div>
    </div>
    <div class='carousel-item'>
      <img src='pub/$image[1]' id='$image[1]' class='d-block w-100' alt='...' style='height:355px'>
      <div class='carousel-caption d-none d-md-block'>
        <h5>www.blex {$donne['titre']} .mg</h5>
      </div>
    </div>
    <div class='carousel-item'>
      <img src='pub/$image[2]' id='$image[2]' class='d-block w-100' alt='...' style='height:355px'>
      <div class='carousel-caption d-none d-md-block'>
       <h5>www.blex {$donne['titre']} .mg</h5>
      </div>
    </div>
     <div class='carousel-item'>
      <img src='pub/$image[3]' id='$image[3]' class='d-block w-100' alt='...' style='height:355px'>
      <div class='carousel-caption d-none d-md-block'>
       <h5>www.blex {$donne['titre']} .mg</h5>
    
    </div>
  </div>
  <button class='carousel-control-prev' type='button' data-bs-target='#carouselExampleCaptions_$donne[id]' data-bs-slide='prev'>
    <span class='carousel-control-prev-icon' aria-hidden='true'></span>
    <span class='visually-hidden'>Previous</span>
  </button>
  <button class='carousel-control-next' type='button' data-bs-target='#carouselExampleCaptions_$donne[id]' data-bs-slide='next'>
    <span class='carousel-control-next-icon' aria-hidden='true'></span>
    <span class='visually-hidden'>Next</span>
  </button>
</div>
</div>



</div>
<div class='w3-half w3-container'>
  <div class='w3-container'>
    <div class='w3-twothird w3-container'>
      <h2 class='text-primary text-center'>{$donne['titre']}</h2>
      <p class=''> <h5>{$donne['text']}</h5></p>
     </div>
      <div class='w3-display-container w3-third w3-right' style='margin-top: 80px'>
        <img src='$donne[img]' alt='Avatar' style='width: 100%;height:155px' class='w3-round'>
        <h4 class='w3-display-middle text-success'>{$donne['pseudo']}</h4>
      </div>
  </div>
    <div class='w3-container w3-margin-top'>
      <div class='w3-treequarter w3-container'>
     <button type='button' class='btn btn-primary position-relative  w3-margin' id='aime_$donne[id]'  title='aime'>
          <i class='fa fa-thumbs-down'></i><span class='position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger'>{$donne['aime']}
          <span class='visually-hidden'>unread messages</span></span>
        </button>
        <button type='button' class='btn btn-primary position-relative w3-margin'  id='naime_$donne[id]' title='pas aime pas'>
          <i class='fa fa-thumbs-up'></i><span class='position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger'>
          {$donne['aime']}<span class='visually-hidden'>unread messages</span></span>
        </button>
         <button type='button' class='btn btn-primary position-relative w3-margin'  id='note_$donne[id]' title='notification'>
          <i class='fa fa-bell'></i><span class='position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger'>
           {$donne['consulter']}<span class='visually-hidden'>unread messages</span></span>
        </button>
         <button type='button' class='btn btn-primary position-relative w3-margin'  id='voir_$donne[id]' title='voir'>
          <i class='fa fa-eye'></i><span class='position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger'>
          {$donne['consulter']}<span class='visually-hidden'>unread messages</span></span>
        </button>
      </div>
    </div>
    <p class='w3-blue w3-round text-center w3-padding'><span class='w3-tag w3-round'>e-</span>commerce <i class='fa fa-thumbs-up'></i></p>
</div>

</div>
<br><br>

        
        ";
    }
 public function cinq_image($donne)
    {
        $image = explode("/", $donne['image']);
            return "
       <div class='w3-container' id='$donne[id]' data-aos='fade-left' data-aos-delay='650' data-aos-duration='2000' style='height:600px;min-width:900px'>
  <h1 class='w3-blue w3-round text-center'>Publication de {$donne['pseudo']}</h1>
<div class='w3-half w3-container'>
  

<div id='carouselExampleCaptions_$donne[id]' class='carousel slide' data-bs-ride='carousel'>
  <div class='carousel-indicators'>
    <button type='button' data-bs-target='#carouselExampleCaptions_$donne[id]' data-bs-slide-to='0' class='active' aria-current='true' aria-label='Slide 1'></button>
    <button type='button' data-bs-target='#carouselExampleCaptions_$donne[id]' data-bs-slide-to='1' aria-label='Slide 2'></button>
    <button type='button' data-bs-target='#carouselExampleCaptions_$donne[id]' data-bs-slide-to='2' aria-label='Slide 3'></button>
     <button type='button' data-bs-target='#carouselExampleCaptions_$donne[id]' data-bs-slide-to='3' aria-label='Slide 4'></button>
      <button type='button' data-bs-target='#carouselExampleCaptions_$donne[id]' data-bs-slide-to='4' aria-label='Slide 5'></button>
      
  </div>
  <div class='carousel-inner' style='max-height:375px'>
    <div class='carousel-item active'>
      <img src='pub/$image[0]' id='$image[0]' class='d-block w-100' alt='...' style='height:355px'>
      <div class='carousel-caption d-none d-md-block'>
        <h5>www.blex {$donne['titre']} .mg</h5>
      </div>
    </div>
    <div class='carousel-item'>
      <img src='pub/$image[1]' id='$image[1]' class='d-block w-100' alt='...' style='height:355px'>
      <div class='carousel-caption d-none d-md-block'>
        <h5>www.blex {$donne['titre']} .mg</h5>
      </div>
    </div>
    <div class='carousel-item'>
      <img src='pub/$image[2]' id='$image[2]' class='d-block w-100' alt='...' style='height:355px'>
      <div class='carousel-caption d-none d-md-block'>
       <h5>www.blex {$donne['titre']} .mg</h5>
      </div>
    </div>
     <div class='carousel-item'>
      <img src='pub/$image[3]' id='$image[3]' class='d-block w-100' alt='...' style='height:355px'>
      <div class='carousel-caption d-none d-md-block'>
       <h5>www.blex {$donne['titre']} .mg</h5>
      </div>
    </div>
       <div class='carousel-item'>
      <img src='pub/$image[4]' id='$image[4]' class='d-block w-100' alt='...' style='height:355px'>
      <div class='carousel-caption d-none d-md-block'>
       <h5>www.blex {$donne['titre']} .mg</h5>
      </div>
    </div>

  </div>
  <button class='carousel-control-prev' type='button' data-bs-target='#carouselExampleCaptions_$donne[id]' data-bs-slide='prev'>
    <span class='carousel-control-prev-icon' aria-hidden='true'></span>
    <span class='visually-hidden'>Previous</span>
  </button>
  <button class='carousel-control-next' type='button' data-bs-target='#carouselExampleCaptions_$donne[id]' data-bs-slide='next'>
    <span class='carousel-control-next-icon' aria-hidden='true'></span>
    <span class='visually-hidden'>Next</span>
  </button>
</div>



</div>
<div class='w3-half w3-container'>
  <div class='w3-container'>
    <div class='w3-twothird w3-container'>
      <h2 class='text-primary text-center'>{$donne['titre']}</h2>
      <p class=''> <h5>{$donne['text']}</h5></p>
     </div>
      <div class='w3-display-container w3-third w3-right' style='margin-top: 80px'>
        <img src='$donne[img]' alt='Avatar' style='width: 100%;height:155px' class='w3-round'>
        <h4 class='w3-display-middle text-success'>{$donne['pseudo']}</h4>
      </div>
  </div>
    <div class='w3-container w3-margin-top'>
      <div class='w3-treequarter w3-container'>
         <button type='button' class='btn btn-primary position-relative  w3-margin' id='aime_$donne[id]'  title='aime'>
          <i class='fa fa-thumbs-down'></i><span class='position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger'>{$donne['aime']}
          <span class='visually-hidden'>unread messages</span></span>
        </button>
        <button type='button' class='btn btn-primary position-relative w3-margin'  id='naime_$donne[id]' title='pas aime pas'>
          <i class='fa fa-thumbs-up'></i><span class='position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger'>
          {$donne['aime']}<span class='visually-hidden'>unread messages</span></span>
        </button>
         <button type='button' class='btn btn-primary position-relative w3-margin'  id='note_$donne[id]' title='notification'>
          <i class='fa fa-bell'></i><span class='position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger'>
           {$donne['consulter']}<span class='visually-hidden'>unread messages</span></span>
        </button>
         <button type='button' class='btn btn-primary position-relative w3-margin'  id='voir_$donne[id]' title='voir'>
          <i class='fa fa-eye'></i><span class='position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger'>
          {$donne['consulter']}<span class='visually-hidden'>unread messages</span></span>
        </button>
      </div>
    </div>
    <p class='w3-blue w3-round text-center w3-padding'><span class='w3-tag w3-round'>e-</span>commerce <i class='fa fa-thumbs-up'></i></p>
</div>

</div>
<br><br>

        
        ";
    }

   public function six_image($donne)
    {
        $image = explode("/", $donne['image']);
            return "
       <div class='w3-container' id='$donne[id]' data-aos='fade-left' data-aos-delay='650' data-aos-duration='2000' style='height:600px;min-width:900px'>
  <h1 class='w3-blue w3-round text-center'>Publication de {$donne['pseudo']}</h1>
<div class='w3-half w3-container'>
  

<div id='carouselExampleCaptions_$donne[id]' class='carousel slide' data-bs-ride='carousel'>
  <div class='carousel-indicators'>
    <button type='button' data-bs-target='#carouselExampleCaptions_$donne[id]' data-bs-slide-to='0' class='active' aria-current='true' aria-label='Slide 1'></button>
    <button type='button' data-bs-target='#carouselExampleCaptions_$donne[id]' data-bs-slide-to='1' aria-label='Slide 2'></button>
    <button type='button' data-bs-target='#carouselExampleCaptions_$donne[id]' data-bs-slide-to='2' aria-label='Slide 3'></button>
     <button type='button' data-bs-target='#carouselExampleCaptions_$donne[id]' data-bs-slide-to='3' aria-label='Slide 4'></button>
      <button type='button' data-bs-target='#carouselExampleCaptions_$donne[id]' data-bs-slide-to='4' aria-label='Slide 5'></button>
      <button type='button' data-bs-target='#carouselExampleCaptions_$donne[id]' data-bs-slide-to='5' aria-label='Slide 6'></button>
  </div>
  <div class='carousel-inner' style='max-height:375px'>
    <div class='carousel-item active'>
      <img src='pub/$image[0]' id='$image[0]' class='d-block w-100' alt='...' style='height:355px'>
      <div class='carousel-caption d-none d-md-block'>
        <h5>www.blex {$donne['titre']} .mg</h5>
      </div>
    </div>
    <div class='carousel-item'>
      <img src='pub/$image[1]' id='$image[1]' class='d-block w-100' alt='...' style='height:355px'>
      <div class='carousel-caption d-none d-md-block'>
        <h5>www.blex {$donne['titre']} .mg</h5>
      </div>
    </div>
    <div class='carousel-item'>
      <img src='pub/$image[2]' id='$image[2]' class='d-block w-100' alt='...' style='height:355px'>
      <div class='carousel-caption d-none d-md-block'>
       <h5>www.blex {$donne['titre']} .mg</h5>
      </div>
    </div>
     <div class='carousel-item'>
      <img src='pub/$image[3]' id='$image[3]' class='d-block w-100' alt='...' style='height:355px'>
      <div class='carousel-caption d-none d-md-block'>
       <h5>www.blex {$donne['titre']} .mg</h5>
      </div>
    </div>
       <div class='carousel-item'>
      <img src='pub/$image[4]' id='$image[4]' class='d-block w-100' alt='...' style='height:355px'>
      <div class='carousel-caption d-none d-md-block'>
       <h5>www.blex {$donne['titre']} .mg</h5>
      </div>
    </div>
     <div class='carousel-item'>
      <img src='pub/$image[5]' id='$image[5]' class='d-block w-100' alt='...' style='height:355px'>
      <div class='carousel-caption d-none d-md-block'>
       <h5>www.blex {$donne['titre']} .mg</h5>
      </div>
    </div>
  </div>
  <button class='carousel-control-prev' type='button' data-bs-target='#carouselExampleCaptions_$donne[id]' data-bs-slide='prev'>
    <span class='carousel-control-prev-icon' aria-hidden='true'></span>
    <span class='visually-hidden'>Previous</span>
  </button>
  <button class='carousel-control-next' type='button' data-bs-target='#carouselExampleCaptions_$donne[id]' data-bs-slide='next'>
    <span class='carousel-control-next-icon' aria-hidden='true'></span>
    <span class='visually-hidden'>Next</span>
  </button>
</div>



</div>
<div class='w3-half w3-container'>
  <div class='w3-container'>
    <div class='w3-twothird w3-container'>
      <h2 class='text-primary text-center'>{$donne['titre']}</h2>
      <p class=''> <h5>{$donne['text']}</h5></p>
     </div>
      <div class='w3-display-container w3-third w3-right' style='margin-top: 80px'>
        <img src='$donne[img]' alt='Avatar' style='width: 100%;height:155px' class='w3-round'>
        <h4 class='w3-display-middle text-success'>{$donne['pseudo']}</h4>
      </div>
  </div>
    <div class='w3-container w3-margin-top'>
      <div class='w3-treequarter w3-container'>
  <button type='button' class='btn btn-primary position-relative  w3-margin' id='aime_$donne[id]'  title='aime'>
          <i class='fa fa-thumbs-down'></i><span class='position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger'>{$donne['aime']}
          <span class='visually-hidden'>unread messages</span></span>
        </button>
        <button type='button' class='btn btn-primary position-relative w3-margin'  id='naime_$donne[id]' title='pas aime pas'>
          <i class='fa fa-thumbs-up'></i><span class='position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger'>
          {$donne['aime']}<span class='visually-hidden'>unread messages</span></span>
        </button>
         <button type='button' class='btn btn-primary position-relative w3-margin'  id='note_$donne[id]' title='notification'>
          <i class='fa fa-bell'></i><span class='position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger'>
           {$donne['consulter']}<span class='visually-hidden'>unread messages</span></span>
        </button>
         <button type='button' class='btn btn-primary position-relative w3-margin'  id='voir_$donne[id]' title='voir'>
          <i class='fa fa-eye'></i><span class='position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger'>
          {$donne['consulter']}<span class='visually-hidden'>unread messages</span></span>
        </button>
      </div>
    </div>
    <p class='w3-blue w3-round text-center w3-padding'><span class='w3-tag w3-round'>e-</span>commerce <i class='fa fa-thumbs-up'></i></p>
</div>

</div>
<br><br>

        
        ";
    } 
       public function sept_image($donne)
    {
        $image = explode("/", $donne['image']);
            return "
       <div class='w3-container' id='$donne[id]' data-aos='fade-left' data-aos-delay='650' data-aos-duration='2000' style='height:600px;min-width:900px'>
  <h1 class='w3-blue w3-round text-center'>Publication de {$donne['pseudo']}</h1>
<div class='w3-half w3-container'>
  

<div id='carouselExampleCaptions_$donne[id]' class='carousel slide' data-bs-ride='carousel'>
  <div class='carousel-indicators'>
    <button type='button' data-bs-target='#carouselExampleCaptions_$donne[id]' data-bs-slide-to='0' class='active' aria-current='true' aria-label='Slide 1'></button>
    <button type='button' data-bs-target='#carouselExampleCaptions_$donne[id]' data-bs-slide-to='1' aria-label='Slide 2'></button>
    <button type='button' data-bs-target='#carouselExampleCaptions_$donne[id]' data-bs-slide-to='2' aria-label='Slide 3'></button>
     <button type='button' data-bs-target='#carouselExampleCaptions_$donne[id]' data-bs-slide-to='3' aria-label='Slide 4'></button>
      <button type='button' data-bs-target='#carouselExampleCaptions_$donne[id]' data-bs-slide-to='4' aria-label='Slide 5'></button>
      <button type='button' data-bs-target='#carouselExampleCaptions_$donne[id]' data-bs-slide-to='5' aria-label='Slide 6'></button>
  </div>
  <div class='carousel-inner' style='max-height:375px'>
    <div class='carousel-item active'>
      <img src='pub/$image[0]' id='$image[0]' class='d-block w-100' alt='...' style='height:355px'>
      <div class='carousel-caption d-none d-md-block'>
        <h5>www.blex {$donne['titre']} .mg</h5>
      </div>
    </div>
    <div class='carousel-item'>
      <img src='pub/$image[1]' id='$image[1]' class='d-block w-100' alt='...' style='height:355px'>
      <div class='carousel-caption d-none d-md-block'>
        <h5>www.blex {$donne['titre']} .mg</h5>
      </div>
    </div>
    <div class='carousel-item'>
      <img src='pub/$image[2]' id='$image[2]' class='d-block w-100' alt='...' style='height:355px'>
      <div class='carousel-caption d-none d-md-block'>
       <h5>www.blex {$donne['titre']} .mg</h5>
      </div>
    </div>
     <div class='carousel-item'>
      <img src='pub/$image[3]' id='$image[3]' class='d-block w-100' alt='...' style='height:355px'>
      <div class='carousel-caption d-none d-md-block'>
       <h5>www.blex {$donne['titre']} .mg</h5>
      </div>
    </div>
       <div class='carousel-item'>
      <img src='pub/$image[4]' id='$image[4]' class='d-block w-100' alt='...' style='height:355px'>
      <div class='carousel-caption d-none d-md-block'>
       <h5>www.blex {$donne['titre']} .mg</h5>
      </div>
    </div>
     <div class='carousel-item'>
      <img src='pub/$image[5]' id='$image[5]' class='d-block w-100' alt='...' style='height:355px'>
      <div class='carousel-caption d-none d-md-block'>
       <h5>www.blex {$donne['titre']} .mg</h5>
      </div>
    </div>
      <div class='carousel-item'>
      <img src='pub/$image[6]' id='$image[6]' class='d-block w-100' alt='...' style='height:355px'>
      <div class='carousel-caption d-none d-md-block'>
       <h5>www.blex {$donne['titre']} .mg</h5>
      </div>
    </div>
  </div>
  <button class='carousel-control-prev' type='button' data-bs-target='#carouselExampleCaptions_$donne[id]' data-bs-slide='prev'>
    <span class='carousel-control-prev-icon' aria-hidden='true'></span>
    <span class='visually-hidden'>Previous</span>
  </button>
  <button class='carousel-control-next' type='button' data-bs-target='#carouselExampleCaptions_$donne[id]' data-bs-slide='next'>
    <span class='carousel-control-next-icon' aria-hidden='true'></span>
    <span class='visually-hidden'>Next</span>
  </button>
</div>



</div>
<div class='w3-half w3-container'>
  <div class='w3-container'>
    <div class='w3-twothird w3-container'>
      <h2 class='text-primary text-center'>{$donne['titre']}</h2>
      <p class=''> <h5>{$donne['text']}</h5></p>
     </div>
      <div class='w3-display-container w3-third w3-right' style='margin-top: 80px'>
        <img src='$donne[img]' alt='Avatar' style='width: 100%;height:155px' class='w3-round'>
        <h4 class='w3-display-middle text-success'>{$donne['pseudo']}</h4>
      </div>
  </div>
    <div class='w3-container w3-margin-top'>
      <div class='w3-treequarter w3-container'>
  <button type='button' class='btn btn-primary position-relative  w3-margin' id='aime_$donne[id]'  title='aime'>
          <i class='fa fa-thumbs-down'></i><span class='position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger'>{$donne['aime']}
          <span class='visually-hidden'>unread messages</span></span>
        </button>
        <button type='button' class='btn btn-primary position-relative w3-margin'  id='naime_$donne[id]' title='pas aime pas'>
          <i class='fa fa-thumbs-up'></i><span class='position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger'>
          {$donne['aime']}<span class='visually-hidden'>unread messages</span></span>
        </button>
         <button type='button' class='btn btn-primary position-relative w3-margin'  id='note_$donne[id]' title='notification'>
          <i class='fa fa-bell'></i><span class='position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger'>
           {$donne['consulter']}<span class='visually-hidden'>unread messages</span></span>
        </button>
         <button type='button' class='btn btn-primary position-relative w3-margin'  id='voir_$donne[id]' title='voir'>
          <i class='fa fa-eye'></i><span class='position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger'>
          {$donne['consulter']}<span class='visually-hidden'>unread messages</span></span>
        </button>
      </div>
    </div>
    <p class='w3-blue w3-round text-center w3-padding'><span class='w3-tag w3-round'>e-</span>commerce <i class='fa fa-thumbs-up'></i></p>
</div>

</div>
<br><br>

        
        ";
    }

}




?>
