<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ListeSimple
 *
 * @author Corentin
 */

NAMESPACE FrameworkWidget\Classe\Formulaire\Widget\Liste;

use FrameworkWidget\Classe\Formulaire\Widget\Liste\ListeChoixSimple;

class ListeSimple extends ListeChoixSimple
{

    //put your code here


    function __construct($name, $size, $valueOption, $label)
    {
        parent::__construct($name, $size, $valueOption, $label);
    }

    function render()
    {
        $return = '<label>' . $this->getLabel() . '</label><br>
        <select name="' . $this->getNameInput() . '" >';
        foreach ($this->valueOption as $value) {
            $return .= '<option value="' . $value . '">' . $value . '</option>';
        }
        $return .='</select><BR>';
        return $return;
    }

}
