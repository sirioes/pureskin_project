<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quintessential&family=Marck+Script&family=Manuale:wght@300..800&family=Playfair+Display:wght@400;700&family=Lora&display=swap" rel="stylesheet">
    <title>Our Treatment</title>  
    @vite(['resources/css/app.css', 'resources/js/app.js']) 
    <style>
        body { overflow-x: hidden; }
    </style>
</head>
<body class="text-black font-manuale antialiased overflow-x-hidden">

    <!-- Navbar -->
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
                                        <h3 class="font-manuale text-base text-black mb-2 truncate text-center">{{ Auth::user()->name }}</h3>
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
    <section class="relative w-full min-h-75 md:min-h-100 bg-cover bg-center bg-no-repeat flex flex-col justify-center items-center text-center px-4" style="background-image: url('/images/ourtreatment/body1.png');">
        <div class="absolute inset-0 bg-black/30"></div>
        
        <div class="z-10 text-white animate-fadeInUp">
            <h1 class="font-lora text-[36px] md:text-[64px] mb-2 drop-shadow-lg leading-tight">Our Treatment</h1>
            <p class="font-lora text-[16px] md:text-[20px] font-light drop-shadow-md">Body & Facial</p>
        </div>
    </section>

    <!-- Body Treatment -->
    <section class="flex flex-col lg:flex-row gap-7.5 md:gap-10 px-5 md:px-15 py-10 md:py-15 items-center animate-fadeInUpx">
        <div class="w-full lg:w-[35%]">
            <img src="/images/OurTreatment/massage.png" alt="Body Treatments" class="w-full h-75 md:h-100 rounded-md object-cover shadow-sm" />
        </div>
        <div class="flex-1 w-full text-center lg:text-left">
            <h2 class="font-lora text-[32px] md:text-[40px] mb-4 text-black">Body Treatment</h2>
            
            <p class="leading-[1.6] my-2.5 text-center md:text-left text-[15px] md:text-[16px]">
                Body Treatment adalah perawatan tubuh yang menjaga kebersihan dan kesehatan kulit serta membantu merilekskan otot. Nikmati Body Treatment Massage Premium kami. Perawatan ini membuat otot lebih rileks, kulit lebih halus, dan tubuh lebih segar. Jadwalkan sesi Kamu dan rasakan kembali kenyamanan tubuh Kamu.
            </p>
            
            <p class="leading-[1.6] my-2.5 font-medium">Nikmati Body Treatment Massage Premium Kami</p>
            
            <button class="js-open-modal font-lora mt-5 py-3 px-6 bg-[#f3b7b5] cursor-pointer text-[16px] font-bold text-black rounded hover:bg-[#eeb0ae] transition-colors duration-300 w-full md:w-auto">
                Book Now
            </button>

            <div class="flex gap-5 mt-7.5 justify-center lg:justify-start">
                <div class="w-15 md:w-20">
                    <img src="/images/OurTreatment/serum.png" alt="Serum" class="w-full h-auto" />
                </div>
                <div class="w-15 md:w-20">
                    <img src="/images/OurTreatment/image 10.png" alt="Massage" class="w-full h-auto" />
                </div>
            </div>
        </div>
    </section>
    
    <!-- Facial Treatment -->
    <section class="flex flex-col lg:flex-row gap-10 px-5 md:px-25 py-10 md:py-15 items-center lg:items-start relative animate-fadeInUp">
        
        <div class="flex-1 w-full order-2 lg:order-1 z-10">
            <h2 class="font-lora text-[32px] md:text-[40px] mb-4 text-black text-center lg:text-left">Facial Treatment</h2>
            <p class="font-lora leading-[1.6] my-2.5 text-[16px] md:text-[20px] text-center lg:text-left">
                Facial treatment adalah perawatan wajah yang fokus pada pembersihan pori, pengangkatan sel kulit mati, dan pemberian nutrisi agar kulit tetap sehat dan terawat.
            </p>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-5 my-5">
                <div class="font-lora border border-[#ccc] p-5 rounded-lg bg-white shadow-sm hover:shadow-md transition-shadow">
                    <strong>Membersihkan pori.</strong> Facial treatment membantu Kamu mengangkat kotoran, minyak, dan debu.
                </div>
                <div class="font-lora border border-[#ccc] p-5 rounded-lg bg-white shadow-sm hover:shadow-md transition-shadow">
                    <strong>Exfoliasi.</strong> Proses exfoliasi membuat tekstur kulit lebih halus dan lapisan kulit baru muncul.
                </div>
                <div class="font-lora border border-[#ccc] p-5 rounded-lg bg-white shadow-sm hover:shadow-md transition-shadow">
                    <strong>Anti Jerawat.</strong> Teknik ekstraksi membantu mengurangi penyumbatan pori dan komedo.
                </div>
                <div class="font-lora border border-[#ccc] p-5 rounded-lg bg-white shadow-sm hover:shadow-md transition-shadow">
                    <strong>Hidrasi.</strong> Serum dan masker membantu wajah Kamu terasa lembap lebih lama.
                </div>
            </div>

            <button class="js-open-modal w-full md:w-auto font-lora mt-2.5 py-3 px-10 bg-[#f3b7b5] text-[16px] font-bold text-black rounded hover:bg-[#eeb0ae] transition-colors duration-300 block mx-auto lg:mx-0">
                Book Now
            </button>
        </div>

        <div class="w-full lg:w-[40%] order-1 lg:order-2 relative">
            <img 
                src="/images/OurTreatment/facial-slanted.png"
                alt="facial treatment" 
                class="w-full h-75 lg:h-125 object-cover" 
            />
        </div>
    </section>

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

    <!-- Popup -->
    <div id="bookingModal" class="fixed inset-0 z-50 hidden">
        
        <div class="js-close-modal absolute inset-0 bg-black/60 backdrop-blur-sm transition-opacity cursor-pointer"></div>

        <div class="absolute inset-0 flex justify-center items-center p-4 overflow-y-auto pointer-events-none">
            
            <div class="bg-[#FFE8CD] w-full max-w-125 max-h-[90vh] rounded-[20px] shadow-2xl relative pointer-events-auto flex flex-col overflow-hidden animate-fadeInUp">
                
                <button class="js-close-modal absolute top-4 right-5 text-2xl font-bold text-gray-600 hover:text-black">&times;</button>
                
                <div class="p-8 overflow-y-auto modal-scroll">
                    <div class="text-center mb-6">
                        <h2 class="font-manuale text-[28px] font-bold text-black uppercase tracking-wide">BOOK CONSULTATION</h2>
                        <p class="text-[10px] text-gray-600 mt-2 px-4 leading-tight">
                            "Siap untuk tampil lebih percaya diri? Jangan biarkan masalah kulit mengganggu harimu. Isi formulir di bawah ini, pilih perawatan favoritmu, dan biarkan kami membantu mengembalikan kilau alami wajahmu."
                        </p>
                    </div>

                    <form action="#" class="flex flex-col gap-4">
                        <div class="flex flex-col">
                            <label class="font-manuale text-[14px] font-semibold mb-1 text-black">Your Name</label>
                            <input type="text" class="w-full p-3 rounded-lg border-none bg-white text-sm outline-none focus:ring-2 focus:ring-[#f3b7b5]" required>
                        </div>
                        <div class="flex flex-col">
                            <label class="font-manuale text-[14px] font-semibold mb-1 text-black">Nomor Hp</label>
                            <input type="tel" class="w-full p-3 rounded-lg border-none bg-white text-sm outline-none focus:ring-2 focus:ring-[#f3b7b5]" required>
                        </div>
                        <div class="flex flex-col">
                            <label class="font-manuale text-[14px] font-semibold mb-1 text-black">Gmail</label>
                            <input type="email" class="w-full p-3 rounded-lg border-none bg-white text-sm outline-none focus:ring-2 focus:ring-[#f3b7b5]" required>
                        </div>
                        <div class="flex flex-col">
                            <label class="font-manuale text-[14px] font-semibold mb-1 text-black">Date</label>
                            <input type="date" class="w-full p-3 rounded-lg border-none bg-white text-sm outline-none text-gray-600 focus:ring-2 focus:ring-[#f3b7b5]" required>
                        </div>
                        <div class="flex flex-col gap-2">
                            <label class="font-manuale text-[14px] font-semibold text-black">Treatments</label>
                            <label class="flex items-center bg-white p-2.5 rounded-lg cursor-pointer group hover:bg-gray-50">
                                <input type="checkbox" class="w-5 h-5 accent-[#f3b7b5] mr-3 rounded border-gray-300">
                                <span class="text-sm font-medium text-gray-700">Body Treatments</span>
                            </label>
                            <label class="flex items-center bg-white p-2.5 rounded-lg cursor-pointer group hover:bg-gray-50">
                                <input type="checkbox" class="w-5 h-5 accent-[#f3b7b5] mr-3 rounded border-gray-300">
                                <span class="text-sm font-medium text-gray-700">Facial Treatments</span>
                            </label>
                        </div>
                        <div class="flex flex-col">
                            <label class="font-manuale text-[14px] font-semibold mb-1 text-black">Dermatologis</label>
                            <select class="w-full p-3 rounded-lg border-none bg-white text-sm outline-none text-gray-600 focus:ring-2 focus:ring-[#f3b7b5]">
                                <option value="" disabled selected>Select Dermatologist</option>
                                <option>Dr. Benedito</option>
                                <option>Dr. Nidio</option>
                                <option>Any Available</option>
                            </select>
                        </div>
                        <button type="submit" class="mt-4 w-full bg-[#fcd4d4] hover:bg-[#f3b7b5] text-black font-bold py-3 rounded-lg transition-colors shadow-sm">
                            Confirm
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>
</html>