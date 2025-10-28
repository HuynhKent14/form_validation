document.getElementById("signup").onsubmit = function (e) {
  if (
    document.getElementById("userName").value == "" ||
    document.getElementById("userEmail").value == "" ||
    document.getElementById("userNumber").value == "" ||
    document.getElementById("userPass").value == "" ||
    document.getElementById("userConfirmPass").value == ""
  ) {
    alert("Please fill out the neccessary fields.");
    e.preventDefault();
  }
};

document.getElementById("userPass").onkeyup = function () {
  if (this.value.length === 0) {
    document.getElementById("notice1").innerHTML = "";
    document.getElementById("password").style.borderColor = "black";
  } else if (this.value.length < 6) {
    document.getElementById("notice1").innerHTML =
      "Password must be at least 6 characters long. <br>";
  } else {
    document.getElementById("notice1").innerHTML = "";
  }

  if (
    this.value !== document.getElementById("userConfirmPass").value &&
    document.getElementById("userConfirmPass").value !== ""
  ) {
    document.getElementById("notice2").innerHTML =
      "Passwords do not match. <br>";
  } else {
    document.getElementById("notice2").innerHTML = "";
  }
};

document.getElementById("userConfirmPass").onkeyup = function () {
  if (this.value !== document.getElementById("userPass").value) {
    document.getElementById("notice2").innerHTML =
      "Passwords do not match. <br>";
  } else {
    document.getElementById("notice2").innerHTML = "";
  }
};
