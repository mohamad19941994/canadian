<?php

namespace Database\Seeders;

use App\Models\ServiceCategory;
use App\Models\Service;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //dentistry
        Service::create(['icon' => 'icon-2.png', 'image'=> 'default2.png',
            'ar' => ['name' => 'قسم الأسنان',
                'name_slug' => 'قسم-الأسنان',
                'content' => 'قسم الأسنان',
                'description' => 'قسم الأسنان',
            ],
            'en' => ['name' => 'قسم الأسنان',
                'name_slug' => 'قسم-الأسنان',
                'content' => 'قسم الأسنان',
                'description' => 'قسم الأسنان',]]);
        //dermatophytes
        Service::create(['icon' => 'icon-2.png', 'image'=> 'default2.png',
            'ar' => ['name' => 'قسم الجلدية والتجميل',
                'name_slug' => 'قسم-الجلدية-والتجميل',
                'content' => 'قسم الجلدية والتجميل',
                'description' => 'قسم الجلدية والتجميل',
            ],
            'en' => ['name' => 'قسم الجلدية والتجميل',
                'name_slug' => 'قسم-الجلدية-والتجميل',
                'content' => 'قسم الجلدية والتجميل',
                'description' => 'قسم الجلدية والتجميل',]]);
        //nutrition
        Service::create(['icon' => 'icon-2.png', 'image'=> 'default2.png',
            'ar' => ['name' => 'قسم التغذية',
                'name_slug' => 'قسم-التغذية',
                'content' => 'قسم التغذية',
                'description' => 'قسم التغذية',
            ],
            'en' => ['name' => 'قسم التغذية',
                'name_slug' => 'قسم-التغذية',
                'content' => 'قسم التغذية',
                'description' => 'قسم التغذية',]]);
        //devices
        Service::create(['icon' => 'icon-2.png', 'image'=> 'default2.png',
            'ar' => ['name' => 'أجهزة المركز',
                'name_slug' => 'أجهزة-المركز',
                'content' => 'أجهزة المركز',
                'description' => 'أجهزة المركز',
            ],
            'en' => ['name' => 'أجهزة المركز',
                'name_slug' => 'أجهزة-المركز',
                'content' => 'أجهزة المركز',
                'description' => 'أجهزة المركز',]]);

    }
}
