@extends('layouts.app')

@section('metaTitle', 'DC Comics Home')

@section('content')
    @include('partials.hero')
    <div class="container">
        @include('partials.cards')
        <button class="load-more">
            Load more
        </button>
    </div>
@endsection

@section('sidebar')
    @include('partials.sidebar')
@endsection