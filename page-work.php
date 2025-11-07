<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/svg+xml" href="/icon.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Work</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&display=swap" rel="stylesheet">

    <style>
        html {
            scroll-behavior: smooth;
        }

        img {
            -webkit-user-drag: none;
            /* Works in WebKit browsers like Chrome and Safari */
            user-select: none;
            /* Prevents text selection */
            -webkit-touch-callout: none;
            /* Disables callout menu on iOS */
        }

        body {
            font-family: 'Lato', sans-serif;
            overflow-x: hidden;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        .bg-horse {
            background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/our_works/HEADER.png');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: right;
            min-height: 65dvh;
            /* Better for centering on all screens */
            width: 100%;
            display: flex;
        }

        @media (max-width: 768px) {
            .bg-horse {
                min-height: 50dvh;
                background-position: center right;
            }
        }

        @media (max-width: 425px) {
            .bg-horse {
                min-height: 40dvh;
                background-position: center right;
            }
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

        .no-pointer-events {
            pointer-events: none;
            /* Disables mouse interactions, including clicks */
        }

        .races {
            width: fit-content;
            display: flex;
            flex-wrap: nowrap;
            /* pointer-events: none; */
        }

        .spacer {
            width: 100vh;
            /* Adjust to control extra space */
            flex-shrink: 0;
        }

        @media (max-width: 767px) {
            .spacer {
                width: 30vh;
            }


        }

        .custom-underline {
            position: relative;
            padding-bottom: 4px;
            /* spacing below text */
            background: transparent;
            outline: none;
            border: none;
        }

        .custom-underline::after {
            content: "";
            position: absolute;
            bottom: 0;
            left: 50%;
            width: 0;
            height: 2px;
            background-color: #c5c6c7;
            transition: all 0.3s ease-in-out;
            transform: translateX(-50%);
        }

        .custom-underline:hover::after {
            width: 100%;
        }

        .custom-underline.text-black::after {
            width: 100%;
            background-color: #000
        }

        .hide-scrollbar::-webkit-scrollbar {
            display: none;
        }

        .hide-scrollbar {
            -ms-overflow-style: none;
            /* IE and Edge */
            scrollbar-width: none;
            /* Firefox */
        }

        [data-scroll-container] {
            opacity: 1 !important;
            visibility: visible !important;
        }

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

        .banner-text {
            text-align: right;
            font-size: 32px;
            line-height: 2rem;
            font-weight: 500;
        }

        @media (max-height: 600px) {
            .bg-horse {
                min-height: 500px;
            }

            .absolute.text-white.right-5.bottom-\[30vh\].mt-\[80px\] {
                margin-top: 120px;
            }
        }

        .load-more {
            color: #EC4899;
            font-size: 18px;
        }
    </style>
</head>

<body oncontextmenu="return false; data-scroll-container">
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
                    class="text-black-700 font-bold text-2xl transition-transform duration-500 ease-out scale-125 hover:scale-125 hover:font-bold block green">
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

    <!--Main Content-->
    <!-- Main Page -->
    <section class="relative w-full flex items-end justify-end bg-black bg-horse h-screen">
        <!-- Overlay with dark blue -->

        <div class="absolute text-white right-5 bottom-[33vh] mt-[80px]">
            <h1 class="banner-text uppercase">
                We will allow<br /> our work speak<br /> for itself
                <!-- We belive that <br /> INTELLIGENT creative<br /> THINKING helps<br /> ORGANISATIONS and
                <br />INDIVIDUALS to grow -->
            </h1>
        </div>
    </section>

    <?php
    // Step 1: Get Terms in Custom Order
    $terms = get_terms([
        'taxonomy'   => 'work_category',
        'hide_empty' => true,
    ]);

    $custom_order = [
        'film-posters',
        'branding',
        'advertising',
        'events',
        'products',
        'title-animation'
    ];

    usort($terms, function ($a, $b) use ($custom_order) {
        $pos_a = array_search($a->slug, $custom_order);
        $pos_b = array_search($b->slug, $custom_order);
        $pos_a = $pos_a === false ? PHP_INT_MAX : $pos_a;
        $pos_b = $pos_b === false ? PHP_INT_MAX : $pos_b;
        return $pos_a - $pos_b;
    });
    ?>

    <!-- Tabs -->
    <div class="mt-8 mb-8 px-4 py-3 flex justify-center">
        <div class="flex items-center space-x-4 overflow-x-auto whitespace-nowrap scroll-smooth hide-scrollbar">
            <span class="flex items-center flex-shrink-0 font-semibold text-blue-600">
                Work <span class="mx-2 w-12 border-t border-black"></span>
            </span>
            <?php foreach ($terms as $index => $term): ?>
                <button class="tab-item custom-underline <?php echo $index === 0 ? 'text-black' : 'text-gray-400'; ?> flex-shrink-0 cursor-pointer pb-0"
                    data-tab="<?php echo esc_attr($term->slug); ?>" data-page="1">
                    <?php echo esc_html($term->name); ?>
                </button>
            <?php endforeach; ?>
        </div>
    </div>

    <?php
    // Step 2: Load first 6 items per category
    foreach ($terms as $index => $term):
        $is_film_poster = strtolower($term->name) === 'film posters';

        $per_page = 8;
        $paged    = max(1, get_query_var('paged') ?: 1);

        // First, get IDs with display_order
        $with_order = get_posts([
            'post_type'      => 'work',
            'tax_query'      => [[
                'taxonomy' => 'work_category',
                'field'    => 'slug',
                'terms'    => $term->slug
            ]],
            'posts_per_page' => -1,
            'fields'         => 'ids',
            'meta_key'       => 'display_order',
            'orderby'        => 'meta_value_num',
            'order'          => 'ASC',
            'meta_query'     => [['key' => 'display_order', 'compare' => 'EXISTS']]
        ]);

        // Then, get IDs without display_order
        $without_order = get_posts([
            'post_type'      => 'work',
            'tax_query'      => [[
                'taxonomy' => 'work_category',
                'field'    => 'slug',
                'terms'    => $term->slug
            ]],
            'posts_per_page' => -1,
            'fields'         => 'ids',
            'orderby'        => 'date',
            'order'          => 'DESC',
            'meta_query'     => [
                'relation' => 'OR',
                ['key' => 'display_order', 'compare' => 'NOT EXISTS'],
                ['key' => 'display_order', 'value' => '', 'compare' => '=']
            ]
        ]);

        // Merge IDs: ordered first, then unordered
        $all_ids = array_values(array_unique(array_merge($with_order, $without_order)));

        // Pagination
        $offset    = ($paged - 1) * $per_page;
        $paged_ids = array_slice($all_ids, $offset, $per_page);

        // Final query, preserving custom order
        $works = new WP_Query([
            'post_type'      => 'work',
            'post__in'       => $paged_ids,
            'orderby'        => 'post__in',
            'posts_per_page' => $per_page,
            'paged'          => $paged
        ]);

        // 🔑 Fix pagination so load more button knows total pages
        $total_posts          = count($all_ids);
        $works->found_posts   = $total_posts;
        $works->max_num_pages = ceil($total_posts / $per_page);


        if (!$works->have_posts()) continue;
    ?>

        <section
            class="px-4 py-0 <?php echo $is_film_poster ? 'sm:px-[32vh]' : 'sm:px-32'; ?> sm:py-4 tab-section <?php echo $index === 0 ? 'block' : 'hidden'; ?> bg-white mb-8"
            id="<?php echo esc_attr($term->slug); ?>"
            data-term="<?php echo esc_attr($term->slug); ?>"
            data-page="1">

            <div class="<?php echo $is_film_poster ? 'grid gap-3 grid-cols-2 sm:grid-cols-2 lg:grid-cols-4' : 'grid grid-cols-1 md:grid-cols-2 gap-8'; ?>" data-scroll-section>
                <?php while ($works->have_posts()): $works->the_post();
                    $post_id     = get_the_ID();
                    $heading     = get_post_meta($post_id, 'work_heading', true);
                    $description = get_post_meta($post_id, 'work_description', true);
                    $image_id    = get_post_meta($post_id, 'work_image', true);
                    $video_id    = get_post_meta($post_id, 'work_video', true);
                    $video_thumb_id = get_post_meta($post_id, 'work_video_thumb', true);

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


                    <?php if ($is_film_poster): ?>
                        <div class="flip-card">
                            <?php if ($video_url): ?>
                                <video
                                    class="w-full h-full object-contain filter grayscale hover:grayscale-0 transition duration-300 cursor-pointer"
                                    onclick="openFullscreenImage('<?php echo esc_url($image_url); ?>')"
                                    poster=" <?php echo esc_url($video_thumb ?: $image_url); ?>"
                                    muted preload="none">
                                    <source src="<?php echo esc_url($video_url); ?>" type="video/mp4">
                                </video>
                            <?php elseif ($image_url): ?>
                                <img src="<?php echo esc_url($image_url); ?>" alt="<?php echo esc_attr($heading); ?>"
                                    class="w-full h-full object-contain filter grayscale hover:grayscale-0 transition duration-300 cursor-pointer"
                                    onclick="openFullscreenImage('<?php echo esc_url($image_url); ?>')">
                            <?php endif; ?>
                        </div>
                    <?php else: ?>
                        <div class="flex flex-col md:justify-between">
                            <div class="order-1 md:order-3 w-full h-[300px] sm:h-[350px] md:h-[400px] lg:h-[500px] flex items-center justify-center overflow-hidden">
                                <?php if ($video_url): ?>
                                    <video
                                        class="w-full h-full object-cover filter grayscale hover:grayscale-0 transition duration-300 cursor-pointer" onclick="openWorkModal(event, '<?php echo esc_js($post_id); ?>')"
                                        poster="<?php echo esc_url($video_thumb ?: $image_url); ?>"
                                        muted preload="none">
                                        <source src="<?php echo esc_url($video_url); ?>" type="video/mp4">
                                    </video>
                                <?php elseif ($image_url): ?>
                                    <img src="<?php echo esc_url($image_url); ?>" alt="<?php echo esc_attr($heading); ?>"
                                        class="w-full h-full object-cover filter grayscale hover:grayscale-0 transition duration-300 cursor-pointer" onclick="openWorkModal(event, '<?php echo esc_js($post_id); ?>')">
                                <?php endif; ?>
                            </div>
                            <h3 class="order-2 md:order-1 text-base md:text-2xl font-bold uppercase mt-2"><?php echo esc_html($heading); ?></h3>
                            <p class="order-3 md:order-2 text-sm text-gray-600 mt-1 mb-5"><?php echo esc_html($description); ?></p>
                        </div>
                    <?php endif; ?>
                <?php endwhile; ?>
            </div>

            <?php if ($works->max_num_pages > 1): ?>
                <div class="text-center mt-6">
                    <button class="load-more bg-pink-500 px-8 py-4 text-lg text-white font-semibold" data-term="<?php echo esc_attr($term->slug); ?>"
                        data-page="1">Show More</button>
                </div>
            <?php endif; ?>
        </section>

    <?php
        wp_reset_postdata();
    endforeach;
    ?>
    <script>
        const workDetails = <?php echo wp_json_encode($work_data); ?>;
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            function initVideoHover() {
                document.querySelectorAll('video').forEach(video => {
                    if (!video.dataset.hoverInit) {
                        video.dataset.hoverInit = "true"; // prevent duplicate bindings
                        video.addEventListener('mouseenter', () => video.play());
                        video.addEventListener('mouseleave', () => {
                            video.pause();
                            video.currentTime = 0;
                            const poster = video.getAttribute('poster');
                            if (poster) video.load();
                        });
                    }
                });
            }

            function initImageClick() {
                document.querySelectorAll('[onclick^="openWorkModal"], [onclick^="openFullscreenImage"]').forEach(el => {
                    if (!el.dataset.clickInit) {
                        el.dataset.clickInit = "true"; // avoid rebinding
                        el.addEventListener('click', function(event) {
                            event.stopPropagation(); // keep same behavior
                            eval(this.getAttribute('onclick')); // keep existing function call
                        });
                    }
                });
            }

            initVideoHover();
            initImageClick();

            document.querySelectorAll('.load-more').forEach(btn => {
                btn.addEventListener('click', function() {
                    let term = this.getAttribute('data-term');
                    let page = parseInt(this.getAttribute('data-page')) + 1;
                    let button = this;

                    fetch('<?php echo admin_url("admin-ajax.php"); ?>?action=load_more_work&term=' + term + '&page=' + page)
                        .then(res => res.json())
                        .then(data => {
                            if (data.html.trim()) {
                                let container = document.querySelector('#' + term + ' .grid');
                                container.insertAdjacentHTML('beforeend', data.html);

                                // Merge new work data for popup
                                if (data.work_data && Array.isArray(data.work_data)) {
                                    workDetails.push(...data.work_data);
                                }

                                button.setAttribute('data-page', page);

                                // Re-init for new content
                                initVideoHover();
                                initImageClick();
                            } else {
                                button.remove();
                            }
                        });
                });
            });
        });
    </script>




    <!--Footer-->
    <section class="min-h-1/2 flex flex-col justify-center items-center bg-[#2226f7] text-white text-center p-10">
        <div class="container">
            <div class="w-full max-w-4xl mx-auto mt-6">
                <!-- Heading + Input Field -->
                <h1 class="text-xl md:text-3xl font-bold mb-4 text-left uppercase">Ready when you are. Let’s create.
                </h1>
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
                            class="bg-[#2226f7] border border-white px-6 py-3 text-lg text-white font-semibold flex items-center gap-2">
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



    <div id="fullscreen-image-modal"
        class="hidden fixed inset-0 bg-black bg-opacity-90 flex items-center justify-center z-[60]"
        onclick="handleOutsideClick(event)">
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

    <!-- Details Popup -->
    <div class="fixed top-8 right-7 flex flex-col z-[50] place-items-center hidden" id="close-popup-button-wrapper">
        <button id="closePopup"
            class="hidden w-9 h-9 flex items-center justify-center text-white bg-gray-800 hover:bg-gray-700 rounded-full text-xl shadow-lg z-50 ">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                class="w-4 h-4">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
        <span class="text-[8px] uppercase text-white hidden md:block">CLOSE</span>

    </div>


    <div id="work-details-popup"
        class="hidden fixed inset-0 bg-black bg-opacity-65 flex items-center justify-center px-4 pb-16">

        <div
            class="relative bg-white rounded-lg sm:w-[50%] w-auto max-h-[90vh] px-2 overflow-y-auto shadow-xl mt-16">

            <div class="p-6">
                <div class="flex justify-between items-start">
                    <h2 class="text-2xl font-bold" id="details-pop-header"></h2>
                </div>

                <p class="text-gray-600 mt-2" id="details-pop-desc">
                </p>
            </div>

            <div class="space-y-8 px-6 pb-6" id="details-pop-img-contents">

            </div>
        </div>
    </div>
    <!-- Details Popup End -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>

    <script>
        let locoScrollInstance;
        const workPopup = document.getElementById("work-details-popup");
        const closeWorkPopup = document.getElementById("closePopup");
        const closPopupButtonWrapper = document.getElementById("close-popup-button-wrapper");
        const detailsHeader = document.getElementById("details-pop-header");
        const detailsImageSrc = document.getElementById("details-pop-img-contents");
        const detailsPopupDescription = document.getElementById("details-pop-desc");

        // Backdrop click (close only if clicking outside content)
        document.getElementById("work-details-popup").addEventListener("click", (e) => {
            if (e.target !== e.currentTarget) return; // only backdrop clicks
            const modalContent = workPopup.querySelector("div.relative");
            gsap.to(modalContent, {
                opacity: 0,
                scale: 0.9,
                duration: 0.3,
                ease: "power3.in",
                onComplete: () => {
                    closeWorkPopup.classList.add('hidden');
                    closPopupButtonWrapper.classList.add('hidden');
                    workPopup.classList.add("hidden");

                    // restore scroll only if fullscreen is NOT open
                    const fullscreen = document.getElementById("fullscreen-image-modal");
                    if (fullscreen.classList.contains("hidden")) {
                        document.body.classList.remove("overflow-hidden");
                    }
                },
            });
        });

        // Escape key (close fullscreen first, then popup)
        document.addEventListener("keydown", (e) => {
            if (e.key === "Escape" || e.keyCode === 27) {
                const fullscreen = document.getElementById("fullscreen-image-modal");
                if (fullscreen && !fullscreen.classList.contains("hidden")) {
                    closeFullscreenImage(); // close fullscreen modal only
                    return;
                }

                if (!workPopup.classList.contains("hidden")) {
                    const modalContent = workPopup.querySelector("div.relative");
                    gsap.to(modalContent, {
                        opacity: 0,
                        scale: 0.9,
                        duration: 0.3,
                        ease: "power3.in",
                        onComplete: () => {
                            closeWorkPopup.classList.add('hidden');
                            closPopupButtonWrapper.classList.add('hidden');
                            workPopup.classList.add("hidden");

                            document.body.classList.remove("overflow-hidden");
                        },
                    });
                }
            }
        });

        // Close button (always close popup)
        closeWorkPopup.addEventListener("click", (e) => {
            e.stopPropagation(); // prevent bubbling
            const modalContent = workPopup.querySelector("div.relative");
            gsap.to(modalContent, {
                opacity: 0,
                scale: 0.9,
                duration: 0.3,
                ease: "power3.in",
                onComplete: () => {
                    closeWorkPopup.classList.add('hidden');
                    closPopupButtonWrapper.classList.add('hidden');
                    workPopup.classList.add("hidden");

                    // restore scroll only if fullscreen is NOT open
                    const fullscreen = document.getElementById("fullscreen-image-modal");
                    if (fullscreen.classList.contains("hidden")) {
                        document.body.classList.remove("overflow-hidden");
                    }
                },
            });
        });


        // Function to open the modal
        const openWorkModal = (event, id) => {
            if (event) event.preventDefault();

            const data = workDetails.find(i => i.id == id);
            if (!data) return;

            detailsHeader.textContent = data.title;
            detailsPopupDescription.textContent = data.desc;
            detailsImageSrc.innerHTML = '';

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

            workPopup.classList.remove('hidden');
            closeWorkPopup.classList.remove('hidden');
            closPopupButtonWrapper.classList.remove('hidden');
            document.body.classList.add('overflow-hidden');

            gsap.fromTo(
                workPopup.querySelector("div.relative"), {
                    opacity: 0,
                    scale: 0.9
                }, {
                    opacity: 1,
                    scale: 1,
                    duration: 0.5,
                    ease: "power3.out"
                }
            );
        };


        // Function to close the modal


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
            window.addEventListener('scroll', checkBackgroundAndInvertImages);

            // Run on window resize - comment if locomotive scroll enabled
            checkBackgroundAndInvertImages()
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
        const tabs = document.querySelectorAll(".tab-item");
        const sections = document.querySelectorAll(".tab-section");

        tabs.forEach(tab => {
            tab.addEventListener("click", () => {
                // Update tab styles
                tabs.forEach(t => {
                    t.classList.remove("font-semibold", "text-black", "border-b-2", "border-black");
                    t.classList.add("text-gray-400");
                });
                tab.classList.remove("text-gray-400");
                tab.classList.add("font-semibold", "text-black", "border-b-2", "border-black");

                // Show matching section
                const target = tab.getAttribute("data-tab");
                sections.forEach(section => section.classList.add("hidden"));
                const activeSection = document.getElementById(target);
                if (activeSection) {
                    activeSection.classList.remove("hidden");
                }
            });
        });

        document.querySelector('.tab-item[data-tab="flim"]').click();
    </script>



    <script>
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

        function handleOutsideClick(event) {
            const img = document.getElementById('fullscreen-img');
            closeFullscreenImage();
        }

        document.addEventListener("keydown", (e) => {
            if (e.key === "Escape" || e.keyCode === 27) {
                closeFullscreenImage();
            }
        });
    </script>


    <script>
        window.addEventListener('DOMContentLoaded', () => {
            const urlParams = new URLSearchParams(window.location.search);
            const tabToActivate = urlParams.get('tab');
            const sections = document.querySelectorAll('.tab-section');
            const tabButtons = document.querySelectorAll('.tab-item');

            function activateTab(tabName, scroll = true) {
                // Show/hide sections
                sections.forEach(section => {
                    section.style.display = section.id === tabName ? 'block' : 'none';
                });

                // Toggle tab button styles
                tabButtons.forEach(button => {
                    if (button.dataset.tab === tabName) {
                        button.classList.add('font-semibold', 'text-black', 'border-b-2', 'border-black');
                        button.classList.remove('text-gray-400');
                    } else {
                        button.classList.remove('font-semibold', 'text-black', 'border-b-2', 'border-black');
                        button.classList.add('text-gray-400');
                    }
                });

                // Scroll to section
                const target = document.getElementById(tabName);
                if (target && scroll) {
                    setTimeout(() => {
                        const offset = 130; // Adjust this if needed
                        const topPos = target.getBoundingClientRect().top + window.scrollY - offset;

                        window.scrollTo({
                            top: topPos,
                            behavior: 'smooth'
                        });
                    }, 100);
                }
            }

            // 1. If coming from link with ?tab=... param
            if (tabToActivate) {
                activateTab(tabToActivate);
            } else {
                // Optional: activate default tab
                const defaultTab = tabButtons[0]?.dataset.tab;
                if (defaultTab) activateTab(defaultTab, false);
            }

            // 2. Handle local tab switching WITHOUT query param
            tabButtons.forEach(button => {
                button.addEventListener('click', (e) => {
                    e.preventDefault(); // Prevent link behavior if any
                    const selectedTab = button.dataset.tab;
                    activateTab(selectedTab);
                    // DO NOT update URL — no history.replaceState
                });
            });
        });
    </script>


</body>

</html>