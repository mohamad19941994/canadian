<?php

use Illuminate\Support\Facades\Route;
use Spatie\Sitemap\SitemapGenerator;

use App\Models\Category;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\URL;


Route::prefix(LaravelLocalization::setLocale())
    ->middleware([
        'auth',
    ])
    ->group(function () {
        Route::get('add-to-cart', [\App\Http\Controllers\WebController::class, 'addToCartPost'])->name('add.to.cart');
        Route::get('cart', [\App\Http\Controllers\WebController::class, 'cart'])->name('cart');
        Route::get('cart/remove', [\App\Http\Controllers\WebController::class, 'cartRemove'])->name('cart.remove');
        Route::get('cart/quantity/update', [\App\Http\Controllers\WebController::class, 'cartQuantityUpdate'])->name('cart.quantity.update');
        Route::get('payment_success', [\App\Http\Controllers\StripePaymentController::class, 'paymentSuccess'])->name('payment_success');
        Route::get('payment_cancel', [\App\Http\Controllers\StripePaymentController::class, 'paymentCancel'])->name('payment_cancel');

        Route::controller(\App\Http\Controllers\StripePaymentController::class)->group(function(){
            Route::get('stripe', 'stripePost')->name('stripe.checkout');
        });
    });
/*Route::get('payment', 'App\Http\Controllers\WebController@payment')->name('payment');*/

Route::get('tap-payment', 'App\Http\Controllers\TapController@form')->name('tap.form');
Route::post('tap-payment', 'App\Http\Controllers\TapController@payment')->name('tap.payment');
Route::any('tap-callback','App\Http\Controllers\TapController@callback')->name('tap.callback');

Route::get('hyperpay', 'App\Http\Controllers\HyperpayController@form')->name('tap.form');
Route::post('hyperpay', 'App\Http\Controllers\TapController@payment')->name('tap.payment');
Route::any('hyperpay-callback','App\Http\Controllers\TapController@callback')->name('tap.callback');


Route::get('moyasar-payment', 'App\Http\Controllers\MoyasarController@form')->name('moyasar.form');
Route::post('moyasar-payment', 'App\Http\Controllers\MoyasarController@payment')->name('moyasar.payment');
Route::any('moyasar-callback','App\Http\Controllers\MoyasarController@callback')->name('moyasar.callback');


//Clear Cache facade value:
Route::get('/fix', function () {
    $exitCode = Artisan::call('cache:clear');
    //$exitCode = Artisan::call('optimize');
    $exitCode = Artisan::call('route:clear');
    $exitCode = Artisan::call('view:clear');
    $exitCode = Artisan::call('config:cache');
    return '<h1>Cache facade value cleared</h1>';
});
// FCM

//for facebook
Route::get('/callback', 'WelcomeController@callback')->name('callback');
Route::get('/privacy', 'WelcomeController@privacy')->name('privacy');
Route::get('/terms', 'WelcomeController@terms')->name('terms');

Route::any('/thumbnail/{width}/{height}/{quality}/{filepath}', 'App\Http\Controllers\ImageController@getImage')->where(['filepath' => '.*']);

Route::post('/post/image/upload', 'TinyController@uploadImage')->name('post.image.upload');
Route::post('/uppy/image/upload', 'TinyController@uppyImage')->name('uppy.image.upload');


Route::prefix(LaravelLocalization::setLocale())
    ->middleware([
        'auth',
    ])
    ->group(function () {

        Route::get('/appointment', 'App\Http\Controllers\WebController@appointment')->name('appointment');


    });



Route::prefix(LaravelLocalization::setLocale())
    ->middleware([
        'localeSessionRedirect',
        'localizationRedirect',
        'localeViewPath',
    ])
    ->group(function () {

        Route::get('/', 'App\Http\Controllers\WebController@index')->name('/');

        Route::get('bank_accounts', 'App\Http\Controllers\WebController@bank_accounts')->name('bank_accounts');
        Route::get('kudus', 'App\Http\Controllers\WebController@kudus')->name('kudus');

        // عروض البشرة
        Route::get('/skin-shows', 'App\Http\Controllers\WebController@skin_shows')->name('skin-shows');

        // عروض الليزر
        Route::get('/laser-shows', 'App\Http\Controllers\WebController@laser_shows')->name('laser-shows');

        // عروض التغذية
        Route::get('/nutrition-offers', 'App\Http\Controllers\WebController@nutrition_offers')->name('nutrition-offers');

        // عروض الأسنان
        Route::get('/dental-shows', 'App\Http\Controllers\WebController@dental_shows')->name('dental-shows');

        // عروض الجلدية
        Route::get('/skin-offers', 'App\Http\Controllers\WebController@skin_offers')->name('skin-offers');

        // عروض التجميل
        Route::get('/surgery-offers', 'App\Http\Controllers\WebController@surgery_offers')->name('surgery-offers');

        // تكبير الثدي
        Route::get('/dr-ahmad', 'App\Http\Controllers\WebController@dr_ahmad')->name('surgery-offers');


        //Route::get('/home', 'HomeController@index')->name('home');
        Route::get('/blogs', 'App\Http\Controllers\WebController@blogs')->name('blogs');
        Route::get('/campaigns', 'App\Http\Controllers\WebController@campaigns')->name('campaigns');
        Route::get('/services', 'App\Http\Controllers\WebController@services')->name('services');
        Route::get('/our-works', 'App\Http\Controllers\WebController@our_works')->name('our-works');
        Route::get('/about_us', 'App\Http\Controllers\WebController@about')->name('about_us');
        Route::get('/partnerships', 'App\Http\Controllers\WebController@partnerships')->name('partnerships');
        Route::get('/branches', 'App\Http\Controllers\WebController@branches')->name('branches');
        Route::get('/contact_us', 'App\Http\Controllers\WebController@contact')->name('contact_us');
        Route::get('/doctors', 'App\Http\Controllers\WebController@doctors')->name('doctors');
        Route::get('/galleries', 'App\Http\Controllers\WebController@galleries')->name('galleries');
        Route::get('/videos', 'App\Http\Controllers\WebController@videos')->name('videos');
        Route::get('/jobs', 'App\Http\Controllers\WebController@jobs')->name('jobs');
        Route::get('/doctors/{category}', 'App\Http\Controllers\WebController@doctor_section')->name('doctors.section');
        //Route::get('/doctor-profile', 'App\Http\Controllers\WebController@doctor_profile')->name('doctor-profile');

        Route::post('contact', 'App\Http\Controllers\WebController@contact_form')->name('contact.post');
        Route::post('landing', 'App\Http\Controllers\WebController@landing_form')->name('landing.post');
        Route::post('appointment', 'App\Http\Controllers\WebController@appointment_form')->name('appointment.post');
        Route::post('subscribe', 'App\Http\Controllers\WebController@subscribe')->name('subscribe.post');
        Route::get('page/{page}/{slug?}', 'App\Http\Controllers\WebController@page')->name('page.show');
        Route::get('blog/{blog}/{slug?}', 'App\Http\Controllers\WebController@single_blog')->name('blog.show');
        Route::get('campaign/{campaign}/{slug?}', 'App\Http\Controllers\WebController@single_campaign')->name('campaign.show');
        //Route::get('blog/{slug}', 'App\Http\Controllers\WebController@blog_show')->name('blog.show');
        //Route::get('service/{slug?}', 'App\Http\Controllers\WebController@service_show')->name('service.show');
        Route::get('service/{category}/{slug?}', 'App\Http\Controllers\WebController@service_show')->name('service.show');
        Route::get('doctors/{category}/{slug?}', 'App\Http\Controllers\WebController@doctors_show')->name('doctors.show');
        //Route::post('service/{service}/{slug?}', 'App\Http\Controllers\WebController@contact_service_form')->name('service.post');
        Route::get('doctor-services/{service}/{slug?}', 'App\Http\Controllers\WebController@doctor_services')->name('doctor_services.show');
        Route::get('doctor-profile/{doctor}/{slug?}', 'App\Http\Controllers\WebController@doctor_profile')->name('doctor_profile.show');
        Route::get('category/{category}/{slug?}', 'App\Http\Controllers\WebController@category_show')->name('category.show');
        Route::get('service_category/{service_category}/{slug?}', 'Admin\ServiceCategoryController@show')->name('service_category.show');

        // Authentication Routes...
        Route::redirect('cp', 'login');
        Route::get('login', 'App\Http\Controllers\Auth\LoginController@showLoginForm')->name('login');
        Route::post('login', 'App\Http\Controllers\Auth\LoginController@login');
        //Route::post('logout', 'Auth\LoginController@logout')->name('logout');
        Route::get('/logout', 'App\Http\Controllers\Auth\LoginController@logout')->name('logout');

        // Registration Routes...
        Route::get('register', 'App\Http\Controllers\Auth\RegisterController@showRegistrationForm')->name('register');
        Route::post('register', 'App\Http\Controllers\Auth\RegisterController@register');

        // Password Reset Routes...
        Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm');
        Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail');
        Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm');
        Route::post('password/reset', 'Auth\ResetPasswordController@reset');



        Route::group(['middleware' => ['admin']], function () {

        });

        //user register
        //Route::get('user/register', 'App\Http\Controllers\Auth\RegisterController@showRegistrationForm')->name('user.register');
        //Route::post('user/register', 'App\Http\Controllers\Auth\RegisterController@register');

        /*Route::get('user/login', 'App\Http\Controllers\Auth\RegisterController@showUserLoginForm')->name('user.login');
        Route::post('user/login', 'App\Http\Controllers\Auth\RegisterController@userLogin');*/


        //Route::get('user/login', 'App\Http\Controllers\Auth\LoginController@showUserLoginForm')->name('user.login');
        //Route::post('user/login', 'App\Http\Controllers\Auth\LoginController@userLogin');

        //user profile

        Route::middleware('role:user|super_admin')->get('user/profile/{user}', 'App\Http\Controllers\WebController@showUserProfile')->name('user.profile');



    });
