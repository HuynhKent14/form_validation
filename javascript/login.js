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
  } else if (this.value.length < 6) {
    document.querySelector("span").innerHTML =
      "Password must be at least 6 characters long.";
  } else {
    document.querySelector("span").innerHTML = "";
  }
};

document.getElementById("check-pass").onclick = function () {
  if (this.checked) {
    document.getElementById("password").type = "text";
  } else {
    document.getElementById("password").type = "password";
  }
};
