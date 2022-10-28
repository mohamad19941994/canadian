<?php
// tiny image upload
Route::post('/post/image/upload', 'TinyController@uploadImage')->name('post.image.upload');

// uppy image upload
Route::post('/uppy/image/upload', 'TinyController@uppyImage')->name('uppy.image.upload');

// Facebook login
Route::get('login/facebook', [App\Http\Controllers\Admin\FaceBookController::class, 'redirectToFacebook'])->name('login.facebook');
Route::get('login/facebook/callback', [App\Http\Controllers\Admin\FaceBookController::class, 'handleFacebookCallback']);

// Google login
Route::get('login/google', [App\Http\Controllers\Admin\GoogleController::class, 'redirectToGoogle'])->name('login.google');
Route::get('login/google/callback', [App\Http\Controllers\Admin\GoogleController::class, 'handleGoogleCallback']);

// Twitter login
Route::get('login/twitter', [App\Http\Controllers\Admin\TwitterController::class, 'redirectToTwitter'])->name('login.twitter');
Route::get('login/twitter/callback', [App\Http\Controllers\Admin\TwitterController::class, 'handleTwitterCallback']);

Route::prefix(LaravelLocalization::setLocale())->middleware([
    'localeSessionRedirect',
    'localizationRedirect',
    'localeViewPath',
    'auth',
    'role:admin|super_admin',
])
    ->group(function () {

        Route::name('admin.')->prefix('admin')->group(function () {

            //home
            Route::get('/home/top_statistics', 'HomeController@topStatistics')->name('home.top_statistics');
            Route::get('/home/movies_chart', 'HomeController@moviesChart')->name('home.movies_chart');
            Route::get('/home', 'HomeController@index')->name('home');

            //admin routes
            Route::get('/admins/data', 'AdminController@data')->name('admins.data');
            Route::delete('/admins/bulk_delete', 'AdminController@bulkDelete')->name('admins.bulk_delete');
            Route::resource('admins', 'AdminController');

            //user routes
            Route::get('/users/data', 'UserController@data')->name('users.data');
            Route::delete('/users/bulk_delete', 'UserController@bulkDelete')->name('users.bulk_delete');
            Route::resource('users', 'UserController');

            //slider routes
            Route::get('/sliders/data', 'SliderController@data')->name('sliders.data');
            Route::delete('/sliders/bulk_delete', 'SliderController@bulkDelete')->name('sliders.bulk_delete');
            Route::resource('sliders', 'SliderController');

            // change password routes
            Route::get('change-password/{id}', 'ChangePasswordController@index')->name('password.reset');
            Route::post('change-password/{id}', 'ChangePasswordController@store')->name('change.password');

            //blog routes
            Route::get('/blogs/data', 'BlogController@data')->name('blogs.data');
            Route::delete('/blogs/bulk_delete', 'BlogController@bulkDelete')->name('blogs.bulk_delete');
            Route::resource('blogs', 'BlogController');

            //video routes
            Route::get('/videos/data', 'VideoController@data')->name('videos.data');
            Route::delete('/videos/bulk_delete', 'VideoController@bulkDelete')->name('videos.bulk_delete');
            Route::resource('videos', 'VideoController');

            //photo routes
            Route::get('/photos/data', 'PhotoController@data')->name('photos.data');
            Route::delete('/photos/bulk_delete', 'PhotoController@bulkDelete')->name('photos.bulk_delete');
            Route::resource('photos', 'PhotoController');

            //work routes
            Route::get('/works/data', 'WorkController@data')->name('works.data');
            Route::delete('/works/bulk_delete', 'WorkController@bulkDelete')->name('works.bulk_delete');
            Route::resource('works', 'WorkController');

            //customer routes
            Route::get('/customers/data', 'CustomerController@data')->name('customers.data');
            Route::delete('/customers/bulk_delete', 'CustomerController@bulkDelete')->name('customers.bulk_delete');
            Route::resource('customers', 'CustomerController');

            //contacts routes
            Route::get('/contacts/data', 'ContactController@data')->name('contacts.data');
            Route::delete('/contacts/bulk_delete', 'ContactController@bulkDelete')->name('contacts.bulk_delete');
            Route::resource('contacts', 'ContactController');

            //landings routes
            Route::get('/landings/data', 'LandingController@data')->name('landings.data');
            Route::delete('/landings/bulk_delete', 'LandingController@bulkDelete')->name('landings.bulk_delete');
            Route::resource('landings', 'LandingController');

            //appointments routes
            Route::get('/appointments/data', 'AppointmentController@data')->name('appointments.data');
            Route::delete('/appointments/bulk_delete', 'AppointmentController@bulkDelete')->name('appointments.bulk_delete');
            Route::resource('appointments', 'AppointmentController');

            //subscribes routes
            Route::get('/subscribes/data', 'SubscribeController@data')->name('subscribes.data');
            Route::delete('/subscribes/bulk_delete', 'SubscribeController@bulkDelete')->name('subscribes.bulk_delete');
            Route::resource('subscribes', 'SubscribeController');

            //notification routes
            Route::get('/notifications/data', 'NotificationController@data')->name('notifications.data');
            Route::delete('/notifications/bulk_delete', 'NotificationController@bulkDelete')->name('notifications.bulk_delete');
            Route::resource('notifications', 'NotificationController');

            //category routes
            Route::get('/categories/data', 'CategoryController@data')->name('categories.data');
            Route::delete('/categories/bulk_delete', 'CategoryController@bulkDelete')->name('categories.bulk_delete');
            Route::resource('categories', 'CategoryController');

            //page category routes
            Route::get('/page_categories/data', 'PageCategoryController@data')->name('page_categories.data');
            Route::delete('/page_categories/bulk_delete', 'PageCategoryController@bulkDelete')->name('page_categories.bulk_delete');
            Route::resource('page_categories', 'PageCategoryController');

            //doctor category routes
            Route::get('/doctor_categories/data', 'DoctorCategoryController@data')->name('doctor_categories.data');
            Route::delete('/doctor_categories/bulk_delete', 'DoctorCategoryController@bulkDelete')->name('doctor_categories.bulk_delete');
            Route::resource('doctor_categories', 'DoctorCategoryController');

            //doctor services routes
            Route::get('/doctor_services/data', 'DoctorServiceController@data')->name('doctor_services.data');
            Route::get('doctor_services/get', 'DoctorServiceController@doctor_services')->name('doctor_services.get');
            Route::delete('/doctor_services/bulk_delete', 'DoctorServiceController@bulkDelete')->name('doctor_services.bulk_delete');
            Route::resource('doctor_services', 'DoctorServiceController');

            //doctors routes
            Route::get('/doctors/data', 'DoctorController@data')->name('doctors.data');
            Route::delete('/doctors/bulk_delete', 'DoctorController@bulkDelete')->name('doctors.bulk_delete');
            Route::resource('doctors', 'DoctorController');


            //service category routes
            Route::get('/service_categories/data', 'ServiceCategoryController@data')->name('service_categories.data');
            Route::delete('/service_categories/bulk_delete', 'ServiceCategoryController@bulkDelete')->name('service_categories.bulk_delete');
            Route::resource('service_categories', 'ServiceCategoryController');

            //page routes
            Route::get('/pages/data', 'PageController@data')->name('pages.data');
            Route::delete('/pages/bulk_delete', 'PageController@bulkDelete')->name('pages.bulk_delete');
            Route::resource('pages', 'PageController');

            //services routes
            Route::get('/services/data', 'ServiceController@data')->name('services.data');
            Route::delete('/services/bulk_delete', 'ServiceController@bulkDelete')->name('services.bulk_delete');
            /*Route::resource('services', 'ServiceController');*/
            // dentistry
            Route::get('services/dentistry', 'ServiceController@dentistry')->name('services.dentistry');
            Route::post('services/dentistry', 'ServiceController@dentistryPost')->name('services.dentistry.store');
            // dermatophytes
            Route::get('services/dermatophytes', 'ServiceController@dermatophytes')->name('services.dermatophytes');
            Route::post('services/dermatophytes', 'ServiceController@dermatophytesPost')->name('services.dermatophytes.store');
            // nutrition
            Route::get('services/nutrition', 'ServiceController@nutrition')->name('services.nutrition');
            Route::post('services/nutrition', 'ServiceController@nutritionPost')->name('services.nutrition.store');
            // devices
            Route::get('services/devices', 'ServiceController@devices')->name('services.devices');
            Route::post('services/devices', 'ServiceController@devicesPost')->name('services.devices.store');


            //setting routes
            Route::get('/settings/general', 'SettingController@general')->name('settings.general');
            // Route::get('/settings/social_links', 'SettingController@socialLinks')->name('settings.social_links');
            // Route::get('/settings/mobile_links', 'SettingController@mobileLinks')->name('settings.mobile_links');
            Route::resource('settings', 'SettingController')->only(['store']);

            //profile routes
            Route::get('/profile/edit', 'ProfileController@edit')->name('profile.edit');
            Route::put('/profile/update', 'ProfileController@update')->name('profile.update');

            //FCM routes
            Route::get('/profile/edit', 'ProfileController@edit')->name('profile.edit');
            Route::put('/profile/update', 'ProfileController@update')->name('profile.update');

            Route::get('/fcm', 'HomeController@fcm')->name('fcm');
            Route::post('/save-token', 'HomeController@saveToken')->name('save-token');
            Route::post('/send-notification', 'HomeController@sendNotification')->name('send.notification');





            Route::name('profile.')->namespace('Profile')->group(function () {

                //password routes
                Route::get('/password/edit', 'PasswordController@edit')->name('password.edit');
                Route::put('/password/update', 'PasswordController@update')->name('password.update');

            });

        });

    });
