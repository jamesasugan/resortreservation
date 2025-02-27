function blurNav() {
    const navbar = document.querySelector("nav");

    navbar.classList.add("transition-all", "duration-300");

    window.addEventListener("scroll", function () {
        if (window.scrollY > 50) {
            navbar.classList.add("backdrop-blur-sm", "bg-black/50", "shadow-xl", "shadow-lg", "shadow-black/50");
        } else {
            navbar.classList.remove("backdrop-blur-sm", "bg-black/50", "shadow-xl", "shadow-lg", "shadow-black/50");
        }
    });
}

blurNav();