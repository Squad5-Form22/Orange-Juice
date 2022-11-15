<?php

namespace Database\Seeders;

use App\Models\Trail;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $trails = [
            [
                'name' => 'Fullstack Developer',
                'description' => 'O desenvolvedor full stack é aquele profissional multitarefa que cobre várias frentes na área de TI, pois pode trabalhar com diferentes linguagens. Habilitado a oferecer um suporte completo, esse especialista está muito valorizado no mercado.',
                'image_name' => 'fullstack-developer',
            ],
            [
                'name' => 'Ux Ui Design',
                'description' => 'É tarefa do UX designer conduzir a pesquisa de usuário, prototipagem e outros processos para garantir o máximo de usabilidade, utilidade e acessibilidade na experiência do usuário.',
                'image_name' => 'ux-ui-design',
            ],
            [
                'name' => 'Quality Assurance',
                'description' => 'As responsabilidades do Engenheiro de QA incluem projetar e implementar testes e depurar e definir ações corretivas. O profissional também deverá revisar requisitos de sistema e rastrear métricas de garantia de qualidade (por exemplo, densidades de defeitos e contagens de defeitos em aberto).',
                'image_name' => 'quality-assurance',
            ],
        ];

        foreach($trails as $trail) {
            Trail::create($trail);
        }
    }
}
