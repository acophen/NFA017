<!doctype html>
<?php
session_start();
$_session['login']= 'admin';
$_session['userpass']= 'admin123';
?>
<html>
<head>
<meta charset="UTF-8"/>
<title> Mes identifiants </title>
</head>
<body>
<?php
echo 'Votre login est : '.$_session['login'];
echo'<br>';
echo 'Votre mot de passe est : '.$_session['userpass'];
echo '<br>';
echo 'si vous voulez partir cliquez sur ';
echo "<a href=\"login.php?\">";
echo 'déconnexion';
echo '</a>';
?>
</body>
</html>