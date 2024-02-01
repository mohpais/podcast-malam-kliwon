<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userData = [
            [
                'fullname' => 'Super Admin',
                'username' => 'superadmin',
                'email' => 'super.admin@pmk.com',
                'password' => Hash::make('PMK@2024')
            ],
            // [
            //     'fullname' => 'Bimo Kusumo Yudo',
            //     'username' => 'bimoky',
            //     'email' => 'bimoky@pmk.com',
            //     'password' => Hash::make('PMK@2024')
            // ],
            // [
            //     'fullname' => 'Dhanu Riza',
            //     'username' => 'dhanu.riza',
            //     'email' => 'dhanu.riza@pmk.com',
            //     'password' => Hash::make('PMK@2024')
            // ],
            // [
            //     'fullname' => 'Gibran Senja Gumilang',
            //     'username' => 'gibran.senja',
            //     'email' => 'gibran.senja@pmk.com',
            //     'password' => Hash::make('PMK@2024')
            // ]
        ];

        foreach ($userData as $user) {
            User::create($user);
        }
    }
}
