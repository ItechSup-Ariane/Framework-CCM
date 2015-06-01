<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ListeMultiple
 *
 * @author Corentin
 */
NAMESPACE FrameworkWidget\Classe\Formulaire\Widget\Liste;
use FrameworkWidget\Classe\Formulaire\Widget\Liste\ListeChoixMultiple;

class ListeMultiple extends ListeChoixMultiple{
    //put your code here
    protected $multiple = 'multiple';
    
    function __construct($name, $size, $valueOption, $label) {
        parent::__construct($name, $size, $valueOption, $label);
        
    }
    
    function render(){
        $return ='<label>'.$this->getLabel().'</label><br>
        <select name="'.$this->getNameInput().'[]" size="'.$this->sizeSelect.'" multiple="'.$this->multiple.'" ';
             foreach ($this->valueOption as $value) {
                 $return .= '<option value="'.$value.'">'.$value.'</option>';
             }
       $return .='</select><BR>';
       return $return;
    }
}
