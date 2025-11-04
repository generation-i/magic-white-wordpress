<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/svg+xml" href="/icon.png" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&display=swap" rel="stylesheet">


    <title>Contact Us</title>
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

        #image-container {
            perspective: 1000px;
        }

        .green {
            color: #22c55e;
        }

        .post-card {
            width: 46.75%;
            aspect-ratio: 3 / 2;
        }


        .loader-text {
            color: #ea4294;
            font-family: 'Lato', sans-serif;
        }

        .contact-title-text {
            font-size: calc(36px + 55 * ((100vw - 1600px) / 2400));
            line-height: calc(40px + 55 * ((100vw - 1600px) / 2400));
        }

        .contact-form-text {
            /* font-size: 1rem; */
            font-size: calc(16px + 20 * ((100vw - 1600px) / 2400));
        }

        .element-space-dynamic {
            /* margin-top: 2.5rem; */
            margin-top: calc(40px + 110 * ((100vw - 1600px) / 2400));
        }

        .contact-img-rt {
            width: calc(7rem + 120 * ((100vw - 1600px) / 2400));
            /* width: 6rem; */
        }

        .space-dynamic {
            margin-top: calc(32px + 100 * ((100vw - 1600px) / 2400));
            /* margin-top: 2rem; */
        }


        /* Small screens (max-width: 768px) */
        @media (max-width: 767px) {
            .post-card {
                width: 300px;
                height: 600px;
            }

            .contact-title-text {
                font-size: 24px;
                line-height: 1.5rem;
            }

            .contact-img-rt {
                width: 4.5rem;
            }

            .space-dynamic {
                margin-top: 2rem;
            }

            .element-space-dynamic {
                margin-top: 1.15rem;
            }

            .contact-form-text {
                font-size: 0.75rem;
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
                    class="text-2xl font-thin transition-transform duration-500 ease-out hover:scale-125 hover:font-bold font-normal block">
                    T E A M
                </a>
            </li>
            <li class="mt-2 pb-3">
                <a href="<?php echo site_url('/contact'); ?>"
                    class="text-black-700 font-bold text-2xl transition-transform green duration-500 ease-out scale-125 hover:scale-125 hover:font-bold block">
                    C O N T A C T
                </a>
            </li>
        </ul>
    </div>
    <!--contact design section-->
    <section id="tilt-section"
        class="w-full min-h-screen flex items-center justify-center bg-white py-10 sm:py-16 px-4 sm:px-6">
        <div class="post-card mx-auto  border shadow-2xl bg-white relative flex flex-col md:flex-row overflow-hidden">
            <div class="w-full md:w-1/2 flex items-center justify-center px-4 md:px-6 pt-6 pb-4 md:py-20 xl:py-28 border-b-2 md:border-b-0 md:border-r-0 border-dotted border-gray-400"
                style="border-image: repeating-linear-gradient(to right, #000 0, #000 1px, transparent 1px, transparent 7px) 100% 1;">
                <div id="image-container"
                    class="relative w-[200px] sm:w-[200px] md:w-[240px] lg:w-[240px] aspect-[1/1.2]">
                    <img id="bg-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/contactpage_assets/Vector_Smart_Object.svg" alt="Background"
                        class="image-to-move absolute top-2 right-0 w-[75%] h-full object-contain z-0" />
                    <img id="fg-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/contactpage_assets/Horse.svg" alt="Foreground"
                        class="image-to-move absolute top-0 left-0 w-full h-full object-contain z-10" />
                </div>
            </div>

            <div
                class="hidden md:block absolute left-1/2 top-[3rem] bottom-[3rem] border-l-2 border-[#272cf7] border-dotted vertical-line">
            </div>

            <!-- Right Side (Form Section) -->

            <!-- Right Side (Form Section) -->
            <div class="w-full md:w-1/2 px-4 lg:px-6 pt-10 pb-10 flex flex-col justify-center relative">
                <div class="flex items-center justify-between">
                    <h1 class="contact-title-text font-light text-[#272cf7]">
                        L E T 'S <br> T A L K
                    </h1>

                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/contactpage_assets/stamp.png" alt="Logo"
                        class="contact-img-rt shrink-0 object-contain mt-2 sm:mt-4 md:mt-6">
                </div>

                <form class="space-dynamic" method="POST" data-parsley-validate
                    action="">
                    <input type="hidden" name="action" value="submit_contact_form">

                    <div>
                        <input type="text" name="name" placeholder="NAME"
                            class="contact-form-text w-full border-none outline-none bg-transparent text-[#272cf7] placeholder:text-[#272cf7] focus:ring-0"
                            data-parsley-minlength-message="Name must be at least 2 characters long"
                            data-parsley-required-message="Name is required"
                            data-parsley-errors-container="#name-error-container"
                            required>
                        <div class="w-full border-b-2 border-dotted border-[#272cf7]"></div>
                    </div>

                    <div class="element-space-dynamic">
                        <input type="email" name="email" placeholder="EMAIL ADDRESS"
                            class="contact-form-text w-full border-none outline-none bg-transparent text-[#272cf7] placeholder:text-[#272cf7] focus:ring-0"
                            required data-parsley-type="email"
                            data-parsley-type-message="Invalid email address"
                            data-parsley-errors-container="#email-error-container">
                        <div class="w-full border-b-2 border-dotted border-[#272cf7]"></div>
                    </div>

                    <div class="element-space-dynamic">
                        <textarea name="message" rows="1" placeholder="YOUR MESSAGE FOR US"
                            class="contact-form-text w-full border-none outline-none bg-transparent text-[#272cf7] placeholder:text-[#272cf7] focus:ring-0"
                            data-parsley-maxlength="300"
                            data-parsley-maxlength-message="Message must be no more than 300 characters"
                            data-parsley-minlength-message="Message must be at least 4 characters long"
                            data-parsley-required-message="Message is required"
                            data-parsley-errors-container="#msg-error-container"
                            required></textarea>
                        <div class="w-full border-b-2 border-dotted border-[#272cf7]"></div>
                    </div>

                    <!-- Send Button -->
                    <div class="flex justify-end ">
                        <button type="submit" class="aspect-square" style="width: clamp(4rem, 6vw, 6rem);" name="submit_contact_form">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/contactpage_assets/send-button.png" alt="Send Button"
                                class="w-full h-full object-contain">
                        </button>
                    </div>

                </form>
            </div>
        </div>
    </section>

    <div id="success-popup" class="fixed inset-0 flex items-center justify-center bg-gray-800 bg-opacity-50 hidden">
        <div class="bg-white rounded-lg p-6 shadow-lg">
            <h2 class="text-lg font-bold text-green-600 mb-2">Thank You for Reaching Out!</h2>
            <p class="text-gray-600">Your message has been successfully submitted. We’ll get back to you as soon as
                possible. Have a great day!</p>
            <button class="mt-4 px-4 py-2 bg-green-600 text-white rounded hover:bg-green-700"
                onclick="closePopup()">OK</button>
        </div>
    </div>

    <!-- Error popup -->
    <div id="error-popup" class="fixed inset-0 flex items-center justify-center bg-gray-800 bg-opacity-50 hidden">
        <div class="bg-white rounded-lg p-6 shadow-lg">
            <h2 class="text-lg font-bold text-red-600 mb-2">Oops!</h2>
            <p class="text-gray-600">Something went wrong. Please try again or contact support if the issue persists.
            </p>
            <button class="mt-4 px-4 py-2 bg-red-600 text-white rounded hover:bg-red-700"
                onclick="closeErrorPopup()">Close</button>
        </div>
    </div>


    <!--Footer-->
    <section class="min-h-1/2 flex flex-col justify-center items-center bg-pink-500 text-white text-center p-10">
        <div class="container">
            <div class="w-full max-w-4xl mx-auto mt-6">
                <!-- Heading + Input Field -->
                <h1 class="text-xl md:text-3xl font-bold mb-4 text-left uppercase">Ready when you are. Let’s create.
                </h1>
                <div class="flex">
                    <input type="email" id="footerMail" placeholder="ENTER YOUR EMAIL ADDRESS"
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
                            <h3 class="font-semibold"><a class="hover:text-yellow-400" href="<?php echo site_url('/team'); ?>">TEAM</a></h3>
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
                        class="flex flex-col sm:flex-row justify-between items-center w-full space-y-4 sm:space-y-0 relative">
                        <button id="shareButton"
                            class="bg-pink-500 border border-white px-6 py-3 text-lg text-white font-semibold flex items-center gap-2">
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
        function showErrorPopup() {
            document.getElementById('error-popup').classList.remove('hidden');
        }

        function closeErrorPopup() {
            document.getElementById('error-popup').classList.add('hidden');
        }

        function showPopup() {
            document.getElementById('success-popup').classList.remove('hidden');
        }

        function closePopup() {
            document.getElementById('success-popup').classList.add('hidden');
        }

        const contactFormStatus = "<?php echo isset($_SESSION['contact_form_status']) ? $_SESSION['contact_form_status'] : ''; ?>";


        if (contactFormStatus && contactFormStatus === 'success') {
            showPopup();
        }

        if (contactFormStatus && (contactFormStatus === 'error' || contactFormStatus === 'invalid_email')) {
            showErrorPopup();
        }

        const menuBtn = document.getElementById('menu-btn');
        const closeMenuBtn = document.getElementById('close-menu');
        const mobileMenu = document.getElementById('mobile-menu');

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

        function updatePlaceholder() {
            const inputField = document.getElementById("footerMail");

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
        // horse animation
        const images = document.querySelectorAll(".image-to-move"); // Select both images
        const isSafari = /^((?!chrome|android).)*safari/i.test(navigator.userAgent);

        document.addEventListener("mousemove", (e) => {
            const {
                clientX: mouseX,
                clientY: mouseY
            } = e; // Get mouse position on the page
            const centerX = window.innerWidth / (isSafari ? 1 : 2);
            const centerY = window.innerHeight / (isSafari ? 1 : 2);


            // Calculate movement strength based on distance from the center
            const moveX = (mouseX - centerX) / centerX * 20; // Horizontal movement
            const moveY = (mouseY - centerY) / centerY * 20; // Vertical movement

            // Apply movement to both images
            gsap.to(images, {
                duration: (isSafari ? 0.06 : 0.3), // Smooth transition
                x: moveX, // Move left/right
                y: moveY, // Move up/down
                force3D: true,
                rotateY: moveX / 2, // Slight 3D rotation
                rotateX: -moveY / 2, // Add vertical rotation for depth
                ease: "power3.out" // Smooth easing
            });
        });

        document.addEventListener("mouseleave", () => {
            // Reset both images to their original position
            gsap.to(images, {
                duration: 0.5, // Slower reset
                x: 0,
                y: 0,
                rotateY: 0,
                rotateX: 0,
                ease: "power3.out"
            });
        });
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