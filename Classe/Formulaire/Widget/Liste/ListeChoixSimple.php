<?php

NAMESPACE FrameworkWidget\Classe\Formulaire\Widget\Liste;

use FrameworkWidget\Classe\Formulaire\Widget\Liste\Liste;

/**
 * Class ListeChoixSimple
 * 
 */
class ListeChoixSimple extends Liste
{

    /**
     * __construct function
     * @param type $name
     * @param type $size
     * @param type $valueOption
     * @param type $label
     */
    function __construct($name, $size, $valueOption, $label)
    {
        parent::__construct($name, $size, $valueOption, $label);
    }

    /**
     * render of widget extends from liste
     */
    function render()
    {
        parent::render();
    }

}
