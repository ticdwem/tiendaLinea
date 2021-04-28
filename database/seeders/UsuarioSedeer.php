<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsuarioSedeer extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $usuario = new User();
       $usuario->name='mike';
       $usuario->email='correo@correo.com';
       $usuario->password=Hash::make('1234567890');
       $usuario->save();
    }
}
