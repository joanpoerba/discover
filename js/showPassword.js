const body = document.body;
const eye = document.querySelector(".eye");
const input = document.getElementById("passwordInput");

eye.addEventListener("click", () => {
  body.classList.toggle("showPassword");

  if (body.classList.contains("showPassword")) {
    eye.setAttribute(
      "class",
      "eye bi bi-eye-slash fs-3 d-flex justify-content-center align-items-center ms-3"
    );
    input.setAttribute("type", "text");
  } else {
    eye.setAttribute(
      "class",
      "eye bi bi-eye fs-3 d-flex justify-content-center align-items-center ms-3"
    );
    input.setAttribute("type", "password");
  }
});
