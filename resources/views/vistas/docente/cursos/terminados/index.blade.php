<x-appDocente-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-200 leading-tight">
            {{ __('Cursos terminados') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class=" mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                    <table class="w-full text-sm text-left rtl:text-right text-gray-500">
                        <thead class="text-xm text-gray-700 bg-gray-50">
                            <tr>
                                <th scope="col" class="px-6 py-3 text-center">
                                    Nombre
                                </th>
                                <th scope="col" class="px-6 py-3 text-center">
                                    Instructor
                                </th>
                                <th scope="col" class="px-6 py-3 text-center">
                                    Departamento
                                </th>
                                <th scope="col" class="px-6 py-3 text-center">
                                    Periodo
                                </th>
                                <th scope="col" class="px-6 py-3 text-center">
                                    Acciones
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($cursosInscritos as $cursoInscrito)
                            <?php if($cursoInscrito->curso->estado == 'Terminado') {?>
                            <tr class="bg-white border-b">
                                <td class="text-center">{{ $cursoInscrito->curso->nombre }}</td>
                                <td class="text-center">{{ $cursoInscrito->curso->instructor }}</td>
                                <td class="text-center">{{ $cursoInscrito->curso->departamento }}</td>
                                <td class="text-center">{{ $cursoInscrito->curso->periodo }}</td>
                                <td class="text-center">
                                <a href="{{ route('cursos.show', ['curso' => $cursoInscrito->curso->id]) }} " style="background-color: #1B396A; color: white; padding: 10px 20px; text-decoration: none; border-radius: 5px; font-size: 16px; display: inline-block;">Ver detalles</a>
                                </td>
                            </tr>
                            <?php } ?>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-appDocente-layout>
