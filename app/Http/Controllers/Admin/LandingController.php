<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Landing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\DataTables;

class LandingController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:read_landings')->only(['index']);
        $this->middleware('permission:create_landings')->only(['create', 'store']);
        $this->middleware('permission:update_landings')->only(['edit', 'update']);
        $this->middleware('permission:delete_landings')->only(['delete', 'bulk_delete']);

    }// end of __construct

    public function index()
    {
        return view('admin.landings.index');

    }// end of index

    public function data(Request $request)
    {
        $landings = Landing::select('landings.*');
        if ($request->type){
            $landings->where('type', $request->type);
        }
        return DataTables::of($landings)
            ->addColumn('record_select', 'admin.landings.data_table.record_select')
            ->addColumn('actions', 'admin.landings.data_table.actions')
            ->addColumn('service', 'admin.landings.data_table.service')
            ->addColumn('type', 'admin.landings.data_table.type')
            ->rawColumns(['record_select', 'actions', 'service', 'type'])
            ->toJson();




    }// end of data

    public function destroy(Landing $landing)
    {
        if ($landing->image != 'default.png') {

            Storage::delete('public/landing_images/' . $landing->image);

        }//end of if
        $this->delete($landing);
        session()->flash('success', __('site.deleted_successfully'));
        return response(__('site.deleted_successfully'));

    }// end of destroy

    public function bulkDelete()
    {
        foreach (json_decode(request()->record_ids) as $recordId) {

            $landing = Landing::FindOrFail($recordId);

            $this->delete($landing);

        }//end of for each

        session()->flash('success', __('site.deleted_successfully'));
        return response(__('site.deleted_successfully'));

    }// end of bulkDelete

    private function delete(Landing $landing)
    {
        $landing->delete();

    }// end of delete

    public function show($id)
    {

        $landing = Landing::where('id', '=', $id)->get();
        return view('admin.landings.show', compact('landing'));

    }// end of delete
}
