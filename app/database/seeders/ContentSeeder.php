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
                'name' => 'linkedin',
                'author' => 'fulano',
                'url' => 'https://google.com',
                'type' => 'video'
            ],
            [
                'name' => 'curriculo matador',
                'author' => 'fulano',
                'url' => 'https://google.com',
                'type' => 'video'
            ],
            [
                'name' => 'html',
                'author' => 'fulano',
                'url' => 'https://google.com',
                'type' => 'video'
            ],
            [
                'name' => 'css',
                'author' => 'fulano',
                'url' => 'https://google.com',
                'type' => 'video'
            ],
            [
                'name' => 'PHP',
                'author' => 'fulano',
                'url' => 'https://google.com',
                'type' => 'video'
            ],
            [
                'name' => 'Figma',
                'author' => 'fulano',
                'url' => 'https://google.com',
                'type' => 'video'
            ]
        ];

        foreach($contents as $content) {
            Content::create($content);
        }
    }
}
