<?php


/**
------------------------------------------------------------    
    HTML form Generator by PHP class from tisuchi.com
------------------------------------------------------------
Author         : Thouhedu Islam
Author's Email : suchi@tisuchi.com
Author's URL   : tisuhci.com
    
*/
    
    


class HtmlFormMaker
{
	
	
	public function form_open($method){
		return '<form  method="'.$method.'">';
	}

	public function form_label($name){
	    return '<label for="'.$name.'">'.$name.'</label> : ';
	}

    public function form_input($type, $name, $placeholder){
		
		return '<input type="'.$type.'" name="'.$name.'" id="'.$name.'" placeholder="'.$placeholder.'"">';
	}

	public function form_textarea($name, $placeholder){
			return '<textarea name="'.$name.'" placeholder="'.$placeholder.'"></textarea>';
	}

	public function form_button($type, $text){
		
		return '<input type="'.$type.'" value="'.$text.'">';
	}

	public function form_close(){
		return '</form>';
	}

	

}

