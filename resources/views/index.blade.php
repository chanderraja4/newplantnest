

@extends('layouts.master_blade')

@section('home_master')
    
@include('layouts.body.slider')
<!-- Banner Section Begin -->
  <section class="banner spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 offset-lg-4">
                <div class="banner__item">

                    <div class="banner__item__pic">
                        <img src="{{ asset('frontend/assets/img/banner/banner-4.jpg') }}" alt="">
                    </div>
                    
                    <div class="banner__item__text">
                        <h2>Green World Best Flowering</h2>
                        <a href="{{ url('shop') }}">Shop now</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="banner__item banner__item--middle">
                    <div class="banner__item__pic">
                        <img src="{{ asset('frontend/assets/img/banner/banner-6.jpg') }}" alt="">
                    </div>
                    <div class="banner__item__text">
                        <h2>Medicinal Plants</h2>
                        <a href="{{ url('shop') }}">Shop now</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="banner__item banner__item--last">
                    <div class="banner__item__pic">
                        <img src="{{ asset('frontend/assets/img/banner/banner-5.jpg') }}" alt="">
                    </div>
                    <div class="banner__item__text">
                        <h2>Indoor Plants</h2>
                        <a href="{{ url('shop') }}">Shop now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Banner Section End -->

<!-- Product Section Begin -->
<section class="product spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <ul class="filter__controls">
                    <li data-filter="*">All</li>
                    @foreach ($categories as $category)
                    <li data-filter=".{{$category->category_name}}">{{ucfirst($category->category_name)}}</li>
                    @endforeach
                    {{-- <li class="" data-filter=".flowering">Flowering</li>
                    <li data-filter=".nonflower">Non-flowering</li>
                    <li data-filter=".indoor">Indoor</li>
                    <li data-filter=".outdoor">Outdoor</li>
                    <li data-filter=".succulents">Succulents</li>
                    <li data-filter=".medicinal">Medicinal
                    </li> --}}
                    
                </ul>
            </div>
        </div>
        <div class="row product__filter">
            @foreach ($plants as $plant)
                
            <div class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6 mix {{$plant->category_name}}">
                <div class="product__item">
                    <div class="product__item__pic set-bg" data-setbg="{{ asset($plant->plant_image) }}">
                        <span class="label">New</span>
                        <ul class="product__hover">
                            <li><a href="#"><img src="{{ asset('frontend/assets/img/icon/heart.png') }}" alt=""></a></li>
                            
                            <li><a href="{{ url('/shop_detail') }}"><img src="{{ asset('frontend/assets/img/icon/search.png') }}" alt=""></a></li>
                        </ul>
                    </div>
                    <div class="product__item__text">
                        <h6>{{$plant->plant_name}}</h6>
                        <form action="{{ url('/add_to_cart') }}" method="POST">
                            <input type="hidden" name="plant_id" value="{{$plant->id}}">
                            @csrf
                            <a href="#" class="add-cart"><button class="add-cart bg-transparent border-none ">+ Add To Cart</button></a>

                          </form>
                        <div class="rating">
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                        </div>
                        <h5>{{$plant->price}}</h5>
                        
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- Product Section End -->



<!-- Categories Section Begin -->
<section class="categories spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="categories__text">
                    <h2> Hot Sale <br /> <span>Tools</span> <br /> Accessories</h2>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="categories__hot__deal">
                    <img src="{{ asset('frontend/assets/img/product-sale2.jpg') }}" alt="">
                    <div class="hot__deal__sticker">
                        <span>Sale Of</span>
                        <h5>$29.99</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 offset-lg-1">
                <div class="categories__deal__countdown">
                    <span>Deal Of The Week</span>
                    <h2>Different gardening stuff
                    </h2>
                    <div class="categories__deal__countdown__timer" id="countdown">
                        <div class="cd-item">
                            <span>3</span>
                            <p>Days</p>
                        </div>
                        <div class="cd-item">
                            <span>1</span>
                            <p>Hours</p>
                        </div>
                        <div class="cd-item">
                            <span>50</span>
                            <p>Minutes</p>
                        </div>
                        <div class="cd-item">
                            <span>18</span>
                            <p>Seconds</p>
                        </div>
                    </div>
                    <a href="{{ url('shop') }}" class="primary-btn">Shop now</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Categories Section End -->

<!-- Instagram Section Begin -->
<section class="instagram spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="instagram__pic">
                    <div class="instagram__pic__item set-bg" data-setbg="{{ asset('frontend/assets/img/instagram/instagram-8.jpg') }}"></div>
                    <div class="instagram__pic__item set-bg" data-setbg="{{ asset('frontend/assets/img/instagram/instagram-12.jpg') }}"></div>
                    <div class="instagram__pic__item set-bg" data-setbg="{{ asset('frontend/assets/img/instagram/instagram-10.jpg') }}"></div>
                    <div class="instagram__pic__item set-bg" data-setbg="{{ asset('frontend/assets/img/instagram/instagram-11.jpg') }}"></div>
                    <div class="instagram__pic__item set-bg" data-setbg="{{ asset('frontend/assets/img/instagram/instagram-9.jpg') }}"></div>
                    <div class="instagram__pic__item set-bg" data-setbg="{{ asset('frontend/assets/img/instagram/instagram-13.jpg') }}"></div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="instagram__text">
                    <h2>About Us</h2>
                    <p>At our store, we believe in the magic of growth. From tiny seeds to thriving greens, our plants carry with them the promise of a flourishing future. Explore the enchantment of growth with us.</p>
                    <h3>#Green World</h3>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Instagram Section End -->

<!-- Latest Blog Section Begin -->
<section class="latest spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <span>Latest News</span>
                    <h2>How To Care Your Plants?</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="blog__item">
                    <div class="blog__item__pic set-bg" data-setbg="{{ asset('frontend/assets/img/blog/blog-10.jpg') }}"></div>
                    <div class="blog__item__text">
                        <span><img src="img/icon/calendar.png" alt=""> 16 February 2020</span>
                        <h5>What Curling Irons Are The Best Ones</h5>
                        <a href="{{ url('blog') }}">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="blog__item">
                    <div class="blog__item__pic set-bg" data-setbg="{{ asset('frontend/assets/img/blog/blog-12.jpg') }}"></div>
                    <div class="blog__item__text">
                        <span><img src="img/icon/calendar.png" alt=""> 21 February 2020</span>
                        <h5>Eternity Bands Do Last Forever</h5>
                        <a href="{{ url('blog') }}">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="blog__item">
                    <div class="blog__item__pic set-bg" data-setbg="{{ asset('frontend/assets/img/blog/blog-11.jpg') }}"></div>
                    <div class="blog__item__text">
                        <span><img src="img/icon/calendar.png" alt=""> 28 February 2020</span>
                        <h5>The Health Benefits Of Sunglasses</h5>
                        <a href="{{ url('blog') }}">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Latest Blog Section End -->


@endsection