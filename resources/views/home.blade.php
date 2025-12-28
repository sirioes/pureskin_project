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
</body>
</html>