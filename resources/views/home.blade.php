@extends('layouts.main')
@section('title', 'home')
<body>
    <main>
        @section('content')
        <div class="Jumbotron"></div>
        <div class=" bkg-b container">
            <div class="label stick">
                <h1>CURRENT SERIES</h1>
            </div>
            <div class="card-container">      
            </div>
            <button class="btn btn-more">
                <h1>LOAD MORE</h1>
            </button>
        </div>
        <section class="articles">
            <div class="bkg-bl container">
                <div class="icons">
                    <img src="{{asset('images/buy-comics-digital-comics.png')}}">
                </div>
                <h3>DIGITAL COMICS</h3>
                <div class="icons">
                    <img src="{{asset('images/buy-comics-merchandise.png')}}">
                </div>
                <h3>DC MERCHANDISE</h3>
                <div class="icons">
                    <img src="{{asset('images/buy-comics-subscriptions.png')}}">
                </div>
                <h3>SUBSCRIPTION</h3>
                <div class="icons">
                    <img src="{{asset('images/buy-comics-shop-locator.png')}}">
                </div>
                <h3>COMIC SHOP LOCATOR</h3>
                
                <div class="icons">
                    <img src="{{asset('images/buy-dc-power-visa.png')}}">
                </div>
                <h3>DC POWER VISA</h3>
            </div>
        </section>
        @endsection
    </main>
</body>
</html>