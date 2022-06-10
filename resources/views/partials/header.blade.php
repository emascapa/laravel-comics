<header>
    <div class="container d-flex align-items-center justify-content-between">
        <div class="logo">
            <img src="{{ asset('img/dc-logo.png') }}" alt="logo">
        </div>

        <ul class="d-flex align-items-center">
            @foreach (config('layout_items.header_links') as $item)
                <li class="d-flex align-items-center {{ (Route::currentRouteName() === $item) ? 'active' : '' }}">
                    <a href="{{route("$item")}}" class="">{{ $item }}</a>
                </li>
            @endforeach
        </ul>

    </div>
</header>