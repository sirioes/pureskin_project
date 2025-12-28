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
                <li><a href="/treatments" class="font-quintessential text-sm sm:text-base md:text-[20px] text-black no-underline hover:opacity-70 transition-opacity">Treatments</a></li>

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
</body>

</html>