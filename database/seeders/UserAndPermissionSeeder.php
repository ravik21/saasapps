<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Hash;
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
            'manage contact submissions',
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
                    'avatar' => $team['avatar'] ?? null,
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
                'email' => 'rajender.thakur@saasappsindia.com',
                'designation' => 'Founder & CEO',
                'password' => Hash::make('12345678'),
                'role' => 'Admin',
                'avatar' => null,
            ],
            [
                'name' => 'Satyam Singh',
                'email' => 'satyam.singh@saasappsindia.com',
                'designation' => 'Co-Founder & CTO',
                'password' => Hash::make('12345678'),
                'role' => 'Admin',
                'avatar' => null,
            ],
            [
                'name' => 'Mandeep Kumar',
                'email' => 'mandeep.kumar@saasappsindia.com',
                'designation' => 'Sr. Developer',
                'password' => Hash::make('12345678'),
                'role' => 'Developer',
                'avatar' => '/images/teams/mandeep-kumar.png',
            ],
            [
                'name' => 'Suraj Rawat',
                'email' => 'suraj.rawat@saasappsindia.com',
                'designation' => 'Sr. Developer',
                'password' => Hash::make('12345678'),
                'role' => 'Developer',
                'avatar' => '/images/teams/suraj-rawat.jpg',
            ],
            [
                'name' => 'Nitesh',
                'email' => 'nitesh@saasappsindia.com',
                'designation' => 'Sr. Developer',
                'password' => Hash::make('12345678'),
                'role' => 'Developer',
                'avatar' => '/images/teams/nitesh.png',
            ],
            [
                'name' => 'Aman Yadav',
                'email' => 'aman.yadav@saasappsindia.com',
                'designation' => 'Sr. Developer',
                'password' => Hash::make('12345678'),
                'role' => 'Developer',
                'avatar' => '/images/teams/aman-yadav.jpg',
            ],
            [
                'name' => 'Sachin Thakur',
                'email' => 'sachin.thakur@saasappsindia.com',
                'designation' => 'Developer',
                'avatar' => '/images/teams/sachin-thakur.jpeg',
                'password' => Hash::make('12345678'),
                'role' => 'Developer',
            ],
            [
                'name' => 'Anshul Saini',
                'email' => 'anshul.saini@saasappsindia.com',
                'designation' => 'Developer',
                'password' => Hash::make('12345678'),
                'role' => 'Developer',
                'avatar' => '/images/teams/anshul-saini.jpg',
            ],
            [
                'name' => 'Tarun Thakur',
                'email' => 'tarun.thakur@saasappsindia.com',
                'designation' => 'Developer',
                'password' => Hash::make('12345678'),
                'role' => 'Developer',
                'avatar' => '/images/teams/tarun-thakur.jpg',
            ],
            [
                'name' => 'Sanjeev Kumar',
                'email' => 'sanjeev.kumar@saasappsindia.com',
                'designation' => 'Developer',
                'password' => Hash::make('12345678'),
                'role' => 'Developer',
                'avatar' => '/images/teams/sanjeev-kumar.jpeg',
            ],
            [
                'name' => 'Akash Rana',
                'email' => 'akash.rana@saasappsindia.com',
                'designation' => 'Developer',
                'password' => Hash::make('12345678'),
                'role' => 'Developer',
                'avatar' => '/images/teams/akash-rana.png',
            ],
            [
                'name' => 'Aditya',
                'email' => 'aditya@saasappsindia.com',
                'designation' => 'Developer',
                'password' => Hash::make('12345678'),
                'role' => 'Developer',
                'avatar' => '/images/teams/aditya.png',
            ],
            [
                'name' => 'Atul Yadav',
                'email' => 'atul.yadav@saasappsindia.com',
                'designation' => 'Developer',
                'password' => Hash::make('12345678'),
                'role' => 'Developer',
                'avatar' => '/images/teams/atul-yadav.jpeg',
            ],
            [
                'name' => 'Sandeep',
                'email' => 'sandeep@saasappsindia.com',
                'designation' => 'Jr. Developer',
                'password' => Hash::make('12345678'),
                'role' => 'Developer',
                'avatar' => '/images/teams/sandeep.jpg',
            ],
            [
                'name' => 'Mujammil Malik',
                'email' => 'mujammil.malik@saasappsindia.com',
                'designation' => 'Jr. Developer',
                'password' => Hash::make('12345678'),
                'role' => 'Developer',
                'avatar' => '/images/teams/mujammil-malik.jpg',
            ],
            [
                'name' => 'Nitish Attri',
                'email' => 'nitish.attri@saasappsindia.com',
                'designation' => 'Jr. Developer',
                'password' => Hash::make('12345678'),
                'role' => 'Developer',
                'avatar' => '/images/teams/nitish-attri.jpg',
            ],
            [
                'name' => 'Daman',
                'email' => 'daman@saasappsindia.com',
                'designation' => 'Jr. Developer',
                'password' => Hash::make('12345678'),
                'role' => 'Developer',
                'avatar' => '/images/teams/daman.jpg',
            ],
            [
                'name' => 'Sagar Kashyap',
                'email' => 'sagar.kashyap@saasappsindia.com',
                'designation' => 'Jr. Developer',
                'password' => Hash::make('12345678'),
                'role' => 'Developer',
                'avatar' => '/images/teams/sagar-kashyap.jpeg',
            ],
            [
                'name' => 'Chandan',
                'email' => 'chandan@saasappsindia.com',
                'designation' => 'Jr. Developer',
                'password' => Hash::make('12345678'),
                'role' => 'Developer',
                'avatar' => '/images/teams/chandan.jpg',
            ]
        ];
    }
}
