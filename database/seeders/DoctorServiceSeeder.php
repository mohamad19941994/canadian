<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\DoctorService;

class DoctorServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // أسنان

        DoctorService::create([
            'doctor_category_id'=>1,

            'image'=>'doctor.png','ar' => [
                'name' => 'تنظيف الاسنان',
                'description' => '<h3 class="h3-xl blue-color">هذا النص هو مثال</h3>
<h4 class="h4-md blue-color">&nbsp;لنص يمكن أن يستبدل في نفس المساحة</h4>
<p class="p-lg">لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.<br class="line-break" />إذا كنت تحتاج إلى عدد أكبر من الفقرات يتيح لك مولد النص العربى زيادة عدد الفقرات كما تريد، النص لن يبدو مقسما ولا يحوي أخطاء لغوية، مولد النص العربى مفيد لمصممي المواقع على وجه الخصوص، حيث يحتاج العميل فى كثير من الأحيان أن يطلع على صورة حقيقية لتصميم الموقع.</p>
<p class="p-lg"><img class="img-fluid" src="../../../storage/tiny_images/o0Uuo4EXoTIXaA2SoP9hLfZk9bvZhGXmisYEAObz.jpg" width="1080" height="1080" /></p>',
                'reasons' => 'لكل الحالات',
            ],
            'en' => [
                'name' => 'نص مثال',
                'description' => 'نص مثال نص مثال نص مثال نص مثال',
                'reasons' => 'نص مثال',
            ],
        ]);
        DoctorService::create([
            'doctor_category_id'=>1,
            'image'=>'doctor.png','ar' => [
                'name' => 'تبييض الاسنان المنزلي',
                'description' => '<h3 class="h3-xl blue-color">هذا النص هو مثال</h3>
<h4 class="h4-md blue-color">&nbsp;لنص يمكن أن يستبدل في نفس المساحة</h4>
<p class="p-lg">لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.<br class="line-break" />إذا كنت تحتاج إلى عدد أكبر من الفقرات يتيح لك مولد النص العربى زيادة عدد الفقرات كما تريد، النص لن يبدو مقسما ولا يحوي أخطاء لغوية، مولد النص العربى مفيد لمصممي المواقع على وجه الخصوص، حيث يحتاج العميل فى كثير من الأحيان أن يطلع على صورة حقيقية لتصميم الموقع.</p>
<p class="p-lg"><img class="img-fluid" src="../../../storage/tiny_images/o0Uuo4EXoTIXaA2SoP9hLfZk9bvZhGXmisYEAObz.jpg" width="1080" height="1080" /></p>',
                'reasons' => 'اغلب الحالات',
            ],
            'en' => [
                'name' => 'نص مثال',
                'description' => 'نص مثال نص مثال نص مثال نص مثال',
                'reasons' => 'نص مثال',
            ],
        ]);
        DoctorService::create([
            'doctor_category_id'=>1,
            'image'=>'doctor.png','ar' => [
                'name' => 'تبييض الاسنان بالليزر',
                'description' => '<h3 class="h3-xl blue-color">هذا النص هو مثال</h3>
<h4 class="h4-md blue-color">&nbsp;لنص يمكن أن يستبدل في نفس المساحة</h4>
<p class="p-lg">لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.<br class="line-break" />إذا كنت تحتاج إلى عدد أكبر من الفقرات يتيح لك مولد النص العربى زيادة عدد الفقرات كما تريد، النص لن يبدو مقسما ولا يحوي أخطاء لغوية، مولد النص العربى مفيد لمصممي المواقع على وجه الخصوص، حيث يحتاج العميل فى كثير من الأحيان أن يطلع على صورة حقيقية لتصميم الموقع.</p>
<p class="p-lg"><img class="img-fluid" src="../../../storage/tiny_images/o0Uuo4EXoTIXaA2SoP9hLfZk9bvZhGXmisYEAObz.jpg" width="1080" height="1080" /></p>',
                'reasons' => 'لكل الحالات',
            ],
            'en' => [
                'name' => 'نص مثال',
                'description' => 'نص مثال نص مثال نص مثال نص مثال',
                'reasons' => 'نص مثال',
            ],
        ]);
        DoctorService::create([
            'doctor_category_id'=>1,
            'image'=>'doctor.png','ar' => [
                'name' => 'تركيبات او تلبيسات الاسنان',
                'description' => '<h3 class="h3-xl blue-color">هذا النص هو مثال</h3>
<h4 class="h4-md blue-color">&nbsp;لنص يمكن أن يستبدل في نفس المساحة</h4>
<p class="p-lg">لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.<br class="line-break" />إذا كنت تحتاج إلى عدد أكبر من الفقرات يتيح لك مولد النص العربى زيادة عدد الفقرات كما تريد، النص لن يبدو مقسما ولا يحوي أخطاء لغوية، مولد النص العربى مفيد لمصممي المواقع على وجه الخصوص، حيث يحتاج العميل فى كثير من الأحيان أن يطلع على صورة حقيقية لتصميم الموقع.</p>
<p class="p-lg"><img class="img-fluid" src="../../../storage/tiny_images/o0Uuo4EXoTIXaA2SoP9hLfZk9bvZhGXmisYEAObz.jpg" width="1080" height="1080" /></p>',
                'reasons' => 'لكل الحالات',
            ],
            'en' => [
                'name' => 'نص مثال',
                'description' => 'نص مثال نص مثال نص مثال نص مثال',
                'reasons' => 'نص مثال',
            ],
        ]);
        DoctorService::create([
            'doctor_category_id'=>1,
            'image'=>'doctor.png','ar' => [
                'name' => 'علاج عصب الاسنان',
                'description' => '<h3 class="h3-xl blue-color">هذا النص هو مثال</h3>
<h4 class="h4-md blue-color">&nbsp;لنص يمكن أن يستبدل في نفس المساحة</h4>
<p class="p-lg">لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.<br class="line-break" />إذا كنت تحتاج إلى عدد أكبر من الفقرات يتيح لك مولد النص العربى زيادة عدد الفقرات كما تريد، النص لن يبدو مقسما ولا يحوي أخطاء لغوية، مولد النص العربى مفيد لمصممي المواقع على وجه الخصوص، حيث يحتاج العميل فى كثير من الأحيان أن يطلع على صورة حقيقية لتصميم الموقع.</p>
<p class="p-lg"><img class="img-fluid" src="../../../storage/tiny_images/o0Uuo4EXoTIXaA2SoP9hLfZk9bvZhGXmisYEAObz.jpg" width="1080" height="1080" /></p>',
                'reasons' => 'لكل الحالات',
            ],
            'en' => [
                'name' => 'نص مثال',
                'description' => 'نص مثال نص مثال نص مثال نص مثال',
                'reasons' => 'نص مثال',
            ],
        ]);
        DoctorService::create([
            'doctor_category_id'=>1,
            'image'=>'doctor.png','ar' => [
                'name' => 'خلع الاسنان',
                'description' => '<h3 class="h3-xl blue-color">هذا النص هو مثال</h3>
<h4 class="h4-md blue-color">&nbsp;لنص يمكن أن يستبدل في نفس المساحة</h4>
<p class="p-lg">لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.<br class="line-break" />إذا كنت تحتاج إلى عدد أكبر من الفقرات يتيح لك مولد النص العربى زيادة عدد الفقرات كما تريد، النص لن يبدو مقسما ولا يحوي أخطاء لغوية، مولد النص العربى مفيد لمصممي المواقع على وجه الخصوص، حيث يحتاج العميل فى كثير من الأحيان أن يطلع على صورة حقيقية لتصميم الموقع.</p>
<p class="p-lg"><img class="img-fluid" src="../../../storage/tiny_images/o0Uuo4EXoTIXaA2SoP9hLfZk9bvZhGXmisYEAObz.jpg" width="1080" height="1080" /></p>',
                'reasons' => 'تقييم الدكتور',
            ],
            'en' => [
                'name' => 'نص مثال',
                'description' => 'نص مثال نص مثال نص مثال نص مثال',
                'reasons' => 'نص مثال',
            ],
        ]);
        DoctorService::create([
            'doctor_category_id'=>1,
            'image'=>'doctor.png','ar' => [
                'name' => 'توريد اللثه بالليزر',
                'description' => '<h3 class="h3-xl blue-color">هذا النص هو مثال</h3>
<h4 class="h4-md blue-color">&nbsp;لنص يمكن أن يستبدل في نفس المساحة</h4>
<p class="p-lg">لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.<br class="line-break" />إذا كنت تحتاج إلى عدد أكبر من الفقرات يتيح لك مولد النص العربى زيادة عدد الفقرات كما تريد، النص لن يبدو مقسما ولا يحوي أخطاء لغوية، مولد النص العربى مفيد لمصممي المواقع على وجه الخصوص، حيث يحتاج العميل فى كثير من الأحيان أن يطلع على صورة حقيقية لتصميم الموقع.</p>
<p class="p-lg"><img class="img-fluid" src="../../../storage/tiny_images/o0Uuo4EXoTIXaA2SoP9hLfZk9bvZhGXmisYEAObz.jpg" width="1080" height="1080" /></p>',
                'reasons' => 'تقييم الدكتور',
            ],
            'en' => [
                'name' => 'نص مثال',
                'description' => 'نص مثال نص مثال نص مثال نص مثال',
                'reasons' => 'نص مثال',
            ],
        ]);
        DoctorService::create([
            'doctor_category_id'=>1,
            'image'=>'doctor.png','ar' => [
                'name' => 'قص اللثه  بالليزر',
                'description' => '<h3 class="h3-xl blue-color">هذا النص هو مثال</h3>
<h4 class="h4-md blue-color">&nbsp;لنص يمكن أن يستبدل في نفس المساحة</h4>
<p class="p-lg">لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.<br class="line-break" />إذا كنت تحتاج إلى عدد أكبر من الفقرات يتيح لك مولد النص العربى زيادة عدد الفقرات كما تريد، النص لن يبدو مقسما ولا يحوي أخطاء لغوية، مولد النص العربى مفيد لمصممي المواقع على وجه الخصوص، حيث يحتاج العميل فى كثير من الأحيان أن يطلع على صورة حقيقية لتصميم الموقع.</p>
<p class="p-lg"><img class="img-fluid" src="../../../storage/tiny_images/o0Uuo4EXoTIXaA2SoP9hLfZk9bvZhGXmisYEAObz.jpg" width="1080" height="1080" /></p>',
                'reasons' => 'تقييم الدكتور',
            ],
            'en' => [
                'name' => 'نص مثال',
                'description' => 'نص مثال نص مثال نص مثال نص مثال',
                'reasons' => 'نص مثال',
            ],
        ]);
        DoctorService::create([
            'doctor_category_id'=>1,
            'image'=>'doctor.png','ar' => [
                'name' => 'علاج تسوسات الاسنان',
                'description' => '<h3 class="h3-xl blue-color">هذا النص هو مثال</h3>
<h4 class="h4-md blue-color">&nbsp;لنص يمكن أن يستبدل في نفس المساحة</h4>
<p class="p-lg">لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.<br class="line-break" />إذا كنت تحتاج إلى عدد أكبر من الفقرات يتيح لك مولد النص العربى زيادة عدد الفقرات كما تريد، النص لن يبدو مقسما ولا يحوي أخطاء لغوية، مولد النص العربى مفيد لمصممي المواقع على وجه الخصوص، حيث يحتاج العميل فى كثير من الأحيان أن يطلع على صورة حقيقية لتصميم الموقع.</p>
<p class="p-lg"><img class="img-fluid" src="../../../storage/tiny_images/o0Uuo4EXoTIXaA2SoP9hLfZk9bvZhGXmisYEAObz.jpg" width="1080" height="1080" /></p>',
                'reasons' => 'لمن يعاني من ألم
بالأسنان أوتسوسات',
            ],
            'en' => [
                'name' => 'نص مثال',
                'description' => 'نص مثال نص مثال نص مثال نص مثال',
                'reasons' => 'نص مثال',
            ],
        ]);
        DoctorService::create([
            'doctor_category_id'=>1,
            'image'=>'doctor.png','ar' => [
                'name' => 'حشوات تجميلية',
                'description' => '<h3 class="h3-xl blue-color">هذا النص هو مثال</h3>
<h4 class="h4-md blue-color">&nbsp;لنص يمكن أن يستبدل في نفس المساحة</h4>
<p class="p-lg">لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.<br class="line-break" />إذا كنت تحتاج إلى عدد أكبر من الفقرات يتيح لك مولد النص العربى زيادة عدد الفقرات كما تريد، النص لن يبدو مقسما ولا يحوي أخطاء لغوية، مولد النص العربى مفيد لمصممي المواقع على وجه الخصوص، حيث يحتاج العميل فى كثير من الأحيان أن يطلع على صورة حقيقية لتصميم الموقع.</p>
<p class="p-lg"><img class="img-fluid" src="../../../storage/tiny_images/o0Uuo4EXoTIXaA2SoP9hLfZk9bvZhGXmisYEAObz.jpg" width="1080" height="1080" /></p>',
                'reasons' => 'جميع فئات العملاء',
            ],
            'en' => [
                'name' => 'نص مثال',
                'description' => 'نص مثال نص مثال نص مثال نص مثال',
                'reasons' => 'نص مثال',
            ],
        ]);
        DoctorService::create([
            'doctor_category_id'=>1,
            'image'=>'doctor.png','ar' => [
                'name' => 'خطة علاجية',
                'description' => '<h3 class="h3-xl blue-color">هذا النص هو مثال</h3>
<h4 class="h4-md blue-color">&nbsp;لنص يمكن أن يستبدل في نفس المساحة</h4>
<p class="p-lg">لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.<br class="line-break" />إذا كنت تحتاج إلى عدد أكبر من الفقرات يتيح لك مولد النص العربى زيادة عدد الفقرات كما تريد، النص لن يبدو مقسما ولا يحوي أخطاء لغوية، مولد النص العربى مفيد لمصممي المواقع على وجه الخصوص، حيث يحتاج العميل فى كثير من الأحيان أن يطلع على صورة حقيقية لتصميم الموقع.</p>
<p class="p-lg"><img class="img-fluid" src="../../../storage/tiny_images/o0Uuo4EXoTIXaA2SoP9hLfZk9bvZhGXmisYEAObz.jpg" width="1080" height="1080" /></p>',
                'reasons' => 'جميع فئات العملاء',
            ],
            'en' => [
                'name' => 'نص مثال',
                'description' => 'نص مثال نص مثال نص مثال نص مثال',
                'reasons' => 'نص مثال',
            ],
        ]);
        DoctorService::create([
            'doctor_category_id'=>1,
            'image'=>'doctor.png','ar' => [
                'name' => 'تنظيف أسنان أطفال',
                'description' => '<h3 class="h3-xl blue-color">هذا النص هو مثال</h3>
<h4 class="h4-md blue-color">&nbsp;لنص يمكن أن يستبدل في نفس المساحة</h4>
<p class="p-lg">لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.<br class="line-break" />إذا كنت تحتاج إلى عدد أكبر من الفقرات يتيح لك مولد النص العربى زيادة عدد الفقرات كما تريد، النص لن يبدو مقسما ولا يحوي أخطاء لغوية، مولد النص العربى مفيد لمصممي المواقع على وجه الخصوص، حيث يحتاج العميل فى كثير من الأحيان أن يطلع على صورة حقيقية لتصميم الموقع.</p>
<p class="p-lg"><img class="img-fluid" src="../../../storage/tiny_images/o0Uuo4EXoTIXaA2SoP9hLfZk9bvZhGXmisYEAObz.jpg" width="1080" height="1080" /></p>',
                'reasons' => 'أطفال',
            ],
            'en' => [
                'name' => 'نص مثال',
                'description' => 'نص مثال نص مثال نص مثال نص مثال',
                'reasons' => 'نص مثال',
            ],
        ]);
        DoctorService::create([
            'doctor_category_id'=>1,
            'image'=>'doctor.png','ar' => [
                'name' => 'حشوات أسنان أطفال',
                'description' => '<h3 class="h3-xl blue-color">هذا النص هو مثال</h3>
<h4 class="h4-md blue-color">&nbsp;لنص يمكن أن يستبدل في نفس المساحة</h4>
<p class="p-lg">لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.<br class="line-break" />إذا كنت تحتاج إلى عدد أكبر من الفقرات يتيح لك مولد النص العربى زيادة عدد الفقرات كما تريد، النص لن يبدو مقسما ولا يحوي أخطاء لغوية، مولد النص العربى مفيد لمصممي المواقع على وجه الخصوص، حيث يحتاج العميل فى كثير من الأحيان أن يطلع على صورة حقيقية لتصميم الموقع.</p>
<p class="p-lg"><img class="img-fluid" src="../../../storage/tiny_images/o0Uuo4EXoTIXaA2SoP9hLfZk9bvZhGXmisYEAObz.jpg" width="1080" height="1080" /></p>',
                'reasons' => 'أطفال',
            ],
            'en' => [
                'name' => 'نص مثال',
                'description' => 'نص مثال نص مثال نص مثال نص مثال',
                'reasons' => 'نص مثال',
            ],
        ]);
        DoctorService::create([
            'doctor_category_id'=>1,
            'image'=>'doctor.png','ar' => [
                'name' => 'خلع أسنان أطفال',
                'description' => '<h3 class="h3-xl blue-color">هذا النص هو مثال</h3>
<h4 class="h4-md blue-color">&nbsp;لنص يمكن أن يستبدل في نفس المساحة</h4>
<p class="p-lg">لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.<br class="line-break" />إذا كنت تحتاج إلى عدد أكبر من الفقرات يتيح لك مولد النص العربى زيادة عدد الفقرات كما تريد، النص لن يبدو مقسما ولا يحوي أخطاء لغوية، مولد النص العربى مفيد لمصممي المواقع على وجه الخصوص، حيث يحتاج العميل فى كثير من الأحيان أن يطلع على صورة حقيقية لتصميم الموقع.</p>
<p class="p-lg"><img class="img-fluid" src="../../../storage/tiny_images/o0Uuo4EXoTIXaA2SoP9hLfZk9bvZhGXmisYEAObz.jpg" width="1080" height="1080" /></p>',
                'reasons' => 'أطفال',
            ],
            'en' => [
                'name' => 'نص مثال',
                'description' => 'نص مثال نص مثال نص مثال نص مثال',
                'reasons' => 'نص مثال',
            ],
        ]);
        DoctorService::create([
            'doctor_category_id'=>1,
            'image'=>'doctor.png','ar' => [
                'name' => 'علاج عصب
أسنان أطفال',
                'description' => '<h3 class="h3-xl blue-color">هذا النص هو مثال</h3>
<h4 class="h4-md blue-color">&nbsp;لنص يمكن أن يستبدل في نفس المساحة</h4>
<p class="p-lg">لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.<br class="line-break" />إذا كنت تحتاج إلى عدد أكبر من الفقرات يتيح لك مولد النص العربى زيادة عدد الفقرات كما تريد، النص لن يبدو مقسما ولا يحوي أخطاء لغوية، مولد النص العربى مفيد لمصممي المواقع على وجه الخصوص، حيث يحتاج العميل فى كثير من الأحيان أن يطلع على صورة حقيقية لتصميم الموقع.</p>
<p class="p-lg"><img class="img-fluid" src="../../../storage/tiny_images/o0Uuo4EXoTIXaA2SoP9hLfZk9bvZhGXmisYEAObz.jpg" width="1080" height="1080" /></p>',
                'reasons' => 'أطفال',
            ],
            'en' => [
                'name' => 'نص مثال',
                'description' => 'نص مثال نص مثال نص مثال نص مثال',
                'reasons' => 'نص مثال',
            ],
        ]);
        DoctorService::create([
            'doctor_category_id'=>1,
            'image'=>'doctor.png','ar' => [
                'name' => 'تطبيق الفلورايد
أسنان أطفال
',
                'description' => '<h3 class="h3-xl blue-color">هذا النص هو مثال</h3>
<h4 class="h4-md blue-color">&nbsp;لنص يمكن أن يستبدل في نفس المساحة</h4>
<p class="p-lg">لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.<br class="line-break" />إذا كنت تحتاج إلى عدد أكبر من الفقرات يتيح لك مولد النص العربى زيادة عدد الفقرات كما تريد، النص لن يبدو مقسما ولا يحوي أخطاء لغوية، مولد النص العربى مفيد لمصممي المواقع على وجه الخصوص، حيث يحتاج العميل فى كثير من الأحيان أن يطلع على صورة حقيقية لتصميم الموقع.</p>
<p class="p-lg"><img class="img-fluid" src="../../../storage/tiny_images/o0Uuo4EXoTIXaA2SoP9hLfZk9bvZhGXmisYEAObz.jpg" width="1080" height="1080" /></p>',
                'reasons' => 'أطفال',
            ],
            'en' => [
                'name' => 'نص مثال',
                'description' => 'نص مثال نص مثال نص مثال نص مثال',
                'reasons' => 'نص مثال',
            ],
        ]);
        DoctorService::create([
            'doctor_category_id'=>1,
            'image'=>'doctor.png','ar' => [
                'name' => 'حشوات وقائية
أسنان أطفال
',
                'description' => '<h3 class="h3-xl blue-color">هذا النص هو مثال</h3>
<h4 class="h4-md blue-color">&nbsp;لنص يمكن أن يستبدل في نفس المساحة</h4>
<p class="p-lg">لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.<br class="line-break" />إذا كنت تحتاج إلى عدد أكبر من الفقرات يتيح لك مولد النص العربى زيادة عدد الفقرات كما تريد، النص لن يبدو مقسما ولا يحوي أخطاء لغوية، مولد النص العربى مفيد لمصممي المواقع على وجه الخصوص، حيث يحتاج العميل فى كثير من الأحيان أن يطلع على صورة حقيقية لتصميم الموقع.</p>
<p class="p-lg"><img class="img-fluid" src="../../../storage/tiny_images/o0Uuo4EXoTIXaA2SoP9hLfZk9bvZhGXmisYEAObz.jpg" width="1080" height="1080" /></p>',
                'reasons' => 'أطفال',
            ],
            'en' => [
                'name' => 'نص مثال',
                'description' => 'نص مثال نص مثال نص مثال نص مثال',
                'reasons' => 'نص مثال',
            ],
        ]);
        DoctorService::create([
            'doctor_category_id'=>1,
            'image'=>'doctor.png','ar' => [
                'name' => 'ابتسامة هوليود',
                'description' => '<h3 class="h3-xl blue-color">هذا النص هو مثال</h3>
<h4 class="h4-md blue-color">&nbsp;لنص يمكن أن يستبدل في نفس المساحة</h4>
<p class="p-lg">لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.<br class="line-break" />إذا كنت تحتاج إلى عدد أكبر من الفقرات يتيح لك مولد النص العربى زيادة عدد الفقرات كما تريد، النص لن يبدو مقسما ولا يحوي أخطاء لغوية، مولد النص العربى مفيد لمصممي المواقع على وجه الخصوص، حيث يحتاج العميل فى كثير من الأحيان أن يطلع على صورة حقيقية لتصميم الموقع.</p>
<p class="p-lg"><img class="img-fluid" src="../../../storage/tiny_images/o0Uuo4EXoTIXaA2SoP9hLfZk9bvZhGXmisYEAObz.jpg" width="1080" height="1080" /></p>',
                'reasons' => 'على حسب حالة العميل',
            ],
            'en' => [
                'name' => 'نص مثال',
                'description' => 'نص مثال نص مثال نص مثال نص مثال',
                'reasons' => 'نص مثال',
            ],
        ]);
        DoctorService::create([
            'doctor_category_id'=>1,
            'image'=>'doctor.png','ar' => [
                'name' => 'تركيبات ثابته او متحركة',
                'description' => '<h3 class="h3-xl blue-color">هذا النص هو مثال</h3>
<h4 class="h4-md blue-color">&nbsp;لنص يمكن أن يستبدل في نفس المساحة</h4>
<p class="p-lg">لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.<br class="line-break" />إذا كنت تحتاج إلى عدد أكبر من الفقرات يتيح لك مولد النص العربى زيادة عدد الفقرات كما تريد، النص لن يبدو مقسما ولا يحوي أخطاء لغوية، مولد النص العربى مفيد لمصممي المواقع على وجه الخصوص، حيث يحتاج العميل فى كثير من الأحيان أن يطلع على صورة حقيقية لتصميم الموقع.</p>
<p class="p-lg"><img class="img-fluid" src="../../../storage/tiny_images/o0Uuo4EXoTIXaA2SoP9hLfZk9bvZhGXmisYEAObz.jpg" width="1080" height="1080" /></p>',
                'reasons' => 'حسب حالة العميل',
            ],
            'en' => [
                'name' => 'نص مثال',
                'description' => 'نص مثال نص مثال نص مثال نص مثال',
                'reasons' => 'نص مثال',
            ],
        ]);
        DoctorService::create([
            'doctor_category_id'=>1,
            'image'=>'doctor.png','ar' => [
                'name' => 'عدسات الاسنان',
                'description' => '<h3 class="h3-xl blue-color">هذا النص هو مثال</h3>
<h4 class="h4-md blue-color">&nbsp;لنص يمكن أن يستبدل في نفس المساحة</h4>
<p class="p-lg">لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.<br class="line-break" />إذا كنت تحتاج إلى عدد أكبر من الفقرات يتيح لك مولد النص العربى زيادة عدد الفقرات كما تريد، النص لن يبدو مقسما ولا يحوي أخطاء لغوية، مولد النص العربى مفيد لمصممي المواقع على وجه الخصوص، حيث يحتاج العميل فى كثير من الأحيان أن يطلع على صورة حقيقية لتصميم الموقع.</p>
<p class="p-lg"><img class="img-fluid" src="../../../storage/tiny_images/o0Uuo4EXoTIXaA2SoP9hLfZk9bvZhGXmisYEAObz.jpg" width="1080" height="1080" /></p>',
                'reasons' => 'حشوات كثيره اماميه
فراغات بين الاسنان
مشكله في لون الاسنان
حجم الاسنان الصغير
',
            ],
            'en' => [
                'name' => 'نص مثال',
                'description' => 'نص مثال نص مثال نص مثال نص مثال',
                'reasons' => 'نص مثال',
            ],
        ]);
        DoctorService::create([
            'doctor_category_id'=>1,
            'image'=>'doctor.png','ar' => [
                'name' => 'العدسات الفوريه',
                'description' => '<h3 class="h3-xl blue-color">هذا النص هو مثال</h3>
<h4 class="h4-md blue-color">&nbsp;لنص يمكن أن يستبدل في نفس المساحة</h4>
<p class="p-lg">لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.<br class="line-break" />إذا كنت تحتاج إلى عدد أكبر من الفقرات يتيح لك مولد النص العربى زيادة عدد الفقرات كما تريد، النص لن يبدو مقسما ولا يحوي أخطاء لغوية، مولد النص العربى مفيد لمصممي المواقع على وجه الخصوص، حيث يحتاج العميل فى كثير من الأحيان أن يطلع على صورة حقيقية لتصميم الموقع.</p>
<p class="p-lg"><img class="img-fluid" src="../../../storage/tiny_images/o0Uuo4EXoTIXaA2SoP9hLfZk9bvZhGXmisYEAObz.jpg" width="1080" height="1080" /></p>',
                'reasons' => 'تعديل لون الاسنان
تعديل شكل الاسنان
اغلاق الفراغات
',
            ],
            'en' => [
                'name' => 'نص مثال',
                'description' => 'نص مثال نص مثال نص مثال نص مثال',
                'reasons' => 'نص مثال',
            ],
        ]);
        DoctorService::create([
            'doctor_category_id'=>1,
            'image'=>'doctor.png','ar' => [
                'name' => 'تقويم معدني',
                'description' => '<h3 class="h3-xl blue-color">هذا النص هو مثال</h3>
<h4 class="h4-md blue-color">&nbsp;لنص يمكن أن يستبدل في نفس المساحة</h4>
<p class="p-lg">لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.<br class="line-break" />إذا كنت تحتاج إلى عدد أكبر من الفقرات يتيح لك مولد النص العربى زيادة عدد الفقرات كما تريد، النص لن يبدو مقسما ولا يحوي أخطاء لغوية، مولد النص العربى مفيد لمصممي المواقع على وجه الخصوص، حيث يحتاج العميل فى كثير من الأحيان أن يطلع على صورة حقيقية لتصميم الموقع.</p>
<p class="p-lg"><img class="img-fluid" src="../../../storage/tiny_images/o0Uuo4EXoTIXaA2SoP9hLfZk9bvZhGXmisYEAObz.jpg" width="1080" height="1080" /></p>',
                'reasons' => 'لكل الحالات',
            ],
            'en' => [
                'name' => 'نص مثال',
                'description' => 'نص مثال نص مثال نص مثال نص مثال',
                'reasons' => 'نص مثال',
            ],
        ]);
        DoctorService::create([
            'doctor_category_id'=>1,
            'image'=>'doctor.png','ar' => [
                'name' => 'تقويم شفاف',
                'description' => '<h3 class="h3-xl blue-color">هذا النص هو مثال</h3>
<h4 class="h4-md blue-color">&nbsp;لنص يمكن أن يستبدل في نفس المساحة</h4>
<p class="p-lg">لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.<br class="line-break" />إذا كنت تحتاج إلى عدد أكبر من الفقرات يتيح لك مولد النص العربى زيادة عدد الفقرات كما تريد، النص لن يبدو مقسما ولا يحوي أخطاء لغوية، مولد النص العربى مفيد لمصممي المواقع على وجه الخصوص، حيث يحتاج العميل فى كثير من الأحيان أن يطلع على صورة حقيقية لتصميم الموقع.</p>
<p class="p-lg"><img class="img-fluid" src="../../../storage/tiny_images/o0Uuo4EXoTIXaA2SoP9hLfZk9bvZhGXmisYEAObz.jpg" width="1080" height="1080" /></p>',
                'reasons' => 'لكل الحالات',
            ],
            'en' => [
                'name' => 'نص مثال',
                'description' => 'نص مثال نص مثال نص مثال نص مثال',
                'reasons' => 'نص مثال',
            ],
        ]);
        DoctorService::create([
            'doctor_category_id'=>1,
            'image'=>'doctor.png','ar' => [
                'name' => 'تقويم شفاف (حديث انفزلاين )',
                'description' => '<h3 class="h3-xl blue-color">هذا النص هو مثال</h3>
<h4 class="h4-md blue-color">&nbsp;لنص يمكن أن يستبدل في نفس المساحة</h4>
<p class="p-lg">لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.<br class="line-break" />إذا كنت تحتاج إلى عدد أكبر من الفقرات يتيح لك مولد النص العربى زيادة عدد الفقرات كما تريد، النص لن يبدو مقسما ولا يحوي أخطاء لغوية، مولد النص العربى مفيد لمصممي المواقع على وجه الخصوص، حيث يحتاج العميل فى كثير من الأحيان أن يطلع على صورة حقيقية لتصميم الموقع.</p>
<p class="p-lg"><img class="img-fluid" src="../../../storage/tiny_images/o0Uuo4EXoTIXaA2SoP9hLfZk9bvZhGXmisYEAObz.jpg" width="1080" height="1080" /></p>',
                'reasons' => 'كل الحالات تكلفه اعلى',
            ],
            'en' => [
                'name' => 'نص مثال',
                'description' => 'نص مثال نص مثال نص مثال نص مثال',
                'reasons' => 'نص مثال',
            ],
        ]);
        DoctorService::create([
            'doctor_category_id'=>1,
            'image'=>'doctor.png','ar' => [
                'name' => 'تقويم الأطفال وظيفي',
                'description' => '<h3 class="h3-xl blue-color">هذا النص هو مثال</h3>
<h4 class="h4-md blue-color">&nbsp;لنص يمكن أن يستبدل في نفس المساحة</h4>
<p class="p-lg">لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.<br class="line-break" />إذا كنت تحتاج إلى عدد أكبر من الفقرات يتيح لك مولد النص العربى زيادة عدد الفقرات كما تريد، النص لن يبدو مقسما ولا يحوي أخطاء لغوية، مولد النص العربى مفيد لمصممي المواقع على وجه الخصوص، حيث يحتاج العميل فى كثير من الأحيان أن يطلع على صورة حقيقية لتصميم الموقع.</p>
<p class="p-lg"><img class="img-fluid" src="../../../storage/tiny_images/o0Uuo4EXoTIXaA2SoP9hLfZk9bvZhGXmisYEAObz.jpg" width="1080" height="1080" /></p>',
                'reasons' => 'الأطفال تحت سن 13 سنه',
            ],
            'en' => [
                'name' => 'نص مثال',
                'description' => 'نص مثال نص مثال نص مثال نص مثال',
                'reasons' => 'نص مثال',
            ],
        ]);
        DoctorService::create([
            'doctor_category_id'=>1,
            'image'=>'doctor.png','ar' => [
                'name' => 'مثبت للفك (متحرك او ثابت )',
                'description' => '<h3 class="h3-xl blue-color">هذا النص هو مثال</h3>
<h4 class="h4-md blue-color">&nbsp;لنص يمكن أن يستبدل في نفس المساحة</h4>
<p class="p-lg">لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.<br class="line-break" />إذا كنت تحتاج إلى عدد أكبر من الفقرات يتيح لك مولد النص العربى زيادة عدد الفقرات كما تريد، النص لن يبدو مقسما ولا يحوي أخطاء لغوية، مولد النص العربى مفيد لمصممي المواقع على وجه الخصوص، حيث يحتاج العميل فى كثير من الأحيان أن يطلع على صورة حقيقية لتصميم الموقع.</p>
<p class="p-lg"><img class="img-fluid" src="../../../storage/tiny_images/o0Uuo4EXoTIXaA2SoP9hLfZk9bvZhGXmisYEAObz.jpg" width="1080" height="1080" /></p>',
                'reasons' => 'كل الحالات بعد التقويم',
            ],
            'en' => [
                'name' => 'نص مثال',
                'description' => 'نص مثال نص مثال نص مثال نص مثال',
                'reasons' => 'نص مثال',
            ],
        ]);
        DoctorService::create([
            'doctor_category_id'=>1,
            'image'=>'doctor.png','ar' => [
                'name' => 'فك التقويم وتنظيف الاسنان',
                'description' => '<h3 class="h3-xl blue-color">هذا النص هو مثال</h3>
<h4 class="h4-md blue-color">&nbsp;لنص يمكن أن يستبدل في نفس المساحة</h4>
<p class="p-lg">لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.<br class="line-break" />إذا كنت تحتاج إلى عدد أكبر من الفقرات يتيح لك مولد النص العربى زيادة عدد الفقرات كما تريد، النص لن يبدو مقسما ولا يحوي أخطاء لغوية، مولد النص العربى مفيد لمصممي المواقع على وجه الخصوص، حيث يحتاج العميل فى كثير من الأحيان أن يطلع على صورة حقيقية لتصميم الموقع.</p>
<p class="p-lg"><img class="img-fluid" src="../../../storage/tiny_images/o0Uuo4EXoTIXaA2SoP9hLfZk9bvZhGXmisYEAObz.jpg" width="1080" height="1080" /></p>',
                'reasons' => 'كل الحالات',
            ],
            'en' => [
                'name' => 'نص مثال',
                'description' => 'نص مثال نص مثال نص مثال نص مثال',
                'reasons' => 'نص مثال',
            ],
        ]);
        DoctorService::create([
            'doctor_category_id'=>1,
            'image'=>'doctor.png','ar' => [
                'name' => 'تقويم Damon',
                'description' => '<h3 class="h3-xl blue-color">هذا النص هو مثال</h3>
<h4 class="h4-md blue-color">&nbsp;لنص يمكن أن يستبدل في نفس المساحة</h4>
<p class="p-lg">لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.<br class="line-break" />إذا كنت تحتاج إلى عدد أكبر من الفقرات يتيح لك مولد النص العربى زيادة عدد الفقرات كما تريد، النص لن يبدو مقسما ولا يحوي أخطاء لغوية، مولد النص العربى مفيد لمصممي المواقع على وجه الخصوص، حيث يحتاج العميل فى كثير من الأحيان أن يطلع على صورة حقيقية لتصميم الموقع.</p>
<p class="p-lg"><img class="img-fluid" src="../../../storage/tiny_images/o0Uuo4EXoTIXaA2SoP9hLfZk9bvZhGXmisYEAObz.jpg" width="1080" height="1080" /></p>',
                'reasons' => 'كل الحالات',
            ],
            'en' => [
                'name' => 'نص مثال',
                'description' => 'نص مثال نص مثال نص مثال نص مثال',
                'reasons' => 'نص مثال',
            ],
        ]);
        DoctorService::create([
            'doctor_category_id'=>1,
            'image'=>'doctor.png','ar' => [
                'name' => 'أجهزة تقويم لعلاج العادات السيئه (مص الاصبع-تنفس من الفم )',
                'description' => '<h3 class="h3-xl blue-color">هذا النص هو مثال</h3>
<h4 class="h4-md blue-color">&nbsp;لنص يمكن أن يستبدل في نفس المساحة</h4>
<p class="p-lg">لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.<br class="line-break" />إذا كنت تحتاج إلى عدد أكبر من الفقرات يتيح لك مولد النص العربى زيادة عدد الفقرات كما تريد، النص لن يبدو مقسما ولا يحوي أخطاء لغوية، مولد النص العربى مفيد لمصممي المواقع على وجه الخصوص، حيث يحتاج العميل فى كثير من الأحيان أن يطلع على صورة حقيقية لتصميم الموقع.</p>
<p class="p-lg"><img class="img-fluid" src="../../../storage/tiny_images/o0Uuo4EXoTIXaA2SoP9hLfZk9bvZhGXmisYEAObz.jpg" width="1080" height="1080" /></p>',
                'reasons' => 'الاطفال',
            ],
            'en' => [
                'name' => 'نص مثال',
                'description' => 'نص مثال نص مثال نص مثال نص مثال',
                'reasons' => 'نص مثال',
            ],
        ]);
        DoctorService::create([
            'doctor_category_id'=>1,
            'image'=>'doctor.png','ar' => [
                'name' => 'حافظة المسافه',
                'description' => '<h3 class="h3-xl blue-color">هذا النص هو مثال</h3>
<h4 class="h4-md blue-color">&nbsp;لنص يمكن أن يستبدل في نفس المساحة</h4>
<p class="p-lg">لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.<br class="line-break" />إذا كنت تحتاج إلى عدد أكبر من الفقرات يتيح لك مولد النص العربى زيادة عدد الفقرات كما تريد، النص لن يبدو مقسما ولا يحوي أخطاء لغوية، مولد النص العربى مفيد لمصممي المواقع على وجه الخصوص، حيث يحتاج العميل فى كثير من الأحيان أن يطلع على صورة حقيقية لتصميم الموقع.</p>
<p class="p-lg"><img class="img-fluid" src="../../../storage/tiny_images/o0Uuo4EXoTIXaA2SoP9hLfZk9bvZhGXmisYEAObz.jpg" width="1080" height="1080" /></p>',
                'reasons' => 'الاطفال',
            ],
            'en' => [
                'name' => 'نص مثال',
                'description' => 'نص مثال نص مثال نص مثال نص مثال',
                'reasons' => 'نص مثال',
            ],
        ]); //30


        // جراحات التجميل

        // – د. فقيه
        DoctorService::create([
            'doctor_category_id'=>2,
            'image'=>'doctor.png','ar' => [
                'name' => 'عملية شفط ونحت الجسم وحقن الارداف والخفسات',
                'description' => '<h3 class="h3-xl blue-color">هذا النص هو مثال</h3>
<h4 class="h4-md blue-color">&nbsp;لنص يمكن أن يستبدل في نفس المساحة</h4>
<p class="p-lg">لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.<br class="line-break" />إذا كنت تحتاج إلى عدد أكبر من الفقرات يتيح لك مولد النص العربى زيادة عدد الفقرات كما تريد، النص لن يبدو مقسما ولا يحوي أخطاء لغوية، مولد النص العربى مفيد لمصممي المواقع على وجه الخصوص، حيث يحتاج العميل فى كثير من الأحيان أن يطلع على صورة حقيقية لتصميم الموقع.</p>
<p class="p-lg"><img class="img-fluid" src="../../../storage/tiny_images/o0Uuo4EXoTIXaA2SoP9hLfZk9bvZhGXmisYEAObz.jpg" width="1080" height="1080" /></p>',
                'reasons' => 'لكل الحالات',
            ],
            'en' => [
                'name' => 'نص مثال',
                'description' => 'نص مثال نص مثال نص مثال نص مثال',
                'reasons' => 'نص مثال',
            ],
        ]);
        DoctorService::create([
            'doctor_category_id'=>2,
            'image'=>'doctor.png','ar' => [
                'name' => 'عملية شد الوجه والرقبة وازالة المواد الدائمة',
                'description' => '<h3 class="h3-xl blue-color">هذا النص هو مثال</h3>
<h4 class="h4-md blue-color">&nbsp;لنص يمكن أن يستبدل في نفس المساحة</h4>
<p class="p-lg">لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.<br class="line-break" />إذا كنت تحتاج إلى عدد أكبر من الفقرات يتيح لك مولد النص العربى زيادة عدد الفقرات كما تريد، النص لن يبدو مقسما ولا يحوي أخطاء لغوية، مولد النص العربى مفيد لمصممي المواقع على وجه الخصوص، حيث يحتاج العميل فى كثير من الأحيان أن يطلع على صورة حقيقية لتصميم الموقع.</p>
<p class="p-lg"><img class="img-fluid" src="../../../storage/tiny_images/o0Uuo4EXoTIXaA2SoP9hLfZk9bvZhGXmisYEAObz.jpg" width="1080" height="1080" /></p>',
                'reasons' => 'لكل الحالات',
            ],
            'en' => [
                'name' => 'نص مثال',
                'description' => 'نص مثال نص مثال نص مثال نص مثال',
                'reasons' => 'نص مثال',
            ],
        ]);
        DoctorService::create([
            'doctor_category_id'=>2,
            'image'=>'doctor.png','ar' => [
                'name' => 'عملية شد وقص الجفون العليا والسفلى

',
                'description' => '<h3 class="h3-xl blue-color">هذا النص هو مثال</h3>
<h4 class="h4-md blue-color">&nbsp;لنص يمكن أن يستبدل في نفس المساحة</h4>
<p class="p-lg">لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.<br class="line-break" />إذا كنت تحتاج إلى عدد أكبر من الفقرات يتيح لك مولد النص العربى زيادة عدد الفقرات كما تريد، النص لن يبدو مقسما ولا يحوي أخطاء لغوية، مولد النص العربى مفيد لمصممي المواقع على وجه الخصوص، حيث يحتاج العميل فى كثير من الأحيان أن يطلع على صورة حقيقية لتصميم الموقع.</p>
<p class="p-lg"><img class="img-fluid" src="../../../storage/tiny_images/o0Uuo4EXoTIXaA2SoP9hLfZk9bvZhGXmisYEAObz.jpg" width="1080" height="1080" /></p>',
                'reasons' => 'لكل الحالات',
            ],
            'en' => [
                'name' => 'نص مثال',
                'description' => 'نص مثال نص مثال نص مثال نص مثال',
                'reasons' => 'نص مثال',
            ],
        ]);
        DoctorService::create([
            'doctor_category_id'=>2,
            'image'=>'doctor.png','ar' => [
                'name' => 'شفط وشد وقص البطن

',
                'description' => '<h3 class="h3-xl blue-color">هذا النص هو مثال</h3>
<h4 class="h4-md blue-color">&nbsp;لنص يمكن أن يستبدل في نفس المساحة</h4>
<p class="p-lg">لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.<br class="line-break" />إذا كنت تحتاج إلى عدد أكبر من الفقرات يتيح لك مولد النص العربى زيادة عدد الفقرات كما تريد، النص لن يبدو مقسما ولا يحوي أخطاء لغوية، مولد النص العربى مفيد لمصممي المواقع على وجه الخصوص، حيث يحتاج العميل فى كثير من الأحيان أن يطلع على صورة حقيقية لتصميم الموقع.</p>
<p class="p-lg"><img class="img-fluid" src="../../../storage/tiny_images/o0Uuo4EXoTIXaA2SoP9hLfZk9bvZhGXmisYEAObz.jpg" width="1080" height="1080" /></p>',
                'reasons' => 'لكل الحالات',
            ],
            'en' => [
                'name' => 'نص مثال',
                'description' => 'نص مثال نص مثال نص مثال نص مثال',
                'reasons' => 'نص مثال',
            ],
        ]);
        DoctorService::create([
            'doctor_category_id'=>2,
            'image'=>'doctor.png','ar' => [
                'name' => 'شفط وشد الظهر',
                'description' => '<h3 class="h3-xl blue-color">هذا النص هو مثال</h3>
<h4 class="h4-md blue-color">&nbsp;لنص يمكن أن يستبدل في نفس المساحة</h4>
<p class="p-lg">لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.<br class="line-break" />إذا كنت تحتاج إلى عدد أكبر من الفقرات يتيح لك مولد النص العربى زيادة عدد الفقرات كما تريد، النص لن يبدو مقسما ولا يحوي أخطاء لغوية، مولد النص العربى مفيد لمصممي المواقع على وجه الخصوص، حيث يحتاج العميل فى كثير من الأحيان أن يطلع على صورة حقيقية لتصميم الموقع.</p>
<p class="p-lg"><img class="img-fluid" src="../../../storage/tiny_images/o0Uuo4EXoTIXaA2SoP9hLfZk9bvZhGXmisYEAObz.jpg" width="1080" height="1080" /></p>',
                'reasons' => 'لكل الحالات',
            ],
            'en' => [
                'name' => 'نص مثال',
                'description' => 'نص مثال نص مثال نص مثال نص مثال',
                'reasons' => 'نص مثال',
            ],
        ]);
        DoctorService::create([
            'doctor_category_id'=>2,
            'image'=>'doctor.png','ar' => [
                'name' => 'الشد الحزامي',
                'description' => '<h3 class="h3-xl blue-color">هذا النص هو مثال</h3>
<h4 class="h4-md blue-color">&nbsp;لنص يمكن أن يستبدل في نفس المساحة</h4>
<p class="p-lg">لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.<br class="line-break" />إذا كنت تحتاج إلى عدد أكبر من الفقرات يتيح لك مولد النص العربى زيادة عدد الفقرات كما تريد، النص لن يبدو مقسما ولا يحوي أخطاء لغوية، مولد النص العربى مفيد لمصممي المواقع على وجه الخصوص، حيث يحتاج العميل فى كثير من الأحيان أن يطلع على صورة حقيقية لتصميم الموقع.</p>
<p class="p-lg"><img class="img-fluid" src="../../../storage/tiny_images/o0Uuo4EXoTIXaA2SoP9hLfZk9bvZhGXmisYEAObz.jpg" width="1080" height="1080" /></p>',
                'reasons' => 'لكل الحالات',
            ],
            'en' => [
                'name' => 'نص مثال',
                'description' => 'نص مثال نص مثال نص مثال نص مثال',
                'reasons' => 'نص مثال',
            ],
        ]);
        DoctorService::create([
            'doctor_category_id'=>2,
            'image'=>'doctor.png','ar' => [
                'name' => 'عملية تكبير الصدر بالسليكون',
                'description' => '<h3 class="h3-xl blue-color">هذا النص هو مثال</h3>
<h4 class="h4-md blue-color">&nbsp;لنص يمكن أن يستبدل في نفس المساحة</h4>
<p class="p-lg">لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.<br class="line-break" />إذا كنت تحتاج إلى عدد أكبر من الفقرات يتيح لك مولد النص العربى زيادة عدد الفقرات كما تريد، النص لن يبدو مقسما ولا يحوي أخطاء لغوية، مولد النص العربى مفيد لمصممي المواقع على وجه الخصوص، حيث يحتاج العميل فى كثير من الأحيان أن يطلع على صورة حقيقية لتصميم الموقع.</p>
<p class="p-lg"><img class="img-fluid" src="../../../storage/tiny_images/o0Uuo4EXoTIXaA2SoP9hLfZk9bvZhGXmisYEAObz.jpg" width="1080" height="1080" /></p>',
                'reasons' => 'لكل الحالات',
            ],
            'en' => [
                'name' => 'نص مثال',
                'description' => 'نص مثال نص مثال نص مثال نص مثال',
                'reasons' => 'نص مثال',
            ],
        ]);
        DoctorService::create([
            'doctor_category_id'=>2,
            'image'=>'doctor.png','ar' => [
                'name' => 'عملية شد ورفع الصدر مع التصغير',
                'description' => '<h3 class="h3-xl blue-color">هذا النص هو مثال</h3>
<h4 class="h4-md blue-color">&nbsp;لنص يمكن أن يستبدل في نفس المساحة</h4>
<p class="p-lg">لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.<br class="line-break" />إذا كنت تحتاج إلى عدد أكبر من الفقرات يتيح لك مولد النص العربى زيادة عدد الفقرات كما تريد، النص لن يبدو مقسما ولا يحوي أخطاء لغوية، مولد النص العربى مفيد لمصممي المواقع على وجه الخصوص، حيث يحتاج العميل فى كثير من الأحيان أن يطلع على صورة حقيقية لتصميم الموقع.</p>
<p class="p-lg"><img class="img-fluid" src="../../../storage/tiny_images/o0Uuo4EXoTIXaA2SoP9hLfZk9bvZhGXmisYEAObz.jpg" width="1080" height="1080" /></p>',
                'reasons' => 'لكل الحالات',
            ],
            'en' => [
                'name' => 'نص مثال',
                'description' => 'نص مثال نص مثال نص مثال نص مثال',
                'reasons' => 'نص مثال',
            ],
        ]);
        DoctorService::create([
            'doctor_category_id'=>2,
            'image'=>'doctor.png','ar' => [
                'name' => 'شد وقص وشفط الافخاذ',
                'description' => '<h3 class="h3-xl blue-color">هذا النص هو مثال</h3>
<h4 class="h4-md blue-color">&nbsp;لنص يمكن أن يستبدل في نفس المساحة</h4>
<p class="p-lg">لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.<br class="line-break" />إذا كنت تحتاج إلى عدد أكبر من الفقرات يتيح لك مولد النص العربى زيادة عدد الفقرات كما تريد، النص لن يبدو مقسما ولا يحوي أخطاء لغوية، مولد النص العربى مفيد لمصممي المواقع على وجه الخصوص، حيث يحتاج العميل فى كثير من الأحيان أن يطلع على صورة حقيقية لتصميم الموقع.</p>
<p class="p-lg"><img class="img-fluid" src="../../../storage/tiny_images/o0Uuo4EXoTIXaA2SoP9hLfZk9bvZhGXmisYEAObz.jpg" width="1080" height="1080" /></p>',
                'reasons' => 'لكل الحالات',
            ],
            'en' => [
                'name' => 'نص مثال',
                'description' => 'نص مثال نص مثال نص مثال نص مثال',
                'reasons' => 'نص مثال',
            ],
        ]);
        DoctorService::create([
            'doctor_category_id'=>2,
            'image'=>'doctor.png','ar' => [
                'name' => 'شفط الجوانب',
                'description' => '<h3 class="h3-xl blue-color">هذا النص هو مثال</h3>
<h4 class="h4-md blue-color">&nbsp;لنص يمكن أن يستبدل في نفس المساحة</h4>
<p class="p-lg">لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.<br class="line-break" />إذا كنت تحتاج إلى عدد أكبر من الفقرات يتيح لك مولد النص العربى زيادة عدد الفقرات كما تريد، النص لن يبدو مقسما ولا يحوي أخطاء لغوية، مولد النص العربى مفيد لمصممي المواقع على وجه الخصوص، حيث يحتاج العميل فى كثير من الأحيان أن يطلع على صورة حقيقية لتصميم الموقع.</p>
<p class="p-lg"><img class="img-fluid" src="../../../storage/tiny_images/o0Uuo4EXoTIXaA2SoP9hLfZk9bvZhGXmisYEAObz.jpg" width="1080" height="1080" /></p>',
                'reasons' => 'لكل الحالات',
            ],
            'en' => [
                'name' => 'نص مثال',
                'description' => 'نص مثال نص مثال نص مثال نص مثال',
                'reasons' => 'نص مثال',
            ],
        ]);
        DoctorService::create([
            'doctor_category_id'=>2,
            'image'=>'doctor.png','ar' => [
                'name' => 'حقن الدهون الذاتية',
                'description' => '<h3 class="h3-xl blue-color">هذا النص هو مثال</h3>
<h4 class="h4-md blue-color">&nbsp;لنص يمكن أن يستبدل في نفس المساحة</h4>
<p class="p-lg">لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.<br class="line-break" />إذا كنت تحتاج إلى عدد أكبر من الفقرات يتيح لك مولد النص العربى زيادة عدد الفقرات كما تريد، النص لن يبدو مقسما ولا يحوي أخطاء لغوية، مولد النص العربى مفيد لمصممي المواقع على وجه الخصوص، حيث يحتاج العميل فى كثير من الأحيان أن يطلع على صورة حقيقية لتصميم الموقع.</p>
<p class="p-lg"><img class="img-fluid" src="../../../storage/tiny_images/o0Uuo4EXoTIXaA2SoP9hLfZk9bvZhGXmisYEAObz.jpg" width="1080" height="1080" /></p>',
                'reasons' => 'لكل الحالات',
            ],
            'en' => [
                'name' => 'نص مثال',
                'description' => 'نص مثال نص مثال نص مثال نص مثال',
                'reasons' => 'نص مثال',
            ],
        ]);
        DoctorService::create([
            'doctor_category_id'=>2,
            'image'=>'doctor.png','ar' => [
                'name' => 'شفط وشد وقص الزنود',
                'description' => '<h3 class="h3-xl blue-color">هذا النص هو مثال</h3>
<h4 class="h4-md blue-color">&nbsp;لنص يمكن أن يستبدل في نفس المساحة</h4>
<p class="p-lg">لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.<br class="line-break" />إذا كنت تحتاج إلى عدد أكبر من الفقرات يتيح لك مولد النص العربى زيادة عدد الفقرات كما تريد، النص لن يبدو مقسما ولا يحوي أخطاء لغوية، مولد النص العربى مفيد لمصممي المواقع على وجه الخصوص، حيث يحتاج العميل فى كثير من الأحيان أن يطلع على صورة حقيقية لتصميم الموقع.</p>
<p class="p-lg"><img class="img-fluid" src="../../../storage/tiny_images/o0Uuo4EXoTIXaA2SoP9hLfZk9bvZhGXmisYEAObz.jpg" width="1080" height="1080" /></p>',
                'reasons' => 'لكل الحالات',
            ],
            'en' => [
                'name' => 'نص مثال',
                'description' => 'نص مثال نص مثال نص مثال نص مثال',
                'reasons' => 'نص مثال',
            ],
        ]);
        DoctorService::create([
            'doctor_category_id'=>2,
            'image'=>'doctor.png','ar' => [
                'name' => 'شفط الذقن المزدوج (اللغلوغ)',
                'description' => '<h3 class="h3-xl blue-color">هذا النص هو مثال</h3>
<h4 class="h4-md blue-color">&nbsp;لنص يمكن أن يستبدل في نفس المساحة</h4>
<p class="p-lg">لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.<br class="line-break" />إذا كنت تحتاج إلى عدد أكبر من الفقرات يتيح لك مولد النص العربى زيادة عدد الفقرات كما تريد، النص لن يبدو مقسما ولا يحوي أخطاء لغوية، مولد النص العربى مفيد لمصممي المواقع على وجه الخصوص، حيث يحتاج العميل فى كثير من الأحيان أن يطلع على صورة حقيقية لتصميم الموقع.</p>
<p class="p-lg"><img class="img-fluid" src="../../../storage/tiny_images/o0Uuo4EXoTIXaA2SoP9hLfZk9bvZhGXmisYEAObz.jpg" width="1080" height="1080" /></p>',
                'reasons' => 'لكل الحالات',
            ],
            'en' => [
                'name' => 'نص مثال',
                'description' => 'نص مثال نص مثال نص مثال نص مثال',
                'reasons' => 'نص مثال',
            ],
        ]);
        DoctorService::create([
            'doctor_category_id'=>2,
            'image'=>'doctor.png','ar' => [
                'name' => 'حقن الفلر والبوتكس',
                'description' => '<h3 class="h3-xl blue-color">هذا النص هو مثال</h3>
<h4 class="h4-md blue-color">&nbsp;لنص يمكن أن يستبدل في نفس المساحة</h4>
<p class="p-lg">لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.<br class="line-break" />إذا كنت تحتاج إلى عدد أكبر من الفقرات يتيح لك مولد النص العربى زيادة عدد الفقرات كما تريد، النص لن يبدو مقسما ولا يحوي أخطاء لغوية، مولد النص العربى مفيد لمصممي المواقع على وجه الخصوص، حيث يحتاج العميل فى كثير من الأحيان أن يطلع على صورة حقيقية لتصميم الموقع.</p>
<p class="p-lg"><img class="img-fluid" src="../../../storage/tiny_images/o0Uuo4EXoTIXaA2SoP9hLfZk9bvZhGXmisYEAObz.jpg" width="1080" height="1080" /></p>',
                'reasons' => 'لكل الحالات',
            ],
            'en' => [
                'name' => 'نص مثال',
                'description' => 'نص مثال نص مثال نص مثال نص مثال',
                'reasons' => 'نص مثال',
            ],
        ]); // 44

        // الجلدية

        // – – د: حسام الدين
        DoctorService::create([
            'doctor_category_id'=>3,
            'image'=>'doctor.png','ar' => [
                'name' => 'بوتكس',
                'description' => '<h3 class="h3-xl blue-color">هذا النص هو مثال</h3>
<h4 class="h4-md blue-color">&nbsp;لنص يمكن أن يستبدل في نفس المساحة</h4>
<p class="p-lg">لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.<br class="line-break" />إذا كنت تحتاج إلى عدد أكبر من الفقرات يتيح لك مولد النص العربى زيادة عدد الفقرات كما تريد، النص لن يبدو مقسما ولا يحوي أخطاء لغوية، مولد النص العربى مفيد لمصممي المواقع على وجه الخصوص، حيث يحتاج العميل فى كثير من الأحيان أن يطلع على صورة حقيقية لتصميم الموقع.</p>
<p class="p-lg"><img class="img-fluid" src="../../../storage/tiny_images/o0Uuo4EXoTIXaA2SoP9hLfZk9bvZhGXmisYEAObz.jpg" width="1080" height="1080" /></p>',
                'reasons' => 'لكل الحالات',
            ],
            'en' => [
                'name' => 'نص مثال',
                'description' => 'نص مثال نص مثال نص مثال نص مثال',
                'reasons' => 'نص مثال',
            ],
        ]);
        DoctorService::create([
            'doctor_category_id'=>3,
            'image'=>'doctor.png','ar' => [
                'name' => 'الفيلر',
                'description' => '<h3 class="h3-xl blue-color">هذا النص هو مثال</h3>
<h4 class="h4-md blue-color">&nbsp;لنص يمكن أن يستبدل في نفس المساحة</h4>
<p class="p-lg">لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.<br class="line-break" />إذا كنت تحتاج إلى عدد أكبر من الفقرات يتيح لك مولد النص العربى زيادة عدد الفقرات كما تريد، النص لن يبدو مقسما ولا يحوي أخطاء لغوية، مولد النص العربى مفيد لمصممي المواقع على وجه الخصوص، حيث يحتاج العميل فى كثير من الأحيان أن يطلع على صورة حقيقية لتصميم الموقع.</p>
<p class="p-lg"><img class="img-fluid" src="../../../storage/tiny_images/o0Uuo4EXoTIXaA2SoP9hLfZk9bvZhGXmisYEAObz.jpg" width="1080" height="1080" /></p>',
                'reasons' => 'لكل الحالات',
            ],
            'en' => [
                'name' => 'نص مثال',
                'description' => 'نص مثال نص مثال نص مثال نص مثال',
                'reasons' => 'نص مثال',
            ],
        ]);
        DoctorService::create([
            'doctor_category_id'=>3,
            'image'=>'doctor.png','ar' => [
                'name' => 'البلازما',
                'description' => '<h3 class="h3-xl blue-color">هذا النص هو مثال</h3>
<h4 class="h4-md blue-color">&nbsp;لنص يمكن أن يستبدل في نفس المساحة</h4>
<p class="p-lg">لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.<br class="line-break" />إذا كنت تحتاج إلى عدد أكبر من الفقرات يتيح لك مولد النص العربى زيادة عدد الفقرات كما تريد، النص لن يبدو مقسما ولا يحوي أخطاء لغوية، مولد النص العربى مفيد لمصممي المواقع على وجه الخصوص، حيث يحتاج العميل فى كثير من الأحيان أن يطلع على صورة حقيقية لتصميم الموقع.</p>
<p class="p-lg"><img class="img-fluid" src="../../../storage/tiny_images/o0Uuo4EXoTIXaA2SoP9hLfZk9bvZhGXmisYEAObz.jpg" width="1080" height="1080" /></p>',
                'reasons' => 'لكل الحالات',
            ],
            'en' => [
                'name' => 'نص مثال',
                'description' => 'نص مثال نص مثال نص مثال نص مثال',
                'reasons' => 'نص مثال',
            ],
        ]);
        DoctorService::create([
            'doctor_category_id'=>3,
            'image'=>'doctor.png','ar' => [
                'name' => 'الميزو',
                'description' => '<h3 class="h3-xl blue-color">هذا النص هو مثال</h3>
<h4 class="h4-md blue-color">&nbsp;لنص يمكن أن يستبدل في نفس المساحة</h4>
<p class="p-lg">لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.<br class="line-break" />إذا كنت تحتاج إلى عدد أكبر من الفقرات يتيح لك مولد النص العربى زيادة عدد الفقرات كما تريد، النص لن يبدو مقسما ولا يحوي أخطاء لغوية، مولد النص العربى مفيد لمصممي المواقع على وجه الخصوص، حيث يحتاج العميل فى كثير من الأحيان أن يطلع على صورة حقيقية لتصميم الموقع.</p>
<p class="p-lg"><img class="img-fluid" src="../../../storage/tiny_images/o0Uuo4EXoTIXaA2SoP9hLfZk9bvZhGXmisYEAObz.jpg" width="1080" height="1080" /></p>',
                'reasons' => 'لكل الحالات',
            ],
            'en' => [
                'name' => 'نص مثال',
                'description' => 'نص مثال نص مثال نص مثال نص مثال',
                'reasons' => 'نص مثال',
            ],
        ]);
        DoctorService::create([
            'doctor_category_id'=>3,
            'image'=>'doctor.png','ar' => [
                'name' => 'فراكشنال',
                'description' => '<h3 class="h3-xl blue-color">هذا النص هو مثال</h3>
<h4 class="h4-md blue-color">&nbsp;لنص يمكن أن يستبدل في نفس المساحة</h4>
<p class="p-lg">لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.<br class="line-break" />إذا كنت تحتاج إلى عدد أكبر من الفقرات يتيح لك مولد النص العربى زيادة عدد الفقرات كما تريد، النص لن يبدو مقسما ولا يحوي أخطاء لغوية، مولد النص العربى مفيد لمصممي المواقع على وجه الخصوص، حيث يحتاج العميل فى كثير من الأحيان أن يطلع على صورة حقيقية لتصميم الموقع.</p>
<p class="p-lg"><img class="img-fluid" src="../../../storage/tiny_images/o0Uuo4EXoTIXaA2SoP9hLfZk9bvZhGXmisYEAObz.jpg" width="1080" height="1080" /></p>',
                'reasons' => 'لكل الحالات',
            ],
            'en' => [
                'name' => 'نص مثال',
                'description' => 'نص مثال نص مثال نص مثال نص مثال',
                'reasons' => 'نص مثال',
            ],
        ]);
        DoctorService::create([
            'doctor_category_id'=>3,
            'image'=>'doctor.png','ar' => [
                'name' => 'الخيوط المذابة',
                'description' => '<h3 class="h3-xl blue-color">هذا النص هو مثال</h3>
<h4 class="h4-md blue-color">&nbsp;لنص يمكن أن يستبدل في نفس المساحة</h4>
<p class="p-lg">لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.<br class="line-break" />إذا كنت تحتاج إلى عدد أكبر من الفقرات يتيح لك مولد النص العربى زيادة عدد الفقرات كما تريد، النص لن يبدو مقسما ولا يحوي أخطاء لغوية، مولد النص العربى مفيد لمصممي المواقع على وجه الخصوص، حيث يحتاج العميل فى كثير من الأحيان أن يطلع على صورة حقيقية لتصميم الموقع.</p>
<p class="p-lg"><img class="img-fluid" src="../../../storage/tiny_images/o0Uuo4EXoTIXaA2SoP9hLfZk9bvZhGXmisYEAObz.jpg" width="1080" height="1080" /></p>
',
                'reasons' => 'لكل الحالات',
            ],
            'en' => [
                'name' => 'نص مثال',
                'description' => 'نص مثال نص مثال نص مثال نص مثال',
                'reasons' => 'نص مثال',
            ],
        ]);
        DoctorService::create([
            'doctor_category_id'=>3,
            'image'=>'doctor.png','ar' => [
                'name' => 'الخيوط التجميلية',
                'description' => '<h3 class="h3-xl blue-color">هذا النص هو مثال</h3>
<h4 class="h4-md blue-color">&nbsp;لنص يمكن أن يستبدل في نفس المساحة</h4>
<p class="p-lg">لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.<br class="line-break" />إذا كنت تحتاج إلى عدد أكبر من الفقرات يتيح لك مولد النص العربى زيادة عدد الفقرات كما تريد، النص لن يبدو مقسما ولا يحوي أخطاء لغوية، مولد النص العربى مفيد لمصممي المواقع على وجه الخصوص، حيث يحتاج العميل فى كثير من الأحيان أن يطلع على صورة حقيقية لتصميم الموقع.</p>
<p class="p-lg"><img class="img-fluid" src="../../../storage/tiny_images/o0Uuo4EXoTIXaA2SoP9hLfZk9bvZhGXmisYEAObz.jpg" width="1080" height="1080" /></p>
',
                'reasons' => 'لكل الحالات',
            ],
            'en' => [
                'name' => 'نص مثال',
                'description' => 'نص مثال نص مثال نص مثال نص مثال',
                'reasons' => 'نص مثال',
            ],
        ]);
        DoctorService::create([
            'doctor_category_id'=>3,
            'image'=>'doctor.png','ar' => [
                'name' => 'البروفايل',
                'description' => '<h3 class="h3-xl blue-color">هذا النص هو مثال</h3>
<h4 class="h4-md blue-color">&nbsp;لنص يمكن أن يستبدل في نفس المساحة</h4>
<p class="p-lg">لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.<br class="line-break" />إذا كنت تحتاج إلى عدد أكبر من الفقرات يتيح لك مولد النص العربى زيادة عدد الفقرات كما تريد، النص لن يبدو مقسما ولا يحوي أخطاء لغوية، مولد النص العربى مفيد لمصممي المواقع على وجه الخصوص، حيث يحتاج العميل فى كثير من الأحيان أن يطلع على صورة حقيقية لتصميم الموقع.</p>
<p class="p-lg"><img class="img-fluid" src="../../../storage/tiny_images/o0Uuo4EXoTIXaA2SoP9hLfZk9bvZhGXmisYEAObz.jpg" width="1080" height="1080" /></p>
',
                'reasons' => 'لكل الحالات',
            ],
            'en' => [
                'name' => 'نص مثال',
                'description' => 'نص مثال نص مثال نص مثال نص مثال',
                'reasons' => 'نص مثال',
            ],
        ]);
        DoctorService::create([
            'doctor_category_id'=>3,
            'image'=>'doctor.png','ar' => [
                'name' => 'تقطيع الندب +خلايا جذعيه',
                'description' => '<h3 class="h3-xl blue-color">هذا النص هو مثال</h3>
<h4 class="h4-md blue-color">&nbsp;لنص يمكن أن يستبدل في نفس المساحة</h4>
<p class="p-lg">لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.<br class="line-break" />إذا كنت تحتاج إلى عدد أكبر من الفقرات يتيح لك مولد النص العربى زيادة عدد الفقرات كما تريد، النص لن يبدو مقسما ولا يحوي أخطاء لغوية، مولد النص العربى مفيد لمصممي المواقع على وجه الخصوص، حيث يحتاج العميل فى كثير من الأحيان أن يطلع على صورة حقيقية لتصميم الموقع.</p>
<p class="p-lg"><img class="img-fluid" src="../../../storage/tiny_images/o0Uuo4EXoTIXaA2SoP9hLfZk9bvZhGXmisYEAObz.jpg" width="1080" height="1080" /></p>
',
                'reasons' => 'لكل الحالات',
            ],
            'en' => [
                'name' => 'نص مثال',
                'description' => 'نص مثال نص مثال نص مثال نص مثال',
                'reasons' => 'نص مثال',
            ],
        ]); //53

        // الدايت واللايف ستايل

        // – أ.مي القاسم
        DoctorService::create([
            'doctor_category_id'=>4,
            'image'=>'doctor.png','ar' => [
                'name' => 'استشارات غذائية',
                'description' => '<h3 class="h3-xl blue-color">هذا النص هو مثال</h3>
<h4 class="h4-md blue-color">&nbsp;لنص يمكن أن يستبدل في نفس المساحة</h4>
<p class="p-lg">لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.<br class="line-break" />إذا كنت تحتاج إلى عدد أكبر من الفقرات يتيح لك مولد النص العربى زيادة عدد الفقرات كما تريد، النص لن يبدو مقسما ولا يحوي أخطاء لغوية، مولد النص العربى مفيد لمصممي المواقع على وجه الخصوص، حيث يحتاج العميل فى كثير من الأحيان أن يطلع على صورة حقيقية لتصميم الموقع.</p>
<p class="p-lg"><img class="img-fluid" src="../../../storage/tiny_images/o0Uuo4EXoTIXaA2SoP9hLfZk9bvZhGXmisYEAObz.jpg" width="1080" height="1080" /></p>',
                'reasons' => 'لكل الحالات',
            ],
            'en' => [
                'name' => 'نص مثال',
                'description' => 'نص مثال نص مثال نص مثال نص مثال',
                'reasons' => 'نص مثال',
            ],
        ]);
        DoctorService::create([
            'doctor_category_id'=>4,
            'image'=>'doctor.png','ar' => [
                'name' => 'تحليل مكونات الجسم',
                'description' => '<h3 class="h3-xl blue-color">هذا النص هو مثال</h3>
<h4 class="h4-md blue-color">&nbsp;لنص يمكن أن يستبدل في نفس المساحة</h4>
<p class="p-lg">لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.<br class="line-break" />إذا كنت تحتاج إلى عدد أكبر من الفقرات يتيح لك مولد النص العربى زيادة عدد الفقرات كما تريد، النص لن يبدو مقسما ولا يحوي أخطاء لغوية، مولد النص العربى مفيد لمصممي المواقع على وجه الخصوص، حيث يحتاج العميل فى كثير من الأحيان أن يطلع على صورة حقيقية لتصميم الموقع.</p>
<p class="p-lg"><img class="img-fluid" src="../../../storage/tiny_images/o0Uuo4EXoTIXaA2SoP9hLfZk9bvZhGXmisYEAObz.jpg" width="1080" height="1080" /></p>',
                'reasons' => 'جميع الحالات ويستنثنى منها الحوامل و اوقات الدورة الشهرية ويفضل الصيام ساعتين ونص او 3 ساعات قبل اجراء الفحص',
            ],
            'en' => [
                'name' => 'نص مثال',
                'description' => 'نص مثال نص مثال نص مثال نص مثال',
                'reasons' => 'نص مثال',
            ],
        ]);
        DoctorService::create([
            'doctor_category_id'=>4,
            'image'=>'doctor.png','ar' => [
                'name' => 'صقل القوام الغير جراحي',
                'description' => '<h3 class="h3-xl blue-color">هذا النص هو مثال</h3>
<h4 class="h4-md blue-color">&nbsp;لنص يمكن أن يستبدل في نفس المساحة</h4>
<p class="p-lg">لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.<br class="line-break" />إذا كنت تحتاج إلى عدد أكبر من الفقرات يتيح لك مولد النص العربى زيادة عدد الفقرات كما تريد، النص لن يبدو مقسما ولا يحوي أخطاء لغوية، مولد النص العربى مفيد لمصممي المواقع على وجه الخصوص، حيث يحتاج العميل فى كثير من الأحيان أن يطلع على صورة حقيقية لتصميم الموقع.</p>
<p class="p-lg"><img class="img-fluid" src="../../../storage/tiny_images/o0Uuo4EXoTIXaA2SoP9hLfZk9bvZhGXmisYEAObz.jpg" width="1080" height="1080" /></p>',
                'reasons' => 'جميع الحالات التي تندرج تحت أجهزة صقل القوام الغير جراحي
( فينوس وكولتيك)',
            ],
            'en' => [
                'name' => 'نص مثال',
                'description' => 'نص مثال نص مثال نص مثال نص مثال',
                'reasons' => 'نص مثال',
            ],
        ]);
        DoctorService::create([
            'doctor_category_id'=>4,
            'image'=>'doctor.png','ar' => [
                'name' => 'برامج الغذاء العلاجي',
                'description' => '<h3 class="h3-xl blue-color">هذا النص هو مثال</h3>
<h4 class="h4-md blue-color">&nbsp;لنص يمكن أن يستبدل في نفس المساحة</h4>
<p class="p-lg">لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.<br class="line-break" />إذا كنت تحتاج إلى عدد أكبر من الفقرات يتيح لك مولد النص العربى زيادة عدد الفقرات كما تريد، النص لن يبدو مقسما ولا يحوي أخطاء لغوية، مولد النص العربى مفيد لمصممي المواقع على وجه الخصوص، حيث يحتاج العميل فى كثير من الأحيان أن يطلع على صورة حقيقية لتصميم الموقع.</p>
<p class="p-lg"><img class="img-fluid" src="../../../storage/tiny_images/o0Uuo4EXoTIXaA2SoP9hLfZk9bvZhGXmisYEAObz.jpg" width="1080" height="1080" /></p>',
                'reasons' => 'الامراض المزمنة( السكر والضغط والغدة والغسيل الكلى ومشاكل الجهاز الهضمي وغيرها)',
            ],
            'en' => [
                'name' => 'نص مثال',
                'description' => 'نص مثال نص مثال نص مثال نص مثال',
                'reasons' => 'نص مثال',
            ],
        ]);
        DoctorService::create([
            'doctor_category_id'=>4,
            'image'=>'doctor.png','ar' => [
                'name' => 'برنامج توازن الهرمونات',
                'description' => '<h3 class="h3-xl blue-color">هذا النص هو مثال</h3>
<h4 class="h4-md blue-color">&nbsp;لنص يمكن أن يستبدل في نفس المساحة</h4>
<p class="p-lg">لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.<br class="line-break" />إذا كنت تحتاج إلى عدد أكبر من الفقرات يتيح لك مولد النص العربى زيادة عدد الفقرات كما تريد، النص لن يبدو مقسما ولا يحوي أخطاء لغوية، مولد النص العربى مفيد لمصممي المواقع على وجه الخصوص، حيث يحتاج العميل فى كثير من الأحيان أن يطلع على صورة حقيقية لتصميم الموقع.</p>
<p class="p-lg"><img class="img-fluid" src="../../../storage/tiny_images/o0Uuo4EXoTIXaA2SoP9hLfZk9bvZhGXmisYEAObz.jpg" width="1080" height="1080" /></p>',
                'reasons' => 'الاشخاص اللذين يعانون من مشاكل في الدورة الشهرية وصعوبة في الوزن وحالات التكيسات',
            ],
            'en' => [
                'name' => 'نص مثال',
                'description' => 'نص مثال نص مثال نص مثال نص مثال',
                'reasons' => 'نص مثال',
            ],
        ]);
        DoctorService::create([
            'doctor_category_id'=>4,
            'image'=>'doctor.png','ar' => [
                'name' => 'برنامج الحفاظ على نتائج الاجراءات التجميلية (شفط الدهون)',
                'description' => '<h3 class="h3-xl blue-color">هذا النص هو مثال</h3>
<h4 class="h4-md blue-color">&nbsp;لنص يمكن أن يستبدل في نفس المساحة</h4>
<p class="p-lg">لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.<br class="line-break" />إذا كنت تحتاج إلى عدد أكبر من الفقرات يتيح لك مولد النص العربى زيادة عدد الفقرات كما تريد، النص لن يبدو مقسما ولا يحوي أخطاء لغوية، مولد النص العربى مفيد لمصممي المواقع على وجه الخصوص، حيث يحتاج العميل فى كثير من الأحيان أن يطلع على صورة حقيقية لتصميم الموقع.</p>
<p class="p-lg"><img class="img-fluid" src="../../../storage/tiny_images/o0Uuo4EXoTIXaA2SoP9hLfZk9bvZhGXmisYEAObz.jpg" width="1080" height="1080" /></p>',
                'reasons' => 'جميع عملاء شفط الدهون',
            ],
            'en' => [
                'name' => 'نص مثال',
                'description' => 'نص مثال نص مثال نص مثال نص مثال',
                'reasons' => 'نص مثال',
            ],
        ]);
        DoctorService::create([
            'doctor_category_id'=>4,
            'image'=>'doctor.png','ar' => [
                'name' => 'برنامج الحفاظ على نتائج حقن و اجهزة السليولايت',
                'description' => '<h3 class="h3-xl blue-color">هذا النص هو مثال</h3>
<h4 class="h4-md blue-color">&nbsp;لنص يمكن أن يستبدل في نفس المساحة</h4>
<p class="p-lg">لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.<br class="line-break" />إذا كنت تحتاج إلى عدد أكبر من الفقرات يتيح لك مولد النص العربى زيادة عدد الفقرات كما تريد، النص لن يبدو مقسما ولا يحوي أخطاء لغوية، مولد النص العربى مفيد لمصممي المواقع على وجه الخصوص، حيث يحتاج العميل فى كثير من الأحيان أن يطلع على صورة حقيقية لتصميم الموقع.</p>
<p class="p-lg"><img class="img-fluid" src="../../../storage/tiny_images/o0Uuo4EXoTIXaA2SoP9hLfZk9bvZhGXmisYEAObz.jpg" width="1080" height="1080" /></p>',
                'reasons' => 'جميع عملاء جلسات السليوليت',
            ],
            'en' => [
                'name' => 'نص مثال',
                'description' => 'نص مثال نص مثال نص مثال نص مثال',
                'reasons' => 'نص مثال',
            ],
        ]);
        DoctorService::create([
            'doctor_category_id'=>4,
            'image'=>'doctor.png','ar' => [
                'name' => 'برنامج تعزيز الدهون',
                'description' => '<h3 class="h3-xl blue-color">هذا النص هو مثال</h3>
<h4 class="h4-md blue-color">&nbsp;لنص يمكن أن يستبدل في نفس المساحة</h4>
<p class="p-lg">لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.<br class="line-break" />إذا كنت تحتاج إلى عدد أكبر من الفقرات يتيح لك مولد النص العربى زيادة عدد الفقرات كما تريد، النص لن يبدو مقسما ولا يحوي أخطاء لغوية، مولد النص العربى مفيد لمصممي المواقع على وجه الخصوص، حيث يحتاج العميل فى كثير من الأحيان أن يطلع على صورة حقيقية لتصميم الموقع.</p>
<p class="p-lg"><img class="img-fluid" src="../../../storage/tiny_images/o0Uuo4EXoTIXaA2SoP9hLfZk9bvZhGXmisYEAObz.jpg" width="1080" height="1080" /></p>',
                'reasons' => 'عملاء حقن الدهون اللذين يعانون من نحافة',
            ],
            'en' => [
                'name' => 'نص مثال',
                'description' => 'نص مثال نص مثال نص مثال نص مثال',
                'reasons' => 'نص مثال',
            ],
        ]);
        DoctorService::create([
            'doctor_category_id'=>4,
            'image'=>'doctor.png','ar' => [
                'name' => 'برنامج أعراض ماقبل الدورة الشهرية',
                'description' => '<h3 class="h3-xl blue-color">هذا النص هو مثال</h3>
<h4 class="h4-md blue-color">&nbsp;لنص يمكن أن يستبدل في نفس المساحة</h4>
<p class="p-lg">لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.<br class="line-break" />إذا كنت تحتاج إلى عدد أكبر من الفقرات يتيح لك مولد النص العربى زيادة عدد الفقرات كما تريد، النص لن يبدو مقسما ولا يحوي أخطاء لغوية، مولد النص العربى مفيد لمصممي المواقع على وجه الخصوص، حيث يحتاج العميل فى كثير من الأحيان أن يطلع على صورة حقيقية لتصميم الموقع.</p>
<p class="p-lg"><img class="img-fluid" src="../../../storage/tiny_images/o0Uuo4EXoTIXaA2SoP9hLfZk9bvZhGXmisYEAObz.jpg" width="1080" height="1080" /></p>',
                'reasons' => 'الاشخاص اللذين يعانون من سوء التغذية واعراض ماقبل الدورة الشهرية وتكيسات المبايض',
            ],
            'en' => [
                'name' => 'نص مثال',
                'description' => 'نص مثال نص مثال نص مثال نص مثال',
                'reasons' => 'نص مثال',
            ],
        ]);
        DoctorService::create([
            'doctor_category_id'=>4,
            'image'=>'doctor.png','ar' => [
                'name' => 'برنامج تعزيز التبويض',
                'description' => '<h3 class="h3-xl blue-color">هذا النص هو مثال</h3>
<h4 class="h4-md blue-color">&nbsp;لنص يمكن أن يستبدل في نفس المساحة</h4>
<p class="p-lg">لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.<br class="line-break" />إذا كنت تحتاج إلى عدد أكبر من الفقرات يتيح لك مولد النص العربى زيادة عدد الفقرات كما تريد، النص لن يبدو مقسما ولا يحوي أخطاء لغوية، مولد النص العربى مفيد لمصممي المواقع على وجه الخصوص، حيث يحتاج العميل فى كثير من الأحيان أن يطلع على صورة حقيقية لتصميم الموقع.</p>
<p class="p-lg"><img class="img-fluid" src="../../../storage/tiny_images/o0Uuo4EXoTIXaA2SoP9hLfZk9bvZhGXmisYEAObz.jpg" width="1080" height="1080" /></p>',
                'reasons' => 'جميع الحالات التي ترغب بالحمل',
            ],
            'en' => [
                'name' => 'نص مثال',
                'description' => 'نص مثال نص مثال نص مثال نص مثال',
                'reasons' => 'نص مثال',
            ],
        ]);
        DoctorService::create([
            'doctor_category_id'=>4,
            'image'=>'doctor.png','ar' => [
                'name' => 'برنامج تأهيل العميل قبل وبعد الجراحات التجميلية',
                'description' => '<h3 class="h3-xl blue-color">هذا النص هو مثال</h3>
<h4 class="h4-md blue-color">&nbsp;لنص يمكن أن يستبدل في نفس المساحة</h4>
<p class="p-lg">لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.<br class="line-break" />إذا كنت تحتاج إلى عدد أكبر من الفقرات يتيح لك مولد النص العربى زيادة عدد الفقرات كما تريد، النص لن يبدو مقسما ولا يحوي أخطاء لغوية، مولد النص العربى مفيد لمصممي المواقع على وجه الخصوص، حيث يحتاج العميل فى كثير من الأحيان أن يطلع على صورة حقيقية لتصميم الموقع.</p>
<p class="p-lg"><img class="img-fluid" src="../../../storage/tiny_images/o0Uuo4EXoTIXaA2SoP9hLfZk9bvZhGXmisYEAObz.jpg" width="1080" height="1080" /></p>',
                'reasons' => 'عملاء الجراحات التجميلية',
            ],
            'en' => [
                'name' => 'نص مثال',
                'description' => 'نص مثال نص مثال نص مثال نص مثال',
                'reasons' => 'نص مثال',
            ],
        ]);
        DoctorService::create([
            'doctor_category_id'=>4,
            'image'=>'doctor.png','ar' => [
                'name' => 'برنامج تعزيز صحة البشرة والشعر والاظافر',
                'description' => '<h3 class="h3-xl blue-color">هذا النص هو مثال</h3>
<h4 class="h4-md blue-color">&nbsp;لنص يمكن أن يستبدل في نفس المساحة</h4>
<p class="p-lg">لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.<br class="line-break" />إذا كنت تحتاج إلى عدد أكبر من الفقرات يتيح لك مولد النص العربى زيادة عدد الفقرات كما تريد، النص لن يبدو مقسما ولا يحوي أخطاء لغوية، مولد النص العربى مفيد لمصممي المواقع على وجه الخصوص، حيث يحتاج العميل فى كثير من الأحيان أن يطلع على صورة حقيقية لتصميم الموقع.</p>
<p class="p-lg"><img class="img-fluid" src="../../../storage/tiny_images/o0Uuo4EXoTIXaA2SoP9hLfZk9bvZhGXmisYEAObz.jpg" width="1080" height="1080" /></p>',
                'reasons' => 'جميع الحالات التي تعاني من مشاكل البشرة والشعر والاظافر وحالات بعد التكميم وعملاء الجلدية والتجميل (الفيلر والبوتوكس والبلازما)',
            ],
            'en' => [
                'name' => 'نص مثال',
                'description' => 'نص مثال نص مثال نص مثال نص مثال',
                'reasons' => 'نص مثال',
            ],
        ]);
        DoctorService::create([
            'doctor_category_id'=>4,
            'image'=>'doctor.png','ar' => [
                'name' => 'تغذية المراهقين',
                'description' => '<h3 class="h3-xl blue-color">هذا النص هو مثال</h3>
<h4 class="h4-md blue-color">&nbsp;لنص يمكن أن يستبدل في نفس المساحة</h4>
<p class="p-lg">لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.<br class="line-break" />إذا كنت تحتاج إلى عدد أكبر من الفقرات يتيح لك مولد النص العربى زيادة عدد الفقرات كما تريد، النص لن يبدو مقسما ولا يحوي أخطاء لغوية، مولد النص العربى مفيد لمصممي المواقع على وجه الخصوص، حيث يحتاج العميل فى كثير من الأحيان أن يطلع على صورة حقيقية لتصميم الموقع.</p>
<p class="p-lg"><img class="img-fluid" src="../../../storage/tiny_images/o0Uuo4EXoTIXaA2SoP9hLfZk9bvZhGXmisYEAObz.jpg" width="1080" height="1080" /></p>',
                'reasons' => 'جميع المراهقين',
            ],
            'en' => [
                'name' => 'نص مثال',
                'description' => 'نص مثال نص مثال نص مثال نص مثال',
                'reasons' => 'نص مثال',
            ],
        ]);
        DoctorService::create([
            'doctor_category_id'=>4,
            'image'=>'doctor.png','ar' => [
                'name' => 'برنامج مضادات الالتهابات والحساسية',
                'description' => '<h3 class="h3-xl blue-color">هذا النص هو مثال</h3>
<h4 class="h4-md blue-color">&nbsp;لنص يمكن أن يستبدل في نفس المساحة</h4>
<p class="p-lg">لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.<br class="line-break" />إذا كنت تحتاج إلى عدد أكبر من الفقرات يتيح لك مولد النص العربى زيادة عدد الفقرات كما تريد، النص لن يبدو مقسما ولا يحوي أخطاء لغوية، مولد النص العربى مفيد لمصممي المواقع على وجه الخصوص، حيث يحتاج العميل فى كثير من الأحيان أن يطلع على صورة حقيقية لتصميم الموقع.</p>
<p class="p-lg"><img class="img-fluid" src="../../../storage/tiny_images/o0Uuo4EXoTIXaA2SoP9hLfZk9bvZhGXmisYEAObz.jpg" width="1080" height="1080" /></p>',
                'reasons' => 'جميع الحالات التي تعاني من تحسس او تهيج الجلد والحالات التي شخصت بامراض حساسية والغدة الدرقية',
            ],
            'en' => [
                'name' => 'نص مثال',
                'description' => 'نص مثال نص مثال نص مثال نص مثال',
                'reasons' => 'نص مثال',
            ],
        ]);
        DoctorService::create([
            'doctor_category_id'=>4,
            'image'=>'doctor.png','ar' => [
                'name' => 'برنامج تغذية الحامل',
                'description' => '<h3 class="h3-xl blue-color">هذا النص هو مثال</h3>
<h4 class="h4-md blue-color">&nbsp;لنص يمكن أن يستبدل في نفس المساحة</h4>
<p class="p-lg">لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.<br class="line-break" />إذا كنت تحتاج إلى عدد أكبر من الفقرات يتيح لك مولد النص العربى زيادة عدد الفقرات كما تريد، النص لن يبدو مقسما ولا يحوي أخطاء لغوية، مولد النص العربى مفيد لمصممي المواقع على وجه الخصوص، حيث يحتاج العميل فى كثير من الأحيان أن يطلع على صورة حقيقية لتصميم الموقع.</p>
<p class="p-lg"><img class="img-fluid" src="../../../storage/tiny_images/o0Uuo4EXoTIXaA2SoP9hLfZk9bvZhGXmisYEAObz.jpg" width="1080" height="1080" /></p>',
                'reasons' => 'جميع الراغبات بالحمل',
            ],
            'en' => [
                'name' => 'نص مثال',
                'description' => 'نص مثال نص مثال نص مثال نص مثال',
                'reasons' => 'نص مثال',
            ],
        ]);
        DoctorService::create([
            'doctor_category_id'=>4,
            'image'=>'doctor.png','ar' => [
                'name' => 'برنامج تغذية الاطفال',
                'description' => '<h3 class="h3-xl blue-color">هذا النص هو مثال</h3>
<h4 class="h4-md blue-color">&nbsp;لنص يمكن أن يستبدل في نفس المساحة</h4>
<p class="p-lg">لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.<br class="line-break" />إذا كنت تحتاج إلى عدد أكبر من الفقرات يتيح لك مولد النص العربى زيادة عدد الفقرات كما تريد، النص لن يبدو مقسما ولا يحوي أخطاء لغوية، مولد النص العربى مفيد لمصممي المواقع على وجه الخصوص، حيث يحتاج العميل فى كثير من الأحيان أن يطلع على صورة حقيقية لتصميم الموقع.</p>
<p class="p-lg"><img class="img-fluid" src="../../../storage/tiny_images/o0Uuo4EXoTIXaA2SoP9hLfZk9bvZhGXmisYEAObz.jpg" width="1080" height="1080" /></p>',
                'reasons' => 'جميع الاطفال',
            ],
            'en' => [
                'name' => 'نص مثال',
                'description' => 'نص مثال نص مثال نص مثال نص مثال',
                'reasons' => 'نص مثال',
            ],
        ]);
        DoctorService::create([
            'doctor_category_id'=>4,
            'image'=>'doctor.png','ar' => [
                'name' => 'برنامج تنشيط الحرق',
                'description' => '<h3 class="h3-xl blue-color">هذا النص هو مثال</h3>
<h4 class="h4-md blue-color">&nbsp;لنص يمكن أن يستبدل في نفس المساحة</h4>
<p class="p-lg">لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.<br class="line-break" />إذا كنت تحتاج إلى عدد أكبر من الفقرات يتيح لك مولد النص العربى زيادة عدد الفقرات كما تريد، النص لن يبدو مقسما ولا يحوي أخطاء لغوية، مولد النص العربى مفيد لمصممي المواقع على وجه الخصوص، حيث يحتاج العميل فى كثير من الأحيان أن يطلع على صورة حقيقية لتصميم الموقع.</p>
<p class="p-lg"><img class="img-fluid" src="../../../storage/tiny_images/o0Uuo4EXoTIXaA2SoP9hLfZk9bvZhGXmisYEAObz.jpg" width="1080" height="1080" /></p>',
                'reasons' => 'جميع الحالات',
            ],
            'en' => [
                'name' => 'نص مثال',
                'description' => 'نص مثال نص مثال نص مثال نص مثال',
                'reasons' => 'نص مثال',
            ],
        ]);
        DoctorService::create([
            'doctor_category_id'=>4,
            'image'=>'doctor.png','ar' => [
                'name' => 'برنامج الرياضة الغذائي',
                'description' => '<h3 class="h3-xl blue-color">هذا النص هو مثال</h3>
<h4 class="h4-md blue-color">&nbsp;لنص يمكن أن يستبدل في نفس المساحة</h4>
<p class="p-lg">لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.<br class="line-break" />إذا كنت تحتاج إلى عدد أكبر من الفقرات يتيح لك مولد النص العربى زيادة عدد الفقرات كما تريد، النص لن يبدو مقسما ولا يحوي أخطاء لغوية، مولد النص العربى مفيد لمصممي المواقع على وجه الخصوص، حيث يحتاج العميل فى كثير من الأحيان أن يطلع على صورة حقيقية لتصميم الموقع.</p>
<p class="p-lg"><img class="img-fluid" src="../../../storage/tiny_images/o0Uuo4EXoTIXaA2SoP9hLfZk9bvZhGXmisYEAObz.jpg" width="1080" height="1080" /></p>',
                'reasons' => 'جميع الرياضيين',
            ],
            'en' => [
                'name' => 'نص مثال',
                'description' => 'نص مثال نص مثال نص مثال نص مثال',
                'reasons' => 'نص مثال',
            ],
        ]);
        DoctorService::create([
            'doctor_category_id'=>4,
            'image'=>'doctor.png','ar' => [
                'name' => 'برنامج زيادة الوزن',
                'description' => '<h3 class="h3-xl blue-color">هذا النص هو مثال</h3>
<h4 class="h4-md blue-color">&nbsp;لنص يمكن أن يستبدل في نفس المساحة</h4>
<p class="p-lg">لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.<br class="line-break" />إذا كنت تحتاج إلى عدد أكبر من الفقرات يتيح لك مولد النص العربى زيادة عدد الفقرات كما تريد، النص لن يبدو مقسما ولا يحوي أخطاء لغوية، مولد النص العربى مفيد لمصممي المواقع على وجه الخصوص، حيث يحتاج العميل فى كثير من الأحيان أن يطلع على صورة حقيقية لتصميم الموقع.</p>
<p class="p-lg"><img class="img-fluid" src="../../../storage/tiny_images/o0Uuo4EXoTIXaA2SoP9hLfZk9bvZhGXmisYEAObz.jpg" width="1080" height="1080" /></p>',
                'reasons' => 'حالات النحافة الشديدة',
            ],
            'en' => [
                'name' => 'نص مثال',
                'description' => 'نص مثال نص مثال نص مثال نص مثال',
                'reasons' => 'نص مثال',
            ],
        ]);
        DoctorService::create([
            'doctor_category_id'=>4,
            'image'=>'doctor.png','ar' => [
                'name' => 'برنامج نقصان الوزن',
                'description' => '<h3 class="h3-xl blue-color">هذا النص هو مثال</h3>
<h4 class="h4-md blue-color">&nbsp;لنص يمكن أن يستبدل في نفس المساحة</h4>
<p class="p-lg">لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.<br class="line-break" />إذا كنت تحتاج إلى عدد أكبر من الفقرات يتيح لك مولد النص العربى زيادة عدد الفقرات كما تريد، النص لن يبدو مقسما ولا يحوي أخطاء لغوية، مولد النص العربى مفيد لمصممي المواقع على وجه الخصوص، حيث يحتاج العميل فى كثير من الأحيان أن يطلع على صورة حقيقية لتصميم الموقع.</p>
<p class="p-lg"><img class="img-fluid" src="../../../storage/tiny_images/o0Uuo4EXoTIXaA2SoP9hLfZk9bvZhGXmisYEAObz.jpg" width="1080" height="1080" /></p>',
                'reasons' => 'حالات زيادة الوزن',
            ],
            'en' => [
                'name' => 'نص مثال',
                'description' => 'نص مثال نص مثال نص مثال نص مثال',
                'reasons' => 'نص مثال',
            ],
        ]);
        DoctorService::create([
            'doctor_category_id'=>4,
            'image'=>'doctor.png','ar' => [
                'name' => 'برنامج تثبيت الوزن',
                'description' => '<h3 class="h3-xl blue-color">هذا النص هو مثال</h3>
<h4 class="h4-md blue-color">&nbsp;لنص يمكن أن يستبدل في نفس المساحة</h4>
<p class="p-lg">لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.<br class="line-break" />إذا كنت تحتاج إلى عدد أكبر من الفقرات يتيح لك مولد النص العربى زيادة عدد الفقرات كما تريد، النص لن يبدو مقسما ولا يحوي أخطاء لغوية، مولد النص العربى مفيد لمصممي المواقع على وجه الخصوص، حيث يحتاج العميل فى كثير من الأحيان أن يطلع على صورة حقيقية لتصميم الموقع.</p>
<p class="p-lg"><img class="img-fluid" src="../../../storage/tiny_images/o0Uuo4EXoTIXaA2SoP9hLfZk9bvZhGXmisYEAObz.jpg" width="1080" height="1080" /></p>',
                'reasons' => 'جميع الحالت التي لاتعاني من أي مشاكل فب الوزن ولكن قد تكون عرضة للزيادة بسبب الظروف الخارجية',
            ],
            'en' => [
                'name' => 'نص مثال',
                'description' => 'نص مثال نص مثال نص مثال نص مثال',
                'reasons' => 'نص مثال',
            ],
        ]);
        DoctorService::create([
            'doctor_category_id'=>4,
            'image'=>'doctor.png','ar' => [
                'name' => 'برنامج ديتوكس الدهون',
                'description' => '<h3 class="h3-xl blue-color">هذا النص هو مثال</h3>
<h4 class="h4-md blue-color">&nbsp;لنص يمكن أن يستبدل في نفس المساحة</h4>
<p class="p-lg">لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.<br class="line-break" />إذا كنت تحتاج إلى عدد أكبر من الفقرات يتيح لك مولد النص العربى زيادة عدد الفقرات كما تريد، النص لن يبدو مقسما ولا يحوي أخطاء لغوية، مولد النص العربى مفيد لمصممي المواقع على وجه الخصوص، حيث يحتاج العميل فى كثير من الأحيان أن يطلع على صورة حقيقية لتصميم الموقع.</p>
<p class="p-lg"><img class="img-fluid" src="../../../storage/tiny_images/o0Uuo4EXoTIXaA2SoP9hLfZk9bvZhGXmisYEAObz.jpg" width="1080" height="1080" /></p>',
                'reasons' => 'حالات التكميم والاشخاص الذين على حمية قاسية والذين على برامج انزال الوزن',
            ],
            'en' => [
                'name' => 'نص مثال',
                'description' => 'نص مثال نص مثال نص مثال نص مثال',
                'reasons' => 'نص مثال',
            ],
        ]);
        DoctorService::create([
            'doctor_category_id'=>4,
            'image'=>'doctor.png','ar' => [
                'name' => 'برنامج ديتوكس الاستروجين',
                'description' => '<h3 class="h3-xl blue-color">هذا النص هو مثال</h3>
<h4 class="h4-md blue-color">&nbsp;لنص يمكن أن يستبدل في نفس المساحة</h4>
<p class="p-lg">لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.<br class="line-break" />إذا كنت تحتاج إلى عدد أكبر من الفقرات يتيح لك مولد النص العربى زيادة عدد الفقرات كما تريد، النص لن يبدو مقسما ولا يحوي أخطاء لغوية، مولد النص العربى مفيد لمصممي المواقع على وجه الخصوص، حيث يحتاج العميل فى كثير من الأحيان أن يطلع على صورة حقيقية لتصميم الموقع.</p>
<p class="p-lg"><img class="img-fluid" src="../../../storage/tiny_images/o0Uuo4EXoTIXaA2SoP9hLfZk9bvZhGXmisYEAObz.jpg" width="1080" height="1080" /></p>',
                'reasons' => 'حالات زيادة الدهون وخصوصا في منطقة الارداف',
            ],
            'en' => [
                'name' => 'نص مثال',
                'description' => 'نص مثال نص مثال نص مثال نص مثال',
                'reasons' => 'نص مثال',
            ],
        ]);
        DoctorService::create([
            'doctor_category_id'=>4,
            'image'=>'doctor.png','ar' => [
                'name' => 'برنامج ديتوكس السموم',
                'description' => '<h3 class="h3-xl blue-color">هذا النص هو مثال</h3>
<h4 class="h4-md blue-color">&nbsp;لنص يمكن أن يستبدل في نفس المساحة</h4>
<p class="p-lg">لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.<br class="line-break" />إذا كنت تحتاج إلى عدد أكبر من الفقرات يتيح لك مولد النص العربى زيادة عدد الفقرات كما تريد، النص لن يبدو مقسما ولا يحوي أخطاء لغوية، مولد النص العربى مفيد لمصممي المواقع على وجه الخصوص، حيث يحتاج العميل فى كثير من الأحيان أن يطلع على صورة حقيقية لتصميم الموقع.</p>
<p class="p-lg"><img class="img-fluid" src="../../../storage/tiny_images/o0Uuo4EXoTIXaA2SoP9hLfZk9bvZhGXmisYEAObz.jpg" width="1080" height="1080" /></p>',
                'reasons' => 'للحالات التي تعاني من بهتان في البشرة اوتساقط الشعر او شيخوخة مبكرة و قلق وكسل وخمول ومشاكل النوم وعسر الهضم',
            ],
            'en' => [
                'name' => 'نص مثال',
                'description' => 'نص مثال نص مثال نص مثال نص مثال',
                'reasons' => 'نص مثال',
            ],
        ]);
        DoctorService::create([
            'doctor_category_id'=>4,
            'image'=>'doctor.png','ar' => [
                'name' => 'برنامج احتباس السوائل',
                'description' => '<h3 class="h3-xl blue-color">هذا النص هو مثال</h3>
<h4 class="h4-md blue-color">&nbsp;لنص يمكن أن يستبدل في نفس المساحة</h4>
<p class="p-lg">لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.<br class="line-break" />إذا كنت تحتاج إلى عدد أكبر من الفقرات يتيح لك مولد النص العربى زيادة عدد الفقرات كما تريد، النص لن يبدو مقسما ولا يحوي أخطاء لغوية، مولد النص العربى مفيد لمصممي المواقع على وجه الخصوص، حيث يحتاج العميل فى كثير من الأحيان أن يطلع على صورة حقيقية لتصميم الموقع.</p>
<p class="p-lg"><img class="img-fluid" src="../../../storage/tiny_images/o0Uuo4EXoTIXaA2SoP9hLfZk9bvZhGXmisYEAObz.jpg" width="1080" height="1080" /></p>',
                'reasons' => 'الحالات التي تعاني تذبذب في زيادة ونقصان سريع في الوزن وحالات عدم توازن ',
            ],
            'en' => [
                'name' => 'نص مثال',
                'description' => 'نص مثال نص مثال نص مثال نص مثال',
                'reasons' => 'نص مثال',
            ],
        ]);
        DoctorService::create([
            'doctor_category_id'=>4,
            'image'=>'doctor.png','ar' => [
                'name' => 'برنامج الترطيب',
                'description' => '<h3 class="h3-xl blue-color">هذا النص هو مثال</h3>
<h4 class="h4-md blue-color">&nbsp;لنص يمكن أن يستبدل في نفس المساحة</h4>
<p class="p-lg">لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.<br class="line-break" />إذا كنت تحتاج إلى عدد أكبر من الفقرات يتيح لك مولد النص العربى زيادة عدد الفقرات كما تريد، النص لن يبدو مقسما ولا يحوي أخطاء لغوية، مولد النص العربى مفيد لمصممي المواقع على وجه الخصوص، حيث يحتاج العميل فى كثير من الأحيان أن يطلع على صورة حقيقية لتصميم الموقع.</p>
<p class="p-lg"><img class="img-fluid" src="../../../storage/tiny_images/o0Uuo4EXoTIXaA2SoP9hLfZk9bvZhGXmisYEAObz.jpg" width="1080" height="1080" /></p>',
                'reasons' => 'وهو مناسب لحالت التي تعاني من جفاف وسء التغذية ومناسب ايضا لبرامج الصيام والذين يعانون من صداع متكرر',
            ],
            'en' => [
                'name' => 'نص مثال',
                'description' => 'نص مثال نص مثال نص مثال نص مثال',
                'reasons' => 'نص مثال',
            ],
        ]);

        //البشرة

        // – – أ – شيرين السباعي
        DoctorService::create([
            'doctor_category_id'=>5,
            'image'=>'doctor.png','ar' => [
                'name' => 'تنظيف الرؤوس السوداء',
                'description' => '<h3 class="h3-xl blue-color">هذا النص هو مثال</h3>
<h4 class="h4-md blue-color">&nbsp;لنص يمكن أن يستبدل في نفس المساحة</h4>
<p class="p-lg">لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.<br class="line-break" />إذا كنت تحتاج إلى عدد أكبر من الفقرات يتيح لك مولد النص العربى زيادة عدد الفقرات كما تريد، النص لن يبدو مقسما ولا يحوي أخطاء لغوية، مولد النص العربى مفيد لمصممي المواقع على وجه الخصوص، حيث يحتاج العميل فى كثير من الأحيان أن يطلع على صورة حقيقية لتصميم الموقع.</p>
<p class="p-lg"><img class="img-fluid" src="../../../storage/tiny_images/o0Uuo4EXoTIXaA2SoP9hLfZk9bvZhGXmisYEAObz.jpg" width="1080" height="1080" /></p>',
                'reasons' => 'البشرة الدهنية والجافه والمتصبغه والشاحبه',
            ],
            'en' => [
                'name' => 'نص مثال',
                'description' => 'نص مثال نص مثال نص مثال نص مثال',
                'reasons' => 'نص مثال',
            ],
        ]);
        DoctorService::create([
            'doctor_category_id'=>5,
            'image'=>'doctor.png','ar' => [
                'name' => 'لليزر الكربوني',
                'description' => '<h3 class="h3-xl blue-color">هذا النص هو مثال</h3>
<h4 class="h4-md blue-color">&nbsp;لنص يمكن أن يستبدل في نفس المساحة</h4>
<p class="p-lg">لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.<br class="line-break" />إذا كنت تحتاج إلى عدد أكبر من الفقرات يتيح لك مولد النص العربى زيادة عدد الفقرات كما تريد، النص لن يبدو مقسما ولا يحوي أخطاء لغوية، مولد النص العربى مفيد لمصممي المواقع على وجه الخصوص، حيث يحتاج العميل فى كثير من الأحيان أن يطلع على صورة حقيقية لتصميم الموقع.</p>
<p class="p-lg"><img class="img-fluid" src="../../../storage/tiny_images/o0Uuo4EXoTIXaA2SoP9hLfZk9bvZhGXmisYEAObz.jpg" width="1080" height="1080" /></p>',
                'reasons' => 'تحسين المسامات المفتوحه وإعطاء نضاره للبشره والتفتيح',
            ],
            'en' => [
                'name' => 'نص مثال',
                'description' => 'نص مثال نص مثال نص مثال نص مثال',
                'reasons' => 'نص مثال',
            ],
        ]);
        DoctorService::create([
            'doctor_category_id'=>5,
            'image'=>'doctor.png','ar' => [
                'name' => 'التقشير البارد',
                'description' => '<h3 class="h3-xl blue-color">هذا النص هو مثال</h3>
<h4 class="h4-md blue-color">&nbsp;لنص يمكن أن يستبدل في نفس المساحة</h4>
<p class="p-lg">لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.<br class="line-break" />إذا كنت تحتاج إلى عدد أكبر من الفقرات يتيح لك مولد النص العربى زيادة عدد الفقرات كما تريد، النص لن يبدو مقسما ولا يحوي أخطاء لغوية، مولد النص العربى مفيد لمصممي المواقع على وجه الخصوص، حيث يحتاج العميل فى كثير من الأحيان أن يطلع على صورة حقيقية لتصميم الموقع.</p>
<p class="p-lg"><img class="img-fluid" src="../../../storage/tiny_images/o0Uuo4EXoTIXaA2SoP9hLfZk9bvZhGXmisYEAObz.jpg" width="1080" height="1080" /></p>',
                'reasons' => 'توحيد لون البشره وحالات الكلف بعد الولاده',
            ],
            'en' => [
                'name' => 'نص مثال',
                'description' => 'نص مثال نص مثال نص مثال نص مثال',
                'reasons' => 'نص مثال',
            ],
        ]);
        DoctorService::create([
            'doctor_category_id'=>5,
            'image'=>'doctor.png','ar' => [
                'name' => 'الشقير',
                'description' => '<h3 class="h3-xl blue-color">هذا النص هو مثال</h3>
<h4 class="h4-md blue-color">&nbsp;لنص يمكن أن يستبدل في نفس المساحة</h4>
<p class="p-lg">لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.<br class="line-break" />إذا كنت تحتاج إلى عدد أكبر من الفقرات يتيح لك مولد النص العربى زيادة عدد الفقرات كما تريد، النص لن يبدو مقسما ولا يحوي أخطاء لغوية، مولد النص العربى مفيد لمصممي المواقع على وجه الخصوص، حيث يحتاج العميل فى كثير من الأحيان أن يطلع على صورة حقيقية لتصميم الموقع.</p>
<p class="p-lg"><img class="img-fluid" src="../../../storage/tiny_images/o0Uuo4EXoTIXaA2SoP9hLfZk9bvZhGXmisYEAObz.jpg" width="1080" height="1080" /></p>',
                'reasons' => 'الشعر الوبري الخفيف بالوجه والصدر والاكتاف والظهر',
            ],
            'en' => [
                'name' => 'نص مثال',
                'description' => 'نص مثال نص مثال نص مثال نص مثال',
                'reasons' => 'نص مثال',
            ],
        ]);
    }
}
