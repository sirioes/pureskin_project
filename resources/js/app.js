// 1. IMPORT (Taruh semua import di paling atas)
import "./bootstrap";
import Swiper from "swiper/bundle";
import "swiper/css/bundle";
import Alpine from "alpinejs";
import "@tailwindplus/elements";

// 2. INISIALISASI ALPINE & COMPONENT
window.Alpine = Alpine;

// === TAMBAHAN LOGIKA SEARCH (Dimulai) ===
Alpine.data("navbarSearch", () => ({
    searchOpen: false,
    keyword: "",
    results: [],
    isLoading: false,

    // Fungsi untuk membuka search dan fokus ke input
    triggerFocus() {
        this.searchOpen = true;
        this.$nextTick(() => {
            if (this.$refs.searchInput) {
                this.$refs.searchInput.focus();
            }
        });
    },

    // Fungsi fetch data ke Laravel
    async performSearch() {
        // Jangan cari jika huruf kurang dari 2
        if (this.keyword.length < 2) {
            this.results = [];
            return;
        }

        this.isLoading = true;

        try {
            // Pastikan Anda sudah membuat Route '/search-products' di Laravel
            const response = await fetch(
                `/search-products?query=${this.keyword}`,
            );

            if (!response.ok) throw new Error("Network response was not ok");

            this.results = await response.json();
        } catch (error) {
            console.error("Search error:", error);
            this.results = [];
        } finally {
            this.isLoading = false;
        }
    },

    // Helper format Rupiah
    formatRupiah(number) {
        return new Intl.NumberFormat("id-ID", {
            style: "currency",
            currency: "IDR",
            minimumFractionDigits: 0,
        }).format(number);
    },
}));

// === TAMBAHAN LOGIKA SEARCH (Selesai) ===

Alpine.start();

// 3. LOGIKA VANILLA JS (MODAL & SWIPER)
document.addEventListener("DOMContentLoaded", () => {
    // --- Logic Modal ---
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

    // --- Logic Swiper ---
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

// 4. LOGIKA MODAL PRODUK
document.addEventListener("DOMContentLoaded", () => {
    // Fungsi Membuka Modal
    const openButtons = document.querySelectorAll('[command="show-modal"]');

    openButtons.forEach((btn) => {
        btn.addEventListener("click", (e) => {
            e.preventDefault();
            const targetId = btn.getAttribute("commandfor");
            const modal = document.getElementById(targetId);

            if (modal) {
                modal.classList.remove("hidden");
                document.body.style.overflow = "hidden";
            }
        });
    });

    // Fungsi Menutup Modal
    const closeButtons = document.querySelectorAll('[command="close"]');

    closeButtons.forEach((btn) => {
        btn.addEventListener("click", (e) => {
            e.preventDefault(); // Tambahkan ini untuk keamanan
            const targetId = btn.getAttribute("commandfor");
            const modal = document.getElementById(targetId);

            if (modal) {
                modal.classList.add("hidden");
                document.body.style.overflow = "auto";
            }
        });
    });

    // Close dengan klik di luar area modal (Backdrop)
    window.addEventListener("click", (e) => {
        if (e.target.tagName === "EL-DIALOG-BACKDROP") {
            const modal = e.target.closest("el-dialog");
            if (modal) {
                modal.classList.add("hidden");
                document.body.style.overflow = "auto";
            }
        }
    });
});
