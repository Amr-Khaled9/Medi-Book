<x-layouts.auth>
    <div class="flex flex-col gap-6">
        <x-auth-header :title="__('Log in to your account')" :description="__('Enter your email and password below to log in')" />

        <!-- Session Status -->
        <x-auth-session-status class="text-center" :status="session('status')" />

        <form method="POST" action="{{ route('login.store') }}" class="flex flex-col gap-6">
            @csrf

            <!-- Email Address -->
            <flux:input
                name="email"
                :label="__('Email address')"
                :value="old('email')"
                type="email"
                required
                autofocus
                autocomplete="email"
                placeholder="email@example.com"
            />

            <!-- Password -->
            <div class="relative">
                <flux:input
                    name="password"
                    :label="__('Password')"
                    type="password"
                    required
                    autocomplete="current-password"
                    :placeholder="__('Password')"
                    viewable
                />

                @if (Route::has('password.request'))
                    <flux:link class="absolute top-0 text-sm end-0" :href="route('password.request')" wire:navigate>
                        {{ __('Forgot your password?') }}
                    </flux:link>
                @endif
            </div>

            <!-- Remember Me -->
            <flux:checkbox name="remember" :label="__('Remember me')" :checked="old('remember')" />

            <div class="flex items-center justify-end">
                <flux:button variant="primary" type="submit" class="w-full" data-test="login-button">
                    {{ __('Log in') }}
                </flux:button>
            </div>
        </form>

        @if (Route::has('register'))
            <div class="space-x-1 text-sm text-center rtl:space-x-reverse text-zinc-600 dark:text-zinc-400">
                <span>{{ __('Don\'t have an account?') }}</span>
                <flux:link :href="route('register')" wire:navigate>{{ __('Sign up') }}</flux:link>
            </div>
        @endif
    </div>
        <div class="mt-4">
    <a href="{{ url('google/redirect') }}"
       class="flex items-center justify-center gap-2 w-full py-2 px-4 border border-zinc-300 dark:border-zinc-700 rounded-lg text-sm font-medium text-zinc-700 dark:text-zinc-300 hover:bg-zinc-100 dark:hover:bg-zinc-800 transition">
        <svg class="w-5 h-5" viewBox="0 0 48 48">
            <path fill="#EA4335" d="M24 9.5c3.54 0 6.71 1.22 9.21 3.6l6.85-6.85C35.53 2.38 30.15 0 24 0 14.62 0 6.51 5.38 2.56 13.22l7.98 6.19C12.51 13.68 17.74 9.5 24 9.5z"/>
            <path fill="#4285F4" d="M46.98 24.55c0-1.57-.13-3.08-.38-4.55H24v9.02h12.94c-.56 2.98-2.18 5.51-4.63 7.19l7.14 5.54c4.19-3.86 6.53-9.54 6.53-17.2z"/>
            <path fill="#FBBC05" d="M10.54 28.41c-.48-1.45-.76-2.99-.76-4.41s.28-2.96.76-4.41l-7.98-6.19C.92 16.33 0 19.61 0 24c0 4.39.92 7.67 2.56 10.59l7.98-6.18z"/>
            <path fill="#34A853" d="M24 48c6.15 0 11.53-2.38 15.37-6.38l-7.14-5.54c-2.05 1.37-4.72 2.15-8.23 2.15-6.26 0-11.49-4.18-13.46-9.91l-7.98 6.18C6.51 42.62 14.62 48 24 48z"/>
        </svg>
        <span>Continue with Google</span>
    </a>
</div>
</x-layouts.auth>
