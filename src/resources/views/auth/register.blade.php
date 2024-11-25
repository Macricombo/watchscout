<x-site-layout>
    <div class="min-h-screen flex flex-col items-center pt-6 sm:pt-0 bg-gray-100">
        <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
            <div class="mb-8 text-center">
                <h2 class="text-2xl font-bold text-gray-900">
                    Registrati su WatchScout
                </h2>
                <p class="mt-2 text-sm text-gray-600">
                    Entra nella community degli appassionati di orologi
                </p>
            </div>

            <form method="POST" action="{{ route('register') }}">
                @csrf

                <!-- Name -->
                <div>
                    <x-input-label for="name" :value="__('Nome')" class="text-gray-700" />
                    <x-text-input id="name" class="block mt-1 w-full rounded-md border-gray-300 focus:border-green-500 focus:ring focus:ring-green-200" 
                        type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>

                <!-- Email Address -->
                <div class="mt-4">
                    <x-input-label for="email" :value="__('Email')" class="text-gray-700" />
                    <x-text-input id="email" class="block mt-1 w-full rounded-md border-gray-300 focus:border-green-500 focus:ring focus:ring-green-200" 
                        type="email" name="email" :value="old('email')" required autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <!-- Password -->
                <div class="mt-4">
                    <x-input-label for="password" :value="__('Password')" class="text-gray-700" />
                    <x-text-input id="password" class="block mt-1 w-full rounded-md border-gray-300 focus:border-green-500 focus:ring focus:ring-green-200"
                        type="password"
                        name="password"
                        required autocomplete="new-password" />
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <!-- Confirm Password -->
                <div class="mt-4">
                    <x-input-label for="password_confirmation" :value="__('Conferma Password')" class="text-gray-700" />
                    <x-text-input id="password_confirmation" class="block mt-1 w-full rounded-md border-gray-300 focus:border-green-500 focus:ring focus:ring-green-200"
                        type="password"
                        name="password_confirmation" required autocomplete="new-password" />
                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                </div>

                <div class="mt-6">
                    <button type="submit" class="w-full bg-green-900 text-white px-4 py-2 rounded-lg hover:bg-green-800 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2">
                        Crea Account
                    </button>
                </div>

                <div class="mt-6 text-center">
                    <p class="text-sm text-gray-600">
                        Hai già un account? 
                        <a href="{{ route('login') }}" class="text-green-900 hover:text-green-700 font-semibold">
                            Accedi
                        </a>
                    </p>
                </div>

                <div class="mt-4 text-center">
                    <p class="text-xs text-gray-600">
                        Registrandoti, accetti i nostri 
                        <a href="#" class="text-green-900 hover:text-green-700">
                            Termini di Servizio
                        </a> 
                        e la nostra 
                        <a href="#" class="text-green-900 hover:text-green-700">
                            Privacy Policy
                        </a>
                    </p>
                </div>
            </form>
        </div>
    </div>
</x-site-layout>
