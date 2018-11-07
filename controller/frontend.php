<?php

// Chargement des classes
require_once('model/ConnexionManager.php');
require_once('model/YearManager.php');

function login()
{
    $connexionManager = new \AnthonyGalerneau\CRM\Model\ConnexionManager();
    $resultat = $connexionManager->getLog(); 
    if (isset($_POST['pseudo']) && isset($_POST['pass'])) 
    {   
        // Comparaison du pass envoyé via le formulaire avec la base
        $isPasswordCorrect = password_verify($_POST['pass'], $resultat['pass']);
        if (!$resultat)
        {
            header('Location: /erreur-401');
        }
        else
        {
            if ($isPasswordCorrect) 
            {
                $_SESSION['id'] = $resultat['id'];
                $_SESSION['pseudo'] = $_POST['pseudo'];
                echo '<p>Vous êtes connecté !</p>';
            }
            else {
                header('Location: /erreur-401');
            }
        }
    }
    require('view/frontend/connexionView.php');

}

function admin()
{  
    require('view/admin/adminView.php');
}

