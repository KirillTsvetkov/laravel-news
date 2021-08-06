@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8" id="js-news">
            @forelse($news as $new)
                <div class="card mb-2">
                    <img src={{ $new['image'] }} class="card-img-top" alt={{ $new['title'] }}>
                    <div class="card-body">
                        <h5 class="card-title">{{ $new['title'] }}</h5>
                        <p class="card-text">{{ $new['summary'] }}</p>
                        <a href="/news/{{ $new['id'] }}" class="btn btn-primary">Перейти к новости</a>
                        @if(!$new->isFavorited())
                            <button class="btn btn-primary" id={{ $new['id'] }} onclick="add(event)">Добавить в избранное</button>
                        @else
                            <button class="btn btn-danger" id={{ $new['id'] }} onclick="remove(event)">Убрать из избранного</button>
                        @endif
                    </div>
                </div>
                
            @empty
            <p>No post created.</p>
            @endforelse
            {{ $news->links() }}
        
        </div>
    </div>
</div>
@endsection
