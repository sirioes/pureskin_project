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
        <nav x-data="{ isOpen: false, profileOpen: false }" class="absolute top-0 w-full py-4 px-4 md:py-7.5 md:px-15 z-20 animate-fadeInUp bg-[#FFDCDC]">
            <div class="flex justify-end items-center">
                
                <div class="flex md:hidden items-center gap-4">
                    <div class="relative">
                        <button @click="profileOpen = !profileOpen" class="focus:outline-none">
                            <img src="/images/icon/Profile.svg" alt="Profile" class="w-6 h-6">
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

                    <button @click="isOpen = !isOpen" class="focus:outline-none ml-2">
                        <img :src="isOpen ? '/images/icon/close.svg' : '/images/icon/open.svg'" alt="toggle" class="w-8 h-8">
                    </button>
                </div>

                <ul :class="isOpen ? 'flex' : 'hidden'" 
                    class="list-none md:flex flex-wrap justify-center gap-4 sm:gap-6 md:gap-10 items-center 
                        absolute md:relative top-full left-0 w-full md:w-auto bg-[#FFDCDC] md:bg-transparent 
                        flex-col md:flex-row py-6 md:py-0 shadow-lg md:shadow-none">
                    
                    <li><a href="/" class="font-quintessential text-sm md:text-[20px] text-black no-underline hover:opacity-70">Home</a></li>
                    <li><a href="/aboutus" class="font-quintessential text-sm md:text-[20px] text-black no-underline hover:opacity-70">About</a></li>
                    <li><a href="/ourproducts" class="font-quintessential text-sm md:text-[20px] text-black no-underline hover:opacity-70">Products</a></li>
                    <li><a href="/ourtreatments" class="font-quintessential text-sm md:text-[20px] text-black no-underline hover:opacity-70">Treatments</a></li>

                    <li class="hidden md:flex items-center gap-5 ml-5">
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
                                    <img src="/images/icon/Profile.svg" alt="Profile" class="w-6 h-6 hover:scale-110 transition-transform">
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
                    @foreach ($faceCare as $product)
                    <div class="swiper-slide w-50 p-4">
                        <div class="bg-[#FFDCDC] p-4 rounded-2xl flex flex-col justify-between transition-transform duration-300 hover:-translate-y-2 hover:shadow-lg group h-full">
                            <div class="mb-4 flex justify-center items-center">
                                <img src="{{ asset($product->image) }}" alt="{{ $product->name }}" class="rounded-2xl h-auto object-contain transition-transform duration-500 group-hover:scale-100 block">
                            </div>
                            <div class="grow">
                                <h3 class="font-manuale font-medium md:font-semibold text-lg md:text-xl text-black leading-tight h-12">{{ $product->name }}</h3>
                                <div class="flex justify-between items-center mt-4 mb-2 space-x-3 md:space-x-4">
                                    <p class="text-base md:text-xl font-medium md:font-semibold">Rp{{ number_format($product->price, 0, ',', '.') }}</p>
                                
                                    @auth
                                        <form action="{{ route('cart.add') }}" method="POST" class="m-0">
                                            @csrf
                                            <input type="hidden" name="product_id" value="{{ $product->id }}">
                                            <input type="hidden" name="quantity" value="1">
                                            <button type="submit" class="bg-[#FFE8CD] text-black py-1 px-1.5 md:px-4 md:py-2 rounded-lg text-xs md:text-sm font-medium hover:bg-[#FFD6BA] transition duration-300 shrink-0">
                                                Add to cart
                                            </button>
                                        </form>
                                    @else
                                        <a href="{{ route('login') }}" class="bg-[#FFE8CD] text-black py-1 px-1.5 md:px-4 md:py-2 rounded-lg text-xs md:text-sm font-medium hover:bg-[#FFD6BA] transition duration-300 shrink-0 no-underline text-center">
                                            Add to cart
                                        </a>
                                    @endauth
                                </div>
                            </div>
                        </div>
                     </div>
                    @endforeach
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
                    @foreach ($bodyCare as $product)
                    <div class="swiper-slide w-50 p-4">
                        <div class="bg-[#FFDCDC] p-4 rounded-2xl flex flex-col justify-between transition-transform duration-300 hover:-translate-y-2 hover:shadow-lg group h-full">
                            <div class="mb-4 flex justify-center items-center">
                                <img src="{{ asset($product->image) }}" alt="{{ $product->name }}" class="rounded-2xl h-auto object-contain transition-transform duration-500 group-hover:scale-100 block">
                            </div>
                            <div class="grow">
                                <h3 class="font-manuale font-medium md:font-semibold text-lg md:text-xl text-black leading-tight h-12">{{ $product->name }}</h3>
                                <div class="flex justify-between items-center mt-4 mb-2 space-x-3 md:space-x-4">
                                    <p class="text-base md:text-xl font-medium md:font-semibold">Rp{{ number_format($product->price, 0, ',', '.') }}</p>
                                    @auth
                                        <form action="{{ route('cart.add') }}" method="POST" class="m-0">
                                            @csrf
                                            <input type="hidden" name="product_id" value="{{ $product->id }}">
                                            <input type="hidden" name="quantity" value="1">
                                            <button type="submit" class="bg-[#FFE8CD] text-black py-1 px-1.5 md:px-4 md:py-2 rounded-lg text-xs md:text-sm font-medium hover:bg-[#FFD6BA] transition duration-300 shrink-0">
                                                Add to cart
                                            </button>
                                        </form>
                                    @else
                                        <a href="{{ route('login') }}" class="bg-[#FFE8CD] text-black py-1 px-1.5 md:px-4 md:py-2 rounded-lg text-xs md:text-sm font-medium hover:bg-[#FFD6BA] transition duration-300 shrink-0 no-underline text-center">
                                            Add to cart
                                        </a>
                                    @endauth
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
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
                    @foreach ($bestSellers as $product)
                    <div class="swiper-slide w-50 p-4">
                        <div class="bg-[#FFDCDC] p-4 rounded-2xl flex flex-col justify-between transition-transform duration-300 hover:-translate-y-2 hover:shadow-lg group h-full">
                            <div class="mb-4 flex justify-center items-center">
                                <img src="{{ asset($product->image) }}" alt="{{ $product->name }}" class="rounded-2xl h-auto object-contain transition-transform duration-500 group-hover:scale-100 block">
                            </div>
                            <div class="grow">
                                <h3 class="font-manuale font-medium md:font-semibold text-lg md:text-xl text-black leading-tight h-12">{{ $product->name }}</h3>
                                <div class="flex justify-between items-center mt-4 mb-2 space-x-3 md:space-x-4">
                                    <p class="text-base md:text-xl font-medium md:font-semibold">Rp{{ number_format($product->price, 0, ',', '.') }}</p>
                                    @auth
                                        <form action="{{ route('cart.add') }}" method="POST" class="m-0">
                                            @csrf
                                            <input type="hidden" name="product_id" value="{{ $product->id }}">
                                            <input type="hidden" name="quantity" value="1">
                                            <button type="submit" class="bg-[#FFE8CD] text-black py-1 px-1.5 md:px-4 md:py-2 rounded-lg text-xs md:text-sm font-medium hover:bg-[#FFD6BA] transition duration-300 shrink-0">
                                                Add to cart
                                            </button>
                                        </form>
                                    @else
                                        <a href="{{ route('login') }}" class="bg-[#FFE8CD] text-black py-1 px-1.5 md:px-4 md:py-2 rounded-lg text-xs md:text-sm font-medium hover:bg-[#FFD6BA] transition duration-300 shrink-0 no-underline text-center">
                                            Add to cart
                                        </a>
                                    @endauth
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
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
                    @foreach ($bestPackages as $product)
                    <div class="swiper-slide w-50 p-4">
                        <div class="bg-[#FFDCDC] p-4 rounded-2xl flex flex-col justify-between transition-transform duration-300 hover:-translate-y-2 hover:shadow-lg group h-full">
                            <div class="mb-4 flex justify-center items-center">
                                <img src="{{ asset($product->image) }}" alt="{{ $product->name }}" class="rounded-2xl h-auto object-contain transition-transform duration-500 group-hover:scale-100 block">
                            </div>
                            <div class="grow">
                                <h3 class="font-manuale font-medium md:font-semibold text-lg md:text-xl text-black leading-tight h-12">{{ $product->name }}</h3>
                                <div class="flex justify-between items-center mt-4 mb-2 space-x-3 md:space-x-4">
                                    <p class="text-base md:text-xl font-medium md:font-semibold">Rp{{ number_format($product->price, 0, ',', '.') }}</p>
                                   @auth
                                        <form action="{{ route('cart.add') }}" method="POST" class="m-0">
                                            @csrf
                                            <input type="hidden" name="product_id" value="{{ $product->id }}">
                                            <input type="hidden" name="quantity" value="1">
                                            <button type="submit" class="bg-[#FFE8CD] text-black py-1 px-1.5 md:px-4 md:py-2 rounded-lg text-xs md:text-sm font-medium hover:bg-[#FFD6BA] transition duration-300 shrink-0">
                                                Add to cart
                                            </button>
                                        </form>
                                    @else
                                        <a href="{{ route('login') }}" class="bg-[#FFE8CD] text-black py-1 px-1.5 md:px-4 md:py-2 rounded-lg text-xs md:text-sm font-medium hover:bg-[#FFD6BA] transition duration-300 shrink-0 no-underline text-center">
                                            Add to cart
                                        </a>
                                    @endauth
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
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