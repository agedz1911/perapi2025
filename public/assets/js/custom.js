document.addEventListener("livewire:navigated", function () {
    document.getElementById("hamburger").addEventListener("click", function () {
        document.getElementById("offcanvas-menu").classList.add("show");
    });

    document
        .getElementById("close-menu")
        .addEventListener("click", function () {
            document.getElementById("offcanvas-menu").classList.remove("show");
        });

    document.addEventListener("click", function (event) {
        var offcanvasMenu = document.getElementById("offcanvas-menu");
        var hamburger = document.getElementById("hamburger");
        var closeMenu = document.getElementById("close-menu");

        if (
            !offcanvasMenu.contains(event.target) &&
            !hamburger.contains(event.target) &&
            !closeMenu.contains(event.target)
        ) {
            offcanvasMenu.classList.remove("show");
        }
    });

    // back to top
    let mybutton = document.getElementById("back-to-top");
    window.onscroll = function () {
        scrollFunction();
    };

    function scrollFunction() {
        if (mybutton != null) {
            if (
                document.body.scrollTop > 500 ||
                document.documentElement.scrollTop > 500
            ) {
                mybutton.style.display = "block";
            } else {
                mybutton.style.display = "none";
            }
        }
    }
});

function topFunction() {
    window.scrollTo({
        top: 0,
        behavior: "smooth",
    });
}
