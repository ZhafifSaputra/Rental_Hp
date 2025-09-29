<?php

namespace Database\Seeders;

use App\Models\User;
use GuzzleHttp\Promise\Create;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'username'  => 'admin',
            'email' => 'admin@example.com',
            'password' => bcrypt('1234'),
            'nama_lengkap' => 'zhafif',
            'kota' => 'metro',
            'role' => 'admin'
        ]);
    }
}
