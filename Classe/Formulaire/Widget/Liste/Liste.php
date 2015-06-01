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

class Liste extends Widget{
    //put your code here
    protected $nameSelect;
    protected $sizeSelect;
    protected $multiple;
    protected $disabled;
    protected $valueOption;
    
    function __construct($name,$size,$multiple,$disable,$valueOption) {
        $this->nameSelect=$name;
        $this->sizeSelect=$size;
        $this->multiple=$multiple;
        $this->disabled=$disable;
        $this->valueOption=$valueOption;
    }
}
