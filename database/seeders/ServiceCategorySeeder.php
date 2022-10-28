<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ServiceCategory;

class ServiceCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ServiceCategory::create(['ar' => ['name' => 'برمجة المواقع والتطبيقات'], 'en' => ['name' => 'برمجة المواقع والتطبيقات']]);
        ServiceCategory::create(['ar' => ['name' => 'التسويق الإلكتروني'], 'en' => ['name' => 'التسويق الإلكتروني']]);
        ServiceCategory::create(['ar' => ['name' => 'تحسين محركات البحث SEO'], 'en' => ['name' => 'تحسين محركات البحث SEO']]);
        ServiceCategory::create(['ar' => ['name' => 'تصميم الغرافيك والموشن'], 'en' => ['name' => 'تصميم الغرافيك والموشن']]);
    }
}
