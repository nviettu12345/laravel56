@extends('layouts.app')
@section('content')

      <!-- Breadcrumb Start -->
      <div class="breadcrumb-area mt-30">
            <div class="container">
                <div class="breadcrumb">
                    <ul class="d-flex align-items-center">
                        <li><a href="/">Trang chủ</a></li>
                        <li class="active"><a href="{{route('get.contact')}}">Liên hệ</a></li>
                    </ul>
                </div>
            </div>
            <!-- Container End -->
        </div>
        <!-- Breadcrumb End -->
        <!-- Contact Email Area Start -->
        <div class="contact-area ptb-100 ptb-sm-60">
            <div class="container">
                <h3 class="mb-20">Liên hệ</h3>
                <form action=""  method="post">
                @csrf
                    <div class="address-wrapper row">
                        <div class="col-md-12">
                            <div class="address-fname">
                                <input class="form-control" type="text" name="c_name" placeholder="Họ tên">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="address-email">
                                <input class="form-control" type="email" name="c_email" placeholder="Email" required>
                            </div>
                        </div>
          
                        <div class="col-md-12">
                            <div class="address-subject">
                                <input class="form-control" type="text" name="c_title" placeholder="Tiêu đề" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="address-textarea">
                                <textarea name="c_content" class="form-control" placeholder="Nội dung" required></textarea>
                            </div>
                        </div>
                    </div>
                    <p class="form-message"></p>
                    <div class="footer-content mail-content clearfix">
                        <div class="send-email float-md-right">
                            <input value="Gửi" class="return-customer-btn" type="submit">
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- Contact Email Area End -->
 @stop