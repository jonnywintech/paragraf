const dateFromInput = document.querySelector('.forma__input--from');
const dateToInput = document.querySelector('.forma__input--to');
const valueDisplay = document.querySelector('.forma__element');

function calculateDateDifference() {
    const dateFromValue = dateFromInput.value;
    const dateToValue = dateToInput.value;

    
    if (dateFromValue && dateToValue) {
        const dateFrom = new Date(dateFromValue);
        const dateTo = new Date(dateToValue);

        const timeDifference = dateTo.getTime() - dateFrom.getTime();

        const dayDifference = Math.ceil(timeDifference / (1000 * 3600 * 24));

        valueDisplay.textContent = dayDifference + 1;
    } else {
        valueDisplay.textContent = '0';
    }
}

dateFromInput.addEventListener('change', calculateDateDifference);
dateToInput.addEventListener('change', calculateDateDifference);
