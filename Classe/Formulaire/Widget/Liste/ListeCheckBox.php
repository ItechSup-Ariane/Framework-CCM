<?php

namespace FrameworkWidget\Classe\Formulaire\Widget\Liste;

use FrameworkWidget\Classe\Formulaire\Widget\Liste\ListeChoixSimple;

/**
 * Class ListeCheckBox
 * 
 * <ul>
 * <li>@var protected $typeInput : widget's type </li>
 * </ul>
 */
class ListeCheckBox extends ListeChoixSimple
{

    protected $typeInput = 'check';

    function __construct($name, $size, $valueOption, $label)
    {
        parent::__construct($name, $size, $valueOption, $label);
    }

}
