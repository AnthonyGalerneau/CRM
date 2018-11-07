<?php
$title = htmlspecialchars('Admin'); ?>

<?php ob_start(); ?>
<h1>Bienvenue dans votre CRM !</h1>
<div id="admin">
	<div class="session">
		<?php
		 echo '<p>Bonjour <strong>' . $_SESSION['pseudo'] . '</strong>!  </p>';
		?>
	</div>
	<?php
	require_once('model/YearManager.php'); 
	try{
		$year = new AnthonyGalerneau\CRM\Model\YearManager($_GET['year'] ?? null); 
	} catch (\Exception $e){
		$year = new AnthonyGalerneau\CRM\Model\YearManager();
	}?>
    
    <h1><?= $year->toString(); ?></h1>
</div>
    
<?php $content = ob_get_clean(); ?>
<?php require('view/admin/template.php'); ?>