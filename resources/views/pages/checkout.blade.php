@extends('layouts.master_blade')

@section('home_master')
    <!-- Checkout Section Begin -->
    <section class="checkout spad">
        <div class="container">
            <div class="checkout__form">
                    <div class="row">

                        <h6 class="checkout__title">Billing Details</h6>


                        <div class="col-lg-8 col-md-6">
                            <div class="checkout__order">
                                <h4 class="order__title">Your order</h4>
                                <ul class="checkout__total__all">
                                    <li>Subtotal <span> {{ $total }}</span></li>
                                    <li>Tax <span> 0</span></li>
                                    <li>Delivery <span>100</span></li>
                                    <hr class="after_delivery_hr">
                                    <li>Total <span>Rs. {{ $total + 100 }}</span></li>
                                </ul>
                            </div>

                            <div class="checkout__input mt-2">
                                <form action="{{ url('order_cart') }}" method="POST">
                                    @csrf
                                    <p>Enter Your Address<span>*</span></p>
                                    <textarea name="address" id="" placeholder="Enter your address" cols="30" rows="5"></textarea>
                                    <button type="submit" class="site-btn">PLACE ORDER</button>
                                </form>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </section>
    <!-- Checkout Section End -->
@endsection
