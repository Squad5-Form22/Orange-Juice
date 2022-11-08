<?php

namespace Database\Seeders;

use App\Models\TopicToContents;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TopicToContentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $relations = [
            [
                'topic_id' => 1,
                'content_id' => 3
            ],
            [
                'topic_id' => 1,
                'content_id' => 4
            ],
            [
                'topic_id' => 2,
                'content_id' => 3
            ],
            [
                'topic_id' => 2,
                'content_id' => 1
            ],
            [
                'topic_id' => 3,
                'content_id' => 5
            ],
            [
                'topic_id' => 3,
                'content_id' => 1
            ]
            ];

        foreach($relations as $relationships) {
            TopicToContents::create($relationships);
        }
    }
}
