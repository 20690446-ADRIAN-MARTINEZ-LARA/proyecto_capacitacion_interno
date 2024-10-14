<x-appDocente-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-200 leading-tight">
            {{ __('Cursos inscritos') }}
        </h2>
    </x-slot>
    <div class="container mt-6 mx-auto">
        <div class="flex flex-wrap justify-center">
            @foreach ($cursosInscritos as $cursoInscrito)
                <?php if($cursoInscrito->curso->estado == 'Disponible') {?>
                <div class="mb-4 mx-2 w-full md:w-1/2 lg:w-1/3 xl:w-1/4">
                    <div class="bg-white rounded-lg overflow-hidden shadow-md h-full">
                        <div class="p-4">
                            <h5 class="text-xl font-semibold">{{ $cursoInscrito->curso->nombre }}</h5>
                            <h6 class="text-sm font-semibold text-gray-700 mb-2"><strong>Instructor:</strong>
                                {{ $cursoInscrito->curso->instructor }}</h6>
                            <p class="text-sm text-gray-700"><strong>Departamento:</strong>
                                {{ $cursoInscrito->curso->departamento }}</p>
                            <p class="text-sm text-gray-700"><strong>Periodo:</strong>
                                {{ $cursoInscrito->curso->periodo }}</p>
                            <p class="text-sm text-gray-700"><strong>Duración:</strong>
                                {{ $cursoInscrito->curso->duracion }} horas</p>
                            <p class="text-sm text-gray-700"><strong>Horario:</strong>
                                {{ $cursoInscrito->curso->horario }}</p>
                            <p class="text-sm text-gray-700"><strong>Modalidad:</strong>
                                {{ $cursoInscrito->curso->modalidad }}</p>
                            <p class="text-sm text-gray-700"><strong>Sede:</strong> {{ $cursoInscrito->curso->sede }}
                            </p>
                            <form action="{{ route('cursosinscritos.destroy', $cursoInscrito->id) }}" method="POST"
                                class="mt-4">
                                @csrf
                                @method('DELETE')
                                <x-primary-button type="submit" onclick="return confirm('¿Estás seguro de que deseas salir del curso?');">
                                    Salir del curso
                                </x-primary-button>
                            </form>
                        </div>
                    </div>
                </div>
                <?php } ?>
            @endforeach
        </div>
    </div>
</x-appDocente-layout>
