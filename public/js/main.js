import { initializeCalendar } from "./calendar.js";
import { carousel } from "./carousel.js";
const carouselElement = document.querySelector('.carousel')

jQuery(document).ready(function () {
  if (carouselElement) carousel()
  initializeCalendar()
})

window.onload = () => {
  gsap.to('.block-1', { x: '100%', duration: .4, ease: "power4.out" })
  gsap.to('.block-2', { x: '100%', duration: .2, ease: "power4.out" })
}

function pageTransitionExit() {
  gsap.to('.block-1', { x: '0%', duration: .2, ease: "power4.out" })
  gsap.to('.block-2', { x: '0%', duration: .4, ease: "power4.out" })
}

// Delay links to allow exit page transition
$('a').click(function (e) {
  e.preventDefault();
  const target = e.currentTarget.href;
  pageTransitionExit();
  setTimeout(() => {
    window.location.href = target;
  }, 300);
});
