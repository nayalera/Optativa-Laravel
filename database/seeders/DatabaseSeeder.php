<?php

namespace Database\Seeders;

use App\Models\PublicStatus;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\Blog::factory(10)->create();
        $this->call(BlogCategoriesSeeder::class);
        $this->call(BlogSeeder::class);
        $this->call(PublicStatusSeeder::class);
        $this->call(OppCategoriesSeeder::class);
        $this->call(OpportunitySeeder::class);
    }
}
