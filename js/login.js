const LoginToggle = document.getElementById("LoginBox");
const RegisToggle = document.getElementById("RegisBox");
const BoxLogin = document.getElementById("BoxLogin");
const BoxRegister = document.getElementById("BoxRegister");

LoginToggle.addEventListener("click", () => {
  BoxRegister.classList.remove("BoxRegis-active");
});

RegisToggle.addEventListener("click", () => {
  BoxRegister.classList.add("BoxRegis-active");
});

const togglePasswordRegis = document.getElementById("togglePasswordRegis");
const passwordInputRegis = document.getElementById("passwordInputRegis");

const togglePasswordLogin = document.getElementById("togglePasswordLogin");
const passwordInputLogin = document.getElementById("passwordInputLogin");

togglePasswordRegis.addEventListener("click", function () {
  const type = passwordInputRegis.getAttribute("type") === "password" ? "text" : "password";
  passwordInputRegis.setAttribute("type", type);
});


togglePasswordLogin.addEventListener("click", function () {
  const type = passwordInputLogin.getAttribute("type") === "password" ? "text" : "password";
  passwordInputLogin.setAttribute("type", type);
});
