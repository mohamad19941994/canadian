<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\DoctorCategory;
use App\Models\Doctor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;
use Intervention\Image\Facades\Image;
use Yajra\DataTables\DataTables;

class DoctorCategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:read_doctor_categories')->only(['index']);
        $this->middleware('permission:create_doctor_categories')->only(['create', 'store']);
        $this->middleware('permission:update_doctor_categories')->only(['edit', 'update']);
        $this->middleware('permission:delete_doctor_categories')->only(['delete', 'bulk_delete']);

    }// end of __construct

    public function index()
    {
        return view('admin.doctor_categories.index');

    }// end of index

    public function data()
    {
        $doctor_categories = DoctorCategory::orderBy('created_at', 'desc')->get();

        return DataTables::of($doctor_categories)
            ->addColumn('record_select', 'admin.doctor_categories.data_table.record_select')
            ->addColumn('actions', 'admin.doctor_categories.data_table.actions')
            ->rawColumns(['record_select', 'actions'])
            ->toJson();

    }// end of data

    public function create()
    {

        return view('admin.doctor_categories.create');

    }// end of create

    public function store(Request $request)
    {

        $rules = [];

        foreach (config('translatable.locales') as $locale) {

            $rules += [$locale . '.name' => ['required']];
            $rules += [$locale . '.description' => ['required']];

        }//end of for each

        $request->validate($rules);
        $request_data = $request->except(['image']);

        if ($request->image) {

            $file = $request->file('image');

            $path = $file->hashName('public/doctor_category_images');

            $image = Image::make($file);

            Storage::put($path, (string) $image->encode());

            $request_data['image'] = $request->image->hashName();

        }//end of if

        DoctorCategory::create($request_data);

        session()->flash('success', __('site.added_successfully'));
        return redirect()->route('admin.doctor_categories.index');

    }// end of store

    public function edit(DoctorCategory $doctorCategory)
    {

        return view('admin.doctor_categories.edit', compact('doctorCategory'));

    }// end of edit

    public function update(Request $request, DoctorCategory $doctorCategory)
    {
        $rules = [];

        foreach (config('translatable.locales') as $locale) {

            $rules += [$locale . '.name' => ['required']];
            $rules += [$locale . '.description' => ['required']];

        }//end of for each

        $request->validate($rules);

        $request_data = $request->all();

        if ($request->image) {

            if ($doctorCategory->image != null) {

                Storage::delete('public/doctor_category_images/' . $doctorCategory->image);

            }//end of if
            $file = $request->file('image');

            $path = $file->hashName('public/doctor_category_images');

            $image = Image::make($file);

            Storage::put($path, (string) $image->encode());

            $request_data['image'] = $request->image->hashName();

        }//end of if

        $doctorCategory->update($request_data);

        session()->flash('success', __('site.updated_successfully'));
        return redirect()->route('admin.doctor_categories.index');

    }// end of update

    public function destroy(DoctorCategory $doctorCategory)
    {

        $this->delete($doctorCategory);
        session()->flash('success', __('site.deleted_successfully'));
        return response(__('site.deleted_successfully'));

    }// end of destroy

    public function bulkDelete()
    {
        foreach (json_decode(request()->record_ids) as $recordId) {

            $category = DoctorCategory::FindOrFail($recordId);

            $this->delete($category);

        }//end of for each

        session()->flash('success', __('site.deleted_successfully'));
        return response(__('site.deleted_successfully'));

    }// end of bulkDelete

    private function delete(DoctorCategory $doctorCategory)
    {
        $doctorCategory->delete();

    }// end of delete

    public function show(DoctorCategory $doctor_category)
    {
        $doctors = Doctor::where('doctor_category_id', '=', $doctor_category->id)->paginate(6);
        return view('web.doctor_category', compact(['doctor_category', 'doctors'] ));

    }// end of delete
}
