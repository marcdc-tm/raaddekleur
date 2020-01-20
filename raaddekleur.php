<html>
<?php
include("kleur.php");
if (isset($_POST['random'])) {
	$start = false;
	$correct = false;
	$randomKleur = Kleur::Get($_POST['random']);
	if ($randomKleur['id']==$_POST['kleur']) {
		$correct = true;
	} 
} else {
	$start = true;
	$randomKleur = Kleur::Random();
}
	
include("head.php");
include("body.php");
?>
</html>