document.getElementById('hamburger').addEventListener('click', function () {
    document.getElementById('offcanvas-menu').classList.add('show');
});

document.getElementById('close-menu').addEventListener('click', function () {
    document.getElementById('offcanvas-menu').classList.remove('show');
});

document.addEventListener('click', function (event) {
    var offcanvasMenu = document.getElementById('offcanvas-menu');
    var hamburger = document.getElementById('hamburger');
    var closeMenu = document.getElementById('close-menu');

    if (!offcanvasMenu.contains(event.target) && !hamburger.contains(event.target) && !closeMenu.contains(event.target)) {
        offcanvasMenu.classList.remove('show');
    }
});