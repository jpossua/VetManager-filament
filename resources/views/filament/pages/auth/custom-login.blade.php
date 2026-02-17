<div class="w-full h-full flex flex-col md:flex-row shadow-2xl overflow-hidden relative">
    <div
        class="hidden md:flex md:w-1/2 bg-forest-dark relative flex-col items-center justify-center p-12 overflow-hidden group">
        <div class="absolute inset-0 bg-[url('https://www.transparenttextures.com/patterns/cubes.png')] opacity-10">
        </div>
        <div
            class="absolute top-0 right-0 w-64 h-64 bg-primary/20 rounded-full blur-3xl transform translate-x-1/3 -translate-y-1/3">
        </div>
        <div
            class="absolute bottom-0 left-0 w-80 h-80 bg-primary/10 rounded-full blur-3xl transform -translate-x-1/3 translate-y-1/3">
        </div>
        <div class="relative z-10 text-center w-full max-w-lg">
            <h2 class="text-3xl lg:text-4xl font-bold text-white mb-2 tracking-tight">Gestión Veterinaria</h2>
            <p class="text-sage mb-8 text-lg font-medium">Cuidando de ellos, digitalmente.</p>
            <div
                class="w-full max-w-md mx-auto transform transition-transform duration-500 hover:scale-105 cursor-pointer">
                <!-- Emoji Illustration Replacement -->
                <div style="font-size: 120px; text-align: center;">🐶🐱</div>
            </div>
            <div class="mt-12 space-y-2">
                <div
                    class="inline-flex items-center justify-center space-x-2 bg-white/10 backdrop-blur-sm rounded-full px-4 py-2 border border-white/10">
                    <span class="material-icons text-primary text-sm">verified_user</span>
                    <span class="text-white text-sm font-medium">Sistema Seguro &amp; Encriptado</span>
                </div>
            </div>
        </div>
    </div>
    <div
        class="w-full md:w-1/2 flex flex-col justify-center items-center p-8 bg-background-light dark:bg-background-dark relative">
        <div class="md:hidden absolute top-0 left-0 w-full h-2 bg-primary"></div>
        <div class="w-full max-w-md space-y-8">
            <div class="text-center md:text-left">
                <div class="inline-flex items-center justify-center md:justify-start gap-3 mb-6">
                    <div class="w-10 h-10 rounded-lg bg-primary flex items-center justify-center text-forest-dark">
                        <span class="material-icons">pets</span>
                    </div>
                    <span class="text-2xl font-bold text-forest-dark dark:text-white tracking-tight">VetManager</span>
                </div>
                <h1 class="text-4xl font-extrabold text-gray-900 dark:text-white tracking-tight mb-2">
                    {{ $this->getHeading() }}
                </h1>
                <p class="text-gray-500 dark:text-gray-400">
                    {{ $this->getSubHeading() }}
                </p>
            </div>

            <form wire:submit="authenticate" class="space-y-6">
                <!-- Email Input -->
                <div class="space-y-2">
                    <label class="block text-sm font-semibold text-gray-700 dark:text-gray-300" for="email">
                        Correo Electrónico
                    </label>
                    <div class="relative rounded-lg shadow-sm">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <span class="material-icons text-gray-400 text-xl">mail_outline</span>
                        </div>
                        <input wire:model="data.email"
                            class="block w-full pl-10 pr-3 py-3 border-gray-300 dark:border-gray-700 rounded-lg focus:ring-primary focus:border-primary sm:text-sm bg-white dark:bg-gray-800 dark:text-white placeholder-gray-400 transition-all duration-200"
                            id="email" type="email" placeholder="nombre@clinica.com" required autofocus
                            autocomplete="email" />
                    </div>
                    @error('data.email')
                        <p class="text-red-500 text-xs italic">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Password Input -->
                <div class="space-y-2">
                    <div class="flex items-center justify-between">
                        <label class="block text-sm font-semibold text-gray-700 dark:text-gray-300" for="password">
                            Contraseña
                        </label>
                    </div>
                    <div class="relative rounded-lg shadow-sm">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <span class="material-icons text-gray-400 text-xl">lock_outline</span>
                        </div>
                        <input wire:model="data.password"
                            class="block w-full pl-10 pr-10 py-3 border-gray-300 dark:border-gray-700 rounded-lg focus:ring-primary focus:border-primary sm:text-sm bg-white dark:bg-gray-800 dark:text-white placeholder-gray-400 transition-all duration-200"
                            id="password" type="password" placeholder="••••••••" required
                            autocomplete="current-password" />
                        <div class="absolute inset-y-0 right-0 pr-3 flex items-center cursor-pointer group">
                            <span
                                class="material-icons text-gray-400 group-hover:text-gray-600 dark:group-hover:text-gray-200 text-xl">visibility_off</span>
                        </div>
                    </div>
                    @error('data.password')
                        <p class="text-red-500 text-xs italic">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Submit Button -->
                <div>
                    <button
                        class="w-full flex justify-center py-3.5 px-4 border border-transparent rounded-lg shadow-sm text-sm font-bold text-forest-dark bg-primary hover:bg-primary-dark/90 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary transform transition-all duration-200 hover:-translate-y-0.5 shadow-lg shadow-primary/20"
                        type="submit">
                        INICIAR SESIÓN
                    </button>
                    <!-- Loading Indicator -->
                    <div wire:loading wire:target="authenticate" class="text-center text-primary text-sm mt-2">
                        Autenticando...
                    </div>
                </div>
            </form>

            <div class="mt-8 pt-6 border-t border-gray-200 dark:border-gray-700 text-center">
                <p class="text-base text-gray-600 dark:text-gray-400">
                    ¿Aún no eres parte de nuestra manada?
                </p>
                <a class="inline-block mt-2 text-lg font-bold text-forest-dark dark:text-primary hover:underline decoration-2 underline-offset-4 transition-all"
                    href="{{ filament()->getRegistrationUrl() }}">
                    ¡Únete ahora!
                </a>
            </div>
            <p class="text-xs text-center text-gray-400 dark:text-gray-600 mt-8">
                © {{ date('Y') }} VetManager System. Todos los derechos reservados.
            </p>
        </div>
    </div>
</div>
