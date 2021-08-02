<?php

namespace Database\Seeders;

use Database\Factories\TitleFactory;
use Illuminate\Database\Seeder;
use App\Models\Title;

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
    }
}
