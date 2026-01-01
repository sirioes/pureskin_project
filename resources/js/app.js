// 1. IMPORT (Taruh semua import di paling atas)
import "./bootstrap";
import Swiper from "swiper/bundle";
import "swiper/css/bundle";
import Alpine from 'alpinejs';

// Inisialisasi Alpine
window.Alpine = Alpine;
Alpine.start();

// 2. LOGIKA UTAMA
document.addEventListener("DOMContentLoaded", () => {
    const modal = document.getElementById("bookingModal");
    const openBtns = document.querySelectorAll(".js-open-modal");
    const closeBtns = document.querySelectorAll(".js-close-modal");

    const showModal = () => {
        if (modal) {
            modal.classList.remove("hidden");
            document.body.style.overflow = "hidden"; 
        }
    };

    const hideModal = () => {
        if (modal) {
            modal.classList.add("hidden");
            document.body.style.overflow = "auto"; 
        }
    };

    // Event Listener Modal
    openBtns.forEach((btn) => {
        btn.addEventListener("click", (e) => {
            e.preventDefault();
            showModal();
        });
    });

    closeBtns.forEach((btn) => {
        btn.addEventListener("click", hideModal);
    });

    document.addEventListener("keydown", (event) => {
        if (event.key === "Escape") {
            hideModal();
        }
    });

    if (document.querySelector(".mySwiper")) {
        const swiper = new Swiper(".mySwiper", {
            slidesPerView: 4,
            spaceBetween: 30,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            breakpoints: {
                320: {
                    slidesPerView: 2,
                    spaceBetween: 10,
                },
                640: {
                    slidesPerView: 3,
                    spaceBetween: 20,
                },
                1024: {
                    slidesPerView: 4,
                    spaceBetween: 30,
                },
            },
        });
    }

});