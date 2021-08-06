<?php

namespace App\Http\Controllers;

use App\Models\City;
use Illuminate\Http\Request;
use App\Models\News;

class NewsController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->cities = City::all();
    }

    public function __invoke(Request $request)
    {
        //
    }

    public function index(Request $request)
    {
        $news = News::whereHas('city', function($q) {
            $q->where('name', 'Общее');
        })->simplePaginate(5);
        
        return view('news', ['news'=>$news, 'cities'=>$this->cities]);
    }

    public function cityNews(Request $request, $cityID)
    {
        session(['city' => $cityID]);
        $news = City::find($cityID)->news()->simplePaginate(5);        
        return view('news', ['cities'=>$this->cities, 'news'=>$news]);
    }

}
