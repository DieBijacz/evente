// Import modules
import { initializeCalendar } from "./calendar.js";
import { carousel } from "./carousel.js";

// Initialize carousel if it exists
const carouselElement = document.querySelector('.carousel')
if (carouselElement) {
  carousel()
}

initializeCalendar()

// Get search text from input field
function getTextToSearch() {
  const text = document.querySelector('#search-text').value
  // If there is text, return it as a search parameter, otherwise return an empty string
  return text ? `/?search=${text}` : ''
}

// Get selected tags to search for
function getTagsToSearch() {
  // Get all checked input elements with name 'search-type'
  const types = document.querySelectorAll("input[name='search-type']:checked")
  // If there are any checked input elements, return them as a search parameter, otherwise return an empty string
  return types.length > 0 ? `/?tag=${Array.from(types).map(el => el.value).join(' ')}` : ''
}

// Get selected date to search for
function getDateToSearch() {
  const calendarSearch = $('#search-when').is(':checked')
  // Check if the calendar search option is selected
  if (calendarSearch) {
    // Get the selected month from the calendar and convert it to a 2-digit string
    const months = ['JAN', 'FEB', 'MAR', 'APR', 'MAY', 'JUN', 'JUL', 'AUG', 'SEP', 'OCT', 'NOV', 'DEC'];
    const month = (months.indexOf($('#calendar-month').text()) + 1).toString()
    const formatMonth = ('0' + month).slice(-2)
    // Get the selected day from the calendar and convert it to a 2-digit string
    const formatDay = ('0' + ($('#calendar-selected-day').text()).toString()).slice(-2)
    // Combine the year, month, and day into a search parameter
    return `/?when=${$('#calendar-year').text()}-${formatMonth}-${formatDay}`
  } else {
    // If calendar search is not selected, return an empty string
    return ''
  }
}

// Handle search button click
$('#search-button').click(function (e) {
  e.preventDefault()
  // Get the search parameters
  const text = getTextToSearch()
  const tags = getTagsToSearch()
  const when = getDateToSearch()
  // Combine the search parameters into a URL and redirect to it
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
