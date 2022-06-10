@section('custom-css')
    <link rel="stylesheet" href="{{ asset('css/comic_show.css') }}">
@endsection

@extends('layouts.app')


@section('content')
    <section class="comic_main">
        <div class="comic_banner">

        </div>
        <div class="container py-5 position-relative">

            <div class="comic_cover">
                <div class="position-relative">
                    <span
                        class="custom_label px-1 position-absolute top-0 start-0 text-uppercase">{{ $comic['type'] }}</span>
                    <img class="img-fluid" src="{{ $comic['thumb'] }}" alt="">
                    <a href="#"
                        class="custom_label text-decoration-none text-center w-100 position-absolute bottom-0 start-0">VIEW
                        GALLERY</a>
                </div>
            </div>


            <div class="row">
                <div class="col-12 col-lg-8">
                    <h3 class="text-uppercase">{{ $comic['title'] }}</h3>

                    <div class="my-1">
                        <div class="row g-0">
                            <div
                                class="fw-bold text-secondary col-8 py-2 px-4 bg-green border border-dark border-1 d-flex align-items-center justify-content-between">
                                <span class="fs_sm">US Price: <span
                                        class="text-white">{{ $comic['price'] }}</span></span>
                                <span class="fs_sm">AVAILABLE</span>
                            </div>
                            <div
                                class="fw-bold text-white col-4 py-2 px-4 bg-green border border-dark border-1 d-flex align-items-center">
                                <a class="fs_sm text-reset text-decoration-none" href="#">Check Availability ></a>
                            </div>
                        </div>
                    </div>

                    <p class="mt-2">{{ $comic['description'] }}</p>

                </div>
                <div class="col-12 col-lg-4">

                    <div class="w-100 h-100 py-4 border border-2 d-flex align-items-center justify-content-center">
                        <h5>Advertising here</h5>
                    </div>

                </div>

            </div>

        </div>
    </section>
    <section class="comic_info bg-light">
        <div class="container pt-3 pb-5">
            <div class="row row-cols-1 row-cols-md-2 g-4">
                <div class="col">
                    <div class="border_custom">
                        <h5>Talent</h5>
                    </div>
                    <div class="border_custom">
                        <div class="row">
                            <div class="col-4">
                                <span class="fs_sm">Art by:</span>
                            </div>
                            <div class="col-8">
                                <span class="fs_sm">

                                    @forelse ($comic['artists'] as $index => $artist)
                                        <a class="text-decoration-none" href="#">{{ $artist }}</a>
                                        @if ($index < count($comic['artists']) - 1)
                                            ,
                                        @endif
                                    @empty
                                        No Artist Found
                                    @endforelse
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="border_custom">
                        <div class="row">
                            <div class="col-4">
                                <span class="fs_sm">Written by:</span>
                            </div>
                            <div class="col-8">
                                <span class="fs_sm">

                                    @forelse ($comic['writers'] as $index => $writer)
                                        <a class="text-decoration-none" href="#">{{ $writer }}</a>
                                        @if ($index < count($comic['writers']) - 1)
                                            ,
                                        @endif
                                    @empty
                                        No Writer Found
                                    @endforelse
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="border_custom">
                        <h5>Specs</h5>
                    </div>
                    <div class="border_custom">
                        <div class="row">
                            <div class="col-4">
                                <span class="fs_sm">Series:</span>
                            </div>
                            <div class="col-8">
                                <span class="fs_sm">
                                    <a href="#" class="text-decoration-none text-uppercase">{{ $comic['series'] }}</a>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="border_custom">
                        <div class="row">
                            <div class="col-4">
                                <span class="fs_sm">U.S. Price:</span>
                            </div>
                            <div class="col-8">
                                <span class="fs_sm">

                                    {{ $comic['price'] }}

                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="border_custom">
                        <div class="row">
                            <div class="col-4">
                                <span class="fs_sm">On Sale Date:</span>
                            </div>
                            <div class="col-8">
                                <span class="fs_sm">

                                    {{ $comic['sale_date'] }}

                                </span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </section>
@endsection

{{-- C:\MAMP\htdocs\LARAVEL\laravel-comics\public\img\adv.jpg
    
    "title" => "Batman/Superman Annual #1"
  "description" => "On a dark and stormy night in the fifth dimension, two mortal foes meet to settle an age-old question once and for all: In a fight between Batman and Superman,  ▶"
  "thumb" => "https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2020/09/BMSMANN_01_300-001_HD_5f5ff17fa1d665.74704970.jpg?itok=azz5sfGk"
  "price" => "$4.99"
  "series" => "Batman/Superman Annual"
  "sale_date" => "2020-09-29"
  "type" => "comic book"
  "artists" => array:3 [▶]
  "writers" => array:1 [▶] --}}
