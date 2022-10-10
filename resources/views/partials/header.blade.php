@php
$links = [
    'Characters',
    'Comics',
    'Movies',
    'Tv',
    'Games',
    'Collectibles',
    'Videos',
    'Fans',
    'News',
    'Shop',
]; 
@endphp

<header class="main-header">
    <div class="container">
        <div class="logo">
            <img src="{{ asset('img/dc-logo.png') }}" alt="">
        </div>
        <nav class="nav">
            <ul class="nav__list">
                @foreach ($links as $key => $link)
                    <li class="{{ $loop->iteration == 2 ? 'active' : '' }} list__item"><a href="#">{{ $link }}</a></li>                    
                @endforeach
            </ul>
        </nav>
    </div>
</header>