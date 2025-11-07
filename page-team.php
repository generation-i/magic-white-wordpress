<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Team</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="icon" type="image/svg+xml" href="/icon.png" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&display=swap" rel="stylesheet">

    <style>
        body {
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            font-family: 'Lato', sans-serif;
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

        .loader-text {
            color: #ea4294;
            font-family: 'Lato', sans-serif;
        }

        .temp-green-bg {
            background: #24d56d;
            border-radius: 50%;
            width: 250px !important;
            /* Make sure width and height are equal */
            height: 250px !important;
            overflow: hidden;
        }

        .temp-green-bg img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 50%;
        }
    </style>
</head>

<body oncontextmenu="return false;">

    <!-- Navbar -->
    <nav id="navbar"
        class="bg-transparent sm:bg-transparent transition-transform duration-500 ease-in-out opacity-100 fixed w-full left-0 px-5 z-50">
        <div class="flex py-2 justify-between items-center w-full max-w-full mx-auto">
            <!-- Logo (Left Corner) -->
            <div class="cursor-pointer" onclick="window.location.href='<?php echo site_url('/'); ?>'">
                <img id="logo-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/services-assets/Logo-on-menu.png" alt="logo"
                    class="w-8 h-8 sm:w-12 sm:h-12 md:w-14 md:h-14">
            </div>

            <!-- Mobile Menu Button (Right Corner) -->
            <button id="menu-btn" class="hover:text-yellow-400 transition duration-300">
                <img id="menu-icon" src="<?php echo get_template_directory_uri(); ?>/assets/images/services-assets/Hamburger-menu.png" alt="nav button"
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
                    class="text-2xl font-thin transition-transform duration-500 ease-out hover:scale-125 hover:font-bold font-normal block">
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
                    class="text-black-700 green font-bold text-2xl transition-transform duration-500 ease-out scale-125 hover:scale-125 hover:font-bold block">
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

    <!-- Main Page -->
    <section class="relative w-full h-screen flex items-center justify-center" id="team-vid-banner">
        <!-- Background Video -->
        <div class="absolute inset-0 overflow-hidden">
            <video autoplay loop muted playsinline class="w-full h-full object-cover">
                <source src="<?php echo get_template_directory_uri(); ?>/assets/images/png-team/AdobeStock_99504571.mov" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            <div class="absolute inset-0 bg-[#24d56d] opacity-60"></div>
        </div>

        <!-- Centered Text Content -->
        <div class="relative z-10 text-white text-right px-6">
            <h1 class="text-4xl sm:text-6xl font-bold">OUR TEAM</h1>
            <p class="mt-4 max-w-2xl text-lg sm:text-xl">
                We are an award-winning, full-service design, advertising & digital agency.
                We work in all industry sectors from International brands to small retail outlets.
                We believe passionately in the power of well-crafted design solutions and in truly listening to our
                clients.
            </p>
        </div>
    </section>


    <!-- Individual Team Section -->
    <!-- Individual Team Section -->
    <section class="py-16 px-4 sm:px-10 md:px-16" id="team-section">
        <div class="w-auto sm:w-full px-2 lg:px-20 xl:px-60">
            <!-- Person 1 -->
            <div class="w-full pt-10 flex flex-col sm:flex-row gap-6 sm:gap-10 items-center">
                <div class="relative flex justify-center sm:w-2/5">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/png-team/gopi-image.png" alt="Person 1"
                        class="relative w-48 sm:w-56 md:w-60 z-10 object-contain temp-green-bg">
                    <!-- <img src="/png-team/base.png" alt="Circle"
                        class="absolute bottom-0  w-[20rem] sm:w-[16.30rem] md:w-70 object-contain"> -->
                </div>
                <div class="text-left flex flex-col justify-center mt-16 sm:mt-0 sm:w-3/5">
                    <h2 class="text-md sm:text-xl font-bold text-[#595959] uppercase">GOPI PRASANNAA </h2>
                    <p class="text-xs sm:text-base text-[#a8a8a8] uppercase mb-5">FOUNDER/CEO</p>

                    <p class="text-[15px] mt-2">
                        Gopi is a rare jack-of-all-trades and master of them all. As creator, innovator, developer,
                        artist, designer, and sculptor; he can whip up a print ad, develop a game, create an animated
                        character, design a movie poster, redo your living room, or paint you a picture. CNN dubbed him
                        a 21st Century Visionary when his brainchild, the iBangle, won Best Product of the Year 2008.
                        <br />
                        <br />
                        Today, he is a prolific publicity designer; having designed posters across Hindi, Telegu, Tamil,
                        Kannada and Malayalam cinema. Gopi’s foray into the production design space kicked off with the
                        Amazon Prime’s Modern Love Chennai, an anthology of six films with six unique geographies,
                        colours and architectural styles. He next brought his vision to an AR Rehman-Dhee music album
                        (Yennai Izhukkuthadi), where he designed a visually striking, stylized set that brought the
                        music’s mood to life.
                        <br />
                        <br />
                        At the heart of it all, he is a reticent artist who firmly believes that it is art that speaks
                        where words fail.
                    </p>
                </div>
            </div>

            <!-- Person 2 -->
            <div class="w-full pt-24 sm:pt-20 flex flex-col sm:flex-row-reverse gap-6 sm:gap-10 items-center">
                <div class="relative flex justify-center sm:w-2/5">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/png-team/uday-image.png" alt="Person 2"
                        class="relative w-48 sm:w-56 md:w-60 z-10 object-contain temp-green-bg">
                    <!-- <img src="/png-team/base.png" alt="Circle"
                        class="absolute bottom-0  w-48 sm:w-56 md:w-60 object-contain"> -->
                </div>
                <div class="text-left flex flex-col justify-center mt-16 sm:mt-0 sm:w-3/5">
                    <h2 class="text-md sm:text-xl font-bold text-[#595959] uppercase">S V UDAYAKUMAR</h2>
                    <p class="text-xs sm:text-base text-[#a8a8a8] uppercase mb-5">CREATIVE DIRECTOR</p>
                    <p class="text-[15px] mt-2">
                        Udaya Kumar is a design leader with over a decade of experience in brand, film, and spatial
                        design. A graduate in Sculpture from the Government College of Fine Arts, Chennai, he has led
                        creative direction for 100+ film publicity projects and numerous brand campaigns. As Creative
                        Director at Gopi Prasannaa Studio, he has shaped the visual language of major films and
                        collaborated with leading brands like Alamara Films and AGNO3 on campaigns for brands like DELL,
                        Flying Machine, McDowell’s, and the Murugappa Group.
                        <br />
                        <br />
                        His design journey spans art direction, animation, and spatial concepts, with early experience
                        assisting on interior design projects across India. Udaya’s expertise in stop-motion animation
                        and visual storytelling has also contributed to ad campaigns such as the Stayzilla commercial
                        directed by Thiagarajan Kumararaja. With a foundation in fine arts and hands-on experience
                        across mediums, he continues to lead teams and deliver impactful visual solutions across
                        industries.
                    </p>
                </div>
            </div>

            <!-- Person 3 -->
            <div class="w-full pt-24 sm:pt-32 flex flex-col sm:flex-row gap-6 sm:gap-10 items-center">
                <div class="relative flex justify-center sm:w-2/5">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/png-team/vaasan-image.png" alt="Person 3"
                        class="relative w-48 sm:w-56 md:w-60 z-10 object-contain temp-green-bg">
                    <!-- <img src="/png-team/base.png" alt="Circle"
                        class="absolute bottom-0  w-48 sm:w-56 md:w-60 object-contain"> -->
                </div>
                <div class="text-left flex flex-col justify-center mt-16 sm:mt-0 sm:w-3/5">
                    <h2 class="text-md sm:text-xl font-bold text-[#595959] uppercase">Vasan S</h2>
                    <p class="text-xs sm:text-base text-[#a8a8a8] uppercase mb-5">VP - Technology</p>
                    <p class="text-[15px] mt-2">
                        Vasan S is an accomplished entrepreneur with a strong foundation in computer science, holding a
                        degree from IIT Madras. With early career stints at NYSE and Enguage in Atlanta, he returned to
                        India to pursue his entrepreneurial ambitions in the tech and product innovation space.
                        <br />
                        <br />
                        He is the founder of 1000 Lookz, a pioneering virtual makeover platform that enables users to
                        preview cosmetics, hair colour, and eyewear using real-time imaging — a first-of-its-kind in
                        India. The platform has collaborated with over 40 leading brands and e-commerce companies, and
                        was part of the Microsoft Accelerator program.
                        <br />
                        <br />
                        Vasan has filed 18 patents and has been widely recognised for his innovation. His accolades
                        include the CII Emerging Entrepreneur of the Year (2016), NASSCOM Top 10 Product Companies
                        (2015), and multiple honours from Microsoft, IAMAI, and Indira International.
                        <br />
                        <br />
                        Vasan continues to focus on deep tech products that blend AI, retail, and user experience in
                        impactful ways.

                    </p>
                </div>
            </div>

            <!-- Person 4 -->
            <div class="w-full pt-24 sm:pt-32 flex flex-col sm:flex-row-reverse gap-6 sm:gap-10 items-center">
                <div class="relative flex justify-center sm:w-2/5">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/png-team/vinoth-image.png" alt="Person 4"
                        class="relative w-48 sm:w-56 md:w-60 z-10 object-contain temp-green-bg">
                    <!-- <img src="/png-team/base.png" alt="Circle"
                        class="absolute bottom-0  w-48 sm:w-56 md:w-60 object-contain"> -->
                </div>
                <div class="text-left flex flex-col justify-center mt-16 sm:mt-0 sm:w-3/5">
                    <h2 class="text-md sm:text-xl font-bold text-[#595959] uppercase">VINOTH C</h2>
                    <p class="text-xs sm:text-base text-[#a8a8a8] uppercase mb-5">chief photographer</p>
                    <p class="text-[15px] mt-2">
                        Vinoth Chandrasekaran lives and breathes photography. After graduating from college, he honed
                        his craft under the mentorship of Sharad Haksar, one of India’s most awarded advertising
                        photographers. His decade-long stint at Eyelight Pictures was a deep dive into the fundamentals
                        of photography — mastering lighting, composition, point of view, and post-production with an
                        artist’s eye and an advertiser’s precision.
                        <br />
                        <br />
                        As a core contributor to One Eyeland, Vinoth had the opportunity to study the works of
                        world-renowned photographers. Vinoth’s signature style combines technical precision with
                        creative originality. His work has earned international recognition, including awards and
                        honourable mentions. Today, he brings that same blend of insight, craft, and creativity to every
                        project he undertakes.

                    </p>
                </div>
            </div>
        </div>
    </section>



    <!-- whole team -->
    <!-- <section class="flex items-end justify-center py-40 min-h-1/2"> -->

    <!-- <div class="max-w-4xl mx-auto relative"> -->
    <!-- Group Photo -->
    <!-- <img src="/png-team/Team.png" alt="Group Photo" class="w-full h-auto object-contain"> -->

    <!-- Person 1 (e.g., Gopi Prasannaa) -->
    <!-- <div class="absolute left-[45%] top-[10%] w-[5%] h-[40%] group">
        <div class="absolute -top-60 left-1/2 transform -translate-x-1/2 opacity-0 group-hover:opacity-100 transition-all duration-300 text-center">
          <div class="bg-transparent text-black text-xs px-2 py-1 rounded shadow-lg">
            Gopi Prasannaa<br>
            <span class="text-gray-600 text-[10px]">Creative Director</span>
          </div>
        </div>
      </div> -->

    <!-- Person 2 -->
    <!-- <div class="absolute left-[20%] top-[15%] w-[5%] h-[40%] group">
        <div class="absolute -top-60 left-1/2 transform -translate-x-1/2 opacity-0 group-hover:opacity-100 transition-all duration-300 text-center">
          <div class="bg-transparent text-black text-xs px-2 py-1 rounded shadow-lg">
            S V UDAYAKUMAR<br>
            <span class="text-gray-600 text-[10px]">CREATIVE DIRECTOR</span>
          </div>
        </div>
      </div> -->
    <!-- Add more people here -->
    <!-- </div> -->
    <!-- </section> -->


    <!--Footer-->
    <section class="min-h-1/2 flex flex-col justify-center items-center bg-[#ffd628] text-white text-center p-10">
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
                                <a class="hover:text-pink-500" href="<?php echo site_url('/'); ?>">HOME</a>
                            </h3>
                            <ul class="space-y-1">
                                <li>
                                    <a class="hover:text-pink-500" href="<?php echo site_url('/about'); ?>">Why us</a>
                                </li>
                            </ul>
                        </div>
                        <div class="w-full">
                            <h3 class="font-semibold">
                                <a class="hover:text-pink-500" href="<?php echo site_url('/work'); ?>">WORK</a>
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
                                        <a class="hover:text-pink-500" href="<?php echo site_url('/work'); ?>?tab=<?php echo esc_attr($cat->slug); ?>">
                                            <?php echo esc_html($cat->name); ?>
                                        </a>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                        <div class="w-full">
                            <h3 class="font-semibold">
                                <a class="hover:text-pink-500" href="<?php echo site_url('/service'); ?>">
                                    SERVICE

                                </a>
                            </h3>
                            <ul class="space-y-1">
                                <li>
                                    <a class="hover:text-pink-500"
                                        href="<?php echo site_url('/service'); ?>?details=branding-popup">Branding</a>
                                </li>
                                <li><a class="hover:text-pink-500"
                                        href="<?php echo site_url('/service'); ?>?details=ads-popup">Advertising</a></li>
                                <li><a class="hover:text-pink-500"
                                        href="<?php echo site_url('/service'); ?>?details=film-production-popup">Film Production</a></li>
                                <li><a class="hover:text-pink-500" href="<?php echo site_url('/service'); ?>?details=designer-popup">Graphic
                                        Design</a></li>
                                <li><a class="hover:text-pink-500" href="<?php echo site_url('/service'); ?>?details=ui-ux-popup">Social
                                        Media Marketing</a></li>
                                <li><a class="hover:text-pink-500"
                                        href="<?php echo site_url('/service'); ?>?details=integrated-popup">Integrated Marketing</a></li>
                            </ul>
                        </div>
                        <div class="w-full">
                            <h3 class="font-semibold"><a class="hover:text-pink-500" href="<?php echo site_url('/team'); ?>">TEAM</a></h3>
                            <ul class="space-y-1">
                                <li class="cursor-pointer">
                                    <a class="hover:text-pink-500" href="<?php echo site_url('/team'); ?>">Meet the Team</a>
                                </li>
                            </ul>
                        </div>
                        <div class="w-full">
                            <h3 class="font-semibold"><a class="hover:text-pink-500" href="<?php echo site_url('/contact'); ?>">CONTACT</a>
                            </h3>
                            <ul class="space-y-1">

                                <li class="cursor-pointer">
                                    <a class="hover:text-pink-500" href="<?php echo site_url('/contact'); ?>">Contact Information</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Second Row: Button & Social Media Icons -->
                    <div class="flex flex-col sm:flex-row justify-between items-center w-full space-y-4 sm:space-y-0">
                        <button id="shareButton"
                            class="bg-[#ffd628] border border-white px-6 py-3 text-lg text-white font-semibold flex items-center gap-2">
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

    <!-- loader -->
    <div id="loader"
        class="fixed inset-0 bg-white flex flex-col items-center justify-center z-[9999999] transition-opacity duration-1000 opacity-100">
        <img id="logo-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/MIW_Website_Assets/loader_horse.gif" alt="loader" class="w-20 h-20 object-contain">
        <span id="loading-text" class="loader-text text-sm font-bold mt-4 ml-3">0%</span>
    </div>
    <!--loader end  -->
    <script>
        document.addEventListener('contextmenu', event => event.preventDefault());
        document.addEventListener('selectstart', event => event.preventDefault());
    </script>


    <script>
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
    </script>
    <script>
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

                if (currentSection.id === 'team-vid-banner' || currentSection.id === 'team-section') {
                    logo.style.filter = "invert(0)";
                    menuIcon.style.filter = "invert(0)";
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
    </script>
</body>

</html>
