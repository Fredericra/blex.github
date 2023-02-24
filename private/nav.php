<?php 

/**
 * 
 */

class nav

{
	public $class;
	public function hre1($donne)
	{
		
		if(isset($donne))
		{
			$count=count($donne);
			if($count==2)
			{
				return " <a href='$donne[0]'  class='w3-bar-item w3-button $this->class'>{$donne[1]}</a>";
			}
			elseif ($count==4) {
				return " 
				<a href='$donne[0]'  class='w3-bar-item w3-button $this->class'>{$donne[1]}</a>
				<a href='$donne[2]'  class='w3-bar-item w3-button $this->class'>{$donne[3]}</a>";
			}
			elseif ($count==6) {
				return " 
				<a href='$donne[0]'  class='w3-bar-item w3-button $this->class'>{$donne[1]}</a>
				<a href='$donne[2]'  class='w3-bar-item w3-button $this->class'>{$donne[3]}</a>
				<a href='$donne[4]'  class='w3-bar-item w3-button $this->class'>{$donne[5]}</a>";
			}
			elseif ($count==8) {
				return " 
				<a href='$donne[0]'  class='w3-bar-item w3-button $this->class'>{$donne[1]}</a>
				<a href='$donne[2]'  class='w3-bar-item w3-button $this->class'>{$donne[3]}</a>
				<a href='$donne[4]'  class='w3-bar-item w3-button $this->class'>{$donne[5]}</a>
				<a href='$donne[6]'  class='w3-bar-item w3-button $this->class'>{$donne[7]}</a>";
			}
		}
	}
	public function href($donne)
	{
		return " <a href='$donne[0]' class='w3-bar-item w3-button $this->class'>{$donne[1]}</a>";
	}
	public function navigation($donne=[])
	{
		return "

			<div class='w3-top'>
			  <div class='w3-bar w3-white w3-wide w3-padding w3-card'>
			 		{$this->href($donne['premier'])}
			    <div class='w3-right w3-hide-small'>
			     {$this->hre1($donne['dexieme'])}
			    </div>
			  </div>
			</div>
		";
	}
}


 ?>