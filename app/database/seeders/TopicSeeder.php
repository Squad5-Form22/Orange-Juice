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
                'name' => 'inicio',
                'name' => 'basico',
                'name' => 'basico developer',
                'name' => 'intermediario developer',
                'name' => 'basico ux',
                'name' => 'avançado qa',
        ];

        foreach($topics as $topic) {
            Topic::create($topic);
        }
    }
}
