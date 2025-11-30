<!DOCTYPE html>

<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Login - Medical Appointment Booking</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;900&amp;display=swap"
        rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght@100..700,0..1" rel="stylesheet" />
    <script>
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#48B2A9",
                        "secondary": "#3A7CA5",
                        "background-light": "#F9FAFB",
                        "background-dark": "#101c22",
                        "text-light": "#333333",
                        "text-dark": "#F9FAFB",
                        "border-light": "#D1D5DB",
                        "border-dark": "#4A5568",
                        "placeholder-light": "#9CA3AF",
                        "placeholder-dark": "#A0AEC0",
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
    <style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
            font-size: 24px;
        }
    </style>
</head>

<body class="font-display">
    <div
        class="relative flex h-auto min-h-screen w-full flex-col bg-background-light dark:bg-background-dark group/design-root overflow-x-hidden">
        <div class="layout-container flex h-full grow flex-col">
            <div class="flex flex-1">
                <div class="flex w-full min-h-screen">
                    <!-- Left Pane: Image -->
                    <div class="relative hidden w-2/5 flex-col items-center justify-center bg-secondary lg:flex">
                        <div class="absolute inset-0 bg-center bg-no-repeat bg-cover"
                            data-alt="A modern and clean medical office waiting area with comfortable chairs and a calming atmosphere."
                            style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuCH1e5SCUdtd2SEfOq84FjY0WheY3x5Wqwx3SGE7YVbAj9KEyGlhfWuDXWJDYtwwt59EXO2lLhARN_E5KUzjGyhMB_GzBan-GsjMq2JKDQMR3DAY0MO7SjqOEPQ1Ef_o_5OBkP9POHczQZxsMVFqWNOkwkm0Ut7-EoMu0TYtUdxzGkB_Y1wjRgHqsWDTvnUHzs_lPwZCcNY-7c0Ofcl_DYydOoyz6JsZ-algtZrxuAQpsMUg4Gk_ik8k0bpQQu3eCFu47Fg4fvXKQ'); opacity: 0.5;">
                        </div>
                        <div class="relative z-10 p-12 text-white">
                            <a class="flex items-center gap-3" href="#">
                                <span class="material-symbols-outlined text-4xl">health_and_safety</span>
                                <span class="text-2xl font-bold tracking-wide">MedAppoint</span>
                            </a>
                            <p class="mt-4 text-lg font-light leading-relaxed">Your health, scheduled. Effortlessly book
                                and manage your medical appointments anytime, anywhere.</p>
                        </div>
                    </div>
                    <!-- Right Pane: Login Form -->
                    <div
                        class="flex flex-1 flex-col items-center justify-center bg-background-light dark:bg-background-dark p-6 sm:p-8 md:p-12">
                        <div class="w-full max-w-md">
                            <!-- Header for mobile -->
                            <div class="mb-8 text-center lg:hidden">
                                <a class="inline-flex items-center gap-3 text-text-light dark:text-text-dark"
                                    href="#">
                                    <span
                                        class="material-symbols-outlined text-4xl text-primary">health_and_safety</span>
                                    <span class="text-2xl font-bold tracking-wide">MedAppoint</span>
                                </a>
                            </div>
                            <!-- Login Form Card -->
                            <div class="flex flex-col gap-6 rounded-xl bg-white dark:bg-slate-900 p-8 shadow-sm">
                                <div class="flex flex-col gap-1 text-center">
                                    <h1 class="text-3xl font-bold tracking-tight text-text-light dark:text-text-dark">
                                        Welcome Back</h1>
                                    <p class="text-base font-normal text-slate-500 dark:text-slate-400">Book and manage
                                        your appointments with ease.</p>
                                </div>
                                <form method="POST" action="{{ route('login.store') }}" class="flex flex-col gap-6">
                                    @csrf

                                    <!-- Email Address -->
                                    <flux:input name="email" :label="__('Email address')" :value="old('email')"
                                        type="email" required autofocus autocomplete="email"
                                        placeholder="email@example.com" />

                                    <!-- Password -->
                                    <div class="relative">
                                        <flux:input name="password" :label="__('Password')" type="password" required
                                            autocomplete="current-password" :placeholder="__('Password')" viewable />

                                        @if (Route::has('password.request'))
                                            <flux:link class="absolute top-0 text-sm end-0"
                                                :href="route('password.request')" wire:navigate>
                                                {{-- {{ __('Forgot your password?') }} --}}
                                            </flux:link>
                                        @endif
                                    </div>

                                    <!-- Remember Me -->
                                    <flux:checkbox name="remember" :label="__('Remember me')"
                                        :checked="old('remember')" />

                                    <div class="flex items-center justify-end">
                                        <flux:button variant="primary" type="submit" class="w-full"
                                            data-test="login-button">
                                            {{ __('Log in') }}
                                        </flux:button>
                                    </div>
                                </form>
                                <div class="flex items-center gap-4">
                                    <hr class="w-full border-t border-border-light dark:border-border-dark" />
                                    <span class="text-sm font-medium text-slate-500 dark:text-slate-400">OR</span>
                                    <hr class="w-full border-t border-border-light dark:border-border-dark" />
                                </div>
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
                                @if (Route::has('register'))
                                    <div
                                        class="space-x-1 text-sm text-center rtl:space-x-reverse text-zinc-600 dark:text-zinc-400">
                                        <span>{{ __('Don\'t have an account?') }}</span>
                                        <flux:link :href="route('register')" wire:navigate>{{ __('Sign up') }}
                                        </flux:link>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>

</html>
