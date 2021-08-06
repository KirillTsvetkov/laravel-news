@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8" id="js-news">
            @forelse($news as $new)
                <div class="card mb-2" id={{ $new['id'] }}>
                    <img src={{ $new['image'] }} class="card-img-top" alt={{ $new['title'] }}>
                    <div class="card-body">
                        <h5 class="card-title">{{ $new['title'] }}</h5>
                        <p class="card-text">{{ $new['summary'] }}</p>
                        <a href="news/{{ $new['id'] }}" class="btn btn-primary">Перейти к новости</a>
                    </div>
                </div>
                @if($new->isFavorite())
                
                Избранное
                @endif
            @empty
            {{ $news->links() }}
                <p>No post created.</p>
            @endforelse
        </div>
    </div>
</div>
@endsection