<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="fotos/Rose.ico" type="image/x-icon" />
    <link rel="stylesheet" href="style/header.css" id="theme-stylesheet" />
    <link rel="stylesheet" href="style/footer.css" id="theme-stylesheet" />
    <link rel="stylesheet" href="style/responsivo.css" />
    <link rel="stylesheet" href="style/register.css" />
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
        <a class="user" href="login.html"><i class="fa-solid fa-user"></i></a>
        <!-- LOGO -->
        <a class="logo" href="index.html"
          ><img src="fotos/img/logo.png" alt=""
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
                   <?php 
            // if(isset($_SESSION['msg']))
            // echo $_SESSION['msg'];
            // unset($_SESSION['msg']);
            ?> 
            <h1>Registre-se</h1>
<<<<<<< Updated upstream
            <?php 
            if(isset($_SESSION['msg']))
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
            ?>
            <form  method="post"  action="cadastro.php">
              <p>
                Nome<span style="color: red; font-size: 10px; margin: 3px"
                  >*</span
                >
              </p>
              <input type="text" name="nome" id="" required />
                        </div>
                        <div class="login">
              <p>
                E-mail<span style="color: red; font-size: 10px; margin: 3px"
                  >*</span
                >
              </p>
              <input type="email" name="email" id="" required />
            </form>
          </div>
          <div class="senha">
            <p>
              Senha<span style="color: red; font-size: 10px; margin: 3px"
                >*</span
              >
            </p>
            <input type="password" name="senha_usuario" id="" required />
          </div>
          <button type = "submit" class="button-login">REGISTRAR</button>
=======
            <form method="post" action="php/cadastro.php">
            <div class="login">
              <p>Nome<span style="color: red; font-size: 10px; margin: 3px">*</span></p>
              <input type="text" name="nome" required />
            </div>
            <div class="login">
              <p>E-mail<span style="color: red; font-size: 10px; margin: 3px">*</span></p>
              <input type="email" name="email" required />
            </div>
            <div class="senha">
              <p>Senha<span style="color: red; font-size: 10px; margin: 3px">*</span></p>
              <input type="password" name="senha" required />
            </div>
            <button type="submit" class="button-login">REGISTRAR</button>
          </form>
>>>>>>> Stashed changes
          <div class="perdeu-senha">
            <a class="kkk" href="login.php">Já possui uma conta?</a>
          </div>
        </div>
      </div>
    </div>
  </body>
    <!-- SCRIPTS -->
    <script src="js/carrossel.js"></script>
    <script src="js/cart.js"></script>
</html>