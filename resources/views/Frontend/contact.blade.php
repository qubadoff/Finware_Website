@extends('Frontend.layouts.app')

@section('title', __("Contact"))

@section('content')
    <!-- ======= srart Breadcrumbs ======= -->
    <section class="breadcrumbs py-4" data-aos="fade-up" data-aos-delay="100">
        <div class="container">
            <ol>
                <li><a href="{{ route("index", ["locale" => app()->getLocale()]) }}">{{__("Home")}}</a></li>
                <li>{{__("Contact")}}</li>
            </ol>
            <h2 class="title">{{__("Contact")}}</h2>
        </div>
    </section><!-- End Breadcrumbs -->

    <!-- ============== Start contact section ========== -->
    <section class="container contact py-5" id="contact">
        <div class="row  gx-4 ">
            <div class="col-12 col-lg-6 gy-3">
                <h2 class="title-2 " data-aos="fade-right" data-aos-delay="200">
                    {{__("Contact info")}}
                </h2>
                <div class="info d-flex my-4 " data-aos="fade-right" data-aos-delay="250">
                    <h5><i class="bi bi-envelope-fill mx-4"></i>{{ settings()->email }}</h5>
                </div>
                <div class="info d-flex my-4 " data-aos="fade-up" data-aos-delay="300">
                    <h5><i class="bi bi-phone-fill mx-4"></i>{{ settings()->phone }}</h5>
                </div>
                <div class="info d-flex my-4 " data-aos="fade-up" data-aos-delay="350">
                    <h5><i class="bi bi-geo-alt-fill mx-4"></i>{{ settings()->location }}</h5>
                </div>
            </div>


            <div class="col-12 col-lg-6">
                @if(Session::has('success'))
                    <div class="alert alert-success">
                        {{ Session::get('success') }}
                        @php
                            \Illuminate\Support\Facades\Session::forget('success');
                        @endphp
                    </div>
                @endif
                @if($errors->any())
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                @endif
                <!--Form To have user messages-->
                <form action="{{ route("sendEmail", ["locale" => app()->getLocale()]) }}" method="POST">
                    @csrf
                    @method('POST')
                    <div class="col-12" data-aos="fade-up" data-aos-delay="250">
                        <input placeholder="{{__("Name and Surname")}}" type="text" name="name" required class="text-input my-2">
                    </div>
                    <div class="col-12" data-aos="fade-up" data-aos-delay="250">
                        <input placeholder="Email" type="email" name="email" required class="text-input my-2">
                    </div>
                    <div class="col-12" data-aos="fade-up" data-aos-delay="300">
                    <textarea placeholder="{{__("Message")}}" class="text-input my-2" rows="7" cols="30" name="message" required></textarea>
                    </div>
                    <div class="col-12" data-aos="fade-up" data-aos-delay="350">
                        <button type="submit" name="submit" class="btn">{{__("Send")}}</button>
                    </div>
                </form>
            </div>
        </div>

        <br/>
        <br/>
        <br/>

        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3039.061016388974!2d49.82610727746584!3d40.3853402714447!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40307d9be60052ab%3A0xd7852fa710c6b11a!2sCaspian%20Plaza!5e0!3m2!1sen!2saz!4v1708186676316!5m2!1sen!2saz"
                width="800"
                height="500"
                style="border:0;"
                allowfullscreen=""
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>
    <!-- ============== end contact section ========== -->

@endsection
