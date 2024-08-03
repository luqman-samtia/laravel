<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Employer;
use App\Models\JobListingModel;
// use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
       // User::factory(20)->create();
        JobListingModel::factory(20)->create();
        // Job::factory(20)->create();
    //    Employer::factory(20)->create();

        // $this->call([
        //     UserSeeder::class,
        //     PostSeeder::class,
        //     CommentSeeder::class,
        // ]);
    }
}
