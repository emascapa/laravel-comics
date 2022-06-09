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