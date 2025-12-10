const overlay = document.querySelector(".overlay");

function toggleOverlay() {
  overlay.style.opacity = "1";
  overlay.style.visibility = "visible";
}

function toggleExit() {
  overlay.style.opacity = "0";
  overlay.style.visibility = "hidden";
}
