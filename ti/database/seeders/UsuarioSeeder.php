<?php

namespace Database\Seeders;

use App\Models\Usuario;
use Illuminate\Database\Seeder;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $usuario = new Usuario;
        $usuario->nombre = "Juan";
        $usuario->edad = 20;
        $usuario->peso = 78.5;
        $usuario->altura = 1.70;
        $usuario->correo = "juan99@gmail.com";
        $usuario->contrasena = "123";

        $usuario->save();
    }
}
