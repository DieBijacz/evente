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

  runCarousel()

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
      carousel.style.animationPlayState = 'paused';
      carousel.addEventListener('wheel', scrollCarousel);
    });

    carousel.addEventListener('mouseleave', () => {
      carousel.style.animationPlayState = 'running';
      carousel.removeEventListener('wheel', scrollCarousel);
    });


    function scrollCarousel(e) {
      e.preventDefault();

      // Get the current rotation value of the carousel
      const currentRotation = parseInt(carousel.style.transform.split('rotateY(')[1].split('deg)')[0]);

      // Calculate the new rotation value based on the direction of the scroll
      const newRotation = e.deltaY > 0 ? currentRotation + 5 : currentRotation - 5;

      // Apply the new rotation value to the carousel
      carousel.style.transform = `translateZ(-${radius}px) rotateY(${newRotation}deg)`;
    }


  }
}
