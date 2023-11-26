<?php
session_start();
ob_start();
include_once 'conexao.php';
$dados = filter_input_array(INPUT_POST, 
FILTER_DEFAULT);
?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="../fotos/Rose.ico" type="image/x-icon" />
    <link rel="stylesheet" href="../style/header.css" id="theme-stylesheet" />
    <link rel="stylesheet" href="../style/footer.css" id="theme-stylesheet" />
    <link rel="stylesheet" href="../style/responsivo.css" />
    <link rel="stylesheet" href="../style/login.css" />
    <script
      src="https://kit.fontawesome.com/c8e307d42e.js"
      crossorigin="anonymous"
    ></script>

    <title>Floricultura Teresinha</title>
  </head>
  <body>
    <!-- NAVEGAÇÃO LOGO + LINKS -->
    <header>
      <!-- USER-ICON -->
      <nav>
        <a class="user" href="login.php"><i class="fa-solid fa-user"></i></a>
        <!-- LOGO -->
        <a class="logo" href="../index.html"
          ><img src="../fotos/img/logo.png" alt=""
        /></a>
        <!-- CARRINHO -->
        <div>
          <a class="shopping">
            <i class="fa-solid fa-bag-shopping"></i>
            <span class="quantity">0</span></a
          >
        </div>
      </nav>
    </header>
    <div class="wrapper">
      <div class="container">
        <div class="box-login">
          <div class="login">
    <h1>Entrar</h1>
    <form method="POST" action="">
            <p>
              E-mail<span style="color: red; font-size: 10px; margin: 3px"
                >*</span
              >
            </p>
            <input type="email" name="email" id="" value="<?php if (isset($dados['email'])) {echo $dados['email'];} ?>" required />
          </div>
          <div class="senha">
            <p>
              Senha<span style="color: red; font-size: 10px; margin: 3px"
                >*</span
              >
            </p>
            <input type="password" name="senha_usuario" id="" required value="<?php if (isset($dados['senha_usuario'])) {echo $dados['senha_usuario'];} ?>"/>

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

    <button class="button-login" value="Acessar" name="SendLogin" >ACESSAR</button>
    </form>


    
          <div class="perdeu-senha">
            <label for="">
              <input type="checkbox" />
              Lembre-me
            </label>
            <a class="kkk" href="recuperar_senha.php">Perdeu a senha?</a>
          </div>
        </div>
        <div class="box-register">
          <h1>Registre-se</h1>
          <p>
            O registro neste site permite que você acesse o status e o histórico do seu pedido. Basta preencher os campos abaixo e configuraremos uma nova conta para você rapidamente. Solicitaremos apenas as informações necessárias para tornar o processo de compra mais rápido e fácil.
          </p>
          <a href="registro.php"><button class="button-cadastro">CADASTRE-SE</button></a>
        </div>
      </div>
    </div>
  </body>
    <!-- SCRIPTS -->
    <script src="js/carrossel.js"></script>
    <script src="js/cart.js"></script>
</html>
