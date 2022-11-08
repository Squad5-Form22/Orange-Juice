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
                'name' => 'linkedin ux',
                'url' => 'https://google.com/',
                'author' => 'fulano',
                'type' => 'vídeo',
            ],
            [
                'name' => 'curriculo matador',
                'url' => 'https://google.com/',
                'author' => 'fulano',
                'type' => 'vídeo',
            ],
            [
                'name' => 'HTML',
                'url' => 'https://google.com/',
                'author' => 'fulano',
                'type' => 'vídeo',
            ],
            [
                'name' => 'CSS',
                'url' => 'https://google.com/',
                'author' => 'Maria',
                'type' => 'vídeo',
            ],
            [
                'name' => 'tests unitários',
                'url' => 'https://google.com/',
                'author' => 'fulano',
                'type' => 'vídeo',
            ],
            [
                'name' => 'figma',
                'url' => 'https://google.com/',
                'author' => 'João Joaquin',
                'type' => 'vídeo',
            ],
        ];

        foreach($contents as $content) {
            Content::create($content);
        }
    }
}
