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
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins&display=swap"
      rel="stylesheet"
    />

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
        <!-- LOGO -->
        <a class="logo" href="index.html"
          ><img src="fotos/img/logo.png" alt=""
        /></a>
        <div id="login-icon"><i class="fa-solid fa-user"></i></a>
          <p>Faça seu <a href="login.php" style="color:#f37f75 ; font-weight: bold; text-decoration: none;">LOGIN</a> ou <a href="registro.php "style=" color:#f37f75 ; font-weight: bold; text-decoration: none;">CADASTRE-SE</a></p></div>
      </nav>
    </header>

    <div class="wrapper">
      <div class="container">
        <div class="box-login">
          <div class="login">
            <h1>Registre-se</h1>
    <?php 
    if(isset($_SESSION['msg']))
    echo $_SESSION['msg'];
    unset($_SESSION['msg']);
    ?>

    <form method="post" action="cadastro.php">
        <p>
                  Nome<span style="color: red; font-size: 10px; margin: 3px"
                    >*</span
                  >
                </p>
                <input type="text" id="" name="nome"  required />
              </div>
              <div class="login">
                <p>
                  E-mail<span style="color: red; font-size: 10px; margin: 3px"
                    >*</span
                  >
                </p>
                <input type="email" id="" name="email" required />
              </div>
              <div class="senha">
                <p>
                  Senha<span style="color: red; font-size: 10px; margin: 3px"
                    >*</span
                  >
                </p>
                <input type="password" name="senha_usuario" required />
              </div>
              <button type="submit" class="button-login">REGISTRAR</button>
    </form>

    <div class="perdeu-senha">
            <a class="kkk" href="login.php">Já possui uma conta?</a>
          </div>
        </div>
      </div>
    </div>
        <!-- WHATSAPP FLUTUANTE -->
        <div class="whats">
          <a
            href="https://wa.me/5581998636465?text= Olá, Dona Terezinha! Tudo bem?"
            target="_blank"
            style="background: transparent"
            ><i
              class="fa-brands fa-whatsapp"
              style="
                color: #ffffff;
                background-color: transparent;
                width: 50px;
                font-size: 30px;
              "
            ></i>
          </a>
        </div>
  </body>
    <!-- SCRIPTS -->
    <script src="js/carrossel.js"></script>
    <script src="js/cart.js"></script>
  <script src="js/tema.js"></script>

</html>
