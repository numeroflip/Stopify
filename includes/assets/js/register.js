document.getElementById("hideLogin").addEventListener("click", function() {
  document.getElementById("loginForm").style.display = "none";
  document.getElementById("registrationForm").style.display = "flex";
});

document.getElementById("hideReg").addEventListener("click", function() {
  document.getElementById("registrationForm").style.display = "none";
  document.getElementById("loginForm").style.display = "flex";
});
