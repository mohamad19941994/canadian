<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Doctor;
use App\Models\DoctorCategory;
use App\Models\DoctorService;
use App\Models\DoctorServiceRelation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;
use Intervention\Image\Facades\Image;
use Yajra\DataTables\DataTables;

class DoctorController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:read_doctors')->only(['index']);
        $this->middleware('permission:create_doctors')->only(['create', 'store']);
        $this->middleware('permission:update_doctors')->only(['edit', 'update']);
        $this->middleware('permission:delete_doctors')->only(['delete', 'bulk_delete']);

    }// end of __construct

    public function index()
    {
        return view('admin.doctors.index');

    }// end of index

    public function data()
    {
        $doctors = Doctor::with('doctorCategory')->orderBy('created_at', 'desc')->get();
        //dd($doctors);

        return DataTables::of($doctors)
            ->addColumn('record_select', 'admin.doctors.data_table.record_select')
            ->addColumn('actions', 'admin.doctors.data_table.actions')
            ->addColumn('images', 'admin.doctors.data_table.images')
            ->rawColumns(['record_select', 'actions', 'images'])
            ->toJson();

    }// end of data
    

    public function create()
    {
        $categories = DoctorCategory::all();
        return view('admin.doctors.create', compact('categories'));

    }// end of create

    public function store(Request $request)
    {

        $rules = [
        ];
        foreach (config('translatable.locales') as $locale) {

            $rules += [$locale . '.name' => ['required', Rule::unique('doctor_translations', 'name')]];
            $rules += [$locale . '.description' => ['required']];


        }//end of for each

        $request->validate($rules);
        $request_data = $request->except(['image', 'doctor_services']);

        if ($request->image) {

            $file = $request->file('image');

            $path = $file->hashName('public/doctor_images');

            $image = Image::make($file);

            /*$image->resize(300, null, function ($constraint) {
                $constraint->aspectRatio();
            });*/

            Storage::put($path, (string) $image->encode());

            $request_data['image'] = $request->image->hashName();

        }//end of if

        $doctor = Doctor::create($request_data);

        $new_insert_array=array();
        foreach($request->doctor_services as $key=>$val)
        {
            $new_insert_array[]=array(
                'doctor_id'=>$doctor->id,
                'doctor_service_id'=>$val,

                );
        }
        DoctorServiceRelation::insert($new_insert_array);

        session()->flash('success', __('site.added_successfully'));
        return redirect()->route('admin.doctors.index');

    }// end of store

    public function edit(Doctor $doctor)
    {

        //dd($doctor);

        $categories = DoctorCategory::all();
        $doctor_services = DoctorService::wherehas('doctorServiceRelation' , function($q) use($doctor){

            $q->where('doctor_id', $doctor->id);

        })->get();

        //dd($doctor_services);
        //$doctor_services = DoctorService::whereIn('id',$doctor->doctor_services)->get();
        //$doctor_services = DoctorService::where('doctor_category_id', $doctor->doctor_category_id)->get();
        //dd($doctor_services);
        return view('admin.doctors.edit', compact('doctor', 'categories', 'doctor_services'));

    }// end of edit

    public function update(Request $request, Doctor $doctor)
    {
        /*if ($request->show == null){
            $request->request->add(['show' => null]); //add request
        }*/
        //dd($doctor->doctorServiceRelation);
        $rules = [
        ];


        foreach (config('translatable.locales') as $locale) {

            $rules += [$locale . '.name' => ['required'/*, Rule::unique('doctor_translations', 'name')->ignore($doctor->id, 'doctor_id')*/]];
            $rules += [$locale . '.description' => 'required'];

        }//end of  for each

        //dd($rules);

        $request->validate($rules);

        //$request_data = $request->all();

        $request_data = $request->except(['image', 'doctor_services']);

        if ($request->image) {

            if ($doctor->image != null) {

                Storage::delete('public/doctor_images/' . $doctor->image);

            }//end of if
            $file = $request->file('image');

            $path = $file->hashName('public/doctor_images');

            $image = Image::make($file);

            Storage::put($path, (string) $image->encode());

            $request_data['image'] = $request->image->hashName();

        }//end of if

        $doctor->update($request_data);


        $new_insert_array=array();

        $doctor->doctorServiceRelation->each->delete();

        foreach($request->doctor_services as $key=>$val)
        {
            $new_insert_array[]=array(
                'doctor_id'=>$doctor->id,
                'doctor_service_id'=>$val,

            );
        }
        DoctorServiceRelation::insert($new_insert_array);


        session()->flash('success', __('site.updated_successfully'));
        return redirect()->route('admin.doctors.index');

    }// end of update

    public function destroy(Doctor $doctor)
    {
        if ($doctor->image != null) {

            Storage::delete('public/doctor_images/' . $doctor->image);

        }//end of if
        $this->delete($doctor);
        session()->flash('success', __('site.deleted_successfully'));
        return response(__('site.deleted_successfully'));

    }// end of destroy

    public function bulkDelete()
    {
        foreach (json_decode(request()->record_ids) as $recordId) {

            $doctor = Doctor::FindOrFail($recordId);

            if ($doctor->image != null) {

                Storage::delete('public/doctor_images/' . $doctor->image);

            }//end of if

            $this->delete($doctor);

        }//end of for each

        session()->flash('success', __('site.deleted_successfully'));
        return response(__('site.deleted_successfully'));

    }// end of bulkDelete

    private function delete(Doctor $doctor)
    {
        $doctor->delete();

    }// end of delete

    public function show(Doctor $doctor)
    {

        return view('web.doctor', compact('doctor'));

    }// end of delete
}
