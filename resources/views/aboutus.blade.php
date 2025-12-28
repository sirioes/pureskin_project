<!doctype html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> About Us </title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,600;1,400&family=Lato:wght@300;400&display=swap" rel="stylesheet">
    @vite('resources/css/app.css')

</head>

<body class="font-sans text-brand-dark antialiased">

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

    <section class="grid grid-cols-1 md:grid-cols-2 bg-[#FFDCDC] min-h-screen">
        <div class="flex flex-col justify-center px-8 md:px-20 py-10 pb-0 md:pb-10">
            <h1 class="font-serif text-5xl md:text-6xl text-[#eebb99] mb-6 leading-tight">
                Soft, Glowly <br> Skin For <br> Days!
            </h1>
            <h2 class="text-justify italic text-3xl mb-4 text-gray-800">about us</h2>
            <p class="text-x1 leading-relaxed text-gray-700 text-justify">
                Brand kami lahir dengan satu tujuan sederhana, menghadirkan perawatan kulit yang aman, lembut, dan efektif untuk setiap orang. Kami percaya bahwa kecantikan sejati dimulai dari kulit yang sehat. Karena itu, setiap produk kami diformulasikan melalui proses riset yang teliti.
            </p>
        </div>
        <div class="relative h-auto md:h-full overflow-hidden">
            <img src="{{ asset('images/aboutus/beauty2.jpg') }}" alt="Woman Skin Care" class="w-full h-full object-cover">
        </div>
    </section>
</body>
</html>