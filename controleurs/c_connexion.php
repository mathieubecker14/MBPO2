<?php

$userConnecte = 0;

if (isset($_POST) || !empty($_POST))
{
    if(isset($_POST["connexion"]))
    {
        if(!empty($_POST['login']) && !empty($_POST['mdp']))
        {
            $user=$pdo->getUser($_POST['login'],$_POST['mdp']);
            if(!is_array($user))
            {
                $_SESSION['error'] = "Erreur.";  
                include("vues/v_connexion.php");
            }
            else
            {
                $userConnecte = 1;
            }
        }
        else
        {
            $_SESSION['error'] = "Erreur.";  
        }
    }
}

if($userConnecte === 1)
{
    include('vues/v_activites.php');
}
else
{
    include('vues/v_connexion.php');
}