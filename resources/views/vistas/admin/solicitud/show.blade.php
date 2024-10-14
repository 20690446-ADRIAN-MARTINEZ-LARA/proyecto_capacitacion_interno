<x-appAdmin-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white">
            {{ __('Detalles solicitud') }}
        </h2>
    </x-slot>

        <div class="container mt-6 mx-auto">
            <div class="flex flex-wrap justify-center">
                <div class="mb-4 mx-2 w-full md:w-1/2 lg:w-1/3 xl:w-1/4">
                    <div class="bg-white rounded-lg overflow-hidden shadow-md h-full">
                        <div class="p-4">
                            <h5 class="text-xl font-semibold">{{ $solicitarcurso->nombre }}</h5>
                            <h6 class="text-sm font-semibold text-gray-700 mb-2"><strong>Instructor:</strong>
                                {{ $solicitarcurso->instructor }}</h6>
                            <p class="text-sm text-gray-700"><strong>Objetivo:</strong> {{ $solicitarcurso->objetivo }}
                            </p>
                            <p class="text-sm text-gray-700"><strong>Participantes aproximados:</strong>
                                {{ $solicitarcurso->participantes }}</p>
                            <p class="text-sm text-gray-700"><strong>Prioridad:</strong>
                                {{ $solicitarcurso->prioridad }}</p>
                            <p class="text-sm text-gray-700"><strong>Origen de la necesidad:</strong>
                                {{ $solicitarcurso->origen }}</p>
                            <p class="text-sm text-gray-700"><strong>Requerimientos de la capacitacion y/o Comentarios
                                    adicionales:</strong> {{ $solicitarcurso->requerimientos }}</p>
                            <form
                                action="{{ route('solicitarcursos.show', ['solicitarcurso' => $solicitarcurso->id]) }}"
                                method="PUT">
                                <x-primary-button name="action" value="registrar">Registrar</x-primary-button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</x-appAdmin-layout>
