@extends('layouts.app')

@section('content')
   <!-- Breadcrumb Start -->
   <div class="breadcrumb-area mt-30">
            <div class="container">
                <div class="breadcrumb">
                    <ul class="d-flex align-items-center">
                        <li><a href="index.html">Home</a></li>
                        <li class="active"><a href="{{route('get.register')}}">đăng ký</a></li>
                    </ul>
                </div>
            </div>
            <!-- Container End -->
        </div>
        <!-- Breadcrumb End -->
     <!-- Register Account Start -->
     <div class="register-account ptb-100 ptb-sm-60">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="register-title">
                            <h3 class="mb-10">Đăng ký tài khoản</h3>
                        </div>
                    </div>
                </div>
                <!-- Row End -->
                <div class="row">
                    <div class="col-sm-8">
                        <form action="" method="POST">
                        @csrf
                            <fieldset>
                                <div class="form-group d-md-flex align-items-md-center">
                                    <label class="control-label col-md-2" for="f-name"><span class="require">*</span>Họ tên</label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" name="name" >
                                    </div>
                                </div>
                                <div class="form-group d-md-flex align-items-md-center">
                                    <label class="control-label col-md-2" for="f-name"><span class="require">*</span>Email</label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" name="email" >
                                    </div>
                                </div>
                                <div class="form-group d-md-flex align-items-md-center">
                                    <label class="control-label col-md-2" for="f-name"><span class="require">*</span>Mật khẩu</label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" name="password" >
                                    </div>
                                </div>
                                <div class="form-group d-md-flex align-items-md-center">
                                    <label class="control-label col-md-2" for="f-name"><span class="require">*</span>Số điện thoại</label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" name="phone" >
                                    </div>
                                </div>

                                <div class="form-group d-md-flex align-items-md-center">
                                <label class="control-label col-md-2" for="f-name"></label>
                                  
                                    <div class="col-md-10">
                                    <input type="submit" value="Đăng ký" class="return-customer-btn">
                                    </div>
                                </div>


                                </div>
                            </fieldset>
                     
                        </form>
                    </div>
                </div>
                <!-- Row End -->
            </div>
            <!-- Container End -->
        </div>
        <!-- Register Account End -->
@stop