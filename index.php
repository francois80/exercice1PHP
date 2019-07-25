<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
	<meta charset="utf-8">
	<title>Exercice 1 PHP</title>
</head>
<body>
	<h1>Créer 2 variables object et message et les initialiser avec les valeurs de votre choix.</h1>
	<?php
	$message = 'Salut à toi';
	$objet = 'travail beaucoup et tu seras le meilleur';
	echo '<p><span style="color:blue">variable $message : </span>' . $message. '</p>';
	echo '<p><span style="color:blue">variable $objet : </span>'. $objet. '</p>';
	echo '<p><span style="color:blue">résultat : </span>'. $message. " ". $objet. '</p>';
	?>
</body>
</html>
