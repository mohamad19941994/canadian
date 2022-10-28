<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'Admin',
            'phone' => '1234',
            'email' => 'admin@admin.com',
            'password' => bcrypt('1234'),
        ]);

        $user->attachRole('super_admin');

        $user1 = User::create([
            'name' => 'super_admin',
            'phone' => '12345',
            'email' => 'mhmtslahyt68@gmail.com',
            'password' => bcrypt('1234'),
        ]);
        $user1->attachRole('user');
        /*$user = User::create([
            'name' => 'super_admin',
            'email' => 'admin@progiom.com',
            'password' => bcrypt('password@'),
        ]);
        $user1 = User::create([
            'name' => 'super_admin',
            'email' => 'admin@progdiom.com',
            'password' => bcrypt('password@'),
        ]);
        $user2 = User::create([
            'name' => 'super_admin',
            'email' => 'admin@progfiom.com',
            'password' => bcrypt('password@'),
        ]);
        $user3 = User::create([
            'name' => 'super_admin',
            'email' => 'admin@progigom.com',
            'password' => bcrypt('password@'),
        ]);*/

       /* $user->attachRole('super_admin');
        $user1->attachRole('admin');
        $user2->attachRole('admin');
        $user3->attachRole('admin');*/




    }//end of run

}//end of seeder
