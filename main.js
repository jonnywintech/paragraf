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

//// polisa dodatni korisnici

const additionalUsersSwitch = document.querySelector('.forma__checkbox');
const addUsersButton = document.querySelector('.forma__btn--custom');
const folderToInject = document.querySelector('.forma__additional-fields');
const containerWithImage = document.querySelector('.forma__image');
const removeBtns = document.querySelector('.form__btn--close');

let personCounter = 1;

additionalUsersSwitch.addEventListener('change', (e) => {
  if (e.target.checked) {
    addUsersButton.style.display = 'block';
    folderToInject.innerHTML = defaultElement;
    containerWithImage.style.backgroundImage = '';
  } else {
    addUsersButton.style.display = 'none';
    containerWithImage.style.backgroundImage = "url('assets/contact-bg.png')";
    folderToInject.innerHTML = '';
    personCounter = 1;
  }
});

addUsersButton.addEventListener('click', () => {
  personCounter += 1;
  const div = document.createElement('div');
  div.innerHTML = additionalInputElement(personCounter);
  div.classList.add('forma__wrapper');
  folderToInject.append(div);
});

const additionalInputElement = (counter) => {
  return `
  <span class="forma__person" >Osoba ${counter}</span>
    <div class="forma__group">
      <label class="forma__label" for="full-name">Ime i Prezime</label>
      <input
        type="text"
        name="grupno_ime_i_prezime[]"
        id="full-name"
        class="forma__input"
        placeholder="Petar Petrovic"
        required
        pattern="^[a-zA-Z]{4,}(?: [a-zA-Z]+){0,2}$" />
    </div>
    <div class="forma__group">
      <label class="forma__label" for="date-of-birth">Datum Rodjenja</label>
      <input
        type="date"
        name="grupno_datum_rodjenja[]"
        id="date-of-birth"
        class="forma__input"
        placeholder="20/11/1998"
        required
        pattern="/^(0[1-9]|1[0-2])\/(0[1-9]|[12][0-9]|3[01])\/(19|20)\d\d$/" />
    </div>
    <div class="forma__group">
      <label class="forma__label" for="passport-number">Broj Pasosa</label>
      <input
        type="number"
        name="grupno_broj_pasosa[]"
        id="passport-number"
        class="forma__input"
        placeholder="0012371238719"
        required
        pattern="/^[0-9]+$/" />
    </div>
    <button class="btn forma__btn forma__btn--close" onclick="this.parentElement.remove()">Ukloni</button>
  `;
};

const defaultElement = `
<div class="forma__wrapper">
    <span class="forma__person" >Osoba 1</span>
    <div class="forma__group">
      <label class="forma__label" for="full-name">Ime i Prezime</label>
      <input
        type="text"
        name="grupno_ime_i_prezime[]"
        id="full-name"
        class="forma__input"
        placeholder="Petar Petrovic"
        required
        pattern="^[a-zA-Z]{4,}(?: [a-zA-Z]+){0,2}$" />
    </div>
    <div class="forma__group">
      <label class="forma__label" for="date-of-birth">Datum Rodjenja</label>
      <input
        type="date"
        name="grupno_datum_rodjenja[]"
        id="date-of-birth"
        class="forma__input"
        placeholder="20/11/1998"
        required
        pattern="/^(0[1-9]|1[0-2])\/(0[1-9]|[12][0-9]|3[01])\/(19|20)\d\d$/" />
    </div>
    <div class="forma__group">
      <label class="forma__label" for="passport-number">Broj Pasosa</label>
      <input
        type="number"
        name="grupno_broj_pasosa[]"
        id="passport-number"
        class="forma__input"
        placeholder="0012371238719"
        required
        pattern="/^[0-9]+$/" />
    </div>
</div>`
