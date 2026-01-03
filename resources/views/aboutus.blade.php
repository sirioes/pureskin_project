<!doctype html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> About Us </title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quintessential&family=Marck+Script&family=Manuale:wght@300..800&family=Playfair+Display:wght@400;700&family=Lora&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="text-brand-dark antialiased font-manuale">

    <section class="relative w-full bg-cover bg-center flex flex-col justify-center items-center text-center px-5">
        <nav x-data="{ isOpen: false, profileOpen: false }" class="absolute top-0 w-full py-4 px-4 md:py-7.5 md:px-15 z-20 animate-fadeInUp bg-[#FFDCDC]">
            <div class="flex justify-end items-center">

                <div class="flex md:hidden items-center gap-3">
                    <div x-data="navbarSearch()" class="relative" @click.away="searchOpen = false; keyword = ''">
                        <button @click="triggerFocus()" class="focus:outline-none flex items-center p-1">
                            <img src="/images/icon/Search.svg" alt="Search" class="w-5 h-5">
                        </button>

                        <div x-show="searchOpen"
                            style="display: none;"
                            x-transition:enter="transition ease-out duration-200"
                            x-transition:enter-start="opacity-0 scale-95"
                            x-transition:enter-end="opacity-100 scale-100"
                            class="absolute top-10 -right-15 w-72 bg-white rounded-xl shadow-xl border border-gray-100 p-3 z-50">
                            <input x-ref="searchInput" x-model="keyword" @input.debounce.300ms="performSearch()" type="text" placeholder="Cari produk..." class="w-full px-4 py-2 bg-gray-50 border border-gray-200 rounded-lg text-sm focus:outline-none focus:border-red-300 transition-colors text-black">

                            <div x-show="isLoading" class="text-center py-4 text-xs text-gray-500"><span class="inline-block animate-pulse">Mencari...</span></div>

                            <ul x-show="results.length > 0 && !isLoading" class="mt-3 max-h-64 overflow-y-auto custom-scrollbar">
                                <template x-for="product in results" :key="product.id">
                                    <li class="border-b border-gray-50 last:border-0">
                                        <a :href="'/products/' + product.id" class="flex items-center gap-3 p-2 hover:bg-red-50 rounded-lg transition-colors group">
                                            <div class="w-10 h-10 bg-gray-200 rounded-md overflow-hidden shrink-0 border border-gray-100">
                                                <img :src="product.image ? '/' + product.image : '/images/placeholder.jpg'" class="w-full h-full object-cover">
                                            </div>
                                            <div class="flex-1 min-w-0 text-left">
                                                <p class="text-sm font-semibold text-gray-800 truncate group-hover:text-red-500" x-text="product.name"></p>
                                                <p class="text-xs text-gray-500 font-manuale" x-text="formatRupiah(product.price)"></p>
                                            </div>
                                        </a>
                                    </li>
                                </template>
                            </ul>
                            <div x-show="keyword.length >= 2 && results.length === 0 && !isLoading" class="text-center py-4 text-xs text-gray-400 font-manuale">Produk tidak ditemukan.</div>
                        </div>
                    </div>
                    <div class="relative">
                        <button @click="profileOpen = !profileOpen" class="focus:outline-none">
                            <img src="/images/icon/Profile.svg" alt="Profile" class="w-5 h-5 md:w-6 md:h-6 mt-2">
                        </button>

                        <div x-show="profileOpen" @click.away="profileOpen = false" class="absolute right-0 mt-2 w-48 bg-white rounded-xl shadow-xl p-4 border border-gray-100 z-30 text-center">
                            <div class="absolute -top-2 right-4 w-4 h-4 bg-white rotate-45 border-t border-l border-gray-100"></div>
                            @auth
                            <p class="font-manuale text-black mb-2 pb-2 border-b border-gray-200">{{ Auth::user()->name }}</p>
                            <form action="{{ route('logout') }}" method="POST" class="m-0">
                                @csrf
                                <button type="submit" class="font-manuale text-red-500 hover:underline">Logout</button>
                            </form>
                            @else
                            <a href="/login" class="font-manuale text-black hover:underline">Login</a>
                            @endauth
                        </div>
                    </div>

                    @auth
                    <a href="/cart" class="relative group">
                        <img src="/images/icon/Cart.svg" alt="Cart Icon" class="w-5 h-5 md:w-6 md:h-6 cursor-pointer hover:scale-110 transition-transform">
                        @if(isset($cartCount) && $cartCount > 0)
                        <span class="absolute -top-2 -right-2 bg-red-500 text-white text-[10px] rounded-full px-1.5 py-0.5 border-2 border-[#FFDCDC]">
                            {{ $cartCount }}
                        </span>
                        @endif
                    </a>
                    @endauth

                    <button @click="isOpen = !isOpen" class="focus:outline-none">
                        <img :src="isOpen ? '/images/icon/close.svg' : '/images/icon/open.svg'" alt="toggle" class="w-8 h-8">
                    </button>
                </div>

                <ul :class="isOpen ? 'flex' : 'hidden'" class="list-none md:flex flex-wrap justify-center gap-4 sm:gap-6 md:gap-10 items-center absolute md:relative top-full left-0 w-full md:w-auto bg-[#FFDCDC] md:bg-transparent flex-col md:flex-row py-6 md:py-0 shadow-lg md:shadow-none">

                    <li><a href="/" class="font-quintessential text-sm md:text-[20px] text-black no-underline hover:opacity-70">Home</a></li>
                    <li><a href="/aboutus" class="font-quintessential text-sm md:text-[20px] text-black no-underline hover:opacity-70">About</a></li>
                    <li><a href="/ourproducts" class="font-quintessential text-sm md:text-[20px] text-black no-underline hover:opacity-70">Products</a></li>
                    <li><a href="/ourtreatments" class="font-quintessential text-sm md:text-[20px] text-black no-underline hover:opacity-70">Treatments</a></li>

                    <li class="hidden md:flex items-center gap-5 ml-5">
                        <div x-data="navbarSearch()" class="relative" @click.away="searchOpen = false; keyword = ''">
                            <button @click="triggerFocus()" class="focus:outline-none flex items-center p-1 hover:scale-110 transition-transform">
                                <img src="/images/icon/Search.svg" alt="Search" class="w-6 h-6">
                            </button>

                            <div x-show="searchOpen"
                                style="display: none;"
                                x-transition:enter="transition ease-out duration-200"
                                x-transition:enter-start="opacity-0 scale-95"
                                x-transition:enter-end="opacity-100 scale-100"
                                class="absolute right-0 top-12 w-80 bg-white rounded-xl shadow-xl border border-gray-100 p-3 z-50">

                                <input x-ref="searchInput" x-model="keyword" @input.debounce.300ms="performSearch()" type="text" placeholder="Cari produk..." class="w-full px-4 py-2 bg-gray-50 border border-gray-200 rounded-lg text-sm focus:outline-none focus:border-red-300 transition-colors text-black">

                                <div x-show="isLoading" class="text-center py-4 text-xs text-gray-500"><span class="inline-block animate-pulse">Mencari...</span></div>

                                <ul x-show="results.length > 0 && !isLoading" class="mt-3 max-h-64 overflow-y-auto custom-scrollbar">
                                    <template x-for="product in results" :key="product.id">
                                        <li class="border-b border-gray-50 last:border-0">
                                            <a :href="'/products/' + product.id" class="flex items-center gap-3 p-2 hover:bg-red-50 rounded-lg transition-colors group">
                                                <div class="w-12 h-12 bg-gray-200 rounded-md overflow-hidden shrink-0 border border-gray-100">
                                                    <img :src="product.image ? '/' + product.image : '/images/placeholder.jpg'" class="w-full h-full object-cover">
                                                </div>
                                                <div class="flex-1 min-w-0">
                                                    <p class="text-sm font-semibold text-gray-800 truncate group-hover:text-red-500" x-text="product.name"></p>
                                                    <p class="text-xs text-gray-500 font-manuale" x-text="formatRupiah(product.price)"></p>
                                                </div>
                                            </a>
                                        </li>
                                    </template>
                                </ul>
                                <div x-show="keyword.length >= 2 && results.length === 0 && !isLoading" class="text-center py-4 text-xs text-gray-400 font-manuale">Produk tidak ditemukan.</div>
                            </div>
                        </div>
                        <div class="relative inline-block" x-data="{ profileOpen: false }">
                            @auth
                            <button @click="profileOpen = !profileOpen" class="focus:outline-none flex items-center p-1">
                                <img src="/images/icon/Profile.svg" alt="Profile" class="w-6 h-6 hover:scale-110 transition-transform">
                            </button>

                            <div x-show="profileOpen"
                                x-transition:enter="transition ease-out duration-200"
                                x-transition:enter-start="opacity-0 scale-95"
                                x-transition:enter-end="opacity-100 scale-100"
                                @click.away="profileOpen = false"
                                class="absolute left-1/2 -translate-x-1/2 mt-3 w-48 bg-white rounded-2xl shadow-2xl border border-gray-50 z-50 overflow-hidden"
                                style="display: none;">

                                <div class="absolute -top-1 left-1/2 -translate-x-1/2 w-3 h-3 bg-white rotate-45 border-t border-l border-gray-50"></div>

                                <div class="relative bg-white p-4">
                                    <h3 class="font-manuale text-base text-black mb-2 truncate">{{ Auth::user()->name }}</h3>
                                    <hr class="border-gray-100 mb-3">
                                    <form action="{{ route('logout') }}" method="POST" class="m-0">
                                        @csrf
                                        <button type="submit" class="w-full font-manuale text-red-500 text-sm font-medium hover:bg-red-50 py-2 rounded-lg transition-colors">
                                            Logout
                                        </button>
                                    </form>
                                </div>
                            </div>
                            @else
                            <a href="/register" class="p-1 flex items-center">
                                <img src="/images/icon/Profile.svg" alt="Profile" class="w-5 h-5 md:w-6 md:h-6 hover:scale-110 transition-transform">
                            </a>
                            @endauth
                        </div>
                        @auth
                        <a href="/cart" class="relative group hover:scale-110 transition-transform">
                            <img src="/images/icon/Cart.svg" alt="Cart" class="w-6 h-6">
                            @if(isset($cartCount) && $cartCount > 0)
                            <span class="absolute -top-2 -right-2 bg-red-500 text-white text-[10px] rounded-full px-1.5 py-0.5 border-2 border-[#FFDCDC]">
                                {{ $cartCount }}
                            </span>
                            @endif
                        </a>
                        @endauth
                    </li>
                </ul>
            </div>
        </nav>
    </section>

    <section id="about-us" class="grid grid-cols-1 md:grid-cols-2 bg-[#FFDCDC] min-h-screen animate-fadeInUp scroll-mt-20">

        <div class="relative h-150 md:h-full overflow-hidden order-1 md:order-2 pt-20 md:pt-0">
            <img src="{{ asset('images/aboutus/beauty2.jpg') }}" alt="Woman Skin Care" class="w-full h-full object-cover">
        </div>

        <div class="flex flex-col justify-center px-6 sm:px-12 md:px-20 py-12 md:py-20 order-2 md:order-1">
            <h1 class="font-playfair text-5xl sm:text-6xl md:text-7xl lg:text-8xl text-[#eebb99] mb-6 leading-[1.1]">
                Soft, Glowy <br class="hidden sm:block"> Skin For <br class="hidden sm:block"> Days!
            </h1>
            <h2 class="text-2xl md:text-3xl mb-4 text-gray-800 uppercase tracking-widest font-playfair">About Us</h2>
            <p class="text-base md:text-lg leading-relaxed text-gray-700 text-justify font-playfair">
                Brand kami lahir dengan satu tujuan sederhana, menghadirkan perawatan kulit yang aman, lembut, dan efektif untuk setiap orang. Kami percaya bahwa kecantikan sejati dimulai dari kulit yang sehat. Karena itu, setiap produk kami diformulasikan melalui proses riset yang teliti.
            </p>
        </div>
    </section>

    <section class="bg-white py-12 px-6">

        <div class="max-w-4xl mx-auto text-center mb-12">
            <h3 class="text-xs md:text-sm font-bold tracking-[0.2em] text-gray-500 uppercase mb-2 font-playfair">
                The Pureskin Standard
            </h3>
            <h2 class="text-3xl md:text-4xl text-semibold text-gray-500 font-playfair">
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
                <h3 class="text-gray-500 uppercase mb-2 text-sm font-playfair">Gut Safe</h3>
            </div>

            <div class="flex flex-col items-center">
                <div class="border-2 border-[#FFDECC] rounded-full p-4 mb-3 w-20 h-20 flex items-center justify-center">
                    <svg class="w-8 h-8 text-white" fill="#FFDECC" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                            d="M19.428 15.428a2 2 0 00-1.022-.547l-2.384-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path>
                    </svg>
                </div>
                <h3 class="text-gray-500 uppercase mb-2 text-sm font-playfair">Lab Tested</h3>
            </div>

            <div class="flex flex-col items-center">
                <div class="border-2 border-[#FFDECC] rounded-full p-4 mb-3 w-20 h-20 flex items-center justify-center">
                    <svg class="w-8 h-8 text-white" fill="#FFDECC" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                            d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <h3 class="text-gray-500 uppercase mb-2 text-sm font-playfair">Pure & Natural</h3>
            </div>
        </div>
    </section>

    <section class="bg-[#FFDCDC] px-6 py-12 md:py-24">
        <div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-8 lg:gap-16 items-center">

            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-1 gap-6 order-1">
                <div class="bg-pink-200 rounded-2xl overflow-hidden shadow-md transform hover:scale-[1.02] transition-transform duration-300">
                    <img src="{{ asset('images/aboutus/collagen.jpg') }}" class="w-full h-56 sm:h-64 md:h-72 object-cover" alt="Collagen Product">
                </div>
                <div class="bg-white rounded-2xl overflow-hidden shadow-md transform hover:scale-[1.02] transition-transform duration-300">
                    <img src="{{ asset('images/aboutus/beauty1.jpg') }}" class="w-full h-56 sm:h-64 md:h-72 object-cover" alt="Skincare Model">
                </div>
            </div>

            <div class="text-gray-800 order-2">
                <div class="text-base font-playfair md:text-lg leading-relaxed md:leading-loose text-justify space-y-6">
                    <p>
                        Produk kami mencakup berbagai kategori seperti <span class="text-[#e27831] font-bold font-playfair">serum, moisturizer, toner, cleanser,</span> dan treatment khusus. Setiap produk dirancang untuk memberikan hasil yang terasa dan terlihat, tanpa bahan berbahaya seperti paraben, alkohol keras, atau pewangi sintetis.
                    </p>

                    <div class="border-l-3 border-[#e27831] pl-3 py-3 bg-white/30 rounded-r-lg">
                        <p class="font-playfair">
                            "Kami percaya bahwa perawatan kulit harus memberikan kenyamanan, bukan iritasi—itulah yang membuat formulasi kami berbeda."
                        </p>
                    </div>
                    
                    <p>
                        Brand kami lahir dengan satu tujuan sederhana: menghadirkan perawatan kulit yang aman, lembut, dan efektif untuk setiap orang. Kami percaya bahwa <span class="font-bold text-[#e27831]">kecantikan sejati dimulai dari kulit yang sehat.</span> Karena itu, setiap produk kami diformulasikan melalui proses riset yang teliti.
                    </p>
                </div>
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
                            <p>+628816223146</p>
                        </a>
                        <a href="mailto:pureskin@gmail.com" class="block text-[15px] text-[#808080] no-underline mb-2.5 leading-normal transition-colors duration-300 hover:text-black">
                            <p>pureskin@gmail.com</p>
                        </a>
                    </div>
                    <div class="footer-col">
                        <h3 class="text-[25px] mb-2.5 font-semibold">Help Center</h3>
                        <a href="/aboutus" class="block text-[15px] text-[#808080] no-underline mb-2.5 leading-normal transition-colors duration-300 hover:text-black">About us</a>
                    </div>
                    <div class="footer-col">
                        <h3 class="text-[25px] mb-2.5 font-semibold">Information</h3>
                        <a href="/ourproducts" class="block text-[15px] text-[#808080] no-underline mb-2.5 leading-normal transition-colors duration-300 hover:text-black">Products</a>
                        <a href="/ourtreatments" class="block text-[15px] text-[#808080] no-underline mb-2.5 leading-normal transition-colors duration-300 hover:text-black">Treatments</a>
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
                <a href="https://www.instagram.com">
                    <img src="/images/icon/Instagram.svg" alt="Instagram" class="w-6 h-6 cursor-pointer transition-transform duration-300 ease-in-out hover:scale-120">
                </a>

                <a href="https://www.facebook.com">
                    <img src="/images/icon/Facebook.svg" alt="Facebook" class="w-6 h-6 cursor-pointer transition-transform duration-300 ease-in-out hover:scale-120">
                </a>
                <a href="https://www.youtube.com">
                    <img src="/images/icon/Youtube.svg" alt="Youtube" class="w-6 h-6 cursor-pointer transition-transform duration-300 ease-in-out hover:scale-120">
                </a>
            </div>
        </div>
    </footer>

</body>

</html>