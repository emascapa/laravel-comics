<header>
    <div class="container d-flex align-items-center">
        <div class="logo">
            <img src="{{ asset('img/dc-logo.png') }}" alt="logo">
        </div>

        <ul class="d-flex align-items-center">
            @foreach (config('layout_items.header_links') as $item => $link)
                <li class="d-flex align-items-center">
                    <a href="{{ $link }}" class="">{{ $item }}</a>
                </li>
            @endforeach
        </ul>

    </div>
</header>