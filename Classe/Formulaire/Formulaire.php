<?php

namespace FrameworkWidget\Classe\Formulaire;

/**
 * Class FORMULAIRE
 * 
 * <ul>
 * <li>protected $method : form's method, $_post or $_get </li>
 * <li>protected $action : form's action </li>
 * <li>protected $name : form's name</li>
 * <li>protected $arrayWidget : Table widget , filled with the add_widget () function</li>
 * </ul>
 */
class Formulaire
{

    //put your code here
    protected $method;
    protected $action;
    protected $name;
    protected $arrayWidget;

    /**
     * __construct function
     * @param type $method_form
     * @param type $action_form
     * @param type $name_form
     */
    function __construct($method_form, $action_form, $name_form)
    {
        $this->method = $method_form;
        $this->action = $action_form;
        $this->name = $name_form;
    }

    /**
     * function add_widget completed the table arrayWidget
     * @param type $value
     */
    function add_Widget($value)
    {
        $this->arrayWidget[$value->getNameInput()] = $value;
    }

    /**
     * the html code for the form without its value
     * @return string
     */
    public function render_form()
    {
        $return = '<form method="' . $this->method . '" '
                . 'action="' . $this->action . '" '
                . 'name="' . $this->name . '">';
        foreach ($this->arrayWidget as $widget) {
            $return .= $widget->render();
        }
        $return .= '<br><input type="submit" name"valider" value="ENVOYER"/> </form>';
        return $return;
    }

    /**
     * the bind function assigns field values ​​entered by the user to their widget
     * @param type $donneePost
     */
    function bind($donneePost)
    {
        foreach ($donneePost as $key => $value) {
            $this->arrayWidget[$key]->bind($value);
        }
    }

    /**
     * 
     * @return the html code for the widget with its value
     */
    public function renderValue_form()
    {
        $return = '<form method="' . $this->method . '" '
                . 'action="' . $this->action . '" '
                . 'name="' . $this->name . '">';
        foreach ($this->arrayWidget as $widget) {
            $return .= $widget->render_value();
        }
        $return .= '</form>';
        return $return;
    }

    /**
     * 
     * @return arrayWidget
     */
    public function getArrayWidget()
    {
        return $this->arrayWidget;
    }

}
