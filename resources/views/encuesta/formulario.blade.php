<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Encuesta de Satisfacción</title>
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">

    <!-- Contenedor principal del formulario -->
    <div class="w-full max-w-4xl bg-white p-8 rounded-lg shadow-lg">

        <h2 class="text-2xl font-bold text-gray-800 text-center mb-6">Encuesta para Participantes Inscritos</h2>

        <!-- Formulario -->
        <form action="{{ route('encuesta.guardar') }}" method="POST" class="space-y-6">
            @csrf

            <div class="space-y-6">
                <label class="block text-black-700 font-bold">Evalúa el evento</label>

                <!-- Tabla de evaluación -->
                <div class="overflow-x-auto">
                    <table class="w-full table-auto border-collapse border border-black-300">
                        <thead>
                            <tr class="bg-blue-200" style="background-color: #1B396A; color: white; padding: 10px 20px; text-decoration: none; border-radius: 5px; font-size: 16px;">
                                <th class="border border-gray-300 px-4 py-2 text-left"></th>
                                <th class="border border-gray-300 px-4 py-2 text-center">Totalmente de acuerdo</th>
                                <th class="border border-gray-300 px-4 py-2 text-center">Parcialmente de acuerdo</th>
                                <th class="border border-gray-300 px-4 py-2 text-center">Indiferente</th>
                                <th class="border border-gray-300 px-4 py-2 text-center">Parcialmente en desacuerdo</th>
                                <th class="border border-gray-300 px-4 py-2 text-center">Totalmente en desacuerdo</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="border border-gray-300 px-4 py-2">El evento cubrió sus expectativas</td>
                                <td class="border border-gray-300 text-center">
                                    <input type="radio" name="evento_expectativas" value="Totalmente de acuerdo" required>
                                </td>
                                <td class="border border-gray-300 text-center">
                                    <input type="radio" name="evento_expectativas" value="Parcialmente de acuerdo" required>
                                </td>
                                <td class="border border-gray-300 text-center">
                                    <input type="radio" name="evento_expectativas" value="Indiferente" required>
                                </td>
                                <td class="border border-gray-300 text-center">
                                    <input type="radio" name="evento_expectativas" value="Parcialmente en desacuerdo" required>
                                </td>
                                <td class="border border-gray-300 text-center">
                                    <input type="radio" name="evento_expectativas" value="Totalmente en desacuerdo" required>
                                </td>
                            </tr>
                            <tr>
                                <td class="border border-gray-300 px-4 py-2">Se cumplió con el objetivo y programa</td>
                                <td class="border border-gray-300 text-center">
                                    <input type="radio" name="evento_objetivo" value="Totalmente de acuerdo" required>
                                </td>
                                <td class="border border-gray-300 text-center">
                                    <input type="radio" name="evento_objetivo" value="Parcialmente de acuerdo" required>
                                </td>
                                <td class="border border-gray-300 text-center">
                                    <input type="radio" name="evento_objetivo" value="Indiferente" required>
                                </td>
                                <td class="border border-gray-300 text-center">
                                    <input type="radio" name="evento_objetivo" value="Parcialmente en desacuerdo" required>
                                </td>
                                <td class="border border-gray-300 text-center">
                                    <input type="radio" name="evento_objetivo" value="Totalmente en desacuerdo" required>
                                </td>
                            </tr>

                            <tr>
                                <td class="border border-gray-300 px-4 py-2">El instructor aclaró las dudas que se presentaron durante el curso</td>
                                <td class="border border-gray-300 text-center">
                                    <input type="radio" name="instructor_dudas" value="Totalmente de acuerdo" required>
                                </td>
                                <td class="border border-gray-300 text-center">
                                    <input type="radio" name="instructor_dudas" value="Parcialmente de acuerdo" required>
                                </td>
                                <td class="border border-gray-300 text-center">
                                    <input type="radio" name="instructor_dudas" value="Indiferente" required>
                                </td>
                                <td class="border border-gray-300 text-center">
                                    <input type="radio" name="instructor_dudas" value="Parcialmente en desacuerdo" required>
                                </td>
                                <td class="border border-gray-300 text-center">
                                    <input type="radio" name="instructor_dudas" value="Totalmente en desacuerdo" required>
                                </td>
                            </tr>

                            <tr>
                                <td class="border border-gray-300 px-4 py-2">Los contenidos del material estuvieron estructurados en forma lógica, clara y sencilla</td>
                                <td class="border border-gray-300 text-center">
                                    <input type="radio" name="contenidos_material" value="Totalmente de acuerdo" required>
                                </td>
                                <td class="border border-gray-300 text-center">
                                    <input type="radio" name="contenidos_material" value="Parcialmente de acuerdo" required>
                                </td>
                                <td class="border border-gray-300 text-center">
                                    <input type="radio" name="contenidos_material" value="Indiferente" required>
                                </td>
                                <td class="border border-gray-300 text-center">
                                    <input type="radio" name="contenidos_material" value="Parcialmente en desacuerdo" required>
                                </td>
                                <td class="border border-gray-300 text-center">
                                    <input type="radio" name="contenidos_material" value="Totalmente en desacuerdo" required>
                                </td>
                            </tr>

                            <tr>
                                <td class="border border-gray-300 px-4 py-2">Los contenidos del curso son útiles para su desempeño laboral</td>
                                <td class="border border-gray-300 text-center">
                                    <input type="radio" name="contenidos_curso" value="Totalmente de acuerdo" required>
                                </td>
                                <td class="border border-gray-300 text-center">
                                    <input type="radio" name="contenidos_curso" value="Parcialmente de acuerdo" required>
                                </td>
                                <td class="border border-gray-300 text-center">
                                    <input type="radio" name="contenidos_curso" value="Indiferente" required>
                                </td>
                                <td class="border border-gray-300 text-center">
                                    <input type="radio" name="contenidos_curso" value="Parcialmente en desacuerdo" required>
                                </td>
                                <td class="border border-gray-300 text-center">
                                    <input type="radio" name="contenidos_curso" value="Totalmente en desacuerdo" required>
                                </td>
                            </tr>

                            <tr>
                                <td class="border border-gray-300 px-4 py-2">Las condiciones físicas y/o virtuales fueron las adecuadas para el desarrollo del evento</td>
                                <td class="border border-gray-300 text-center">
                                    <input type="radio" name="condiciones_adecuadas" value="Totalmente de acuerdo" required>
                                </td>
                                <td class="border border-gray-300 text-center">
                                    <input type="radio" name="condiciones_adecuadas" value="Parcialmente de acuerdo" required>
                                </td>
                                <td class="border border-gray-300 text-center">
                                    <input type="radio" name="condiciones_adecuadas" value="Indiferente" required>
                                </td>
                                <td class="border border-gray-300 text-center">
                                    <input type="radio" name="condiciones_adecuadas" value="Parcialmente en desacuerdo" required>
                                </td>
                                <td class="border border-gray-300 text-center">
                                    <input type="radio" name="condiciones_adecuadas" value="Totalmente en desacuerdo" required>
                                </td>
                            </tr>

                            <tr>
                                <td class="border border-gray-300 px-4 py-2">El personal organizador realizó las actividades necesarias para el mejor desarrollo del evento</td>
                                <td class="border border-gray-300 text-center">
                                    <input type="radio" name="personal_organizador" value="Totalmente de acuerdo" required>
                                </td>
                                <td class="border border-gray-300 text-center">
                                    <input type="radio" name="personal_organizador" value="Parcialmente de acuerdo" required>
                                </td>
                                <td class="border border-gray-300 text-center">
                                    <input type="radio" name="personal_organizador" value="Indiferente" required>
                                </td>
                                <td class="border border-gray-300 text-center">
                                    <input type="radio" name="personal_organizador" value="Parcialmente en desacuerdo" required>
                                </td>
                                <td class="border border-gray-300 text-center">
                                    <input type="radio" name="personal_organizador" value="Totalmente en desacuerdo" required>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="space-y-6">
                <label class="block text-black-700 font-bold">Instructor</label>

            <div class="overflow-x-auto">
                <table class="w-full table-auto border-collapse border border-black-300">
                    <thead>
                        <tr class="bg-blue-200" style="background-color: #1B396A; color: white; padding: 10px 20px; text-decoration: none; border-radius: 5px; font-size: 16px;">
                            <th class="border border-gray-300 px-4 py-2 text-left"></th>
                            <th class="border border-gray-300 px-4 py-2 text-center">Totalmente de acuerdo</th>
                            <th class="border border-gray-300 px-4 py-2 text-center">Parcialmente de acuerdo</th>
                            <th class="border border-gray-300 px-4 py-2 text-center">Indiferente</th>
                            <th class="border border-gray-300 px-4 py-2 text-center">Parcialmente en desacuerdo</th>
                            <th class="border border-gray-300 px-4 py-2 text-center">Totalmente en desacuerdo</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="border border-gray-300 px-4 py-2">El instructor mostró habilidad para transmitir el contenido del curso</td>
                            <td class="border border-gray-300 text-center">
                                <input type="radio" name="instructor_habilidad" value="Totalmente de acuerdo" required>
                            </td>
                            <td class="border border-gray-300 text-center">
                                <input type="radio" name="instructor_habilidad" value="Parcialmente de acuerdo" required>
                            </td>
                            <td class="border border-gray-300 text-center">
                                <input type="radio" name="instructor_habilidad" value="Indiferente" required>
                            </td>
                            <td class="border border-gray-300 text-center">
                                <input type="radio" name="instructor_habilidad" value="Parcialmente en desacuerdo" required>
                            </td>
                            <td class="border border-gray-300 text-center">
                                <input type="radio" name="instructor_habilidad" value="Totalmente en desacuerdo" required>
                            </td>
                        </tr>
                        <tr>
                            <td class="border border-gray-300 px-4 py-2">El instructor expuso de manera clara y precisa el objetivo, el programa y criterios de evaluación del curso</td>
                            <td class="border border-gray-300 text-center">
                                <input type="radio" name="instructor_exposicion" value="Totalmente de acuerdo" required>
                            </td>
                            <td class="border border-gray-300 text-center">
                                <input type="radio" name="instructor_exposicion" value="Parcialmente de acuerdo" required>
                            </td>
                            <td class="border border-gray-300 text-center">
                                <input type="radio" name="instructor_exposicion" value="Indiferente" required>
                            </td>
                            <td class="border border-gray-300 text-center">
                                <input type="radio" name="instructor_exposicion" value="Parcialmente en desacuerdo" required>
                            </td>
                            <td class="border border-gray-300 text-center">
                                <input type="radio" name="instructor_exposicion" value="Totalmente en desacuerdo" required>
                            </td>
                        </tr>

                        <tr>
                            <td class="border border-gray-300 px-4 py-2">El instructor aclaró las dudas que se presentaron durante el curso</td>
                            <td class="border border-gray-300 text-center">
                                <input type="radio" name="instructor_aclara" value="Totalmente de acuerdo" required>
                            </td>
                            <td class="border border-gray-300 text-center">
                                <input type="radio" name="instructor_aclara" value="Parcialmente de acuerdo" required>
                            </td>
                            <td class="border border-gray-300 text-center">
                                <input type="radio" name="instructor_aclara" value="Indiferente" required>
                            </td>
                            <td class="border border-gray-300 text-center">
                                <input type="radio" name="instructor_aclara" value="Parcialmente en desacuerdo" required>
                            </td>
                            <td class="border border-gray-300 text-center">
                                <input type="radio" name="instructor_aclara" value="Totalmente en desacuerdo" required>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

                    <div class="space-y-6">
                        <label class="block text-black-700 font-bold">Desarrollo Profesional y/o Docente</label>

                    <div class="overflow-x-auto">
                        <table class="w-full table-auto border-collapse border border-black-300">
                            <thead>
                                <tr class="bg-blue-200" style="background-color: #1B396A; color: white; padding: 10px 20px; text-decoration: none; border-radius: 5px; font-size: 16px;">
                                    <th class="border border-gray-300 px-4 py-2 text-left"></th>
                                    <th class="border border-gray-300 px-4 py-2 text-center">Totalmente de acuerdo</th>
                                    <th class="border border-gray-300 px-4 py-2 text-center">Parcialmente de acuerdo</th>
                                    <th class="border border-gray-300 px-4 py-2 text-center">Indiferente</th>
                                    <th class="border border-gray-300 px-4 py-2 text-center">Parcialmente en desacuerdo</th>
                                    <th class="border border-gray-300 px-4 py-2 text-center">Totalmente en desacuerdo</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="border border-gray-300 px-4 py-2">Las competencias desarrolladas con el evento mejoran su desempeño docente y/o profesional</td>
                                    <td class="border border-gray-300 text-center">
                                        <input type="radio" name="competencias_desarrolladas" value="Totalmente de acuerdo" required>
                                    </td>
                                    <td class="border border-gray-300 text-center">
                                        <input type="radio" name="competencias_desarrolladas" value="Parcialmente de acuerdo" required>
                                    </td>
                                    <td class="border border-gray-300 text-center">
                                        <input type="radio" name="competencias_desarrolladas" value="Indiferente" required>
                                    </td>
                                    <td class="border border-gray-300 text-center">
                                        <input type="radio" name="competencias_desarrolladas" value="Parcialmente en desacuerdo" required>
                                    </td>
                                    <td class="border border-gray-300 text-center">
                                        <input type="radio" name="competencias_desarrolladas" value="Totalmente en desacuerdo" required>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="border border-gray-300 px-4 py-2">Las competencias adquiridas con el evento propician el trabajo colaborativo</td>
                                    <td class="border border-gray-300 text-center">
                                        <input type="radio" name="competencias_adquiridas" value="Totalmente de acuerdo" required>
                                    </td>
                                    <td class="border border-gray-300 text-center">
                                        <input type="radio" name="competencias_adquiridas" value="Parcialmente de acuerdo" required>
                                    </td>
                                    <td class="border border-gray-300 text-center">
                                        <input type="radio" name="competencias_adquiridas" value="Indiferente" required>
                                    </td>
                                    <td class="border border-gray-300 text-center">
                                        <input type="radio" name="competencias_adquiridas" value="Parcialmente en desacuerdo" required>
                                    </td>
                                    <td class="border border-gray-300 text-center">
                                        <input type="radio" name="competencias_adquiridas" value="Totalmente en desacuerdo" required>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="border border-gray-300 px-4 py-2">Las competencias adquiridas le permitirán mayor comprensión de sus funciones y responsabilidades en la institución</td>
                                    <td class="border border-gray-300 text-center">
                                        <input type="radio" name="competencias_comprension" value="Totalmente de acuerdo" required>
                                    </td>
                                    <td class="border border-gray-300 text-center">
                                        <input type="radio" name="competencias_comprension" value="Parcialmente de acuerdo" required>
                                    </td>
                                    <td class="border border-gray-300 text-center">
                                        <input type="radio" name="competencias_comprension" value="Indiferente" required>
                                    </td>
                                    <td class="border border-gray-300 text-center">
                                        <input type="radio" name="competencias_comprension" value="Parcialmente en desacuerdo" required>
                                    </td>
                                    <td class="border border-gray-300 text-center">
                                        <input type="radio" name="competencias_comprension" value="Totalmente en desacuerdo" required>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

            <div class="space-y-2">
                <label class="block text-gray-700 font-semibold">¿Participaste activamente durante el evento?</label>
                <div class="flex space-x-6">
                    <label class="flex items-center">
                        <input type="radio" name="participacion" value="Sí" required>
                        <span class="ml-2">Sí</span>
                    </label>
                    <label class="flex items-center">
                        <input type="radio" name="participacion" value="No" required>
                        <span class="ml-2">No</span>
                    </label>
                </div>
            </div>

            <div class="space-y-2">
                <label for="comentarios" class="block text-gray-700 font-semibold" style="background-color: #1B396A; color: white; padding: 10px 20px; text-decoration: none; border-radius: 5px; font-size: 16px;">Comentarios</label>
                <textarea id="comentarios" name="comentarios" rows="4" placeholder="Escribe tus comentarios aquí..." class="w-full p-3 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500" ></textarea>
            </div>

            <div class="text-center">
                <button type="submit" class="w-full py-3 px-6 bg-blue-500 text-white font-bold rounded-lg shadow-md hover:bg-blue-600 transition duration-300 ease-in-out" style="background-color: #1B396A; color: white; padding: 10px 20px; text-decoration: none; border-radius: 5px; font-size: 16px;">
                    Enviar
                </button>
            </div>
        </form>

    </div>

</body>
</html>
