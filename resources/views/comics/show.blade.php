@extends('layouts.app')

@section('metaTitle', 'DC Comics Home')

@section('content')
    @include('partials.hero')
    <div class="comic">
        <div class="container">
            <div class="description">
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
                        <div class="description_text">
                            <p>
                                {{ $comic['description'] }}
                            </p>
                        </div>
                    </div>
                    <div class="col-30">
                        <p class="intro">Advertisement</p>
                        <img class="adv" src="{{ asset('img/adv.jpg') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="info">
            <div class="container">
                <div class="row">
                    <div class="col-50">
                        <h3 class="title">Talent</h3>
                        <ul class="list">
                            <li class="list-item">
                                <div class="description">
                                    Art by:
                                </div>
                                <div class="content">
                                    <?= implode(', ', $comic['artists']) ?>
                                </div>
                            </li>
                            <li class="list-item">
                                <div class="description">
                                    Written by:
                                </div>
                                <div class="content">
                                    <?= implode(', ', $comic['writers']) ?>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-50">
                        <h3 class="title">Specs</h3>
                        <ul class="list">
                            <li class="list-item">
                                <div class="description">
                                    Series:
                                </div>
                                <div class="content series">
                                    <?= $comic['series'] ?>
                                </div>
                            </li>
                            <li class="list-item">
                                <div class="description">
                                    U.S. Price:
                                </div>
                                <div class="content price">
                                    <?= $comic['price'] ?>
                                </div>
                            </li>
                            <li class="list-item">
                                <div class="description">
                                    On Sale Date:
                                </div>
                                <div class="content sale_date">
                                    <?= $comic['sale_date'] ?>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection