lucide.createIcons();
AOS.init();

// swiper
const swiper = new Swiper(".mySwiper", {
    loop: true,
    autoplay: {
        delay: 3000,
        disableOnInteraction: false,
    },
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
        renderBullet: function (index, className) {
            return '<span class="' + className + ' custom-bullet"></span>';
        },
    },
});

// mobile menu navbar
const menuToggle = document.getElementById("menu-toggle");
const mobileMenu = document.getElementById("mobile-menu");

menuToggle.addEventListener("click", () => {
    mobileMenu.classList.toggle("hidden");
    if (!mobileMenu.classList.contains("hidden")) {
        mobileMenu.classList.add("show");
    } else {
        mobileMenu.classList.remove("show");
    }
    menuToggle.classList.toggle("open");
});

// modal popup trailer
function openModal(videoUrl) {
    const modal = document.getElementById("videoModal");
    const iframe = document.getElementById("videoFrame");
    iframe.src = videoUrl + "?autoplay=1";
    modal.classList.remove("hidden");
    modal.classList.add("flex");
}

function closeModal() {
    const modal = document.getElementById("videoModal");
    const iframe = document.getElementById("videoFrame");
    iframe.src = "";
    modal.classList.remove("flex");
    modal.classList.add("hidden");
}

document.addEventListener("DOMContentLoaded", () => {
    showTab("jadwal");
});

// switch tab
function showTab(tab) {
    const tabJadwal = document.getElementById("tabJadwal");
    const tabDetail = document.getElementById("tabDetail");
    const tabKomentar = document.getElementById("tabKomentar");
    const contentJadwal = document.getElementById("contentJadwal");
    const contentDetail = document.getElementById("contentDetail");
    const contentKomentar = document.getElementById("contentKomentar");
    const activeTabClasses = [
        "border-b-2",
        "border-white",
        "font-semibold",
        "text-white",
    ];
    const inactiveTabClasses = ["text-gray-500"];
    [tabJadwal, tabDetail, tabKomentar].forEach((t) => {
        t.classList.remove(...activeTabClasses);
        t.classList.add(...inactiveTabClasses);
    });
    [contentJadwal, contentDetail, contentKomentar].forEach((c) => {
        c.classList.add("hidden");
    });
    if (tab === "jadwal") {
        tabJadwal.classList.add(...activeTabClasses);
        tabJadwal.classList.remove(...inactiveTabClasses);
        contentJadwal.classList.remove("hidden");
    } else if (tab === "detail") {
        tabDetail.classList.add(...activeTabClasses);
        tabDetail.classList.remove(...inactiveTabClasses);
        contentDetail.classList.remove("hidden");
    } else if (tab === "komentar") {
        tabKomentar.classList.add(...activeTabClasses);
        tabKomentar.classList.remove(...inactiveTabClasses);
        contentKomentar.classList.remove("hidden");
    } else {
        console.error("Unknown Tab:", tab);
    }
}
