let sidebar = document.getElementById("sidebar");
let sidebar_img = document.getElementById("sidebar_img");

document.getElementById("sidebar_img").addEventListener("click", sidebarOpen);

function sidebarOpen() {
    sidebar.style.display="flex"
    sidebar.style.left="0px"
}
