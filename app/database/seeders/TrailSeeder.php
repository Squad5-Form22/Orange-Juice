<?php

namespace Database\Seeders;

use App\Models\Trail;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $trails = [
            [
                'name' => 'ux',
                'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit.',
            ],
            [
                'name' => 'qa',
                'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit.',
            ],
            [
                'name' => 'developer',
                'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit.',
            ]
        ];

        foreach($trails as $trail) {
            Trail::create($trail);
        }
    }
}
