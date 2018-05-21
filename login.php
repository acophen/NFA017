<!doctype html>
<?php
session_unset();
?>
<html>
<head>
<meta charset="UTF-8"/>
<title> Please Log In </title>
</head>
<body>
<form method="post" action="accueil.php">
<h2> Login </h2>
<input type="text" name="user" placeholder="Username"/><br><br>
<input type="password" name="pass" placeholder="Password"/><br><br>
<input type="submit" name="submit" value="Login"/>
</form>
</body>
</html>