<x-appJefe-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white">
            {{ __('Mis solicitudes') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class=" mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                    <table class="w-full text-sm text-left rtl:text-right text-gray-500">
                        <thead class="text-xm text-gray-700 bg-gray-50">
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
                                    <td class="text-center">{{ $solicitar->prioridad }}</td>
                                    <td class="text-center">{{ $solicitar->origen }}</td>
                                    <td class="text-center">{{ $solicitar->requerimientos }}</td>
                                    <td class="text-center">
                                        <form action="{{ route('solicitarcursos.destroy', $solicitar->id) }}" method="POST" id="deleteForm">
                                            @csrf
                                            @method('DELETE')
                                            <button type="button" style="background-color: #ff4c4c; color: white; border: none; padding: 10px 20px; border-radius: 5px; cursor: pointer; font-size: 16px;" onclick="confirmDelete()">Eliminar</button>
                                        </form>

                                        <script>
                                        function confirmDelete() {
                                            if (confirm("¿Estás seguro de que quieres eliminar este curso?")) {
                                                document.getElementById('deleteForm').submit();
                                            }
                                        }
                                        </script>

                                    </td>
                                </tr>
                                </a>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
</x-appJefe-layout>
