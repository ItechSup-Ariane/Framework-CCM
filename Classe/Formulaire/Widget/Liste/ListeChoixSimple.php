<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ListeChoixSimple
 *
 * @author Corentin
 */

NAMESPACE FrameworkWidget\Classe\Formulaire\Widget\Liste;
use FrameworkWidget\Classe\Formulaire\Widget\Liste\Liste;

class ListeChoixSimple extends Liste{
    //put your code here
     function __construct($name, $size, $valueOption, $label) {
        parent::__construct($name, $size, $valueOption, $label);
    }
    
    function render() {
        parent::render();
    }
}
