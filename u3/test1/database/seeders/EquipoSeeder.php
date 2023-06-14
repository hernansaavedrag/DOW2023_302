<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class EquipoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('equipos')->insert([
            ['nombre'=>'Colo Colo','entrenador'=>'Gustavo Quinteros','created_at'=>Carbon::now()],
            ['nombre'=>'Universidad Católica','entrenador'=>'Cristian Paolucci','created_at'=>Carbon::now()],
            ['nombre'=>'Universidad de Chile','entrenador'=>'Santiago Escobar','created_at'=>Carbon::now()],
            ['nombre'=>'Manchester City','entrenador'=>'Pep Guardiola','created_at'=>Carbon::now()],
            ['nombre'=>'Barcelona','entrenador'=>'Xavi Hernández','created_at'=>Carbon::now()],
            ['nombre'=>'Real Madrid','entrenador'=>'Carlo Ancelotti','created_at'=>Carbon::now()],
            ['nombre'=>'Everton','entrenador'=>'Nelson Acosta','created_at'=>Carbon::now()],
        ]);
    }
}
