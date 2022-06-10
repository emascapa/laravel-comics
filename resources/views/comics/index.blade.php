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
        <div class="container py-5">
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
        </div>
    </section>
@endsection
