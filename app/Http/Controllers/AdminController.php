<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use App\Models\News;
use App\Models\Categories;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Google\Service\Books\Category;
use App\Models\Events;

class AdminController extends Controller
{
    public function __construct()
{
    $this->middleware('auth:admins');
}
  
    function show_dashboard(){
         
            $user = Auth::user();
            $fullName = $user->full_name;
            $topPosts = News::orderBy('visitors', 'desc')->take(5)->get();
            return view('admin_views.dashboard')->with('fullName', $fullName)->with('topPosts', $topPosts);
    }
    function news(){
        $user = Auth::user();
        $fullName = $user->full_name;
        $news = News::all();
        $news = News::simplePaginate(5);
        return view('admin_views.news')->with('fullName', $fullName)->with('news', $news);
    }

    function show_public_procurements (){
        $user = Auth::user();
            $fullName = $user->full_name;
        return view('admin_views.public_procurement')->with('fullName', $fullName);
    }
    function show_add_news(){
        $user = Auth::user();
        $fullName = $user->full_name;
        $categories = Categories::all();
        return view('admin_views.add_news')->with('fullName', $fullName)->with('categories', $categories);
    }
    function store_news(Request $request){
        $user = Auth::user();
        $fullName = $user->full_name;
        $formfields= $request->validate([
            'title' => 'required|unique:news',
            'category_id' => 'required|exists:categories,id',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'content' => 'required',
        ], [
            'title.required' => 'Unesite naslov vesti!',
            'category_id.required' => 'Unesite kategoriju vesti!',
            'image.required' => 'Odaberite sliku vesti!',
            'content.required' => 'Unesite sadrzaj vesti!',
            'title.unique' => 'Vest sa ovim imenom je vec uesena. Pogledajte listu vesti'
        ]);
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = $image->getClientOriginalName();
            $imagePath = $image->storeAs('public/images', $imageName);
            $imageRelativePath = str_replace('public/', '', $imagePath);
        } else {
            return redirect()->back()->with('error', 'No image selected.');
        }
 
       

        $news = new News();
        $news->title = $formfields['title'];
        $news->category_id = $formfields['category_id'];
        $news->image = $imageRelativePath;
        $news->content = $formfields['content'];
        $news->created_by = $fullName;
        $news->save();

        return redirect('/dashboard/news');

    }
    public function edit($id)
    {
        $user = Auth::user();
        $fullName = $user->full_name;
        $news = News::findOrFail($id);
         $date = Carbon::parse($news->created_at);
        $formattedDate = $date->format('d.m.Y');

        $categories = Categories::all();
         return view('admin_views.edit_news', [
        'news' => $news,
        'fullName' => $fullName,
        'formattedDate' => $formattedDate,
        'categories' => $categories, 
    ]);
    }

    public function update(Request $request, $id)
    {
        $news = News::findOrFail($id);

        $validatedData = $request->validate([
            'title' => 'required',
            'category_id' => 'required',
            'content' => 'required',
        ]);

        $news->title = $validatedData['title'];
        $news->category_id = $validatedData['category_id'];
        $news->content = $validatedData['content'];
            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $imageName = $image->getClientOriginalName();
                $imagePath = $image->storeAs('public/images', $imageName);
                $imageRelativePath = str_replace('public/', '', $imagePath);
                $news->image = $imageRelativePath;
            }
        $news->save();

        
        return redirect('/dashboard/news')->with('success', 'News updated successfully.');
    }


    public function destroy($id)
    {
        $news = News::findOrFail($id);
        $news->delete();

        
        return redirect()->back()->with('success', 'News deleted successfully.');
    }

    function show_admins (){
        $user = Auth::user();
        $fullName = $user->full_name;
        $admins = Admin::all();

        return view('admin_views.admins')->with('fullName', $fullName)->with('admins', $admins);
    }

    public function search(Request $request)
    {
         $user = Auth::user();
        $fullName = $user->full_name;
        $query = $request->input('query');

        $news = News::where('title', 'like', "%$query%")->simplePaginate(5);

        $noResults = $news->count() === 0;

        return view('admin_views.news_search', compact('news', 'noResults'))->with('fullName', $fullName);
    }

    function show_categories(){
         $user = Auth::user();
        $fullName = $user->full_name;

        $categories = Categories::all();
        return view('admin_views.category')->with('fullName', $fullName)->with('categories', $categories);
    }

    function add_categories(){
        $user = Auth::user();
        $fullName = $user->full_name;
        return view('admin_views.add_categories')->with('fullName', $fullName);

    }
    function store_categories(Request $request){
         $formfields= $request->validate([
            'category' => 'required|unique:categories'
            ],
        [   
            'category.required' => 'Molimo unesite kategoriju',
            'category.unique'=>'Unesena kategorija vec postoji'
        ]
        );
       
        $categories = new Categories();
        $categories->category = $formfields['category'];
        $categories->save();

        return redirect('/dashboard/categories');
    }
    function show_edit_categories($id){
         $categories = Categories::findOrFail($id);
         $user = Auth::user();
        $fullName = $user->full_name;
        return view('admin_views.show_edit_categories')->with('fullName', $fullName)->with('categories', $categories);
    }
    function edit_categories(Request $request, $id){

        $categories = Categories::findOrFail($id);
         $formfields= $request->validate([
            'category' => 'required'

        ]);
       
        $categories->category = $formfields['category'];
        $categories->save();

        return redirect('/dashboard/categories');
    }

    function destroy_categories($id){
        $categories = Categories::findOrFail($id);
        $categories->delete();

        return redirect()->back()->with('success', 'News deleted successfully.');
    }

    function show_events(){
        $user = Auth::user();
        $fullName = $user->full_name;
        $events = Events::all();
        $events = Events::simplePaginate(5);
        return view('admin_views.events')->with('fullName', $fullName)->with('events', $events);
    }
    
    function add_events(){
        $user = Auth::user();
        $fullName = $user->full_name;
        return view('admin_views.add_event', ['fullName'=> $fullName]);
    }

    function store_events(Request $request){
        $user = Auth::user();
        $fullName = $user->full_name;
        $validate = $request->validate([
            'title' => 'required',
            'date' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'content' => 'required',

        ]);
        $event = new Events;
        $event->title = $validate['title'];
        $event->date = $validate['date'];
        $event->content = $validate['content'];
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = $image->getClientOriginalName();
            $imagePath = $image->storeAs('public/images', $imageName);
            $imageRelativePath = str_replace('public/', '', $imagePath);
            $event->image = $imageRelativePath;
        }
        $event->save();
        return redirect('/events')->with('events', $event)->with('fullName', $fullName);
    }
    
    function edit_event($id){
        $user = Auth::user();
        $fullName = $user->full_name;
        $event = Events::findOrFail($id);

        return view('admin_views.show_edit_events')->with('fullName', $fullName)->with('event', $event);

    }

    function update_event(Request $request, $id){

        $event = Events::findOrFail($id);

        $validate = $request->validate([
            'title' => 'required',
            'date' => 'required',
            'content' => 'required'
        ]);

        $event->title = $validate['title'];
        $event->date = $validate['date'];
        $event->content = $validate['content'];
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = $image->getClientOriginalName();
            $imagePath = $image->storeAs('public/images', $imageName);
            $imageRelativePath = str_replace('public/', '', $imagePath);
            $event->image = $imageRelativePath;
        }
        $event->save();
        return redirect('/events');
    }

    public function destroy_event($id)
    {
        $event = Events::findOrFail($id);
        $event->delete();

        return redirect()->back()->with('success', 'Event deleted successfully.');
    }
    public function search_event(Request $request)
    {
         $user = Auth::user();
        $fullName = $user->full_name;
        $query = $request->input('query');

        $events = Events::where('title', 'like', "%$query%")->get();
        $noResults = $events->count() === 0;

        return view('admin_views.events_search', compact('events', 'noResults'))->with('fullName', $fullName);
    }
}

    function store_image(Request $request){
        if($request->hasFile('upload')){
                $originName = $request->file('upload')->getClientOriginalName();
                $fileName = pathinfo($originName, PATHINFO_FILENAME);
                $extension = $request->file('upload')->getClientOriginalName();
                $fileName = $fileName . '_' . time() . '.' . $extension;
                $request->file('upload')->move(public_path('media'), $fileName);
    
                $url = asset('/media' . $fileName);
                return response()->json(['filename'=>$fileName, 'uploaded'=>1, 'url'=>$url]);
            }
    }
