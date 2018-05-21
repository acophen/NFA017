<!doctype html>
<?php
session_start();
$_session['login']= 'admin';
$_session['userpass']= 'admin123';
if ($_session['username'] != 'admin'){
	echo '<mark>';
	echo 'login ou mot de passe invalide';
	echo '</mark>';
	
}
?>
<html>
<head>
<meta charset="UTF-8"/>
<title> Ma page d'accueil </title>
</head>
<body>
<?php
echo 'Bienvenue '.$_session['login'];
echo '<br>';
echo 'Pour accéder à vos identifiants cliquez ';
echo "<a href=\"identifiant.php?\">";
echo 'ici';
echo '</a>';
echo '<br>';
echo 'si vous voulez partir cliquez sur ';
echo "<a href=\"login.php?\">";
echo 'déconnexion';
echo '</a>';
?>
</body>
</html>