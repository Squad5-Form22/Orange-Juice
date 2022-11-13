<?php

namespace Database\Seeders;

use App\Models\ContentUser;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContentUserSeeder extends Seeder
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
                'content_id' => rand(1,6),
                'user_id' => rand(1,10),
            ],
            [
                'content_id' => rand(1,6),
                'user_id' => rand(1,10),
            ],
            [
                'content_id' => rand(1,6),
                'user_id' => rand(1,10),
            ],
            [
                'content_id' => rand(1,6),
                'user_id' => rand(1,10),
            ],
            [
                'content_id' => rand(1,6),
                'user_id' => rand(1,10),
            ],
        ];

        foreach($relations as $relationships) {
            ContentUser::create($relationships);
        }
    }
}
