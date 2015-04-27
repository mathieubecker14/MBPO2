<?php

require_once("include/fct.inc.php");
require_once ("include/class.pdogsb.inc.php");
 
include("vues/v_entete.php") ;
session_start();
$pdo = PdoGsb::getPdoGsb();
if(!isset($_GET['uc'])){
    $_GET['uc'] = 'index';
}
$uc = $_GET['uc'];
switch($uc){
	case 'index':
	{
            include("controleurs/c_accueil.php");break;
	}
        case 'connexion':
        {
            include("controleurs/c_connexion.php");break;
	}
        case 'deconnexion':
        {
            include("controleurs/c_deconnexion.php");break;
	}
        case 'activite':
        {
            include("controleurs/c_activite.php");break;
	}
        case 'sendmail':
        {
            include("controleurs/c_sendmail.php");break;
	}
}
include("vues/v_pied.php") ;
?>

