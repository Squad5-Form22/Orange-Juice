<?php

namespace Database\Seeders;

use App\Models\TrailToTopics;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrailToTopicsSeeder extends Seeder
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
                    'trail_id' => rand(1, 4),
                    'topic_id' => rand(1, 5)
                ],
                [
                    'trail_id' => rand(1, 4),
                    'topic_id' => rand(1, 5)
                ],
                [
                    'trail_id' => rand(1, 4),
                    'topic_id' => rand(1, 5)
                ],
                [
                    'trail_id' => rand(1, 4),
                    'topic_id' => rand(1, 5)
                ],
                [
                    'trail_id' => rand(1, 4),
                    'topic_id' => rand(1, 5)
                ],
                [
                    'trail_id' => rand(1, 4),
                    'topic_id' => rand(1, 5)
                ]
            ];

        foreach($relations as $relationships) {
            TrailToTopics::create($relationships);
        }
    }
}
