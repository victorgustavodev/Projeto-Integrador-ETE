<?php
session_start();
ob_start();
include_once 'conexao.php';
$dados = filter_input_array(INPUT_POST,FILTER_DEFAULT);
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
require 'lib/vendor/autoload.php';
$mail = new PHPMailer(true);
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
  <link rel="stylesheet" href="https://fontawesome.com/icons/cart-shopping?f=sharp&s=regular&pc=%23000000" integrity="sha384-GLhlTQ8iK+1iS1+IjRwoTXcE5aZRIUdS/8r+T5uViIcZKh" crossorigin="anonymous">


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
            <!-- LINKS  -->
            <ul class="nav-list">
                <li><a href="#Catalogo">Catálogo</a></li>
                <li><a href="#">Sobre nós</a></li>
                <li><a href="#Contato">Contato</a></li>
                <li><a href="sair.php">Sair</a></li>
            </ul>
        </nav>
      </header>
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
              // echo "http://localhost/Floricultura/atualizar_senha.php?chave=" . $chave_recuperar_senha;
              try {
                 //Server settings
                  $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      
                  $mail->isSMTP();                                            
                  $mail->Host       = 'smtp.gmail.com';                    
                  $mail->SMTPAuth   = true;                                   
                  $mail->Username   = 'floriculturateresinha@gmail.com';                   
                  $mail->Password   = '';                               
                  $mail->SMTPSecure = 'tls';            
                  $mail->Port = 587;

                  //Configurações do e-mail
                  $mail->setFrom('floriculturateresinha@gmail.com', 'Floricultura Teresinha');
                  $mail->addAddress($row_email['email'], $row_email['nome']);
                  $mail->isHTML(true);
  
                  // Corpo do e-mail
                  $mail->Subject = 'Recuperação de Senha - Floricultura Teresinha';
                  $mail->Body    = "Clique no link para recuperar sua senha: http://localhost/Floricultura/atualizar_senha.php?chave={$chave_recuperar_senha}";
  
                  $mail->send();
                }
              catch (Exception $e) {
                echo "Erro: E-mail não enviado com sucesso. Mailer Error: {$mail->ErrorInfo}";
              }
            }
            else{
              $_SESSION['msg'] = "<p style='font-size: 25px; color: #ff0001'>Tente novamente!</p>";
            }
          
          }
          else{
              $_SESSION['msg'] = "<p style='font-size: 25px; color: #ff0001'>Erro: E-mail não cadastrado!</p>";
          }
      }

    if(isset($_SESSION['msg'])){
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
      }
    
    ?>

    <form  method="post"  action="">
        <?php 
        $usuario="";
        if(isset($dados['usuario']))
        $usuario = $dados['usuario'];
        ?>

        <input type="email" name="email" placeholder="EMAIL" value="<?php echo $usuario; ?>">

        <a href=""><button value="Recuperar" name="SendRecupSenha"><p>ENVIAR</p></button></a>
        <p class="op">Lembrou a senha? <a href="index.php">Clique aqui para logar</a></p>  
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

<!-- WHATSAPP FLUTUANTE -->
<div class="whats">
       <a href="https://wa.me/5581998636465?text= Olá, Dona Terezinha! Tudo bem?" target="_blank"> 
 <img id = "logo-wpp-flutuante" src="fotos/wpp-ico.png" alt="Fale Conosco pelo Whatsapp" title="Fale Conosco pelo Whatsapp">
      </a>
</div> 


<!-- DECLARAÇÃO DE SCRIPTS -->
<script src="js/carrossel.js"></script>
<script src="js/mobile-navbar.js"></script>
<script src="js/tema.js"></script>

</body>

</html>