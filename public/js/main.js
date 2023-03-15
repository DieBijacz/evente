// Import modules
import { initializeCalendar } from "./calendar.js";
import { carousel } from "./carousel.js";

// Initialize carousel if it exists
const carouselElement = document.querySelector('.carousel')
if (carouselElement) {
  carousel()
}

initializeCalendar()
// Set text to search
function getTextToSearch() {
  const text = document.querySelector('#search-text').value
  return text ? `/?search=${text}` : ''
}

// Set type to search
function getTagsToSearch() {
  const types = document.querySelectorAll("input[name='search-type']:checked")
  return types.length > 0 ? `/?tag=${Array.from(types).map(el => el.value).join(' ')}` : ''
}

// Set date to search
function getDateToSearch() {
  const calendarSearch = $('#search-when').is(':checked')

  const months = ['JAN', 'FEB', 'MAR', 'APR', 'MAY', 'JUN', 'JUL', 'AUG', 'SEP', 'OCT', 'NOV', 'DEC'];
  const month = (months.indexOf($('#calendar-month').text()) + 1).toString()
  const formatMonth = ('0' + month).slice(-2)

  const day = ('0' + ($('#calendar-selected-day').text()).toString()).slice(-2)

  return calendarSearch ? `/?when=${$('#calendar-year').text()}-${formatMonth}-${day}` : ''
}

// Search
$('#search-button').click(function (e) {
  e.preventDefault()
  const text = getTextToSearch()
  const tags = getTagsToSearch()
  const when = getDateToSearch()
  window.location.href = text + tags + when
})

// Animate page on load
window.onload = () => {
  gsap.to('.block-1', { x: '100%', duration: .4, ease: "power4.out" })
  gsap.to('.block-2', { x: '100%', duration: .2, ease: "power4.out" })
}

// Animate page transition exit
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
