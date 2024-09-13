// Libraries
window.bootstrap = require("bootstrap/dist/js/bootstrap.bundle.js");

// Local Scripts
import "../src/smooth-scrolling";
import "../src/form-vacantes";
import "../src/form-proveedores-y-contratistas";
import "../src/swipers";
import "../src/aos";
import "../src/modals";

// Header
document.addEventListener("DOMContentLoaded", function () {
    // Cache the DOM element containing the navbar
    var header = document.getElementById("navbar");

    function updateScroll() {
        var scroll = window.pageYOffset || document.documentElement.scrollTop;

        if (scroll >= 1) {
            header.classList.add("navbar-scroll", "navbar-scroll-interna");
        } else {
            header.classList.remove("navbar-scroll", "navbar-scroll-interna");
        }
    }

    window.addEventListener("scroll", updateScroll);
    updateScroll();
});

// Function that closes menu
function cerrarMenu() {
    var menu = document.querySelector(".menu");
    var navbar = document.getElementById("navbar");
    var backdrop = document.getElementById("backdrop");

    if (menu) {
        menu.classList.remove("menu-abierto");
    }
    if (navbar) {
        navbar.classList.remove("opacity-0");
    }
    if (backdrop) {
        backdrop.classList.remove("backdrop-opacity-1");
    }
}

// Navigation menu
document.getElementById("mburger").addEventListener("click", function (e) {
    e.stopPropagation();
    var menu = document.querySelector(".menu");
    var navbar = document.getElementById("navbar");
    var backdrop = document.getElementById("backdrop");

    menu.classList.toggle("menu-abierto");
    navbar.classList.toggle("opacity-0");
    backdrop.classList.toggle("backdrop-opacity-1");
});

document.querySelector(".menu").addEventListener("click", function (e) {
    e.stopPropagation();
});

document.body.addEventListener("click", function (e) {
    var menu = document.querySelector(".menu");
    var navbar = document.getElementById("navbar");
    var backdrop = document.getElementById("backdrop");

    menu.classList.remove("menu-abierto");
    navbar.classList.remove("opacity-0");
    backdrop.classList.remove("backdrop-opacity-1");
});

const btnCerrarMenu = document.getElementById("cerrar-menu");

if (btnCerrarMenu) {
    btnCerrarMenu.addEventListener("click", cerrarMenu, false);
}

const btnLogo = document.getElementById("cerrar-menu");

if (btnLogo) {
    btnLogo.addEventListener("click", cerrarMenu, false);
}

// Get the ul element by its ID
var ulElement = document.getElementById("navmenu");

// Get all li elements within the ul element
var liElements = ulElement.getElementsByTagName("li");

// Loop through each li element
for (var i = 0; i < liElements.length; i++) {
    // Do stuff with each li element
    var currentLi = liElements[i];
    currentLi.addEventListener("click", function () {
        var menu = document.querySelector(".menu");
        var navbar = document.getElementById("navbar");
        var backdrop = document.getElementById("backdrop");

        menu.classList.remove("menu-abierto");
        navbar.classList.remove("opacity-0");
        backdrop.classList.remove("backdrop-opacity-1");
    });
}

const btnContacto = document.getElementById("btn-contacto");

if (btnContacto) {
    btnContacto.addEventListener("click", cerrarMenu, false);
}

// Cerrar menú con Esc
document.addEventListener("keydown", (event) => {
    if (event.key === "Escape") {
        cerrarMenu();
    }
});

// Efecto al hacer hover en sección #equipo
document.addEventListener("DOMContentLoaded", function () {
    const integrantes = document.querySelectorAll(".integrante");
    const thumbnailGrande = document.querySelector("#thumbnail-grande");

    // Check if the device is touch-enabled
    const isTouchDevice =
        "ontouchstart" in window || navigator.maxTouchPoints > 0;

    if (integrantes.length > 0 && thumbnailGrande) {
        integrantes.forEach((integrante) => {
            const bgImage = integrante.getAttribute("data-bg");

            if (isTouchDevice) {
                // Mobile (Touch) Devices: Use 'click' event
                integrante.addEventListener("click", function () {
                    // Scroll smoothly to the #thumbnail-grande element
                    thumbnailGrande.scrollIntoView({ behavior: "smooth" });

                    // Set background image and apply fade effect
                    thumbnailGrande.style.setProperty(
                        "--bg-image",
                        `url(${bgImage})`
                    );
                    thumbnailGrande.classList.add("fade-in");
                    thumbnailGrande.style.backgroundImage = `url(${bgImage})`;
                });
            } else {
                // Desktop Devices: Use 'mouseover' event
                integrante.addEventListener("mouseover", function () {
                    // Set background image and apply fade effect
                    thumbnailGrande.style.setProperty(
                        "--bg-image",
                        `url(${bgImage})`
                    );
                    thumbnailGrande.classList.add("fade-in");
                    thumbnailGrande.style.backgroundImage = `url(${bgImage})`;
                });

                // Optional: Remove fade-in class on mouseout
                integrante.addEventListener("mouseout", function () {
                    thumbnailGrande.classList.remove("fade-in");
                });
            }
        });
    }
});

// Efecto al hacer hover en sección #productos-y-servicios
document.addEventListener("DOMContentLoaded", function () {
    const section = document.getElementById("proyectos-y-servicios");
    const residencial = document.querySelector(".categoria-residencial");
    const industrial = document.querySelector(".categoria-industrial");

    if (section && residencial && industrial) {
        // Preload the background images (to avoid FOUC)
        const residencialBg = new Image();
        const industrialBg = new Image();
        residencialBg.src = "../images/proyectos-y-servicios/bg-1.webp";
        industrialBg.src = "../images/proyectos-y-servicios/bg-2.webp";

        residencial.addEventListener("mouseenter", function () {
            section.classList.add("residencial-bg");
            section.classList.remove("industrial-bg");
        });

        industrial.addEventListener("mouseenter", function () {
            section.classList.add("industrial-bg");
            section.classList.remove("residencial-bg");
        });
    }
});

// Efecto al hacer hover en sección #apiteca
document.addEventListener("DOMContentLoaded", function () {
    const apitecaSection = document.getElementById("apiteca");
    const articulos = document.querySelector(".categoria-articulos");
    const contenidoMultimedia = document.querySelector(
        ".categoria-contenido-multimedia"
    );
    const noticias = document.querySelector(".categoria-noticias");
    const ebooksDescargables = document.querySelector(
        ".categoria-ebooks-descargables"
    );

    if (
        apitecaSection &&
        articulos &&
        contenidoMultimedia &&
        noticias &&
        ebooksDescargables
    ) {
        // Preload the background images (to avoid FOUC)
        const apitecaSectionBg = new Image();
        const articulosBg = new Image();
        const contenidoMultimediaBg = new Image();
        const noticiasBg = new Image();
        const ebooksDescargablesBg = new Image();
        apitecaSectionBg.src = "../images/apiteca/bg-articulos.webp";
        articulosBg.src = "../images/apiteca/bg-articulos.webp";
        contenidoMultimediaBg.src =
            "../images/apiteca/bg-contenido-multimedia.webp";
        noticiasBg.src = "../images/apiteca/bg-noticias.webp";
        ebooksDescargablesBg.src =
            "../images/apiteca/bg-ebooks-descargables.webp";

        articulos.addEventListener("mouseenter", function () {
            apitecaSection.classList.add("articulos-bg");
            apitecaSection.classList.remove("contenido-multimedia-bg");
            apitecaSection.classList.remove("noticias-bg");
            apitecaSection.classList.remove("ebooks-descargables-bg");
        });

        contenidoMultimedia.addEventListener("mouseenter", function () {
            apitecaSection.classList.remove("articulos-bg");
            apitecaSection.classList.add("contenido-multimedia-bg");
            apitecaSection.classList.remove("noticias-bg");
            apitecaSection.classList.remove("ebooks-descargables-bg");
        });

        noticias.addEventListener("mouseenter", function () {
            apitecaSection.classList.remove("articulos-bg");
            apitecaSection.classList.remove("contenido-multimedia-bg");
            apitecaSection.classList.add("noticias-bg");
            apitecaSection.classList.remove("ebooks-descargables-bg");
        });

        ebooksDescargables.addEventListener("mouseenter", function () {
            apitecaSection.classList.remove("articulos-bg");
            apitecaSection.classList.remove("contenido-multimedia-bg");
            apitecaSection.classList.remove("noticias-bg");
            apitecaSection.classList.add("ebooks-descargables-bg");
        });
    }
});
