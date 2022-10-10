@extends('layouts.app')

@section('metaTitle', 'DC Comics Home')

@section('content')
    @include('partials.hero')
    <div class="comic">
        <div class="container">
            <div class="row">
                <div class="col-70">
                    <h2 class="title">{{ $comic['title'] }}</h2>
                    <div class="status">
                        <div class="price">
                            U.S. Price: <span class="accent">{{ $comic['price'] }}</span>
                        </div>
                        <div class="availability">
                            Available                    
                        </div>
                        <div class="check-availability">
                            <span class="accent">Check Availability</span>
                        </div>
                    </div>
                    <div class="description">
                        <p>
                            {{ $comic['description'] }}
                        </p>
                    </div>
                </div>
                <div class="col-30">
                    <img class="adv" src="{{ asset('img/adv.jpg') }}" alt="">
                </div>
            </div>
        </div>
    </div>
@endsection