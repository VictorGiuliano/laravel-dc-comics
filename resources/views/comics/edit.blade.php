@extends('layouts.main')
@section('title', 'Insert-comic')
@section ('content')
<div class= "container">
    <div class= "card-form">
    <form action="{{route('comics.update',$comic->id)}}" method="POST">
        @method('PUT')
        @csrf
        <div class="row">
            <div class= "Union">
             <label for="title">Nome Fumetto:</label><input type="text" value={{$comic->title}} name="title" id="title" placeholder="Title" />
            </div>
            <div class= "Union">
                <label for="price">Prezzo:</label><input type="number"  value={{$comic->price}} id="price" name="price" placeholder="Price" min="0" step=0.01 max="99.99"  />
               <label for="series">Serie</label><input type="text" value={{$comic->series}} id="series" name="series"  placeholder="Text"  />
            </div>
            <div class= "Union">
                <label for="type">Tipo:</label><input type="text" value={{$comic->type}} name="type" id="type" placeholder="Serie" />
               <label for="sale_date">Data di uscita:</label><input type="text" value={{$comic->sale_date}} id="sale_date" name="sale_date" placeholder="Enter data" >
            </div>
            <div class= "Union">
               <label for="text">Artisti:</label><input type="text" value={{$comic->artists}} name="artists" placeholder="Enter name artisti" >
            <label for="writers">Scrittori</label><input type="text" value={{$comic->writers}} name="writers"  id="writers" placeholder="Enter name scrittori" />
            </div>
            <div class= "Union">
            <label for="description">Descrizione:</label><input type="text" height="500px" widht="100px"value={{$comic->description}} name="description" id="description" placeholder="Enter text"> 
            <label for="thumb">Img:</label><input type="url" value={{$comic->thumb}} name="thumb" id="thumb" placeholder="Enter text">  
            </div>
            <div class= "Union">
            <button type= "submit" href=""class="btn btn-more">
                <h1>Modifica</h1>
            </button>
            </div>
         </div>   
      </form>
        
    </div>
</div>
@endsection