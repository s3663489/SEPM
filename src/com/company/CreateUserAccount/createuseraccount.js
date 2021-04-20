const form = document.getElementById('form');
const fname = document.getElementById('fname');
const lname = document.getElementById('lname');
const hours = document.getElementById('hours');
const pname = document.getElementById('pname');
const pnumber = document.getElementById('pnumber');
const address = document.getElementById('address');
const city = document.getElementById('city');
const postcode = document.getElementById('postcode');
const state = document.getElementById('state');
const email = document.getElementById('email');

form.addEventListener('submit', (e) =>{
    e.preventDefault();

    checkInputs();
});

function checkInputs() {
    //get the values from te inputs
    const fnameValue = fname.value.trim();
    const lnameValue = lname.value.trim();
    const hoursValue =  hours.value.trim();
    const pnameValue = pname.value.trim();
    const pnumberValue = pnumber.value.trim();
    const addressValue = address.value.trim();
    const cityValue = city.value.trim();
    const postcodeValue = postcode.value.trim();
    const stateValue = state.value.trim();
    const emailValue = email.value.trim();

    if(fnameValue === '') {
        setErrorFor(fname, 'Field cannot be blank');
    }
    else {
        setSuccessFor(fname);
    }
    if(lnameValue === '') {
        setErrorFor(lname, 'Field cannot be blank');
    }
    else {
        setSuccessFor(lname);
    }
    if(hoursValue === '') {
        setErrorFor(hours, 'Field cannot be blank');
    }
    else {
        setSuccessFor(hours);
    }
    if(pnameValue === '') {
        setErrorFor(pname, 'Field cannot be blank');
    }
    else {
        setSuccessFor(pname);
    }
    if(pnumberValue === '') {
        setErrorFor(pnumber, 'Field cannot be blank');
    }
    else {
        setSuccessFor(pnumber);
    }
    if(addressValue === '') {
        setErrorFor(address, 'Field cannot be blank');
    }
    else {
        setSuccessFor(address);
    }
    if(cityValue === '') {
        setErrorFor(city, 'Field cannot be blank');
    }
    else {
        setSuccessFor(city);
    }
    if(postcodeValue === '') {
        setErrorFor(postcode, 'Field cannot be blank');
    }
    else {
        setSuccessFor(postcode);
    }
    if(stateValue === '') {
        setErrorFor(state, 'Field cannot be blank');
    }
    else {
        setSuccessFor(state);
    }
    if(emailValue === '') {
        setErrorFor(email, 'Field cannot be blank');
    }
    else if (!isEmail(emailValue)){
        setErrorFor(email, 'Email is not valid')
    }

        else {
        setSuccessFor(email);
    }


    function setErrorFor(input, message){
        const inputGroup = input.parentElement;
        const small = inputGroup.querySelector('small');

        small.innerText = message;
        inputGroup.className = 'input-group error';

    }

    function setSuccessFor(input) {
        const inputGroup = input.parentElement;
        inputGroup.className = 'form-control success';
    }

    function isEmail(email) {
        return /(?:[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*|"(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21\x23-\x5b\x5d-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])*")@(?:(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?|\[(?:(?:(2(5[0-5]|[0-4][0-9])|1[0-9][0-9]|[1-9]?[0-9]))\.){3}(?:(2(5[0-5]|[0-4][0-9])|1[0-9][0-9]|[1-9]?[0-9])|[a-z0-9-]*[a-z0-9]:(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21-\x5a\x53-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])+)\])/.test(email);
    }
}





