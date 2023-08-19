@extends('layouts.master_blade')

@section('home_master')


<!-- Shopping Cart Section Begin -->
<section class="shopping-cart spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="shopping__cart__table">
                    <table>
                        <thead>
                            <tr>
                                <th>Product</th>
                                <th>Quantity</th>
                                <th>Total</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($plants as $item)
                            {{-- @if($item >= 1) --}}
                            <tr>
                                <td class="product__cart__item">
                                    <div class="product__cart__item__pic">
                                        <img src="{{ asset($item->plant_image) }}" width="100px" alt="">
                                    </div>
                                    <div class="product__cart__item__text">
                                        <h6>{{ $item->plant_name }}</h6>
                                        <h5>Rs. {{ $item->price }}</h5>
                                    </div>
                                </td>
                                <td class="quantity__item">
                                    <div class="quantity">
                                        <div class="pro-qty-2">
                                            <input type="text" value="1">
                                        </div>
                                    </div>
                                </td>
                                <td class="cart__price">Rs. {{ $item->price }}</td>
                                <td class="cart__close"><a href="{{ url('/cart/delete/'. $item->cart_id) }}"><i class="fa fa-close"></i></a></td>
                            </tr>
                            {{-- @else
                                @php
                                    echo "No Data Found";
                                @endphp
                            @endif --}}
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="continue__btn">
                            <a href="shop.html">Continue Shopping</a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="continue__btn update__btn">
                            <a href="{{ url('/cart') }}"><i class="fa fa-spinner"></i> Update cart</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="cart__discount">
                    <h6>Discount codes</h6>
                    <form action="#">
                        <input type="text" placeholder="Coupon code">
                        <button type="submit">Apply</button>
                    </form>
                </div>
                <div class="cart__total">
                    <h6>Cart total</h6>
                    
                    <a href="{{ url('/checkout') }}" class="primary-btn">Proceed to checkout</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Shopping Cart Section End -->


@endsection