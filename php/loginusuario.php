<?php
session_start();
ob_start();
include_once 'conexao.php';
$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
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
                <li><a href="registro.php">Registrar</a></a></li>

            </ul>
        </nav>
    </header>
    <!-- CORPO DO CÓDIGO -->

    <h1 class="titulo_login">Acesse sua conta</h1>


    <form method="POST" action="">

        <input class="input_email" type="text" name="email" placeholder="Insira seu email"
            value="<?php if (isset($dados['email'])) {echo $dados['email'];} ?>"><br>
        <input class="input_password" type="password" name="senha_usuario" placeholder="Insira sua senha"
            value="<?php if (isset($dados['senha_usuario'])) {echo $dados['senha_usuario'];} ?>">

        <?php
        if (!empty($dados['SendLogin'])) {
            $query_email = "SELECT id, nome, email, senha_usuario
                    FROM usuarios
                    WHERE email =:email
                    LIMIT 1";
            // consulta no banco de dados a query
            $result_email = $conn->prepare($query_email);
            //usado para vincular um valor a consulta preparada, o param str diz que o valor recebido vai ser uma string
            $result_email->bindParam(':email', $dados['email'], PDO::PARAM_STR);
            $result_email->execute();
            if (($result_email) && ($result_email->rowCount() != 0)) {
                $row_email = $result_email->fetch(PDO::FETCH_ASSOC);
                if (password_verify($dados['senha_usuario'], $row_email['senha_usuario'])) {
                    $_SESSION['id'] = $row_email['id'];
                    $_SESSION['nome'] = $row_email['nome'];
                    header("Location: session.php");
                    exit();
                } else {
                    $_SESSION['msg'] = "<p style='font-size: 25px; color: #ff0001'>Erro: Usuário ou senha inválida!</p>";
                }
            } else {
                $_SESSION['msg'] = "<p style='font-size: 25px; color: #ff0000'>Erro: Usuário ou senha inválida!</p>";
            }

        }
        if (isset($_SESSION['msg'])) {
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
        }

        ?>

        <a href="#"><button value="Acessar" name="SendLogin"><p>ACESSAR</p></button></a>
        <p class="op">Ainda não se cadastrou? <a href="registro.php">Clique aqui</a></p>
        <p class="op">Esqueceu a senha? <a href="esqueceu.php">Clique aqui</a></p>

    </form>


    <footer>
        <div class="adress">
            <div class="contatos">
                <div><hr style="width: 80vw; margin-bottom: 2vw;"></div>
                <a href="https://www.instagram.com/floriculturatere/?igshid=YmMyMTA2M2Y%3D" target="_blank"><img
                        src="fotos/insta-ico.png" style="width: 30px;"
                        alt="Fale Conosco pelo Instagram" title="Fale Conosco pelo Instagram"></a>

                <a href="https://wa.me/5581998636465?text= Olá, Dona Terezinha! Tudo bem?" target="_blank">
                    <img id="logo-wpp" style="width: 30px;" src="fotos/wpp-ico.png"
                        alt="Fale Conosco pelo Whatsapp" title="Fale Conosco pelo Whatsapp">
            </div>
            <!-- <address>Av. Alfredo Bandeira de Melo, 1 - Ana de Albuquerque, Igarassu - PE, 53630-030</address> -->
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.4199838989034!2d-34.91207619681826!3d-7.851037161345874!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7ab14d4e2705717%3A0x4c7433749eb8713f!2sCentro%20Mari%C3%A1polis%20Santa%20Maria!5e0!3m2!1spt-BR!2sbr!4v1668990442002!5m2!1spt-BR!2sbr"
                width="10%" height="20%" margin="auto" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade" title="Nosso endereço"></iframe>
        </div>

    </footer>

    <!-- WHATSAPP FLUTUANTE -->
    <div class="whats">
        <a href="https://wa.me/5581998636465?text= Olá, Dona Terezinha! Tudo bem?" target="_blank">
            <img id="logo-wpp-flutuante" src="fotos/wpp-ico.png" alt="Fale Conosco pelo Whatsapp"
                title="Fale Conosco pelo Whatsapp">
        </a>
    </div>

    <!-- DECLARAÇÃO DE SCRIPTS -->
    <script src="js/carrossel.js"></script>
    <script src="js/mobile-navbar.js"></script>
    <script src="js/tema.js"></script>

</body>

</html>
