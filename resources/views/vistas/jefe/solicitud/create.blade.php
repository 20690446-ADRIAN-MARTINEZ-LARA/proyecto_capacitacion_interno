<x-appJefe-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white">
            {{ __('Solicitar curso') }}
        </h2>
    </x-slot>

    <div class="min-h-screen flex flex-col items-center pt-6  bg-gray-100">
        <form action="{{ route('solicitarcursos.store') }}" method="POST"
            class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
            @csrf
            <!-- Nombre del curso -->
            <div class="mt-4">
                <x-input-label for="nombre" value="Nombre del curso/taller" />
                <x-text-input id="nombre" name="nombre" type="text" class="mt-1 block w-full" />
                @error('nombre')
                    <p class="text-red-500">{{ $message }}</p>
                @enderror
            </div>
            <!-- Objetivo -->
            <div class="mt-4">
                <x-input-label for="objetivo" value="Objetivo del curso/taller" />
                <textarea id="objetivo" name="objetivo" rows="3" class="block mt-1 w-full border-black focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm"></textarea>
                @error('objetivo')
                    <p class="text-red-500">{{ $message }}</p>
                @enderror
            </div>
            <!-- Instructor -->
            <div class="mt-4">
                <x-input-label for="instructor" value="Instructor(es) propuesto(s)" />
                <x-text-input id="instructor" name="instructor" type="text" class="mt-1 block w-full" />
                @error('instructor')
                    <p class="text-red-500">{{ $message }}</p>
                @enderror
            </div>
            <!-- Numero aproximado de participantes -->
            <div class="mt-4">
                <x-input-label for="participantes" value="Número aproximado de participantes" />
                <x-text-input id="participantes" name="participantes" type="text" class="mt-1 block w-full" />
                @error('participantes')
                    <p class="text-red-500">{{ $message }}</p>
                @enderror
            </div>
            <!-- Prioridad -->
            <div class="mt-4">
                <x-input-label for="prioridad" value="Prioridad" />
                <div class="mt-4">
                    <select name="prioridad" id="prioridad"
                        class="block mt-1 w-full border-black focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">
                        <option value="Alta">Alta</option>
                        <option value="Media">Media</option>
                        <option value="Baja">Baja(Dentro de 12 o mas meses)</option>
                    </select>
                </div>
            </div>
            <!-- Origen de la necesidad de capacitación -->
            <div class="mt-4">
                <x-input-label for="origen" value="Origen de la necesidad de capacitación" />
                <div class="mt-4">
                    <select name="origen" id="origen"
                        class="block mt-1 w-full border-black focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">
                        <option value="Evaluación Docente">Evaluación docente</option>
                        <option value="Evaluación Departamental">Evaluación Departamental</option>
                        <option value="Programas de estudio">Programas de estudio(análisis en academias)</option>
                        <option value="Concentrado de capacitación">Concentrado de capacitación</option>
                        <option value="Necesidades institucionales">Necesidades institucionales</option>
                        <option value="Otro">Otro:</option>
                    </select>
                </div>
            </div>
            <!-- Requerimientos de la capacitación y/o Comentarios adicionales -->
            <div class="mt-4">
                <x-input-label for="requerimientos" value="Requerimientos de la capacitación y/o Comentarios adicionales" />
                <textarea id="requerimientos" name="requerimientos"rows="3" class="block mt-1 w-full border-black focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm"></textarea>
                @error('requerimientos')
                    <p class="text-red-500">{{ $message }}</p>
                @enderror
            </div>


            <x-primary-button class="mt-4">Registrar</x-primary-button>
        </form>
    </div>
</x-appJefe-layout>
