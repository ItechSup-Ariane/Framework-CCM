<?php

namespace FrameworkWidget\Classe\Formulaire\Widget\Liste;

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
    public function __construct($name, $size, $valueOption, $label)
    {
        parent::__construct($name, $size, $valueOption, $label);
    }

    /**
     * render of widget extends from liste
     */
    protected function render()
    {
        parent::render();
    }

}
