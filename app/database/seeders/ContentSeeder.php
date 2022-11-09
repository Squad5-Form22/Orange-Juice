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
                'type' => 'video', 
                // 'topic_id' => rand(1,5)
            ],
            [
                'name' => 'curriculo matador',
                'author' => 'fulano',
                'url' => 'https://google.com',
                'type' => 'video',
                // 'topic_id' => rand(1,5)
            ],
            [
                'name' => 'html',
                'author' => 'fulano',
                'url' => 'https://google.com',
                'type' => 'video',
                // 'topic_id' => rand(1,5)
            ],
            [
                'name' => 'css',
                'author' => 'fulano',
                'url' => 'https://google.com',
                'type' => 'video',
                // 'topic_id' => rand(1,5)
            ],
            [
                'name' => 'PHP',
                'author' => 'fulano',
                'url' => 'https://google.com',
                'type' => 'video',
                // 'topic_id' => rand(1,5)
            ],
            [
                'name' => 'Figma',
                'author' => 'fulano',
                'url' => 'https://google.com',
                'type' => 'video',
                // 'topic_id' => rand(1,5)
            ]
        ];

        foreach($contents as $content) {
            Content::create($content);
        }
    }
}
