<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Services | Magic In White</title>
	<link rel="icon" type="image/svg+xml" href="/icon.png" />
	<script src="https://cdn.tailwindcss.com"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
	<link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/locomotive-scroll@4.1.4/dist/locomotive-scroll.min.css" />


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

		.active {
			background-color: yellow;
			color: blue;
			padding: 35px 10px 24px 10px;
		}


		/* Optional: Adding a slight tilt effect */
		.grid img:hover {
			/* transform: scale(1) rotateX(8deg) rotateY(8deg); */
			overflow: hidden;
		}

		[data-scroll-container] {
			opacity: 1 !important;
			visibility: visible !important;
		}

		.custom-width {
			width: 450px;
		}

		.posters {
			overflow: hidden;
			position: relative;
		}

		.posters img {
			width: 110%;
			/* height: 120%; */
			object-fit: cover;
			transform-origin: center;
			top: 0;
			left: 0;
			right: 0;
			bottom: 0;
			will-change: transform;
			transform: translateZ(0);
		}

		.loader-text {
			color: #ea4294;
			font-family: 'Lato', sans-serif;
		}

		.green {
			color: #22c55e;
		}

		.service-image {
			height: 68px;
			width: 68px;
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
					class="text-black-700 font-bold text-2xl transition-transform duration-500 ease-out scale-125 hover:scale-125 hover:font-bold block green">
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


	<!-- Desktop Background -->
	<section id="service-lg-banner" class="hidden md:block h-screen w-full bg-cover bg-center bg-fixed bg-no-repeat"
		style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/services-assets/services-header-desktop.png');">
	</section>

	<!-- Mobile Background -->
	<section id="service-md-banner" class="block md:hidden h-screen w-full bg-cover bg-center bg-fixed bg-no-repeat"
		style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/services-assets/services-header-mobile.png');">
	</section>


	<!-- <section class="h-[96dvh] relative overflow-hidden">
        <img src="/services-assets/Services-Header.png" 
             class="w-full h-full object-contain" 
             alt="Services Header">
      </section> -->

	<!-- Grid Layout -->
	<section class="grid grid-cols-7 grid-rows-12 min-h-[200vh]" id="service-grid" data-scroll-section>
		<!-- Content 1 -->
		<div
			class="col-span-4 row-span-2 bg-green-500 px-4 md:px-6 lg:px-8 text-white flex items-center justify-center">
			<div class="text-left custom-width">
				<h1
					class="text-xl sm:text-2xl md:text-3xl lg:text-4xl font-bold leading-relaxed pb-2 animate-text uppercase">
					WE BUILD BRANDS</h1>
				<p class="text-xs sm:text-sm md:text-base lg:text-lg leading-loose animate-text uppercase">
					LOGO DESIGN, BRAND POSITIONING, BRAND STRATEGY, NAMING & TAGLINE DEVELOPMENT, REBRANDING.
				</p>
				<button
					class="outline-none focus:outline-none focus:ring-0 animate-text mt-4 px-4 py-1 border border-white text-white uppercase bg-transparent tracking-[0.3em] text-sm"
					onclick="openServiceModal('branding-popup')">
					<!-- <img src="/services-assets/explore-button-white.png" alt="Explore"
						class="w-16 sm:w-20 md:w-24 animate-text"> -->
					Explore
				</button>
			</div>
		</div>

		<!-- Image 2 -->
		<div class="posters col-span-3 row-span-2 col-start-5 bg-gray-300 ">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/images/services-assets/branding-asset.png" class="w-full h-full object-cover">
		</div>

		<!-- Image 3 -->
		<div class="posters col-span-3 row-span-2 row-start-3 bg-gray-300">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/images/services-assets/advertising-asset.png" class="w-full h-full object-cover">
		</div>

		<!-- Content 4 -->
		<div id="ads-section-right"
			class="col-span-4 row-span-2 col-start-4 row-start-3 bg-white p-4 md:p-6 lg:p-8 text-blue-700 flex items-center justify-center">
			<div class="text-right custom-width">
				<h1
					class="text-xl sm:text-2xl md:text-3xl lg:text-4xl font-bold leading-relaxed pb-2 animate-text uppercase">
					WE CREATE CAMPAIGNS</h1>
				<p class="text-xs sm:text-sm md:text-base lg:text-lg leading-loose animate-text uppercase">
					PRINT, DIGITAL, FILM, PHOTOGRAPHY AND ART DIRECTION, OUT-OF-HOME ADVERTISING.
				</p>
				<button
					class="outline-none focus:outline-none focus:ring-0 animate-text mt-4 px-4 py-1 border border-blue-700 text-blue uppercase bg-transparent tracking-[0.3em] text-sm"
					onclick="openServiceModal('ads-popup')">
					<!-- <img src="/services-assets/explore-button-blue.png" alt="Explore"
						class="w-16 sm:w-20 md:w-24 animate-text"> -->
					Explore
				</button>
			</div>
		</div>

		<!-- Content 5 -->
		<div
			class="col-span-4 row-span-2 row-start-5 bg-pink-500 p-4 md:p-6 lg:p-8 text-white flex items-center justify-center">
			<div class="text-left custom-width">
				<h1
					class="text-xl sm:text-2xl md:text-3xl lg:text-4xl font-bold leading-relaxed pb-2 animate-text uppercase">
					WE CRAFT VISUALS.</h1>
				<p class="text-xs sm:text-sm md:text-base lg:text-lg leading-loose animate-text uppercase">
					GRAPHIC DESIGN, PACKAGING DESIGN, WEBSITE DESIGN & DEVELOPMENT, MOTION GRAPHICS & ANIMATION
				</p>
				<button
					class="outline-none focus:outline-none focus:ring-0 animate-text mt-4 px-4 py-1 border border-white text-white uppercase bg-transparent tracking-[0.3em] text-sm"
					onclick="openServiceModal('designer-popup')">
					<!-- <img src="/services-assets/explore-button-white.png" alt="Explore"
						class="w-16 sm:w-20 md:w-24 animate-text"> -->
					Explore
				</button>
			</div>
		</div>

		<!-- Image 6 -->
		<div class="posters col-span-3 row-span-2 col-start-5 row-start-5 bg-gray-300">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/images/services-assets/designing-asset.png" class="w-full h-full object-cover">
		</div>

		<!-- Image 7 -->
		<div class="posters col-span-3 row-span-2 row-start-7 bg-gray-300">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/images/services-assets/filmproduction-asset.png" class="w-full h-full object-cover">
		</div>

		<!-- Content 8 -->
		<div
			class="col-span-4 row-span-2 col-start-4 row-start-7 bg-black p-4 md:p-6 lg:p-8 text-white flex items-center justify-center">
			<div class="text-right custom-width">
				<h1 class="text-xl sm:text-2xl md:text-3xl lg:text-4xl font-bold pb-2 animate-text uppercase">WE
					TELL STORIES.
				</h1>
				<p class="text-xs sm:text-sm md:text-base lg:text-lg leading-loose animate-text uppercase">
					TITLE ANIMATION, STOP MOTION ANIMATION, MOVIE TITLE SEQUENCE, 2D & 3D ANIMATION </p>
				<button
					class="outline-none focus:outline-none focus:ring-0 animate-text mt-4 px-4 py-1 border border-white text-white uppercase bg-transparent tracking-[0.3em] text-sm"
					onclick="openServiceModal('film-production-popup')">
					<!-- <img src="/services-assets/explore-button-white.png" alt="Explore"
						class="w-16 sm:w-20 md:w-24 animate-text"> -->
					Explore
				</button>
			</div>
		</div>

		<!-- Content 9 -->
		<div
			class="col-span-4 row-span-2 row-start-9 bg-blue-700 p-4 md:p-6 lg:p-8 text-white flex items-center justify-center">
			<div class="text-left custom-width">
				<h1
					class="text-xl sm:text-2xl md:text-3xl lg:text-4xl font-bold leading-relaxed pb-2 animate-text uppercase">
					WE DESIGN EXPERIENCES.
				</h1>
				<p class="text-xs sm:text-sm md:text-base lg:text-lg leading-loose animate-text uppercase">
					UI DESIGN, INTERACTION DESIGN, PROTOTYPING AND WIREFRAMING, UX DESIGN </p>
				<button
					class="outline-none focus:outline-none focus:ring-0 animate-text mt-4 px-4 py-1 border border-white text-white uppercase bg-transparent tracking-[0.3em] text-sm"
					onclick="openServiceModal('ui-ux-popup')">
					<!-- <img src="/services-assets/explore-button-white.png" alt="Explore"
						class="w-16 sm:w-20 md:w-24 animate-text"> -->
					Explore
				</button>
			</div>
		</div>

		<!-- Image 10 -->
		<div class="posters col-span-3 row-span-2 col-start-5 row-start-9 bg-gray-300">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/images/services-assets/ui-ux-asset.png" class="w-full h-full object-cover">
		</div>

		<!-- Image 11 -->
		<div class="posters col-span-3 row-span-2 row-start-11 bg-gray-300">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/images/services-assets/design_asset.png" class="w-full h-full object-cover">
		</div>

		<!-- Content 12 -->
		<div
			class="col-span-4 row-span-2 col-start-4 row-start-11  bg-pink-500 p-4 md:p-6 lg:p-8 text-white flex items-center justify-center">
			<div class="text-right custom-width">
				<h1 class="text-xl sm:text-2xl md:text-3xl lg:text-4xl font-bold pb-2 animate-text uppercase">WE
					DRIVE ENGAGEMENT.
				</h1>
				<p class="text-xs sm:text-sm md:text-base lg:text-lg leading-loose animate-text uppercase">
					SOCIAL MEDIA STRATEGY AND MANAGEMENT, CONTENT CREATION - COPY, GRAPHICS AND VIDEO, INFLUENCER
					MARKETING
				</p>
				<button
					class="outline-none focus:outline-none focus:ring-0 animate-text mt-4 px-4 py-1 border border-white text-white uppercase bg-transparent tracking-[0.3em] text-sm"
					onclick="openServiceModal('digital-marketing-popup')">
					<!-- <img src="/services-assets/explore-button-blue.png" alt="Explore"
						class="w-16 sm:w-20 md:w-24 animate-text"> -->
					Explore
				</button>
			</div>
		</div>


		<!-- Content 13 -->
		<div
			class="col-span-4 row-span-2 row-start-13 bg-[#ffd527] p-4 md:p-6 lg:p-8 text-white flex items-center justify-center">
			<div class="text-left custom-width text-blue-700">
				<h1
					class="text-xl sm:text-2xl md:text-3xl lg:text-4xl font-bold leading-snug pb-2 animate-text uppercase">
					WE CONNECT IT ALL.
				</h1>
				<p class="text-xs sm:text-sm md:text-base lg:text-lg leading-relaxed animate-text uppercase">
					360 MARKETING CAMPAIGNS, GUERRILLA MARKETING AND EXPERIENTIAL MARKETING, SPONSORSHIP AND
					PARTNERSHIPS </p>
				<button onclick="openServiceModal('integrated-popup')"
					class="outline-none focus:outline-none focus:ring-0 animate-text mt-4 px-4 py-1 border border-blue-700 text-blue uppercase bg-transparent tracking-[0.3em] text-xs sm:text-sm md:text-base">
					Explore
				</button>
			</div>
		</div>


		<!-- Image 12 -->

		<div class="posters col-span-3 row-span-2 col-start-5 row-start-13 bg-pink-500">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/images/services-assets/integrated-asset.png" class="w-full h-full object-cover">
		</div>
	</section>


	<!--Footer-->
	<section class="min-h-1/2 flex flex-col justify-center items-center bg-pink-500 text-white text-center p-10"
		data-scroll-section>
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
										href="/service.html?details=branding-popup">Branding</a>
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
	<!-- loader -->
	<div id="loader"
		class="fixed inset-0 bg-white flex flex-col items-center justify-center z-[9999999] transition-opacity duration-1000 opacity-100">
		<img id="logo-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/MIW_Website_Assets/loader_horse.gif" alt="loader" class="w-20 h-20 object-contain">
		<span id="loading-text" class="loader-text text-sm font-bold mt-4 ml-3">0%</span>
	</div>
	<!--loader end  -->

	<!-- branding Modal -->
	<div id="branding-popup" class="hidden fixed inset-0 bg-black bg-opacity-65 overflow-y-auto px-4 pt-20 pb-16">
		<div class="flex items-center justify-center min-h-full">
			<div class="relative bg-white max-w-4xl px-20 py-12">
				<button onclick="closeServiceModal('branding-popup')"
					class="sm:flex absolute right-5 top-5 md:top-10 md:right-10 w-10 h-10 flex items-center justify-center text-white bg-gray-800 hover:bg-gray-700 rounded-full text-xl z-50">
					<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
						class="w-6 h-6">
						<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
							d="M6 18L18 6M6 6l12 12" />
					</svg>
				</button>
				<div class="flex flex-col md:flex-row w-full mt-10 items-center md:items-start">
					<!-- Image Section -->
					<div class="md:w-[30%] w-full flex items-center justify-start md:justify-center p-6">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/services-assets/pop-assets/logo.png" alt="service asset"
							class="service-image object-contain" />
					</div>

					<!-- Text Section -->
					<div
						class="md:w-[70%] w-full p-4 flex flex-col justify-center mt-2 md:justify-center pr-0 md:pr-20">
						<div class="flex flex-col justify-center">
							<h2 class="uppercase text-[28px] text-[#272cf7] leading-tight mb-1">logo design</h2>
							<p class="text-sm text-gray-700 leading-snug">
								We create distinctive logos <br /> that capture your brand’s essence at a glance.
							</p>
						</div>
					</div>
				</div>

				<div class="flex flex-col md:flex-row w-full mt-5 items-center md:items-start">
					<div class="md:w-[30%] w-full flex items-center justify-start md:justify-center p-6">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/services-assets/pop-assets/knight.png" alt="knight asset"
							class="service-image object-contain mt-2" />
					</div>

					<div
						class="md:w-[70%] w-full p-4 flex flex-col justify-center mt-2 md:justify-center pr-0 md:pr-20">
						<div class="flex flex-col justify-center">
							<h2 class="uppercase text-[28px] text-[#272cf7] leading-tight mb-1">brand strategy</h2>
							<p class="text-sm text-gray-700">
								We define where your brand stands—and why it matters.
							</p>
						</div>
					</div>
				</div>

				<div class="flex flex-col md:flex-row w-full mt-5 items-center md:items-start">
					<div class="md:w-[30%] w-full flex items-center justify-start md:justify-center p-2">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/services-assets/pop-assets/positioning.png" alt="service asset"
							class="service-image object-contain mt-6" />
					</div>

					<div
						class="md:w-[70%] w-full p-4 flex flex-col justify-center mt-2 md:justify-center pr-0 md:pr-20">
						<div class="flex flex-col justify-center">
							<h2 class="uppercase text-[28px] text-[#272cf7] leading-tight mb-1">brand positioning</h2>
							<p class="text-sm text-gray-700">
								We build the roadmap that guides your brand’s<br> growth and purpose
							</p>
						</div>
					</div>
				</div>

				<div class="flex flex-col md:flex-row w-full mt-5 items-center md:items-start">
					<div class="md:w-[30%] w-full flex items-center justify-start md:justify-center p-2">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/services-assets/pop-assets/naming.png" alt="service asset"
							class="service-image object-contain mt-6" />
					</div>

					<div
						class="md:w-[70%] w-full p-4 flex flex-col justify-center mt-2 md:justify-center pr-0 md:pr-20">
						<div class="flex flex-col justify-center">
							<h2 class="uppercase text-[28px] text-[#272cf7] leading-tight mb-1">naming & tagline</h2>
							<p class="text-sm text-gray-700">
								We craft names and taglines <br /> that are memorable, meaningful, and authentic.
							</p>
						</div>
					</div>
				</div>
				<div class="flex flex-col md:flex-row w-full mt-5 items-center md:items-start pb-10">
					<div class="md:w-[30%] w-full flex items-center justify-start md:justify-center p-6">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/services-assets/pop-assets/rebrand.png" alt="service asset"
							class="service-image object-contain mt-2" />
					</div>

					<div
						class="md:w-[70%] w-full p-4 flex flex-col justify-center mt-2 md:justify-center pr-0 md:pr-20">
						<div class="flex flex-col justify-center">
							<h2 class="uppercase text-[28px] text-[#272cf7] leading-tight mb-1">rebranding</h2>
							<p class="text-sm text-gray-700">
								We reimagine your brand to reflect <br /> who you are now—and where you're headed.
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- branding Modal end -->

	<!-- ads Modal -->
	<div id="ads-popup" class="hidden fixed inset-0 bg-black bg-opacity-65 overflow-y-auto px-4 pt-20 pb-16">
		<div class="flex items-center justify-center min-h-full">
			<div class="relative bg-white  max-w-4xl mx-auto px-20 py-12">
				<button onclick="closeServiceModal('ads-popup')"
					class="sm:flex absolute right-5 top-5 md:top-10 md:right-10 w-10 h-10 flex items-center justify-center text-white bg-gray-800 hover:bg-gray-700 rounded-full text-xl z-50">
					<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
						class="w-6 h-6">
						<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
							d="M6 18L18 6M6 6l12 12" />
					</svg>
				</button>
				<div class="flex flex-col md:flex-row w-full mt-10 items-center md:items-start">
					<div class="md:w-[30%] w-full flex items-center justify-start md:justify-center p-6">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/services-assets/pop-assets/print.png" alt="service asset"
							class="service-image object-contain mt-8" />
					</div>

					<div
						class="md:w-[70%] w-full p-4 flex flex-col justify-center mt-2 md:justify-center pr-0 md:pr-20">
						<div class="flex flex-col justify-center">
							<h2 class="uppercase text-[28px] text-[#272cf7] leading-tight mb-1">print & digital</h2>
							<p class="text-sm text-gray-700">
								We design brochures, flyers, posters, and other print materials that clearly communicate
								your brand message—crafted for maximum impact and readability.
								We also create and manage targeted digital ads, social media content, and email
								campaigns
								that enhance your online presence—strategically designed to drive engagement and deliver
								measurable results.
							</p>
						</div>
					</div>
				</div>
				<div class="flex flex-col md:flex-row w-full mt-10 items-center md:items-start">
					<div class="md:w-[30%] w-full flex items-center justify-start md:justify-center p-6">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/services-assets/pop-assets/film.png" alt="knight asset"
							class="service-image object-contain" />
					</div>

					<div
						class="md:w-[70%] w-full p-4 flex flex-col justify-center mt-2 md:justify-center pr-0 md:pr-20">
						<div class="flex flex-col justify-center">
							<h2 class="uppercase text-[28px] text-[#272cf7] leading-tight mb-1">film</h2>
							<p class="text-sm text-gray-700">
								We develop and produce commercials, corporate films, and documentaries tailored to your
								goals.
							</p>
						</div>
					</div>
				</div>
				<div class="flex flex-col md:flex-row w-full mt-10 items-center md:items-start">
					<div class="md:w-[30%] w-full flex items-center justify-start md:justify-center p-6">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/services-assets/pop-assets/photo.png" alt="service asset"
							class="service-image object-contain mt-2" />
					</div>

					<div
						class="md:w-[70%] w-full p-4 flex flex-col justify-center mt-2 md:justify-center pr-0 md:pr-20">
						<div class="flex flex-col justify-center">
							<h2 class="uppercase text-[28px] text-[#272cf7] leading-tight mb-1">PHOTOGRAPHY</h2>
							<p class="text-sm text-gray-700">
								We provide professional photography and visual styling to create authentic brand images.

							</p>
						</div>
					</div>
				</div>
				<div class="flex flex-col md:flex-row w-full mt-10 items-center md:items-start">
					<div class="md:w-[30%] w-full flex items-center justify-start md:justify-center p-6">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/services-assets/pop-assets/art.png" alt="service asset"
							class="service-image object-contain" />
					</div>

					<div
						class="md:w-[70%] w-full p-4 flex flex-col justify-center mt-2 md:justify-center pr-0 md:pr-20">
						<div class="flex flex-col justify-center">
							<h2 class="uppercase text-[28px] text-[#272cf7] leading-tight mb-1">art direction</h2>
							<p class="text-sm text-gray-700">
								Our art direction ensures consistency and a compelling visual story.
							</p>
						</div>
					</div>
				</div>
				<div class="flex flex-col md:flex-row w-full mt-10 items-center md:items-start pb-10">
					<div class="md:w-[30%] w-full flex items-center justify-start md:justify-center p-6">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/services-assets/pop-assets/blimp.png" alt="service asset"
							class="service-image object-contain mt-2" />
					</div>

					<div
						class="md:w-[70%] w-full p-4 flex flex-col justify-center mt-2 md:justify-center pr-0 md:pr-20">
						<div class="flex flex-col justify-center">
							<h2 class="uppercase text-[28px] text-[#272cf7] leading-tight mb-1">Out-of-Home Advertising
							</h2>
							<p class="text-sm text-gray-700">
								We plan and design billboards, transit ads, and outdoor signage that capture attention
								in
								public spaces, maximising visibility and brand recall.
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- ads Modal end -->

	<!-- designer Modal -->
	<div id="designer-popup" class="hidden fixed inset-0 bg-black bg-opacity-65 overflow-y-auto px-4 pt-20 pb-16">
		<div class="flex items-center justify-center min-h-full">
			<div class="relative bg-white  max-w-4xl mx-auto px-20 py-12">
				<button onclick="closeServiceModal('designer-popup')"
					class="sm:flex absolute right-5 top-5 md:top-10 md:right-10 w-10 h-10 flex items-center justify-center text-white bg-gray-800 hover:bg-gray-700 rounded-full text-xl z-50">
					<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
						class="w-6 h-6">
						<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
							d="M6 18L18 6M6 6l12 12" />
					</svg>
				</button>
				<div class="flex flex-col md:flex-row w-full mt-10 items-center md:items-start">
					<div class="md:w-[30%] w-full flex items-center justify-start md:justify-center p-6">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/services-assets/pop-assets/wand.png" alt="service asset"
							class="service-image object-contain mt-2" />
					</div>

					<div
						class="md:w-[70%] w-full p-4 flex flex-col justify-center mt-2 md:justify-center pr-0 md:pr-20">
						<div class="flex flex-col justify-center">
							<h2 class="uppercase text-[28px] text-[#272cf7] leading-tight mb-1">graphic design</h2>
							<p class="text-sm text-gray-700">
								We create impactful visual assets—posters, brochures, social media creatives, and more.
							</p>
						</div>
					</div>
				</div>
				<div class="flex flex-col md:flex-row w-full mt-10 items-center md:items-start">
					<div class="md:w-[30%] w-full flex items-center justify-start md:justify-center p-6">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/services-assets/pop-assets/jack.png" alt="knight asset"
							class="service-image object-contain" />
					</div>

					<div
						class="md:w-[70%] w-full p-4 flex flex-col justify-center mt-2 md:justify-center pr-0 md:pr-20">
						<div class="flex flex-col justify-center">
							<h2 class="uppercase text-[28px] text-[#272cf7] leading-tight mb-1">packaging design</h2>
							<p class="text-sm text-gray-700">
								We design packaging that stands out on shelves and tells your product’s story.
							</p>
						</div>
					</div>
				</div>
				<div class="flex flex-col md:flex-row w-full mt-10 items-center md:items-start">
					<div class="md:w-[30%] w-full flex items-center justify-start md:justify-center p-6">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/services-assets/pop-assets/web.png" alt="service asset"
							class="service-image object-contain mt-8" />
					</div>

					<div
						class="md:w-[70%] w-full p-4 flex flex-col justify-center mt-2 md:justify-center pr-0 md:pr-20">
						<div class="flex flex-col justify-center">
							<h2 class="uppercase text-[28px] text-[#272cf7] leading-tight mb-1">website deesign and
								development</h2>
							<p class="text-sm text-gray-700">
								We design and build websites that are visually engaging, user-friendly, and responsive.
								From layout to launch, we ensure seamless functionality and brand consistency.

							</p>
						</div>
					</div>
				</div>
				<div class="flex flex-col md:flex-row w-full mt-10 items-center md:items-start pb-10">
					<div class="md:w-[30%] w-full flex items-center justify-start md:justify-center p-6">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/services-assets/pop-assets/animation.png" alt="service asset"
							class="service-image object-contain mt-8" />
					</div>

					<div
						class="md:w-[70%] w-full p-4 flex flex-col justify-center mt-2 md:justify-center pr-0 md:pr-20">
						<div class="flex flex-col justify-center">
							<h2 class="uppercase text-[28px] text-[#272cf7] leading-tight mb-1">motion graphics and
								animation</h2>
							<p class="text-sm text-gray-700">
								We produce animated videos, explainer films, and dynamic visuals for digital platforms.
								Our motion design simplifies complex ideas and captures attention instantly.

							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- designer Modal end -->

	<!-- Film Production Modal -->
	<div id="film-production-popup"
		class="hidden fixed inset-0 bg-black bg-opacity-65 overflow-y-auto px-4 pt-20 pb-16">
		<div class="flex items-center justify-center min-h-full">
			<div class="relative bg-white  max-w-4xl mx-auto px-20 py-12">
				<button onclick="closeServiceModal('film-production-popup')"
					class="sm:flex absolute right-5 top-5 md:top-10 md:right-10 w-10 h-10 flex items-center justify-center text-white bg-gray-800 hover:bg-gray-700 rounded-full text-xl z-50">
					<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
						class="w-6 h-6">
						<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
							d="M6 18L18 6M6 6l12 12" />
					</svg>
				</button>
				<div class="flex flex-col md:flex-row w-full mt-10 items-center md:items-start">
					<div class="md:w-[30%] w-full flex items-center justify-start md:justify-center p-6">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/services-assets/pop-assets/title.png" alt="service asset"
							class="service-image object-contain" />
					</div>

					<div
						class="md:w-[70%] w-full p-4 flex flex-col justify-center mt-2 md:justify-center pr-0 md:pr-20">
						<div class="flex flex-col justify-center">
							<h2 class="uppercase text-[28px] text-[#272cf7] leading-tight mb-1">Title Animation</h2>
							<p class="text-sm text-gray-700">
								We create striking animated titles that set the tone and grab attention.
							</p>
						</div>
					</div>
				</div>
				<div class="flex flex-col md:flex-row w-full mt-10 items-center md:items-start">
					<div class="md:w-[30%] w-full flex items-center justify-start md:justify-center p-6">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/services-assets/pop-assets/stopmotion.png" alt="service asset"
							class="service-image object-contain mt-2" />
					</div>

					<div
						class="md:w-[70%] w-full p-4 flex flex-col justify-center mt-2 md:justify-center pr-0 md:pr-20">
						<div class="flex flex-col justify-center">
							<h2 class="uppercase text-[28px] text-[#272cf7] leading-tight mb-1">stop motion</h2>
							<p class="text-sm text-gray-700">
								We bring objects to life, frame by frame, with handcrafted storytelling.
								Perfect for playful, tactile, and memorable brand narratives.

							</p>
						</div>
					</div>
				</div>

				<div class="flex flex-col md:flex-row w-full mt-10 items-center md:items-start">
					<div class="md:w-[30%] w-full flex items-center justify-start md:justify-center p-6">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/services-assets/pop-assets/sequence.png" alt="service asset"
							class="service-image object-contain" />
					</div>

					<div
						class="md:w-[70%] w-full p-4 flex flex-col justify-center mt-2 md:justify-center pr-0 md:pr-20">
						<div class="flex flex-col justify-center">
							<h2 class="uppercase text-[28px] text-[#272cf7] leading-tight mb-1">movie title sequence</h2>
							<p class="text-sm text-gray-700">
								We design cinematic title sequences that capture the mood and theme.
								A bold visual entry point that stays with the viewer long after.

							</p>
						</div>
					</div>
				</div>

				<div class="flex flex-col md:flex-row w-full mt-10 items-center md:items-start pb-10">
					<div class="md:w-[30%] w-full flex items-center justify-start md:justify-center p-6">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/services-assets/pop-assets/2d&3d.png" alt="service asset"
							class="service-image object-contain" />
					</div>

					<div
						class="md:w-[70%] w-full p-4 flex flex-col justify-center mt-2 md:justify-center pr-0 md:pr-20">
						<div class="flex flex-col justify-center">
							<h2 class="uppercase text-[28px] text-[#272cf7] leading-tight mb-1">2d & 3d animation</h2>
							<p class="text-sm text-gray-700">
								We develop 2D and 3D animated content for ads, explainer videos, and more.
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Film Production Modal end -->

	<!-- UI / UX Modal -->
	<div id="ui-ux-popup" class="hidden fixed inset-0 bg-black bg-opacity-65 overflow-y-auto px-4 pt-20 pb-16">
		<div class="flex items-center justify-center min-h-full">
			<div class="relative bg-white  max-w-4xl mx-auto px-20 py-12">
				<button onclick="closeServiceModal('ui-ux-popup')"
					class="sm:flex absolute right-5 top-5 md:top-10 md:right-10 w-10 h-10 flex items-center justify-center text-white bg-gray-800 hover:bg-gray-700 rounded-full text-xl z-50">
					<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
						class="w-6 h-6">
						<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
							d="M6 18L18 6M6 6l12 12" />
					</svg>
				</button>
				<div class="flex flex-col md:flex-row w-full mt-10 items-center md:items-start">
					<div class="md:w-[30%] w-full flex items-center justify-start md:justify-center p-8">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/services-assets/pop-assets/mobile-app.png" alt="service asset"
							class="service-image object-contain" />
					</div>

					<div
						class="md:w-[70%] w-full p-4 flex flex-col justify-center mt-2 md:justify-center pr-0 md:pr-20">
						<div class="flex flex-col justify-center">
							<h2 class="uppercase text-[28px] text-[#272cf7] leading-tight mb-1">UI Design</h2>
							<p class="text-sm text-gray-700">
								We design visually clean, intuitive interfaces that align with your brand.
								From apps to websites, we make every screen feel effortless and beautiful.

							</p>
						</div>
					</div>
				</div>
				<div class="flex flex-col md:flex-row w-full mt-10 items-center md:items-start">
					<div class="md:w-[30%] w-full flex items-center justify-start md:justify-center p-6">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/services-assets/pop-assets/touch.png" alt="service asset"
							class="service-image object-contain" />
					</div>

					<div
						class="md:w-[70%] w-full p-4 flex flex-col justify-center mt-2 md:justify-center pr-0 md:pr-20">
						<div class="flex flex-col justify-center">
							<h2 class="uppercase text-[28px] text-[#272cf7] leading-tight mb-1">interaction design</h2>
							<p class="text-sm text-gray-700">
								We shape how users engage with your product through thoughtful micro-interactions.
								Every tap, swipe, and scroll is crafted to feel natural and responsive

							</p>
						</div>
					</div>
				</div>

				<div class="flex flex-col md:flex-row w-full mt-10 items-center md:items-start">
					<div class="md:w-[30%] w-full flex items-center justify-start md:justify-center p-4">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/services-assets/pop-assets/wireframe.png" alt="service asset"
							class="service-image object-contain mt-6" />
					</div>

					<div
						class="md:w-[70%] w-full p-4 flex flex-col justify-center mt-2 md:justify-center pr-0 md:pr-20">
						<div class="flex flex-col justify-center">
							<h2 class="uppercase text-[28px] text-[#272cf7] leading-tight mb-1">prototyping & wireframing
							</h2>
							<p class="text-sm text-gray-700">
								We build wireframes and clickable prototypes to test ideas before development.
								It’s where structure meets strategy—fast, functional, and user-first.

							</p>
						</div>
					</div>
				</div>

				<div class="flex flex-col md:flex-row w-full mt-10 items-center md:items-start pb-10">
					<div class="md:w-[30%] w-full flex items-center justify-start md:justify-center p-6">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/services-assets/pop-assets/rgb.png" alt="service asset"
							class="service-image object-contain" />
					</div>

					<div
						class="md:w-[70%] w-full p-4 flex flex-col justify-center mt-2 md:justify-center pr-0 md:pr-20">
						<div class="flex flex-col justify-center">
							<h2 class="uppercase text-[28px] text-[#272cf7] leading-tight mb-1">ux design</h2>
							<p class="text-sm text-gray-700">
								We design user experiences that are seamless, logical, and satisfying.
								From user journeys to usability, we make products people love to use.

							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- UI / UX Modal end -->

	<!-- Digital-marketing popup -->
	<div id="digital-marketing-popup"
		class="hidden fixed inset-0 bg-black bg-opacity-65 overflow-y-auto px-4 pt-20 pb-16">
		<div class="flex items-center justify-center min-h-full">
			<div class="relative bg-white  max-w-4xl mx-auto px-20 py-12">
				<button onclick="closeServiceModal('digital-marketing-popup')"
					class="sm:flex absolute right-5 top-5 md:top-10 md:right-10 w-10 h-10 flex items-center justify-center text-white bg-gray-800 hover:bg-gray-700 rounded-full text-xl z-50">
					<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
						class="w-6 h-6">
						<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
							d="M6 18L18 6M6 6l12 12" />
					</svg>
				</button>
				<div class="flex flex-col md:flex-row w-full mt-10 items-center md:items-start">
					<div class="md:w-[30%] w-full flex items-center justify-start md:justify-center p-6">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/services-assets/pop-assets/verified.png" alt="service asset"
							class="service-image object-contain mt-6" />
					</div>

					<div
						class="md:w-[70%] w-full p-4 flex flex-col justify-center mt-2 md:justify-center pr-0 md:pr-20">
						<div class="flex flex-col justify-center">
							<h2 class="uppercase text-[28px] text-[#272cf7] leading-tight mb-1">social media management
							</h2>
							<p class="text-sm text-gray-700">
								We plan, post, and manage your brand’s presence across platforms.
								From calendars to community building—we keep it consistent and impactful.

							</p>
						</div>
					</div>
				</div>
				<div class="flex flex-col md:flex-row w-full mt-10 items-center md:items-start">
					<div class="md:w-[30%] w-full flex items-center justify-start md:justify-center p-6">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/services-assets/pop-assets/content.png" alt="service asset"
							class="service-image object-contain" />
					</div>

					<div
						class="md:w-[70%] w-full p-4 flex flex-col justify-center mt-2 md:justify-center pr-0 md:pr-20">
						<div class="flex flex-col justify-center">
							<h2 class="uppercase text-[28px] text-[#272cf7] leading-tight mb-1">content creation</h2>
							<p class="text-sm text-gray-700">
								We create scroll-stopping content that informs, engages, and converts.
								Copy, visuals, and videos—all tailored to your brand voice and goals.

							</p>
						</div>
					</div>
				</div>

				<div class="flex flex-col md:flex-row w-full mt-10 items-center md:items-start">
					<div class="md:w-[30%] w-full flex items-center justify-start md:justify-center p-6">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/services-assets/pop-assets/play.png" alt="service asset"
							class="service-image object-contain" />
					</div>

					<div
						class="md:w-[70%] w-full p-4 flex flex-col justify-center mt-2 md:justify-center pr-0 md:pr-20">
						<div class="flex flex-col justify-center">
							<h2 class="uppercase text-[28px] text-[#272cf7] leading-tight mb-1">graphics & video</h2>
							<p class="text-sm text-gray-700">
								We design captivating visuals and dynamic motion graphics that bring your brand to
								life—crafted to inspire, inform, and leave a lasting impression.

							</p>
						</div>
					</div>
				</div>

				<div class="flex flex-col md:flex-row w-full mt-10 items-center md:items-start pb-10">
					<div class="md:w-[30%] w-full flex items-center justify-start md:justify-center p-6">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/services-assets/pop-assets/influencer.png" alt="service asset"
							class="service-image object-contain mt-2" />
					</div>

					<div
						class="md:w-[70%] w-full p-4 flex flex-col justify-center mt-2 md:justify-center pr-0 md:pr-20">
						<div class="flex flex-col justify-center">
							<h2 class="uppercase text-[28px] text-[#272cf7] leading-tight mb-1">INFLUENCER marketing</h2>
							<p class="text-sm text-gray-700">
								We connect your brand with the right voices that drive reach and trust.
								From strategy to partnerships, we manage it end to end.

							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Digital-marketing Modal end -->
	<!-- INTEGRATED MARKETING  Modal -->
	<div id="integrated-popup" class="hidden fixed inset-0 bg-black bg-opacity-65 overflow-y-auto px-4 pt-20 pb-16">
		<div class="flex items-center justify-center min-h-full">
			<div class="relative bg-white  max-w-4xl mx-auto px-20 py-12">
				<button onclick="closeServiceModal('integrated-popup')"
					class="sm:flex absolute right-5 top-5 md:top-10 md:right-10 w-10 h-10 flex items-center justify-center text-white bg-gray-800 hover:bg-gray-700 rounded-full text-xl z-50">
					<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
						class="w-6 h-6">
						<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
							d="M6 18L18 6M6 6l12 12" />
					</svg>
				</button>
				<div class="flex flex-col md:flex-row w-full mt-10 items-center md:items-start">
					<div class="md:w-[30%] w-full flex items-center justify-start md:justify-center p-6">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/services-assets/pop-assets/360.png" alt="service asset"
							class="service-image object-contain mt-2" />
					</div>

					<div
						class="md:w-[70%] w-full p-4 flex flex-col justify-center mt-2 md:justify-center pr-0 md:pr-20">
						<div class="flex flex-col justify-center">
							<h2 class="uppercase text-[28px] text-[#272cf7] leading-tight mb-1">360 marketing CAMPAIGNS
							</h2>
							<p class="text-sm text-gray-700">
								We build cross-channel campaigns that deliver a unified brand message.
								From print to digital to on-ground—we ensure every touchpoint works together.

							</p>
						</div>
					</div>
				</div>

				<div class="flex flex-col md:flex-row w-full mt-10 items-center md:items-start">
					<div class="md:w-[30%] w-full flex items-center justify-start md:justify-center p-6">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/services-assets/pop-assets/guerrilla.png" alt="service asset"
							class="service-image object-contain mt-4" />
					</div>

					<div
						class="md:w-[70%] w-full p-4 flex flex-col justify-center mt-2 md:justify-center pr-0 md:pr-20">
						<div class="flex flex-col justify-center">
							<h2 class="uppercase text-[28px] text-[#272cf7] leading-tight mb-1">GUERRILLA marketing</h2>
							<p class="text-sm text-gray-700">
								We design unconventional, high-impact brand activations in public spaces.
								By turning everyday environments into storytelling platforms, we create buzz and
								engagement.

							</p>
						</div>
					</div>
				</div>

				<div class="flex flex-col md:flex-row w-full mt-10 items-center md:items-start pb-10">
					<div class="md:w-[30%] w-full flex items-center justify-start md:justify-center p-6">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/services-assets/pop-assets/sponsor.png" alt="service asset"
							class="service-image object-contain mt-6" />
					</div>

					<div
						class="md:w-[70%] w-full p-4 flex flex-col justify-center mt-2 md:justify-center pr-0 md:pr-20">
						<div class="flex flex-col justify-center">
							<h2 class="uppercase text-[28px] text-[#272cf7] leading-tight mb-1">sponsorships & partnerships
							</h2>
							<p class="text-sm text-gray-700">
								We find and manage brand alignments that amplify your message.
								From events to co-branded content, we unlock new audiences and value.
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- INTEGRATED MARKETING Modal end -->

	<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/locomotive-scroll@4.1.4/dist/locomotive-scroll.min.js"></script>
	<script src="https://unpkg.com/imagesloaded@5/imagesloaded.pkgd.min.js"></script>



	<script>
		let locoScrollInstance;
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
		// loading start
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
				setTimeout(() => {
					loader.classList.add("opacity-0");
					loader.classList.add("hidden")
				}, 1000); // matches transition duration
			}
		});
		// loading end
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
		gsap.registerPlugin(ScrollTrigger);

		const scrollContainer = document.querySelector("[data-scroll-container]");

		function initSmoothScroll() {
			const locoScroll = new LocomotiveScroll({
				el: scrollContainer,
				smooth: true,
				smoothMobile: true,
				inertia: 0.85,
				multiplier: 2,
				getDirection: true
			});
			locoScrollInstance = locoScroll;

			// load popup from url
			const urlParams = new URLSearchParams(window.location.search);
			const activeWorkDetail = urlParams.get('details');

			if (activeWorkDetail) {
				openServiceModal(activeWorkDetail)
			}

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
			gsap.utils.toArray(".animate-text").forEach((el) => {
				gsap.from(el, {
					opacity: 0,
					y: 40,
					duration: 1.2,
					ease: "power3.out", // smooth and natural
					scrollTrigger: {
						trigger: el,
						start: "top 85%",
						end: "bottom top",
						scrub: true,
					}
				});
			});

			requestAnimationFrame(() => {
				ScrollTrigger.refresh();
			});
		}

		function loadGsap() {
			// Your GSAP animation
			gsap.utils.toArray(".posters").forEach((poster) => {
				const image = poster.querySelector("img");

				gsap.fromTo(
					image, {
						y: -50,
						scale: 1.05
					}, {
						y: 50,
						scale: 1.15,
						ease: "none",
						scrollTrigger: {
							trigger: poster,
							scroller: scrollContainer,
							start: "top bottom",
							end: "bottom top",
							scrub: true,
							invalidateOnRefresh: true
						}
					}
				);
			});
		}

		window.addEventListener("load", () => {
			imagesLoaded(scrollContainer, {
				background: true
			}, () => {
				initSmoothScroll();
				setTimeout(() => {
					loadGsap();
				});
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
			const scrollY = locoScrollInstance ? locoScrollInstance.scroll.instance.scroll.y : 0;

			// Get elements that navbar might be overlapping
			const sections = document.querySelectorAll('section');
			let currentSection = null;

			// Find which section the navbar is currently overlapping
			for (const section of sections) {
				const sectionTop = section.offsetTop; // Get section's position relative to the top of the page
				const sectionHeight = section.offsetHeight;

				if (scrollY >= sectionTop && scrollY < sectionTop + sectionHeight) {
					currentSection = section;
					break;
				}

				// const rect = section.getBoundingClientRect();
				// // If the navbar is within the top portion of this section
				// if (rect.top <= 80 && rect.bottom > 0) {
				// 	currentSection = section;
				// 	break;
				// }
			}

			// If we found a current section, get its background color
			if (currentSection) {
				const sectionBgColor = window.getComputedStyle(currentSection).backgroundColor;
				const sectionBgImage = window.getComputedStyle(currentSection).backgroundImage;
				if (currentSection.id === 'service-md-banner' || currentSection.id === 'service-lg-banner') {
					logo.style.filter = "invert(0)";
					menuIcon.style.filter = "invert(0)";
				} else if (currentSection.id === 'service-grid') {
					const innerDiv = currentSection.querySelector('#ads-section-right');
					let divRect;
					if (innerDiv) {
						divRect = innerDiv.getBoundingClientRect();
					}
					if ((innerDiv && divRect && divRect.top <= 80 && divRect.bottom > 0)) {
						logo.style.filter = "invert(0)";
						menuIcon.style.filter = "invert(0)";
					} else {
						logo.style.filter = "invert(1)";
						menuIcon.style.filter = "invert(1)";
					}

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

	<script>
		function openServiceModal(id) {
			const modal = document.getElementById(id);
			modal.classList.remove('hidden');
			if (locoScrollInstance) locoScrollInstance.stop();
		}

		function closeServiceModal(id) {
			document.getElementById(id).classList.add('hidden');
			if (locoScrollInstance) locoScrollInstance.start();
		}

		// Add event listeners to close modals when clicking outside the content box
		// document.addEventListener('DOMContentLoaded', function () {
		// 	// Get all service modals
		// 	const serviceModals = document.querySelectorAll('[id$="-popup"]');

		// 	// Add click event listener to each modal
		// 	serviceModals.forEach(modal => {
		// 		modal.addEventListener('click', function (e) {
		// 			// Get the modal content box (the white background div)
		// 			const contentBox = modal.querySelector('.relative.bg-white');

		// 			// Check if the click was outside the content box
		// 			// If the clicked element is not inside the content box, close the modal
		// 			if (!contentBox.contains(e.target) && e.target !== contentBox) {
		// 				closeServiceModal(modal.id);
		// 			}
		// 		});
		// 	});
		// });

		document.addEventListener('DOMContentLoaded', function() {
			// Get all service modals
			const serviceModals = document.querySelectorAll('[id$="-popup"]');

			// Function to close modal on ESC key press
			document.addEventListener('keydown', function(e) {
				if (e.key === 'Escape') { // Check if ESC key was pressed
					serviceModals.forEach(modal => {
						const contentBox = modal.querySelector('.relative.bg-white');

						if (!contentBox.contains(e.target) && e.target !== contentBox) {
							closeServiceModal(modal.id);
						}
					});
				}
			});

			// Add click event listener to each modal
			serviceModals.forEach(modal => {
				modal.addEventListener('click', function(e) {
					const contentBox = modal.querySelector('.relative.bg-white');

					if (!contentBox.contains(e.target) && e.target !== contentBox) {
						closeServiceModal(modal.id);
					}
				});
			});
		});
	</script>

</body>

</html>