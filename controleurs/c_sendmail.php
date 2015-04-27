<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$error = [];

if(!isset($_POST['name']) || empty($_POST['name'])){
    $error['name'] = "Vous devez mettre un nom.";
}
if(!isset($_POST['email']) || empty($_POST['email'])){
      $error['email'] = "Vous devez mettre un email valide.";  
}
if(!isset($_POST['message']) || empty($_POST['message'])){
        $error['message'] = "Vous devez mettre un message.";
}

if(!empty($error)){
    $_SESSION['error'] = $error;
    $_SESSION['input'] = $_POST;
}
else
{   
    if(mail('mathieubecker14@gmail.com','Formulaire de contact',$_POST['message'],'FROM: '.$_POST['email']))
    {
        $_SESSION['success'] = 1;
    }
    else
    {
        $error['envoi'] = "Erreur lors de l'envoi de l'email.";
        $_SESSION['error'] = $error; 
    }
}
$lesActivites = $pdo->affActivite();
include("vues/v_accueil.php");