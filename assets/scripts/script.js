/**
 * Nom du script : script.js
 * Description : Script JavaScript personnalisé pour le thème Vml.
 * Version : 1.0
 */

jQuery(document).ready(function () {
  jQuery(".toggleMenu").click(function (e) {
    jQuery("#menu ul").slideToggle(500);
    e.preventDefault();
  });
});

// Sélection de l'élément vidéo
const video = document.querySelector(".media_video");

const projectGridContainer = document.querySelector(".project_grid_wrapper");

// Vitesse de lecture à 0.5
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
