<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <link rel="icon" type="image/svg+xml" href="/icon.png" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Design is Everything</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/video.js/8.6.1/video-js.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

    <style>
        @font-face {
            font-family: "SF UI Text";
            src: url("/Fonts/SFUIText-Regular.woff") format("woff");
        }

        .font-sf {
            font-family: "SF UI Text", sans-serif;
        }

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

        .active {
            background-color: yellow;
            color: blue;
            /* padding: 30px 10px 18px 10px; */
        }

        .grid-layout {
            height: 100vh;
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            grid-template-rows: repeat(3, 1fr);
            gap: 2px;
        }

        .grid-item {
            overflow: hidden;
            position: relative;
        }

        .grid-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: center;
        }

        .green {
            color: #22c55e;
        }

        .loader-text {
            color: #ea4294;
            font-family: 'Lato', sans-serif;
        }

        .swiper-slide {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        @keyframes moveHorse {
            0% {
                left: 10px;
            }

            100% {
                left: 100vw;
            }
        }

        #horse {
            transition: bottom 0.2s ease-in-out;
        }

        #obstacle {
            position: absolute;
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

        /* Base: Mobile - place it below the slide content */
        .custom-swiper-pagination {
            display: flex;
            justify-content: center;
            gap: 6px;
            position: static !important;
            margin-top: 1.5rem;
            width: 100%;
            z-index: 10;
        }

        .testimonaial-text {
            margin-top: 5% !important;
            /* margin-left: 2%; */
        }

        /* For medium screens and up: position absolutely at the bottom */
        @media (min-width: 1024px) {
            .custom-swiper-pagination {
                position: absolute !important;
                bottom: 8vh !important;
                left: 22.5% !important;
                justify-content: flex-start;
                margin-top: 0;
            }

        }

        @media (min-width: 1170.5px) and (max-width: 1279px) {
            .testimonial-image {
                margin-right: -15% !important;
            }

            .testimonaial-text {
                margin-bottom: 5% !important;
            }

            .testimonaial-text h2 {
                font-size: 34px !important;
            }

            .testimonaial-text p {
                font-size: 18px !important;
            }

            .blue-quote {
                left: -6% !important;
            }

            .custom-swiper-pagination {
                position: absolute !important;
                bottom: 8vh !important;
                left: 20% !important;
                justify-content: flex-start;
                margin-top: 0;
            }

        }


        @media (min-width: 1280px) and (max-width: 2559.5px) {
            .testimonial-image {
                margin-right: -20% !important;
                height: 460px !important;
            }

            .testimonial-image-atlee {
                margin-right: -20% !important;
                height: 410px !important;
            }

            .testimonaial-text {
                margin-bottom: 20px !important;
                /* Adding consistent spacing */
            }

            .testimonaial-text h2 {
                font-size: 34px !important;
            }

            .testimonaial-text p {
                font-size: 18px !important;
            }

            .blue-quote {
                position: absolute;
                left: -60px !important;
                /* Adjust position with pixels */
                bottom: 20px !important;
                /* Ensure it's placed correctly */
            }

            .custom-swiper-pagination {
                position: absolute !important;
                bottom: 40px !important;
                /* Adjusting for pixel-based spacing */
                left: 20% !important;
                justify-content: flex-start;
                margin-top: 0;
            }
        }

        @media (min-width: 2400px) and (max-width: 2700px) {
            .i-bangle {
                min-height: 55rem !important;
            }
        }

        @media (min-width: 2560px) and (max-width: 2700px) {
            .testimonial-image {
                /* margin-right: -50% !important; */
                height: 650px !important;
            }

            .testimonial-image-atlee {
                /* margin-right: -50% !important; */
                height: 630px !important;
            }

            .testimonaial-text {
                margin-bottom: 20px !important;
                left: 20% !important;

                /* Adding consistent spacing */
            }

            .yellow-quote {
                margin-right: 15% !important;
                width: 18% !important;
            }

            .testimonaial-text h2 {
                font-size: 45px !important;
            }

            .testimonaial-text p {
                font-size: 29px !important;
            }

            .testimonial-author {
                font-size: 29px !important;
            }

            .blue-quote {
                position: absolute;
                left: -5% !important;
                width: 8% !important;

                /* Adjust position with pixels */
                top: 6% !important;
                /* Ensure it's placed correctly */
            }

            .custom-swiper-pagination {
                position: absolute !important;
                bottom: 40px !important;
                /* Adjusting for pixel-based spacing */
                left: 20% !important;
                justify-content: flex-start;
                margin-top: 0;
            }

            .swiper-pagination-bullet {
                height: 30px !important;
                width: 30px !important
            }
        }

        @media (max-width: 320px) {
            .testimonaial-text {
                margin-top: 30% !important;
            }

            .testimonial-image {
                max-height: 70dvh !important;
                margin-bottom: -20%;
            }

            .testimonial-image-atlee {
                height: 90dvh !important;
                margin-bottom: -32%;
            }
        }

        @media (min-width: 321px) and (max-width: 425px) {
            .testimonaial-text {
                margin-top: 30% !important;
            }

            .testimonial-image {
                max-height: 60dvh !important;
                margin-bottom: -20%;
            }

            .testimonial-image-atlee {

                max-height: 60dvh !important;
                margin-bottom: -10%;
            }

        }

        @media (min-width: 425px) and (max-width: 639px) {
            .testimonial-image {
                max-height: 70dvh !important;
                margin-bottom: -20%;
            }

            .testimonial-image-atlee {
                max-height: 70dvh !important;
                margin-bottom: -13%;
            }

        }

        @media (min-width: 640px) and (max-width: 767.5px) {
            .testimonaial-text {
                margin-top: 18% !important;
            }

            .game-section {
                display: none !important;
                /* Disables interactions */
            }

            .testimonial-section {
                height: 100dvh !important;
            }
        }

        @media (min-width: 768px) and (max-width: 1023.5px) {
            .testimonial-image {
                max-height: 60dvh !important;
                margin-bottom: -10%;

            }

            .testimonial-image-atlee {
                max-height: 60dvh !important;
            }

            .i-bangle {
                max-height: 60dvh !important;
            }

        }


        /* Mobile and tablet view (max-width: 1023px) */
        @media (max-width: 1023px) {
            .custom-swiper-pagination {
                position: absolute !important;
                bottom: 5vh !important;
                /* Adjust as needed for mobile spacing */
                left: 0;
                right: 0;
                display: flex !important;
                justify-content: center !important;
                width: 100%;
                z-index: 10;
            }

            .blue-quote {
                left: 2% !important;
            }

        }

        /* Dot styles */
        .swiper-pagination-bullet {
            width: 23px;
            height: 23px;
            background-color: #ffffff;
            border: 2px solid #ffffff;
            border-radius: 9999px;
            opacity: 0.6;
            transition: all 0.3s ease;
            box-sizing: border-box;
        }

        .swiper-pagination-bullet-active {
            background-color: #22c55e;
            border: none;
            opacity: 1;
            transform: scale(1.2);
        }

        .banner-carousel {
            opacity: 1;
        }

        .banner-slide {
            opacity: 0;
            transition: opacity 1s ease-in-out;
        }

        .banner-slide.active {
            opacity: 1;
        }

        .carousel-dot {
            cursor: pointer;
            border: 2px solid transparent;
        }

        .carousel-dot.active {
            opacity: 1 !important;
            transform: scale(0.7);
            border-color: #056b29;
        }

        .carousel-dot[data-type="static"].active {
            background-color: #056b29 !important;
            border-color: #ffffff;
        }

        .carousel-dot[data-type="image"].active,
        .carousel-dot[data-type="video"].active {
            background-color: #ffffff !important;
            border-color: #056b29 !important;
        }

        .carousel-dot:hover {
            opacity: 1 !important;
            transform: scale(1.1);
        }

        .banner-slide video {
            pointer-events: none;
        }

        .carousel-navigation {
            opacity: 1;
        }

        /* Loading indicator for dynamic slides */
        .banner-slide[data-type="image"] img,
        .banner-slide[data-type="video"] video {
            transition: opacity 0.3s ease-in-out;
        }

        .banner-slide[data-type="image"] img.loading,
        .banner-slide[data-type="video"] video.loading {
            opacity: 0.5;
        }

        
    </style>
</head>

<body oncontextmenu="return false;">
    <?php ?>
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
                    class="text-black-700 font-bold text-2xl transition-transform duration-500 ease-out scale-125 hover:scale-125 hover:font-bold block green">
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
                    class="text-2xl font-thin transition-transform duration-500 ease-out hover:scale-125 hover:font-bold font-normal block">
                    C O N T A C T
                </a>
            </li>
        </ul>

    </div>

    <!-- Hero Section -->

    <?php
    // Get banner data
    $banners = get_posts(array(
        'post_type' => 'banner',
        'numberposts' => -1,
        'post_status' => 'publish',
        'meta_key' => 'banner_order',
        'orderby' => 'meta_value_num',
        'order' => 'ASC'
    ));

    $banner_data = array();
    foreach ($banners as $banner) {
        $banner_type = get_post_meta($banner->ID, 'banner_type', true);
        $image_id = get_post_meta($banner->ID, 'banner_image_id', true);
        $video_id = get_post_meta($banner->ID, 'banner_video_id', true);

        $media_url = '';
        if ($banner_type === 'image' && $image_id) {
            $media_url = wp_get_attachment_url($image_id);
        } elseif ($banner_type === 'video' && $video_id) {
            $media_url = wp_get_attachment_url($video_id);
        }

        if ($media_url) {
            $banner_data[] = array(
                'type' => $banner_type,
                'url' => $media_url,
                'title' => $banner->post_title
            );
        }
    }

    // Create carousel sequence: static first, then only dynamic banners
    $carousel_sequence = array();

    // Add static banner first
    $carousel_sequence[] = array(
        'type' => 'static',
        'title' => 'Static Banner'
    );

    // Add all dynamic banners
    foreach ($banner_data as $banner) {
        $carousel_sequence[] = $banner;
    }

    $total_slides = count($carousel_sequence);
    $has_dynamic_banners = count($banner_data) > 0;
    ?>

    <section class="flex items-center justify-center h-screen px-6 md:px-12 bg-[#24d56d] w-full relative overflow-hidden" id="banner-section">
        <!-- Carousel Container -->
        <div class="absolute inset-0 w-full h-full banner-carousel" style="z-index:1;">
            <?php foreach ($carousel_sequence as $index => $slide): ?>
                <div class="banner-slide absolute inset-0 w-full h-full <?php echo $index === 0 ? 'active' : ''; ?>"
                    data-slide="<?php echo esc_attr($index); ?>"
                    data-type="<?php echo esc_attr($slide['type']); ?>">

                    <?php if ($slide['type'] === 'static'): ?>
                        <!-- Static Background -->
                        <div class="absolute inset-0 bg-[#24d56d] flex items-center justify-center">
                            <div class="flex flex-col md:flex-row items-center justify-between w-full max-w-6xl relative z-10 px-6 md:px-12">
                                <!-- Logo Section -->
                                <div class="w-full md:w-1/2 flex justify-center mt-6 md:mt-0">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/MIW_Website_Assets/Magicinwhite_logo_Main.png"
                                        alt="Magic White Logo"
                                        class="w-40 md:w-72">
                                </div>

                                <!-- Text Section -->
                                <div class="w-full md:w-1/2 text-center md:text-left py-10">
                                    <h1 class="lato-font text-3xl text-white sm:text-4xl md:text-4xl leading-tight uppercase">
                                        From blank slates to bold statements
                                    </h1>
                                    <p class="lato-font w-full md:w-[77%] md:text-lg mt-4 text-[#056b29] text-center md:text-left">
                                        We help brands find their voice. We are a creative studio where innovative design,
                                        thoughtful storytelling, and sharp strategy come together to reimagine brands
                                        and elevate their presence across platforms.
                                    </p>
                                </div>
                            </div>
                        </div>

                    <?php elseif ($slide['type'] === 'image'): ?>
                        <img class="w-full h-full object-cover" src="<?php echo esc_url($slide['url']); ?>"
                            alt="<?php echo esc_attr($slide['title']); ?>"
                            class="w-full h-full"
                            loading="lazy">
                        <div class="absolute inset-0"></div> <!-- optional overlay -->

                    <?php elseif ($slide['type'] === 'video'): ?>
                        <video class="w-full h-full object-cover"
                            src="<?php echo esc_url($slide['url']); ?>"
                            muted loop playsinline preload="metadata" autoplay></video>
                        <div class="absolute inset-0"></div> <!-- optional overlay -->
                    <?php endif; ?>

                </div>
            <?php endforeach; ?>
        </div>


        <!-- Carousel Navigation Dots -->
        <?php if ($has_dynamic_banners): ?>
            <div class="carousel-navigation absolute bottom-6 left-1/2 transform -translate-x-1/2 flex space-x-2 z-20">
                <button class="carousel-dot w-3 h-3 rounded-full bg-white opacity-100 transition-all duration-300 active" data-slide="0" data-type="static"></button>
                <?php foreach ($banner_data as $index => $slide): ?>
                    <button class="carousel-dot w-3 h-3 rounded-full bg-white opacity-50 transition-all duration-300" data-slide="<?php echo $index + 1; ?>" data-type="<?php echo $slide['type']; ?>"></button>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>

        <!-- Hidden data for JavaScript -->
        <script type="application/json" id="carousel-data">
            <?php echo json_encode($banner_data); ?>
        </script>
    </section>


    <!-- Output Gallery -->
    <section class="w-full h-[150dvh]">
        <div class="grid grid-cols-2 sm:grid-cols-5 sm:grid-rows-5 h-full">
            <?php
            $homepage_works = new WP_Query([
                'post_type' => 'work',
                'meta_key' => 'is_homepage',
                'meta_value' => '1',
                'posts_per_page' => -1,
            ]);

            $index = 0;
            $layout_classes = [
                'col-span-1 sm:col-span-2 sm:row-span-2 bg-lime-500',
                'col-span-1 sm:row-span-2 sm:col-start-3 bg-red-700',
                'col-span-2 sm:col-span-2 sm:row-span-2 sm:col-start-4 bg-yellow-500',
                'col-span-1 sm:row-span-2 sm:row-start-3 bg-blue-900',
                'col-span-1 sm:col-span-2 sm:row-span-2 sm:row-start-3 bg-green-700',
                'col-span-2 sm:col-span-2 sm:row-span-2 sm:col-start-4 sm:row-start-3 bg-yellow-500',
                'col-span-1 sm:col-span-2 sm:row-start-5 bg-pink-500',
                'col-span-1 sm:col-start-3 sm:row-start-5 bg-red-700',
                'col-span-2 sm:col-span-2 sm:col-start-4 sm:row-start-5 bg-gray-200'
            ];

            $workDetails = [];

            if ($homepage_works->have_posts()):
                while ($homepage_works->have_posts()): $homepage_works->the_post();
                    $post_id     = get_the_ID();
                    $image_id    = get_post_meta($post_id, 'work_image', true);
                    $video_id    = get_post_meta($post_id, 'work_video', true);
                    $video_thumb_id = get_post_meta($post_id, 'work_video_thumb', true);
                    $heading     = get_post_meta($post_id, 'work_heading', true);
                    $description = get_post_meta($post_id, 'work_description', true);

                    $image_url   = $image_id ? wp_get_attachment_url($image_id) : '';
                    $video_url   = $video_id ? wp_get_attachment_url($video_id) : '';
                    $video_thumb = $video_thumb_id ? wp_get_attachment_url($video_thumb_id) : '';
                    $gallery_raw = get_post_meta($post_id, 'work_gallery', true);
                    $gallery_items = $gallery_raw ? json_decode($gallery_raw, true) : [];

                    $gallery_urls = [];
                    if ($gallery_items && is_array($gallery_items)) {
                        foreach ($gallery_items as $item) {
                            if (!isset($item['type']) || !isset($item['id'])) continue;

                            if ($item['type'] === 'image') {
                                $gallery_urls[] = [
                                    'type' => 'image',
                                    'src'  => wp_get_attachment_url($item['id'])
                                ];
                            } elseif ($item['type'] === 'video') {
                                $gallery_urls[] = [
                                    'type'   => 'video',
                                    'src'    => wp_get_attachment_url($item['id']),
                                    'thumb'  => !empty($item['thumb']) ? wp_get_attachment_url($item['thumb']) : ''
                                ];
                            }
                        }
                    }

                    $image_sources = [];
                    if ($video_url) {
                        $image_sources[] = ['type' => 'video', 'src' => $video_url, 'thumb' => $video_thumb ?: $image_url];
                    } else {
                        $image_sources[] = ['type' => 'image', 'src' => $image_url];
                    }

                    $image_sources = array_merge($image_sources, $gallery_urls);

                    // Store data for JS popup
                    $work_data[] = [
                        'id'           => $post_id,
                        'title'        => $heading,
                        'desc'         => $description,
                        'imageSources' => $image_sources
                    ];

            ?>
                    <div class="grid-item <?php echo $layout_classes[$index % count($layout_classes)]; ?> cursor-pointer overflow-hidden">

                        <?php if ($video_url && $video_thumb): ?>
                            <div class="video-hover-wrapper relative w-full h-full">
                                <!-- Thumbnail -->
                                <img src="<?php echo esc_url($video_thumb); ?>"
                                    alt="<?php echo esc_attr($heading); ?>"
                                    class="video-thumb absolute top-0 left-0 w-full h-full object-contain transition-opacity duration-300">

                                <!-- Video -->
                                <video class="video-player w-full h-full object-contain" onclick="openModal(event, <?php echo esc_js($post_id); ?>)"
                                    muted
                                    preload="metadata"
                                    loop
                                    playsinline>
                                    <source src="<?php echo esc_url($video_url); ?>" type="video/mp4">
                                </video>
                            </div>
                        <?php else: ?>
                            <img src="<?php echo esc_url($image_url); ?>"
                                alt="<?php echo esc_attr($heading); ?>"
                                class="w-full h-full object-contain transition-transform transform hover:scale-110 duration-300" onclick="openModal(event, <?php echo esc_js($post_id); ?>)">
                        <?php endif; ?>
                    </div>

            <?php
                    $index++;
                endwhile;
                wp_reset_postdata();
            endif;
            ?>
        </div>
    </section>




    <!-- Fullscreen Modal -->
    <div id="fullscreen-modal"
        class="fixed top-0 left-0 w-full h-full bg-black bg-opacity-90 hidden flex items-center justify-center z-50"
        onclick="closeFullscreen()">
        <img id="fullscreen-image" class="max-w-full max-h-full" onclick="event.stopPropagation()"
            ondblclick="closeFullscreen()">

        <!-- Close Button (Bottom Right) -->
        <button onclick="closeFullscreen()"
            class="absolute bottom-4 right-4 bg-gray-800 text-white px-4 py-2 text-lg rounded-full shadow-lg hover:bg-gray-700 transition">
            ✖ Close
        </button>
    </div>


    <!--branding-->
    <section class="mx-auto h-auto sm:h-auto bg-white">
        <!-- Top Bar -->
        <div class="bg-[#2226f7] py-10 pb-16 flex flex-col items-center">
            <h2 class="text-white text-lg sm:text-xl font-semibold mb-10 text-center">
                THE COMPANIES WE EMPOWER
            </h2>

            <div class="grid grid-cols-2 sm:grid-cols-5 gap-20 sm:gap-24 px-8 text-center items-center justify-center">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/MIW_Website_Assets/Netflix.png" alt="Netflix"
                    class="h-14 w-28 sm:h-16 sm:w-32 mx-auto object-contain">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/MIW_Website_Assets/Prime.png" alt="Prime Video"
                    class="h-14 w-28 sm:h-16 sm:w-32 mx-auto object-contain">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/MIW_Website_Assets/JioHostar.png" alt="JioHotstar"
                    class="h-14 w-28 sm:h-16 sm:w-32 mx-auto object-contain">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/MIW_Website_Assets/Zee.png" alt="Zee Cinema"
                    class="h-14 w-28 sm:h-16 sm:w-32 mx-auto object-contain">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/MIW_Website_Assets/LYCA.png" alt="Lyca Productions"
                    class="h-14 w-28 sm:h-16 sm:w-32 mx-auto object-contain">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/MIW_Website_Assets/Sony.png" alt="Sony"
                    class="h-14 w-28 sm:h-16 sm:w-32 mx-auto object-contain">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/MIW_Website_Assets/Samsung.png" alt="Samsung"
                    class="h-14 w-28 sm:h-16 sm:w-32 mx-auto object-contain">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/MIW_Website_Assets/Apple.png" alt="Apple"
                    class="h-14 w-28 sm:h-16 sm:w-32 mx-auto object-contain">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/MIW_Website_Assets/Madras_Talkies.png" alt="Madras Talkies"
                    class="h-14 w-28 sm:h-16 sm:w-32 mx-auto object-contain">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/MIW_Website_Assets/Vijay.png" alt="Vijay TV"
                    class="h-14 w-28 sm:h-16 sm:w-32 mx-auto object-contain">
            </div>
        </div>

        <!-- Movie Posters Section -->
        <div class="bg-white min-h-1/2 flex items-center justify-center px-4 py-10 sm:py-24" id="movies-poster">
            <div class="max-w-7xl w-full flex flex-col-reverse lg:flex-row items-center justify-between gap-8">

                <!-- Text Content -->
                <div class="w-full lg:w-1/3 text-center lg:text-left">
                    <h2 class="text-pink-400 text-3xl sm:text-4xl font-bold">MOVIE POSTERS</h2>
                    <p class="text-gray-400 mt-3 max-w-md sm:max-w-lg mx-auto lg:mx-0 text-center lg:text-left">
                        A poster is a cracked-open window into a film’s soul.
                        We design each poster to capture and reflect the essence of its story, inviting viewers in
                        before the first frame even rolls.
                    </p>
                    <button
                        class="uppercase mt-6 bg-pink-500 px-6 py-3 text-white font-semibold hover:bg-pink-600 transition-all shadow-lg"
                        onclick="window.location.href='<?php echo site_url('/work'); ?>'">
                        Explore
                    </button>

                </div>

                <!-- Image Section (Grid for responsiveness) -->
                <div class="w-full grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3">
                    <!-- Left Image -->
                    <a href="#" onclick="event.preventDefault();" class="flex justify-center" data-autoclick>
                        <div class="card mb-20 mt-10 sm:mt-0 sm:mb-0 pb-2 sm:pb-0">
                            <div class="wrapper">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/MIW_Website_Assets/SD-10.png"
                                    class="title object-contain w-full h-60 sm:h-full" />
                            </div>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/MIW_Website_Assets/SD-09.png" class="character character-sm w-full h-72" />
                        </div>
                    </a>

                    <!-- Middle Image (Higher than others) -->
                    <a href="#" onclick="event.preventDefault();" class="flex justify-center" data-autoclick>
                        <div class="card mb-20 sm:mb-0 pb-3 sm:pb-0">
                            <div class="wrapper">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/MIW_Website_Assets/PS-Nandini-01png.png"
                                    class="title object-cover w-full h-72 sm:h-80" />
                            </div>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/MIW_Website_Assets/PS-Nandini-02.png" class="character w-full h-72" />
                        </div>
                    </a>

                    <!-- Right Image -->
                    <a href="#" onclick="event.preventDefault();" class="flex justify-center" data-autoclick>
                        <div class="card mb-20 sm:mb-0">
                            <div class="wrapper">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/MIW_Website_Assets/Kaththi-01.png"
                                    class="title object-contain w-full sm:h-72" />
                            </div>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/MIW_Website_Assets/Kaththi-02.png" class="character w-full h-72" />

                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- iBangle Section -->
    <section
        class="relative overflow-hidden sm:h-[100dvh] [@media(min-width:2560px)]:h-[102dvh] bg-black sm:min-h-screen flex flex-col justify-center px-8 pt-10">
        <div
            class="[@media(min-width:2560px)]:xl:max-w-screen-2xl max-w-6xl w-full mx-auto flex flex-col lg:flex-row items-center justify-between h-full text-white relative">

            <!-- Text Content (Left) -->
            <div class="w-full lg:w-1/2 text-left">
                <h1 class="text-4xl lg:text-6xl font-sf font-medium mb-4 [@media(min-width:2560px)]:text-7xl">Product Design</h1>
                <p class="text-gray-400 text-[14px] sm:text-lg mb-[2vh] sm:mb-[10vh] [@media(min-width:2560px)]:text-[26px]">We create smart, functional
                    product designs, from concept to final prototype.</p>
                <h1 class="text-2xl lg:text-4xl font-sf font-medium mb-1 mt-2 [@media(min-width:2560px)]:text-6xl">ibangle</h1>
                <p class="text-gray-400 text-[15px] sm:text-lg leading-relaxed [@media(min-width:2560px)]:text-[26px]">
                    <br />
                    Long before wearables were a thing, our founder Gopi Prasannaa’s innovative iBangle rewrote the
                    rules of personal audio.
                    <br />
                    <br />
                    This first-of-its-kind, bangle-style iPod, with touch-sensitive controls, virtual earphones, and an
                    adjustable fit, redefined the personal audio experience.
                    It caught global attention, landing on CNN’s 21st Century Visionary list and Yanko Design’s Best of
                    2008. A real game-changer in wearable tech.
                </p>
                <button onclick="openPopupForiBangle()"
                    class="bg-black mt-8 sm:mt-10 border border-white px-12 sm:px-10 py-2 sm:py-3 text-sm sm:text-lg [@media(min-width:2560px)]:px-6 [@media(min-width:2560px)]:py-6
                    [@media(min-width:2560px)]:text-3xl text-white font-medium tracking-wider sm:tracking-wide"
                    onclick="window.location.href='/work.html'">
                    EXPLORE MORE
                </button>
            </div>

            <!-- Image (Bottom-Right) -->
            <div
                class="w-full lg:w-[50%] sm:h-auto flex justify-center lg:justify-end mt-8 lg:mt-0 lg:absolute lg:bottom-0 lg:right-0">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/MIW_Website_Assets/ibangle-asset.png" alt="iBangle Image"
                    class="w-[80%] lg:w-full max-w-md lg:max-w-lg object-contain sm:object-cover sm:h-[40rem] md:h-[55rem] lg:h-[40rem] i-bangle">
            </div>

        </div>
    </section>

    <!--carousel slider-->
    <section id="carousel-section" class="min-h-screen h-auto flex flex-col">
        <div
            class="h-[100dvh] sm:h-[60dvh] md:h-[50dvh] lg:h-[60dvh] relative overflow-hidden bg-[#ffd527] testimonial-section">
            <div class="swiper mySwiper h-full">
                <div class="swiper-wrapper">


                    <?php
                    $args = array(
                        'post_type' => 'testimonial',
                        'posts_per_page' => -1,
                        'meta_key' => 'testimonial_order',
                        'orderby' => 'meta_value_num',
                        'order' => 'ASC'
                    );
                    $loop = new WP_Query($args);
                    if ($loop->have_posts()) :
                        while ($loop->have_posts()) : $loop->the_post();
                            $heading = get_post_meta(get_the_ID(), 'testimonial_heading', true);
                            $description = get_post_meta(get_the_ID(), 'testimonial_description', true);
                            $author = get_post_meta(get_the_ID(), 'testimonial_author', true);
                            $image_id = get_post_meta(get_the_ID(), 'testimonial_image_id', true);
                            $image_url = $image_id ? wp_get_attachment_url($image_id) : '';
                    ?>
                            <div class="swiper-slide">
                                <div
                                    class="container mx-auto px-4 sm:px-6 lg:px-8 h-full flex flex-col md:flex-row items-center justify-center md:justify-between relative [@media(min-width:2560px)]:xl:max-w-screen-2xl lg:max-w-screen-lg gap-6 sm:gap-8 py-8 md:py-12">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/MIW_Website_Assets/doubleqoute_High_Blue_testimonials.png"
                                        class="absolute top-6 left-0 sm:top-8 sm:left-0 md:w-20 lg:w-24 w-12 h-auto hidden xl:block blue-quote"
                                        alt="Quote Top">

                                    <div class="w-full md:w-1/2 text-center md:text-left space-y-3 sm:space-y-4 order-2 md:order-1 mt-0 md:mt-0 testimonaial-text">
                                        <h2 class="text-2xl sm:text-3xl md:text-2xl lg:text-3xl font-bold text-black"><?php echo esc_html($heading); ?></h2>
                                        <p class="text-sm sm:text-base md:text-sm lg:text-lg text-black leading-relaxed">
                                            <?php echo esc_html($description); ?>
                                        </p>
                                        <p class="text-base sm:text-lg md:text-xl italic text-black pt-2 testimonial-author">– <?php echo esc_html($author); ?></p>
                                    </div>

                                    <div class="w-full md:w-1/2 flex justify-center md:justify-end items-end relative order-2 md:order-2 h-[60vh] sm:h-[60vh]">
                                        <div class="relative w-full h-full flex items-end justify-center md:justify-end">
                                            <?php if ($image_url): ?>
                                                <?php
                                                // Check if the image is Atlee's image
                                                $is_atlee = strpos($image_url, '1.png') !== false; // adjust filename
                                                $class_name = $is_atlee ? 'testimonial-image-atlee' : 'testimonial-image';
                                                ?>
                                                <img src="<?php echo esc_url($image_url); ?>"
                                                    class="w-auto h-auto max-h-full object-contain <?php echo esc_attr($class_name); ?>"
                                                    alt="Auth Image">
                                            <?php endif; ?>

                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/MIW_Website_Assets/doubleqoute_low_Yellow_testimonials.png"
                                                class="absolute bottom-8 right-0 sm:right-2 md:right-5 w-12 h-auto sm:w-16 md:w-20 hidden xl:block yellow-quote"
                                                alt="Quote Bottom">
                                        </div>

                                    </div>
                                </div>
                            </div>
                    <?php endwhile;
                        wp_reset_postdata();
                    endif;
                    ?>




                </div>
                <div class="swiper-pagination custom-swiper-pagination !bottom-4 md:!bottom-6"></div>

                <button
                    class="custom-swiper-prev absolute left-2 sm:left-3 md:left-4 top-1/2 -translate-y-1/2 z-10 p-2">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/MIW_Website_Assets/Left_arrow_testimonials.png" alt="Previous"
                        class="w-5 h-5 sm:w-6 sm:h-6 md:w-8 md:h-8">
                </button>
                <button
                    class="custom-swiper-next absolute right-2 sm:right-3 md:right-4 top-1/2 -translate-y-1/2 z-10 p-2">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/MIW_Website_Assets/Right_arrow_testimonials.png" alt="Next"
                        class="w-5 h-5 sm:w-6 sm:h-6 md:w-8 md:h-8">
                </button>

            </div>
        </div>
        <div
            class="bg-white relative w-full flex items-center justify-center overflow-hidden h-[40dvh] hidden sm:flex game-section">
            <div class="absolute bottom-5">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/MIW_Website_Assets/Horse_Game_BG.png" alt="Path Background"
                    class="w-full h-full object-contain">
            </div>

            <!-- Horse (Fixed: Applied absolute positioning to the container) -->
            <div id="horse-container" class="absolute bottom-0 left-80" style="position: absolute; bottom: 0px;">
                <img id="horse" src="<?php echo get_template_directory_uri(); ?>/assets/images/MIW_Website_Assets/Horse_Game.png" alt="Horse"
                    class="w-[150px] sm:w-[200px] md:w-[200px]">
            </div>

            <!-- Obstacle -->
            <!-- <div id="obstacle" class="absolute bottom-0 right-0 bg-red-500 w-[30px] h-[50px]"></div> -->

            <!-- Score -->
            <!-- <p id="score" class="absolute top-5 left-5 text-lg font-bold text-gray-700">play by enter button</p> -->

            <!-- Play Button -->
            <div class="absolute top-10 right-10 sm:right-72 flex items-center gap-4">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/MIW_Website_Assets/Play_button_Game.png" alt="Play" class="w-12 sm:w-16 cursor-pointer"
                    id="play-button">
                <p class="text-sm sm:text-lg md:text-xl text-pink-500 font-semibold text-center sm:text-left">
                    Coming Soon.
                    <!-- Play is the highest form of research. -->
                    <!-- <span class="text-gray-600 ml-2">Albert Einstein</span> -->
                </p>
            </div>
        </div>
    </section>

    <!--Footer-->
    <section class="min-h-screen flex flex-col justify-center items-center bg-pink-500 text-white text-center p-10">
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
                            <h3 class="font-semibold"><a class="hover:text-yellow-400" href="<?php echo site_url('/team'); ?>">TEAM</a></h3>
                            <ul class="space-y-1">
                                <li class="cursor-pointer">
                                    <a class="hover:text-yellow-400" href="/team.html">Meet the Team</a>
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
    <div class="fixed top-10 right-7 flex flex-col z-[50] place-items-center hidden" id="close-popup-button-wrapper">
        <button id="closePopup"
            class="hidden w-9 h-9 flex items-center justify-center text-white bg-gray-800 hover:bg-gray-700 rounded-full text-xl shadow-lg z-50 ">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                class="w-4 h-4">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
        <span class="text-[8px] uppercase text-white hidden md:block">CLOSE</span>

        <button id="workDetailsPageBtn" onclick="goToWorkPage()"
            class="hidden w-9 h-9 flex items-center justify-center text-white bg-gray-800 hover:bg-gray-700 rounded-full text-xl shadow-lg z-50 mt-3">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/MIW_Website_Assets/work-page-button.png" alt="Details" class="w-3 h-3 object-contain">
        </button>
        <span class="text-[8px] uppercase text-white leading-[12px] hidden md:block whitespace-nowrap">WORK
            PAGE</span>
    </div>


    <div id="work-details-popup"
        class="hidden fixed inset-0 bg-black bg-opacity-65 flex items-center justify-center px-4 pb-16">

        <div
            class="relative bg-white rounded-lg sm:w-[50%] w-auto max-h-[90vh] px-2 overflow-y-auto shadow-xl mt-16">

            <div class="p-6">
                <div class="flex justify-between items-start">
                    <h2 class="text-2xl font-bold" id="details-pop-header"></h2>
                </div>

                <p class="text-gray-600 mt-2 " id="details-pop-desc">

                </p>
            </div>

            <div class="space-y-8 px-6 pb-6" id="details-pop-img-contents">
            </div>
        </div>
    </div>

    <!-- Fullscreen Image Modal -->
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

            <img id="fullscreen-img" src="" alt="Zoomed" class="max-w-[90vw] max-h-[90vh] rounded-lg shadow-2xl ">
        </div>
    </div>

    <!-- ibangle -->

    <!-- <div class="fixed top-10 right-7 flex flex-col place-items-center hidden z-[1000]"
        id="close-popup-button-wrapper-ibangle">
        <button id="closePopupBangle"
            class="hidden w-9 h-9 flex items-center justify-center text-white bg-gray-800 hover:bg-gray-700 rounded-full text-xl shadow-lg z-50 ">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                class="w-4 h-4">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
        <span class="text-[8px] uppercase text-white hidden md:block">CLOSE</span>

    </div> -->


    <div id="i-bangle-popup"
        class="hidden fixed inset-0 bg-black/50 backdrop-blur-md flex items-center justify-center px-4 pb-16 z-[900]">
        <div class="relative bg-transperant rounded-lg w-full max-h-[95vh] overflow-y-auto mt-16 no-scrollbar">
            <div id="videoContainer"></div>
        </div>
    </div>
    <div id="fullscreen-image-modal-ibangle"
        class="hidden fixed inset-0 bg-transperant bg-opacity-90 flex items-center justify-center z-[1000]">
        <div class="relative">
            <button onclick="closeFullscreenImageIbangel()"
                class="hidden sm:flex absolute -top-6 -right-4 sm:-top-6 sm:-right-12 w-10 h-10 flex items-center justify-center text-white bg-gray-800 hover:bg-gray-700 rounded-full text-xl shadow-lg z-50">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                    class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>

            <img id="fullscreen-img-ibangle" src="" alt="Zoomed"
                class="max-w-[90vw] max-h-[90vh] rounded-lg shadow-2xl ">
        </div>
    </div>


    <!--Script Starts-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script type="module" src="/main.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/video.js/8.6.1/video.min.js"></script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            document.querySelectorAll(".video-hover-wrapper").forEach(wrapper => {
                const video = wrapper.querySelector(".video-player");
                const thumb = wrapper.querySelector(".video-thumb");

                wrapper.addEventListener("mouseenter", () => {
                    thumb.style.opacity = "0";
                    video.currentTime = 0;
                    video.play();
                });

                wrapper.addEventListener("mouseleave", () => {
                    video.pause();
                    video.currentTime = 0;
                    thumb.style.opacity = "1";
                });
            });
        });
    </script>

    <script>
        const swiper = new Swiper('.mySwiper', {
            // Optional parameters
            direction: 'horizontal',
            loop: true,
            grabCursor: true,
            effect: 'slide', // 'slide', 'fade', 'cube', 'coverflow', 'flip'

            // Pagination
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },

            // Navigation arrows
            navigation: {
                nextEl: '.custom-swiper-next',
                prevEl: '.custom-swiper-prev',
            },

            // Responsive breakpoints
            breakpoints: {
                // when window width is >= 320px
                320: {
                    slidesPerView: 1,
                    spaceBetween: 20
                },
                // when window width is >= 768px
                768: {
                    slidesPerView: 1,
                    spaceBetween: 30
                },
                // when window width is >= 1024px
                1024: {
                    slidesPerView: 1,
                    spaceBetween: 40
                }
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

        // document.addEventListener("readystatechange", () => {
        //     if (document.readyState === "complete") {
        //         document.getElementById("loader").classList.add("hidden");
        //     }
        // });
    </script>
    <script>
        function goToWorkPage() {
            window.location.href = '<?php echo site_url('/work'); ?>';
        }


        const workDetails = <?php echo wp_json_encode($work_data); ?>;


        // Detail modal
        const popup = document.getElementById("work-details-popup");
        const closePopup = document.getElementById("closePopup");
        const workDetailsPageBtn = document.getElementById("workDetailsPageBtn");
        const closPopupButtonWrapper = document.getElementById("close-popup-button-wrapper");

        const detailsHeader = document.getElementById("details-pop-header");
        const detailsImageSrc = document.getElementById("details-pop-img-contents");
        const detailsPopupDescription = document.getElementById("details-pop-desc");

// ✅ Close popup when clicking backdrop only
document.getElementById("work-details-popup").addEventListener("click", (e) => {
    if (e.target !== e.currentTarget) return; // only backdrop
    const modalContent = popup.querySelector("div.relative");
    gsap.to(modalContent, {
        opacity: 0,
        scale: 0.9,
        duration: 0.3,
        ease: "power3.in",
        onComplete: () => {
            closePopup.classList.add('hidden');
            workDetailsPageBtn.classList.add('hidden');
            closPopupButtonWrapper.classList.add('hidden');

            popup.classList.add("hidden");

            // allow scroll only if fullscreen is NOT open
            const fullscreen = document.getElementById("fullscreen-image-modal");
            if (fullscreen.classList.contains("hidden")) {
                document.body.classList.remove("overflow-hidden");
            }
        },
    });
});

// ✅ Escape closes fullscreen first, then popup
document.addEventListener("keydown", (e) => {
    if (e.key === "Escape" || e.keyCode === 27) {
        const fullscreen = document.getElementById("fullscreen-image-modal");
        if (!fullscreen.classList.contains("hidden")) {
            closeFullscreenImage(); // only fullscreen close
            return;
        }

        if (!popup.classList.contains("hidden")) {
            const modalContent = popup.querySelector("div.relative");
            gsap.to(modalContent, {
                opacity: 0,
                scale: 0.9,
                duration: 0.3,
                ease: "power3.in",
                onComplete: () => {
                    closePopup.classList.add('hidden');
                    workDetailsPageBtn.classList.add('hidden');
                    closPopupButtonWrapper.classList.add('hidden');

                    popup.classList.add("hidden");
                    document.body.classList.remove("overflow-hidden");
                },
            });
        }
    }
});

// ✅ Close button only closes main popup
closePopup.addEventListener("click", (e) => {
    e.stopPropagation(); // prevent bubbling
    const modalContent = popup.querySelector("div.relative");
    gsap.to(modalContent, {
        opacity: 0,
        scale: 0.9,
        duration: 0.3,
        ease: "power3.in",
        onComplete: () => {
            closePopup.classList.add('hidden');
            workDetailsPageBtn.classList.add('hidden');
            closPopupButtonWrapper.classList.add('hidden');

            popup.classList.add("hidden");

            // allow scroll only if fullscreen is NOT open
            const fullscreen = document.getElementById("fullscreen-image-modal");
            if (fullscreen.classList.contains("hidden")) {
                document.body.classList.remove("overflow-hidden");
            }
        },
    });
});

        // Function to open the modal
        const openModal = (event, id) => {
            // Prevent default behavior of the anchor tag
            if (event) {
                event.preventDefault();
            }
            const data = workDetails.find(i => i.id == id);
            if (!data) return;

            detailsHeader.textContent = data.title;
            detailsPopupDescription.textContent = data.desc;

            detailsImageSrc.innerHTML = '';

            // Append new images based on the `imageSources` array
            data.imageSources.forEach(item => {
                if (item.type === 'image') {
                    const img = document.createElement('img');
                    img.src = item.src;
                    img.alt = data.title;
                    img.className = 'w-full h-auto rounded-md cursor-zoom-in transition min-h-[400px] object-cover sm:min-h-0 sm:object-contain';
                    img.onclick = () => openFullscreenImage(item.src);
                    detailsImageSrc.appendChild(img);

                } else if (item.type === 'video') {
                    const wrapper = document.createElement('div');
                    wrapper.className = 'relative w-full cursor-pointer';

                    const thumb = document.createElement('img');
                    thumb.src = item.thumb || '';
                    thumb.alt = data.title;
                    thumb.className = 'w-full h-auto rounded-md object-cover';
                    if (!thumb.src) {
                        // Fallback to using the video poster frame
                        thumb.src = item.src + '#t=1';
                    }

                    const playBtn = document.createElement('div');
                    playBtn.className = 'absolute inset-0 flex items-center justify-center text-white text-4xl bg-black bg-opacity-30 rounded-md';
                    playBtn.innerHTML = '▶';

                    // Click anywhere in wrapper to start video
                    wrapper.onclick = () => {
                        wrapper.innerHTML = '';
                        const video = document.createElement('video');
                        video.src = item.src;
                        video.controls = true;
                        video.autoplay = true;
                        video.className = 'w-full h-auto rounded-md';
                        wrapper.appendChild(video);
                    };

                    wrapper.appendChild(thumb);
                    wrapper.appendChild(playBtn);
                    detailsImageSrc.appendChild(wrapper);
                }
            });

            // Show the popup
            const modalContent = popup.querySelector("div.relative");
            popup.classList.remove("hidden");
            closePopup.classList.remove('hidden');
            workDetailsPageBtn.classList.remove('hidden');
            closPopupButtonWrapper.classList.remove('hidden');

            // Disable background scrolling
            document.body.classList.add("overflow-hidden");
            gsap.fromTo(
                modalContent, {
                    opacity: 0,
                    scale: 0.9
                }, // Start state
                {
                    opacity: 1,
                    scale: 1,
                    duration: 0.5,
                    ease: "power3.out"
                } // End state
            );



        };


        // Function to close the modal


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

        // Close modal when clicking outside image (only if screen width < 776px)
        document.getElementById("fullscreen-image-modal").addEventListener("click", (e) => {
            closeFullscreenImage();
        });

        document.addEventListener("keydown", (e) => {
            if (e.key === "Escape" || e.keyCode === 27) {
                closeFullscreenImage();
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
        document.addEventListener('DOMContentLoaded', function() {
            let isMobileView = window.innerWidth <= 450;
            const cards = document.querySelectorAll('.card');

            function enableMobileInteraction() {
                checkCardsInCenter(cards);
                window.addEventListener('scroll', onScroll, {
                    passive: true
                });
            }

            function disableMobileInteraction() {
                window.removeEventListener('scroll', onScroll);
                cards.forEach(card => card.classList.remove('mobile-hover'));
            }

            function onScroll() {
                checkCardsInCenter(cards);
            }

            function checkCardsInCenter(cards) {
                cards.forEach(card => {
                    if (isElementInCenterOfViewport(card)) {
                        card.classList.add('mobile-hover');
                    } else {
                        card.classList.remove('mobile-hover');
                    }
                });
            }

            function isElementInCenterOfViewport(element) {
                const rect = element.getBoundingClientRect();
                const windowHeight = window.innerHeight;
                const elementCenter = rect.top + rect.height / 2;
                const viewportCenter = windowHeight / 2;
                return Math.abs(elementCenter - viewportCenter) < 150;
            }

            // Initial behavior
            if (isMobileView) {
                enableMobileInteraction();
            }

            // Handle resize to switch between mobile and desktop views
            window.addEventListener('resize', function() {
                const nowMobile = window.innerWidth <= 450;
                if (nowMobile !== isMobileView) {
                    isMobileView = nowMobile;
                    if (isMobileView) {
                        enableMobileInteraction();
                    } else {
                        disableMobileInteraction();
                    }
                }
            });
        });


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
        function openFullscreen(imageSrc) {
            const modal = document.getElementById("fullscreen-modal");
            const img = document.getElementById("fullscreen-image");
            img.src = imageSrc;
            modal.classList.remove("hidden");
        }

        function closeFullscreen() {
            document.getElementById("fullscreen-modal").classList.add("hidden");
        }

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
        let horseContainer = document.getElementById("horse-container");
        let obstacle = document.getElementById("obstacle");
        let scoreDisplay = document.getElementById("score");
        let playButton = document.getElementById("play-button");

        let score = 0;
        let isJumping = false;
        let gameRunning = false;
        let gameInterval;

        // Prevent page scrolling when pressing Enter or Space
        window.addEventListener("keydown", function(e) {
            if (e.key === " " || e.key === "Enter") {
                e.preventDefault();
            }
        });

        // Start game
        playButton.addEventListener("click", startGame);

        function startGame() {
            if (gameRunning) return;
            gameRunning = true;
            score = 0;
            scoreDisplay.textContent = "Score: 0";

            horseContainer.style.bottom = "0px";
            obstacle.style.right = "0px";


            gameInterval = setInterval(() => {
                moveObstacle();
                checkCollision();
            }, 20);
        }

        function moveObstacle() {
            let obstacleLeft = parseInt(window.getComputedStyle(obstacle).getPropertyValue("right"));
            if (obstacleLeft < window.innerWidth) {
                obstacle.style.right = (obstacleLeft + 5) + "px";
            } else {
                obstacle.style.right = "30px";
                score++;
                scoreDisplay.textContent = "Score: " + score;
            }
        }

        // Jump function
        document.addEventListener("keydown", function(event) {
            if (event.key === "Enter" && !isJumping && gameRunning) {
                isJumping = true;
                let jumpHeight = 120;
                let jumpSpeed = 35;

                let up = setInterval(() => {
                    let horseBottom = parseInt(window.getComputedStyle(horseContainer).getPropertyValue("bottom"));
                    if (horseBottom < jumpHeight) {
                        horseContainer.style.bottom = (horseBottom + 5) + "px";
                    } else {
                        clearInterval(up);
                        let down = setInterval(() => {
                            let horseBottom = parseInt(window.getComputedStyle(horseContainer).getPropertyValue("bottom"));
                            if (horseBottom > 0) {
                                horseContainer.style.bottom = (horseBottom - 5) + "px";
                            } else {
                                clearInterval(down);
                                isJumping = false;
                            }
                        }, jumpSpeed);
                    }
                }, jumpSpeed);
            }
        });

        // Jump function for mobile (touch support only)
        document.addEventListener("touchstart", function() {
            if (!isJumping && gameRunning) {
                isJumping = true;
                let jumpHeight = 120;
                let jumpSpeed = 25;

                let up = setInterval(() => {
                    let horseBottom = parseInt(window.getComputedStyle(horseContainer).getPropertyValue("bottom"));
                    if (horseBottom < jumpHeight) {
                        horseContainer.style.bottom = (horseBottom + 5) + "px";
                    } else {
                        clearInterval(up);
                        let down = setInterval(() => {
                            let horseBottom = parseInt(window.getComputedStyle(horseContainer).getPropertyValue("bottom"));
                            if (horseBottom > 0) {
                                horseContainer.style.bottom = (horseBottom - 5) + "px";
                            } else {
                                clearInterval(down);
                                isJumping = false;
                            }
                        }, jumpSpeed);
                    }
                }, jumpSpeed);
            }
        });


        function checkCollision() {
            let horseRect = horseContainer.getBoundingClientRect();
            let obstacleRect = obstacle.getBoundingClientRect();
            let horseBottom = parseInt(window.getComputedStyle(horseContainer).getPropertyValue("bottom"));

            // Ensure collision only when horse is low enough to hit the obstacle
            if (
                horseRect.left < obstacleRect.right &&
                horseRect.right > obstacleRect.left &&
                horseBottom <= 40
            ) {
                gameOver();
            }
        }

        function gameOver() {
            clearInterval(gameInterval);
            gameRunning = false;
            alert("Game Over! Score: " + score);
            document.location.reload();
        }
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
                const innerDiv = currentSection.querySelector('#movies-poster');
                let divRect;
                if (innerDiv) {
                    divRect = innerDiv.getBoundingClientRect();
                }

                if (currentSection.id === 'banner-section' || currentSection.id === 'carousel-section' || (innerDiv && divRect && divRect.top <= 80 && divRect.bottom > 0)) {
                    logo.style.filter = "invert(1)";
                    menuIcon.style.filter = "invert(1)";
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


    <script>
        const imageData = {
            title: "Dramila: The Kombucha Shop",
            description: "This is a sample paragraph for Dramila's kombucha shop popup. You can update this content as needed.",
            images: [
                "/our_works/ibangles/ibangle1.jpg",
                "/our_works/ibangles/ibangle2.jpg",
                "/our_works/ibangles/ibangle3.jpg",
                "/our_works/ibangles/ibangle4.jpg"
            ]
        };

        const iBanglePopup = document.getElementById('i-bangle-popup');
        // const closePopupBangle = document.getElementById('closePopupBangle');
        const detailsHeaderIbangle = document.getElementById('details-pop-header-ibangle');
        const detailsDescIbangle = document.getElementById('details-pop-desc-ibangle');
        const detailsImgContainerIbangle = document.getElementById('details-pop-img-contents-i-bangle');
        // const closPopupButtonWrapperibangle = document.getElementById("close-popup-button-wrapper-ibangle");
        let player;

        function openPopupForiBangle() {
            // detailsHeaderIbangle.textContent = 'iBangle';
            // detailsDescIbangle.textContent = 'The iBangle, designed by Gopi Prasannaa in 2008, was the first-of-its-kind wearable music device, conceptualized long before Apple introduced wearables.';

            // detailsImgContainerIbangle.innerHTML = '';

            // imageData.images.forEach(src => {
            //     const img = document.createElement('img');
            //     img.src = src;
            //     img.className = 'w-full h-auto rounded-md cursor-zoom-in transition group-hover:opacity-90 min-h-[400px] object-cover sm:min-h-0 sm:object-contain';
            //     img.onclick = () => openFullscreenImageIbangle(src);
            //     detailsImgContainerIbangle.appendChild(img);
            // });

            const modalContent = iBanglePopup.querySelector("div.relative");
            iBanglePopup.classList.remove('hidden');
            // closePopupBangle.classList.remove('hidden');
            document.body.classList.add("overflow-hidden");
            // closPopupButtonWrapperibangle.classList.remove('hidden');


            // Animate opening
            gsap.fromTo(modalContent, {
                opacity: 0,
                scale: 0.9
            }, {
                opacity: 1,
                scale: 1,
                duration: 0.5,
                ease: "power3.out"
            });

            if (!player) {
                loadVideo();
            } else {
                player.play();
            }
        }

        function loadVideo() {
            const videoContainer = document.getElementById('videoContainer');
            videoContainer.innerHTML = `
    <div class="relative w-full sm:max-w-6xl mx-auto px-2">
        <!-- Close Button Inside Video -->
        <div id="close-popup-button-wrapper-ibangle"
             class="absolute top-0 lg:right-[-2rem] right-0 flex flex-col items-center z-50">
            <button id="closePopupBangle"
                    onclick="closePopupForiBangle()"
                    class="w-9 h-9 flex items-center justify-center text-white bg-gray-800 hover:bg-gray-700 rounded-full text-xl shadow-lg">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                     class="w-4 h-4">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
            <span class="text-[8px] uppercase text-white hidden md:inline">CLOSE</span>
        </div>

        <!-- Video Player -->
        <video
            id="videoPlayer"
            class="video-js vjs-default-skin rounded-lg overflow-hidden w-full"
            controls
            autoplay
            preload="none"
            data-setup='{}'>
        </video>
    </div>
`;

            player = videojs('videoPlayer', {
                fluid: true,
                responsive: true,

                playbackRates: [0.5, 1, 1.25, 1.5, 2],
                sources: [{
                    src: "<?php echo get_template_directory_uri(); ?>/assets/videos/ibangle_product.mp4",
                    type: 'video/mp4'
                }]
            });

            // Auto-play when loaded
            player.ready(() => {
                player.play();
            });

        }

        function closePopupForiBangle() {
            const popup = document.getElementById('i-bangle-popup');
            if (popup) {
                popup.classList.add('hidden');
            }

            // Destroy player and clear video HTML
            if (typeof player !== 'undefined' && player !== null) {
                player.dispose(); // Completely stop and remove
                player = null;
                document.getElementById('videoContainer').innerHTML = '';
            }

            // Restore body scroll
            document.body.classList.remove("overflow-hidden");
        }

        // Close on outside click
        document.getElementById("i-bangle-popup").addEventListener("click", (e) => {
            // only close if clicked on the backdrop, not inside the modal content
            if (e.target.id === "i-bangle-popup") {
                closePopupForiBangle();
            }
        });

        // Close on ESC key
        document.addEventListener("keydown", (e) => {
            if (e.key === "Escape" || e.keyCode === 27) {
                closePopupForiBangle();
            }
        });




        function openFullscreenImageIbangle(src) {
            const modal = document.getElementById('fullscreen-image-modal-ibangle');
            const image = document.getElementById('fullscreen-img-ibangle');
            image.src = src;
            modal.classList.remove('hidden');
            document.body.classList.add("overflow-hidden"); // Prevent scrolling
        }

        function closeFullscreenImageIbangel() {
            const modal = document.getElementById('fullscreen-image-modal-ibangle');
            modal.classList.add('hidden');
            document.getElementById('fullscreen-img-ibangle').src = '';
            document.body.classList.remove("overflow-hidden");
        }

        // Close modal when clicking outside image (only if screen width < 776px)
        document.getElementById("fullscreen-image-modal-ibangle").addEventListener("click", (e) => {
            closeFullscreenImageIbangel();
            // if (window.innerWidth < 776 && !e.target.closest("img")) {
            // }
        });
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const slides = document.querySelectorAll('.banner-slide');
            const dots = document.querySelectorAll('.carousel-dot');
            const carouselData = JSON.parse(document.getElementById('carousel-data').textContent);

            let currentSlide = 0;
            let slideInterval;
            let isCarouselActive = false;
            let dynamicSlideIndex = 0; // Track which dynamic slide we're on

            // If no dynamic banners, stay on static
            if (carouselData.length === 0) {
                return;
            }

            function preloadDynamicMedia() {
                const promises = [];

                carouselData.forEach((slide, index) => {
                    const slideElement = slides[index + 1]; // +1 because static is at index 0
                    if (slide.type === 'image') {
                        const img = slideElement.querySelector('img');
                        if (img) {
                            const promise = new Promise((resolve) => {
                                if (img.complete) {
                                    resolve();
                                } else {
                                    img.onload = resolve;
                                    img.onerror = resolve;
                                }
                            });
                            promises.push(promise);
                        }
                    } else if (slide.type === 'video') {
                        const video = slideElement.querySelector('video');
                        if (video) {
                            const promise = new Promise((resolve) => {
                                if (video.readyState >= 1) {
                                    resolve();
                                } else {
                                    video.onloadedmetadata = resolve;
                                    video.onerror = resolve;
                                }
                            });
                            promises.push(promise);
                        }
                    }
                });

                return Promise.all(promises);
            }

            function showSlide(index, dotIndex = null) {
                slides.forEach((slide, i) => {
                    slide.classList.toggle('active', i === index);
                });

                // Update dots - use dotIndex if provided, otherwise calculate
                const activeDotIndex = dotIndex !== null ? dotIndex : (index === 0 ? 0 : index);
                dots.forEach((dot, i) => {
                    dot.classList.toggle('active', i === activeDotIndex);
                });

                // Handle video playback
                const currentSlideElement = slides[index];
                const video = currentSlideElement.querySelector('video');

                // Pause all videos first
                slides.forEach(slide => {
                    const vid = slide.querySelector('video');
                    if (vid) vid.pause();
                });

                // Play current video if exists
                if (video) {
                    video.currentTime = 0;
                    video.play().catch(e => console.log('Video play failed:', e));
                }

                currentSlide = index;
            }

            function nextSlide() {
                if (!isCarouselActive) return;

                if (currentSlide === 0) {
                    // From static, go to first dynamic
                    dynamicSlideIndex = 0;
                    showSlide(1, 1);
                } else {
                    // Cycle through dynamic banners
                    dynamicSlideIndex = (dynamicSlideIndex + 1) % carouselData.length;

                    // After all dynamic banners, go back to static
                    if (dynamicSlideIndex === 0 && currentSlide !== 1) {
                        showSlide(0, 0);
                    } else {
                        const slideIndex = dynamicSlideIndex + 1;
                        const dotIndex = dynamicSlideIndex + 1;
                        showSlide(slideIndex, dotIndex);
                    }
                }
            }

            function startCarousel() {
                if (!isCarouselActive || carouselData.length === 0) return;
                slideInterval = setInterval(nextSlide, 5000);
            }

            function stopCarousel() {
                clearInterval(slideInterval);
            }

            function initializeCarousel() {
                // Add click handlers to dots
                dots.forEach((dot, index) => {
                    dot.addEventListener('click', () => {
                        stopCarousel();

                        if (index === 0) {
                            // Static slide clicked
                            showSlide(0, 0);
                        } else {
                            // Dynamic slide clicked
                            dynamicSlideIndex = index - 1;
                            showSlide(index, index);
                        }

                        // Restart carousel
                        isCarouselActive = true;
                        startCarousel();
                    });
                });

                // Start with static slide
                showSlide(0, 0);

                // Pause on hover
                const bannerSection = document.getElementById('banner-section');
                bannerSection.addEventListener('mouseenter', stopCarousel);
                bannerSection.addEventListener('mouseleave', () => {
                    if (isCarouselActive) {
                        startCarousel();
                    }
                });

                // After 3 seconds, start the full carousel cycle
                setTimeout(() => {
                    isCarouselActive = true;
                    startCarousel();
                }, 3000);
            }

            // Preload dynamic media and start carousel
            preloadDynamicMedia().then(() => {
                initializeCarousel();
            });
        });
    </script>
</body>

</html>