<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Url
 *
 * @author Corentin
 */

NAMESPACE FrameworkWidget\Classe\Formulaire\Widget\Texte;
use FrameworkWidget\Classe\Formulaire\Widget\Texte\Texte;

class Url extends Texte{
    //put your code here
    protected $typeInput='Url';
    
    function __construct($labelName, $nameInput) {
        parent::__construct($labelName, $nameInput);
    }
}
