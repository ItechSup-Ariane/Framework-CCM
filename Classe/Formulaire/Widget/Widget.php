<?php

NAMESPACE FrameworkWidget\Classe\Formulaire\Widget;

/**
 * Class WIDGET
 * 
 * <ul>
 * <li>protected $label : input's label, it's the text before input </li>
 * <li>protected $name : input's name </li>
 * <li>protected $type : input's type</li>
 * <li>protected $valueUtilisateur : input's value, value is null when the constructor is call</li>
 * </ul>
 */
abstract class Widget
{

    protected $label;
    protected $nameInput;
    protected $typeInput;
    protected $userValue = "";

    /**
     * __construct function
     * @param type $labelName
     * @param type $nameInput
     */
    function __construct($labelName, $nameInput)
    {
        $this->label = $labelName;
        $this->nameInput = $nameInput;
    }

    /**
     * 
     * @return label
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * 
     * @return name
     */
    public function getNameInput()
    {
        return $this->nameInput;
    }

    /**
     * 
     * @return type
     */
    public function getTypeInput()
    {
        return $this->typeInput;
    }

    /**
     * 
     * @return value
     */
    public function getUserValue()
    {
        return $this->userValue;
    }

    /**
     * 
     * @return the html code for the widget without its value
     */
    public function render()
    {
        return '<label>' . $this->label . '</label><br>
        <input type="' . $this->typeInput . '" name="' . $this->nameInput . '"/><br>';
    }

    /**
     * 
     * @return the html code for the widget with its value
     */
    public function render_value()
    {
        return '<label>' . $this->label . '</label><br>
        <input type="' . $this->typeInput . '" name="' . $this->nameInput . '" value="' . $this->userValue . '"/><br>';
    }

    /**
     * the bind function assigns field values ​​entered by the user to their widget
     * @param type $value
     */
    function bind($value)
    {
        $this->userValue = $value;
    }

}
