<?php
  header("Content-Type: application/javascript");
?>

const openButton = document.getElementById("icon-open-menu");
const closeButton = document.getElementById("icon-close-menu");
const headerLinks = document.getElementById("header-links");

openButton.addEventListener("click", () => {
  headerLinks.classList.add("show-menu");
  openButton.style.display = "none";
  closeButton.style.display = "block";
});

closeButton.addEventListener("click", () => {
  headerLinks.classList.remove("show-menu");
  closeButton.style.display = "none";
  openButton.style.display = "block";
});