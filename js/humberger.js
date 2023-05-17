const humberger = document.querySelector(".humbergerWrapper");
const header = document.querySelector("header");

humberger.addEventListener("click", () => {
  header.classList.toggle("sidebarOn");
});
