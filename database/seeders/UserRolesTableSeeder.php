<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserRolesTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('user_roles')->insert([
            ['role' => 'admin'],
            ['role' => 'walisiswa'],
            ['role' => 'siswa'],
        ]);
    }
}
