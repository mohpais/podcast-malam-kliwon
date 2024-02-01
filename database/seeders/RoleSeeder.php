<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role;

use Cviebrock\EloquentSluggable\Services\SlugService;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roleData = [
            [
                'name' => 'Super Admin',
                'created_by' => 'System',
                'updated_by' => 'System'
            ],
            // [
            //     'name' => 'Admin Content',
            //     'created_by' => 'System',
            //     'updated_by' => 'System'
            // ],
            // [
            //     'name' => 'Admin User',
            //     'created_by' => 'System',
            //     'updated_by' => 'System'
            // ],
            // [
            //     'name' => 'Podcaster',
            //     'created_by' => 'System',
            //     'updated_by' => 'System'
            // ],
            // [
            //     'name' => 'Premium User',
            //     'created_by' => 'System',
            //     'updated_by' => 'System'
            // ],
            // [
            //     'name' => 'Ordinary User',
            //     'created_by' => 'System',
            //     'updated_by' => 'System'
            // ]
        ];

        foreach ($roleData as $role) {
            Role::create($role);
        }
    }
}
