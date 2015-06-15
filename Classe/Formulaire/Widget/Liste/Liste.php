<?php

NAMESPACE FrameworkWidget\Classe\Formulaire\Widget\Liste;

use FrameworkWidget\Classe\Formulaire\Widget\Widget;

/**
 * Class Liste
 * 
 * <ul>
 * <li>@var protected $sizeSelect : select's size </li>
 * <li>@var protected $valueOption : table of option </li>
 * </ul>
 */
class Liste extends Widget
{

    protected $sizeSelect;
    protected $valueOption;

    /**
     * __construct function
     * @param type $labelName
     * @param type $nameInput
     * @param type $size
     * @param type $valueOption
     */
    function __construct($labelName, $nameInput, $size, $valueOption)
    {
        parent::__construct($labelName, $nameInput);
        $this->sizeSelect = $size;
        $this->valueOption = $valueOption;
    }

    /**
     * render of widget extends from widget class
     */
    function render()
    {
        parent::render();
    }

}
