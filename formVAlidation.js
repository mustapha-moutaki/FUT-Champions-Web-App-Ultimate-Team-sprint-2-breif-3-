
function formValidation() {
    let form = document.getElementById('playerForm');
    let inputsErrors = form.querySelectorAll('.error');

    inputsErrors.forEach((err) => (err.textContent = ''));
    inputsErrors.forEach((err) => (err.style.color = 'red'));
    inputsErrors.forEach((err) => (err.style.fontStyle = 'italic'));

    let isValid = true;

    let nameRegex = /^[a-zA-Z]+\s[a-zA-Z]+(\s[a-zA-Z]+)?$/;
    if (playerName.value.trim() === '') {
        document.getElementById('nameError').textContent = "Name is required.";
        isValid = false;
    } else if (!nameRegex.test(playerName.value)) {
        document.getElementById('nameError').textContent = "Please enter the complete name, ex: John Doe.";
        isValid = false;
    }

    if (selected.value === '' || selected.value === 'selected') {
        document.getElementById('positionError').textContent = "Please select a position.";
        isValid = false;
    }

    if (nationality.value === '' || nationality.value === '0') {
        document.getElementById('nationalityError').textContent = "Please select a country.";
        isValid = false;
    }

    let clubRegex = /^[a-zA-Z]\s+(\s[a-zA-Z]\s+)?$/;
    if (clubName.value.trim() === '') {
        document.getElementById('clubError').textContent = "Club name is required.";
        isValid = false;
    } else if (!clubRegex.test(clubName.value)) {
        document.getElementById('clubError').textContent = "Please enter two words at most";
        isValid = false;
    }

    if (+rating.value < 10 || +rating.value > 100 || rating.value === '') {
        document.getElementById('ratingError').textContent = "Please enter a number between 10 and 100.";
        isValid = false;
    }


//images
const photoData = document.getElementById('photo').getAttribute('data-photo');
const flagData = document.getElementById('flag').getAttribute('data-photo');
const clubLogoData = document.getElementById('logo').getAttribute('data-photo');

if (!photoData) {
    document.getElementById('photoError').textContent = "Please select a photo for the player.";
    isValid = false;
}
if (!flagData) {
    document.getElementById('flagError').textContent = "Please select a country flag .";
    isValid = false;
}
if (!clubLogoData) {
    document.getElementById('clublogoError').textContent = "Please select a club logo photo.";
    isValid = false;
}


    // --players--
    if (selected.value.toLowerCase() !== 'gk') {
        if (+pace.value < 10 || +pace.value > 100 || pace.value === '') {
            document.getElementById('paceError').textContent = "Please enter a number between 10 and 100.";
            isValid = false;
        }
        if (+shooting.value < 10 || +shooting.value > 100 || shooting.value === '') {
            document.getElementById('shotingError').textContent = "Please enter a number between 10 and 100.";
            isValid = false;
        }
        if (+passing.value < 10 || +passing.value > 100 || passing.value === '') {
            document.getElementById('passingError').textContent = "Please enter a number between 10 and 100.";
            isValid = false;
        }
        if (+dribbling.value < 10 || +dribbling.value > 100 || dribbling.value === '') {
            document.getElementById('dribblingError').textContent = "Please enter a number between 10 and 100.";
            isValid = false;
        }
        if (+defending.value < 10 || +defending.value > 100 || defending.value === '') {
            document.getElementById('defendingError').textContent = "Please enter a number between 10 and 100.";
            isValid = false;
        }
        if (+physical.value < 10 || +physical.value > 100 || physical.value === '') {
            document.getElementById('PhysicalError').textContent = "Please enter a number between 10 and 100.";
            isValid = false;
        }
        // ----goal keppper---
    } else {
        if (+diving.value < 10 || +diving.value > 100 || diving.value === '') {
            document.getElementById('divingError').textContent = "Please enter a number between 10 and 100.";
            isValid = false;
        }
        if (+handling.value < 10 || +handling.value > 100 || handling.value === '') {
            document.getElementById('handlingError').textContent = "Please enter a number between 10 and 100.";
            isValid = false;
        }
        if (+kicking.value < 10 || +kicking.value > 100 || kicking.value === '') {
            document.getElementById('kickingError').textContent = "Please enter a number between 10 and 100.";
            isValid = false;
        }
        if (+reflexes.value < 10 || +reflexes.value > 100 || reflexes.value === '') {
            document.getElementById('reflexesError').textContent = "Please enter a number between 10 and 100.";
            isValid = false;
        }
        if (+speed.value < 10 || +speed.value > 100 || speed.value === '') {
            document.getElementById('speedError').textContent = "Please enter a number between 10 and 100.";
            isValid = false;
        }
        if (+positioning.value < 10 || +positioning.value > 100 || positioning.value === '') {
            document.getElementById('positioningError').textContent = "Please enter a number between 10 and 100.";
            isValid = false;
        }
    }
    let option1 = document.querySelector('input[name="option"]:checked').value
    if(option1 == ''){
        document.getElementById('optionError').textContent = "Please select a position.";
        isValid
    }

    return isValid;
}
