<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Immersive Hero Component</title>
    <style>
        /* --- 1. Base Styles & Variables --- */
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap');

        :root {
            /* Default/Fallback Colors */
            --safety-red: #C81E1E;
            --accent-orange: #F59E0B;
            --dark-bg: #171717;
            --text-color: #ffffff;
            --light-text: #E5E7EB;
        }

        #hero-section {
            height: 100vh;
            width: 100%;
            /* position: relative; */
            background-color: #8c001a;
            transition: background-color 0.8s ease;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 40px 40px;
            box-sizing: border-box;
            /* Include padding in element's total width and height */
        }

        /* --- 2. Carousel/Slide Specific Styles --- */
        #slider-wrapper {
            flex-grow: 1;
            width: 100%;
            position: relative;
        }

        .slide-item {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            opacity: 0;
            visibility: hidden;
            transition: opacity 0.8s ease, transform 0.8s ease;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            pointer-events: none;
        }

        .slide-item.active {
            opacity: 1;
            visibility: visible;
            pointer-events: all;
        }

        /* The wrapper now centers the content within the available space */
        .slide-content-wrapper {
            width: 100%;
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            /* Vertically center the product area */
            align-items: center;
        }

        /* Main Product Layout (Desktop: Side-by-Side) */
        .product-area {
            flex-grow: 1;
            width: 100%;
            max-width: 1200px;
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
        }

        /* Desktop Positioning for details */
        .product-details-left,
        .product-details-right {
            position: absolute;
            z-index: 5;
            padding: 20px;
        }

        .product-details-left {
            left: 0;
            top: 50%;
            transform: translateY(-50%);
            text-align: left;
            max-width: 350px;
        }

        .product-details-right {
            /* Now empty as buttons were removed, but keeping structure for future use */
            right: 0;
            top: 50%;
            transform: translateY(-50%);
            text-align: right;
            max-width: 350px;
        }

        /* Product Image Styling (Centerpiece) */
        .product-image-container {
            position: relative;
            z-index: 8;
            padding: 20px;
        }

        .product-image {
            width: 100%;
            max-width: 450px;
            height: 50vh;
            filter: drop-shadow(0 15px 30px rgba(0, 0, 0, 0.5));
        }

        /* --- 3. Product Text Details --- */
        .product-name-large {
            font-size: 3rem;
            font-weight: 900;
            line-height: 0.9;
            text-transform: uppercase;
            color: var(--text-color);
            margin-bottom: 10px;
        }
        .product-name-large2 {
            font-size: 2rem;
            font-weight: 500;
            line-height: 0.9;
            text-transform: uppercase;
            color: var(--text-color);
            margin-bottom: 10px;
        }

        .product-subtitle {
            font-size: 1.2rem;
            font-weight: 300;
            color: var(--light-text);
        }

        .detail-small-label {
            font-size: 0.9rem;
            color: var(--light-text);
            opacity: 0.7;
            margin-top: 5px;
        }

        /* Navigation Arrows */
        .nav-btn {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            z-index: 30;
            background: rgba(255, 255, 255, 0.15);
            color: var(--text-color);
            border: none;
            padding: 15px;
            cursor: pointer;
            border-radius: 50%;
            transition: background 0.3s, transform 0.3s;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .nav-btn:hover {
            background: rgba(255, 255, 255, 0.3);
            transform: translateY(-50%) scale(1.1);
        }

        #prev-btn {
            left: 10px;
        }

        #next-btn {
            right: 10px;
        }

        /* Dot Navigation */
        #dot-navigation {
            position: absolute;
            bottom: 40px;
            left: 50%;
            transform: translateX(-50%);
            z-index: 30;
            display: flex;
            gap: 10px;
        }

        .dot {
            width: 10px;
            height: 10px;
            background-color: var(--light-text);
            opacity: 0.5;
            border-radius: 50%;
            cursor: pointer;
            transition: all 0.3s;
        }

        .dot.active {
            background-color: var(--accent-orange);
            opacity: 1;
            width: 25px;
            border-radius: 5px;
        }

        /* ==================================== */
        /* --- 4. RESPONSIVENESS (Mobile/Tablet) --- */
        /* ==================================== */

        /* Tablet and Smaller Desktop (Max 1024px) */
        @media (max-width: 1024px) {
            #hero-section {
                padding: 20px;
            }

            /* Change main product layout to stack items vertically */
            .product-area {
                flex-direction: column;
                justify-content: center;
                gap: 10px;
            }

            /* Product details must become relative, centered, and ordered */
            .product-details-left,
            .product-details-right {
                position: relative;
                /* Switch from absolute to relative positioning */
                top: auto;
                transform: none;
                text-align: center;
                margin: 0;
                padding: 0 10px;
                max-width: 100%;
            }

            /* Use order to stack elements correctly: Left Details (1) -> Image (2) -> Right Details (3) */
            .product-details-left {
                order: 1;
            }

            .product-image-container {
                order: 2;
            }

            .product-details-right {
                order: 3;
            }

            .product-image {
                max-width: 280px;
            }

            .product-name-large {
                font-size: 3rem;
            }

            .product-subtitle {
                font-size: 1.1rem;
            }

            #dot-navigation {
                bottom: 20px;
            }
        }

        /* Small Mobile Devices (Max 640px) */
        @media (max-width: 640px) {
            #hero-section {
                padding: 20px 10px;
            }

            .product-name-large {
                font-size: 2rem;
            }

            .product-subtitle {
                font-size: 0.9rem;
            }

            .nav-btn {
                padding: 10px;
            }

            #prev-btn {
                left: 5px;
            }

            #next-btn {
                right: 5px;
            }
        }
    </style>
</head>

<body>

    <!-- HERO SECTION: Detailed Product Carousel -->
    <header id="hero-section">

        <!-- SLIDER WRAPPER -->
        <div id="slider-wrapper">

            <!-- Slide 1: Extinguisher (Red BG) -->
            <div class="slide-item active" data-index="0" data-bg-color="#eb0004ff">
                <div class="slide-content-wrapper">
                    <!-- Main Product Area -->
                    <div class="product-area">
                        <!-- Details Left (Product Name and Specs) -->
                        <div class="product-details-left">
                            <p class="product-subtitle">Don't let Fire Steal Your Peace</p>
                            <h2 class="product-name-large">FireKiller</h2>
                            <h3 class="product-name-large2">is your home's silent shield</h3>
                            <p class="detail-small-label" style="margin-top: 20px;">Certified: UL 2A:10B:C</p>
                        </div>

                        <!-- Center Image -->
                        <div class="product-image-container">
                            <img src="./img/homePage/fireKiller-fire-extinguisher 1_edited.png" alt="Pro-Max 10 lbs Fire Extinguisher" class="product-image">
                        </div>

                        <!-- Details Right (Usage/Info) -->
                        <div class="product-details-right">
                            <!-- Removed: Quantity Selector Buttons -->
                            <p class="detail-small-label" style="margin-top: 20px;">
                                <a href="#" style="color: var(--text-color); text-decoration: none;">FireKiller Fire Extinguisher</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide 2: Smart Smoke Alarm (Dark Blue BG) -->
            <div class="slide-item" data-index="1" data-bg-color="#0085E7">
                <div class="slide-content-wrapper">
                    <div class="product-area">
                        <div class="product-details-left">
                           <p class="product-subtitle">Small Sachet, Big Safety</p>
                            <h2 class="product-name-large">Pansafe Kitchen Sachet</h2>
                            <h3 class="product-name-large2">You'r kitchen's silent firefighter.</h3>
                        </div>

                        <div class="product-image-container">
                            <img src="./img/homePage/pan-fire-sachet-1_edited.png" alt="Sentinel Smoke Alarm" class="product-image" style="max-width: 350px;">
                        </div>

                        <div class="product-details-right">
                            <!-- Removed: Quantity Selector Buttons -->
                            <p class="detail-small-label" style="margin-top: 20px;">
                                <a href="#" style="color: var(--text-color); text-decoration: none;">Outsfire Pan Fire Extinguisher Sachet</a>
                            </p>
                        </div>
                    </div>
                    <!-- Removed: Bottom Action Bar (Price/Buttons) -->
                </div>
            </div>

            <!-- Slide 3: Fire Blanket (Dark Green BG) -->
            <!-- <div class="slide-item" data-index="2" data-bg-color="#175e3a">
                <div class="slide-content-wrapper">
                    <div class="product-area">
                        <div class="product-details-left">
                            <h1 class="product-name-large">EMERGENCY</h1>
                            <h1 class="product-name-large">BLANKET</h1>
                            <p class="product-subtitle">Fiberglass Fire Suppression Blanket</p>
                            <p class="detail-small-label" style="margin-top: 20px;">Size: 40 x 60 inches</p>
                        </div>

                        <div class="product-image-container">
                            <img src="https://placehold.co/450x600/175e3a/F59E0B?text=FIRE+BLANKET" alt="Emergency Fire Blanket" class="product-image" style="max-width: 300px;">
                        </div>

                        <div class="product-details-right">
                            <p class="detail-small-label" style="margin-top: 20px;">
                                <a href="#" style="color: var(--text-color); text-decoration: none;">How to Deploy and Store Safely</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div> -->

        </div>

        <!-- NAVIGATION ARROWS -->
        <button id="prev-btn" aria-label="Previous Product" class="nav-btn">
            <svg width="24" height="24" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M15 19l-7-7 7-7"></path>
            </svg>
        </button>
        <button id="next-btn" aria-label="Next Product" class="nav-btn">
            <svg width="24" height="24" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M9 5l7 7-7 7"></path>
            </svg>
        </button>

        <!-- DOT NAVIGATION -->
        <div id="dot-navigation">
        </div>
    </header>

    <!-- JavaScript for Carousel Control -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const heroSection = document.getElementById('hero-section');
            const slides = document.querySelectorAll('.slide-item');
            const dotNavigation = document.getElementById('dot-navigation');
            const prevBtn = document.getElementById('prev-btn');
            const nextBtn = document.getElementById('next-btn');
            let currentSlide = 0;

            function showSlide(index) {
                // Handle looping
                let nextIndex = index;
                if (nextIndex >= slides.length) {
                    nextIndex = 0;
                } else if (nextIndex < 0) {
                    nextIndex = slides.length - 1;
                }

                slides.forEach((slide, i) => {
                    slide.classList.remove('active');
                });

                // Set the new active slide
                const nextSlideElement = slides[nextIndex];
                nextSlideElement.classList.add('active');
                currentSlide = nextIndex;

                // --- DYNAMIC BACKGROUND COLOR CHANGE ---
                const newColor = nextSlideElement.dataset.bgColor;
                if (newColor) {
                    heroSection.style.backgroundColor = newColor;
                }


                // Update dots
                document.querySelectorAll('.dot').forEach((dot, i) => {
                    dot.classList.remove('active');
                    if (i === currentSlide) {
                        dot.classList.add('active');
                    }
                });
            }

            /** Moves to the next slide. */
            function nextSlide() {
                showSlide(currentSlide + 1);
            }

            /** Moves to the previous slide. */
            function prevSlide() {
                showSlide(currentSlide - 1);
            }

            /** Initializes the dot navigation. */
            function initializeDots() {
                slides.forEach((_, index) => {
                    const dot = document.createElement('span');
                    dot.classList.add('dot');
                    dot.dataset.index = index;
                    dot.addEventListener('click', () => {
                        showSlide(index);
                    });
                    dotNavigation.appendChild(dot);
                });
            }

            // --- Event Listeners ---
            prevBtn.addEventListener('click', prevSlide);
            nextBtn.addEventListener('click', nextSlide);

            // Initialize the slider
            initializeDots();
            showSlide(0); // Ensure the first slide is visible, active, and sets the initial BG color
        });
    </script>
</body>

</html>