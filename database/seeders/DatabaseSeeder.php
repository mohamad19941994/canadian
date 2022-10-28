<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        /*$user = \App\Models\User::create([
            'name' => 'super_admin',
            'email' => "admin@progiom.com",
            'password' => bcrypt('password@'),
        ]);
        $user->attachRole('super_admin');*/

        $this->call([
            LaratrustSeeder::class,
            UsersTableSeeder::class,
            CategoriesTableSeeder::class,
            PageCategorySeeder::class,
            PageSeeder::class,
            ServiceCategorySeeder::class,
            ServiceSeeder::class,
            BlogSeeder::class,
            WorkSeeder::class,
            CustomerSeeder::class,
            SliderSeeder::class,
            DoctorCategorySeeder::class,
            DoctorServiceSeeder::class,
            DoctorSeeder::class,
            DoctorServiceRelationSeeder::class,
            VideoSeeder::class,
            PhotoSeeder::class,
            //LandingTableSeeder::class,

        ]);
    }
}
