@extends('layouts.master_blade')

@section('home_master')

 <!-- Shop Section Begin -->
 <section class="shop spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="shop__sidebar">
                    <div class="shop__sidebar__search">
                        <form action="#">
                            <input type="text" placeholder="Search...">
                            <button type="submit"><span class="icon_search"></span></button>
                        </form>
                    </div>
                    <div class="shop__sidebar__accordion">
                        <div class="accordion" id="accordionExample">
                            <div class="card">
                                <div class="card-heading">
                                    <a data-toggle="collapse" data-target="#collapseOne">Categories</a>
                                </div>
                                <div id="collapseOne" class="collapse show" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <div class="shop__sidebar__categories">
                                            <ul class="filter__controls shop-products-filter">
                                                <li class="shop-links" data-filter="*">All</li>
                                                @foreach ($categories as $category)
                                                <li data-filter=".{{$category->category_name}}">{{ucfirst($category->category_name)}}</li>
                                                @endforeach
                                               
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-heading">
                                    <a data-toggle="collapse" data-target="#collapseThree">Filter Price</a>
                                </div>
                                <div id="collapseThree" class="collapse show" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <div class="shop__sidebar__price">
                                            <ul  class="filter__controls">
                                                <li data-filter=".0-50"><a>0 - 1000</a></li>
                                                <li data-filter=".50-100"><a >1001 - 2000</a></li>
                                                <li data-filter=".100-150"><a >2001 - 3000</a></li>
                                                <li data-filter=".150-200"><a>3001 - 4000</a></li>
                                                <li data-filter=".200-250"><a>4001 - 5000</a></li>
                                               
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                       
                            <div class="card">
                                <div class="card-heading">
                                    <a data-toggle="collapse" data-target="#collapseSix">Tags</a>
                                </div>
                                <div id="collapseSix" class="collapse show" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <div class="shop__sidebar__tags">
                                            <a href="#">Flowering</a>
                                            <a href="#">Non-FLower</a>
                                            <a href="#">Indoor</a>
                                            <a href="#">Plant</a>
                                            <a href="#">Fertilizer</a>
                                            <a href="#">Seeds</a>
                                            <a href="#">Tools</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-9">
                
                <div class="row product__filter">
                    @foreach ($plants as $plant)
                    <div class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6 mix {{$plant->category_name}}">
                        <div class="product__item">
                            <div class="product__item__pic set-bg" data-setbg="{{ asset($plant->plant_image) }}">
                                <span class="label">New</span>
                                <ul class="product__hover">
                                    <li><a href="#"><img src="{{asset('frontend/assets/img/icon/heart.png')}}" alt=""></a></li>
                                    
                                    <li><a href="#"><img src="{{asset('frontend/assets/img/icon/search.png')}}" alt=""></a></li>
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
                <div class="row">
                    <div class="col-lg-12">
                        <div class="product__pagination">
                            <a class="active" href="#">1</a>
                            <a href="#">2</a>
                            <a href="#">3</a>
                            <span>...</span>
                            <a href="#">21</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Shop Section End -->

@endsection