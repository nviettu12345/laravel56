@extends('layouts.app')
@section('content')
<div class="breadcrumb-area mt-30">
            <div class="container">
                <div class="breadcrumb">
                    <ul class="d-flex align-items-center">
                        <li><a href="/">Trang chủ</a></li>
                        <li class="active"><a href="{{route('get.form.pay')}}">Thanh toán</a></li>
                    </ul>
                </div>
            </div>
            <!-- Container End -->
        </div>
<div class="checkout-area pb-100 pt-15 pb-sm-60">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="checkbox-form mb-sm-40">
                            <h3>Thông tin thanh toán</h3>
                            <div class="row">
                      
                                <div class="col-md-12">
                                    <div class="checkout-form-list mb-sm-30">
                                        <label>Họ tên <span class="required">*</span></label>
                                        <input type="text" value="{{get_data_user('web','name')}}" name="name">
                                    </div>
                                </div>
                         
                      
                                <div class="col-md-12">
                                    <div class="checkout-form-list">
                                        <label>Địa chỉ <span class="required">*</span></label>
                                        <input name="address" type="text" placeholder="Street address">
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="checkout-form-list mb-30">
                                        <label>Email Address <span class="required">*</span></label>
                                        <input type="email" value="{{get_data_user('web','email')}}">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="checkout-form-list mb-30">
                                        <label>Số điện thoại  <span class="required">*</span></label>
                                        <input type="text" name="phone" value="{{get_data_user('web','phone')}}">
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="checkout-form-list mb-30">
                                        <label>Ghi chú <span class="required">*</span></label>
                                        <textarea class="form-control" name="note"></textarea>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="checkout-form-list mb-30">
                                     
                                        <input type="submit" class="btn btn-success" value="xác nhận thông tin">
                                    </div>
                                </div>
                            
                            </div>
                   
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="your-order">
                            <h3>Đơn hàng của bạn</h3>
                            <div class="your-order-table table-responsive">
                                <table>
                                    <thead>
                                        <tr>
                                            <th class="product-name">Sản phẩm </th>
                                            <th class="product-total">Tổng cộng</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($products as $product)
                                    <tr class="cart_item">
                                            <td class="product-name">
                                            {{$product->name}} <span class="product-quantity"> × {{$product->qty}}</span>
                                            </td>
                                            <td class="product-total">
                                                <span class="amount">{{number_format($product->price*$product->qty)}} VNĐ</span>
                                            </td>
                                        </tr>
                                    @endforeach

                                    </tbody>
                                    <tfoot>

                                        <tr class="order-total">
                                            <th>Tổng đơn</th>
                                            <td><span class=" total amount">{{\Cart::subtotal()}}</span>
                                            </td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                          
                        </div>
                    </div>
                </div>
            </div>
        </div>
@stop