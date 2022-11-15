<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Campaign;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;
use Intervention\Image\Facades\Image;
use Yajra\DataTables\DataTables;

class CampaignController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:read_campaigns')->only(['index']);
        $this->middleware('permission:create_campaigns')->only(['create', 'store']);
        $this->middleware('permission:update_campaigns')->only(['edit', 'update']);
        $this->middleware('permission:delete_campaigns')->only(['delete', 'bulk_delete']);

    }// end of __construct

    public function index()
    {
        return view('admin.campaigns.index');

    }// end of index

    public function data()
    {
        $campaigns = Campaign::orderBy('id', 'desc')->get();

        return DataTables::of($campaigns)
            ->addColumn('record_select', 'admin.campaigns.data_table.record_select')
            ->addColumn('actions', 'admin.campaigns.data_table.actions')
            ->addColumn('images', 'admin.campaigns.data_table.images')
            ->rawColumns(['record_select', 'actions', 'images'])
            ->toJson();

    }// end of data

    public function create()
    {
        $categories = Category::all();
        return view('admin.campaigns.create', compact('categories'));

    }// end of create

    public function store(Request $request)
    {
        $rules = [
            'category_id' => 'required',
        ];
        foreach (config('translatable.locales') as $locale) {

            $rules += [$locale . '.name' => ['required', Rule::unique('campaign_translations', 'name')]];
            $rules += [$locale . '.description' => ['required']];
            $rules += [$locale . '.meta_title' => ['required']];
            $rules += [$locale . '.meta_description' => ['required']];
            $rules += [$locale . '.keywords' => ['required']];
            $rules += [$locale . '.image_alt' => ['required']];


        }//end of for each

        $request->validate($rules);
        $request_data = $request->except(['image']);

        if ($request->image) {

            $file = $request->file('image');

            $path = $file->hashName('public/campaign_images');

            $image = Image::make($file);

            /*$image->resize(300, null, function ($constraint) {
                $constraint->aspectRatio();
            });*/

            Storage::put($path, (string) $image->encode());

            $request_data['image'] = $request->image->hashName();

        }//end of if

        //dd($request_data);

        Campaign::create($request_data);

        session()->flash('success', __('site.added_successfully'));
        return redirect()->route('admin.campaigns.index');

    }// end of store

    public function edit(Campaign $campaign)
    {
        $categories = Category::all();
        return view('admin.campaigns.edit', compact('campaign', 'categories'));

    }// end of edit

    public function update(Request $request, Campaign $campaign)
    {
        $rules = [
            'category_id' => 'required'
        ];
        //dd($campaign->id);
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

            if ($campaign->image != null) {

                Storage::delete('public/campaign_images/' . $campaign->image);

            }//end of if
            $file = $request->file('image');

            $path = $file->hashName('public/campaign_images');

            $image = Image::make($file);

            Storage::put($path, (string) $image->encode());

            $request_data['image'] = $request->image->hashName();

        }//end of if

        $campaign->update($request_data);
        session()->flash('success', __('site.updated_successfully'));
        return redirect()->route('admin.campaigns.index');

    }// end of update

    public function destroy(Campaign $campaign)
    {
        if ($campaign->image != null) {

            Storage::delete('public/campaign_images/' . $campaign->image);

        }//end of if
        $this->delete($campaign);
        session()->flash('success', __('site.deleted_successfully'));
        return response(__('site.deleted_successfully'));

    }// end of destroy

    public function bulkDelete()
    {
        foreach (json_decode(request()->record_ids) as $recordId) {

            $campaign = Campaign::FindOrFail($recordId);

            if ($campaign->image != null) {

                Storage::delete('public/campaign_images/' . $campaign->image);

            }//end of if

            $this->delete($campaign);

        }//end of for each

        session()->flash('success', __('site.deleted_successfully'));
        return response(__('site.deleted_successfully'));

    }// end of bulkDelete

    private function delete(Campaign $campaign)
    {
        $campaign->delete();

    }// end of delete

    public function show(Campaign $campaign)
    {
        $categories = Category::all();
        return view('web.campaign', compact(['campaign', 'categories']));

    }// end of delete
}
