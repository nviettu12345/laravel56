@extends('layouts.app')
@section('content')
<div class="breadcrumb-area mt-30">
            <div class="container">
                <div class="breadcrumb">
                    <ul class="d-flex align-items-center">
                        <li><a href="index.html">Home</a></li>
                        <li class="active"><a href="cart.html">Cart</a></li>
                    </ul>
                </div>
            </div>
            <!-- Container End -->
        </div>
        <div class="cart-main-area ptb-100 ptb-sm-60">
            <div class="container">
                <div class="row">
                
                <div class="col-md-12 col-sm-12">
                    <div class="post-title pb-30">
                           <h2>Giỏ hàng của bạn</h2>
                      </div>
                        <!-- Form Start -->
                        <form action="#">
                            <!-- Table Content Start -->
                            <div class="table-content table-responsive mb-45">
                                <table>
                                    <thead>
                                        <tr>
                                        <th class="product-thumbnail">STT</th>
                                            <th class="product-thumbnail">Hình ảnh</th>
                                            <th class="product-name">Tên sản phẩm</th>
                                            <th class="product-price">Giá</th>
                                            <th class="product-quantity">Số lượng</th>
                                            <th class="product-subtotal">Thành tiền</th>
                                            <th class="product-remove">Thao tác</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i=1;?>
                                        @foreach($products as $key => $product)
                                        <tr>
                                            <td>{{$i}}</td>
                                            <td class="product-thumbnail">
                                                <a href="#"><img src="{{asset('upload/product/'.$product->options->avatar)}}" alt="{{$product->name}}"></a>
                                            </td>
                                            <td class="product-name"><a href="#">{{$product->name}}</a></td>
                                            <td class="product-price"><span class="amount">{{number_format($product->price,0,',','.') }} VNĐ</span></td>
                                            <td class="product-quantity"><input type="number" value="{{$product->qty}}"></td>
                                            <td class="product-subtotal">{{number_format($product->qty*$product->price,0,',','.') }} VNĐ</td>
                                            <td class="product-remove"> 
                                            <a href="#"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                            <a href="#"><i class="fa fa-times" aria-hidden="true"></i></a>
                                            </td>
                                        </tr>
                                        <?php $i++;?>
                                        @endforeach
                                       
                              
                                    </tbody>
                                </table>
                            </div>
                            <!-- Table Content Start -->
                            <div class="row">
                               <!-- Cart Button Start -->
                                <div class="col-md-8 col-sm-12">
                                 
                                </div>
                                <!-- Cart Button Start -->
                                <!-- Cart Totals Start -->
                                <div class="col-md-4 col-sm-12">
                                    <div class="cart_totals float-md-right text-md-right">
                                        <h2>Tổng tiền</h2>
                                        <br>
                                        <table class="float-md-right">
                                            <tbody>
                                        
                                                <tr class="order-total">
                                                    <th></th>
                                                    <td>
                                                        <strong><span class="amount">{{\Cart::subtotal()}}</span></strong>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <div class="wc-proceed-to-checkout">
                                            <a href="{{route('get.form.pay')}}">Thanh toán</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Cart Totals End -->
                            </div>
                            <!-- Row End -->
                        </form>
                        <!-- Form End -->
                    </div>
                </div>
                 <!-- Row End -->
            </div>
        </div>
@stop