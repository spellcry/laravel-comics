<div class="cards">
    <div class="current-series">
        Current Series
    </div>
    <ul class="cards__list">
        @foreach ($comics as $comic)
            <li class="list__item">
                @include('partials.card', ['comic' => $comic])
            </li>
        @endforeach
    </ul>
</div>