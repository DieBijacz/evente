// Export calendar function
// Set up calendar and navigation
export function initializeCalendar() {
  const currentDate = new Date();
  let selectedDate = new Date(currentDate.getFullYear(), currentDate.getMonth(), currentDate.getDate());
  generateCalendar(selectedDate.getMonth(), selectedDate.getFullYear());
  displayDate(currentDate);

  $('#next-month').click(function () {
    selectedDate.setMonth(selectedDate.getMonth() + 1);
    generateCalendar(selectedDate.getMonth(), selectedDate.getFullYear());
    displayDate(selectedDate);
  });

  $('#prev-month').click(function () {
    selectedDate.setMonth(selectedDate.getMonth() - 1);
    generateCalendar(selectedDate.getMonth(), selectedDate.getFullYear());
    displayDate(selectedDate);
  });
}

// Generate calendar for given month and year
function generateCalendar(month, year) {
  const firstDayOfMonth = new Date(year, month, 1);
  const daysInMonth = new Date(year, month + 1, 0).getDate();
  const $calendarDays = $('#calendar-days').empty();

  // Add empty list items for days before the first day of the month
  for (let i = 0; i < firstDayOfMonth.getDay(); i++) {
    $calendarDays.append($('<li></li>').addClass('empty'));
  }

  // Add list items for each day in the month
  for (let day = 1; day <= daysInMonth; day++) {
    const $day = $('<li></li>').text(day);
    if (firstDayOfMonth.getDay() === 5 || firstDayOfMonth.getDay() === 6) {
      $day.addClass('weekend');
    }
    $calendarDays.append($day);
    firstDayOfMonth.setDate(firstDayOfMonth.getDate() + 1);
  }

  // Add empty list items for days after the last day of the month
  for (let i = $calendarDays.children().length; i < 42; i++) {
    $calendarDays.append($('<li></li>').addClass('empty'));
  }
}

// Display selected date
function displayDate(date) {
  const months = ['JAN', 'FEB', 'MAR', 'APR', 'MAY', 'JUN', 'JUL', 'AUG', 'SEP', 'OCT', 'NOV', 'DEC'];
  $('#calendar-selected-day').text(date.getDate());
  $('#calendar-month').text(months[date.getMonth()]);
  $('#calendar-year').text(date.getFullYear());
}




