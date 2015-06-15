<?php

namespace FrameworkWidget\Classe\Formulaire\Widget\Texte;

use FrameworkWidget\Classe\Formulaire\Widget\Texte\Entier;

/**
 * Class CODE POSTAL
 * 
 * <ul>
 * <li>protected $typeInput : widget's type </li>
 * </ul>
 */
class CodePostal extends Entier
{

    protected $typeInput = 'entier';

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
     * convert the int value in a string value
     * @param int $codePostalInt
     * @return type
     */
    protected function convertString(int $codePostalInt)
    {
        $codePostalString = (string) $codePostalInt;
        return $codePostalString;
    }

}
