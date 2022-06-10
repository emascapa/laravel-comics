{{-- @section('custom-css')
    <link rel="stylesheet" href="{{ asset('css/show_comic.css') }}">
@endsection --}}

@extends('layouts.app')

@section('content')
    <section id="comics_wrapper">
        <div class="container py-5">

            <h1>singolo fumetto</h1>

{{--             <div class="row row-cols-2 row-cols-sm-3 row-cols-md-4 row-cols-lg-6 g-3">

                @foreach (config('db.comics') as $index => $comic)

                    <div class="col text-white">
                        <div class="img_div mb-2 overflow-hidden">
                            <img class="" src="{{ $comic['thumb'] }}" alt="">
                            <span class="price">{{ $comic['price'] }}</span>
                        </div>
                        <h6 class="text-uppercase">
                            <a href="{{}}" class="text-decoration-none text-reset">
                                {{ $comic['title'] }} {{$index}}
                            </a>
                        </h6>
                    </div>

                @endforeach

            </div> --}}
        </div>
    </section>
@endsection