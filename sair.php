
<?php
session_start();
ob_start();
unset($_SESSION['id'], $_SESSION['nome']);
$_SESSION['msg'] = "<p style='display: none'>Deslogado com sucesso!</p>";

header("Location: index.html");