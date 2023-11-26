// document.addEventListener("DOMContentLoaded", function () {
//   const toggleButton = document.getElementById("toggle-theme");

//   toggleButton.addEventListener("click", function () {
//     document.body.classList.toggle("dark-mode");
//     const navElemnt = document.querySelector("nav");
//     if (navElemnt) {
//       navElemnt.style.backgroundColor = rgb(14, 13, 13);
//     }
//   });
// });

document.addEventListener("DOMContentLoaded", function () {
  const themeToggle = document.getElementById("theme-toggle");

  themeToggle.addEventListener("change", function () {
    document.body.classList.toggle("dark-mode", themeToggle.checked);
    const navElement = document.querySelector("nav");

    if (navElement) {
      navElement.style.backgroundColor = themeToggle.checked
        ? "rgb(14, 13, 13) "
        : "#fff";
    }
  });
});
