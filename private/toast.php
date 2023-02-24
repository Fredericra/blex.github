<?php 

class toast
{
    private $donne;
    public function __construct($donne=[])
    {
        $this->donne = $donne;
    }
    public function message($message)
    {
        $donne = $this->donne;
       
        return "
        
        <div class='position-fixed bottom-0 end-0 p-3' style='z-index: 11'>
        <div id='liveToast' class='toast' role='alert' aria-live='assertive' aria-atomic='true'>
        <div class='toast-header'>
         <img src='$donne[img]' style='width=50px;height:50px' class='w3-round me-2' alt='message'>
         <strong class='me-auto'>{$donne['send']}</strong>
         <small>$donne[date]</small>
         <button type='button' class='btn-close' data-bs-dismiss='toast' aria-label='Close'></button>
         </div>
        <div class='toast-body'>
       {$message}
        </div>
        </div>
     </div>

    <script>
    var toastLiveExample = document.getElementById('liveToast')
    if (toastLiveExample) {
     window.addEventListener('load', function () {
     var toast = new bootstrap.Toast(toastLiveExample)

         toast.show()
        })
        }
 
    </script>
        
        
        
        
        
        ";
    }
    public function toast_input()
    {
        $donne = $this->donne;
       
        return "
        
        <div class='position-fixed bottom-0 end-0 p-3' style='z-index: 11'>
        <div id='liveToast' class='toast' role='alert' aria-live='assertive' aria-atomic='true'>
        <div class='toast-header'>
         <img src='$donne[img]' style='width=50px;height:50px' class='w3-round me-2' alt='message'>
         <strong class='me-auto'>Bootstrap</strong>
         <small>$donne[date]</small>
         <button type='button' class='btn-close' data-bs-dismiss='toast' aria-label='Close'></button>
         </div>
        <div class='toast-body'>
        <form action='' method='post' class='form-group'>
        <input type='text' name='message' class='form-control' id='' placeholder='bonjour ecris, quelques message'><br>
        <input type='submit' class='w3-block btn btn-primary' value='envoyer'>
         </form>
        </div>
        </div>
     </div>

    <script>
    var toastLiveExample = document.getElementById('liveToast')
    if (toastLiveExample) {
     window.addEventListener('load', function () {
     var toast = new bootstrap.Toast(toastLiveExample)

         toast.show(6000)
        })
        }
 
    </script>
        
        
        
        
        
        ";
    }   
}



?>
