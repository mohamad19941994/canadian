<?php


namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class SettingController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:read_settings')->only(['index', 'socialLinks', 'socialLogin']);

    }// end of __construct

    public function general()
    {
        return view('admin.settings.general');

    }// end of index

    public function store(Request $request)
    {
        //dd($request);
        /*$request->validate([
            'email' => 'sometimes|nullable|email',
        ]);*/

        $requestData = $request->except(['_token', '_method']);

        if ($request->logo) {
            Storage::delete('public/settings/' . setting('logo'));
            $file = $request->file('logo');
            $path = $file->hashName('public/settings');

            $image = Image::make($file);
            Storage::put($path, (string) $image->encode());
            $requestData['logo'] = $request->logo->hashName();
        }

        if ($request->dark_logo) {
            Storage::delete('public/settings/' . setting('dark_logo'));
            $file = $request->file('dark_logo');
            $path = $file->hashName('public/settings');
            $dark_image = Image::make($file);
            Storage::put($path, (string) $dark_image->encode());
            $requestData['dark_logo'] = $request->dark_logo->hashName();
        }

        if ($request->fav_icon) {

            Storage::delete('public/settings/' . setting('fav_icon'));
            $file = $request->file('fav_icon');
            $path = $file->hashName('public/settings');
            //dd($path);
            $image = Image::make($file);
            Storage::put($path, (string) $image->encode());
            $requestData['fav_icon'] = $request->fav_icon->hashName();
        }

        if ($request->skin_shows) {
            Storage::delete('public/settings/' . setting('skin_shows'));
            $file = $request->file('skin_shows');
            $path = $file->hashName('public/settings');

            $image = Image::make($file);
            Storage::put($path, (string) $image->encode());
            $requestData['skin_shows'] = $request->skin_shows->hashName();
        }

        if ($request->laser_shows) {
            Storage::delete('public/settings/' . setting('laser_shows'));
            $file = $request->file('laser_shows');
            $path = $file->hashName('public/settings');

            $image = Image::make($file);
            Storage::put($path, (string) $image->encode());
            $requestData['laser_shows'] = $request->laser_shows->hashName();
        }

        if ($request->nutrition_offers) {
            Storage::delete('public/settings/' . setting('nutrition_offers'));
            $file = $request->file('nutrition_offers');
            $path = $file->hashName('public/settings');

            $image = Image::make($file);
            Storage::put($path, (string) $image->encode());
            $requestData['nutrition_offers'] = $request->nutrition_offers->hashName();
        }

        if ($request->dental_shows) {
            Storage::delete('public/settings/' . setting('dental_shows'));
            $file = $request->file('dental_shows');
            $path = $file->hashName('public/settings');

            $image = Image::make($file);
            Storage::put($path, (string) $image->encode());
            $requestData['dental_shows'] = $request->dental_shows->hashName();
        }

        if ($request->skin_offers) {
            Storage::delete('public/settings/' . setting('skin_offers'));
            $file = $request->file('skin_offers');
            $path = $file->hashName('public/settings');

            $image = Image::make($file);
            Storage::put($path, (string) $image->encode());
            $requestData['skin_offers'] = $request->skin_offers->hashName();
        }

        if ($request->surgery_offers) {
            Storage::delete('public/settings/' . setting('surgery_offers'));
            $file = $request->file('surgery_offers');
            $path = $file->hashName('public/settings');

            $image = Image::make($file);
            Storage::put($path, (string) $image->encode());
            $requestData['surgery_offers'] = $request->surgery_offers->hashName();
        }

        if ($request->dr_ahmad) {
            Storage::delete('public/settings/' . setting('dr_ahmad'));
            $file = $request->file('dr_ahmad');
            $path = $file->hashName('public/settings');

            $image = Image::make($file);
            Storage::put($path, (string) $image->encode());
            $requestData['dr_ahmad'] = $request->dr_ahmad->hashName();
        }
        //dd($requestData);
        setting($requestData)->save();
        session()->flash('success', __('site.updated_successfully'));
        return redirect()->back();

    }// end of store

}//end of controller


