<?php

namespace Database\Seeders;

use App\Models\Topic;
use App\Models\TopicTrail;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TopicTrailSeeder extends Seeder
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
                'trail_id' => 1,
                'topic_id' => 1,
            ],
            [
                'trail_id' => 1,
                'topic_id' => 2,
            ],
            [
                'trail_id' => 1,
                'topic_id' => 3,
            ],
            [
                'trail_id' => 2,
                'topic_id' => 1,
            ],
            [
                'trail_id' => 2,
                'topic_id' => 4,
            ],
            [
                'trail_id' => 2,
                'topic_id' => 5,
            ],
            [
                'trail_id' => 3,
                'topic_id' => 1,
            ],
            [
                'trail_id' => 3,
                'topic_id' => 6,
            ],
            [
                'trail_id' => 3,
                'topic_id' => 7,
            ],
        ];

        foreach($relations as $relationships) {
            TopicTrail::create($relationships);
        }
    }
}
