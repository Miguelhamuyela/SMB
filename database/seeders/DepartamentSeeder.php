<?php

namespace Database\Seeders;

use App\Models\Department;
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

        $department =
            [

                [
                    'department' => 'Departamento de Massificação, Inclusão e Conteúdo Digital',
                    'acronym' => 'DMICD'
                ],


            ];

        foreach ($department as $value) {
            Department::create($value);
        }
    }
}
