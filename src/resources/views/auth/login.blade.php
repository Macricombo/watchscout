<x-site-layout>
    <div class="min-h-screen flex flex-col items-center pt-6 sm:pt-0 bg-gray-100">
        <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
            <div class="mb-8 text-center">
                <h2 class="text-2xl font-bold text-gray-900">
                    Accedi a WatchScout
                </h2>
                <p class="mt-2 text-sm text-gray-600">
                    Il tuo marketplace di orologi di lusso
                </p>
            </div>

            <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('status')" />

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <!-- Email Address -->
                <div>
                    <x-input-label for="email" :value="__('Email')" class="text-gray-700" />
                    <x-text-input id="email" class="block mt-1 w-full rounded-md border-gray-300 focus:border-green-500 focus:ring focus:ring-green-200" 
                        type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <!-- Password -->
                <div class="mt-4">
                    <x-input-label for="password" :value="__('Password')" class="text-gray-700" />
                    <x-text-input id="password" class="block mt-1 w-full rounded-md border-gray-300 focus:border-green-500 focus:ring focus:ring-green-200"
                        type="password"
                        name="password"
                        required autocomplete="current-password" />
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <!-- Remember Me -->
                <div class="block mt-4">
                    <label for="remember_me" class="inline-flex items-center">
                        <input id="remember_me" type="checkbox" 
                            class="rounded border-gray-300 text-green-600 shadow-sm focus:ring-green-500" 
                            name="remember">
                        <span class="ms-2 text-sm text-gray-600">Ricordami</span>
                    </label>
                </div>

                <div class="flex items-center justify-between mt-4">
                    <div class="text-sm">
                        @if (Route::has('password.request'))
                            <a class="text-green-900 hover:text-green-700" href="{{ route('password.request') }}">
                                Password dimenticata?
                            </a>
                        @endif
                    </div>
                    <button type="submit" class="bg-green-900 text-white px-4 py-2 rounded-lg hover:bg-green-800 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2">
                        Accedi
                    </button>
                </div>
            </form>

            <div class="mt-6 text-center">
                <p class="text-sm text-gray-600">
                    Non hai un account? 
                    <a href="{{ route('register') }}" class="text-green-900 hover:text-green-700 font-semibold">
                        Registrati
                    </a>
                </p>
            </div>
        </div>
    </div>
</x-site-layout>
