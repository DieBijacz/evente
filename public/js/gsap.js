export function gsapAnimations() {
  gsap.from('.left', { opacity: 0, x: '-100%', duration: 1, ease: "slow(0.7, 0.7, false)" })
  gsap.from('.right', { opacity: 0, x: '-200%', duration: 2, ease: "slow(0.7, 0.7, false)" })
  gsap.from('.card', { scale: 3, duration: 1, ease: 'slow(0.7, 0.7, false)', delay: 2 })
}
