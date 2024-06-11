document.addEventListener("DOMContentLoaded", () => {
    iniciarApp();
});

function iniciarApp() {
    aplicarAnimaciones();

}


function aplicarAnimaciones() {
    let secciones = document.querySelectorAll(".seccion");
    let animate_right = document.querySelectorAll(".animate-right");
    let animate_left = document.querySelectorAll(".animate-left");
    let animate_bottom = document.querySelectorAll(".animate-bottom");
    let animate_top = document.querySelectorAll('.animate-top');

    function mostrarAnimaciones() {
        let scroll = window.scrollY;
        let windowHeight = window.innerHeight;

        // Aplica animaciones a las secciones
        if (secciones.length > 0) {
            secciones.forEach(function (seccion) {
                let offsetTop = seccion.offsetTop;
                let seccionHeight = seccion.offsetHeight;

                if (scroll + windowHeight >= offsetTop && scroll <= offsetTop + seccionHeight) {
                    seccion.classList.add("animate-fade", "animate-once", "animate-duration-[600ms]", "animate-delay-200", "animate-ease-in", "animate-normal");
                }
            });
        }

        // Izquierda a derecha
        if (animate_right.length > 0) {
            animate_right.forEach(function (animate) {
                let offsetTop = animate.offsetTop;
                let animateHeight = animate.offsetHeight;

                if (scroll + windowHeight >= offsetTop && scroll <= offsetTop + animateHeight) {
                    animate.classList.add("animate-fade-right", "animate-ease-in-out");
                }
            });
        }

        // Derecha a izquierda
        if (animate_left.length > 0) {
            animate_left.forEach(function (animate) {
                let offsetTop = animate.offsetTop;
                let animateHeight = animate.offsetHeight;

                if (scroll + windowHeight >= offsetTop && scroll <= offsetTop + animateHeight) {
                    animate.classList.add("animate-fade-left", "animate-ease-in-out");
                }
            });
        }

        // De arriba hacia abajo
        if (animate_bottom.length > 0) {
            animate_bottom.forEach(function (animate) {
                let offsetTop = animate.offsetTop;
                let animateHeight = animate.offsetHeight;

                if (scroll + windowHeight >= offsetTop && scroll <= offsetTop + animateHeight) {
                    animate.classList.add("animate-fade-down", "animate-ease-in-out");
                }
            });
        }
        // De abajo hacia arriba
        if (animate_top.length > 0) {
            animate_top.forEach((animate) => {
                let offsetTop = animate.offsetTop;
                let animateHeight = animate.offsetHeight;

                if (scroll + windowHeight >= offsetTop && scroll <= offsetTop + animateHeight) {
                    animate.classList.add("animate-fade-up", "animate-ease-in-out");
                }
            });
        }
    }

    // Añade un event listener para el scroll
    window.addEventListener("scroll", mostrarAnimaciones);

    // Llama a mostrarAnimaciones() para aplicar animaciones cuando la página se carga inicialmente
    mostrarAnimaciones();
}
