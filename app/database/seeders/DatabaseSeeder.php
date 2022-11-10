<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\TopicTrail;
use App\Models\User;
// use App\Models\TrailToTopics;
// use App\Models\TopicToContents;
use Illuminate\Database\Seeder;
// use Illuminate\Support\Facades\DB;
// use Illuminate\Support\Facades\Hash;
// use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(TrailSeeder::class);
        $this->call(TopicSeeder::class);
        $this->call(ContentSeeder::class);
        User::factory(10)->create();
        $this->call(TopicTrailSeeder::class);
        // $this->call(TopicToContentsSeeder::class);
    }
}
