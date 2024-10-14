<x-appAdmin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white">
            {{ __('Periodos') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                    <table class="w-full text-sm text-left rtl:text-right text-gray-500">
                        <thead class="text-xm text-gray-700 bg-gray-50 ">
                            <tr>
                                <th scope="col" class="px-6 py-3 text-center"> <!-- Añade la clase text-center aquí -->
                                    ID
                                </th>
                                <th scope="col" class="px-6 py-3 text-center"> <!-- Añade la clase text-center aquí -->
                                    Periodo
                                </th>
                                <th scope="col" class="px-6 py-3 text-center"> <!-- Añade la clase text-center aquí -->
                                    Acciones
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($periodos as $periodo)
                            <tr class="bg-white border-b">
                                <td class="text-center">{{ $periodo->id }}</td> <!-- Añade la clase text-center aquí -->
                                <td class="text-center">{{ $periodo->periodo }}</td> <!-- Añade la clase text-center aquí -->
                                <td class="text-center">
                                    <form action="{{ route('periodos.destroy', $periodo->id) }}" method="POST" style="display: inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" style="background-color: #ff4c4c; color: white; border: none; padding: 10px 20px; border-radius: 5px; cursor: pointer; font-size: 16px;" onclick="return confirm('¿Estás seguro de que quieres eliminar este docente del curso?');">
                                            Eliminar
                                        </button>
                                    </form>

                                    <a href="{{route('periodos.show',$periodo)}}" style="background-color: #1B396A; color: white; padding: 10px 20px; text-decoration: none; border-radius: 5px; font-size: 16px; display: inline-block; margin-left: 5px;">
                                        Ver detalles
                                    </a>

                                    <a href="{{route('periodos.edit',$periodo)}}" style="background-color: #28a745; color: white; padding: 10px 20px; text-decoration: none; border-radius: 5px; font-size: 16px; display: inline-block; margin-left: 5px;">
                                        Editar
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</x-appAdmin-layout>
