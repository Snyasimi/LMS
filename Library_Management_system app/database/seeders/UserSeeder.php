<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'User_id' => Str::ulid(),
            'FirstName' => 'Admin',
            'LastName' => 'admin',
            'email' => 'admin@gmail.com',
            'RegNo' => 'ICT/001/001',
            'Campus' => 'Nairobi',
            'Course' => 'Information technology',
            'is_admin' => true,
            'password' => bcrypt('admin123'),
        ]);


        for($i=0;$i<2;$i++)
        {
            DB::table('users')->insert([
                'User_id' => Str::ulid(),
                'FirstName' => 'User'.$i,
                'LastName' => 'User'.$i,
                'email' => 'user'.$i.'@gmail.com',
                'RegNo' => 'ICT/001/001',
                'Campus' => 'Nairobi',
                'Course' => 'Information technology',
                'is_admin' => false,
                'password' => bcrypt('password'),
            ]);
        }

    }
}
