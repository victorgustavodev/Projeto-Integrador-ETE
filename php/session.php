<?php
session_start();
ob_start();
include_once 'conexao.php';

if((!isset($_SESSION['id'])) AND (!isset($_SESSION['nome']))){
    $_SESSION['msg'] = "<p style='font-size: 25px; color: #ff0000;'>Erro: Necessário fazer login para acessar a página!</p>";
    header("Location: index.html");
}
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
      <!-- CORPO DO CÓDIGO -->
  <main>
    <!-- CARROSEL -->
      <div class="carrossel-container">
        <div class="carrossel-slide" id="slide1">
            <img src="fotos/carrosel/image1.jpg" alt="Image 1">
        </div>
        <div class="carrossel-slide" id="slide2">
            <img src="fotos/carrosel/image2.jpg" alt="Image 2">
        </div>
        <div class="carrossel-slide" id="slide3">
            <img src="fotos/carrosel/image3.jpg" alt="Image 3">
        </div>
        <div class="carrossel-slide" id="slide4">
          <img src="fotos/carrosel/image4.jpg" alt="Image 4">
        </div>
        <div class="carrossel-slide" id="slide5">
          <img src="fotos/carrosel/image5.jpg" alt="Image 5">
        </div>
    </div>

    <h1 id="Catalogo" style="text-align: center; margin: 5vw;">CATÁLOGO DE PRODUTOS</h1>
   <section id="produtos">
      <section class="produto">
        <img src="fotos/img/produto1.jpeg" alt="produto1"><br>
        <button class="btn-comprar">Adicionar ao carrinho<i class="fa-sharp fa-regular fa-cart-shopping" style="color: #000000;"></i></button>
      </section>
      <section class="produto">
        <img src="fotos/img/produto2.jpeg" alt="produto1"><br>
        <button class="btn-comprar">Adicionar ao carrinho</button>
      </section>
      <section class="produto">
        <img src="fotos/img/produto3.jpeg" alt="produto1"><br>
        
        <button class="btn-comprar">Adicionar ao carrinho</button>
      </section>
      <section class="produto">
        <img src="fotos/img/produto4.jpeg" alt="produto1"><br>
        <button class="btn-comprar">Adicionar ao carrinho</button>
      </section>
      <section class="produto">
        <img src="fotos/img/produto5.jpeg" alt="produto1"><br>
        <button class="btn-comprar">Adicionar ao carrinho</button>
      </section>
      <section class="produto">
        <img src="fotos/img/produto6.jpeg" alt="produto1"><br>
        <button class="btn-comprar">Adicionar ao carrinho</button>
      </section>
    </section>

  </main>


<!-- <main>
  <div class="bloco2">
      <div class="conteiner2">
          <div class="cartaz">
              <img src="fotos/img/produto1.jpeg" alt="Brotos">
              <h2>R$6,00</h2>
                  <button class="btn-comprar" role="button">COMPRAR</button>
          </div>
          <div class="cartaz">
              <img src="fotos/img/rosa branca.jpeg" alt="Rosa Branca">
              <h2>Preço: a partir de R$70</h3>
          </div>
          <div class="cartaz"><img src="fotos/img/rosa branca media.jpeg" alt="Rosa Branca (Enxerto)">
              <h2>Preço: a partir de R$70</h3>
          </div>
          <div class="cartaz">
              <img src="fotos/img/rosa única.jpeg" alt="Rosa Única">
              <h2>Preço: a partir de R$60</h3>
          </div>
          <div class="cartaz">
              <img src="fotos/img/rosa de duas.jpeg" alt="Rosa de Duas">
              <h2>Preço: a partir de R$60</h3>
          </div>
          <div class="cartaz">
              <img src="fotos/img/rosa cheia.jpeg" alt="Rosa Cheia">
              <h2>Preço: a partir de R$70</h3>
          </div>
      </div>
      <a href="tel:++55081998636465" class="reserva"><button>Clique para ligar</button></a> -->
  </div>
</main>

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