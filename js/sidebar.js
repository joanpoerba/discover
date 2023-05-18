const humberger = document.querySelector(".humbergerWrapper");
const header = document.querySelector("header");

humberger.addEventListener("click", () => {
  header.classList.toggle("sidebarOn");
});

const body = document.body;
const arrow = document.querySelector(".arrowWrapper");

arrow.addEventListener("click", () => {
  body.classList.toggle("onSidebar");
});
