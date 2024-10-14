<x-appDocente-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white">
            {{ __('Detalles del curso') }}
        </h2>
    </x-slot>

    <div class="container mt-6 mx-auto">
        <div class="flex flex-wrap justify-center">
            <div class="mb-4 mx-2 w-full md:w-1/2 lg:w-1/3 xl:w-1/4">
                <div class="bg-white rounded-lg overflow-hidden shadow-md h-full">
                    <div class="p-4">
                        <h5 class="text-xl font-semibold">{{ $curso->nombre }}</h5>
                        <h6 class="text-sm font-semibold text-gray-700 mb-2"><strong>Instructor:</strong>
                            {{ $curso->instructor }}</h6>
                        <p class="text-sm text-gray-700"><strong>Departamento:</strong> {{ $curso->departamento }}</p>
                        <p class="text-sm text-gray-700"><strong>Periodo:</strong> {{ $curso->periodo }}</p>
                        <p class="text-sm text-gray-700"><strong>Duración:</strong> {{ $curso->duracion }} horas</p>
                        <p class="text-sm text-gray-700"><strong>Horario:</strong> {{ $curso->horario }}</p>
                        <p class="text-sm text-gray-700"><strong>Modalidad:</strong> {{ $curso->modalidad }}</p>
                        <p class="text-sm text-gray-700"><strong>Sede:</strong> {{ $curso->sede }}</p>
                        <p class="text-sm text-gray-700"><strong>Inscritos:</strong>
                            {{ $curso->inscritos->count() }}/{{ $curso->limiteAlumnos }}</p>
                        <p class="text-sm text-gray-700"><strong>Estado:</strong> {{ $curso->estado }}</p>

                        <!-- Botón para contestar la encuesta -->
                        @if ($curso->estado == 'Terminado')
                            <div class="mt-4 text-center">
                                <a href="{{ route('encuesta.formulario') }}" style="background-color: #1B396A; color: white; padding: 10px 20px; text-decoration: none; border-radius: 5px; font-size: 16px;">
                                    Contestar Encuesta
                                </a>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-appDocente-layout>
