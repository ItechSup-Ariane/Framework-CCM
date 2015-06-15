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

    protected $typeInput = 'checkbox';
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
        $return = '<label>' . $this->getLabel() . '</label><br>';
        foreach ($this->valueOption as $key => $value) {
            $return .= '<input name="'.$this->getNameInput().'" type="'.$this->typeInput.'" id="' . $key . '" value="' . $value . '"/>'
                    .'<label>'.$value.'</label>';
        }
        $return .='<BR>';
        return $return;
    }

    /**
     * 
     * @return the html code for the widget without its value
     */
    public function render_value()
    {
       $return = '<label>' . $this->getLabel() . '</label><br>';
       foreach ($this->valueOption as $key => $value) {
            foreach ($this->userValue as $key2 => $value2) {
                if ($key == $value2) {
                    $return .= '<input type="'.$this->typeInput.'" id="' . $key . '" value="' . $value . '"/>'
                            . '<label>'.$value.'</label>';
                }
            }
        }
        $return .='<br>';
        return $return;
    }

    /**
     * the bind function assigns field values ​​entered by the user to their widget
     * @param type $value
     */
    public function bind($value)
    {
        $this->userValue = $value;
    }
}
