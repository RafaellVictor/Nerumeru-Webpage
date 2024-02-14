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

const togglePassword = document.getElementById("togglePassword");
const passwordInput = document.getElementById("passwordInput");

togglePassword.addEventListener("click", function () {
  const type = passwordInput.getAttribute("type") === "password" ? "text" : "password";
  passwordInput.setAttribute("type", type);
});
