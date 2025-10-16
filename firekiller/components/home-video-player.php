<head>
    <!-- Load Tailwind CSS for modern styling -->
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        /* Optional: Custom styling for the play button circle and shadow */
        .video-icon {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 80px;
            height: 80px;
            border-radius: 50%;
            background-color: #d90429;
            /* Fire Red */
            color: white;
            transition: all 0.3s ease;
            box-shadow: 0 0 0 0 rgba(217, 4, 41, 0.7);
            animation: pulse 2s infinite;
            z-index: 10;
        }

        .video-icon:hover {
            transform: scale(1.05);
        }

        @keyframes pulse {
            0% {
                box-shadow: 0 0 0 0 rgba(217, 4, 41, 0.7);
            }

            70% {
                box-shadow: 0 0 0 15px rgba(217, 4, 41, 0);
            }

            100% {
                box-shadow: 0 0 0 0 rgba(217, 4, 41, 0);
            }
        }

        /* Utility class to simulate background image loading */
        .bg-firekiller {
            background-image: url('https://placehold.co/800x450/A30000/FFFFFF?text=FIREKILLER+VIDEO+PREVIEW');
        }

        .bg-panfire {
            background-image: url('https://placehold.co/800x450/003C5C/FFFFFF?text=PAN+FIRE+VIDEO+PREVIEW');
        }
    </style>
</head>

<body class="bg-gray-800 font-sans">

    <div class="">
        <section class="py-16 md:py-24 bg-gray-900 text-white">
            <div class="container max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <!-- Use 'flex-row' for default layout: DESC on LEFT, VIDEO on RIGHT -->
                <div class="flex flex-col lg:flex-row items-center gap-12">

                    <!-- LEFT SIDE: Description and Content (Order 2 on mobile, 1 on desktop) -->
                    <div class="lg:w-1/2 order-2 lg:order-1">
                        <h3 class="text-white text-3xl sm:text-4xl lg:text-5xl font-extrabold mb-4 leading-tight">
                            <span class="text-red-600">Firekiller</span> Fire Extinguisher
                        </h3>
                        <p class="text-sm font-bold text-red-500 mb-6 uppercase tracking-wider">
                            🔥 Fire does't wait. Neither should you!
                        </p>

                        <p class="text-gray-300 mb-6 lg:text-lg">
                            When a fire strikes, every second counts — and Firekiller is always ready. Designed to protect your home, kitchen, car, and office, it’s the safety essential every space needs. Though compact in size, it’s small but almighty against every flame, stopping fires before they spread. Don’t wait for danger — be prepared and stay protected with Firekiller.
                        </p>

                        <!-- Product Features List -->
                        <ul class="space-y-3 text-gray-400">
                            <li class="flex items-center text-lg font-medium text-white">
                                <svg class="w-6 h-6 mr-3 text-red-500 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.624-.921 1.924 0l1.43 4.39a1 1 0 00.95.69h4.632c.969 0 1.371 1.24.588 1.81l-3.75 2.73a1 1 0 00-.363 1.118l1.43 4.39c.3.921-.755 1.688-1.54 1.118l-3.75-2.73a1 1 0 00-1.176 0l-3.75 2.73c-.785.57-1.84-.197-1.54-1.118l1.43-4.39a1 1 0 00-.363-1.118l-3.75-2.73c-.783-.57-.381-1.81.588-1.81h4.632a1 1 0 00.95-.69l1.43-4.39z"></path>
                                </svg>
                                Multi-Class Protection - handles various types of fires with ease.
                            </li>
                            <li class="flex items-center text-lg font-medium text-white">
                                <svg class="w-6 h-6 mr-3 text-green-500 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                </svg>
                                Eco-Friendly - safe for the environment and your loved ones.
                            </li>
                            <li class="flex items-center text-lg font-medium text-white">
                                <svg class="w-6 h-6 mr-3 text-yellow-500 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M10 2a8 8 0 100 16 8 8 0 000-16zM8 11a1 1 0 112 0v1a1 1 0 11-2 0v-1z"></path>
                                </svg>
                                Portable - easy to carry, store, and keep within reach.
                            </li>
                            <li class="flex items-center text-lg font-medium text-white">
                                <svg class="w-6 h-6 mr-3 text-blue-400 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zm-4 7a4 4 0 00-4 4v1a1 1 0 001 1h8a1 1 0 001-1v-1a4 4 0 00-4-4h-2z"></path>
                                </svg>
                                User-Friendly - simple to use, even in high-stress moments.
                            </li>
                        </ul>
                    </div>

                    <!-- RIGHT SIDE: Video Area (Order 1 on mobile, 2 on desktop) -->
                    <div class="lg:w-1/2 order-1 lg:order-2 w-full">
                        <div class="rounded-xl overflow-hidden shadow-2xl relative">
                            <div class="aspect-w-16 aspect-h-9 relative" style="padding-bottom: 56.25%;">
                                <!-- Video Preview Image -->
                                <div class="absolute inset-0 bg-cover bg-center bg-firekiller">
                                    <a class="absolute inset-0 flex items-center justify-center"
                                        href="https://www.youtube.com/embed/ATI7vfCgwXE?autoplay=1&amp;showinfo=0"
                                        data-rel="lightcase:myCollection"
                                        aria-label="Play Firekiller Product Video">
                                        <div class="video-icon">
                                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l3-2a1 1 0 000-1.664l-3-2z" clip-rule="evenodd"></path>
                                            </svg>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- REUSABLE COMPONENT END: FIREKILLER -->

        <div class="h-2 w-full max-w-7xl mx-auto bg-gray-100"></div>

        <section class="py-16 md:py-24 bg-gray-900 text-white">
            <div class="container max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <!-- Use 'lg:flex-row-reverse' to swap the desktop layout -->
                <div class="flex flex-col lg:flex-row-reverse items-center gap-12">

                    <!-- LEFT SIDE (VISUALLY): Video Area (Order 1 on mobile, 1 on desktop) -->
                    <div class="lg:w-1/2 order-1 lg:order-1 w-full">
                        <div class="rounded-xl overflow-hidden shadow-2xl relative">
                            <div class="aspect-w-16 aspect-h-9 relative" style="padding-bottom: 56.25%;">
                                <!-- Video Preview Image -->
                                <div class="absolute inset-0 bg-cover bg-center bg-panfire">
                                    <a class="absolute inset-0 flex items-center justify-center"
                                        href="https://www.youtube.com/embed/S2p2nQ_X6_U?autoplay=1&amp;showinfo=0"
                                        data-rel="lightcase:myCollection"
                                        aria-label="Play Pan Fire Sachet Video">
                                        <div class="video-icon">
                                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l3-2a1 1 0 000-1.664l-3-2z" clip-rule="evenodd"></path>
                                            </svg>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- RIGHT SIDE (VISUALLY): Description and Content (Order 2 on mobile, 2 on desktop) -->
                    <div class="lg:w-1/2 order-2 lg:order-2">
                        <h3 class="text-white text-3xl sm:text-4xl lg:text-5xl font-extrabold mb-4 leading-tight">
                            <span class="text-red-400">Pan Fire Extinguisher</span> Sachet
                        </h3>
                        <p class="text-sm font-bold text-red-500 mb-6 uppercase tracking-wider">
                            Oustfire Pansafe Kitchen Sachet - Safety Made Simple!
                        </p>

                        <p class="text-gray-300 mb-6 lg:text-lg">
                            Just drop it in the flaming pan and watch the fire vanish instantly. It auto-activates on contact with fire — no setup. Compact, powerful, and hassle-free — Pansafe keeps your kitchen safe with zero effort.
                        </p>

                        <!-- Product Features List -->
                        <ul class="space-y-3 text-gray-400">
                            <li class="flex items-center text-lg font-medium text-white">
                                <span class="text-green-500 text-2xl mr-3">&check;</span>Fast, effective, and cleans in seconds
                            </li>
                            <li class="flex items-center text-lg font-medium text-white">
                                <span class="text-green-500 text-2xl mr-3">&check;</span>Non-toxic, food-safe, and eco-friendly
                            </li>
                            <li class="flex items-center text-lg font-medium text-white">
                                <span class="text-green-500 text-2xl mr-3">&check;</span>No mess, no damage, just instant fire control
                            </li>
                            <li class="flex items-center text-lg font-medium text-white">
                                <span class="text-green-500 text-2xl mr-3">&check;</span>Perfect for every kitchen - from homes to restaurants
                            </li>
                            <li class="flex items-center text-lg font-medium text-white">
                                <span class="text-green-500 text-2xl mr-3">&check;</span>Made in India
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </section>
        <!-- REUSABLE COMPONENT END: PAN FIRE -->

    </div>
</body>