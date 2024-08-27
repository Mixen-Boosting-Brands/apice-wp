// Modal Imagen
document.addEventListener("DOMContentLoaded", function () {
    const modalElement = document.getElementById("modal-imagen");

    modalElement.addEventListener("show.bs.modal", function (event) {
        const button = event.relatedTarget; // Button that triggered the modal

        const imageUrl = button.getAttribute("data-image"); // Extract info from data-* attribute
        const modalImage = modalElement.querySelector(".imagen"); // Get the image element inside the modal

        // Update modal elements
        modalImage.src = imageUrl;
    });
});

// Modal Equipo
document.addEventListener("DOMContentLoaded", function () {
    const modalElement = document.getElementById("modal-equipo");

    modalElement.addEventListener("show.bs.modal", function (event) {
        const button = event.relatedTarget; // Button that triggered the modal

        const imageUrl = button.getAttribute("data-bg-modal"); // Extract info from data-* attribute
        const modalImage = modalElement.querySelector(".foto"); // Get the image element inside the modal

        const memberName = button.getAttribute("data-name");
        const modalName = modalElement.querySelector("h1");

        const memberPosition = button.getAttribute("data-position");
        const modalPosition = modalElement.querySelector("h2");

        let memberBio = button.getAttribute("data-bio");
        const modalBio = document.querySelector(".biografia");

        let memberQuote = button.getAttribute("data-quote");
        const modalQuote = document.querySelector(".quote");

        let memberQuoteAuthor = button.getAttribute("data-quote-author");
        const modalQuoteAuthor = document.querySelector(".quote-author");

        // Update modal elements
        modalImage.style.background = `url('${imageUrl}') no-repeat`;
        modalName.innerHTML = memberName;
        modalPosition.innerHTML = memberPosition;
        memberBio = memberBio.replace(/\n/g, "<br>"); // Replace encoded line breaks with actual line breaks
        modalBio.innerHTML = memberBio;
        modalQuote.innerHTML = memberQuote;
        modalQuoteAuthor.innerHTML = memberQuoteAuthor;
    });
});
