<?php

NAMESPACE FrameworkWidget\Classe\Formulaire\Widget\Texte;

use FrameworkWidget\Classe\Formulaire\Widget\Widget;

/**
 * Class TEXTE
 * 
 * <ul>
 * <li>protected $typeInput : widget's type </li>
 * </ul>
 */
class Texte extends Widget
{

    protected $typeInput = 'text';

    /**
     * __construct function
     * @param type $labelName
     * @param type $nameInput
     */
    function __construct($labelName, $nameInput)
    {
        parent::__construct($labelName, $nameInput);
    }

}
