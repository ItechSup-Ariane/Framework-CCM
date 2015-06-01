<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Telephone
 *
 * @author Corentin
 */

NAMESPACE FrameworkWidget\Classe\Formulaire\Widget\Texte;
use FrameworkWidget\Classe\Formulaire\Widget\Texte\Texte;

class Telephone extends Texte   {
    //put your code here
    protected $typeInput='tel';
    
    function __construct($labelName, $nameInput) {
        parent::__construct($labelName, $nameInput);
    }
    
    protected function render(){
        //renvoi le html du widget
       return '<label>'.$this->getLabel().'</label><br>
        <input type='.$this->getTypeInput().' name='.$this->getNameInput().' '. 
        'pattern="^((\+\d{1,3}(-| )?\(?\d\)?(-| )?\d{1,5})|(\(?\d{2,6}\)?))(-| )?(\d{3,4})(-| )?(\d{4})(( x| ext)\d{1,5}){0,1}$"/><br>'; 
    }
}
