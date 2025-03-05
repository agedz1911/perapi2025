document.getElementById("hamburger").addEventListener("click", function () {
    document.getElementById("offcanvas-menu").classList.add("show");
});

document.getElementById("close-menu").addEventListener("click", function () {
    document.getElementById("offcanvas-menu").classList.remove("show");
});
