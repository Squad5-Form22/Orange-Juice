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
                    'name' => 'inicio',
                    // 'trail_id' => rand(1, 3)
                ],
                [
                    'name' => 'basico',
                    // 'trail_id' => rand(1, 3)
                ],
                [
                    'name' => 'basico developer',
                    // 'trail_id' => rand(1, 3)
                ],
                [
                    'name' => 'intermediario developer',
                    // 'trail_id' => rand(1, 3)
                ],
                [
                    'name' => 'basico ux',
                    // 'trail_id' => rand(1, 3)
                ],
                [
                    'name' => 'avançado qa',
                    // 'trail_id' => rand(1, 3)
                ],
        ];

        foreach($topics as $topic) {
            Topic::create($topic);
        }
    }
}
