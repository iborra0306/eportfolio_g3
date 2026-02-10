<?php

namespace Database\Seeders;

use App\Models\CicloFormativo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Factories;

class CiclosFormativosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CicloFormativo::truncate();
        CicloFormativo::factory(50)->create();

        $this->command->info('¡Tabla de CICLOS FORMATIVOS inicializada con datos!');
    }
}
