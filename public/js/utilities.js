// MULTIPLE FUNCITON CALL WITH DELAY
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

// SEARCH TOGGLE CHECKBOXES
jQuery(document).ready(function () {
  jQuery('.checkbox-toggle').on('click', function () {
    const target = jQuery(this).attr('name').replace('checkbox-', '');
    if (jQuery(this).is(':checked')) {
      jQuery('#toggle-section-' + target).addClass('show');
    } else {
      jQuery('#toggle-section-' + target).removeClass('show');
    }
  })
});

