<?php
// session_start();
ob_start();
include_once 'conexao.php';

if((!isset($_SESSION['id'])) AND (!isset($_SESSION['nome']))){
    $_SESSION['msg'] = "<p style='font-size: 15px; color: #ff0000;'>Erro: Necessário fazer login para acessar a página!</p>";
    header("Location: login.php");
}
?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="fotos/Rose.ico" type="image/x-icon" />
    <link rel="stylesheet" href="style/main.css" id="theme-stylesheet" />
    <link rel="stylesheet" href="style/header.css" id="theme-stylesheet" />
    <link rel="stylesheet" href="style/footer.css" id="theme-stylesheet" />
    <link rel="stylesheet" href="style/responsivo.css" />
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
        <a class="user" href="php/login.php"><i class="fa-solid fa-user"></i></a>
        <!-- LOGO -->
        <a class="logo" href="index.html"
          ><img src="fotos/img/logo.png" alt=""
        /></a>
        <!-- CARRINHO -->
        <div class="shopping" id="shopping-icon">
          <i class="fa-solid fa-bag-shopping"></i>
          <span class="quantity">0</span>
        </div>
      </nav>
    </header>

    <!-- Carrinho de Compras -->
    <div class="container-cart" id="">
      <div class="card">
        <h1></h1>
      </div>
    </div>

    <!-- CARROSEL -->
    <div class="carrossel-container">
      <button id="prevButton">
        <i
          class="fa-solid fa-chevron-up fa-rotate-270"
          style="color: #000000"
        ></i>
      </button>
      <div class="carrossel-slide" id="slide1">
        <img src="fotos/carrosel/01.jpg" alt="Image 1" />
      </div>
      <div class="carrossel-slide" id="slide2">
        <img src="fotos/carrosel/02.jpg" alt="Image 2" />
      </div>
      <div class="carrossel-slide" id="slide3">
        <img src="fotos/carrosel/03.png" alt="Image 3" />
      </div>
      <button id="nextButton">
        <i
          class="fa-solid fa-chevron-up fa-rotate-90"
          style="color: #000000"
        ></i>
      </button>
    </div>

    <!-- TITULO DOS PRODUTOS -->

    <h1 style="font-size: 20px; text-align: center; margin: 5vw">
      PRODUTOS EM DESTAQUE
    </h1>

    <!-- CATALOGO -->
    <div class="box-flex">
      <div class="container">
        <div class="listagem-produtos">
          <div class="box-produto">
            <form action="/add-carrinho/" method="post">
              <div>
                <input type="hidden" name="tipo" value="add" />
                <input type="hidden" name="id_produto" value="1373256" />
                <figure>
                  <img
                    alt="Buquê de Gérberas"
                    loading="lazy"
                    src="https://cdn.meucatalogodigital.com/belaflor/2347638-3.jpeg"
                  />
                </figure>
                <h3>Buquê de Gérberas</h3>
              </div>
              <div>
                <span class="obs"
                  >Um lindo Buque pronto para transmitir os mais lindos
                  sentimentos(...)</span
                >
              </div>
              <div>
                <div class="valor">
                  <!---<span>por apenas</span>--->
                  R$ 350,00
                </div>
                <a title="Comprar" class="btn btn-color" onclick="addCard()"
                  >Comprar</a
                >
              </div>
            </form>
          </div>
          <div class="box-produto">
            <form action="/add-carrinho/" method="post">
              <div>
                <input type="hidden" name="tipo" value="add" />
                <input type="hidden" name="id_produto" value="1340690" />
                <figure>
                  <img
                    alt="Mix do Florista"
                    loading="lazy"
                    src="https://cdn.meucatalogodigital.com/belaflor/2286482-3.jpeg"
                  />
                </figure>
                <h3>Mix do Florista</h3>
              </div>
              <div>
                <span class="obs"
                  >Esse buque é muito especial, pois deixamos a criação
                  dele(...)</span
                >
              </div>
              <div>
                <div class="valor">
                  <!---<span>por apenas</span>--->

                  R$ 130,00
                </div>
                <a
                  title="Comprar"
                  class="btn btn-color"
                  >Comprar</a
                >
              </div>
            </form>
          </div>
          <div class="box-produto">
            <form action="/add-carrinho/" method="post">
              <div>
                <input type="hidden" name="tipo" value="add" />
                <input type="hidden" name="id_produto" value="1331374" />
                <figure>
                  <img
                    alt="Sac à Fleurs com Mix de Flores"
                    loading="lazy"
                    src="https://cdn.meucatalogodigital.com/belaflor/2270459-3.jpg"
                  />
                </figure>
                <h3>Sac à Fleurs com Mix de Flores</h3>
              </div>
              <div>
                <span class="obs"
                  >Uma delicada bolsa com Mix de Flores pronta para
                  surpreender(...)</span
                >
              </div>
              <div>
                <div class="valor">
                  <!---<span>por apenas</span>--->

                  R$ 170,00
                </div>
                <a
                  title="Comprar"
                  class="btn btn-color"
                  >Comprar</a
                >
              </div>
            </form>
          </div>

          <div class="box-produto">
            <form action="/add-carrinho/" method="post">
              <div>
                <input type="hidden" name="tipo" value="add" />
                <input type="hidden" name="id_produto" value="1211545" />
                <figure>
                  <img
                    alt="Magnificent Love"
                    loading="lazy"
                    src="https://cdn.meucatalogodigital.com/belaflor/2056497-3.jpg"
                  />
                </figure>
                <h3>Magnificent Love</h3>
              </div>
              <div>
                <span class="obs"
                  >Agrupado de 12 Rosas, transformando em um lindo Coração!
                  Podendo(...)</span
                >
              </div>
              <div>
                <div class="valor">
                  <span>a partir de</span>
                  R$ 280,00
                </div>
                <a
                  title="Comprar"
                  class="btn btn-color"
                  >Comprar</a
                >
              </div>
            </form>
          </div>
          <div class="box-produto">
            <form action="/add-carrinho/" method="post">
              <div>
                <input type="hidden" name="tipo" value="add" />
                <input type="hidden" name="id_produto" value="1211396" />

                <figure>
                  <img
                    alt="Saved Love"
                    loading="lazy"
                    src="https://cdn.meucatalogodigital.com/belaflor/2056236-3.jpg"
                  />
                </figure>
                <h3>Saved Love</h3>
              </div>
              <div>
                <span class="obs"
                  >Uma linda Caixa contendo de 14 a 20 Rosas. Perfeita para
                  demonstrar(...)</span
                >
              </div>
              <div>
                <div class="valor">
                  <span>a partir de</span>
                  R$ 320,00
                </div>
                <a
                  title="Comprar"
                  class="btn btn-color"
                  >Comprar</a
                >
              </div>
            </form>
          </div>
          <div class="box-produto">
            <form action="/add-carrinho/" method="post">
              <div>
                <input type="hidden" name="tipo" value="add" />
                <input type="hidden" name="id_produto" value="1211391" />
                <figure>
                  <img
                    alt="Carta de Amor + Ferrero Rocher"
                    loading="lazy"
                    src="https://cdn.meucatalogodigital.com/belaflor/2056228-3.jpg"
                  />
                </figure>
                <h3>Carta de Amor + Ferrero Rocher</h3>
              </div>
              <div>
                <span class="obs"
                  >Uma linda Carta de Amor composta com Flores Nobres
                  Selecionadas,(...)</span
                >
              </div>
              <div>
                <div class="valor">
                  <span>a partir de</span>
                  R$ 280,00
                </div>
                <a
                  title="Comprar"
                  class="btn btn-color"
                  >Comprar</a
                >
              </div>
            </form>
          </div>
          <div class="box-produto">
            <form action="/add-carrinho/" method="post">
              <div>
                <input type="hidden" name="tipo" value="add" />
                <input type="hidden" name="id_produto" value="1194408" />
                <figure>
                  <img
                    alt="Orquídea Phalaenopse Branca 02 hastes"
                    loading="lazy"
                    src="https://cdn.meucatalogodigital.com/belaflor/2025783-3.jpeg"
                  />
                </figure>

                <h3>Orquídea Phalaenopse Branca 02 hastes</h3>
              </div>
              <div>
                <span class="obs"
                  >Casa florida é sinônimo de alegria. E nada melhor do
                  que(...)</span
                >
              </div>
              <div>
                <div class="valor">
                  <!---<span>por apenas</span>--->

                  R$ 190,00
                </div>
                <a
                  title="Comprar"
                  class="btn btn-color"
                  >Comprar</a
                >
              </div>
            </form>
          </div>
          <div class="box-produto">
            <form action="/add-carrinho/" method="post">
              <div>
                <input type="hidden" name="tipo" value="add" />
                <input type="hidden" name="id_produto" value="1194405" />
                <figure>
                  <img
                    alt="Orquídea Frozen embalagem especial."
                    loading="lazy"
                    src="https://cdn.meucatalogodigital.com/belaflor/2025778-3.jpeg"
                  />
                </figure>

                <h3>Orquídea Frozen embalagem especial.</h3>
              </div>
              <div>
                <span class="obs"
                  >Como não se encantar pela linda Orquídea Frozen?
                  Com(...)</span
                >
              </div>
              <div>
                <div class="valor">
                  <!---<span>por apenas</span>--->

                  R$ 320,00
                </div>
                <a
                  title="Comprar"
                  class="btn btn-color"
                  >Comprar</a
                >
              </div>
            </form>
          </div>
          <div class="box-produto">
            <form action="/add-carrinho/" method="post">
              <div>
                <input type="hidden" name="tipo" value="add" />
                <input type="hidden" name="id_produto" value="1194403" />
                <figure>
                  <img
                    alt="Orquídea Cascata Lilás em cachepô Madeira"
                    loading="lazy"
                    src="https://cdn.meucatalogodigital.com/belaflor/2025777-3.jpeg"
                  />
                </figure>

                <h3>Orquídea Cascata Lilás em cachepô Madeira</h3>
              </div>
              <div>
                <span class="obs"
                  >Orquídea Cascata Roxa<br />

                  Orquídea Cascata Roxa Phalaenopsis,(...)</span
                >
              </div>
              <div>
                <div class="valor">
                  <!---<span>por apenas</span>--->

                  R$ 280,00
                </div>
                <a
                  title="Comprar"
                  class="btn btn-color"
                  >Comprar</a
                >
              </div>
            </form>
          </div>
          <div class="box-produto">
            <form action="/add-carrinho/" method="post">
              <div>
                <input type="hidden" name="tipo" value="add" />
                <input type="hidden" name="id_produto" value="1194402" />
                <figure>
                  <img
                    alt="Orquídea Cascata branca em cachepô Madeira com margarida"
                    loading="lazy"
                    src="https://cdn.meucatalogodigital.com/belaflor/2025776-3.jpeg"
                  />
                </figure>

                <h3>
                  Orquídea Cascata branca em cachepô Madeira com margarida
                </h3>
              </div>
              <div>
                <span class="obs"></span>
              </div>
              <div>
                <div class="valor">
                  <!---<span>por apenas</span>--->

                  R$ 310,00
                </div>
                <a
                  title="Comprar"
                  class="btn btn-color"
                  >Comprar</a
                >
              </div>
            </form>
          </div>
          <div class="print-separador"></div>
          <div class="box-produto">
            <form action="/add-carrinho/" method="post">
              <div>
                <input type="hidden" name="tipo" value="add" />
                <input type="hidden" name="id_produto" value="1024171" />
                <figure>
                  <img
                    alt="Quiet Love"
                    loading="lazy"
                    src="https://cdn.meucatalogodigital.com/belaflor/1732582-3.jpeg"
                  />
                </figure>
                <h3>Quiet Love</h3>
              </div>
              <div>
                <span class="obs"
                  >O copo-de-leite representa a pureza e a inocência,
                  associando-se(...)</span
                >
              </div>
              <div>
                <div class="valor">
                  <span>a partir de</span>
                  R$ 320,00
                </div>
                <a
                  title="Comprar"
                  class="btn btn-color"
                  >Comprar</a
                >
              </div>
            </form>
          </div>

          <div class="box-produto">
            <form action="/add-carrinho/" method="post">
              <div>
                <input type="hidden" name="tipo" value="add" />
                <input type="hidden" name="id_produto" value="964494" />
                <figure>
                  <img
                    alt="Petit Charme"
                    loading="lazy"
                    src="https://cdn.meucatalogodigital.com/belaflor/1624606-3.jpeg"
                  />
                </figure>
                <h3>Petit Charme</h3>
              </div>
              <div>
                <span class="obs"
                  >Um Lindo Deitadinho de Mix de Flores. Uma lembrança
                  Perfeita(...)</span
                >
              </div>
              <div>
                <div class="valor">
                  <span>a partir de</span>
                  R$ 80,00
                </div>
                <a
                  title="Comprar"
                  class="btn btn-color"
                  >Comprar</a
                >
              </div>
            </form>
          </div>
          <div class="box-produto">
            <form action="/add-carrinho/" method="post">
              <div>
                <input type="hidden" name="tipo" value="add" />
                <input type="hidden" name="id_produto" value="933116" />
                <figure>
                  <img
                    alt="Mix do Florista"
                    loading="lazy"
                    src="https://cdn.meucatalogodigital.com/belaflor/1567565-3.jpeg"
                  />
                </figure>

                <h3>Mix do Florista</h3>
              </div>
              <div>
                <span class="obs"
                  >Esse buque é muito especial, pois deixamos a criação
                  dele(...)</span
                >
              </div>
              <div>
                <div class="valor">
                  <span>a partir de</span>
                  R$ 340,00
                </div>
                <a
                  title="Comprar"
                  class="btn btn-color"
                  >Comprar</a
                >
              </div>
            </form>
          </div>
          <div class="box-produto">
            <form action="/add-carrinho/" method="post">
              <div>
                <input type="hidden" name="tipo" value="add" />
                <input type="hidden" name="id_produto" value="931825" />
                <figure>
                  <img
                    alt="Carta de Amor + Bobbles Personalizada"
                    loading="lazy"
                    src="https://cdn.meucatalogodigital.com/belaflor/1565175-3.jpeg"
                  />
                </figure>

                <h3>Carta de Amor + Bobbles Personalizada</h3>
              </div>
              <div>
                <span class="obs"
                  >Essa é uma ótima sugestão para você que quer
                  complementar(...)</span
                >
              </div>
              <div>
                <div class="valor">
                  <span>a partir de</span>
                  R$ 290,00
                </div>
                <a
                  title="Comprar"
                  class="btn btn-color"
                  >Comprar</a
                >
              </div>
            </form>
          </div>
          <div class="box-produto">
            <form action="/add-carrinho/" method="post">
              <div>
                <input type="hidden" name="tipo" value="add" />
                <input type="hidden" name="id_produto" value="914834" />
                <figure>
                  <img
                    alt="Cesta Happy Birthday"
                    loading="lazy"
                    src="https://cdn.meucatalogodigital.com/belaflor/1535837-3.jpeg"
                  />
                </figure>

                <h3>Cesta Happy Birthday</h3>
              </div>
              <div>
                <span class="obs">
                  <br />

                  Um belíssimo Baú contendo Pães (sal e Doce), Pão(...)</span
                >
              </div>
              <div>
                <div class="valor">
                  <span>a partir de</span>
                  R$ 680,00
                </div>
                <a
                  title="Comprar"
                  class="btn btn-color"
                  >Comprar</a
                >
              </div>
            </form>
          </div>
          <div class="box-produto">
            <form action="/add-carrinho/" method="post">
              <div>
                <input type="hidden" name="tipo" value="add" />
                <input type="hidden" name="id_produto" value="834849" />
                <figure>
                  <img
                    alt="Doce Monamour"
                    loading="lazy"
                    src="https://cdn.meucatalogodigital.com/belaflor/1399502-3.jpg"
                  />
                </figure>
                <h3>Doce Monamour</h3>
              </div>
              <div>
                <span class="obs">
                  Agrupado com 12 rosas vermelhas e ruscus com laço e 8
                  bombons(...)</span
                >
              </div>
              <div>
                <div class="valor">
                  <span>a partir de</span>
                  R$ 250,00
                </div>
                <a
                  title="Comprar"
                  class="btn btn-color"
                  >Comprar</a
                >
              </div>
            </form>
          </div>
          <div class="box-produto">
            <form action="/add-carrinho/" method="post">
              <div>
                <input type="hidden" name="tipo" value="add" />
                <input type="hidden" name="id_produto" value="834556" />
                <figure>
                  <img
                    alt="Buque Apaixonado"
                    loading="lazy"
                    src="https://cdn.meucatalogodigital.com/belaflor/1398968-3.jpeg"
                  />
                </figure>

                <h3>Buque Apaixonado</h3>
              </div>
              <div>
                <span class="obs"
                  >Buque Apaixonado< /> Maravilhoso Buque com 100 Rosas
                  vermelhas(...)</span
                >
              </div>
              <div>
                <div class="valor">
                  <span>a partir de</span>
                  R$ 1.830,00
                </div>
                <a
                  title="Comprar"
                  class="btn btn-color"
                  >Comprar</a
                >
              </div>
            </form>
          </div>
          <div class="print-separador"></div>
          <div class="box-produto">
            <form action="/add-carrinho/" method="post">
              <div>
                <input type="hidden" name="tipo" value="add" />
                <input type="hidden" name="id_produto" value="748823" />
                <figure>
                  <img
                    alt="Carta de Amor + Ferrero Rocher"
                    loading="lazy"
                    src="https://cdn.meucatalogodigital.com/belaflor/1251658-3.jpg"
                  />
                </figure>

                <h3>Carta de Amor + Ferrero Rocher</h3>
              </div>
              <div>
                <span class="obs"
                  >Uma linda Carta de Amor composta com Flores Nobres
                  Selecionadas,(...)</span
                >
              </div>
              <div>
                <div class="valor">
                  <span>a partir de</span>
                  R$ 280,00
                </div>
                <a
                  title="Comprar"
                  class="btn btn-color"
                  >Comprar</a
                >
              </div>
            </form>
          </div>
          <div class="box-produto">
            <form action="/add-carrinho/" method="post">
              <div>
                <input type="hidden" name="tipo" value="add" />
                <input type="hidden" name="id_produto" value="732415" />
                <figure>
                  <img
                    alt="Buque Belle fleur"
                    loading="lazy"
                    src="https://cdn.meucatalogodigital.com/belaflor/1221747-3.jpg"
                  />
                </figure>

                <h3>Buque Belle fleur</h3>
              </div>
              <div>
                <span class="obs"
                  >Um Buque inspirado em Lindas Mulheres Cheio de beleza e
                  significados! Compõe-se(...)</span
                >
              </div>
              <div>
                <div class="valor">
                  <span>a partir de</span>
                  R$ 450,00
                </div>
                <a
                  title="Comprar"
                  class="btn btn-color"
                  >Comprar</a
                >
              </div>
            </form>
          </div>
          <div class="box-produto">
            <form action="/add-carrinho/" method="post">
              <div>
                <input type="hidden" name="tipo" value="add" />
                <input type="hidden" name="id_produto" value="693580" />
                <figure>
                  <img
                    alt="Buque Love It"
                    loading="lazy"
                    src="https://cdn.meucatalogodigital.com/belaflor/1152537-3.jpeg"
                  />
                </figure>
                <h3>Buque Love It</h3>
              </div>
              <div>
                <span class="obs"
                  >Aproximadamente 45 a 50 Rosas, prontas para cumprir o seu
                  papel:(...)</span
                >
              </div>
              <div>
                <div class="valor">
                  <span>a partir de</span>
                  R$ 700,00
                </div>
                <a
                  title="Comprar"
                  class="btn btn-color"
                  >Comprar</a
                >
              </div>
            </form>
          </div>
          <div class="box-produto">
            <form action="/add-carrinho/" method="post">
              <div>
                <input type="hidden" name="tipo" value="add" />
                <input type="hidden" name="id_produto" value="670206" />
                <figure>
                  <img
                    alt="Buque Amour Suprême"
                    loading="lazy"
                    src="https://cdn.meucatalogodigital.com/belaflor/1110371-3.jpeg"
                  />
                </figure>

                <h3>Buque Amour Suprême</h3>
              </div>
              <div>
                <span class="obs"
                  >Como é o Amor Supreme pra você? Nós usamos as Flores
                  para(...)</span
                >
              </div>
              <div>
                <div class="valor">
                  <span>a partir de</span>
                  R$ 290,00
                </div>
                <a
                  title="Comprar"
                  class="btn btn-color"
                  >Comprar</a
                >
              </div>
            </form>
          </div>
          <div class="box-produto">
            <form action="/add-carrinho/" method="post">
              <div>
                <input type="hidden" name="tipo" value="add" />
                <input type="hidden" name="id_produto" value="670185" />
                <figure>
                  <img
                    alt="Buque Luxo"
                    loading="lazy"
                    src="https://cdn.meucatalogodigital.com/belaflor/1110344-3.jpeg"
                  />
                </figure>
                <h3>Buque Luxo</h3>
              </div>
              <div>
                <span class="obs"
                  >Um lindo e elegante buque, composto por Astromélias,
                  Tango(...)</span
                >
              </div>
              <div>
                <div class="valor">
                  <span>a partir de</span>
                  R$ 550,00
                </div>
                <a
                  title="Comprar"
                  class="btn btn-color"
                  >Comprar</a
                >
              </div>
            </form>
          </div>
          <div class="box-produto">
            <form action="/add-carrinho/" method="post">
              <div>
                <input type="hidden" name="tipo" value="add" />
                <input type="hidden" name="id_produto" value="670167" />
                <figure>
                  <img
                    alt="Ramalhete de Girassóis"
                    loading="lazy"
                    src="https://cdn.meucatalogodigital.com/belaflor/1110314-3.jpg"
                  />
                </figure>

                <h3>Ramalhete de Girassóis</h3>
              </div>
              <div>
                <span class="obs"
                  >Volte-se para o que te faz bem! 🌻 Contagie o mundo com
                  sua(...)</span
                >
              </div>
              <div>
                <div class="valor">
                  <span>a partir de</span>
                  R$ 180,00
                </div>
                <a
                  title="Comprar"
                  class="btn btn-color"
                  >Comprar</a
                >
              </div>
            </form>
          </div>
          <div class="box-produto">
            <form action="/add-carrinho/" method="post">
              <div>
                <input type="hidden" name="tipo" value="add" />
                <input type="hidden" name="id_produto" value="640475" />
                <figure>
                  <img
                    alt="Bac Wine Chocolate"
                    loading="lazy"
                    src="https://cdn.meucatalogodigital.com/belaflor/1060107-3.jpg"
                  />
                </figure>

                <h3>Bac Wine Chocolate</h3>
              </div>
              <div>
                <span class="obs"
                  >Toda conquista merece ser celebrada! Juntamos nesse
                  presente(...)</span
                >
              </div>
              <div>
                <div class="valor">
                  <span>a partir de</span>
                  R$ 330,00
                </div>
                <a
                  title="Comprar"
                  class="btn btn-color"
                  >Comprar</a
                >
              </div>
            </form>
          </div>
          <div class="box-produto">
            <form action="/add-carrinho/" method="post">
              <div>
                <input type="hidden" name="tipo" value="add" />
                <input type="hidden" name="id_produto" value="590397" />
                <figure>
                  <img
                    alt="Coroa Fúnebre Topázio Azul"
                    loading="lazy"
                    src="https://cdn.meucatalogodigital.com/belaflor/974203-3.jpeg"
                  />
                </figure>

                <h3>Coroa Fúnebre Topázio Azul</h3>
              </div>
              <div>
                <span class="obs"
                  >Coroa Fúnebre composta por flores selecionadas :
                  Hortênsias,(...)</span
                >
              </div>
              <div>
                <div class="valor">
                  <span>a partir de</span>
                  R$ 1.600,00
                </div>
                <a
                  title="Comprar"
                  class="btn btn-color"
                  >Comprar</a
                >
              </div>
            </form>
          </div>
          <div class="print-separador"></div>
          <div class="box-produto">
            <form action="/add-carrinho/" method="post">
              <div>
                <input type="hidden" name="tipo" value="add" />
                <input type="hidden" name="id_produto" value="586577" />
                <figure>
                  <img
                    alt="Sac a Fleurs com Rosas brancas"
                    loading="lazy"
                    src="https://cdn.meucatalogodigital.com/belaflor/967353-3.jpeg"
                  />
                </figure>

                <h3>Sac a Fleurs com Rosas brancas</h3>
              </div>
              <div>
                <span class="obs"
                  >Sac à Fleurs com Rosas Brancas<br />

                  Uma delicada bolsa de(...)</span
                >
              </div>
              <div>
                <div class="valor">
                  <span>a partir de</span>
                  R$ 149,90
                </div>
                <a
                  title="Comprar"
                  class="btn btn-color"
                  >Comprar</a
                >
              </div>
            </form>
          </div>
          <div class="box-produto">
            <form action="/add-carrinho/" method="post">
              <div>
                <input type="hidden" name="tipo" value="add" />
                <input type="hidden" name="id_produto" value="544270" />
                <figure>
                  <img
                    alt="Orquídea Branca"
                    loading="lazy"
                    src="https://cdn.meucatalogodigital.com/belaflor/892667-3.jpeg"
                  />
                </figure>

                <h3>Orquídea Branca</h3>
              </div>
              <div>
                <span class="obs"
                  >Casa florida é sinônimo de alegria. E nada melhor do
                  que(...)</span
                >
              </div>
              <div>
                <div class="valor">
                  <span>a partir de</span>
                  R$ 220,00
                </div>
                <a
                  title="Comprar"
                  class="btn btn-color"
                  >Comprar</a
                >
              </div>
            </form>
          </div>
          <div class="box-produto">
            <form action="/add-carrinho/" method="post">
              <div>
                <input type="hidden" name="tipo" value="add" />
                <input type="hidden" name="id_produto" value="544251" />
                <figure>
                  <img
                    alt="Orquídea Frozen"
                    loading="lazy"
                    src="https://cdn.meucatalogodigital.com/belaflor/892624-3.jpeg"
                  />
                </figure>
                <h3>Orquídea Frozen</h3>
              </div>
              <div>
                <span class="obs"
                  >Como não se encantar pela linda Orquídea Frozen? <br />

                  Com(...)</span
                >
              </div>
              <div>
                <div class="valor">
                  <span>a partir de</span>
                  R$ 250,00
                </div>
                <a
                  title="Comprar"
                  class="btn btn-color"
                  >Comprar</a
                >
              </div>
            </form>
          </div>
          <div class="box-produto">
            <form action="/add-carrinho/" method="post">
              <div>
                <input type="hidden" name="tipo" value="add" />
                <input type="hidden" name="id_produto" value="544231" />
                <figure>
                  <img
                    alt="Orquídea Cascata Amarela"
                    loading="lazy"
                    src="https://cdn.meucatalogodigital.com/belaflor/892578-3.jpeg"
                  />
                </figure>
                <h3>Orquídea Cascata Amarela</h3>
              </div>
              <div>
                <span class="obs"
                  >Orquídea Cascata Amarela Phalaenopsis pote 12 já
                  embalada(...)</span
                >
              </div>
              <div>
                <div class="valor">
                  <span>a partir de</span>
                  R$ 230,00
                </div>
                <a
                  title="Comprar"
                  class="btn btn-color"
                  >Comprar</a
                >
              </div>
            </form>
          </div>
          <div class="box-produto">
            <form action="/add-carrinho/" method="post">
              <div>
                <input type="hidden" name="tipo" value="add" />
                <input type="hidden" name="id_produto" value="542408" />

                <figure>
                  <img
                    alt="50 Tons de Rosa"
                    loading="lazy"
                    src="https://cdn.meucatalogodigital.com/belaflor/889355-3.jpeg"
                  />
                </figure>
                <h3>50 Tons de Rosa</h3>
              </div>
              <div>
                <span class="obs"
                  >Esse é o resultado quando juntamos varias espécies de
                  flores(...)</span
                >
              </div>
              <div>
                <div class="valor">
                  <span>a partir de</span>
                  R$ 350,00
                </div>
                <a
                  title="Comprar"
                  class="btn btn-color"
                  >Comprar</a
                >
              </div>
            </form>
          </div>
          <div class="box-produto">
            <form action="/add-carrinho/" method="post">
              <div>
                <input type="hidden" name="tipo" value="add" />
                <input type="hidden" name="id_produto" value="533345" />
                <figure>
                  <img
                    alt="Buquê de noiva "
                    serena
                    loading="lazy"
                    src="https://cdn.meucatalogodigital.com/belaflor/874649-3.jpeg"
                  />
                </figure>
                <h3>Buquê de noiva "Serena"</h3>
              </div>
              <div>
                <span class="obs"
                  >E por falar em Girassóis ele está entre a preferência
                  das(...)</span
                >
              </div>
              <div>
                <div class="valor">
                  <span>a partir de</span>
                  R$ 180,00
                </div>
                <a
                  title="Comprar"
                  class="btn btn-color"
                  >Comprar</a
                >
              </div>
            </form>
          </div>
          <div class="box-produto">
            <form action="/add-carrinho/" method="post">
              <div>
                <input type="hidden" name="tipo" value="add" />
                <input type="hidden" name="id_produto" value="533301" />
                <figure>
                  <img
                    alt="Buquê de noiva "
                    pérola
                    loading="lazy"
                    src="https://cdn.meucatalogodigital.com/belaflor/874608-3.jpeg"
                  />
                </figure>
                <h3>Buquê de noiva "Pérola"</h3>
              </div>
              <div>
                <span class="obs"
                  >O nosso "Buque Pérola" é de arrancar sorrisos com(...)</span
                >
              </div>
              <div>
                <div class="valor">
                  <span>a partir de</span>
                  R$ 250,00
                </div>
                <a
                  title="Comprar"
                  class="btn btn-color"
                  >Comprar</a
                >
              </div>
            </form>
          </div>
          <div class="box-produto">
            <form action="/add-carrinho/" method="post">
              <div>
                <input type="hidden" name="tipo" value="add" />
                <input type="hidden" name="id_produto" value="532590" />
                <figure>
                  <img
                    alt="Buque Mix de Flores Desconstruído "
                    loading="lazy"
                    src="https://cdn.meucatalogodigital.com/belaflor/873275-3.jpeg"
                  />
                </figure>
                <h3>Buque Mix de Flores Desconstruído</h3>
              </div>
              <div>
                <span class="obs"
                  >Um Buque Especial, Elegante e Cheio de Vida para o grande
                  dia! Esse(...)</span
                >
              </div>
              <div>
                <div class="valor">
                  <span>a partir de</span>
                  R$ 480,00
                </div>
                <a
                  title="Comprar"
                  class="btn btn-color"
                  >Comprar</a
                >
              </div>
            </form>
          </div>
          <div class="box-produto">
            <form action="/add-carrinho/" method="post">
              <div>
                <input type="hidden" name="tipo" value="add" />
                <input type="hidden" name="id_produto" value="531619" />
                <figure>
                  <img
                    alt="Agrupado Mon Amour"
                    loading="lazy"
                    src="https://cdn.meucatalogodigital.com/belaflor/871723-3.jpeg"
                  />
                </figure>
                <h3>Agrupado Mon Amour</h3>
              </div>
              <div>
                <span class="obs">
                  <br />Agrupado com 12 rosas vermelhas e ruscus com laço.<br />(...)</span
                >
              </div>
              <div>
                <div class="valor">
                  <span>a partir de</span>
                  R$ 150,00
                </div>
                <a
                  title="Comprar"
                  class="btn btn-color"
                  >Comprar</a
                >
              </div>
            </form>
          </div>
          <div class="print-separador"></div>
          <div class="box-produto">
            <form action="/add-carrinho/" method="post">
              <div>
                <input type="hidden" name="tipo" value="add" />
                <input type="hidden" name="id_produto" value="511766" />
                <figure>
                  <img
                    alt="Agrupado "
                    primavera
                    loading="lazy"
                    src="https://cdn.meucatalogodigital.com/belaflor/838997-3.jpeg"
                  />
                </figure>
                <h3>Agrupado "Primavera"</h3>
              </div>
              <div>
                <span class="obs"
                  >Dê boas-vindas à Primavera florindo a sua casa,
                  escritório,(...)</span
                >
              </div>
              <div>
                <div class="valor">
                  <span>a partir de</span>
                  R$ 140,00
                </div>
                <a
                  title="Comprar"
                  class="btn btn-color"
                  >Comprar</a
                >
              </div>
            </form>
          </div>
          <div class="box-produto">
            <form action="/add-carrinho/" method="post">
              <div>
                <input type="hidden" name="tipo" value="add" />
                <input type="hidden" name="id_produto" value="503995" />
                <figure>
                  <img
                    alt="Combo "
                    apaixonado
                    loading="lazy"
                    src="https://cdn.meucatalogodigital.com/belaflor/825464-3.jpg"
                  />
                </figure>
                <h3>Combo "Apaixonado"</h3>
              </div>
              <div>
                <span class="obs"
                  >Um lindo "Casadinho" Esse combo é um Mix de
                  Ramalhete(...)</span
                >
              </div>
              <div>
                <div class="valor">
                  <span>a partir de</span>
                  R$ 160,00
                </div>
                <a
                  title="Comprar"
                  class="btn btn-color"
                  >Comprar</a
                >
              </div>
            </form>
          </div>
          <div class="box-produto">
            <form action="/add-carrinho/" method="post">
              <div>
                <input type="hidden" name="tipo" value="add" />
                <input type="hidden" name="id_produto" value="349240" />
                <figure>
                  <img
                    alt="Bac à Fleurs Girassóis + Bobbles Personalizada"
                    loading="lazy"
                    src="https://cdn.meucatalogodigital.com/belaflor/558950-3.jpeg"
                  />
                </figure>

                <h3>Bac à Fleurs Girassóis + Bobbles Personalizada</h3>
              </div>
              <div>
                <span class="obs">
                  Essa é nossa “Bac a Fleurs”. Uma delicada box(...)</span
                >
              </div>
              <div>
                <div class="valor">
                  <span>a partir de</span>
                  R$ 330,00
                </div>
                <a
                  title="Comprar"
                  class="btn btn-color"
                  >Comprar</a
                >
              </div>
            </form>
          </div>
          <div class="box-produto">
            <form action="/add-carrinho/" method="post">
              <div>
                <input type="hidden" name="tipo" value="add" />
                <input type="hidden" name="id_produto" value="455268" />
                <figure>
                  <img
                    alt="Cesta de Frutas com Chocolate e Pelúcia"
                    loading="lazy"
                    src="https://cdn.meucatalogodigital.com/belaflor/740914-3.png"
                  />
                </figure>

                <h3>Cesta de Frutas com Chocolate e Pelúcia</h3>
              </div>
              <div>
                <span class="obs"
                  >Deliciosa cesta para ser degustada em qualquer momento do
                  dia,(...)</span
                >
              </div>
              <div>
                <div class="valor">
                  <span>a partir de</span>
                  R$ 185,00
                </div>
                <a
                  title="Comprar"
                  class="btn btn-color"
                  >Comprar</a
                >
              </div>
            </form>
          </div>
          <div class="box-produto">
            <form action="/add-carrinho/" method="post">
              <div>
                <input type="hidden" name="tipo" value="add" />
                <input type="hidden" name="id_produto" value="404528" />
                <figure>
                  <img
                    alt="Bac à Fleurs com Rosas Lilás"
                    loading="lazy"
                    src="https://cdn.meucatalogodigital.com/belaflor/655192-3.jpeg"
                  />
                </figure>

                <h3>Bac à Fleurs com Rosas Lilás</h3>
              </div>
              <div>
                <span class="obs"
                  >Esse é nosso “Bac a Fleurs”.<br />

                  Uma delicada(...)</span
                >
              </div>
              <div>
                <div class="valor">
                  <span>a partir de</span>
                  R$ 330,00
                </div>
                <a
                  title="Comprar"
                  class="btn btn-color"
                  >Comprar</a
                >
              </div>
            </form>
          </div>
          <div class="box-produto">
            <form action="/add-carrinho/" method="post">
              <div>
                <input type="hidden" name="tipo" value="add" />
                <input type="hidden" name="id_produto" value="334988" />
                <figure>
                  <img
                    alt="Bac Tesouro - Vermelha"
                    loading="lazy"
                    src="https://cdn.meucatalogodigital.com/belaflor/533866-3.jpeg"
                  />
                </figure>

                <h3>Bac Tesouro - Vermelha</h3>
              </div>
              <div>
                <span class="obs"
                  >Esse presente é desenvolvido exclusivamente para quem
                  quer(...)</span
                >
              </div>
              <div>
                <div class="valor">
                  <!---<span>por apenas</span>--->

                  R$ 430,00
                </div>
                <a
                  title="Comprar"
                  class="btn btn-color"
                  >Comprar</a
                >
              </div>
            </form>
          </div>
          <div class="box-produto">
            <form action="/add-carrinho/" method="post">
              <div>
                <input type="hidden" name="tipo" value="add" />
                <input type="hidden" name="id_produto" value="335991" />
                <figure>
                  <img
                    alt="Mix do Florista"
                    loading="lazy"
                    src="https://cdn.meucatalogodigital.com/belaflor/535392-3.jpeg"
                  />
                </figure>

                <h3>Mix do Florista</h3>
              </div>
              <div>
                <span class="obs"
                  >Esse buque é muito especial, pois deixamos a criação
                  dele(...)</span
                >
              </div>
              <div>
                <div class="valor">
                  <!---<span>por apenas</span>--->

                  R$ 340,00
                </div>
                <a
                  title="Comprar"
                  class="btn btn-color"
                  >Comprar</a
                >
              </div>
            </form>
          </div>
          <div class="box-produto">
            <form action="/add-carrinho/" method="post">
              <div>
                <input type="hidden" name="tipo" value="add" />
                <input type="hidden" name="id_produto" value="329165" />
                <figure>
                  <img
                    alt="Cesta Love"
                    loading="lazy"
                    src="https://cdn.meucatalogodigital.com/belaflor/524623-3.jpeg"
                  />
                </figure>
                <h3>Cesta Love</h3>
              </div>
              <div>
                <span class="obs"
                  >Uma linda cesta contendo Pães, Torradas, frios, Frutas,
                  Biscoitos(...)</span
                >
              </div>
              <div>
                <div class="valor">
                  <!---<span>por apenas</span>--->

                  R$ 320,00
                </div>
                <a
                  title="Comprar"
                  class="btn btn-color"
                  >Comprar</a
                >
              </div>
            </form>
          </div>
          <div class="box-produto">
            <form action="/add-carrinho/" method="post">
              <div>
                <input type="hidden" name="tipo" value="add" />
                <input type="hidden" name="id_produto" value="332919" />
                <figure>
                  <img
                    alt="Buque Tradicional de 13 rosas Vermelhas"
                    loading="lazy"
                    src="https://cdn.meucatalogodigital.com/belaflor/530539-3.jpg"
                  />
                </figure>

                <h3>Buque Tradicional de 13 rosas Vermelhas</h3>
              </div>
              <div>
                <span class="obs"
                  >Oferecer Rosas vermelhas evidencia a sua admiração por
                  alguém. (...)</span
                >
              </div>
              <div>
                <div class="valor">
                  <span>a partir de</span>
                  R$ 250,00
                </div>
                <a
                  title="Comprar"
                  class="btn btn-color"
                  >Comprar</a
                >
              </div>
            </form>
          </div>
          <div class="print-separador"></div>
          <div class="box-produto">
            <form action="/add-carrinho/" method="post">
              <div>
                <input type="hidden" name="tipo" value="add" />
                <input type="hidden" name="id_produto" value="455270" />
                <figure>
                  <img
                    alt="Cesta Sabor do Amor"
                    loading="lazy"
                    src="https://cdn.meucatalogodigital.com/belaflor/740916-3.png"
                  />
                </figure>

                <h3>Cesta Sabor do Amor</h3>
              </div>
              <div>
                <span class="obs"
                  >Cesta Magnifica, feita com a melhor combinação
                  possível,(...)</span
                >
              </div>
              <div>
                <div class="valor">
                  <span>a partir de</span>
                  R$ 290,00
                </div>
                <a
                  title="Comprar"
                  class="btn btn-color"
                  >Comprar</a
                >
              </div>
            </form>
          </div>
          <div class="box-produto">
            <form action="/add-carrinho/" method="post">
              <div>
                <input type="hidden" name="tipo" value="add" />
                <input type="hidden" name="id_produto" value="335954" />
                <figure>
                  <img
                    alt="Bac Doce Coração"
                    loading="lazy"
                    src="https://cdn.meucatalogodigital.com/belaflor/535330-3.jpeg"
                  />
                </figure>

                <h3>Bac Doce Coração</h3>
              </div>
              <div>
                <span class="obs"
                  >Esse presente é uma ótima para voce que quer tocar o
                  coração(...)</span
                >
              </div>
              <div>
                <div class="valor">
                  <span>a partir de</span>
                  R$ 490,00
                </div>
                <a
                  title="Comprar"
                  class="btn btn-color"
                  >Comprar</a
                >
              </div>
            </form>
          </div>
          <div class="box-produto">
            <form action="/add-carrinho/" method="post">
              <div>
                <input type="hidden" name="tipo" value="add" />
                <input type="hidden" name="id_produto" value="335971" />
                <figure>
                  <img
                    alt="Ramalhete Auge - Cor branco."
                    loading="lazy"
                    src="https://cdn.meucatalogodigital.com/belaflor/535366-3.jpeg"
                  />
                </figure>

                <h3>Ramalhete Auge - Cor branco.</h3>
              </div>
              <div>
                <span class="obs"
                  >Ramalhete de flores inspirado em criações Italiana,
                  composto(...)</span
                >
              </div>
              <div>
                <div class="valor">
                  <!---<span>por apenas</span>--->

                  R$ 280,00
                </div>
                <a
                  title="Comprar"
                  class="btn btn-color"
                  >Comprar</a
                >
              </div>
            </form>
          </div>
          <div class="box-produto">
            <form action="/add-carrinho/" method="post">
              <div>
                <input type="hidden" name="tipo" value="add" />
                <input type="hidden" name="id_produto" value="316003" />
                <figure>
                  <img
                    alt="Cesta Tasty"
                    loading="lazy"
                    src="https://cdn.meucatalogodigital.com/belaflor/2059920-3.jpg"
                  />
                </figure>
                <h3>Cesta Tasty</h3>
              </div>
              <div>
                <span class="obs"
                  >Uma linda cesta contendo pães, torrada, frios, frutas,
                  buscoito(...)</span
                >
              </div>
              <div>
                <div class="valor">
                  <!---<span>por apenas</span>--->

                  R$ 190,00
                </div>
                <a
                  title="Comprar"
                  class="btn btn-color"
                  >Comprar</a
                >
              </div>
            </form>
          </div>
          <div class="box-produto">
            <form action="/add-carrinho/" method="post">
              <div>
                <input type="hidden" name="tipo" value="add" />
                <input type="hidden" name="id_produto" value="455271" />
                <figure>
                  <img
                    alt="Cesta de Chocolates com Frutas"
                    loading="lazy"
                    src="https://cdn.meucatalogodigital.com/belaflor/740918-3.png"
                  />
                </figure>
                <h3>Cesta de Chocolates com Frutas</h3>
              </div>
              <div>
                <span class="obs"
                  >Cesta grande com frutas e chocolates para surpreender e
                  demonstrar(...)</span
                >
              </div>
              <div>
                <div class="valor">
                  <span>a partir de</span>
                  R$ 190,00
                </div>
                <a
                  title="Comprar"
                  class="btn btn-color"
                  >Comprar</a
                >
              </div>
            </form>
          </div>
          <div class="box-produto">
            <form action="/add-carrinho/" method="post">
              <div>
                <input type="hidden" name="tipo" value="add" />
                <input type="hidden" name="id_produto" value="335964" />
                <figure>
                  <img
                    alt="Buque Especial Candy 20 Rosas + acabamento."
                    loading="lazy"
                    src="https://cdn.meucatalogodigital.com/belaflor/535339-3.jpeg"
                  />
                </figure>
                <h3>Buque Especial Candy 20 Rosas + acabamento.</h3>
              </div>
              <div>
                <span class="obs"
                  >Esse é um buque tradicional, que de tradicional não tem
                  nada(...)</span
                >
              </div>
              <div>
                <div class="valor">
                  <!---<span>por apenas</span>--->

                  R$ 490,00
                </div>
                <a
                  title="Comprar"
                  class="btn btn-color"
                  >Comprar</a
                >
              </div>
            </form>
          </div>
          <div class="box-produto">
            <form action="/add-carrinho/" method="post">
              <div>
                <input type="hidden" name="tipo" value="add" />
                <input type="hidden" name="id_produto" value="335987" />
                <figure>
                  <img
                    alt="Cadinho de Rosas Importadas."
                    loading="lazy"
                    src="https://cdn.meucatalogodigital.com/belaflor/535377-3.jpeg"
                  />
                </figure>
                <h3>Cadinho de Rosas Importadas.</h3>
              </div>
              <div>
                <span class="obs"
                  >A Rosa Freedom® é a variedade na cor vermelha mais
                  produzida(...)</span
                >
              </div>
              <div>
                <div class="valor">
                  <span>a partir de</span>
                  R$ 600,00
                </div>
                <a
                  title="Comprar"
                  class="btn btn-color"
                  >Comprar</a
                >
              </div>
            </form>
          </div>
          <div class="box-produto">
            <form action="/add-carrinho/" method="post">
              <div>
                <input type="hidden" name="tipo" value="add" />
                <input type="hidden" name="id_produto" value="335961" />
                <figure>
                  <img
                    alt="Agrupado de Flores Nobres"
                    loading="lazy"
                    src="https://cdn.meucatalogodigital.com/belaflor/535336-3.jpeg"
                  />
                </figure>
                <h3>Agrupado de Flores Nobres</h3>
              </div>
              <div>
                <span class="obs">
                  <br />

                  Nossos buques têm design único, com cores e
                  texturas(...)</span
                >
              </div>
              <div>
                <div class="valor">
                  <span>a partir de</span>
                  R$ 950,00
                </div>
                <a
                  title="Comprar"
                  class="btn btn-color"
                  >Comprar</a
                >
              </div>
            </form>
          </div>
          <div class="box-produto">
            <form action="/add-carrinho/" method="post">
              <div>
                <input type="hidden" name="tipo" value="add" />
                <input type="hidden" name="id_produto" value="431016" />
                <figure>
                  <img
                    alt="Cesta de Cerveja"
                    loading="lazy"
                    src="https://cdn.meucatalogodigital.com/belaflor/697596-3.jpeg"
                  />
                </figure>
                <h3>Cesta de Cerveja</h3>
              </div>
              <div>
                <span class="obs"
                  >Essa é uma otima opção de presente contendo:<br />

                  <br />

                  -(...)</span
                >
              </div>
              <div>
                <div class="valor">
                  <!---<span>por apenas</span>--->

                  R$ 280,00
                </div>
                <a
                  title="Comprar"
                  class="btn btn-color"
                  >Comprar</a
                >
              </div>
            </form>
          </div>
          <div class="print-separador"></div>
          <div class="box-produto">
            <form action="/add-carrinho/" method="post">
              <div>
                <input type="hidden" name="tipo" value="add" />
                <input type="hidden" name="id_produto" value="329369" />
                <figure>
                  <img
                    alt="Bac à Fleurs com Rosas Azul"
                    loading="lazy"
                    src="https://cdn.meucatalogodigital.com/belaflor/524885-3.jpeg"
                  />
                </figure>
                <h3>Bac à Fleurs com Rosas Azul</h3>
              </div>
              <div>
                <span class="obs"
                  >Esse é nosso “Bac a Fleurs”. Uma delicada box(...)</span
                >
              </div>
              <div>
                <div class="valor">
                  <span>a partir de</span>
                  R$ 255,00
                </div>
                <a
                  title="Comprar"
                  class="btn btn-color"
                  >Comprar</a
                >
              </div>
            </form>
          </div>
          <div class="box-produto">
            <form action="/add-carrinho/" method="post">
              <div>
                <input type="hidden" name="tipo" value="add" />
                <input type="hidden" name="id_produto" value="431049" />
                <figure>
                  <img
                    alt="Bac a Fleurs + Baldinho com cervejas louvada"
                    loading="lazy"
                    src="https://cdn.meucatalogodigital.com/belaflor/697653-3.jpeg"
                  />
                </figure>
                <h3>Bac a Fleurs + Baldinho com cervejas louvada</h3>
              </div>
              <div>
                <span class="obs"
                  >Bac à Fleurs com Rosas Azuis<br />

                  Esse é nosso “Bac(...)</span
                >
              </div>
              <div>
                <div class="valor">
                  <span>a partir de</span>
                  R$ 310,00
                </div>
                <a
                  title="Comprar"
                  class="btn btn-color"
                  >Comprar</a
                >
              </div>
            </form>
          </div>
          <div class="box-produto">
            <form action="/add-carrinho/" method="post">
              <div>
                <input type="hidden" name="tipo" value="add" />
                <input type="hidden" name="id_produto" value="431027" />
                <figure>
                  <img
                    alt="Cesta Bless"
                    loading="lazy"
                    src="https://cdn.meucatalogodigital.com/belaflor/2334610-3.jpg"
                  />
                </figure>
                <h3>Cesta Bless</h3>
              </div>
              <div>
                <span class="obs"
                  >Um belíssimo Baú contendo Pães (sal e Doce), Pão de
                  queijo,(...)</span
                >
              </div>
              <div>
                <div class="valor">
                  <span>a partir de</span>
                  R$ 585,00
                </div>
                <a
                  title="Comprar"
                  class="btn btn-color"
                  >Comprar</a
                >
              </div>
            </form>
          </div>
          <div class="print-separador"></div>
        </div>
      </div>
    </div>
    <footer>
      <div class="rodape">
        <p>
          Floricultura Teresinha - Flores e Decorações <br />
          Av. Alfredo Bandeira de Melo, 1 - Ana de Albuquerque, Igarassu - PE,
          53630-030
          <br /><br />
          <a
            href="https://www.instagram.com/floriculturatere/"
            style="background-color: transparent"
            ><i
              class="fa-brands fa-instagram"
              style="
                color: white;
                font-size: 30px;
                background-color: transparent;
              "
            ></i
          ></a>
        </p>
      </div>
    </footer>

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
  <footer></footer>
  <!-- SCRIPTS -->
  <script src="js/carrossel.js"></script>
  <script src="js/cart.js"></script>
</html>
