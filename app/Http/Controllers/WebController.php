<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Admin\CategoryController;
use App\Models\Appointment;
use App\Models\Blog;
use App\Models\Doctor;
use App\Models\DoctorCategory;
use App\Models\DoctorService;
use App\Models\Page;
use App\Models\Photo;
use App\Models\User;
use App\Models\Customer;
use App\Models\Slider;
use App\Models\Subscribe;
use App\Models\Contact;
use App\Models\Service;
use App\Models\Video;
use App\Models\Work;
use App\Models\Landing;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Auth;


class WebController extends Controller
{
    public function __construct(){
        $doctor_categories = DoctorCategory::orderby('id', 'asc')->get();
        $latest_works = Work::orderby('id', 'asc')->take(3)->get();
        $categories = Category::all();


        //dd($x[0]->doctor->category->name);
        View::share('doctor_categories', $doctor_categories);
        View::share('categories', $categories);
        View::share('latest_works', $latest_works);
    }

    public function index()
    {
        //dd('aaaaa');
        $services = Service::orderBy('id', 'asc')->get();
        $works = Work::with('service')->orderBy('id', 'asc')->get();
        $customers = Customer::orderBy('id', 'asc')->get();
        $latest_blogs = Blog::orderBy('id', 'asc')->take(2)->get();
        $sliders = Slider::all();
        $doctor_services = DoctorService::all();
        $doctors = Doctor::all();
        $blogs = Blog::latest()->take(3)->get();

        //dd($blogs);

        //dd($slider);
        return view('web.home', compact('services','works', 'customers', 'latest_blogs', 'sliders', 'blogs','doctors', 'doctor_services'));

    }// end of index

    public function blogs(Request $request)
    {
        $blogs = Blog::with('category')->when($request->search, function ($q) use ($request) {

            return $q->whereTranslationLike('name', '%' . $request->search . '%');

        })->latest()->paginate(6);

        return view('web.blogs', compact('blogs'));

    }// end of index

    public function blog_show(Blog $blog)
    {

        $blog = Blog::whereTranslationLike('name_slug', '%' . $slug . '%')->with('category')->get();

        //dd($blog);

        return view('web.blog', compact('blog'));

    }// end of index

    public function services()
    {
        /*$blogs = Blog::when($request->search, function ($q) use ($request) {

            return $q->whereTranslationLike('name', '%' . $request->search . '%');

        })->latest()->paginate(6);*/

        return view('web.services');

    }// end of index

    public function service_show(DoctorCategory $category,$slug){


        $doctor_services = DoctorService::where('doctor_category_id', $category->id)->with('doctorServiceRelation')->get();

        return view('web.service', compact('category','doctor_services'));
    }

    public function doctor_services(DoctorService $service,$slug){

        $doctors = Doctor::query()->whereHas('doctorServiceRelation', function ($q) use($service) {
            $q->where('doctor_service_id', $service->id);

        })->get();

        return view('web.doctor_services', compact('service', 'doctors'));
    }

    public function doctor_profile(Doctor $doctor,$slug){

        //dd($doctor);

        /*$doctors = Doctor::query()->whereHas('doctorServiceRelation', function ($q) use($service) {
            $q->where('doctor_service_id', $service->id);

        })->get();*/

        return view('web.doctor_profile', compact('doctor'));
    }

    public function our_works()
    {
        $services = Service::orderBy('id', 'asc')->get();
        $works = Work::with('service')->orderBy('updated_at', 'desc')->get();
        return view('web.our_works',compact('services', 'works'));

    }// end of index

    public function contact()
    {
        return view('web.contact_us');

    }// end of index

    public function appointment()
    {
        $doctor_categories = DoctorCategory::all();
        $doctors = Doctor::all();
        return view('web.appointment', compact('doctor_categories', 'doctors'));

    }// end of index

    public function about()
    {
        $doctor_categories = DoctorCategory::orderby('id', 'asc')->get();
        return view('web.about_us', compact('doctor_categories'));

    }// end of index

    public function doctors()
    {
       // $doctors
        $doctors = Doctor::all();
        return view('web.doctors', compact('doctors'));

    }// end of index
    public function doctors_show(DoctorCategory $category)
    {
        //dd($category);

        $doctors = Doctor::where('doctor_category_id', $category->id)->get();
        //dd($doctors);
        return view('web.doctors', compact('category', 'doctors'));

    }// end of index

    /*public function doctor_profile()
    {
        return view('web.doctor_profile');

    }// end of index*/

    public function galleries()
    {
        $photos = Photo::all();
        return view('web.galleries', compact('photos'));

    }// end of index

    public function jobs()
    {
        return view('web.jobs');

    }// end of index


    public function videos()
    {
        $videos = Video::all();
        return view('web.videos', compact('videos'));

    }// end of index

    public function doctor_section()
    {
        return view('web.doctor_section');

    }// end of index


    public function partnerships()
    {
        return view('web.partnerships');

    }// end of index

    public function branches()
    {
        return view('web.branches');

    }// end of index

    public function contact_form(Request $request)
    {
        //dd($request);
        request()->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'visit_type' => 'required',
            'subject' => 'required',
            'message' => 'required',
        ]);

        $data = $request->all();

        Contact::create($data);

        session()->flash('contact_success', __('site.added_successfully'));
        //dd(session());
        return redirect(url()->previous() . '#contact-sent');

    }

    public function landing_form(Request $request)
    {
        //dd($request);
        request()->validate([
            'name' => 'required',
            'phone' => 'required',
            'service' => 'required',
            'type' => 'required',
        ]);

        $data = $request->all();
        //dd($data);
        Landing::create($data);

        session()->flash('contact_success', __('site.added_successfully'));
        //dd(session());
        return redirect(url()->previous() . '#landing-sent');

    }

    public function appointment_form(Request $request)
    {
        //dd($request);

        request()->validate([
            'doctor_category_id' => 'required',
            'doctor_id' => 'required',
            'date' => 'required',
            'message' => 'required',
        ]);
        $user = Auth::user();
        $data = $request->all();
        $data['user_id'] = $user->id;
        $data['name'] = $user->name;
        $data['phone'] = $user->phone;
        //dd($data);
        Appointment::create($data);

        session()->flash('appointment_success', __('site.added_successfully'));
        //dd(session());
        return redirect(url()->previous() . '#appointment-sent');

    }

    public function contact_service_form(Request $request, Service $service)
    {
        //dd($request);
        request()->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'message' => 'required',
        ]);

        $data = $request->all();

        Contact::create($data);

        session()->flash('contact_success', __('site.added_successfully'));
        return redirect(url()->previous() . '#contact_form');

    }

    public function subscribe(Request $request)
    {
        request()->validate([
            'email' => 'required',
        ]);

        $data = $request->all();

        Subscribe::create($data);

        session()->flash('subscribe_success', __('site.added_successfully'));
        return redirect(url()->previous() . '#subscribe_form');

    }

    public function single_blog(Request $request, Blog $blog){
        return view('web.blog', compact('blog'));
    }
    public function page(Request $request, Page $page){
        return view('web.page', compact('page'));
    }
    public function work_show(Request $request, Work $work){
        //dd($work);
        return view('web.work', compact('work'));
    }


    public function payment(Request $request)
    {
        $data['amount'] = 1;
        $data['currency'] = 'USD';
        $data['customer'] = 'USD';

    }// end of payment

    public function showUserProfile(User $user)
    {

        //dd($user);

        $appointments = Appointment::where('user_id', $user->id)->get();
        //dd($appointments);
        $this->middleware('role:user');
        if (Auth::user()->id === $user->id){
            return view('web.profile', compact('user', 'appointments'));
        }
        else{
            $data['title'] = '404';
            $data['name'] = 'Page not found';
            return response()->view('errors.404',$data,404);
        }


    }// end of payment

    public function category_show(Category $category)
    {
        $categories = Category::all();
        $blogs = Blog::where('category_id', '=', $category->id)->paginate(2);
        return view('web.category', compact(['category', 'blogs', 'categories'] ));

    }// end of delete

    public function skin_shows()
    {
        return view('web.skin_shows');

    }// end of index

    public function laser_shows()
    {
        return view('web.laser_shows');

    }// end of index

    public function nutrition_offers()
    {
        return view('web.nutrition_offers');

    }// end of index

    public function dental_shows()
    {
        return view('web.dental_shows');

    }// end of index

    public function skin_offers()
    {
        return view('web.skin_offers');

    }// end of index

    public function surgery_offers()
    {
        return view('web.surgery_offers');

    }// end of index

    public function dr_ahmad()
    {
        return view('web.dr_ahmad');

    }// end of index


}
