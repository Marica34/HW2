function checkName(event) {
    const input = event.currentTarget;
    
    /* if(formStatus[input.name] = /^[a-zA-Z]+$/.test(input.value)) { */
    if (formStatus[input.name] = input.value.length > 0) {
        input.parentNode.parentNode.classList.remove('errorj');
    } else {
        input.parentNode.parentNode.classList.add('errorj');
    }
    
    checkForm();
}

function jsonCheckUsername(json) {
    // Controllo il campo exists ritornato dal JSON
    if (formStatus.username = !json.exists) {
        document.querySelector('.cf span').textContent = "";
        document.querySelector('.cf').classList.remove('errorj');
    } else {
        document.querySelector('.cf span').textContent = "Codice fiscale già utilizzato";
        document.querySelector('.cf').classList.add('errorj');
    }
    checkForm();
}

function jsonCheckEmail(json) {
    // Controllo il campo exists ritornato dal JSON
    if (formStatus.email = !json.exists) {
        document.querySelector('.email span').textContent = "";
        document.querySelector('.email').classList.remove('errorj');
    } else {
        document.querySelector('.email span').textContent = "Email già esistente";
        document.querySelector('.email').classList.add('errorj');
    }
    checkForm();
}

function fetchResponse(response) {
    if (!response.ok) return null;
    return response.json();
}

function checkUsername(event) {
    const input = document.querySelector('.cf input');

    if(!/^[a-zA-Z0-9_]{1,16}$/.test(input.value)) {
        input.parentNode.parentNode.querySelector('span').textContent = "Sono ammesse lettere, numeri  Massimo 16";
        input.parentNode.parentNode.classList.add('errorj');
        formStatus.username = false;
        checkForm();
    } else {
        fetch(route('username',input.value)).then(fetchResponse).then(jsonCheckUsername);
    }    
}

function checkEmail(event) {
    const emailInput = document.querySelector('.email input');
    //caratteri consentiti
    if(!/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(String(emailInput.value).toLowerCase())) {
        document.querySelector('.email span').textContent = "Email non valida";
        document.querySelector('.email').classList.add('errorj');
        formStatus.email = false;
        checkForm();
    } else {
        fetch(route('email',emailInput.value.toLowerCase())).then(fetchResponse).then(jsonCheckEmail);
    }
}

function checkPassword(event) {
    const passwordInput = document.querySelector('.password input');
    if (formStatus.password = passwordInput.value.length >= 8) {
        document.querySelector('.password').classList.remove('errorj');
    } else {
        document.querySelector('.password').classList.add('errorj');
    }
    checkForm();
}

function checkConfirmPassword(event) {
    const confirmPasswordInput = document.querySelector('.confirm_password input');
    if (formStatus.confirmPassord = confirmPasswordInput.value === document.querySelector('.password input').value) {
        document.querySelector('.confirm_password').classList.remove('errorj');
    } else {
        document.querySelector('.confirm_password').classList.add('errorj');
    }
    checkForm();
}

function clickSelectFile(event) {
    upload_original.click();
}


function checkForm() {
    console.log(formStatus);
    // Controlla consenso dati personali
    document.getElementById('submit').disabled = !document.querySelector('.allow input').checked || 
    // Controlla che tutti i campi siano pieni
    Object.keys(formStatus).length !== 7 || 
    // Controlla che i campi non siano false
    Object.values(formStatus).includes(false);
}

const formStatus = {'upload': true};
document.querySelector('.nome input').addEventListener('blur', checkName);
document.querySelector('.cognome input').addEventListener('blur', checkName);
document.querySelector('.cf input').addEventListener('blur', checkUsername);
document.querySelector('.email input').addEventListener('blur', checkEmail);
document.querySelector('.password input').addEventListener('blur', checkPassword);
document.querySelector('.confirm_password input').addEventListener('blur', checkConfirmPassword);
document.querySelector('.allow input').addEventListener('change', checkForm);

if (document.querySelector('.error') !== null) {
    checkUsername(); checkPassword(); checkConfirmPassword(); checkEmail();
    document.querySelector('.nome input').dispatchEvent(new Event('blur'));
    document.querySelector('.cognome input').dispatchEvent(new Event('blur'));
}