<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CodePostal
 *
 * @author Corentin
 */
NAMESPACE FrameworkWidget\Classe\Formulaire\Widget\Texte;
use FrameworkWidget\Classe\Formulaire\Widget\Texte\Entier;

class CodePostal extends Entier{
    //put your code here
    
    protected $typeInput='entier';
    
    function __construct($labelName, $nameInput) {
        parent::__construct($labelName, $nameInput);
    }
    
    function convertString(int $codePostalInt){
        $codePostalString = (string) $codePostalInt;
        return $codePostalString;
    }
}
