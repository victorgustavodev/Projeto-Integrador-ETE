<?php
session_start();
ob_start();
include_once 'conexao.php';
$dados = filter_input_array(INPUT_POST,FILTER_DEFAULT);
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
    <link rel="stylesheet" href="../style/atualizar_senha.css" />
    <link rel="stylesheet" href="../style/tema.css" />

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
        <a class="user" href="../login.php"><i class="fa-solid fa-user"></i></a>
        <!-- LOGO -->
        <a class="logo" href="../index.html"
          ><img src="../fotos/img/logo.png" alt=""
        /></a>
        <!-- TEMA -->
        <label for="theme-toggle" class="theme">
          <span class="theme__toggle-wrap">
            <input
              id="theme-toggle"
              class="theme__toggle"
              type="checkbox"
              role="switch"
              name="theme"
              value="dark"
            />
            <span class="theme__fill"></span>
            <span class="theme__icon">
              <span class="theme__icon-part"></span>
              <span class="theme__icon-part"></span>
              <span class="theme__icon-part"></span>
              <span class="theme__icon-part"></span>
              <span class="theme__icon-part"></span>
              <span class="theme__icon-part"></span>
              <span class="theme__icon-part"></span>
              <span class="theme__icon-part"></span>
              <span class="theme__icon-part"></span>
            </span>
          </span>
        </label>
      </nav>
    </header>
    <div class="wrapper">
      <div class="container">
        <div class="box-login">
          <div class="login">
            <h1>esqueceu a senha?</h1>
          </div>
          <div class="login">
    <?php
        $chave = filter_input(INPUT_GET, 'chave', FILTER_DEFAULT);
        if(!empty($chave)){
            //var_dump($chave);

            $query_email = "SELECT id 
                    FROM usuarios 
                    WHERE recuperar_senha =:recuperar_senha  
                    LIMIT 1";
                    // consulta no banco de dados a query
                    $result_email  = $conn->prepare($query_email);
                    //usado para vincular um valor a consulta preparada, o param str diz que o valor recebido vai ser uma string
                    $result_email-> bindParam(':recuperar_senha', $chave, PDO::PARAM_STR);
                    $result_email-> execute();
    
    
                    if(($result_email) AND ($result_email->rowCount() != 0)){
                        $row_email = $result_email -> fetch(PDO::FETCH_ASSOC);
                        $dados= filter_input_array(INPUT_POST, FILTER_DEFAULT);
                        //var_dump($dados);
                        if(!empty($dados['SendNovaSenha'])){
                          $senha_usuario = password_hash ($dados['senha_usuario'], PASSWORD_DEFAULT);
                          $recuperar_senha = 'NULL'; 

                          $query_up_email = "UPDATE usuarios 
                              SET senha_usuario =:senha_usuario, recuperar_senha =:recuperar_senha
                              where id =:id 
                              LIMIT 1";

                          $result_up_email = $conn->prepare($query_up_email);
                          $result_up_email->bindParam(':senha_usuario', $senha_usuario, PDO::PARAM_STR);
                          $result_up_email->bindParam(':recuperar_senha', $recuperar_senha);
                          $result_up_email->bindParam(':id', $row_email['id'], PDO::PARAM_INT);

                          if($result_up_email->execute()){
                            $_SESSION['msg'] = "<p style='font-size: 15px; color: green;'>Senha atualizada com sucesso!</p>";
                            header("Location: ../login.php");
                          }
                          else{
                            echo "<p style='font-size: 15px; color: #ff0001'>Tente novamente!</p>";
                          }

                        }
                    }else{
                        $_SESSION['v'] = "<p style='font-size: 15px; color: #ff0001'>Erro: Link inválido, solicite um novo link para atualizar a senha!</p>";
                        header("Location: ../recuperar_senha.php");
                    }
        }else{
            $_SESSION['msg_recup'] = "<p style='font-size: 15px; color: #ff0001'>Erro: Link inválido, solicite um novo link para atualizar a senha!</p>";
                        header("Location: ../recuperar_senha.php");
        }
       
    ?>
        <form method="POST" action="">

          <!-- caso tiver erro de validação o codigo permanece -->
          <?php 
          $usuario = "";
          if(isset($dados['senha_usuario']))
            $usuario = $dados['senha_usuario'];?>
            <p>
              Insira sua nova senha<span
                style="color: red; font-size: 10px; margin: 3px"
                >*</span
              >
            </p>
            <input type="password" name="senha_usuario" id="" required value="<?php echo $usuario?>" />
          </div>

            <button value="Atualizar" name="SendNovaSenha" class="button-login">ATUALIZAR</button>
            <div class="perdeu-senha">
            <a class="kkk" href="../login.php">Lembrou a senha?</a>
          </div>
        </div>
        </form>
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
