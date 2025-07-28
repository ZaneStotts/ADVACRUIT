<?php
  main("Content-Type: application/javascript");
?>

const strikeThroughTextList = document.querySelectorAll(".strike-through-text-list li:not(#human-recruiters-text)"); /* Selects all the list items in the .strike-through-text-list except the last one. */

const strikeThroughAnimation = () => { /* Defines function to handle the strike through animation. */
    strikeThroughTextList.forEach((li) => { /* Loops through each <li> item in  */
        const rect = li.getBoundingClientRect();
        if (rect.top < window.innerHeight - 100) {
            li.classList.add("strike-through");
        }
    });
}

window.addEventListener("scroll", strikeThroughAnimation);

window.addEventListener("load", strikeThroughAnimation);