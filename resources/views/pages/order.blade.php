@extends('layouts.master_blade')

@section('home_master')
    <!-- Shopping Cart Section Begin -->
    <section class="shopping-cart spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="shopping__cart__table">
                        <table>
                            <thead>
                                <tr>
                                    <th>Product</th>
                                    <th>Description</th>
                                    <th>Action</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($orders as $item)
                                        <tr>
                                            <td class="product__cart__item">
                                                <div class="product__cart__item__pic">
                                                    <img src="{{ asset($item->plant_image) }}" width="100px" alt="">
                                                </div>
                                                <div class="product__cart__item__text">
                                                    <h6>{{ $item->plant_name }}</h6>
                                                   
                                                </div>
                                            </td>
                                            <td>
                                                <h5> {{ $item->description }}</h5>
                                                
                                            </td>
                                            
                                        <td>
                                            <a href="" class="btn btn-success">Cancel Order</a>
                                        </td>
                                           
                                            
                                        </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Shopping Cart Section End -->
@endsection
