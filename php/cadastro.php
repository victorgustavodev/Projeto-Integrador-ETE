<?php
session_start();
include_once("conexao.php");

$nome = filter_input(INPUT_POST, 'nome');
$email = filter_input(INPUT_POST, 'email');
$senha_usuario = password_hash(filter_input(INPUT_POST, 'senha_usuario'), PASSWORD_DEFAULT);

<<<<<<< Updated upstream
$query_usuario = "INSERT INTO usuarios (nome, email, senha_usuario, created) VALUES ('$nome', '$email', '$senha_usuario', NOW())";
=======
$query_usuario = "INSERT INTO usuarios (nome,  email, senha_usuario, created) VALUES ('$nome', '$email', '$senha_usuario', NOW())";
>>>>>>> Stashed changes
$resultado_usuario  = $conn->prepare($query_usuario);
$resultado_usuario-> execute();

if(($resultado_usuario) AND ($resultado_usuario->rowCount() != 0)){
<<<<<<< Updated upstream
    header("Location: ../login.php");
    $_SESSION['msg'] = "<p style='font-size: 15px; color: green;'>Cadastro realizado! Favor logar para ter acesso total ao nosso site!</p>";
} else{
    header("Location: register.php");
    $_SESSION['msg'] = "<p style='font-size: 15px; color: #ff0000;'>Cadastro não foi realizado, favor verificar se dados foram preenchidos corretamente!</p>";
=======
    header("Location: ../login.html");
    $_SESSION['msg'] = "<p style='font-size: 40px; color: green;'>Cadastro realizado! Favor logar para ter acesso total ao nosso site!</p>";
} else{
    header("Location: ../registrer.php");
    $_SESSION['msg'] = "<p style='font-size: 20px; color: #ff0000;'>Cadastro não foi realizado, favor verificar se dados foram preenchidos corretamente!</p>";
>>>>>>> Stashed changes
}