<?php

namespace Database\Seeders;

use App\Models\CampaignCategory;
use App\Models\Campaign;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CampaignSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Campaign::create(['c_category_id'=>1,
            'image'=> 'campaign1.jpeg',
            'goal'=> 10000,
            'ar' => [
            'name' => 'زكاة المال',
            'name_slug' => 'زكاة المال',
            'meta_title' => 'زكاة المال',
            'meta_description' => 'زكاة المال',
            'keywords' => 'زكاة المال',
            'image_alt' => 'زكاة المال',
            'description' => 'زكاة المال'],
            'en' => [
                'name' => 'زكاة المال',
                'name_slug' => 'زكاة المال',
                'meta_title' => 'زكاة المال',
                'meta_description' => 'زكاة المال',
                'keywords' => 'زكاة المال',
                'image_alt' => 'زكاة المال',
                'description' => 'زكاة المال'],
            'tr' => [
                'name' => 'زكاة المال',
                'name_slug' => 'زكاة المال',
                'meta_title' => 'زكاة المال',
                'meta_description' => 'زكاة المال',
                'keywords' => 'زكاة المال',
                'image_alt' => 'زكاة المال',
                'description' => 'زكاة المال'],

            ]);

        Campaign::create(['c_category_id'=>2,
            'image'=> 'campaign.jpeg',
            'goal'=> 20000,
            'ar' => [
                'name' => 'توزيع اللحوم',
                'name_slug' => 'توزيع اللحوم',
                'meta_title' => 'توزيع اللحوم',
                'meta_description' => 'توزيع اللحوم',
                'keywords' => 'توزيع اللحوم',
                'image_alt' => 'توزيع اللحوم',
                'description' => 'توزيع اللحوم'],
            'en' => [
                'name' => 'توزيع اللحوم',
                'name_slug' => 'توزيع اللحوم',
                'meta_title' => 'توزيع اللحوم',
                'meta_description' => 'توزيع اللحوم',
                'keywords' => 'توزيع اللحوم',
                'image_alt' => 'توزيع اللحوم',
                'description' => 'توزيع اللحوم'],
            'tr' => [
                'name' => 'توزيع اللحوم',
                'name_slug' => 'توزيع اللحوم',
                'meta_title' => 'توزيع اللحوم',
                'meta_description' => 'توزيع اللحوم',
                'keywords' => 'توزيع اللحوم',
                'image_alt' => 'توزيع اللحوم',
                'description' => 'توزيع اللحوم'],

        ]);

        Campaign::create(['c_category_id'=>3,
            'image'=> 'campaign2.png',
            'goal'=> 30000,
            'ar' => [
                'name' => 'الإسناد القانوني للمعتقلين',
                'name_slug' => 'الإسناد القانوني للمعتقلين',
                'meta_title' => 'الإسناد القانوني للمعتقلين',
                'meta_description' => 'الإسناد القانوني للمعتقلين',
                'keywords' => 'الإسناد القانوني للمعتقلين',
                'image_alt' => 'الإسناد القانوني للمعتقلين',
                'description' => 'الإسناد القانوني للمعتقلين'],
            'en' => [
                'name' => 'الإسناد القانوني للمعتقلين',
                'name_slug' => 'الإسناد القانوني للمعتقلين',
                'meta_title' => 'الإسناد القانوني للمعتقلين',
                'meta_description' => 'الإسناد القانوني للمعتقلين',
                'keywords' => 'الإسناد القانوني للمعتقلين',
                'image_alt' => 'الإسناد القانوني للمعتقلين',
                'description' => 'الإسناد القانوني للمعتقلين'],
            'tr' => [
                'name' => 'الإسناد القانوني للمعتقلين',
                'name_slug' => 'الإسناد القانوني للمعتقلين',
                'meta_title' => 'الإسناد القانوني للمعتقلين',
                'meta_description' => 'الإسناد القانوني للمعتقلين',
                'keywords' => 'الإسناد القانوني للمعتقلين',
                'image_alt' => 'الإسناد القانوني للمعتقلين',
                'description' => 'الإسناد القانوني للمعتقلين'],

        ]);
    }
}
