<x-appAdmin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-white">
            {{ __('Inicio') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-7 text-gray-900 ">
                    {{ __("Bienvenido administrador") }}
                </div>
            </div>
        </div>
    </div>

    <x-footer>

    </x-footer>

</x-appAdmin-layout>

