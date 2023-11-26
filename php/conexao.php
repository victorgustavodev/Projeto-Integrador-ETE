<?php

$host = "localhost";
$user = "id21576777_floricultura";
$pass = "Etejbl.2023";
$dbname = "id21576777_usuarios";
$port = 3306;
 
try{
    
    $conn= new PDO("mysql:host=$host;dbname=" . $dbname, $user, $pass);

}catch(PDOException $err){
    echo "Erro: Conexão com o banco de dados não realizado com sucesso!";
}
