import { carousel } from "./carousel.js";
const carouselElement = document.querySelector('.carousel')
if (carouselElement) carousel()

window.onload = () => {
  gsap.to('.page-transition', { x: '100%', duration: .3 })
}

function pageTransitionExit() {
  gsap.to('.page-transition-right', { x: '0%', duration: .3 })
  gsap.to('.page-transition-left', { x: '0%', duration: .3 })
}

// Delay links to allow exit page transition
$('a').click(function (e) {
  e.preventDefault();
  const target = e.currentTarget.href;
  pageTransitionExit();
  setTimeout(() => {
    window.location.href = target;
  }, 200);
});
