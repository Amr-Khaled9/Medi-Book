<!DOCTYPE html>

<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>MediBook - Register</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;900&amp;display=swap"
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
                        "primary": "#47C8C2",
                        "background-light": "#F8F9FA",
                        "background-dark": "#101c22",
                        "text-light": "#333333",
                        "text-dark": "#F8F9FA",
                        "secondary": "#4A90E2",
                        "border-light": "#D1D5DB",
                        "border-dark": "#4a5568",
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

<body class="font-display bg-background-light dark:bg-background-dark text-text-light dark:text-text-dark">
    <div class="relative flex min-h-screen w-full flex-col items-center justify-center p-4">
        <div class="w-full max-w-md">
            <!-- Header -->
            <header class="mb-8 flex flex-col items-center justify-center whitespace-nowrap text-center">
                <div class="flex items-center gap-3">
                    <div class="text-primary size-8">
                        <svg fill="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm4 11h-3v3h-2v-3H8v-2h3V8h2v3h3v2z">
                            </path>
                        </svg>
                    </div>
                    <h1 class="text-2xl font-bold tracking-tight text-text-light dark:text-text-dark">MediBook</h1>
                </div>
            </header>
            <!-- Form Container -->
            <div class="w-full rounded-xl bg-white dark:bg-gray-800 p-8 shadow-sm">
                <!-- Page Heading -->
                <div class="mb-6 text-center">
                    <p class="text-3xl font-black leading-tight tracking-tighter text-text-light dark:text-text-dark">
                        Create Your Account</p>
                    <p class="mt-2 text-base text-gray-500 dark:text-gray-400">Book and manage your medical appointments
                        with ease.</p>
                </div>
                <form method="POST" action="{{ route('register.store') }}" class="flex flex-col gap-6">
                    @csrf

                    <!-- Name -->
                    <flux:input name="name" :label="__('Name')" :value="old('name')" type="text" required
                        autofocus autocomplete="name" :placeholder="__('Full name')" />

                    <!-- Email Address -->
                    <flux:input name="email" :label="__('Email address')" :value="old('email')" type="email"
                        required autocomplete="email" placeholder="email@example.com" />

                    <!-- Password -->
                    <flux:input name="password" :label="__('Password')" type="password" required
                        autocomplete="new-password" :placeholder="__('Password')" viewable />

                    <!-- Confirm Password -->
                    <flux:input name="password_confirmation" :label="__('Confirm password')" type="password" required
                        autocomplete="new-password" :placeholder="__('Confirm password')" viewable />

                    <div class="flex items-center justify-end">
                        <flux:button type="submit" variant="primary" class="w-full">
                            {{ __('Create account') }}
                        </flux:button>
                    </div>
                </form>
                <!-- Separator -->
                <div class="my-6 flex items-center">
                    <div class="h-px flex-1 bg-border-light dark:bg-border-dark"></div>
                    <p class="mx-4 text-sm text-gray-500 dark:text-gray-400">OR</p>
                    <div class="h-px flex-1 bg-border-light dark:bg-border-dark"></div>
                </div>
                <!-- Social Sign-up -->
                <a href="{{ url('google/redirect') }}"
                    class="flex items-center justify-center gap-2 w-full py-2 px-4 border border-zinc-300 dark:border-zinc-700 rounded-lg text-sm font-medium text-zinc-700 dark:text-zinc-300 hover:bg-zinc-100 dark:hover:bg-zinc-800 transition">
                    <svg class="w-5 h-5" viewBox="0 0 48 48">
                        <path fill="#EA4335"
                            d="M24 9.5c3.54 0 6.71 1.22 9.21 3.6l6.85-6.85C35.53 2.38 30.15 0 24 0 14.62 0 6.51 5.38 2.56 13.22l7.98 6.19C12.51 13.68 17.74 9.5 24 9.5z" />
                        <path fill="#4285F4"
                            d="M46.98 24.55c0-1.57-.13-3.08-.38-4.55H24v9.02h12.94c-.56 2.98-2.18 5.51-4.63 7.19l7.14 5.54c4.19-3.86 6.53-9.54 6.53-17.2z" />
                        <path fill="#FBBC05"
                            d="M10.54 28.41c-.48-1.45-.76-2.99-.76-4.41s.28-2.96.76-4.41l-7.98-6.19C.92 16.33 0 19.61 0 24c0 4.39.92 7.67 2.56 10.59l7.98-6.18z" />
                        <path fill="#34A853"
                            d="M24 48c6.15 0 11.53-2.38 15.37-6.38l-7.14-5.54c-2.05 1.37-4.72 2.15-8.23 2.15-6.26 0-11.49-4.18-13.46-9.91l-7.98 6.18C6.51 42.62 14.62 48 24 48z" />
                    </svg>
                    <span>Continue with Google</span>
                </a>
                <br>
                <!-- Login Link -->
                <div class="space-x-1 rtl:space-x-reverse text-center text-sm text-zinc-600 dark:text-zinc-400">
                    <span>{{ __('Already have an account?') }}</span>
                    <flux:link :href="route('login')" wire:navigate>{{ __('Log in') }}</flux:link>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
