<x-appAdmin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white">
            {{ __('Registrar usuario') }}
        </h2>
    </x-slot>
    <div class="min-h-screen flex flex-col items-center pt-6 bg-gray-100">
        <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <!-- Name -->
                <div>
                    <x-input-label for="name" :value="__('Nombre')" />
                    <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')"
                        required autofocus autocomplete="name" />
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>

                <!-- Departamento -->
                <div class="mt-4">
                    <x-input-label for="departamento" :value="__('Departamento')" />
                    <select name="departamento" id="departamento" class="block mt-1 w-full border-black focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm'">
                            <option value="Ciencias Basicas">Ciencias Básicas</option>
                            <option value="Ciencias Economico - Administrativas">Ciencias Económico - Administrativa</option>
                            <option value="Sistema y computacion">Sistemas y Computación</option>
                            <option value="Industrial">Industrial</option>
                            <option value="Ingenierias">Ingenierías</option>
                            <option value="Agronomia">Agronomía</option>
                    </select>
                </div>

                <!-- Role -->
                <div class="mt-4">
                    <x-input-label for="role" :value="__('Tipo de usuario')" />
                    <select name="role" id="role" class="block mt-1 w-full border-black focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm'">
                        <option value="jefedepartamento">Jefe de Departamento Académico</option>
                        <option value="docente">Docente</option>
                    </select>
                </div>

                <!-- Email Address -->
                <div class="mt-4">
                    <x-input-label for="email" :value="__('Correo')" />
                    <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                        required autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <!-- Password -->
                <div class="mt-4">
                    <x-input-label for="password" :value="__('Contraseña')" />

                    <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                        autocomplete="new-password" />

                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <!-- Confirm Password -->
                <div class="mt-4">
                    <x-input-label for="password_confirmation" :value="__('Confirmar contraseña')" />

                    <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password"
                        name="password_confirmation" required autocomplete="new-password" />

                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                </div>

                <div class="flex items-center justify-end mt-4">
                    <x-primary-button class="ms-4">
                        {{ __('Registrar') }}
                    </x-primary-button>
                </div>
            </form>
        </div>
    </div>

</x-appAdmin-layout>
