document.addEventListener("DOMContentLoaded", function () {
  let currentSlide = 1;
  showSlide(currentSlide);

  setInterval(function () {
    currentSlide++;
    if (currentSlide > 3) {
      currentSlide = 1;
    }
    showSlide(currentSlide);
  }, 3000);

  function showSlide(slideIndex) {
    const slides = document.getElementsByClassName("carrossel-slide");
    for (let i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
    }
    slides[slideIndex - 1].style.display = "block";

    // Adiciona efeito de sombra ao passar o mouse
    const images = slides[slideIndex - 1].getElementsByTagName("img");
    for (let i = 0; i < images.length; i++) {
      images[i].addEventListener("mouseenter", addShadow);
      images[i].addEventListener("mouseleave", removeShadow);
    }
  }

  function addShadow() {
    this.classList.add("image-hovered");
  }

  function removeShadow() {
    this.classList.remove("image-hovered");
  }
});

document.addEventListener("DOMContentLoaded", function () {
  let currentSlide = 1;
  showSlide(currentSlide);

  // Add event listeners for the buttons
  const prevButton = document.getElementById("prevButton");
  const nextButton = document.getElementById("nextButton");

  prevButton.addEventListener("click", () => changeSlide(-1));
  nextButton.addEventListener("click", () => changeSlide(1));

  setInterval(function () {
    changeSlide(1);
  }, 3000);

  function showSlide(slideIndex) {
    const slides = document.getElementsByClassName("carrossel-slide");
    for (let i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
    }
    slides[slideIndex - 1].style.display = "block";
  }

  function changeSlide(n) {
    currentSlide += n;
    if (currentSlide > 3) {
      currentSlide = 1;
    } else if (currentSlide < 1) {
      currentSlide = 3;
    }
    showSlide(currentSlide);
  }
});
