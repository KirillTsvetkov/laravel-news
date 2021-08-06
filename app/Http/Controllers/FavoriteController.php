<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class FavoriteController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        //
    }

    public function add(Request $request)
    {
        if($request->ajax()){
            $news_id = $request->id;
            $news = News::find($news_id);
            $news->addFavorite();
            return 0;
        }
    }

    public function remove(Request $request)
    {
        if($request->ajax()){
            $news_id = $request->id;
            $news = News::find($news_id);
            $news->removeFavorite();
            return 0;
        }
    }
}
