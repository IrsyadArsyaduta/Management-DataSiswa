<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        // Hapus semua data sebelum menambahkan data baru
        DB::table('users')->truncate();

        // Cek apakah user admin sudah ada sebelum menyisipkan
        $adminExists = DB::table('users')->where('email', 'admin@example.com')->exists();

        if (!$adminExists) {
            // Seeding user admin
            DB::table('users')->insert([
                'name' => 'Admin',
                'email' => 'admin@example.com',
                'password' => Hash::make('password'),
                'user_role_id' => DB::table('user_roles')->where('role', 'admin')->first()->id,
                'nisn' => null,
                'kelas' => null,
                'keterangan' => null,
            ]);
        }

        $users = [
        [
            // Seeding user walisiswa
            'name' => 'Walisiswa',
            'email' => 'walisiswa@example.com',
            'password' => Hash::make('password'),
            'user_role_id' => DB::table('user_roles')->where('role', 'walisiswa')->first()->id,
            'nisn' => null,
            'kelas' => null,
            'keterangan' => null,
        ],
        [
            // Seeding user walisiswa
            'name' => 'Walisiswa1',
            'email' => 'walisiswa1@example.com',
            'password' => Hash::make('password'),
            'user_role_id' => DB::table('user_roles')->where('role', 'walisiswa')->first()->id,
            'nisn' => null,
            'kelas' => null,
            'keterangan' => null,
        ],
        [
            // Seeding user walisiswa
            'name' => 'Walisiswa2',
            'email' => 'walisiswa2@example.com',
            'password' => Hash::make('password'),
            'user_role_id' => DB::table('user_roles')->where('role', 'walisiswa')->first()->id,
            'nisn' => null,
            'kelas' => null,
            'keterangan' => null,
        ],
        [
            // Seeding user siswa
            'name' => 'Siswa',
            'email' => 'siswa@example.com',
            'password' => Hash::make('password'),
            'user_role_id' => DB::table('user_roles')->where('role', 'siswa')->first()->id,
            'nisn' => $this->generateRandomNISN(), // Contoh data yang tidak diisi saat login
            'kelas' => 'XI A',      // Contoh data yang tidak diisi saat login
            'keterangan' => 'Pelajar', // Contoh data yang tidak diisi saat login
       ],
       [
            // Seeding user siswa
            'name' => 'Siswa1',
            'email' => 'siswa1@example.com',
            'password' => Hash::make('password'),
            'user_role_id' => DB::table('user_roles')->where('role', 'siswa')->first()->id,
            'nisn' => $this->generateRandomNISN(), // Contoh data yang tidak diisi saat login
            'kelas' => 'XI B',      // Contoh data yang tidak diisi saat login
            'keterangan' => 'Pelajar', // Contoh data yang tidak diisi saat login
        ],
        [
            // Seeding user siswa
            'name' => 'Siswa2',
            'email' => 'siswa2@example.com',
            'password' => Hash::make('password'),
            'user_role_id' => DB::table('user_roles')->where('role', 'siswa')->first()->id,
            'nisn' => $this->generateRandomNISN(), // Contoh data yang tidak diisi saat login
            'kelas' => 'XI C',      // Contoh data yang tidak diisi saat login
            'keterangan' => 'Pelajar', // Contoh data yang tidak diisi saat login
        ],
        [
            // Seeding user siswa
            'name' => 'Siswa3',
            'email' => 'siswa3@example.com',
            'password' => Hash::make('password'),
            'user_role_id' => DB::table('user_roles')->where('role', 'siswa')->first()->id,
            'nisn' => $this->generateRandomNISN(), // Contoh data yang tidak diisi saat login
            'kelas' => 'XI D',      // Contoh data yang tidak diisi saat login
            'keterangan' => 'Pelajar', // Contoh data yang tidak diisi saat login
        ],
        [
            // Seeding user siswa
            'name' => 'Siswa4',
            'email' => 'siswa4@example.com',
            'password' => Hash::make('password'),
            'user_role_id' => DB::table('user_roles')->where('role', 'siswa')->first()->id,
            'nisn' =>$this->generateRandomNISN(), // Contoh data yang tidak diisi saat login
            'kelas' => 'X A',      // Contoh data yang tidak diisi saat login
            'keterangan' => 'Murid', // Contoh data yang tidak diisi saat login
        ],
        [
            // Seeding user siswa
            'name' => 'Siswa5',
            'email' => 'siswa5@example.com',
            'password' => Hash::make('password'),
            'user_role_id' => DB::table('user_roles')->where('role', 'siswa')->first()->id,
            'nisn' => $this->generateRandomNISN(), // Contoh data yang tidak diisi saat login
            'kelas' => 'X B',      // Contoh data yang tidak diisi saat login
            'keterangan' => 'Murid', // Contoh data yang tidak diisi saat login
        ],
        [
            // Seeding user siswa
            'name' => 'Siswa6',
            'email' => 'siswa6@example.com',
            'password' => Hash::make('password'),
            'user_role_id' => DB::table('user_roles')->where('role', 'siswa')->first()->id,
            'nisn' =>$this->generateRandomNISN(), // Contoh data yang tidak diisi saat login
            'kelas' => 'X C',      // Contoh data yang tidak diisi saat login
            'keterangan' => 'Murid', // Contoh data yang tidak diisi saat login
        ],
        [
        // Seeding user siswa
            'name' => 'Siswa7',
            'email' => 'siswa7@example.com',
            'password' => Hash::make('password'),
            'user_role_id' => DB::table('user_roles')->where('role', 'siswa')->first()->id,
            'nisn' => $this->generateRandomNISN(), // Contoh data yang tidak diisi saat login
            'kelas' => 'X D',      // Contoh data yang tidak diisi saat login
            'keterangan' => 'Murid', // Contoh data yang tidak diisi saat login
        ],
        [
            // Seeding user siswa
            'name' => 'Siswa8',
            'email' => 'siswa8@example.com',
            'password' => Hash::make('password'),
            'user_role_id' => DB::table('user_roles')->where('role', 'siswa')->first()->id,
            'nisn' => $this->generateRandomNISN(), // Contoh data yang tidak diisi saat login
            'kelas' => 'X E',      // Contoh data yang tidak diisi saat login
            'keterangan' => 'Murid', // Contoh data yang tidak diisi saat login
        ],
        [
            // Seeding user siswa
            'name' => 'Siswa9',
            'email' => 'siswa9@example.com',
            'password' => Hash::make('password'),
            'user_role_id' => DB::table('user_roles')->where('role', 'siswa')->first()->id,
            'nisn' => $this->generateRandomNISN(), // Contoh data yang tidak diisi saat login
            'kelas' => 'XII A',      // Contoh data yang tidak diisi saat login
            'keterangan' => 'Lulus', // Contoh data yang tidak diisi saat login
        ],
        [
            // Seeding user siswa
            'name' => 'Siswa10',
            'email' => 'siswa10@example.com',
            'password' => Hash::make('password'),
            'user_role_id' => DB::table('user_roles')->where('role', 'siswa')->first()->id,
            'nisn' => $this->generateRandomNISN(), // Contoh data yang tidak diisi saat login
            'kelas' => 'XII B',      // Contoh data yang tidak diisi saat login
            'keterangan' => 'Lulus', // Contoh data yang tidak diisi saat login
        ],
            ];

             DB::table('users')->insert($users);
        }
        
            private function generateRandomNISN()
            {
                return mt_rand(1000000000, 9999999999);
            }
}
