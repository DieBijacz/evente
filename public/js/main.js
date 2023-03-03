import { events } from './data.js'
import { callFunctionXTimes } from './utilities.js'
const cells = document.querySelectorAll('.cell')
const carousel = document.querySelector('.carousel')
const carouselContainer = document.querySelector('.carousel-container')
const mainText = document.querySelector('.main-text')

const CELLS_COUNT = events.length
const CELL_SIZE = 150
const CELL_ANGLE = 360 / CELLS_COUNT
let SPIN_SPEED = 100

carousel.style.animation = `spin ${SPIN_SPEED}s infinite linear`
const radius = Math.round((CELL_SIZE / 2) / Math.tan(Math.PI / CELLS_COUNT))

if (cells.length > 3) {
  carouselContainer.style.translate = '0 0'
  carouselContainer.style.scale = '1'
  setTimeout(() => {
    callFunctionXTimes(transformCell, cells.length, 100)
  }, 400);
}

function transformCell(index) {
  const cell = cells[index]
  const angle = CELL_ANGLE * (index + 2)
  cell.style.transform = `rotateY(${angle}deg) translateZ(${radius}px) rotateZ(-90deg)`
  cell.style.boxShadow = '5px 5px 10px #222'

  cell.addEventListener('click', () => {
    console.log(events[index])
    carouselContainer.style.translate = '50vw 0'
    setTimeout(() => {
      mainText.style.translate = '-300% -50%'
    }, 150)
  })
}

// EVENTS
carousel.addEventListener('mouseenter', () => {
  carousel.style.animationPlayState = 'paused'
  carousel.addEventListener('wheel', (e) => {
    scrollCarousel(e)
  })
})

carousel.addEventListener('mouseleave', () => {
  carousel.style.animationPlayState = 'running'
})

let rotateValue = 0

function scrollCarousel(e) {
  e.preventDefault()
  e.wheelDelta > 0 ? rotateValue += 2 : rotateValue -= 2
  carousel.style.transform = `rotateY(${rotateValue}deg)`
  console.log(rotateValue)
}
