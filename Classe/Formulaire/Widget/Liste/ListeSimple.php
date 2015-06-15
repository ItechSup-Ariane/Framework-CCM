<?php

namespace FrameworkWidget\Classe\Formulaire\Widget\Liste;

use FrameworkWidget\Classe\Formulaire\Widget\Liste\ListeChoixSimple;

/**
 * Class ListeChoixSimple
 * 
 */
class ListeSimple extends ListeChoixSimple
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

    public function render()
    {
        $return = '<label>' . $this->getLabel() . '</label><br>
        <select name="' . $this->getNameInput() . '" >';
        foreach ($this->valueOption as $value) {
            $return .= '<option value="' . $value . '">' . $value . '</option>';
        }
        $return .='</select><BR/>';
        return $return;
    }

}
