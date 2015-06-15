<?php

namespace FrameworkWidget\Classe\Formulaire\Widget\Texte;

use FrameworkWidget\Classe\Formulaire\Widget\Texte\Texte;

/**
 * Class DATE
 * 
 * <ul>
 * <li>protected $typeInput : widget's type </li>
 * </ul>
 */
class Date extends Texte
{

    protected $typeInput = 'date';

    /**
     * __construct function
     * @param type $labelName
     * @param type $nameInput
     */
    public function __construct($labelName, $nameInput)
    {
        parent::__construct($labelName, $nameInput);
    }

}
