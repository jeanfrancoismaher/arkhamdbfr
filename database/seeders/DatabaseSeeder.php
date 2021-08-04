<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Title;
use App\Models\Set;
use Database\Factories\TitleFactory;
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
        Title::factory(10)->create();
        Category::factory(5)->create();
        Set::factory(3)->create();
    }
}
