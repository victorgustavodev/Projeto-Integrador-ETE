<?php
session_start();
include_once("conexao.php");

$nome = filter_input(INPUT_POST, 'nome');
$email = filter_input(INPUT_POST, 'email');
$senha_usuario = password_hash(filter_input(INPUT_POST, 'senha_usuario'), PASSWORD_DEFAULT);

$query_usuario = "INSERT INTO usuarios (nome, email, senha_usuario, created) VALUES ('$nome', '$email', '$senha_usuario', NOW())";
$resultado_usuario  = $conn->prepare($query_usuario);
$resultado_usuario-> execute();

if(($resultado_usuario) AND ($resultado_usuario->rowCount() != 0)){
    header("Location: login.php");
    $_SESSION['msg'] = "<p style='font-size: 15px; color: green; line-height: 20px'>Cadastro realizado! Preencha seus dados e realize o login para que você acesse o status e o histórico do seu pedido. </p>";
} else{
    header("Location: registro.php");
    $_SESSION['msg'] = "<p style='font-size: 15px; color: #ff0000; line-height: 20px'>Cadastro não foi realizado, favor verificar se dados foram preenchidos corretamente!</p>";
}