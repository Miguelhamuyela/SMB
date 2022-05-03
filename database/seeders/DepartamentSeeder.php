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
                [
                    'department' => 'Departamento de Administração de Sistemas, Redes e Comunicações',
                    'acronym' => 'DASRC'
                ],
                [
                    'department' => 'Departamento de Gestão de Infra-Estruturas TecnoLógicas e Serviços Partilhados',
                    'acronym' => 'DGITSP'
                ],
                [
                    'department' => 'Departamento de Cibersegurança, Chaves Públicas e Carimbo do Tempo',
                    'acronym' => 'DCCPCT'
                ],
                [
                    'department' => 'Departamento de Apoio ao Director Geral',
                    'acronym' => 'DADG'
                ],
                [
                    'department' => 'Departamento de Administração e Serviços Gerais',
                    'acronym' => 'DASG'
                ],
                [
                    'department' => 'Departamento de Comunicação, Inovação, Tecnologia e Modernização dos Serviços',
                    'acronym' => 'DCITMS'
                ],

            ];

        foreach ($department as $value) {
            Department::create($value);
        }
    }
}
