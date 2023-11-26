// Seleciona todos os elementos com a classe "box-produto"
const divConteudos = document.querySelectorAll(".box-produto");

// Itera sobre cada elemento
divConteudos.forEach((divConteudo) => {
  // Seleciona o botão de compra dentro de cada elemento
  const comprar = divConteudo.querySelector("#comprar");

  // Adiciona o evento de clique para cada botão
  comprar.addEventListener("click", (event) => {
    event.preventDefault();

    let TituloProduto = divConteudo.querySelector("h3");
    let ValorProduto = divConteudo.querySelector(".valor");

    if (TituloProduto && ValorProduto) {
      const Titulo = TituloProduto.innerHTML;
      const Valor = ValorProduto.innerHTML;
      const url = `https://wa.me/5581998636465?text=${encodeURIComponent(
        `Olá, Desejo Adquirir o Produto: ${Titulo} no valor de ${Valor}`
      )}`;

      window.open(url, "_blank");
    }
  });
});