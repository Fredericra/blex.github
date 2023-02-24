<?php


class form
{
    private $p = "p";
    private $form;
    public function __construct($form=[])
    {
        $this->form = $form;
    }
    public function ligne($tag)
    {
        return "<{$this->p}>{$tag}</{$this->p}>";
    }
    public function value($index)
    {
        return isset($this->form[$index])?$this->form[$index]:NULL; 
    }
    public function input($type,$name,$label)
    {
        return $this->ligne("
        <div class='form-floating mb-2'>
                <input type='{$type}' class='form-control' name='{$name}' id='{$name}' placeholder=''>
                <label for='{$name}'>{$label}</label>
        </div>");
    }
    public function submit($couleur,$value)
    {
        return "<input type='submit' class='w3-block {$couleur}' value='{$value}'>";
    }
    public function form($methode,$contenue)
    {
        return "<form action='' class='form-group' method='{$methode}'>{$contenue}</form>";
    }
    public function image_miltiple($name,$class)
    {
        return "
        
        <input type='file' name='{$name}[]'  id='{$name}' accept='image/*' multiple>
         <label for='{$name}'><i class='fa fa-photo {$class}' ></i></label>
        ";
    }
    public function image_simple($name,$class)
    {
        return "
        <label for='{$name}'><i class='fa fa-photo {$class}'></i></label>
        <input type='file' name='{$name}'  id='{$name}' accept='image/*'>
        
        ";
    }
    public function iselect($name)
    {
        return "
        <select name='$name' class='form-control'>
    <option value='1'>1</option>
    <option value='2'>2</option>
    <option value='3'>3</option>
    <option value='4'>4</option>
    <option value='ulimite'>ulimite</option>
    </select>
        ";
    }
    public function video_miltiple($name,$class)
    {
        return "
        
        <input type='file' name='{$name}[]'  id='{$name}' accept='video/*' multiple>
         <label for='{$name}'><i class='fa fa-film {$class}' ></i></label>
        ";
    }
    public function video_simple($name,$class)
    {
        return "
        <input type='file' name='{$name}'  id='{$name}' accept='video/*'>
         <label for='{$name}'><i class='fa fa-film  {$class}' '></i></label>
        ";
    }
  public function formfile($contenue)
  {
        return $this->ligne("<form action=''  method='post' enctype='multipart/form-data'>{$contenue}</form>");
  }
    public function simple_input($name,$holder)
    {
        return $this->ligne("<input type='text' name='{$name}' class='form-control'  placeholder='{$holder}'>");

    }
    public function submit_simple($donne)
    {
        return "<button type='submit' class='{$donne[1]}'>{$donne[0]}</button>";
    }
    public function textarea($name,$style=[])
    {
        return $this->ligne("<textarea name='$name' style='$style[0]' class='form-control' rows='$style[1]' cols='$style[2]' placeholder='$style[3]'></textarea>");
    }
    
}

?>

