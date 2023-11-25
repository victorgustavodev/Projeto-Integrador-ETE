const shopping = document.querySelector(".shopping");
const cart = document.querySelector(".card");
const containerCart = document.querySelector(".container-cart");
const buttonWhats = document.querySelector(".whats");

shopping.addEventListener("click", (e) => {
  if (containerCart.style.width === "200px") {
    containerCart.style.width = "0px";
    buttonWhats.style.right = "24px";
  } else {
    containerCart.style.width = "200px";
    buttonWhats.style.right = "210px";
  }
});

function addCard() {
  const quantity = document.querySelector(".quantity");
  localStorage.setItem("card", "Tom");
  //   return;
  console.log("quantity");
}
