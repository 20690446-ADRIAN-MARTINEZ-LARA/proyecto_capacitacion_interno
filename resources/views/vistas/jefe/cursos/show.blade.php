<x-appJefe-layout>

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
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="py-12">
        <h1 class="text-center text-xl"><strong>Docentes inscritos</strong></h1>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                    <table class="w-full text-sm text-left rtl:text-right text-gray-500">
                        <thead class="text-xm text-gray-700 bg-gray-50">
                            <tr>
                                <th scope="col" class="px-6 py-3 text-center">
                                    Correo
                                </th>
                                <th scope="col" class="px-6 py-3 text-center">
                                    Nombre
                                </th>
                                <th scope="col" class="px-6 py-3 text-center">
                                    Departamento
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($DocentesInscritos as $DocenteInscrito)
                                <tr class="bg-white border-b">
                                    <td class="text-center">{{ $DocenteInscrito->user->email }}</td>
                                    <td class="text-center">{{ $DocenteInscrito->user->name }}</td>
                                    <td class="text-center">{{ $DocenteInscrito->user->departamento }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</x-appJefe-layout>
