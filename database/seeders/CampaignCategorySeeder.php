<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\CampaignCategory;

class CampaignCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CampaignCategory::create([
            'ar' => ['name' => 'الزكاة'],
            'en' => ['name' => 'الزكاة'],
            'tr' => ['name' => 'الزكاة'],
        ]);

        CampaignCategory::create([
            'ar' => ['name' => 'الصدقات'],
            'en' => ['name' => 'الصدقات'],
            'tr' => ['name' => 'الصدقات'],
        ]);

        CampaignCategory::create([
            'ar' => ['name' => 'المشاريع'],
            'en' => ['name' => 'المشاريع'],
            'tr' => ['name' => 'المشاريع'],
        ]);
    }
}
