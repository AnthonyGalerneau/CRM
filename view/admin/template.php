<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?= 'Jean Forteroche - ' . $title ?></title>
        <link href="/public/css/style.css" rel="stylesheet" /> 
    </head> 
    <body>
        <?php
        if (isset($_SESSION['id']) AND isset($_SESSION['pseudo']))
        {
        ?>
            <header>
                <div class="titreAdmin">
                    <h1>CRM</h1>
                </div>  
            </header> 
            <?=  $content ?>
            <footer>
                <div class="login">
                    <?php
                    if(session_id() == "") {
                        ?>
                        <p><a href="/login">Admin</a></p>
                    <?php  
                    } 
                    else
                    {
                    ?>
                       <p><a href="/index.php?action=logout">Déconnexion</a></p>
                   <?php
                    }
                    ?> 
                </div>
            </footer>
        <?php 
        }
        else
        {
            header('Location: /index.php?action=logout');
        }
        ?>
    </body>
</html>