<?php
/**
 * Template Name: IU AI Home Template
 * Description: Custom tech home template built sequentially.
 */

get_header(); ?>

    <!-- Load Tailwind CSS for utility classes -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Premium Tech Template Override Wrapper -->
    <div id="premium-tech-home-wrap"
        class="w-screen relative left-1/2 right-1/2 -ml-[50vw] -mr-[50vw] max-w-[100vw] font-['Inter',-apple-system,BlinkMacSystemFont,'Segoe_UI',Roboto,sans-serif] bg-black text-white overflow-x-hidden box-border antialiased">

        
        <!-- SECTION 1: HERO OVERRIDE -->
        <section class="tech-hero relative w-full min-h-screen max-md:min-h-[90vh] flex items-center overflow-hidden pt-[60px] max-md:pt-[20px] pb-[60px] px-[5%] max-md:pb-[80px]">
            <!-- Video Background via Vimeo Iframe -->
            <iframe
                class="hero-video-bg absolute top-1/2 left-1/2 w-[100vw] h-[56.25vw] min-h-screen min-w-[177.77vh] -translate-x-1/2 -translate-y-1/2 pointer-events-none z-0"
                src="https://player.vimeo.com/video/1172863160?muted=1&autoplay=1&loop=1&background=1" frameborder="0"
                allow="autoplay; fullscreen; picture-in-picture" allowfullscreen>
            </iframe>

            <!-- Dark gradient shadow for readable text -->
            <div
                class="hero-overlay absolute inset-0 bg-[linear-gradient(90deg,rgba(0,0,0,0.85)_0%,rgba(0,0,0,0.4)_40%,transparent_100%),linear-gradient(0deg,rgba(0,0,0,0.4)_0%,transparent_30%)] max-md:bg-[rgba(0,0,0,0.65)] z-[1]">
            </div>

            <div
                class="hero-content relative z-[5] max-w-[800px] max-md:pt-5 max-md:text-center max-md:flex max-md:flex-col max-md:items-center max-md:w-full">
                <h1
                    class="text-[clamp(2.5rem,4vw,4.5rem)] font-bold leading-[1.15] tracking-[-0.02em] m-0 mb-6 text-white max-lg:text-[3rem] max-md:text-[2.2rem]">
                    <style>
                        @keyframes text-gradient {
                            to {
                                background-position: 200% center;
                            }
                        }

                        .animate-text-gradient {
                            animation: text-gradient 3s linear infinite;
                        }
                    </style>
                    Engineering the Next<br>Generation of Digital<br>Systems with <span
                        class="bg-[linear-gradient(to_right,#1E6AFF,#00e5ff,#1E6AFF)] bg-[length:200%_auto] bg-clip-text text-transparent animate-text-gradient drop-shadow-[0_0_15px_rgba(0,195,255,0.4)]">AI</span>
                </h1>
                <p class="text-[16px] leading-[1.6] text-white m-0 mb-[2.5rem] max-w-[650px] font-[400] max-md:mb-8">
                    Idea Usher engineers secure, scalable digital systems by combining strong architecture, data
                    engineering, and AI capabilities, helping organizations move from strategy to reliable systems in
                    production.</p>

                <a href="#strategy"
                    class="btn-strategy group inline-flex items-center bg-gradient-to-r from-[#1E6AFF] to-[#000000] hover:from-[#1558d6] hover:to-[#1a1a1a] text-white rounded-full py-[14px] px-[32px] text-base font-semibold transition-colors duration-300 relative border-2 border-transparent bg-origin-border cursor-pointer overflow-hidden no-underline outline-none">
                    <span class="btn-strategy-text-wrap relative block h-[1.25em] overflow-hidden">
                        <!-- data-text drives the pseudo-element rolling text -->
                        <span
                            class="btn-strategy-text block leading-[1.25em] transition-transform duration-[400ms] ease-[cubic-bezier(0.65,0,0.35,1)] group-hover:-translate-y-full after:content-[attr(data-text)] after:absolute after:top-full after:left-0 after:w-full"
                            data-text="Consult Our Strategy Team">Consult Our Strategy Team</span>
                    </span>
                    <span
                        class="btn-arrow-wrap relative inline-flex items-center justify-center w-4 h-4 ml-3 overflow-hidden">
                        <span
                            class="btn-arrow-icon flex transition-transform duration-[400ms] ease-[cubic-bezier(0.65,0,0.35,1)] w-4 h-4 group-hover:translate-x-full group-hover:-translate-y-full">
                            <svg viewBox="0 0 24 24" fill="none" class="w-4 h-4 stroke-current shrink-0"
                                stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                <line x1="5" y1="19" x2="19" y2="5"></line>
                                <polyline points="9 5 19 5 19 15"></polyline>
                            </svg>
                            <svg viewBox="0 0 24 24" fill="none"
                                class="absolute top-full -left-full w-4 h-4 stroke-current shrink-0" stroke-width="2.5"
                                stroke-linecap="round" stroke-linejoin="round">
                                <line x1="5" y1="19" x2="19" y2="5"></line>
                                <polyline points="9 5 19 5 19 15"></polyline>
                            </svg>
                        </span>
                    </span>
                </a>
            </div>

            <!-- Glassmorphism Carousel Bottom Right -->
            <div
                class="hero-awards-container absolute bottom-[40px] right-[40px] z-[5] w-[490px] overflow-x-auto overflow-y-hidden [scrollbar-width:none] cursor-grab active:cursor-grabbing touch-pan-x max-lg:w-[440px] max-md:w-full max-md:right-0 max-md:bottom-[15px] max-md:max-w-full [&::-webkit-scrollbar]:hidden">
                <div class="awards-track flex gap-[20px] w-max pr-[20px]">

                    <!-- Card 1 -->
                    <div
                        class="award-card w-[150px] h-[80px] shrink-0 bg-[rgba(25,25,35,0.5)] backdrop-blur-[4.5px] border border-white/15 rounded-xl flex items-center justify-center py-[6px] px-[10px] shadow-[0_4px_20px_0_rgba(0,0,0,0.3)]">
                        <div class="logo-times flex flex-col items-center text-center text-[#d4af37] scale-[0.65]">
                            <div class="top text-[10px] uppercase tracking-[1px]">Times</div>
                            <div class="mid text-[16px] font-bold leading-[1.1] text-white">BUSINESS<br>AWARDS</div>
                            <div class="bot text-[9px] text-[#aaa] mt-1 whitespace-nowrap">Tech Company of The Year
                            </div>
                        </div>
                    </div>

                    <!-- Card 2 -->
                    <div
                        class="award-card w-[150px] h-[80px] shrink-0 bg-[rgba(25,25,35,0.5)] backdrop-blur-[4.5px] border border-white/15 rounded-xl flex items-center justify-center py-[6px] px-[10px] shadow-[0_4px_20px_0_rgba(0,0,0,0.3)]">
                        <div class="logo-et flex items-center scale-[0.7] origin-center w-full justify-center">
                            <div
                                class="badge bg-white text-black py-[2px] px-[4px] mr-[6px] text-[12px] font-extrabold inline-block rounded-[2px]">
                                ET</div>
                            <div class="text text-[10px] font-bold uppercase text-left leading-[1.1] text-white">
                                Industry<br>Change Makers</div>
                        </div>
                    </div>

                    <!-- Card 3 -->
                    <div
                        class="award-card w-[150px] h-[80px] shrink-0 bg-[rgba(25,25,35,0.5)] backdrop-blur-[4.5px] border border-white/15 rounded-xl flex items-center justify-center py-[6px] px-[10px] shadow-[0_4px_20px_0_rgba(0,0,0,0.3)]">
                        <div class="logo-del text-left scale-[0.75] origin-center">
                            <div class="title text-[16px] font-extrabold text-[#86BC25] leading-none">Deloitte.</div>
                            <div class="sub text-[9px] text-white mt-[2px] whitespace-nowrap">Technology Fast 50 <span
                                    class="text-[#86BC25]">India</span></div>
                        </div>
                    </div>

                    <!-- SET 2 DUPLICATES (For infinite right drag) -->
                    <div
                        class="award-card w-[150px] h-[80px] shrink-0 bg-[rgba(25,25,35,0.5)] backdrop-blur-[4.5px] border border-white/15 rounded-xl flex items-center justify-center py-[6px] px-[10px] shadow-[0_4px_20px_0_rgba(0,0,0,0.3)]">
                        <div class="logo-times flex flex-col items-center text-center text-[#d4af37] scale-[0.65]">
                            <div class="top text-[10px] uppercase tracking-[1px]">Times</div>
                            <div class="mid text-[16px] font-bold leading-[1.1] text-white">BUSINESS<br>AWARDS</div>
                            <div class="bot text-[9px] text-[#aaa] mt-1 whitespace-nowrap">Tech Company of The Year
                            </div>
                        </div>
                    </div>

                    <div
                        class="award-card w-[150px] h-[80px] shrink-0 bg-[rgba(25,25,35,0.5)] backdrop-blur-[4.5px] border border-white/15 rounded-xl flex items-center justify-center py-[6px] px-[10px] shadow-[0_4px_20px_0_rgba(0,0,0,0.3)]">
                        <div class="logo-et flex items-center scale-[0.7] origin-center w-full justify-center">
                            <div
                                class="badge bg-white text-black py-[2px] px-[4px] mr-[6px] text-[12px] font-extrabold inline-block rounded-[2px]">
                                ET</div>
                            <div class="text text-[10px] font-bold uppercase text-left leading-[1.1] text-white">
                                Industry<br>Change Makers</div>
                        </div>
                    </div>

                    <div
                        class="award-card w-[150px] h-[80px] shrink-0 bg-[rgba(25,25,35,0.5)] backdrop-blur-[4.5px] border border-white/15 rounded-xl flex items-center justify-center py-[6px] px-[10px] shadow-[0_4px_20px_0_rgba(0,0,0,0.3)]">
                        <div class="logo-del text-left scale-[0.75] origin-center">
                            <div class="title text-[16px] font-extrabold text-[#86BC25] leading-none">Deloitte.</div>
                            <div class="sub text-[9px] text-white mt-[2px] whitespace-nowrap">Technology Fast 50 <span
                                    class="text-[#86BC25]">India</span></div>
                        </div>
                    </div>

                    <!-- SET 3 DUPLICATES (For infinite left drag) -->
                    <div
                        class="award-card w-[150px] h-[80px] shrink-0 bg-[rgba(25,25,35,0.5)] backdrop-blur-[4.5px] border border-white/15 rounded-xl flex items-center justify-center py-[6px] px-[10px] shadow-[0_4px_20px_0_rgba(0,0,0,0.3)]">
                        <div class="logo-times flex flex-col items-center text-center text-[#d4af37] scale-[0.65]">
                            <div class="top text-[10px] uppercase tracking-[1px]">Times</div>
                            <div class="mid text-[16px] font-bold leading-[1.1] text-white">BUSINESS<br>AWARDS</div>
                            <div class="bot text-[9px] text-[#aaa] mt-1 whitespace-nowrap">Tech Company of The Year
                            </div>
                        </div>
                    </div>

                    <div
                        class="award-card w-[150px] h-[80px] shrink-0 bg-[rgba(25,25,35,0.5)] backdrop-blur-[4.5px] border border-white/15 rounded-xl flex items-center justify-center py-[6px] px-[10px] shadow-[0_4px_20px_0_rgba(0,0,0,0.3)]">
                        <div class="logo-et flex items-center scale-[0.7] origin-center w-full justify-center">
                            <div
                                class="badge bg-white text-black py-[2px] px-[4px] mr-[6px] text-[12px] font-extrabold inline-block rounded-[2px]">
                                ET</div>
                            <div class="text text-[10px] font-bold uppercase text-left leading-[1.1] text-white">
                                Industry<br>Change Makers</div>
                        </div>
                    </div>

                    <div
                        class="award-card w-[150px] h-[80px] shrink-0 bg-[rgba(25,25,35,0.5)] backdrop-blur-[4.5px] border border-white/15 rounded-xl flex items-center justify-center py-[6px] px-[10px] shadow-[0_4px_20px_0_rgba(0,0,0,0.3)]">
                        <div class="logo-del text-left scale-[0.75] origin-center">
                            <div class="title text-[16px] font-extrabold text-[#86BC25] leading-none">Deloitte.</div>
                            <div class="sub text-[9px] text-white mt-[2px] whitespace-nowrap">Technology Fast 50 <span
                                    class="text-[#86BC25]">India</span></div>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Carousel Native Drag Script -->
            <script>
                document.addEventListener('DOMContentLoaded', () => {
                    const slider = document.querySelector('.hero-awards-container');
                    if (!slider) return;

                    // Set initial position to the middle clone set (490px instead of 510px due to precise width) 
                    // This allows grabbing and dragging left immediately.
                    slider.scrollLeft = 490;

                    let isDown = false;
                    let startX;
                    let scrollLeft;

                    // --- Mouse Drag Events ---
                    slider.addEventListener('mousedown', (e) => {
                        isDown = true;
                        slider.classList.add('active:cursor-grabbing');
                        startX = e.pageX - slider.offsetLeft;
                        scrollLeft = slider.scrollLeft;
                    });

                    slider.addEventListener('mouseleave', () => {
                        isDown = false;
                        slider.classList.remove('active:cursor-grabbing');
                    });

                    slider.addEventListener('mouseup', () => {
                        isDown = false;
                        slider.classList.remove('active:cursor-grabbing');
                    });

                    slider.addEventListener('mousemove', (e) => {
                        if (!isDown) return;
                        e.preventDefault();
                        const x = e.pageX - slider.offsetLeft;
                        const walk = (x - startX) * 1.5;
                        slider.scrollLeft = scrollLeft - walk;
                        checkLoop();
                    });

                    // --- Touch Drag Events ---
                    slider.addEventListener('touchstart', (e) => {
                        isDown = true;
                        startX = e.touches[0].pageX - slider.offsetLeft;
                        scrollLeft = slider.scrollLeft;
                    }, { passive: true });

                    slider.addEventListener('touchend', () => {
                        isDown = false;
                    });

                    slider.addEventListener('touchmove', (e) => {
                        if (!isDown) return;
                        const x = e.touches[0].pageX - slider.offsetLeft;
                        const walk = (x - startX) * 1.5;
                        slider.scrollLeft = scrollLeft - walk;
                        checkLoop();
                    }, { passive: true });

                    // --- Infinite Loop Logic ---
                    function checkLoop() {
                        // Total track width: 3 sets * 490 = 1470px
                        // When scrollLeft hits 980, we are fully on SET 3. We instantly jump back to SET 2 (490)
                        if (slider.scrollLeft >= 980) {
                            slider.scrollLeft -= 490;
                            if (isDown) scrollLeft -= 490; // offset drag anchor
                        }
                        // When scrollLeft hits 0, we are fully on SET 1. We instantly jump ahead to SET 2 (490)
                        else if (slider.scrollLeft <= 0) {
                            slider.scrollLeft += 490;
                            if (isDown) scrollLeft += 490;
                        }
                    }

                    // --- Continuous Auto-play ---
                    setInterval(() => {
                        // Only auto-play if the user isn't holding the carousel
                        if (!isDown) {
                            slider.scrollLeft += 1;
                            checkLoop();
                        }
                    }, 25);
                });
            </script>
        </section>

        <!-- SECTION 2: SERVICES GRID -->
        <section class="tech-section-2 relative w-full bg-[#fcfcfc] text-[#111111] pt-[60px] pb-0 px-0 overflow-hidden">
            <div
                class="tech-s2-header scroll-reveal opacity-0 translate-y-[40px] transition-all duration-[800ms] ease-[cubic-bezier(0.25,0.46,0.45,0.94)] [&.active]:opacity-100 [&.active]:translate-y-0 text-center mb-[40px] px-[5%]">
                <h2
                    class="text-[clamp(2rem,3.5vw,3.2rem)] font-medium leading-[1.3] text-[#111] tracking-[-0.02em] m-0">
                    Beyond Development.<br><strong class="font-bold">We Deliver Transformation.</strong></h2>
            </div>

            <div class="tech-s2-grid flex flex-wrap border-y border-[#e2e2e2] bg-[#fcfcfc]">
                <!-- Card 1 -->
                <div class="tech-s2-card scroll-reveal opacity-0 translate-y-[40px] transition-all duration-[800ms] ease-[cubic-bezier(0.25,0.46,0.45,0.94)] [&.active]:opacity-100 [&.active]:translate-y-0 hover:[&.active]:-translate-y-1 flex-[1_1_25%] min-w-[250px] border-r border-[#e2e2e2] px-[30px] pt-[60px] pb-[80px] max-md:py-[40px] flex flex-col items-start bg-transparent text-left hover:bg-white hover:shadow-[0_10px_40px_rgba(0,0,0,0.04)] hover:-translate-y-1 hover:z-10 last:border-r-0 max-lg:flex-[1_1_50%] max-lg:border-b max-lg:even:border-r-0 max-md:flex-[1_1_100%] max-md:border-r-0 max-md:border-b"
                    style="transition-delay: 0.1s !important;">
                    <div
                        class="tech-s2-icon w-[54px] h-[54px] mb-[40px] max-md:mb-[20px] flex items-center justify-start">
                        <svg viewBox="0 0 48 48" fill="none" class="w-full h-full" stroke="#111" stroke-width="2.5"
                            stroke-linecap="round" stroke-linejoin="round">
                            <rect x="8" y="14" width="32" height="24" rx="2" stroke="#111" />
                            <path d="M14 6 L18 6 L18 10" stroke="#0055FF" />
                            <path d="M14 6 L14 14" stroke="#0055FF" />
                            <path d="M34 42 L30 42 L30 38" stroke="#0055FF" />
                            <path d="M34 42 L34 34" stroke="#0055FF" />
                        </svg>
                    </div>
                    <h3 class="text-[1.1rem] font-bold text-[#111] m-0 mb-[20px] leading-[1.4]">Strategic
                        Technology<br>Consulting</h3>
                    <p class="text-[0.9rem] text-[#444] leading-[1.6] m-0 mb-[40px] max-md:mb-[30px] font-medium">From
                        architecture
                        audits to digital transformation strategy, we help leaders align technology with business goals
                        for measurable ROI.</p>
                    <a href="#consulting"
                        class="tech-s2-btn group mt-auto border border-[#111] rounded-full py-[10px] px-[20px] text-[#111] bg-white text-[0.75rem] font-semibold no-underline inline-flex items-center cursor-pointer transition-all duration-300 relative overflow-hidden">
                        <span class="btn-s2-text-wrap relative block h-[1.25em] overflow-hidden">
                            <span
                                class="block leading-[1.25em] transition-transform duration-[400ms] ease-[cubic-bezier(0.65,0,0.35,1)] group-hover:-translate-y-full after:content-[attr(data-text)] after:absolute after:top-full after:left-0 after:w-full"
                                data-text="View Consulting Services">View Consulting Services</span>
                        </span>
                        <span
                            class="btn-arrow-wrap relative inline-flex items-center justify-center w-3 h-3 ml-2 overflow-hidden">
                            <span
                                class="btn-arrow-icon flex transition-transform duration-[400ms] ease-[cubic-bezier(0.65,0,0.35,1)] w-3 h-3 group-hover:translate-x-full group-hover:-translate-y-full">
                                <svg viewBox="0 0 24 24" fill="none" class="w-3 h-3 stroke-current shrink-0"
                                    stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                    <line x1="5" y1="19" x2="19" y2="5"></line>
                                    <polyline points="9 5 19 5 19 15"></polyline>
                                </svg>
                                <svg viewBox="0 0 24 24" fill="none"
                                    class="absolute top-full -left-full w-3 h-3 stroke-current shrink-0"
                                    stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                    <line x1="5" y1="19" x2="19" y2="5"></line>
                                    <polyline points="9 5 19 5 19 15"></polyline>
                                </svg>
                            </span>
                        </span>
                    </a>
                </div>

                <!-- Card 2 -->
                <div class="tech-s2-card scroll-reveal opacity-0 translate-y-[40px] transition-all duration-[800ms] ease-[cubic-bezier(0.25,0.46,0.45,0.94)] [&.active]:opacity-100 [&.active]:translate-y-0 hover:[&.active]:-translate-y-1 flex-[1_1_25%] min-w-[250px] border-r border-[#e2e2e2] px-[30px] pt-[60px] pb-[80px] max-md:py-[40px] flex flex-col items-start bg-transparent text-left hover:bg-white hover:shadow-[0_10px_40px_rgba(0,0,0,0.04)] hover:-translate-y-1 hover:z-10 last:border-r-0 max-lg:flex-[1_1_50%] max-lg:border-b max-lg:even:border-r-0 max-md:flex-[1_1_100%] max-md:border-r-0 max-md:border-b"
                    style="transition-delay: 0.2s !important;">
                    <div
                        class="tech-s2-icon w-[54px] h-[54px] mb-[40px] max-md:mb-[20px] flex items-center justify-start">
                        <svg viewBox="0 0 48 48" fill="none" class="w-full h-full" stroke="#111" stroke-width="2.5"
                            stroke-linecap="round" stroke-linejoin="round">
                            <rect x="6" y="10" width="36" height="22" rx="2" stroke="#111" />
                            <path d="M18 32 L30 32" stroke="#111" />
                            <path d="M24 32 L24 38" stroke="#111" />
                            <path d="M16 38 L32 38" stroke="#111" />
                            <polyline points="14,17 10,21 14,25" stroke="#0055FF" />
                            <polyline points="34,17 38,21 34,25" stroke="#0055FF" />
                            <line x1="26" y1="15" x2="22" y2="27" stroke="#0055FF" />
                        </svg>
                    </div>
                    <h3 class="text-[1.1rem] font-bold text-[#111] m-0 mb-[20px] leading-[1.4]">Digital
                        Product<br>Development & Engineering</h3>
                    <p class="text-[0.9rem] text-[#444] leading-[1.6] m-0 mb-[40px] max-md:mb-[30px] font-medium">As
                        your digital product
                        engineering company, we handle the full lifecycle of software development—from cloud-native
                        applications to complex ERP systems.</p>
                    <a href="#engineering"
                        class="tech-s2-btn group mt-auto border border-[#111] rounded-full py-[10px] px-[20px] text-[#111] bg-white text-[0.75rem] font-semibold no-underline inline-flex items-center cursor-pointer transition-all duration-300 relative overflow-hidden">
                        <span class="btn-s2-text-wrap relative block h-[1.25em] overflow-hidden">
                            <span
                                class="block leading-[1.25em] transition-transform duration-[400ms] ease-[cubic-bezier(0.65,0,0.35,1)] group-hover:-translate-y-full after:content-[attr(data-text)] after:absolute after:top-full after:left-0 after:w-full"
                                data-text="View Product Engineering Services">View Product Engineering Services</span>
                        </span>
                        <span
                            class="btn-arrow-wrap relative inline-flex items-center justify-center w-3 h-3 ml-2 overflow-hidden">
                            <span
                                class="btn-arrow-icon flex transition-transform duration-[400ms] ease-[cubic-bezier(0.65,0,0.35,1)] w-3 h-3 group-hover:translate-x-full group-hover:-translate-y-full">
                                <svg viewBox="0 0 24 24" fill="none" class="w-3 h-3 stroke-current shrink-0"
                                    stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                    <line x1="5" y1="19" x2="19" y2="5"></line>
                                    <polyline points="9 5 19 5 19 15"></polyline>
                                </svg>
                                <svg viewBox="0 0 24 24" fill="none"
                                    class="absolute top-full -left-full w-3 h-3 stroke-current shrink-0"
                                    stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                    <line x1="5" y1="19" x2="19" y2="5"></line>
                                    <polyline points="9 5 19 5 19 15"></polyline>
                                </svg>
                            </span>
                        </span>
                    </a>
                </div>

                <!-- Card 3 -->
                <div class="tech-s2-card scroll-reveal opacity-0 translate-y-[40px] transition-all duration-[800ms] ease-[cubic-bezier(0.25,0.46,0.45,0.94)] [&.active]:opacity-100 [&.active]:translate-y-0 hover:[&.active]:-translate-y-1 flex-[1_1_25%] min-w-[250px] border-r border-[#e2e2e2] px-[30px] pt-[60px] pb-[80px] max-md:py-[40px] flex flex-col items-start bg-transparent text-left hover:bg-white hover:shadow-[0_10px_40px_rgba(0,0,0,0.04)] hover:-translate-y-1 hover:z-10 last:border-r-0 max-lg:flex-[1_1_50%] max-lg:border-b max-lg:even:border-r-0 max-md:flex-[1_1_100%] max-md:border-r-0 max-md:border-b"
                    style="transition-delay: 0.3s !important;">
                    <div
                        class="tech-s2-icon w-[54px] h-[54px] mb-[40px] max-md:mb-[20px] flex items-center justify-start">
                        <svg viewBox="0 0 48 48" fill="none" class="w-full h-full" stroke="#111" stroke-width="2.5"
                            stroke-linecap="round" stroke-linejoin="round">
                            <rect x="10" y="24" width="10" height="10" rx="1" stroke="#111" />
                            <rect x="24" y="24" width="10" height="10" rx="1" stroke="#111" />
                            <rect x="10" y="10" width="10" height="10" rx="1" stroke="#111" />
                            <path d="M29 8 L31 13 L36 15 L31 17 L29 22 L27 17 L22 15 L27 13 Z" fill="#0055FF"
                                stroke="#0055FF" stroke-width="1" />
                            <path d="M38 6 L39 9 L42 10 L39 11 L38 14 L37 11 L34 10 L37 9 Z" fill="#0055FF"
                                stroke="#0055FF" stroke-width="1" />
                        </svg>
                    </div>
                    <h3 class="text-[1.1rem] font-bold text-[#111] m-0 mb-[20px] leading-[1.4]">AI, Data
                        and<br>Analytics Solutions</h3>
                    <p class="text-[0.9rem] text-[#444] leading-[1.6] m-0 mb-[40px] max-md:mb-[30px] font-medium">We
                        integrate advanced
                        AI, generative AI, and machine learning models to automate operations, predict trends, and
                        personalize customer experiences at scale.</p>
                    <a href="#ai"
                        class="tech-s2-btn group mt-auto border border-[#111] rounded-full py-[10px] px-[20px] text-[#111] bg-white text-[0.75rem] font-semibold no-underline inline-flex items-center cursor-pointer transition-all duration-300 relative overflow-hidden">
                        <span class="btn-s2-text-wrap relative block h-[1.25em] overflow-hidden">
                            <span
                                class="block leading-[1.25em] transition-transform duration-[400ms] ease-[cubic-bezier(0.65,0,0.35,1)] group-hover:-translate-y-full after:content-[attr(data-text)] after:absolute after:top-full after:left-0 after:w-full"
                                data-text="View Artificial Intelligence Services">View Artificial Intelligence
                                Services</span>
                        </span>
                        <span
                            class="btn-arrow-wrap relative inline-flex items-center justify-center w-3 h-3 ml-2 overflow-hidden">
                            <span
                                class="btn-arrow-icon flex transition-transform duration-[400ms] ease-[cubic-bezier(0.65,0,0.35,1)] w-3 h-3 group-hover:translate-x-full group-hover:-translate-y-full">
                                <svg viewBox="0 0 24 24" fill="none" class="w-3 h-3 stroke-current shrink-0"
                                    stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                    <line x1="5" y1="19" x2="19" y2="5"></line>
                                    <polyline points="9 5 19 5 19 15"></polyline>
                                </svg>
                                <svg viewBox="0 0 24 24" fill="none"
                                    class="absolute top-full -left-full w-3 h-3 stroke-current shrink-0"
                                    stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                    <line x1="5" y1="19" x2="19" y2="5"></line>
                                    <polyline points="9 5 19 5 19 15"></polyline>
                                </svg>
                            </span>
                        </span>
                    </a>
                </div>

                <!-- Card 4 -->
                <div class="tech-s2-card scroll-reveal opacity-0 translate-y-[40px] transition-all duration-[800ms] ease-[cubic-bezier(0.25,0.46,0.45,0.94)] [&.active]:opacity-100 [&.active]:translate-y-0 hover:[&.active]:-translate-y-1 flex-[1_1_25%] min-w-[250px] border-r border-[#e2e2e2] px-[30px] pt-[60px] pb-[80px] max-md:py-[40px] flex flex-col items-start bg-transparent text-left hover:bg-white hover:shadow-[0_10px_40px_rgba(0,0,0,0.04)] hover:-translate-y-1 hover:z-10 last:border-r-0 max-lg:flex-[1_1_50%] max-lg:border-b max-lg:even:border-r-0 max-md:flex-[1_1_100%] max-md:border-r-0"
                    style="transition-delay: 0.4s !important;">
                    <div
                        class="tech-s2-icon w-[54px] h-[54px] mb-[40px] max-md:mb-[20px] flex items-center justify-start">
                        <svg viewBox="0 0 48 48" fill="none" class="w-full h-full" stroke="#111" stroke-width="2.5"
                            stroke-linecap="round" stroke-linejoin="round">
                            <ellipse cx="24" cy="14" rx="12" ry="4" stroke="#111" />
                            <path d="M12 14 V22 C12 24.2 17.4 26 24 26 C30.6 26 36 24.2 36 22 V14" stroke="#111" />
                            <path d="M12 22 V30 C12 32.2 17.4 34 24 34 C30.6 34 36 32.2 36 30 V22" stroke="#111" />
                            <rect x="28" y="28" width="12" height="10" rx="2" stroke="#0055FF" fill="#fff" />
                            <path d="M30 28 V25 C30 22.8 31.8 21 34 21 C36.2 21 38 22.8 38 25 V28" stroke="#0055FF" />
                            <circle cx="34" cy="33" r="1.5" fill="#0055FF" stroke="none" />
                        </svg>
                    </div>
                    <h3 class="text-[1.1rem] font-bold text-[#111] m-0 mb-[20px] leading-[1.4]">Cloud Operations<br>and
                        Cybersecurity</h3>
                    <p class="text-[0.9rem] text-[#444] leading-[1.6] m-0 mb-[40px] max-md:mb-[30px] font-medium">As
                        your IT service
                        company, we engineer cloud-native environments rooted in Zero Trust principles, ensuring your
                        infrastructure is as scalable as it is impenetrable.</p>
                    <a href="#cybersecurity"
                        class="tech-s2-btn group mt-auto border border-[#111] rounded-full py-[10px] px-[20px] text-[#111] bg-white text-[0.75rem] font-semibold no-underline inline-flex items-center cursor-pointer transition-all duration-300 relative overflow-hidden">
                        <span class="btn-s2-text-wrap relative block h-[1.25em] overflow-hidden">
                            <span
                                class="block leading-[1.25em] transition-transform duration-[400ms] ease-[cubic-bezier(0.65,0,0.35,1)] group-hover:-translate-y-full after:content-[attr(data-text)] after:absolute after:top-full after:left-0 after:w-full"
                                data-text="View Cybersecurity Services">View Cybersecurity Services</span>
                        </span>
                        <span
                            class="btn-arrow-wrap relative inline-flex items-center justify-center w-3 h-3 ml-2 overflow-hidden">
                            <span
                                class="btn-arrow-icon flex transition-transform duration-[400ms] ease-[cubic-bezier(0.65,0,0.35,1)] w-3 h-3 group-hover:translate-x-full group-hover:-translate-y-full">
                                <svg viewBox="0 0 24 24" fill="none" class="w-3 h-3 stroke-current shrink-0"
                                    stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                    <line x1="5" y1="19" x2="19" y2="5"></line>
                                    <polyline points="9 5 19 5 19 15"></polyline>
                                </svg>
                                <svg viewBox="0 0 24 24" fill="none"
                                    class="absolute top-full -left-full w-3 h-3 stroke-current shrink-0"
                                    stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                    <line x1="5" y1="19" x2="19" y2="5"></line>
                                    <polyline points="9 5 19 5 19 15"></polyline>
                                </svg>
                            </span>
                        </span>
                    </a>
                </div>

            </div>
        </section>

        <!-- SECTION 3: AI ECOSYSTEM -->
        <section class="tech-section-3 relative w-full bg-[#050505] py-[50px] md:py-[50px] lg:py-[60px] overflow-hidden flex flex-col items-center">
            <div
                class="tech-container max-w-[1400px] w-full mx-auto px-[5%] flex flex-col lg:flex-row items-stretch gap-[60px] lg:gap-[80px]">
                <!-- Left Side: Video Loop & Logo --> 
                <div class="w-full lg:w-[45%] relative rounded-3xl overflow-hidden min-h-[400px] lg:min-h-[600px] bg-[#111] flex-shrink-0 flex items-center justify-center border border-white/10 shadow-[0_0_50px_rgba(0,0,0,0.5)] scroll-reveal opacity-0 translate-y-[40px] transition-all duration-[800ms] ease-[cubic-bezier(0.25,0.46,0.45,0.94)] [&.active]:opacity-100 [&.active]:translate-y-0">
                    <video class="absolute inset-0 w-full h-full object-cover opacity-80" autoplay loop muted
                        playsinline>
                        <!-- Using a dark tech/futuristic placeholder video -->
                        <source
                            src="https://dynamic.heygen.ai/www/Home%20-%20Page%20-%20Rebrand/HEYGEN_Orb_home_ios.mp4?updatedAt=1761596026165"
                            type="video/mp4">
                        <!-- <source src="/assets/video/Flow_202603191322.mp4" type="video/mp4"> -->
                    </video>

                    <!-- Inner glow / shadow for depth -->
                    <div
                        class="absolute inset-0 bg-[radial-gradient(circle_at_center,transparent_40%,rgba(0,0,0,0.8)_100%)]">
                    </div>

                    <!-- Logo Floating Top-Left -->
                    <div
                        class="absolute top-[35px] left-[35px] max-md:top-[25px] max-md:left-[25px] z-10 font-bold text-[28px] max-md:text-[22px] tracking-tight flex items-center">
                        Ushering<span class="text-white relative ml-[2px]">AI<svg
                                class="w-3.5 h-3.5 text-[#0055FF] absolute -top-[4px] -right-[14px]" viewBox="0 0 24 24"
                                fill="currentColor">
                                <path d="M12 2L15 9L22 12L15 15L12 22L9 15L2 12L9 9L12 2Z" />
                            </svg></span>
                    </div>
                </div>

                <!-- Right Side: Content Area -->
                <div class="w-full lg:w-[55%] flex flex-col justify-center items-start text-left py-[20px] max-md:py-0">
                    <h3
                        class="text-[clamp(1.5rem,2vw,1.8rem)] text-[#e2e2e2] font-semibold leading-[1.3] mb-2 tracking-[-0.01em] scroll-reveal opacity-0 translate-y-[40px] transition-all duration-[800ms] ease-[cubic-bezier(0.25,0.46,0.45,0.94)] [&.active]:opacity-100 [&.active]:translate-y-0">
                        Building AI Ecosystem</h3>
                    <h2 class="text-[clamp(2.5rem,4vw,3.5rem)] font-bold leading-[1.15] text-white tracking-[-0.02em] mb-6 scroll-reveal opacity-0 translate-y-[40px] transition-all duration-[800ms] ease-[cubic-bezier(0.25,0.46,0.45,0.94)] [&.active]:opacity-100 [&.active]:translate-y-0"
                        style="transition-delay: 0.1s !important;">That Align With Your Organization</h2>
                    <p class="text-[1.05rem] text-[#a1a1aa] leading-[1.6] mb-10 font-medium max-w-[650px] scroll-reveal opacity-0 translate-y-[40px] transition-all duration-[800ms] ease-[cubic-bezier(0.25,0.46,0.45,0.94)] [&.active]:opacity-100 [&.active]:translate-y-0"
                        style="transition-delay: 0.2s !important;">
                        <strong class="text-white font-semibold flex items-center gap-1">Ushering Ai<svg
                                class="w-2.5 h-2.5 text-[#0055FF] -mt-2 -ml-0.5" viewBox="0 0 24 24"
                                fill="currentColor">
                                <path d="M12 2L15 9L22 12L15 15L12 22L9 15L2 12L9 9L12 2Z" />
                            </svg></strong> is our dedicated center of excellence, to help enterprises navigate the AI
                        revolution. From custom LLMs to automated workflows, we move your business beyond the hype into
                        practical, revenue-generating AI implementation.
                    </p>

                    <!-- Cards Grid -->
                    <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-4 w-full mb-12">
                        <!-- Card 1 -->
                        <div class="border border-white/10 bg-[#0a0a0a] rounded-2xl p-[24px] flex flex-col items-start transition-all duration-300 hover:border-white/30 hover:bg-[#111] hover:-translate-y-1 scroll-reveal opacity-0 translate-y-[40px] transition-all duration-[800ms] ease-[cubic-bezier(0.25,0.46,0.45,0.94)] [&.active]:opacity-100 [&.active]:translate-y-0"
                            style="transition-delay: 0.3s !important;">
                            <div
                                class="w-10 h-10 mb-5 text-[#0055FF] bg-[#0055FF]/10 rounded-lg flex items-center justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path d="m9 18 6-6-6-6" />
                                    <path d="m21 8-2 2-2-2 2-2 2 2z" />
                                    <path d="M4 22h14a2 2 0 0 0 2-2V8" />
                                    <path d="M20 4H8a2 2 0 0 0-2 2v14" />
                                </svg>
                            </div>
                            <h4 class="text-white font-semi-bold text-[1.02rem] mb-4">GenAI Integration</h4>
                            <ul
                                class="text-[#a1a1aa] text-[0.85rem] font-medium flex flex-col gap-3 m-0 p-0 list-none w-full">
                                <li class="flex items-start gap-2 leading-[1.4]"><svg xmlns="http://www.w3.org/2000/svg"
                                        width="16" height="16" viewBox="0 0 24 24" fill="none"
                                        class="text-[#0055FF] shrink-0 mt-[2px]" stroke="currentColor"
                                        stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M18 6 7 17l-5-5" />
                                        <path d="m22 10-7.5 7.5L13 16" />
                                    </svg>AI Agents</li>
                                <li class="flex items-start gap-2 leading-[1.4]"><svg xmlns="http://www.w3.org/2000/svg"
                                        width="16" height="16" viewBox="0 0 24 24" fill="none"
                                        class="text-[#0055FF] shrink-0 mt-[2px]" stroke="currentColor"
                                        stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M18 6 7 17l-5-5" />
                                        <path d="m22 10-7.5 7.5L13 16" />
                                    </svg>Chatbots</li>
                                <li class="flex items-start gap-2 leading-[1.4]"><svg xmlns="http://www.w3.org/2000/svg"
                                        width="16" height="16" viewBox="0 0 24 24" fill="none"
                                        class="text-[#0055FF] shrink-0 mt-[2px]" stroke="currentColor"
                                        stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M18 6 7 17l-5-5" />
                                        <path d="m22 10-7.5 7.5L13 16" />
                                    </svg>Coding Assistants</li>
                            </ul>
                        </div>
                        <!-- Card 2 -->
                        <div class="border border-white/10 bg-[#0a0a0a] rounded-2xl p-[24px] flex flex-col items-start transition-all duration-300 hover:border-white/30 hover:bg-[#111] hover:-translate-y-1 scroll-reveal opacity-0 translate-y-[40px] transition-all duration-[800ms] ease-[cubic-bezier(0.25,0.46,0.45,0.94)] [&.active]:opacity-100 [&.active]:translate-y-0"
                            style="transition-delay: 0.4s !important;">
                            <div
                                class="w-10 h-10 mb-5 text-[#0055FF] bg-[#0055FF]/10 rounded-lg flex items-center justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path
                                        d="M2.062 12.348a1 1 0 0 1 0-.696 10.75 10.75 0 0 1 19.876 0 1 1 0 0 1 0 .696 10.75 10.75 0 0 1-19.876 0" />
                                    <circle cx="12" cy="12" r="3" />
                                </svg>
                            </div>
                            <h4 class="text-white font-semibold text-[1.02rem] mb-4">Computer Vision</h4>
                            <ul
                                class="text-[#a1a1aa] text-[0.85rem] font-medium flex flex-col gap-3 m-0 p-0 list-none w-full">
                                <li class="flex items-start gap-2 leading-[1.4]"><svg xmlns="http://www.w3.org/2000/svg"
                                        width="16" height="16" viewBox="0 0 24 24" fill="none"
                                        class="text-[#0055FF] shrink-0 mt-[2px]" stroke="currentColor"
                                        stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M18 6 7 17l-5-5" />
                                        <path d="m22 10-7.5 7.5L13 16" />
                                    </svg>Quality Control</li>
                                <li class="flex items-start gap-2 leading-[1.4]"><svg xmlns="http://www.w3.org/2000/svg"
                                        width="16" height="16" viewBox="0 0 24 24" fill="none"
                                        class="text-[#0055FF] shrink-0 mt-[2px]" stroke="currentColor"
                                        stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M18 6 7 17l-5-5" />
                                        <path d="m22 10-7.5 7.5L13 16" />
                                    </svg>Facial Recognition</li>
                            </ul>
                        </div>
                        <!-- Card 3 -->
                        <div class="border border-white/10 bg-[#0a0a0a] rounded-2xl p-[24px] flex flex-col items-start transition-all duration-300 hover:border-white/30 hover:bg-[#111] hover:-translate-y-1 scroll-reveal opacity-0 translate-y-[40px] transition-all duration-[800ms] ease-[cubic-bezier(0.25,0.46,0.45,0.94)] [&.active]:opacity-100 [&.active]:translate-y-0"
                            style="transition-delay: 0.5s !important;">
                            <div
                                class="w-10 h-10 mb-5 text-[#0055FF] bg-[#0055FF]/10 rounded-lg flex items-center justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <ellipse cx="12" cy="5" rx="9" ry="3" />
                                    <path d="M3 5V19A9 3 0 0 0 21 19V5" />
                                    <path d="M3 12A9 3 0 0 0 21 12" />
                                </svg>
                            </div>
                            <h4 class="text-white font-semi-bold text-[1.02rem] mb-4">Data Engineering</h4>
                            <ul
                                class="text-[#a1a1aa] text-[0.85rem] font-normal flex flex-col gap-3 m-0 p-0 list-none w-full">
                                <li class="flex items-start gap-2 leading-[1.4]"><svg xmlns="http://www.w3.org/2000/svg"
                                        width="16" height="16" viewBox="0 0 24 24" fill="none"
                                        class="text-[#0055FF] shrink-0 mt-[2px]" stroke="currentColor"
                                        stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M18 6 7 17l-5-5" />
                                        <path d="m22 10-7.5 7.5L13 16" />
                                    </svg>Building the infrastructure that feeds the AI.</li>
                            </ul>
                        </div>
                    </div>

                    <!-- Buttons Row -->
                    <div class="flex flex-wrap items-center gap-4 scroll-reveal opacity-0 translate-y-[40px] transition-all duration-[800ms] ease-[cubic-bezier(0.25,0.46,0.45,0.94)] [&.active]:opacity-100 [&.active]:translate-y-0"
                        style="transition-delay: 0.6s !important;">
                        <a href="#advisory"
                            class="group border border-white rounded-full py-[12px] px-[24px] text-black bg-white text-[0.85rem] font-bold no-underline inline-flex items-center cursor-pointer transition-all duration-300 hover:bg-[#e0e0e0] relative overflow-hidden">
                            <span class="relative block h-[1.25em] overflow-hidden">
                                <span
                                    class="block leading-[1.25em] transition-transform duration-[400ms] ease-[cubic-bezier(0.65,0,0.35,1)] group-hover:-translate-y-full after:content-[attr(data-text)] after:absolute after:top-full after:left-0 after:w-full"
                                    data-text="Book Your AI Advisory Session">Book Your AI Advisory Session</span>
                            </span>
                        </a>

                        <a href="#discover"
                            class="group border border-white/30 rounded-full py-[12px] px-[24px] text-white bg-transparent hover:bg-white/10 hover:border-white text-[0.85rem] font-bold no-underline inline-flex items-center cursor-pointer transition-all duration-300 relative overflow-hidden">
                            <span class="relative block h-[1.25em] overflow-hidden">
                                <span
                                    class="block leading-[1.25em] transition-transform duration-[400ms] ease-[cubic-bezier(0.65,0,0.35,1)] group-hover:-translate-y-full after:content-[attr(data-text)] after:absolute after:top-full after:left-0 after:w-full"
                                    data-text="Discover Ushering Ai">Discover Ushering Ai</span>
                            </span>
                            <span class="relative inline-flex items-center justify-center w-3 h-3 ml-2 overflow-hidden">
                                <span
                                    class="flex transition-transform duration-[400ms] ease-[cubic-bezier(0.65,0,0.35,1)] w-3 h-3 group-hover:translate-x-full group-hover:-translate-y-full">
                                    <svg viewBox="0 0 24 24" fill="none" class="w-3 h-3 stroke-current shrink-0"
                                        stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                        <line x1="5" y1="19" x2="19" y2="5"></line>
                                        <polyline points="9 5 19 5 19 15"></polyline>
                                    </svg>
                                    <svg viewBox="0 0 24 24" fill="none"
                                        class="absolute top-full -left-full w-3 h-3 stroke-current shrink-0"
                                        stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                        <line x1="5" y1="19" x2="19" y2="5"></line>
                                        <polyline points="9 5 19 5 19 15"></polyline>
                                    </svg>
                                </span>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- SECTION 4: INFINITE STATS CAROUSEL -->
        <section class="tech-section-4 relative w-full bg-[#050505] py-[50px] md:py-[50px] lg:py-[60px] overflow-hidden flex flex-col items-center">
            <div class="tech-container max-w-[1400px] w-full mx-auto px-[5%] mb-12">
                <h2
                    class="text-[clamp(2.5rem,4vw,3.5rem)] font-bold leading-[1.15] text-white tracking-[-0.02em] scroll-reveal opacity-0 translate-y-[40px] transition-all duration-[800ms] ease-[cubic-bezier(0.25,0.46,0.45,0.94)] [&.active]:opacity-100 [&.active]:translate-y-0">
                    Trusted by Industry Leaders
                </h2>
            </div>

            <!-- Gradient Edges for Smooth Fade-out -->
            <div
                class="absolute left-0 top-[200px] bottom-0 w-[5%] md:w-[10%] bg-gradient-to-r from-[#050505] to-transparent z-[5] pointer-events-none">
            </div>
            <div
                class="absolute right-0 top-[200px] bottom-0 w-[5%] md:w-[10%] bg-gradient-to-l from-[#050505] to-transparent z-[5] pointer-events-none">
            </div>

            <div class="w-full relative px-[5%] left-1/2 -translate-x-1/2 max-w-[1920px]">
                <!-- Outer Wrapper with hidden scrollbar and grab cursor -->
                <div id="tech-s4-carousel-wrapper"
                    class="w-full overflow-x-hidden cursor-grab active:cursor-grabbing [scrollbar-width:none] [&::-webkit-scrollbar]:hidden scroll-reveal opacity-0 translate-y-[40px] transition-all duration-[800ms] ease-[cubic-bezier(0.25,0.46,0.45,0.94)] [&.active]:opacity-100 [&.active]:translate-y-0"
                    style="transition-delay: 0.2s !important;">
                    <div id="tech-s4-carousel-track" class="flex w-max select-none">
                        <!-- SET 1 (Original items) -->
                        <div class="flex gap-4 md:gap-2 pr-4 md:pr-6 tech-s4-carousel-set pb-4">

                            <!-- Card 1 -->
                            <div
                                class="flex-shrink-0 w-[280px] md:w-[360px] h-[380px] bg-[#111] border border-white/10 rounded-2xl flex flex-col overflow-hidden relative group">
                                <!-- Top Text -->
                                <div
                                    class="flex-none p-6 md:p-4 flex flex-col gap-2 min-h-[30%] border-b border-black/50 z-10 bg-[#111]">
                                    <div class="flex items-center gap-2">
                                        <span
                                            class="text-[2.5rem] md:text-[3.5rem] font-bold text-white leading-none">100+</span>
                                        <span
                                            class="text-[0.7rem] md:text-[0.8rem] font-bold text-white uppercase tracking-wider leading-tight max-w-[120px]">PLATFORMS</span>
                                    </div>
                                    <p class="text-[#a1a1aa] text-[0.9rem] leading-[1.5] mt-2">deployed securely across
                                        diverse production environments seamlessly</p>
                                </div>
                                <!-- Bottom Image -->
                                <div class="flex-grow relative overflow-hidden bg-[#0a0a0a]">
                                    <img src="https://images.unsplash.com/photo-1620712943543-bcc4688e7485?auto=format&fit=crop&q=80&w=800"
                                        alt="Platforms"
                                        class="absolute inset-0 w-full h-full object-cover opacity-60 transition-transform duration-700 group-hover:scale-110 group-hover:opacity-80">
                                </div>
                            </div>

                            <!-- Card 2 -->
                            <div
                                class="flex-shrink-0 w-[280px] md:w-[360px] h-[380px] bg-[#111] border border-white/10 rounded-2xl flex flex-col overflow-hidden relative group">
                                <div
                                    class="flex-none p-6 md:p-4 flex flex-col gap-2 min-h-[30%] border-b border-black/50 z-10 bg-[#111]">
                                    <div class="flex items-center gap-2">
                                        <span
                                            class="text-[2.5rem] md:text-[3.5rem] font-bold text-white leading-none">35+</span>
                                        <span
                                            class="text-[0.7rem] md:text-[0.8rem] font-bold text-white uppercase tracking-wider leading-tight max-w-[120px]">INDUSTRIES</span>
                                    </div>
                                    <p class="text-[#a1a1aa] text-[0.9rem] leading-[1.5] mt-2">mastered with deep
                                        exposure to compliance-heavy, regulated, data-intensive sectors</p>
                                </div>
                                <div class="flex-grow relative overflow-hidden bg-[#0a0a0a]">
                                    <img src="https://images.unsplash.com/photo-1550751827-4bd374c3f58b?auto=format&fit=crop&q=80&w=800"
                                        alt="Industries"
                                        class="absolute inset-0 w-full h-full object-cover opacity-60 transition-transform duration-700 group-hover:scale-110 group-hover:opacity-80">
                                </div>
                            </div>

                            <!-- Card 3 -->
                            <div
                                class="flex-shrink-0 w-[280px] md:w-[360px] h-[380px] bg-[#111] border border-white/10 rounded-2xl flex flex-col overflow-hidden relative group">
                                <div
                                    class="flex-none p-6 md:p-4 flex flex-col gap-2 min-h-[30%] border-b border-black/50 z-10 bg-[#111]">
                                    <div class="flex items-center gap-2">
                                        <span
                                            class="text-[2.5rem] md:text-[3.5rem] font-bold text-white leading-none">15+</span>
                                        <span
                                            class="text-[0.7rem] md:text-[0.8rem] font-bold text-white uppercase tracking-wider leading-tight max-w-[120px]">GLOBAL
                                            RECOGNITIONS</span>
                                    </div>
                                    <p class="text-[#a1a1aa] text-[0.9rem] leading-[1.5] mt-2">acknowledging engineering
                                        excellence, exponential growth, and delivery capability</p>
                                </div>
                                <div class="flex-grow relative overflow-hidden bg-[#0a0a0a]">
                                    <img src="https://images.unsplash.com/photo-1546519638-68e109498ffc?auto=format&fit=crop&q=80&w=800"
                                        alt="Awards"
                                        class="absolute inset-0 w-full h-full object-cover opacity-60 mix-blend-luminosity transition-all duration-700 group-hover:scale-110 group-hover:mix-blend-normal group-hover:opacity-80">
                                </div>
                            </div>

                            <!-- Card 4 -->
                            <div
                                class="flex-shrink-0 w-[280px] md:w-[360px] h-[380px] bg-[#111] border border-white/10 rounded-2xl flex flex-col overflow-hidden relative group">
                                <div
                                    class="flex-none p-6 md:p-4 flex flex-col gap-2 min-h-[30%] border-b border-black/50 z-10 bg-[#111]">
                                    <div class="flex items-center gap-2">
                                        <span
                                            class="text-[2.5rem] md:text-[3.5rem] font-bold text-white leading-none">10+</span>
                                        <span
                                            class="text-[0.7rem] md:text-[0.8rem] font-bold text-white uppercase tracking-wider leading-tight max-w-[120px]">YEARS
                                            OF EXPERIENCE</span>
                                    </div>
                                    <p class="text-[#a1a1aa] text-[0.9rem] leading-[1.5] mt-2">as an enterprise
                                        technology consulting and digital engineering services firm</p>
                                </div>
                                <div class="flex-grow relative overflow-hidden bg-[#0a0a0a]">
                                    <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?auto=format&fit=crop&q=80&w=800"
                                        alt="Experience"
                                        class="absolute inset-0 w-full h-full object-cover opacity-60 mix-blend-luminosity transition-all duration-700 group-hover:scale-110 group-hover:mix-blend-normal group-hover:opacity-80">
                                </div>
                            </div>

                            <!-- Card 5 -->
                            <div
                                class="flex-shrink-0 w-[280px] md:w-[360px] h-[380px] bg-[#111] border border-white/10 rounded-2xl flex flex-col overflow-hidden relative group">
                                <div
                                    class="flex-none p-6 md:p-4 flex flex-col gap-2 min-h-[30%] border-b border-black/50 z-10 bg-[#111]">
                                    <div class="flex items-center gap-2">
                                        <span
                                            class="text-[2.5rem] md:text-[3.5rem] font-bold text-white leading-none">1600+</span>
                                        <span
                                            class="text-[0.7rem] md:text-[0.8rem] font-bold text-white uppercase tracking-wider leading-tight max-w-[120px]">ENGINEERS</span>
                                    </div>
                                    <p class="text-[#a1a1aa] text-[0.9rem] leading-[1.5] mt-2">designing and building
                                        enterprise scale applications round the clock globally</p>
                                </div>
                                <div class="flex-grow relative overflow-hidden bg-[#0a0a0a]">
                                    <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?auto=format&fit=crop&q=80&w=800"
                                        alt="Engineers"
                                        class="absolute inset-0 w-full h-full object-cover opacity-60 mix-blend-luminosity transition-all duration-700 group-hover:scale-110 group-hover:mix-blend-normal group-hover:opacity-80">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Script for Section 4 Carousel -->
        <script>
            document.addEventListener('DOMContentLoaded', () => {
                const wrapper = document.getElementById('tech-s4-carousel-wrapper');
                const track = document.getElementById('tech-s4-carousel-track');
                const originalSet = document.querySelector('.tech-s4-carousel-set');

                if (!wrapper || !track || !originalSet) return;

                // Clone the original set twice to ensure seamless infinite scroll
                track.appendChild(originalSet.cloneNode(true));
                track.appendChild(originalSet.cloneNode(true));

                let isDown = false;
                let startX;
                let scrollLeft;
                let isHovered = false;
                let scrollSpeed = 1.2; // Pixels per frame

                // Prevent drag start on images
                const images = track.querySelectorAll('img');
                images.forEach(img => img.addEventListener('dragstart', (e) => e.preventDefault()));

                function animateCarousel() {
                    // Only auto-scroll if neither hovering nor dragging
                    if (!isDown && !isHovered) {
                        wrapper.scrollLeft += scrollSpeed;

                        const setWidth = originalSet.offsetWidth;

                        // If we scrolled past exactly one full set, jump back seamlessly
                        if (wrapper.scrollLeft >= setWidth) {
                            wrapper.scrollLeft -= setWidth;
                        } else if (wrapper.scrollLeft <= 0 && scrollSpeed < 0) {
                            wrapper.scrollLeft += setWidth;
                        }
                    }
                    requestAnimationFrame(animateCarousel);
                }

                // Start animation
                requestAnimationFrame(animateCarousel);

                // Mouse Events for Dragging
                wrapper.addEventListener('mousedown', (e) => {
                    isDown = true;
                    startX = e.pageX - wrapper.offsetLeft;
                    scrollLeft = wrapper.scrollLeft;
                });

                wrapper.addEventListener('mouseleave', () => {
                    isDown = false;
                    isHovered = false;
                });

                wrapper.addEventListener('mouseenter', () => {
                    isHovered = true;
                });

                wrapper.addEventListener('mouseup', () => {
                    isDown = false;
                });

                wrapper.addEventListener('mousemove', (e) => {
                    if (!isDown) return;
                    e.preventDefault();
                    isHovered = true;
                    const x = e.pageX - wrapper.offsetLeft;
                    const walk = (x - startX) * 1.5;

                    let newScrollLeft = scrollLeft - walk;

                    // Allow manual looping while dragging
                    const setWidth = originalSet.offsetWidth;
                    if (newScrollLeft >= setWidth * 1.5) {
                        newScrollLeft -= setWidth;
                        // reset anchor to avoid jitter
                        startX = e.pageX - wrapper.offsetLeft;
                        scrollLeft = newScrollLeft;
                    } else if (newScrollLeft <= 0) {
                        newScrollLeft += setWidth;
                        startX = e.pageX - wrapper.offsetLeft;
                        scrollLeft = newScrollLeft;
                    }

                    wrapper.scrollLeft = newScrollLeft;
                });

                // Touch support for Mobile
                wrapper.addEventListener('touchstart', (e) => {
                    isDown = true;
                    isHovered = true;
                    startX = e.touches[0].pageX - wrapper.offsetLeft;
                    scrollLeft = wrapper.scrollLeft;
                });

                wrapper.addEventListener('touchend', () => {
                    isDown = false;
                    isHovered = false;
                });

                wrapper.addEventListener('touchmove', (e) => {
                    if (!isDown) return;
                    const x = e.touches[0].pageX - wrapper.offsetLeft;
                    const walk = (x - startX) * 1.5;
                    let newScrollLeft = scrollLeft - walk;

                    const setWidth = originalSet.offsetWidth;
                    if (newScrollLeft >= setWidth * 1.5) {
                        newScrollLeft -= setWidth;
                        startX = e.touches[0].pageX - wrapper.offsetLeft;
                        scrollLeft = newScrollLeft;
                    } else if (newScrollLeft <= 0) {
                        newScrollLeft += setWidth;
                        startX = e.touches[0].pageX - wrapper.offsetLeft;
                        scrollLeft = newScrollLeft;
                    }
                    wrapper.scrollLeft = newScrollLeft;
                });
            });
        </script>

        <!-- Scroll Automation Script for All Features -->
        <script>
            (function () {
                const initReveal = () => {
                    const observer = new IntersectionObserver((entries) => {
                        entries.forEach(entry => {
                            if (entry.isIntersecting) {
                                entry.target.classList.add('active');
                                observer.unobserve(entry.target); // Optional: unobserve after reveal
                            }
                        });
                    }, { threshold: 0.05, rootMargin: '0px 0px -20px 0px' });

                    const revealElements = document.querySelectorAll('.scroll-reveal');
                    revealElements.forEach(el => observer.observe(el));

                    // Fallback to show elements just in case IntersectionObserver fails or JS is slow
                    setTimeout(() => {
                        revealElements.forEach(el => {
                            if (!el.classList.contains('active')) {
                                const rect = el.getBoundingClientRect();
                                if (rect.top < window.innerHeight) {
                                    el.classList.add('active');
                                }
                            }
                        });
                    }, 500);
                };

                if (document.readyState === 'loading') {
                    document.addEventListener('DOMContentLoaded', initReveal);
                } else {
                    initReveal();
                }
            })();
        </script>

        <!-- SECTION 5: CASE STUDIES (3D CAROUSEL) -->
        <section class="tech-section-5 relative w-full bg-[#050505] py-[50px] md:py-[50px] lg:py-[60px] overflow-hidden flex flex-col items-center">

            <!-- Custom Cursor -->
            <div id="tech-cs-cursor"
                class="fixed top-0 left-0 w-auto min-w-[120px] h-[40px] px-[10px] rounded-full bg-white text-black font-bold text-[11px] uppercase tracking-widest flex items-center justify-center pointer-events-none z-[100] opacity-0 transition-transform duration-200 ease-out transform -translate-x-1/2 -translate-y-1/2 shadow-xl whitespace-nowrap"
                style="transition-property: opacity, background-color, transform, min-width; left: 0; top: 0;">View Case
                Study</div>

            <!-- Navigation Header -->
            <div
                class="z-20 flex items-center justify-center gap-2 md:gap-4 mb-[20px] scroll-reveal opacity-0 translate-y-[40px] transition-all duration-[800ms] ease-[cubic-bezier(0.25,0.46,0.45,0.94)] [&.active]:opacity-100 [&.active]:translate-y-0 relative px-4 mx-auto w-full max-w-[100vw]">

                <!-- Left Arrow -->
                <button id="tech-cs-prev"
                    class="w-10 h-10 shrink-0 rounded-full border border-white/20 flex items-center justify-center text-white hover:bg-white hover:text-black transition-colors z-10 cursor-pointer">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path d="m15 18-6-6 6-6" />
                    </svg>
                </button>

                <!-- Tabs Container -->
                <div  class="flex items-center gap-2 overflow-x-auto no-scrollbar max-w-[calc(100vw-120px)] md:max-w-[80vw] px-2 py-1"
                    id="tech-cs-tabs">
                    <button
                        class="tech-cs-tab active whitespace-nowrap px-5 py-2.5 rounded-full text-sm font-bold transition-all duration-300 bg-white text-black cursor-pointer"
                        data-index="0">Americana Group</button>
                    <button
                        class="tech-cs-tab whitespace-nowrap px-5 py-2.5 rounded-full text-sm font-bold transition-all duration-300 bg-[#111] text-white hover:bg-[#222] cursor-pointer"
                        data-index="1">Flynas</button>
                    <button
                        class="tech-cs-tab whitespace-nowrap px-5 py-2.5 rounded-full text-sm font-bold transition-all duration-300 bg-[#111] text-white hover:bg-[#222] cursor-pointer"
                        data-index="2">MyExec</button>
                    <button
                        class="tech-cs-tab whitespace-nowrap px-5 py-2.5 rounded-full text-sm font-bold transition-all duration-300 bg-[#111] text-white hover:bg-[#222] cursor-pointer"
                        data-index="3">Sonny's Enterprises</button>
                    <button
                        class="tech-cs-tab whitespace-nowrap px-5 py-2.5 rounded-full text-sm font-bold transition-all duration-300 bg-[#111] text-white hover:bg-[#222] cursor-pointer"
                        data-index="4">KFC</button>
                    <button
                        class="tech-cs-tab whitespace-nowrap px-5 py-2.5 rounded-full text-sm font-bold transition-all duration-300 bg-[#111] text-white hover:bg-[#222] cursor-pointer"
                        data-index="5">Adidas</button>
                </div>

                <!-- Right Arrow -->
                <button id="tech-cs-next"
                    class="w-10 h-10 shrink-0 rounded-full border border-white/20 flex items-center justify-center text-white hover:bg-white hover:text-black transition-colors z-10 cursor-pointer">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path d="m9 18 6-6-6-6" />
                    </svg>
                </button>
            </div>

            <!-- Carousel Viewport / Track -->
            <div id="tech-cs-viewport"
                class="relative w-full max-w-[1200px] h-[520px] perspective-[1200px] flex justify-center items-end pb-[10px] cursor-none select-none scroll-reveal opacity-0 translate-y-[40px] transition-all duration-[800ms] ease-[cubic-bezier(0.25,0.46,0.45,0.94)] [&.active]:opacity-100 [&.active]:translate-y-0"
                style="transition-delay: 0.2s !important;">

                <div id="tech-cs-track"
                    class="relative w-full h-full flex justify-center drop-shadow-[0_20px_50px_rgba(0,0,0,0.8)] pointer-events-none">

                    <!-- Card 0: Americana Group -->
                    <div class="tech-cs-card absolute bottom-0 w-[360px] h-[500px] rounded-[2rem] p-6 flex flex-col shadow-2xl transition-transform duration-700 ease-[cubic-bezier(0.25,0.46,0.45,0.94)] bg-[#FAF7E6] text-[#111] origin-bottom pointer-events-auto cursor-pointer"
                        data-index="0" data-href="/case-study/americana">
                        <div class="flex items-center gap-4 mb-6">
                            <div class="w-10 h-10 bg-white rounded-xl shadow-sm flex items-center justify-center p-2">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/14/Americana_Group_logo.svg/1200px-Americana_Group_logo.svg.png"
                                    alt="Americana Logo" class="w-full h-auto object-contain">
                            </div>
                            <h3 class="text-xl font-bold tracking-tight">Americana Group</h3>
                        </div>
                        <p class="text-[0.95rem] font-medium leading-[1.5] text-[#333] mb-6">
                            Engineered a predictive logistics intelligence core for the QSR giant.
                        </p>
                        <div class="flex items-start gap-6 mb-auto">
                            <div>
                                <div class="text-[2rem] font-bold leading-none mb-1">100%</div>
                                <div class="text-[0.8rem] font-medium text-[#555] leading-snug">increase in
                                    dispatch<br>automation</div>
                            </div>
                            <div>
                                <div class="text-[2rem] font-bold leading-none mb-1">4X</div>
                                <div class="text-[0.8rem] font-medium text-[#555] leading-snug">improvement
                                    in<br>operational standards</div>
                            </div>
                        </div>
                        <div
                            class="w-full h-[180px] bg-[#111] rounded-[1.5rem] mt-6 overflow-hidden relative flex items-end justify-center">
                            <!-- Placeholder phones -->
                            <img src="https://images.unsplash.com/photo-1601784551446-20c9e07cd56e?auto=format&fit=crop&q=80&w=400"
                                class="w-[80%] h-auto object-cover object-top opacity-80 translate-y-6 rounded-t-xl"
                                alt="App Preview">
                        </div>
                    </div>

                    <!-- Card 1: Flynas -->
                    <div class="tech-cs-card absolute bottom-0 w-[360px] h-[500px] rounded-[2rem] p-6 flex flex-col shadow-2xl transition-transform duration-700 ease-[cubic-bezier(0.25,0.46,0.45,0.94)] bg-[#E0FCF8] text-[#111] origin-bottom pointer-events-auto cursor-pointer"
                        data-index="1" data-href="/case-study/flynas">
                        <div class="flex items-center gap-4 mb-6">
                            <div
                                class="w-10 h-10 bg-[#00A99D] rounded-xl shadow-sm flex items-center justify-center p-2 text-white font-bold text-lg">
                                fn
                            </div>
                            <h3 class="text-xl font-bold tracking-tight">Flynas</h3>
                        </div>
                        <p class="text-[0.95rem] font-medium leading-[1.5] text-[#333] mb-6">
                            Re-engineered the digital passenger journey with an AI-native mobile ecosystem to recover
                            market edge.
                        </p>
                        <div class="flex items-start gap-4 mb-auto">
                            <div class="flex-1">
                                <svg class="w-5 h-5 mb-2 text-[#00A99D]" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2">
                                    <circle cx="12" cy="12" r="3" />
                                    <path
                                        d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z" />
                                </svg>
                                <div class="text-[0.8rem] font-bold text-[#111] leading-snug">AI-driven booking
                                    &<br>smart itinerary</div>
                            </div>
                            <div class="flex-1">
                                <svg class="w-5 h-5 mb-2 text-[#00A99D]" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2">
                                    <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2" />
                                    <circle cx="9" cy="7" r="4" />
                                    <path d="M23 21v-2a4 4 0 0 0-3-3.87" />
                                    <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                                </svg>
                                <div class="text-[0.8rem] font-bold text-[#111] leading-snug">Seamless UX
                                    restoring<br>competitiveness</div>
                            </div>
                        </div>
                        <div class="w-full h-[180px] bg-[#111] rounded-[1.5rem] mt-6 overflow-hidden relative">
                            <!-- Placeholder airplane -->
                            <img src="https://images.unsplash.com/photo-1436491865332-7a61a109cc05?auto=format&fit=crop&q=80&w=400"
                                class="w-full h-full object-cover opacity-90" alt="Flynas Preview">
                        </div>
                    </div>

                    <!-- Card 2: MyExec -->
                    <div class="tech-cs-card absolute bottom-0 w-[360px] h-[500px] rounded-[2rem] p-6 flex flex-col shadow-2xl transition-transform duration-700 ease-[cubic-bezier(0.25,0.46,0.45,0.94)] bg-white text-[#111] origin-bottom pointer-events-auto cursor-pointer"
                        data-index="2" data-href="/case-study/myexec">
                        <div class="flex items-center gap-4 mb-6">
                            <div
                                class="w-10 h-10 bg-[#111] rounded-xl shadow-sm flex items-center justify-center p-2 text-white font-bold text-[0.65rem] uppercase tracking-tighter">
                                myexec
                            </div>
                            <h3 class="text-xl font-bold tracking-tight">MyExec</h3>
                        </div>
                        <p class="text-[0.95rem] font-medium leading-[1.5] text-[#333] mb-6">
                            Architected a Multi-Agent GenAI system that functions as an autonomous, high-level business
                            consultant.
                        </p>
                        <div class="flex items-start gap-4 mb-auto">
                            <div class="flex-1">
                                <svg class="w-5 h-5 mb-2 text-[#0055FF]" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2">
                                    <circle cx="12" cy="12" r="3" />
                                    <path
                                        d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z" />
                                </svg>
                                <div class="text-[0.8rem] font-bold text-[#111] leading-snug">Agentic RAG
                                    framework<br>for reasoning</div>
                            </div>
                            <div class="flex-1">
                                <svg class="w-5 h-5 mb-2 text-[#0055FF]" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2">
                                    <path d="M12 2v20M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6" />
                                </svg>
                                <div class="text-[0.8rem] font-bold text-[#111] leading-snug">Instant
                                    strategic<br>decision-making</div>
                            </div>
                        </div>
                        <div class="w-full h-[180px] bg-[#111] rounded-[1.5rem] mt-6 overflow-hidden relative">
                            <!-- Placeholder dashboard -->
                            <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?auto=format&fit=crop&q=80&w=400"
                                class="w-full h-full object-cover opacity-80 mix-blend-luminosity" alt="MyExec Preview">
                        </div>
                    </div>

                    <!-- Card 3: Sonny's Enterprises -->
                    <div class="tech-cs-card absolute bottom-0 w-[360px] h-[500px] rounded-[2rem] p-6 flex flex-col shadow-2xl transition-transform duration-700 ease-[cubic-bezier(0.25,0.46,0.45,0.94)] bg-[#1A1A1A] text-white origin-bottom pointer-events-auto cursor-pointer border border-white/10"
                        data-index="3" data-href="/case-study/sonnys">
                        <div class="flex items-center gap-4 mb-6">
                            <div
                                class="w-10 h-10 bg-[#0055FF] rounded-xl flex items-center justify-center p-2 text-white font-bold text-lg">
                                S
                            </div>
                            <h3 class="text-xl font-bold tracking-tight">Sonny's Enterprises</h3>
                        </div>
                        <p class="text-[0.95rem] font-medium leading-[1.5] text-[#a1a1aa] mb-6">
                            Modernized the world's largest manufacturer of conveyorized car wash equipment with
                            real-time IoT dashboards.
                        </p>
                        <div class="flex items-start gap-4 mb-auto">
                            <div class="flex-1">
                                <div class="text-[2rem] font-bold leading-none mb-1 text-[#0055FF]">5M+</div>
                                <div class="text-[0.8rem] font-medium text-[#ccc] leading-snug">data points<br>processed
                                    daily</div>
                            </div>
                            <div class="flex-1">
                                <div class="text-[2rem] font-bold leading-none mb-1 text-[#0055FF]">99.9%</div>
                                <div class="text-[0.8rem] font-medium text-[#ccc] leading-snug">server &
                                    equipment<br>uptime</div>
                            </div>
                        </div>
                        <div
                            class="w-full h-[180px] bg-[#111] rounded-[1.5rem] mt-6 overflow-hidden relative border border-white/10">
                            <!-- Placeholder IoT Dashboard -->
                            <img src="https://images.unsplash.com/photo-1518770660439-4636190af475?auto=format&fit=crop&q=80&w=400"
                                class="w-full h-full object-cover opacity-70" alt="Sonny's Preview">
                        </div>
                    </div>

                    <!-- Card 4: KFC -->
                    <div class="tech-cs-card absolute bottom-0 w-[360px] h-[500px] rounded-[2rem] p-6 flex flex-col shadow-2xl transition-transform duration-700 ease-[cubic-bezier(0.25,0.46,0.45,0.94)] bg-[#E4002B] text-white origin-bottom pointer-events-auto cursor-pointer"
                        data-index="4" data-href="/case-study/kfc">
                        <div class="flex items-center gap-4 mb-6">
                            <div
                                class="w-10 h-10 bg-white rounded-xl flex items-center justify-center p-2 text-[#E4002B] font-bold text-xl italic">
                                KFC
                            </div>
                            <h3 class="text-xl font-bold tracking-tight">KFC</h3>
                        </div>
                        <p class="text-[0.95rem] font-medium leading-[1.5] text-white/90 mb-6">
                            Streamlined regional operational audits and quality assurance tracking through automated
                            mobile workflows.
                        </p>
                        <div class="flex items-start gap-4 mb-auto">
                            <div class="flex-1">
                                <svg class="w-6 h-6 mb-2 text-white" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2">
                                    <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14" />
                                    <polyline points="22 4 12 14.01 9 11.01" />
                                </svg>
                                <div class="text-[0.8rem] font-bold text-white leading-snug">Automated Health<br>&
                                    Safety Audits</div>
                            </div>
                            <div class="flex-1">
                                <svg class="w-6 h-6 mb-2 text-white" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2">
                                    <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z" />
                                    <polyline points="14 2 14 8 20 8" />
                                    <line x1="16" y1="13" x2="8" y2="13" />
                                    <line x1="16" y1="17" x2="8" y2="17" />
                                    <polyline points="10 9 9 9 8 9" />
                                </svg>
                                <div class="text-[0.8rem] font-bold text-white leading-snug">Digital
                                    Standard<br>Operating Procedures</div>
                            </div>
                        </div>
                        <div class="w-full h-[180px] bg-[#111] rounded-[1.5rem] mt-6 overflow-hidden relative">
                            <!-- Placeholder Fast Food/Restaurant worker -->
                            <img src="https://images.unsplash.com/photo-1555939594-58d7cb561ad1?auto=format&fit=crop&q=80&w=400"
                                class="w-full h-full object-cover opacity-80 mix-blend-luminosity" alt="KFC Preview">
                        </div>
                    </div>

                    <!-- Card 5: Adidas -->
                    <div class="tech-cs-card absolute bottom-0 w-[360px] h-[500px] rounded-[2rem] p-6 flex flex-col shadow-2xl transition-transform duration-700 ease-[cubic-bezier(0.25,0.46,0.45,0.94)] bg-[#EBEBEB] text-[#111] origin-bottom pointer-events-auto cursor-pointer"
                        data-index="5" data-href="/case-study/adidas">
                        <div class="flex items-center gap-4 mb-6">
                            <div
                                class="w-10 h-10 bg-[#111] rounded-xl flex items-center justify-center p-2 text-white overflow-hidden">
                                <!-- Abstract lines for Adidas-like hint -->
                                <div class="flex items-end space-x-1 h-[60%]">
                                    <div class="w-1.5 h-[40%] bg-white transform -skew-x-12"></div>
                                    <div class="w-1.5 h-[70%] bg-white transform -skew-x-12"></div>
                                    <div class="w-1.5 h-[100%] bg-white transform -skew-x-12"></div>
                                </div>
                            </div>
                            <h3 class="text-xl font-bold tracking-tight">Adidas</h3>
                        </div>
                        <p class="text-[0.95rem] font-medium leading-[1.5] text-[#333] mb-6">
                            Enhanced instore digital footprints and supply chain tracking solutions across multiple
                            global regions.
                        </p>
                        <div class="flex items-start gap-4 mb-auto">
                            <div class="flex-1">
                                <div class="text-[2rem] font-bold leading-none mb-1 text-[#111]">1.2s</div>
                                <div class="text-[0.8rem] font-bold text-[#555] leading-snug">inventory<br>lookup
                                    latency</div>
                            </div>
                            <div class="flex-1">
                                <div class="text-[2rem] font-bold leading-none mb-1 text-[#111]">60%</div>
                                <div class="text-[0.8rem] font-bold text-[#555] leading-snug">reduction in
                                    stock<br>discrepancies</div>
                            </div>
                        </div>
                        <div class="w-full h-[180px] bg-[#111] rounded-[1.5rem] mt-6 overflow-hidden relative">
                            <!-- Placeholder Shoes/Retail -->
                            <img src="https://images.unsplash.com/photo-1518002171953-a080ee817e1f?auto=format&fit=crop&q=80&w=400"
                                class="w-full h-full object-cover opacity-90" alt="Adidas Preview">
                        </div>
                    </div>

                </div>
            </div>

            <!-- Carousel Logic Script -->
            <script>
                document.addEventListener('DOMContentLoaded', () => {
                    const track = document.getElementById('tech-cs-track');
                    const cards = Array.from(document.querySelectorAll('.tech-cs-card'));
                    const tabs = Array.from(document.querySelectorAll('.tech-cs-tab'));
                    const prevBtn = document.getElementById('tech-cs-prev');
                    const nextBtn = document.getElementById('tech-cs-next');
                    const viewport = document.getElementById('tech-cs-viewport');

                    if (!track || cards.length === 0) return;

                    let currentIndex = 0;
                    const totalCards = cards.length;                    
                    // Configurations for the "cylindrical" 3D effect
                    const radius = 800; // Distance from center of cylinder
                    const focalLength = 1200; // Perspective depth

                    // State variables for auto-rotation and interaction
                    let isHoveringViewport = false;
                    let isDragging = false;
                    let autoRotateTimer;
                    const autoRotateDelay = 3500; // 3.5 seconds

                    function startAutoRotate() {
                        stopAutoRotate();
                        autoRotateTimer = setInterval(() => {
                            if (!isHoveringViewport && !isDragging) {
                                currentIndex++;
                                updateCarousel();
                            }
                        }, autoRotateDelay);
                    }

                    function stopAutoRotate() {
                        if (autoRotateTimer) clearInterval(autoRotateTimer);
                    }

                    function resetAutoRotate() {
                        startAutoRotate();
                    }

                    function updateCarousel() {
                        // Modulo arithmetic for infinite loop on tabs
                        let activeIndex = ((currentIndex % totalCards) + totalCards) % totalCards;

                        // Update Tabs
                        tabs.forEach((tab, index) => {
                            if (index === activeIndex) {
                                tab.classList.remove('bg-[#111]', 'text-white', 'hover:bg-[#222]');
                                tab.classList.add('bg-white', 'text-black', 'active');
                            } else {
                                tab.classList.add('bg-[#111]', 'text-white', 'hover:bg-[#222]');
                                tab.classList.remove('bg-white', 'text-black', 'active');
                            }
                        });

                        // Ensure active tab is scrolled into view (for mobile)
                        const activeTab = tabs[activeIndex];
                        if (activeTab) {
                            const container = document.getElementById('tech-cs-tabs');
                            const scrollLeft = activeTab.offsetLeft - (container.clientWidth / 2) + (activeTab.clientWidth / 2);
                            container.scrollTo({ left: scrollLeft, behavior: 'smooth' });
                        }

                        // Calculate and Apply Transforms
                        cards.forEach((card, i) => {
                            // Find the shortest distance for depth/brightness
                            let diff = i - activeIndex;
                            if (diff > totalCards / 2) diff -= totalCards;
                            if (diff < -totalCards / 2) diff += totalCards;

                            const absDistance = Math.abs(diff);

                            // For rotation, we strictly use the continuous index to prevent backward spinning
                            const angle = (i - currentIndex) * (360 / totalCards);

                            // Ensure the active card is always on top. Deeper cards fall behind.
                            const zIndex = 100 - absDistance;

                            // Cylyndrical 3D Transformation
                            card.style.transformOrigin = 'center center';
                            card.style.transform = `perspective(${focalLength}px) translateZ(${-radius}px) rotateY(${angle}deg) translateZ(${radius}px)`;
                            card.style.zIndex = zIndex;
                            card.style.opacity = '1';

                            // Dim inactive cards and set pointers
                            if (absDistance === 0) {
                                card.style.filter = 'brightness(1) blur(0px)';
                                card.style.pointerEvents = 'auto'; // allow interacting with center card
                            } else {
                                card.style.filter = `brightness(${1 - (absDistance * 0.15)})`;
                                card.style.pointerEvents = 'none'; // prevent interacting with side cards
                            }
                        });

                        resetAutoRotate();
                    }

                    // Initial Render
                    updateCarousel();

                    // Make Cards Clickable Links
                    cards.forEach((card, i) => {
                        card.addEventListener('click', (e) => {
                            // Only click if it's the active card and user didn't just drag
                            let activeIndex = ((currentIndex % totalCards) + totalCards) % totalCards;
                            if (!hasDragged && activeIndex === i) {
                                // Redirect logic. Using the data-href assigned to each card
                                const link = card.getAttribute('data-href');
                                if (link) {
                                    window.location.href = link;
                                }
                            }
                        });
                    });

                    // Event Listeners
                    tabs.forEach((tab) => {
                        tab.addEventListener('click', () => {
                            currentIndex = parseInt(tab.getAttribute('data-index'));
                            updateCarousel();
                        });
                    });

                    prevBtn.addEventListener('click', () => {
                        currentIndex--;
                        updateCarousel();
                    });

                    nextBtn.addEventListener('click', () => {
                        currentIndex++;
                        updateCarousel();
                    });

                    // Custom Cursor Logic
                    const customCursor = document.getElementById('tech-cs-cursor');
                    const section = document.getElementById('case-studies');
                    // isHoveringViewport hoisted above
                    let mouseX = 0, mouseY = 0;

                    // Simple animation loop for smoother cursor tracking
                    function renderCursor() {
                        if (isHoveringViewport || isDragging) {
                            customCursor.style.left = mouseX + 'px';
                            customCursor.style.top = mouseY + 'px';
                        }
                        requestAnimationFrame(renderCursor);
                    }
                    requestAnimationFrame(renderCursor);

                    viewport.addEventListener('mouseenter', () => {
                        isHoveringViewport = true;
                        customCursor.style.opacity = '1';
                    });

                    viewport.addEventListener('mouseleave', () => {
                        isHoveringViewport = false;
                        if (!isDragging) {
                            customCursor.style.opacity = '0';
                        }
                        resetAutoRotate();
                    });

                    window.addEventListener('mousemove', (e) => {
                        mouseX = e.clientX;
                        mouseY = e.clientY;
                    });

                    // Drag Functionality
                    // isDragging hoisted above
                    let hasDragged = false;
                    let startX = 0;
                    let currentDragX = 0;
                    let lastDragTime = 0;
                    const dragThreshold = 80; // Increased to make swipe smoother/less prone to accident

                    viewport.addEventListener('mousedown', (e) => {
                        isDragging = true;
                        hasDragged = false;
                        startX = e.pageX;
                        currentDragX = 0;
                        customCursor.textContent = 'Drag';
                        customCursor.style.transform = 'translate(-50%, -50%) scale(0.9)';
                        customCursor.style.backgroundColor = '#111';
                        customCursor.style.color = '#fff';
                        customCursor.style.minWidth = '80px';
                    });

                    window.addEventListener('mouseup', (e) => {
                        if (!isDragging) return;
                        isDragging = false;

                        customCursor.textContent = 'View Case Study';
                        customCursor.style.transform = 'translate(-50%, -50%) scale(1)';
                        customCursor.style.backgroundColor = '#fff';
                        customCursor.style.color = '#000';
                        customCursor.style.minWidth = '120px';

                        if (!isHoveringViewport) customCursor.style.opacity = '0';

                        if (currentDragX > dragThreshold) {
                            currentIndex--;
                            updateCarousel();
                        } else if (currentDragX < -dragThreshold) {
                            currentIndex++;
                            updateCarousel();
                        } else {
                            resetAutoRotate();
                        }
                    });

                    window.addEventListener('mousemove', (e) => {
                        if (!isDragging) return;
                        e.preventDefault();
                        currentDragX = e.pageX - startX;

                        if (Math.abs(currentDragX) > 10) {
                            hasDragged = true; // Mark as dragged so click doesn't trigger
                        }

                        // Real-time drag feedback: if dragged far enough, switch immediately and reset start
                        const now = Date.now();
                        if (now - lastDragTime > 300) { // Slower debounce
                            if (currentDragX > dragThreshold) {
                                currentIndex--;
                                updateCarousel();
                                startX = e.pageX; // Reset so they can keep dragging for the next one
                                lastDragTime = now;
                            } else if (currentDragX < -dragThreshold) {
                                currentIndex++;
                                updateCarousel();
                                startX = e.pageX;
                                lastDragTime = now;
                            }
                        }
                    });

                    // Touch support
                    viewport.addEventListener('touchstart', (e) => {
                        isDragging = true;
                        hasDragged = false;
                        startX = e.touches[0].pageX;
                        currentDragX = 0;
                    }, { passive: true });

                    window.addEventListener('touchend', (e) => {
                        if (!isDragging) return;
                        isDragging = false;

                        // Handle the remaining distance on release
                        if (currentDragX > dragThreshold) {
                            currentIndex--;
                            updateCarousel();
                        } else if (currentDragX < -dragThreshold) {
                            currentIndex++;
                            updateCarousel();
                        } else {
                            resetAutoRotate();
                        }
                    });

                    window.addEventListener('touchmove', (e) => {
                        if (!isDragging) return;
                        currentDragX = e.touches[0].pageX - startX;

                        if (Math.abs(currentDragX) > 10) {
                            hasDragged = true;
                        }

                        const now = Date.now();
                        if (now - lastDragTime > 300) {
                            if (currentDragX > dragThreshold) {
                                currentIndex--;
                                updateCarousel();
                                startX = e.touches[0].pageX;
                                lastDragTime = now;
                            } else if (currentDragX < -dragThreshold) {
                                currentIndex++;
                                updateCarousel();
                                startX = e.touches[0].pageX;
                                lastDragTime = now;
                            }
                        }
                    }, { passive: true });
                });
            </script>

            <!-- Bottom CTA Banner -->
            <div
                class="w-full max-w-[1400px] mx-auto px-[5%] mt-[80px] mb-[20px] scroll-reveal opacity-0 translate-y-[40px] transition-all duration-[800ms] ease-[cubic-bezier(0.25,0.46,0.45,0.94)] [&.active]:opacity-100 [&.active]:translate-y-0 relative z-20">
                <div
                    class="relative w-full rounded-3xl overflow-hidden bg-[#0A1024] border border-white/10 flex flex-col md:flex-row shadow-[0_20px_60px_rgba(0,40,150,0.15)]">

                    <!-- Gradient overlay on left -->
                    <div
                        class="absolute inset-y-0 left-0 w-[80%] md:w-[60%] bg-[radial-gradient(ellipse_at_left_center,rgba(0,85,255,0.4)_0%,transparent_100%)] pointer-events-none z-0">
                    </div>

                    <!-- Left Content Column -->
                    <div class="relative z-10 flex-1 p-4 md:p-6 lg:p-8 flex flex-col justify-center">
                        <h2
                            class="text-white text-[1.6rem] md:text-[2rem] lg:text-[2.2rem] font-medium leading-[1.2] tracking-tight mb-2">
                            You've seen how we helped<br>
                            <span class="font-bold">Americana, Sonny's</span>, and <span
                                class="font-bold">Adidas</span><br>
                            reclaim their market edge.
                        </h2>

                        <p
                            class="text-[0.9rem] md:text-[1rem] text-white/80 font-medium leading-[1.6] max-w-[500px] mb-5">
                            From 90% faster reporting to <strong class="text-white">4x operational
                                improvements</strong>, our engineering goes beyond code to deliver measurable ROI.
                        </p>

                        <a href="#consulting"
                            class="group inline-flex items-center justify-center bg-white text-[#111] hover:bg-[#f0f0f0] transition-colors rounded-full py-[12px] px-6 md:px-8 text-[0.85rem] md:text-[0.95rem] font-bold self-start no-underline whitespace-nowrap overflow-hidden">
                            <span class="relative block h-[1.25em] overflow-hidden">
                                <span
                                    class="block leading-[1.25em] transition-transform duration-[400ms] ease-[cubic-bezier(0.65,0,0.35,1)] group-hover:-translate-y-full after:content-[attr(data-text)] after:absolute after:top-full after:left-0 after:w-full"
                                    data-text="Consult our Experts for Growth Roadmap">Consult our Experts for Growth
                                    Roadmap</span>
                            </span>
                        </a>
                    </div>

                    <!-- Right Image Column (Graph Placeholder) -->
                    <div
                        class="relative flex-1 min-h-[160px] md:min-h-[220px] border-t border-t-white/5 md:border-t-0 md:border-l md:border-l-white/5 overflow-hidden flex items-end justify-center bg-[linear-gradient(135deg,rgba(0,10,30,0)_0%,rgba(0,55,200,0.15)_100%)]">
                        <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?auto=format&fit=crop&q=80&w=800"
                            alt="Growth Chart Graph"
                            class="absolute inset-0 w-full h-full object-cover object-center mix-blend-screen opacity-60 scale-110"
                            style="filter: hue-rotate(180deg) saturate(2);">
                        <!-- Abstract graph placeholder tint -->
                        <div class="absolute inset-0 bg-[#0055ff] mix-blend-color opacity-40 mix-blend-screen"></div>
                    </div>

                </div>
            </div>

        </section>

        <!-- SECTION 6: VIDEO TESTIMONIALS -->
        <section class="tech-section-6 relative w-full bg-[#050505] py-[50px] md:py-[50px] lg:py-[60px] overflow-hidden flex flex-col items-center">

            <!-- Header -->
            <div
                class="flex flex-col md:flex-row justify-between items-start md:items-center gap-6 w-full max-w-[1400px] mx-auto px-[5%] mb-10">
                <h2 class="text-white text-[2rem] md:text-[2.5rem] lg:text-[2.8rem] tracking-tight font-bold m-0">
                    Words From Our C-Suite Partners
                </h2>
                <a href="#testimonials"
                    class="group inline-flex items-center justify-center bg-transparent border border-white/20 text-white hover:bg-white hover:text-black transition-colors rounded-full py-[10px] px-6 text-[0.85rem] font-bold no-underline whitespace-nowrap gap-2">
                    View All Client Testimonials
                    <svg class="w-3.5 h-3.5 transition-transform group-hover:translate-x-1" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"
                        stroke-linejoin="round">
                        <path d="M5 19L19 5M19 5v10M19 5H9" />
                    </svg>
                </a>
            </div>

            <!-- Content Split Wrapper -->
            <div class="flex flex-col lg:flex-row gap-6 lg:gap-8 w-full max-w-[1400px] mx-auto px-[5%]">

                <!-- Left Video Box -->
                <div
                    class="relative w-full lg:w-[42%] xl:w-[38%] shrink-0 rounded-[2rem] overflow-hidden aspect-[4/5] object-cover bg-[#1A1A1A] border border-white/5">
                    <!-- Placeholder Video Image -->
                    <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?auto=format&fit=crop&q=80&w=800"
                        alt="Video Testimonial Thumbnail" class="absolute inset-0 w-full h-full object-cover">

                    <!-- WATCH REEL Button -->
                    <button id="btn-watch-reel"
                        class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 bg-white text-[#111] px-6 py-4 rounded-full flex items-center gap-3 font-bold text-[0.8rem] tracking-[0.15em] shadow-[0_20px_50px_rgba(0,0,0,0.5)] hover:scale-105 transition-transform z-10 w-max cursor-pointer outline-none border-none">
                        <!-- Play Icon -->
                        <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="12" r="10"></circle>
                            <polygon points="10 8 16 12 10 16 10 8" fill="currentColor"></polygon>
                        </svg>
                        WATCH REEL
                    </button>
                </div>

                <!-- Right Testimonial Container -->
                <div class="relative flex-1 rounded-[2rem] p-5 sm:p-8 md:p-10 lg:p-16 flex items-center bg-gradient-to-r from-[#000000] via-[#1D64F0] to-[#1D64F0] overflow-hidden min-h-[400px] lg:min-h-[450px]"
                    id="tech-s6-carousel">

                    <!-- Cards Wrapper -->
                    <div class="relative w-full h-full grid items-center justify-center pr-6 sm:pr-10 md:pr-[8%]">

                        <!-- Card 0 -->
                        <div class="tech-s6-card relative col-start-1 row-start-1 w-full transition-all duration-700 ease-[cubic-bezier(0.25,0.46,0.45,0.94)] opacity-100 translate-y-0 z-10"
                            data-idx="0">
                            <!-- White Quote Card -->
                            <div
                                class="w-full max-w-[850px] mx-auto bg-white rounded-[1.5rem] p-6 sm:p-8 md:p-12 lg:p-14 shadow-[0_20px_50px_rgba(0,0,0,0.15)] flex flex-col justify-center">
                                <!-- Blue Quote Icon -->
                                <svg class="w-8 h-8 md:w-10 md:h-10 text-[#0055ff] mb-4 md:mb-6" viewBox="0 0 24 24" fill="currentColor">
                                    <path
                                        d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z" />
                                </svg>
                                <!-- Testimonial Text -->
                                <p class="text-[0.95rem] md:text-[1.1rem] leading-[1.6] text-[#111] font-medium mb-6 md:mb-10 text-left">
                                    We selected Idea Usher to embark on this project journey with us in 2019. Since
                                    then, it has been a pleasure working with the company. The Idea Usher team is not
                                    only extremely versatile and competent but also very professional, courteous, and
                                    responsive.
                                </p>
                                <!-- Bottom Row: Author & Action -->
                                <div
                                    class="flex flex-col sm:flex-row items-start sm:items-center justify-between gap-6 w-full">
                                    <!-- Author Details -->
                                    <div class="flex items-center gap-4">
                                        <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?auto=format&fit=crop&q=80&w=150"
                                            alt="César M Melgoza"
                                            class="w-12 h-12 rounded-full object-cover shadow-sm bg-gray-100">
                                        <div>
                                            <h4 class="text-[#111] font-bold text-[1rem] leading-tight mb-1">César M
                                                Melgoza</h4>
                                            <p class="text-[#666] text-[0.8rem] font-medium m-0 leading-snug">Founder &
                                                CEO, Epluribus LLC</p>
                                        </div>
                                    </div>

                                    <!-- Watch Video button -->
                                    <button
                                        class="tech-watch-video flex items-center gap-2 text-[#0055ff] hover:text-[#003bb3] active:scale-95 font-bold text-[0.85rem] tracking-wide transition-all outline-none border-none bg-transparent cursor-pointer whitespace-nowrap"
                                        data-video="https://www.youtube.com/embed/g-gOms-eTq0?autoplay=1&rel=0">
                                        <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                            <circle cx="12" cy="12" r="10"></circle>
                                            <polygon points="10 8 16 12 10 16 10 8" fill="currentColor"></polygon>
                                        </svg>
                                        Watch Video
                                    </button>
                                </div>
                            </div>
                        </div>

                        <!-- Card 1 -->
                        <div class="tech-s6-card relative col-start-1 row-start-1 w-full transition-all duration-700 ease-[cubic-bezier(0.25,0.46,0.45,0.94)] opacity-0 translate-y-12 pointer-events-none z-0"
                            data-idx="1">
                            <!-- White Quote Card -->
                            <div
                                class="w-full max-w-[850px] mx-auto bg-white rounded-[1.5rem] p-6 sm:p-8 md:p-12 lg:p-14 shadow-[0_20px_50px_rgba(0,0,0,0.15)] flex flex-col justify-center">
                                <!-- Blue Quote Icon -->
                                <svg class="w-8 h-8 md:w-10 md:h-10 text-[#0055ff] mb-4 md:mb-6" viewBox="0 0 24 24" fill="currentColor">
                                    <path
                                        d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z" />
                                </svg>
                                <!-- Testimonial Text -->
                                <p class="text-[0.95rem] md:text-[1.1rem] leading-[1.6] text-[#111] font-medium mb-6 md:mb-10 text-left">
                                    Their ability to rapidly scale operations and deliver robust technical solutions
                                    transformed our business. We saw a 300% increase in user engagement within the first
                                    quarter of deployment. I highly recommend their services to enterprise businesses.
                                </p>
                                <!-- Bottom Row: Author & Action -->
                                <div
                                    class="flex flex-col sm:flex-row items-start sm:items-center justify-between gap-6 w-full">
                                    <!-- Author Details -->
                                    <div class="flex items-center gap-4">
                                        <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?auto=format&fit=crop&q=80&w=150"
                                            alt="Sarah Jenkins"
                                            class="w-12 h-12 rounded-full object-cover shadow-sm bg-gray-100">
                                        <div>
                                            <h4 class="text-[#111] font-bold text-[1rem] leading-tight mb-1">Sarah
                                                Jenkins</h4>
                                            <p class="text-[#666] text-[0.8rem] font-medium m-0 leading-snug">CTO,
                                                Vertex Analytics</p>
                                        </div>
                                    </div>

                                    <!-- Watch Video button -->
                                    <button
                                        class="tech-watch-video flex items-center gap-2 text-[#0055ff] hover:text-[#003bb3] active:scale-95 font-bold text-[0.85rem] tracking-wide transition-all outline-none border-none bg-transparent cursor-pointer whitespace-nowrap"
                                        data-video="https://www.youtube.com/embed/LXb3EKWsInQ?autoplay=1&rel=0">
                                        <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                            <circle cx="12" cy="12" r="10"></circle>
                                            <polygon points="10 8 16 12 10 16 10 8" fill="currentColor"></polygon>
                                        </svg>
                                        Watch Video
                                    </button>
                                </div>
                            </div>
                        </div>

                        <!-- Card 2 -->
                        <div class="tech-s6-card relative col-start-1 row-start-1 w-full transition-all duration-700 ease-[cubic-bezier(0.25,0.46,0.45,0.94)] opacity-0 translate-y-12 pointer-events-none z-0"
                            data-idx="2">
                            <!-- White Quote Card -->
                            <div
                                class="w-full max-w-[850px] mx-auto bg-white rounded-[1.5rem] p-6 sm:p-8 md:p-12 lg:p-14 shadow-[0_20px_50px_rgba(0,0,0,0.15)] flex flex-col justify-center">
                                <!-- Blue Quote Icon -->
                                <svg class="w-8 h-8 md:w-10 md:h-10 text-[#0055ff] mb-4 md:mb-6" viewBox="0 0 24 24" fill="currentColor">
                                    <path
                                        d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z" />
                                </svg>
                                <!-- Testimonial Text -->
                                <p class="text-[0.95rem] md:text-[1.1rem] leading-[1.6] text-[#111] font-medium mb-6 md:mb-10 text-left">
                                    Working with them was an absolute gamechanger. They didn't just write code; they
                                    provided deep strategic insights that shaped our entire product roadmap. Truly a
                                    high-caliber team of exceptional engineering talent.
                                </p>
                                <!-- Bottom Row: Author & Action -->
                                <div
                                    class="flex flex-col sm:flex-row items-start sm:items-center justify-between gap-6 w-full">
                                    <!-- Author Details -->
                                    <div class="flex items-center gap-4">
                                        <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?auto=format&fit=crop&q=80&w=150"
                                            alt="Michael Chen"
                                            class="w-12 h-12 rounded-full object-cover shadow-sm bg-gray-100">
                                        <div>
                                            <h4 class="text-[#111] font-bold text-[1rem] leading-tight mb-1">Michael
                                                Chen</h4>
                                            <p class="text-[#666] text-[0.8rem] font-medium m-0 leading-snug">Product
                                                VP, Global Reach</p>
                                        </div>
                                    </div>

                                    <!-- Watch Video button -->
                                    <button
                                        class="tech-watch-video flex items-center gap-2 text-[#0055ff] hover:text-[#003bb3] active:scale-95 font-bold text-[0.85rem] tracking-wide transition-all outline-none border-none bg-transparent cursor-pointer whitespace-nowrap"
                                        data-video="https://www.youtube.com/embed/dQw4w9WgXcQ?autoplay=1&rel=0">
                                        <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                            <circle cx="12" cy="12" r="10"></circle>
                                            <polygon points="10 8 16 12 10 16 10 8" fill="currentColor"></polygon>
                                        </svg>
                                        Watch Video
                                    </button>
                                </div>
                            </div>
                        </div>

                    </div>

                    <!-- Slider Nav Indicators -->
                    <div class="absolute right-4 md:right-6 lg:right-8 top-1/2 transform -translate-y-1/2 flex flex-col items-center gap-3 z-20"
                        id="tech-s6-bullets">
                        <button
                            class="w-1.5 h-6 bg-white rounded-full shadow-sm cursor-pointer transition-all hover:scale-110 border-none outline-none p-0"
                            data-idx="0"></button>
                        <button
                            class="w-1.5 h-3 bg-white/60 rounded-full cursor-pointer transition-all hover:bg-white hover:h-4 active:bg-white border-none outline-none p-0"
                            data-idx="1"></button>
                        <button
                            class="w-1.5 h-3 bg-white/60 rounded-full cursor-pointer transition-all hover:bg-white hover:h-4 active:bg-white border-none outline-none p-0"
                            data-idx="2"></button>
                    </div>
                </div>
            </div>


            <!-- Video Modal -->
            <div id="tech-video-modal"
                class="fixed inset-0 z-[1000] bg-black/90 backdrop-blur-md hidden flex items-center justify-center opacity-0 transition-opacity duration-300">

                <!-- Close Button -->
                <button id="tech-video-close"
                    class="absolute top-6 right-6 md:top-10 md:right-10 text-white hover:text-gray-300 transition-colors cursor-pointer bg-white/10 hover:bg-white/20 border-none outline-none z-10 w-12 h-12 flex items-center justify-center rounded-full backdrop-blur-md">
                    <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round">
                        <line x1="18" y1="6" x2="6" y2="18"></line>
                        <line x1="6" y1="6" x2="18" y2="18"></line>
                    </svg>
                </button>

                <!-- Video Container -->
                <div class="relative w-[90%] max-w-[1000px] aspect-video rounded-2xl overflow-hidden shadow-[0_20px_60px_rgba(0,0,0,0.8)] transform scale-95 transition-transform duration-300"
                    id="tech-video-container">
                    <iframe id="tech-video-iframe" class="absolute inset-0 w-full h-full" src="" title="YouTube video player"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen></iframe>
                </div>

            </div>

            <script>
                document.addEventListener('DOMContentLoaded', () => {
                    const watchReelBtn = document.getElementById('btn-watch-reel');
                    const videoModal = document.getElementById('tech-video-modal');
                    const videoCloseBtn = document.getElementById('tech-video-close');
                    const videoIframe = document.getElementById('tech-video-iframe');
                    const videoContainer = document.getElementById('tech-video-container');

                    // Default placeholder YouTube video URL string
                    const defaultVideoSrc = "https://www.youtube.com/embed/LXb3EKWsInQ?autoplay=1&rel=0";

                    function openModal(videoUrl) {
                        videoModal.classList.remove('hidden');
                        // Force a reflow for CSS transitions to work immediately after removing hidden
                        void videoModal.offsetWidth;

                        // Trigger animations
                        videoModal.classList.remove('opacity-0');
                        videoContainer.classList.remove('scale-95');
                        videoContainer.classList.add('scale-100');

                        // Assign src to start autoplay
                        videoIframe.src = videoUrl;
                    }

                    function closeModal() {
                        // Trigger revert animations
                        videoModal.classList.add('opacity-0');
                        videoContainer.classList.remove('scale-100');
                        videoContainer.classList.add('scale-95');

                        // Wait for transitions to finish before fully hiding and stopping the video
                        setTimeout(() => {
                            videoModal.classList.add('hidden');
                            videoIframe.src = ""; // Stop the video
                        }, 300);
                    }

                    // Event Listeners for buttons
                    if (watchReelBtn) watchReelBtn.addEventListener('click', () => openModal(defaultVideoSrc));

                    // Listeners for individual testimonial 'Watch Video' links
                    const testimonialWatchBtns = document.querySelectorAll('.tech-watch-video');
                    testimonialWatchBtns.forEach(btn => {
                        btn.addEventListener('click', () => {
                            const vidUrl = btn.getAttribute('data-video') || defaultVideoSrc;
                            openModal(vidUrl);
                        });
                    });

                    if (videoCloseBtn) videoCloseBtn.addEventListener('click', closeModal);

                    // Close modal when clicking on the dark backdrop
                    if (videoModal) {
                        videoModal.addEventListener('click', (e) => {
                            if (e.target === videoModal) closeModal();
                        });
                    }

                    // S6 Video Testimonials Carousel logic
                    const s6Container = document.getElementById('tech-s6-carousel');
                    if (s6Container) {
                        const cards = s6Container.querySelectorAll('.tech-s6-card');
                        const bullets = document.getElementById('tech-s6-bullets').querySelectorAll('button');
                        let activeIdx = 0;
                        let isAnimating = false;

                        function updateS6Carousel(newIdx) {
                            if (isAnimating || newIdx === activeIdx) return;
                            isAnimating = true;

                            const isDown = newIdx > activeIdx;
                            const oldCard = cards[activeIdx];
                            const newCard = cards[newIdx];

                            // Prepare new card (slide from bottom if going down, form top if going up)
                            newCard.classList.remove('pointer-events-none', 'z-0', 'translate-y-12', '-translate-y-12');
                            newCard.classList.add('z-10');
                            if (isDown) {
                                newCard.style.transform = 'translateY(40px)';
                            } else {
                                newCard.style.transform = 'translateY(-40px)';
                            }

                            // Force reflow
                            void newCard.offsetWidth;

                            // Animate out old card
                            oldCard.classList.remove('opacity-100', 'z-10', 'translate-y-0');
                            oldCard.classList.add('opacity-0', 'z-0', 'pointer-events-none');
                            if (isDown) {
                                oldCard.style.transform = 'translateY(-40px)';
                            } else {
                                oldCard.style.transform = 'translateY(40px)';
                            }

                            // Animate in new card
                            newCard.classList.remove('opacity-0');
                            newCard.classList.add('opacity-100');
                            newCard.style.transform = 'translateY(0px)';

                            // Update bullets
                            bullets.forEach((b, i) => {
                                if (i === newIdx) {
                                    b.classList.remove('h-3', 'bg-white/60');
                                    b.classList.add('h-6', 'bg-white');
                                } else {
                                    b.classList.add('h-3', 'bg-white/60');
                                    b.classList.remove('h-6', 'bg-white');
                                }
                            });

                            activeIdx = newIdx;

                            // Reset inline transforms after animation completes to let classes take over cleanly
                            setTimeout(() => {
                                isAnimating = false;
                                cards.forEach((c, index) => {
                                    if (index !== activeIdx) {
                                        c.style.transform = '';
                                        if (activeIdx < index) {
                                            c.classList.add('translate-y-12');
                                            c.classList.remove('-translate-y-12');
                                        } else {
                                            c.classList.add('-translate-y-12');
                                            c.classList.remove('translate-y-12');
                                        }
                                    }
                                });
                            }, 700);
                        }

                        // Click on bullets
                        bullets.forEach((bullet) => {
                            bullet.addEventListener('click', () => {
                                const targetIdx = parseInt(bullet.getAttribute('data-idx'));
                                updateS6Carousel(targetIdx);
                            });
                        });

                        // Mouse wheel event
                        s6Container.addEventListener('wheel', (e) => {
                            // Prevent page scroll only if we are actually sliding within bounds
                            if (isAnimating) {
                                e.preventDefault();
                                return;
                            }
                            if (e.deltaY > 0) {
                                if (activeIdx < cards.length - 1) {
                                    e.preventDefault();
                                    updateS6Carousel(activeIdx + 1);
                                }
                            } else if (e.deltaY < 0) {
                                if (activeIdx > 0) {
                                    e.preventDefault();
                                    updateS6Carousel(activeIdx - 1);
                                }
                            }
                        }, { passive: false });

                        // Touch Swipe events for mobile
                        let touchStartY = 0;
                        s6Container.addEventListener('touchstart', (e) => {
                            touchStartY = e.touches[0].clientY;
                        }, { passive: true });

                        s6Container.addEventListener('touchmove', (e) => {
                            if (isAnimating) {
                                e.preventDefault();
                                return;
                            }
                            const touchEndY = e.touches[0].clientY;
                            const diff = touchStartY - touchEndY;
                            if (diff > 0 && activeIdx < cards.length - 1) {
                                e.preventDefault();
                            } else if (diff < 0 && activeIdx > 0) {
                                e.preventDefault();
                            }
                        }, { passive: false });

                        s6Container.addEventListener('touchend', (e) => {
                            const touchEndY = e.changedTouches[0].clientY;
                            const diff = touchStartY - touchEndY;
                            if (Math.abs(diff) > 30) {
                                if (diff > 0 && activeIdx < cards.length - 1) {
                                    updateS6Carousel(activeIdx + 1);
                                } else if (diff < 0 && activeIdx > 0) {
                                    updateS6Carousel(activeIdx - 1);
                                }
                            }
                        });
                    }
                });
            </script>
        </section>

        <!-- SECTION 7: TRUSTED BRANDS -->
        <section class="tech-section-7 relative w-full bg-[#000000] py-[50px] md:py-[50px] lg:py-[60px] overflow-hidden">
            <div class="w-full max-w-[1400px] mx-auto px-[5%]">
                <h2
                    class="text-white text-[1.8rem] md:text-[2.5rem] lg:text-[2.8rem] text-center font-medium leading-[1.2] tracking-tight mb-[60px] md:mb-[80px]">
                    Trusted by the Disruptors<br />and Fortune 500s
                </h2>

                <style>
                    @media (max-width: 767px) {
                        .tech-brand-track-rtl {
                            display: flex;
                            width: calc(160px * 20);
                            animation: tech-scroll-rtl 35s linear infinite;
                        }

                        .tech-brand-track-ltr {
                            display: flex;
                            width: calc(160px * 20);
                            animation: tech-scroll-ltr 35s linear infinite;
                        }

                        @keyframes tech-scroll-rtl {
                            0% {
                                transform: translateX(0);
                            }

                            100% {
                                transform: translateX(calc(-160px * 10));
                            }
                        }

                        @keyframes tech-scroll-ltr {
                            0% {
                                transform: translateX(calc(-160px * 10));
                            }

                            100% {
                                transform: translateX(0);
                            }
                        }
                    }
                </style>

                <div class="relative w-full overflow-hidden">
                    <!-- Fade gradients for mobile -->
                    <div
                        class="absolute inset-y-0 left-0 w-12 bg-gradient-to-r from-black to-transparent z-10 md:hidden pointer-events-none">
                    </div>
                    <div
                        class="absolute inset-y-0 right-0 w-12 bg-gradient-to-l from-black to-transparent z-10 md:hidden pointer-events-none">
                    </div>

                    <!-- ROW 1 (RTL on mobile) -->
                    <div class="w-full mb-10 md:mb-20">
                        <div
                            class="tech-brand-track-rtl flex md:grid md:grid-cols-5 md:gap-x-8 md:gap-y-20 items-center justify-items-center">

                            <!-- Base 10 Logos -->
                            <div
                                class="w-[160px] md:w-auto shrink-0 flex items-center justify-center opacity-70 hover:opacity-100 transition-opacity text-white cursor-pointer grayscale hover:grayscale-0">
                                <span class="font-extrabold text-2xl md:text-3xl tracking-[0.2em]">IKEA</span>
                            </div>
                            <div
                                class="w-[160px] md:w-auto shrink-0 flex items-center justify-center opacity-70 hover:opacity-100 transition-opacity text-white cursor-pointer grayscale hover:grayscale-0">
                                <span class="font-medium text-2xl md:text-3xl tracking-tight normal-case">Google</span>
                            </div>
                            <div
                                class="w-[160px] md:w-auto shrink-0 flex items-center justify-center opacity-70 hover:opacity-100 transition-opacity text-white cursor-pointer grayscale hover:grayscale-0">
                                <span class="font-black text-2xl md:text-3xl tracking-tighter">BCG</span>
                            </div>
                            <div
                                class="w-[160px] md:w-auto shrink-0 flex items-center justify-center opacity-70 hover:opacity-100 transition-opacity text-white cursor-pointer grayscale hover:grayscale-0">
                                <span class="font-bold text-2xl md:text-3xl italic tracking-widest">KFC</span>
                            </div>
                            <div
                                class="w-[160px] md:w-auto shrink-0 flex items-center justify-center opacity-70 hover:opacity-100 transition-opacity text-white cursor-pointer grayscale hover:grayscale-0">
                                <span class="font-black text-xl md:text-2xl tracking-tighter uppercase relative"><span
                                        class="absolute -left-3 top-0 text-[10px] transform -rotate-90">TGI</span>FRIDAYS</span>
                            </div>

                            <div
                                class="w-[160px] md:w-auto shrink-0 flex items-center justify-center opacity-70 hover:opacity-100 transition-opacity text-white cursor-pointer grayscale hover:grayscale-0">
                                <span class="font-bold text-3xl md:text-4xl lowercase tracking-tighter">moo</span>
                            </div>
                            <div
                                class="w-[160px] md:w-auto shrink-0 flex items-center justify-center opacity-70 hover:opacity-100 transition-opacity text-white cursor-pointer grayscale hover:grayscale-0">
                                <span class="font-serif italic text-2xl md:text-3xl tracking-tight">Krispy Kreme</span>
                            </div>
                            <div
                                class="w-[160px] md:w-auto shrink-0 flex items-center justify-center opacity-70 hover:opacity-100 transition-opacity text-white cursor-pointer grayscale hover:grayscale-0">
                                <span
                                    class="font-serif italic font-bold text-2xl md:text-3xl tracking-tighter">Hardee's</span>
                            </div>
                            <div
                                class="w-[160px] md:w-auto shrink-0 flex items-center justify-center opacity-70 hover:opacity-100 transition-opacity text-white cursor-pointer grayscale hover:grayscale-0">
                                <span
                                    class="font-bold text-lg md:text-xl uppercase tracking-widest text-center leading-tight">BAJAJ<br>Allianz</span>
                            </div>
                            <div
                                class="w-[160px] md:w-auto shrink-0 flex items-center justify-center opacity-70 hover:opacity-100 transition-opacity text-white cursor-pointer grayscale hover:grayscale-0">
                                <span class="font-bold text-xl md:text-2xl tracking-tight flex items-center gap-1"><span
                                        class="text-blue-500 text-xl transform rotate-45">❖</span>Domino's</span>
                            </div>

                            <!-- Duplicate 10 Logos strictly for mobile -->
                            <div
                                class="md:hidden w-[160px] shrink-0 flex items-center justify-center opacity-70 hover:opacity-100 transition-opacity text-white cursor-pointer grayscale hover:grayscale-0">
                                <span class="font-extrabold text-2xl tracking-[0.2em]">IKEA</span>
                            </div>
                            <div
                                class="md:hidden w-[160px] shrink-0 flex items-center justify-center opacity-70 hover:opacity-100 transition-opacity text-white cursor-pointer grayscale hover:grayscale-0">
                                <span class="font-medium text-2xl tracking-tight normal-case">Google</span>
                            </div>
                            <div
                                class="md:hidden w-[160px] shrink-0 flex items-center justify-center opacity-70 hover:opacity-100 transition-opacity text-white cursor-pointer grayscale hover:grayscale-0">
                                <span class="font-black text-2xl tracking-tighter">BCG</span>
                            </div>
                            <div
                                class="md:hidden w-[160px] shrink-0 flex items-center justify-center opacity-70 hover:opacity-100 transition-opacity text-white cursor-pointer grayscale hover:grayscale-0">
                                <span class="font-bold text-2xl italic tracking-widest">KFC</span>
                            </div>
                            <div
                                class="md:hidden w-[160px] shrink-0 flex items-center justify-center opacity-70 hover:opacity-100 transition-opacity text-white cursor-pointer grayscale hover:grayscale-0">
                                <span class="font-black text-xl tracking-tighter uppercase relative"><span
                                        class="absolute -left-3 top-0 text-[10px] transform -rotate-90">TGI</span>FRIDAYS</span>
                            </div>
                            <div
                                class="md:hidden w-[160px] shrink-0 flex items-center justify-center opacity-70 hover:opacity-100 transition-opacity text-white cursor-pointer grayscale hover:grayscale-0">
                                <span class="font-bold text-3xl lowercase tracking-tighter">moo</span>
                            </div>
                            <div
                                class="md:hidden w-[160px] shrink-0 flex items-center justify-center opacity-70 hover:opacity-100 transition-opacity text-white cursor-pointer grayscale hover:grayscale-0">
                                <span class="font-serif italic text-2xl tracking-tight">Krispy Kreme</span>
                            </div>
                            <div
                                class="md:hidden w-[160px] shrink-0 flex items-center justify-center opacity-70 hover:opacity-100 transition-opacity text-white cursor-pointer grayscale hover:grayscale-0">
                                <span class="font-serif italic font-bold text-2xl tracking-tighter">Hardee's</span>
                            </div>
                            <div
                                class="md:hidden w-[160px] shrink-0 flex items-center justify-center opacity-70 hover:opacity-100 transition-opacity text-white cursor-pointer grayscale hover:grayscale-0">
                                <span
                                    class="font-bold text-lg uppercase tracking-widest text-center leading-tight">BAJAJ<br>Allianz</span>
                            </div>
                            <div
                                class="md:hidden w-[160px] shrink-0 flex items-center justify-center opacity-70 hover:opacity-100 transition-opacity text-white cursor-pointer grayscale hover:grayscale-0">
                                <span class="font-bold text-xl tracking-tight flex items-center gap-1"><span
                                        class="text-blue-500 text-xl transform rotate-45">❖</span>Domino's</span>
                            </div>
                        </div>
                    </div>

                    <!-- ROW 2 (LTR on mobile) -->
                    <div class="w-full">
                        <div
                            class="tech-brand-track-ltr flex md:grid md:grid-cols-5 md:gap-x-8 md:gap-y-20 items-center justify-items-center">

                            <!-- Base 10 Logos -->
                            <div
                                class="w-[160px] md:w-auto shrink-0 flex items-center justify-center px-4 md:px-0 opacity-70 hover:opacity-100 transition-opacity text-white cursor-pointer grayscale hover:grayscale-0">
                                <span
                                    class="font-serif italic font-light text-2xl md:text-3xl tracking-tight">SuperShe</span>
                            </div>
                            <div
                                class="w-[160px] md:w-auto shrink-0 flex items-center justify-center px-4 md:px-0 opacity-70 hover:opacity-100 transition-opacity text-white cursor-pointer grayscale hover:grayscale-0">
                                <span
                                    class="font-black text-2xl md:text-3xl uppercase tracking-widest text-[#E3DAC9]">WIMPY</span>
                            </div>
                            <div
                                class="w-[160px] md:w-auto shrink-0 flex items-center justify-center px-4 md:px-0 opacity-70 hover:opacity-100 transition-opacity text-white cursor-pointer grayscale hover:grayscale-0">
                                <span
                                    class="font-bold text-sm md:text-base tracking-[0.15em] uppercase flex flex-col items-center gap-1"><span
                                        class="text-[#888] text-[0.6rem]">▼</span>EMPIREHOTELS</span>
                            </div>
                            <div
                                class="w-[160px] md:w-auto shrink-0 flex items-center justify-center px-4 md:px-0 opacity-70 hover:opacity-100 transition-opacity text-white cursor-pointer grayscale hover:grayscale-0">
                                <span class="font-semibold text-2xl md:text-3xl lowercase tracking-tight">jobget</span>
                            </div>
                            <div
                                class="w-[160px] md:w-auto shrink-0 flex items-center justify-center px-4 md:px-0 opacity-70 hover:opacity-100 transition-opacity text-white cursor-pointer grayscale hover:grayscale-0">
                                <span
                                    class="font-medium text-[0.6rem] md:text-[0.7rem] tracking-[0.2em] uppercase leading-tight text-right opacity-90"><span
                                        class="flex items-center justify-center gap-2"><svg
                                            class="w-5 h-5 border border-white p-0.5" viewBox="0 0 24 24">
                                            <path fill="currentColor" d="M2 2h20v20H2z" />
                                        </svg>
                                        <div class="text-left">ASIAN BANK<br><span
                                                class="text-[0.45rem] md:text-[0.55rem] tracking-widest">& CAPITAL
                                                TRUST</span></div>
                                    </span></span>
                            </div>

                            <div
                                class="w-[160px] md:w-auto shrink-0 flex items-center justify-center px-4 md:px-0 opacity-70 hover:opacity-100 transition-opacity text-white cursor-pointer grayscale hover:grayscale-0">
                                <span
                                    class="font-bold text-xs md:text-sm tracking-[0.1em] uppercase leading-[1.1] text-center"><span
                                        class="block border-b-2 border-white pb-0.5 mb-0.5">AMERICAN</span>EXPRESS</span>
                            </div>
                            <div
                                class="w-[160px] md:w-auto shrink-0 flex items-center justify-center px-4 md:px-0 opacity-70 hover:opacity-100 transition-opacity text-white cursor-pointer grayscale hover:grayscale-0">
                                <span
                                    class="font-bold text-lg md:text-xl tracking-widest uppercase border-2 border-white rounded-[2rem] px-4 md:px-5 py-1 leading-none">AMERICANA</span>
                            </div>
                            <div
                                class="w-[160px] md:w-auto shrink-0 flex items-center justify-center px-4 md:px-0 opacity-70 hover:opacity-100 transition-opacity text-white cursor-pointer grayscale hover:grayscale-0">
                                <span class="font-black text-2xl md:text-3xl uppercase tracking-widest">HONDA</span>
                            </div>
                            <div
                                class="w-[160px] md:w-auto shrink-0 flex items-center justify-center px-4 md:px-0 opacity-70 hover:opacity-100 transition-opacity text-white cursor-pointer grayscale hover:grayscale-0">
                                <span class="flex flex-col items-center gap-1.5"><svg class="w-6 h-6 md:w-8 md:h-8"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <circle cx="12" cy="12" r="10" />
                                    </svg><span class="text-[0.5rem] md:text-[0.6rem] tracking-[0.2em] uppercase">THE
                                        BODY SHOP</span></span>
                            </div>
                            <div
                                class="w-[160px] md:w-auto shrink-0 flex items-center justify-center px-4 md:px-0 opacity-70 hover:opacity-100 transition-opacity text-white cursor-pointer grayscale hover:grayscale-0">
                                <span class="font-medium text-base md:text-xl tracking-[0.15em] lowercase">6<span
                                        class="text-[0.6rem] md:text-xs uppercase align-top">th</span>street.com</span>
                            </div>

                            <!-- Duplicate 10 Logos strictly for mobile -->
                            <div
                                class="md:hidden w-[160px] shrink-0 flex items-center justify-center px-4 opacity-70 hover:opacity-100 transition-opacity text-white cursor-pointer grayscale hover:grayscale-0">
                                <span class="font-serif italic font-light text-2xl tracking-tight">SuperShe</span>
                            </div>
                            <div
                                class="md:hidden w-[160px] shrink-0 flex items-center justify-center px-4 opacity-70 hover:opacity-100 transition-opacity text-white cursor-pointer grayscale hover:grayscale-0">
                                <span class="font-black text-2xl uppercase tracking-widest text-[#E3DAC9]">WIMPY</span>
                            </div>
                            <div
                                class="md:hidden w-[160px] shrink-0 flex items-center justify-center px-4 opacity-70 hover:opacity-100 transition-opacity text-white cursor-pointer grayscale hover:grayscale-0">
                                <span
                                    class="font-bold text-sm tracking-[0.15em] uppercase flex flex-col items-center gap-1"><span
                                        class="text-[#888] text-[0.6rem]">▼</span>EMPIREHOTELS</span>
                            </div>
                            <div
                                class="md:hidden w-[160px] shrink-0 flex items-center justify-center px-4 opacity-70 hover:opacity-100 transition-opacity text-white cursor-pointer grayscale hover:grayscale-0">
                                <span class="font-semibold text-2xl lowercase tracking-tight">jobget</span>
                            </div>
                            <div
                                class="md:hidden w-[160px] shrink-0 flex items-center justify-center px-4 opacity-70 hover:opacity-100 transition-opacity text-white cursor-pointer grayscale hover:grayscale-0">
                                <span
                                    class="font-medium text-[0.6rem] tracking-[0.2em] uppercase leading-tight text-right opacity-90"><span
                                        class="flex items-center justify-center gap-2"><svg
                                            class="w-5 h-5 border border-white p-0.5" viewBox="0 0 24 24">
                                            <path fill="currentColor" d="M2 2h20v20H2z" />
                                        </svg>
                                        <div class="text-left">ASIAN BANK<br><span
                                                class="text-[0.45rem] tracking-widest">& CAPITAL TRUST</span></div>
                                    </span></span>
                            </div>
                            <div
                                class="md:hidden w-[160px] shrink-0 flex items-center justify-center px-4 opacity-70 hover:opacity-100 transition-opacity text-white cursor-pointer grayscale hover:grayscale-0">
                                <span
                                    class="font-bold text-xs tracking-[0.1em] uppercase leading-[1.1] text-center"><span
                                        class="block border-b-2 border-white pb-0.5 mb-0.5">AMERICAN</span>EXPRESS</span>
                            </div>
                            <div
                                class="md:hidden w-[160px] shrink-0 flex items-center justify-center px-4 opacity-70 hover:opacity-100 transition-opacity text-white cursor-pointer grayscale hover:grayscale-0">
                                <span
                                    class="font-bold text-lg tracking-widest uppercase border-2 border-white rounded-[2rem] px-4 py-1 leading-none">AMERICANA</span>
                            </div>
                            <div
                                class="md:hidden w-[160px] shrink-0 flex items-center justify-center px-4 opacity-70 hover:opacity-100 transition-opacity text-white cursor-pointer grayscale hover:grayscale-0">
                                <span class="font-black text-2xl uppercase tracking-widest">HONDA</span>
                            </div>
                            <div
                                class="md:hidden w-[160px] shrink-0 flex items-center justify-center px-4 opacity-70 hover:opacity-100 transition-opacity text-white cursor-pointer grayscale hover:grayscale-0">
                                <span class="flex flex-col items-center gap-1.5"><svg class="w-6 h-6"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <circle cx="12" cy="12" r="10" />
                                    </svg><span class="text-[0.5rem] tracking-[0.2em] uppercase">THE BODY
                                        SHOP</span></span>
                            </div>
                            <div
                                class="md:hidden w-[160px] shrink-0 flex items-center justify-center px-4 opacity-70 hover:opacity-100 transition-opacity text-white cursor-pointer grayscale hover:grayscale-0">
                                <span class="font-medium text-base tracking-[0.15em] lowercase">6<span
                                        class="text-[0.6rem] uppercase align-top">th</span>street.com</span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- SECTION 8: DEEP TECHNICAL EXPERTISE -->
        <section class="tech-section-8 relative w-full bg-[#000000] py-[50px] md:py-[50px] lg:py-[60px] overflow-hidden">
            <div class="w-full max-w-[1400px] mx-auto px-[5%]">
                <!-- Heading -->
                <h2 class="text-white text-[1.8rem] md:text-[2.5rem] lg:text-[2.8rem] text-center font-medium leading-[1.2] tracking-tight mb-[60px] md:mb-[80px]">
                    Deep Technical Expertise,<br>Supporting Modern Systems</h2>

                <!-- Cards Track — horizontal scroll on mobile, 3-col grid on desktop -->
                <div class="flex md:grid md:grid-cols-3 flex-nowrap md:flex-wrap overflow-x-auto md:overflow-visible gap-0 [scrollbar-width:none] [-ms-overflow-style:none] [&::-webkit-scrollbar]:hidden tech-s8-track cursor-grab"
                    id="tech-s8-track" style="-webkit-overflow-scrolling: touch;">

                    <!-- Card 1: Artificial Intelligence -->
                    <div class="tech-s8-card group relative shrink-0 w-[78vw] max-w-[310px] md:max-w-none md:w-auto md:min-w-0 p-[28px] md:p-[36px] border-b border-r border-[rgba(255,255,255,0.08)] hover:border-white/15 transition-all duration-500 cursor-pointer">
                        <div
                            class="absolute inset-0 border border-white/0 group-hover:border-white/20 rounded-sm transition-all duration-400 pointer-events-none">
                        </div>
                        <svg class="w-7 h-7 mb-6 text-[#4477ff]" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="1.5">
                            <path
                                d="M12 2a2 2 0 0 1 2 2c0 .74-.4 1.39-1 1.73V7h1a7 7 0 0 1 7 7h1a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-1v1a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-1H2a1 1 0 0 1-1-1v-3a1 1 0 0 1 1-1h1a7 7 0 0 1 7-7h1V5.73c-.6-.34-1-.99-1-1.73a2 2 0 0 1 2-2z" />
                            <circle cx="7.5" cy="14.5" r="1.5" fill="currentColor" />
                            <circle cx="16.5" cy="14.5" r="1.5" fill="currentColor" />
                        </svg>
                        <h3 class="text-white font-bold text-[1.1rem] mb-4 tech-s8-card-title relative inline-block after:content-[''] after:absolute after:left-0 after:bottom-[-2px] after:w-0 after:h-[1.5px] after:bg-current after:transition-[width] after:duration-[400ms] after:ease-[cubic-bezier(0.25,0.46,0.45,0.94)] group-hover:after:w-full">Artificial Intelligence
                        </h3>
                        <p class="text-[#888] text-[0.875rem] leading-[1.7] font-normal m-0">AI only creates value when
                            it fits into how an organization actually works. We help enterprises apply intelligence in
                            ways that improve decisions, reduce manual effort, and support operations at scale.</p>
                    </div>

                    <!-- Card 2: Generative AI -->
                    <div class="tech-s8-card group relative shrink-0 w-[78vw] max-w-[310px] md:max-w-none md:w-auto md:min-w-0 p-[28px] md:p-[36px] border-b border-r border-[rgba(255,255,255,0.08)] hover:border-white/15 transition-all duration-500 cursor-pointer">
                        <div
                            class="absolute inset-0 border border-white/0 group-hover:border-white/20 rounded-sm transition-all duration-400 pointer-events-none">
                        </div>
                        <svg class="w-7 h-7 mb-6 text-[#4477ff]" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="1.5">
                            <path d="M12 3c-4.97 0-9 4.03-9 9s4.03 9 9 9 9-4.03 9-9" />
                            <path d="M12 3v4M19 6l-3 3" />
                            <path d="M12 13V8" />
                            <path d="m8 12 2.5 2.5" />
                        </svg>
                        <h3 class="text-white font-bold text-[1.1rem] mb-4 tech-s8-card-title relative inline-block after:content-[''] after:absolute after:left-0 after:bottom-[-2px] after:w-0 after:h-[1.5px] after:bg-current after:transition-[width] after:duration-[400ms] after:ease-[cubic-bezier(0.25,0.46,0.45,0.94)] group-hover:after:w-full">Generative AI</h3>
                        <p class="text-[#888] text-[0.875rem] leading-[1.7] font-normal m-0">Gen AI is most useful when
                            it becomes part of everyday work. We integrate it into internal knowledge systems, customer
                            interactions, and operational tools, with the controls and governance enterprises expect.
                        </p>
                    </div>

                    <!-- Card 3: Agentic AI -->
                    <div class="tech-s8-card group relative shrink-0 w-[78vw] max-w-[310px] md:max-w-none md:w-auto md:min-w-0 p-[28px] md:p-[36px] border-b border-[rgba(255,255,255,0.08)] hover:border-white/15 transition-all duration-500 cursor-pointer">
                        <div
                            class="absolute inset-0 border border-white/0 group-hover:border-white/20 rounded-sm transition-all duration-400 pointer-events-none">
                        </div>
                        <svg class="w-7 h-7 mb-6 text-[#4477ff]" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="1.5">
                            <rect x="2" y="6" width="20" height="12" rx="2" />
                            <path d="M12 12h.01M8 12h.01M16 12h.01" />
                        </svg>
                        <h3 class="text-white font-bold text-[1.1rem] mb-4 tech-s8-card-title relative inline-block after:content-[''] after:absolute after:left-0 after:bottom-[-2px] after:w-0 after:h-[1.5px] after:bg-current after:transition-[width] after:duration-[400ms] after:ease-[cubic-bezier(0.25,0.46,0.45,0.94)] group-hover:after:w-full">Agentic AI</h3>
                        <p class="text-[#888] text-[0.875rem] leading-[1.7] font-normal m-0">We work with organizations
                            exploring autonomous systems, helping them introduce AI agents that can take action across
                            processes while remaining transparent, supervised, and accountable.</p>
                    </div>

                    <!-- Card 4: Machine Learning -->
                    <div class="tech-s8-card group relative shrink-0 w-[78vw] max-w-[310px] md:max-w-none md:w-auto md:min-w-0 p-[28px] md:p-[36px] border-b border-r border-[rgba(255,255,255,0.08)] hover:border-white/15 transition-all duration-500 cursor-pointer">
                        <div
                            class="absolute inset-0 border border-white/0 group-hover:border-white/20 rounded-sm transition-all duration-400 pointer-events-none">
                        </div>
                        <svg class="w-7 h-7 mb-6 text-[#4477ff]" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="1.5">
                            <path
                                d="M9.5 2A2.5 2.5 0 0 1 12 4.5v15a2.5 2.5 0 0 1-4.96.44 2.5 2.5 0 0 1-2.96-3.08 3 3 0 0 1-.34-5.58 2.5 2.5 0 0 1 1.32-4.24 2.5 2.5 0 0 1 4.44-1.04" />
                            <path
                                d="M14.5 2A2.5 2.5 0 0 0 12 4.5v15a2.5 2.5 0 0 0 4.96.44 2.5 2.5 0 0 0 2.96-3.08 3 3 0 0 0 .34-5.58 2.5 2.5 0 0 0-1.32-4.24 2.5 2.5 0 0 0-4.44-1.04" />
                        </svg>
                        <h3 class="text-white font-bold text-[1.1rem] mb-4 tech-s8-card-title relative inline-block after:content-[''] after:absolute after:left-0 after:bottom-[-2px] after:w-0 after:h-[1.5px] after:bg-current after:transition-[width] after:duration-[400ms] after:ease-[cubic-bezier(0.25,0.46,0.45,0.94)] group-hover:after:w-full">Machine Learning</h3>
                        <p class="text-[#888] text-[0.875rem] leading-[1.7] font-normal m-0">Building and deploying ML
                            models that go beyond experiments puts machine intelligence into production environments
                            that are less about prototypes and more about reliable, business-ready outcomes.</p>
                    </div>

                    <!-- Card 5: Computer Vision -->
                    <div class="tech-s8-card group relative shrink-0 w-[78vw] max-w-[310px] md:max-w-none md:w-auto md:min-w-0 p-[28px] md:p-[36px] border-b border-r border-[rgba(255,255,255,0.08)] hover:border-white/15 transition-all duration-500 cursor-pointer">
                        <div
                            class="absolute inset-0 border border-white/0 group-hover:border-white/20 rounded-sm transition-all duration-400 pointer-events-none">
                        </div>
                        <svg class="w-7 h-7 mb-6 text-[#4477ff]" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="1.5">
                            <path
                                d="M2.062 12.348a1 1 0 0 1 0-.696 10.75 10.75 0 0 1 19.876 0 1 1 0 0 1 0 .696 10.75 10.75 0 0 1-19.876 0" />
                            <circle cx="12" cy="12" r="3" />
                        </svg>
                        <h3 class="text-white font-bold text-[1.1rem] mb-4 tech-s8-card-title relative inline-block after:content-[''] after:absolute after:left-0 after:bottom-[-2px] after:w-0 after:h-[1.5px] after:bg-current after:transition-[width] after:duration-[400ms] after:ease-[cubic-bezier(0.25,0.46,0.45,0.94)] group-hover:after:w-full">Computer Vision</h3>
                        <p class="text-[#888] text-[0.875rem] leading-[1.7] font-normal m-0">In environments where speed
                            and accuracy are critical, we build visual intelligence systems for quality control, object
                            detection, facial recognition, and real-time monitoring at industrial scale.</p>
                    </div>

                    <!-- Card 6: Cloud -->
                    <div class="tech-s8-card group relative shrink-0 w-[78vw] max-w-[310px] md:max-w-none md:w-auto md:min-w-0 p-[28px] md:p-[36px] border-b border-[rgba(255,255,255,0.08)] hover:border-white/15 transition-all duration-500 cursor-pointer">
                        <div
                            class="absolute inset-0 border border-white/0 group-hover:border-white/20 rounded-sm transition-all duration-400 pointer-events-none">
                        </div>
                        <svg class="w-7 h-7 mb-6 text-[#4477ff]" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="1.5">
                            <path d="M17.5 19H9a7 7 0 1 1 6.71-9h1.79a4.5 4.5 0 1 1 0 9z" />
                        </svg>
                        <h3 class="text-white font-bold text-[1.1rem] mb-4 tech-s8-card-title relative inline-block after:content-[''] after:absolute after:left-0 after:bottom-[-2px] after:w-0 after:h-[1.5px] after:bg-current after:transition-[width] after:duration-[400ms] after:ease-[cubic-bezier(0.25,0.46,0.45,0.94)] group-hover:after:w-full">Cloud</h3>
                        <p class="text-[#888] text-[0.875rem] leading-[1.7] font-normal m-0">Cloud modernization is not
                            a lift-and-shift operation. We architect cloud strategies that align with your performance,
                            compliance, and cost goals across AWS, Azure, and Google Cloud.</p>
                    </div>

                    <!-- Card 7: Data Engineering -->
                    <div class="tech-s8-card group relative shrink-0 w-[78vw] max-w-[310px] md:max-w-none md:w-auto md:min-w-0 p-[28px] md:p-[36px] border-b border-r border-[rgba(255,255,255,0.08)] hover:border-white/15 transition-all duration-500 cursor-pointer">
                        <div
                            class="absolute inset-0 border border-white/0 group-hover:border-white/20 rounded-sm transition-all duration-400 pointer-events-none">
                        </div>
                        <svg class="w-7 h-7 mb-6 text-[#4477ff]" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="1.5">
                            <ellipse cx="12" cy="5" rx="9" ry="3" />
                            <path d="M3 5v14a9 3 0 0 0 18 0V5" />
                            <path d="M3 12a9 3 0 0 0 18 0" />
                        </svg>
                        <h3 class="text-white font-bold text-[1.1rem] mb-4 tech-s8-card-title relative inline-block after:content-[''] after:absolute after:left-0 after:bottom-[-2px] after:w-0 after:h-[1.5px] after:bg-current after:transition-[width] after:duration-[400ms] after:ease-[cubic-bezier(0.25,0.46,0.45,0.94)] group-hover:after:w-full">Data Engineering</h3>
                        <p class="text-[#888] text-[0.875rem] leading-[1.7] font-normal m-0">AI is only as good as the
                            data behind it. We build and maintain the pipelines, warehouses, and infrastructure that
                            ensure your models and analytics are always working from clean, reliable data.</p>
                    </div>

                    <!-- Card 8: IoT & Edge -->
                    <div class="tech-s8-card group relative shrink-0 w-[78vw] max-w-[310px] md:max-w-none md:w-auto md:min-w-0 p-[28px] md:p-[36px] border-b border-r border-[rgba(255,255,255,0.08)] hover:border-white/15 transition-all duration-500 cursor-pointer">
                        <div
                            class="absolute inset-0 border border-white/0 group-hover:border-white/20 rounded-sm transition-all duration-400 pointer-events-none">
                        </div>
                        <svg class="w-7 h-7 mb-6 text-[#4477ff]" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="1.5">
                            <path d="M5 12.55a11 11 0 0 1 14.08 0" />
                            <path d="M1.42 9a16 16 0 0 1 21.16 0" />
                            <path d="M8.53 16.11a6 6 0 0 1 6.95 0" />
                            <circle cx="12" cy="20" r="1" fill="currentColor" />
                        </svg>
                        <h3 class="text-white font-bold text-[1.1rem] mb-4 tech-s8-card-title relative inline-block after:content-[''] after:absolute after:left-0 after:bottom-[-2px] after:w-0 after:h-[1.5px] after:bg-current after:transition-[width] after:duration-[400ms] after:ease-[cubic-bezier(0.25,0.46,0.45,0.94)] group-hover:after:w-full">IoT & Edge Computing</h3>
                        <p class="text-[#888] text-[0.875rem] leading-[1.7] font-normal m-0">We connect physical and
                            digital environments by building IoT systems and edge deployments that process data where
                            it's generated, reducing latency and enabling real-time intelligence.</p>
                    </div>

                    <!-- Card 9: Cybersecurity -->
                    <div class="tech-s8-card group relative shrink-0 w-[78vw] max-w-[310px] md:max-w-none md:w-auto md:min-w-0 p-[28px] md:p-[36px] border-b border-[rgba(255,255,255,0.08)] hover:border-white/15 transition-all duration-500 cursor-pointer">
                        <div
                            class="absolute inset-0 border border-white/0 group-hover:border-white/20 rounded-sm transition-all duration-400 pointer-events-none">
                        </div>
                        <svg class="w-7 h-7 mb-6 text-[#4477ff]" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="1.5">
                            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z" />
                        </svg>
                        <h3 class="text-white font-bold text-[1.1rem] mb-4 tech-s8-card-title relative inline-block after:content-[''] after:absolute after:left-0 after:bottom-[-2px] after:w-0 after:h-[1.5px] after:bg-current after:transition-[width] after:duration-[400ms] after:ease-[cubic-bezier(0.25,0.46,0.45,0.94)] group-hover:after:w-full">Cybersecurity</h3>
                        <p class="text-[#888] text-[0.875rem] leading-[1.7] font-normal m-0">Enterprise security
                            requires more than compliance checkboxes. We integrate security into systems architecture,
                            helping organizations protect data, manage risk, and respond to threats proactively.</p>
                    </div>

                    <!-- Card 10: DevOps & Platform Eng -->
                    <div class="tech-s8-card group relative shrink-0 w-[78vw] max-w-[310px] md:max-w-none md:w-auto md:min-w-0 p-[28px] md:p-[36px] border-r border-[rgba(255,255,255,0.08)] hover:border-white/15 transition-all duration-500 cursor-pointer">
                        <div
                            class="absolute inset-0 border border-white/0 group-hover:border-white/20 rounded-sm transition-all duration-400 pointer-events-none">
                        </div>
                        <svg class="w-7 h-7 mb-6 text-[#4477ff]" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="1.5">
                            <polyline points="16 18 22 12 16 6" />
                            <polyline points="8 6 2 12 8 18" />
                        </svg>
                        <h3 class="text-white font-bold text-[1.1rem] mb-4 tech-s8-card-title relative inline-block after:content-[''] after:absolute after:left-0 after:bottom-[-2px] after:w-0 after:h-[1.5px] after:bg-current after:transition-[width] after:duration-[400ms] after:ease-[cubic-bezier(0.25,0.46,0.45,0.94)] group-hover:after:w-full">DevOps & Platform
                            Engineering</h3>
                        <p class="text-[#888] text-[0.875rem] leading-[1.7] font-normal m-0">Speed without stability is
                            risk. We build developer platforms, CI/CD pipelines, and infrastructure-as-code systems that
                            let engineering teams ship faster while maintaining control over what goes to production.
                        </p>
                    </div>

                    <!-- Card 11: Blockchain & Web3 -->
                    <div class="tech-s8-card group relative shrink-0 w-[78vw] max-w-[310px] md:max-w-none md:w-auto md:min-w-0 p-[28px] md:p-[36px] border-r border-[rgba(255,255,255,0.08)] hover:border-white/15 transition-all duration-500 cursor-pointer">
                        <div
                            class="absolute inset-0 border border-white/0 group-hover:border-white/20 rounded-sm transition-all duration-400 pointer-events-none">
                        </div>
                        <svg class="w-7 h-7 mb-6 text-[#4477ff]" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="1.5">
                            <path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71" />
                            <path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71" />
                        </svg>
                        <h3 class="text-white font-bold text-[1.1rem] mb-4 tech-s8-card-title relative inline-block after:content-[''] after:absolute after:left-0 after:bottom-[-2px] after:w-0 after:h-[1.5px] after:bg-current after:transition-[width] after:duration-[400ms] after:ease-[cubic-bezier(0.25,0.46,0.45,0.94)] group-hover:after:w-full">Blockchain & Web3</h3>
                        <p class="text-[#888] text-[0.875rem] leading-[1.7] font-normal m-0">We help enterprises
                            evaluate and implement blockchain where it genuinely adds value — from smart contracts and
                            tokenization to decentralized identity and supply chain transparency.</p>
                    </div>

                    <!-- Card 12: AR/VR & Spatial Computing -->
                    <div
                        class="tech-s8-card group relative shrink-0 w-[78vw] max-w-[310px] md:max-w-none md:w-auto md:min-w-0 p-[28px] md:p-[36px] border-transparent hover:border-white/15 transition-all duration-500 cursor-pointer">
                        <div
                            class="absolute inset-0 border border-white/0 group-hover:border-white/20 rounded-sm transition-all duration-400 pointer-events-none">
                        </div>
                        <svg class="w-7 h-7 mb-6 text-[#4477ff]" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="1.5">
                            <path d="M2 12s3-7 10-7 10 7 10 7-3 7-10 7-10-7-10-7z" />
                            <circle cx="12" cy="12" r="3" />
                            <path d="M12 2v4M12 18v4M4.93 4.93l2.83 2.83M16.24 16.24l2.83 2.83" />
                        </svg>
                        <h3 class="text-white font-bold text-[1.1rem] mb-4 tech-s8-card-title relative inline-block after:content-[''] after:absolute after:left-0 after:bottom-[-2px] after:w-0 after:h-[1.5px] after:bg-current after:transition-[width] after:duration-[400ms] after:ease-[cubic-bezier(0.25,0.46,0.45,0.94)] group-hover:after:w-full">AR/VR & Spatial Computing
                        </h3>
                        <p class="text-[#888] text-[0.875rem] leading-[1.7] font-normal m-0">Immersive technology is
                            crossing the threshold into enterprise use. We build AR and VR solutions for training,
                            simulation, remote collaboration, and customer experience that meet professional-grade
                            standards.</p>
                    </div>

                </div>
            </div>

            <!-- Drag-scroll JS for S8 mobile track -->
            <script>
                (function () {
                    const s8Track = document.getElementById('tech-s8-track');
                    if (!s8Track) return;
                    let isDown = false;
                    let startX;
                    let scrollLeft;
                    let hasDragged = false;

                    function onDown(x) {
                        isDown = true;
                        hasDragged = false;
                        startX = x - s8Track.offsetLeft;
                        scrollLeft = s8Track.scrollLeft;
                        s8Track.classList.remove('cursor-grab');
                        s8Track.classList.add('cursor-grabbing');
                    }
                    function onUp() {
                        isDown = false;
                        s8Track.classList.remove('cursor-grabbing');
                        s8Track.classList.add('cursor-grab');
                    }
                    function onMove(x) {
                        if (!isDown) return;
                        const walk = (x - s8Track.offsetLeft - startX) * 1.5;
                        if (Math.abs(walk) > 4) hasDragged = true;
                        s8Track.scrollLeft = scrollLeft - walk;
                    }

                    s8Track.addEventListener('mousedown', e => onDown(e.pageX));
                    window.addEventListener('mouseup', onUp);
                    s8Track.addEventListener('mousemove', e => { e.preventDefault(); onMove(e.pageX); });
                    s8Track.addEventListener('touchstart', e => onDown(e.touches[0].pageX), { passive: true });
                    s8Track.addEventListener('touchend', onUp);
                    s8Track.addEventListener('touchmove', e => onMove(e.touches[0].pageX), { passive: true });
                    // Prevent click-through after drag
                    s8Track.addEventListener('click', e => { if (hasDragged) e.stopImmediatePropagation(); }, true);

                    // Auto-scroll logic for mobile (ping-pong)
                    let s8AutoScrollTimer;
                    let s8ScrollDir = 1;

                    function startS8AutoScroll() {
                        if (s8AutoScrollTimer) clearInterval(s8AutoScrollTimer);
                        
                        s8AutoScrollTimer = setInterval(() => {
                            if (window.innerWidth >= 768) return; // Only auto-scroll on typical mobile widths

                            if (!isDown) {
                                s8Track.scrollLeft += s8ScrollDir * 1;
                                
                                // Reverse direction if we hit the ends
                                if (s8Track.scrollLeft >= (s8Track.scrollWidth - s8Track.clientWidth) - 2) {
                                    s8ScrollDir = -1; // Bounce backwards
                                } else if (s8Track.scrollLeft <= 0) {
                                    s8ScrollDir = 1; // Move forwards
                                }
                            }
                        }, 25);
                    }
                    startS8AutoScroll();
                })();
            </script>

        </section>

        <!-- SECTION 9: PROVEN EXPERTISE. GLOBALLY ACCREDITED. -->
        <section class="tech-section-9 relative w-full bg-[#000000] py-[50px] md:py-[50px] lg:py-[60px] overflow-hidden">
            <!-- Header -->
            <div class="w-full max-w-[1400px] mx-auto px-[5%] box-border">
                <div class="text-center mb-[56px] scroll-reveal opacity-0 translate-y-[30px] transition-all duration-[700ms] ease-[cubic-bezier(0.25,0.46,0.45,0.94)] [&.active]:opacity-100 [&.active]:translate-y-0">
                    <div class="inline-flex flex-row items-center gap-[12px] lg:gap-[20px]">
                        <!-- Left Laurel -->
                        <span class="text-[clamp(1.5rem,5vw,2rem)] lg:text-[clamp(2rem,3.5vw,2.8rem)] leading-[1] select-none drop-shadow-[0_0_8px_rgba(212,175,55,0.45)]" aria-hidden="true">🏆</span>
                        <h2 class="text-[clamp(1.5rem,6vw,2rem)] lg:text-[clamp(2rem,3.5vw,3rem)] font-medium leading-[1.2] tracking-[-0.025em] text-white my-0 text-center">Proven Expertise.<br>Globally Accredited.</h2>
                        <!-- Right Laurel -->
                        <span class="text-[clamp(1.5rem,5vw,2rem)] lg:text-[clamp(2rem,3.5vw,2.8rem)] leading-[1] select-none drop-shadow-[0_0_8px_rgba(212,175,55,0.45)]" aria-hidden="true">🏆</span>
                    </div>
                </div>

                <!-- Awards Rows -->
                <div class="w-full">
                    <!-- Row 1 -->
                    <div class="group flex flex-row items-center justify-between gap-[16px] lg:gap-[24px] py-[13px] border-b border-t border-[rgba(255,255,255,0.1)] relative transition-colors duration-[300ms] ease-in-out hover:bg-[rgba(255,255,255,0.025)] lg:hover:rounded-[4px] lg:hover:z-20 scroll-reveal opacity-0 translate-y-[20px] ease-[cubic-bezier(0.25,0.46,0.45,0.94)] [&.active]:opacity-100 [&.active]:translate-y-0" style="transition-delay:0.05s;">
                        <div class="flex flex-col lg:flex-row lg:items-center gap-[4px] lg:gap-[24px] flex-1">
                            <div class="w-full lg:w-[clamp(220px,35%,360px)] flex-none">
                                <div class="text-[clamp(0.9rem,2.5vw,1.05rem)] lg:text-[clamp(0.95rem,1.5vw,1.15rem)] font-[700] text-[rgba(255,255,255,0.75)] flex items-center gap-[10px] origin-left transition-all duration-[400ms] ease-[cubic-bezier(0.34,1.56,0.64,1)] leading-[1.3] lg:group-hover:text-[#ffffff] lg:group-hover:text-[clamp(1.05rem,1.65vw,1.3rem)]">
                                    <span class="hidden lg:inline-flex items-center shrink-0 text-[#d4af37] text-[1.1rem] opacity-0 -translate-x-[8px] scale-[0.7] transition-all duration-[400ms] ease-[cubic-bezier(0.34,1.56,0.64,1)] lg:group-hover:opacity-100 lg:group-hover:translate-x-0 lg:group-hover:scale-100" aria-hidden="true">🏆</span>
                                    <h3 class="m-0 p-0 text-inherit font-inherit leading-inherit tracking-inherit">The Economic Times – 2026</h3>
                                </div>
                            </div>
                            <p class="text-[clamp(0.75rem,2vw,0.85rem)] lg:text-[clamp(0.8rem,1.2vw,0.95rem)] font-[500] text-[rgba(255,255,255,0.5)] lg:text-[rgba(255,255,255,0.55)] m-0 p-0 flex-1 transition-colors duration-[400ms] ease-in-out lg:group-hover:text-[rgba(255,255,255,0.8)]">Leader in AI-First Product Engineering</p>
                        </div>
                        <div class="flex-none w-[100px] h-[65px] lg:w-[140px] lg:h-[90px] relative lg:z-10 lg:group-hover:z-30 self-center">
                            <div class="w-[100px] h-[65px] lg:w-[160px] lg:h-[100px] rounded-[12px] overflow-hidden bg-[rgba(255,255,255,0.06)] backdrop-blur-[8px] border border-[rgba(255,255,255,0.12)] flex items-center justify-center shadow-[0_4px_20px_rgba(0,0,0,0.4)] transition-all duration-500 ease-[cubic-bezier(0.34,1.56,0.64,1)] opacity-100 lg:opacity-0 scale-100 lg:scale-[0.85] lg:rotate-0 lg:group-hover:opacity-100 lg:group-hover:scale-100 lg:group-hover:rotate-[30deg] lg:group-hover:shadow-[0_8px_32px_rgba(0,0,0,0.6),0_0_20px_rgba(212,175,55,0.12)]">
                                <img src="https://ideausher.com/wp-content/uploads/2024/01/Economic-Times-Industry-Changemakers.webp" alt="Economic Times Industry Changemakers" class="w-full h-full object-cover rounded-[11px]" onerror="this.parentElement.style.background='rgba(255,255,255,0.08)'; this.parentElement.innerHTML='<div style=\'color:rgba(255,255,255,0.5);font-size:0.6rem;text-align:center;padding:6px;font-weight:600;\'>ET<br>INDUSTRY<br>CHANGE<br>MAKERS</div>'">
                            </div>
                        </div>
                    </div>

                    <!-- Row 2 -->
                    <div class="group flex flex-row items-center justify-between gap-[16px] lg:gap-[24px] py-[13px] border-b border-[rgba(255,255,255,0.1)] relative transition-colors duration-[300ms] ease-in-out hover:bg-[rgba(255,255,255,0.025)] lg:hover:rounded-[4px] lg:hover:z-20 scroll-reveal opacity-0 translate-y-[20px] ease-[cubic-bezier(0.25,0.46,0.45,0.94)] [&.active]:opacity-100 [&.active]:translate-y-0" style="transition-delay:0.12s;">
                        <div class="flex flex-col lg:flex-row lg:items-center gap-[4px] lg:gap-[24px] flex-1">
                            <div class="w-full lg:w-[clamp(220px,35%,360px)] flex-none">
                                <div class="text-[clamp(0.9rem,2.5vw,1.05rem)] lg:text-[clamp(0.95rem,1.5vw,1.15rem)] font-[700] text-[rgba(255,255,255,0.75)] flex items-center gap-[10px] origin-left transition-all duration-[400ms] ease-[cubic-bezier(0.34,1.56,0.64,1)] leading-[1.3] lg:group-hover:text-[#ffffff] lg:group-hover:text-[clamp(1.05rem,1.65vw,1.3rem)]">
                                    <span class="hidden lg:inline-flex items-center shrink-0 text-[#d4af37] text-[1.1rem] opacity-0 -translate-x-[8px] scale-[0.7] transition-all duration-[400ms] ease-[cubic-bezier(0.34,1.56,0.64,1)] lg:group-hover:opacity-100 lg:group-hover:translate-x-0 lg:group-hover:scale-100" aria-hidden="true">🏆</span>
                                    <h3 class="m-0 p-0 text-inherit font-inherit leading-inherit tracking-inherit">Clutch – 2025</h3>
                                </div>
                            </div>
                            <p class="text-[clamp(0.75rem,2vw,0.85rem)] lg:text-[clamp(0.8rem,1.2vw,0.95rem)] font-[500] text-[rgba(255,255,255,0.5)] lg:text-[rgba(255,255,255,0.55)] m-0 p-0 flex-1 transition-colors duration-[400ms] ease-in-out lg:group-hover:text-[rgba(255,255,255,0.8)]">Fastest-Growing Company</p>
                        </div>
                        <div class="flex-none w-[100px] h-[65px] lg:w-[140px] lg:h-[90px] relative lg:z-10 lg:group-hover:z-30 self-center">
                            <div class="w-[100px] h-[65px] lg:w-[160px] lg:h-[100px] rounded-[12px] overflow-hidden bg-[rgba(255,255,255,0.06)] backdrop-blur-[8px] border border-[rgba(255,255,255,0.12)] flex items-center justify-center shadow-[0_4px_20px_rgba(0,0,0,0.4)] transition-all duration-500 ease-[cubic-bezier(0.34,1.56,0.64,1)] opacity-100 lg:opacity-0 scale-100 lg:scale-[0.85] lg:rotate-0 lg:group-hover:opacity-100 lg:group-hover:scale-100 lg:group-hover:rotate-[30deg] lg:group-hover:shadow-[0_8px_32px_rgba(0,0,0,0.6),0_0_20px_rgba(212,175,55,0.12)]">
                                <img src="https://ideausher.com/wp-content/uploads/2024/01/clutch-100.webp" alt="Clutch 100" class="w-full h-full object-cover rounded-[11px]" onerror="this.parentElement.style.background='rgba(255,255,255,0.08)'; this.parentElement.innerHTML='<div style=\'color:rgba(255,255,255,0.5);font-size:0.65rem;text-align:center;padding:6px;font-weight:700;\'>Clutch<br>100</div>'">
                            </div>
                        </div>
                    </div>

                    <!-- Row 3 -->
                    <div class="group flex flex-row items-center justify-between gap-[16px] lg:gap-[24px] py-[13px] border-b border-[rgba(255,255,255,0.1)] relative transition-colors duration-[300ms] ease-in-out hover:bg-[rgba(255,255,255,0.025)] lg:hover:rounded-[4px] lg:hover:z-20 scroll-reveal opacity-0 translate-y-[20px] ease-[cubic-bezier(0.25,0.46,0.45,0.94)] [&.active]:opacity-100 [&.active]:translate-y-0" style="transition-delay:0.19s;">
                        <div class="flex flex-col lg:flex-row lg:items-center gap-[4px] lg:gap-[24px] flex-1">
                            <div class="w-full lg:w-[clamp(220px,35%,360px)] flex-none">
                                <div class="text-[clamp(0.9rem,2.5vw,1.05rem)] lg:text-[clamp(0.95rem,1.5vw,1.15rem)] font-[700] text-[rgba(255,255,255,0.75)] flex items-center gap-[10px] origin-left transition-all duration-[400ms] ease-[cubic-bezier(0.34,1.56,0.64,1)] leading-[1.3] lg:group-hover:text-[#ffffff] lg:group-hover:text-[clamp(1.05rem,1.65vw,1.3rem)]">
                                    <span class="hidden lg:inline-flex items-center shrink-0 text-[#d4af37] text-[1.1rem] opacity-0 -translate-x-[8px] scale-[0.7] transition-all duration-[400ms] ease-[cubic-bezier(0.34,1.56,0.64,1)] lg:group-hover:opacity-100 lg:group-hover:translate-x-0 lg:group-hover:scale-100" aria-hidden="true">🏆</span>
                                    <h3 class="m-0 p-0 text-inherit font-inherit leading-inherit tracking-inherit">The Economic Times – 2025</h3>
                                </div>
                            </div>
                            <p class="text-[clamp(0.75rem,2vw,0.85rem)] lg:text-[clamp(0.8rem,1.2vw,0.95rem)] font-[500] text-[rgba(255,255,255,0.5)] lg:text-[rgba(255,255,255,0.55)] m-0 p-0 flex-1 transition-colors duration-[400ms] ease-in-out lg:group-hover:text-[rgba(255,255,255,0.8)]">Leader In AI Product Engineering &amp; Digital Transformation</p>
                        </div>
                        <div class="flex-none w-[100px] h-[65px] lg:w-[140px] lg:h-[90px] relative lg:z-10 lg:group-hover:z-30 self-center">
                            <div class="w-[100px] h-[65px] lg:w-[160px] lg:h-[100px] rounded-[12px] overflow-hidden bg-[rgba(255,255,255,0.06)] backdrop-blur-[8px] border border-[rgba(255,255,255,0.12)] flex items-center justify-center shadow-[0_4px_20px_rgba(0,0,0,0.4)] transition-all duration-500 ease-[cubic-bezier(0.34,1.56,0.64,1)] opacity-100 lg:opacity-0 scale-100 lg:scale-[0.85] lg:rotate-0 lg:group-hover:opacity-100 lg:group-hover:scale-100 lg:group-hover:rotate-[30deg] lg:group-hover:shadow-[0_8px_32px_rgba(0,0,0,0.6),0_0_20px_rgba(212,175,55,0.12)]">
                                <img src="https://ideausher.com/wp-content/uploads/2024/01/leadership-excellence-award.webp" alt="Leadership Excellence Award" class="w-full h-full object-cover rounded-[11px]" onerror="this.parentElement.style.background='rgba(255,255,255,0.08)'; this.parentElement.innerHTML='<div style=\'color:rgba(255,255,255,0.5);font-size:0.6rem;text-align:center;padding:6px;font-weight:600;\'>LEADERSHIP<br>EXCELLENCE<br>2025</div>'">
                            </div>
                        </div>
                    </div>

                    <!-- Row 4 -->
                    <div class="group flex flex-row items-center justify-between gap-[16px] lg:gap-[24px] py-[13px] border-b border-[rgba(255,255,255,0.1)] relative transition-colors duration-[300ms] ease-in-out hover:bg-[rgba(255,255,255,0.025)] lg:hover:rounded-[4px] lg:hover:z-20 scroll-reveal opacity-0 translate-y-[20px] ease-[cubic-bezier(0.25,0.46,0.45,0.94)] [&.active]:opacity-100 [&.active]:translate-y-0" style="transition-delay:0.26s;">
                        <div class="flex flex-col lg:flex-row lg:items-center gap-[4px] lg:gap-[24px] flex-1">
                            <div class="w-full lg:w-[clamp(220px,35%,360px)] flex-none">
                                <div class="text-[clamp(0.9rem,2.5vw,1.05rem)] lg:text-[clamp(0.95rem,1.5vw,1.15rem)] font-[700] text-[rgba(255,255,255,0.75)] flex items-center gap-[10px] origin-left transition-all duration-[400ms] ease-[cubic-bezier(0.34,1.56,0.64,1)] leading-[1.3] lg:group-hover:text-[#ffffff] lg:group-hover:text-[clamp(1.05rem,1.65vw,1.3rem)]">
                                    <span class="hidden lg:inline-flex items-center shrink-0 text-[#d4af37] text-[1.1rem] opacity-0 -translate-x-[8px] scale-[0.7] transition-all duration-[400ms] ease-[cubic-bezier(0.34,1.56,0.64,1)] lg:group-hover:opacity-100 lg:group-hover:translate-x-0 lg:group-hover:scale-100" aria-hidden="true">🏆</span>
                                    <h3 class="m-0 p-0 text-inherit font-inherit leading-inherit tracking-inherit">Clutch – 2025</h3>
                                </div>
                            </div>
                            <p class="text-[clamp(0.75rem,2vw,0.85rem)] lg:text-[clamp(0.8rem,1.2vw,0.95rem)] font-[500] text-[rgba(255,255,255,0.5)] lg:text-[rgba(255,255,255,0.55)] m-0 p-0 flex-1 transition-colors duration-[400ms] ease-in-out lg:group-hover:text-[rgba(255,255,255,0.8)]">Global Spring – Top Android &amp; Chatbot Development Company</p>
                        </div>
                        <div class="flex-none w-[100px] h-[65px] lg:w-[140px] lg:h-[90px] relative lg:z-10 lg:group-hover:z-30 self-center">
                            <div class="w-[100px] h-[65px] lg:w-[160px] lg:h-[100px] rounded-[12px] overflow-hidden bg-[rgba(255,255,255,0.06)] backdrop-blur-[8px] border border-[rgba(255,255,255,0.12)] flex items-center justify-center shadow-[0_4px_20px_rgba(0,0,0,0.4)] transition-all duration-500 ease-[cubic-bezier(0.34,1.56,0.64,1)] opacity-100 lg:opacity-0 scale-100 lg:scale-[0.85] lg:rotate-0 lg:group-hover:opacity-100 lg:group-hover:scale-100 lg:group-hover:rotate-[30deg] lg:group-hover:shadow-[0_8px_32px_rgba(0,0,0,0.6),0_0_20px_rgba(212,175,55,0.12)]">
                                <img src="https://ideausher.com/wp-content/uploads/2024/01/clutch-global-spring.webp" alt="Clutch Global Spring" class="w-full h-full object-cover rounded-[11px]" onerror="this.parentElement.style.background='rgba(255,255,255,0.08)'; this.parentElement.innerHTML='<div style=\'color:rgba(255,255,255,0.5);font-size:0.65rem;text-align:center;padding:6px;font-weight:700;\'>Clutch<br>Global<br>Spring</div>'">
                            </div>
                        </div>
                    </div>

                    <!-- Row 5 -->
                    <div class="group flex flex-row items-center justify-between gap-[16px] lg:gap-[24px] py-[13px] border-b border-[rgba(255,255,255,0.1)] relative transition-colors duration-[300ms] ease-in-out hover:bg-[rgba(255,255,255,0.025)] lg:hover:rounded-[4px] lg:hover:z-20 scroll-reveal opacity-0 translate-y-[20px] ease-[cubic-bezier(0.25,0.46,0.45,0.94)] [&.active]:opacity-100 [&.active]:translate-y-0" style="transition-delay:0.33s;">
                        <div class="flex flex-col lg:flex-row lg:items-center gap-[4px] lg:gap-[24px] flex-1">
                            <div class="w-full lg:w-[clamp(220px,35%,360px)] flex-none">
                                <div class="text-[clamp(0.9rem,2.5vw,1.05rem)] lg:text-[clamp(0.95rem,1.5vw,1.15rem)] font-[700] text-[rgba(255,255,255,0.75)] flex items-center gap-[10px] origin-left transition-all duration-[400ms] ease-[cubic-bezier(0.34,1.56,0.64,1)] leading-[1.3] lg:group-hover:text-[#ffffff] lg:group-hover:text-[clamp(1.05rem,1.65vw,1.3rem)]">
                                    <span class="hidden lg:inline-flex items-center shrink-0 text-[#d4af37] text-[1.1rem] opacity-0 -translate-x-[8px] scale-[0.7] transition-all duration-[400ms] ease-[cubic-bezier(0.34,1.56,0.64,1)] lg:group-hover:opacity-100 lg:group-hover:translate-x-0 lg:group-hover:scale-100" aria-hidden="true">🏆</span>
                                    <h3 class="m-0 p-0 text-inherit font-inherit leading-inherit tracking-inherit">Deloitte – 2024</h3>
                                </div>
                            </div>
                            <p class="text-[clamp(0.75rem,2vw,0.85rem)] lg:text-[clamp(0.8rem,1.2vw,0.95rem)] font-[500] text-[rgba(255,255,255,0.5)] lg:text-[rgba(255,255,255,0.55)] m-0 p-0 flex-1 transition-colors duration-[400ms] ease-in-out lg:group-hover:text-[rgba(255,255,255,0.8)]">Technology Fast 50 India</p>
                        </div>
                        <div class="flex-none w-[100px] h-[65px] lg:w-[140px] lg:h-[90px] relative lg:z-10 lg:group-hover:z-30 self-center">
                            <div class="w-[100px] h-[65px] lg:w-[160px] lg:h-[100px] rounded-[12px] overflow-hidden bg-[rgba(255,255,255,0.06)] backdrop-blur-[8px] border border-[rgba(255,255,255,0.12)] flex items-center justify-center shadow-[0_4px_20px_rgba(0,0,0,0.4)] transition-all duration-500 ease-[cubic-bezier(0.34,1.56,0.64,1)] opacity-100 lg:opacity-0 scale-100 lg:scale-[0.85] lg:rotate-0 lg:group-hover:opacity-100 lg:group-hover:scale-100 lg:group-hover:rotate-[30deg] lg:group-hover:shadow-[0_8px_32px_rgba(0,0,0,0.6),0_0_20px_rgba(212,175,55,0.12)]">
                                <img src="https://ideausher.com/wp-content/uploads/2024/01/deloitte-fast-50.webp" alt="Deloitte Fast 50" class="w-full h-full object-cover rounded-[11px]" onerror="this.parentElement.style.background='rgba(255,255,255,0.08)'; this.parentElement.innerHTML='<div style=\'color:#86BC25;font-size:0.75rem;text-align:center;padding:6px;font-weight:700;\'>Deloitte<br><span style=\'color:white;font-size:0.6rem;\'>Fast 50</span></div>'">
                            </div>
                        </div>
                    </div>

                    <!-- Row 6 -->
                    <div class="group flex flex-row items-center justify-between gap-[16px] lg:gap-[24px] py-[13px] border-b border-[rgba(255,255,255,0.1)] relative transition-colors duration-[300ms] ease-in-out hover:bg-[rgba(255,255,255,0.025)] lg:hover:rounded-[4px] lg:hover:z-20 scroll-reveal opacity-0 translate-y-[20px] ease-[cubic-bezier(0.25,0.46,0.45,0.94)] [&.active]:opacity-100 [&.active]:translate-y-0" style="transition-delay:0.40s;">
                        <div class="flex flex-col lg:flex-row lg:items-center gap-[4px] lg:gap-[24px] flex-1">
                            <div class="w-full lg:w-[clamp(220px,35%,360px)] flex-none">
                                <div class="text-[clamp(0.9rem,2.5vw,1.05rem)] lg:text-[clamp(0.95rem,1.5vw,1.15rem)] font-[700] text-[rgba(255,255,255,0.75)] flex items-center gap-[10px] origin-left transition-all duration-[400ms] ease-[cubic-bezier(0.34,1.56,0.64,1)] leading-[1.3] lg:group-hover:text-[#ffffff] lg:group-hover:text-[clamp(1.05rem,1.65vw,1.3rem)]">
                                    <span class="hidden lg:inline-flex items-center shrink-0 text-[#d4af37] text-[1.1rem] opacity-0 -translate-x-[8px] scale-[0.7] transition-all duration-[400ms] ease-[cubic-bezier(0.34,1.56,0.64,1)] lg:group-hover:opacity-100 lg:group-hover:translate-x-0 lg:group-hover:scale-100" aria-hidden="true">🏆</span>
                                    <h3 class="m-0 p-0 text-inherit font-inherit leading-inherit tracking-inherit">Times Business Awards</h3>
                                </div>
                            </div>
                            <p class="text-[clamp(0.75rem,2vw,0.85rem)] lg:text-[clamp(0.8rem,1.2vw,0.95rem)] font-[500] text-[rgba(255,255,255,0.5)] lg:text-[rgba(255,255,255,0.55)] m-0 p-0 flex-1 transition-colors duration-[400ms] ease-in-out lg:group-hover:text-[rgba(255,255,255,0.8)]">Tech Company of The Year</p>
                        </div>
                        <div class="flex-none w-[100px] h-[65px] lg:w-[140px] lg:h-[90px] relative lg:z-10 lg:group-hover:z-30 self-center">
                            <div class="w-[100px] h-[65px] lg:w-[160px] lg:h-[100px] rounded-[12px] overflow-hidden bg-[rgba(255,255,255,0.06)] backdrop-blur-[8px] border border-[rgba(255,255,255,0.12)] flex items-center justify-center shadow-[0_4px_20px_rgba(0,0,0,0.4)] transition-all duration-500 ease-[cubic-bezier(0.34,1.56,0.64,1)] opacity-100 lg:opacity-0 scale-100 lg:scale-[0.85] lg:rotate-0 lg:group-hover:opacity-100 lg:group-hover:scale-100 lg:group-hover:rotate-[30deg] lg:group-hover:shadow-[0_8px_32px_rgba(0,0,0,0.6),0_0_20px_rgba(212,175,55,0.12)]">
                                <img src="https://ideausher.com/wp-content/uploads/2024/01/times-business-award.webp" alt="Times Business Awards" class="w-full h-full object-cover rounded-[11px]" onerror="this.parentElement.style.background='rgba(255,255,255,0.08)'; this.parentElement.innerHTML='<div style=\'color:#d4af37;font-size:0.6rem;text-align:center;padding:6px;font-weight:600;\'>TIMES<br><span style=\'color:white;font-weight:700;font-size:0.75rem;\'>BUSINESS<br>AWARDS</span></div>'">
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </section>

        <!-- SECTION 10: COMPLIANCE ACCORDION -->
        <section class="tech-section-10 relative w-full bg-[#000000] py-[50px] md:py-[50px] lg:py-[60px] overflow-hidden">
            <div class="s10-wrap w-full bg-gradient-to-br from-[#2563eb] via-[#3b82f6] via-40% to-[#1d4ed8] flex flex-col lg:flex-row items-stretch lg:min-h-[480px]">

                <!-- LEFT: Globe + Title + Desc -->
                <div
                    class="s10-left flex-none lg:flex-[0_0_42%] pt-[44px] pb-[28px] px-[5%] sm:pt-[52px] sm:pb-[36px] sm:px-[6%] lg:pl-[6%] lg:pr-[48px] lg:py-[72px] flex flex-col justify-center gap-[20px] sm:gap-[28px] relative scroll-reveal opacity-0 translate-y-[30px] transition-all duration-[700ms] ease-[cubic-bezier(0.25,0.46,0.45,0.94)] [&.active]:opacity-100 [&.active]:translate-y-0">

                    <!-- Globe image -->
                    <div class="s10-globe w-[68px] h-[68px] sm:w-[80px] sm:h-[80px] lg:w-[100px] lg:h-[100px] rounded-full overflow-hidden shrink-0 bg-[rgba(255,255,255,0.12)] border border-[rgba(255,255,255,0.2)] flex items-center justify-center [&>img]:w-full [&>img]:h-full [&>img]:object-cover [&>img]:opacity-90">
                        <img src="https://images.unsplash.com/photo-1614730321146-b6fa6a46bcb4?auto=format&fit=crop&w=300&q=80"
                            alt="Compliance Globe"
                            onerror="this.src=''; this.parentElement.innerHTML='<svg viewBox=\'0 0 48 48\' fill=\'none\' style=\'width:54px;height:54px;\'><circle cx=\'24\' cy=\'24\' r=\'18\' stroke=\'rgba(255,255,255,0.6)\' stroke-width=\'2\'/><ellipse cx=\'24\' cy=\'24\' rx=\'8\' ry=\'18\' stroke=\'rgba(255,255,255,0.6)\' stroke-width=\'2\'/><line x1=\'6\' y1=\'24\' x2=\'42\' y2=\'24\' stroke=\'rgba(255,255,255,0.6)\' stroke-width=\'2\'/></svg>'">
                    </div>

                    <h2 class="text-[clamp(1.7rem,2.8vw,2.6rem)] font-[800] leading-[1.2] tracking-[-0.02em] text-[#fff] m-0">Building With Compliance and Risk in Mind</h2>

                    <p class="text-[clamp(0.85rem,1.1vw,0.97rem)] leading-[1.65] text-[rgba(255,255,255,0.8)] m-0 max-w-[420px]">At Idea Usher, we integrate <a href="#compliance" class="text-[#fff] underline decoration-[rgba(255,255,255,0.5)]">compliance</a> into every layer of our
                        engineering
                        process, ensuring your enterprise can navigate complex regulations while maintaining both
                        security and high performance.</p>
                </div>

                <!-- RIGHT: Accordion -->
                <div class="s10-right flex-none lg:flex-1 pb-[44px] px-[5%] sm:pb-[52px] sm:px-[6%] lg:pb-0 lg:pl-0 lg:pr-[6%] flex flex-col justify-center scroll-reveal opacity-0 translate-y-[30px] transition-all duration-[700ms] ease-[cubic-bezier(0.25,0.46,0.45,0.94)] [&.active]:opacity-100 [&.active]:translate-y-0"
                    style="transition-delay:0.15s">
                    <div class="s10-accordion w-full" id="s10-accordion">

                        <!-- Item 1 -->
                        <div class="s10-item group/item border-b border-[rgba(255,255,255,0.2)] first:border-t relative overflow-visible active" data-index="0">
                            <div class="s10-progress-bar absolute -bottom-[1px] left-0 h-[2px] w-0 bg-[rgba(255,255,255,0.9)] transition-[width] ease-linear z-[2] pointer-events-none" id="s10-pb-0"></div>
                            <div class="s10-header flex items-center gap-[12px] sm:gap-[20px] py-[16px] sm:py-[18px] cursor-pointer select-none" role="button" aria-expanded="true">
                                <span class="s10-num text-[0.72rem] font-[600] text-[rgba(255,255,255,0.6)] tracking-[0.04em] shrink-0 min-w-[28px]">[1]</span>
                                <span class="s10-title flex-auto text-[clamp(0.9rem,1.1vw,1.05rem)] font-[700] text-[rgba(255,255,255,0.75)] transition-colors duration-300 ease-in-out group-[.active]/item:text-[#ffffff]">Data Privacy &amp; Protection</span>
                                <span class="s10-chevron shrink-0 w-[20px] h-[20px] flex items-center justify-center transition-transform duration-[350ms] ease-in-out text-[rgba(255,255,255,0.7)] group-[.active]/item:rotate-180 group-[.active]/item:text-[#fff]">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <polyline points="18 15 12 9 6 15" />
                                    </svg>
                                </span>
                            </div>
                            <div class="s10-body max-h-0 overflow-hidden transition-[max-height] duration-[400ms] ease-[cubic-bezier(0.4,0,0.2,1)] group-[.active]/item:max-h-[200px]">
                                <div class="s10-body-inner pb-[20px] pl-[30px] sm:pl-[48px] flex flex-wrap gap-[10px]">
                                    <span class="s10-tag inline-flex items-center gap-[8px] bg-[#fff] text-[#1d4ed8] text-[0.82rem] font-[700] px-[16px] py-[8px] rounded-[8px] cursor-default shadow-[0_2px_8px_rgba(0,0,0,0.15)]"><span class="s10-tag-icon w-[18px] h-[18px] rounded-[4px] bg-[#2563eb] flex items-center justify-center shrink-0 [&>svg]:w-[11px] [&>svg]:h-[11px] [&>svg]:fill-[#fff]"><svg viewBox="0 0 24 24">
                                                <path
                                                    d="M12 2L4 5v6c0 5.25 3.5 10.15 8 11.35C16.5 21.15 20 16.25 20 11V5l-8-3z" />
                                            </svg></span>GDPR</span>
                                    <span class="s10-tag inline-flex items-center gap-[8px] bg-[#fff] text-[#1d4ed8] text-[0.82rem] font-[700] px-[16px] py-[8px] rounded-[8px] cursor-default shadow-[0_2px_8px_rgba(0,0,0,0.15)]"><span class="s10-tag-icon w-[18px] h-[18px] rounded-[4px] bg-[#2563eb] flex items-center justify-center shrink-0 [&>svg]:w-[11px] [&>svg]:h-[11px] [&>svg]:fill-[#fff]"><svg viewBox="0 0 24 24">
                                                <path
                                                    d="M12 2L4 5v6c0 5.25 3.5 10.15 8 11.35C16.5 21.15 20 16.25 20 11V5l-8-3z" />
                                            </svg></span>CCPA</span>
                                    <span class="s10-tag inline-flex items-center gap-[8px] bg-[#fff] text-[#1d4ed8] text-[0.82rem] font-[700] px-[16px] py-[8px] rounded-[8px] cursor-default shadow-[0_2px_8px_rgba(0,0,0,0.15)]"><span class="s10-tag-icon w-[18px] h-[18px] rounded-[4px] bg-[#2563eb] flex items-center justify-center shrink-0 [&>svg]:w-[11px] [&>svg]:h-[11px] [&>svg]:fill-[#fff]"><svg viewBox="0 0 24 24">
                                                <path
                                                    d="M12 2L4 5v6c0 5.25 3.5 10.15 8 11.35C16.5 21.15 20 16.25 20 11V5l-8-3z" />
                                            </svg></span>HIPAA</span>
                                </div>
                            </div>
                        </div>

                        <!-- Item 2 -->
                        <div class="s10-item group/item border-b border-[rgba(255,255,255,0.2)] first:border-t relative overflow-visible" data-index="1">
                            <div class="s10-progress-bar absolute -bottom-[1px] left-0 h-[2px] w-0 bg-[rgba(255,255,255,0.9)] transition-[width] ease-linear z-[2] pointer-events-none" id="s10-pb-1"></div>
                            <div class="s10-header flex items-center gap-[12px] sm:gap-[20px] py-[16px] sm:py-[18px] cursor-pointer select-none" role="button" aria-expanded="false">
                                <span class="s10-num text-[0.72rem] font-[600] text-[rgba(255,255,255,0.6)] tracking-[0.04em] shrink-0 min-w-[28px]">[2]</span>
                                <span class="s10-title flex-auto text-[clamp(0.9rem,1.1vw,1.05rem)] font-[700] text-[rgba(255,255,255,0.75)] transition-colors duration-300 ease-in-out group-[.active]/item:text-[#ffffff]">Security &amp; Risk Management</span>
                                <span class="s10-chevron shrink-0 w-[20px] h-[20px] flex items-center justify-center transition-transform duration-[350ms] ease-in-out text-[rgba(255,255,255,0.7)] group-[.active]/item:rotate-180 group-[.active]/item:text-[#fff]">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <polyline points="18 15 12 9 6 15" />
                                    </svg>
                                </span>
                            </div>
                            <div class="s10-body max-h-0 overflow-hidden transition-[max-height] duration-[400ms] ease-[cubic-bezier(0.4,0,0.2,1)] group-[.active]/item:max-h-[200px]">
                                <div class="s10-body-inner pb-[20px] pl-[30px] sm:pl-[48px] flex flex-wrap gap-[10px]">
                                    <span class="s10-tag inline-flex items-center gap-[8px] bg-[#fff] text-[#1d4ed8] text-[0.82rem] font-[700] px-[16px] py-[8px] rounded-[8px] cursor-default shadow-[0_2px_8px_rgba(0,0,0,0.15)]"><span class="s10-tag-icon w-[18px] h-[18px] rounded-[4px] bg-[#2563eb] flex items-center justify-center shrink-0 [&>svg]:w-[11px] [&>svg]:h-[11px] [&>svg]:fill-[#fff]"><svg viewBox="0 0 24 24">
                                                <path
                                                    d="M12 2L4 5v6c0 5.25 3.5 10.15 8 11.35C16.5 21.15 20 16.25 20 11V5l-8-3z" />
                                            </svg></span>ISO 27001</span>
                                    <span class="s10-tag inline-flex items-center gap-[8px] bg-[#fff] text-[#1d4ed8] text-[0.82rem] font-[700] px-[16px] py-[8px] rounded-[8px] cursor-default shadow-[0_2px_8px_rgba(0,0,0,0.15)]"><span class="s10-tag-icon w-[18px] h-[18px] rounded-[4px] bg-[#2563eb] flex items-center justify-center shrink-0 [&>svg]:w-[11px] [&>svg]:h-[11px] [&>svg]:fill-[#fff]"><svg viewBox="0 0 24 24">
                                                <path
                                                    d="M12 2L4 5v6c0 5.25 3.5 10.15 8 11.35C16.5 21.15 20 16.25 20 11V5l-8-3z" />
                                            </svg></span>SOC 2</span>
                                    <span class="s10-tag inline-flex items-center gap-[8px] bg-[#fff] text-[#1d4ed8] text-[0.82rem] font-[700] px-[16px] py-[8px] rounded-[8px] cursor-default shadow-[0_2px_8px_rgba(0,0,0,0.15)]"><span class="s10-tag-icon w-[18px] h-[18px] rounded-[4px] bg-[#2563eb] flex items-center justify-center shrink-0 [&>svg]:w-[11px] [&>svg]:h-[11px] [&>svg]:fill-[#fff]"><svg viewBox="0 0 24 24">
                                                <path
                                                    d="M12 2L4 5v6c0 5.25 3.5 10.15 8 11.35C16.5 21.15 20 16.25 20 11V5l-8-3z" />
                                            </svg></span>NIST</span>
                                </div>
                            </div>
                        </div>

                        <!-- Item 3 -->
                        <div class="s10-item group/item border-b border-[rgba(255,255,255,0.2)] first:border-t relative overflow-visible" data-index="2">
                            <div class="s10-progress-bar absolute -bottom-[1px] left-0 h-[2px] w-0 bg-[rgba(255,255,255,0.9)] transition-[width] ease-linear z-[2] pointer-events-none" id="s10-pb-2"></div>
                            <div class="s10-header flex items-center gap-[12px] sm:gap-[20px] py-[16px] sm:py-[18px] cursor-pointer select-none" role="button" aria-expanded="false">
                                <span class="s10-num text-[0.72rem] font-[600] text-[rgba(255,255,255,0.6)] tracking-[0.04em] shrink-0 min-w-[28px]">[3]</span>
                                <span class="s10-title flex-auto text-[clamp(0.9rem,1.1vw,1.05rem)] font-[700] text-[rgba(255,255,255,0.75)] transition-colors duration-300 ease-in-out group-[.active]/item:text-[#ffffff]">AI &amp; Technology-Specific Regulations</span>
                                <span class="s10-chevron shrink-0 w-[20px] h-[20px] flex items-center justify-center transition-transform duration-[350ms] ease-in-out text-[rgba(255,255,255,0.7)] group-[.active]/item:rotate-180 group-[.active]/item:text-[#fff]">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <polyline points="18 15 12 9 6 15" />
                                    </svg>
                                </span>
                            </div>
                            <div class="s10-body max-h-0 overflow-hidden transition-[max-height] duration-[400ms] ease-[cubic-bezier(0.4,0,0.2,1)] group-[.active]/item:max-h-[200px]">
                                <div class="s10-body-inner pb-[20px] pl-[30px] sm:pl-[48px] flex flex-wrap gap-[10px]">
                                    <span class="s10-tag inline-flex items-center gap-[8px] bg-[#fff] text-[#1d4ed8] text-[0.82rem] font-[700] px-[16px] py-[8px] rounded-[8px] cursor-default shadow-[0_2px_8px_rgba(0,0,0,0.15)]"><span class="s10-tag-icon w-[18px] h-[18px] rounded-[4px] bg-[#2563eb] flex items-center justify-center shrink-0 [&>svg]:w-[11px] [&>svg]:h-[11px] [&>svg]:fill-[#fff]"><svg viewBox="0 0 24 24">
                                                <path
                                                    d="M12 2L4 5v6c0 5.25 3.5 10.15 8 11.35C16.5 21.15 20 16.25 20 11V5l-8-3z" />
                                            </svg></span>EU AI Act</span>
                                    <span class="s10-tag inline-flex items-center gap-[8px] bg-[#fff] text-[#1d4ed8] text-[0.82rem] font-[700] px-[16px] py-[8px] rounded-[8px] cursor-default shadow-[0_2px_8px_rgba(0,0,0,0.15)]"><span class="s10-tag-icon w-[18px] h-[18px] rounded-[4px] bg-[#2563eb] flex items-center justify-center shrink-0 [&>svg]:w-[11px] [&>svg]:h-[11px] [&>svg]:fill-[#fff]"><svg viewBox="0 0 24 24">
                                                <path
                                                    d="M12 2L4 5v6c0 5.25 3.5 10.15 8 11.35C16.5 21.15 20 16.25 20 11V5l-8-3z" />
                                            </svg></span>AI Ethics</span>
                                    <span class="s10-tag inline-flex items-center gap-[8px] bg-[#fff] text-[#1d4ed8] text-[0.82rem] font-[700] px-[16px] py-[8px] rounded-[8px] cursor-default shadow-[0_2px_8px_rgba(0,0,0,0.15)]"><span class="s10-tag-icon w-[18px] h-[18px] rounded-[4px] bg-[#2563eb] flex items-center justify-center shrink-0 [&>svg]:w-[11px] [&>svg]:h-[11px] [&>svg]:fill-[#fff]"><svg viewBox="0 0 24 24">
                                                <path
                                                    d="M12 2L4 5v6c0 5.25 3.5 10.15 8 11.35C16.5 21.15 20 16.25 20 11V5l-8-3z" />
                                            </svg></span>NIST AI RMF</span>
                                </div>
                            </div>
                        </div>

                        <!-- Item 4 -->
                        <div class="s10-item group/item border-b border-[rgba(255,255,255,0.2)] first:border-t relative overflow-visible" data-index="3">
                            <div class="s10-progress-bar absolute -bottom-[1px] left-0 h-[2px] w-0 bg-[rgba(255,255,255,0.9)] transition-[width] ease-linear z-[2] pointer-events-none" id="s10-pb-3"></div>
                            <div class="s10-header flex items-center gap-[12px] sm:gap-[20px] py-[16px] sm:py-[18px] cursor-pointer select-none" role="button" aria-expanded="false">
                                <span class="s10-num text-[0.72rem] font-[600] text-[rgba(255,255,255,0.6)] tracking-[0.04em] shrink-0 min-w-[28px]">[4]</span>
                                <span class="s10-title flex-auto text-[clamp(0.9rem,1.1vw,1.05rem)] font-[700] text-[rgba(255,255,255,0.75)] transition-colors duration-300 ease-in-out group-[.active]/item:text-[#ffffff]">Industry-Specific Standards</span>
                                <span class="s10-chevron shrink-0 w-[20px] h-[20px] flex items-center justify-center transition-transform duration-[350ms] ease-in-out text-[rgba(255,255,255,0.7)] group-[.active]/item:rotate-180 group-[.active]/item:text-[#fff]">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <polyline points="18 15 12 9 6 15" />
                                    </svg>
                                </span>
                            </div>
                            <div class="s10-body max-h-0 overflow-hidden transition-[max-height] duration-[400ms] ease-[cubic-bezier(0.4,0,0.2,1)] group-[.active]/item:max-h-[200px]">
                                <div class="s10-body-inner pb-[20px] pl-[30px] sm:pl-[48px] flex flex-wrap gap-[10px]">
                                    <span class="s10-tag inline-flex items-center gap-[8px] bg-[#fff] text-[#1d4ed8] text-[0.82rem] font-[700] px-[16px] py-[8px] rounded-[8px] cursor-default shadow-[0_2px_8px_rgba(0,0,0,0.15)]"><span class="s10-tag-icon w-[18px] h-[18px] rounded-[4px] bg-[#2563eb] flex items-center justify-center shrink-0 [&>svg]:w-[11px] [&>svg]:h-[11px] [&>svg]:fill-[#fff]"><svg viewBox="0 0 24 24">
                                                <path
                                                    d="M12 2L4 5v6c0 5.25 3.5 10.15 8 11.35C16.5 21.15 20 16.25 20 11V5l-8-3z" />
                                            </svg></span>PCI DSS</span>
                                    <span class="s10-tag inline-flex items-center gap-[8px] bg-[#fff] text-[#1d4ed8] text-[0.82rem] font-[700] px-[16px] py-[8px] rounded-[8px] cursor-default shadow-[0_2px_8px_rgba(0,0,0,0.15)]"><span class="s10-tag-icon w-[18px] h-[18px] rounded-[4px] bg-[#2563eb] flex items-center justify-center shrink-0 [&>svg]:w-[11px] [&>svg]:h-[11px] [&>svg]:fill-[#fff]"><svg viewBox="0 0 24 24">
                                                <path
                                                    d="M12 2L4 5v6c0 5.25 3.5 10.15 8 11.35C16.5 21.15 20 16.25 20 11V5l-8-3z" />
                                            </svg></span>FDA 21 CFR</span>
                                    <span class="s10-tag inline-flex items-center gap-[8px] bg-[#fff] text-[#1d4ed8] text-[0.82rem] font-[700] px-[16px] py-[8px] rounded-[8px] cursor-default shadow-[0_2px_8px_rgba(0,0,0,0.15)]"><span class="s10-tag-icon w-[18px] h-[18px] rounded-[4px] bg-[#2563eb] flex items-center justify-center shrink-0 [&>svg]:w-[11px] [&>svg]:h-[11px] [&>svg]:fill-[#fff]"><svg viewBox="0 0 24 24">
                                                <path
                                                    d="M12 2L4 5v6c0 5.25 3.5 10.15 8 11.35C16.5 21.15 20 16.25 20 11V5l-8-3z" />
                                            </svg></span>FINRA</span>
                                </div>
                            </div>
                        </div>

                        <!-- Item 5 -->
                        <div class="s10-item group/item border-b border-[rgba(255,255,255,0.2)] first:border-t relative overflow-visible" data-index="4">
                            <div class="s10-progress-bar absolute -bottom-[1px] left-0 h-[2px] w-0 bg-[rgba(255,255,255,0.9)] transition-[width] ease-linear z-[2] pointer-events-none" id="s10-pb-4"></div>
                            <div class="s10-header flex items-center gap-[12px] sm:gap-[20px] py-[16px] sm:py-[18px] cursor-pointer select-none" role="button" aria-expanded="false">
                                <span class="s10-num text-[0.72rem] font-[600] text-[rgba(255,255,255,0.6)] tracking-[0.04em] shrink-0 min-w-[28px]">[5]</span>
                                <span class="s10-title flex-auto text-[clamp(0.9rem,1.1vw,1.05rem)] font-[700] text-[rgba(255,255,255,0.75)] transition-colors duration-300 ease-in-out group-[.active]/item:text-[#ffffff]">Global &amp; Regulatory Frameworks</span>
                                <span class="s10-chevron shrink-0 w-[20px] h-[20px] flex items-center justify-center transition-transform duration-[350ms] ease-in-out text-[rgba(255,255,255,0.7)] group-[.active]/item:rotate-180 group-[.active]/item:text-[#fff]">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <polyline points="18 15 12 9 6 15" />
                                    </svg>
                                </span>
                            </div>
                            <div class="s10-body max-h-0 overflow-hidden transition-[max-height] duration-[400ms] ease-[cubic-bezier(0.4,0,0.2,1)] group-[.active]/item:max-h-[200px]">
                                <div class="s10-body-inner pb-[20px] pl-[30px] sm:pl-[48px] flex flex-wrap gap-[10px]">
                                    <span class="s10-tag inline-flex items-center gap-[8px] bg-[#fff] text-[#1d4ed8] text-[0.82rem] font-[700] px-[16px] py-[8px] rounded-[8px] cursor-default shadow-[0_2px_8px_rgba(0,0,0,0.15)]"><span class="s10-tag-icon w-[18px] h-[18px] rounded-[4px] bg-[#2563eb] flex items-center justify-center shrink-0 [&>svg]:w-[11px] [&>svg]:h-[11px] [&>svg]:fill-[#fff]"><svg viewBox="0 0 24 24">
                                                <path
                                                    d="M12 2L4 5v6c0 5.25 3.5 10.15 8 11.35C16.5 21.15 20 16.25 20 11V5l-8-3z" />
                                            </svg></span>DPDP Act</span>
                                    <span class="s10-tag inline-flex items-center gap-[8px] bg-[#fff] text-[#1d4ed8] text-[0.82rem] font-[700] px-[16px] py-[8px] rounded-[8px] cursor-default shadow-[0_2px_8px_rgba(0,0,0,0.15)]"><span class="s10-tag-icon w-[18px] h-[18px] rounded-[4px] bg-[#2563eb] flex items-center justify-center shrink-0 [&>svg]:w-[11px] [&>svg]:h-[11px] [&>svg]:fill-[#fff]"><svg viewBox="0 0 24 24">
                                                <path
                                                    d="M12 2L4 5v6c0 5.25 3.5 10.15 8 11.35C16.5 21.15 20 16.25 20 11V5l-8-3z" />
                                            </svg></span>PDPL</span>
                                    <span class="s10-tag inline-flex items-center gap-[8px] bg-[#fff] text-[#1d4ed8] text-[0.82rem] font-[700] px-[16px] py-[8px] rounded-[8px] cursor-default shadow-[0_2px_8px_rgba(0,0,0,0.15)]"><span class="s10-tag-icon w-[18px] h-[18px] rounded-[4px] bg-[#2563eb] flex items-center justify-center shrink-0 [&>svg]:w-[11px] [&>svg]:h-[11px] [&>svg]:fill-[#fff]"><svg viewBox="0 0 24 24">
                                                <path
                                                    d="M12 2L4 5v6c0 5.25 3.5 10.15 8 11.35C16.5 21.15 20 16.25 20 11V5l-8-3z" />
                                            </svg></span>APPI</span>
                                </div>
                            </div>
                        </div>

                        <!-- Item 6 -->
                        <div class="s10-item group/item border-b border-[rgba(255,255,255,0.2)] first:border-t relative overflow-visible" data-index="5">
                            <div class="s10-progress-bar absolute -bottom-[1px] left-0 h-[2px] w-0 bg-[rgba(255,255,255,0.9)] transition-[width] ease-linear z-[2] pointer-events-none" id="s10-pb-5"></div>
                            <div class="s10-header flex items-center gap-[12px] sm:gap-[20px] py-[16px] sm:py-[18px] cursor-pointer select-none" role="button" aria-expanded="false">
                                <span class="s10-num text-[0.72rem] font-[600] text-[rgba(255,255,255,0.6)] tracking-[0.04em] shrink-0 min-w-[28px]">[6]</span>
                                <span class="s10-title flex-auto text-[clamp(0.9rem,1.1vw,1.05rem)] font-[700] text-[rgba(255,255,255,0.75)] transition-colors duration-300 ease-in-out group-[.active]/item:text-[#ffffff]">Compliance for Cloud &amp; SaaS</span>
                                <span class="s10-chevron shrink-0 w-[20px] h-[20px] flex items-center justify-center transition-transform duration-[350ms] ease-in-out text-[rgba(255,255,255,0.7)] group-[.active]/item:rotate-180 group-[.active]/item:text-[#fff]">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <polyline points="18 15 12 9 6 15" />
                                    </svg>
                                </span>
                            </div>
                            <div class="s10-body max-h-0 overflow-hidden transition-[max-height] duration-[400ms] ease-[cubic-bezier(0.4,0,0.2,1)] group-[.active]/item:max-h-[200px]">
                                <div class="s10-body-inner pb-[20px] pl-[30px] sm:pl-[48px] flex flex-wrap gap-[10px]">
                                    <span class="s10-tag inline-flex items-center gap-[8px] bg-[#fff] text-[#1d4ed8] text-[0.82rem] font-[700] px-[16px] py-[8px] rounded-[8px] cursor-default shadow-[0_2px_8px_rgba(0,0,0,0.15)]"><span class="s10-tag-icon w-[18px] h-[18px] rounded-[4px] bg-[#2563eb] flex items-center justify-center shrink-0 [&>svg]:w-[11px] [&>svg]:h-[11px] [&>svg]:fill-[#fff]"><svg viewBox="0 0 24 24">
                                                <path
                                                    d="M12 2L4 5v6c0 5.25 3.5 10.15 8 11.35C16.5 21.15 20 16.25 20 11V5l-8-3z" />
                                            </svg></span>CSA STAR</span>
                                    <span class="s10-tag inline-flex items-center gap-[8px] bg-[#fff] text-[#1d4ed8] text-[0.82rem] font-[700] px-[16px] py-[8px] rounded-[8px] cursor-default shadow-[0_2px_8px_rgba(0,0,0,0.15)]"><span class="s10-tag-icon w-[18px] h-[18px] rounded-[4px] bg-[#2563eb] flex items-center justify-center shrink-0 [&>svg]:w-[11px] [&>svg]:h-[11px] [&>svg]:fill-[#fff]"><svg viewBox="0 0 24 24">
                                                <path
                                                    d="M12 2L4 5v6c0 5.25 3.5 10.15 8 11.35C16.5 21.15 20 16.25 20 11V5l-8-3z" />
                                            </svg></span>FedRAMP</span>
                                    <span class="s10-tag inline-flex items-center gap-[8px] bg-[#fff] text-[#1d4ed8] text-[0.82rem] font-[700] px-[16px] py-[8px] rounded-[8px] cursor-default shadow-[0_2px_8px_rgba(0,0,0,0.15)]"><span class="s10-tag-icon w-[18px] h-[18px] rounded-[4px] bg-[#2563eb] flex items-center justify-center shrink-0 [&>svg]:w-[11px] [&>svg]:h-[11px] [&>svg]:fill-[#fff]"><svg viewBox="0 0 24 24">
                                                <path
                                                    d="M12 2L4 5v6c0 5.25 3.5 10.15 8 11.35C16.5 21.15 20 16.25 20 11V5l-8-3z" />
                                            </svg></span>MTCS</span>
                                </div>
                            </div>
                        </div>

                    </div><!-- /.s10-accordion -->
                </div><!-- /.s10-right -->

            </div><!-- /.s10-wrap -->

            <!-- SECTION 10 SCRIPT: progress-bar auto-advance accordion -->
            <script>
                (function () {
                    const DURATION = 5000; // ms per item

                    const accordion = document.getElementById('s10-accordion');
                    if (!accordion) return;

                    const items = Array.from(accordion.querySelectorAll('.s10-item'));
                    const bars = items.map(item => item.querySelector('.s10-progress-bar'));
                    let current = 0;
                    let startTime = null;
                    let rafId = null;
                    let paused = false;
                    let elapsed = 0; // accumulated ms before pause

                    function activateItem(idx) {
                        items.forEach((item, i) => {
                            const isActive = i === idx;
                            item.classList.toggle('active', isActive);
                            const header = item.querySelector('.s10-header');
                            if (header) header.setAttribute('aria-expanded', isActive ? 'true' : 'false');
                            // Reset all bars
                            bars[i].style.transition = 'none';
                            bars[i].style.width = '0%';
                        });
                        current = idx;
                        elapsed = 0;
                        startTime = null;
                        scheduleRaf();
                    }

                    function scheduleRaf() {
                        if (rafId) cancelAnimationFrame(rafId);
                        rafId = requestAnimationFrame(tick);
                    }

                    function tick(ts) {
                        if (paused) return;
                        if (!startTime) startTime = ts - elapsed;

                        elapsed = ts - startTime;
                        const pct = Math.min(elapsed / DURATION * 100, 100);

                        // Animate current bar
                        bars[current].style.transition = 'none';
                        bars[current].style.width = pct + '%';

                        if (elapsed >= DURATION) {
                            bars[current].style.width = '100%';
                            const next = (current + 1) % items.length;
                            activateItem(next);
                            return;
                        }

                        rafId = requestAnimationFrame(tick);
                    }

                    // Click to manually switch
                    items.forEach((item, idx) => {
                        const header = item.querySelector('.s10-header');
                        header.addEventListener('click', () => {
                            if (rafId) cancelAnimationFrame(rafId);
                            activateItem(idx);
                        });
                    });

                    // Pause when section is out of view (IntersectionObserver)
                    if ('IntersectionObserver' in window) {
                        const observer = new IntersectionObserver(entries => {
                            entries.forEach(entry => {
                                if (entry.isIntersecting) {
                                    paused = false;
                                    startTime = null; // re-anchor start
                                    scheduleRaf();
                                } else {
                                    paused = true;
                                    if (rafId) cancelAnimationFrame(rafId);
                                }
                            });
                        }, { threshold: 0.2 });
                        observer.observe(accordion);
                    } else {
                        // Fallback: start immediately
                        scheduleRaf();
                    }

                    // Kick off on first item
                    activateItem(0);
                })();
            </script>

        </section>

        <!-- SECTION 11: CTA CARD -->
        <section class="tech-section-11 relative w-full bg-[#000000] py-[50px] md:py-[50px] lg:py-[60px] overflow-hidden" id="cta-card">
            <!-- Bottom CTA Banner -->
            <div class="w-full max-w-[1400px] mx-auto px-[5%] mt-[20px] mb-[20px] scroll-reveal opacity-0 translate-y-[40px] transition-all duration-[800ms] ease-[cubic-bezier(0.25,0.46,0.45,0.94)] [&.active]:opacity-100 [&.active]:translate-y-0 relative z-20">
                <div class="relative w-full rounded-3xl overflow-hidden bg-[#0A1024] border border-white/10 flex flex-col md:flex-row shadow-[0_20px_60px_rgba(0,40,150,0.15)]">

                    <!-- Gradient overlay on left -->
                    <div class="absolute inset-y-0 left-0 w-[80%] md:w-[60%] bg-[radial-gradient(ellipse_at_left_center,rgba(0,85,255,0.4)_0%,transparent_100%)] pointer-events-none z-0">
                    </div>

                    <!-- Left Content Column -->
                    <div class="relative z-10 flex-1 p-4 md:p-6 lg:p-8 flex flex-col justify-center">
                        <h2 class="text-white text-[1.6rem] md:text-[2rem] lg:text-[2.2rem] font-medium leading-[1.2] tracking-tight mb-2">
                            You've seen how we helped<br>
                            <span class="font-bold">Americana, Sonny's</span>, and <span
                                class="font-bold">Adidas</span><br>
                            reclaim their market edge.
                        </h2>

                        <p class="text-[0.9rem] md:text-[1rem] text-white/80 font-medium leading-[1.6] max-w-[500px] mb-5">
                            From 90% faster reporting to <strong class="text-white">4x operational improvements</strong>, our engineering goes beyond code to deliver measurable ROI.
                        </p>

                        <a href="#consulting" class="group inline-flex items-center justify-center bg-white text-[#111] hover:bg-[#f0f0f0] transition-colors rounded-full py-[12px] px-6 md:px-8 text-[0.85rem] md:text-[0.95rem] font-bold self-start no-underline whitespace-nowrap overflow-hidden">
                            <span class="relative block h-[1.25em] overflow-hidden">
                                <span class="block leading-[1.25em] transition-transform duration-[400ms] ease-[cubic-bezier(0.65,0,0.35,1)] group-hover:-translate-y-full after:content-[attr(data-text)] after:absolute after:top-full after:left-0 after:w-full" data-text="Consult our Experts for Growth Roadmap">Consult our Experts for Growth Roadmap</span>
                            </span>
                        </a>
                    </div>

                    <!-- Right Image Column (Graph Placeholder) -->
                    <div class="relative flex-1 min-h-[160px] md:min-h-[220px] border-t border-t-white/5 md:border-t-0 md:border-l md:border-l-white/5 overflow-hidden flex items-end justify-center bg-[linear-gradient(135deg,rgba(0,10,30,0)_0%,rgba(0,55,200,0.15)_100%)]">
                        <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?auto=format&fit=crop&q=80&w=800" alt="Growth Chart Graph" class="absolute inset-0 w-full h-full object-cover object-center mix-blend-screen opacity-60 scale-110" style="filter: hue-rotate(180deg) saturate(2);">
                        <!-- Abstract graph placeholder tint -->
                        <div class="absolute inset-0 bg-[#0055ff] mix-blend-color opacity-40 mix-blend-screen"></div>
                    </div>

                </div>
            </div>
        </section>
        

        <!-- SECTION 12: STRATEGIC ALLIANCES -->
        <section id="s12-alliances" class="relative w-full bg-[#000000] py-[50px] md:py-[50px] lg:py-[60px] overflow-hidden">
            
            <!-- Header -->
            <div class="max-w-[1400px] mx-auto px-[5%] mb-12 md:mb-16 text-center">
                <h2 class="text-white text-[1.8rem] md:text-[2.5rem] lg:text-[2.8rem] font-medium leading-[1.2] tracking-tight mb-[60px] md:mb-[80px]">
                    Strategic Alliances that<br>Power Innovation
                </h2>
            </div>

            <!-- Carousel Wrapper -->
            <div class="relative w-full flex flex-col gap-6 overflow-hidden s12-mask">
                
                <!-- Row 1: Right to Left (Wait user said Row 1 left-to-right, Row 2 right-to-left) -> Ok, let's reverse them -->
                
                <!-- Row 1: Left to Right -->
                <div class="flex gap-6 w-max s12-marquee-right hover:[animation-play-state:paused]">
                    <!-- We duplicate the set twice to ensure infinite scroll coverage -->
                    <!-- SET 1 -->
                    <div class="s12-logo-card"><svg viewBox="0 0 24 24"><path d="M15 2L2 22h8l3.5-5.5L15 12l6 10h2.5L15 2z"/></svg><span class="s12-logo-name">Adobe</span></div>
                    <div class="s12-logo-card"><svg viewBox="0 0 24 24"><path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/></svg><span class="s12-logo-name">Magento</span></div>
                    <div class="s12-logo-card"><svg viewBox="0 0 24 24"><path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"/></svg><span class="s12-logo-name">Databricks</span></div>
                    <div class="s12-logo-card"><svg viewBox="0 0 24 24"><path d="M12 2v20M2 12h20M4.93 4.93l14.14 14.14M4.93 19.07L19.07 4.93"/></svg><span class="s12-logo-name">Snowflake</span></div>
                    <div class="s12-logo-card"><svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/></svg><span class="s12-logo-name">HubSpot</span></div>
                    <div class="s12-logo-card"><svg viewBox="0 0 24 24"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"/></svg><span class="s12-logo-name">Moengage</span></div>
                    <div class="s12-logo-card"><svg viewBox="0 0 24 24"><path d="M6 18h12V6H6v12z"/></svg><span class="s12-logo-name">Boomi</span></div>
                    <div class="s12-logo-card"><svg viewBox="0 0 24 24"><path d="M4 10h4v4H4zm6 0h4v4h-4zm6 0h4v4h-4zM7 16h10v4H7z"/></svg><span class="s12-logo-name">Docker</span></div>
                    <!-- SET 2 -->
                    <div class="s12-logo-card"><svg viewBox="0 0 24 24"><path d="M15 2L2 22h8l3.5-5.5L15 12l6 10h2.5L15 2z"/></svg><span class="s12-logo-name">Adobe</span></div>
                    <div class="s12-logo-card"><svg viewBox="0 0 24 24"><path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/></svg><span class="s12-logo-name">Magento</span></div>
                    <div class="s12-logo-card"><svg viewBox="0 0 24 24"><path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"/></svg><span class="s12-logo-name">Databricks</span></div>
                    <div class="s12-logo-card"><svg viewBox="0 0 24 24"><path d="M12 2v20M2 12h20M4.93 4.93l14.14 14.14M4.93 19.07L19.07 4.93"/></svg><span class="s12-logo-name">Snowflake</span></div>
                    <div class="s12-logo-card"><svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/></svg><span class="s12-logo-name">HubSpot</span></div>
                    <div class="s12-logo-card"><svg viewBox="0 0 24 24"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"/></svg><span class="s12-logo-name">Moengage</span></div>
                    <div class="s12-logo-card"><svg viewBox="0 0 24 24"><path d="M6 18h12V6H6v12z"/></svg><span class="s12-logo-name">Boomi</span></div>
                    <div class="s12-logo-card"><svg viewBox="0 0 24 24"><path d="M4 10h4v4H4zm6 0h4v4h-4zm6 0h4v4h-4zM7 16h10v4H7z"/></svg><span class="s12-logo-name">Docker</span></div>
                </div>

                <!-- Row 2: Right to Left -->
                <div class="flex gap-6 w-max s12-marquee-left hover:[animation-play-state:paused]">
                    <!-- SET 1 -->
                    <div class="s12-logo-card"><svg viewBox="0 0 24 24"><path d="M12 2L2 22h20L12 2z"/></svg><span class="s12-logo-name">Red Hat</span></div>
                    <div class="s12-logo-card"><svg viewBox="0 0 24 24"><path d="M4 4h16v16H4z"/></svg><span class="s12-logo-name">Sabre</span></div>
                    <div class="s12-logo-card"><svg viewBox="0 0 24 24"><path d="M12 4c-4.4 0-8 3.6-8 8s3.6 8 8 8 8-3.6 8-8-3.6-8-8-8z"/></svg><span class="s12-logo-name">Stripe</span></div>
                    <div class="s12-logo-card"><svg viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2z"/></svg><span class="s12-logo-name">Cloudinary</span></div>
                    <div class="s12-logo-card"><svg viewBox="0 0 24 24"><path d="M4 10h4v4H4zm6 0h4v4h-4zm6 0h4v4h-4zM7 16h10v4H7z"/></svg><span class="s12-logo-name">AWS Sagemaker</span></div>
                    <div class="s12-logo-card"><svg viewBox="0 0 24 24"><path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"/></svg><span class="s12-logo-name">AWS Bedrock</span></div>
                    <div class="s12-logo-card"><svg viewBox="0 0 24 24"><path d="M15 2L2 22h8l3.5-5.5L15 12l6 10h2.5L15 2z"/></svg><span class="s12-logo-name">MuleSoft</span></div>
                    <div class="s12-logo-card"><svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/></svg><span class="s12-logo-name">OneStream</span></div>
                    <!-- SET 2 -->
                    <div class="s12-logo-card"><svg viewBox="0 0 24 24"><path d="M12 2L2 22h20L12 2z"/></svg><span class="s12-logo-name">Red Hat</span></div>
                    <div class="s12-logo-card"><svg viewBox="0 0 24 24"><path d="M4 4h16v16H4z"/></svg><span class="s12-logo-name">Sabre</span></div>
                    <div class="s12-logo-card"><svg viewBox="0 0 24 24"><path d="M12 4c-4.4 0-8 3.6-8 8s3.6 8 8 8 8-3.6 8-8-3.6-8-8-8z"/></svg><span class="s12-logo-name">Stripe</span></div>
                    <div class="s12-logo-card"><svg viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2z"/></svg><span class="s12-logo-name">Cloudinary</span></div>
                    <div class="s12-logo-card"><svg viewBox="0 0 24 24"><path d="M4 10h4v4H4zm6 0h4v4h-4zm6 0h4v4h-4zM7 16h10v4H7z"/></svg><span class="s12-logo-name">AWS Sagemaker</span></div>
                    <div class="s12-logo-card"><svg viewBox="0 0 24 24"><path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"/></svg><span class="s12-logo-name">AWS Bedrock</span></div>
                    <div class="s12-logo-card"><svg viewBox="0 0 24 24"><path d="M15 2L2 22h8l3.5-5.5L15 12l6 10h2.5L15 2z"/></svg><span class="s12-logo-name">MuleSoft</span></div>
                    <div class="s12-logo-card"><svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/></svg><span class="s12-logo-name">OneStream</span></div>
                </div>

            </div>

            <style>
                .s12-mask {
                    mask-image: linear-gradient(to right, transparent, black 15%, black 85%, transparent);
                    -webkit-mask-image: linear-gradient(to right, transparent, black 15%, black 85%, transparent);
                }

                .s12-logo-card {
                    width: 160px;
                    height: 160px;
                    background: #111;
                    border-radius: 16px;
                    display: flex;
                    flex-direction: column;
                    align-items: center;
                    justify-content: center;
                    gap: 16px;
                    transition: all 0.3s ease;
                    border: 1px solid rgba(255,255,255,0.03);
                    cursor: pointer;
                }
                @media (min-width: 768px) {
                    .s12-logo-card {
                        width: 200px;
                        height: 200px;
                        gap: 20px;
                    }
                }

                .s12-logo-card:hover {
                    background: #1a1a1a;
                    border-color: rgba(255,255,255,0.1);
                    transform: translateY(-5px);
                }

                .s12-logo-card svg {
                    width: 48px;
                    height: 48px;
                    fill: white;
                    opacity: 0.9;
                    transition: opacity 0.3s ease;
                }
                
                .s12-logo-card:hover svg {
                    opacity: 1;
                }

                .s12-logo-name {
                    color: white;
                    font-size: 0.85rem;
                    font-weight: 500;
                    opacity: 0.8;
                    font-family: inherit;
                }

                @keyframes s12-marquee-left-anim {
                    0% { transform: translateX(0); }
                    100% { transform: translateX(-50%); } 
                }
                @keyframes s12-marquee-right-anim {
                    0% { transform: translateX(-50%); }
                    100% { transform: translateX(0); }
                }

                .s12-marquee-left {
                    animation: s12-marquee-left-anim 35s linear infinite;
                }
                /* Row 1 slides left-to-right, but it starts normally, so we need to translate towards 0 from negative, or just go positive */
                .s12-marquee-right {
                    animation: s12-marquee-right-anim 35s linear infinite;
                }
            </style>
        </section>

        <!-- SECTION 13: INDUSTRIES -->
        <section id="s13-industries" class="relative w-full bg-[#000000] py-[50px] md:py-[50px] lg:py-[60px] overflow-hidden text-white border-t border-white/5">
            <div class="max-w-[1400px] mx-auto px-[5%]">
                
                <!-- Top Header Row -->
                <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-6 md:mb-5 gap-8">
                    <h2 class="text-[1.8rem] md:text-[2.5rem] lg:text-[2.8rem] font-medium leading-[1.2] tracking-tight mb-[10px] md:mb-[10px] max-w-2xl">
                        Solving Complex Challenges Across Every Major Sector
                    </h2>
                    <!-- Desktop "Check All" Button (hidden on mobile) -->
                    <a href="#all-industries" class="hidden md:inline-flex items-center justify-center border border-white/20 hover:border-white/50 rounded-full px-6 md:px-8 py-[12px] text-[0.85rem] md:text-[0.95rem] font-bold transition-colors duration-300">
                        Check All Industries <svg class="w-4 h-4 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M7 17L17 7M17 7H7M17 7V17" /></svg>
                    </a>
                </div>

                <!-- Mobile Only: Dropdown for Industries -->
                <div class="md:hidden w-full mb-10 relative">
                    <select id="s13-mobile-select" class="w-full bg-[#111] border border-white/20 text-white rounded-xl px-4 py-4 appearance-none outline-none focus:border-white/50 text-lg font-medium">
                        <option value="healthcare">Healthcare</option>
                        <option value="finance">Finance</option>
                        <option value="banking" selected>Banking</option>
                        <option value="ecommerce">eCommerce</option>
                        <option value="manufacturing">Manufacturing</option>
                    </select>
                    <!-- Custom Arrow -->
                    <div class="absolute right-4 top-1/2 -translate-y-1/2 pointer-events-none">
                        <svg class="w-5 h-5 text-white/50" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" /></svg>
                    </div>
                </div>

                <!-- Content Grid Container -->
                <div class="grid grid-cols-1 md:grid-cols-[1fr_250px_1fr] lg:grid-cols-[1fr_300px_1fr] gap-8 lg:gap-16 items-center">
                    
                    <!-- Left: Dynamic Image -->
                    <div class="relative w-full aspect-square md:aspect-[4/3] rounded-3xl overflow-hidden shadow-[0_10px_40px_rgba(255,255,255,0.05)] order-2 md:order-1">
                        <img id="s13-image" src="https://images.unsplash.com/photo-1563986768609-322da13575f3?auto=format&fit=crop&q=80&w=800" alt="Industry representation" class="absolute inset-0 w-full h-full object-cover transition-opacity duration-700 ease-in-out opacity-100 scale-100" />
                        <!-- Mask/Gradient overlay -->
                        <div class="absolute inset-0 bg-gradient-to-tr from-black/40 to-transparent"></div>
                    </div>

                    <!-- Center: Interactive Scrollable List (Desktop Only) -->
                    <div class="hidden md:flex flex-col h-[400px] overflow-hidden relative order-1 md:order-2 s13-list-mask" id="s13-list-container">
                        <div class="flex flex-col gap-6 py-[150px] transition-transform duration-500 ease-[cubic-bezier(0.25,0.46,0.45,0.94)]" id="s13-scroll-track">
                            <!-- Items -->
                            <div class="s13-item text-white/30 text-[1.4rem] lg:text-[1.8rem] font-medium cursor-pointer transition-all duration-300 transform-origin-left hover:text-white/60" data-id="healthcare">Healthcare</div>
                            <div class="s13-item text-white/30 text-[1.4rem] lg:text-[1.8rem] font-medium cursor-pointer transition-all duration-300 transform-origin-left hover:text-white/60" data-id="finance">Finance</div>
                            <div class="s13-item text-white text-[1.8rem] lg:text-[2.2rem] font-bold cursor-pointer transition-all duration-300 transform-origin-left active-item" data-id="banking">Banking</div>
                            <div class="s13-item text-white/30 text-[1.4rem] lg:text-[1.8rem] font-medium cursor-pointer transition-all duration-300 transform-origin-left hover:text-white/60" data-id="ecommerce">eCommerce</div>
                            <div class="s13-item text-white/30 text-[1.4rem] lg:text-[1.8rem] font-medium cursor-pointer transition-all duration-300 transform-origin-left hover:text-white/60" data-id="manufacturing">Manufacturing</div>
                        </div>
                    </div>

                    <!-- Right: Dynamic Content -->
                    <div class="flex flex-col justify-center order-3 transition-opacity duration-500" id="s13-content-wrap">
                        <p id="s13-desc" class="text-[0.9rem] md:text-[1rem] text-white/80 font-medium leading-[1.6] mb-10">
                            We engineer secure digital banking ecosystems that modernize core infrastructure with AI-Driven Credit Risk Modeling and enhance customer retention through Hyper-Personalized Financial Insights, ensuring regulatory compliance and seamless user experiences.
                        </p>
                        <a href="#know-more" class="inline-flex max-w-max items-center justify-center border border-white hover:bg-white hover:text-black rounded-full px-6 md:px-8 py-[12px] text-[0.85rem] md:text-[0.95rem] font-bold transition-colors duration-300">
                            Know More <svg class="w-4 h-4 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M7 17L17 7M17 7H7M17 7V17" /></svg>
                        </a>
                    </div>

                </div>
                
                <!-- Mobile Only: "Check All" button at bottom -->
                <div class="mt-12 md:hidden flex justify-center">
                    <a href="#all-industries" class="w-full inline-flex items-center justify-center border border-white/20 hover:border-white/50 rounded-full px-6 py-[12px] text-[0.85rem] font-bold transition-colors duration-300">
                        Check All Industries <svg class="w-4 h-4 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M7 17L17 7M17 7H7M17 7V17" /></svg>
                    </a>
                </div>

            </div>

            <style>
                .s13-list-mask {
                    mask-image: linear-gradient(to bottom, transparent, black 30%, black 70%, transparent);
                    -webkit-mask-image: linear-gradient(to bottom, transparent, black 30%, black 70%, transparent);
                }
                .transform-origin-left {
                    transform-origin: left center;
                }
                .s13-item.active-item {
                    text-shadow: 0 0 30px rgba(255,255,255,0.4);
                }
            </style>

            <script>
                // SECTION 13: Localized Interactive Logic
                (() => {
                    const data = {
                        healthcare: {
                            img: "https://images.unsplash.com/photo-1516549655169-df83a0774514?auto=format&fit=crop&q=80&w=800",
                            desc: "We deliver HIPAA-compliant digital healthcare solutions, from telemedicine platforms to AI diagnostic tools, focusing on improved patient outcomes and streamlined provider workflows."
                        },
                        finance: {
                            img: "https://images.unsplash.com/photo-1611974789855-9c2a0a7236a3?auto=format&fit=crop&q=80&w=800",
                            desc: "Our fintech engineering builds resilient trading platforms, secure payment gateways, and automated compliance tracking systems built for unprecedented scale."
                        },
                        banking: {
                            img: "https://images.unsplash.com/photo-1563986768609-322da13575f3?auto=format&fit=crop&q=80&w=800",
                            desc: "We engineer secure digital banking ecosystems that modernize core infrastructure with AI-Driven Credit Risk Modeling and enhance customer retention through Hyper-Personalized Financial Insights."
                        },
                        ecommerce: {
                            img: "https://images.unsplash.com/photo-1441986300917-64674bd600d8?auto=format&fit=crop&q=80&w=800",
                            desc: "We build omnichannel retail experiences that optimize supply chains, deploy AI-driven personalization, and maximize conversion rates across web and mobile ecosystems."
                        },
                        manufacturing: {
                            img: "https://images.unsplash.com/photo-1581091226825-a6a2a5aee158?auto=format&fit=crop&q=80&w=800",
                            desc: "We integrate IoT architectures and predictive maintenance algorithms to modernize legacy manufacturing floors into smart, data-driven factories of the future."
                        }
                    };

                    const track = document.getElementById('s13-scroll-track');
                    const items = Array.from(document.querySelectorAll('.s13-item'));
                    const imgEl = document.getElementById('s13-image');
                    const descEl = document.getElementById('s13-desc');
                    const contentWrap = document.getElementById('s13-content-wrap');
                    const mobileSelect = document.getElementById('s13-mobile-select');
                    
                    let activeId = 'banking';
                    let isAnimating = false;

                    function updateUI(newId) {
                        if (newId === activeId || !data[newId]) return;
                        activeId = newId;

                        // 1. Text & Image Fade Out
                        imgEl.style.opacity = '0';
                        contentWrap.style.opacity = '0';

                        setTimeout(() => {
                            // 2. Change Data
                            imgEl.src = data[activeId].img;
                            descEl.innerHTML = data[activeId].desc;
                            
                            // 3. Fade In
                            imgEl.style.opacity = '1';
                            contentWrap.style.opacity = '1';
                        }, 300);

                        // 4. Update Desktop List Classes & Position
                        items.forEach((item, index) => {
                            if (item.dataset.id === activeId) {
                                item.className = "s13-item text-white text-[1.8rem] lg:text-[2.2rem] font-bold cursor-pointer transition-all duration-300 transform-origin-left active-item";
                                
                                // Calculate translation to bring active item to center
                                const itemHeight = item.offsetHeight + 24; // approx item height + gap
                                const offset = index * itemHeight;
                                track.style.transform = `translateY(-${offset}px)`;
                            } else {
                                item.className = "s13-item text-white/30 text-[1.4rem] lg:text-[1.8rem] font-medium cursor-pointer transition-all duration-300 transform-origin-left hover:text-white/60";
                            }
                        });

                        // 5. Sync mobile dropdown if triggered from desktop
                        if(mobileSelect.value !== activeId) {
                            mobileSelect.value = activeId;
                        }
                    }

                    // Desktop Hover Actions
                    items.forEach(item => {
                        item.addEventListener('mouseenter', () => {
                            if (window.innerWidth >= 768) {
                                updateUI(item.dataset.id);
                            }
                        });
                    });

                    // Desktop Scroll Action inside the mask container
                    const container = document.getElementById('s13-list-container');
                    if (container) {
                        container.addEventListener('wheel', (e) => {
                            e.preventDefault(); // Prevent page scroll
                            if (isAnimating) return;

                            const currentIndex = items.findIndex(i => i.dataset.id === activeId);
                            let nextIndex = currentIndex;

                            if (e.deltaY > 0) { // scroll down -> next item
                                nextIndex = Math.min(items.length - 1, currentIndex + 1);
                            } else if (e.deltaY < 0) { // scroll up -> prev item
                                nextIndex = Math.max(0, currentIndex - 1);
                            }

                            if (nextIndex !== currentIndex) {
                                isAnimating = true;
                                updateUI(items[nextIndex].dataset.id);
                                setTimeout(() => { isAnimating = false; }, 400); // throttle scroll
                            }
                        }, { passive: false });
                    }

                    // Mobile Dropdown Action
                    if (mobileSelect) {
                        mobileSelect.addEventListener('change', (e) => {
                            updateUI(e.target.value);
                        });
                    }
                    
                    // Init translation
                    setTimeout(() => {
                    const activeItem = items.find(i => i.dataset.id === activeId);
                    if(activeItem && window.innerWidth >= 768) {
                            const index = items.indexOf(activeItem);
                            const itemHeight = activeItem.offsetHeight + 24; 
                            track.style.transform = `translateY(-${index * itemHeight}px)`;
                    }
                    }, 100);

                })();
            </script>
        </section>

        <!-- SECTION 14: FULL SCREEN CTA -->
        <section id="s14-market-cta" class="relative w-full min-h-[400px] flex items-center justify-start overflow-hidden bg-white px-[5%] py-50 lg:py-50">
        
            <!-- Geometric Background Layers -->
            <div class="absolute inset-0 z-0 pointer-events-none overflow-hidden">
                <!-- Large Yellow Polygon -->
                <div class="absolute w-[150%] h-[150%] bg-[#ffffff] -top-[25%] -left-[10%] origin-top-left -rotate-12 transition-transform duration-700"></div>
                <!-- Large Blue Intersecting Shape in the back -->
                <div class="absolute w-[80%] h-[200%] bg-blue-600 top-[-50%] right-[-10%] origin-center rotate-45 transform translate-x-32 opacity-90 mix-blend-multiply"></div>
                <!-- A pale blue highlight polygon -->
                <div class="absolute w-[60%] h-[100%] bg-blue-400/30 bottom-[-20%] right-[10%] origin-center -rotate-[35deg] rounded-[100px] blur-sm mix-blend-multiply"></div>
            </div>

            <!-- Content Container -->
            <div class="relative z-10 w-full max-w-[1400px] mx-auto flex flex-col md:flex-row items-center justify-between gap-12">
                
                <!-- Left Text Content -->
                <div class="max-w-[600px] w-full s14-scroll-reveal opacity-0 translate-y-8 transition-all duration-1000 ease-[cubic-bezier(0.25,0.46,0.45,0.94)] [&.active]:opacity-100 [&.active]:translate-y-0 py-[50px]">
                    <div class="mb-6">
                        <img src="https://cdn-ilebjlc.nitrocdn.com/ncNVohTnyZHFwVZRyrDJJWBfVJpoFXJK/assets/images/optimized/rev-4c93931/ideausher.com/wp-content/uploads/2021/02/ideausher-logo.png" alt="Logo" class="h-8 md:h-10 mb-8" /> 
                    </div>
                    
                    <h2 class="text-[#000000] text-[1.8rem] md:text-[2.5rem] lg:text-[2.8rem] font-medium leading-[1.2] tracking-tight mb-[10px] md:mb-[20px]">
                        Built It?<br>
                        Now Let's Market It!
                    </h2>
                    <p class="text-gray-900 text-[0.9rem] md:text-[1rem] font-medium leading-[1.6] mb-8 max-w-[500px]">
                        From the team that understands your tech stack to the marketing experts who know your audience. Complete your digital success story with our native digital marketing agency.
                    </p>
                    
                    <a href="#strategy"
                        class="btn-strategy group inline-flex items-center bg-gradient-to-r from-[#1E6AFF] to-[#000000] hover:from-[#1558d6] hover:to-[#1a1a1a] text-white rounded-full py-[14px] px-[32px] text-base font-semibold transition-colors duration-300 relative border-2 border-transparent bg-origin-border cursor-pointer overflow-hidden no-underline outline-none">
                        <span class="btn-strategy-text-wrap relative block h-[1.25em] overflow-hidden">
                            <!-- data-text drives the pseudo-element rolling text -->
                            <span
                                class="btn-strategy-text block leading-[1.25em] transition-transform duration-[400ms] ease-[cubic-bezier(0.65,0,0.35,1)] group-hover:-translate-y-full after:content-[attr(data-text)] after:absolute after:top-full after:left-0 after:w-full"
                                data-text="Complete Your Success Story">Complete Your Success Story</span>
                        </span>
                        <span
                            class="btn-arrow-wrap relative inline-flex items-center justify-center w-4 h-4 ml-3 overflow-hidden">
                            <span
                                class="btn-arrow-icon flex transition-transform duration-[400ms] ease-[cubic-bezier(0.65,0,0.35,1)] w-4 h-4 group-hover:translate-x-full group-hover:-translate-y-full">
                                <svg viewBox="0 0 24 24" fill="none" class="w-4 h-4 stroke-current shrink-0"
                                    stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                    <line x1="5" y1="19" x2="19" y2="5"></line>
                                    <polyline points="9 5 19 5 19 15"></polyline>
                                </svg>
                                <svg viewBox="0 0 24 24" fill="none"
                                    class="absolute top-full -left-full w-4 h-4 stroke-current shrink-0" stroke-width="2.5"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <line x1="5" y1="19" x2="19" y2="5"></line>
                                    <polyline points="9 5 19 5 19 15"></polyline>
                                </svg>
                            </span>
                        </span>
                    </a>
                </div>

                <!-- Right Image Area -->
                <div class="hidden md:block absolute right-0 bottom-0 h-full w-1/2 pointer-events-none z-[1]">
                    <img 
                        src="/sectoin14-cta.PNG" 
                        alt="Dynamic Shouting Megaphone"
                        class="absolute bottom-0 right-0 h-[90%] w-auto object-contain translate-x-[5%]"
                    >

    </div>

            </div>

        </section>
        <script>
            // Inline observer for Section 14 reveal elements
            (() => {
                const observer = new IntersectionObserver(entries => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            entry.target.classList.add('active');
                        }
                    });
                }, { threshold: 0.15 });

                document.querySelectorAll('.s14-scroll-reveal').forEach(el => observer.observe(el));
            })();
        </script>

        <!-- SECTION 15: FAQs -->
        <section id="s15-faqs" class="relative w-full bg-[#000000] py-[50px] md:py-[50px] lg:py-[60px] overflow-hidden">
            <div class="max-w-[1400px] mx-auto text-white">
                
                <h2 class="text-[1.8rem] md:text-[2.5rem] lg:text-[2.8rem] font-medium leading-[1.2] tracking-tight text-center mb-[60px] md:mb-[80px]">
                    Frequently Asked Questions
                </h2>

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-12 items-start">
                    
                    <!-- Left: Contact Form Wrapper Area -->
                    <div class="w-full bg-[#041d5d] rounded-2xl p-8 md:p-12 shadow-[0_20px_50px_rgba(0,0,0,0.5)] border border-white/5">
                        <h3 class="text-[1.4rem] md:text-[1.6rem] font-medium mb-4 tracking-tight">
                            Didn't Find What You Were Looking For?
                        </h3>
                        <p class="text-[0.9rem] md:text-[1rem] text-white/80 font-medium leading-[1.6] mb-8">
                            We've got more answers waiting for you! If your question didn't make the list, don't hesitate to reach out.
                        </p>

                        <!-- RESERVED WPFORMS WRAPPER -->
                        <!-- Setting a min-height ensures layout doesn't break before shortcode is injected -->
                        <div id="wpforms-reserved-space" class="w-full min-h-[400px] relative">
                            <!-- User will place [wpforms id="xxx"] shortcode here later -->
                            <div class="absolute inset-0 border-2 border-dashed border-white/20 rounded-xl flex items-center justify-center opacity-50 pointer-events-none">
                                <span class="text-white/50 text-sm font-semibold tracking-widest uppercase text-center px-4">
                                    WPForms Shortcode Area
                                </span>
                            </div>
                        </div>

                    </div>

                    <!-- Right: FAQ Accordion -->
                    <div class="w-full bg-[#fafafa] rounded-2xl overflow-hidden shadow-xl text-black">
                        
                        <div class="s15-accordion divide-y divide-gray-200">
                            <!-- FAQ Item 1 -->
                            <div class="s15-faq-item group">
                                <button class="w-full flex items-center justify-between text-left p-6 md:p-8 hover:bg-gray-50 focus:outline-none transition-colors">
                                    <div class="flex items-center gap-6 md:gap-8">
                                        <span class="text-gray-400 font-mono text-sm">[1]</span>
                                        <span class="text-[0.95rem] md:text-[1.05rem] font-medium text-gray-900 group-hover:text-blue-600 transition-colors">
                                            How does Idea Usher ensure the ethical and responsible use of AI?
                                        </span>
                                    </div>
                                    <svg class="min-w-[20px] w-5 h-5 text-gray-500 transform transition-transform duration-300 s15-icon" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                    </svg>
                                </button>
                                <div class="s15-faq-content max-h-0 overflow-hidden transition-all duration-500 ease-in-out">
                                    <p class="px-6 md:px-8 pb-6 md:pb-8 text-gray-600 text-[0.9rem] md:text-[0.95rem] leading-[1.6] font-medium pl-[68px] md:pl-[84px]">
                                        We adhere to strict data privacy regulations, implement robust bias mitigation frameworks, and prioritize transparency in algorithmic decision-making. Our AI solutions are built on a foundation of 'Human-in-the-Loop' principles, ensuring expert oversight at critical junctures.
                                    </p>
                                </div>
                            </div>

                            <!-- FAQ Item 2 -->
                            <div class="s15-faq-item group">
                                <button class="w-full flex items-center justify-between text-left p-6 md:p-8 hover:bg-gray-50 focus:outline-none transition-colors">
                                    <div class="flex items-center gap-6 md:gap-8">
                                        <span class="text-gray-400 font-mono text-sm">[2]</span>
                                        <span class="text-[0.95rem] md:text-[1.05rem] font-medium text-gray-900 group-hover:text-blue-600 transition-colors">
                                            How does Idea Usher company leverage AI in business and enterprise solutions?
                                        </span>
                                    </div>
                                    <svg class="min-w-[20px] w-5 h-5 text-gray-500 transform transition-transform duration-300 s15-icon" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                    </svg>
                                </button>
                                <div class="s15-faq-content max-h-0 overflow-hidden transition-all duration-500 ease-in-out">
                                    <p class="px-6 md:px-8 pb-6 md:pb-8 text-gray-600 text-[0.9rem] md:text-[0.95rem] leading-[1.6] font-medium pl-[68px] md:pl-[84px]">
                                        We seamlessly weave custom machine learning models into your existing workflows to automate repetitive tasks, extract predictive insights from unstructured data, and power intelligent customer-facing applications that drive measurable operational efficiency.
                                    </p>
                                </div>
                            </div>

                            <!-- FAQ Item 3 -->
                            <div class="s15-faq-item group">
                                <button class="w-full flex items-center justify-between text-left p-6 md:p-8 hover:bg-gray-50 focus:outline-none transition-colors">
                                    <div class="flex items-center gap-6 md:gap-8">
                                        <span class="text-gray-400 font-mono text-sm">[3]</span>
                                        <span class="text-[0.95rem] md:text-[1.05rem] font-medium text-gray-900 group-hover:text-blue-600 transition-colors">
                                            What types of digital products and services does Idea Usher offer?
                                        </span>
                                    </div>
                                    <svg class="min-w-[20px] w-5 h-5 text-gray-500 transform transition-transform duration-300 s15-icon" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                    </svg>
                                </button>
                                <div class="s15-faq-content max-h-0 overflow-hidden transition-all duration-500 ease-in-out">
                                    <p class="px-6 md:px-8 pb-6 md:pb-8 text-gray-600 text-[0.9rem] md:text-[0.95rem] leading-[1.6] font-medium pl-[68px] md:pl-[84px]">
                                        Our end-to-end engineering suite covers cloud-native architecture design, cross-platform mobile app development, legacy system modernization, data engineering, and the deployment of advanced Generative AI platforms, tailored specifically for high-growth enterprises.
                                    </p>
                                </div>
                            </div>

                            <!-- FAQ Item 4 -->
                            <div class="s15-faq-item group border-b-0">
                                <button class="w-full flex items-center justify-between text-left p-6 md:p-8 hover:bg-gray-50 focus:outline-none transition-colors">
                                    <div class="flex items-center gap-6 md:gap-8">
                                        <span class="text-gray-400 font-mono text-sm">[4]</span>
                                        <span class="text-[0.95rem] md:text-[1.05rem] font-medium text-gray-900 group-hover:text-blue-600 transition-colors">
                                            How does Idea Usher approach digital transformation for legacy enterprises?
                                        </span>
                                    </div>
                                    <svg class="min-w-[20px] w-5 h-5 text-gray-500 transform transition-transform duration-300 s15-icon" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                    </svg>
                                </button>
                                <div class="s15-faq-content max-h-0 overflow-hidden transition-all duration-500 ease-in-out">
                                    <p class="px-6 md:px-8 pb-6 md:pb-8 text-gray-600 text-[0.9rem] md:text-[0.95rem] leading-[1.6] font-medium pl-[68px] md:pl-[84px]">
                                        We utilize a phased, agile approach to modernization. We analyze existing bottlenecks, build robust API layers to safely extract logic, and incrementally migrate services to scalable, microservices-driven architectures with zero customer downtime.
                                    </p>
                                </div>
                            </div>

                            <!-- FAQ Item 5 -->
                            <div class="s15-faq-item group border-b-0">
                                <button class="w-full flex items-center justify-between text-left p-6 md:p-8 hover:bg-gray-50 focus:outline-none transition-colors">
                                    <div class="flex items-center gap-6 md:gap-8">
                                        <span class="text-gray-400 font-mono text-sm">[4]</span>
                                        <span class="text-[0.95rem] md:text-[1.05rem] font-medium text-gray-900 group-hover:text-blue-600 transition-colors">
                                            How does Idea Usher approach digital transformation for legacy enterprises?
                                        </span>
                                    </div>
                                    <svg class="min-w-[20px] w-5 h-5 text-gray-500 transform transition-transform duration-300 s15-icon" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                    </svg>
                                </button>
                                <div class="s15-faq-content max-h-0 overflow-hidden transition-all duration-500 ease-in-out">
                                    <p class="px-6 md:px-8 pb-6 md:pb-8 text-gray-600 text-[0.9rem] md:text-[0.95rem] leading-[1.6] font-medium pl-[68px] md:pl-[84px]">
                                        We utilize a phased, agile approach to modernization. We analyze existing bottlenecks, build robust API layers to safely extract logic, and incrementally migrate services to scalable, microservices-driven architectures with zero customer downtime.
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </section>
        <script>
            // SECTION 15: Accordion Logic
            (() => {
                const faqItems = document.querySelectorAll('.s15-faq-item');

                faqItems.forEach(item => {
                    const btn = item.querySelector('button');
                    const content = item.querySelector('.s15-faq-content');
                    const icon = item.querySelector('.s15-icon');

                    btn.addEventListener('click', () => {
                        const isOpen = content.style.maxHeight && content.style.maxHeight !== '0px';

                        // Close all others
                        faqItems.forEach(otherItem => {
                            const otherContent = otherItem.querySelector('.s15-faq-content');
                            const otherIcon = otherItem.querySelector('.s15-icon');
                            otherContent.style.maxHeight = '0px';
                            otherIcon.style.transform = 'rotate(0deg)';
                        });

                        // Toggle current
                        if (!isOpen) {
                            content.style.maxHeight = content.scrollHeight + 'px';
                            icon.style.transform = 'rotate(-180deg)';
                        }
                    });
                });
                
                // Open first FAQ by default
                if(faqItems.length > 0) {
                    const firstBtn = faqItems[0].querySelector('button');
                    if(firstBtn) firstBtn.click();
                }
            })();
        </script>

    </div>
    <?php get_footer(); ?>

