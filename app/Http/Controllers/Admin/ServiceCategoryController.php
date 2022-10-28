<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ServiceCategory;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Yajra\DataTables\DataTables;

class ServiceCategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:read_service_categories')->only(['index']);
        $this->middleware('permission:create_service_categories')->only(['create', 'store']);
        $this->middleware('permission:update_service_categories')->only(['edit', 'update']);
        $this->middleware('permission:delete_service_categories')->only(['delete', 'bulk_delete']);

    }// end of __construct

    public function index()
    {
        return view('admin.service_categories.index');

    }// end of index

    public function data()
    {
        $service_categories = ServiceCategory::orderBy('created_at', 'desc')->get();

        return DataTables::of($service_categories)
            ->addColumn('record_select', 'admin.service_categories.data_table.record_select')
            ->addColumn('actions', 'admin.service_categories.data_table.actions')
            ->rawColumns(['record_select', 'actions'])
            ->toJson();

    }// end of data

    public function create()
    {
        $service_categories = ServiceCategory::all();
        return view('admin.service_categories.create', compact('service_categories'));

    }// end of create

    public function store(Request $request)
    {

        $rules = [];

        foreach (config('translatable.locales') as $locale) {

            $rules += [$locale . '.name' => ['required', Rule::unique('category_translations', 'name')]];

        }//end of for each

        $request->validate($rules);
        //$request->validated();

        ServiceCategory::create($request->all());

        session()->flash('success', __('site.added_successfully'));
        return redirect()->route('admin.service_categories.index');

    }// end of store

    public function edit(ServiceCategory $serviceCategory)
    {
        $service_categories = ServiceCategory::where('id', '!=', $serviceCategory->id)->get();
        return view('admin.service_categories.edit', compact('serviceCategory', 'service_categories'));

    }// end of edit

    public function update(Request $request, ServiceCategory $serviceCategory)
    {
        $rules = [];

        foreach (config('translatable.locales') as $locale) {

            $rules += [$locale . '.name' => ['required', Rule::unique('service_category_translations', 'name')->ignore($serviceCategory->id, 'service_category_id')]];

        }//end of for each

        $request->validate($rules);

        $serviceCategory->update($request->all());

        session()->flash('success', __('site.updated_successfully'));
        return redirect()->route('admin.service_categories.index');

    }// end of update

    public function destroy(ServiceCategory $category)
    {

        $this->delete($category);
        session()->flash('success', __('site.deleted_successfully'));
        return response(__('site.deleted_successfully'));

    }// end of destroy

    public function bulkDelete()
    {
        foreach (json_decode(request()->record_ids) as $recordId) {

            $category = ServiceCategory::FindOrFail($recordId);

            $this->delete($category);

        }//end of for each

        session()->flash('success', __('site.deleted_successfully'));
        return response(__('site.deleted_successfully'));

    }// end of bulkDelete

    private function delete(ServiceCategory $category)
    {
        $category->delete();

    }// end of delete

    public function show(ServiceCategory $service_category)
    {
        $services = Service::where('service_category_id', '=', $service_category->id)->paginate(6);
        return view('web.service_category', compact(['service_category', 'services'] ));

    }// end of delete
}
