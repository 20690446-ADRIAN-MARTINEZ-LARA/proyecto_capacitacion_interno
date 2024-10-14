<x-appJefe-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white">
            {{ __('Cursos') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                    <table class="w-full text-sm text-left rtl:text-right text-gray-500">
                        <thead class="text-xm text-gray-700 bg-gray-50">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    Nombre
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Instructor
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Departamento
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Periodo
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Modalidad
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Sede
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Cantidad
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Acciones
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($cursos as $curso)
                            <tr class="bg-white border-b">
                                <td class="text-center">{{ $curso->nombre }}</td>
                                <td class="text-center">{{ $curso->instructor }}</td>
                                <td class="text-center">{{ $curso->departamento }}</td>
                                <td class="text-center">{{ $curso->periodo }}</td>
                                <td class="text-center">{{ $curso->modalidad }}</td>
                                <td class="text-center">{{ $curso->sede }}</td>
                                <td class="text-center">{{$curso->inscritos->count()}}/{{ $curso->limiteAlumnos }}</td>
                                <td class="text-center">
                                    <a href="{{ route('cursos.show', $curso->id) }}" style="background-color: #1B396A; color: white; padding: 10px 20px; text-decoration: none; border-radius: 5px; font-size: 16px; display: inline-block;">Ver detalles</a>
                                </td>

                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-appJefe-layout>
