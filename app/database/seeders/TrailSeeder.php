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
            ],
            [
                'name' => 'qa',
            ],
            [
                'name' => 'developer',
            ]
        ];

        foreach($trails as $trail) {
            Trail::create($trail);
        }
    }
}
