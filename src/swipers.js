// core version + navigation, pagination modules:
import Swiper from "swiper";
import {
    Navigation,
    Pagination,
    Autoplay,
    Thumbs,
    EffectFade,
    Scrollbar,
    Mousewheel,
    Keyboard,
} from "swiper/modules";

// import Swiper and modules styles
import "swiper/css";
import "swiper/css/navigation";
import "swiper/css/pagination";
import "swiper/css/scrollbar";

// import AOS
import AOS from "aos";

document.addEventListener("DOMContentLoaded", function () {
    // init Swiper:
    const flashElement = document.querySelector(".flash");
    const progressCircle = document.querySelector(".autoplay-progress svg");
    const progressContent = document.querySelector(".autoplay-progress span");
    const swiperJumbotron = new Swiper(".swiper-jumbotron", {
        // configure Swiper to use modules
        modules: [Navigation, Pagination, Autoplay, EffectFade, Scrollbar],

        // Optional parameters
        autoplay: {
            delay: 5000,
            disableOnInteraction: false,
        },
        direction: "horizontal",
        allowTouchMove: true,
        slidesPerView: 1,
        spaceBetween: 0,
        loop: false,
        grabCursor: true,
        // effect: "fade",
        on: {
            autoplayTimeLeft(s, time, progress) {
                progressCircle.style.setProperty("--progress", 1 - progress);
                progressContent.textContent = `${Math.ceil(time / 1000)}s`;
            },
            slideChangeTransitionStart: function () {
                // Remove data-aos attributes and reset opacity for all slides
                this.slides.forEach((slide) => {
                    const h1 = slide.querySelector("h1");
                    if (h1) {
                        h1.classList.remove("aos-init", "aos-animate");
                        h1.style.display = "none";
                    }
                });
            },
            slideChangeTransitionEnd: function () {
                // Add data-aos attributes to the active slide and make it visible
                const activeSlide = this.slides[this.activeIndex];
                const h1 = activeSlide.querySelector("h1");
                if (h1) {
                    h1.style.display = "";
                    AOS.init(); // Initializes AOS to apply the animation
                }
            },
        },
        /*
        on: {
            slideChange: function () {
                flashElement.classList.add("active");
                setTimeout(function () {
                    flashElement.classList.remove("active");
                }, 500); // Match this duration with CSS transition duration
            },
        },
        */

        // if we need navigation
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },

        // If we need pagination
        pagination: {
            el: ".swiper-pagination",
        },

        // If we need scrollbar
        scrollbar: {
            el: ".swiper-scrollbar",
            hide: false,
            snapOnRelease: true,
        },
    });
});

document.addEventListener("DOMContentLoaded", function () {
    // init Swiper:
    const swiperEquipo = new Swiper(".swiper-equipo", {
        // configure Swiper to use modules
        modules: [Navigation, Autoplay, Mousewheel, Keyboard],

        // Optional parameters
        autoplay: {
            delay: 5000,
            disableOnInteraction: false,
        },
        direction: "horizontal",
        allowTouchMove: true,
        slidesPerView: 1,
        spaceBetween: 0,
        loop: false,
        grabCursor: true,
        keyboard: {
            enabled: true,
        },
        mousewheel: false,

        breakpoints: {
            576: {
                slidesPerView: 2,
                spaceBetween: 25,
            },
            768: {
                slidesPerView: 2,
                spaceBetween: 25,
            },
            992: {
                slidesPerView: 4,
                spaceBetween: 25,
            },
        },

        // if we need navigation
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });
});

document.addEventListener("DOMContentLoaded", function () {
    // init Swiper:
    const swiperProyectos = new Swiper(".swiper-proyectos", {
        // configure Swiper to use modules
        modules: [
            Navigation,
            Pagination,
            Autoplay,
            Mousewheel,
            Keyboard,
            Scrollbar,
        ],

        // Optional parameters
        autoplay: {
            delay: 5000,
            disableOnInteraction: false,
        },
        direction: "horizontal",
        allowTouchMove: true,
        spaceBetween: 25,
        loop: false,
        grabCursor: false,
        keyboard: {
            enabled: false,
        },
        mousewheel: false,
        slidesPerView: "auto",
        centeredSlides: true,

        // if we need navigation
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },

        // If we need pagination
        pagination: {
            el: ".swiper-pagination-proyectos",
            type: "fraction",
        },

        // If we need scrollbar
        scrollbar: {
            el: ".swiper-scrollbar-proyectos",
            hide: false,
            snapOnRelease: true,
        },
    });
});

document.addEventListener("DOMContentLoaded", function () {
    // init Swiper:
    const swiperPosts = new Swiper(".swiper-posts", {
        // configure Swiper to use modules
        modules: [
            Navigation,
            Pagination,
            Autoplay,
            Mousewheel,
            Keyboard,
            Scrollbar,
        ],

        // Optional parameters
        autoplay: {
            delay: 5000,
            disableOnInteraction: false,
        },
        direction: "horizontal",
        allowTouchMove: true,
        spaceBetween: 25,
        loop: false,
        grabCursor: false,
        keyboard: {
            enabled: false,
        },
        mousewheel: false,
        slidesPerView: 1,

        breakpoints: {
            576: {
                slidesPerView: 2,
                spaceBetween: 25,
            },
            768: {
                slidesPerView: 2,
                spaceBetween: 25,
            },
            992: {
                slidesPerView: 3,
                spaceBetween: 25,
            },
        },

        // if we need navigation
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },

        // If we need pagination
        pagination: {
            el: ".swiper-pagination",
            type: "fraction",
        },

        // If we need scrollbar
        scrollbar: {
            el: ".swiper-scrollbar",
            hide: false,
            snapOnRelease: true,
        },
    });
});

document.addEventListener("DOMContentLoaded", function () {
    // init Swiper:
    const flashElement = document.querySelector(".flash");
    const progressCircle = document.querySelector(".autoplay-progress svg");
    const progressContent = document.querySelector(".autoplay-progress span");
    const swiperInternas = new Swiper(".swiper-internas", {
        // configure Swiper to use modules
        modules: [Navigation, Pagination, Autoplay, EffectFade, Scrollbar],

        // Optional parameters
        autoplay: {
            delay: 5000,
            disableOnInteraction: false,
        },
        direction: "horizontal",
        allowTouchMove: true,
        slidesPerView: 1,
        spaceBetween: 0,
        loop: false,
        grabCursor: true,
        // effect: "fade",

        // if we need navigation
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },

        // If we need pagination
        pagination: {
            el: ".swiper-pagination",
        },

        // If we need scrollbar
        scrollbar: {
            el: ".swiper-scrollbar",
            hide: false,
            snapOnRelease: true,
        },
    });
});

document.addEventListener("DOMContentLoaded", function () {
    // Function to initialize Swiper
    function initializeSwiper() {
        return new Swiper(".swiper-internas-carrusel", {
            // configure Swiper to use modules
            modules: [Navigation, Mousewheel, Keyboard],

            loop: false, // Optional: Loop through slides
            grabCursor: true,
            slidesPerView: "auto",
            centeredSlides: true,
            spaceBetween: 30,
            mousewheel: true,
            keyboard: {
                enabled: true,
            },

            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
        });
    }

    // Initialize Swiper initially
    var swiper = initializeSwiper();

    // Function to handle image click
    function handleImageClick(event) {
        // Get the clicked element and its index within the parent container
        const clickedElement = event.currentTarget;
        const clickedIndex = Array.from(
            clickedElement.parentNode.parentNode.children
        ).indexOf(clickedElement.parentNode);

        // Clear existing slides in Swiper by setting swiper-wrapper's innerHTML to empty
        const swiperWrapper = document.querySelector(
            ".swiper-internas-carrusel .swiper-wrapper"
        );
        swiperWrapper.innerHTML = "";

        // Add new slides to Swiper based on the clicked image and its siblings
        document.querySelectorAll(".gallery a").forEach((element) => {
            const slideImage = element.getAttribute("data-image");
            const newSlide = document.createElement("div");
            newSlide.classList.add("swiper-slide");
            newSlide.innerHTML = `<img src="${slideImage}" class="img-fluid" alt="">`;
            swiperWrapper.appendChild(newSlide);
        });

        // Reinitialize Swiper to ensure it picks up the new slides
        swiper.destroy(); // Destroy the previous instance
        swiper = initializeSwiper(); // Reinitialize with new slides

        // Open the Bootstrap modal
        const modal = new bootstrap.Modal(
            document.getElementById("modal-carrusel")
        );
        modal.show();

        // Go to the clicked image's slide in Swiper
        swiper.slideToLoop(clickedIndex, 0);
    }

    // Add click event listeners to all images
    document.querySelectorAll(".gallery a").forEach((element) => {
        element.addEventListener("click", handleImageClick);
    });

    // Reset Swiper when modal is hidden (optional)
    document
        .getElementById("modal-carrusel")
        .addEventListener("hidden.bs.modal", function () {
            // Optionally clear slides or perform any other action when the modal is hidden
        });
});

document.addEventListener("DOMContentLoaded", function () {
    // init Swiper:
    const swiperVertical = new Swiper(".swiper-vertical", {
        // configure Swiper to use modules
        modules: [Navigation, Autoplay, Mousewheel, Keyboard],

        // Optional parameters
        autoplay: {
            delay: 5000,
            disableOnInteraction: false,
        },
        direction: "vertical",
        allowTouchMove: true,
        spaceBetween: 25,
        loop: false,
        grabCursor: false,
        keyboard: {
            enabled: false,
        },
        mousewheel: true,
    });
});

// Initialize AOS
AOS.init();
