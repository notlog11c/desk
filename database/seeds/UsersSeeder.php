<?php

use App\Role;
use App\User;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       // Role Admin
       $roleAdmin = Role::create([
        'name' => 'admin',
        'display_name' => 'Admin',
    ]);
    // Role Member
    $roleMember = Role::create([
        'name' => 'member',
        'display_name' => 'Member',
    ]);
    // Contoh user dengan Role
    $adminUser = User::create([
        'name' => 'Admin',
        'email' => 'admin@desk.com',
        'password' => bcrypt('123123'),
        
    ]);
    
    $adminUser->attachRole($roleAdmin);
    
    $memberUser = User::create([
        'name' => 'Member',
        'email' => 'member@gmail.com',
        'password' => bcrypt('qweqwe'),
        
    ]);
    
    $memberUser->attachRole($roleMember);
    }
}
