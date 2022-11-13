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
                'author' => 'fulano',
                'url' => 'https://google.com',
                'type' => 'video', 
                'topic_id' => rand(1,5),
                'theme' => 'Migração de Carreira',
                'duration' => '00:00:05'
            ],
            [
                'name' => 'curriculo matador',
                'author' => 'fulano',
                'url' => 'https://google.com',
                'type' => 'video',
                'topic_id' => rand(1,5),
                'theme' => 'Migração de Carreira',
                'duration' => '00:20:00'
            ],
            [
                'name' => 'HTML',
                'author' => 'fulano',
                'url' => 'https://google.com',
                'type' => 'video',
                'topic_id' => rand(1,5),
                'theme' => 'Desenvolvimento',
                'duration' => '00:40:35'
            ],
            [
                'name' => 'CSS',
                'author' => 'fulano',
                'url' => 'https://google.com',
                'type' => 'video',
                'topic_id' => rand(1,5),
                'theme' => 'Desenvolvimento',
                'duration' => '02:00:00'
            ],
            [
                'name' => 'PHP',
                'author' => 'fulano',
                'url' => 'https://google.com',
                'type' => 'video',
                'topic_id' => rand(1,5),
                'theme' => 'Desenlvimento',
                'duration' => '01:00:00'
            ],
            [
                'name' => 'Figma',
                'author' => 'fulano',
                'url' => 'https://google.com',
                'type' => 'video',
                'topic_id' => rand(1,5),
                'theme' => 'UX Desing',
                'duration' => '01:30:00'
            ]
        ];

        foreach($contents as $content) {
            Content::create($content);
        }
    }
}
