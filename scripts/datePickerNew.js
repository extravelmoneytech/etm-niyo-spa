window.initializeDatePicker = function (config = {}) {
    const datePicker = document.getElementById('datePicker');

    // Check if the date picker is already initialized
    if (datePicker.dataset.initialized) {
        return;
    }

    // Mark the date picker as initialized
    datePicker.dataset.initialized = true;

    const onSelect = config.onSelect || function () { };

    const selector = document.querySelector('#datePickerSelector');
    const calendar = document.getElementById('calendar');
    const calendarDays = document.getElementById('calendarDays');
    const monthYear = document.getElementById('monthYear');
    const prevMonth = document.getElementById('prevMonth');
    const nextMonth = document.getElementById('nextMonth');

    let selectedDate = null; // Changed to null initially
    let currentMonth = new Date().getMonth();
    let currentYear = new Date().getFullYear();

    const months = [
        'January', 'February', 'March', 'April', 'May', 'June',
        'July', 'August', 'September', 'October', 'November', 'December'
    ];

    // Set initial states
    document.querySelector('#selectedDate').textContent = 'Select a date';
    document.querySelector('#selectedDate').style.opacity = '0.5'; // Add initial opacity
    

    function updateDatePicker(d) {
        const date = new Date(d);
        const day = String(date.getDate()).padStart(2, '0');
        const month = String(date.getMonth() + 1).padStart(2, '0');
        const year = date.getFullYear();
        const formattedDate = `${day}/${month}/${year}`;
        document.querySelector('#selectedDate').textContent = formattedDate;
        datePicker.setAttribute('value', `${day}-${month}-${year}`);
        
        // Update opacity when date is selected
        document.querySelector('#selectedDate').style.opacity = '1';
    }

    function renderCalendar() {
        monthYear.textContent = `${months[currentMonth]} ${currentYear}`;
        calendarDays.innerHTML = '';

        const firstDayOfMonth = new Date(currentYear, currentMonth, 1).getDay();
        const daysInMonth = new Date(currentYear, currentMonth + 1, 0).getDate();
        const firstDayIndex = firstDayOfMonth === 0 ? 6 : firstDayOfMonth - 1;

        let day = 1;
        for (let i = 0; i < 6; i++) {
            let row = document.createElement('tr');

            for (let j = 0; j < 7; j++) {
                let cell = document.createElement('td');

                if (i === 0 && j < firstDayIndex) {
                    cell.innerHTML = '<span></span>';
                } else if (day > daysInMonth) {
                    cell.innerHTML = '<span></span>';
                } else {
                    let span = document.createElement('span');
                    span.textContent = day;

                    const cellDate = `${String(day).padStart(2, '0')}/${String(currentMonth + 1).padStart(2, '0')}/${currentYear}`;
                    cell.setAttribute('data-value', cellDate);
                    
                    const today = new Date();
                    today.setHours(0, 0, 0, 0);
                    const cellDateObj = new Date(currentYear, currentMonth, day);
                    
                    const maxDate = new Date(today);
                    maxDate.setDate(today.getDate() + 60);
                    
                    if (cellDateObj < today || cellDateObj > maxDate) {
                        cell.setAttribute('disabled', '');
                        cell.classList.add('disabled-date');
                    }

                    // Update selected date styling
                    if (
                        selectedDate &&
                        day === selectedDate.getDate() &&
                        currentMonth === selectedDate.getMonth() &&
                        currentYear === selectedDate.getFullYear()
                    ) {
                        cell.classList.add('selected');
                    }

                    const currentDay = day;

                    cell.addEventListener('click', () => {
                        if (cell.hasAttribute('disabled')) {
                            return;
                        }
                        document.querySelectorAll('.selected').forEach(el => el.classList.remove('selected'));
                        selectedDate = new Date(currentYear, currentMonth, currentDay);
                        updateDatePicker(selectedDate);
                        cell.classList.add('selected');
                        calendar.classList.remove('calendar-visible');
                        calendar.classList.add('calendar-hidden');
                        onSelect(selectedDate);
                    });

                    cell.appendChild(span);
                    day++;
                }

                row.appendChild(cell);
            }

            calendarDays.appendChild(row);
        }
    }

    window.getFormatedDate = function (date) {
        try {
            const dateObj = date instanceof Date ? date : new Date(date);

            if (isNaN(dateObj.getTime())) {
                throw new Error('Invalid date');
            }

            const day = String(dateObj.getDate()).padStart(2, '0');
            const month = String(dateObj.getMonth() + 1).padStart(2, '0');
            const year = dateObj.getFullYear();

            return `${day}-${month}-${year}`;
        } catch (error) {
            console.warn('Error formatting date:', error);
            return null;
        }
    }


    selector.addEventListener('click', () => {
        console.log(calendar.classList,'calendar.classList')
        calendar.classList.toggle('calendar-visible');
        calendar.classList.toggle('calendar-hidden');
    });

    prevMonth.addEventListener('click', () => {
        currentMonth--;
        if (currentMonth < 0) {
            currentMonth = 11;
            currentYear--;
        }
        renderCalendar();
    });

    nextMonth.addEventListener('click', () => {
        currentMonth++;
        if (currentMonth > 11) {
            currentMonth = 0;
            currentYear++;
        }
        renderCalendar();
    });

    renderCalendar();
};