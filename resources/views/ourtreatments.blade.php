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
<body class="text-black font-manuale antialiased">

    <!-- Navbar -->
    <nav class="w-full py-[20px] md:py-[30px] px-[20px] md:px-[60px] flex justify-center md:justify-end items-center bg-[#FFDCDC]">
        <ul class="list-none flex flex-wrap justify-center items-center gap-[15px] md:gap-[40px]">
            <li><a href="#" class="font-quintessential text-[16px] md:text-[20px] text-black no-underline hover:text-gray-600 transition">Home</a></li>
            <li><a href="#" class="font-quintessential text-[16px] md:text-[20px] text-black no-underline hover:text-gray-600 transition">About</a></li>
            <li><a href="#" class="font-quintessential text-[16px] md:text-[20px] text-black no-underline hover:text-gray-600 transition">Products</a></li>
            <li><a href="#" class="font-quintessential text-[16px] md:text-[20px] text-black no-underline hover:text-gray-600 transition">Treatments</a></li>
            <li>
                <a href="#">
                    <img src="/images/icon/Profile.svg" alt="Profile Icon" class="w-[20px] h-[20px] md:w-[24px] md:h-[24px] cursor-pointer hover:opacity-70 transition">
                </a>
            </li>
        </ul>
    </nav>

    <section class="relative w-full min-h-[300px] md:min-h-[400px] bg-cover bg-center bg-no-repeat flex flex-col justify-center items-center text-center px-4" style="background-image: url('/images/ourtreatment/body1.png');">
        <div class="absolute inset-0 bg-black/30"></div>
        
        <div class="z-10 text-white animate-fadeInUp">
            <h1 class="font-lora text-[36px] md:text-[64px] mb-2 drop-shadow-lg leading-tight">Our Treatment</h1>
            <p class="font-lora text-[16px] md:text-[20px] font-light drop-shadow-md">Body & Facial</p>
        </div>
    </section>

    <!-- Body Treatment -->
    <section class="flex flex-col lg:flex-row gap-[30px] md:gap-[40px] px-[20px] md:px-[60px] py-[40px] md:py-[60px] items-center">
        
        <div class="w-full lg:w-[35%]">
            <img src="/images/OurTreatment/massage.png" alt="Body Treatments" class="w-full h-[300px] md:h-[400px] rounded-[6px] object-cover shadow-sm" />
        </div>

        <div class="flex-1 w-full text-center lg:text-left">
            <h2 class="font-lora text-[32px] md:text-[40px] mb-4 text-black">Body Treatment</h2>
            
            <p class="leading-[1.6] my-[10px] text-center md:text-left text-[15px] md:text-[16px]">
                Body Treatment adalah perawatan tubuh yang menjaga kebersihan dan kesehatan kulit serta membantu merilekskan otot. Nikmati Body Treatment Massage Premium kami. Perawatan ini membuat otot lebih rileks, kulit lebih halus, dan tubuh lebih segar. Jadwalkan sesi Kamu dan rasakan kembali kenyamanan tubuh Kamu.
            </p>
            
            <p class="leading-[1.6] my-[10px] font-medium">Nikmati Body Treatment Massage Premium Kami</p>
            
            <button class="js-open-modal font-lora mt-[20px] py-[12px] px-[24px] bg-[#f3b7b5] cursor-pointer text-[16px] font-bold text-black rounded hover:bg-[#eeb0ae] transition-colors duration-300 w-full md:w-auto">
                Book Now
            </button>

            <div class="flex gap-[20px] mt-[30px] justify-center lg:justify-start">
                <div class="w-[60px] md:w-[80px]">
                    <img src="/images/OurTreatment/serum.png" alt="Serum" class="w-full h-auto" />
                </div>
                <div class="w-[60px] md:w-[80px]">
                    <img src="/images/OurTreatment/image 10.png" alt="Massage" class="w-full h-auto" />
                </div>
            </div>
        </div>
    </section>
    
</body>
</html>