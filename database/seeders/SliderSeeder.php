<?php

namespace Database\Seeders;

use App\Models\Slider;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Slider::create(['image' => 'slider1.jpeg','image_background' => 'background.jpg',
            'ar' => [
            'subhead' => 'مشروع الزكاة',
            'name' => 'مشروع الزكاة',
            'image_alt' => 'مشروع الزكاة',
            'button_name' => 'اتصل بنا',
            'button_url' => 'http://127.0.0.1:8000/ar',
            'description' => 'لمصارف الزكاة الشرعية'],
            'en' => [
                'subhead' => 'مشروع الزكاة',
                'name' => 'مشروع الزكاة',
                'image_alt' => 'مشروع الزكاة',
                'button_name' => 'اتصل بنا',
                'button_url' => 'http://127.0.0.1:8000/ar',
                'description' => 'لمصارف الزكاة الشرعية'],
            'tr' => [
                'subhead' => 'مشروع الزكاة',
                'name' => 'مشروع الزكاة',
                'image_alt' => 'مشروع الزكاة',
                'button_name' => 'اتصل بنا',
                'button_url' => 'http://127.0.0.1:8000/ar',
                'description' => 'لمصارف الزكاة الشرعية'],
            ]);

        Slider::create(['image' => 'slider2.jpeg','image_background' => 'background.jpg',
            'ar' => [
                'subhead' => 'مشروع بناء المساجد',
                'name' => 'مشروع بناء المساجد',
                'image_alt' => 'مشروع بناء المساجد',
                'button_name' => 'اتصل بنا',
                'button_url' => 'http://127.0.0.1:8000/ar',
                'description' => 'ساهم معنا'],
            'en' => [
                'subhead' => 'مشروع بناء المساجد',
                'name' => 'مشروع بناء المساجد',
                'image_alt' => 'مشروع بناء المساجد',
                'button_name' => 'اتصل بنا',
                'button_url' => 'http://127.0.0.1:8000/ar',
                'description' => 'ساهم معنا'],
            'tr' => [
                'subhead' => 'مشروع بناء المساجد',
                'name' => 'مشروع بناء المساجد',
                'image_alt' => 'مشروع بناء المساجد',
                'button_name' => 'اتصل بنا',
                'button_url' => 'http://127.0.0.1:8000/ar',
                'description' => 'ساهم معنا'],
        ]);
    }
}
