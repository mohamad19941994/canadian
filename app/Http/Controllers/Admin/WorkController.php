<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Models\Work;
use App\Models\WorkTranslation;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;
use Intervention\Image\Facades\Image;
use Yajra\DataTables\DataTables;

class WorkController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:read_works')->only(['index']);
        $this->middleware('permission:create_works')->only(['create', 'store']);
        $this->middleware('permission:update_works')->only(['edit', 'update']);
        $this->middleware('permission:delete_works')->only(['delete', 'bulk_delete']);

    }// end of __construct

    public function index()
    {
        return view('admin.works.index');

    }// end of index

    public function data()
    {
        $works = Work::orderBy('id', 'desc')->get();

        return DataTables::of($works)
            ->addColumn('record_select', 'admin.works.data_table.record_select')
            ->addColumn('actions', 'admin.works.data_table.actions')
            ->addColumn('images', 'admin.works.data_table.images')
            ->rawColumns(['record_select', 'actions', 'images'])
            ->toJson();

    }// end of data

    public function create()
    {
        $services = Service::all();
        return view('admin.works.create', compact('services'));

    }// end of create

    public function store(Request $request)
    {
        $rules = [
            'service_id' => 'required',
        ];
        foreach (config('translatable.locales') as $locale) {

            $rules += [$locale . '.name' => ['required', Rule::unique('work_translations', 'name')]];
            $rules += [$locale . '.description' => ['required']];
            /*$rules += [$locale . '.subhead' => ['sometimes']];
            $rules += [$locale . '.customer' => ['sometimes']];*/
            $rules += [$locale . '.meta_title' => ['required']];
            $rules += [$locale . '.meta_description' => ['required']];
            $rules += [$locale . '.keywords' => ['required']];
            $rules += [$locale . '.image_alt' => ['required']];


        }//end of for each

        $request->validate($rules);
        $request_data = $request->except(['image', 'image_video']);

        if ($request->image) {

            $file = $request->file('image');

            $path = $file->hashName('public/work_images');

            $image = Image::make($file);

            /*$image->resize(300, null, function ($constraint) {
                $constraint->aspectRatio();
            });*/

            Storage::put($path, (string) $image->encode());

            $request_data['image'] = $request->image->hashName();

        }//end of if

        if ($request->image_video) {

            $file = $request->file('image_video');

            $path = $file->hashName('public/work_images');

            $image = Image::make($file);

            /*$image->resize(300, null, function ($constraint) {
                $constraint->aspectRatio();
            });*/

            Storage::put($path, (string) $image->encode());

            $request_data['image_video'] = $request->image_video->hashName();

        }//end of if

        //dd($request_data);

        Work::create($request_data);

        session()->flash('success', __('site.added_successfully'));
        return redirect()->route('admin.works.index');

    }// end of store

    public function edit(Work $work)
    {
        $services = Service::all();
        return view('admin.works.edit', compact('work', 'services'));

    }// end of edit

    public function update(Request $request, Work $work)
    {
        $rules = [
            'service_id' => 'required'
        ];
        //dd($work->id);
        foreach (config('translatable.locales') as $locale) {

            $rules += [$locale . '.name' => ['required']];
            $rules += [$locale . '.description' => 'required'];
            $rules += [$locale . '.meta_title' => ['required']];
            $rules += [$locale . '.meta_description' => ['required']];
            $rules += [$locale . '.keywords' => ['required']];
            $rules += [$locale . '.image_alt' => ['required']];

        }//end of  for each

        $request->validate($rules);

        $request_data = $request->all();

        if ($request->image) {

            if ($work->image != null) {

                Storage::delete('public/work_images/' . $work->image);

            }//end of if
            $file = $request->file('image');

            $path = $file->hashName('public/work_images');

            $image = Image::make($file);

            Storage::put($path, (string) $image->encode());

            $request_data['image'] = $request->image->hashName();

        }//end of if

        if ($request->image_video) {

            if ($work->image_video != null) {

                Storage::delete('public/work_images/' . $work->image_video);

            }//end of if
            $file = $request->file('image_video');

            $path = $file->hashName('public/work_images');

            $image = Image::make($file);

            Storage::put($path, (string) $image->encode());

            $request_data['image_video'] = $request->image_video->hashName();

        }//end of if

        $work->update($request_data);
        session()->flash('success', __('site.updated_successfully'));
        return redirect()->route('admin.works.index');

    }// end of update

    public function destroy(Work $work)
    {
        if ($work->image != null) {

            Storage::delete('public/work_images/' . $work->image);

        }//end of if
        $this->delete($work);
        session()->flash('success', __('site.deleted_successfully'));
        return response(__('site.deleted_successfully'));

    }// end of destroy

    public function bulkDelete()
    {
        foreach (json_decode(request()->record_ids) as $recordId) {

            $work = Work::FindOrFail($recordId);

            if ($work->image != null) {

                Storage::delete('public/work_images/' . $work->image);

            }//end of if

            $this->delete($work);

        }//end of for each

        session()->flash('success', __('site.deleted_successfully'));
        return response(__('site.deleted_successfully'));

    }// end of bulkDelete

    private function delete(Work $work)
    {
        $work->delete();

    }// end of delete

    public function show(Work $work)
    {
        $categories = Category::all();
        return view('web.work', compact(['work', 'categories']));

    }// end of delete
}
