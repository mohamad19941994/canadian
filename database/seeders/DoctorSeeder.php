<?php

namespace Database\Seeders;

use App\Models\DoctorCategory;
use App\Models\Doctor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DoctorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //أسنان
        Doctor::create(['doctor_category_id'=> 1,
            'facebook'=>'https://www.facebook.com/Swanclinicsa/',
            'instagram'=>'https://www.instagram.com/swanclinicsa/',
            'twitter'=>'https://twitter.com/swanclinicsa',
            'image'=>'layla.png',
            'ar' => [
                'name' => 'د. ليلى الفقيه',
                'description' => '<ul>
<li>طب وجراحة الفم والأسنان</li>
<li>حاصلة على بكالوريوس طب وجراحة الاسنان جامعة جازان</li>
</ul>',
            ],
            'en' => [
                'name' => 'د / ليلى الفقيه',
                'description' => '<ul>
<li>طب وجراحة الفم والأسنان</li>
<li>حاصلة على بكالوريوس طب وجراحة الاسنان جامعة جازان</li>
</ul>',
            ],
        ]);
        Doctor::create(['doctor_category_id'=> 1,
            'facebook'=>'https://www.facebook.com/Swanclinicsa/',
            'instagram'=>'https://www.instagram.com/swanclinicsa/',
            'twitter'=>'https://twitter.com/swanclinicsa','image'=>'sondos.png',
            'ar' => ['name' => 'د- سندس التويجري','description' => '<ul>
<li>طبيبة أسنان عامة</li>
<li>خريجة بمرتبة الشرف من جامعة الملك سعود بن عبدالعزيز للعلوم الصحية</li>
<li>خبرات تدريبية في عدة مستشفيات</li>
</ul>',
            ],
            'en' => ['name' => 'د- سندس التويجري','description' => '<ul>
<li>طبيبة أسنان عامة</li>
<li>خريجة بمرتبة الشرف من جامعة الملك سعود بن عبدالعزيز للعلوم الصحية</li>
<li>خبرات تدريبية في عدة مستشفيات</li>
</ul>',
            ],
        ]);
        Doctor::create(['doctor_category_id'=> 1,
            'facebook'=>'https://www.facebook.com/Swanclinicsa/',
            'instagram'=>'https://www.instagram.com/swanclinicsa/',
            'twitter'=>'https://twitter.com/swanclinicsa','image'=>'safaa.png',
            'ar' => ['name' => 'د. صفاء الهنداوي','description' => '<ul>
<li>أخصائية تقويم أسنان</li>
<li>حاصلة على ماجستير طب وتقويم الأسنان جامعة حلب</li>
<li>حاصلة على شهادة من شركة 3M في الزرعات التقويمية</li>
<li>حاصلة على شهادة من شركة انفزالاين للتقويم الشفاف</li>
<li>خبرة أكثر من 12 سنة في الاختصاص</li>
</ul>',
            ],
            'en' => ['name' => 'د. صفاء الهنداوي','description' => '<ul>
<li>أخصائية تقويم أسنان</li>
<li>حاصلة على ماجستير طب وتقويم الأسنان جامعة حلب</li>
<li>حاصلة على شهادة من شركة 3M في الزرعات التقويمية</li>
<li>حاصلة على شهادة من شركة انفزالاين للتقويم الشفاف</li>
<li>خبرة أكثر من 12 سنة في الاختصاص</li>
</ul>',
            ],
        ]);
        Doctor::create(['doctor_category_id'=> 1,
            'facebook'=>'https://www.facebook.com/Swanclinicsa/',
            'instagram'=>'https://www.instagram.com/swanclinicsa/',
            'twitter'=>'https://twitter.com/swanclinicsa','image'=>'bdriya.jpg',
            'ar' => ['name' => 'د. بدريه ايمن','description' => '<ul>
<li>طب وجراحة الفم والأسنان</li>
<li>حاصلة على بكالوريوس طب وجراحة الاسنان جامعة العلوم الطبية والتطبيقية والاجتماعية في اليمن</li>
<li>حاصلة على الامتياز من جامعة عين شمس في مصر</li>
<li>حاصلة على دبلوم عالي من أكاديمية BAIRD لطب وتجميل الاسنان</li>
</ul>',
            ],
            'en' => ['name' => 'د. بدريه ايمن','description' => '<ul>
<li>طب وجراحة الفم والأسنان</li>
<li>حاصلة على بكالوريوس طب وجراحة الاسنان جامعة العلوم الطبية والتطبيقية والاجتماعية في اليمن</li>
<li>حاصلة على الامتياز من جامعة عين شمس في مصر</li>
<li>حاصلة على دبلوم عالي من أكاديمية BAIRD لطب وتجميل الاسنان</li>
</ul>',
            ],
        ]);
        Doctor::create(['doctor_category_id'=> 1,
            'facebook'=>'https://www.facebook.com/Swanclinicsa/',
            'instagram'=>'https://www.instagram.com/swanclinicsa/',
            'twitter'=>'https://twitter.com/swanclinicsa','image'=>'ahmad_amir.png',
            'ar' => ['name' => 'د. أحمد أمير','description' => '<ul>
<li>طبيب أسنان عام</li>
<li>حاصل على بكالوريوس طب وجراحة أسنان جامعة مصر للعلوم والتكنولوجيا</li>
<li>حاصل على دورات في تصميم الابتسامة ( DSD )</li>
<li>خبرة في معالجة الأسنان والحشوات التجميلية والتركيبات.</li>
</ul>',
            ],
            'en' => ['name' => 'د. أحمد أمير','description' => '<ul>
<li>طبيب أسنان عام</li>
<li>حاصل على بكالوريوس طب وجراحة أسنان جامعة مصر للعلوم والتكنولوجيا</li>
<li>حاصل على دورات في تصميم الابتسامة ( DSD )</li>
<li>خبرة في معالجة الأسنان والحشوات التجميلية والتركيبات.</li>
</ul>',
            ],
        ]);
        //جراحات التجميل
        Doctor::create(['doctor_category_id'=> 2,
            'facebook'=>'https://www.facebook.com/Swanclinicsa/',
            'instagram'=>'https://www.instagram.com/swanclinicsa/',
            'twitter'=>'https://twitter.com/swanclinicsa',
            'image'=>'halit.png',
            'ar' => ['name' => 'د. خالد فقيه','description' => '<ul>
<li>استشاري الجراحات الجلدية التجميلية</li>
<li>حاصل على البورد والزمالة الكندية في جراحة التجميل</li>
<li>عضو في الجمعية الامريكية في جراحة التجميل</li>
<li>استشاري جراحة التجميل والترميم في مستشفى الملك فيصل التخصصي ومركز الابحاث سابقا</li>
<li>خبرة أكثر من 20 سنه في الجراحات التجميلية&nbsp;</li>
</ul>',
            ],
            'en' => ['name' => 'د. خالد فقيه','description' => '<ul>
<li>استشاري الجراحات الجلدية التجميلية</li>
<li>حاصل على البورد والزمالة الكندية في جراحة التجميل</li>
<li>عضو في الجمعية الامريكية في جراحة التجميل</li>
<li>استشاري جراحة التجميل والترميم في مستشفى الملك فيصل التخصصي ومركز الابحاث سابقا</li>
<li>خبرة أكثر من 20 سنه في الجراحات التجميلية&nbsp;</li>
</ul>',
            ],
        ]);
        //dermatologist(جلدية)
        Doctor::create(['doctor_category_id'=> 3,
            'facebook'=>'https://www.facebook.com/Swanclinicsa/',
            'instagram'=>'https://www.instagram.com/swanclinicsa/',
            'twitter'=>'https://twitter.com/swanclinicsa',
            'image'=>'hossam.png',
            'ar' => ['name' => 'د. حسام الدين','description' => '<ul>
<li>أخصائي جلدية</li>
<li>ماجستير في اختصاص الجلدية جامعة الاسكندرية</li>
<li>عضو وزميل في جامعة هارفرد الامريكية</li>
<li>خبرة أكثر من 25 سنة في مجال الجلدية والحقن التجميلي</li>
</ul>',
            ],
            'en' => ['name' => 'د. حسام الدين','description' => '<ul>
<li>أخصائي جلدية</li>
<li>ماجستير في اختصاص الجلدية جامعة الاسكندرية</li>
<li>عضو وزميل في جامعة هارفرد الامريكية</li>
<li>خبرة أكثر من 25 سنة في مجال الجلدية والحقن التجميلي</li>
</ul>',
            ],
        ]);
        Doctor::create(['doctor_category_id'=> 5,
            'facebook'=>'https://www.facebook.com/Swanclinicsa/',
            'instagram'=>'https://www.instagram.com/swanclinicsa/',
            'twitter'=>'https://twitter.com/swanclinicsa',
            'image'=>'shirin.jpeg',
            'ar' => ['name' => 'أ. شيرين السباعي','description' => '<ul>
<li>اخصائية بشرة حاصلة على تدريب في جهاز الهيدرافيشال وجهاز الهيدراتاش</li>
<li>حاصلة على بكالوريوس التمريض</li>
<li>دبلوم ادارة مستشفيات كامبردج</li>
<li>حاصله على تدريب في اجهزة الليزر ( الجنتل والاسبكترا ودويتو والديكا )</li>
</ul>',
            ],
            'en' => ['name' => 'أ. شيرين السباعي','description' => '<ul>
<li>اخصائية بشرة حاصلة على تدريب في جهاز الهيدرافيشال وجهاز الهيدراتاش</li>
<li>حاصلة على بكالوريوس التمريض</li>
<li>دبلوم ادارة مستشفيات كامبردج</li>
<li>حاصله على تدريب في اجهزة الليزر ( الجنتل والاسبكترا ودويتو والديكا )</li>
</ul>',
            ],
        ]);
        //الدايت واللايف ستايل
        Doctor::create(['doctor_category_id'=> 4,
            'facebook'=>'https://www.facebook.com/Swanclinicsa/',
            'instagram'=>'https://www.instagram.com/swanclinicsa/',
            'twitter'=>'https://twitter.com/swanclinicsa',
            'image'=>'mai.webp',
            'ar' => ['name' => 'أ. مي القاسم','description' => '<ul>
<li>أخصائية تغذية علاجية</li>
<li>بكالوريوس بالتغذية العلاجية من كلية العلوم الطبية التطبيقية من جامعة الملك سعود بن عبدالعزيز للعلوم الصحية بالحرس الوطني 2017</li>
<li>حاصلة على الامتيازفي مجال التغذية العلاجية في مستشفى الملك عبدالله التخصصي للاطفال ومدينة الملك عبد العزيز الطبية في الحرس الوطني</li>
<li>حاصلة دبلوم في health and nutrition life coach from Udemy academy in Francisco 2021</li>
<li>خبرة 4 سنوات في مجال التغذية والتجميل 2018</li>
<li>خبرة 3 في مجال صحة الهرمونات وتأثيرها على الصحة والجمال والوزن 2019</li>
<li>خبرة في مجال الرياضة والتغذية</li>
<li>خبرة 3 سنوات في صقل القوام الغير جراحي</li>
</ul>',
            ],
            'en' => ['name' => 'أ. مي القاسم','description' => '<ul>
<li>أخصائية تغذية علاجية</li>
<li>بكالوريوس بالتغذية العلاجية من كلية العلوم الطبية التطبيقية من جامعة الملك سعود بن عبدالعزيز للعلوم الصحية بالحرس الوطني 2017</li>
<li>حاصلة على الامتيازفي مجال التغذية العلاجية في مستشفى الملك عبدالله التخصصي للاطفال ومدينة الملك عبد العزيز الطبية في الحرس الوطني</li>
<li>حاصلة دبلوم في health and nutrition life coach from Udemy academy in Francisco 2021</li>
<li>خبرة 4 سنوات في مجال التغذية والتجميل 2018</li>
<li>خبرة 3 في مجال صحة الهرمونات وتأثيرها على الصحة والجمال والوزن 2019</li>
<li>خبرة في مجال الرياضة والتغذية</li>
<li>خبرة 3 سنوات في صقل القوام الغير جراحي</li>
</ul>',
            ],
        ]);
        Doctor::create(['doctor_category_id'=> 4,
            'facebook'=>'https://www.facebook.com/Swanclinicsa/',
            'instagram'=>'https://www.instagram.com/swanclinicsa/',
            'twitter'=>'https://twitter.com/swanclinicsa',
            'image'=>'tasnim.jpg',
            'ar' => ['name' => 'أ. تسنيم العثمان','description' => '<ul>
<li>أخصائية تغذية علاجية</li>
<li>حاصلة على بكالوريوس العلوم الصحية في اختصاص التغذية &ndash; جامعة البعث</li>
<li>خبرة 7 سنوات في المجال الطبي</li>
</ul>',
            ],
            'en' => ['name' => 'نص مثال','description' => '<ul>
<li>أخصائية تغذية علاجية</li>
<li>حاصلة على بكالوريوس العلوم الصحية في اختصاص التغذية &ndash; جامعة البعث</li>
<li>خبرة 7 سنوات في المجال الطبي</li>
</ul>',
            ],
        ]);
        Doctor::create(['doctor_category_id'=> 4,
            'facebook'=>'https://www.facebook.com/Swanclinicsa/',
            'instagram'=>'https://www.instagram.com/swanclinicsa/',
            'twitter'=>'https://twitter.com/swanclinicsa',
            'image'=>'wafaa.png',
            'ar' => ['name' => 'أ. وفاء العتيبي','description' => '<ul>
<li>أخصائية التغذية العلاجية</li>
<li>حاصلة على شهادة البكاليروس مع مرتبة الشرف من جامعة الملك سعود</li>
<li>أكثر من ثلاث سنوات من الخبرة في التعامل مع حالات التغذية المرضية و التحكم بالوزن</li>
</ul>',
            ],
            'en' => ['name' => 'نص مثال','description' => '<ul>
<li>أخصائية التغذية العلاجية</li>
<li>حاصلة على شهادة البكاليروس مع مرتبة الشرف من جامعة الملك سعود</li>
<li>أكثر من ثلاث سنوات من الخبرة في التعامل مع حالات التغذية المرضية و التحكم بالوزن</li>
</ul>',
            ],
        ]);
    }
}
