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

</body>
</html>