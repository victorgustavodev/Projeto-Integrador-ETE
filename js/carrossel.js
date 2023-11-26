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
  }, 5000);

  function showSlide(slideIndex) {
    const slides = document.getElementsByClassName("carrossel-slide");
    for (let i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
      // slides[i].style.opacity = "1";
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
