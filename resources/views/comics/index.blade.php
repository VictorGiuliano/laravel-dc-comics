@extends('layouts.main')
@section('title', 'comics')
@section ('content')

<div class=" bkg-b container">
    <div class="label stick">
        <h1>CURRENT SERIES</h1>
    </div>
    <div class="card-container">
        @foreach ($comics as $comic)
          <div class="comics-card">
            <a href="{{route('comics.show', $comic->id)}}"><img src='{{$comic['thumb']}}' alt="comic.series"></a>
            <h4>Title: {{$comic['title']}}</h4>
            <h4>${{$comic['price']}}</h4>
        </div>  
        @endforeach
    </div>
    <a href="{{route('comics.create')}}"class="btn btn-more">
        <h1>Add comic</h1>
    </a>
</div>
@endsection