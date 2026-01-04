# PURESKIN

Proyek ini merupakan tugas akhir pada mata kuliah **Pemrograman Web** yang berfokus pada pengembangan sebuah aplikasi web interaktif berbasis full-stack dengan framework Laravel dan Tailwind CSS.  
Website yang kami buat bernama **pureskin**, yaitu sebuah website klinik kecantikan yang juga menyediakan produk perawatan kulit.

---

## 🌐 Tema Website

pureskin adalah klinik kecantikan yang menyediakan:

- **Facial Treatment**
- **Body Treatment**
- **Produk Skincare**
- **Booking Consultation**

Website ini dirancang agar informasi tentang layanan, produk, dan kontak dapat diakses dengan mudah dan terstruktur.

---

## 👩‍💻 Anggota Kelompok & Pembagian Tugas

- **Benedito Nidio Da Rosa Maia Tilman** (42430032)
    1. Membuat halaman Home
    2. Membuat navbar dan footer untuk setiap halaman
    3. Membuat menu cart
    4. Mengintegrasikan database produk dengan database user
- **Salsabila Nur Shafa** (42430040)
    1. Membuat halaman About Us
    2. Membuat halaman Register & Log In
    3. Membuat database user
- **Ni Luh Risma Putri Wirdianthi** (42430001)
    1. Membuat halaman Our Products
    2. Membuat modal dialogs untuk menampilkan informasi produk
    3. Membuat halaman detail produk
    4. Mengintegrasikan produk ke database
- **Renald Kevin Azzaky** (42430029)
    1. Membuat halaman Our Treatments
    2. Membuat search bar
    3. Membuat modal dialog untuk menampilkan menu book consultation

Dosen Pengampu: _Ir. Gede Humaswara Prathama, S.T., M.T_  
Program Studi Teknologi Informasi, Fakultas Teknik dan Informatika, Universitas Pendidikan Nasional – 2026.

---

## 📄 Fitur Utama

### 1. Sistem Otentifikasi - Register & Log In (`register.blade.php`, `login.blade.php`)

Fitur ini menangani akses pengguna dan memberikan gambaran umum layanan klinik pureskin pada halaman utama.

**Detail Informasi:**

- Navigasi Global (`<nav>`): Menu responsif yang menghubungkan pengguna ke seluruh halaman utama.
- Header Hero: Menampilkan identitas brand "pureskin" dan tombol Call-to-Action _Book Appointment_ untuk akses cepat.
- Struktur Konten Utama (`<main>`):
    - **Layanan (Treatments)**: Menampilkan kategori jasa utama (Body & Facial Treatment).
    - **Katalog Produk**: Menampilkan produk skincare.
    - **Form Booking**: Integrasi formulir langsung bagi pelanggan yang ingin melakukan konsultasi.
- Footer (`<footer>`): Berisi informasi kontak resmi klinik dan hak cipta (copyright).

---

### 2. Manajemen Products (`ourproducts.blade.php`, `cart.blade.php`)

Fitur ini berfungsi sebagai katalog belanja digital bagi pelanggan untuk mengeksplorasi dan membeli produk kecantikan pureskin.

**Detail Informasi:**

- Kategorisasi Produk: Halaman produk dibagi menjadi 4 section, diantaranya:
    - **Face Care Section**: Menampilkan rangkaian produk khusus perawatan wajah.
    - **Body Care Section**: Menampilkan produk perawatan tubuh.
    - **Best Sellers**: Menyoroti produk-produk yang paling diminati pelanggan.
    - **Best Packages**: Paket bundel produk dengan penawaran harga spesial.
- Detail Informasi Produk:
    - Tersedia fitur pop-up modal untuk melihat sekilas produk dan tombol "View Product Details" yang menghubungkan pelanggan ke halaman detail informasi produk yang lebih lengkap.
- Sistem Add-to-Cart: Pengguna dapat memilih produk dan memasukkannya ke dalam keranjang belanja secara instan melalui tombol belanja.
- Sistem Keranjang Belanja:
    - Meninjau seluruh daftar produk yang telah dipilih.
    - Custom Quantity: Menyesuaikan jumlah (qty) tiap item yang ingin dibeli.
    - Item Selection: Fleksibilitas untuk menghapus produk tertentu sebelum lanjut ke tahap akhir.
- Checkout: Proses finalisasi pembelian (saat ini dalam tahap pengembangan).

---

### 3. Manajemen Treatments (`ourtreatments.blade.php`)

Halaman ini dirancang untuk merepresentasikan layanan profesional klinik secara sistematis dan memudahkan pelanggan untuk melakukan reservasi.

**Detail Informasi:**

- Kategorisasi Layanan: Informasi dibagi menjadi dua kategori utama untuk memudahkan pencarian:
    - Face Treatment: Penjelasan tentang perawatan wajah.
    - Body Treatmet: Penjelasan tentang perawatan tubuh.
- Detail Layanan: Setiap item mencakup nama treatment dan deskripsi prosedur.
- Fitur Booking Consultation: Terdapat tombol "Book Consultation" di bagian header.
    - Modal Dialog Interaktif: Saat tombol diklik, aplikasi akan memunculkan modal dialog (pop-up) tanpa berpindah halaman.
    - Input Data Diri: Di dalam modal ini, calon klien dapat mengisi formulir data diri untuk keperluan administrasi konsultasi klinik.

---

## 💻 Tampilan Akhir

- **HOMEPAGE**

Homepage - `home.blade.php`

<img src="public/images/readme/home.png" alt="Tampilan Halaman Home - Hero" width="400"/>
<img src="public/images/readme/home2.png" alt="Tampilan Halaman Home - About" width="400"/>
<img src="public/images/readme/home3.png" alt="Tampilan Halaman Home - Products" width="400"/>
<img src="public/images/readme/home4.png" alt="Tampilan Halaman Home - Treatments" width="400"/>
<img src="public/images/readme/home5.png" alt="Tampilan Halaman Home - Booking" width="400"/>
<img src="public/images/readme/footer.png" alt="Tampilan Halaman Home - Footer" width="400"/>

<br>

Search Bar

<img src="public/images/readme/search-bar.png" alt="Tampilan Halaman Home - Search Bar Focus" width="400"/>

<br>

Register & Log In

<img src="public/images/readme/register.png" alt="Tampilan Halaman Home - Register Focus" width="400"/>
<img src="public/images/readme/login.png" alt="Tampilan Halaman Home - Log In Focus" width="400"/>

<br>

User Account

<img src="public/images/readme/user-account.png" alt="Tampilan Halaman Home - User Account" width="400"/>

---

- **ABOUT US**

About Us - `aboutus.blade.php`

<img src="public/images/readme/about-us.png" alt="Tampilan Halaman About Us" width="400"/>
<img src="public/images/readme/about-us2.png" alt="Tampilan Halaman About Us - 2" width="400"/>
<img src="public/images/readme/about-us3.png" alt="Tampilan Halaman About Us - 3" width="400"/>
<img src="public/images/readme/footer.png" alt="Tampilan Halaman About Us - Footer" width="400"/>

---

- **OUR PRODUCTS**

Our Products - `ourproducts.blade.php`

<img src="public/images/readme/our-products.png" alt="Tampilan Halaman Our Products" width="400"/>
<img src="public/images/readme/our-products2.png" alt="Tampilan Halaman Our Products - 2" width="400"/>
<img src="public/images/readme/our-products3.png" alt="Tampilan Halaman Our Products - 3" width="400"/>
<img src="public/images/readme/our-products4.png" alt="Tampilan Halaman Our Products - 4" width="400"/>
<img src="public/images/readme/our-products5.png" alt="Tampilan Halaman Our Products -5" width="400"/>
<img src="public/images/readme/footer.png" alt="Tampilan Halaman Our Products - Footer" width="400"/>

<br>

Modal Dialog for Products Information

<img src="public/images/readme/modal-dialog-products.png" alt="Tampilan Halaman Our Products - Modal Dialog" width="400"/>

<br>

Product Detail

<img src="public/images/readme/product-details.png" alt="Tampilan Halaman Our Products - Product Details" width="400"/>

Cart

<img src="public/images/readme/cart.png" alt="Tampilan Halaman Home - Cart Focus" width="400"/>
<img src="public/images/readme/cart2.png" alt="Tampilan Halaman Home - 1 Product" width="400"/>
<img src="public/images/readme/cart3.png" alt="Tampilan Halaman Home - 2 Product" width="400"/>
<img src="public/images/readme/cart4.png" alt="Tampilan Halaman Home - Delete Product" width="400"/>

---

- **OUR TREATMENTS**

Our Treatments - `ourtreatments.blade.php`

<img src="public/images/readme/our-treatments.png" alt="Tampilan Halaman Our Treatments" width="400"/>
<img src="public/images/readme/our-treatments2.png" alt="Tampilan Halaman Our Treatments - 2" width="400"/>
<img src="public/images/readme/our-treatments3.png" alt="Tampilan Halaman Our Treatments - 3" width="400"/>
<img src="public/images/readme/footer.png" alt="Tampilan Halaman Our Treatments - Footer" width="400"/>

<br>

Modal Dialog for Book Consultation

<img src="public/images/readme/modal-dialog-treatments.png" alt="Tampilan Halaman Our Treatments - Modal Dialog" width="400"/>
