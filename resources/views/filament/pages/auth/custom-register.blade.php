<div
    class="w-full max-w-[1600px] h-full lg:h-screen lg:max-h-[900px] grid lg:grid-cols-12 overflow-hidden bg-white dark:bg-forest-dark lg:rounded-2xl lg:shadow-2xl ring-1 ring-gray-900/5 dark:ring-white/10 my-auto mx-auto relative">
    <div
        class="hidden lg:flex lg:col-span-5 relative flex-col justify-between overflow-hidden bg-forest-dark dark:bg-black/20 p-12 text-white">
        <div class="absolute inset-0 z-0 opacity-10" data-alt="Abstract dot pattern background"
            style="background-image: radial-gradient(#13ec25 1px, transparent 1px); background-size: 32px 32px;"></div>
        <div class="relative z-10">
            <div class="flex items-center gap-3 mb-8">
                <div class="w-10 h-10 rounded bg-primary flex items-center justify-center text-forest-dark">
                    <span class="material-icons">pets</span>
                </div>
                <span class="text-xl font-bold tracking-tight">VetManager</span>
            </div>
            <h2 class="text-4xl font-extrabold leading-tight mb-4">
                {{ $this->getHeading() }}
            </h2>
            <p class="text-gray-300 text-lg max-w-sm">
                {{ $this->getSubHeading() }}
            </p>
        </div>
        <div
            class="relative z-10 flex-grow flex items-center justify-center bird-container cursor-pointer group transform transition-transform duration-500 hover:scale-105">
            <!-- Bird Emoji Replacement -->
            <div style="font-size: 120px; text-align: center;">🐦</div>
        </div>
        <div class="relative z-10 text-sm text-gray-400 font-medium">
            © {{ date('Y') }} Sistema VetManager. Todos los derechos reservados.
        </div>
    </div>

    <div
        class="col-span-12 lg:col-span-7 bg-white dark:bg-background-dark p-8 md:p-12 lg:p-16 flex flex-col justify-center overflow-y-auto">
        <div class="max-w-md mx-auto w-full">
            <div class="lg:hidden flex items-center gap-2 mb-8 text-forest-dark dark:text-primary">
                <span class="material-icons text-3xl">pets</span>
                <span class="text-2xl font-bold">VetManager</span>
            </div>
            <div class="mb-10">
                <h1 class="text-3xl font-bold text-gray-900 dark:text-white mb-2">Crear Cuenta</h1>
                <p class="text-gray-500 dark:text-gray-400">Introduce tus datos para registrarte como veterinario.</p>
            </div>

            <form wire:submit="register" class="space-y-6">
                <!-- Name Field -->
                <div>
                    <label class="block text-sm font-medium leading-6 text-gray-900 dark:text-gray-200" for="name">
                        Nombre Completo
                    </label>
                    <div class="mt-2 relative rounded-md shadow-sm">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <span class="material-icons text-gray-400 text-sm">person</span>
                        </div>
                        <input wire:model="data.name" autocomplete="name"
                            class="block w-full rounded-md border-0 py-2.5 pl-10 text-gray-900 dark:text-white ring-1 ring-inset ring-gray-300 dark:ring-gray-700 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-primary sm:text-sm sm:leading-6 dark:bg-white/5 bg-gray-50"
                            id="name" type="text" placeholder="Dr. Juan Pérez" required autofocus />
                    </div>
                    @error('data.name')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Email Field -->
                <div>
                    <label class="block text-sm font-medium leading-6 text-gray-900 dark:text-gray-200" for="email">
                        Correo Electrónico
                    </label>
                    <div class="mt-2 relative rounded-md shadow-sm">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <span class="material-icons text-gray-400 text-sm">mail</span>
                        </div>
                        <input wire:model="data.email" autocomplete="email"
                            class="block w-full rounded-md border-0 py-2.5 pl-10 text-gray-900 dark:text-white ring-1 ring-inset ring-gray-300 dark:ring-gray-700 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-primary sm:text-sm sm:leading-6 dark:bg-white/5 bg-gray-50"
                            id="email" type="email" placeholder="juan@veterinaria.com" required />
                    </div>
                    @error('data.email')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- Password Field -->
                    <div>
                        <label class="block text-sm font-medium leading-6 text-gray-900 dark:text-gray-200"
                            for="password">
                            Contraseña
                        </label>
                        <div class="mt-2 relative rounded-md shadow-sm">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <span class="material-icons text-gray-400 text-sm">lock</span>
                            </div>
                            <input wire:model="data.password"
                                class="block w-full rounded-md border-0 py-2.5 pl-10 text-gray-900 dark:text-white ring-1 ring-inset ring-gray-300 dark:ring-gray-700 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-primary sm:text-sm sm:leading-6 dark:bg-white/5 bg-gray-50"
                                id="password" type="password" required autocomplete="new-password" />
                        </div>
                        @error('data.password')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Password Confirmation Field -->
                    <div>
                        <label class="block text-sm font-medium leading-6 text-gray-900 dark:text-gray-200"
                            for="password_confirmation">
                            Confirmar Contraseña
                        </label>
                        <div class="mt-2 relative rounded-md shadow-sm">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <span class="material-icons text-gray-400 text-sm">lock_reset</span>
                            </div>
                            <input wire:model="data.passwordConfirmation"
                                class="block w-full rounded-md border-0 py-2.5 pl-10 text-gray-900 dark:text-white ring-1 ring-inset ring-gray-300 dark:ring-gray-700 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-primary sm:text-sm sm:leading-6 dark:bg-white/5 bg-gray-50"
                                id="password_confirmation" type="password" required autocomplete="new-password" />
                        </div>
                    </div>
                </div>

                <!-- Submit Button -->
                <div>
                    <button
                        class="flex w-full justify-center rounded-lg bg-primary px-3 py-3 text-sm font-bold text-forest-dark shadow-sm hover:bg-primary-hover focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary transition-colors duration-200"
                        type="submit">
                        Registrar Veterinario
                    </button>
                    <!-- Loading Indicator -->
                    <div wire:loading wire:target="register" class="text-center text-primary text-sm mt-2">
                        Creando cuenta...
                    </div>
                </div>
            </form>

            <div class="mt-10 border-t border-gray-200 dark:border-gray-700 pt-8">
                <div
                    class="bg-primary/10 dark:bg-primary/5 rounded-xl p-5 border border-primary/20 flex flex-col sm:flex-row items-start sm:items-center gap-4">
                    <div class="bg-primary/20 dark:bg-primary/10 p-2 rounded-full flex-shrink-0">
                        <span class="material-icons text-forest-medium dark:text-primary">waving_hand</span>
                    </div>
                    <div>
                        <p class="text-sm text-gray-600 dark:text-gray-300 mb-1 font-medium">¿Ya tienes una cuenta?
                        </p>
                        <a class="block text-base font-bold text-forest-dark dark:text-primary hover:underline decoration-2 underline-offset-2"
                            href="{{ filament()->getLoginUrl() }}">
                            ¡Tus pacientes te esperan! Inicia sesión aquí
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
