<?php
  header("Content-Type: application/javascript");
?>

// Selects all the list items in the .strike-through-text-list.
const strikeThroughTextList = document.querySelectorAll(".strike-through-text-list");

// Selects all the elements which will be crossed out with the strike through animation.
const strikeThroughLines = document.querySelectorAll(".strike-through-animation");

const strikeThroughAnimation = () => {
    strikeThroughTextList.forEach((li) => {
        const rect = li.getBoundingClientRect();
        if (rect.top < window.innerHeight - 100) {
            li.classList.add("strike-through");
        }
    });

    strikeThroughLines.forEach((line) => {
        const rect = line.getBoundingClientRect();
        if (rect.top < window.innerHeight - 100) {
            line.classList.add("active");
        }
    });
};

// Defines the code to be run when function is called.
const initializeStrikeThroughAnimation = () => {
    window.addEventListener("scroll", strikeThroughAnimation);
    window.addEventListener("load", strikeThroughAnimation);
}

// Event listener here ensures the HTML is loaded first before running script.
// Then activates the initialization function by calling it.
document.addEventListener("DOMContentLoaded", () => {
    initializeStrikeThroughAnimation();
});