@extends('layouts.main')
@section('title', 'Insert-comic')
@section ('content')
<div class= "container">
    <div class= "card-form">
    <form action="{{route('comics.store')}}" method="post">
        @csrf
        <div class="row">
            <div class= "Union">
             <label for="title">Nome Fumetto:</label><input type="text" name="title" id="title" placeholder="Title" required/>
            
            </div>
            <div class= "Union">
                <label for="price">Prezzo:</label><input type="number"  id="price" name="price" placeholder="Price" min="0" step=0.01 max="99.99" required />
               <label for="series">Serie</label><input type="text" id="series" name="series"  placeholder="Text" required />
            </div>
            <div class= "Union">
                <label for="type">Tipo:</label><input type="text" name="type" id="type" placeholder="Serie" required/>
               <label for="sale_date">Data di uscita:</label><input type="text" id="sale_date" name="sale_date" placeholder="Enter data" required>
            </div>
            <div class= "Union">
               <label for="text">Artisti:</label><input type="text" name="artists" placeholder="Enter name artisti" required>
            <label for="writers">Scrittori</label><input type="text" name="writers"  id="writers" placeholder="Enter name scrittori" required/>
            </div>
            <div class= "Union">
            <label for="description">Descrizione:</label><textarea type="text" name="description" id="description" placeholder="Enter text"></textarea> 
            <label for="Thumbs">Img:</label><textarea type="url"  name="thumb" id="thumb" placeholder="Enter text"></textarea> 
            </div>
            <div class= "Union">
            <button type= "submit" href=""class="btn btn-more">
                <h1>Add comic</h1>
            </button>
            </div>
         </div>   
      </form>
        
    </div>
</div>
@endsection