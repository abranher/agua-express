<x-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <div class="flex flex-col items-center justify-center px-6 pt-8 mx-auto md:h-screen pt:mt-0 dark:bg-gray-900">
        <a href="#"
            class="flex items-center flex-col justify-center mb-8 text-2xl font-semibold lg:mb-10 dark:text-white">
            <img src="/img/logo.jpeg" class="mr-4 h-16 rounded-full" alt="FlowBite Logo">
            <span>Agua Express</span>
        </a>
        <!-- Card -->
        <div class="w-full max-w-xl p-6 space-y-8 sm:p-8 bg-white rounded-lg shadow dark:bg-gray-800">
            <h2 class="text-2xl font-bold text-gray-900 dark:text-white">
                {{ __('Sign in to platform') }}
            </h2>
            <form class="mt-8 space-y-6" method="POST" action="{{ route('login') }}">
                @csrf
                <!-- Email Address -->
                <div>
                    <x-input-label for="email" :value="__('Email')" />
                    <x-text-input id="email" class="block mt-1 w-full" type="email" name="email"
                        :value="old('email')" placeholder="name@company.com" required autofocus autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <!-- Password -->
                <div class="mt-4">
                    <x-input-label for="password" :value="__('Password')" />

                    <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                        autocomplete="current-password" placeholder="••••••••" />

                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <!-- Remember Me -->
                <div class="block mt-4">
                    <label for="remember" class="inline-flex items-center">
                        <input id="remember" type="checkbox"
                            class="w-4 h-4 border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-primary-300 dark:focus:ring-primary-600 dark:ring-offset-gray-800 dark:bg-gray-700 dark:border-gray-600"
                            name="remember">
                        <span class="ms-2 text-sm text-gray-600">{{ __('Remember Me') }}</span>
                    </label>
                </div>

                <div class="flex items-center justify-end mt-4">

                    @if (Route::has('password.request'))
                        <a class="ml-auto text-sm text-primary-700 hover:underline dark:text-primary-500"
                            href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                    @endif

                    <x-primary-button class="ms-3">
                        {{ __('Log in') }}
                    </x-primary-button>
                </div>
                <div class="text-sm font-medium text-gray-500 dark:text-gray-400">
                    Aún no estás registrado? <a href="{{ route('register') }}"
                        class="text-primary-700 hover:underline dark:text-primary-500">Crear cuenta</a>
                </div>
            </form>
        </div>
    </div>

</x-layout>
