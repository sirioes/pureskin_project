<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Keranjang Belanja</title>
    <link href="https://fonts.googleapis.com/css2?family=Quintessential&family=Marck+Script&family=Manuale:wght@300..800&family=Playfair+Display:wght@400;700&family=Lora&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-[#FFDCDC] min-h-screen font-sans">

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

    <div class="max-w-4xl mx-auto mt-40 p-5 mb-20">
        <h2 class="font-playfair text-4xl mb-8 text-center text-black">YOUR CART</h2>

        <div class="bg-white rounded-3xl shadow-xl overflow-hidden p-8">
            @if($cartItems->count() > 0)
                <div class="space-y-6">
                    @php $total = 0 @endphp
                    
                    @foreach($cartItems as $item)
                        @php 
                            $subtotal = $item->product->price * $item->quantity;
                            $total += $subtotal;
                        @endphp
                        
                        <div class="flex flex-col md:flex-row items-center justify-between border-b border-gray-100 pb-6 gap-4">
                            <div class="flex items-center gap-6 w-full md:w-auto">
                                <div class="w-24 h-24 bg-gray-50 rounded-2xl flex items-center justify-center overflow-hidden shrink-0">
                                    <img src="{{ asset($item->product->image) }}" class="object-cover w-full h-full">
                                </div>
                                <div>
                                    <h3 class="font-bold text-lg text-gray-800">{{ $item->product->name }}</h3>
                                    <p class="text-pink-500 font-semibold">Rp {{ number_format($item->product->price, 0, ',', '.') }}</p>
                                </div>
                            </div>

                            <div class="flex items-center justify-between w-full md:w-auto gap-8">
                                <div class="flex items-center border border-gray-200 rounded-xl overflow-hidden">
                                    <form action="{{ route('cart.update', $item->id) }}" method="POST" class="m-0">
                                        @csrf
                                        <input type="hidden" name="change" value="-1">
                                        <button type="submit" class="px-3 py-1 bg-gray-50 hover:bg-gray-100 text-gray-600 font-bold">-</button>
                                    </form>
                                    
                                    <span class="px-4 py-1 font-bold text-gray-800">{{ $item->quantity }}</span>
                                    
                                    <form action="{{ route('cart.update', $item->id) }}" method="POST" class="m-0">
                                        @csrf
                                        <input type="hidden" name="change" value="1">
                                        <button type="submit" class="px-3 py-1 bg-gray-50 hover:bg-gray-100 text-gray-600 font-bold">+</button>
                                    </form>
                                </div>

                                <div class="text-right min-w-30">
                                    <p class="text-sm text-gray-400">Subtotal</p>
                                    <p class="font-bold text-black">Rp {{ number_format($subtotal, 0, ',', '.') }}</p>
                                </div>
                                
                                <form action="{{ route('cart.remove', $item->id) }}" method="POST" class="m-0">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-400 hover:text-red-600 transition p-2" onclick="return confirm('Hapus produk ini dari keranjang?')">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                        </svg>
                                    </button>
                                </form>
                            </div>
                        </div>
                    @endforeach
                </div>

                <div class="mt-10 flex flex-col md:flex-row justify-between items-center border-t-2 border-dashed pt-8 gap-6">
                    <div>
                        <p class="text-gray-500 uppercase tracking-wider text-xs font-bold">Total Pembayaran</p>
                        <p class="text-4xl font-playfair font-bold text-black">Rp {{ number_format($total, 0, ',', '.') }}</p>
                    </div>
                    <div class="flex flex-col w-full md:w-auto gap-3">
                        <button class="bg-[#FFE8CD] hover:bg-[#fcdab3] text-black px-12 py-4 rounded-full font-bold shadow-lg transition-transform hover:scale-105 active:scale-95 text-center">
                            Checkout Sekarang
                        </button>
                        <p class="text-xs text-center text-gray-400">*Pajak & Ongkir akan dihitung di tahap selanjutnya</p>
                    </div>
                </div>
            @else
                <div class="text-center py-20">
                    <img src="/images/icon/Cart.svg" class="w-24 h-24 mx-auto mb-6 opacity-10">
                    <p class="text-gray-400 text-2xl mb-6">Wah, keranjangmu masih kosong nih...</p>
                    <a href="/ourproducts" class="inline-block bg-[#FFE8CD] text-black px-8 py-3 rounded-full font-bold hover:bg-[#fcdab3] transition shadow-md">
                        Ayo Cari Produk Kecantikanmu!
                    </a>
                </div>
            @endif
        </div>
    </div>
</body>
</html>