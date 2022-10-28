<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Appointment;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;
use Intervention\Image\Facades\Image;
use Yajra\DataTables\DataTables;
use Yajra\DataTables\Html\Button;
//use App\DataTables\AppointmentDataTable;

class AppointmentController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:read_appointments')->only(['index']);
        $this->middleware('permission:create_appointments')->only(['create', 'store']);
        $this->middleware('permission:update_appointments')->only(['edit', 'update']);
        $this->middleware('permission:delete_appointments')->only(['delete', 'bulk_delete']);

    }// end of __construct

    public function index()
    {
        //return $datatable->render('appointment');
        return view('admin.appointments.index');

    }// end of index

    public function data()
    {
        $appointments = Appointment::get();

        return DataTables::of($appointments)
            ->addColumn('record_select', 'admin.appointments.data_table.record_select')
            ->addColumn('actions', 'admin.appointments.data_table.actions')
            ->addColumn('images', 'admin.appointments.data_table.images')
            ->rawColumns(['record_select', 'actions', 'images'])
            ->toJson();




    }// end of data

    public function destroy(Appointment $appointment)
    {
        if ($appointment->image != 'default.png') {

            Storage::delete('public/appointment_images/' . $appointment->image);

        }//end of if
        $this->delete($appointment);
        session()->flash('success', __('site.deleted_successfully'));
        return response(__('site.deleted_successfully'));

    }// end of destroy

    public function bulkDelete()
    {
        foreach (json_decode(request()->record_ids) as $recordId) {

            $appointment = Appointment::FindOrFail($recordId);

            $this->delete($appointment);

        }//end of for each

        session()->flash('success', __('site.deleted_successfully'));
        return response(__('site.deleted_successfully'));

    }// end of bulkDelete

    private function delete(Appointment $appointment)
    {
        $appointment->delete();

    }// end of delete

    public function show($id)
    {

        $appointment = Appointment::where('id', '=', $id)->get();
        return view('admin.appointments.show', compact('appointment'));

    }// end of delete
}
