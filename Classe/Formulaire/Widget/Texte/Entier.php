<?php

namespace FrameworkWidget\Classe\Formulaire\Widget\Texte;

use FrameworkWidget\Classe\Formulaire\Widget\Texte\Texte;

/**
 * Class ENTIER
 * 
 * <ul>
 * <li>protected $typeInput : widget's type </li>
 * </ul>
 */
class Entier extends Texte
{

    //put your code here
    protected $typeInput = 'number';

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
