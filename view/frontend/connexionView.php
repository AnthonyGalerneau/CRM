
<?php
$title = htmlspecialchars('Connexion'); ?>

<?php ob_start(); ?>
<?php
 if (isset($_SESSION['id']) AND isset($_SESSION['pseudo']))
{
    header('Location: /index.php?action=admin');
}
else
{
?>
<div class="loginTitre">
    <h1>CRM</h1>
</div>

<div class="loginform">
    <form action="" method="post">
        <h2><legend>Identifiez-vous :</legend></h2>
        <p><label for="pseudo">Votre identifiant</label></p>
        <p><input type="text" name="pseudo" id="pseudo" ></p>
        <br>

        <p><label for="pass">Votre mot de passe</label></p>
        <p><input type="password" name="pass" id="pass"></p>
        <br>

        <p><button type="submit">Se connecter</button></p>
    </form>
</div>
<?php 
}
?>
<?php $content = ob_get_clean(); ?>
<?php require('view/frontend/template.php'); ?>