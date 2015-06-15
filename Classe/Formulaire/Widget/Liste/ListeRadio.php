<?php

namespace FrameworkWidget\Classe\Formulaire\Widget\Liste;

use FrameworkWidget\Classe\Formulaire\Widget\Liste\ListeChoixSimple;

/**
 * Class ListeRadio
 * 
 * <ul>
 * <li>protected $typeInput : widget's type</li>
 * </ul>
 */
class ListeRadio extends ListeChoixSimple
{

    protected $typeInput = 'radio';

    /**
     * __construct function
     * @param type $name
     * @param type $size
     * @param type $valueOption
     * @param type $label
     */
    public function __construct($name, $size, $valueOption, $label)
    {
        parent::__construct($name, $size, $valueOption, $label);
    }

}
