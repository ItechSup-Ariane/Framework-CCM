<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of widget
 *avoir une variable par fille widget type
 * 
 * @author Corentin
 */
NAMESPACE FrameworkWidget\Classe\Formulaire\Widget;

abstract class Widget {
    
    protected $label;
    protected $nameInput;
    protected $typeInput;
    protected $valueUtilisateur="";//bind qui donne la valeur
    
            
    function __construct($labelName,$nameInput) {
        $this->label=$labelName;
        $this->nameInput=$nameInput;
    }
    public function getLabel() {
        return $this->label;
    }

    public function getNameInput() {
        return $this->nameInput;
    }

    public function getTypeInput() {
        return $this->typeInput;
    }

    public function getValueUtilisateur() {
        return $this->valueUtilisateur;
    }

    public function render(){
        //renvoi le html du widget
       return '<label>'.$this->label.'</label><br>
        <input type="'.$this->typeInput.'" name="'.$this->nameInput.'"/><br>'; 
    }
    
    public function render_value(){
        //renvoi le html du widget
       return '<label>'.$this->label.'</label><br>
        <input type="'.$this->typeInput.'" name="'.$this->nameInput.'" value="'.$this->valueUtilisateur.'"/><br>'; 
    }
   //faire un bind widget
    function bind($value){
        $this->valueUtilisateur = $value;
    }
}