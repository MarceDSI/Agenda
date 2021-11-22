<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LibroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('libros')->insert([
            'nombre'=> 'Programacion Orientada a Objetos',
            'autor'=>  'Luis Joyanes',
        ]);

        DB::table('libros')->insert([
            'nombre'=> 'Ingenieria de Software: un enfoque practico',
            'autor'=>  'Roger S. Pressman',
        ]);
    }
}
