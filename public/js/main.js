import { initializeCalendar } from "./calendar.js";
import { carousel } from "./carousel.js";
const carouselElement = document.querySelector('.carousel')

jQuery(document).ready(function () {
  if (carouselElement) carousel()
  initializeCalendar()
})

// SET TYPE
function getTypesToSearch() {
  let types = '/?tag='
  const typeEls = document.querySelectorAll("input[name='search-type']:checked")
  typeEls.forEach(el => { types += ` ${el.value}` })
  return types.trim()
}

// SET DATE
$()
function getDateToSearch() {
  let date = ''
  const calendarSearch = $('#search-when').is(':checked')
  if (calendarSearch) {
    const selectedDay = $('#calendar-selected-day').text();
    const selectedMonth = $('#calendar-month').text();
    const selectedYear = $('#calendar-year').text();
    date = `/?from=${selectedDay}-${selectedMonth}-${selectedYear}`
  }
  return date
}

// SEARCH
$('#search-button').click(function (e) {
  e.preventDefault()
  const types = getTypesToSearch()
  const date = getDateToSearch()
  window.location.href = `${types.length > 6 ? types : ''}${date}`
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
