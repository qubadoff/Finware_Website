@extends('Frontend.layouts.app')

@section('title', __("Portfolio"))

@section('content')
    <!-- ======= srart Breadcrumbs ======= -->
    <section class="breadcrumbs py-4" data-aos="fade-up" data-aos-delay="100">
        <div class="container">
            <ol>
                <li><a href="{{ route("index", ["locale" => app()->getLocale()]) }}">{{__("Home")}}</a></li>
                <li>{{__("Portfolio")}}</li>
            </ol>
            <h2 class="title">{{__("Portfolio 2")}}</h2>
        </div>
    </section><!-- End Breadcrumbs -->

    <!-- ============== Start portfolio section ========== -->

    <section class="container portfolio py-5" id="portfolio">
        <div class="row portfolio-row gy-4 gx-4" data-aos="fade-up" data-aos-delay="150">
            @forelse($portfolios as $portfolio)
                <div class="col-md-6  col-lg-4 mx-auto mobile ">
                        <div class="portfolio-item">
                            <img src="{{ url('/') }}/storage/{{ $portfolio->image }}" class="gallery-item" alt="portfolio-img">
                            <div class="img-overlay">
                                <div class="content">
                                    <h3>{{ $portfolio->title }}</h3>
                                    <h6>{{ $portfolio->description }}</h6>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            @empty
                No Data !
            @endforelse
        </div>
    </section>
    <!-- ============== End portfolio section ========== -->
@endsection
