<?php
//namespace WIDGET\TEXTE;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
//include 'Formulaire/Widget/Widget.php';
/**
 * Description of texte
 *
 * @author Corentin
 */

NAMESPACE FrameworkWidget\Classe\Formulaire\Widget\Texte;
use FrameworkWidget\Classe\Formulaire\Widget\Widget;

class Texte extends Widget{
    //put your code here
    
    protected $typeInput='text';
    
    function __construct($labelName, $nameInput) {
        parent::__construct($labelName, $nameInput);
    }
}
