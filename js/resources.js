/* Rishav Chapagain */

let sidebar = document.querySelector(".sidebar");
let sidebar_img = document.getElementById("sidebar_img");
let sidebar_close_img = document.getElementById("sidebar_close_img");
let search_img = document.getElementById("search_img");
let searchInput = document.getElementById("searchinput");

sidebar_img.addEventListener("click", sidebarOpen);
sidebar_close_img.addEventListener("click", sidebarClose);
search_img.addEventListener("click", searchOpen);

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

function searchOpen() {
  searchInput.focus();
}



function createResourceElement(resource) {
  const name = document.createElement("a");
  name.setAttribute("href", resource.link);
  name.setAttribute("target", "_blank");
  name.classList.add("item");

  const item_div = document.createElement("div");
  item_div.classList.add("item-desc");

  const title = document.createElement("p");
  title.classList.add("name");
  title.textContent = resource.name;
  item_div.appendChild(title);

  const desc = document.createElement("p");
  desc.classList.add("desc");
  desc.textContent = resource.description;
  item_div.appendChild(desc);

  const key_div = document.createElement("div");
  key_div.classList.add("keys");

  resource.keys.forEach(key => {
    const span = document.createElement("span");
    span.classList.add("key");
    span.textContent = key;
    key_div.appendChild(span);
  });

  name.appendChild(item_div);
  name.appendChild(key_div);

  const item_container = document.getElementById("item-container");
  item_container.appendChild(name);
}

async function jsonFunction() {
  try {
    const response = await fetch("../resources/resources.json");
    if (!response.ok) {
      throw new Error("Failed to fetch JSON");
    }
    const data = await response.json();
    console.log("Working.......");

    const titles = Object.keys(data);

    const containers = document.querySelectorAll(".keycontainer");

    containers.forEach(container => {
      titles.forEach(key => {
        const li = document.createElement("li");
        li.classList.add("label-items");
        li.textContent = key;
        container.appendChild(li);
      });
    });

    const maxLength = Math.max(
      data.js.length,
      data.php.length,
      data.html.length,
      data.css.length
    );

    const jsResources = data.js;
    const phpResources = data.php;
    const cssResources = data.css;
    const htmlResources = data.html;

    for (let i = 0; i < maxLength; i++) {
      if (i < jsResources.length) {
        createResourceElement(jsResources[i]);
      }
      if (i < phpResources.length) {
        createResourceElement(phpResources[i]);
      }
      if (i < cssResources.length) {
        createResourceElement(cssResources[i]);
      }
      if (i < htmlResources.length) {
        createResourceElement(htmlResources[i]);
      }
    }

    console.log("Keys exported successfully");
  } catch (error) {
    console.error("Error reaching or processing JSON:", error);
  }
}

jsonFunction();
