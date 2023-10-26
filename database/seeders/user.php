<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class user extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        \App\Models\User::create([
            'role_id' =>1,
            'name'=>'Manager',
            'email' =>'boburasrorov2005@gmail.com',
            'password'=>Hash::make('B1234a1234'),
        ]);
        \App\Models\User::create([
            'role_id' =>2,
            'name'=>'Client',
            'email' =>'bobur@gmail.com',
            'password'=>Hash::make('bob'),
        ]);
//        User::class([
//
//        ]);
    }
}
