<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace FrameworkWidget\Classe\Formulaire;

class Formulaire {
    //put your code here
    protected $method;
    protected $action;
    protected $name;
    protected $arrayWidget;
    
    function __construct($method_form,$action_form,$name_form){
        $this->method=$method_form;
        $this->action=$action_form;
        $this->name=$name_form;
    }
    
    function add_Widget($value){
        $this->arrayWidget[$value->getNameInput()] = $value;
    }
    
    public function render_form(){
        $return = '<form method="'.$this->method.'" '
                . 'action="'.$this->action.'" '
                . 'name="'.$this->name.'">';
        foreach($this->arrayWidget as $widget){
            $return .= $widget->render();
        }
        $return .= '<br><input type="submit" name"valider" value="ENVOYER"/> </form>';
        return $return;   
    }
    
    function bind($donneePost){
        foreach($donneePost as $key => $value){
            //if $donneePost->$key== 
            $this->arrayWidget[$key]->bind($value);
            
        }   //recup el tableau de post et vérifie par rapport au widget    
    }
    
    public function renderValue_form(){
        $return = '<form method="'.$this->method.'" '
                . 'action="'.$this->action.'" '
                . 'name="'.$this->name.'">';
        foreach($this->arrayWidget as $widget){
            $return .= $widget->render_value();
        }
        $return .= '<br><input type="submit" name="valider" value="ENVOYER"/> </form>';
        return $return; 
    }
    
    public function getArrayWidget() {
         return $this->arrayWidget;
    }
}
