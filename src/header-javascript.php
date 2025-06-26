const iconOpenMenu = document.getElementById("icon-open-menu");

const headerLinksContainer = document.querySelector(".header-links-container");

iconOpenMenu.addEventListener("click", () => {
    headerLinksContainer.classList.toggle("open");
    iconOpenMenu.classList.toggle("open");
})