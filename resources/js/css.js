document.addEventListener("DOMContentLoaded", () => {
    let secciones = document.querySelectorAll(".seccion");

    function mostrarAnimaciones() {
        let scroll = window.scrollY ;
        let windowHeight = window.innerHeight;

        secciones.forEach(function(seccion) {
            let offsetTop = seccion.offsetTop;
            let seccionHeight = seccion.offsetHeight;

            if (scroll + windowHeight >= offsetTop && scroll <= offsetTop + seccionHeight) {
                seccion.classList.add("animate-fade", "animate-once", "animate-duration-[600ms]", "animate-delay-200", "animate-ease-in", "animate-normal");
            }
        });
    }

    window.addEventListener("scroll", function() {
        mostrarAnimaciones();
    });

    // Llama a mostrarAnimaciones() para aplicar animaciones cuando la página se carga inicialmente
    mostrarAnimaciones();
});
