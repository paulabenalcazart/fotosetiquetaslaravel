<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\TagSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run():void
    {
        $this->call([
            TagSeeder::class,
        ]);
    }
}
