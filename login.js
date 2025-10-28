document.getElementById("login").onsubmit = function (e) {
  if (
    document.getElementById("username").value == "" ||
    document.getElementById("password").value == ""
  ) {
    alert("Please fill out the neccessary fields.");
    e.preventDefault();
  }
};

document.getElementById("password").onkeyup = function () {
  if (this.value.length === 0) {
    document.querySelector("span").innerHTML = "";
    document.getElementById("password").style.borderColor = "black";
  } else if (this.value.length < 6) {
    document.querySelector("span").innerHTML =
      "Password must be at least 6 characters long. <br>";
    document.querySelector("span").style.color = "red";
  } else {
    document.querySelector("span").innerHTML = "";
  }
};
