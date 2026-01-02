<!DOCTYPE html>
<html lang="en" class="scroll-smooth"> <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PURESKIN</title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quintessential&family=Marck+Script&family=Manuale:wght@300..800&family=Playfair+Display:wght@400;700&family=Lora&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
</head>
<body class="text-black font-manuale antialiased overflow-x-hidden">

    <section class="relative h-screen w-full bg-cover bg-center flex flex-col justify-center items-center text-center px-5" style="background-image: url('/images/homepage/Home.svg');">
        
        <nav x-data="{ isOpen: false, profileOpen: false }" class="absolute top-0 w-full py-4 px-4 md:py-7.5 md:px-15 z-20 animate-fadeInUp bg-[#FFDCDC]">
            <div class="flex justify-end items-center">
                
                <div class="flex md:hidden items-center gap-3">
                    <div x-data="navbarSearch()" class="relative" @click.away="searchOpen = false; keyword = ''">
                        <button @click="triggerFocus()" class="focus:outline-none flex items-center p-1">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-black" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                            </svg>
                        </button>

                        <div x-show="searchOpen" 
                            style="display: none;"
                            x-transition:enter="transition ease-out duration-200"
                            x-transition:enter-start="opacity-0 scale-95"
                            x-transition:enter-end="opacity-100 scale-100"
                            class="absolute top-10 right-[-60px] w-72 bg-white rounded-xl shadow-xl border border-gray-100 p-3 z-50">
                            <input x-ref="searchInput" x-model="keyword" @input.debounce.300ms="performSearch()" type="text" placeholder="Cari produk..." class="w-full px-4 py-2 bg-gray-50 border border-gray-200 rounded-lg text-sm focus:outline-none focus:border-red-300 transition-colors text-black">
                            
                            <div x-show="isLoading" class="text-center py-4 text-xs text-gray-500"><span class="inline-block animate-pulse">Mencari...</span></div>
                            
                            <ul x-show="results.length > 0 && !isLoading" class="mt-3 max-h-64 overflow-y-auto custom-scrollbar">
                                <template x-for="product in results" :key="product.id">
                                    <li class="border-b border-gray-50 last:border-0">
                                        <a href="/" class="flex items-center gap-3 p-2 hover:bg-red-50 rounded-lg transition-colors group">
                                            <div class="w-10 h-10 bg-gray-200 rounded-md overflow-hidden flex-shrink-0 border border-gray-100">
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
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-black" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                </svg>
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
                                            <a href="/" class="flex items-center gap-3 p-2 hover:bg-red-50 rounded-lg transition-colors group">
                                                <div class="w-12 h-12 bg-gray-200 rounded-md overflow-hidden flex-shrink-0 border border-gray-100">
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
                                <a href="/register" class="p-1 block">
                                    <img src="/images/icon/Profile.svg" alt="Profile" class="w-5 h-5 md:w-6 md:h-6 mt-2 hover:scale-110 transition-transform">
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

        <div class="z-10 text-center max-w-200 p-5 animate-fadeInUp">
            <h1 class="font-playfair text-[4.2rem] md:text-[140px] tracking-[2px] mb-1.25 text-black text-center leading-none">PURESKIN</h1>
            <p class="text-[0.8rem] md:text-[18px] leading-[1.6] mb-5 text-black font-extralight">
                Pureskin adalah klinik kecantikan yang menghadirkan perawatan kulit profesional sekaligus 
                menyediakan rangkaian produk kecantikan berkualitas. Kami berkomitmen membantu Anda 
                merawat kulit agar tetap sehat, cerah, dan percaya diri.
            </p>
            <a href="/ourtreatments" class="inline-block bg-[#FFE8CD] text-black py-3.75 px-10 font-playfair font-bold text-[1.2rem] no-underline rounded-[50px] shadow-[0_4px_15px_rgba(0,0,0,0.1)] transition-transform duration-300 hover:scale-105 hover:bg-[#fcdab3]">
                Book Appointment
            </a>
        </div>
    </section>

    <section class="py-10 px-5 md:py-20 md:px-10 lg:px-20 max-w-screen-2xl mx-auto">
        
        <div class="relative w-full text-center mb-10 md:mb-16">
            <h2 class="font-marck text-4xl md:text-6xl inline-block relative after:content-[''] after:block after:w-20 md:after:w-30 after:h-0.75 after:bg-[#FFDCDC] after:mx-auto after:mt-2 after:rounded-xs">
                about us
            </h2>
        </div>
        
        <div class="flex flex-col lg:flex-row items-center gap-10 md:gap-12 lg:gap-20">
            
            <div class="w-full lg:w-1/2 flex-1">
                <img src="images/Homepage/About.svg" alt="Skincare Model" class="w-full h-auto object-cover rounded-[20px] shadow-lg">
            </div>

            <div class="w-full lg:w-1/2 flex-1 text-center px-4 md:px-10 lg:px-0">
                
                <p class="font-lora text-base md:text-xl text-black leading-relaxed mb-6 md:mb-10">
                    Brand kami lahir dengan satu tujuan sederhana: menghadirkan perawatan 
                    kulit yang aman, lembut, dan efektif untuk setiap orang. Kami percaya 
                    bahwa kecantikan sejati dimulai dari kulit yang sehat. Karena itu, setiap 
                    produk kami diformulasikan melalui proses riset yang teliti, pemilihan 
                    bahan alami, dan pengujian kualitas yang ketat.
                </p>
                
                <hr class="border-none h-px bg-black w-[80%] md:w-[60%] mx-auto my-6">

                <div class="flex flex-wrap justify-center gap-6 md:gap-10 lg:gap-16 py-2 mb-2">
                    
                    <div class="text-center">
                        <span class="block font-playfair text-2xl md:text-4xl font-bold text-black">300+</span>
                        <span class="text-xs md:text-sm text-[#888888] mt-1 font-medium tracking-wide">Stayed Client</span>
                    </div>
                    
                    <div class="text-center">
                        <span class="block font-playfair text-2xl md:text-4xl font-bold text-black">10K+</span>
                        <span class="text-xs md:text-sm text-[#888888] mt-1 font-medium tracking-wide">Positive Views</span>
                    </div>
                    
                    <div class="text-center">
                        <span class="block font-playfair text-2xl md:text-4xl font-bold text-black">10Y+</span>
                        <span class="text-xs md:text-sm text-[#888888] mt-1 font-medium tracking-wide">Experience</span>
                    </div>
                </div>

                <hr class="border-none h-px bg-black w-[80%] md:w-[60%] mx-auto my-6">

                <div class="text-center mt-8 md:mt-10"> 
                    <a href="/aboutus" class="inline-block bg-[#FFE8CD] text-black py-3 px-10 md:py-4 md:px-16 font-playfair font-bold text-lg md:text-2xl no-underline rounded-[50px] shadow-[0_4px_10px_rgba(0,0,0,0.1)] transition-transform duration-300 hover:bg-[#ffe0b5] hover:-translate-y-1">
                        View more
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="py-10 px-4 md:py-20 md:px-10 lg:px-20 max-w-screen-2xl mx-auto text-center">
        
        <div class="relative w-full text-center mb-10 md:mb-16">
            <h2 class="font-marck text-4xl md:text-6xl inline-block relative after:content-[''] after:block after:w-37.5 md:after:w-75 after:h-0.75 after:bg-[#FFDCDC] after:mx-auto after:mt-2 md:after:mt-4 after:rounded-xs">
                What can we do for you
            </h2>
        </div>

        <div class="flex flex-col md:flex-row gap-6 md:gap-8">     
            
            <div class="relative flex-1 w-full h-87.5 md:h-125 rounded-[20px] overflow-hidden shadow-lg hover:shadow-2xl transition-shadow duration-300 cursor-pointer group">
                <a href="#" class="block w-full h-full">
                    <img src="/images/homepage/FaceialTreatment.svg" alt="Facial Treatment" class="w-full h-full object-cover transition-transform duration-700 ease-in-out group-hover:scale-110">
                    
                    <div class="absolute bottom-0 left-0 w-full p-6 md:p-10 bg-linear-to-t from-black/90 via-black/60 to-transparent text-white text-left">
                        <h3 class="font-playfair text-2xl md:text-4xl mb-2 md:mb-4 font-medium">Facial Treatment</h3>
                        
                        <p class="font-lora text-sm md:text-base leading-relaxed text-gray-200 mb-0 opacity-90 md:opacity-100">
                            Facial Treatment di Pureskin membantu membersihkan, menutrisi, 
                            dan meremajakan kulit wajah agar tampak lebih segar dan bercahaya.
                        </p>
                    </div>
                </a>
            </div>

            <div class="relative flex-1 w-full h-87.5 md:h-125 rounded-[20px] overflow-hidden shadow-lg hover:shadow-2xl transition-shadow duration-300 cursor-pointer group">
                <a href="#" class="block w-full h-full">
                    <img src="/images/homepage/BodyTreatment.svg" alt="Body Treatment" class="w-full h-full object-cover transition-transform duration-700 ease-in-out group-hover:scale-110">  
                    
                    <div class="absolute bottom-0 left-0 w-full p-6 md:p-10 bg-linear-to-t from-black/90 via-black/60 to-transparent text-white text-left">
                        <h3 class="font-playfair text-2xl md:text-4xl mb-2 md:mb-4 font-medium">Body Treatment</h3>
                        <p class="font-lora text-sm md:text-base leading-relaxed text-gray-200 mb-0 opacity-90 md:opacity-100">
                            Body Treatment di Pureskin membantu merawat kulit tubuh agar lebih 
                            halus, segar, dan memberikan efek relaksasi yang menenangkan.
                        </p>
                    </div>
                </a>
            </div>

        </div>
    </section>

    <section class="py-10 px-4 md:py-16 md:px-10 lg:px-12 xl:px-20 bg-white max-w-screen-2xl mx-auto">
        
        <div class="flex flex-col md:flex-row justify-between items-center md:items-end mb-8 md:mb-12 mt-4 text-center md:text-left gap-4">
            <h2 class="font-marck text-4xl md:text-5xl lg:text-[3rem] m-0 leading-tight">Bundling Package</h2>
            <a href="/ourproducts" class="no-underline text-[#1a1a1a] text-sm md:text-base border-b border-transparent transition-all duration-300 hover:border-[#1a1a1a] hover:opacity-70">
                View more products &rarr;
            </a>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 md:gap-6 lg:gap-5 xl:gap-8">
            
            <div class="bg-[#FFDCDC] p-5 lg:p-3 xl:p-5 rounded-[20px] text-center transition-transform duration-300 hover:-translate-y-2 hover:shadow-lg group">
                <div class="overflow-hidden rounded-[10px] mb-4">
                    <img src="/images/homepage/TheGlassSkinKit.svg" alt="The Glass Skin Kit" class="w-full h-62.5 md:h-72 lg:h-64 xl:h-87.5 object-cover transition-transform duration-500 group-hover:scale-105 block">
                </div>
                <h3 class="font-playfair text-xl md:text-2xl lg:text-lg xl:text-2xl font-medium mb-3 text-black">The Glass Skin Kit</h3>
                <div class="flex flex-col xl:flex-row justify-center items-center gap-3 lg:gap-2 xl:gap-4">
                    <span class="font-lora text-lg md:text-xl lg:text-base xl:text-xl font-bold text-black">Rp120.000</span>
                    <a href="/ourproducts" class="w-full xl:w-auto">
                        <button class="w-full xl:w-auto bg-[#FFE8CD] border-none py-2 px-4 lg:px-2 xl:px-4 text-sm md:text-base lg:text-sm xl:text-base cursor-pointer rounded-[50px] font-playfair transition duration-200 hover:bg-[#ffdcb0] hover:scale-105 whitespace-nowrap">
                        View Details
                        </button>
                    </a>
                </div>
            </div>

            <div class="bg-[#FFDCDC] p-5 lg:p-3 xl:p-5 rounded-[20px] text-center transition-transform duration-300 hover:-translate-y-2 hover:shadow-lg group">
                <div class="overflow-hidden rounded-[10px] mb-4">
                    <img src="/images/homepage/AcneFighterSeries.svg" alt="Acne Fighter Series" class="w-full h-62.5 md:h-72 lg:h-64 xl:h-87.5 object-cover transition-transform duration-500 group-hover:scale-105 block">
                </div>
                <h3 class="font-playfair text-xl md:text-2xl lg:text-lg xl:text-2xl font-medium mb-3 text-black">Acne Fighter Series</h3>
                <div class="flex flex-col xl:flex-row justify-center items-center gap-3 lg:gap-2 xl:gap-4">
                    <span class="font-lora text-lg md:text-xl lg:text-base xl:text-xl font-bold text-black">Rp120.000</span>
                    <a href="/ourproducts" class="w-full xl:w-auto">
                        <button class="w-full xl:w-auto bg-[#FFE8CD] border-none py-2 px-4 lg:px-2 xl:px-4 text-sm md:text-base lg:text-sm xl:text-base cursor-pointer rounded-[50px] font-playfair transition duration-200 hover:bg-[#ffdcb0] hover:scale-105 whitespace-nowrap">
                            View Details
                        </button>
                    </a>
                </div>
            </div>

            <div class="bg-[#FFDCDC] p-5 lg:p-3 xl:p-5 rounded-[20px] text-center transition-transform duration-300 hover:-translate-y-2 hover:shadow-lg group">
                <div class="overflow-hidden rounded-[10px] mb-4">
                    <img src="/images/homepage/AgelessMiracleSet.svg" alt="Ageless Miracle Set" class="w-full h-62.5 md:h-72 lg:h-64 xl:h-87.5 object-cover transition-transform duration-500 group-hover:scale-105 block">
                </div>
                <h3 class="font-playfair text-xl md:text-2xl lg:text-lg xl:text-2xl font-medium mb-3 text-black">Ageless Miracle Set</h3>
                <div class="flex flex-col xl:flex-row justify-center items-center gap-3 lg:gap-2 xl:gap-4">
                    <span class="font-lora text-lg md:text-xl lg:text-base xl:text-xl font-bold text-black">Rp120.000</span>
                    <a href="/ourproducts" class="w-full xl:w-auto">
                        <button class="w-full xl:w-auto bg-[#FFE8CD] border-none py-2 px-4 lg:px-2 xl:px-4 text-sm md:text-base lg:text-sm xl:text-base cursor-pointer rounded-[50px] font-playfair transition duration-200 hover:bg-[#ffdcb0] hover:scale-105 whitespace-nowrap">
                            View Details
                        </button>
                    </a>
                </div>
            </div>

            <div class="bg-[#FFDCDC] p-5 lg:p-3 xl:p-5 rounded-[20px] text-center transition-transform duration-300 hover:-translate-y-2 hover:shadow-lg group">
                <div class="overflow-hidden rounded-[10px] mb-4">
                    <img src="/images/homepage/FullBodyGlow.svg" alt="Full Body Glow" class="w-full h-62.5 md:h-72 lg:h-64 xl:h-87.5 object-cover transition-transform duration-500 group-hover:scale-105 block">
                </div>
                <h3 class="font-playfair text-xl md:text-2xl lg:text-lg xl:text-2xl font-medium mb-3 text-black">Full Body Glow</h3>
                <div class="flex flex-col xl:flex-row justify-center items-center gap-3 lg:gap-2 xl:gap-4">
                    <span class="font-lora text-lg md:text-xl lg:text-base xl:text-xl font-bold text-black">Rp120.000</span>
                    <a href="/ourproducts" class="w-full xl:w-auto">
                        <button class="w-full xl:w-auto bg-[#FFE8CD] border-none py-2 px-4 lg:px-2 xl:px-4 text-sm md:text-base lg:text-sm xl:text-base cursor-pointer rounded-[50px] font-playfair transition duration-200 hover:bg-[#ffdcb0] hover:scale-105 whitespace-nowrap">
                            View Details
                        </button>
                    </a>
                </div>
            </div>
        </div>
        
        <div class="h-10 md:h-16 w-full"></div>
        
        <div class="flex flex-col md:flex-row justify-between items-center md:items-end mb-8 md:mb-12 text-center md:text-left gap-4">
            <h2 class="font-marck text-4xl md:text-5xl lg:text-[3rem] m-0 leading-tight">Best Seller</h2>
            <a href="/ourproducts" class="no-underline text-[#1a1a1a] text-sm md:text-base border-b border-transparent transition-all duration-300 hover:border-[#1a1a1a] hover:opacity-70">
                View more products &rarr;
            </a>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 md:gap-6 lg:gap-5 xl:gap-8">
            
            <div class="bg-[#FFDCDC] p-5 lg:p-3 xl:p-5 rounded-[20px] text-center transition-transform duration-300 hover:-translate-y-2 hover:shadow-lg group">
                <div class="overflow-hidden rounded-[10px] mb-4">
                    <img src="/images/homepage/DailyUVShieldSPF50.svg" alt="Daily UV Shield" class="w-full h-62.5 md:h-72 lg:h-64 xl:h-87.5 object-cover transition-transform duration-500 group-hover:scale-105 block">
                </div>
                <h3 class="font-playfair text-xl md:text-2xl lg:text-lg xl:text-2xl font-medium mb-3 text-black">Daily UV Shield</h3>
                <div class="flex flex-col xl:flex-row justify-center items-center gap-3 lg:gap-2 xl:gap-4">
                    <span class="font-lora text-lg md:text-xl lg:text-base xl:text-xl font-bold text-black">Rp120.000</span>
                    <a href="/ourproducts" class="w-full xl:w-auto">
                        <button class="w-full xl:w-auto bg-[#FFE8CD] border-none py-2 px-4 lg:px-2 xl:px-4 text-sm md:text-base lg:text-sm xl:text-base cursor-pointer rounded-[50px] font-playfair transition duration-200 hover:bg-[#ffdcb0] hover:scale-105 whitespace-nowrap">
                            View Details
                        </button>
                    </a>
                </div>
            </div>

            <div class="bg-[#FFDCDC] p-5 lg:p-3 xl:p-5 rounded-[20px] text-center transition-transform duration-300 hover:-translate-y-2 hover:shadow-lg group">
                <div class="overflow-hidden rounded-[10px] mb-4">
                    <img src="/images/homepage/AcneSpotCorrector.svg" alt="Acne Spot Corrector" class="w-full h-62.5 md:h-72 lg:h-64 xl:h-87.5 object-cover transition-transform duration-500 group-hover:scale-105 block">
                </div>
                <h3 class="font-playfair text-xl md:text-2xl lg:text-lg xl:text-2xl font-medium mb-3 text-black">Acne Spot Corrector</h3>
                <div class="flex flex-col xl:flex-row justify-center items-center gap-3 lg:gap-2 xl:gap-4">
                    <span class="font-lora text-lg md:text-xl lg:text-base xl:text-xl font-bold text-black">Rp120.000</span>
                    <a href="/ourproducts" class="w-full xl:w-auto">
                        <button class="w-full xl:w-auto bg-[#FFE8CD] border-none py-2 px-4 lg:px-2 xl:px-4 text-sm md:text-base lg:text-sm xl:text-base cursor-pointer rounded-[50px] font-playfair transition duration-200 hover:bg-[#ffdcb0] hover:scale-105 whitespace-nowrap">
                            View Details
                        </button>
                    </a>
                </div>
            </div>

            <div class="bg-[#FFDCDC] p-5 lg:p-3 xl:p-5 rounded-[20px] text-center transition-transform duration-300 hover:-translate-y-2 hover:shadow-lg group">
                <div class="overflow-hidden rounded-[10px] mb-4">
                    <img src="/images/homepage/InstantWhiteBodyLotion.svg" alt="Instant White Body Lotion" class="w-full h-62.5 md:h-72 lg:h-64 xl:h-87.5 object-cover transition-transform duration-500 group-hover:scale-105 block">
                </div>
                <h3 class="font-playfair text-xl md:text-2xl lg:text-lg xl:text-2xl font-medium mb-3 text-black">Instant White Lotion</h3>
                <div class="flex flex-col xl:flex-row justify-center items-center gap-3 lg:gap-2 xl:gap-4">
                    <span class="font-lora text-lg md:text-xl lg:text-base xl:text-xl font-bold text-black">Rp120.000</span>
                    <a href="/ourproducts" class="w-full xl:w-auto">
                        <button class="w-full xl:w-auto bg-[#FFE8CD] border-none py-2 px-4 lg:px-2 xl:px-4 text-sm md:text-base lg:text-sm xl:text-base cursor-pointer rounded-[50px] font-playfair transition duration-200 hover:bg-[#ffdcb0] hover:scale-105 whitespace-nowrap">
                            View Details
                        </button>
                    </a>
                </div>
            </div>

            <div class="bg-[#FFDCDC] p-5 lg:p-3 xl:p-5 rounded-[20px] text-center transition-transform duration-300 hover:-translate-y-2 hover:shadow-lg group">
                <div class="overflow-hidden rounded-[10px] mb-4">
                    <img src="/images/homepage/Underarm&FoldCream.svg" alt="Underarm Cream" class="w-full h-62.5 md:h-72 lg:h-64 xl:h-87.5 object-cover transition-transform duration-500 group-hover:scale-105 block">
                </div>
                <h3 class="font-playfair text-xl md:text-2xl lg:text-lg xl:text-2xl font-medium mb-3 text-black">Underarm Cream</h3>
                <div class="flex flex-col xl:flex-row justify-center items-center gap-3 lg:gap-2 xl:gap-4">
                    <span class="font-lora text-lg md:text-xl lg:text-base xl:text-xl font-bold text-black">Rp120.000</span>
                    <a href="/ourproducts" class="w-full xl:w-auto">
                        <button class="w-full xl:w-auto bg-[#FFE8CD] border-none py-2 px-4 lg:px-2 xl:px-4 text-sm md:text-base lg:text-sm xl:text-base cursor-pointer rounded-[50px] font-playfair transition duration-200 hover:bg-[#ffdcb0] hover:scale-105 whitespace-nowrap">
                            View Details
                        </button>
                    </a>
                </div>
            </div>
        </div>

    </section>

        <br>

    <section class="bg-[#FFE8CD] w-full">
        
        <div class="py-10 px-4 md:py-20 md:px-10 lg:px-20 max-w-screen-2xl mx-auto flex flex-col lg:flex-row items-center gap-10 lg:gap-15">
            
            <div class="hidden lg:block flex-1 w-full h-full">
                <img src="/images/homepage/Appointment.svg" alt="Spa Ambience" class="w-full h-150 object-cover rounded-[30px] shadow-[0_10px_20px_rgba(0,0,0,0.1)]">
            </div>

            <div class="flex-1 w-full">
                
                <div class="text-center mb-8 md:mb-10">
                    <h2 class="text-4xl md:text-6xl mb-4 font-normal tracking-wide font-marck text-black">
                        Book Consultation
                    </h2>
                    <p class="text-sm md:text-base text-black max-w-lg mx-auto leading-relaxed">
                        Kami siap membantu Anda mendapatkan perawatan terbaik. Silakan isi form di 
                        bawah ini untuk menjadwalkan konsultasi dengan ahli dermatologi kami.
                    </p>
                </div>

                <form action="#" class="w-full">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 md:gap-x-8 md:gap-y-6">
                        
                        <div class="flex flex-col">
                            <label class="font-medium text-sm md:text-base mb-2 text-black">Nama</label>
                            <input type="text" placeholder="Your Name" class="p-4 border-none rounded-[10px] text-sm md:text-base bg-white outline-none w-full focus:ring-2 focus:ring-[#FFDCDC] transition-all">
                        </div>
                        
                        <div class="flex flex-col">
                            <label class="font-medium text-sm md:text-base mb-2 text-black">Treatments</label>
                            <select class="p-4 border-none rounded-[10px] text-sm md:text-base bg-white outline-none w-full cursor-pointer focus:ring-2 focus:ring-[#FFDCDC] transition-all">
                                <option>Facial Treatment</option>
                                <option>Body Treatment</option>
                                <option>Consultation</option>
                            </select>
                        </div>

                        <div class="flex flex-col">
                            <label class="font-medium text-sm md:text-base mb-2 text-black">Nomor Hp</label>
                            <input type="tel" placeholder="081..." class="p-4 border-none rounded-[10px] text-sm md:text-base bg-white outline-none w-full focus:ring-2 focus:ring-[#FFDCDC] transition-all">
                        </div>
                        
                        <div class="flex flex-col">
                            <label class="font-medium text-sm md:text-base mb-2 text-black">Date</label>
                            <input type="date" class="p-4 border-none rounded-[10px] text-sm md:text-base bg-white outline-none w-full text-gray-600 cursor-pointer focus:ring-2 focus:ring-[#FFDCDC] transition-all">
                        </div>

                        <div class="flex flex-col">
                            <label class="font-medium text-sm md:text-base mb-2 text-black">E-mail</label>
                            <input type="email" placeholder="example@mail.com" class="p-4 border-none rounded-[10px] text-sm md:text-base bg-white outline-none w-full focus:ring-2 focus:ring-[#FFDCDC] transition-all">
                        </div>
                        
                        <div class="flex flex-col">
                            <label class="font-medium text-sm md:text-base mb-2 text-black">Dermatologis</label>
                            <select class="p-4 border-none rounded-[10px] text-sm md:text-base bg-white outline-none w-full cursor-pointer focus:ring-2 focus:ring-[#FFDCDC] transition-all">
                                <option>Dr. Benedito</option>
                                <option>Dr. Nidio</option>
                                <option>Any Available</option>
                            </select>
                        </div>
                    </div>

                    <div class="mt-8 flex flex-col md:flex-row justify-between items-start md:items-center gap-4 md:gap-0">
                        <div class="flex items-start md:items-center gap-3">
                            <input type="checkbox" id="reminder" class="w-5 h-5 mt-1 md:mt-0 accent-black cursor-pointer">
                            <label for="reminder" class="text-sm text-black/80 cursor-pointer leading-tight">
                                I want to receive reminder and update regarding my booking
                            </label>
                        </div>

                        <button type="submit" class="w-full md:w-auto bg-[#FFDCDC] text-black py-3 px-8 font-playfair font-bold text-base md:text-lg rounded-[10px] shadow-sm transition-transform duration-200 hover:bg-[#fab2b2] hover:scale-105 active:scale-95">
                            Confirm
                        </button>
                    </div>
                </form>
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