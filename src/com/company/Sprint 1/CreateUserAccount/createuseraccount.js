function validateForm(form) {


    // const form = document.getElementById('form');
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
    const errorElement = document.getElementById('error')


    let messages = []
    if (fname.value.trim() == '') {
        alert('First Name Field Blank');
        fname.focus();
        return false;
    }
    if (lname.value.trim() == '') {
        alert('First Name Field Blank');
        lname.focus();
        return false;
    }

    if (messages.length > 0) {
        e.preventDefault();
        errorElement.innerText = messages.join(', ');
    }
    return true;
    // checkInputs();
}