<x-appAdmin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white">
            {{ __('Solicitudes') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                    <table class="w-full text-sm text-left rtl:text-right text-gray-500">
                        <thead class="text-sm text-gray-700 bg-gray-50">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    Nombre
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Objetivo
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Instructor
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Numero aproximado de participantes
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Prioridad
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Origen
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Requerimientos
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Acciones
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($solicitarCursos as $solicitar)
                                <tr class="bg-white border-b">
                                    <td class="text-center">{{ $solicitar->nombre }}</td>
                                    <td class="text-center">{{ $solicitar->objetivo }}</td>
                                    <td class="text-center">{{ $solicitar->instructor }}</td>
                                    <td class="text-center">{{ $solicitar->participantes }}</td>
                                    <td class="text-center">{{ $solicitar->prioridad }}</>
                                    <td class="text-center">{{ $solicitar->origen }}</td>
                                    <td class="text-center">{{ $solicitar->requerimientos }}</td>
                                    <td class="text-center"><br>
                                        <form action="{{ route('solicitarcursos.destroy', $solicitar->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" style="background-color: #ff4c4c; color: white; border: none; padding: 5px 8px; border-radius: 5px; cursor: pointer; font-size: 16px; margin-right: 5px;" onclick="return confirm('¿Estás seguro de que quieres eliminar este docente del curso?');">Eliminar</button>
                                        </form><br>
                                        <form action="{{ route('solicitarcursos.show', ['solicitarcurso' => $solicitar->id]) }}" method="PUT">
                                            @csrf
                                            <button type="submit" style="background-color: #1B396A; color: white; padding: 5px 8px; text-decoration: none; border-radius: 5px; font-size: 16px; display: inline-block; margin-left: 5px;" name="action" value="enseñar" href="">Ver detalles</button>
                                        </form><br>
                                    </td>
                                </tr>
                            </a>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


</x-appAdmin-layout>
