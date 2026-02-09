<?php

namespace Database\Seeders;

use App\Models\FamiliaProfesional;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FamiliasProfesionalesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        FamiliaProfesional::truncate();
        FamiliaProfesional::factory(50)->create();


        /*
        FamiliaProfesional::truncate();
        foreach (self::$familiaProfesional as $familia) {
            FamiliaProfesional::insert([
                'codigo' => $familia['codigo'],
                'nombre' => $familia['nombre'],
            ]);
        }
       $this->command->info('¡Tabla familias_profesionales inicializada con datos!');
        */
    }


}
