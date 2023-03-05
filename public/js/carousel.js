import { callFunctionXTimes } from './utilities.js'

export function carousel() {
  const cells = document.querySelectorAll('.cell')
  const carousel = document.querySelector('.carousel')
  const carouselContainer = document.querySelector('.carousel-container')
  const mainText = document.querySelector('.main-text')
  let selectedCell = undefined
  const hero = document.querySelector('.hero')
  const showCarousel = true

  const CELLS_COUNT = cells.length
  const CELL_SIZE = 150
  const CELL_ANGLE = 360 / CELLS_COUNT
  let SPIN_SPEED = 200
  const radius = Math.round((CELL_SIZE / 2) / Math.tan(Math.PI / CELLS_COUNT))

  setTimeout(() => {
    runCarousel()
  }, 1000);

  if (showCarousel) {
    carouselContainer.style.translate = '0 0'
  } else {
    carouselContainer.style.translate = '100vw 0'
  }

  function runCarousel() {
    carousel.style.animation = `spin ${SPIN_SPEED}s infinite linear`

    if (cells.length > 3) {
      // carouselContainer.style.scale = '1'
      setTimeout(() => {
        callFunctionXTimes(transformCell, cells.length, 100)
      }, 400);
    }

    function transformCell(index) {
      const cell = cells[index]
      const angle = CELL_ANGLE * (index + 2)
      cell.style.transform = `rotateY(${angle}deg) translateZ(${radius}px) rotateZ(-90deg)`

      cell.addEventListener('click', () => {
        console.log(cells[index])
        selectedCell = cells[index]
        selectedCell.style.transform = `rotateY(${angle}deg) translateZ(${radius}px) rotateZ(-90deg) translate(-400px)`
        setTimeout(() => {
          carousel.removeChild(selectedCell)
          hero.appendChild(selectedCell)
          selectedCell.style.transform = ``
          selectedCell.classList.add('selected-cell')
          selectedCell.style.animation = `scaleImage .3s linear`
        }, 200);
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
  }
}
