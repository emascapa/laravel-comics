{{-- @php
    $myArray = config('db.comics');

    dd($myArray);
@endphp --}}

@section('custom-css')
    <link rel="stylesheet" href="{{ asset('css/comics.css') }}">
@endsection

@extends('layouts.app')

@section('content')
    <section id="comics_wrapper">
        <div class="container py-5 position-relative">

            <h3 class="fs-4 text-white bg-primary px-3 py-1 m-0 text-uppercase position-absolute top-0 start-0 translate-middle-y">current series</h3>

            <div class="row row-cols-2 row-cols-sm-3 row-cols-md-4 row-cols-lg-6 g-3">

                @foreach (config('db.comics') as $index => $comic)
                    <div class="col text-white">
                        <a href="{{ route('show-comics', $index) }}" class="text-decoration-none text-reset">
                            <div class="img_div mb-2 overflow-hidden">
                                <img class="" src="{{ $comic['thumb'] }}" alt="">
                                <span class="price">{{ $comic['price'] }}</span>
                            </div>
                            <h6 class="text-uppercase">
                                {{ $comic['title'] }}
                            </h6>
                        </a>
                    </div>
                @endforeach

            </div>
            <div class="mt-3 py-2 text-center">
                <span class="fs-6 text-white bg-primary px-3 py-1 text-uppercase">view more</span>
            </div>
        </div>
    </section>
@endsection
