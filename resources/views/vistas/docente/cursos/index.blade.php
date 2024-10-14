<x-appDocente-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-200 leading-tightt">
            {{ __('Cursos disponibles') }}
        </h2>
    </x-slot>
    <div class="container mt-6 mx-auto">
        <div class="flex flex-wrap justify-center">
            @foreach ($cursos as $curso)
                <?php if($curso->inscritos->count() < $curso->limiteAlumnos) { ?>
                <?php if($curso->estado == 'Disponible') {?>
                <div class="mb-4 mx-2 w-full md:w-1/2 lg:w-1/3 xl:w-1/4">
                    <div class="bg-white rounded-lg overflow-hidden shadow-md h-full">
                        <div class="p-4">
                            <h5 class="text-xl font-semibold">{{ $curso->nombre }}</h5>
                            <h6 class="text-sm font-semibold text-gray-700 mb-2"><strong>Instructor:</strong>
                                {{ $curso->instructor }}</h6>
                            <p class="text-sm text-gray-700"><strong>Departamento:</strong> {{ $curso->departamento }}
                            </p>
                            <p class="text-sm text-gray-700"><strong>Periodo:</strong> {{ $curso->periodo }}</p>
                            <p class="text-sm text-gray-700"><strong>Duración:</strong> {{ $curso->duracion }} horas</p>
                            <p class="text-sm text-gray-700"><strong>Horario:</strong> {{ $curso->horario }}</p>
                            <p class="text-sm text-gray-700"><strong>Modalidad:</strong> {{ $curso->modalidad }}</p>
                            <p class="text-sm text-gray-700"><strong>Sede:</strong> {{ $curso->sede }}</p>
                            <form action="{{ route('cursosinscritos.store') }}" method="POST">
                                @csrf
                                <input type="hidden" name="curso_id" value="{{ $curso->id }}">
                                <x-primary-button class="mt-4">Registrar</x-primary-button>
                            </form>
                        </div>
                    </div>
                </div>
                <?php }
                        }?>
            @endforeach
        </div>
    </div>
</x-appDocente-layout>
