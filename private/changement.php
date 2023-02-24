<?php

class changement
{
  
    public function change($nom,$path,$statement,$contenue)
    {

        $file = $_FILES[$nom]["name"];
        $file_accepte = ["jpg", "jpeg", "png", "gif"];
        $name_file =strtolower(strstr($file, ".", true));
        $type =strtolower(substr(strstr($file, "."), 1));
        $name=$path/$name_file.$type;
        if(in_array($type,$file_accepte))
        {
            @move_uploaded_file($_FILES[$nom]['tmp_name'], $name);
            $statement;
            return $name;
            
        }
        else
        {
            return $contenue;
        }

    }
}


?>