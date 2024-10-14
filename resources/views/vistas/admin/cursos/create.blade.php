<x-appAdmin-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white">
            {{ __('Registrar curso') }}
        </h2>
    </x-slot>
    <div class="min-h-screen flex flex-col  items-center pt-6  bg-gray-100">
        <form action="{{ route('cursos.store') }}" method="POST"
            class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
            @csrf
            <!-- Nombre del curso -->
            <div class="mt-4">
                <x-input-label for="nombre" value="Nombre del curso" />
                <x-text-input id="nombre" name="nombre" type="text" class="mt-1 block w-full"
                    value="{{ $solicitarcurso->nombre }}" />
                @error('nombre')
                    <p class="text-red-500">{{ $message }}</p>
                @enderror
            </div>
            <!-- Instructor -->
            <div class="mt-4">
                <x-input-label for="instructor" value="Instructor" />
                <x-text-input id="instructor" name="instructor" type="text" class="mt-1 block w-full"
                    value="{{ $solicitarcurso->instructor }}" />
                @error('instructor')
                    <p class="text-red-500">{{ $message }}</p>
                @enderror
            </div>
            <!-- Departamento -->
            <div class="mt-4">
                <x-input-label for="departamento" value="Departamento" />
                <div class="mt-4">
                    <select name="departamento" id="departamento"
                        class="block mt-1 w-full border-black focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">
                        <option value="{{ $solicitarcurso->departamento }}">{{ $solicitarcurso->departamento }}</option>
                        <?php if($solicitarcurso->departamento != "Ciencias Basicas") {?>
                        <option value="Ciencias Basicas">Ciencias Básicas</option>
                        <?php }
                        if($solicitarcurso->departamento != "Ciencias Economico - Administrativas") {?>
                        <option value="Ciencias Economico - Administrativas">Ciencias Económico - Administrativa
                        </option>
                        <?php }
                        if($solicitarcurso->departamento != "Sistema y computacion") {?>
                        <option value="Sistema y computacion">Sistemas y Computación</option>
                        <?php }
                        if($solicitarcurso->departamento != "Industrial") {?>
                        <option value="Industrial">Industrial</option>
                        <?php }
                        if($solicitarcurso->departamento != "Ingenierias") {?>
                        <option value="Ingenierias">Ingenierías</option>
                        <?php }
                        if($solicitarcurso->departamento != "Agronomia") {?>
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
                    @foreach ($periodos as $periodo)
                        <option value="{{ $periodo->periodo }}">{{ $periodo->periodo }}</option>
                    @endforeach
                </select>
            </div>
            <!-- Duracion -->
            <div class="mt-4">
                <x-input-label for="duracion" value="Duracion" />
                <x-text-input id="duracion" name="duracion" type="text" class="mt-1 block w-full" />
                @error('duracion')
                    <p class="text-red-500">{{ $message }}</p>
                @enderror
            </div>
            <!-- Horario -->
            <div class="mt-4">
                <x-input-label for="horario" value="Horario" />
                <x-text-input id="horario" name="horario" type="text" class="mt-1 block w-full" />
                @error('horario')
                    <p class="text-red-500">{{ $message }}</p>
                @enderror
            </div>
            <!-- Folio -->
            <div class="mt-4">
                <x-input-label for="folio" value="Folio" />
                <x-text-input id="folio" name="folio" type="text" class="mt-1 block w-full" />
                @error('folio')
                    <p class="text-red-500">{{ $message }}</p>
                @enderror
            </div>
            <!-- Modalidad -->
            <div class="mt-4">
                <x-input-label for="modalidad" value="Modalidad" />
                <div class="mt-4">
                    <select name="modalidad" id="modalidad"
                        class="block mt-1 w-full border-black focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">
                        <option value="Presencial">Presencial</option>
                        <option value="Linea">En linea</option>
                        <option value="Mixta">Mixta</option>
                    </select>
                </div>
            </div>
            <!-- sede -->
            <div class="mt-4">
                <x-input-label for="sede" value="Sede" />
                <x-text-input id="sede" name="sede" type="text" class="mt-1 block w-full" />
                @error('sede')
                    <p class="text-red-500">{{ $message }}</p>
                @enderror
            </div>
            <!-- Limite de alumnos -->
            <div class="mt-4">
                <x-input-label for="limiteAlumnos" value="Limite de alumnos" />
                <x-text-input id="limiteAlumnos" name="limiteAlumnos" type="text" class="mt-1 block w-full" />
                @error('limiteAlumnos')
                <p class="text-red-500">{{ $message }}</p>
            @enderror
            </div>
            <x-primary-button class="mt-4">Registrar</x-primary-button>
        </form>
    </div>
</x-appAdmin-layout>
