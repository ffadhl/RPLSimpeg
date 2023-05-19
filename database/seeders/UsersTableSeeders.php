<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UsersTableSeeders extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = [
            [
                'name' => 'Administrator',
                'username' => 'admin',
                'password' => bcrypt("adminuser"),
                'level' => '1',
                'email' => 'admin@rosati.com'
            ],

            [
                'name' => 'Pimpinan',
                'username' => 'pimpinan',
                'password' => bcrypt("adminuser"),
                'level' => '1',
                'email' => 'pimpinan@rosati.com'
            ],

            [
                'name' => 'Kasir',
                'username' => 'kasir',
                'password' => bcrypt("adminuser"),
                'level' => '1',
                'email' => 'karyawan@rosati.com'
            ]
        ];

        foreach($user as $key => $value){
            User::create($value);
        }
    }
}