<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $product->name }} - PURESKIN</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quintessential&family=Marck+Script&family=Manuale:wght@300..800&family=Playfair+Display:wght@400;700&family=Lora&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-white text-gray-900 font-manuale antialiased">

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
                                        Log Out
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

    <main class="pt-20 pb-16 px-4 md:pt-32 md:px-15 max-w-7xl mx-auto">

        <a href="/ourproducts" class="inline-flex items-center text-black hover:text-black mb-8 transition-colors">
            <img src="/images/icon/arrow_left.svg" alt="arrow" class="h-5 w-5 mr-2">
            Kembali ke Produk
        </a>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-10 lg:gap-16 items-start">

            <div class="rounded-2xl overflow-hidden bg-[#FFDCDC] bg-opacity-30 border border-red-100 shadow-sm">
                <img src="{{ asset($product->image) }}"
                    alt="{{ $product->name }}"
                    class="w-full h-auto object-cover hover:scale-105 transition-transform duration-500">
            </div>

            <div class="flex flex-col h-full justify-center">
                <span class="text-red-400 font-medium tracking-widest text-sm uppercase mb-2">
                    {{ $product->category ?? 'Skincare' }}
                </span>

                <h1 class="text-3xl md:text-5xl font-manuale text-black mb-4 leading-tight">
                    {{ $product->name }}
                </h1>

                <p class="text-2xl text-gray-800 font-medium mb-8">
                    Rp {{ number_format($product->price, 0, ',', '.') }}
                </p>
                <div class="mt-4">
                    @auth
                    <form action="{{ route('cart.add') }}" method="POST" class="w-full">
                        @csrf
                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                        <input type="hidden" name="quantity" value="1">

                        <button type="submit" class="w-full bg-[#FFE8CD] text-black py-4 px-8 rounded-xl font-medium hover:bg-[#FFDECC] hover:shadow-lg transition-all flex justify-center items-center gap-2">
                            <img src="/images/icon/bag.svg" alt="bag" class="h-5 w-5">
                            <span>Add to Cart</span>
                        </button>
                    </form>
                    @else
                    <a href="{{ route('login') }}" class="w-full bg-red-100 text-red-600 py-4 px-8 rounded-xl font-medium hover:bg-red-200 transition-all flex justify-center items-center text-center no-underline">
                        Log In to Buy
                    </a>
                    @endauth
                </div>

                <div x-data="{ activeTab: 'description' }" class="mb-8 mt-12">

                    <div class="inline-flex border-b border-gray-200 mb-6 gap-6 md:gap-8 overflow-x-auto">
                        <button
                            @click="activeTab = 'description'"
                            :class="activeTab === 'description' ? 'border-b-2 border-red-400 text-black font-bold' : 'text-gray-400 hover:text-gray-600'"
                            class="pb-2 text-sm md:text-base transition-all duration-300 uppercase tracking-wider font-manuale whitespace-nowrap">
                            Description
                        </button>
                        <button
                            @click="activeTab = 'howtouse'"
                            :class="activeTab === 'howtouse' ? 'border-b-2 border-red-400 text-black font-bold' : 'text-gray-400 hover:text-gray-600'"
                            class="pb-2 text-sm md:text-base transition-all duration-300 uppercase tracking-wider font-manuale whitespace-nowrap">
                            How To Use
                        </button>
                        <button
                            @click="activeTab = 'ingredients'"
                            :class="activeTab === 'ingredients' ? 'border-b-2 border-red-400 text-black font-bold' : 'text-gray-400 hover:text-gray-600'"
                            class="pb-2 text-sm md:text-base transition-all duration-300 uppercase tracking-wider font-manuale whitespace-nowrap">
                            Ingredients
                        </button>
                    </div>

                    <div class="prose prose-sm text-gray-600 leading-relaxed min-h-30">
                        <div x-show="activeTab === 'description'"
                            x-transition:enter="transition ease-out duration-300"
                            x-transition:enter-start="opacity-0 translate-y-2"
                            x-transition:enter-end="opacity-100 translate-y-0">
                            <p class="whitespace-pre-line">{{ $product->description ?? 'Deskripsi belum tersedia.' }}</p>
                        </div>

                        <div x-show="activeTab === 'howtouse'" style="display: none;"
                            x-transition:enter="transition ease-out duration-300"
                            x-transition:enter-start="opacity-0 translate-y-2"
                            x-transition:enter-end="opacity-100 translate-y-0">
                            <p class="whitespace-pre-line">{{ $product->how_to_use ?? 'Cara penggunaan belum tersedia.' }}</p>
                        </div>

                        <div x-show="activeTab === 'ingredients'" style="display: none;"
                            x-transition:enter="transition ease-out duration-300"
                            x-transition:enter-start="opacity-0 translate-y-2"
                            x-transition:enter-end="opacity-100 translate-y-0">
                            <p class="whitespace-pre-line">{{ $product->ingredients ?? 'Data ingredients belum tersedia.' }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

</body>

</html>