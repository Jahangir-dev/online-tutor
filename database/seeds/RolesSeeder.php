<?php

use Illuminate\Database\Seeder;
use App\Role;

class RolesSeeder extends Seeder
{
    public function run()
    {
        $admin = Role::create([
            'name' => 'Admin',
            'slug' => 'admin',
            'permissions' => [
                'admin' => true,
            ]
        ]);
        $student = Role::create([
            'name' => 'Student',
            'slug' => 'student',
            'permissions' => [
                'student' => true,
                
            ]
        ]);

         $tutor = Role::create([
            'name' => 'Tutor',
            'slug' => 'tutor',
            'permissions' => [
                'tutor' => true,
                
            ]
        ]);
    }
}