<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Models\ServiceCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;
use Intervention\Image\Facades\Image;
use Yajra\DataTables\DataTables;
Use Redirect;


class ServiceController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:read_services')->only(['index']);
        $this->middleware('permission:create_services')->only(['create', 'store']);
        $this->middleware('permission:update_services')->only(['edit', 'update']);
        $this->middleware('permission:delete_services')->only(['delete', 'bulk_delete']);

    }// end of __construct

    public function index()
    {
        return view('admin.services.index');

    }// end of index

    public function data()
    {
        $services = Service::orderBy('created_at', 'desc')->get();

        return DataTables::of($services)
            ->addColumn('record_select', 'admin.services.data_table.record_select')
            ->addColumn('actions', 'admin.services.data_table.actions')
            ->addColumn('images', 'admin.services.data_table.images')
            ->rawColumns(['record_select', 'actions', 'images'])
            ->toJson();




    }// end of data

    public function create()
    {
        $categories = ServiceCategory::all();
        return view('admin.services.create', compact('categories'));

    }// end of create

    public function store(Request $request)
    {

        $rules = [
        ];
        foreach (config('translatable.locales') as $locale) {

            $rules += [$locale . '.name' => ['required', Rule::unique('service_translations', 'name')]];
            $rules += [$locale . '.description' => ['required']];
            $rules += [$locale . '.content' => ['required']];

        }//end of for each

        $request->validate($rules);
        $request_data = $request->except(['image']);

        if ($request->image) {

            $file = $request->file('image');

            $path = $file->hashName('public/service_images');

            $image = Image::make($file);

            /*$image->resize(300, null, function ($constraint) {
                $constraint->aspectRatio();
            });*/

            Storage::put($path, (string) $image->encode());

            $request_data['image'] = $request->image->hashName();

        }//end of if

        if ($request->icon) {

            $file = $request->file('icon');

            $path = $file->hashName('public/service_images');

            $icon = Image::make($file);

            Storage::put($path, (string) $icon->encode());

            $request_data['icon'] = $request->icon->hashName();

        }//end of if

        //dd($request_data);

        Service::create($request_data);

        session()->flash('success', __('site.added_successfully'));
        return redirect()->route('admin.services.index');

    }// end of store

    public function edit(Service $service)
    {
        $categories = ServiceCategory::all();
        return view('admin.services.edit', compact('service', 'categories'));

    }// end of edit

    public function update(Request $request, Service $service)
    {

        $rules = [
        ];


        foreach (config('translatable.locales') as $locale) {

            $rules += [$locale . '.name' => ['required'/*, Rule::unique('service_translations', 'name')->ignore($service->id, 'service_id')*/]];
            $rules += [$locale . '.description' => 'required'];
            $rules += [$locale . '.content' => 'required'];

        }//end of  for each

        //dd($rules);

        $request->validate($rules);

        $request_data = $request->all();

        if ($request->image) {

            if ($service->image != null) {

                Storage::delete('public/service_images/' . $service->image);

            }//end of if
            $file = $request->file('image');

            $path = $file->hashName('public/service_images');

            $image = Image::make($file);

            Storage::put($path, (string) $image->encode());

            $request_data['image'] = $request->image->hashName();

        }//end of if
        if ($request->icon) {

            if ($service->icon != null) {

                Storage::delete('public/service_images/' . $service->icon);

            }//end of if
            $file = $request->file('icon');

            $path = $file->hashName('public/service_images');

            $icon = Image::make($file);

            Storage::put($path, (string) $icon->encode());

            $request_data['icon'] = $request->icon->hashName();

        }//end of if

        $service->update($request_data);
        session()->flash('success', __('site.updated_successfully'));
        return redirect()->route('admin.services.index');

    }// end of update

    public function destroy(Service $service)
    {
        if ($service->image != null) {

            Storage::delete('public/service_images/' . $service->image);

        }//end of if
        $this->delete($service);
        session()->flash('success', __('site.deleted_successfully'));
        return response(__('site.deleted_successfully'));

    }// end of destroy

    public function bulkDelete()
    {
        foreach (json_decode(request()->record_ids) as $recordId) {

            $service = Service::FindOrFail($recordId);

            if ($service->image != null) {

                Storage::delete('public/service_images/' . $service->image);

            }//end of if

            $this->delete($service);

        }//end of for each

        session()->flash('success', __('site.deleted_successfully'));
        return response(__('site.deleted_successfully'));

    }// end of bulkDelete

    private function delete(Service $service)
    {
        $service->delete();

    }// end of delete

    public function dentistry()
    {
        $service = Service::where('id', 1)->get();
        $service = $service->all();
        //dd($service);
        return view('admin.services.dentistry', compact('service'));

    }// end of delete

    public function dentistryPost(Request $request)
    {
        $service = Service::where('id', 1)->get();
        $request_data = $request->all();

        if ($request->image) {

            if ($service[0]->image != null) {

                Storage::delete('public/service_images/' . $service[0]->image);

            }//end of if
            $file = $request->file('image');

            $path = $file->hashName('public/service_images');

            $image = Image::make($file);

            Storage::put($path, (string) $image->encode());

            $request_data['image'] = $request->image->hashName();

        }//end of if
        if ($request->icon) {

            if ($service[0]->icon != null) {

                Storage::delete('public/service_images/' . $service[0]->icon);

            }//end of if
            $file = $request->file('icon');

            $path = $file->hashName('public/service_images');

            $icon = Image::make($file);

            Storage::put($path, (string) $icon->encode());

            $request_data['icon'] = $request->icon->hashName();

        }//end of if

        $service[0]->update($request_data);

        session()->flash('success', __('site.updated_successfully'));

        //return Redirect::back()->flash('success', __('site.updated_successfully'));
        return Redirect::back()->with('message',__('site.updated_successfully'));
        //return redirect()->back()->flash('success','site.updated_successfully');

    }// end of delete

    public function dermatophytes()
    {
        $service = Service::where('id', 2)->get();
        $service = $service->all();
        //dd($service);
        return view('admin.services.dermatophytes', compact('service'));

    }// end of delete

    public function dermatophytesPost(Request $request)
    {


        $service = Service::where('id', 2)->get();
        $request_data = $request->all();

        if ($request->image) {

            if ($service[0]->image != null) {

                Storage::delete('public/service_images/' . $service[0]->image);

            }//end of if
            $file = $request->file('image');

            $path = $file->hashName('public/service_images');

            $image = Image::make($file);

            Storage::put($path, (string) $image->encode());

            $request_data['image'] = $request->image->hashName();

        }//end of if
        if ($request->icon) {

            if ($service[0]->icon != null) {

                Storage::delete('public/service_images/' . $service[0]->icon);

            }//end of if
            $file = $request->file('icon');

            $path = $file->hashName('public/service_images');

            $icon = Image::make($file);

            Storage::put($path, (string) $icon->encode());

            $request_data['icon'] = $request->icon->hashName();

        }//end of if

        $service[0]->update($request_data);

        session()->flash('success', __('site.updated_successfully'));

        //return Redirect::back()->flash('success', __('site.updated_successfully'));
        return Redirect::back()->with('message',__('site.updated_successfully'));
        //return redirect()->back()->with('success','site.updated_successfully');

    }// end of delete

    public function nutrition()
    {
        $service = Service::where('id', 3)->get();
        $service = $service->all();
        //dd($service);
        return view('admin.services.nutrition', compact('service'));

    }// end of delete

    public function nutritionPost(Request $request)
    {
        $service = Service::where('id', 3)->get();
        $request_data = $request->all();
        if ($request->image) {

            if ($service[0]->image != null) {

                Storage::delete('public/service_images/' . $service[0]->image);

            }//end of if
            $file = $request->file('image');

            $path = $file->hashName('public/service_images');

            $image = Image::make($file);

            Storage::put($path, (string) $image->encode());

            $request_data['image'] = $request->image->hashName();

        }//end of if
        if ($request->icon) {

            if ($service[0]->icon != null) {

                Storage::delete('public/service_images/' . $service[0]->icon);

            }//end of if
            $file = $request->file('icon');

            $path = $file->hashName('public/service_images');

            $icon = Image::make($file);

            Storage::put($path, (string) $icon->encode());

            $request_data['icon'] = $request->icon->hashName();

        }//end of if

        $service[0]->update($request_data);

        session()->flash('success', __('site.updated_successfully'));

        //return Redirect::back()->flash('success', __('site.updated_successfully'));
        return Redirect::back()->with('message',__('site.updated_successfully'));
        //return redirect()->back()->with('success','site.updated_successfully');

    }// end of delete

    public function devices()
    {
        $service = Service::where('id', 4)->get();
        $service = $service->all();
        //dd($service);
        return view('admin.services.devices', compact('service'));

    }// end of delete

    public function devicesPost(Request $request)
    {
        $service = Service::where('id', 4)->get();
        $request_data = $request->all();
        if ($request->image) {

            if ($service[0]->image != null) {

                Storage::delete('public/service_images/' . $service[0]->image);

            }//end of if
            $file = $request->file('image');

            $path = $file->hashName('public/service_images');

            $image = Image::make($file);

            Storage::put($path, (string) $image->encode());

            $request_data['image'] = $request->image->hashName();

        }//end of if
        if ($request->icon) {

            if ($service[0]->icon != null) {

                Storage::delete('public/service_images/' . $service[0]->icon);

            }//end of if
            $file = $request->file('icon');

            $path = $file->hashName('public/service_images');

            $icon = Image::make($file);

            Storage::put($path, (string) $icon->encode());

            $request_data['icon'] = $request->icon->hashName();

        }//end of if

        $service[0]->update($request_data);

        session()->flash('success', __('site.updated_successfully'));

        //return Redirect::back()->flash('success', __('site.updated_successfully'));
        return Redirect::back()->with('message',__('site.updated_successfully'));
        //return redirect()->back()->with('success','site.updated_successfully');

    }// end of delete

}
