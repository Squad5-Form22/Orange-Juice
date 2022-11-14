<?php

namespace Database\Seeders;

use App\Models\Content;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $contents = [
            [
                'name' => 'LinkedIn',
                'author' => 'Luiza S.',
                'url' => 'https://google.com.br',
                'type' => 'artigo', 
                'topic_id' => 1,
                'theme' => 'Soft Skill',
                'duration' => '00:50:00'
            ],
            [
                'name' => 'Comunição',
                'author' => 'Carla Figueiredo',
                'url' => 'https://google.com.br',
                'type' => 'vídeo',
                'topic_id' => 1,
                'theme' => 'Soft Skill',
                'duration' => '00:20:00'
            ],
            [
                'name' => 'Gestão de tempo',
                'author' => 'Juju B.',
                'url' => 'https://google.com.br',
                'type' => 'artigo',
                'topic_id' => 1,
                'theme' => 'Soft Skill',
                'duration' => '00:50:00'
            ],
            [
                'name' => 'HTML5',
                'author' => 'Vitor B.',
                'url' => 'https://google.com.br',
                'type' => 'vídeo',
                'topic_id' => 2,
                'theme' => 'Desenvolvimento',
                'duration' => '02:00:00'
            ],
            [
                'name' => 'CSS3',
                'author' => 'Vitor B.',
                'url' => 'https://google.com.br',
                'type' => 'vídeo',
                'topic_id' => 2,
                'theme' => 'Desenvolvimento',
                'duration' => '00:50:00'
            ],
            [
                'name' => 'JS6',
                'author' => 'Marina S.',
                'url' => 'https://google.com.br',
                'type' => 'vídeo',
                'topic_id' => 2,
                'theme' => 'Desenvolvimento',
                'duration' => '01:30:00'
            ],
            [
                'name' => 'Docker',
                'author' => 'Vitor B.',
                'url' => 'https://google.com.br',
                'type' => '',
                'topic_id' => 3,
                'theme' => 'Desenvolvimento',
                'duration' => '01:10:00'
            ],
            [
                'name' => 'AWS',
                'author' => 'Marina S.',
                'url' => 'https://google.com.br',
                'type' => '',
                'topic_id' => 3,
                'theme' => 'Desenvolvimento',
                'duration' => '01:00:00'
            ],
            [
                'name' => 'Estrutura de dados',
                'author' => 'Marina S.',
                'url' => 'https://google.com.br',
                'type' => 'vídeo',
                'topic_id' => 3,
                'theme' => 'Desenvolvimento',
                'duration' => '00:55:00'
            ],
            [
                'name' => 'Estrevista com Stackholder',
                'author' => 'Julia Figueiredo',
                'url' => 'https://google.com.br',
                'type' => 'vídeo',
                'topic_id' => 4,
                'theme' => 'Projeto',
                'duration' => '00:30:00'
            ],
            [
                'name' => 'Matriz CSD',
                'author' => 'Carla Figueiredo',
                'url' => 'https://google.com.br',
                'type' => 'artigo',
                'topic_id' => 4,
                'theme' => 'Projeto',
                'duration' => '00:40:00'
            ],
            [
                'name' => 'Benchmark',
                'author' => 'Carla Figueiredo',
                'url' => 'https://google.com.br',
                'type' => 'artigo',
                'topic_id' => 4,
                'theme' => 'Projeto',
                'duration' => '00:50:00'
            ],
            [
                'name' => 'Figma',
                'author' => 'Lais F.',
                'url' => 'https://google.com.br',
                'type' => 'curso',
                'topic_id' => 5,
                'theme' => 'Projeto',
                'duration' => '01:00:00'
            ],
            [
                'name' => 'Miro',
                'author' => 'Lais F.',
                'url' => 'https://google.com.br',
                'type' => 'curso',
                'topic_id' => 5,
                'theme' => 'Projeto',
                'duration' => '01:00:00'
            ],
            [
                'name' => 'Canva',
                'author' => 'Pedro Cavalcante',
                'url' => 'https://google.com.br',
                'type' => 'curso',
                'topic_id' => 5,
                'theme' => 'Projeto',
                'duration' => '00:35:00'
            ],
            [
                'name' => 'Testes Unitários',
                'author' => 'João L.',
                'url' => 'https://google.com.br',
                'type' => 'artigo',
                'topic_id' => 6,
                'theme' => 'Desenvolvimento',
                'duration' => '00:40:00'
            ],
            [
                'name' => 'TDD',
                'author' => 'Victor H.',
                'url' => 'https://google.com.br',
                'type' => 'vídeo',
                'topic_id' => 6,
                'theme' => 'Desenvolvimento',
                'duration' => '01:05:00'
            ],
            [
                'name' => 'Metodologia Ágil',
                'author' => 'Carla Figueiredo',
                'url' => 'https://google.com.br',
                'type' => 'artigo',
                'topic_id' => 6,
                'theme' => 'Projeto',
                'duration' => '00:15:00'
            ],
            [
                'name' => 'Scrum',
                'author' => 'Marcos Rogério',
                'url' => 'https://google.com.br',
                'type' => 'vídeo',
                'topic_id' => 7,
                'theme' => 'Projeto',
                'duration' => '01:20:00'
            ],
            [
                'name' => 'Kanban',
                'author' => 'Lucas P.',
                'url' => 'https://google.com.br',
                'type' => 'artigo',
                'topic_id' => 7,
                'theme' => 'Projeto',
                'duration' => '00:30:00'
            ],
            [
                'name' => 'Grafana',
                'author' => 'Marcos Rogério',
                'url' => 'https://google.com.br',
                'type' => 'vídeo',
                'topic_id' => 7,
                'theme' => 'Desenvolvimento',
                'duration' => '01:00:00'
            ],
        ];

        foreach($contents as $content) {
            Content::create($content);
        }
    }
}
