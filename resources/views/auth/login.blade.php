@extends('layouts.app')

@section('content')
   <!-- Breadcrumb Start -->
   <div class="breadcrumb-area mt-30">
            <div class="container">
                <div class="breadcrumb">
                    <ul class="d-flex align-items-center">
                        <li><a href="/">Trang chủ</a></li>
                        <li class="active"><a href="{{route('get.login')}}">đăng nhập</a></li>
                  
                    </ul>
                </div>
            </div>
            <!-- Container End -->
        </div>
        <!-- Breadcrumb End -->
        <!-- LogIn Page Start -->
        <div class="log-in ptb-100 ptb-sm-60">
            <div class="container">
                <div class="row">
            
                    <!-- Returning Customer Start -->
                    <div class="col-md-6">
                        <div class="well">
                            <div class="return-customer">
                                <h3 class="mb-10 custom-title">Đăng nhập</h3>                     
                                <form action="" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="text" name="email" placeholder="nhập địa chỉ email..." id="email" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Mật khẩu</label>
                                        <input type="text" name="password" placeholder="Password" id="password" class="form-control">
                                    </div>
                                    <p class="lost-password"><a href="forgot-password.html">Forgot password?</a></p>
                                    <input type="submit" value="Đăng nhập" class="return-customer-btn">
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Returning Customer End -->
                </div>
                <!-- Row End -->
            </div>
            <!-- Container End -->
        </div>
        <!-- LogIn Page End -->
@endsection
