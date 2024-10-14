<x-appAdmin-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white">
            {{ __('Editar curso') }}
        </h2>
    </x-slot>
    <div class="min-h-screen flex flex-col  items-center pt-6  bg-gray-100">
        <form action="{{ route('cursos.update', ['curso' => $curso]) }}" method="POST"
            class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
            @csrf
            @method('PUT')
            <!-- Nombre del curso -->
            <div class="mt-4">
                <x-input-label for="nombre" value="Nombre del curso" />
                <x-text-input id="nombre" name="nombre" type="text" class="mt-1 block w-full"
                    value="{{ $curso->nombre }}" />
            </div>
            <!-- Instructor -->
            <div class="mt-4">
                <x-input-label for="instructor" value="Instructor" />
                <x-text-input id="instructo" name="instructor" type="text" class="mt-1 block w-full"
                    value="{{ $curso->instructor }}" />
            </div>
            <!-- Departamento -->
            <div class="mt-4">
                <x-input-label for="departamento" value="Departamento" />
                <div class="mt-4">
                    <select name="departamento" id="departamento"
                        class="block mt-1 w-full border-black focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">
                        <option value="{{ $curso->departamento }}">{{ $curso->departamento }}</option>
                        <?php if($curso->departamento != "Ciencias Basicas") {?>
                        <option value="Ciencias Basicas">Ciencias Básicas</option>
                        <?php }
                        if($curso->departamento != "Ciencias Economico - Administrativas") {?>
                        <option value="Ciencias Economico - Administrativas">Ciencias Económico - Administrativa
                        </option>
                        <?php }
                        if($curso->departamento != "Sistema y computacion") {?>
                        <option value="Sistema y computacion">Sistemas y Computación</option>
                        <?php }
                        if($curso->departamento != "Industrial") {?>
                        <option value="Industrial">Industrial</option>
                        <?php }
                        if($curso->departamento != "Ingenierias") {?>
                        <option value="Ingenierias">Ingenierías</option>
                        <?php }
                        if($curso->departamento != "Agronomia") {?>
                        <option value="Agronomia">Agronomía</option>
                        <?php }?>

                    </select>
                </div>
            </div>
            <!-- Periodo -->
            <div class="mt-4">
                <x-input-label for="periodo" value="Periodo" />
                <select name="periodo" id="periodo"
                    class="block mt-1 w-full border-black focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm'">
                    <option value="{{ $curso->periodo }}">{{ $curso->periodo }}</option>
                    @foreach ($periodos as $periodo)
                        <?php if ($curso->periodo != $periodo->periodo) { ?>
                        <option value="{{ $periodo->periodo }}">{{ $periodo->periodo }}</option>
                        <?php } ?>
                    @endforeach
                </select>
            </div>
            <!-- Duracion -->
            <div class="mt-4">
                <x-input-label for="duracion" value="Duracion" />
                <x-text-input id="duracion" name="duracion" type="text" class="mt-1 block w-full"
                    value="{{ $curso->duracion }}" />
            </div>
            <!-- Horario -->
            <div class="mt-4">
                <x-input-label for="horario" value="Horario" />
                <x-text-input id="horario" name="horario" type="text" class="mt-1 block w-full"
                    value="{{ $curso->horario }}" />
            </div>
            <!-- Folio -->
            <div class="mt-4">
                <x-input-label for="folio" value="Folio" />
                <x-text-input id="folio" name="folio" type="text" class="mt-1 block w-full"
                    value="{{ $curso->folio }}" />
            </div>
            <!-- Modalidad -->
            <div class="mt-4">
                <x-input-label for="modalidad" value="Modalidad" />
                <div class="mt-4">
                    <select name="modalidad" id="modalidad"
                        class="block mt-1 w-full border-black focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">
                        <option value="{{ $curso->modalidad }}">{{ $curso->modalidad }}</option>
                        <?php if ($curso->modalidad != 'Presencial') { ?>
                        <option value="Presencial">Presencial</option>
                        <?php } if ($curso->modalidad != 'Linea') { ?>
                        <option value="Linea">En linea</option>
                        <?php }  if ($curso->modalidad != 'Mixta') { ?>
                        <option value="Mixta">Mixta</option>
                        <?php } ?>
                    </select>
                </div>
            </div>
            <!-- sede -->
            <div class="mt-4">
                <x-input-label for="sede" value="Sede" />
                <x-text-input id="sede" name="sede" type="text" class="mt-1 block w-full"
                    value="{{ $curso->sede }}" />
            </div>
            <!-- Limite de alumnos -->
            <div class="mt-4">
                <x-input-label for="limiteAlumnos" value="Limite de alumnos" />
                <x-text-input id="limiteAlumnos" name="limiteAlumnos" type="text" class="mt-1 block w-full"
                    value="{{ $curso->limiteAlumnos }}" />
            </div>
            <x-primary-button class="mt-4" name="action" value="editar">Actualizar</x-primary-button>
        </form>
    </div>
</x-appAdmin-layout>
