@php
$sliders = DB::table('sliders')->get();
@endphp

   <!-- Hero Section Begin -->
    <section class="hero">
        <div class="hero__slider owl-carousel">
            @foreach ($sliders as $slider)
                <div class="hero__items set-bg" data-setbg="{{ asset($slider->image) }}">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-5 col-lg-7 col-md-8">
                                <div class="hero__text">
                                    <h6>Summer Sale</h6>
                                    <h2>{{ $slider->title }}</h2>
                                    <p>{{ $slider->description }}</p>
                                    <a href="{{ url('shop') }}" class="primary-btn">Shop now <span class="arrow_right"></span></a>
                                    <div class="hero__social">
                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                        <a href="#"><i class="fa fa-pinterest"></i></a>
                                        <a href="#"><i class="fa fa-instagram"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </section>
    <!-- Hero Section End -->
