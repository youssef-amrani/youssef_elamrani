<?php

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
        factory(App\Categorie::class, 15)->create();
        factory(App\Course::class, 15)->create();
        factory(App\image::class, 15)->create();
        
    }
}
