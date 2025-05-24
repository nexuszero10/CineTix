AOS.init();

const menuBtn = document.getElementById("menu-btn");
const mobileMenu = document.getElementById("mobile-menu");

menuBtn.addEventListener("click", () => {
    mobileMenu.classList.toggle("d-none");
    mobileMenu.classList.add("fade-slide");
    menuBtn.classList.toggle("open");
});

window.addEventListener("scroll", function () {
    const footer = document.getElementById("footer");
    const footerPosition = footer.getBoundingClientRect().top;
    const screenPosition = window.innerHeight;

    if (footerPosition < screenPosition) {
        footer.style.opacity = 1;
        footer.style.transform = "translateY(0)";
        footer.style.transition = "opacity 1s ease, transform 1s ease";
    }
});

const prevButton = document.querySelector(".horror-scroll-button-left");
const nextButton = document.querySelector(".horror-scroll-button-right");
const container = document.querySelector(".horror-scroll-container");
const card = document.querySelector(".card-horror-indonesia");

const scrollAmount = card.offsetWidth + 20;

prevButton.addEventListener("click", () => {
    container.scrollBy({ left: -scrollAmount, behavior: "smooth" });
});

nextButton.addEventListener("click", () => {
    container.scrollBy({ left: scrollAmount, behavior: "smooth" });
});

// Menambahkan event listener untuk menangani klik pada gambar dan memunculkan modal
document.querySelectorAll(".cinematic-frame").forEach((frame) => {
    frame.addEventListener("click", function () {
        const targetModal = frame
            .querySelector("img")
            .getAttribute("data-bs-target");
        const modal = document.querySelector(targetModal);

        // Tampilkan modal
        const modalInstance = new bootstrap.Modal(modal);
        modalInstance.show();
    });
});

// Menambahkan event listener untuk menghentikan video ketika modal ditutup
const modals = document.querySelectorAll(".modal");

modals.forEach((modal) => {
    modal.addEventListener("hidden.bs.modal", function () {
        const iframe = modal.querySelector("iframe");
        if (iframe) {
            const iframeSrc = iframe.src;
            // Menghentikan video dengan memuat ulang iframe
            iframe.src = "";
            iframe.src = iframeSrc;
        }
    });
});

const carousel = document.querySelector("#movieCarousel");

// Menentukan arah animasi berdasarkan klik tombol
carousel.addEventListener("slide.bs.carousel", function (event) {
    const direction = event.direction;

    // Reset class
    carousel.classList.remove("cinematic-left", "cinematic-right");

    if (direction === "left") {
        carousel.classList.add("cinematic-left");
    } else {
        carousel.classList.add("cinematic-right");
    }
});

carousel.addEventListener("slid.bs.carousel", function () {
    carousel.classList.remove("cinematic-left", "cinematic-right");
});
