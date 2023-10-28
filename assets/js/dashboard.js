var el = document.getElementById("wrapper");
var toggleButton = document.getElementById("menu-toggle");

toggleButton.onclick = function () {
  el.classList.toggle("toggled");
};

function changeMenu(idMenu) {
  let menu = document.getElementById(idMenu);
  if (idMenu == 1) {
    document.querySelector("#contenido").innerHTML =
      '<object type="text/html" data="ejercicio1.html" ></object>';
  }
}
