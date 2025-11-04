<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/svg+xml" href="/icon.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie Posters</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/locomotive-scroll@4.1.4/dist/locomotive-scroll.min.css" />


    <style>
        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: 'Lato', sans-serif;
        }

        #animatedText {
            background-size: 120%;
            background-repeat: no-repeat;
        }

        [data-scroll-container] {
            opacity: 1 !important;
            visibility: visible !important;
        }

        .green {
            color: #22c55e;
        }

        .loader-text {
            color: #ea4294;
            font-family: 'Lato', sans-serif;
        }

        /* Hide scrollbar but keep scrolling functionality */
        .no-scrollbar::-webkit-scrollbar {
            display: none;
            /* Chrome, Safari, and Edge */
        }

        .no-scrollbar {
            -ms-overflow-style: none;
            /* Internet Explorer 10+ */
            scrollbar-width: none;
            /* Firefox */
        }

        .flip-card {
            width: 100%;
            max-width: 90vw;
            aspect-ratio: 2 / 3;
            margin: 5px !important;
            box-sizing: border-box;
            display: inline-block;
            vertical-align: top;
            padding: 3px !important;
        }

        @media (max-width: 768px) {
            .flip-card {
                max-width: 90vw;
            }
        }

        /* Optional: larger screens */
        @media (min-width: 1024px) {
            .flip-card {
                max-width: 90vw;
            }
        }

        @media (min-width: 1800px) and (max-width: 2800px) {
            .flip-card {
                max-width: 90vw;
            }
        }


        @media (min-width: 850px) and (max-width: 1023.5px) {
            .flip-card {
                max-width: 90vw;
            }
        }


        .flip-card-inner {
            position: relative;
            width: 100%;
            height: 100%;
            transition: transform 0.6s;
            transform-style: preserve-3d;
        }

        .flip-card:hover .flip-card-inner {
            transform: rotateY(180deg);
        }

        .flip-card-front,
        .flip-card-back {
            position: absolute;
            width: 100%;
            height: 100%;
            backface-visibility: hidden;
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 0.5rem;
        }

        .flip-card-back {
            transform: rotateY(180deg);
        }

        .flip-card-front img {
            width: 100%;
            height: 100%;
            object-fit: contain;
            display: block;
        }
    </style>
</head>

<body oncontextmenu="return false;" data-scroll-container>
    <!-- Navbar -->
    <nav id="navbar"
        class="bg-transparent sm:bg-transparent transition-transform duration-500 ease-in-out opacity-100 fixed w-full top-0 left-0 px-5 z-50">
        <div class="flex py-2 justify-between items-center w-full max-w-full mx-auto">
            <!-- Logo (Left Corner) -->
            <div class="cursor-pointer" onclick="window.location.href='<?php echo site_url('/'); ?>'">
                <img id="logo-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/work assets/logo.png" alt="logo"
                    class="w-8 h-8 sm:w-12 sm:h-12 md:w-14 md:h-14">
            </div>

            <!-- Mobile Menu Button (Right Corner) -->
            <button id="menu-btn" class="hover:text-yellow-400 transition duration-300">
                <img id="menu-icon" src="<?php echo get_template_directory_uri(); ?>/assets/images/work assets/burger menu.png" alt="nav button"
                    class="w-7 h-6 sm:w-9 sm:h-8 md:w-9 md:h-8">
            </button>
        </div>
    </nav>
    <!-- Mobile Popup Menu (Overlay) -->
    <div id="mobile-menu"
        class="fixed top-0 left-0 w-full h-full bg-[#ffd527] flex flex-col justify-center items-center text-[#2025f8] text-xl uppercase tracking-widest z-50 hidden">
        <!-- Close Button -->
        <button id="close-menu"
            class="absolute top-6 right-6 text-4xl font-bold text-[#2025f8] transition duration-300">
            ✖
        </button>

        <!-- Menu Items -->

        <ul class="text-center leading-[2.5rem]">
            <li class="mt-2 pb-3">
                <a href="/index.html"
                    class="text-2xl font-thin transition-transform duration-500 ease-out hover:scale-125 hover:font-bold font-normal block">
                    H O M E
                </a>
            </li>
            <li class="mt-2 pb-3">
                <a href="/work.html"
                    class="text-2xl font-thin transition-transform duration-500 ease-out hover:scale-125 hover:font-bold font-normal block">
                    W O R K
                </a>
            </li>
            <li class="mt-2 pb-3">
                <a href="/aboutus.html"
                    class="text-2xl font-thin transition-transform duration-500 ease-out hover:scale-125 hover:font-bold font-normal block">
                    A B O U T
                </a>
            </li>
            <li class="mt-2 pb-3">
                <a href="/service.html"
                    class="text-2xl font-thin transition-transform duration-500 ease-out hover:scale-125 hover:font-bold font-normal block">
                    S E R V I C E S
                </a>
            </li>
            <li class="mt-2 pb-3">
                <a href="/team.html"
                    class="text-2xl font-thin transition-transform duration-500 ease-out hover:scale-125 hover:font-bold font-normal block">
                    T E A M
                </a>
            </li>
            <li class="mt-2 pb-3">
                <a href="/contactus.html"
                    class="text-2xl font-thin transition-transform duration-500 ease-out hover:scale-125 hover:font-bold font-normal block">
                    C O N T A C T
                </a>
            </li>
        </ul>
    </div>

    <!--Main Content-->
    <!-- Main Page -->
    <section id="textSection" class="relative w-full flex items-center justify-center bg-white h-[60vh]"
        data-scroll-section>
        <!-- Transparent Text Acting as Stencil -->
        <h1 id="animatedText"
            class="text-[10vw] font-bold text-transparent bg-clip-text bg-fixed bg-center bg-[url('<?php echo get_template_directory_uri(); ?>/assets/images/services-assets/designing-asset.png')]">
            MOVIE POSTERS
        </h1>
    </section>


    <!-- Section work gallery -->
    <section class="p-4">
        <div class="grid gap-4 grid-cols-2 sm:grid-cols-2 lg:grid-cols-4" data-scroll-section>
            <!-- Gallery Images with Overlay -->
            <div class="flip-card" onclick="openFullscreenImage('/our_works/movie-posters/96-poster30x40-01.jpg')">
                <div class="flip-card-inner w-full h-full">
                    <!-- Front Side -->
                    <div class="flip-card-front w-full h-full">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/our_works/movie-posters/96-poster30x40-01.jpg" alt="Front Image"
                            class="w-full h-full object-contain shadow-lg">
                    </div>

                    <!-- Back Side -->
                    <div
                        class="flip-card-back w-full h-full bg-green-500 text-white flex items-center justify-center shadow-lg">
                        <h2 class="text-xl font-bold">96</h2>
                    </div>

                </div>
            </div>

            <div class="flip-card" onclick="openFullscreenImage('/our_works/movie-posters/amaran 1.jpg')">
                <div class="flip-card-inner w-full h-full">
                    <!-- Front Side -->
                    <div class="flip-card-front w-full h-full">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/our_works/movie-posters/amaran 1.jpg" alt="Front Image"
                            class="w-full h-full object-contain shadow-lg">
                    </div>

                    <!-- Back Side -->
                    <div
                        class="flip-card-back w-full h-full bg-green-500 text-white flex items-center justify-center shadow-lg">
                        <h2 class="text-xl font-bold">Amaran</h2>
                    </div>

                </div>
            </div>

            <div class="flip-card"
                onclick="openFullscreenImage('/our_works/movie-posters/BIGIL-1stLOOK-poster-01.jpg')">
                <div class="flip-card-inner w-full h-full">
                    <!-- Front Side -->
                    <div class="flip-card-front w-full h-full">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/our_works/movie-posters/BIGIL-1stLOOK-poster-01.jpg" alt="Front Image"
                            class="w-full h-full object-contain shadow-lg">
                    </div>

                    <!-- Back Side -->
                    <div
                        class="flip-card-back w-full h-full bg-green-500 text-white flex items-center justify-center shadow-lg">
                        <h2 class="text-xl font-bold">Bigil</h2>
                    </div>

                </div>
            </div>
            <div class="flip-card" onclick="openFullscreenImage('/our_works/movie-posters/BJ.jpg')">
                <div class="flip-card-inner w-full h-full">
                    <!-- Front Side -->
                    <div class="flip-card-front w-full h-full">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/our_works/movie-posters/BJ.jpg" alt="Front Image"
                            class="w-full h-full object-cover shadow-lg">
                    </div>

                    <!-- Back Side -->
                    <div
                        class="flip-card-back w-full h-full bg-green-500 text-white flex items-center justify-center shadow-lg">
                        <h2 class="text-xl font-bold">Baby John</h2>
                    </div>

                </div>
            </div>
            <div class="flip-card" onclick="openFullscreenImage('/our_works/movie-posters/CCV2.jpg')">
                <div class="flip-card-inner w-full h-full">
                    <!-- Front Side -->
                    <div class="flip-card-front w-full h-full">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/our_works/movie-posters/CCV2.jpg" alt="Front Image"
                            class="w-full h-full object-cover shadow-lg">
                    </div>

                    <!-- Back Side -->
                    <div
                        class="flip-card-back w-full h-full bg-green-500 text-white flex items-center justify-center shadow-lg">
                        <h2 class="text-xl font-bold">Chekka Chivantha Vaanam</h2>
                    </div>

                </div>
            </div>

            <div class="flip-card" onclick="openFullscreenImage('/our_works/movie-posters/game over 2.jpg')">
                <div class="flip-card-inner w-full h-full">
                    <!-- Front Side -->
                    <div class="flip-card-front w-full h-full">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/our_works/movie-posters/game over 2.jpg" alt="Front Image"
                            class="w-full h-full object-cover shadow-lg">
                    </div>

                    <!-- Back Side -->
                    <div
                        class="flip-card-back w-full h-full bg-green-500 text-white flex items-center justify-center shadow-lg">
                        <h2 class="text-xl font-bold">Game Over</h2>
                    </div>

                </div>
            </div>

            <div class="flip-card" onclick="openFullscreenImage('/our_works/movie-posters/GOAT-03.jpg')">
                <div class="flip-card-inner w-full h-full">
                    <!-- Front Side -->
                    <div class="flip-card-front w-full h-full">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/our_works/movie-posters/GOAT-03.jpg" alt="Front Image"
                            class="w-full h-full object-cover shadow-lg">
                    </div>

                    <!-- Back Side -->
                    <div
                        class="flip-card-back w-full h-full bg-green-500 text-white flex items-center justify-center shadow-lg">
                        <h2 class="text-xl font-bold">Goat</h2>
                    </div>

                </div>
            </div>
            <div class="flip-card" onclick="openFullscreenImage('/our_works/movie-posters/Intern-Web.jpg')">
                <div class="flip-card-inner w-full h-full">
                    <!-- Front Side -->
                    <div class="flip-card-front w-full h-full">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/our_works/movie-posters/Intern-Web.jpg" alt="Front Image"
                            class="w-full h-full object-cover shadow-lg">
                    </div>

                    <!-- Back Side -->
                    <div
                        class="flip-card-back w-full h-full bg-green-500 text-white flex items-center justify-center shadow-lg">
                        <h2 class="text-xl font-bold">The Intern</h2>
                    </div>

                </div>
            </div>
            <div class="flip-card" onclick="openFullscreenImage('/our_works/movie-posters/IruthiSutru_7.jpg')">
                <div class="flip-card-inner w-full h-full">
                    <!-- Front Side -->
                    <div class="flip-card-front w-full h-full">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/our_works/movie-posters/IruthiSutru_7.jpg" alt="Iruthi Sutru"
                            class="w-full h-full object-cover shadow-lg">
                    </div>

                    <!-- Back Side -->
                    <div
                        class="flip-card-back w-full h-full bg-green-500 text-white flex items-center justify-center shadow-lg">
                        <h2 class="text-xl font-bold">Iruthi Sutru</h2>
                    </div>

                </div>
            </div>
            <div class="flip-card" onclick="openFullscreenImage('/our_works/movie-posters/kaathi-set1-1sheet-01.jpg')">
                <div class="flip-card-inner w-full h-full">
                    <!-- Front Side -->
                    <div class="flip-card-front w-full h-full">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/our_works/movie-posters/kaathi-set1-1sheet-01.jpg" alt="kaathi Image"
                            class="w-full h-full object-cover shadow-lg">
                    </div>

                    <!-- Back Side -->
                    <div
                        class="flip-card-back w-full h-full bg-green-500 text-white flex items-center justify-center shadow-lg">
                        <h2 class="text-xl font-bold">kaathi</h2>
                    </div>

                </div>
            </div>
            <div class="flip-card" onclick="openFullscreenImage('/our_works/movie-posters/LEO_1_1.jpg')">
                <div class="flip-card-inner w-full h-full">
                    <!-- Front Side -->
                    <div class="flip-card-front w-full h-full">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/our_works/movie-posters/LEO_1_1.jpg" alt="Front Image"
                            class="w-full h-full object-cover shadow-lg">
                    </div>

                    <!-- Back Side -->
                    <div
                        class="flip-card-back w-full h-full bg-green-500 text-white flex items-center justify-center shadow-lg">
                        <h2 class="text-xl font-bold">Leo</h2>
                    </div>

                </div>
            </div>
            <div class="flip-card" onclick="openFullscreenImage('/our_works/movie-posters/Marsal-3.jpg')">
                <div class="flip-card-inner w-full h-full">
                    <!-- Front Side -->
                    <div class="flip-card-front w-full h-full">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/our_works/movie-posters/Marsal-3.jpg" alt="Front Image"
                            class="w-full h-full object-cover shadow-lg">
                    </div>

                    <!-- Back Side -->
                    <div
                        class="flip-card-back w-full h-full bg-green-500 text-white flex items-center justify-center shadow-lg">
                        <h2 class="text-xl font-bold">Mersal</h2>
                    </div>

                </div>
            </div>

            <div class="flip-card" onclick="openFullscreenImage('/our_works/movie-posters/MASTER.jpg')">
                <div class="flip-card-inner w-full h-full">
                    <!-- Front Side -->
                    <div class="flip-card-front w-full h-full">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/our_works/movie-posters/MASTER.jpg" alt="Front Image"
                            class="w-full h-full object-cover shadow-lg">
                    </div>

                    <!-- Back Side -->
                    <div
                        class="flip-card-back w-full h-full bg-green-500 text-white flex items-center justify-center shadow-lg">
                        <h2 class="text-xl font-bold">Master</h2>
                    </div>

                </div>
            </div>

            <div class="flip-card" onclick="openFullscreenImage('/our_works/movie-posters/Meiyazhagan.jpg')">
                <div class="flip-card-inner w-full h-full">
                    <!-- Front Side -->
                    <div class="flip-card-front w-full h-full">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/our_works/movie-posters/Meiyazhagan.jpg" alt="Front Image"
                            class="w-full h-full object-cover shadow-lg">
                    </div>

                    <!-- Back Side -->
                    <div
                        class="flip-card-back w-full h-full bg-green-500 text-white flex items-center justify-center shadow-lg">
                        <h2 class="text-xl font-bold">Meiyazhagan</h2>
                    </div>

                </div>
            </div>


            <div class="flip-card"
                onclick="openFullscreenImage('/our_works/movie-posters/NF-GhostStories-Poster-FINAL-01-copy.jpg')">
                <div class="flip-card-inner w-full h-full">
                    <!-- Front Side -->
                    <div class="flip-card-front w-full h-full">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/our_works/movie-posters/NF-GhostStories-Poster-FINAL-01-copy.jpg" alt="Front Image"
                            class="w-full h-full object-cover shadow-lg">
                    </div>

                    <!-- Back Side -->
                    <div
                        class="flip-card-back w-full h-full bg-green-500 text-white flex items-center justify-center shadow-lg">
                        <h2 class="text-xl font-bold">Ghost Stories</h2>
                    </div>

                </div>
            </div>

            <div class="flip-card" onclick="openFullscreenImage('/our_works/movie-posters/OKK_2.jpg')">
                <div class="flip-card-inner w-full h-full">
                    <!-- Front Side -->
                    <div class="flip-card-front w-full h-full">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/our_works/movie-posters/OKK_2.jpg" alt="Front Image"
                            class="w-full h-full object-cover shadow-lg">
                    </div>

                    <!-- Back Side -->
                    <div
                        class="flip-card-back w-full h-full bg-green-500 text-white flex items-center justify-center shadow-lg">
                        <h2 class="text-xl font-bold">OK Kanmani</h2>
                    </div>

                </div>
            </div>


            <div class="flip-card" onclick="openFullscreenImage('/our_works/movie-posters/PS-5-ensemble-poster.jpg')">
                <div class="flip-card-inner w-full h-full">
                    <!-- Front Side -->
                    <div class="flip-card-front w-full h-full">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/our_works/movie-posters/PS-5-ensemble-poster.jpg" alt="Front Image"
                            class="w-full h-full object-cover shadow-lg">
                    </div>

                    <!-- Back Side -->
                    <div
                        class="flip-card-back w-full h-full bg-green-500 text-white flex items-center justify-center shadow-lg">
                        <h2 class="text-xl font-bold">Ponniyin Selvan</h2>
                    </div>

                </div>
            </div>

            <div class="flip-card" onclick="openFullscreenImage('/our_works/movie-posters/solo-try-set-01-new.jpg')">
                <div class="flip-card-inner w-full h-full">
                    <!-- Front Side -->
                    <div class="flip-card-front w-full h-full">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/our_works/movie-posters/solo-try-set-01-new.jpg" alt="Front Image"
                            class="w-full h-full object-cover shadow-lg">
                    </div>

                    <!-- Back Side -->
                    <div
                        class="flip-card-back w-full h-full bg-green-500 text-white flex items-center justify-center shadow-lg">
                        <h2 class="text-xl font-bold">Solo</h2>
                    </div>

                </div>
            </div>

            <div class="flip-card" onclick="openFullscreenImage('/our_works/movie-posters/sp 3.jpg')">
                <div class="flip-card-inner w-full h-full">
                    <!-- Front Side -->
                    <div class="flip-card-front w-full h-full">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/our_works/movie-posters/sp 3.jpg" alt="Front Image"
                            class="w-full h-full object-cover shadow-lg">
                    </div>

                    <!-- Back Side -->
                    <div
                        class="flip-card-back w-full h-full bg-green-500 text-white flex items-center justify-center shadow-lg">
                        <h2 class="text-xl font-bold">Soorarai Pottru</h2>
                    </div>

                </div>
            </div>

            <div class="flip-card" onclick="openFullscreenImage('/our_works/movie-posters/super-deluxe.jpg')">
                <div class="flip-card-inner w-full h-full">
                    <!-- Front Side -->
                    <div class="flip-card-front w-full h-full">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/our_works/movie-posters/super-deluxe.jpg" alt="Front Image"
                            class="w-full h-full object-cover shadow-lg">
                    </div>

                    <!-- Back Side -->
                    <div
                        class="flip-card-back w-full h-full bg-green-500 text-white flex items-center justify-center shadow-lg">
                        <h2 class="text-xl font-bold">Super Deluxe</h2>
                    </div>

                </div>
            </div>

            <div class="flip-card" onclick="openFullscreenImage('/our_works/movie-posters/threean-30x40.jpg')">
                <div class="flip-card-inner w-full h-full">
                    <!-- Front Side -->
                    <div class="flip-card-front w-full h-full">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/our_works/movie-posters/threean-30x40.jpg" alt="Front Image"
                            class="w-full h-full object-cover shadow-lg">
                    </div>

                    <!-- Back Side -->
                    <div
                        class="flip-card-back w-full h-full bg-green-500 text-white flex items-center justify-center shadow-lg">
                        <h2 class="text-xl font-bold">Theeran</h2>
                    </div>

                </div>
            </div>

            <div class="flip-card" onclick="openFullscreenImage('/our_works/movie-posters/ThugLife-poster-01.jpg')">
                <div class="flip-card-inner w-full h-full">
                    <!-- Front Side -->
                    <div class="flip-card-front w-full h-full">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/our_works/movie-posters/ThugLife-poster-01.jpg" alt="Front Image"
                            class="w-full h-full object-cover shadow-lg">
                    </div>

                    <!-- Back Side -->
                    <div
                        class="flip-card-back w-full h-full bg-green-500 text-white flex items-center justify-center shadow-lg">
                        <h2 class="text-xl font-bold">ThugLife</h2>
                    </div>

                </div>
            </div>

            <div class="flip-card" onclick="openFullscreenImage('/our_works/movie-posters/T-L-Web.jpg')">
                <div class="flip-card-inner w-full h-full">
                    <!-- Front Side -->
                    <div class="flip-card-front w-full h-full">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/our_works/movie-posters/T-L-Web.jpg" alt="Front Image"
                            class="w-full h-full object-cover shadow-lg">
                    </div>

                    <!-- Back Side -->
                    <div
                        class="flip-card-back w-full h-full bg-green-500 text-white flex items-center justify-center shadow-lg">
                        <h2 class="text-xl font-bold">Coolie</h2>
                    </div>

                </div>
            </div>
            <div class="flip-card" onclick="openFullscreenImage('/our_works/movie-posters/Vettaiyan-1stLook-Web.jpg')">
                <div class="flip-card-inner w-full h-full">
                    <!-- Front Side -->
                    <div class="flip-card-front w-full h-full">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/our_works/movie-posters/Vettaiyan-1stLook-Web.jpg" alt="Front Image"
                            class="w-full h-full object-cover shadow-lg">
                    </div>

                    <!-- Back Side -->
                    <div
                        class="flip-card-back w-full h-full bg-green-500 text-white flex items-center justify-center shadow-lg">
                        <h2 class="text-xl font-bold">Vettaiyan</h2>
                    </div>

                </div>
            </div>

            <div class="flip-card" onclick="openFullscreenImage('/our_works/movie-posters/vikram 9.jpg')">
                <div class="flip-card-inner w-full h-full">
                    <!-- Front Side -->
                    <div class="flip-card-front w-full h-full">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/our_works/movie-posters/vikram 9.jpg" alt="Front Image"
                            class="w-full h-full object-cover shadow-lg">
                    </div>

                    <!-- Back Side -->
                    <div
                        class="flip-card-back w-full h-full bg-green-500 text-white flex items-center justify-center shadow-lg">
                        <h2 class="text-xl font-bold">Vikram</h2>
                    </div>

                </div>
            </div>

            <div class="flip-card"
                onclick="openFullscreenImage('/our_works/movie-posters/vv-1st-cut-poster-option-03-copy.jpg')">
                <div class="flip-card-inner w-full h-full">
                    <!-- Front Side -->
                    <div class="flip-card-front w-full h-full">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/our_works/movie-posters/vv-1st-cut-poster-option-03-copy.jpg" alt="Front Image"
                            class="w-full h-full object-cover shadow-lg">
                    </div>

                    <!-- Back Side -->
                    <div
                        class="flip-card-back w-full h-full bg-green-500 text-white flex items-center justify-center shadow-lg">
                        <h2 class="text-xl font-bold">Vikram Vedha</h2>
                    </div>

                </div>
            </div>

            <div class="flip-card" onclick="openFullscreenImage('/our_works/movie-posters/Yaman_3.jpg')">
                <div class="flip-card-inner w-full h-full">
                    <!-- Front Side -->
                    <div class="flip-card-front w-full h-full">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/our_works/movie-posters/Yaman_3.jpg" alt="Front Image"
                            class="w-full h-full object-cover shadow-lg">
                    </div>

                    <!-- Back Side -->
                    <div
                        class="flip-card-back w-full h-full bg-green-500 text-white flex items-center justify-center shadow-lg">
                        <h2 class="text-xl font-bold">Yaman</h2>
                    </div>
                </div>
            </div>

            <div class="flip-card" onclick="openFullscreenImage('/our_works/dn.jpg')">
                <div class="flip-card-inner w-full h-full">
                    <!-- Front Side -->
                    <div class="flip-card-front w-full h-full">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/our_works/dn.jpg" alt="Front Image" class="w-full h-full object-cover shadow-lg">
                    </div>

                    <!-- Back Side -->
                    <div
                        class="flip-card-back w-full h-full bg-green-500 text-white flex items-center justify-center shadow-lg">
                        <h2 class="text-xl font-bold">Dhruva Natchathiram</h2>
                    </div>

                </div>
            </div>
            <div class="p-2 col-span-2 sm:col-span-2 lg:col-span-4 text-right">
                <a href="https://www.behance.net/gopiprasannaastudios" target="_blank"
                    class="font-bold uppercase transition">
                    i want to see them all >
                </a>
            </div>


        </div>

    </section>

    <!--Footer-->
    <section data-scroll-section
        class="min-h-1/2 flex flex-col justify-center items-center bg-[#00001b] text-white text-center p-10">
        <div class="container">
            <div class="w-full max-w-4xl mx-auto mt-6">
                <!-- Heading + Input Field -->
                <h1 class="text-xl md:text-3xl font-bold mb-4 text-left">LETS BE CREATIVE. LETS BEGIN.</h1>
                <div class="flex">
                    <input type="email" placeholder="ENTER YOUR EMAIL ADDRESS"
                        class="p-4 w-full text-lg text-gray-600 outline-none bg-white" />
                    <button class="bg-pink-500 px-8 py-4 text-lg text-white font-semibold">SUBSCRIBE</button>
                </div>

                <div class="mt-10 grid grid-cols-1 gap-y-6 w-full">
                    <!-- First Row: Lists (Grid of 5 Items) -->
                    <div
                        class="grid grid-cols-2 sm:grid-cols-2 md:grid-cols-5 gap-x-6 gap-y-6 w-full text-left md:text-left">
                        <div class="w-full order-1 md:order-none">
                            <h3 class="font-semibold">
                                <a class="hover:text-yellow-400" href="/">HOME</a>
                            </h3>
                            <ul class="space-y-1">
                                <li>
                                    <a class="hover:text-yellow-400" href="/aboutus.html">Why us</a>
                                </li>
                            </ul>
                        </div>
                        <div class="w-full">
                            <h3 class="font-semibold">
                                <a class="hover:text-yellow-400" href="/work.html">WORK</a>
                            </h3>
                            <ul class="space-y-1">
                                <li class="cursor-pointer">
                                    <a class="hover:text-yellow-400" href="/movie-poster.html">Film Posters</a>
                                </li>
                                <li class="cursor-pointer">
                                    <a class="hover:text-yellow-400" href="/events.html">Events</a>
                                </li>
                                <li class="cursor-pointer">
                                    <a class="hover:text-yellow-400" href="/title-animations.html">Title Animations</a>
                                </li>

                                <li class="cursor-pointer">
                                    <a class="hover:text-yellow-400" href="/branding.html">Branding</a>
                                </li>
                                <li class="cursor-pointer">
                                    <a class="hover:text-yellow-400" href="/products.html">Products</a>
                                </li>
                                <li class="cursor-pointer">
                                    <a class="hover:text-yellow-400" href="/advertising.html">Advertising</a>
                                </li>

                            </ul>
                        </div>
                        <div class="w-full">
                            <h3 class="font-semibold">
                                <a class="hover:text-yellow-400" href="/service.html">
                                    SERVICE

                                </a>
                            </h3>
                            <ul class="space-y-1">
                                <li>
                                    <a class="hover:text-yellow-400"
                                        href="/service.html?details=branding-popup">Branding</a>
                                </li>
                                <li><a class="hover:text-yellow-400"
                                        href="/service.html?details=ads-popup">Advertising</a></li>
                                <li><a class="hover:text-yellow-400"
                                        href="/service.html?details=film-production-popup">Film Production</a></li>
                                <li><a class="hover:text-yellow-400" href="/service.html?details=designer-popup">Graphic
                                        Design</a></li>
                                <li><a class="hover:text-yellow-400" href="/service.html?details=ui-ux-popup">Social
                                        Media Marketing</a></li>
                                <li><a class="hover:text-yellow-400"
                                        href="/service.html?details=integrated-popup">Integrated Marketing</a></li>
                            </ul>
                        </div>
                        <div class="w-full">
                            <h3 class="font-semibold"><a class="hover:text-yellow-400" href="/team.html">TEAM</a></h3>
                            <ul class="space-y-1">
                                <li class="cursor-pointer">
                                    <a class="hover:text-yellow-400" href="/team.html">Meet the Team</a>
                                </li>
                            </ul>
                        </div>
                        <div class="w-full">
                            <h3 class="font-semibold"><a class="hover:text-yellow-400"
                                    href="/contactus.html">CONTACT</a></h3>
                            <ul class="space-y-1">

                                <li class="cursor-pointer">
                                    <a class="hover:text-yellow-400" href="/contactus.html">Contact Information</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Second Row: Button & Social Media Icons -->
                    <div class="flex flex-col sm:flex-row justify-between items-center w-full space-y-4 sm:space-y-0">
                        <button id="shareButton"
                            class="bg-[#00001b] border border-white px-6 py-3 text-lg text-white font-semibold flex items-center gap-2">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/footer-png/share-button.png" alt="Share Icon" class="w-6 h-6"> Share this Website
                        </button>


                        <!-- Social Icons -->
                        <div class="flex flex-wrap justify-center sm:justify-end gap-4">
                            <a href="https://x.com/themagicinwhite" target="_blank"
                                class="w-10 h-10 flex items-center justify-center border-2 border-white rounded-full text-white text-xl">
                                <i class="fa-brands fa-x-twitter"></i>
                            </a>
                            <a href="https://www.facebook.com/themagicinwhite"
                                target="_blank"
                                class="w-10 h-10 flex items-center justify-center border-2 border-white rounded-full text-white text-xl">
                                <i class="fa-brands fa-facebook-f"></i>
                            </a>
                            <a href="https://www.youtube.com/@magicinwhite" target="_blank"
                                class="w-10 h-10 flex items-center justify-center border-2 border-white rounded-full text-white text-xl">
                                <i class="fab fa-youtube"></i>
                            </a>
                            <a href="https://www.instagram.com/magicinwhite" target="_blank"
                                class="w-10 h-10 flex items-center justify-center border-2 border-white rounded-full text-white text-xl">
                                <i class="fa-brands fa-instagram"></i>
                            </a>
                            <a href="https://www.linkedin.com/company/magicinwhite" target="_blank"
                                class="w-10 h-10 flex items-center justify-center border-2 border-white rounded-full text-white text-xl">
                                <i class="fa-brands fa-linkedin"></i>
                            </a>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <!-- Image view popup -->

    <div id="fullscreen-image-modal"
        class="hidden fixed inset-0 bg-black bg-opacity-90 flex items-center justify-center z-[60]">
        <div class="relative">
            <button onclick="closeFullscreenImage()"
                class="hidden sm:flex absolute -top-6 -right-4 sm:-top-6 sm:-right-12 w-10 h-10 flex items-center justify-center text-white bg-gray-800 hover:bg-gray-700 rounded-full text-xl shadow-lg z-50">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                    class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>

            <img id="fullscreen-img" src="" alt="Zoomed" class="max-w-[90vw] max-h-[90vh] rounded-lg shadow-2xl">
        </div>
    </div>

    <!-- loader -->
    <div id="loader"
        class="fixed inset-0 bg-white flex flex-col items-center justify-center z-[9999999] transition-opacity duration-1000 opacity-100">
        <img id="logo-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/MIW_Website_Assets/loader_horse.gif" alt="loader" class="w-20 h-20 object-contain">
        <span id="loading-text" class="loader-text text-sm font-bold mt-4 ml-3">0%</span>
    </div>
    <!--loader end  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/locomotive-scroll@4.1.4/dist/locomotive-scroll.min.js"></script>
    <script src="https://unpkg.com/imagesloaded@5/imagesloaded.pkgd.min.js"></script>

    <script>
        // Loading
        document.addEventListener("DOMContentLoaded", () => {
            const loader = document.getElementById("loader");
            const loadingText = document.getElementById("loading-text");

            const assets = document.images;
            const totalAssets = assets.length;
            let loadedCount = 0;

            if (totalAssets === 0) {
                finishLoading();
            }
            for (let i = 0; i < totalAssets; i++) {
                const img = assets[i];

                if (img.complete) {
                    incrementLoaded();
                } else {
                    img.addEventListener('load', incrementLoaded);
                    img.addEventListener('error', incrementLoaded);
                }
            }

            function incrementLoaded() {
                loadedCount++;
                const percent = Math.round((loadedCount / totalAssets) * 100);
                loadingText.textContent = `${percent}%`;

                if (loadedCount === totalAssets) {
                    finishLoading();
                }
            }

            function finishLoading() {
                loader.classList.add("opacity-0");
                setTimeout(() => loader.classList.add("hidden"), 1000); // matches transition duration
            }
        });

        let locoScrollInstance;


        document.getElementById("shareButton").addEventListener("click", async () => {
            if (navigator.share) {
                await navigator.share({
                    title: "Check out this website!",
                    url: window.location.href
                });
            } else {
                alert("Your browser does not support sharing.");
            }
        });
        // Close modal when clicking outside image (only if screen width < 776px)
        document.getElementById("fullscreen-image-modal").addEventListener("click", (e) => {
            if (window.innerWidth < 776 && !e.target.closest("img")) {
                closeFullscreenImage();
            }
        });

        function openFullscreenImage(src) {
            const modal = document.getElementById('fullscreen-image-modal');
            const image = document.getElementById('fullscreen-img');
            image.src = src;
            modal.classList.remove('hidden');
            document.body.classList.add("overflow-hidden"); // Prevent scrolling
        }

        function closeFullscreenImage() {
            const modal = document.getElementById('fullscreen-image-modal');
            modal.classList.add('hidden');
            document.getElementById('fullscreen-img').src = '';
            document.body.classList.remove("overflow-hidden");
        }
        const menuBtn = document.getElementById('menu-btn');
        const closeMenuBtn = document.getElementById('close-menu');
        const mobileMenu = document.getElementById('mobile-menu');

        menuBtn.addEventListener('click', () => {
            mobileMenu.classList.remove('hidden');
            mobileMenu.classList.add('flex');
        });

        closeMenuBtn.addEventListener('click', () => {
            mobileMenu.classList.add('hidden');
        });

        // Close menu when clicking outside of it
        mobileMenu.addEventListener('click', (e) => {
            if (e.target === mobileMenu) {
                mobileMenu.classList.add('hidden');
            }
        });
        gsap.registerPlugin(ScrollTrigger);

        const section = document.getElementById("textSection");
        const text = document.getElementById("animatedText");

        section.addEventListener("mousemove", (e) => {
            const {
                left,
                top,
                width,
                height
            } = section.getBoundingClientRect();

            // Calculate movement percentages
            const xMove = ((e.clientX - left) / width - 0.5) * 15; // Smooth horizontal movement
            const yMove = ((e.clientY - top) / height - 0.5) * 10; // Smooth vertical movement

            const xBg = ((e.clientX - left) / width) * 100; // Background shift X
            const yBg = ((e.clientY - top) / height) * 100; // Background shift Y

            gsap.to(text, {
                x: xMove,
                y: yMove,
                backgroundPosition: `${xBg}% ${yBg}%`,
                duration: 0.4,
                ease: "power2.out"
            });
        });

        section.addEventListener("mouseleave", () => {
            gsap.to(text, {
                x: 0,
                y: 0,
                backgroundPosition: "50% 50%",
                duration: 0.4,
                ease: "power2.out"
            });
        });

        const scrollContainer = document.querySelector("[data-scroll-container]");

        function initSmoothScroll() {

            const locoScroll = new LocomotiveScroll({
                el: scrollContainer,
                smooth: true,
                smoothMobile: true,
                inertia: 0.25,
                multiplier: 2,
                getDirection: true
            });
            locoScrollInstance = locoScroll;

            ScrollTrigger.scrollerProxy(scrollContainer, {
                scrollTop(value) {
                    return arguments.length ?
                        locoScroll.scrollTo(value, 0, 0) :
                        locoScroll.scroll.instance.scroll.y;
                },
                getBoundingClientRect() {
                    return {
                        top: 0,
                        left: 0,
                        width: window.innerWidth,
                        height: window.innerHeight,
                    };
                },
                pinType: scrollContainer.style.transform ? "transform" : "fixed",
            });
            let lastScrollY = locoScrollInstance ? locoScrollInstance.scroll.instance.scroll.y : 0;

            locoScroll.on("scroll", (event) => {
                checkBackgroundAndInvertImages();
                const navbar = document.getElementById("navbar");
                const currentScrollY = locoScrollInstance ? locoScrollInstance.scroll.instance.scroll.y : 0;

                if (currentScrollY > lastScrollY && currentScrollY > 100) {
                    // Scrolling down - Hide navbar with animation
                    navbar.classList.add("-translate-y-full", "opacity-0");
                    navbar.classList.remove("opacity-100");
                } else {
                    // Scrolling up - Show navbar with animation
                    navbar.classList.remove("-translate-y-full", "opacity-0");
                    navbar.classList.add("opacity-100");
                }

                lastScrollY = currentScrollY;

                ScrollTrigger.update();
            });

            // locoScroll.on("scroll", ScrollTrigger.update);
            ScrollTrigger.addEventListener("refresh", () => locoScroll.update());
            ScrollTrigger.refresh();
            requestAnimationFrame(() => {
                ScrollTrigger.refresh();
            });
        }



        window.addEventListener("load", () => {
            imagesLoaded(scrollContainer, {
                background: true
            }, () => {
                initSmoothScroll();
            });
        });
    </script>
    <script>
        // Enhanced function to check background section color and invert images if needed
        function checkBackgroundAndInvertImages() {
            const navbar = document.getElementById('navbar');
            const logo = document.getElementById('logo-img');
            const menuIcon = document.getElementById('menu-icon');

            // Get the scroll position to determine what section we're on
            const scrollY = window.scrollY;

            // Get elements that navbar might be overlapping
            const sections = document.querySelectorAll('section');
            let currentSection = null;

            // Find which section the navbar is currently overlapping
            for (const section of sections) {
                const rect = section.getBoundingClientRect();
                // If the navbar is within the top portion of this section
                if (rect.top <= 80 && rect.bottom > 0) {
                    currentSection = section;
                    break;
                }
            }

            // If we found a current section, get its background color
            if (currentSection) {
                const sectionBgColor = window.getComputedStyle(currentSection).backgroundColor;
                const sectionBgImage = window.getComputedStyle(currentSection).backgroundImage;

                // Check if this is a section where we need to invert
                if (needsInversion(sectionBgColor, sectionBgImage)) {
                    logo.style.filter = "invert(1)";
                    menuIcon.style.filter = "invert(1)";
                } else {
                    logo.style.filter = "none";
                    menuIcon.style.filter = "none";
                }
            }
        }

        // Enhanced function to determine if inversion is needed
        function needsInversion(backgroundColor, backgroundImage) {
            // If there's a background image that's not "none", we might need special handling
            const hasBackgroundImage = backgroundImage && backgroundImage !== "none";

            // Get the logo and menu icon color (you may need to define these explicitly)
            // For example, if your logo is black (#000000) or close to it:
            const logoColor = {
                r: 0,
                g: 0,
                b: 0
            }; // Assuming black logo

            // Parse the backgroundColor to get RGB values
            const rgbValues = backgroundColor.match(/\d+/g);

            if (!rgbValues || rgbValues.length < 3) {
                // If we can't parse the color, default behavior based on section
                return hasBackgroundImage || isKnownDarkSection(backgroundColor);
            }

            const r = parseInt(rgbValues[0]);
            const g = parseInt(rgbValues[1]);
            const b = parseInt(rgbValues[2]);

            // Calculate color similarity between background and logo
            const colorSimilarity = calculateColorSimilarity({
                    r,
                    g,
                    b
                },
                logoColor
            );

            // Calculate the perceived brightness
            const brightness = (0.299 * r + 0.587 * g + 0.114 * b);

            // If colors are similar OR background is dark, invert
            return colorSimilarity > 85 || brightness < 128;
        }

        // Calculate how similar two colors are (0-100%)
        function calculateColorSimilarity(color1, color2) {
            // Calculate the Euclidean distance in RGB space
            const distance = Math.sqrt(
                Math.pow(color1.r - color2.r, 2) +
                Math.pow(color1.g - color2.g, 2) +
                Math.pow(color1.b - color2.b, 2)
            );

            // Convert to a similarity percentage (0-100)
            // Max distance in RGB space is √(255² + 255² + 255²) ≈ 441.7
            return 100 - (distance / 441.7 * 100);
        }

        // Helper function for known dark sections
        function isKnownDarkSection(backgroundColor) {
            // List of sections we know should have inverted logo/menu
            const darkSectionColors = [
                "rgb(34, 38, 247)", // Blue section (#2226f7)
                "rgb(0, 0, 0)", // Black section
                "rgb(34, 34, 34)" // Dark gray section
            ];

            return darkSectionColors.includes(backgroundColor);
        }

        // Run on page load
        document.addEventListener('DOMContentLoaded', function() {

            // Run on window resize
            window.addEventListener('resize', checkBackgroundAndInvertImages);

            // Observe changes to the navbar element
            const observer = new MutationObserver(checkBackgroundAndInvertImages);
            observer.observe(document.getElementById('navbar'), {
                attributes: true,
                attributeFilter: ['class']
            });
        });
    </script>
</body>

</html>