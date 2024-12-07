document.getElementById('myform').addEventListener('submit' , function (event) {
    event.preventDefault();

    let errors = [];

    let user = document.getElementById('user').value.trim();
    let pass = document.getElementById('pass').value;

    let userPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    if(!userPattern.test(user)) {
        errors.push("You must enter a valid email address.");

    }

    if(pass.length < 6) {
        if(errors.length === 0) {
            errors.push("The password must contain at least 6 characters.");
    }
}
let errorsContainer = document.getElementById('errors');
if(errors.length > 0) {
    errorsContainer.innerHTML = errors[0];
    errorsContainer.className = 'error';

}  else {
    window.location.href = 'index.html';
}

});
