<x-site-layout>
    <div class="py-12 bg-gray-100">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- User Profile Summary -->
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mb-6">
                <div class="p-6">
                    <div class="flex items-center justify-between">
                        <div>
                            <h2 class="text-2xl font-bold text-gray-900">
                                Benvenuto, {{ Auth::user()->name }}!
                            </h2>
                            <p class="mt-1 text-sm text-gray-600">
                                Gestisci i tuoi annunci e le tue transazioni
                            </p>
                        </div>
                        <div class="flex space-x-4">
                            <a href="#" class="bg-green-900 text-white px-4 py-2 rounded-lg hover:bg-green-800 transition">
                                Nuovo Annuncio
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Dashboard Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- I Tuoi Annunci -->
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6">
                        <h3 class="text-lg font-semibold text-gray-900 mb-4">
                            I Tuoi Annunci
                        </h3>
                        <div class="space-y-4">
                            <div class="flex items-center justify-between p-4 bg-gray-50 rounded-lg">
                                <div>
                                    <p class="font-medium text-gray-900">Nessun annuncio attivo</p>
                                    <p class="text-sm text-gray-600">Crea il tuo primo annuncio</p>
                                </div>
                                <a href="#" class="text-green-900 hover:text-green-700">
                                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Messaggi -->
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6">
                        <h3 class="text-lg font-semibold text-gray-900 mb-4">
                            Messaggi
                        </h3>
                        <div class="space-y-4">
                            <div class="flex items-center justify-between p-4 bg-gray-50 rounded-lg">
                                <div>
                                    <p class="font-medium text-gray-900">Nessun messaggio</p>
                                    <p class="text-sm text-gray-600">La tua casella è vuota</p>
                                </div>
                                <a href="#" class="text-green-900 hover:text-green-700">
                                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Preferiti -->
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6">
                        <h3 class="text-lg font-semibold text-gray-900 mb-4">
                            Orologi Preferiti
                        </h3>
                        <div class="space-y-4">
                            <div class="flex items-center justify-between p-4 bg-gray-50 rounded-lg">
                                <div>
                                    <p class="font-medium text-gray-900">Nessun preferito</p>
                                    <p class="text-sm text-gray-600">Aggiungi orologi ai preferiti</p>
                                </div>
                                <a href="#" class="text-green-900 hover:text-green-700">
                                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Recent Activity -->
            <div class="mt-6 bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <h3 class="text-lg font-semibold text-gray-900 mb-4">
                        Attività Recente
                    </h3>
                    <div class="border-t border-gray-200">
                        <div class="py-4 text-center text-gray-600">
                            Nessuna attività recente da mostrare
                        </div>
                    </div>
                </div>
            </div>

            <!-- Quick Stats -->
            <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mt-6">
                <div class="bg-white p-6 rounded-lg shadow-sm">
                    <div class="text-sm font-medium text-gray-600">Annunci Attivi</div>
                    <div class="mt-2 text-3xl font-bold text-gray-900">0</div>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-sm">
                    <div class="text-sm font-medium text-gray-600">Messaggi non Letti</div>
                    <div class="mt-2 text-3xl font-bold text-gray-900">0</div>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-sm">
                    <div class="text-sm font-medium text-gray-600">Orologi Venduti</div>
                    <div class="mt-2 text-3xl font-bold text-gray-900">0</div>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-sm">
                    <div class="text-sm font-medium text-gray-600">Orologi Acquistati</div>
                    <div class="mt-2 text-3xl font-bold text-gray-900">0</div>
                </div>
            </div>
        </div>
    </div>
</x-site-layout>
