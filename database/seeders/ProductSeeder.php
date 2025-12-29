<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product; // Pastikan Model Product sudah ada
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
            ],
            [
                'name' => 'Revitalizing Sleeping Mask',
                'price' => 35000,
                'image' => 'images/our-products/face-care/revitalizing-sleeping-mask.jpg',
                'category' => 'face-care',
            ],
            [
                'name' => 'Advanced Retinol Serum',
                'price' => 55000,
                'image' => 'images/our-products/face-care/advanced-retinol-serum.jpg',
                'category' => 'face-care',
            ],
            [
                'name' => 'Luminous Vit C Serum',
                'price' => 55000,
                'image' => 'images/our-products/face-care/luminous-vit-c-serum.jpg',
                'category' => 'face-care',
            ],
            [
                'name' => 'Cleansing Oil',
                'price' => 76000,
                'image' => 'images/our-products/face-care/cleansing-oil.jpg',
                'category' => 'face-care',
            ],
            [
                'name' => 'Pure Gentle Facial Wash',
                'price' => 38000,
                'image' => 'images/our-products/face-care/pure-gentle-facial-wash.jpg',
                'category' => 'face-care',
            ],
            [
                'name' => 'Exfoliating Toner',
                'price' => 58000,
                'image' => 'images/our-products/face-care/exfoliating-toner.jpg',
                'category' => 'face-care',
            ],
            [
                'name' => 'Hydra Glow Toner',
                'price' => 57500,
                'image' => 'images/our-products/face-care/hydra-glow-toner.jpg',
                'category' => 'face-care',
            ],

            // --- SECTION 2: BODY CARE ---
            [
                'name' => 'Crystal White Soap Bar',
                'price' => 25000,
                'image' => 'images/our-products/body-care/crystal-white-soap-bar.jpg',
                'category' => 'body-care',
            ],
            [
                'name' => 'Firming Body Butter',
                'price' => 79000,
                'image' => 'images/our-products/body-care/firming-body-butter.jpg',
                'category' => 'body-care',
            ],
            [
                'name' => 'Neck Firming Cream',
                'price' => 54800,
                'image' => 'images/our-products/body-care/neck-firming-cream.jpg',
                'category' => 'body-care',
            ],
            [
                'name' => 'Smooth & Glow Body Scrub',
                'price' => 78000,
                'image' => 'images/our-products/body-care/smooth-glow-body-scrub.jpg',
                'category' => 'body-care',
            ],
            [
                'name' => 'Pureskin Body Oil',
                'price' => 83000,
                'image' => 'images/our-products/body-care/body-oil.jpg',
                'category' => 'body-care',
            ],
            [
                'name' => 'Pureskin Foot Cream',
                'price' => 45000,
                'image' => 'images/our-products/body-care/foot-cream.jpg',
                'category' => 'body-care',
            ],
            [
                'name' => 'Intensive Repair Body Serum (Night)',
                'price' => 67000,
                'image' => 'images/our-products/body-care/intensive-repair-body-serum-night.jpg',
                'category' => 'body-care',
            ],
            [
                'name' => 'UV Body Mist Protection',
                'price' => 59000,
                'image' => 'images/our-products/body-care/uv-body-mist-protection.jpg',
                'category' => 'body-care',
            ],

            // --- SECTION 3: BEST SELLERS ---
            [
                'name' => 'Brightening Body Wash',
                'price' => 47000,
                'image' => 'images/our-products/best-seller/brightening-body-wash.jpg',
                'category' => 'best-sellers',
            ],
            [
                'name' => 'Instant White Body Lotion (Day)',
                'price' => 65000,
                'image' => 'images/our-products/best-seller/instant-white-body-lotion-day.jpg',
                'category' => 'best-sellers',
            ],
            [
                'name' => 'Calming Aloe Vera Gel',
                'price' => 45900,
                'image' => 'images/our-products/best-seller/calming-aloe-vera-gel.jpg',
                'category' => 'best-sellers',
            ],
            [
                'name' => 'Brightening Day Cream',
                'price' => 49000,
                'image' => 'images/our-products/best-seller/brightening-day-cream.jpg',
                'category' => 'best-sellers',
            ],
            [
                'name' => 'Acne Spot Corrector',
                'price' => 39000,
                'image' => 'images/our-products/best-seller/acne-spot-corrector.jpg',
                'category' => 'best-sellers',
            ],
            [
                'name' => 'Back & Chest Acne Spray',
                'price' => 55000,
                'image' => 'images/our-products/best-seller/back-chest-acne-spray.jpg',
                'category' => 'best-sellers',
            ],
            [
                'name' => 'Daily UV Shield SPF50',
                'price' => 45000,
                'image' => 'images/our-products/best-seller/daily-UV-shield-SPF50.jpg',
                'category' => 'best-sellers',
            ],
            [
                'name' => 'Underarm Fold Cream',
                'price' => 39500,
                'image' => 'images/our-products/best-seller/underarm-fold-cream.jpg',
                'category' => 'best-sellers',
            ],

            // --- SECTION 4: BEST PACKAGES ---
            [
                'name' => 'Acne Rescue Series',
                'price' => 80000,
                'image' => 'images/our-products/best-package/acne-rescue-series.jpg',
                'category' => 'best-packages',
            ],
            [
                'name' => 'The Basic Glow Kit',
                'price' => 92000,
                'image' => 'images/our-products/best-package/the-basic-glow-kit.jpg',
                'category' => 'best-packages',
            ],
            [
                'name' => 'The Ultimate Pureskin Experience',
                'price' => 100000,
                'image' => 'images/our-products/best-package/the-ultimate-pureskin-experience.jpg',
                'category' => 'best-packages',
            ],
            [
                'name' => 'Ageless Miracle Set',
                'price' => 120000,
                'image' => 'images/our-products/best-package/ageless-miracle-set.jpg',
                'category' => 'best-packages',
            ],
            [
                'name' => 'Intimate Care Solution',
                'price' => 78000,
                'image' => 'images/our-products/best-package/intimate-care-solution.jpg',
                'category' => 'best-packages',
            ],
            [
                'name' => 'Mommy Pregnancy Pack',
                'price' => 127000,
                'image' => 'images/our-products/best-package/mommy-pregnancy-pack.jpg',
                'category' => 'best-packages',
            ],
            [
                'name' => 'Body Brightening Trio',
                'price' => 85000,
                'image' => 'images/our-products/best-package/body-brightening-trio.jpg',
                'category' => 'best-packages',
            ],
            [
                'name' => 'The Glass Skin Specialist',
                'price' => 145000,
                'image' => 'images/our-products/best-package/glass-skin-specialist.jpg',
                'category' => 'best-packages',
            ],
        ];

        foreach ($products as $product) {
            Products::create($product);
        }
    }
}
