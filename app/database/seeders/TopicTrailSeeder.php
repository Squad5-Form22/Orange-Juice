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
                'trail_id' => rand(1, 3),
                'topic_id' => rand(1, 4)
            ],
            [
                'trail_id' => rand(1, 3),
                'topic_id' => rand(1, 4)
            ],
            [
                'trail_id' => rand(1, 3),
                'topic_id' => rand(1, 4)
            ],
        ];

        foreach($relations as $relationships) {
            TopicTrail::create($relationships);
        }
    }
}
