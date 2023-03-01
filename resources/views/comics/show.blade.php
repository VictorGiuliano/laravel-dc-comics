@extends('layouts.main')
@section('title', $comic->title)
@section ('content')
<ul>
    <li>Titolo:{{$comic->title}}</li>
    <li><img src="{{$comic->thumb}}" alt="{{$comic->title}}"></li>
    <li>Prezzo:{{$comic->price}}</li>
    <li>Series:{{$comic->series}}</li>
    <li>Data di uscita:{{$comic->sale_date}}</li>
    <li>Tipo:{{$comic->type}}</li>
    <li>Artista:{{$comic->artists}}</li>
    <li>Scrittori:{{$comic->writers}}</li>
    <li>Description:{{$comic->description}}</li>
</ul>
    
@endsection