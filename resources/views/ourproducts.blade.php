<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PURESKIN</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quintessential&family=Marck+Script&family=Manuale:wght@300..800&family=Playfair+Display:wght@400;700&family=Lora&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-white text-black font-manuale antialiased overflow-x-hidden">
    <section class="relative w-full bg-cover bg-center flex flex-col justify-center items-center text-center px-5">
        <nav class="absolute top-0 w-full py-4 px-4 md:py-7.5 md:px-15 flex justify-center md:justify-end items-center z-10 animate-fadeInUp bg-[#FFDCDC]">
            <ul class="list-none flex flex-wrap justify-center gap-4 sm:gap-6 md:gap-10 items-center">

                <li><a href="/" class="font-quintessential text-sm sm:text-base md:text-[20px] text-black no-underline hover:opacity-70 transition-opacity">Home</a></li>
                <li><a href="/aboutus" class="font-quintessential text-sm sm:text-base md:text-[20px] text-black no-underline hover:opacity-70 transition-opacity">About</a></li>
                <li><a href="/ourproducts" class="font-quintessential text-sm sm:text-base md:text-[20px] text-black no-underline hover:opacity-70 transition-opacity">Products</a></li>
                <li><a href="/ourtreatments" class="font-quintessential text-sm sm:text-base md:text-[20px] text-black no-underline hover:opacity-70 transition-opacity">Treatments</a></li>

                <li>
                    <a href="#">
                        <img src="/images/icon/Profile.svg" alt="Profile Icon" class="w-5 h-5 md:w-6 md:h-6 ml-3 md:ml-7.5 cursor-pointer hover:scale-110 transition-transform">
                    </a>
                </li>
            </ul>
        </nav>
    </section>

    <section class="mt-25 flex justify-center items-center animate-fadeInUp">
        <div class="relative mx-auto overflow-hidden shadow-lg rounded-2xl max-w-400 w-[89%] md:w-[95%]">
            <img src="{{ asset('images/our-products/hero-images/hero-2.png') }}" alt="Hero Image" class="w-full h-50 md:h-100 object-cover">
            <div class="absolute inset-0 flex flex-col items-center justify-center bg-black/30">
                <h1 class="text-[#FFD6BA] text-4xl md:text-8xl font-serif tracking-widest uppercase drop-shadow-lg">PURESKIN</h1>
                <p class="text-[#FFD6BA] text-lg md:text-5xl font-marck mt-2 drop-shadow-md">Glow with Confidence</p>
            </div>
        </div>
    </section>

    <main class="max-w-366 mx-auto px-4 py-4 ">
        <h1 class="text-center font-marck text-4xl md:text-7xl font-bold text-slate-950 mb-3 mt-6 animate-fadeInUp">Our Products</h1>

        <section class="mt-12 animate-fadeInUp">

            <div class="justify-items-left">
                <h2 class="ml-1 md:ml-8 font-marck text-xl md:text-3xl font-bold text-slate-950 mb-1">Face Care: "Your Skin's Daily Love Letter"</h2>
                <p class="ml-5 md:ml-15 max-w-2xl md:max-w-7xl font-lora text-xs md:text-lg text-slate-900 mb-4">Rayakan kilau sejati wajahmu dengan nutrisi mendalam yang mengubah setiap pantulan cermin menjadi cerita cinta.</p>
            </div>

            <div class="swiper mySwiper relative px-12">
                <div class="swiper-wrapper">
                    <div class="swiper-slide w-50 p-4">
                        <div class="bg-[#FFDCDC] p-4 rounded-2xl flex flex-col justify-between transition-transform duration-300 hover:-translate-y-2 hover:shadow-lg group h-full">
                            <div class="mb-4 flex justify-center items-center">
                                <img src="{{ asset('images/our-products/face-care/ultimate-eye-cream.jpg') }}" alt="Ultimate Eye Cream" class="rounded-2xl h-auto object-contain transition-transform duration-500 group-hover:scale-100 block">
                            </div>
                            <div class="grow">
                                <h3 class="font-manuale font-medium md:font-semibold text-lg md:text-xl text-black leading-tight h-12">Ultimate Eye Cream</h3>
                                <div class="flex justify-between items-center mt-4 mb-2 space-x-3 md:space-x-4">
                                    <p class="text-base md:text-xl font-medium md:font-semibold">Rp45.000</p>
                                    <button type="submit" class="bg-[#FFE8CD] text-black py-1 px-1.5 md:px-4 md:py-2 rounded-lg text-xs md:text-sm font-medium hover:bg-[#FFD6BA] transition duration-300 shrink-0">Add to cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide w-50 p-4">
                        <div class="bg-[#FFDCDC] p-4 rounded-2xl flex flex-col justify-between transition-transform duration-300 hover:-translate-y-2 hover:shadow-lg group h-full">
                            <div class="mb-4 flex justify-center items-center">
                                <img src="{{ asset('images/our-products/face-care/revitalizing-sleeping-mask.jpg') }}" alt="Revitalizing Sleeping Mask" class="rounded-2xl h-auto object-contain transition-transform duration-500 group-hover:scale-100 block">
                            </div>
                            <div class="grow">
                                <h3 class="font-manuale font-medium md:font-semibold text-lg md:text-xl text-black leading-tight h-12">Revitalizing Sleeping Mask</h3>
                                <div class="flex justify-between items-center mt-4 mb-2 space-x-3 md:space-x-4">
                                    <p class="text-base md:text-xl font-medium md:font-semibold">Rp35.000</p>
                                    <button type="submit" class="bg-[#FFE8CD] text-black py-1 px-1.5 md:px-4 md:py-2 rounded-lg text-xs md:text-sm font-medium hover:bg-[#FFD6BA] transition duration-300 shrink-0">Add to cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide w-50 p-4">
                        <div class="bg-[#FFDCDC] p-4 rounded-2xl flex flex-col justify-between transition-transform duration-300 hover:-translate-y-2 hover:shadow-lg group h-full">
                            <div class="mb-4 flex justify-center items-center">
                                <img src="{{ asset('images/our-products/face-care/advanced-retinol-serum.jpg') }}" alt="Advanced Retinol Serum" class="rounded-2xl h-auto object-contain transition-transform duration-500 group-hover:scale-100 block">
                            </div>
                            <div class="grow">
                                <h3 class="font-manuale font-medium md:font-semibold text-lg md:text-xl text-black leading-tight h-12">Advanced Retinol Serum</h3>
                                <div class="flex justify-between items-center mt-4 mb-2 space-x-3 md:space-x-4">
                                    <p class="text-base md:text-xl font-medium md:font-semibold">Rp55.000</p>
                                    <button type="submit" class="bg-[#FFE8CD] text-black py-1 px-1.5 md:px-4 md:py-2 rounded-lg text-xs md:text-sm font-medium hover:bg-[#FFD6BA] transition duration-300 shrink-0">Add to cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide w-50 p-4">
                        <div class="bg-[#FFDCDC] p-4 rounded-2xl flex flex-col justify-between transition-transform duration-300 hover:-translate-y-2 hover:shadow-lg group h-full">
                            <div class="mb-4 flex justify-center items-center">
                                <img src="{{ asset('images/our-products/face-care/luminous-vit-c-serum.jpg') }}" alt="Luminous Vit C Serum" class="rounded-2xl h-auto object-contain transition-transform duration-500 group-hover:scale-100 block">
                            </div>
                            <div class="grow">
                                <h3 class="font-manuale font-medium md:font-semibold text-lg md:text-xl text-black leading-tight h-12">Luminous Vit C Serum</h3>
                                <div class="flex justify-between items-center mt-4 mb-2 space-x-3 md:space-x-4">
                                    <p class="text-base md:text-xl font-medium md:font-semibold">Rp55.000</p>
                                    <button type="submit" class="bg-[#FFE8CD] text-black py-1 px-1.5 md:px-4 md:py-2 rounded-lg text-xs md:text-sm font-medium hover:bg-[#FFD6BA] transition duration-300 shrink-0">Add to cart</button>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="swiper-slide w-50 p-4">
                        <div class="bg-[#FFDCDC] p-4 rounded-2xl flex flex-col justify-between transition-transform duration-300 hover:-translate-y-2 hover:shadow-lg group h-full">
                            <div class="mb-4 flex justify-center items-center">
                                <img src="{{ asset('images/our-products/face-care/cleansing-oil.jpg') }}" alt="Cleansing Oil" class="rounded-2xl h-auto object-contain transition-transform duration-500 group-hover:scale-100 block">
                            </div>
                            <div class="grow">
                                <h3 class="font-manuale font-medium md:font-semibold text-lg md:text-xl text-black leading-tight h-12">Cleansing Oil</h3>
                                <div class="flex justify-between items-center mt-4 mb-2 space-x-3 md:space-x-4">
                                    <p class="text-base md:text-xl font-medium md:font-semibold">Rp76.000</p>
                                    <button type="submit" class="bg-[#FFE8CD] text-black py-1 px-1.5 md:px-4 md:py-2 rounded-lg text-xs md:text-sm font-medium hover:bg-[#FFD6BA] transition duration-300 shrink-0">Add to cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide w-50 p-4">
                        <div class="bg-[#FFDCDC] p-4 rounded-2xl flex flex-col justify-between transition-transform duration-300 hover:-translate-y-2 hover:shadow-lg group h-full">
                            <div class="mb-4 flex justify-center items-center">
                                <img src="{{ asset('images/our-products/face-care/pure-gentle-facial-wash.jpg') }}" alt="Pure Gentle Facial Wash" class="rounded-2xl h-auto object-contain transition-transform duration-500 group-hover:scale-100 block">
                            </div>
                            <div class="grow">
                                <h3 class="font-manuale font-medium md:font-semibold text-lg md:text-xl text-black leading-tight h-12">Pure Gentle Facial Wash</h3>
                                <div class="flex justify-between items-center mt-4 mb-2 space-x-3 md:space-x-4">
                                    <p class="text-base md:text-xl font-medium md:font-semibold">Rp38.000</p>
                                    <button type="submit" class="bg-[#FFE8CD] text-black py-1 px-1.5 md:px-4 md:py-2 rounded-lg text-xs md:text-sm font-medium hover:bg-[#FFD6BA] transition duration-300 shrink-0">Add to cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide w-50 p-4">
                        <div class="bg-[#FFDCDC] p-4 rounded-2xl flex flex-col justify-between transition-transform duration-300 hover:-translate-y-2 hover:shadow-lg group h-full">
                            <div class="mb-4 flex justify-center items-center">
                                <img src="{{ asset('images/our-products/face-care/exfoliating-toner.jpg') }}" alt="Exfoliating Toner" class="rounded-2xl h-auto object-contain transition-transform duration-500 group-hover:scale-100 block">
                            </div>
                            <div class="grow">
                                <h3 class="font-manuale font-medium md:font-semibold text-lg md:text-xl text-black leading-tight h-12">Exfoliating Toner</h3>
                                <div class="flex justify-between items-center mt-4 mb-2 space-x-3 md:space-x-4">
                                    <p class="text-base md:text-xl font-medium md:font-semibold">Rp58.000</p>
                                    <button type="submit" class="bg-[#FFE8CD] text-black py-1 px-1.5 md:px-4 md:py-2 rounded-lg text-xs md:text-sm font-medium hover:bg-[#FFD6BA] transition duration-300 shrink-0">Add to cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide w-50 p-4">
                        <div class="bg-[#FFDCDC] p-4 rounded-2xl flex flex-col justify-between transition-transform duration-300 hover:-translate-y-2 hover:shadow-lg group h-full">
                            <div class="mb-4 flex justify-center items-center">
                                <img src="{{ asset('images/our-products/face-care/hydra-glow-toner.jpg') }}" alt="Hydra Glow Toner" class="rounded-2xl h-auto object-contain transition-transform duration-500 group-hover:scale-100 block">
                            </div>
                            <div class="grow">
                                <h3 class="font-manuale font-medium md:font-semibold text-lg md:text-xl text-black leading-tight h-12">Hydra Glow Toner</h3>
                                <div class="flex justify-between items-center mt-4 mb-2 space-x-3 md:space-x-4">
                                    <p class="text-base md:text-xl font-medium md:font-semibold">Rp57.500</p>
                                    <button type="submit" class="bg-[#FFE8CD] text-black py-1 px-1.5 md:px-4 md:py-2 rounded-lg text-xs md:text-sm font-medium hover:bg-[#FFD6BA] transition duration-300 shrink-0">Add to cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-button-prev w-5! h-5! md:w-7! md:h-7! text-neutral-950! hover:text-neutral-900!"></div>
                <div class="swiper-button-next w-5! h-5! md:w-7! md:h-7! text-neutral-950! hover:text-neutral-900!"></div>
            </div>
        </section>

        <section class="mt-12">
            <div class="justify-items-left">
                <h2 class="ml-1 md:ml-8 font-marck text-xl md:text-3xl font-bold text-slate-950 mb-1">Body Care: "The Ultimate Sanctuary"</h2>
                <p class="ml-5 md:ml-15 max-w-2xl md:max-w-7xl font-lora text-xs md:text-lg text-slate-900 mb-4">Manjakan setiap inci tubuhmu dalam pelukan kelembutan yang mengubah rutinitas harian menjadi momen spa pribadi.</p>
            </div>

            <div class="swiper mySwiper relative px-12">
                <div class="swiper-wrapper">
                    <div class="swiper-slide w-50 p-4">
                        <div class="bg-[#FFDCDC] p-4 rounded-2xl flex flex-col justify-between transition-transform duration-300 hover:-translate-y-2 hover:shadow-lg group h-full">
                            <div class="mb-4 flex justify-center items-center">
                                <img src="{{ asset('images/our-products/body-care/crystal-white-soap-bar.jpg') }}" alt="Crystal White Soap Bar" class="rounded-2xl h-auto object-contain transition-transform duration-500 group-hover:scale-100 block">
                            </div>
                            <div class="grow">
                                <h3 class="font-manuale font-medium md:font-semibold text-lg md:text-xl text-black leading-tight h-12">Crystal White Soap Bar</h3>
                                <div class="flex justify-between items-center mt-4 mb-2 space-x-3 md:space-x-4">
                                    <p class="text-base md:text-xl font-medium md:font-semibold">Rp25.000</p>
                                    <button type="submit" class="bg-[#FFE8CD] text-black py-1 px-1.5 md:px-4 md:py-2 rounded-lg text-xs md:text-sm font-medium hover:bg-[#FFD6BA] transition duration-300 shrink-0">Add to cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide w-50 p-4">
                        <div class="bg-[#FFDCDC] p-4 rounded-2xl flex flex-col justify-between transition-transform duration-300 hover:-translate-y-2 hover:shadow-lg group h-full">
                            <div class="mb-4 flex justify-center items-center">
                                <img src="{{ asset('images/our-products/body-care/firming-body-butter.jpg') }}" alt="Firming Body Butter" class="rounded-2xl h-auto object-contain transition-transform duration-500 group-hover:scale-100 block">
                            </div>
                            <div class="grow">
                                <h3 class="font-manuale font-medium md:font-semibold text-lg md:text-xl text-black leading-tight h-12">Firming Body Butter</h3>
                                <div class="flex justify-between items-center mt-4 mb-2 space-x-3 md:space-x-4">
                                    <p class="text-base md:text-xl font-medium md:font-semibold">Rp79.000</p>
                                    <button type="submit" class="bg-[#FFE8CD] text-black py-1 px-1.5 md:px-4 md:py-2 rounded-lg text-xs md:text-sm font-medium hover:bg-[#FFD6BA] transition duration-300 shrink-0">Add to cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide w-50 p-4">
                        <div class="bg-[#FFDCDC] p-4 rounded-2xl flex flex-col justify-between transition-transform duration-300 hover:-translate-y-2 hover:shadow-lg group h-full">
                            <div class="mb-4 flex justify-center items-center">
                                <img src="{{ asset('images/our-products/body-care/neck-firming-cream.jpg') }}" alt="Neck Firming Cream" class="rounded-2xl h-auto object-contain transition-transform duration-500 group-hover:scale-100 block">
                            </div>
                            <div class="grow">
                                <h3 class="font-manuale font-medium md:font-semibold text-lg md:text-xl text-black leading-tight h-12">Neck Firming Cream</h3>
                                <div class="flex justify-between items-center mt-4 mb-2 space-x-3 md:space-x-4">
                                    <p class="text-base md:text-xl font-medium md:font-semibold">Rp54.800</p>
                                    <button type="submit" class="bg-[#FFE8CD] text-black py-1 px-1.5 md:px-4 md:py-2 rounded-lg text-xs md:text-sm font-medium hover:bg-[#FFD6BA] transition duration-300 shrink-0">Add to cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide w-50 p-4">
                        <div class="bg-[#FFDCDC] p-4 rounded-2xl flex flex-col justify-between transition-transform duration-300 hover:-translate-y-2 hover:shadow-lg group h-full">
                            <div class="mb-4 flex justify-center items-center">
                                <img src="{{ asset('images/our-products/body-care/smooth-glow-body-scrub.jpg') }}" alt="Smooth Glow Body Scrub" class="rounded-2xl h-auto object-contain transition-transform duration-500 group-hover:scale-100 block">
                            </div>
                            <div class="grow">
                                <h3 class="font-manuale font-medium md:font-semibold text-lg md:text-xl text-black leading-tight h-12">Smooth & Glow Body Scrub</h3>
                                <div class="flex justify-between items-center mt-4 mb-2 space-x-3 md:space-x-4">
                                    <p class="text-base md:text-xl font-medium md:font-semibold">Rp78.000</p>
                                    <button type="submit" class="bg-[#FFE8CD] text-black py-1 px-1.5 md:px-4 md:py-2 rounded-lg text-xs md:text-sm font-medium hover:bg-[#FFD6BA] transition duration-300 shrink-0">Add to cart</button>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="swiper-slide w-50 p-4">
                        <div class="bg-[#FFDCDC] p-4 rounded-2xl flex flex-col justify-between transition-transform duration-300 hover:-translate-y-2 hover:shadow-lg group h-full">
                            <div class="mb-4 flex justify-center items-center">
                                <img src="{{ asset('images/our-products/body-care/body-oil.jpg') }}" alt="Pureskin Body Oil" class="rounded-2xl h-auto object-contain transition-transform duration-500 group-hover:scale-100 block">
                            </div>
                            <div class="grow">
                                <h3 class="font-manuale font-medium md:font-semibold text-lg md:text-xl text-black leading-tight h-12">Pureskin Body Oil</h3>
                                <div class="flex justify-between items-center mt-4 mb-2 space-x-3 md:space-x-4">
                                    <p class="text-base md:text-xl font-medium md:font-semibold">Rp83.000</p>
                                    <button type="submit" class="bg-[#FFE8CD] text-black py-1 px-1.5 md:px-4 md:py-2 rounded-lg text-xs md:text-sm font-medium hover:bg-[#FFD6BA] transition duration-300 shrink-0">Add to cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide w-50 p-4">
                        <div class="bg-[#FFDCDC] p-4 rounded-2xl flex flex-col justify-between transition-transform duration-300 hover:-translate-y-2 hover:shadow-lg group h-full">
                            <div class="mb-4 flex justify-center items-center">
                                <img src="{{ asset('images/our-products/body-care/foot-cream.jpg') }}" alt="Pureskin Foot Cream" class="rounded-2xl h-auto object-contain transition-transform duration-500 group-hover:scale-100 block">
                            </div>
                            <div class="grow">
                                <h3 class="font-manuale font-medium md:font-semibold text-lg md:text-xl text-black leading-tight h-12">Pureskin Foot Cream</h3>
                                <div class="flex justify-between items-center mt-4 mb-2 space-x-3 md:space-x-4">
                                    <p class="text-base md:text-xl font-medium md:font-semibold">Rp45.000</p>
                                    <button type="submit" class="bg-[#FFE8CD] text-black py-1 px-1.5 md:px-4 md:py-2 rounded-lg text-xs md:text-sm font-medium hover:bg-[#FFD6BA] transition duration-300 shrink-0">Add to cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide w-50 p-4">
                        <div class="bg-[#FFDCDC] p-4 rounded-2xl flex flex-col justify-between transition-transform duration-300 hover:-translate-y-2 hover:shadow-lg group h-full">
                            <div class="mb-4 flex justify-center items-center">
                                <img src="{{ asset('images/our-products/body-care/intensive-repair-body-serum-night.jpg') }}" alt="Intensive Repair Body Serum Night" class="rounded-2xl h-auto object-contain transition-transform duration-500 group-hover:scale-100 block">
                            </div>
                            <div class="grow">
                                <h3 class="font-manuale font-medium md:font-semibold text-lg md:text-xl text-black leading-tight h-12">Intensive Repair Body Serum (Night)</h3>
                                <div class="flex justify-between items-center mt-4 mb-2 space-x-3 md:space-x-4">
                                    <p class="text-base md:text-xl font-medium md:font-semibold">Rp67.000</p>
                                    <button type="submit" class="bg-[#FFE8CD] text-black py-1 px-1.5 md:px-4 md:py-2 rounded-lg text-xs md:text-sm font-medium hover:bg-[#FFD6BA] transition duration-300 shrink-0">Add to cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide w-50 p-4">
                        <div class="bg-[#FFDCDC] p-4 rounded-2xl flex flex-col justify-between transition-transform duration-300 hover:-translate-y-2 hover:shadow-lg group h-full">
                            <div class="mb-4 flex justify-center items-center">
                                <img src="{{ asset('images/our-products/body-care/uv-body-mist-protection.jpg') }}" alt="UV Body Mist Protection" class="rounded-2xl h-auto object-contain transition-transform duration-500 group-hover:scale-100 block">
                            </div>
                            <div class="grow">
                                <h3 class="font-manuale font-medium md:font-semibold text-lg md:text-xl text-black leading-tight h-12">UV Body Mist Protection</h3>
                                <div class="flex justify-between items-center mt-4 mb-2 space-x-3 md:space-x-4">
                                    <p class="text-base md:text-xl font-medium md:font-semibold">Rp59.000</p>
                                    <button type="submit" class="bg-[#FFE8CD] text-black py-1 px-1.5 md:px-4 md:py-2 rounded-lg text-xs md:text-sm font-medium hover:bg-[#FFD6BA] transition duration-300 shrink-0">Add to cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-button-prev w-5! h-5! md:w-7! md:h-7! text-neutral-950! hover:text-neutral-900!"></div>
                <div class="swiper-button-next w-5! h-5! md:w-7! md:h-7! text-neutral-950! hover:text-neutral-900!"></div>
            </div>
        </section>

        <section class="mt-12">
            <div class="justify-items-left">
                <h2 class="ml-1 md:ml-8 font-marck text-xl md:text-3xl font-bold text-slate-950 mb-1">Best Sellers: "The Hall of Fame"</h2>
                <p class="ml-5 md:ml-15 max-w-2xl md:max-w-7xl font-lora text-xs md:text-lg text-slate-900 mb-4">Temukan kurasi produk favorit sejuta umat yang telah teruji secara nyata menjadi rahasia kulit impian banyak orang.</p>
            </div>

            <div class="swiper mySwiper relative px-12">
                <div class="swiper-wrapper">
                    <div class="swiper-slide w-50 p-4">
                        <div class="bg-[#FFDCDC] p-4 rounded-2xl flex flex-col justify-between transition-transform duration-300 hover:-translate-y-2 hover:shadow-lg group h-full">
                            <div class="mb-4 flex justify-center items-center">
                                <img src="{{ asset('images/our-products/best-seller/brightening-body-wash.jpg') }}" alt="Brightening Body Wash" class="rounded-2xl h-auto object-contain transition-transform duration-500 group-hover:scale-100 block">
                            </div>
                            <div class="grow">
                                <h3 class="font-manuale font-medium md:font-semibold text-lg md:text-xl text-black leading-tight h-12">Brightening Body Wash</h3>
                                <div class="flex justify-between items-center mt-4 mb-2 space-x-3 md:space-x-4">
                                    <p class="text-base md:text-xl font-medium md:font-semibold">Rp47.000</p>
                                    <button type="submit" class="bg-[#FFE8CD] text-black py-1 px-1.5 md:px-4 md:py-2 rounded-lg text-xs md:text-sm font-medium hover:bg-[#FFD6BA] transition duration-300 shrink-0">Add to cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide w-50 p-4">
                        <div class="bg-[#FFDCDC] p-4 rounded-2xl flex flex-col justify-between transition-transform duration-300 hover:-translate-y-2 hover:shadow-lg group h-full">
                            <div class="mb-4 flex justify-center items-center">
                                <img src="{{ asset('images/our-products/best-seller/instant-white-body-lotion-day.jpg') }}" alt="Instant White Body Lotion Day" class="rounded-2xl h-auto object-contain transition-transform duration-500 group-hover:scale-100 block">
                            </div>
                            <div class="grow">
                                <h3 class="font-manuale font-medium md:font-semibold text-lg md:text-xl text-black leading-tight h-12">Instant White Body Lotion (Day)</h3>
                                <div class="flex justify-between items-center mt-4 mb-2 space-x-3 md:space-x-4">
                                    <p class="text-base md:text-xl font-medium md:font-semibold">Rp65.000</p>
                                    <button type="submit" class="bg-[#FFE8CD] text-black py-1 px-1.5 md:px-4 md:py-2 rounded-lg text-xs md:text-sm font-medium hover:bg-[#FFD6BA] transition duration-300 shrink-0">Add to cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide w-50 p-4">
                        <div class="bg-[#FFDCDC] p-4 rounded-2xl flex flex-col justify-between transition-transform duration-300 hover:-translate-y-2 hover:shadow-lg group h-full">
                            <div class="mb-4 flex justify-center items-center">
                                <img src="{{ asset('images/our-products/best-seller/calming-aloe-vera-gel.jpg') }}" alt="Calming Aloe Vera Gel" class="rounded-2xl h-auto object-contain transition-transform duration-500 group-hover:scale-100 block">
                            </div>
                            <div class="grow">
                                <h3 class="font-manuale font-medium md:font-semibold text-lg md:text-xl text-black leading-tight h-12">Calming Aloe Vera Gel</h3>
                                <div class="flex justify-between items-center mt-4 mb-2 space-x-3 md:space-x-4">
                                    <p class="text-base md:text-xl font-medium md:font-semibold">Rp45.900</p>
                                    <button type="submit" class="bg-[#FFE8CD] text-black py-1 px-1.5 md:px-4 md:py-2 rounded-lg text-xs md:text-sm font-medium hover:bg-[#FFD6BA] transition duration-300 shrink-0">Add to cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide w-50 p-4">
                        <div class="bg-[#FFDCDC] p-4 rounded-2xl flex flex-col justify-between transition-transform duration-300 hover:-translate-y-2 hover:shadow-lg group h-full">
                            <div class="mb-4 flex justify-center items-center">
                                <img src="{{ asset('images/our-products/best-seller/brightening-day-cream.jpg') }}" alt="Brightening Day Cream" class="rounded-2xl h-auto object-contain transition-transform duration-500 group-hover:scale-100 block">
                            </div>
                            <div class="grow">
                                <h3 class="font-manuale font-medium md:font-semibold text-lg md:text-xl text-black leading-tight h-12">Brightening Day Cream</h3>
                                <div class="flex justify-between items-center mt-4 mb-2 space-x-3 md:space-x-4">
                                    <p class="text-base md:text-xl font-medium md:font-semibold">Rp49.000</p>
                                    <button type="submit" class="bg-[#FFE8CD] text-black py-1 px-1.5 md:px-4 md:py-2 rounded-lg text-xs md:text-sm font-medium hover:bg-[#FFD6BA] transition duration-300 shrink-0">Add to cart</button>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="swiper-slide w-50 p-4">
                        <div class="bg-[#FFDCDC] p-4 rounded-2xl flex flex-col justify-between transition-transform duration-300 hover:-translate-y-2 hover:shadow-lg group h-full">
                            <div class="mb-4 flex justify-center items-center">
                                <img src="{{ asset('images/our-products/best-seller/acne-spot-corrector.jpg') }}" alt="Acne Spot Corrector" class="rounded-2xl h-auto object-contain transition-transform duration-500 group-hover:scale-100 block">
                            </div>
                            <div class="grow">
                                <h3 class="font-manuale font-medium md:font-semibold text-lg md:text-xl text-black leading-tight h-12">Acne Spot Corrector</h3>
                                <div class="flex justify-between items-center mt-4 mb-2 space-x-3 md:space-x-4">
                                    <p class="text-base md:text-xl font-medium md:font-semibold">Rp39.000</p>
                                    <button type="submit" class="bg-[#FFE8CD] text-black py-1 px-1.5 md:px-4 md:py-2 rounded-lg text-xs md:text-sm font-medium hover:bg-[#FFD6BA] transition duration-300 shrink-0">Add to cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide w-50 p-4">
                        <div class="bg-[#FFDCDC] p-4 rounded-2xl flex flex-col justify-between transition-transform duration-300 hover:-translate-y-2 hover:shadow-lg group h-full">
                            <div class="mb-4 flex justify-center items-center">
                                <img src="{{ asset('images/our-products/best-seller/back-chest-acne-spray.jpg') }}" alt="Back & Chest Acne Spray" class="rounded-2xl h-auto object-contain transition-transform duration-500 group-hover:scale-100 block">
                            </div>
                            <div class="grow">
                                <h3 class="font-manuale font-medium md:font-semibold text-lg md:text-xl text-black leading-tight h-12">Back & Chest Acne Spray</h3>
                                <div class="flex justify-between items-center mt-4 mb-2 space-x-3 md:space-x-4">
                                    <p class="text-base md:text-xl font-medium md:font-semibold">Rp55.000</p>
                                    <button type="submit" class="bg-[#FFE8CD] text-black py-1 px-1.5 md:px-4 md:py-2 rounded-lg text-xs md:text-sm font-medium hover:bg-[#FFD6BA] transition duration-300 shrink-0">Add to cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide w-50 p-4">
                        <div class="bg-[#FFDCDC] p-4 rounded-2xl flex flex-col justify-between transition-transform duration-300 hover:-translate-y-2 hover:shadow-lg group h-full">
                            <div class="mb-4 flex justify-center items-center">
                                <img src="{{ asset('images/our-products/best-seller/daily-UV-shield-SPF50.jpg') }}" alt="Daily UV Shield SPF50" class="rounded-2xl h-auto object-contain transition-transform duration-500 group-hover:scale-100 block">
                            </div>
                            <div class="grow">
                                <h3 class="font-manuale font-medium md:font-semibold text-lg md:text-xl text-black leading-tight h-12">Daily UV Shield SPF50</h3>
                                <div class="flex justify-between items-center mt-4 mb-2 space-x-3 md:space-x-4">
                                    <p class="text-base md:text-xl font-medium md:font-semibold">Rp45.000</p>
                                    <button type="submit" class="bg-[#FFE8CD] text-black py-1 px-1.5 md:px-4 md:py-2 rounded-lg text-xs md:text-sm font-medium hover:bg-[#FFD6BA] transition duration-300 shrink-0">Add to cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide w-50 p-4">
                        <div class="bg-[#FFDCDC] p-4 rounded-2xl flex flex-col justify-between transition-transform duration-300 hover:-translate-y-2 hover:shadow-lg group h-full">
                            <div class="mb-4 flex justify-center items-center">
                                <img src="{{ asset('images/our-products/best-seller/underarm-fold-cream.jpg') }}" alt="Underarm Fold Cream" class="rounded-2xl h-auto object-contain transition-transform duration-500 group-hover:scale-100 block">
                            </div>
                            <div class="grow">
                                <h3 class="font-manuale font-medium md:font-semibold text-lg md:text-xl text-black leading-tight h-12">Underarm Fold Cream</h3>
                                <div class="flex justify-between items-center mt-4 mb-2 space-x-3 md:space-x-4">
                                    <p class="text-base md:text-xl font-medium md:font-semibold">Rp39.500</p>
                                    <button type="submit" class="bg-[#FFE8CD] text-black py-1 px-1.5 md:px-4 md:py-2 rounded-lg text-xs md:text-sm font-medium hover:bg-[#FFD6BA] transition duration-300 shrink-0">Add to cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-button-prev w-5! h-5! md:w-7! md:h-7! text-neutral-950! hover:text-neutral-900!"></div>
                <div class="swiper-button-next w-5! h-5! md:w-7! md:h-7! text-neutral-950! hover:text-neutral-900!"></div>
            </div>
        </section>

        <section class="mt-12">
            <div class="justify-items-left">
                <h2 class="ml-1 md:ml-8 font-marck text-xl md:text-3xl font-bold text-slate-950 mb-1">Best Packages: "Magic in a Box"</h2>
                <p class="ml-5 md:ml-15 max-w-2xl md:max-w-7xl font-lora text-xs md:text-lg text-slate-900 mb-4">Dapatkan transformasi maksimal melalui kombinasi produk yang saling melengkapi dalam satu rangkaian paket yang lebih hemat.</p>
            </div>

            <div class="swiper mySwiper relative px-12">
                <div class="swiper-wrapper">
                    <div class="swiper-slide w-50 p-4">
                        <div class="bg-[#FFDCDC] p-4 rounded-2xl flex flex-col justify-between transition-transform duration-300 hover:-translate-y-2 hover:shadow-lg group h-full">
                            <div class="mb-4 flex justify-center items-center">
                                <img src="{{ asset('images/our-products/best-package/acne-rescue-series.jpg') }}" alt="Acne Rescue Series" class="rounded-2xl h-auto object-contain transition-transform duration-500 group-hover:scale-100 block">
                            </div>
                            <div class="grow">
                                <h3 class="font-manuale font-medium md:font-semibold text-lg md:text-xl text-black leading-tight h-12">Acne Rescue Series</h3>
                                <div class="flex justify-between items-center mt-4 mb-2 space-x-3 md:space-x-4">
                                    <p class="text-base md:text-xl font-medium md:font-semibold">Rp80.000</p>
                                    <button type="submit" class="bg-[#FFE8CD] text-black py-1 px-1.5 md:px-4 md:py-2 rounded-lg text-xs md:text-sm font-medium hover:bg-[#FFD6BA] transition duration-300 shrink-0">Add to cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide w-50 p-4">
                        <div class="bg-[#FFDCDC] p-4 rounded-2xl flex flex-col justify-between transition-transform duration-300 hover:-translate-y-2 hover:shadow-lg group h-full">
                            <div class="mb-4 flex justify-center items-center">
                                <img src="{{ asset('images/our-products/best-package/the-basic-glow-kit.jpg') }}" alt="The Basic Glow Kit" class="rounded-2xl h-auto object-contain transition-transform duration-500 group-hover:scale-100 block">
                            </div>
                            <div class="grow">
                                <h3 class="font-manuale font-medium md:font-semibold text-lg md:text-xl text-black leading-tight h-12">The Basic Glow Kit</h3>
                                <div class="flex justify-between items-center mt-4 mb-2 space-x-3 md:space-x-4">
                                    <p class="text-base md:text-xl font-medium md:font-semibold">Rp92.000</p>
                                    <button type="submit" class="bg-[#FFE8CD] text-black py-1 px-1.5 md:px-4 md:py-2 rounded-lg text-xs md:text-sm font-medium hover:bg-[#FFD6BA] transition duration-300 shrink-0">Add to cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide w-50 p-4">
                        <div class="bg-[#FFDCDC] p-4 rounded-2xl flex flex-col justify-between transition-transform duration-300 hover:-translate-y-2 hover:shadow-lg group h-full">
                            <div class="mb-4 flex justify-center items-center">
                                <img src="{{ asset('images/our-products/best-package/the-ultimate-pureskin-experience.jpg') }}" alt="The Ultimate Pureskin Experience" class="rounded-2xl h-auto object-contain transition-transform duration-500 group-hover:scale-100 block">
                            </div>
                            <div class="grow">
                                <h3 class="font-manuale font-medium md:font-semibold text-lg md:text-xl text-black leading-tight h-12">The Ultimate Pureskin Experience</h3>
                                <div class="flex justify-between items-center mt-4 mb-2 space-x-3 md:space-x-4">
                                    <p class="text-base md:text-xl font-medium md:font-semibold">Rp100.000</p>
                                    <button type="submit" class="bg-[#FFE8CD] text-black py-1 px-1.5 md:px-4 md:py-2 rounded-lg text-xs md:text-sm font-medium hover:bg-[#FFD6BA] transition duration-300 shrink-0">Add to cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide w-50 p-4">
                        <div class="bg-[#FFDCDC] p-4 rounded-2xl flex flex-col justify-between transition-transform duration-300 hover:-translate-y-2 hover:shadow-lg group h-full">
                            <div class="mb-4 flex justify-center items-center">
                                <img src="{{ asset('images/our-products/best-package/ageless-miracle-set.jpg') }}" alt="Ageless Miracle Set" class="rounded-2xl h-auto object-contain transition-transform duration-500 group-hover:scale-100 block">
                            </div>
                            <div class="grow">
                                <h3 class="font-manuale font-medium md:font-semibold text-lg md:text-xl text-black leading-tight h-12">Ageless Miracle Set</h3>
                                <div class="flex justify-between items-center mt-4 mb-2 space-x-3 md:space-x-4">
                                    <p class="text-base md:text-xl font-medium md:font-semibold">Rp120.000</p>
                                    <button type="submit" class="bg-[#FFE8CD] text-black py-1 px-1.5 md:px-4 md:py-2 rounded-lg text-xs md:text-sm font-medium hover:bg-[#FFD6BA] transition duration-300 shrink-0">Add to cart</button>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="swiper-slide w-50 p-4">
                        <div class="bg-[#FFDCDC] p-4 rounded-2xl flex flex-col justify-between transition-transform duration-300 hover:-translate-y-2 hover:shadow-lg group h-full">
                            <div class="mb-4 flex justify-center items-center">
                                <img src="{{ asset('images/our-products/best-package/intimate-care-solution.jpg') }}" alt="Intimate Care Solution" class="rounded-2xl h-auto object-contain transition-transform duration-500 group-hover:scale-100 block">
                            </div>
                            <div class="grow">
                                <h3 class="font-manuale font-medium md:font-semibold text-lg md:text-xl text-black leading-tight h-12">Intimate Care Solution</h3>
                                <div class="flex justify-between items-center mt-4 mb-2 space-x-3 md:space-x-4">
                                    <p class="text-base md:text-xl font-medium md:font-semibold">Rp78.000</p>
                                    <button type="submit" class="bg-[#FFE8CD] text-black py-1 px-1.5 md:px-4 md:py-2 rounded-lg text-xs md:text-sm font-medium hover:bg-[#FFD6BA] transition duration-300 shrink-0">Add to cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide w-50 p-4">
                        <div class="bg-[#FFDCDC] p-4 rounded-2xl flex flex-col justify-between transition-transform duration-300 hover:-translate-y-2 hover:shadow-lg group h-full">
                            <div class="mb-4 flex justify-center items-center">
                                <img src="{{ asset('images/our-products/best-package/mommy-pregnancy-pack.jpg') }}" alt="Mommy Pregnancy Pack" class="rounded-2xl h-auto object-contain transition-transform duration-500 group-hover:scale-100 block">
                            </div>
                            <div class="grow">
                                <h3 class="font-manuale font-medium md:font-semibold text-lg md:text-xl text-black leading-tight h-12">Mommy Pregnancy Pack</h3>
                                <div class="flex justify-between items-center mt-4 mb-2 space-x-3 md:space-x-4">
                                    <p class="text-base md:text-xl font-medium md:font-semibold">Rp127.000</p>
                                    <button type="submit" class="bg-[#FFE8CD] text-black py-1 px-1.5 md:px-4 md:py-2 rounded-lg text-xs md:text-sm font-medium hover:bg-[#FFD6BA] transition duration-300 shrink-0">Add to cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide w-50 p-4">
                        <div class="bg-[#FFDCDC] p-4 rounded-2xl flex flex-col justify-between transition-transform duration-300 hover:-translate-y-2 hover:shadow-lg group h-full">
                            <div class="mb-4 flex justify-center items-center">
                                <img src="{{ asset('images/our-products/best-package/body-brightening-trio.jpg') }}" alt="Body Brightening Trio" class="rounded-2xl h-auto object-contain transition-transform duration-500 group-hover:scale-100 block">
                            </div>
                            <div class="grow">
                                <h3 class="font-manuale font-medium md:font-semibold text-lg md:text-xl text-black leading-tight h-12">Body Brightening Trio</h3>
                                <div class="flex justify-between items-center mt-4 mb-2 space-x-3 md:space-x-4">
                                    <p class="text-base md:text-xl font-medium md:font-semibold">Rp85.000</p>
                                    <button type="submit" class="bg-[#FFE8CD] text-black py-1 px-1.5 md:px-4 md:py-2 rounded-lg text-xs md:text-sm font-medium hover:bg-[#FFD6BA] transition duration-300 shrink-0">Add to cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide w-50 p-4">
                        <div class="bg-[#FFDCDC] p-4 rounded-2xl flex flex-col justify-between transition-transform duration-300 hover:-translate-y-2 hover:shadow-lg group h-full">
                            <div class="mb-4 flex justify-center items-center">
                                <img src="{{ asset('images/our-products/best-package/glass-skin-specialist.jpg') }}" alt="The Glass Skin Specialist" class="rounded-2xl h-auto object-contain transition-transform duration-500 group-hover:scale-100 block">
                            </div>
                            <div class="grow">
                                <h3 class="font-manuale font-medium md:font-semibold text-lg md:text-xl text-black leading-tight h-12">The Glass Skin Specialist</h3>
                                <div class="flex justify-between items-center mt-4 mb-2 space-x-3 md:space-x-4">
                                    <p class="text-base md:text-xl font-medium md:font-semibold">Rp145.000</p>
                                    <button type="submit" class="bg-[#FFE8CD] text-black py-1 px-1.5 md:px-4 md:py-2 rounded-lg text-xs md:text-sm font-medium hover:bg-[#FFD6BA] transition duration-300 shrink-0">Add to cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-button-prev w-5! h-5! md:w-7! md:h-7! text-neutral-950! hover:text-neutral-900!"></div>
                <div class="swiper-button-next w-5! h-5! md:w-7! md:h-7! text-neutral-950! hover:text-neutral-900!"></div>
            </div>
        </section>
    </main>

    <footer class="w-full md:w-full mx-auto bg-[#FFDECC] p-[60px_50px_30px] box-border text-[#1a1a1a]">
        <div class="flex flex-col xl:flex-row justify-between items-start xl:items-center flex-wrap mb-12.5 w-full gap-10 xl:gap-0">

            <div class="footer-brand w-full xl:w-auto text-center xl:text-left">
                <h2 class="font-playfair text-[3rem] md:text-[4rem] m-0 leading-none">PURESKIN</h2>
            </div>

            <div class="flex-1 w-full xl:max-w-175">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 md:gap-5 mb-10 text-center md:text-left">
                    <div class="footer-col">
                        <h3 class="text-[25px] mb-2.5 font-semibold">Contact Us</h3>
                        <a href="" class="block text-[15px] text-[#808080] no-underline mb-2.5 leading-normal transition-colors duration-300 hover:text-black">
                            <p>+62 0812345678</p>
                        </a>
                        <a href="" class="block text-[15px] text-[#808080] no-underline mb-2.5 leading-normal transition-colors duration-300 hover:text-black">
                            <p>pureskin@gmail.com</p>
                        </a>
                    </div>
                    <div class="footer-col">
                        <h3 class="text-[25px] mb-2.5 font-semibold">Help Center</h3>
                        <a href="#" class="block text-[15px] text-[#808080] no-underline mb-2.5 leading-normal transition-colors duration-300 hover:text-black">About us</a>
                    </div>
                    <div class="footer-col">
                        <h3 class="text-[25px] mb-2.5 font-semibold">Information</h3>
                        <a href="#" class="block text-[15px] text-[#808080] no-underline mb-2.5 leading-normal transition-colors duration-300 hover:text-black">Products</a>
                        <a href="#" class="block text-[15px] text-[#808080] no-underline mb-2.5 leading-normal transition-colors duration-300 hover:text-black">Treatments</a>
                    </div>
                </div>

                <div class="newsletter w-full text-center md:text-left">
                    <h3 class="text-[25px] mb-2.5">Join Our Newsletter</h3>
                    <p class="text-[15px] text-[#808080] mb-3.75">Sign up your mail and get 10% Discount for your first treatment</p>
                    <div class="flex gap-2.5 w-full max-w-100 mx-auto md:mx-0">
                        <input type="email" placeholder="Your email address here...." class="flex-1 p-[15px_25px] border-none text-[15px] outline-none bg-white rounded-l-md md:rounded-none">
                        <button type="submit" class="p-[15px_30px] bg-[#ffd2d2] border-none font-bold cursor-pointer transition duration-300 hover:bg-[#fcbccc] rounded-r-md md:rounded-none">GO!</button>
                    </div>
                </div>
            </div>
        </div>

        <hr class="border-0 border-t border-[#1a1a1a] mb-6.25 opacity-80">

        <div class="flex flex-col-reverse md:flex-row justify-between items-center text-[0.85rem] text-[#666] gap-5 md:gap-0 text-center md:text-left">
            <p>&copy; 2025 pureskin. All Rights Reserved</p>

            <div class="flex gap-5">
                <a href="">
                    <img src="/images/icon/Instagram.svg" alt="Instagram" class="w-6 h-6 cursor-pointer transition-transform duration-300 ease-in-out hover:scale-120">
                </a>

                <a href="">
                    <img src="/images/icon/Facebook.svg" alt="Facebook" class="w-6 h-6 cursor-pointer transition-transform duration-300 ease-in-out hover:scale-120">
                </a>
                <a href="">
                    <img src="/images/icon/Youtube.svg" alt="Youtube" class="w-6 h-6 cursor-pointer transition-transform duration-300 ease-in-out hover:scale-120">
                </a>
            </div>
        </div>
    </footer>
</body>

</html>