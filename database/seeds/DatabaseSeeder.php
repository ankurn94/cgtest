<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */

    protected $seeders = [
        'PhotographerTableSeeder',
        'AlbumTableSeeder',
    ];

    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        
        foreach ($this->seeders as $seedClass)
        {
            $this->call($seedClass);
        }
    }
}
