<!DOCTYPE html>

<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>MediBook - Find a Specialty</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700;900&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200"
        rel="stylesheet" />
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#13a4ec",
                        "background-light": "#f6f7f8",
                        "background-dark": "#101c22",
                        "app-primary": "#4A90E2",
                        "app-secondary": "#50E3C2",
                        "app-bg": "#F9FAFB",
                        "app-card-bg": "#FFFFFF",
                        "app-text-primary": "#333333",
                        "app-text-secondary": "#6B7280",
                    },
                    fontFamily: {
                        "display": ["Inter", "sans-serif"]
                    },
                    borderRadius: {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"
                    },
                },
            },
        }
    </script>
    <style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
            font-size: 24px;
        }
    </style>
    <script src="//unpkg.com/alpinejs" defer></script>
</head>

<body class="bg-app-bg font-display">
    <div class="relative flex h-auto min-h-screen w-full flex-col group/design-root overflow-x-hidden">
        <div class="layout-container flex h-full grow flex-col">

            <!-- Header -->
            <header class="flex items-center justify-between border-b border-gray-200 px-4 sm:px-10 py-3 bg-white">

                <!-- Logo + Title -->
                <div class="flex items-center gap-4 text-app-text-primary">
                    <div class="text-app-primary">
                        <span class="material-symbols-outlined text-3xl">health_and_safety</span>
                    </div>
                    <h2 class="text-xl font-bold text-app-text-primary tracking-tight">Medi Book</h2>
                </div>

                <!-- Desktop Navigation -->
                <nav class="hidden md:flex flex-1 justify-center gap-8">
                    <a href="{{ url('/') }}"
                        class="text-app-primary text-sm font-bold border-b-2 border-app-primary pb-1">
                        Home
                    </a>

                    <a href="{{ url('/about') }}"
                        class="text-app-text-primary hover:text-app-primary text-sm font-medium">
                        About
                    </a>

                    <a href="{{ url('/doctors') }}"
                        class="text-app-text-primary hover:text-app-primary text-sm font-medium">
                        Find a Doctor
                    </a>
                </nav>
                <!-- User Dropdown -->
                <div x-data="{ open: false }" class="relative">

                    <!-- Trigger -->
                    <button @click="open = !open"
                        class="flex items-center gap-2 px-3 py-2 rounded-lg hover:bg-gray-100 transition">

                        <!-- Avatar -->
                        <span
                            class="flex items-center justify-center w-9 h-9 rounded-full bg-primary text-white font-semibold text-sm">
                            {{ auth()->user()->initials() }}
                        </span>

                        <!-- Name -->
                        {{-- <span class="hidden sm:block text-sm font-medium text-app-text-primary">
                            {{ auth()->user()->name }}
                        </span> --}}

                        <!-- Arrow -->
                        <span class="material-symbols-outlined text-gray-500 text-lg">
                            expand_more
                        </span>
                    </button>

                    <!-- Menu -->
                    <div x-show="open" x-transition @click.outside="open = false"
                        class="absolute right-0 mt-2 w-40 bg-white border border-gray-200 rounded-lg shadow-lg py-2 z-50">

                        <a href="{{ route('profile.edit') }}"
                            class="flex items-center gap-2 px-4 py-2 text-sm hover:bg-gray-100">
                            <span class="material-symbols-outlined text-base">settings</span>
                            Settings
                        </a>

                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit"
                                class="w-full flex items-center gap-2 px-4 py-2 text-sm hover:bg-gray-100 text-left">
                                <span class="material-symbols-outlined text-base">logout</span>
                                Log Out
                            </button>
                        </form>
                    </div>
                </div>
                @yield('head')
            </header>
            