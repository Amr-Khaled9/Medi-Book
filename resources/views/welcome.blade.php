<!DOCTYPE html>

<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Medi Book - Your Health, On Your Schedule</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700;900&amp;display=swap" rel="stylesheet" />
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
                        "background-light": "#F9FAFB",
                        "background-dark": "#102022",
                        "text-light": "#333333",
                        "text-dark": "#E0E6ED",
                        "border-light": "#E0E6ED",
                        "border-dark": "#334155",
                    },
                    fontFamily: {
                        "display": ["Inter", "sans-serif"]
                    },
                    borderRadius: {
                        "DEFAULT": "0.5rem",
                        "lg": "1rem",
                        "xl": "1.5rem",
                        "full": "9999px"
                    },
                },
            },
        }
    </script>
</head>

<body class="font-display">
    <div
        class="relative flex h-auto min-h-screen w-full flex-col bg-background-light dark:bg-background-dark group/design-root overflow-x-hidden text-text-light dark:text-text-dark">
        <div class="layout-container flex h-full grow flex-col">
            <div class="px-4 sm:px-10 md:px-20 lg:px-40 flex flex-1 justify-center py-5">
                <div class="layout-content-container flex flex-col max-w-[960px] flex-1">
                    <!-- TopNavBar -->
                    <header
                        class="flex items-center justify-between whitespace-nowrap border-b border-solid border-border-light dark:border-border-dark px-4 sm:px-10 py-3">
                        <div class="flex items-center gap-4">
                            <div class="size-6 text-primary">
                                <span class="material-symbols-outlined !text-4xl">health_and_safety</span>
                            </div>
                            <h2 class="text-xl font-bold leading-tight tracking-[-0.015em]">Medi Book</h2>
                        </div>
                        <div class="hidden md:flex flex-1 justify-end gap-8">
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
                    <!-- HeroSection -->
                    <div class="w-full @container">
                        <div class="flex flex-col gap-8 px-4 py-16 @[864px]:flex-row @[864px]:items-center">
                            <div class="flex flex-col gap-6 text-left @[864px]:justify-center @[864px]:w-1/2">
                                <div class="flex flex-col gap-4">
                                    <h1 class="text-4xl font-black leading-tight tracking-[-0.033em] @[480px]:text-5xl">
                                        Your Health, On Your Schedule.</h1>
                                    <h2 class="text-base font-normal leading-normal @[480px]:text-lg">Easily find and
                                        book appointments with top doctors and specialists in your area.</h2>
                                </div>
                                <button
                                    class="flex w-fit min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-12 px-6 bg-primary text-white text-base font-bold leading-normal tracking-[0.015em] hover:opacity-90 transition-opacity shadow-lg shadow-primary/20">
                                    <span class="truncate">Book an Appointment</span>
                                </button>
                            </div>
                            <div class="w-full @[864px]:w-1/2">
                                <div class="w-full bg-center bg-no-repeat aspect-video bg-cover rounded-xl"
                                    data-alt="A friendly female doctor smiling in a bright, modern clinic environment"
                                    style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuDTf0SfR68SDD-C9asF5Pu94Aid7qDQ8INQNeNRFo1p3AyAh2hVO5ujMXDVLD4DBWRHzlz4tqmKaND1fhTpPg_88v2hXO72jSO16Gr40hn6vtBsgP4G6ye_RmFAfrwkjvMzZ0n4dWMkvOdTKvrTNQ_I7sc5xxMBlmu1IZ9fSqabp8oPYYKzqeaWW9wi245RPlJkJjg7klWg3FKO_K4_L8gKjohMcsA25Qmqvpv-Ga1VcQ7qReCYVxfKjzEHralMSSt1fkZMP22-cQ");'>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- SectionHeader -->
                    <h2
                        class="text-text-light dark:text-text-dark text-[28px] font-bold leading-tight tracking-[-0.015em] px-4 pb-3 pt-5 text-center">
                        Healthcare Made Simple</h2>
                    <!-- FeatureSection -->
                    <div class="flex flex-col gap-10 px-4 py-10 @container">
                        <p
                            class="text-text-light dark:text-text-dark text-base font-normal leading-normal max-w-[720px] mx-auto text-center">
                            Our platform simplifies the process of finding and booking medical appointments, putting you
                            in control of your healthcare journey.
                        </p>
                        <div class="grid grid-cols-[repeat(auto-fit,minmax(240px,1fr))] gap-6 p-0">
                            <div
                                class="flex flex-1 gap-4 rounded-xl border border-border-light dark:border-border-dark bg-background-light dark:bg-background-dark p-6 flex-col shadow-sm">
                                <div class="text-secondary">
                                    <span class="material-symbols-outlined !text-4xl">stethoscope</span>
                                </div>
                                <div class="flex flex-col gap-2">
                                    <h3 class="text-lg font-bold leading-tight">Find Specialties</h3>
                                    <p
                                        class="text-sm font-normal leading-normal text-text-light/80 dark:text-text-dark/80">
                                        Quickly search for any medical field you need, from Cardiology to Dermatology.
                                    </p>
                                </div>
                            </div>
                            <div
                                class="flex flex-1 gap-4 rounded-xl border border-border-light dark:border-border-dark bg-background-light dark:bg-background-dark p-6 flex-col shadow-sm">
                                <div class="text-secondary">
                                    <span class="material-symbols-outlined !text-4xl">group</span>
                                </div>
                                <div class="flex flex-col gap-2">
                                    <h3 class="text-lg font-bold leading-tight">Browse Doctors</h3>
                                    <p
                                        class="text-sm font-normal leading-normal text-text-light/80 dark:text-text-dark/80">
                                        View detailed profiles, including credentials, patient reviews, and real-time
                                        availability.</p>
                                </div>
                            </div>
                            <div
                                class="flex flex-1 gap-4 rounded-xl border border-border-light dark:border-border-dark bg-background-light dark:bg-background-dark p-6 flex-col shadow-sm">
                                <div class="text-secondary">
                                    <span class="material-symbols-outlined !text-4xl">calendar_add_on</span>
                                </div>
                                <div class="flex flex-col gap-2">
                                    <h3 class="text-lg font-bold leading-tight">Easy Booking</h3>
                                    <p
                                        class="text-sm font-normal leading-normal text-text-light/80 dark:text-text-dark/80">
                                        Select a time that works for you and confirm your appointment in just a few
                                        clicks.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Testimonials Section -->
                    <div class="px-4 py-16">
                        <div class="text-center mb-12">
                            <h2 class="text-2xl font-bold leading-tight tracking-tight sm:text-3xl">What Our Patients
                                Say</h2>
                            <p class="mt-4 text-base text-text-light/80 dark:text-text-dark/80">Real stories from people
                                who've used Medi Book.</p>
                        </div>
                        <div class="grid grid-cols-1 gap-8 md:grid-cols-2">
                            <div
                                class="bg-background-light dark:bg-background-dark/50 border border-border-light dark:border-border-dark rounded-xl shadow-sm p-8">
                                <div class="flex items-center mb-4">
                                    <img class="w-12 h-12 rounded-full mr-4" data-alt="Profile picture of Sarah L."
                                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuABjtAgmAVEl2nSTDH4HI0cO0rJ9Qu221sJVodDRY3bQ3N1kZbdGNBqnpzkMQ7SG66PdTRue-LvchE8LOisVQj6Rqe5aUMGxXhwxN6NodmMU926exRycei4xN4hXPNIYZ5-5C16M2aLEF-jk0P925lB230d-HHcuIhzL2nwMjKTNjzNL-7ijvr0gwJ_9CdZD5zD-gh3dzry7zF4l5WgvySABYqeQDYYSw8tugsB1XSUIqjmJs3JSAa1SQlfxFcDVpnHYIPDFiVB0g" />
                                    <div>
                                        <p class="font-bold">Sarah L.</p>
                                        <p class="text-sm text-text-light/70 dark:text-text-dark/70">Verified Patient
                                        </p>
                                    </div>
                                </div>
                                <p class="italic">"Booking an appointment was incredibly simple. I found a specialist in
                                    my area and had a confirmed time in less than five minutes. A game-changer for my
                                    busy schedule!"</p>
                            </div>
                            <div
                                class="bg-background-light dark:bg-background-dark/50 border border-border-light dark:border-border-dark rounded-xl shadow-sm p-8">
                                <div class="flex items-center mb-4">
                                    <img class="w-12 h-12 rounded-full mr-4" data-alt="Profile picture of Mark T."
                                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuB-hFuCgHTfhKyPNEPogsi43BujAHHkd4caSDBUpH7FnkdFKkkVAsCxCFw1SXWpC4Q0TOPgXW0trBDmrR0sYPHufQHRbzZfbo8z_MaHhVshGuTS5WbW3qBGjqOeNxksXh1Iypnqk4XdLCMqWR2Si2uHHYWSQOgZ_n4i4x3nt3viFUJVE_HZtfgcAmxVkY35MgJxQaECElA2epMZa1T9gJ0anaY2XZfvtcuga1Nnbl-xylkLnDJsUvwzJWoxrGhIpjTCsXgqHOIc0Q" />
                                    <div>
                                        <p class="font-bold">Mark T.</p>
                                        <p class="text-sm text-text-light/70 dark:text-text-dark/70">Verified Patient
                                        </p>
                                    </div>
                                </div>
                                <p class="italic">"I was impressed with the detailed doctor profiles. Seeing patient
                                    reviews and credentials upfront gave me the confidence to choose the right doctor
                                    for my needs."</p>
                            </div>
                        </div>
                    </div>
                    <!-- Footer -->
                    <footer
                        class="flex flex-col gap-8 px-5 py-10 text-center @container border-t border-border-light dark:border-border-dark mt-10">
                        <div
                            class="flex flex-wrap items-center justify-center gap-6 @[480px]:flex-row @[480px]:justify-around">
                            <a class="text-text-light/80 dark:text-text-dark/80 text-base font-normal leading-normal min-w-40 hover:text-primary transition-colors"
                                href="#">Contact Us</a>
                            <a class="text-text-light/80 dark:text-text-dark/80 text-base font-normal leading-normal min-w-40 hover:text-primary transition-colors"
                                href="#">Privacy Policy</a>
                            <a class="text-text-light/80 dark:text-text-dark/80 text-base font-normal leading-normal min-w-40 hover:text-primary transition-colors"
                                href="#">Terms of Service</a>
                        </div>
                        <div class="flex flex-wrap justify-center gap-6">
                            <a href="#">
                                <div
                                    class="text-text-light/80 dark:text-text-dark/80 hover:text-primary transition-colors">
                                    <svg class="feather feather-facebook" fill="none" height="24"
                                        stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" viewbox="0 0 24 24" width="24"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z">
                                        </path>
                                    </svg>
                                </div>
                            </a>
                            <a href="#">
                                <div
                                    class="text-text-light/80 dark:text-text-dark/80 hover:text-primary transition-colors">
                                    <svg class="feather feather-twitter" fill="none" height="24"
                                        stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" viewbox="0 0 24 24" width="24"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z">
                                        </path>
                                    </svg>
                                </div>
                            </a>
                            <a href="#">
                                <div
                                    class="text-text-light/80 dark:text-text-dark/80 hover:text-primary transition-colors">
                                    <svg class="feather feather-linkedin" fill="none" height="24"
                                        stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" viewbox="0 0 24 24" width="24"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z">
                                        </path>
                                        <rect height="12" width="4" x="2" y="9"></rect>
                                        <circle cx="4" cy="4" r="2"></circle>
                                    </svg>
                                </div>
                            </a>
                        </div>
                        <p class="text-text-light/80 dark:text-text-dark/80 text-sm font-normal leading-normal">© 2024
                            Medi Book. All rights reserved.</p>
                    </footer>
                </div>
            </div>
        </div>
    </div>
</body>

</html>



