<?php

namespace Database\Seeders;

use App\Models\Departament;
use Illuminate\Database\Seeder;

class DepartamentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $provincias =
        [


            ['department' => 'sigle'],
            ['department' => 'Huíla'],

        ];

        foreach ($provincias as $value) {
            Departament::create($value);}
    }
}
