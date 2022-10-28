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
        Slider::create(['image' => 'slider1.png','image_background' => 'background.jpg','ar' => [
            'subhead' => 'فريق طبي متميز',
            'name' => 'تخصصات متنوعة في التجميل',
            'image_alt' => 'مجمع سوان التخصصي الطبي',
            'button_name' => 'اتصل بنا',
            'button_url' => 'http://127.0.0.1:8000/ar',
            'description' => 'للرجال والنساء ولكافة الفئات العمرية'],
            'en' => [
            'subhead' => 'DO YOU NEED A NEW',
            'name' => 'WEB DESIGN?',
            'image_alt' => 'مجمع سوان التخصصي الطبي',
            'button_name' => 'اتصل بنا',
            'button_url' => 'http://127.0.0.1:8000/ar',
            'description' => 'Check out our options and features'],
            ]);
        Slider::create(['image' => 'slider2.png','image_background' => 'background.jpg','ar' => [
            'subhead' => 'متابعة مشاكل التغذية',
            'name' => 'متابعة شهرية لحالات السمنة والنحافة وتحديد الحمية المناسبة',
            'image_alt' => 'مجمع سوان التخصصي الطبي',
            'button_name' => 'اتصل بنا',
            'button_url' => 'http://127.0.0.1:8000/ar',
            'description' => 'للرجال والنساء ولكافة الفئات العمرية'],
            'en' => [
                'subhead' => 'DO YOU NEED A NEW',
                'name' => 'WEB DESIGN?',
                'image_alt' => 'مجمع سوان التخصصي الطبي',
                'button_name' => 'اتصل بنا',
                'button_url' => 'http://127.0.0.1:8000/ar',
                'description' => 'Check out our options and features'],
        ]);
        Slider::create(['image' => 'slider3.png','image_background' => 'background.jpg','ar' => [
            'subhead' => 'تصميم الابتسامة وتجميل الأسنان',
            'name' => 'خبرات متعددة في إعادة تأهيل الأسنان بشكل كامل ',
            'image_alt' => 'مجمع سوان التخصصي الطبي',
            'button_name' => 'اتصل بنا',
            'button_url' => 'http://127.0.0.1:8000/ar',
            'description' => 'للرجال والنساء ولكافة الفئات العمرية'],
            'en' => [
                'subhead' => 'DO YOU NEED A NEW',
                'name' => 'WEB DESIGN?',
                'image_alt' => 'مجمع سوان التخصصي الطبي',
                'button_name' => 'اتصل بنا',
                'button_url' => 'http://127.0.0.1:8000/ar',
                'description' => 'Check out our options and features'],
        ]);

    }
}
