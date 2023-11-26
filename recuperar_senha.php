<?php
// session_start();
ob_start();
include_once 'php/conexao.php';
$dados = filter_input_array(INPUT_POST,FILTER_DEFAULT);
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
require 'vendor/autoload.php';
$mail = new PHPMailer(true);
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
    <link rel="stylesheet" href="style/tema.css">

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
        <a class="logo" href="index.html"
          ><img src="fotos/img/logo.png" alt=""
        /></a>
        <!-- TEMA -->
        <label for="theme-toggle" class="theme">
          <span class="theme__toggle-wrap">
            <input id="theme-toggle" class="theme__toggle" type="checkbox" role="switch" name="theme" value="dark">
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

          $row_email = $result_email->fetch(PDO::FETCH_ASSOC);
          $chave_recuperar_senha = password_hash ($row_email['id'], PASSWORD_DEFAULT);

          // echo "Chave $chave_recuperar_senha <br>";

          $query_up_email = "UPDATE usuarios 
                              SET recuperar_senha =:recuperar_senha 
                              where id =:id 
                              LIMIT 1";

          $result_up_email = $conn->prepare($query_up_email);
          $result_up_email->bindParam(':recuperar_senha', $chave_recuperar_senha, PDO::PARAM_STR);
          $result_up_email->bindParam(':id', $row_email['id'], PDO::PARAM_INT);


            if($result_up_email->execute()){
              $link = "http://localhost/Floricultura/php/atualizar_senha.php?chave=" . $chave_recuperar_senha;
              try {
                  // $mail->SMTPDebug = SMTP::DEBUG_SERVER;
                  $mail->CharSet = 'UTF-8';                     
                  $mail->isSMTP();                                            
                  $mail->Host       = 'smtp.gmail.com';                    
                  $mail->SMTPAuth   = true;                                   
                  $mail->Username   = 'floriculturateresinha@gmail.com';  
                  //alterar senha de acesso ao e-mail do seu dispositivo                 
                  $mail->Password   = 'vpma ofco egob yeqn';                               
                  $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;;            
                  $mail->Port = 587;

                  $mail->setFrom('floriculturateresinha@gmail.com', 'Atendimento');
                  $mail->addAddress($row_email['email'], $row_email['nome']);

                  $mail->isHTML(true);                                  
                  $mail->Subject = 'Recuperar senha';
                  $mail->Body    = 'Prezado, ' . $row_email['nome'] . ".<br><br> Você solicitou alteração da senha. <br> Para continuar o processo de recuperação de sua senha, clique no link abaixo: <br><br> <a href='" . $link . "'>Clique aqui</a> <br><br> Se você não solicitou essa alteração, nenhuma ação é necessária. Sua senha permanecerá a mesma até que você ative este código. <br><br>";
                  $mail->AltBody = 'Prezado ' . $row_email['nome'] . " \n\n Você solicitou alteração da senha. \nPara continuar o processo de recuperação de sua senha, clique no link abaixo: \n\n " . $link . " \n\n Se você não solicitou essa alteração, nenhuma ação é necessária. Sua senha permanecerá a mesma até que você ative este código. \n\n" ;
   
                  $mail->send();

                  $_SESSION['msg'] = "<p style='font-size: 15px; color: green;'>Enviado e-mail com instruções para recuperar a senha. Acesse a sua caixa de e-mail para recuperar a senha!</p>";
                  header("Location: login.php");
                }
              catch (Exception $e) {
                echo "Erro: E-mail não enviado com sucesso. Mailer Error: {$mail->ErrorInfo}";
              }
            }
            else{
              echo "<p style='font-size: 25px; color: #ff0001'>Tente novamente!</p>";
            }
          
          }
          else{
            echo "<p style='font-size: 25px; color: #ff0001'>Erro: E-mail não cadastrado!</p>";
          }
      }

    if(isset($_SESSION['msg_recup'])){
        echo $_SESSION['msg_recup'];
        unset($_SESSION['msg_recup']);
      }
    
    ?>

    <form  method="post"  action="">
        <?php 
        $usuario="";
        if(isset($dados['usuario']))
        $usuario = $dados['usuario'];
        ?>
            <p>
             Insira o Email da conta<span style="color: red; font-size: 10px; margin: 3px"
                >*</span
              >
            </p>
        <input type="email" name="email" id="" required value="<?php echo $usuario; ?>">
        </div>

        <p style="color: rgb(255, 0, 0);">Você receberá um link em seu email para realizar a atualização da senha!</p>

        <button value="Recuperar" name="SendRecupSenha" class="button-login">ENVIAR</button>
        <a class="kkk" href="php/registro.php">Não possui conta?</a>
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