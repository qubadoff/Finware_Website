<br/><br/><br/><br/>
<!-- ============== Start Footer section ========== -->
<div class="footer">
    <div class="container">
        <div class="row justify-content-center align-items-center g-4">
            <div class="col-12 col-lg-3 col-md-6 mx-auto my-4">
                <div class="box">
                    <a href="{{ route('index', ['locale' => app()->getLocale()]) }}" class="logo "><img class="my-2" src="{{ url('/') }}/storage/{{ settings()->logo }}" alt=""></a>

                    <h4 class="my-2">
                        {{__("Follow us")}}
                    </h4>
                    <div class="social d-flex gap-2">
                        <div class="icon">
                            <a href="https://facebook.com/{{ settings()->fb_url }}">
                                <i class="bi bi-facebook"></i>
                            </a>
                        </div>
                        <div class="icon">
                            <a href="https://instagram.com/{{ settings()->instagram_url }}">
                                <i class="bi bi-instagram"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-3 col-md-6 mx-auto d-flex flex-column my-4 gap-3">
                <h4>{{__("Pages")}}</h4>
                <ul class="d-flex flex-column gap-3">
                    <li class="d-flex align-items-center gap-2">
                        <i class="bi bi-chevron-right"></i>
                        <a href="{{ route("index", ["locale" => app()->getLocale()]) }}">{{__("Home")}}</a>
                    </li>
                    <li class="d-flex align-items-center gap-2">
                        <i class="bi bi-chevron-right"></i>
                        <a href="{{ route("products", ["locale" => app()->getLocale()]) }}">{{__("Products")}}</a>
                    </li>
                    <li class="d-flex align-items-center gap-2">
                        <i class="bi bi-chevron-right"></i>
                        <a href="{{ route("portfolio", ["locale" => app()->getLocale()]) }}">{{__("Portfolio")}}</a>
                    </li>
                    <li class="d-flex align-items-center gap-2">
                        <i class="bi bi-chevron-right"></i>
                        <a href="{{ route("contact", ["locale" => app()->getLocale()]) }}">{{__("Contact")}}</a>
                    </li>
                </ul>
            </div>
            <div class="col-12 col-lg-3 col-md-6 mx-auto d-flex flex-column my-4 gap-3">
                <h4>{{__("Dashboard")}}</h4>
                <ul class="d-flex flex-column gap-3">
                    <li class="d-flex align-items-center gap-2">
                        <i class="bi bi-chevron-right"></i>
                        <a href="#">
                            {{__("Login")}}
                        </a>
                    </li>
                    <li class="d-flex align-items-center gap-2">
                        <i class="bi bi-chevron-right"></i>
                        <a href="#">
                            {{__("Register")}}
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <hr>
    <div class="copyrights ">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 d-flex justify-content-start">
                    <p class="creadits">
                        &copy; {{ date("Y") }} Finware
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ============== end Footer section ========== -->
