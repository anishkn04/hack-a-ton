let sidebar = document.querySelector(".sidebar");
let sidebar_img = document.getElementById("sidebar_img");
let sidebar_close_img = document.getElementById("sidebar_close_img");

sidebar_img.addEventListener("click", sidebarOpen);
sidebar_close_img.addEventListener("click", sidebarClose);

function sidebarOpen() {
  sidebar.style.visibility = "visible";
  sidebar.style.left = "0px";
}

function sidebarClose() {
  sidebar.style.left = "-350px";
  sidebar.style.visibility = "hidden";
}
