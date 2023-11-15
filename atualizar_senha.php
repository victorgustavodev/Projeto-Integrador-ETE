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
                            $_SESSION['msg'] = "<p style='font-size: 25px; color: green;'>Senha atualizada com sucesso!</p>";
                            header("Location: index.php");
                          }
                          else{
                            echo "<p style='font-size: 25px; color: #ff0001'>Tente novamente!</p>";
                          }

                        }
                    }else{
                        $_SESSION['msg'] = "<p style='font-size: 25px; color: #ff0001'>Erro: Link inválido, solicite um novo link para atualizar a senha!</p>";
                        header("Location: recuperar_senha.php");
                    }
        }else{
            $_SESSION['msg'] = "<p style='font-size: 25px; color: #ff0001'>Erro: Link inválido, solicite um novo link para atualizar a senha!</p>";
                        header("Location: esqueceu.php");
        }
       
    ?>
        <form method="POST" action="">

          <!-- caso tiver erro de validação o codigo permanece -->
          <?php 
          $usuario = "";
          if(isset($dados['senha_usuario']))
            $usuario = $dados['senha_usuario'];?>

            <input type="password" name="senha_usuario" placeholder="Digite a nova senha" value="<?php echo $usuario?>">

            <a href="#"><button value="Atualizar" name="SendNovaSenha"><p>Atualizar</p></button></a>
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