<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\DoctorCategory;
use App\Models\DoctorService;
use App\Models\Doctor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;
use Intervention\Image\Facades\Image;
use Yajra\DataTables\DataTables;

class DoctorServiceController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:read_doctor_services')->only(['index']);
        $this->middleware('permission:create_doctor_services')->only(['create', 'store']);
        $this->middleware('permission:update_doctor_services')->only(['edit', 'update']);
        $this->middleware('permission:delete_doctor_services')->only(['delete', 'bulk_delete']);

    }// end of __construct

    public function index()
    {
        return view('admin.doctor_services.index');

    }// end of index

    public function data()
    {
        $doctor_services = DoctorService::with('doctorCategory')->orderBy('created_at', 'desc')->get();

        //dd($doctor_services);

        return DataTables::of($doctor_services)
            ->addColumn('record_select', 'admin.doctor_services.data_table.record_select')
            ->addColumn('actions', 'admin.doctor_services.data_table.actions')
            ->rawColumns(['record_select', 'actions'])
            ->toJson();

    }// end of data

    public function doctor_services(Request $request)
    {
        //dd($request);


            //dd($request);
            $doctor_services = DoctorService::where('doctor_category_id', $request->id)->get();
            //dd($products_ajax);
            $view = view('data', compact('doctor_services'))->render();
            return response()->json(['html'=>$view]);

        //dd($products);
        //return view('admin.doctor_services.create', compact('firstLevel', 'products'));
        //return response()->json(['html'=>$view]);

    }// end of index

    public function create()
    {
        $doctor_categories = DoctorCategory::all();
        return view('admin.doctor_services.create', compact('doctor_categories'));

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

            $path = $file->hashName('public/doctor_service_images');

            $image = Image::make($file);

            Storage::put($path, (string) $image->encode());

            $request_data['image'] = $request->image->hashName();

        }//end of if

        DoctorService::create($request_data);

        session()->flash('success', __('site.added_successfully'));
        return redirect()->route('admin.doctor_services.index');

    }// end of store

    public function edit(DoctorService $doctorService)
    {

        $doctor_categories = DoctorCategory::all();
        return view('admin.doctor_services.edit', compact('doctorService', 'doctor_categories'));

    }// end of edit

    public function update(Request $request, DoctorService $doctorService)
    {
        $rules = [];

        foreach (config('translatable.locales') as $locale) {

            $rules += [$locale . '.name' => ['required']];
            $rules += [$locale . '.description' => ['required']];

        }//end of for each

        $request->validate($rules);

        $request_data = $request->all();

        if ($request->image) {

            if ($doctorService->image != null) {

                Storage::delete('public/doctor_service_images/' . $doctorService->image);

            }//end of if
            $file = $request->file('image');

            $path = $file->hashName('public/doctor_service_images');

            $image = Image::make($file);

            Storage::put($path, (string) $image->encode());

            $request_data['image'] = $request->image->hashName();

        }//end of if

        $doctorService->update($request_data);

        session()->flash('success', __('site.updated_successfully'));
        return redirect()->route('admin.doctor_services.index');

    }// end of update

    public function destroy(DoctorService $doctorService)
    {

        $this->delete($doctorService);
        session()->flash('success', __('site.deleted_successfully'));
        return response(__('site.deleted_successfully'));

    }// end of destroy

    public function bulkDelete()
    {
        foreach (json_decode(request()->record_ids) as $recordId) {

            $service = DoctorService::FindOrFail($recordId);

            $this->delete($service);

        }//end of for each

        session()->flash('success', __('site.deleted_successfully'));
        return response(__('site.deleted_successfully'));

    }// end of bulkDelete

    private function delete(DoctorService $doctorService)
    {
        $doctorService->delete();

    }// end of delete

    public function show(DoctorService $doctor_service)
    {
        $doctors = Doctor::where('doctor_service_id', '=', $doctor_service->id)->paginate(6);
        return view('web.doctor_service', compact(['doctor_service', 'doctors'] ));

    }// end of delete
}
