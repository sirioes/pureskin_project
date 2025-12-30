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
                <li><a href="/ourtreatments" class="font-quintessential text-sm sm:text-base md:text-[20px] text-black no-underline hover:opacity-70 transition-opacity">Treatments</a></li>

                 @auth
                    <li>
                        <form action="{{ route('logout') }}" method="POST" class="m-0">
                            @csrf
                            <button type="submit" class="font-quintessential text-sm sm:text-base md:text-[20px] text-red-500 hover:text-red-700 transition-colors">
                                Logout
                            </button>
                        </form>
                    </li>
                    <li class="font-quintessential text-sm sm:text-base md:text-[20px] text-black">
                        {{ Auth::user()->name }}
                    </li>
                @endauth

                <li>
                    <a href="{{ Auth::check() ? '#' : '/register' }}">
                        <img src="/images/icon/Profile.svg" alt="Profile Icon" class="w-5 h-5 md:w-6 md:h-6 ml-3 md:ml-7.5 cursor-pointer hover:scale-110 transition-transform">
                    </a>
                </li>
            </ul>
        </nav>
    </section>

    <section class="grid grid-cols-1 md:grid-cols-2 bg-[#FFDCDC] min-h-screen">
        <div class="flex flex-col justify-center px-8 md:px-20 py-10 pb-0 md:pb-10">
            <h1 class="font-serif text-5xl md:text-8xl text-[#eebb99] mb-6 leading-tight">
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

    <section class="bg-white py-12 px-6">

        <div class="max-w-4xl mx-auto text-center mb-12">
            <h3 class="text-xs md:text-sm font-bold tracking-[0.2em] text-gray-500 uppercase mb-2">
                The Pureskin Standard
            </h3>
            <h2 class="font-serif text-3xl md:text-4xl text-semibold text-gray-500">
                Safe & Natural Formula
            </h2>
        </div>

        <div class="max-w-4xl mx-auto grid grid-cols-3 gap-4 md:gap-10 text-center">

            <div class="flex flex-col items-center">
                <div class="border-2 border-[#FFDECC] rounded-full p-4 mb-3 w-20 h-20 flex items-center justify-center">
                    <svg class="w-8 h-8 text-white" fill="#FFDECC" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <h3 class="text-gray-500 uppercase mb-2 text-sm">Gut Safe</h3>
            </div>

            <div class="flex flex-col items-center">
                <div class="border-2 border-[#FFDECC] rounded-full p-4 mb-3 w-20 h-20 flex items-center justify-center">
                    <svg class="w-8 h-8 text-white" fill="#FFDECC" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                            d="M19.428 15.428a2 2 0 00-1.022-.547l-2.384-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path>
                    </svg>
                </div>
                <h3 class="text-gray-500 uppercase mb-2 text-sm">Lab Tested</h3>
            </div>

            <div class="flex flex-col items-center">
                <div class="border-2 border-[#FFDECC] rounded-full p-4 mb-3 w-20 h-20 flex items-center justify-center">
                    <svg class="w-8 h-8 text-white" fill="#FFDECC" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                            d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <h3 class="text-gray-500 uppercase mb-2 text-sm">Pure & Natural</h3>
            </div>
        </div>
    </section>

    <section class="bg-[#FFDCDC] px-6 py-12">
        <div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-10 text-center">

            <div class="flex flex-col gap-6">
                <div class="bg-pink-200 rounded overflow-hidden shadow-lg">
                    <img src="{{ asset('images/aboutus/collagen.jpg') }}" class="w-full h-64 object-cover" alt="Collagen">
                </div>
                <div class="bg-white rounded overflow-hidden shadow-lg">
                    <img src="{{ asset('images/aboutus/beauty1.jpg') }}" class="w-full h-64 object-cover" alt="Model">
                </div>
            </div>

            <div class="text-gray-800 text-x1 md:text-base leading-loose text-justify px-4">
                <p class="mb-5">
                    Produk kami mencakup berbagai kategori seperti serum, moisturizer, toner, cleanser, dan treatment khusus. Setiap produk dirancang untuk memberikan hasil yang terasa dan terlihat, tanpa bahan berbahaya seperti paraben, alkohol keras, atau pewangi sintetis.
                </p>
                <p class="mb-5 font-medium">
                    Kami percaya bahwa perawatan kulit harus memberikan kenyamanan, bukan iritasi itulah yang membuat formulasi kami berbeda.
                </p>
                <p>
                    Brand kami lahir dengan satu tujuan sederhana: menghadirkan perawatan kulit yang aman, lembut, dan efektif untuk setiap orang. Kami percaya bahwa <span class="font-medium">kecantikan sejati dimulai dari kulit yang sehat.</span> Karena itu, setiap produk kami diformulasikan melalui proses riset yang teliti.
                </p>
            </div>
        </div>
    </section>

    <section class="py-16 bg-white relative">
        <div class="max-w-6xl mx-auto px-6">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center divide-x divide-gray-200">

                <div class="group cursor-pointer">
                    <h3 class="text-4xl md:text-5xl font-serif text-[#FFDECC] font-bold mb-2 group-hover:scale-110 transition-transform duration-300">5+</h3>
                    <p class="text-gray-500 text-sm tracking-widest uppercase">Years Experience</p>
                </div>

                <div class="group cursor-pointer">
                    <h3 class="text-4xl md:text-5xl font-serif text-[#FFDECC] font-bold mb-2 group-hover:scale-110 transition-transform duration-300">10k+</h3>
                    <p class="text-gray-500 text-sm tracking-widest uppercase">Happy Clients</p>
                </div>

                <div class="group cursor-pointer">
                    <h3 class="text-4xl md:text-5xl font-serif text-[#FFDECC] font-bold mb-2 group-hover:scale-110 transition-transform duration-300">50+</h3>
                    <p class="text-gray-500 text-sm tracking-widest uppercase">Awards Won</p>
                </div>

                <div class="group cursor-pointer">
                    <h3 class="text-4xl md:text-5xl font-serif text-[#FFDECC] font-bold mb-2 group-hover:scale-110 transition-transform duration-300">100%</h3>
                    <p class="text-gray-500 text-sm tracking-widest uppercase">Natural Ingredients</p>
                </div>

            </div>
        </div>
    </section>
    <br>

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