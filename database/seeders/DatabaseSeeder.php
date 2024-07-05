<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // Memanggil
        $this->call([
            UserRolesTableSeeder::class,
            UsersTableSeeder::class,
        ]);
    }
}
