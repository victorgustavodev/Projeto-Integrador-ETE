<?php
session_start();
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
    <link rel="stylesheet" href="style/tema.css" />
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
        <a class="logo" href="session.php"
          ><img src="fotos/img/logo.png" alt=""
        /></a>
        <div id="login-icon"><i class="fa-solid fa-user"></i></a>
          <p>Seja Bem-vindo(a), <a href="login.html" style="color:#f37f75 ; font-weight: bold; text-decoration: none;
          "><?php echo $_SESSION['nome']; ?>!</a></p></div>
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
            <form>
              <figure>
                <img
                  alt="Buquê de Gérberas"
                  loading="lazy"
                  src="https://cdn.meucatalogodigital.com/belaflor/2347638-3.jpeg"
                />
              </figure>
              <h3>Buquê de Gérberas</h3>
              <div>
                <div class="valor">R$ 350,00</div>
                <button id="comprar">
                  <a title="Comprar" class="btn btn-color">Comprar</a>
                </button>
              </div>
            </form>
          </div>

          <div class="box-produto">
            <form>
              <div>
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
                <div class="valor">R$ 130,00</div>
                <button id="comprar">
                  <a title="Comprar" class="btn btn-color">Comprar</a>
                </button>
              </div>
            </form>
          </div>

          <div class="box-produto">
            <form>
              <div>
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
                <div class="valor">R$ 170,00</div>
                <button id="comprar">
                  <a title="Comprar" class="btn btn-color">Comprar</a>
                </button>
              </div>
            </form>
          </div>

          <div class="box-produto">
            <form>
              <div>
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
                <div class="valor">R$ 280,00</div>
                <button id="comprar">
                  <a title="Comprar" class="btn btn-color">Comprar</a>
                </button>
              </div>
            </form>
          </div>
          <div class="box-produto">
            <form>
              <div>
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
                <div class="valor">R$ 320,00</div>
                <button id="comprar">
                  <a title="Comprar" class="btn btn-color">Comprar</a>
                </button>
              </div>
            </form>
          </div>
          <div class="box-produto">
            <form>
              <div>
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
                <div class="valor">R$ 280,00</div>
                <button id="comprar">
                  <a title="Comprar" class="btn btn-color">Comprar</a>
                </button>
              </div>
            </form>
          </div>
          <div class="box-produto">
            <form>
              <div>
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
                <div class="valor">R$ 190,00</div>
                <button id="comprar">
                  <a title="Comprar" class="btn btn-color">Comprar</a>
                </button>
              </div>
            </form>
          </div>
          <div class="box-produto">
            <form>
              <div>
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
                <div class="valor">R$ 320,00</div>
                <button id="comprar">
                  <a title="Comprar" class="btn btn-color">Comprar</a>
                </button>
              </div>
            </form>
          </div>
          <div class="box-produto">
            <form>
              <div>
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
                <div class="valor">R$ 280,00</div>
                <button id="comprar">
                  <a title="Comprar" class="btn btn-color">Comprar</a>
                </button>
              </div>
            </form>
          </div>
          <div class="box-produto">
            <form>
              <div>
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
                <div class="valor">R$ 310,00</div>
                <button id="comprar">
                  <a title="Comprar" class="btn btn-color">Comprar</a>
                </button>
              </div>
            </form>
          </div>
          <div class="print-separador"></div>
          <div class="box-produto">
            <form>
              <div>
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
                <div class="valor">R$ 320,00</div>
                <button id="comprar">
                  <a title="Comprar" class="btn btn-color">Comprar</a>
                </button>
              </div>
            </form>
          </div>

          <div class="box-produto">
            <form>
              <div>
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
                <div class="valor">R$ 80,00</div>
                <button id="comprar">
                  <a title="Comprar" class="btn btn-color">Comprar</a>
                </button>
              </div>
            </form>
          </div>
          <div class="box-produto">
            <form>
              <div>
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
                <div class="valor">R$ 340,00</div>
                <button id="comprar">
                  <a title="Comprar" class="btn btn-color">Comprar</a>
                </button>
              </div>
            </form>
          </div>
          <div class="box-produto">
            <form>
              <div>
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
                <div class="valor">R$ 290,00</div>
                <button id="comprar">
                  <a title="Comprar" class="btn btn-color">Comprar</a>
                </button>
              </div>
            </form>
          </div>
          <div class="box-produto">
            <form>
              <div>
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
                <div class="valor">R$ 680,00</div>
                <button id="comprar">
                  <a title="Comprar" class="btn btn-color">Comprar</a>
                </button>
              </div>
            </form>
          </div>
          <div class="box-produto">
            <form>
              <div>
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
                <div class="valor">R$ 250,00</div>
                <button id="comprar">
                  <a title="Comprar" class="btn btn-color">Comprar</a>
                </button>
              </div>
            </form>
          </div>
          <div class="box-produto">
            <form>
              <div>
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
                <div class="valor">R$ 1.830,00</div>
                <button id="comprar">
                  <a title="Comprar" class="btn btn-color">Comprar</a>
                </button>
              </div>
            </form>
          </div>
          <div class="print-separador"></div>
          <div class="box-produto">
            <form>
              <div>
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
                <div class="valor">R$ 280,00</div>
                <button id="comprar">
                  <a title="Comprar" class="btn btn-color">Comprar</a>
                </button>
              </div>
            </form>
          </div>
          <div class="box-produto">
            <form>
              <div>
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
                <div class="valor">R$ 450,00</div>
                <button id="comprar">
                  <a title="Comprar" class="btn btn-color">Comprar</a>
                </button>
              </div>
            </form>
          </div>
          <div class="box-produto">
            <form>
              <div>
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
                <div class="valor">R$ 700,00</div>
                <button id="comprar">
                  <a title="Comprar" class="btn btn-color">Comprar</a>
                </button>
              </div>
            </form>
          </div>
          <div class="box-produto">
            <form>
              <div>
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
                <div class="valor">R$ 290,00</div>
                <button id="comprar">
                  <a title="Comprar" class="btn btn-color">Comprar</a>
                </button>
              </div>
            </form>
          </div>
          <div class="box-produto">
            <form>
              <div>
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
                <div class="valor">R$ 550,00</div>
                <button id="comprar">
                  <a title="Comprar" class="btn btn-color">Comprar</a>
                </button>
              </div>
            </form>
          </div>
          <div class="box-produto">
            <form>
              <div>
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
                <div class="valor">R$ 180,00</div>
                <button id="comprar">
                  <a title="Comprar" class="btn btn-color">Comprar</a>
                </button>
              </div>
            </form>
          </div>
          <div class="box-produto">
            <form>
              <div>
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
                <div class="valor">R$ 330,00</div>
                <button id="comprar">
                  <a title="Comprar" class="btn btn-color">Comprar</a>
                </button>
              </div>
            </form>
          </div>
          <div class="box-produto">
            <form>
              <div>
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
                <div class="valor">R$ 1.600,00</div>
                <button id="comprar">
                  <a title="Comprar" class="btn btn-color">Comprar</a>
                </button>
              </div>
            </form>
          </div>
          <div class="print-separador"></div>
          <div class="box-produto">
            <form>
              <div>
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
                <div class="valor">R$ 149,90</div>
                <button id="comprar">
                  <a title="Comprar" class="btn btn-color">Comprar</a>
                </button>
              </div>
            </form>
          </div>
          <div class="box-produto">
            <form>
              <div>
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
                <div class="valor">R$ 220,00</div>
                <button id="comprar">
                  <a title="Comprar" class="btn btn-color">Comprar</a>
                </button>
              </div>
            </form>
          </div>
          <div class="box-produto">
            <form>
              <div>
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
                <div class="valor">R$ 250,00</div>
                <button id="comprar">
                  <a title="Comprar" class="btn btn-color">Comprar</a>
                </button>
              </div>
            </form>
          </div>
          <div class="box-produto">
            <form>
              <div>
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
                <div class="valor">R$ 230,00</div>
                <button id="comprar">
                  <a title="Comprar" class="btn btn-color">Comprar</a>
                </button>
              </div>
            </form>
          </div>
          <div class="box-produto">
            <form>
              <div>
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
                <div class="valor">R$ 350,00</div>
                <button id="comprar">
                  <a title="Comprar" class="btn btn-color">Comprar</a>
                </button>
              </div>
            </form>
          </div>
          <div class="box-produto">
            <form>
              <div>
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
                <div class="valor">R$ 180,00</div>
                <button id="comprar">
                  <a title="Comprar" class="btn btn-color">Comprar</a>
                </button>
              </div>
            </form>
          </div>
          <div class="box-produto">
            <form>
              <div>
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
                <div class="valor">R$ 250,00</div>
                <button id="comprar">
                  <a title="Comprar" class="btn btn-color">Comprar</a>
                </button>
              </div>
            </form>
          </div>
          <div class="box-produto">
            <form>
              <div>
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
                <div class="valor">R$ 480,00</div>
                <button id="comprar">
                  <a title="Comprar" class="btn btn-color">Comprar</a>
                </button>
              </div>
            </form>
          </div>
          <div class="box-produto">
            <form>
              <div>
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
                <div class="valor">R$ 150,00</div>
                <button id="comprar">
                  <a title="Comprar" class="btn btn-color">Comprar</a>
                </button>
              </div>
            </form>
          </div>
          <div class="print-separador"></div>
          <div class="box-produto">
            <form>
              <div>
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
                <div class="valor">R$ 140,00</div>
                <button id="comprar">
                  <a title="Comprar" class="btn btn-color">Comprar</a>
                </button>
              </div>
            </form>
          </div>
          <div class="box-produto">
            <form>
              <div>
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
                <div class="valor">R$ 160,00</div>
                <button id="comprar">
                  <a title="Comprar" class="btn btn-color">Comprar</a>
                </button>
              </div>
            </form>
          </div>
          <div class="box-produto">
            <form>
              <div>
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
                <div class="valor">R$ 330,00</div>
                <button id="comprar">
                  <a title="Comprar" class="btn btn-color">Comprar</a>
                </button>
              </div>
            </form>
          </div>
          <div class="box-produto">
            <form>
              <div>
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
                <div class="valor">R$ 185,00</div>
                <button id="comprar">
                  <a title="Comprar" class="btn btn-color">Comprar</a>
                </button>
              </div>
            </form>
          </div>
          <div class="box-produto">
            <form>
              <div>
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
                <div class="valor">R$ 330,00</div>
                <button id="comprar">
                  <a title="Comprar" class="btn btn-color">Comprar</a>
                </button>
              </div>
            </form>
          </div>
          <div class="box-produto">
            <form>
              <div>
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
                <div class="valor">R$ 430,00</div>
                <button id="comprar">
                  <a title="Comprar" class="btn btn-color">Comprar</a>
                </button>
              </div>
            </form>
          </div>
          <div class="box-produto">
            <form>
              <div>
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
                <div class="valor">R$ 340,00</div>
                <button id="comprar">
                  <a title="Comprar" class="btn btn-color">Comprar</a>
                </button>
              </div>
            </form>
          </div>
          <div class="box-produto">
            <form>
              <div>
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
                <div class="valor">R$ 320,00</div>
                <button id="comprar">
                  <a title="Comprar" class="btn btn-color">Comprar</a>
                </button>
              </div>
            </form>
          </div>
          <div class="box-produto">
            <form>
              <div>
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
                <div class="valor">R$ 250,00</div>
                <button id="comprar">
                  <a title="Comprar" class="btn btn-color">Comprar</a>
                </button>
              </div>
            </form>
          </div>
          <div class="print-separador"></div>
          <div class="box-produto">
            <form>
              <div>
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
                <div class="valor">R$ 290,00</div>
                <button id="comprar">
                  <a title="Comprar" class="btn btn-color">Comprar</a>
                </button>
              </div>
            </form>
          </div>
          <div class="box-produto">
            <form>
              <div>
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
                <div class="valor">R$ 490,00</div>
                <button id="comprar">
                  <a title="Comprar" class="btn btn-color">Comprar</a>
                </button>
              </div>
            </form>
          </div>
          <div class="box-produto">
            <form>
              <div>
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
                <div class="valor">R$ 280,00</div>
                <button id="comprar">
                  <a title="Comprar" class="btn btn-color">Comprar</a>
                </button>
              </div>
            </form>
          </div>
          <div class="box-produto">
            <form>
              <div>
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
                <div class="valor">R$ 190,00</div>
                <button id="comprar">
                  <a title="Comprar" class="btn btn-color">Comprar</a>
                </button>
              </div>
            </form>
          </div>
          <div class="box-produto">
            <form>
              <div>
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
                <div class="valor">R$ 190,00</div>
                <button id="comprar">
                  <a title="Comprar" class="btn btn-color">Comprar</a>
                </button>
              </div>
            </form>
          </div>
          <div class="box-produto">
            <form>
              <div>
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
                <div class="valor">R$ 490,00</div>
                <button id="comprar">
                  <a title="Comprar" class="btn btn-color">Comprar</a>
                </button>
              </div>
            </form>
          </div>
          <div class="box-produto">
            <form>
              <div>
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
                <div class="valor">R$ 600,00</div>
                <button id="comprar">
                  <a title="Comprar" class="btn btn-color">Comprar</a>
                </button>
              </div>
            </form>
          </div>
          <div class="box-produto">
            <form>
              <div>
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
                <div class="valor">R$ 950,00</div>
                <button id="comprar">
                  <a title="Comprar" class="btn btn-color">Comprar</a>
                </button>
              </div>
            </form>
          </div>
          <div class="box-produto">
            <form>
              <div>
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
                <div class="valor">R$ 280,00</div>
                <button id="comprar">
                  <a title="Comprar" class="btn btn-color">Comprar</a>
                </button>
              </div>
            </form>
          </div>
          <div class="print-separador"></div>
          <div class="box-produto">
            <form>
              <div>
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
                <div class="valor">R$ 255,00</div>
                <button id="comprar">
                  <a title="Comprar" class="btn btn-color">Comprar</a>
                </button>
              </div>
            </form>
          </div>
          <div class="box-produto">
            <form>
              <div>
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
                <div class="valor">R$ 310,00</div>
                <button id="comprar">
                  <a title="Comprar" class="btn btn-color">Comprar</a>
                </button>
              </div>
            </form>
          </div>
          <div class="box-produto">
            <form>
              <div>
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
                <div class="valor">R$ 585,00</div>
                <button id="comprar">
                  <a title="Comprar" class="btn btn-color">Comprar</a>
                </button>
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
  <script src="js/buy.js"></script>
  <script src="js/cart.js"></script>
  <script src="js/tema.js"></script>
</html>
