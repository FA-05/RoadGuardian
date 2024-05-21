<?PHP
include ("config/connect.php");

$_SESSION["logged-in"]=false;
unset($_SESSION["username"]);
unset($_SESSION["idVigile"]);
unset($_SESSION["tipo"]);
session_destroy();

// Reindirizza l'utente alla pagina index.php
header("Location: ../index.php");
?>
