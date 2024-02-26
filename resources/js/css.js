document.addEventListener("DOMContentLoaded", () => {
    iniciarApp();
});

function iniciarApp() {
    aplicarAnimaciones();
    navegacionFija();
   
}


function navegacionFija() {
   const barraNavegacion = document.querySelector('.navegacion');
   const servicios = document.querySelector('.nuestros-servicios');

   window.addEventListener('scroll', () => {
        // Obtener la posición vertical del borde inferior del apartado de servicios
        const serviciosBottom = servicios.getBoundingClientRect().bottom;

        // Si el borde del apartado de servicios está arriba de la parte superior de la ventana
        if(serviciosBottom < 0) {
            barraNavegacion.classList.add('fixed', 'top-0', 'left-0', 'z-50', 'bg-blue-800', 'animate-fade-down', 'shadow-md');
        } else {
            // Si el usuario vuelve hacia arriba quitar las clases que hacen la barra fija
            barraNavegacion.classList.remove('fixed', 'top-0', 'left-0', 'z-50', 'bg-blue-800', 'animate-fade-down', 'shadow-md' )
        }
   })
}



function aplicarAnimaciones() {
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
}