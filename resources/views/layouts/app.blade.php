<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>laravel-comics</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

    <!-- Styles -->
    {{-- <style>
        html,
        body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links>a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
    </style> --}}

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @yield('custom-css')
</head>

<body>
    <header>
        <div class="container d-flex align-items-center">
            <div class="logo">
                <img src="{{ asset('img/dc-logo.png') }}" alt="logo">
            </div>

            <ul class="d-flex align-items-center">
                @foreach (config('db.header_links') as $item => $link)
                    <li class="d-flex align-items-center">
                        <a href="{{ $link }}" class="">{{ $item }}</a>
                    </li>
                @endforeach
            </ul>
        </div>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <section class="upper_footer">
            <div class="container d-flex flex-column flex-wrap align-content-start">
                {{-- <div class=""> --}} @foreach (config('db.footer_items') as $item)
                    <div class="me-5"> {{-- v-for="(item, index) in footer_items" :key="index" --}}
                        <h5 class="text-uppercase">{{ $item['label'] }}</h5>
                        <ul>
                            @foreach ($item['links'] as $link)
                                <li>{{ $link }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endforeach
                {{-- </div> --}} {{-- <img src="@/assets/img/dc-logo-bg.png" alt="" /> --}}
                <img src="{{ asset('img/dc-logo-bg.png') }}" alt="logo">

            </div>
        </section>

        <section class="lower_footer">
            <div class="container p-3 text-center text-sm-start">
                <div class="row row-cols-1 row-cols-md-2 g-3">
                    <div class="col">
                        <span class="btn text-uppercase text-white">sign-up now</span>
                    </div>
                    <div class="col ">{{-- d-flex align-items-center --}}
                        <div class="row row-cols-1 row-cols-sm-2 g-3">

                            <div class="col">
                                <h5 class="text-uppercase">follow us</h5>
                            </div>
                            
                            <div class="col d-flex align-items-center justify-content-center">
                                @foreach (config('db.social_icons') as $item)
                                <a href="#" class="px-1"><img src="{{ asset("$item") }}" /></a>
                                @endforeach
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </footer>

    <script src="{{ asset('js/app.js') }}"></script>
    @yield('custom-js')
</body>

</html>
