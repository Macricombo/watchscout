<x-site-layout>
    <div class="min-h-screen flex flex-col items-center pt-6 sm:pt-0 bg-gray-100">
        <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
            <div class="mb-8 text-center">
                <h2 class="text-2xl font-bold text-gray-900">
                    Recupera Password
                </h2>
                <p class="mt-2 text-sm text-gray-600">
                    Inserisci la tua email e ti invieremo un link per reimpostare la password
                </p>
            </div>

            <!-- Session Status -->
            <div class="mb-4 text-sm text-gray-600">
                {{ session('status') }}
            </div>

            <form method="POST" action="{{ route('password.email') }}">
                @csrf

                <!-- Email Address -->
                <div>
                    <x-input-label for="email" :value="__('Email')" class="text-gray-700" />
                    <x-text-input id="email" class="block mt-1 w-full rounded-md border-gray-300 focus:border-green-500 focus:ring focus:ring-green-200" 
                        type="email" 
                        name="email" 
                        :value="old('email')" 
                        required 
                        autofocus />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <div class="flex items-center justify-between mt-6">
                    <a href="{{ route('login') }}" class="text-sm text-green-900 hover:text-green-700">
                        Torna al login
                    </a>
                    <button type="submit" class="bg-green-900 text-white px-4 py-2 rounded-lg hover:bg-green-800 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2">
                        Invia Link
                    </button>
                </div>
            </form>

            <div class="mt-6 text-center">
                <p class="text-xs text-gray-600">
                    Non hai un account? 
                    <a href="{{ route('register') }}" class="text-green-900 hover:text-green-700 font-semibold">
                        Registrati ora
                    </a>
                </p>
            </div>
        </div>
    </div>
</x-site-layout>
