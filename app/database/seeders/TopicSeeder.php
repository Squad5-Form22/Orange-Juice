<?php

namespace Database\Seeders;

use App\Models\Topic;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TopicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $topics = [
                [
                    'name' => 'Básico',
                ],
                [
                    'name' => 'Básico de desenvolvimento',
                ],
                [
                    'name' => 'Avançando no desenvolvimento',
                ],
                [
                    'name' => 'Básico de UX',
                ],
                [
                    'name' => 'Opcionais de UX',
                ],
                [
                    'name' => 'Básico de QA',
                ],
                [
                    'name' => 'Avançando no QA',
                ],
        ];

        foreach($topics as $topic) {
            Topic::create($topic);
        }
    }
}
