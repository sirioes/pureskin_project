<!DOCTYPE html>
<html lang="en" class="scroll-smooth"> <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PURESKIN</title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quintessential&family=Marck+Script&family=Manuale:wght@300..800&family=Playfair+Display:wght@400;700&family=Lora&display=swap" rel="stylesheet">
    @vite('resources/css/app.css')
    
</head>
<body class="text-black font-manuale antialiased overflow-x-hidden">

    <section class="relative h-screen w-full bg-cover bg-center flex flex-col justify-center items-center text-center px-5" style="background-image: url('/images/homepage/Home.svg');">
        
        <nav class="absolute top-0 w-full py-4 px-4 md:py-7.5 md:px-15 flex justify-center md:justify-end items-center z-10 animate-fadeInUp bg-[#FFDCDC]">
            <ul class="list-none flex flex-wrap justify-center gap-4 sm:gap-6 md:gap-10 items-center">
                
                <li><a href="/" class="font-quintessential text-sm sm:text-base md:text-[20px] text-black no-underline hover:opacity-70 transition-opacity">Home</a></li>
                <li><a href="/about" class="font-quintessential text-sm sm:text-base md:text-[20px] text-black no-underline hover:opacity-70 transition-opacity">About</a></li>
                <li><a href="/ourproducts" class="font-quintessential text-sm sm:text-base md:text-[20px] text-black no-underline hover:opacity-70 transition-opacity">Products</a></li>
                <li><a href="/treatments" class="font-quintessential text-sm sm:text-base md:text-[20px] text-black no-underline hover:opacity-70 transition-opacity">Treatments</a></li>

                <li>
                    <a href="#">
                        <img src="/images/icon/Profile.svg" alt="Profile Icon" class="w-5 h-5 md:w-6 md:h-6 ml-3 md:ml-7.5 cursor-pointer hover:scale-110 transition-transform">
                    </a>
                </li>
            </ul>
        </nav>

        <div class="z-10 text-center max-w-200 p-5 animate-fadeInUp">
            <h1 class="font-playfair text-[4.2rem] md:text-[140px] tracking-[2px] mb-1.25 text-black text-center leading-none">PURESKIN</h1>
            <p class="text-[0.8rem] md:text-[18px] leading-[1.6] mb-5 text-black font-extralight">
                Pureskin adalah klinik kecantikan yang menghadirkan perawatan kulit profesional sekaligus 
                menyediakan rangkaian produk kecantikan berkualitas. Kami berkomitmen membantu Anda 
                merawat kulit agar tetap sehat, cerah, dan percaya diri.
            </p>
            <a href="#" class="inline-block bg-[#FFE8CD] text-black py-3.75 px-10 font-playfair font-bold text-[1.2rem] no-underline rounded-[50px] shadow-[0_4px_15px_rgba(0,0,0,0.1)] transition-transform duration-300 hover:scale-105 hover:bg-[#fcdab3]">
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
                    <a href="#" class="inline-block bg-[#FFE8CD] text-black py-3 px-10 md:py-4 md:px-16 font-playfair font-bold text-lg md:text-2xl no-underline rounded-[50px] shadow-[0_4px_10px_rgba(0,0,0,0.1)] transition-transform duration-300 hover:bg-[#ffe0b5] hover:-translate-y-1">
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
            <a href="#" class="no-underline text-[#1a1a1a] text-sm md:text-base border-b border-transparent transition-all duration-300 hover:border-[#1a1a1a] hover:opacity-70">
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
                    <a href="#" class="w-full xl:w-auto">
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
                    <a href="#" class="w-full xl:w-auto">
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
                    <a href="#" class="w-full xl:w-auto">
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
                    <a href="#" class="w-full xl:w-auto">
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
            <a href="#" class="no-underline text-[#1a1a1a] text-sm md:text-base border-b border-transparent transition-all duration-300 hover:border-[#1a1a1a] hover:opacity-70">
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
                    <a href="#" class="w-full xl:w-auto">
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
                    <a href="#" class="w-full xl:w-auto">
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
                    <a href="#" class="w-full xl:w-auto">
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
                    <a href="#" class="w-full xl:w-auto">
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
</body>
</html>