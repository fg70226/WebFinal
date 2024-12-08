document.getElementById('myform').addEventListener('submit', function (event) {
    event.preventDefault(); 

    let errors = [];
    
    let name = document.getElementById('name').value.trim(); 
    let surname = document.getElementById('surname').value.trim();
    let email = document.getElementById('email').value.trim(); 
    let password = document.getElementById('password').value.trim();
    let date = document.getElementById('date').value;

    let namePattern = /^[a-zA-Z]{3,10}$/; 
    let surnamePattern = /^[a-zA-Z]{3,15}$/; 
    let emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/; 
    let passwordPattern = /^(?=.*[A-Z])(?=.*[a-z])(?=.*\d).{6,}$/; 

    if (!namePattern.test(name)) {
        errors.push("Name should be 3-10 characters long and contain only letters.");
    }

    if (!surnamePattern.test(surname)) {
        errors.push("Surname should be 3-15 characters long and contain only letters.");
    }

    if (!emailPattern.test(email)) {
        errors.push("You must enter a valid email address.");
    }

    if (!passwordPattern.test(password)) {
        errors.push("Password must be at least 6 characters, include an uppercase letter, a lowercase letter, and a number.");
    }

    if (!date) {
        errors.push("You must select a date.");
    }

    let errorsContainer = document.getElementById('errors');
    if (errors.length > 0) {
        errorsContainer.innerHTML = errors.join("<br>");
        errorsContainer.className = 'error'; 
    } else {
        errorsContainer.innerHTML = "Form submitted successfully!";
        errorsContainer.style.color = "green";
    }
    setTimeout(() =>{
        window.location.href = "index.html";
    },1500)
});
