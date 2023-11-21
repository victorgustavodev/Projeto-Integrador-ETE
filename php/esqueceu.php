<?php
session_start();
ob_start();
include_once 'conexao.php';
$dados = filter_input_array(INPUT_POST,FILTER_DEFAULT);
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="fotos/Rose.ico" type="image/x-icon">
    <link rel="stylesheet" href="style/main.css" id="theme-stylesheet">
    <link rel="stylesheet" href="style/responsivo.css">
    <link rel="stylesheet" href="https://fontawesome.com/icons/cart-shopping?f=sharp&s=regular&pc=%23000000"
        integrity="sha384-GLhlTQ8iK+1iS1+IjRwoTXcE5aZRIUdS/8r+T5uViIcZKh" crossorigin="anonymous">


    <title>Floricultura Teresinha</title>
</head>

<body>
    <!-- NAVEGAÇÃO LOGO + LINKS -->
    <header>
        <nav>
            <!-- MENU MOBILE -->
            <a class="logo" href="index.html"><img src="fotos/img/logo.png" alt=""></a>
            <div class="mobile-menu">
                <div class="line1"></div>
                <div class="line2"></div>
                <div class="line3"></div>
            </div>
            <!-- LINKS -->
            <ul class="nav-list">
                <li><a href="#">Contato</a></li>
                <li><a href="registrar.php">Registrar/</a><a href="loginusuario.php">Login</a></li>

            </ul>
        </nav>
    </header>
    <!-- CORPO DO CÓDIGO -->

  <div class="">
  <!-- definir class para ajustar css -->

    <?php 
    if(!empty($dados['SendRecupSenha'])){
        
        $query_email = "SELECT id, nome, email, senha_usuario 
                        FROM usuarios 
                        WHERE email =:email  
                        LIMIT 1";
        // consulta no banco de dados a query
        $result_email  = $conn->prepare($query_email);
        //usado para vincular um valor a consulta preparada, o param str diz que o valor recebido vai ser uma string
        $result_email-> bindParam(':email', $dados['email'], PDO::PARAM_STR);
        $result_email-> execute();

        if(($result_email) AND ($result_email->rowCount() != 0)){

            var_dump($dados);
            
        }
        else{
            $_SESSION['msg'] = "<p style='font-size: 25px; color: #ff0001'>Erro: Usuário não encontrado!</p>";
        }
    }

    if(isset($_SESSION['msg'])){
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
      }
    
    ?>

    <form  method="post"  action="">
        <input type="text" name="email" placeholder="EMAIL" value="<?php if(isset($dados['email']))
        {echo $dados['email'];}?>">

        <a href=""><button value="Recuperar" name="SendRecupSenha"><p>ENVIAR</p></button></a>  
    </form>
  </div>
  
  <footer id="Contato">
  <div class="adress">
        <div class="contatos">
          <div><hr style="width: 80vw; margin-bottom: 2vw;"></div>
          <a href="https://www.instagram.com/floriculturatere/?igshid=YmMyMTA2M2Y%3D" target="_blank"><img src="fotos/insta-ico.png" style="width: 30px;" alt="Fale Conosco pelo Instagram" title="Fale Conosco pelo Instagram"></a>
          
          <a href="https://wa.me/5581998636465?text= Olá, Dona Terezinha! Tudo bem?" target="_blank"> 
          <img id = "logo-wpp" style="width: 30px;" src="fotos/wpp-ico.png" alt="Fale Conosco pelo Whatsapp" title="Fale Conosco pelo Whatsapp">
      </div>
  
      <address>Av. Alfredo Bandeira de Melo, 1 - Ana de Albuquerque, Igarassu - PE, 53630-030</address>
  
  </div>
  
</footer>

  <script src="js/main.js"></script>

</body>

</html>