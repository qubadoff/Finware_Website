@extends('Frontend.layouts.app')
@section('title', __("Home"))
@section('content')
    <!-- ============== Start Hero section ========== -->
    <section class="hero d-flex flex-column justify-content-center align-items-center" id="hero">
        <div id="particles-js"></div>
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="hero-text col-12 col-lg-5">
                    <div class="row">
                        <div class="col-12 ">
                            <h1 class="title col-12" data-aos="fade-up" data-aos-delay="150">
                                {{__("Slider One")}}
                            </h1>
                        </div>
                        <div class="col-lg-10 col-12" data-aos="fade-up" data-aos-delay="200">
                            <p>
                                {{__("Slider 2")}}
                            </p>
                        </div>
                        <div class="col-10" data-aos="fade-up" data-aos-delay="250">
                            <a href="{{ route("contact", ["locale" => app()->getLocale()]) }}" class="btn">{{__("Contact")}}</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-7 mx-md-auto text-center" data-aos="fade-left" data-aos-delay="100">
                    <div class="hero-image">
                        <div class="hero-img">
                            <img class="img-fluid " alt="hero-img"
                                 src="{{ asset('/') }}assets/images/hero/bodigmas_IT_solutions_company_illustrationvectorflat_designmini_942ad818-e3f4-47af-a5e8-78e030aff9c9-removebg.png">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ============== End Hero section ========== -->

    <!-- ============== Start services section ========== -->
    <section class="container services py-5" id="services">
        <div class="heading">
            <h4 class="pretitle" data-aos="fade-up">
                {{__("Services")}}
            </h4>
            <h1 class="title col-lg-10 col-12" data-aos="fade-up" data-aos-delay="100">
                {{__("What We’re Offering?")}}
            </h1>
        </div>
        <div class="row gy-4 gx-4 ">
            <!-- service number 1 -->
            @forelse($services as $service)
                <div class="col-md-6 col-12 col-lg-4 mx-auto ">
                    <div class="box box-service box-hover" data-aos="fade-right" data-aos-delay="250">
                        <div class="box-icon my-2">
                            <i class="bi bi-server"></i>
                        </div>
                        <h2 class="title-2 my-2 ">{{ $service->title }}</h2>
                        <p>{{ $service->description }}</p>
                        <a href="{{ route("servicesSingle", ["locale" => app()->getLocale(), "slug" => $service->slug]) }}" class="my-2 learn-more">
                            {{ __("Learn More")  }}
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
            @empty
                No Data !
            @endforelse
        </div>
    </section>
    <!-- ============== End services section ========== -->

@endsection
