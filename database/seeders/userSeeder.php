<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            ['email'=> 'admin@tecvalles.mx', 'name' => 'admin', 'password' => '12345678', 'departamento' => '', 'role' => 'admin'],
            ['email'=> 'jefe@tecvalles.mx','name' => 'jefe departamento', 'password' => '12345678', 'departamento' => 'Sistema y computacion', 'role' => 'jefedepartamento'],
            ['email'=> 'docente@tecvalles.mx','name' => 'docente', 'password' => '12345678', 'departamento' => 'Sistema y computacion', 'role' => 'docente'],
            ['email'=> 'anamaria@tecvalles.mx','name' => 'anamaria', 'password' => '12345678', 'departamento' => 'Sistema y computacion', 'role' => 'docente'],
            ['email'=> 'camacho@tecvalles.mx','name' => 'camacho', 'password' => '12345678', 'departamento' => 'Sistema y computacion', 'role' => 'docente'],
            ['email'=> 'jaimejesus@tecvalles.mx','name' => 'admin', 'password' => '12345678', 'departamento' => 'Sistema y computacion', 'role' => 'admin'],
            ['email'=> 'cesar@tecvalles.mx','name' => 'admin', 'password' => '12345678', 'departamento' => 'Ingenierias', 'role' => 'admin']
        ];

        foreach($users as $user){
            User::create($user);
        }

        $this->command->info('Usuarios creados');
    }

}
/*DEPARTAMENTOS
Ciencias Basicas
Ciencias Economico - Administrativas
Sistema y computacion
Industrial
Ingenierias
Agronomia
*/
/*ROLES
admin
jefedepartamento
docente
*/
