@section('custom-css')
    <link rel="stylesheet" href="{{ asset('css/comic_show.css') }}">
@endsection

@extends('layouts.app')


@section('content')
    <section>
        <div class="comic_banner">

        </div>
        <div class="container py-5 position-relative">

            <div class="comic_cover">
                <div class="position-relative">
                    <span class="custom_label px-1 position-absolute top-0 start-0">COMIC BOOK</span>
                    <img class="img-fluid" src="{{$comic['thumb']}}" alt="">
                    <a href="#" class="custom_label text-decoration-none text-center w-100 position-absolute bottom-0 start-0">VIEW GALLERY</a>
                </div>
            </div>


            <div class="row">
                <div class="col-12 col-lg-8">
                    <h3 class="text-uppercase">{{ $comic['title'] }}</h3>

                    <div class="my-1">
                        <div class="row g-0">
                            <div class="fw-bold text-secondary col-8 py-2 px-4 bg-green border border-dark border-1 d-flex align-items-center justify-content-between">
                                <span class="fs_sm">US Price: <span class="text-white">{{ $comic['price'] }}</span></span>
                                <span class="fs_sm">AVAILABLE</span>
                            </div>
                            <div class="fw-bold text-white col-4 py-2 px-4 bg-green border border-dark border-1">
                                <a class="fs_sm text-reset text-decoration-none" href="#">Check Availability ></a>
                            </div>
                        </div>
                    </div>

                    <p>{{ $comic['description'] }}</p>

                </div>
                <div class="col-12 col-lg-4">

                    <div class="w-100 h-100 py-4 border border-2 d-flex align-items-center justify-content-center">
                        <h5>Advertising here</h5>
                    </div>

                </div>

            </div>

        </div>
    </section>
@endsection

{{-- 
    C:\MAMP\htdocs\LARAVEL\laravel-comics\public\img\adv.jpg
    
    "title" => "Batman/Superman Annual #1"
  "description" => "On a dark and stormy night in the fifth dimension, two mortal foes meet to settle an age-old question once and for all: In a fight between Batman and Superman,  ▶"
  "thumb" => "https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2020/09/BMSMANN_01_300-001_HD_5f5ff17fa1d665.74704970.jpg?itok=azz5sfGk"
  "price" => "$4.99"
  "series" => "Batman/Superman Annual"
  "sale_date" => "2020-09-29"
  "type" => "comic book"
  "artists" => array:3 [▶]
  "writers" => array:1 [▶] --}}
