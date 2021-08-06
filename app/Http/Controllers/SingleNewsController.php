<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class SingleNewsController extends Controller
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

    public function index(Request $request, $newsID)
    {
        $news = News::find($newsID);
        $relatedNews = $news->relatedNewsByTag()->take(5);

        return view('singleNews', ['news'=>$news, 'relatedNews'=>$relatedNews]);
    }
}
