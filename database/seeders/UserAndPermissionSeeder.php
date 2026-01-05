<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

use App\Models\User;

class UserAndPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissions = [
            'manage users',
            'manage roles',
            'manage permissions',
            'manage projects',
            'manage client reviews',
        ];

        foreach ($permissions as $permission) {
            Permission::firstOrCreate(['name' => $permission]);
        }

        $admin = Role::firstOrCreate(['name' => 'Admin']);
        Role::firstOrCreate(['name' => 'Developer']);
        $admin->syncPermissions($permissions);

        foreach ($this->teams() as $team) {
            $user = User::updateOrCreate(
                ['email' => $team['email']],
                [
                    'name' => $team['name'],
                    'designation' => $team['designation'],
                    'password' => $team['password'],
                ]
            );

            $user->assignRole($team['role']);
        }
    }

    protected function teams(): array
    {
        return [
            [
                'name' => 'Rajender Thakur',
                'email' => 'rajender.thakur@saasapps.com',
                'designation' => 'Founder & CEO',
                'password' => bcrypt('12345678'),
                'role' => 'Admin',
            ],
            [
                'name' => 'Ravi Singh',
                'email' => 'ravi.singh@saasapps.com',
                'designation' => 'CTO',
                'password' => bcrypt('12345678'),
                'role' => 'Admin',
            ],
            [
                'name' => 'Virender Thakur',
                'email' => 'virender.thakur@saasapps.com',
                'designation' => 'Project Manager',
                'password' => bcrypt('12345678'),
                'role' => 'Admin',
            ],
            [
                'name' => 'Mandeep Kumar',
                'email' => 'mandeep.kumar@saasapps.com',
                'designation' => 'Sr. Developer',
                'password' => bcrypt('12345678'),
                'role' => 'Developer',
            ],
            [
                'name' => 'Suraj',
                'email' => 'suraj@saasapps.com',
                'designation' => 'Sr. Developer',
                'password' => bcrypt('12345678'),
                'role' => 'Developer',
            ],
            [
                'name' => 'Nitesh',
                'email' => 'nitesh@saasapps.com',
                'designation' => 'Sr. Developer',
                'password' => bcrypt('12345678'),
                'role' => 'Developer',
            ],
            [
                'name' => 'Aman Yadav',
                'email' => 'aman.yadav@saasapps.com',
                'designation' => 'Sr. Developer',
                'password' => bcrypt('12345678'),
                'role' => 'Developer',
            ],
            [
                'name' => 'Sachin Thakur',
                'email' => 'sachin.thakur@saasapps.com',
                'designation' => 'Developer',
                'password' => bcrypt('12345678'),
                'role' => 'Developer',
            ],
            [
                'name' => 'Anshul Saini',
                'email' => 'anshul.saini@saasapps.com',
                'designation' => 'Developer',
                'password' => bcrypt('12345678'),
                'role' => 'Developer',
            ],
            [
                'name' => 'Tarun',
                'email' => 'tarun@saasapps.com',
                'designation' => 'Developer',
                'password' => bcrypt('12345678'),
                'role' => 'Developer',
            ],
            [
                'name' => 'Sanjeev Kumar',
                'email' => 'sanjeev.kumar@saasapps.com',
                'designation' => 'Developer',
                'password' => bcrypt('12345678'),
                'role' => 'Developer',
            ],
            [
                'name' => 'Akash Rana',
                'email' => 'akash.rana@saasapps.com',
                'designation' => 'Developer',
                'password' => bcrypt('12345678'),
                'role' => 'Developer',
            ],
            [
                'name' => 'Aditya',
                'email' => 'aditya@saasapps.com',
                'designation' => 'Developer',
                'password' => bcrypt('12345678'),
                'role' => 'Developer',
            ],
            [
                'name' => 'Atul Yadav',
                'email' => 'atul.yadav@saasapps.com',
                'designation' => 'Developer',
                'password' => bcrypt('12345678'),
                'role' => 'Developer',
            ],
            [
                'name' => 'Sandeep',
                'email' => 'sandeep@saasapps.com',
                'designation' => 'Jr. Developer',
                'password' => bcrypt('12345678'),
                'role' => 'Developer',
            ],
            [
                'name' => 'Mujammil',
                'email' => 'mujammil@saasapps.com',
                'designation' => 'Jr. Developer',
                'password' => bcrypt('12345678'),
                'role' => 'Developer',
            ],
            [
                'name' => 'Nitesh',
                'email' => 'nitesh@saasapps.com',
                'designation' => 'Jr. Developer',
                'password' => bcrypt('12345678'),
                'role' => 'Developer',
            ],
            [
                'name' => 'Daman',
                'email' => 'daman@saasapps.com',
                'designation' => 'Jr. Developer',
                'password' => bcrypt('12345678'),
                'role' => 'Developer',
            ]
        ];
    }
}
