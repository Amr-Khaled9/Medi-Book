@if (Auth::check())
    @include('layout.head')
@else
    <!DOCTYPE html>

    <html class="light" lang="en">

    <head>
        <meta charset="utf-8" />
        <meta content="width=device-width, initial-scale=1.0" name="viewport" />
        <title>Medi Book</title>
        <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
        <link href="https://fonts.googleapis.com" rel="preconnect" />
        <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect" />
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700;900&amp;display=swap"
            rel="stylesheet" />
        <link
            href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
            rel="stylesheet" />
        <script id="tailwind-config">
            tailwind.config = {
                darkMode: "class",
                theme: {
                    extend: {
                        colors: {
                            "primary": "#4A90E2",
                            "secondary": "#50E3C2",
                            "background-light": "#F8F9FA",
                            "background-dark": "#101c22",
                            "text-light": "#333333",
                            "text-dark": "#F8F9FA",
                            "border-light": "#E9ECEF"
                        },
                        fontFamily: {
                            "display": ["Inter", "sans-serif"]
                        },
                        borderRadius: {
                            "DEFAULT": "0.5rem",
                            "lg": "0.75rem",
                            "xl": "1rem",
                            "full": "9999px"
                        },
                    },
                },
            }
        </script>
        <style>
            .material-symbols-outlined {
                font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
            }
        </style>
    </head>


<body class="bg-background-light dark:bg-background-dark font-display text-text-light dark:text-text-dark">
    <div class="relative flex h-auto min-h-screen w-full flex-col group/design-root overflow-x-hidden">
        <div class="layout-container flex h-full grow flex-col">
            <div class="flex flex-1 justify-center">
                <div class="layout-content-container flex flex-col w-full max-w-6xl flex-1">
                    <header
                        class="flex items-center justify-between whitespace-nowrap border-b border-solid border-border-light dark:border-white/10 px-6 md:px-10 py-4 sticky top-0 bg-background-light/80 dark:bg-background-dark/80 backdrop-blur-sm z-50">
                        <div class="flex items-center gap-4">
                            <div class="size-6 text-primary">
                                <svg fill="none" viewbox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_6_330)">
                                        <path clip-rule="evenodd"
                                            d="M24 0.757355L47.2426 24L24 47.2426L0.757355 24L24 0.757355ZM21 35.7574V12.2426L9.24264 24L21 35.7574Z"
                                            fill="currentColor" fill-rule="evenodd"></path>
                                    </g>
                                    <defs>
                                        <clippath id="clip0_6_330">
                                            <rect fill="white" height="48" width="48"></rect>
                                        </clippath>
                                    </defs>
                                </svg>
                            </div>
                            <h2
                                class="text-xl font-bold leading-tight tracking-[-0.015em] text-text-light dark:text-text-dark">
                                Medi Book</h2>
                        </div>
                        <div class="hidden md:flex flex-1 justify-end gap-8">
                            <div class="flex items-center gap-8">
                                <a class="text-sm font-medium leading-normal text-text-light dark:text-text-dark hover:text-primary dark:hover:text-primary transition-colors"
                                    href="{{ url('/') }}">Home</a>
                                <a class="text-sm font-bold leading-normal text-primary dark:text-primary"
                                    href="{{ url('/about') }}">About Us</a>
                            </div>
                            <div class="flex gap-2">
                                <a href="http://127.0.0.1:8000/login"
                                    class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-full h-10 px-5 bg-primary/10 text-primary text-sm font-bold leading-normal tracking-[0.015em] hover:bg-primary/20 transition-colors">
                                    <span class="truncate">Log In</span>
                                </a>

                                <a href="http://127.0.0.1:8000/register"
                                    class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-full h-10 px-5 bg-primary text-white text-sm font-bold leading-normal tracking-[0.015em] hover:opacity-90 transition-opacity">
                                    <span class="truncate">Sign Up</span>
                                </a>
                            </div>

                        </div>
                    </header>
                    @endif
                    <main class="flex-grow">
                        <div class="@container px-4 md:px-0">
                            <div class="py-16 md:py-24">
                                <div class="flex min-h-[480px] flex-col gap-6 bg-cover bg-center bg-no-repeat rounded-xl items-center justify-center p-8 text-center"
                                    data-alt="Abstract soft-focus image of a modern, clean hospital interior"
                                    style='background-image: linear-gradient(rgba(0, 0, 0, 0.2) 0%, rgba(0, 0, 0, 0.5) 100%), url("https://lh3.googleusercontent.com/aida-public/AB6AXuCLMjsadso2DLtiTHfSYPKKZzB21gIBtO04fmT_8TSsSi8wJMjXYyUOMd-AafPolo20qwJEEpaJ7vhkz9pc7J-4iQ97FOwNKCo9q__H1n9jrWs8T_JbcZGrZhq9XSdW5QF22ygs7kO8DOebiY-d6i4coK_WzvBvCLNTZq3v-QpV4fi2B2XAwlH1KdfdrS-_UdO8HCoztI_hxFqIfAiP9YWAz5Q6UX0byDJVdqoQSwW-0Y0RdACLpub5P2seBd70H_mw65gJNVO0cg");'>
                                    <div class="flex flex-col gap-4 max-w-3xl">
                                        <h1
                                            class="text-white text-4xl font-black leading-tight tracking-[-0.033em] md:text-6xl">
                                            Simplifying
                                            Your Journey to Better Health</h1>
                                        <p class="text-white/90 text-base font-normal leading-normal md:text-lg">We
                                            believe in accessible,
                                            patient-first healthcare. Discover how we're making it easier to connect
                                            with the care you need,
                                            right when you need it.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <section class="py-12 md:py-16 px-4">
                            <div class="flex flex-col items-center gap-4 text-center max-w-3xl mx-auto">
                                <h2
                                    class="text-text-light dark:text-text-dark text-3xl md:text-4xl font-bold leading-tight tracking-[-0.015em]">
                                    Our Story</h2>
                                <p
                                    class="text-text-light/80 dark:text-text-dark/80 text-base font-normal leading-relaxed">
                                    Born from a
                                    desire to bridge the gap between patients and quality healthcare, Medi Book was
                                    created to solve the
                                    common frustrations of booking medical appointments. We envisioned a world where
                                    finding a trusted
                                    doctor is as simple as a few taps on a screen, eliminating long waits and
                                    uncertainty. Our journey is
                                    fueled by a passion for leveraging technology to make healthcare more human-centric
                                    and accessible for
                                    everyone.</p>
                            </div>
                        </section>
                        <section
                            class="py-12 md:py-16 px-4 bg-white dark:bg-background-dark/50 border-y border-border-light dark:border-white/10">
                            <div class="flex flex-col items-center gap-12 max-w-5xl mx-auto">
                                <div class="flex flex-col items-center gap-4 text-center max-w-3xl">
                                    <h2
                                        class="text-text-light dark:text-text-dark text-3xl md:text-4xl font-bold leading-tight tracking-[-0.015em]">
                                        Our Mission &amp; Values</h2>
                                    <p
                                        class="text-text-light/80 dark:text-text-dark/80 text-base font-normal leading-relaxed">
                                        Our mission
                                        is to empower individuals to take control of their health by providing a
                                        seamless, reliable, and
                                        compassionate healthcare experience. We are guided by our core values in every
                                        decision we make.</p>
                                </div>
                                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8 w-full">
                                    <div class="flex flex-col items-center text-center gap-3">
                                        <div
                                            class="flex items-center justify-center size-14 rounded-full bg-primary/10 text-primary">
                                            <span class="material-symbols-outlined !text-3xl">accessibility_new</span>
                                        </div>
                                        <h3 class="text-lg font-bold">Patient-Centric</h3>
                                        <p class="text-sm text-text-light/80 dark:text-text-dark/80 leading-relaxed">
                                            Your needs are at the
                                            heart of our platform. We design for you, ensuring a simple and supportive
                                            experience.</p>
                                    </div>
                                    <div class="flex flex-col items-center text-center gap-3">
                                        <div
                                            class="flex items-center justify-center size-14 rounded-full bg-primary/10 text-primary">
                                            <span class="material-symbols-outlined !text-3xl">verified_user</span></div>
                                        <h3 class="text-lg font-bold">Trust &amp; Safety</h3>
                                        <p class="text-sm text-text-light/80 dark:text-text-dark/80 leading-relaxed">We
                                            are committed to the
                                            highest standards of data privacy and connecting you with verified, top-tier
                                            professionals.</p>
                                    </div>
                                    <div class="flex flex-col items-center text-center gap-3">
                                        <div
                                            class="flex items-center justify-center size-14 rounded-full bg-primary/10 text-primary">
                                            <span class="material-symbols-outlined !text-3xl">lightbulb</span></div>
                                        <h3 class="text-lg font-bold">Innovation</h3>
                                        <p class="text-sm text-text-light/80 dark:text-text-dark/80 leading-relaxed">We
                                            continuously seek
                                            better ways to improve healthcare access through cutting-edge technology.
                                        </p>
                                    </div>
                                    <div class="flex flex-col items-center text-center gap-3">
                                        <div
                                            class="flex items-center justify-center size-14 rounded-full bg-primary/10 text-primary">
                                            <span class="material-symbols-outlined !text-3xl">diversity_3</span></div>
                                        <h3 class="text-lg font-bold">Accessibility</h3>
                                        <p class="text-sm text-text-light/80 dark:text-text-dark/80 leading-relaxed">
                                            Quality healthcare is a
                                            right, not a privilege. We strive to make our platform accessible to all
                                            communities.</p>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section class="py-16 md:py-24 px-4">
                            <div class="flex flex-col items-center gap-12 max-w-5xl mx-auto">
                                <div class="flex flex-col items-center gap-4 text-center max-w-3xl">
                                    <h2
                                        class="text-text-light dark:text-text-dark text-3xl md:text-4xl font-bold leading-tight tracking-[-0.015em]">
                                        Why Choose Us?</h2>
                                    <p
                                        class="text-text-light/80 dark:text-text-dark/80 text-base font-normal leading-relaxed">
                                        We've built
                                        Medi Book to provide an unparalleled experience, focusing on what matters most
                                        to patients.</p>
                                </div>
                                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 w-full">
                                    <div
                                        class="flex flex-col gap-4 p-6 bg-white dark:bg-background-dark/50 border border-border-light dark:border-white/10 rounded-xl shadow-sm">
                                        <div
                                            class="flex items-center justify-center size-12 rounded-lg bg-secondary/10 text-secondary">
                                            <span class="material-symbols-outlined">event_available</span>
                                        </div>
                                        <h3 class="text-lg font-bold">Easy Booking</h3>
                                        <p class="text-sm text-text-light/80 dark:text-text-dark/80 leading-relaxed">
                                            Find and book
                                            appointments with top-rated doctors in just a few clicks. No more phone
                                            calls or long waits.</p>
                                    </div>
                                    <div
                                        class="flex flex-col gap-4 p-6 bg-white dark:bg-background-dark/50 border border-border-light dark:border-white/10 rounded-xl shadow-sm">
                                        <div
                                            class="flex items-center justify-center size-12 rounded-lg bg-secondary/10 text-secondary">
                                            <span class="material-symbols-outlined">medical_information</span>
                                        </div>
                                        <h3 class="text-lg font-bold">Trusted Doctors</h3>
                                        <p class="text-sm text-text-light/80 dark:text-text-dark/80 leading-relaxed">
                                            Access a curated
                                            network of certified and reviewed healthcare professionals across various
                                            specialities.</p>
                                    </div>
                                    <div
                                        class="flex flex-col gap-4 p-6 bg-white dark:bg-background-dark/50 border border-border-light dark:border-white/10 rounded-xl shadow-sm">
                                        <div
                                            class="flex items-center justify-center size-12 rounded-lg bg-secondary/10 text-secondary">
                                            <span class="material-symbols-outlined">schedule</span>
                                        </div>
                                        <h3 class="text-lg font-bold">24/7 Access</h3>
                                        <p class="text-sm text-text-light/80 dark:text-text-dark/80 leading-relaxed">
                                            Our platform is always
                                            available, allowing you to manage your health on your own schedule, anytime,
                                            anywhere.</p>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </main>
                    <footer class="py-10 px-6 md:px-10 border-t border-border-light dark:border-white/10">
                        <div class="max-w-6xl mx-auto flex flex-col md:flex-row justify-between items-center gap-6">
                            <div class="flex items-center gap-3">
                                <div class="size-5 text-text-light/60 dark:text-text-dark/60">
                                    <svg fill="none" viewbox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_6_330_footer)">
                                            <path clip-rule="evenodd"
                                                d="M24 0.757355L47.2426 24L24 47.2426L0.757355 24L24 0.757355ZM21 35.7574V12.2426L9.24264 24L21 35.7574Z"
                                                fill="currentColor" fill-rule="evenodd"></path>
                                        </g>
                                        <defs>
                                            <clippath id="clip0_6_330_footer">
                                                <rect fill="white" height="48" width="48"></rect>
                                            </clippath>
                                        </defs>
                                    </svg>
                                </div>
                                <p class="text-sm text-text-light/60 dark:text-text-dark/60">© 2024 HealthPoint. All
                                    rights reserved.
                                </p>
                            </div>
                            <div
                                class="flex items-center gap-6 text-sm font-medium text-text-light/80 dark:text-text-dark/80">
                                <a class="hover:text-primary transition-colors" href="#">Privacy Policy</a>
                                <a class="hover:text-primary transition-colors" href="#">Terms of Service</a>
                            </div>
                        </div>
                    </footer>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
