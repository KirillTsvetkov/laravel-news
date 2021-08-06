@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8" id="js-news">
            <h3>{{$news->title}}</h3>
            <img src={{ $news->image }} class="img-fluid">
            <article>
                {{$news->body}}
            </article>
            <hr>
            <h6>Похожие новости:</h6>
            @forelse($relatedNews as $relatedNew)
                    <li>
                        <a href="/news/{{$relatedNew->id}}">{{$relatedNew->title}}</a>
                    </li>
            @empty
            <p>Нет похожих постов</p>
            @endforelse
                </ul>
            
        </div>
    </div>
</div>
@endsection
