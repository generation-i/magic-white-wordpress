<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link rel="icon" type="image/svg+xml" href="/icon.png" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/bento.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>



    <style>
        body {
            font-family: 'Lato', sans-serif;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        img {
            -webkit-user-drag: none;
            /* Works in WebKit browsers like Chrome and Safari */
            user-select: none;
            /* Prevents text selection */
            -webkit-touch-callout: none;
            /* Disables callout menu on iOS */
        }

        .green {
            color: #22c55e;
        }

        .slide-in {
            opacity: 0;
            transform: translateY(50px);
            transition: opacity 1s ease-out, transform 1s ease-out;
        }

        .loader-text {
            color: #ea4294;
            font-family: 'Lato', sans-serif;
        }

        .slide-in.visible {
            opacity: 1;
            transform: translateY(0);
        }

        .first-section {
            margin-top: 25px;
        }

        @media (min-width: 768px) and (max-width: 1024px) {
            .yellow-box-1 {
                height: 40% !important;
                margin-top: 10%;
            }

            .yellow-box {
                height: 7% !important;
                margin-bottom: 24% !important;
            }

            .yellow-box-2 {
                height: 14% !important;
            }

            .section-1-text {
                left: 13% !important;
                width: 50% !important;
            }

            .section-1-image {
                width: 35% !important;
                left: 60% !important;
            }

            .green-box-1 {
                height: 18% !important;
                top: 3% !important;
            }

            .section-2-text {
                right: 25% !important;
                width: 35% !important;
                top: -10% !important;
            }

            .green-box-2 {
                left: 15% !important;
                height: 7% !important;
            }

            .green-box-3 {
                bottom: 20% !important;
                width: 7% !important;
                height: 4% !important;
            }

            .section-2-text-1 {
                bottom: 20% !important;
                left: 20% !important;
                width: 30% !important;
            }

            .section-2-image-1 {
                width: 28% !important;
                right: 10% !important;
                top: 43% !important;
                height: 40% !important;
            }

            .blue-box-1 {
                height: 15% !important;
            }

            .blue-box-2 {
                height: 5% !important;
            }

            .blue-box-3 {
                height: 30% !important;
                right: 18% !important;
                margin-bottom: 0% !important;
            }

            .section-3-image {
                top: 0 !important;
                left: 15% !important;
                width: 30% !important;
                height: 40% !important;
            }

            .section-3-text {
                top: 7% !important;
                right: 0% !important;
                width: 40% !important;
            }

            .section-3-text-1 {
                bottom: 20% !important;
                left: 13% !important;
                width: 50% !important;
            }

            .custom-mt-10 {
                margin-top: 10px;
            }
        }
    </style>
</head>

<body oncontextmenu="return false;">
    <!-- Navbar -->
    <nav id="navbar"
        class="bg-transparent sm:bg-transparent transition-transform duration-500 ease-in-out opacity-100 fixed w-full top-0 left-0 px-5 z-50">
        <div class="flex py-2 justify-between items-center w-full max-w-full mx-auto">
            <!-- Logo (Left Corner) -->
            <div class="cursor-pointer" onclick="window.location.href='<?php echo site_url('/'); ?>'">
                <img id="logo-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/about-assets/logo.png" alt="logo"
                    class="w-8 h-8 sm:w-12 sm:h-12 md:w-14 md:h-14">
            </div>

            <!-- Mobile Menu Button (Right Corner) -->
            <button id="menu-btn" class="hover:text-yellow-400 transition duration-300">
                <img id="menu-icon" src="<?php echo get_template_directory_uri(); ?>/assets/images/about-assets/burger-menu.png" alt="nav button"
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
                <a href="<?php echo site_url('/'); ?>"
                    class="text-2xl font-thin transition-transform duration-500 ease-out hover:scale-125 hover:font-bold font-normal block">
                    H O M E
                </a>
            </li>
            <li class="mt-2 pb-3">
                <a href="<?php echo site_url('/about'); ?>"
                    class="text-black-700 font-bold text-2xl transition-transform duration-500 ease-out scale-125 hover:scale-125 hover:font-bold block green">
                    A B O U T
                </a>
            </li>
            <li class="mt-2 pb-3">
                <a href="<?php echo site_url('/service'); ?>"
                    class="text-2xl font-thin transition-transform duration-500 ease-out hover:scale-125 hover:font-bold font-normal block">
                    S E R V I C E S
                </a>
            </li>
            <li class="mt-2 pb-3">
                <a href="<?php echo site_url('/work'); ?>"
                    class="text-2xl font-thin transition-transform duration-500 ease-out hover:scale-125 hover:font-bold font-normal block">
                    W O R K
                </a>
            </li>
            <li class="mt-2 pb-3">
                <a href="<?php echo site_url('/team'); ?>"
                    class="text-2xl font-thin transition-transform duration-500 ease-out hover:scale-125 hover:font-bold font-normal block">
                    T E A M
                </a>
            </li>
            <li class="mt-2 pb-3">
                <a href="<?php echo site_url('/contact'); ?>"
                    class="text-2xl font-thin transition-transform duration-500 ease-out hover:scale-125 hover:font-bold font-normal block">
                    C O N T A C T
                </a>
            </li>
        </ul>
    </div>

    <!--Main Section-->
    <section class="relative w-full min-h-screen flex items-center justify-center" id="about-banner">
        <!-- Background Image -->
        <div class="absolute inset-0 bg-cover bg-center"
            style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/about-assets/header-image.png');"></div>

        <!-- Content Overlay -->
        <div class="absolute inset-0 bg-black bg-opacity-20"></div>

        <!-- Text Section -->
        <div class="absolute bottom-10 right-10 text-white text-right max-w-xs md:max-w-md lg:max-w-lg">
            <p class="text-lg md:text-xl lg:text-2xl font-semibold leading-tight uppercase">
                Born out of a love<br>
                for design and<br>
                storytelling, we started <br>
                this studio in 1999 <br>
                to help ideas find their <br>
                most striking form.<br>
            </p>
            </p>
        </div>
    </section>

    <!--Bento section 1-->
    <section id="about-content"
        class="min-h-screen lg:min-h-[200vh]  relative bg-white bg-[url('<?php echo get_template_directory_uri(); ?>/assets/images/about-assets/frame-body.png')] bg-cover bg-fixed sm:mb-0 mb-[5vh]">
        <!-- First Section -->
        <div class="min-h-[55vh]  lg:min-h-[65vh] w-full relative overflow-hidden px-4 md:px-0">
            <!-- Yellow Accent Blocks - Hidden on small screens -->
            <div
                class="hidden md:block absolute top-[30%] w-[2.5%] h-[68%] bg-[url('<?php echo get_template_directory_uri(); ?>/assets/images/about-assets/yellow-box-1.png')] slide-in yellow-box-1">
            </div>

            <div
                class="block absolute top-[80%] right-52 sm:top-[5.2%] sm:right-0 h-[8%] w-[50%] sm:w-[8%] sm:h-[20.8%] bg-[url('<?php echo get_template_directory_uri(); ?>/assets/images/about-assets/yellow-box-2.png')] slide-in yellow-box-2')] slide-in yellow-box-2">
            </div>

            <!-- "WE GROW IDEAS" Section -->
            <div class="pt-16 md:absolute md:top-[20%] md:left-[10%] md:w-[30%] w-full slide-in section-1-text">
                <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold text-blue-600 mb-4 uppercase">Our vision</h2>
                <p class="text-gray-600 w-full md:w-[74%]">
                    To transform every brand story from a blank page into a powerful narrative that resonates, inspires,
                    and stays with you.
                </p>
            </div>

            <!-- Office Image -->
            <div
                class="mt-8 md:absolute md:top-[20%] md:left-[50%] md:w-[30%] md:h-[30%] w-full slide-in section-1-image">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about-assets/body-image-1.png" alt="Modern office space"
                    class="w-full md:object-contain shadow-lg" />
            </div>
        </div>

        <!-- Second Section -->
        <div class="min-h-screen w-full relative overflow-hidden sm:overflow-visible px-4 md:px-0">
            <!-- Green Accent Blocks - Hidden on small screens -->
            <div
                class="hidden md:block absolute h-[5%] w-[20%] right-0 sm:top-[20%] sm:w-[16%] bg-[url('<?php echo get_template_directory_uri(); ?>/assets/images/about-assets/green-box-1.png')] slide-in green-box-1">
            </div>
            <div
                class="block absolute bottom-5 right-0 sm:top-[50%] sm:left-[10%] w-[40%] sm:w-[11.7%] h-[8%] sm:h-[12%] bg-[url('<?php echo get_template_directory_uri(); ?>/assets/images/about-assets/green-box-2.png')] slide-in green-box-2">
            </div>


            <!-- "WE CHAMPION CLIENTS" Section -->
            <div class="pt-10 md:absolute top-[15%] md:left-[55%] md:w-[25%] w-full slide-in section-2-text">
                <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold text-blue-600 mb-4 custom-mt-10 uppercase">How we
                    work .</h2>
                <p class="text-gray-600 w-full md:w-[75%]">
                    We prefer clarity over clutter, emotion over noise, and design that does more than decorate.
                    You are not just a client, you are a creative partner.
                    Together, we turn stories into visual experiences that connect, move, and endure.
                </p>
            </div>
            <!-- Office Image -->
            <div class="mt-8 md:absolute lg:left-[8%] md:w-[28%] md:h-[42%] w-full slide-in section-2-image-1">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about-assets/body-image-2.png"
                    alt="Modern office space with wooden table and glass partitions"
                    class="w-full md:h-full md:object-contain" />
            </div>

            <!-- "WE COLLABORATE FEARLESSLY" Section -->
            <div
                class="mt-8 md:mt-0 md:absolute md:-bottom-20 lg:left-[10%] md:w-[20%] w-full slide-in section-2-text-1">
                <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold text-blue-600 mb-4 uppercase">What sets us apart.
                </h2>
                <p class="text-gray-600">
                    We don’t just design—we translate emotion.
                    Where strategy meets soul, that’s where our work lives.
                </p>
            </div>



            <!-- Office Image -->
            <div
                class="pt-5 sm:pt-16 md:absolute md:bottom-[-20%] md:left-[55%] md:w-[30%] md:h-[45%] w-full slide-in section-3-image">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about-assets/body-image-3.png"
                    alt="Interior office space with wooden frames and glass partitions"
                    class="w-full md:h-full md:object-cover shadow-lg" />
            </div>
            <!-- Blue Accent Blocks - Hidden on small screens -->

            <div
                class="hidden md:block absolute bottom-20 right-0 lg:bottom-[-10%] lg:right-10 w-[5%] h-[4%] bg-[url('<?php echo get_template_directory_uri(); ?>/assets/images/about-assets/blue-box-2.png')] slide-in blue-box-2')] slide-in blue-box-2">
            </div>
            <div
                class="hidden md:block absolute bottom-0 sm:bottom-20 lg:bottom-[-20%] left-0  sm:left-0 w-[25%] sm:w-[2%] h-[7.8%] sm:h-[15%] bg-[url('<?php echo get_template_directory_uri(); ?>/assets/images/about-assets/blue-box-1.png')] slide-in blue-box-1">
            </div>

        </div>

    </section>


    <!--Footer-->
    <section class="min-h-1/2 flex flex-col justify-center items-center bg-pink-500 text-white text-center p-10">
        <div class="container">
            <div class="w-full max-w-4xl mx-auto mt-6">
                <!-- Heading + Input Field -->
                <h1 class="text-xl md:text-3xl font-bold mb-4 text-left uppercase">Ready when you are. Let’s create.
                </h1>
                <div class="flex">
                    <input type="email" placeholder="ENTER YOUR EMAIL ADDRESS"
                        class="p-4 w-full text-lg text-gray-600 outline-none bg-white" />
                    <button class="bg-blue-600 px-8 py-4 text-lg text-white font-semibold">SUBSCRIBE</button>
                </div>

                <div class="mt-10 grid grid-cols-1 gap-y-6 w-full">
                    <!-- First Row: Lists (Grid of 5 Items) -->
                    <div
                        class="grid grid-cols-2 sm:grid-cols-2 md:grid-cols-5 gap-x-6 gap-y-6 w-full text-left md:text-left">
                        <div class="w-full order-1 md:order-none">
                            <h3 class="font-semibold">
                                <a class="hover:text-yellow-400" href="<?php echo site_url('/'); ?>">HOME</a>
                            </h3>
                            <ul class="space-y-1">
                                <li>
                                    <a class="hover:text-yellow-400" href="<?php echo site_url('/about'); ?>">Why us</a>
                                </li>
                            </ul>
                        </div>

                        <div class="w-full">
                            <h3 class="font-semibold">
                                <a class="hover:text-yellow-400" href="<?php echo site_url('/work'); ?>">WORK</a>
                            </h3>
                            <ul class="space-y-1">
                                <?php
                                $categories = get_terms([
                                    'taxonomy' => 'work_category',
                                    'hide_empty' => false,
                                    'number' => 6,
                                    'orderby' => 'id', // or 'date' if available via ACF or custom
                                    'order' => 'DESC',
                                ]);

                                foreach ($categories as $cat):
                                    // Optional: highlight Film Posters differently

                                ?>
                                    <li class="cursor-pointer">
                                        <a class="hover:text-yellow-400" href="<?php echo site_url('/work'); ?>?tab=<?php echo esc_attr($cat->slug); ?>">
                                            <?php echo esc_html($cat->name); ?>
                                        </a>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>


                        <div class="w-full">
                            <h3 class="font-semibold">
                                <a class="hover:text-yellow-400" href="<?php echo site_url('/service'); ?>">
                                    SERVICE

                                </a>
                            </h3>
                            <ul class="space-y-1">
                                <li>
                                    <a class="hover:text-yellow-400"
                                        href="<?php echo site_url('/service'); ?>?details=branding-popup">Branding</a>
                                </li>
                                <li><a class="hover:text-yellow-400"
                                        href="<?php echo site_url('/service'); ?>?details=ads-popup">Advertising</a></li>
                                <li><a class="hover:text-yellow-400"
                                        href="<?php echo site_url('/service'); ?>?details=film-production-popup">Film Production</a></li>
                                <li><a class="hover:text-yellow-400" href="<?php echo site_url('/service'); ?>?details=designer-popup">Graphic
                                        Design</a></li>
                                <li><a class="hover:text-yellow-400" href="<?php echo site_url('/service'); ?>?details=ui-ux-popup">Social
                                        Media Marketing</a></li>
                                <li><a class="hover:text-yellow-400"
                                        href="<?php echo site_url('/service'); ?>?details=integrated-popup">Integrated Marketing</a></li>
                            </ul>
                        </div>
                        <div class="w-full">
                            <h3 class="font-semibold"><a class="hover:text-yellow-400" href="/team.html">TEAM</a></h3>
                            <ul class="space-y-1">
                                <li class="cursor-pointer">
                                    <a class="hover:text-yellow-400" href="<?php echo site_url('/team'); ?>">Meet the Team</a>
                                </li>
                            </ul>
                        </div>
                        <div class="w-full">
                            <h3 class="font-semibold"><a class="hover:text-yellow-400"
                                    href="<?php echo site_url('/contact'); ?>">CONTACT</a></h3>
                            <ul class="space-y-1">

                                <li class="cursor-pointer">
                                    <a class="hover:text-yellow-400" href="<?php echo site_url('/contact'); ?>">Contact Information</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Second Row: Button & Social Media Icons -->
                    <div
                        class="flex flex-col sm:flex-row justify-between items-center w-full space-y-8 mt-8 sm:space-y-0">
                        <button id="shareButton"
                            class="bg-pink-500 border border-white px-6 py-3 text-lg text-white font-semibold flex items-center gap-2">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/footer-png/share-button.png" alt="Share Icon" class="w-6 h-6"> Share this Website
                        </button>


                        <!-- Social Icons -->
                        <div class="flex flex-wrap justify-center sm:justify-end gap-6">
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

    <!-- loader -->
    <div id="loader"
        class="fixed inset-0 bg-white flex flex-col items-center justify-center z-[9999999] transition-opacity duration-1000 opacity-100">
        <img id="logo-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/MIW_Website_Assets/loader_horse.gif" alt="loader" class="w-20 h-20 object-contain">
        <span id="loading-text" class="loader-text text-sm font-bold mt-4 ml-3">0%</span>
    </div>
    <!--loader end  -->

    <script>
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

        let lastScrollY = window.scrollY;
        const navbar = document.getElementById("navbar");

        window.addEventListener("scroll", () => {
            const currentScrollY = window.scrollY;

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
        });
    </script>
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
        document.addEventListener("DOMContentLoaded", function() {
            const elements = document.querySelectorAll(".slide-in");

            function checkVisibility() {
                elements.forEach((el) => {
                    const rect = el.getBoundingClientRect();
                    if (rect.top < window.innerHeight - 100) {
                        el.classList.add("visible");
                    }
                });
            }
            window.addEventListener("scroll", checkVisibility);
            checkVisibility();
        });

        function updatePlaceholder() {
            const inputField = document.querySelector("input[type='email']");

            if (window.innerWidth <= 640) { // Tailwind 'sm' breakpoint (mobile screens)
                inputField.placeholder = "EMAIL";
            } else {
                inputField.placeholder = "ENTER YOUR EMAIL ADDRESS";
            }
        }

        // Run function on page load and resize
        window.addEventListener("load", updatePlaceholder);
        window.addEventListener("resize", updatePlaceholder);
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

                if (currentSection.id === 'about-banner') {
                    logo.style.filter = "invert(1)";
                    menuIcon.style.filter = "invert(1)";
                } else if (currentSection.id === 'about-content') {
                    logo.style.filter = "invert(90%)";
                    menuIcon.style.filter = "invert(90%)";
                } else {
                    logo.style.filter = "none";
                    menuIcon.style.filter = "none";
                }
                // Check if this is a section where we need to invert
                // if (needsInversion(sectionBgColor, sectionBgImage)) {
                //     logo.style.filter = "invert(1)";
                //     menuIcon.style.filter = "invert(1)";
                // } else {
                //     logo.style.filter = "none";
                //     menuIcon.style.filter = "none";
                // }
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
            checkBackgroundAndInvertImages();

            // Run when scrolling
            window.addEventListener('scroll', checkBackgroundAndInvertImages);

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