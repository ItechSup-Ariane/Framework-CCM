<?php

namespace FrameworkWidget\Classe\Formulaire\Widget\Liste;

use FrameworkWidget\Classe\Formulaire\Widget\Liste\ListeChoixMultiple;

/**
 * Class ListeMultiple
 * 
 * <ul>
 * <li>@var protected $multiple : define if the select is multiple or not </li>
 * <li>@var protected $userValue : input's value, value is null when the constructor is call, here its a table of value</li>
 * </ul>
 */
class ListeMultiple extends ListeChoixMultiple
{

    protected $multiple = 'multiple';
    protected $userValue = array();

    /**
     * __construct function
     * @param type $name
     * @param type $size
     * @param type $valueOption is an associative array key => value
     * @param type $label
     */
    public function __construct($name, $size, $valueOption, $label)
    {
        parent::__construct($name, $size, $valueOption, $label);
    }

    /**
     *
     * @return the html code for the widget with its value
     */
    public function render()
    {
        $return = '<label>' . $this->getLabel() . '</label><br>
        <select name="' . $this->getNameInput() . '[]" size="' . $this->sizeSelect . '" multiple="' . $this->multiple . '" >';
        foreach ($this->valueOption as $key => $value) {
            $return .= '<option value="' . $key . '">' . $value . '</option>';
        }
        $return .='</select><BR>';
        return $return;
    }

    /**
     * 
     * @return the html code for the widget without its value
     */
    public function render_value()
    {
        $return = '<label>' . $this->getLabel() . '</label><br>
        <select name="' . $this->getNameInput() . '[]" size="' . $this->sizeSelect . '" multiple="' . $this->multiple . '" >';
        foreach ($this->valueOption as $key => $value) {
            foreach ($this->userValue as $key2 => $value2) {
                if ($key == $value2) {
                    $return .= '<option  value="" selected>' . $value . '</option>';
                }
            }
        }
        $return .='</select><BR>';
        return $return;
    }

    /**
     * the bind function assigns field values ​​entered by the user to their widget
     * @param type $value
     */
    protected function bind($value)
    {
        $this->userValue = $value;
    }

}
