<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Authors;
use App\Models\News;
use App\Models\Rubrics;
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
        Rubrics::factory()->create(['parent_id'=>0,'name'=>'Main rubric']);
        Rubrics::factory(5)->create();
        Authors::factory(5)->create();
        News::factory(10)->create();
    }
}
