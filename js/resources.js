/* Rishav Chapagain */


let sidebar = document.querySelector(".sidebar");
let sidebar_img = document.getElementById("sidebar_img");
let sidebar_close_img = document.getElementById("sidebar_close_img");
let search_img = document.getElementById("search_img")
let searchInput = document.getElementById('searchinput');

sidebar_img.addEventListener("click", sidebarOpen);
sidebar_close_img.addEventListener("click", sidebarClose);
search_img.addEventListener("click",searchOpen)

function sidebarOpen() {
  sidebar.style.visibility = "visible";
  sidebar.style.left = "0px";
  document.addEventListener("click", handleOutsideClick);
}

function sidebarClose() {
  sidebar.style.left = "-350px";
  sidebar.style.visibility = "hidden";
  document.removeEventListener("click", handleOutsideClick);
}

function handleOutsideClick(event) {
  if (!sidebar.contains(event.target) && event.target !== sidebar_img) {
    sidebarClose();
  }
}

function searchOpen(){
    searchInput.focus();
}
