let cerrar = document.querySelectorAll(".close")[0];
let modal = document.querySelectorAll(".modal")[0];
let modalC = document.querySelectorAll(".modal-container")[0];

document.body.onload = function () {
  setTimeout(function () {
    modalC.classList.toggle("modalca");
    setTimeout(function () {
      modal.classList.toggle("abrirmodal");
    }, 500);
  }, 3000);
};
cerrar.addEventListener("click", function (e) {
  modal.classList.toggle("abrirmodal");
});
cerrar.addEventListener("click", function (e) {
  setTimeout(function () {
    modalC.style.opacity = "0";
    modalC.style.visibility = "hidden";
  }, 100);
});
