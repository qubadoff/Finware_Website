@extends('Frontend.layouts.app')

@section('title', __("Products"))

@section('content')
    <!-- ======= srart Breadcrumbs ======= -->
    <section class="breadcrumbs py-4" data-aos="fade-up" data-aos-delay="100">
        <div class="container">
            <ol>
                <li><a href="{{ route("index", ["locale" => app()->getLocale()]) }}">{{__("Home")}}</a></li>
                <li>{{__("Products")}}</li>
            </ol>
            <h2 class="title">{{__("Products")}}</h2>
        </div>
    </section><!-- End Breadcrumbs -->


    <!-- ============== Start Blog section ========== -->
    <section class="container blog py-5" id="blog">
        <div class="row  gy-4 gx-4 ">
            @forelse($products as $product)
                <div class="col-lg-4 col-md-6 col-12 mx-auto" data-aos="fade-right" data-aos-delay="250">
                    <div class="box card border-0">
                        <div class="col-12">
                            <img src="{{ url('/') }}/storage/{{ $product->image ?? '' }}" alt="blog-img">
                        </div>
                        <div class="card-body">
                            <a href="{{ route("productsSingle", ['locale' => app()->getLocale(), 'slug' => $product->slug]) }}">
                                <h1 class="title-2">
                                    {{ $product->name }}
                                </h1>
                            </a>
                            <p>{{__("Price")}} : {{ $product->price ?? '' }} azn</p>
                        </div>
                    </div>
                </div>
            @empty
                No Data !
            @endforelse
        </div>
    </section>
    <!-- ============== End Blog section ========== -->
@endsection
