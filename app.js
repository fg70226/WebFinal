
function toggleMenu() {
    const menu = document.querySelector('.menu-nav ul');
    if (menu.style.display === 'none' || menu.style.display === '') {
        menu.style.display = 'block'; 
    } else {
        menu.style.display = 'none'; 
    }
}

document.addEventListener('click', function (event) {
    const menu = document.querySelector('.menu-nav ul');
    const toggleButton = document.querySelector('.menu-toggle');

    
    if (!menu.contains(event.target) && !toggleButton.contains(event.target)) {
        menu.style.display = 'none'; 
    }
});

