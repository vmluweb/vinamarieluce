/**
 * Nom du script : script.js
 * Description : Script JavaScript personnalisé pour le thème Vml.
 * Version : 1.0
 */

jQuery(document).ready(function ($) {
  // Gestion du menu burger
  $(".burgerMenu").click(function () {
    $(".menu-navigation").toggleClass("active");
  });
});

// Sélection de l'élément vidéo
const video = document.querySelector(".media_video");

const projectGridContainer = document.querySelector(".project_grid_wrapper");

// Vitesse de lecture
video.playbackRate = 0.25;

function playPause() {
  if (video.paused) {
    video.play();
  } else {
    video.pause();
  }
  console.log("La fonction playPause() a été appelée.");
}

video.addEventListener("click", () => {
  playPause();
});
