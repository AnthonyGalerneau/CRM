<?php

session_start();

require('controller/frontend.php');

try {
    if ($_GET['action'] == 'login') {
        login();
    }
    elseif ($_GET['action'] == 'logout') {
        session_start();
        session_destroy();
        header('Location: index.php?action=login');
    }

    elseif ($_GET['action'] == 'admin')
    {
        admin(); 
    }
}
catch(Exception $e) { // S'il y a eu une erreur, alors...
    echo 'Erreur : ' . $e->getMessage();
}

?>
