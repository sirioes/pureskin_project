<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Products;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $products = [
            // --- SECTION 1: FACE CARE ---
            [
                'name' => 'Ultimate Eye Cream',
                'price' => 45000,
                'image' => 'images/our-products/face-care/ultimate-eye-cream.jpg',
                'category' => 'face-care',
                'description' => 'Krim mata dengan formula kaya nutrisi untuk mencerahkan lingkaran hitam (mata panda), mengurangi sembab, dan menyamarkan garis halus di area sensitif sekitar mata.',
                'how_to_use' => 'Ambil produk seukuran biji kacang hijau menggunakan jari manis. Totolkan di area bawah dan tulang mata, lalu tepuk perlahan hingga meresap. Gunakan pagi dan malam.',
                'ingredients' => 'Caffeine, Tranexamic Acid, Acetyl Hexapeptide-8, Shea Butter.',
            ],
            [
                'name' => 'Revitalizing Sleeping Mask',
                'price' => 35000,
                'image' => 'images/our-products/face-care/revitalizing-sleeping-mask.jpg',
                'category' => 'face-care',
                'description' => 'Masker wajah tanpa bilas yang bekerja saat Anda tidur untuk mengunci kelembapan dan menenangkan kulit yang lelah. Bangun dengan kulit yang kenyal, segar, dan tampak beristirahat dengan cukup.',
                'how_to_use' => 'Gunakan sebagai langkah terakhir rutinitas malam. Aplikasikan secara merata ke seluruh wajah dan leher. Biarkan semalaman dan bilas keesokan paginya. Gunakan 2-3 kali seminggu.',
                'ingredients' => 'Sleeping-Hydra Complex, Squalane, Mugwort Extract, Chamomile Extract.',
            ],
            [
                'name' => 'Advanced Retinol Serum',
                'price' => 55000,
                'image' => 'images/our-products/face-care/advanced-retinol-serum.jpg',
                'category' => 'face-care',
                'description' => 'Solusi anti-aging intensif untuk menyamarkan garis halus, kerutan, dan memperbaiki tekstur kulit. Menggunakan teknologi encapsulated retinol yang lebih stabil dan minim iritasi bagi pemula.',
                'how_to_use' => 'Gunakan pada malam hari setelah wajah dibersihkan dan diberi toner. Mulailah dengan penggunaan 2 kali seminggu dan tingkatkan frekuensi perlahan. Jangan gunakan bersamaan dengan Exfoliating Toner.',
                'ingredients' => 'Encapsulated Retinol, Peptides, Allantoin, Centella Asiatica.',
            ],
            [
                'name' => 'Luminous Vit C Serum',
                'price' => 55000,
                'image' => 'images/our-products/face-care/luminous-vit-c-serum.jpg',
                'category' => 'face-care',
                'description' => 'Serum pencerah dengan antioksidan tinggi untuk menyamarkan noda hitam dan melindungi kulit dari radikal bebas. Kulit tampak lebih cerah, merata, dan bercahaya dalam waktu singkat.',
                'how_to_use' => 'Gunakan 2-3 tetes pada wajah setelah toner. Tepuk lembut hingga meresap. Sangat direkomendasikan digunakan di pagi hari sebelum sunscreen untuk proteksi maksimal.',
                'ingredients' => 'Ethyl Ascorbic Acid (Vitamin C), Ferulic Acid, Kakadu Plum Extract, Vitamin E.',
            ],
            [
                'name' => 'Cleansing Oil',
                'price' => 76000,
                'image' => 'images/our-products/face-care/cleansing-oil.jpg',
                'category' => 'face-care',
                'description' => 'Pembersih wajah berbasis minyak yang efektif mengangkat waterproof makeup, sunscreen, dan debu polusi tanpa menyumbat pori-pori. Teksturnya yang ringan berubah menjadi susu saat terkena air, meninggalkan kulit bersih sempurna dan tetap lembap.',
                'how_to_use' => 'Tuangkan 2-3 pompa pada telapak tangan yang kering. Pijat lembut ke seluruh wajah dalam keadaan kering. Berikan sedikit air untuk mengemulsi minyak menjadi putih susu, lalu bilas dengan air hangat hingga bersih.',
                'ingredients' => 'Vitis Vinifera (Grape) Seed Oil, Olive Oil, Vitamin E, PEG-20 Glyceryl Triisostearate.',
            ],
            [
                'name' => 'Pure Gentle Facial Wash',
                'price' => 38000,
                'image' => 'images/our-products/face-care/pure-gentle-facial-wash.jpg',
                'category' => 'face-care',
                'description' => 'Sabun pembersih wajah dengan pH seimbang yang dirancang khusus untuk kulit sensitif. Membersihkan tanpa rasa tertarik atau kering, serta menjaga skin barrier tetap kuat setelah mencuci muka.',
                'how_to_use' => 'Busakan sedikit produk pada tangan yang basah. Pijat wajah dengan gerakan melingkar yang lembut, lalu bilas dengan air hingga bersih. Gunakan pagi dan malam hari.',
                'ingredients' => 'Aqua, Glycerin, Cocamidopropyl Betaine, Sodium Cocoyl Glycinate, Panthenol, Allantoin.',
            ],
            [
                'name' => 'Exfoliating Toner',
                'price' => 58000,
                'image' => 'images/our-products/face-care/exfoliating-toner.jpg',
                'category' => 'face-care',
                'description' => 'Larutan eksfoliasi lembut yang mengangkat sel kulit mati dan membersihkan komedo hingga ke dalam pori. Membantu memperbaiki tekstur kulit yang kasar dan kusam agar tampak lebih halus dan cerah.',
                'how_to_use' => 'Tuangkan secukupnya pada kapas, lalu usap lembut ke seluruh wajah (hindari area mata). Gunakan 2-3 kali seminggu pada malam hari. Wajib gunakan sunscreen di pagi hari.',
                'ingredients' => 'AHA (Glycolic Acid), BHA (Salicylic Acid), PHA (Gluconolactone), Tea Tree Leaf Water.',
            ],
            [
                'name' => 'Hydra Glow Toner',
                'price' => 57500,
                'image' => 'images/our-products/face-care/hydra-glow-toner.jpg',
                'category' => 'face-care',
                'description' => 'Hydrating toner yang memberikan kelembapan instan dan mempersiapkan kulit untuk menyerap produk skincare berikutnya. Memberikan efek plumpy dan kilau sehat alami sejak pemakaian pertama.',
                'how_to_use' => 'Tuangkan langsung ke telapak tangan atau kapas, lalu tepuk-tepuk perlahan ke seluruh wajah yang telah dibersihkan hingga meresap sempurna.',
                'ingredients' => 'Multi-molecular Hyaluronic Acid, Rose Water, Niacinamide, Glycerin.',
            ],

            // --- SECTION 2: BODY CARE ---
            [
                'name' => 'Crystal White Soap Bar',
                'price' => 25000,
                'image' => 'images/our-products/body-care/crystal-white-soap-bar.jpg',
                'category' => 'body-care',
                'description' => 'Soap bar dengan busa lembut yang mampu membersihkan kotoran secara mendalam sekaligus mencerahkan kulit secara instan. Mengandung kristal pencerah yang membantu meratakan warna kulit yang tidak merata tanpa membuatnya kering.',
                'how_to_use' => 'Usapkan sabun pada telapak tangan yang basah atau langsung ke tubuh hingga berbusa. Pijat lembut ke seluruh tubuh selama 1-2 menit agar bahan aktif bekerja maksimal, lalu bilas hingga bersih.',
                'ingredients' => 'Glutathione, Alpha Arbutin, Kojic Acid, Virgin Coconut Oil, Rice Bran Oil.',
            ],
            [
                'name' => 'Firming Body Butter',
                'price' => 79000,
                'image' => 'images/our-products/body-care/firming-body-butter.jpg',
                'category' => 'body-care',
                'description' => 'Pelembap tubuh dengan tekstur creamy yang kaya nutrisi untuk menjaga elastisitas kulit. Sangat efektif untuk mengencangkan area kulit yang kendur dan memberikan kelembapan ekstra pada area yang sangat kering seperti siku dan lutut.',
                'how_to_use' => 'Oleskan secara merata ke seluruh tubuh setelah mandi. Berikan pijatan ekstra pada area yang membutuhkan pengencangan seperti paha, perut, dan lengan.',
                'ingredients' => 'Shea Butter, Cocoa Butter, Vitamin E, Jojoba Oil.',
            ],
            [
                'name' => 'Neck Firming Cream',
                'price' => 54800,
                'image' => 'images/our-products/body-care/neck-firming-cream.jpg',
                'category' => 'body-care',
                'description' => 'Krim khusus area leher dan decolletage yang dirancang untuk menyamarkan garis halus (kerutan leher) dan mencegah kulit kendur. Membantu menjaga kontur leher agar tampak lebih kencang, halus, dan awet muda.',
                'how_to_use' => 'Ambil krim secukupnya, aplikasikan pada area leher dan dada. Pijat lembut dengan gerakan ke arah atas (dari pangkal leher menuju rahang) hingga terserap sempurna.',
                'ingredients' => 'Peptides, Hyaluronic Acid, Niacinamide, Adenosine, Rosehip Oil.',
            ],
            [
                'name' => 'Smooth & Glow Body Scrub',
                'price' => 78000,
                'image' => 'images/our-products/body-care/smooth-glow-body-scrub.jpg',
                'category' => 'body-care',
                'description' => 'Lulur pembersih dengan butiran scrub halus yang efektif mengangkat sel kulit mati dan kotoran penyumbat pori. Menjadikan kulit terasa instan halus, tampak bercahaya, dan mempermudah penyerapan produk body care selanjutnya.',
                'how_to_use' => 'Gunakan 2-3 kali seminggu setelah mandi. Ambil produk secukupnya, gosokkan secara perlahan ke seluruh tubuh dengan gerakan memutar. Fokuskan pada area kasar seperti siku, lutut, dan tumit. Bilas hingga bersih.',
                'ingredients' => 'Apricot Kernel Scubs, Sea Salt, Milk Protein, Licorice Extract.',
            ],
            [
                'name' => 'Pureskin Body Oil',
                'price' => 83000,
                'image' => 'images/our-products/body-care/body-oil.jpg',
                'category' => 'body-care',
                'description' => 'Minyak tubuh yang ringan dan cepat meresap tanpa rasa lengket. Memberikan kilau sehat (healthy glow) pada kulit, mengunci kelembapan, serta membantu menyamarkan tampilan stretch marks dan bekas luka ringan.',
                'how_to_use' => 'Tuangkan beberapa tetes pada telapak tangan, usapkan ke seluruh tubuh setelah mandi atau kapan saja kulit terasa kering. Pijat lembut hingga meresap sempurna.',
                'ingredients' => 'Sweet Almond Oil, Jojoba Oil, Sunflower Seed Oil, Argan Oil, Calendula Extract.',
            ],
            [
                'name' => 'Pureskin Foot Cream',
                'price' => 45000,
                'image' => 'images/our-products/body-care/foot-cream.jpg',
                'category' => 'body-care',
                'description' => 'Solusi intensif untuk kaki yang kasar, kering, dan tumit pecah-pecah. Formulanya memberikan hidrasi mendalam dan menenangkan kaki yang lelah, menjadikan kulit kaki kembali lembut dan sehat.',
                'how_to_use' => 'Oleskan krim secara merata pada kaki yang bersih, fokuskan pada area tumit dan bagian kasar. Gunakan setiap malam sebelum tidur untuk hasil terbaik.',
                'ingredients' => 'Urea, Shea Butter, Tea Tree Oil, Peppermint Oil.',
            ],
            [
                'name' => 'Intensive Repair Body Serum (Night)',
                'price' => 67000,
                'image' => 'images/our-products/body-care/intensive-repair-body-serum-night.jpg',
                'category' => 'body-care',
                'description' => 'Serum tubuh konsentrasi tinggi yang bekerja aktif memperbaiki kerusakan kulit saat Anda beristirahat di malam hari. Membantu regenerasi sel kulit, mencerahkan, dan memperbaiki tekstur kulit agar tampak segar di pagi hari.',
                'how_to_use' => 'Aplikasikan secara merata ke seluruh tubuh sebelum tidur. Pijat lembut hingga meresap sempurna. Gunakan setiap malam untuk hasil optimal.',
                'ingredients' => 'Niacinamide, Vitamin C, Peptides, Ceramides.',
            ],
            [
                'name' => 'UV Body Mist Protection',
                'price' => 59000,
                'image' => 'images/our-products/body-care/uv-body-mist-protection.jpg',
                'category' => 'body-care',
                'description' => 'Tabir surya badan dalam bentuk mist yang praktis digunakan kapan saja. Melindungi kulit dari paparan sinar UVA & UVB tanpa rasa lengket, memberikan sensasi dingin yang menyegarkan, serta invisible finish (tanpa whitecast).',
                'how_to_use' => 'Kocok botol sebelum digunakan. Semprotkan secara merata ke seluruh tubuh 15 menit sebelum terpapar sinar matahari. Gunakan ulang setiap 2 jam atau setelah berkeringat atau berenang.',
                'ingredients' => 'Zinc Oxide, Titanium Dioxide, Aloe Vera Extract, Green Tea Extract.',
            ],

            // --- SECTION 3: BEST SELLERS ---
            [
                'name' => 'Brightening Body Wash',
                'price' => 47000,
                'image' => 'images/our-products/best-seller/brightening-body-wash.jpg',
                'category' => 'best-sellers',
                'description' => 'Liquid soap body wash dengan aroma menyegarkan yang tidak hanya membersihkan, tetapi juga mencerahkan kulit secara bertahap. Diformulasikan untuk mengangkat kusam dan memberikan kesegaran instan setiap kali mandi.',
                'how_to_use' => 'Tuangkan secukupnya pada telapak tangan atau shower puff. Busakan ke seluruh tubuh yang telah dibasahi, lalu bilas hingga bersih.',
                'ingredients' => 'Vitamin C, Glutathione, Glycerin, Aloe Vera Extract.',
            ],
            [
                'name' => 'Instant White Body Lotion (Day)',
                'price' => 65000,
                'image' => 'images/our-products/best-seller/instant-white-body-lotion-day.jpg',
                'category' => 'best-sellers',
                'description' => 'Body lotion yang memberikan efek cerah seketika (instant tone-up) tanpa rasa abu-abu atau lengket. Selain mencerahkan, produk ini melindungi kulit dari radikal bebas dan menjaga kelembapan sepanjang hari.',
                'how_to_use' => 'Oleskan body lotion secara merata ke seluruh tubuh setiap pagi setelah mandi. Pijat lembut hingga meresap sempurna.',
                'ingredients' => 'Niacinamide, Vitamin C, Shea Butter, Jojoba Oil.',
            ],
            [
                'name' => 'Calming Aloe Vera Gel',
                'price' => 45900,
                'image' => 'images/our-products/best-seller/calming-aloe-vera-gel.jpg',
                'category' => 'best-sellers',
                'description' => 'Gel multifungsi dengan kandungan lidah buaya murni yang memberikan sensasi dingin seketika. Sangat efektif untuk menenangkan kulit yang kemerahan akibat terbakar matahari, iritasi ringan, atau setelah bercukur.',
                'how_to_use' => 'Oleskan secukupnya pada area wajah atau tubuh yang membutuhkan hidrasi dan efek menenangkan. Bisa digunakan sebagai masker, pelembap, atau dasar makeup.',
                'ingredients' => 'Aloe Barbadensis Leaf Juice, Glycerin, Panthenol, Allantoin.',
            ],
            [
                'name' => 'Brightening Day Cream',
                'price' => 49000,
                'image' => 'images/our-products/best-seller/brightening-day-cream.jpg',
                'category' => 'best-sellers',
                'description' => 'Krim wajah pagi hari yang ringan dan cepat meresap. Membantu mencerahkan wajah, memudarkan noda hitam, dan memberikan efek glowing sehat sambil menjaga pertahanan kulit dari polusi udara.',
                'how_to_use' => 'Oleskan krim secara merata pada wajah dan leher setiap pagi setelah toner dan serum. Pijat lembut hingga meresap sempurna. Lanjutkan dengan sunscreen untuk proteksi maksimal.',
                'ingredients' => 'Niacinamide, Vitamin C, Hyaluronic Acid, Licorice Extract.',
            ],
            [
                'name' => 'Acne Spot Corrector',
                'price' => 39000,
                'image' => 'images/our-products/best-seller/acne-spot-corrector.jpg',
                'category' => 'best-sellers',
                'description' => 'Gel totol jerawat yang bekerja cepat mengeringkan jerawat aktif dan meredakan peradangan. Formulanya dirancang untuk membunuh bakteri penyebab jerawat sekaligus meminimalisir bekas luka jerawat.',
                'how_to_use' => 'Aplikasikan gel langsung pada area jerawat yang meradang. Gunakan 2-3 kali sehari hingga jerawat mengering dan sembuh.',
                'ingredients' => 'Salicylic Acid, Tea Tree Oil, Niacinamide, Zinc PCA.',
            ],
            [
                'name' => 'Back & Chest Acne Spray',
                'price' => 55000,
                'image' => 'images/our-products/best-seller/back-chest-acne-spray.jpg',
                'category' => 'best-sellers',
                'description' => 'Semprotan khusus untuk mengatasi jerawat di area punggung, dada, dan lengan. Botol dirancang agar bisa menyemprot dari berbagai arah (360 derajat) untuk menjangkau area sulit, membantu membersihkan pori dan merawat kulit bertekstur.',
                'how_to_use' => 'Kocok botol sebelum digunakan. Semprotkan secara merata pada area yang berjerawat setelah mandi. Biarkan kering tanpa dibilas. Gunakan 1-2 kali sehari.',
                'ingredients' => 'Salicylic Acid, Niacinamide, Witch Hazel Extract, Aloe Vera Extract.',
            ],
            [
                'name' => 'Daily UV Shield SPF50',
                'price' => 45000,
                'image' => 'images/our-products/best-seller/daily-UV-shield-SPF50.jpg',
                'category' => 'best-sellers',
                'description' => 'Sunscreen wajah dengan perlindungan spektrum luas yang sangat ringan dan tidak meninggalkan whitecast. Formulanya melembapkan sekaligus melindungi kulit dari penuaan dini akibat paparan sinar matahari dan blue light.',
                'how_to_use' => 'Oleskan sunscreen secara merata pada wajah dan leher 15 menit sebelum terpapar sinar matahari. Gunakan ulang setiap 2 jam atau setelah berkeringat atau berenang.',
                'ingredients' => 'Zinc Oxide, Titanium Dioxide, Niacinamide, Hyaluronic Acid, Vitamin E.',
            ],
            [
                'name' => 'Underarm Fold Cream',
                'price' => 39500,
                'image' => 'images/our-products/best-seller/underarm-fold-cream.jpg',
                'category' => 'best-sellers',
                'description' => 'Krim pencerah khusus untuk area lipatan kulit yang cenderung gelap dan kasar, seperti ketiak, siku, lutut, dan selangkangan. Membantu menghaluskan tekstur kulit (chicken skin) dan mencerahkan area tersebut secara efektif.',
                'how_to_use' => 'Oleskan krim secara merata pada area lipatan kulit yang gelap setelah mandi. Pijat lembut hingga meresap sempurna. Gunakan setiap pagi dan malam untuk hasil optimal.',
                'ingredients' => 'Niacinamide, Alpha Arbutin, Licorice Extract, Shea Butter.',
            ],

            // --- SECTION 4: BEST PACKAGES ---
            [
                'name' => 'Acne Rescue Series',
                'price' => 80000,
                'image' => 'images/our-products/best-package/acne-rescue-series.jpg',
                'category' => 'best-packages',
                'description' => 'Solusi komprehensif untuk kulit berjerawat yang berfokus pada pemulihan skin barrier. Berbeda dengan perawatan jerawat biasa yang membuat kering, Rebornfeel Acne Rescue Series menggunakan formula Amino Acid dan Radiant Repair untuk menenangkan peradangan, mengontrol sebum, sekaligus memperbaiki tekstur kulit agar kembali sehat dan bercahaya. Cocok untuk kulit sensitif dan berjerawat.',
                'how_to_use' => '1. Amino Acid Facial Cleanser: Bersihkan wajah dengan pembersih berbahan dasar asam amino yang lembut untuk mengangkat kotoran tanpa merusak kelembapan alami kulit.
                2. Radiant Moisturizing Essence Toner: Tepuk-tepuk toner pada wajah untuk menghidrasi secara mendalam dan menyeimbangkan pH kulit setelah mencuci muka.
                3. Radiant Repair Essence: Aplikasikan beberapa tetes serum ke seluruh wajah untuk mempercepat pemulihan bekas jerawat dan memperkuat pertahanan kulit.
                4. Radiant Repair Facial Cream: Gunakan krim pelembap sebagai langkah terakhir untuk mengunci nutrisi dan memberikan perlindungan sepanjang hari/malam.',
                'ingredients' => 'Salicylic Acid, Niacinamide, Tea Tree Oil, Zinc PCA, Glycerin.',
            ],
            [
                'name' => 'The Basic Glow Kit',
                'price' => 92000,
                'image' => 'images/our-products/best-package/the-basic-glow-kit.jpg',
                'category' => 'best-packages',
                'description' => 'Manjakan tubuh Anda dengan kekuatan alam melalui The Basic Glow Kit. Rangkaian ini diformulasikan khusus dengan Phyto-Powered Complex untuk memberikan hidrasi mendalam dan nutrisi esensial bagi kulit tubuh. Set ini mengubah rutinitas mandi harian menjadi ritual perawatan spa yang mewah, menjadikan kulit terasa luar biasa lembut, kenyal, dan bercahaya alami dari kepala hingga ujung kaki.',
                'how_to_use' => '1. Conditioning Hand & Body Wash: Awali dengan membersihkan tubuh menggunakan sabun mandi ini. Teksturnya yang lembut membersihkan tanpa menghilangkan kelembapan alami kulit.
                2. Softening Hand & Body Lotion: Setelah mandi, aplikasikan losion ke seluruh tubuh dan tangan. Formulanya cepat meresap untuk memberikan kelembutan instan pada kulit yang kering.
                3. Hydrating Body Souffle: Untuk hidrasi ekstra dan perlindungan di area yang sangat kering, kunci kelembapan dengan Body Souffle yang memiliki tekstur whipped mewah dan lembut.',
                'ingredients' => 'Vitamin C, Hyaluronic Acid, Niacinamide, Glycerin, Aloe Vera Extract.',
            ],
            [
                'name' => 'The Ultimate Pureskin Experience',
                'price' => 100000,
                'image' => 'images/our-products/best-package/the-ultimate-pureskin-experience.jpg',
                'category' => 'best-packages',
                'description' => 'Rasakan transformasi kulit menuju kemurnian maksimal dengan The Ultimate Pureskin Experience. Rangkaian ini dikurasi khusus untuk membersihkan pori secara mendalam, menenangkan kemerahan, dan memperbaiki tekstur kulit yang tidak merata. Mengandalkan kekuatan Heartleaf yang dikenal sebagai bahan penenang alami terbaik, paket ini memberikan hidrasi tanpa rasa lengket, menjadikan kulit tampak bersih, sehat, dan jernih.',
                'how_to_use' => '1. Heartleaf Pore Control Cleansing Oil: Gunakan sebagai langkah double cleansing pertama untuk mengangkat makeup dan komedo.
                2. Heartleaf Quercetinol Pore Deep Cleansing Foam: Lanjutkan dengan sabun wajah ini untuk membersihkan sisa kotoran hingga ke dalam pori-pori.
                3. Heartleaf 77% Soothing Toner: Tuangkan pada kapas atau telapak tangan, lalu aplikasikan ke wajah untuk menenangkan kulit secara instan.
                4. Niacinamide 10% + TXA 4% Serum: Gunakan beberapa tetes serum untuk mencerahkan noda hitam dan meratakan warna kulit.
                5. Heartleaf 70% Daily Relief Lotion: Akhiri dengan pelembap ringan ini untuk mengunci hidrasi dan menjaga kelembutan kulit sepanjang hari.',
                'ingredients' => 'Glutathione, Shea Butter, Jojoba Oil, Niacinamide, Peptides.',
            ],
            [
                'name' => 'Ageless Miracle Set',
                'price' => 120000,
                'image' => 'images/our-products/best-package/ageless-miracle-set.jpg',
                'category' => 'best-packages',
                'description' => 'Kembalikan kemilau muda kulit Anda dengan sistem perawatan terstruktur Ageless Miracle Set. Dirancang dengan pendekatan presisi, rangkaian ini bekerja secara bertahap untuk menghaluskan garis halus, meningkatkan elastisitas, dan memberikan hidrasi mendalam. Dengan formula yang menggabungkan kemurnian bahan alami dan inovasi sains, set ini adalah investasi terbaik untuk kulit yang tampak lebih kencang, segar, dan awet muda di setiap tahap usia.',
                'how_to_use' => '1. Cleanser: Awali dengan membersihkan wajah dari debu dan kotoran. Teksturnya yang lembut mempersiapkan kulit untuk menerima nutrisi berikutnya.
                2. Day Cream: Gunakan pada pagi hari setelah pembersihan. Pelembap ini dilengkapi dengan perlindungan broad spectrum SPF 30 untuk menjaga kulit dari penuaan dini akibat sinar matahari.
                3. Serum: Aplikasikan beberapa tetes serum konsentrat tinggi pada wajah dan leher untuk menargetkan masalah penuaan secara intensif.
                4. Night Cream: Sebagai langkah terakhir sebelum tidur, aplikasikan krim malam ini untuk membantu proses regenerasi sel kulit saat Anda beristirahat.',
                'ingredients' => 'Encapsulated Retinol, Peptides, Hyaluronic Acid, Niacinamide, Vitamin C.',
            ],
            [
                'name' => 'Intimate Care Solution',
                'price' => 78000,
                'image' => 'images/our-products/best-package/intimate-care-solution.jpg',
                'category' => 'best-packages',
                'description' => 'Rangkaian perawatan intensif yang dirancang untuk memberikan hidrasi mendalam dan mengembalikan cahaya alami kulit. Menggunakan kekuatan bahan botani pilihan seperti Rosewater, Coconut Water, dan Pineapple Enzyme, paket ini bekerja secara lembut namun efektif untuk menenangkan kulit sensitif, memperbaiki tekstur, dan memberikan efek glowing yang sehat tanpa iritasi.',
                'how_to_use' => '1. Rose Hibiscus Face Mist: Semprotkan pada wajah yang bersih sebagai langkah awal untuk menghidrasi dan menyegarkan kulit.
                2. Brighten Glow Mask: Aplikasikan masker secara merata, diamkan selama 10-15 menit, lalu bilas. Gunakan 2-3 kali seminggu untuk eksfoliasi lembut.
                3. Phoenix Facial Oil: Gunakan beberapa tetes minyak untuk menutrisi dan merevitalisasi kulit agar tampak lebih kencang.
                4. Pink Cloud Moisture Creme: Kunci seluruh rangkaian dengan krim pelembap ini untuk hasil akhir kulit yang halus, kenyal, dan tidak lengket.',
                'ingredients' => 'Rose Water, Hibiscus Extract, Coconut Water, Pineapple Enzyme, Squalane.',
            ],
            [
                'name' => 'Mommy Pregnancy Pack',
                'price' => 127000,
                'image' => 'images/our-products/best-package/mommy-pregnancy-pack.jpg',
                'category' => 'best-packages',
                'description' => 'Dukungan penuh untuk tubuh Ibu dari masa kehamilan hingga pemulihan pascapersalinan. Mommy Pregnancy Pack adalah kurasi produk esensial yang dirancang untuk mengatasi perubahan fisik yang nyata—mulai dari hidrasi intensif untuk perut yang merenggang hingga kenyamanan instan untuk kaki yang lelah. Diformulasikan dengan bahan yang aman bagi Ibu dan bayi, set ini memastikan Ibu tetap merasa nyaman, terlindungi, dan terawat di setiap trimester.',
                'how_to_use' => '1. Bump + Body In-Shower Lotion: Gunakan saat mandi di seluruh tubuh untuk hidrasi praktis tanpa rasa lengket. 
                2. No-Friction Stick: Oleskan pada area paha dalam atau lipatan kulit lainnya untuk mencegah iritasi akibat gesekan kulit saat beraktivitas.
                3. Stretch Prep Balm: Pijat lembut pada area perut, payudara, dan pinggul secara rutin untuk menjaga elastisitas kulit dan meminimalkan munculnya stretch marks.
                4. Leg + Foot Swell Spray: Semprotkan kapan saja pada kaki dan betis untuk memberikan sensasi dingin instan dan meredakan rasa tidak nyaman akibat bengkak.',
                'ingredients' => 'Shea Butter, Cocoa Butter, Vitamin E, Peppermint Oil, Arnica Extract.',
            ],
            [
                'name' => 'Body Brightening Trio',
                'price' => 85000,
                'image' => 'images/our-products/best-package/body-brightening-trio.jpg',
                'category' => 'best-packages',
                'description' => 'Hadirkan standar baru dalam perawatan tubuh dengan Body Brightening Trio. Rangkaian esensial ini dirancang untuk membersihkan, mengeksfoliasi, dan menghidrasi kulit secara mendalam dengan pendekatan minimalis namun sangat efektif. Menggabungkan kemewahan aroma Sandalwood dan formula tanpa pewangi tambahan pada losionnya, set ini bekerja sinergis untuk mencerahkan kulit kusam, menghaluskan tekstur, dan menjaga kesehatan skin barrier tubuh Anda agar tampak lebih bersih dan bercahaya.',
                'how_to_use' => '1. The Body Wash (Sandalwood): Gunakan saat mandi untuk pembersihan harian yang menenangkan. Formulanya yang kaya akan vitamin membantu menyeimbangkan pH kulit.
                2. The Body Exfoliator (Sandalwood): Gunakan 1-2 kali seminggu. Pijat lembut pada kulit basah dengan gerakan melingkar untuk mengangkat sel kulit mati secara mekanis dan kimiawi, lalu bilas hingga bersih.
                3. The Body Lotion (Fragrance-Free): Aplikasikan segera setelah mandi pada kulit yang masih sedikit lembap untuk mengunci hidrasi secara maksimal dan menutrisi kulit tanpa rasa lengket.',
                'ingredients' => 'Vitamin C, Glutathione, Sandalwood Extract, Hyaluronic Acid, Glycerin.',
            ],
            [
                'name' => 'The Glass Skin Specialist',
                'price' => 145000,
                'image' => 'images/our-products/best-package/glass-skin-specialist.jpg',
                'category' => 'best-packages',
                'description' => 'Wujudkan standar tertinggi kulit sehat dengan The Glass Skin Specialist. Rangkaian ini dikurasi oleh para ahli untuk memberikan hasil kulit yang jernih, halus, dan tampak transparan tanpa menggunakan bahan kimia agresif. Dengan fokus pada pemulihan kelembapan alami dan perlindungan lapisan kulit, set ini memastikan wajah Anda tetap terhidrasi secara maksimal, bebas dari kemerahan, dan memiliki tekstur yang sempurna seperti kaca.',
                'how_to_use' => '1. Face Wash: Bersihkan wajah dengan pembersih yang sangat lembut ini untuk mengangkat kotoran tanpa merusak skin barrier.
                2. Face Lotion: Aplikasikan pelembap ringan ini pada wajah yang bersih untuk menghidrasi kulit secara instan dan memberikan dasar yang halus.
                3. Face Cream: Gunakan pada area yang membutuhkan kelembapan lebih dalam atau sebagai langkah terakhir untuk mengunci hidrasi agar kulit tampak kenyal sepanjang hari.
                4. Lip Balm: Sempurnakan tampilan sehat Anda dengan memberikan nutrisi pada bibir agar tetap lembap dan lembut.',
                'ingredients' => 'Hyaluronic Acid, Niacinamide, Peptides, Vitamin C, Ceramides.',
            ],
        ];

        foreach ($products as $product) {
            Products::create($product);
        }
    }
}
