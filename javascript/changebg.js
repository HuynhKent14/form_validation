let background = document.querySelector("body").style;
function getBgID(id) {
  if (id == 1) {
    background.backgroundImage = `linear-gradient(
      to bottom,
      rgba(206, 184, 184, 0) 0%,
      rgb(20, 19, 19) 40%
    ),
    url(./images/movie1.jpg)`;
    console.log("test");
  } else if (id == 2) {
    background.backgroundImage = `linear-gradient(
      to bottom,
      rgba(206, 184, 184, 0) 0%,
      rgb(20, 19, 19) 40%
    ),
    url(./images/movie2.jpg)`;
  } else if (id == 3) {
    background.backgroundImage = `linear-gradient(
      to bottom,
      rgba(206, 184, 184, 0) 0%,
      rgb(20, 19, 19) 40%
    ),
    url(./images/movie3.jpg)`;
  } else if (id == 4) {
    background.backgroundImage = `linear-gradient(
      to bottom,
      rgba(206, 184, 184, 0) 0%,
      rgb(20, 19, 19) 40%
    ),
    url(./images/movie4.jpg)`;
  } else if (id == 5) {
    background.backgroundImage = `linear-gradient(
      to bottom,
      rgba(206, 184, 184, 0) 0%,
      rgb(20, 19, 19) 40%
    ),
    url(./images/movie5.jpg)`;
  } else if (id == 6) {
    background.backgroundImage = `linear-gradient(
      to bottom,
      rgba(206, 184, 184, 0) 0%,
      rgb(20, 19, 19) 40%
    ),
    url(./images/movie6.jpg)`;
  }
}
