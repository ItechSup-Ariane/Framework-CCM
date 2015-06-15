<?php

namespace FrameworkWidget\Classe\Formulaire\Widget\Texte;

use FrameworkWidget\Classe\Formulaire\Widget\Texte\Texte;

/**
 * Class TELEPHONE
 * 
 * <ul>
 * <li>protected $typeInput : widget's type </li>
 * </ul>
 */
class Telephone extends Texte
{

    protected $typeInput = 'tel';

    /**
     * __construct function
     * @param type $labelName
     * @param type $nameInput
     */
    public function __construct($labelName, $nameInput)
    {
        parent::__construct($labelName, $nameInput);
    }

    /**
     * render function
     * @return type
     */
    protected function render()
    {
        //renvoi le html du widget
        return '<label>' . $this->getLabel() . '</label><br>
        <input type=' . $this->getTypeInput() . ' name=' . $this->getNameInput() . ' ' .
                'pattern="^((\+\d{1,3}(-| )?\(?\d\)?(-| )?\d{1,5})|(\(?\d{2,6}\)?))(-| )?(\d{3,4})(-| )?(\d{4})(( x| ext)\d{1,5}){0,1}$"/><br>';
    }

}
