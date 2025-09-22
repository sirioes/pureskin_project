# Pureskin Website – HTML Semantic Layout

Proyek ini merupakan tugas kelompok pada mata kuliah **Pemrograman Web** yang berfokus pada pembuatan layout website menggunakan **HTML** dan **HTML Semantik** tanpa bantuan CSS maupun JavaScript.  
Website yang kami buat bernama **Pureskin**, yaitu sebuah website klinik kecantikan yang juga menyediakan produk perawatan kulit.

---

## 📌 Tujuan
- Melatih kemampuan membuat struktur halaman web dengan HTML5.
- Menggunakan elemen semantik seperti `<header>`, `<nav>`, `<main>`, `<article>`, `<aside>`, dan `<footer>`.
- Membuat layout website yang rapi, logis, dan mudah dipahami.

---

## 👩‍💻 Anggota Kelompok
- **Ni Luh Risma Putri Wirdianthi** (42430001)  
- **Benedito Nidio Da Rosa Maia Tilman** (42430032)  
- **Salsabila Nur Shafa** (42430040)  
- **Renald Kevin Azzaky** (42430029)  

Dosen Pengampu: *Ir. Gede Humaswara Prathama, S.T., M.T*  
Program Studi Teknologi Informasi, Fakultas Teknik dan Informatika, Universitas Pendidikan Nasional – 2025.

---

## 🌐 Tema Website
Pureskin adalah klinik kecantikan yang menyediakan:  
- **Facial Treatment**  
- **Body Treatment**  
- **Produk Skincare** (pembersih wajah, pelembap, serum, dll.)  
- **Booking Consultation** untuk reservasi online  

Website ini dirancang agar informasi tentang layanan, produk, dan kontak dapat diakses dengan mudah dan terstruktur.

---

## 📄 Struktur Halaman

### 1. Homepage (`Homepage.html`)
Halaman utama yang menampilkan gambaran umum Pureskin, termasuk layanan, produk unggulan, serta tombol **Book Appointment**.  

**Penjelasan:**
- Bagian atas berisi navigasi (`<nav>`) dengan link ke semua halaman.  
- `<header>` berisi judul besar "Pureskin" dan tombol *Book Appointment*.  
- `<main>` terbagi menjadi 3 section:  
  - **Layanan (Treatments)**: Body & Facial Treatment.  
  - **Produk**: Menampilkan produk skincare.  
  - **Form Booking**: Formulir untuk konsultasi.  
- `<footer>` berisi kontak dan hak cipta.  

---

### 2. About Us (`AboutUs.html`)
Halaman tentang Pureskin, berisi sejarah singkat, visi misi, dan kontak.  

**Penjelasan:**
- `<main>` berisi judul **About Us** dan deskripsi singkat tentang Pureskin.  
- Menampilkan gambar representatif klinik.  
- Bagian bawah ada section **Contact Us** dengan form sederhana.  

---

### 3. Our Products (`OurProducts.html`)
Halaman khusus untuk daftar produk skincare Pureskin.  

**Penjelasan:**
- `<header>` menampilkan judul halaman dan deskripsi singkat.  
- Isi halaman dapat menampilkan list produk berupa nama, deskripsi, dan harga (masih berupa teks dasar di versi HTML ini).  

---

### 4. Our Treatments (`OurTreatments.html`)
Halaman khusus untuk daftar layanan treatment.  

**Penjelasan:**
- `<header>` berisi judul "Our Treatments".  
- Konten berisi deskripsi layanan facial treatment dan body treatment.  
- Dapat diperluas dengan form booking khusus treatment.  

---

## ⚙️ Teknologi yang Digunakan
- **HTML5** (full semantic structure)
- **Tanpa CSS & JavaScript** (fokus hanya pada struktur semantik)

---

## 📂 Struktur Folder

`Homepage.html`

<img src="./images/readme-images/doctype-homepage.png" alt="Struktur Dasar HTML" width="900"/>

## Tag yang digunakan

1. `<!DOCTYPE html>`  
   Mendefinisikan bahwa dokumen menggunakan HTML5.

2. `<html lang="en">`  
   Elemen utama HTML. Atribut `lang="en"` menunjukkan bahasa dokumen adalah bahasa Inggris.

3. `<head>`  
   Bagian kepala dokumen. Berisi informasi untuk browser, tidak tampil di halaman utama.

4. `<meta charset="UTF-8">`  
   Menentukan karakter encoding halaman agar semua huruf dan simbol bisa tampil dengan benar.

5. `<meta name="viewport" content="width=device-width, initial-scale=1.0">`  
   Mengatur halaman agar responsif di perangkat mobile, menyesuaikan dengan lebar layar.

6. `<title>Pureskin</title>`  
   Menentukan judul halaman yang muncul di tab browser.

7. `</head>`  
   Penutup bagian kepala dokumen.

---

<img src="./images/readme-images/navbar-homepage.png" alt="Struktur Dasar HTML" width="900"/>

## Tag yang digunakan

1. `<body>`  
   Bagian utama halaman yang menampung seluruh konten yang terlihat di browser.

2. `<!-- Navbar -->`  
   Komentar di dalam kode. Tidak ditampilkan di browser, hanya sebagai catatan untuk developer.

3. `<nav>`  
   Elemen semantik yang digunakan untuk menandai navigasi utama di halaman.

4. `<ul>`  
   Membuat daftar tidak berurutan (unordered list). Digunakan untuk menampung item navigasi.

5. `<li>`  
   Item di dalam list. Setiap menu navigasi ditempatkan dalam tag ini.

6. `<a href="..."> ... </a>`  
   Membuat tautan (link). Atribut `href` berisi alamat file atau halaman yang dituju.  
   - `Homepage.html` → Menu ke halaman utama  
   - `AboutUs.html` → Menu ke halaman tentang  
   - `OurProducts.html` → Menu ke halaman produk  
   - `OurTreatments.html` → Menu ke halaman treatment  

7. `<hr>`  
   Membuat garis horizontal sebagai pemisah antarbagian.

8. `</body>`  
   Menutup bagian utama halaman.

---

<img src="./images/readme-images/main1-homepage.png" alt="Struktur Dasar HTML" width="900"/>


## Tag yang digunakan

1. `<body>`  
   Bagian utama halaman yang menampung seluruh konten yang terlihat di browser.

2. `<!-- Main -->`  
   Komentar. Tidak tampil di browser, hanya sebagai catatan untuk developer.

3. `<main>`  
   Elemen semantik yang berisi konten utama dari halaman.

4. `<section>`  
   Bagian konten yang dikelompokkan. Pada contoh ini digunakan untuk menampilkan layanan.

5. `<h2>`  
   Judul utama dari bagian konten.  
   Contoh: "WHAT WE CAN DO FOR YOU".

6. `<aside>`  
   Bagian samping/pendukung. Dalam contoh ini digunakan untuk menampilkan daftar layanan.

7. `<ul>`  
   Membuat daftar tidak berurutan (unordered list).

8. `<li>`  
   Item dalam daftar. Setiap layanan ditaruh di dalam `<li>`.

9. `<h3>`  
   Sub-judul untuk tiap layanan.  
   Contoh: "Body Treatment", "Facial Treatment".

10. `<img src="..." alt="..." width="...">`  
    Menampilkan gambar layanan.  
    - `src` → lokasi file gambar  
    - `alt` → teks alternatif jika gambar tidak muncul  
    - `width` → ukuran lebar gambar  

11. `<p>`  
    Paragraf yang berisi deskripsi layanan.

12. `<a href="..."> ... </a>`  
    Tautan (link) untuk melihat detail lebih lanjut.  
    Contoh: `href="OurTreatments.html"`

13. `</main>`  
    Menutup bagian konten utama.

14. `</body>`  
    Menutup bagian utama halaman.

---

<img src="./images/readme-images/section1-homepage.png" alt="Struktur Dasar HTML" width="900"/>

## Tag yang digunakan

1. `<section>`  
   Bagian konten yang dikelompokkan. Pada contoh ini digunakan untuk menampilkan informasi produk.

2. `<h2>`  
   Judul utama dari bagian konten.  
   Contoh: "BOOST YOUR SKIN WITH OUR PRODUCTS".

3. `<img src="..." alt="..." width="...">`  
   Menampilkan gambar produk.  
   - `src` → lokasi file gambar  
   - `alt` → teks alternatif jika gambar tidak muncul  
   - `width` → ukuran lebar gambar  

4. `<p>`  
   Paragraf yang berisi deskripsi produk.  
   Contoh: menjelaskan manfaat produk Pureskin untuk kulit.

5. `<a href="..."> ... </a>`  
   Tautan (link) untuk melihat detail lebih lanjut.  
   Contoh: `href="OurProducts.html"`

6. `</section>`  
   Penutup bagian konten.

---

<img src="./images/readme-images/main2-homepage.png" alt="Struktur Dasar HTML" width="900"/>

## Tag yang digunakan

1. `<main>`  
   Elemen semantik untuk membungkus konten utama halaman.

2. `<section id="book-consultation">`  
   Bagian khusus untuk form konsultasi. Atribut `id` memudahkan pengaturan styling atau navigasi.

3. `<h2>`  
   Judul bagian.  
   Contoh: "Book Consultation".

4. `<form>`  
   Elemen utama untuk membuat form input dari pengguna.

5. `<label for="..."> ... </label>`  
   Label teks untuk tiap input. Atribut `for` dihubungkan dengan `id` pada input.  
   - `for="nama"` → Label untuk input nama  
   - `for="email"` → Label untuk input email  
   - `for="pesan"` → Label untuk textarea pesan  

6. `<input type="text" id="nama" name="nama">`  
   Input teks untuk nama pengguna.  
   - `type="text"` → input berupa teks biasa  

7. `<input type="email" id="email" name="email">`  
   Input khusus untuk email. Browser akan memvalidasi format email.  

8. `<textarea id="pesan" name="pesan"></textarea>`  
   Kolom input untuk pesan dengan area lebih besar dibanding input teks.  

9. `<br>`  
   Membuat baris baru agar elemen ditampilkan di bawah.  

10. `<button type="submit">Kirim</button>`  
    Tombol untuk mengirim data form.  
    - `type="submit"` → mengirimkan data ke server (atau ke aksi form yang ditentukan).

11. `</form>`  
    Penutup form. Semua input berada di dalam elemen ini.  

12. `</section>`  
    Penutup bagian form konsultasi.  

13. `</main>`  
    Penutup konten utama halaman.  

14. `<hr>`  
    Membuat garis horizontal sebagai pemisah antarbagian.  

---

<img src="./images/readme-images/footer-homepage.png" alt="Struktur Dasar HTML" width="900"/>

## Tag yang digunakan

1. `<footer>`  
   Elemen semantik untuk bagian bawah halaman. Biasanya berisi kontak, hak cipta, atau link kebijakan.

2. `<p>`  
   Digunakan untuk membungkus teks atau elemen daftar kontak.  
   Di dalamnya terdapat beberapa `<li>` (yang sebenarnya lebih tepat diletakkan dalam `<ul>` atau `<ol>`).

3. `<li>`  
   Item daftar, digunakan untuk menampilkan informasi kontak:  
   - WhatsApp: 0235-1661-6776  
   - Instagram: pureskin  
   - Email: pureskin@gmail.com  

4. `&copy;`  
   Entity HTML untuk simbol hak cipta (©).

5. `<p>&copy; 2025 Pureskin. All rights reserved PRIVACY POLICY | TERMS & CONDITIONS</p>`  
   Paragraf tambahan di footer yang berisi keterangan hak cipta dan link kebijakan.

6. `</footer>`  
   Menutup bagian footer halaman.

---
