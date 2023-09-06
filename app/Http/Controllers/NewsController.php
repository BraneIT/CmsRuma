<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Str;

class NewsController extends Controller
{


function get_news(Request $request) {
    $news = News::select('news.*', 'categories.category as category_name')
                ->join('categories', 'news.category_id', '=', 'categories.id')
                ->orderBy('news.id', 'desc')
                ->paginate(7);
    // $news = News::paginate(7);
   
    $newsCountByCategory = News::select('categories.id as category_id','categories.category as category_name', DB::raw('COUNT(*) as news_count'))
                               ->join('categories', 'news.category_id', '=', 'categories.id')
                               ->groupBy('categories.id', 'categories.category')
                               ->get();
    $categories = Categories::all();

    return view('frontend_views.vesti', ['news' => $news, 'categories' => $categories, 'count'=>$newsCountByCategory]);


    }

    function show_news($id)
    {
        $newsItem = News::findOrFail($id);
         // Increment the visitors count
        $newsItem->increment('visitors');

        return view('frontend_views.news_show', ['newsItem' => $newsItem]);
    }

  

      public function showNewsByCategory($categoryId)
    {
        $newsItems = DB::table('news')
        ->join('categories', 'news.category_id', '=', 'categories.id')
        ->select('news.*', 'categories.category as category_name')
        ->where('news.category_id', '=', $categoryId)
        ->paginate(7);

        // Find the category by its id
        $category = Categories::find($categoryId);
         $newsCountByCategory = News::select('categories.id as category_id','categories.category as category_name', DB::raw('COUNT(*) as news_count'))
                               ->join('categories', 'news.category_id', '=', 'categories.id')
                               ->groupBy('categories.id', 'categories.category')
                               ->get();

        // If category doesn't exist, you may want to return an error or redirect
        if (!$category) {
            // return error or redirect, this is up to you.
            return redirect()->back()->withErrors('Category not found.');
        }

        // If the category exists, get all the related news
        $news = $category->news;

        // Return the news to the view
        return view('frontend_views.kategorija', ['news' => $news, 'count' => $newsCountByCategory, 'newsItems' => $newsItems]);
    }
}
