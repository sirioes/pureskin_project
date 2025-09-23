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
   Mendefinisikan bahwa dokumen menggunakan HTML5, berfungsi agar browser tahu jika kita memakai HTML5.

2. `<html lang="en">`  
   Elemen utama HTML. Atribut `lang="en"` menunjukkan bahasa dokumen adalah bahasa Inggris. Bagian ini merupakan pembungkus utama semua kode HTML. `lang="en"` artinya bahasa halaman ini Inggris.

3. `<head>`  
   Bagian kepala dokumen. Berisi informasi untuk browser, tidak tampil di halaman utama.

4. `<meta charset="UTF-8">`  
   Menentukan karakter encoding halaman agar semua huruf dan simbol bisa tampil dengan benar, berfungsi agar huruf, angka, dan simbol bisa tampil dengan benar (termasuk karakter non-Inggris).

5. `<meta name="viewport" content="width=device-width, initial-scale=1.0">`  
   Mengatur halaman agar responsif di perangkat mobile, menyesuaikan dengan lebar layar, berfungsi agar halaman web otomatis menyesuaikan ukuran layar (responsif di HP & laptop).

6. `<title>Pureskin</title>`  
   Menentukan judul halaman yang muncul di tab browser.

7. `</head>`  
   Penutup bagian kepala dokumen.

---

<img src="./images/readme-images/navbar-homepage.png" alt="Struktur Dasar HTML" width="900"/>

## Tag yang digunakan

1. `<body>`  
   Karena semua konten utama website (teks, gambar, menu, form) ditampilkan di sini, menjadi bagian ini yang benar-benar kelihatan di browser.

2. `<!-- Navbar -->`  
   Dipakai hanya untuk catatan di dalam kode, berfungsi agar developer tahu bagian ini adalah navigasi, bagian ini tidak akan tampil di browser.

3. `<nav>`  
   Berfungsi untuk menunjukan bahwa ini adalah menu navigasi utama dan juga membantu pembaca kode dan juga mesin pencari (SEO).

4. `<ul>`  
   Karena menu navigasi biasanya berupa daftar. `<ul>` digunakan untuk membuat daftar tanpa angka (unordered list).

5. `<li>`  
   Digunakan untuk setiap item menu di navigasi, menjadi setiap menu (Homepage, About Us, dll) ditempatkan di dalam `<li>`.

6. `<a href="..."> ... </a>`  
   Berfungsi agar setiap item menu bisa diklik dan menuju ke halaman lain. `href` menunjukkan ke mana link tersebut akan pergi.  
   - `Homepage.html` → untuk ke halaman utama  
   - `AboutUs.html` → untuk ke halaman tentang  
   - `OurProducts.html` → untuk ke halaman produk  
   - `OurTreatments.html` → untuk ke halaman treatment  

7. `<hr>`  
   Untuk membuat garis pemisah antar bagian halaman biar lebih rapi dan mudah dibaca.

8. `</body>`  
   Menutup bagian utama halaman. Semua konten harus berada di dalamnya.


---

<img src="./images/readme-images/main1-homepage.png" alt="Struktur Dasar HTML" width="900"/>


## Tag yang digunakan

1. `<body>`  
   Karena semua konten website yang ingin ditampilkan ke user harus ada di sini. Tanpa `<body>`, halaman akan kosong.

2. `<!-- Main -->`  
   Berfungsi agar lebih rapi dan mudah dibaca oleh developer. Komentar ini membantu mengenali bagian "Main" tanpa memengaruhi tampilan.

3. `<main>`  
   Dipakai agar jelas mana konten utama di halaman. Berguna untuk pembaca kode, mesin pencari, dan aksesibilitas.

4. `<section>`  
   Untuk mengelompokkan konten menjadi satu bagian tertentu. Di sini bagian layanan dipisahkan agar lebih terstruktur.

5. `<h2>`  
   Berfungsi agar ada judul besar yang menjelaskan isi section dan membuat user langsung tahu topik utamanya.  
   Contoh: "WHAT WE CAN DO FOR YOU".

6. `<aside>`  
   Dipakai untuk menaruh konten pendukung/sampingan. Dalam hal ini daftar layanan ditampilkan sebagai pelengkap dari judul utama.

7. `<ul>`  
   Karena daftar layanan lebih cocok ditampilkan sebagai list dan `<ul>` akan buat tampilan menjadi lebih rapi dan teratur.

8. `<li>`  
   Digunakan agar setiap layanan bisa dipisah satu per satu dan memudahkan pembacaan serta styling dengan CSS.

9. `<h3>`  
   Untuk sub-judul tiap layanan, sehingga user bisa langsung tahu nama layanannya sebelum baca deskripsi.

10. `<img src="..." alt="..." width="...">`  
    Digunakan untuk menampilkan gambar layanan dan menambahkan visualisasi terhadap isi konten.  
    - `src` → ambil gambar dari lokasi file.  
    - `alt` → jaga-jaga kalau gambar gagal dimuat, tetap ada teks pengganti.  
    - `width` → atur ukuran gambar agar konsisten.

11. `<p>`  
    Digunakan agar ada penjelasan singkat dalam bentuk paragraf sehingga user lebih paham tentang layanan yang ditawarkan.

12. `<a href="..."> ... </a>`  
    Digunakan agar user bisa klik dan masuk ke halaman detail layanan. Contoh: link ke `OurTreatments.html`.

13. `</main>`  
    Berfungsi sebagai penutup bagian utama konten, biar strukturnya jelas dan tidak bercampur dengan elemen lain.

14. `</body>`  
    Berfungsi sebagai penutup bagian utama halaman web. Semua yang tampil di browser sudah selesai ditulis di dalamnya.

---

<img src="./images/readme-images/section1-homepage.png" alt="Struktur Dasar HTML" width="900"/>

## Tag yang digunakan

1. `<section>`  
   Bagian ini digunakan agar bagian produk terpisah dan rapi, sehingga terlihat lebih jelas kalau ini khusus untuk menampilkan informasi produk.

2. `<h2>`  
   Berfungsi agar ada judul besar yang langsung memberi tahu user topik utamanya.  
   Contoh: "BOOST YOUR SKIN WITH OUR PRODUCTS".

3. `<img src="..." alt="..." width="...">`  
   Digunakan agar produk bisa dilihat dengan gambar, bukan cuma teks.  
   - `src` → ambil gambar produk dari folder/file.  
   - `alt` → kalau gambar gagal dimuat, tetap ada teks pengganti.  
   - `width` → atur ukuran gambar biar tampilannya seragam.

4. `<p>`  
   Digunakan untuk menjelaskan gambaran umum mengenai produk yang disediakan.

5. `<a href="..."> ... </a>`  
   Berfungsi agar user bisa klik dan masuk ke halaman detail produk.  
   Contoh: link ke `OurProducts.html`.

6. `</section>`  
   Sebagai penutup bagian produk agar strukturnya jelas dan tidak tercampur dengan bagian lain.


---

<img src="./images/readme-images/main2-homepage.png" alt="Struktur Dasar HTML" width="900"/>

## Tag yang digunakan

1. `<main>`  
   Digunakan agar jelas mana konten utama di halaman, semua bagian penting ada disini.

2. `<section id="book-consultation">`  
   Digunakan agar bagian form konsultasi terpisah dari konten lain.  
   `id="book-consultation"` digunakan agar memudahkan saat akan di-style dengan CSS atau dijadikan target link.

3. `<h2>`  
   Untuk memberikan judul besar pada section ini, agar user langsung tahu ini bagian konsultasi.  
   Contoh: "Book Consultation".

4. `<form>`  
   Digunakan sebagai wadah utama untuk semua input pengguna. Semua isian (nama, email, pesan) ada di dalam tag ini.

5. `<label for="..."> ... </label>`  
   Berfungsi agar user tahu input ini untuk apa.  
   Atribut `for` dihubungkan ke `id` input, sehingga form lebih ramah untuk aksesibilitas (misalnya screen reader).  
   - `for="nama"` → label untuk input nama  
   - `for="email"` → label untuk input email  
   - `for="pesan"` → label untuk textarea pesan  

6. `<input type="text" id="nama" name="nama">`  
   Untuk isian nama.  
   `type="text"` → menerima teks biasa.

7. `<input type="email" id="email" name="email">`  
   Untuk isian email.  
   `type="email"` → otomatis memvalidasi format email (misalnya harus ada @).

8. `<textarea id="pesan" name="pesan"></textarea>`  
   Dipakai pada saat user perlu menulis pesan panjang dan lebih fleksibel daripada input teks biasa.

9. `<br>`  
   Digunakan agar tampilan lebih rapi, dan setiap input selanjutnya akan turun ke baris baru.

10. `<button type="submit">Kirim</button>`  
    Tombol untuk kirim form.  
    `type="submit"` artinya saat diklik, form akan dikirim ke server/aksi yang ditentukan.

11. `</form>`  
    Merupakan bagian penutup form dan semua input harus ada di dalamnya.

12. `</section>`  
    Merupakan bagian penutup bagian konsultasi sehingga konten tetap terstruktur rapi.

13. `</main>`  
    Merupakan bagian penutup konten utama halaman.

14. `<hr>`  
    Digunakan agar ada garis pemisah, sehingga halaman lebih teratur dan bagian antar konten jelas.

---

<img src="./images/readme-images/footer-homepage.png" alt="Struktur Dasar HTML" width="900"/>

## Tag yang digunakan

1. `<footer>`  
   Dipakai untuk bagian bawah halaman web. Bagian ini akan berisi info penting seperti kontak, hak cipta, dan link kebijakan. Dengan tag ini, struktur halaman menjadi lebih jelas dan profesional.

2. `<p>`  
   Digunakan untuk menampilkan teks dalam bentuk paragraf.  
   Di sini dipakai untuk membungkus informasi kontak. 

3. `<li>`  
   Digunakan agar setiap informasi kontak (WhatsApp, Instagram, Email) bisa tampil rapi sebagai item terpisah sehingga memudahkan user membaca informasi.

4. `&copy;`  
   Merupakan Entity HTML khusus yang pada program ini digunakan untuk menampilkan simbol hak cipta (©).  
   Keuntungan dari penggunaan entity ini: akan tampil konsisten di semua browser.

5. `<p>&copy; 2025 Pureskin. All rights reserved PRIVACY POLICY | TERMS & CONDITIONS</p>`  
   Bagian ini akan memberikan info hak cipta sekaligus link ke kebijakan privasi dan syarat ketentuan, sehingga user tahu website ini resmi dan ada aturan jelasnya.

6. `</footer>`  
   Penutup dari bagian footer. Dengan ini, user paham kalau halaman sudah sampai bagian akhir.

---

`AboutUs.html`

<img src="./images/readme-images/main-aboutUs.png" alt="Struktur Dasar HTML" width="900"/>

## Tag yang digunakan

1. `<body>`  
   Digunakan untuk membungkus seluruh konten utama dari halaman web. Semua elemen yang akan ditampilkan ke pengguna berada di dalam tag ini.  
   Karena tanpa `<body>`, browser tidak tahu bagian mana yang harus ditampilkan

2. `<main>`  
   Digunakan untuk menandai bagian konten utama dari sebuah halaman web.  
   Membantu SEO dan screen reader memahami bagian inti dari halaman, sehingga lebih semantik.


3. `<header>`  
   Digunakan untuk membungkus elemen pengantar halaman.  
   Pada kode ini, `<header>` menampilkan bagian "About Us" sebagai identitas atau judul section.


4. `<h1>`  
   Tag heading terbesar untuk judul utama.  
   Di sini dipakai untuk menampilkan teks **"About Us"** agar jelas bahwa halaman ini adalah bagian tentang perusahaan. Juga penting untuk SEO dan hierarki konten.


5. `<section>`  
   Digunakan untuk mengelompokkan konten yang saling berhubungan.  
   Pada kode ini, `<section>` dipakai untuk membungkus keseluruhan deskripsi perusahaan (visi, cerita awal, perjalanan brand).

6. `<p>`  
   Digunakan untuk menampilkan teks dalam bentuk paragraf.  
   - `<p1>` berisi penjelasan visi/misi brand.  
   - `<p2>` berisi cerita awal perjalanan brand.  
   - `<p3>` berisi perkembangan dan pencapaian brand.  
   Dengan `<p>`, teks lebih rapi, mudah dibaca, dan terstruktur.

7. `<br>`  
   Digunakan untuk membuat jarak atau pindah baris antar paragraf.  
   Pada kode ini dipakai untuk memberi spasi tambahan di antara paragraf. Namun, lebih baik menggunakan CSS untuk mengatur jarak agar lebih fleksibel.

8. `</...>` (closing tag)  
   Hampir semua elemen memiliki penutup seperti `</main>`, `</header>`, `</section>`, `</p>`.  
   Penutup tag penting agar struktur dokumen jelas, tidak error, dan mudah dipahami browser.

---

<img src="./images/readme-images/main-aboutUs2.png" alt="Struktur Dasar HTML" width="900"/>

## Tag yang digunakan

1. `<main>`  
   Digunakan untuk menandai konten utama halaman web. Semua isi penting (gambar, teks, dan form kontak) ditempatkan di dalamnya sehingga memudahkan pembaca maupun mesin pencari mengenali bagian inti halaman.

2. `<section>`  
   Berfungsi untuk mengelompokkan bagian tertentu dari halaman. Di sini digunakan untuk membungkus bagian **Contact Us**, sehingga lebih terstruktur dan mudah dipahami.

3. `<img>`  
   Dipakai untuk menampilkan gambar. Pada kode ini, gambar facial massage ditampilkan dengan atribut `alt` (teks alternatif jika gambar gagal muncul) dan `width="300"` agar ukurannya tidak terlalu besar.  

4. `<h2>`  
   Heading tingkat 2, digunakan untuk judul bagian. Di sini dipakai untuk judul "Contact Us", sehingga user langsung tahu topik yang sedang ditampilkan.

5. `<p>`  
   Digunakan untuk membuat paragraf teks. Dalam kode ini dipakai untuk memberi informasi singkat kepada user agar mengisi form jika ada pertanyaan, saran, atau kritik.

6. `<form>`  
   Tag ini digunakan untuk membuat formulir agar user bisa mengirimkan data (nama, email, pesan). Semua elemen input dimasukkan di dalam `<form>`.

7. `<label>`  
   Digunakan untuk memberikan keterangan pada setiap input form. Misalnya "Nama", "Email", dan "Pesan".  
   Atribut `for` menghubungkan label dengan input/textarea berdasarkan `id`, sehingga meningkatkan aksesibilitas (misalnya saat user klik label, otomatis fokus ke input).

8. `<input>`  
   Tag untuk menerima data dari user.  
   - `type="text"` → untuk input teks biasa (nama).  
   - `type="email"` → khusus untuk email, browser otomatis bisa memberi validasi jika format email salah.  
   Atribut `id` dan `name` digunakan untuk identifikasi input ini saat data dikirim.

9. `<textarea>`  
   Digunakan untuk input teks panjang (pesan user). Berbeda dengan `<input>`, tag ini bisa menampung beberapa baris teks.

10. `<button>`  
    Digunakan untuk membuat tombol.  
    - `type="submit"` artinya tombol ini berfungsi mengirimkan isi form ke server.  
    - Tulisan **Kirim** ditampilkan di tombol agar user tahu fungsinya.

11. `<br>`  
    Tag untuk membuat baris baru. Di sini digunakan agar tampilan form lebih rapi (setiap label dan input ditampilkan di baris berbeda).

12. `<hr>`  
    Digunakan untuk menampilkan garis horizontal sebagai pemisah antar bagian konten halaman.  

13. `</body>`  
    Penutup dari seluruh isi halaman web yang ditampilkan ke user.

---

`OurProducts.html`

<img src="./images/readme-images/main-ourProducts.png" alt="Struktur Our Products" width="900"/>

## Tag yang digunakan

1. `<body>`
   Karena semua konten website yang ingin ditampilkan ke user harus ada di sini. Tanpa `<body>`, browser tidak akan menampilkan apapun.

2. `<!-- ... -->`
   Supaya kode lebih rapi dan mudah dibaca oleh developer. Komentar ini membantu mengenali bagian tertentu (contoh: `<!-- Main -->`, `<!-- Face Care -->`).

3. `<main>`
   Dipakai agar jelas mana konten utama di halaman. Berguna untuk pembaca kode, mesin pencari (SEO), dan aksesibilitas.

4. `<header>`
   Untuk menaruh judul utama dan deskripsi awal halaman. Ini memisahkan bagian pembuka dari isi konten produk.

5. `<h1>`
   Supaya ada judul besar yang menjelaskan isi halaman. Membuat user langsung tahu topik utama halaman, yaitu “Our Products”.

6. `<p>`
   Dipakai untuk teks deskriptif. Berguna menjelaskan informasi detail tentang produk dan manfaatnya agar lebih jelas untuk user.

7. `<section>`
   Untuk mengelompokkan konten jadi satu bagian tertentu. Di sini, bagian produk dipisahkan agar mudah dipahami dan dikelompokkan sesuai kategori.

8. `<h2>`
   Supaya ada subjudul yang menjelaskan tiap kategori. Membantu user tahu produk ini termasuk bagian “Face Care”.

9. `<h3>`
   Dipakai untuk nama produk spesifik. Dengan ini, struktur heading jelas: halaman (h1) → kategori (h2) → produk (h3).

10. `<img>`
    Menampilkan gambar produk agar lebih menarik secara visual. Atribut `alt` dipakai untuk aksesibilitas & SEO, `width` mengatur ukuran gambar.

11. `<br>`
    Untuk membuat baris baru, sehingga teks lebih rapi tanpa perlu memulai paragraf baru.

12. `<em>`
    Memberikan penekanan (italic) pada teks, contohnya nama produk. Membuat teks lebih bervariasi tampilannya.

13. `<strong>`
    Digunakan agar teks terlihat tebal. Biasanya dipakai untuk menegaskan harga supaya lebih menonjol.

14. `<button>`
    Memberikan interaksi ke user, contohnya tombol “Lihat Produk”. Dengan `type="submit"`, tombol ini bisa dipakai untuk aksi (misalnya form).

15. `<hr>`
    Membuat garis pemisah antar bagian produk. Berguna untuk memisahkan visual antar kategori sehingga tampilan lebih rapi.

---

<img src="./images/readme-images/main-ourProducts2.png" alt="Struktur Body Care" width="900"/>

## Tag yang digunakan

1. `<body>`
   Semua konten yang akan tampil ke user wajib ada di dalam `<body>`. Ini bagian inti yang dibaca browser untuk menampilkan halaman.

2. `<!-- ... -->`
   Komentar dipakai untuk memberi tanda antar bagian kode. Developer lain jadi mudah mengenali tiap segmen (contoh: “<!-- Body Care -->”).

3. `<main>`
   Dipakai supaya jelas bagian utama dari halaman ini adalah daftar produk Body Care. Memudahkan SEO dan aksesibilitas.

4. `<header>`
   Digunakan untuk menampilkan judul besar kategori. Memberi kesan pembuka yang terpisah dari isi daftar produk.

5. `<h1>`
   Supaya ada heading utama, “Body Care”. Membantu user langsung tahu halaman ini khusus produk perawatan tubuh.

6. `<section>`
   Untuk mengelompokkan produk jadi satu bagian kategori. Dengan ini, struktur kode lebih rapi dan mudah dipahami.

7. `<h2>`
   Subjudul dipakai untuk menandai nama produk tertentu. Dengan hierarki ini, user tahu urutan produk lebih jelas.

8. `<img>`
   Menampilkan gambar produk Body Care. Atribut `alt` dipakai untuk aksesibilitas, `width` mengatur ukuran supaya konsisten.

9. `<p>`
   Memberikan deskripsi tentang produk. Membuat user paham fungsi atau manfaat produk tanpa harus melihat detail lain.

10. `<strong>`
    Dipakai agar harga produk lebih menonjol. Membantu user langsung menangkap informasi penting.

11. `<button>`
    Memberi interaksi berupa aksi seperti “Lihat Produk” atau “Beli”. Elemen ini menambah fungsi praktis pada halaman.

12. `<hr>`
    Garis pemisah antar produk. Membuat tampilan halaman lebih rapi dan memisahkan tiap item dengan jelas.

---

`OurTreatments.html`

<img src="./images/readme-images/main-ourTreatments.png" alt="Struktur Our Treatments" width="900"/>

### Tag yang digunakan

1. `<body>`
   Semua konten layanan harus ditaruh di dalam `<body>`. Tanpanya, halaman tidak akan tampil.

2. `<!-- ... -->`
   Komentar dipakai agar kode lebih mudah dibaca developer. Misalnya `<!-- Our Treatments -->` menandakan awal konten layanan.

3. `<main>`
   Dipakai agar jelas bagian utama halaman adalah layanan yang ditawarkan. Penting untuk aksesibilitas dan SEO.

4. `<h1>`
   Heading utama yang langsung memberi tahu user bahwa halaman ini berisi “Our Treatments”.

5. `<section>`
   Mengelompokkan layanan jadi beberapa bagian tertentu. Dengan ini, tiap jenis layanan punya blok khusus.

6. `<h2>`
   Supaya ada judul besar yang menjelaskan tiap section layanan. Membantu user tahu topik utama tiap bagian.

7. `<aside>`
   Dipakai untuk menaruh konten sampingan atau pendukung. Dalam kasus ini, daftar layanan ditampilkan sebagai informasi tambahan.

8. `<ul>`
   Daftar layanan cocok ditampilkan dalam bentuk list. `<ul>` membuat struktur lebih rapi dan mudah dibaca.

9. `<li>`
   Setiap layanan bisa dijelaskan satu per satu. Memudahkan pembacaan, styling dengan CSS, dan aksesibilitas.

---

<img src="./images/readme-images/main-ourTreatments2.png" alt="Struktur Facial Treatment" width="900"/>

### Tag yang digunakan

1. `<body>`
   Semua konten utama yang akan tampil ada di sini. Bagian ini jadi tempat menaruh struktur lengkap halaman.

2. `<!-- ... -->`
   Komentar digunakan untuk membagi bagian kode. Contohnya `<!-- Facial Treatment -->` membantu developer mengenali bagian layanan khusus wajah.

3. `<main>`
   Menandai konten utama halaman. Dalam hal ini, fokus pada layanan Facial Treatment.

4. `<h1>`
   Heading utama berisi judul besar. Membuat user langsung tahu halaman ini tentang layanan facial.

5. `<section>`
   Mengelompokkan layanan facial ke dalam satu area khusus. Dengan ini, lebih terstruktur dan mudah dipisahkan dengan layanan lain.

6. `<h2>`
   Dipakai untuk subjudul layanan. Misalnya “Deep Cleansing” atau “Brightening Facial”. Memudahkan user tahu jenis layanan.

7. `<p>`
   Memberi deskripsi singkat tiap layanan. Berguna untuk menjelaskan manfaat tanpa membuat tampilan terlalu penuh.

8. `<strong>`
   Dipakai untuk menegaskan harga layanan. Membuat harga langsung terlihat menonjol bagi user.

9. `<button>`
   Memberikan interaksi, misalnya tombol “Pesan Sekarang” atau “Detail Layanan”. Membantu konversi langsung dari halaman.

---
## Hasil Kode Program

`AboutUs.html`

<img src="./images/readme-images/hasil-kode-program/aboutUs1.png" alt="Tampilan Halaman About Us - Bagian 1" width="900"/>

<img src="./images/readme-images/hasil-kode-program/aboutUs2.png" alt="Tampilan Halaman About Us - Bagian 2" width="900"/>
