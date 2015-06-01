<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of liste
 *
 * @author Corentin
 */

NAMESPACE FrameworkWidget\Classe\Formulaire\Widget\Liste;
use FrameworkWidget\Classe\Formulaire\Widget\Widget;

class Liste extends Widget{
    //put your code here
    protected $sizeSelect;
    protected $valueOption;
    
    function __construct($labelName, $nameInput,$size,$valueOption) {
        parent::__construct($labelName, $nameInput);
        $this->sizeSelect=$size;
        $this->valueOption=$valueOption;
    }
    
    function render() {
        parent::render();
    }
    
}
