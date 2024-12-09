<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Rokkitt:ital,wght@0,700;1,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        'rokkitt': ['Rokkitt', 'serif'],
                        'roboto': ['Roboto', 'sans-serif'],
                    },
                },
            },
        }
    </script>
</head>
<body class="flex flex-col font-rokkitt bg-black m-0 p-0 overflow-x-hidden">
    <div class="body1 flex-1 bg-cover bg-center bg-fixed min-h-screen w-full" style="background-image: url('/aset/labuanbajo.png')">
        <nav>
            <ul class="font-roboto font-bold flex justify-around list-none fixed w-full z-[1000] top-8">
                <li class="des ml-2 text-white relative left-56"><a href="#">Destinations</a></li>
                <li class="mr-4 text-white"><a href="#">Experiences</a></li>
                <div class="search">
                    <li>
                        <input class="cari absolute right-[38vw] border-2 border-white rounded-full py-1.5 px-4 w-[10vw] bg-transparent text-white" type="text" placeholder="SEARCH">
                    </li>
                </div>
                <li>
                    <button id="loginbtn" class="font-roboto py-2 px-7 bg-[#FF3D00] text-white rounded-full cursor-pointer transition-transform duration-300 hover:scale-150">Login</button>
                </li>
                <div id="coverpro" class="profil relative right-[5%] rounded-full bg-black flex justify-center items-center p-2">
                    <img id="profile-pic" src="" alt="Profile Picture" class="w-8 h-8 hidden">
                </div>
            </ul>
        </nav>

        <!-- Hero Section -->
        <section class="bawah h-full relative">
            <div class="bawah-content relative text-center text-white top-[60%] translate-y-[30%]">
                <div id="intro" class="opacity-0 transition-opacity duration-1000">
                    <!-- Memindahkan LABUAN lebih ke bawah dengan padding-top -->
                    <h1 class="text-[10vw] leading-[0.3] mt-48">LABUAN</h1>
                    <h1 class="text-[10vw] leading-[0.3] mt-32">BAJO</h1>
                </div>
                <!-- Destination Links -->
                <div class="KOLOM flex flex-wrap justify-evenly gap-8">
                    <!-- Jam Gadang -->
                    <div class="destination-item">
                        <a href="#jamgadang" class="mx-10 text-white font-roboto font-light">
                            <div class="DESKRIPSI1 relative -bottom-52 right-72">GET INTO THE FUTURE IN</div>
                            <div class="TEMPAT1 relative right-[20.8rem] -bottom-52"><strong>Jam Gadang</strong></div>
                        </a>
                        <img src="/aset/jamgadang.png" class="jamgad relative rounded-full h-[4.5vw] w-[4.5vw] right-[24.2rem] -bottom-[7rem]">
                    </div>

                        
                        <!-- Banda neira -->
                        <div class="destination-item">
                            <a href="#jamgadang" class="mx-10 text-white font-roboto font-light">
                                <div class="DESKRIPSI1 relative -bottom-52 right-[34rem]">BACK THE TIME</div>
                                <div class="TEMPAT1 relative right-[35rem] -bottom-52"><strong>Banda Neira</strong></div>
                            </a>
                            <img src="/aset/bandaneira.png" class="jamgad relative rounded-full h-[4.5vw] w-[4.5vw] right-[40.2rem] -bottom-[7rem]">
                        </div>
                    <!-- Repeat similar structure for other destinations -->
                    <!-- ... -->
                </div>
                <div class="KOLOM flex flex-wrap justify-evenly gap-8">
                    <!-- Nusa Penida -->
                    <div class="destination-item">
                        <a href="#jamgadang" class="mx-10 text-white font-roboto font-light">
                            <div class="DESKRIPSI1 relative -bottom-[1.4rem] left-52">GET IMPRESSED</div>
                            <div class="TEMPAT1 relative left-[12.6rem] -bottom-[1.5rem] z-4"><strong>Nusa Penida</strong></div>
                        </a>
                        <img src="/aset/nusapenida.png" class="jamgad relative rounded-full h-[4.5vw] w-[4.5vw] left-[7.2rem] bottom-[4.5rem] z-2">
                    </div>
                </div>
                <!-- Repeat similar structure for other destinations -->
                <!-- ... -->
            </div>

             <!-- Nusa Penida -->
             <div class="destination-item">
                <a href="#jamgadang" class="mx-10 text-white font-roboto font-light">
                    <div class="DESKRIPSI1 relative -bottom-[1.4rem] ml-[95.7rem] ">GET INTO THE FUTURE IN</div>
                    <div class="TEMPAT1 relative -bottom-[1.5rem] ml-[95.7rem] z-4"><strong>Raja Ampat</strong></div>
                </a>
                <img src="/aset/maskrajampat.png" class="jamgad relative rounded-full h-[4.5vw] w-[4.5vw] ml-[90rem]  bottom-[4.5rem] z-2">
            </div>
        </div>
        <!-- Repeat similar structure for other destinations -->
        <!-- ... -->
        </div>
            </div>
        </section>
    </div>

    <!-- Content Sections -->
    <div class="body2 flex-1 bg-black min-h-[80vh]">
        <section class="content flex justify-between p-12">
            <div class="fotolabuan relative flex p-[10%,0%,10%,50%] ">
               <img src="/aset/masklabuan.png ">
            </div>
            <div class="kanan">
                <h2 class="Tales text-white font-roboto font-bold text-8xl  ml-[1rem]   ">Tales of Labuan Bajo</h2>

                <p class="text-white font-roboto font-normal opacity-70 text-3xl translate-x-[2rem] ">
                    Labuan Bajo is a small fishing village located at the western tip of Flores Island <br>  East Nusa Tenggara, Indonesia. 
                     In the past, Labuan Bajo was just a simple village where <br>most of the residents made their living as fisherman.<br> However, over time, 
                    this place has rapidly developegd into one of <br> Indonesia's top tourist destination due to it's stunning natural beauty
                </p>
            </div>
        </section>
    </div>

    <!-- Repeat similar structure for other sections (Jam Gadang, Banda Neira, etc.) -->
    <!-- ... -->

     <!-- Hero Section -->
      
     <section class="bawah h-full relative bg-no-repeat bg-cover" style="background-image: url('/aset/jamgadang.png') ">
        <div class="bawah-content relative text-center text-white top-[60%] translate-y-[30%] ">
            <div id="intro">
                <!-- Memindahkan LABUAN lebih ke bawah dengan padding-top -->
                <h1 class="text-[10vw] leading-[0.3] mt-48">JAM</h1>
                <h1 class="text-[10vw] leading-[0.3] mt-32">GADANG</h1>
            </div>
            <!-- Destination Links -->
            <div class="KOLOM flex flex-wrap justify-evenly gap-8">
                <!-- Jam Gadang -->
                <div class="destination-item">
                    <a href="#jamgadang" class="mx-10 text-white font-roboto font-light">
                        <div class="DESKRIPSI1 relative -bottom-52 right-72">GET INTO THE FUTURE IN</div>
                        <div class="TEMPAT1 relative right-[20.8rem] -bottom-52"><strong>Jam Gadang</strong></div>
                    </a>
                    <img src="/aset/jamgadang.png" class="jamgad relative rounded-full h-[4.5vw] w-[4.5vw] right-[24.2rem] -bottom-[7rem]">
                </div>

                    
                    <!-- Banda neira -->
                    <div class="destination-item">
                        <a href="#jamgadang" class="mx-10 text-white font-roboto font-light">
                            <div class="DESKRIPSI1 relative -bottom-52 right-[34rem]">BACK THE TIME</div>
                            <div class="TEMPAT1 relative right-[35rem] -bottom-52"><strong>Banda Neira</strong></div>
                        </a>
                        <img src="/aset/bandaneira.png" class="jamgad relative rounded-full h-[4.5vw] w-[4.5vw] right-[40.2rem] -bottom-[7rem]">
                    </div>
                <!-- Repeat similar structure for other destinations -->
                <!-- ... -->
            </div>
            <div class="KOLOM flex flex-wrap justify-evenly gap-8">
                <!-- Nusa Peninda -->
                <div class="destination-item">
                    <a href="#jamgadang" class="mx-10 text-white font-roboto font-light">
                        <div class="DESKRIPSI1 relative -bottom-[1.4rem] left-52">GET IMPRESSED</div>
                        <div class="TEMPAT1 relative left-[12.6rem] -bottom-[1.5rem] z-4"><strong>Nusa Penida</strong></div>
                    </a>
                    <img src="/aset/nusapenida.png" class="jamgad relative rounded-full h-[4.5vw] w-[4.5vw] left-[7.2rem] bottom-[4.5rem] z-2">
                </div>
            </div>
            <!-- Repeat similar structure for other destinations -->
            <!-- ... -->
        </div>

         <!-- Nusa Peninda -->
          
         <div class="destination-item">
            <a href="#jamgadang" class="mx-10 text-white font-roboto font-light">
                <div class="DESKRIPSI1 relative -bottom-[1.4rem] ml-[95.7rem] ">GET INTO THE FUTURE IN</div>
                <div class="TEMPAT1 relative -bottom-[1.5rem] ml-[95.7rem] z-4"><strong>Raja Ampat</strong></div>
            </a>
            <img src="/aset/maskrajampat.png" class="jamgad relative rounded-full h-[4.5vw] w-[4.5vw] ml-[90rem]  bottom-[4.5rem] z-2">
        </div>
    </div>
    <!-- Repeat similar structure for other destinations -->
    <!-- ... -->
    </div>
        </div>
    </section>
</div>

<!-- Content Sections -->
<div class="body2 flex-1 bg-black min-h-[80vh]">
    <section class="content flex justify-between p-12">
        <div class="fotolabuan relative flex p-[10%,0%,10%,50%] ">
           <img src="/aset/maskjam.png ">
        </div>
        <div class="kanan">
            <h2 class="Tales text-white font-roboto font-bold text-8xl  ml-[1rem]   ">Tales of Jam Gadang</h2>

            <p class="text-white font-roboto font-normal opacity-70 text-3xl translate-x-[2rem] ">
                Jam Gadang is a clock tower built in 1926 in Bukittinggi, West Sumatra,<br> as a gift from the Queen of the Netherlands.
                <br>It was designed by Yazid Abidin and constructed by Haji Moran <br> featuring a clock mechanism made in Germany, the same as that of Big Ben in London. 
                <br>The tower’s architectural style initially reflected Dutch influence, later changed <br>  to a pagoda-style roof during the Japanese occupation, and finally adopted 
                <br> the traditional Minangkabau gonjong roof after Indonesia’s independence. <br> Today, Jam Gadang stands as an iconic landmark and a major tourist attraction <br> in Bukittinggi.
            </p>
        </div>
    </section>
</div>

<!--BANDA NEIRA-->
<section class="bawah h-full relative bg-no-repeat bg-cover" style="background-image: url('/aset/bandaneira.png') ">
    <div class="bawah-content relative text-center text-white top-[60%] translate-y-[30%] ">
        <div id="intro">
            <!-- Memindahkan LABUAN lebih ke bawah dengan padding-top -->
            <h1 class="text-[10vw] leading-[0.3] mt-48">BANDA</h1>
            <h1 class="text-[10vw] leading-[0.3] mt-32">NEIRA</h1>
        </div>
        <!-- Destination Links -->
        <div class="KOLOM flex flex-wrap justify-evenly gap-8">
            <!-- Jam Gadang -->
            <div class="destination-item">
                <a href="#jamgadang" class="mx-10 text-white font-roboto font-light">
                    <div class="DESKRIPSI1 relative -bottom-52 right-72">GET INTO THE FUTURE IN</div>
                    <div class="TEMPAT1 relative right-[20.8rem] -bottom-52"><strong>Jam Gadang</strong></div>
                </a>
                <img src="/aset/jamgadang.png" class="jamgad relative rounded-full h-[4.5vw] w-[4.5vw] right-[24.2rem] -bottom-[7rem]">
            </div>

                
                <!-- Banda neira -->
                <div class="destination-item">
                    <a href="#jamgadang" class="mx-10 text-white font-roboto font-light">
                        <div class="DESKRIPSI1 relative -bottom-52 right-[34rem]">BACK THE TIME</div>
                        <div class="TEMPAT1 relative right-[35rem] -bottom-52"><strong>Banda Neira</strong></div>
                    </a>
                    <img src="/aset/bandaneira.png" class="jamgad relative rounded-full h-[4.5vw] w-[4.5vw] right-[40.2rem] -bottom-[7rem]">
                </div>
            <!-- Repeat similar structure for other destinations -->
            <!-- ... -->
        </div>
        <div class="KOLOM flex flex-wrap justify-evenly gap-8">
            <!-- Nusa Peninda -->
            <div class="destination-item">
                <a href="#jamgadang" class="mx-10 text-white font-roboto font-light">
                    <div class="DESKRIPSI1 relative -bottom-[1.4rem] left-52">GET IMPRESSED</div>
                    <div class="TEMPAT1 relative left-[12.6rem] -bottom-[1.5rem] z-4"><strong>Nusa Penida</strong></div>
                </a>
                <img src="/aset/nusapenida.png" class="jamgad relative rounded-full h-[4.5vw] w-[4.5vw] left-[7.2rem] bottom-[4.5rem] z-2">
            </div>
        </div>
        <!-- Repeat similar structure for other destinations -->
        <!-- ... -->
    </div>

     <!-- Nusa Peninda -->
      
     <div class="destination-item">
        <a href="#jamgadang" class="mx-10 text-white font-roboto font-light">
            <div class="DESKRIPSI1 relative -bottom-[1.4rem] ml-[95.7rem] ">GET INTO THE FUTURE IN</div>
            <div class="TEMPAT1 relative -bottom-[1.5rem] ml-[95.7rem] z-4"><strong>Raja Ampat</strong></div>
        </a>
        <img src="/aset/maskrajampat.png" class="jamgad relative rounded-full h-[4.5vw] w-[4.5vw] ml-[90rem]  bottom-[4.5rem] z-2">
    </div>
</div>
<!-- Repeat similar structure for other destinations -->
<!-- ... -->
</div>
    </div>
</section>
</div>

<!-- Content Sections -->
<div class="body2 flex-1 bg-black min-h-[80vh]">
<section class="content flex justify-between p-12">
    <div class="fotolabuan relative flex p-[10%,0%,10%,50%] ">
       <img src="/aset/maskbanda.png ">
    </div>
    <div class="kanan">
        <h2 class="Tales text-white font-roboto font-bold text-8xl  ml-[1rem]   ">Tales of Banda Neira</h2>

        <p class="text-white font-roboto font-normal opacity-70 text-3xl translate-x-[2rem] ">
            Banda Neira, part of the Banda Islands in Maluku, <br> was once the center of the global spice trade,
            <br> especially for nutmeg, contested by European powers like the Portuguese, <br> Dutch, and British.
            <br> The Dutch eventually took control in the 17th century, building forts to dominate the trade. 
            <br>   The island also served as an exile location for Indonesian nationalist figures 
            <br> like Mohammad Hatta and Sutan Sjahrir. Today, Banda Neira is renowned for its <br> rich history and stunning underwater scenery.
        </p>
    </div>
</section>
</div>
<!--NUSA PENINDA-->
<section class="bawah h-full relative bg-no-repeat bg-cover" style="background-image: url('/aset/nusapenida.png') ">
    <div class="bawah-content relative text-center text-white top-[60%] translate-y-[30%] ">
        <div id="intro">
            <!-- Memindahkan LABUAN lebih ke bawah dengan padding-top -->
            <h1 class="text-[10vw] leading-[0.3] mt-48">NUSA</h1>
            <h1 class="text-[10vw] leading-[0.3] mt-32">PENIDA</h1>
        </div>
        <!-- Destination Links -->
        <div class="KOLOM flex flex-wrap justify-evenly gap-8">
            <!-- Jam Gadang -->
            <div class="destination-item">
                <a href="#jamgadang" class="mx-10 text-white font-roboto font-light">
                    <div class="DESKRIPSI1 relative -bottom-52 right-72">GET INTO THE FUTURE IN</div>
                    <div class="TEMPAT1 relative right-[20.8rem] -bottom-52"><strong>Jam Gadang</strong></div>
                </a>
                <img src="/TUGAS/aset/jamgadang.png" class="jamgad relative rounded-full h-[4.5vw] w-[4.5vw] right-[24.2rem] -bottom-[7rem]">
            </div>

                
                <!-- Banda neira -->
                <div class="destination-item">
                    <a href="#jamgadang" class="mx-10 text-white font-roboto font-light">
                        <div class="DESKRIPSI1 relative -bottom-52 right-[34rem]">BACK THE TIME</div>
                        <div class="TEMPAT1 relative right-[35rem] -bottom-52"><strong>Banda Neira</strong></div>
                    </a>
                    <img src="/aset/bandaneira.png" class="jamgad relative rounded-full h-[4.5vw] w-[4.5vw] right-[40.2rem] -bottom-[7rem]">
                </div>
            <!-- Repeat similar structure for other destinations -->
            <!-- ... -->
        </div>
        <div class="KOLOM flex flex-wrap justify-evenly gap-8">
            <!-- Nusa Peninda -->
            <div class="destination-item">
                <a href="#jamgadang" class="mx-10 text-white font-roboto font-light">
                    <div class="DESKRIPSI1 relative -bottom-[1.4rem] left-52">GET IMPRESSED</div>
                    <div class="TEMPAT1 relative left-[12.6rem] -bottom-[1.5rem] z-4"><strong>Nusa Penida</strong></div>
                </a>
                <img src="/aset/nusapenida.png" class="jamgad relative rounded-full h-[4.5vw] w-[4.5vw] left-[7.2rem] bottom-[4.5rem] z-2">
            </div>
        </div>
        <!-- Repeat similar structure for other destinations -->
        <!-- ... -->
    </div>

     <!-- Nusa Peninda -->
      
     <div class="destination-item">
        <a href="#jamgadang" class="mx-10 text-white font-roboto font-light">
            <div class="DESKRIPSI1 relative -bottom-[1.4rem] ml-[95.7rem] ">GET INTO THE FUTURE IN</div>
            <div class="TEMPAT1 relative -bottom-[1.5rem] ml-[95.7rem] z-4"><strong>Raja Ampat</strong></div>
        </a>
        <img src="/aset/maskrajampat.png" class="jamgad relative rounded-full h-[4.5vw] w-[4.5vw] ml-[90rem]  bottom-[4.5rem] z-2">
    </div>
</div>
<!-- Repeat similar structure for other destinations -->
<!-- ... -->
</div>
    </div>
</section>
</div>

<!-- Content Sections -->
<div class="body2 flex-1 bg-black min-h-[80vh]">
<section class="content flex justify-between p-12">
    <div class="fotolabuan relative flex p-[10%,0%,10%,50%] ">
       <img src="/aset/masklabuan.png ">
    </div>
    <div class="kanan">
        <h2 class="Tales text-white font-roboto font-bold text-8xl  ml-[1rem]   ">Tales of Nusa Penida</h2>

        <p class="text-white font-roboto font-normal opacity-70 text-3xl translate-x-[2rem] ">
            Nusa Penida, an island southeast of Bali, 
            <br>was once used as a place of exile for lawbreakers. <br>Today, it is renowned for its stunning natural beauty, including <br>breathtaking beaches and dramatic cliffs, and has become a popular tourist destination 
            <br>with captivating underwater scenery.
        </p>
    </div>
</section>
</div>
<!--RAJA AMPAT-->
<section class="bawah h-full relative bg-no-repeat bg-cover" style="background-image: url('/aset/rajaampat.png') ">
    <div class="bawah-content relative text-center text-white top-[60%] translate-y-[30%] ">
        <div id="intro">
            <!-- Memindahkan LABUAN lebih ke bawah dengan padding-top -->
            <h1 class="text-[10vw] leading-[0.3] mt-48">RAJA </h1>
            <h1 class="text-[10vw] leading-[0.3] mt-32">AMPAT</h1>
        </div>
        <!-- Destination Links -->
        <div class="KOLOM flex flex-wrap justify-evenly gap-8">
            <!-- Jam Gadang -->
            <div class="destination-item">
                <a href="#jamgadang" class="mx-10 text-white font-roboto font-light">
                    <div class="DESKRIPSI1 relative -bottom-52 right-72">GET INTO THE FUTURE IN</div>
                    <div class="TEMPAT1 relative right-[20.8rem] -bottom-52"><strong>Jam Gadang</strong></div>
                </a>
                <img src="/aset/rajaampat.png" class="jamgad relative rounded-full h-[4.5vw] w-[4.5vw] right-[24.2rem] -bottom-[7rem]">
            </div>

                
                <!-- Banda neira -->
                <div class="destination-item">
                    <a href="#jamgadang" class="mx-10 text-white font-roboto font-light">
                        <div class="DESKRIPSI1 relative -bottom-52 right-[34rem]">BACK THE TIME</div>
                        <div class="TEMPAT1 relative right-[35rem] -bottom-52"><strong>Banda Neira</strong></div>
                    </a>
                    <img src="/aset/bandaneira.png" class="jamgad relative rounded-full h-[4.5vw] w-[4.5vw] right-[40.2rem] -bottom-[7rem]">
                </div>
            <!-- Repeat similar structure for other destinations -->
            <!-- ... -->
        </div>
        <div class="KOLOM flex flex-wrap justify-evenly gap-8">
            <!-- Nusa Peninda -->
            <div class="destination-item">
                <a href="#jamgadang" class="mx-10 text-white font-roboto font-light">
                    <div class="DESKRIPSI1 relative -bottom-[1.4rem] left-52">GET IMPRESSED</div>
                    <div class="TEMPAT1 relative left-[12.6rem] -bottom-[1.5rem] z-4"><strong>Nusa Penida</strong></div>
                </a>
                <img src="/aset/nusapenida.png" class="jamgad relative rounded-full h-[4.5vw] w-[4.5vw] left-[7.2rem] bottom-[4.5rem] z-2">
            </div>
        </div>
        <!-- Repeat similar structure for other destinations -->
        <!-- ... -->
    </div>

     <!-- Nusa Peninda -->
      
     <div class="destination-item">
        <a href="#jamgadang" class="mx-10 text-white font-roboto font-light">
            <div class="DESKRIPSI1 relative -bottom-[1.4rem] ml-[95.7rem] ">GET INTO THE FUTURE IN</div>
            <div class="TEMPAT1 relative -bottom-[1.5rem] ml-[95.7rem] z-4"><strong>Raja Ampat</strong></div>
        </a>
        <img src="/aset/maskrajampat.png" class="jamgad relative rounded-full h-[4.5vw] w-[4.5vw] ml-[90rem]  bottom-[4.5rem] z-2">
    </div>
</div>
<!-- Repeat similar structure for other destinations -->
<!-- ... -->
</div>
    </div>
</section>
</div>

<!-- Content Sections -->
<div class="body2 flex-1 bg-black min-h-[80vh]">
<section class="content flex justify-between p-12">
    <div class="fotolabuan relative flex p-[10%,0%,10%,50%] ">
       <img src="/aset/maskrajampat.png ">
    </div>
    <div class="kanan">
        <h2 class="Tales text-white font-roboto font-bold text-8xl  ml-[-6rem]   ">Tales of Raja Ampat</h2>

        <p class="text-white font-roboto font-normal opacity-70 text-3xl translate-x-[-6rem] ">
        Raja Ampat, an archipelago in West Papua, Indonesia, is renowned for its<br>
        incredible marine biodiversity. Historically, it was home to indigenous<br>
        Papuan tribes and a center for spice trade in the past. In recent<br>
        decades, Raja Ampat has become a renowned tourist destination, attracting<br>
        visitors worldwide with its natural beauty and rich underwater diversity.
        </p>
    </div>
</section>
</div>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const intro = document.getElementById('intro');
        intro.classList.remove('opacity-0');
        intro.classList.add('opacity-100');
    });
</script>

    <script src="main.js"></script>
</body>
</html>