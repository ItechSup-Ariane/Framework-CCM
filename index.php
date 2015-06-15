<?php

use \FrameworkWidget\Classe\Formulaire\Formulaire;
//use \FrameworkWidget\Classe\Formulaire\Widget\Widget;
use \FrameworkWidget\Classe\Formulaire\Widget\Texte\Texte;
//use \FrameworkWidget\Classe\Formulaire\Widget\Texte\Entier;
use \FrameworkWidget\Classe\Formulaire\Widget\Texte\Date;
//use \FrameworkWidget\Classe\Formulaire\Widget\Texte\CodePostal;
use \FrameworkWidget\Classe\Formulaire\Widget\Texte\Password;
use \FrameworkWidget\Classe\Formulaire\Widget\Texte\Mail;
//use \FrameworkWidget\Classe\Formulaire\Widget\Texte\Telephone;
//use \FrameworkWidget\Classe\Formulaire\Widget\Texte\Url;
use FrameworkWidget\Classe\Formulaire\Widget\Liste\ListeMultiple;
use FrameworkWidget\Classe\Formulaire\Widget\Liste\ListeSimple;
use FrameworkWidget\Classe\Formulaire\Widget\Liste\ListeCheckBox;

spl_autoload_register(function ($class) {

    $prefix = 'FrameworkWidget';

    $base_dir = __DIR__;

    $len = strlen($prefix);
    if (strncmp($prefix, $class, $len) !== 0) {
        return;
    }
    $relative_class = substr($class, $len);
    $file = $base_dir . str_replace('\\', '/', $relative_class) . '.php';

    if (file_exists($file)) {
        require $file;
    }
});

$form_test = new Formulaire('POST', '', 'form1');

$form_test->add_Widget(new Texte('Nom : ', 'nomInput')); // $input_nom = new Texte('Nom : ','nomInput');           
$form_test->add_Widget(new Texte('Prenom : ', 'prenomInput'));    //$input_prenom = new Texte('Prenom : ','prenomInput');                
$form_test->add_Widget(new Mail('Mail : ', 'mailInput'));    //$input_mail = new Mail('Mail : ','mailInput');                
$form_test->add_Widget(new Password('Password : ', 'passwordInput'));    //$input_password = new Password('Password : ','passwordInput');
$form_test->add_Widget(new Date('Date : ', 'dateInput'));    //$input_date = new Date('Date : ','dateInput');
$form_test->add_Widget(new Texte('Ville', 'villeInput'));
$form_test->add_Widget(new Texte('Code Postal', 'cpInput'));
$form_test->add_Widget(new ListeMultiple('Liste VilleMultiple', 'selectListeMultiple', 6, array(0 => 'Nantes', 1 => 'Le Mans', 2 => 'Chateaubriant')));
$form_test->add_Widget(new ListeSimple('Liste VilleSimple', 'selectListeSimple', 6, array('Nantes', 'Le Mans', 'Chateaubriant')));
$form_test->add_Widget(new ListeCheckBox('Liste PassionMultiple','checkboxMultiple',6, array(0=>'Jeux-vid&eacute;o',1=>'Cin&eacute;ma',2=>'Musique')));
//revoir les keys 'nomInput' new ... (...,'nomInput'
//voir avec un get sur le $value du new Texte
echo $form_test->render_form();
//echo'tableau arrayWidget avant $_Post';
//var_dump($form_test->getArrayWidget());

$donneeDuPost = array();
foreach ($_POST as $key => $value) {
    $donneeDuPost = $_POST;
}
//echo'tableau post';
var_dump($_POST);
//echo'tableau donnee du post';
//var_dump($donneeDuPost);

$form_test->bind($donneeDuPost);
echo "-------------------------------------------------------------------------------<BR/>"
   . "-------------------------------------------------------------------------------<br/>"
   . "-------------------------------------------------------------------------------";
echo $form_test->renderValue_form();

//var_dump($form_test->bind($donneeDuPost));

//echo'tableau arrayWidget après $_Post';
var_dump($form_test->getArrayWidget());
