<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Contact;
use App\Models\Category;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([ CategorySeeder::class]);

        // \App\Models\User::factory(10)->create();
        Contact::factory(35)->create();

        
    }
}
