<?php

NAMESPACE FrameworkWidget\Classe\Formulaire\Widget\Liste;

use FrameworkWidget\Classe\Formulaire\Widget\Liste\ListeChoixSimple;

class ListeCheckBox extends ListeChoixSimple
{

    protected $typeInput = 'check';

    function __construct($name, $size, $valueOption, $label)
    {
        parent::__construct($name, $size, $valueOption, $label);
    }

}
