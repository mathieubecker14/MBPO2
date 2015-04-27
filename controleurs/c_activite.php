<?php

if (isset($_POST) || !empty($_POST))
{
    if(isset($_POST["add"]))
    {
        if(!empty($_POST['name']) && !empty($_POST['libelle']) && !empty($_POST['desc']) && !empty($_POST['img']))
        {
            $activite=$pdo->addActivite($_POST['name'],$_POST['libelle'],$_POST['desc'],$_POST['img']);
            include ('vues/v_activites.php');
            $_SESSION['success'] = 1;
        }
        else
        {
            include ('vues/v_activites.php');
            $_SESSION['error'] = "Erreur.";  
        }
    }
}
