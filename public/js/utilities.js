export function callFunctionXTimes(fn, x, delay) {
  let count = 0
  const intervalId = setInterval(() => {
    fn(count)
    count++
    if (count === x) {
      clearInterval(intervalId)
    }
  }, delay)
}