function toggleForms(num) {
  if (num === 1) {
    document.querySelector(".overlay").style.opacity = "1";
    document.querySelector(".overlay").style.visibility = "visible";
    document.querySelector(".overlay2").style.opacity = "0";
    document.querySelector(".overlay2").style.visibility = "hidden";
  } else if (num === 2) {
    document.querySelector(".overlay").style.opacity = "0";
    document.querySelector(".overlay").style.visibility = "hidden";
    document.querySelector(".overlay2").style.opacity = "1";
    document.querySelector(".overlay2").style.visibility = "visible";
  }
}
