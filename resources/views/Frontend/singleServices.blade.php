@extends('Frontend.layouts.app')

@section('title', $service->title)

@section('content')

    <!-- ======= srart Breadcrumbs ======= -->
    <section class="breadcrumbs py-4" data-aos="fade-up" data-aos-delay="150">
        <div class="container">
            <ol>
                <li><a href="{{ route("index", ["locale" => app()->getLocale()]) }}">{{__("Home")}}</a></li>
                <li>{{ $service->title }}</li>
            </ol>
            <h2 class="title">{{ $service->title }}</h2>
            <p class="col-lg-10 col-12">
                {{ $service->description }}
            </p>
        </div>
    </section><!-- End Breadcrumbs -->

    <div class="single-service">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-12 col-12" data-aos="fade-right" data-aos-delay="200">
                    <img style="width: 800px; height: 500px;" src="{{ url('/') }}/storage/{{ $service->image }}" alt="service-img">
                    <p>
                         {!! $service->body !!}
                    </p>
                </div>
            </div>
        </div>
    </div>

@endsection
