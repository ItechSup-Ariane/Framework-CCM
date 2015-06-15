<?php

NAMESPACE FrameworkWidget\Classe\Formulaire\Widget\Liste;

use FrameworkWidget\Classe\Formulaire\Widget\Liste\ListeChoixMultiple;

class ListeMultiple extends ListeChoixMultiple
{

    protected $multiple = 'multiple';
    protected $valueUtilisateur = array();

    //valueOption est un tableau de Key=>value
    //constructeur du widget
    function __construct($name, $size, $valueOption, $label)
    {
        parent::__construct($name, $size, $valueOption, $label);
    }

    //affichage du widget/formulaire sans la donnée valueUtilisateur bind
    function render()
    {
        $return = '<label>' . $this->getLabel() . '</label><br>
        <select name="' . $this->getNameInput() . '[]" size="' . $this->sizeSelect . '" multiple="' . $this->multiple . '" >';
        foreach ($this->valueOption as $key => $value) {
            $return .= '<option value="' . $key . '">' . $value . '</option>';
        }
        $return .='</select><BR>';
        return $return;
    }

    //affichage du widget/formulaire avec la donnée valueUtilisateur bind
    function render_value()
    {
        $return = '<label>' . $this->getLabel() . '</label><br>
        <select name="' . $this->getNameInput() . '[]" size="' . $this->sizeSelect . '" multiple="' . $this->multiple . '" >';
        foreach ($this->valueOption as $key => $value) {
            foreach ($this->valueUtilisateur as $key2 => $value2) {
                if ($key == $value2) {
                    $return .= '<option  value="" selected>' . $value . '</option>';
                }
            }
        }
        $return .='</select><BR>';
        return $return;
    }

    //attribut la valeur du formulaire à l'attribut 
    function bind($value)
    {
        $this->valueUtilisateur = $value;
    }

}
