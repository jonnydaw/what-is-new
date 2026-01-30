<x-navigation :title="$title ?? null">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="max-w-2xl mx-auto">
            <div class="text-center mb-12">
                <h1 class="text-4xl font-bold text-gray-900 dark:text-gray-100 mb-4">
                    Welcome to {{ config('app.name') }}
                </h1>
                <p class="text-lg text-gray-600 dark:text-gray-400">
                    Discover the latest news stories from around the world
                </p>
            </div>

            <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg p-8">
                    <form>
                    <div class="space-y-6">
                        <div>
                            <label for="country" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                                Select a Country
                            </label>
                            <select 
                                id="country" 
                                name="country" 
                                class="w-full px-4 py-3 rounded-lg border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-700 text-gray-900 dark:text-gray-100 focus:ring-2 focus:ring-blue-500 focus:border-transparent transition duration-200"
                                required
                            >
                                <option value="">Choose a country...</option>
                                <option value="au">🇦🇺 Australia</option>
                                <option value="br">🇧🇷 Brazil</option>
                                <option value="ca">🇨🇦 Canada</option>
                                <option value="cn">🇨🇳 China</option>
                                <option value="co">🇨🇴 Colombia</option>
                                <option value="fr">🇫🇷 France</option>
                                <option value="de">🇩🇪 Germany</option>
                                <option value="in">🇮🇳 India</option>
                                <option value="it">🇮🇹 Italy</option>
                                <option value="jp">🇯🇵 Japan</option>
                                <option value="mx">🇲🇽 Mexico</option>
                                <option value="nl">🇳🇱 Netherlands</option>
                                <option value="ng">🇳🇬 Nigeria</option>
                                <option value="kr">🇰🇷 South Korea</option>
                                <option value="za">🇿🇦 South Africa</option>
                                <option value="es">🇪🇸 Spain</option>
                                <option value="ae">🇦🇪 United Arab Emirates</option>
                                <option value="gb">🇬🇧 United Kingdom</option>
                                <option value="us">🇺🇸 United States</option>
                            </select>
                        </div>

                        <button 
                            type="submit"
                            class="w-full bg-blue-600 hover:bg-blue-700 text-white font-semibold py-3 px-6 rounded-lg transition duration-200 transform hover:scale-[1.02] focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800"
                        >
                            What's New?
                        </button>
                    </div>
                </form>
            </div>

            <div class="mt-12 grid grid-cols-1 md:grid-cols-3 gap-6 text-center">
                <div class="p-4">
                    <div class="text-3xl mb-2">🌍</div>
                    <h3 class="font-semibold text-gray-900 dark:text-gray-100 mb-1">Global Coverage</h3>
                    <p class="text-sm text-gray-600 dark:text-gray-400">What's New in every corner of the world</p>
                </div>
                <div class="p-4">
                    <div class="text-3xl mb-2">⚡</div>
                    <h3 class="font-semibold text-gray-900 dark:text-gray-100 mb-1">Real-Time Updates</h3>
                    <p class="text-sm text-gray-600 dark:text-gray-400">Pending</p>
                </div>
                <div class="p-4">
                    <div class="text-3xl mb-2">🎯</div>
                    <h3 class="font-semibold text-gray-900 dark:text-gray-100 mb-1">Personalized</h3>
                    <p class="text-sm text-gray-600 dark:text-gray-400">Pending</p>
                </div>
            </div>
        </div>
    </div>
</x-navigation>