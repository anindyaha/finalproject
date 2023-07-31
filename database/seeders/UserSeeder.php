<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();
        User::truncate();
        Schema::enableForeignkeyConstraints();

        User::insert([
            'username' => 'Joni',
<<<<<<< HEAD
            'slug' => 'Joni',
=======
>>>>>>> 8677526cd426ffce45cd3ac5b0174d4914a20555
            'password' => Hash::make('password'),
            'phone' => 25,
            'address' => 'Jl. fhsgfh',
            'role_id' => '1'
        ]);
    }
}