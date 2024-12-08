document.getElementById('contactForm').addEventListener('submit', function(event){
    event.preventDefault();
    let isValid = true; 

    const name = document.getElementById('name').value;
    const email = document.getElementById('email').value;
    const phone = document.getElementById('phone').value;
    const message = document.getElementById('message').value;

    const nameRegex = /^[A-Za-z\s]+$/;
    if(!nameRegex.test(name)){
        alert('Please enter a valid name(only letters and spaces).');
        isValid = false;
    }

const emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
if(!emailRegex.test(email)){
    alert('Please enter a valid email address.');
    isValid = false;
}
const phoneRegex = /^[0-9]{9}$/;
if(phone && !phoneRegex.test(phone)){
    alert('Please enter a valid phone number (9 digits).');
    isValid = false;
}
if(!message.trim()){
    alert('Please enter a message.');
    isValid = false;
}else if(message.length<10){
    alert('Message must be at least 10 character long.');
    isValid = false;

}
if(isValid){
    alert('Form submitted successfully!')
    window.location.href = "index.html";
}
})


