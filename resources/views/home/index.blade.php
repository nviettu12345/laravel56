@extends('layouts.app')

@section('content')

         <!-- Brand Banner Area Start Here -->
         <div class="image-banner pb-50 off-white-bg">
            <div class="container">
                <div class="col-img">
                    <a href="#"><img src="{{asset('site')}}/img/banner/h1-banner.jpg" alt="image banner"></a>
                </div>
            </div>
            <!-- Container End -->
        </div>
        <!-- Brand Banner Area End Here -->
       
         <!-- Sản phẩm nổi bật -->
         @if(isset($productHot))
        <div class="hot-deal-products off-white-bg pb-90 pb-sm-50">
            <div class="container">
               <!-- Product Title Start -->
               <div class="post-title pb-30">
                   <h2>Sản phẩm nổi bật</h2>
               </div>
               <!-- Product Title End -->
            
                <div class="hot-deal-active owl-carousel">
                 @foreach ($productHot as $hot)
                    <div class="single-product">
                        <!-- Product Image Start -->
                        <div class="pro-img">
                            <a href="{{route('get.detail.product',[str_slug($hot->pro_name),$hot->id])}}">
                                <img class="primary-img" src="{{asset('upload/product/'.$hot->pro_avatar)}}" alt="{{$hot->pro_name}}">
                                <img class="secondary-img" src="{{asset('upload/product/'.$hot->pro_avatar)}}" alt="{{$hot->pro_name}}">
                            </a>
                       </div>
                        <!-- Product Image End -->
                        <!-- Product Content Start -->
                        <div class="pro-content">
                            <div class="pro-info">
                                <h4><a href="{{route('get.detail.product',[str_slug($hot->pro_name),$hot->id])}}">{{$hot->pro_name}}</a></h4>
                                <p><span class="price ">{{number_format($hot->pro_price)}}</span><del class="prev-price">{{number_format($hot->pro_price)}}</del></p>
                                <div class="label-product l_sale">{{number_format($hot->pro_sale)}}<span class="symbol-percent">%</span></div>
                            </div>
                            <div class="pro-actions">
                                <div class="actions-primary">
                                    <a href="{{route('add.shopping.cart',$hot->id)}}" title="Thêm vào giỏ hàng"> + Thêm vào giỏ hàng</a>
                                </div>
                        
                            </div>
                        </div>
                        <!-- Product Content End -->
                    </div>
                 @endforeach   
                </div>
            </div>
        </div>  
        @endif
        <!-- end Sản phẩm nổi bật -->

        <!-- tin tức -->
        @if(isset($articleNews))
        <div class="blog-area ptb-95 off-white-bg ptb-sm-55">
            <div class="container">
                <div class="like-product-area"> 
                    <h2 class="section-ttitle2 mb-30">Latest Blog Post </h2>
               <!-- Latest Blog Active Start Here -->
               <div class="latest-blog-active owl-carousel">
                   <!-- Single Blog Start -->
                    @foreach($articleNews as $articleNew)
                   <div class="single-latest-blog">
                       <div class="blog-img">
                           <a href="single-blog.html"><img src="{{asset('upload/article/'.$articleNew->a_avatar)}}" alt="{{$articleNew->a_name}}"></a>
                       </div>
                       <div class="blog-desc">
                           <h4><a href="single-blog.html">{{$articleNew->a_name}}</a></h4>
                            <ul class="meta-box d-flex">
                                <li><a href="#">By Truemart</a></li>
                            </ul>
                            <p>{{$articleNew->a_description}}</p>
                            <a  class="readmore" href="single-blog.html">Đọc thêm</a>
                       </div>
                       <div class="blog-date">
                            <span>28</span>
                            June
                        </div>
                   </div>
                   @endforeach
                   <!-- Single Blog End --> 
               </div>
               <!-- Latest Blog Active End Here -->
                </div>
                <!-- main-product-tab-area-->
            </div>
            <!-- Container End -->
        </div>
        @endif
        <!-- end tin tuc -->
        <!-- Hot Deal Products Start Here -->
        <div class="hot-deal-products off-white-bg pb-90 pb-sm-50">
            <div class="container">
               <!-- Product Title Start -->
               <div class="post-title pb-30">
                   <h2>hot deals</h2>
               </div>
               <!-- Product Title End -->
                <!-- Hot Deal Product Activation Start -->
                <div class="hot-deal-active owl-carousel">
                    <!-- Single Product Start -->
                    <div class="single-product">
                        <!-- Product Image Start -->
                        <div class="pro-img">
                            <a href="product.html">
                                <img class="primary-img" src="{{asset('site')}}/img/products/1.jpg" alt="single-product">
                                <img class="secondary-img" src="{{asset('site')}}/img/products/7.jpg" alt="single-product">
                            </a>
                            <div class="countdown" data-countdown="2020/03/01"></div>
                            <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                        </div>
                        <!-- Product Image End -->
                        <!-- Product Content Start -->
                        <div class="pro-content">
                            <div class="pro-info">
                                <h4><a href="product.html">Poly and Bark Vortex Side</a></h4>
                                <p><span class="price">$84.45</span><del class="prev-price">$105.50</del></p>
                                <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                            </div>
                            <div class="pro-actions">
                                <div class="actions-primary">
                                    <a href="cart.html" title="Add to Cart"> + Add To Cart</a>
                                </div>
                                <div class="actions-secondary">
                                    <a href="compare.html" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                    <a href="wishlist.html" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                </div>
                            </div>
                        </div>
                        <!-- Product Content End -->
                    </div>
                    <!-- Single Product End -->
                    <!-- Single Product Start -->
                    <div class="single-product">
                        <!-- Product Image Start -->
                        <div class="pro-img">
                            <a href="product.html">
                                <img class="primary-img" src="{{asset('site')}}/img/products/24.jpg" alt="single-product">
                                <img class="secondary-img" src="{{asset('site')}}/img/products/25.jpg" alt="single-product">
                            </a>
                            <div class="countdown" data-countdown="2020/03/01"></div>
                            <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                        </div>
                        <!-- Product Image End -->
                        <!-- Product Content Start -->
                        <div class="pro-content">
                            <div class="pro-info">
                                <h4><a href="product.html">Light Inverted Pendant Quick</a></h4>
                                <p><span class="price">$84.45</span><del class="prev-price">$105.50</del></p>
                                <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                            </div>
                            <div class="pro-actions">
                                <div class="actions-primary">
                                    <a href="cart.html" title="Add to Cart">+ Add To Cart</a>
                                </div>
                                <div class="actions-secondary">
                                    <a href="compare.html" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                    <a href="wishlist.html" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                </div>
                            </div>
                        </div>
                        <!-- Product Content End -->
                    </div>
                    <!-- Single Product End -->
                    <!-- Single Product Start -->
                    <div class="single-product">
                        <!-- Product Image Start -->
                        <div class="pro-img">
                            <a href="product.html">
                                <img class="primary-img" src="{{asset('site')}}/img/products/42.jpg" alt="single-product">
                                <img class="secondary-img" src="{{asset('site')}}/img/products/43.jpg" alt="single-product">
                            </a>
                            <div class="countdown" data-countdown="2020/03/01"></div>
                            <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                        </div>
                        <!-- Product Image End -->
                        <!-- Product Content Start -->
                        <div class="pro-content">
                            <div class="pro-info">
                                <h4><a href="product.html">Terra Xpress HE Cooking </a></h4>
                                <p><span class="price">$84.45</span><del class="prev-price">$105.50</del></p>
                                <div class="label-product l_sale">15<span class="symbol-percent">%</span></div>
                            </div>
                            <div class="pro-actions">
                                <div class="actions-primary">
                                    <a href="cart.html" title="Add to Cart">+ Add To Cart</a>
                                </div>
                                <div class="actions-secondary">
                                    <a href="compare.html" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                    <a href="wishlist.html" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                </div>
                            </div>
                        </div>
                        <!-- Product Content End -->
                        <span class="sticker-new">new</span>
                    </div>
                    <!-- Single Product End -->
                    <!-- Single Product Start -->
                    <div class="single-product">
                        <!-- Product Image Start -->
                        <div class="pro-img">
                            <a href="product.html">
                                <img class="primary-img" src="{{asset('site')}}/img/products/30.jpg" alt="single-product">
                                <img class="secondary-img" src="{{asset('site')}}/img/products/31.jpg" alt="single-product">
                            </a>
                            <div class="countdown" data-countdown="2020/03/01"></div>
                            <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                        </div>
                        <!-- Product Image End -->
                        <!-- Product Content Start -->
                        <div class="pro-content">
                            <div class="pro-info">
                                <h4><a href="product.html">Calandiva Wrapped 12cm</a></h4>
                                <p><span class="price">$84.45</span><del class="prev-price">$105.50</del></p>
                                <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                            </div>
                            <div class="pro-actions">
                                <div class="actions-primary">
                                    <a href="cart.html" title="Add to Cart">+ Add To Cart</a>
                                </div>
                                <div class="actions-secondary">
                                    <a href="compare.html" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                    <a href="wishlist.html" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                </div>
                            </div>
                        </div>
                        <!-- Product Content End -->
                    </div>
                    <!-- Single Product End -->
                    <!-- Single Product Start -->
                    <div class="single-product">
                        <!-- Product Image Start -->
                        <div class="pro-img">
                            <a href="product.html">
                                <img class="primary-img" src="{{asset('site')}}/img/products/8.jpg" alt="single-product">
                                <img class="secondary-img" src="{{asset('site')}}/img/products/9.jpg" alt="single-product">
                            </a>
                            <div class="countdown" data-countdown="2020/03/01"></div>
                            <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                        </div>
                        <!-- Product Image End -->
                        <!-- Product Content Start -->
                        <div class="pro-content">
                            <div class="pro-info">
                                <h4><a href="product.html">Gpoly and Bark Eames Styl...</a></h4>
                                <p><span class="price">$84.45</span><del class="prev-price">$105.50</del></p>
                                <div class="label-product l_sale">10<span class="symbol-percent">%</span></div>
                            </div>
                            <div class="pro-actions">
                                <div class="actions-primary">
                                    <a href="cart.html" title="Add to Cart">+ Add To Cart</a>
                                </div>
                                <div class="actions-secondary">
                                    <a href="compare.html" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                    <a href="wishlist.html" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                </div>
                            </div>
                        </div>
                        <!-- Product Content End -->
                        <span class="sticker-new">new</span>
                    </div>
                    <!-- Single Product End -->
                    <!-- Single Product Start -->
                    <div class="single-product">
                        <!-- Product Image Start -->
                        <div class="pro-img">
                            <a href="product.html">
                                <img class="primary-img" src="{{asset('site')}}/img/products/10.jpg" alt="single-product">
                                <img class="secondary-img" src="{{asset('site')}}/img/products/11.jpg" alt="single-product">
                            </a>
                            <div class="countdown" data-countdown="2020/03/01"></div>
                            <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                        </div>
                        <!-- Product Image End -->
                        <!-- Product Content Start -->
                        <div class="pro-content">
                            <div class="pro-info">
                                <h4><a href="product.html">Poly and Bark Vortex Side</a></h4>
                                <p><span class="price">$84.45</span><del class="prev-price">$105.50</del></p>
                                <div class="label-product l_sale">37<span class="symbol-percent">%</span></div>
                            </div>
                            <div class="pro-actions">
                                <div class="actions-primary">
                                    <a href="cart.html" title="Add to Cart">+ Add To Cart</a>
                                </div>
                                <div class="actions-secondary">
                                    <a href="compare.html" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                    <a href="wishlist.html" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                </div>
                            </div>
                        </div>
                        <!-- Product Content End -->
                        <span class="sticker-new">new</span>
                    </div>
                    <!-- Single Product End -->
                </div>
                <!-- Hot Deal Product Active End -->

            </div>
            <!-- Container End -->
        </div>
        <!-- Hot Deal Products End Here -->
        <!-- Hot Deal Products End Here -->

        <!-- Big Banner Start Here -->
        <div class="big-banner mt-100 pb-85 mt-sm-60 pb-sm-45">
            <div class="container banner-2">
                <div class="banner-box">
                    <div class="col-img">
                        <a href="#"><img src="{{asset('site')}}/img/banner/banner3-1.jpg" alt="banner 3"></a>
                    </div>
                    <div class="col-img">
                        <a href="#"><img src="{{asset('site')}}/img/banner/banner3-2.jpg" alt="banner 3"></a>
                    </div>
                </div>
                <div class="banner-box">
                    <div class="col-img">
                        <a href="#"><img src="{{asset('site')}}/img/banner/banner3-3.jpg" alt="banner 3"></a>
                    </div>
                </div>
                <div class="banner-box">
                    <div class="col-img">
                        <a href="#"><img src="{{asset('site')}}/img/banner/banner3-4.jpg" alt="banner 3"></a>
                    </div>
                    <div class="col-img">
                        <a href="#"><img src="{{asset('site')}}/img/banner/banner3-5.jpg" alt="banner 3"></a>
                    </div>
                </div>
                <div class="banner-box">
                    <div class="col-img">
                        <a href="#"><img src="{{asset('site')}}/img/banner/banner3-6.jpg" alt="banner 3"></a>
                    </div>
                </div>
                <div class="banner-box">
                    <div class="col-img">
                        <a href="#"><img src="{{asset('site')}}/img/banner/banner3-7.jpg" alt="banner 3"></a>
                    </div>
                    <div class="col-img">
                        <a href="#"><img src="{{asset('site')}}/img/banner/banner3-8.jpg" alt="banner 3"></a>
                    </div>
                </div>
            </div>
            <!-- Container End -->
        </div>
        <!-- Big Banner End Here -->
        <!-- Arrivals Products Area Start Here -->
        <div class="arrivals-product pb-85 pb-sm-45">
            <div class="container">
                <div class="main-product-tab-area">
                    <div class="tab-menu mb-25">
                        <div class="section-ttitle">
                            <h2>New Arrivals</h2>
                       </div>
                        <!-- Nav tabs -->
                        <ul class="nav tabs-area" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#fshion">Fashion</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#beauty">Beauty</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#electronics">Sport/Outdoor</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#kids">Living</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#beauty">Food</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#kids">Baby/Kids</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#electronics">Electronics </a>
                            </li>
                        </ul>                       

                    </div> 

                    <!-- Tab Contetn Start -->
                    <div class="tab-content">
                        <div id="fshion" class="tab-pane fade">
                            <!-- Arrivals Product Activation Start Here -->
                            <div class="electronics-pro-active owl-carousel">
                                <!-- Double Product Start -->
                                <div class="double-product">
                                    <!-- Single Product Start -->
                                    <div class="single-product">
                                        <!-- Product Image Start -->
                                        <div class="pro-img">
                                            <a href="product.html">
                                                <img class="primary-img" src="{{asset('site')}}/img/products/1.jpg" alt="single-product">
                                                <img class="secondary-img" src="{{asset('site')}}/img/products/2.jpg" alt="single-product">
                                            </a>
                                            <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                        </div>
                                        <!-- Product Image End -->
                                        <!-- Product Content Start -->
                                        <div class="pro-content">
                                            <div class="pro-info">
                                                <h4><a href="product.html">Work Lamp Silver Proin</a></h4>
                                                <p><span class="price">$320.45</span><del class="prev-price">$400.50</del></p>
                                                <div class="label-product l_sale">30<span class="symbol-percent">%</span></div>
                                            </div>
                                            <div class="pro-actions">
                                                <div class="actions-primary">
                                                    <a href="cart.html" title="Add to Cart"> + Add To Cart</a>
                                                </div>
                                                <div class="actions-secondary">
                                                    <a href="compare.html" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                    <a href="wishlist.html" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Product Content End -->
                                        <span class="sticker-new">new</span>
                                    </div>
                                    <!-- Single Product End -->
                                     <!-- Single Product Start -->
                                    <div class="single-product">
                                        <!-- Product Image Start -->
                                        <div class="pro-img">
                                            <a href="product.html">
                                                <img class="primary-img" src="{{asset('site')}}/img/products/3.jpg" alt="single-product">
                                                <img class="secondary-img" src="{{asset('site')}}/img/products/4.jpg" alt="single-product">
                                            </a>
                                            <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                        </div>
                                        <!-- Product Image End -->
                                        <!-- Product Content Start -->
                                        <div class="pro-content">
                                            <div class="pro-info">
                                                <h4><a href="product.html">Gpoly and Bark Eames Style</a></h4>
                                                <p><span class="price">$150.30</span><del class="prev-price">$175.50</del></p>
                                                <div class="label-product l_sale">10<span class="symbol-percent">%</span></div>
                                            </div>
                                            <div class="pro-actions">
                                                <div class="actions-primary">
                                                    <a href="cart.html" title="Add to Cart"> + Add To Cart</a>
                                                </div>
                                                <div class="actions-secondary">
                                                    <a href="compare.html" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                    <a href="wishlist.html" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Product Content End -->
                                        <span class="sticker-new">new</span>
                                    </div>
                                    <!-- Single Product End -->
                                </div>
                                <!-- Double Product End -->
                                <!-- Double Product Start -->
                                <div class="double-product">
                                    <!-- Single Product Start -->
                                    <div class="single-product">
                                        <!-- Product Image Start -->
                                        <div class="pro-img">
                                            <a href="product.html">
                                                <img class="primary-img" src="{{asset('site')}}/img/products/5.jpg" alt="single-product">
                                                <img class="secondary-img" src="{{asset('site')}}/img/products/6.jpg" alt="single-product">
                                            </a>
                                            <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                        </div>
                                        <!-- Product Image End -->
                                        <!-- Product Content Start -->
                                        <div class="pro-content">
                                            <div class="pro-info">
                                                <h4><a href="product.html">Poly and Bark Vortex Side</a></h4>
                                                <p><span class="price">$84.45</span><del class="prev-price">$105.50</del></p>
                                                <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                            </div>
                                            <div class="pro-actions">
                                                <div class="actions-primary">
                                                    <a href="cart.html" title="Add to Cart"> + Add To Cart</a>
                                                </div>
                                                <div class="actions-secondary">
                                                    <a href="compare.html" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                    <a href="wishlist.html" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Product Content End -->
                                        <span class="sticker-new">new</span>
                                    </div>
                                    <!-- Single Product End -->
                                     <!-- Single Product Start -->
                                    <div class="single-product">
                                        <!-- Product Image Start -->
                                        <div class="pro-img">
                                            <a href="product.html">
                                                <img class="primary-img" src="{{asset('site')}}/img/products/8.jpg" alt="single-product">
                                                <img class="secondary-img" src="{{asset('site')}}/img/products/9.jpg" alt="single-product">
                                            </a>
                                            <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                        </div>
                                        <!-- Product Image End -->
                                        <!-- Product Content Start -->
                                        <div class="pro-content">
                                            <div class="pro-info">
                                                <h4><a href="product.html">Eames and Bark  Style</a></h4>
                                                <p><span class="price">$180.45</span><del class="prev-price">$200.50</del></p>
                                                <div class="label-product l_sale">18<span class="symbol-percent">%</span></div>
                                            </div>
                                            <div class="pro-actions">
                                                <div class="actions-primary">
                                                    <a href="cart.html" title="Add to Cart"> + Add To Cart</a>
                                                </div>
                                                <div class="actions-secondary">
                                                    <a href="compare.html" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                    <a href="wishlist.html" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Product Content End -->
                                        <span class="sticker-new">new</span>
                                    </div>
                                    <!-- Single Product End -->
                                </div>
                                <!-- Double Product End -->
                                <!-- Double Product Start -->
                                <div class="double-product">
                                    <!-- Single Product Start -->
                                    <div class="single-product">
                                        <!-- Product Image Start -->
                                        <div class="pro-img">
                                            <a href="product.html">
                                                <img class="primary-img" src="{{asset('site')}}/img/products/11.jpg" alt="single-product">
                                                <img class="secondary-img" src="{{asset('site')}}/img/products/12.jpg" alt="single-product">
                                            </a>
                                            <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                        </div>
                                        <!-- Product Image End -->
                                        <!-- Product Content Start -->
                                        <div class="pro-content">
                                            <div class="pro-info">
                                                <h4><a href="product.html">Eames and Vortex Side</a></h4>
                                                <p><span class="price">$160.45</span><del class="prev-price">$190.50</del></p>
                                                <div class="label-product l_sale">12<span class="symbol-percent">%</span></div>
                                            </div>
                                            <div class="pro-actions">
                                                <div class="actions-primary">
                                                    <a href="cart.html" title="Add to Cart"> + Add To Cart</a>
                                                </div>
                                                <div class="actions-secondary">
                                                    <a href="compare.html" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                    <a href="wishlist.html" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Product Content End -->
                                        <span class="sticker-new">new</span>
                                    </div>
                                    <!-- Single Product End -->
                                     <!-- Single Product Start -->
                                    <div class="single-product">
                                        <!-- Product Image Start -->
                                        <div class="pro-img">
                                            <a href="product.html">
                                                <img class="primary-img" src="{{asset('site')}}/img/products/15.jpg" alt="single-product">
                                                <img class="secondary-img" src="{{asset('site')}}/img/products/16.jpg" alt="single-product">
                                            </a>
                                            <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                        </div>
                                        <!-- Product Image End -->
                                        <!-- Product Content Start -->
                                        <div class="pro-content">
                                            <div class="pro-info">
                                                <h4><a href="product.html">Bark Vortex Side Eames</a></h4>
                                                <p><span class="price">$84.45</span><del class="prev-price">$105.50</del></p>
                                                <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                            </div>
                                            <div class="pro-actions">
                                                <div class="actions-primary">
                                                    <a href="cart.html" title="Add to Cart"> + Add To Cart</a>
                                                </div>
                                                <div class="actions-secondary">
                                                    <a href="compare.html" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                    <a href="wishlist.html" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Product Content End -->
                                        <span class="sticker-new">new</span>
                                    </div>
                                    <!-- Single Product End -->
                                </div>
                                <!-- Double Product End -->
                                <!-- Double Product Start -->
                                <div class="double-product">
                                    <!-- Single Product Start -->
                                    <div class="single-product">
                                        <!-- Product Image Start -->
                                        <div class="pro-img">
                                            <a href="product.html">
                                                <img class="primary-img" src="{{asset('site')}}/img/products/13.jpg" alt="single-product">
                                                <img class="secondary-img" src="{{asset('site')}}/img/products/14.jpg" alt="single-product">
                                            </a>
                                            <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                        </div>
                                        <!-- Product Image End -->
                                        <!-- Product Content Start -->
                                        <div class="pro-content">
                                            <div class="pro-info">
                                                <h4><a href="product.html">Poly and Bark Vortex Side</a></h4>
                                                <p><span class="price">$84.45</span><del class="prev-price">$105.50</del></p>
                                                <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                            </div>
                                            <div class="pro-actions">
                                                <div class="actions-primary">
                                                    <a href="cart.html" title="Add to Cart"> + Add To Cart</a>
                                                </div>
                                                <div class="actions-secondary">
                                                    <a href="compare.html" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                    <a href="wishlist.html" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Product Content End -->
                                        <span class="sticker-new">new</span>
                                    </div>
                                    <!-- Single Product End -->
                                     <!-- Single Product Start -->
                                    <div class="single-product">
                                        <!-- Product Image Start -->
                                        <div class="pro-img">
                                            <a href="product.html">
                                                <img class="primary-img" src="{{asset('site')}}/img/products/1.jpg" alt="single-product">
                                                <img class="secondary-img" src="{{asset('site')}}/img/products/7.jpg" alt="single-product">
                                            </a>
                                            <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                        </div>
                                        <!-- Product Image End -->
                                        <!-- Product Content Start -->
                                        <div class="pro-content">
                                            <div class="pro-info">
                                                <h4><a href="product.html">Poly and Bark Vortex Side</a></h4>
                                                <p><span class="price">$84.45</span><del class="prev-price">$105.50</del></p>
                                                <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                            </div>
                                            <div class="pro-actions">
                                                <div class="actions-primary">
                                                    <a href="cart.html" title="Add to Cart"> + Add To Cart</a>
                                                </div>
                                                <div class="actions-secondary">
                                                    <a href="compare.html" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                    <a href="wishlist.html" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Product Content End -->
                                        <span class="sticker-new">new</span>
                                    </div>
                                    <!-- Single Product End -->
                                </div>
                                <!-- Double Product End -->
                            </div>
                            <!-- Arrivals Product Activation End Here -->
                        </div>
                        <!-- #fshion End Here -->
                        <div id="kids" class="tab-pane fade show active">
                            <!-- Arrivals Product Activation Start Here -->
                            <div class="electronics-pro-active owl-carousel">
                                <!-- Double Product Start -->
                                <div class="double-product">
                                    <!-- Single Product Start -->
                                    <div class="single-product">
                                        <!-- Product Image Start -->
                                        <div class="pro-img">
                                            <a href="product.html">
                                                <img class="primary-img" src="{{asset('site')}}/img/products/42.jpg" alt="single-product">
                                                <img class="secondary-img" src="{{asset('site')}}/img/products/43.jpg" alt="single-product">
                                            </a>
                                            <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                        </div>
                                        <!-- Product Image End -->
                                        <!-- Product Content Start -->
                                        <div class="pro-content">
                                            <div class="pro-info">
                                                <h4><a href="product.html">Utensils and Knives Block</a></h4>
                                                <p><span class="price">$84.45</span><del class="prev-price">$105.50</del></p>
                                                <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                            </div>
                                            <div class="pro-actions">
                                                <div class="actions-primary">
                                                    <a href="cart.html" title="Add to Cart"> + Add To Cart</a>
                                                </div>
                                                <div class="actions-secondary">
                                                    <a href="compare.html" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                    <a href="wishlist.html" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Product Content End -->
                                        <span class="sticker-new">new</span>
                                    </div>
                                    <!-- Single Product End -->
                                     <!-- Single Product Start -->
                                    <div class="single-product">
                                        <!-- Product Image Start -->
                                        <div class="pro-img">
                                            <a href="product.html">
                                                <img class="primary-img" src="{{asset('site')}}/img/products/40.jpg" alt="single-product">
                                                <img class="secondary-img" src="{{asset('site')}}/img/products/41.jpg" alt="single-product">
                                            </a>
                                            <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                        </div>
                                        <!-- Product Image End -->
                                        <!-- Product Content Start -->
                                        <div class="pro-content">
                                            <div class="pro-info">
                                                <h4><a href="product.html">Terra Xpress HE Cooking </a></h4>
                                                <p><span class="price">$84.45</span><del class="prev-price">$300.50</del></p>
                                                <div class="label-product l_sale">25<span class="symbol-percent">%</span></div>
                                            </div>
                                            <div class="pro-actions">
                                                <div class="actions-primary">
                                                    <a href="cart.html" title="Add to Cart"> + Add To Cart</a>
                                                </div>
                                                <div class="actions-secondary">
                                                    <a href="compare.html" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                    <a href="wishlist.html" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Product Content End -->
                                        <span class="sticker-new">new</span>
                                    </div>
                                    <!-- Single Product End -->
                                </div>
                                <!-- Double Product End -->
                                <!-- Double Product Start -->
                                <div class="double-product">
                                    <!-- Single Product Start -->
                                    <div class="single-product">
                                        <!-- Product Image Start -->
                                        <div class="pro-img">
                                            <a href="product.html">
                                                <img class="primary-img" src="{{asset('site')}}/img/products/39.jpg" alt="single-product">
                                                <img class="secondary-img" src="{{asset('site')}}/img/products/38.jpg" alt="single-product">
                                            </a>
                                            <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                        </div>
                                        <!-- Product Image End -->
                                        <!-- Product Content Start -->
                                        <div class="pro-content">
                                            <div class="pro-info">
                                                <h4><a href="product.html">Robert Welch Knife Block</a></h4>
                                                <p><span class="price">$100.45</span><del class="prev-price">$150.50</del></p>
                                                <div class="label-product l_sale">30<span class="symbol-percent">%</span></div>
                                            </div>
                                            <div class="pro-actions">
                                                <div class="actions-primary">
                                                    <a href="cart.html" title="Add to Cart"> + Add To Cart</a>
                                                </div>
                                                <div class="actions-secondary">
                                                    <a href="compare.html" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                    <a href="wishlist.html" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Product Content End -->
                                        <span class="sticker-new">new</span>
                                    </div>
                                    <!-- Single Product End -->
                                     <!-- Single Product Start -->
                                    <div class="single-product">
                                        <!-- Product Image Start -->
                                        <div class="pro-img">
                                            <a href="product.html">
                                                <img class="primary-img" src="{{asset('site')}}/img/products/36.jpg" alt="single-product">
                                                <img class="secondary-img" src="{{asset('site')}}/img/products/37.jpg" alt="single-product">
                                            </a>
                                            <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                        </div>
                                        <!-- Product Image End -->
                                        <!-- Product Content Start -->
                                        <div class="pro-content">
                                            <div class="pro-info">
                                                <h4><a href="product.html">Poly and Bark Vortex Side</a></h4>
                                                <p><span class="price">$90.50</span><del class="prev-price">$120.50</del></p>
                                                <div class="label-product l_sale">15<span class="symbol-percent">%</span></div>
                                            </div>
                                            <div class="pro-actions">
                                                <div class="actions-primary">
                                                    <a href="cart.html" title="Add to Cart"> + Add To Cart</a>
                                                </div>
                                                <div class="actions-secondary">
                                                    <a href="compare.html" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                    <a href="wishlist.html" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Product Content End -->
                                        <span class="sticker-new">new</span>
                                    </div>
                                    <!-- Single Product End -->
                                </div>
                                <!-- Double Product End -->
                                <!-- Double Product Start -->
                                <div class="double-product">
                                    <!-- Single Product Start -->
                                    <div class="single-product">
                                        <!-- Product Image Start -->
                                        <div class="pro-img">
                                            <a href="product.html">
                                                <img class="primary-img" src="{{asset('site')}}/img/products/35.jpg" alt="single-product">
                                                <img class="secondary-img" src="{{asset('site')}}/img/products/36.jpg" alt="single-product">
                                            </a>
                                            <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                        </div>
                                        <!-- Product Image End -->
                                        <!-- Product Content Start -->
                                        <div class="pro-content">
                                            <div class="pro-info">
                                                <h4><a href="product.html">Bark and  Vortex Side</a></h4>
                                                <p><span class="price">$69.20</span><del class="prev-price">$145.50</del></p>
                                                <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                            </div>
                                            <div class="pro-actions">
                                                <div class="actions-primary">
                                                    <a href="cart.html" title="Add to Cart"> + Add To Cart</a>
                                                </div>
                                                <div class="actions-secondary">
                                                    <a href="compare.html" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                    <a href="wishlist.html" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Product Content End -->
                                        <span class="sticker-new">new</span>
                                    </div>
                                    <!-- Single Product End -->
                                     <!-- Single Product Start -->
                                    <div class="single-product">
                                        <!-- Product Image Start -->
                                        <div class="pro-img">
                                            <a href="product.html">
                                                <img class="primary-img" src="{{asset('site')}}/img/products/34.jpg" alt="single-product">
                                                <img class="secondary-img" src="{{asset('site')}}/img/products/35.jpg" alt="single-product">
                                            </a>
                                            <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                        </div>
                                        <!-- Product Image End -->
                                        <!-- Product Content Start -->
                                        <div class="pro-content">
                                            <div class="pro-info">
                                                <h4><a href="product.html">Compary and Bark Vortex Shewe</a></h4>
                                                <p><span class="price">$84.45</span><del class="prev-price">$105.50</del></p>
                                                <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                            </div>
                                            <div class="pro-actions">
                                                <div class="actions-primary">
                                                    <a href="cart.html" title="Add to Cart"> + Add To Cart</a>
                                                </div>
                                                <div class="actions-secondary">
                                                    <a href="compare.html" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                    <a href="wishlist.html" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Product Content End -->
                                        <span class="sticker-new">new</span>
                                    </div>
                                    <!-- Single Product End -->
                                </div>
                                <!-- Double Product End -->
                                <!-- Double Product Start -->
                                <div class="double-product">
                                    <!-- Single Product Start -->
                                    <div class="single-product">
                                        <!-- Product Image Start -->
                                        <div class="pro-img">
                                            <a href="product.html">
                                                <img class="primary-img" src="{{asset('site')}}/img/products/32.jpg" alt="single-product">
                                                <img class="secondary-img" src="{{asset('site')}}/img/products/33.jpg" alt="single-product">
                                            </a>
                                            <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                        </div>
                                        <!-- Product Image End -->
                                        <!-- Product Content Start -->
                                        <div class="pro-content">
                                            <div class="pro-info">
                                                <h4><a href="product.html">kallery kids  weare</a></h4>
                                                <p><span class="price">$84.45</span><del class="prev-price">$105.50</del></p>
                                                <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                            </div>
                                            <div class="pro-actions">
                                                <div class="actions-primary">
                                                    <a href="cart.html" title="Add to Cart"> + Add To Cart</a>
                                                </div>
                                                <div class="actions-secondary">
                                                    <a href="compare.html" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                    <a href="wishlist.html" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Product Content End -->
                                        <span class="sticker-new">new</span>
                                    </div>
                                    <!-- Single Product End -->
                                     <!-- Single Product Start -->
                                    <div class="single-product">
                                        <!-- Product Image Start -->
                                        <div class="pro-img">
                                            <a href="product.html">
                                                <img class="primary-img" src="{{asset('site')}}/img/products/1.jpg" alt="single-product">
                                                <img class="secondary-img" src="{{asset('site')}}/img/products/7.jpg" alt="single-product">
                                            </a>
                                            <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                        </div>
                                        <!-- Product Image End -->
                                        <!-- Product Content Start -->
                                        <div class="pro-content">
                                            <div class="pro-info">
                                                <h4><a href="product.html">Poly and Bark Vortex Side</a></h4>
                                                <p><span class="price">$84.45</span><del class="prev-price">$105.50</del></p>
                                                <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                            </div>
                                            <div class="pro-actions">
                                                <div class="actions-primary">
                                                    <a href="cart.html" title="Add to Cart"> + Add To Cart</a>
                                                </div>
                                                <div class="actions-secondary">
                                                    <a href="compare.html" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                    <a href="wishlist.html" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Product Content End -->
                                        <span class="sticker-new">new</span>
                                    </div>
                                    <!-- Single Product End -->
                                </div>
                                <!-- Double Product End -->
                            </div>
                            <!-- Arrivals Product Activation End Here -->
                        </div>
                        <!-- #fshion End Here -->
                        <div id="beauty" class="tab-pane fade">
                            <!-- Arrivals Product Activation Start Here -->
                            <div class="electronics-pro-active owl-carousel">
                                <!-- Double Product Start -->
                                <div class="double-product">
                                    <!-- Single Product Start -->
                                    <div class="single-product">
                                        <!-- Product Image Start -->
                                        <div class="pro-img">
                                            <a href="product.html">
                                                <img class="primary-img" src="{{asset('site')}}/img/products/43.jpg" alt="single-product">
                                                <img class="secondary-img" src="{{asset('site')}}/img/products/42.jpg" alt="single-product">
                                            </a>
                                            <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                        </div>
                                        <!-- Product Image End -->
                                        <!-- Product Content Start -->
                                        <div class="pro-content">
                                            <div class="pro-info">
                                                <h4><a href="product.html">Poly and Bark Vortex Side</a></h4>
                                                <p><span class="price">$84.45</span><del class="prev-price">$105.50</del></p>
                                                <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                            </div>
                                            <div class="pro-actions">
                                                <div class="actions-primary">
                                                    <a href="cart.html" title="Add to Cart"> + Add To Cart</a>
                                                </div>
                                                <div class="actions-secondary">
                                                    <a href="compare.html" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                    <a href="wishlist.html" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Product Content End -->
                                        <span class="sticker-new">new</span>
                                    </div>
                                    <!-- Single Product End -->
                                     <!-- Single Product Start -->
                                    <div class="single-product">
                                        <!-- Product Image Start -->
                                        <div class="pro-img">
                                            <a href="product.html">
                                                <img class="primary-img" src="{{asset('site')}}/img/products/41.jpg" alt="single-product">
                                                <img class="secondary-img" src="{{asset('site')}}/img/products/39.jpg" alt="single-product">
                                            </a>
                                            <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                        </div>
                                        <!-- Product Image End -->
                                        <!-- Product Content Start -->
                                        <div class="pro-content">
                                            <div class="pro-info">
                                                <h4><a href="product.html">Poly and Bark Vortex Side</a></h4>
                                                <p><span class="price">$84.45</span><del class="prev-price">$105.50</del></p>
                                                <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                            </div>
                                            <div class="pro-actions">
                                                <div class="actions-primary">
                                                    <a href="cart.html" title="Add to Cart"> + Add To Cart</a>
                                                </div>
                                                <div class="actions-secondary">
                                                    <a href="compare.html" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                    <a href="wishlist.html" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Product Content End -->
                                        <span class="sticker-new">new</span>
                                    </div>
                                    <!-- Single Product End -->
                                </div>
                                <!-- Double Product End -->
                                <!-- Double Product Start -->
                                <div class="double-product">
                                    <!-- Single Product Start -->
                                    <div class="single-product">
                                        <!-- Product Image Start -->
                                        <div class="pro-img">
                                            <a href="product.html">
                                                <img class="primary-img" src="{{asset('site')}}/img/products/5.jpg" alt="single-product">
                                                <img class="secondary-img" src="{{asset('site')}}/img/products/6.jpg" alt="single-product">
                                            </a>
                                            <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                        </div>
                                        <!-- Product Image End -->
                                        <!-- Product Content Start -->
                                        <div class="pro-content">
                                            <div class="pro-info">
                                                <h4><a href="product.html">Poly and Bark Vortex Side</a></h4>
                                                <p><span class="price">$84.45</span><del class="prev-price">$105.50</del></p>
                                                <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                            </div>
                                            <div class="pro-actions">
                                                <div class="actions-primary">
                                                    <a href="cart.html" title="Add to Cart"> + Add To Cart</a>
                                                </div>
                                                <div class="actions-secondary">
                                                    <a href="compare.html" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                    <a href="wishlist.html" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Product Content End -->
                                        <span class="sticker-new">new</span>
                                    </div>
                                    <!-- Single Product End -->
                                     <!-- Single Product Start -->
                                    <div class="single-product">
                                        <!-- Product Image Start -->
                                        <div class="pro-img">
                                            <a href="product.html">
                                                <img class="primary-img" src="{{asset('site')}}/img/products/9.jpg" alt="single-product">
                                                <img class="secondary-img" src="{{asset('site')}}/img/products/10.jpg" alt="single-product">
                                            </a>
                                            <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                        </div>
                                        <!-- Product Image End -->
                                        <!-- Product Content Start -->
                                        <div class="pro-content">
                                            <div class="pro-info">
                                                <h4><a href="product.html">Poly and Bark Vortex Side</a></h4>
                                                <p><span class="price">$84.45</span><del class="prev-price">$105.50</del></p>
                                                <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                            </div>
                                            <div class="pro-actions">
                                                <div class="actions-primary">
                                                    <a href="cart.html" title="Add to Cart"> + Add To Cart</a>
                                                </div>
                                                <div class="actions-secondary">
                                                    <a href="compare.html" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                    <a href="wishlist.html" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Product Content End -->
                                        <span class="sticker-new">new</span>
                                    </div>
                                    <!-- Single Product End -->
                                </div>
                                <!-- Double Product End -->
                                <!-- Double Product Start -->
                                <div class="double-product">
                                    <!-- Single Product Start -->
                                    <div class="single-product">
                                        <!-- Product Image Start -->
                                        <div class="pro-img">
                                            <a href="product.html">
                                                <img class="primary-img" src="{{asset('site')}}/img/products/11.jpg" alt="single-product">
                                                <img class="secondary-img" src="{{asset('site')}}/img/products/12.jpg" alt="single-product">
                                            </a>
                                            <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                        </div>
                                        <!-- Product Image End -->
                                        <!-- Product Content Start -->
                                        <div class="pro-content">
                                            <div class="pro-info">
                                                <h4><a href="product.html">Poly and Bark Vortex Side</a></h4>
                                                <p><span class="price">$84.45</span><del class="prev-price">$105.50</del></p>
                                                <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                            </div>
                                            <div class="pro-actions">
                                                <div class="actions-primary">
                                                    <a href="cart.html" title="Add to Cart"> + Add To Cart</a>
                                                </div>
                                                <div class="actions-secondary">
                                                    <a href="compare.html" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                    <a href="wishlist.html" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Product Content End -->
                                        <span class="sticker-new">new</span>
                                    </div>
                                    <!-- Single Product End -->
                                     <!-- Single Product Start -->
                                    <div class="single-product">
                                        <!-- Product Image Start -->
                                        <div class="pro-img">
                                            <a href="product.html">
                                                <img class="primary-img" src="{{asset('site')}}/img/products/3.jpg" alt="single-product">
                                                <img class="secondary-img" src="{{asset('site')}}/img/products/4.jpg" alt="single-product">
                                            </a>
                                            <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                        </div>
                                        <!-- Product Image End -->
                                        <!-- Product Content Start -->
                                        <div class="pro-content">
                                            <div class="pro-info">
                                                <h4><a href="product.html">Poly and Bark Vortex Side</a></h4>
                                                <p><span class="price">$84.45</span><del class="prev-price">$105.50</del></p>
                                                <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                            </div>
                                            <div class="pro-actions">
                                                <div class="actions-primary">
                                                    <a href="cart.html" title="Add to Cart"> + Add To Cart</a>
                                                </div>
                                                <div class="actions-secondary">
                                                    <a href="compare.html" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                    <a href="wishlist.html" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Product Content End -->
                                        <span class="sticker-new">new</span>
                                    </div>
                                    <!-- Single Product End -->
                                </div>
                                <!-- Double Product End -->
                                <!-- Double Product Start -->
                                <div class="double-product">
                                    <!-- Single Product Start -->
                                    <div class="single-product">
                                        <!-- Product Image Start -->
                                        <div class="pro-img">
                                            <a href="product.html">
                                                <img class="primary-img" src="{{asset('site')}}/img/products/43.jpg" alt="single-product">
                                                <img class="secondary-img" src="{{asset('site')}}/img/products/42.jpg" alt="single-product">
                                            </a>
                                            <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                        </div>
                                        <!-- Product Image End -->
                                        <!-- Product Content Start -->
                                        <div class="pro-content">
                                            <div class="pro-info">
                                                <h4><a href="product.html">Poly and Bark Vortex Side</a></h4>
                                                <p><span class="price">$84.45</span><del class="prev-price">$105.50</del></p>
                                                <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                            </div>
                                            <div class="pro-actions">
                                                <div class="actions-primary">
                                                    <a href="cart.html" title="Add to Cart"> + Add To Cart</a>
                                                </div>
                                                <div class="actions-secondary">
                                                    <a href="compare.html" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                    <a href="wishlist.html" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Product Content End -->
                                        <span class="sticker-new">new</span>
                                    </div>
                                    <!-- Single Product End -->
                                     <!-- Single Product Start -->
                                    <div class="single-product">
                                        <!-- Product Image Start -->
                                        <div class="pro-img">
                                            <a href="product.html">
                                                <img class="primary-img" src="{{asset('site')}}/img/products/1.jpg" alt="single-product">
                                                <img class="secondary-img" src="{{asset('site')}}/img/products/7.jpg" alt="single-product">
                                            </a>
                                            <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                        </div>
                                        <!-- Product Image End -->
                                        <!-- Product Content Start -->
                                        <div class="pro-content">
                                            <div class="pro-info">
                                                <h4><a href="product.html">Poly and Bark Vortex Side</a></h4>
                                                <p><span class="price">$84.45</span><del class="prev-price">$105.50</del></p>
                                                <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                            </div>
                                            <div class="pro-actions">
                                                <div class="actions-primary">
                                                    <a href="cart.html" title="Add to Cart"> + Add To Cart</a>
                                                </div>
                                                <div class="actions-secondary">
                                                    <a href="compare.html" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                    <a href="wishlist.html" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Product Content End -->
                                        <span class="sticker-new">new</span>
                                    </div>
                                    <!-- Single Product End -->
                                </div>
                                <!-- Double Product End -->
                            </div>
                            <!-- Arrivals Product Activation End Here -->
                        </div>
                        <!-- #beauty End Here -->
                        <div id="electronics" class="tab-pane fade">
                            <!-- Arrivals Product Activation Start Here -->
                            <div class="electronics-pro-active owl-carousel">
                                <!-- Double Product Start -->
                                <div class="double-product">
                                    <!-- Single Product Start -->
                                    <div class="single-product">
                                        <!-- Product Image Start -->
                                        <div class="pro-img">
                                            <a href="product.html">
                                                <img class="primary-img" src="{{asset('site')}}/img/products/17.jpg" alt="single-product">
                                                <img class="secondary-img" src="{{asset('site')}}/img/products/18.jpg" alt="single-product">
                                            </a>
                                            <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                        </div>
                                        <!-- Product Image End -->
                                        <!-- Product Content Start -->
                                        <div class="pro-content">
                                            <div class="pro-info">
                                                <h4><a href="product.html">Flos Chasen S2 Suspension</a></h4>
                                                <p><span class="price">$84.45</span><del class="prev-price">$105.50</del></p>
                                                <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                            </div>
                                            <div class="pro-actions">
                                                <div class="actions-primary">
                                                    <a href="cart.html" title="Add to Cart"> + Add To Cart</a>
                                                </div>
                                                <div class="actions-secondary">
                                                    <a href="compare.html" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                    <a href="wishlist.html" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Product Content End -->
                                        <span class="sticker-new">new</span>
                                    </div>
                                    <!-- Single Product End -->
                                     <!-- Single Product Start -->
                                    <div class="single-product">
                                        <!-- Product Image Start -->
                                        <div class="pro-img">
                                            <a href="product.html">
                                                <img class="primary-img" src="{{asset('site')}}/img/products/19.jpg" alt="single-product">
                                                <img class="secondary-img" src="{{asset('site')}}/img/products/20.jpg" alt="single-product">
                                            </a>
                                            <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                        </div>
                                        <!-- Product Image End -->
                                        <!-- Product Content Start -->
                                        <div class="pro-content">
                                            <div class="pro-info">
                                                <h4><a href="product.html">Country Squire Florist</a></h4>
                                                <p><span class="price">$84.45</span><del class="prev-price">$105.50</del></p>
                                                <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                            </div>
                                            <div class="pro-actions">
                                                <div class="actions-primary">
                                                    <a href="cart.html" title="Add to Cart"> + Add To Cart</a>
                                                </div>
                                                <div class="actions-secondary">
                                                    <a href="compare.html" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                    <a href="wishlist.html" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Product Content End -->
                                        <span class="sticker-new">new</span>
                                    </div>
                                    <!-- Single Product End -->
                                </div>
                                <!-- Double Product End -->
                                <!-- Double Product Start -->
                                <div class="double-product">
                                    <!-- Single Product Start -->
                                    <div class="single-product">
                                        <!-- Product Image Start -->
                                        <div class="pro-img">
                                            <a href="product.html">
                                                <img class="primary-img" src="{{asset('site')}}/img/products/20.jpg" alt="single-product">
                                                <img class="secondary-img" src="{{asset('site')}}/img/products/21.jpg" alt="single-product">
                                            </a>
                                            <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                        </div>
                                        <!-- Product Image End -->
                                        <!-- Product Content Start -->
                                        <div class="pro-content">
                                            <div class="pro-info">
                                                <h4><a href="product.html">Concord Fabric Single</a></h4>
                                                <p><span class="price">$84.45</span><del class="prev-price">$105.50</del></p>
                                                <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                            </div>
                                            <div class="pro-actions">
                                                <div class="actions-primary">
                                                    <a href="cart.html" title="Add to Cart"> + Add To Cart</a>
                                                </div>
                                                <div class="actions-secondary">
                                                    <a href="compare.html" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                    <a href="wishlist.html" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Product Content End -->
                                        <span class="sticker-new">new</span>
                                    </div>
                                    <!-- Single Product End -->
                                     <!-- Single Product Start -->
                                    <div class="single-product">
                                        <!-- Product Image Start -->
                                        <div class="pro-img">
                                            <a href="product.html">
                                                <img class="primary-img" src="{{asset('site')}}/img/products/21.jpg" alt="single-product">
                                                <img class="secondary-img" src="{{asset('site')}}/img/products/22.jpg" alt="single-product">
                                            </a>
                                            <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                        </div>
                                        <!-- Product Image End -->
                                        <!-- Product Content Start -->
                                        <div class="pro-content">
                                            <div class="pro-info">
                                                <h4><a href="product.html">Poly and Bark Vortex Side</a></h4>
                                                <p><span class="price">$84.45</span><del class="prev-price">$105.50</del></p>
                                                <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                            </div>
                                            <div class="pro-actions">
                                                <div class="actions-primary">
                                                    <a href="cart.html" title="Add to Cart"> + Add To Cart</a>
                                                </div>
                                                <div class="actions-secondary">
                                                    <a href="compare.html" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                    <a href="wishlist.html" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Product Content End -->
                                        <span class="sticker-new">new</span>
                                    </div>
                                    <!-- Single Product End -->
                                </div>
                                <!-- Double Product End -->
                                <!-- Double Product Start -->
                                <div class="double-product">
                                    <!-- Single Product Start -->
                                    <div class="single-product">
                                        <!-- Product Image Start -->
                                        <div class="pro-img">
                                            <a href="product.html">
                                                <img class="primary-img" src="{{asset('site')}}/img/products/23.jpg" alt="single-product">
                                                <img class="secondary-img" src="{{asset('site')}}/img/products/24.jpg" alt="single-product">
                                            </a>
                                            <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                        </div>
                                        <!-- Product Image End -->
                                        <!-- Product Content Start -->
                                        <div class="pro-content">
                                            <div class="pro-info">
                                                <h4><a href="product.html">Gpoly and Bark Eames Style</a></h4>
                                                <p><span class="price">$84.45</span><del class="prev-price">$105.50</del></p>
                                                <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                            </div>
                                            <div class="pro-actions">
                                                <div class="actions-primary">
                                                    <a href="cart.html" title="Add to Cart"> + Add To Cart</a>
                                                </div>
                                                <div class="actions-secondary">
                                                    <a href="compare.html" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                    <a href="wishlist.html" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Product Content End -->
                                        <span class="sticker-new">new</span>
                                    </div>
                                    <!-- Single Product End -->
                                     <!-- Single Product Start -->
                                    <div class="single-product">
                                        <!-- Product Image Start -->
                                        <div class="pro-img">
                                            <a href="product.html">
                                                <img class="primary-img" src="{{asset('site')}}/img/products/24.jpg" alt="single-product">
                                                <img class="secondary-img" src="{{asset('site')}}/img/products/25.jpg" alt="single-product">
                                            </a>
                                            <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                        </div>
                                        <!-- Product Image End -->
                                        <!-- Product Content Start -->
                                        <div class="pro-content">
                                            <div class="pro-info">
                                                <h4><a href="product.html">Vortex and Bark Vortex Side</a></h4>
                                                <p><span class="price">$84.45</span><del class="prev-price">$105.50</del></p>
                                                <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                            </div>
                                            <div class="pro-actions">
                                                <div class="actions-primary">
                                                    <a href="cart.html" title="Add to Cart"> + Add To Cart</a>
                                                </div>
                                                <div class="actions-secondary">
                                                    <a href="compare.html" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                    <a href="wishlist.html" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Product Content End -->
                                        <span class="sticker-new">new</span>
                                    </div>
                                    <!-- Single Product End -->
                                </div>
                                <!-- Double Product End -->
                                <!-- Double Product Start -->
                                <div class="double-product">
                                    <!-- Single Product Start -->
                                    <div class="single-product">
                                        <!-- Product Image Start -->
                                        <div class="pro-img">
                                            <a href="product.html">
                                                <img class="primary-img" src="{{asset('site')}}/img/products/26.jpg" alt="single-product">
                                                <img class="secondary-img" src="{{asset('site')}}/img/products/27.jpg" alt="single-product">
                                            </a>
                                            <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                        </div>
                                        <!-- Product Image End -->
                                        <!-- Product Content Start -->
                                        <div class="pro-content">
                                            <div class="pro-info">
                                                <h4><a href="product.html">Bark and Vortex Side</a></h4>
                                                <p><span class="price">$84.45</span><del class="prev-price">$105.50</del></p>
                                                <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                            </div>
                                            <div class="pro-actions">
                                                <div class="actions-primary">
                                                    <a href="cart.html" title="Add to Cart"> + Add To Cart</a>
                                                </div>
                                                <div class="actions-secondary">
                                                    <a href="compare.html" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                    <a href="wishlist.html" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Product Content End -->
                                        <span class="sticker-new">new</span>
                                    </div>
                                    <!-- Single Product End -->
                                     <!-- Single Product Start -->
                                    <div class="single-product">
                                        <!-- Product Image Start -->
                                        <div class="pro-img">
                                            <a href="product.html">
                                                <img class="primary-img" src="{{asset('site')}}/img/products/28.jpg" alt="single-product">
                                                <img class="secondary-img" src="{{asset('site')}}/img/products/29.jpg" alt="single-product">
                                            </a>
                                            <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                        </div>
                                        <!-- Product Image End -->
                                        <!-- Product Content Start -->
                                        <div class="pro-content">
                                            <div class="pro-info">
                                                <h4><a href="product.html">Electronic and Bark Vortex</a></h4>
                                                <p><span class="price">$84.45</span><del class="prev-price">$105.50</del></p>
                                                <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                            </div>
                                            <div class="pro-actions">
                                                <div class="actions-primary">
                                                    <a href="cart.html" title="Add to Cart"> + Add To Cart</a>
                                                </div>
                                                <div class="actions-secondary">
                                                    <a href="compare.html" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                    <a href="wishlist.html" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Product Content End -->
                                        <span class="sticker-new">new</span>
                                    </div>
                                    <!-- Single Product End -->
                                </div>
                                <!-- Double Product End -->
                            </div>
                            <!-- Arrivals Product Activation End Here -->
                        </div>
                        <!-- #electronics End Here -->
                    </div>
                    <!-- Tab Content End -->
                </div>
                <!-- main-product-tab-area-->
            </div>
            <!-- Container End -->
        </div>
        <!-- Arrivals Products Area End Here -->
        <!-- Arrivals Products Area Start Here -->
        <div class="second-arrivals-product pb-45 pb-sm-5">
            <div class="container">
                <div class="main-product-tab-area">
                    <div class="tab-menu mb-25">
                        <div class="section-ttitle">
                            <h2>Best Seller</h2>
                       </div>
                        <!-- Nav tabs -->
                        <ul class="nav tabs-area" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#electronics2">Electronics </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#beauty2">Beauty</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#electronics2">Sport/Outdoor</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#kids2">Living</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#beauty2">Food</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#kids2">Baby/Kids</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#fshion2">Fashion</a>
                            </li>
                        </ul>                       

                    </div> 

                    <!-- Tab Contetn Start -->
                    <div class="tab-content">
                        <div id="fshion2" class="tab-pane fade">
                            <!-- Arrivals Product Activation Start Here -->
                            <div class="best-seller-pro-active owl-carousel">
                                    <!-- Single Product Start -->
                                    <div class="single-product">
                                        <!-- Product Image Start -->
                                        <div class="pro-img">
                                            <a href="product.html">
                                                <img class="primary-img" src="{{asset('site')}}/img/products/1.jpg" alt="single-product">
                                                <img class="secondary-img" src="{{asset('site')}}/img/products/2.jpg" alt="single-product">
                                            </a>
                                            <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                        </div>
                                        <!-- Product Image End -->
                                        <!-- Product Content Start -->
                                        <div class="pro-content">
                                            <div class="pro-info">
                                                <h4><a href="product.html">Work Lamp Silver Proin</a></h4>
                                                <p><span class="price">$320.45</span></p>
                                            </div>
                                            <div class="pro-actions">
                                                <div class="actions-primary">
                                                    <a href="cart.html" title="Add to Cart"> + Add To Cart</a>
                                                </div>
                                                <div class="actions-secondary">
                                                    <a href="compare.html" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                    <a href="wishlist.html" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Product Content End -->
                                    </div>
                                    <!-- Single Product End -->
                                     <!-- Single Product Start -->
                                    <div class="single-product">
                                        <!-- Product Image Start -->
                                        <div class="pro-img">
                                            <a href="product.html">
                                                <img class="primary-img" src="{{asset('site')}}/img/products/3.jpg" alt="single-product">
                                                <img class="secondary-img" src="{{asset('site')}}/img/products/4.jpg" alt="single-product">
                                            </a>
                                            <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                        </div>
                                        <!-- Product Image End -->
                                        <!-- Product Content Start -->
                                        <div class="pro-content">
                                            <div class="pro-info">
                                                <h4><a href="product.html">Gpoly and Bark Eames Style</a></h4>
                                                <p><span class="price">$150.30</span></p>
                                            </div>
                                            <div class="pro-actions">
                                                <div class="actions-primary">
                                                    <a href="cart.html" title="Add to Cart"> + Add To Cart</a>
                                                </div>
                                                <div class="actions-secondary">
                                                    <a href="compare.html" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                    <a href="wishlist.html" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Product Content End -->
                                    </div>
                                    <!-- Single Product End -->
                                    <!-- Single Product Start -->
                                    <div class="single-product">
                                        <!-- Product Image Start -->
                                        <div class="pro-img">
                                            <a href="product.html">
                                                <img class="primary-img" src="{{asset('site')}}/img/products/5.jpg" alt="single-product">
                                                <img class="secondary-img" src="{{asset('site')}}/img/products/6.jpg" alt="single-product">
                                            </a>
                                            <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                        </div>
                                        <!-- Product Image End -->
                                        <!-- Product Content Start -->
                                        <div class="pro-content">
                                            <div class="pro-info">
                                                <h4><a href="product.html">Poly and Bark Vortex Side</a></h4>
                                                <p><span class="price">$150.45</span></p>
                                            </div>
                                            <div class="pro-actions">
                                                <div class="actions-primary">
                                                    <a href="cart.html" title="Add to Cart"> + Add To Cart</a>
                                                </div>
                                                <div class="actions-secondary">
                                                    <a href="compare.html" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                    <a href="wishlist.html" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Product Content End -->
                                    </div>
                                    <!-- Single Product End -->
                                     <!-- Single Product Start -->
                                    <div class="single-product">
                                        <!-- Product Image Start -->
                                        <div class="pro-img">
                                            <a href="product.html">
                                                <img class="primary-img" src="{{asset('site')}}/img/products/8.jpg" alt="single-product">
                                                <img class="secondary-img" src="{{asset('site')}}/img/products/9.jpg" alt="single-product">
                                            </a>
                                            <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                        </div>
                                        <!-- Product Image End -->
                                        <!-- Product Content Start -->
                                        <div class="pro-content">
                                            <div class="pro-info">
                                                <h4><a href="product.html">Eames and Bark  Style</a></h4>
                                                <p><span class="price">$180.45</span></p>
                                            </div>
                                            <div class="pro-actions">
                                                <div class="actions-primary">
                                                    <a href="cart.html" title="Add to Cart"> + Add To Cart</a>
                                                </div>
                                                <div class="actions-secondary">
                                                    <a href="compare.html" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                    <a href="wishlist.html" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Product Content End -->
                                    </div>
                                    <!-- Single Product End -->
                                    <!-- Single Product Start -->
                                    <div class="single-product">
                                        <!-- Product Image Start -->
                                        <div class="pro-img">
                                            <a href="product.html">
                                                <img class="primary-img" src="{{asset('site')}}/img/products/11.jpg" alt="single-product">
                                                <img class="secondary-img" src="{{asset('site')}}/img/products/12.jpg" alt="single-product">
                                            </a>
                                            <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                        </div>
                                        <!-- Product Image End -->
                                        <!-- Product Content Start -->
                                        <div class="pro-content">
                                            <div class="pro-info">
                                                <h4><a href="product.html">Eames and Vortex Side</a></h4>
                                                <p><span class="price">$160.45</span></p>
                                            </div>
                                            <div class="pro-actions">
                                                <div class="actions-primary">
                                                    <a href="cart.html" title="Add to Cart"> + Add To Cart</a>
                                                </div>
                                                <div class="actions-secondary">
                                                    <a href="compare.html" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                    <a href="wishlist.html" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Product Content End -->
                                    </div>
                                    <!-- Single Product End -->
                                     <!-- Single Product Start -->
                                    <div class="single-product">
                                        <!-- Product Image Start -->
                                        <div class="pro-img">
                                            <a href="product.html">
                                                <img class="primary-img" src="{{asset('site')}}/img/products/15.jpg" alt="single-product">
                                                <img class="secondary-img" src="{{asset('site')}}/img/products/16.jpg" alt="single-product">
                                            </a>
                                            <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                        </div>
                                        <!-- Product Image End -->
                                        <!-- Product Content Start -->
                                        <div class="pro-content">
                                            <div class="pro-info">
                                                <h4><a href="product.html">Bark Vortex Side Eames</a></h4>
                                                <p><span class="price">$84.45</span></p>
                                            </div>
                                            <div class="pro-actions">
                                                <div class="actions-primary">
                                                    <a href="cart.html" title="Add to Cart"> + Add To Cart</a>
                                                </div>
                                                <div class="actions-secondary">
                                                    <a href="compare.html" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                    <a href="wishlist.html" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Product Content End -->
                                    </div>
                                    <!-- Single Product End -->
                                    <!-- Single Product Start -->
                                    <div class="single-product">
                                        <!-- Product Image Start -->
                                        <div class="pro-img">
                                            <a href="product.html">
                                                <img class="primary-img" src="{{asset('site')}}/img/products/13.jpg" alt="single-product">
                                                <img class="secondary-img" src="{{asset('site')}}/img/products/14.jpg" alt="single-product">
                                            </a>
                                            <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                        </div>
                                        <!-- Product Image End -->
                                        <!-- Product Content Start -->
                                        <div class="pro-content">
                                            <div class="pro-info">
                                                <h4><a href="product.html">Poly and Bark Vortex Side</a></h4>
                                                <p><span class="price">$95.45</span></p>
                                            </div>
                                            <div class="pro-actions">
                                                <div class="actions-primary">
                                                    <a href="cart.html" title="Add to Cart"> + Add To Cart</a>
                                                </div>
                                                <div class="actions-secondary">
                                                    <a href="compare.html" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                    <a href="wishlist.html" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Product Content End -->
                                    </div>
                                    <!-- Single Product End -->
                                     <!-- Single Product Start -->
                                    <div class="single-product">
                                        <!-- Product Image Start -->
                                        <div class="pro-img">
                                            <a href="product.html">
                                                <img class="primary-img" src="{{asset('site')}}/img/products/1.jpg" alt="single-product">
                                                <img class="secondary-img" src="{{asset('site')}}/img/products/7.jpg" alt="single-product">
                                            </a>
                                            <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                        </div>
                                        <!-- Product Image End -->
                                        <!-- Product Content Start -->
                                        <div class="pro-content">
                                            <div class="pro-info">
                                                <h4><a href="product.html">Poly and Bark Vortex Side</a></h4>
                                                <p><span class="price">$84.45</span></p>
                                            </div>
                                            <div class="pro-actions">
                                                <div class="actions-primary">
                                                    <a href="cart.html" title="Add to Cart"> + Add To Cart</a>
                                                </div>
                                                <div class="actions-secondary">
                                                    <a href="compare.html" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                    <a href="wishlist.html" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Product Content End -->
                                    </div>
                                    <!-- Single Product End -->
                            </div>
                            <!-- Arrivals Product Activation End Here -->
                        </div>
                        <!-- #fshion End Here -->
                        <div id="kids2" class="tab-pane fade">
                            <!-- Arrivals Product Activation Start Here -->
                            <div class="best-seller-pro-active owl-carousel">
                                <!-- Single Product Start -->
                                <div class="single-product">
                                    <!-- Product Image Start -->
                                    <div class="pro-img">
                                        <a href="product.html">
                                            <img class="primary-img" src="{{asset('site')}}/img/products/42.jpg" alt="single-product">
                                            <img class="secondary-img" src="{{asset('site')}}/img/products/43.jpg" alt="single-product">
                                        </a>
                                        <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                    </div>
                                    <!-- Product Image End -->
                                    <!-- Product Content Start -->
                                    <div class="pro-content">
                                        <div class="pro-info">
                                            <h4><a href="product.html">Utensils and Knives Block</a></h4>
                                            <p><span class="price">$84.45</span></p>
                                        </div>
                                        <div class="pro-actions">
                                            <div class="actions-primary">
                                                <a href="cart.html" title="Add to Cart"> + Add To Cart</a>
                                            </div>
                                            <div class="actions-secondary">
                                                <a href="compare.html" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                <a href="wishlist.html" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Product Content End -->
                                </div>
                                <!-- Single Product End -->
                                 <!-- Single Product Start -->
                                <div class="single-product">
                                    <!-- Product Image Start -->
                                    <div class="pro-img">
                                        <a href="product.html">
                                            <img class="primary-img" src="{{asset('site')}}/img/products/40.jpg" alt="single-product">
                                            <img class="secondary-img" src="{{asset('site')}}/img/products/41.jpg" alt="single-product">
                                        </a>
                                        <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                    </div>
                                    <!-- Product Image End -->
                                    <!-- Product Content Start -->
                                    <div class="pro-content">
                                        <div class="pro-info">
                                            <h4><a href="product.html">Terra Xpress HE Cooking </a></h4>
                                            <p><span class="price">$63.45</span></p>
                                        </div>
                                        <div class="pro-actions">
                                            <div class="actions-primary">
                                                <a href="cart.html" title="Add to Cart"> + Add To Cart</a>
                                            </div>
                                            <div class="actions-secondary">
                                                <a href="compare.html" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                <a href="wishlist.html" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Product Content End -->
                                </div>
                                <!-- Single Product End -->
                                <!-- Single Product Start -->
                                <div class="single-product">
                                    <!-- Product Image Start -->
                                    <div class="pro-img">
                                        <a href="product.html">
                                            <img class="primary-img" src="{{asset('site')}}/img/products/39.jpg" alt="single-product">
                                            <img class="secondary-img" src="{{asset('site')}}/img/products/38.jpg" alt="single-product">
                                        </a>
                                        <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                    </div>
                                    <!-- Product Image End -->
                                    <!-- Product Content Start -->
                                    <div class="pro-content">
                                        <div class="pro-info">
                                            <h4><a href="product.html">Robert Welch Knife Block</a></h4>
                                            <p><span class="price">$100.45</span></p>
                                        </div>
                                        <div class="pro-actions">
                                            <div class="actions-primary">
                                                <a href="cart.html" title="Add to Cart"> + Add To Cart</a>
                                            </div>
                                            <div class="actions-secondary">
                                                <a href="compare.html" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                <a href="wishlist.html" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Product Content End -->
                                </div>
                                <!-- Single Product End -->
                                 <!-- Single Product Start -->
                                <div class="single-product">
                                    <!-- Product Image Start -->
                                    <div class="pro-img">
                                        <a href="product.html">
                                            <img class="primary-img" src="{{asset('site')}}/img/products/36.jpg" alt="single-product">
                                            <img class="secondary-img" src="{{asset('site')}}/img/products/37.jpg" alt="single-product">
                                        </a>
                                        <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                    </div>
                                    <!-- Product Image End -->
                                    <!-- Product Content Start -->
                                    <div class="pro-content">
                                        <div class="pro-info">
                                            <h4><a href="product.html">Poly and Bark Vortex Side</a></h4>
                                            <p><span class="price">$90.50</span></p>
                                        </div>
                                        <div class="pro-actions">
                                            <div class="actions-primary">
                                                <a href="cart.html" title="Add to Cart"> + Add To Cart</a>
                                            </div>
                                            <div class="actions-secondary">
                                                <a href="compare.html" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                <a href="wishlist.html" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Product Content End -->
                                </div>
                                <!-- Single Product End -->
                                <!-- Single Product Start -->
                                <div class="single-product">
                                    <!-- Product Image Start -->
                                    <div class="pro-img">
                                        <a href="product.html">
                                            <img class="primary-img" src="{{asset('site')}}/img/products/35.jpg" alt="single-product">
                                            <img class="secondary-img" src="{{asset('site')}}/img/products/36.jpg" alt="single-product">
                                        </a>
                                        <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                    </div>
                                    <!-- Product Image End -->
                                    <!-- Product Content Start -->
                                    <div class="pro-content">
                                        <div class="pro-info">
                                            <h4><a href="product.html">Bark and  Vortex Side</a></h4>
                                            <p><span class="price">$69.20</span></p>
                                        </div>
                                        <div class="pro-actions">
                                            <div class="actions-primary">
                                                <a href="cart.html" title="Add to Cart"> + Add To Cart</a>
                                            </div>
                                            <div class="actions-secondary">
                                                <a href="compare.html" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                <a href="wishlist.html" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Product Content End -->
                                </div>
                                <!-- Single Product End -->
                                 <!-- Single Product Start -->
                                <div class="single-product">
                                    <!-- Product Image Start -->
                                    <div class="pro-img">
                                        <a href="product.html">
                                            <img class="primary-img" src="{{asset('site')}}/img/products/34.jpg" alt="single-product">
                                            <img class="secondary-img" src="{{asset('site')}}/img/products/35.jpg" alt="single-product">
                                        </a>
                                        <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                    </div>
                                    <!-- Product Image End -->
                                    <!-- Product Content Start -->
                                    <div class="pro-content">
                                        <div class="pro-info">
                                            <h4><a href="product.html">Compary and Bark Vortex Shewe</a></h4>
                                            <p><span class="price">$84.45</span></p>
                                        </div>
                                        <div class="pro-actions">
                                            <div class="actions-primary">
                                                <a href="cart.html" title="Add to Cart"> + Add To Cart</a>
                                            </div>
                                            <div class="actions-secondary">
                                                <a href="compare.html" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                <a href="wishlist.html" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Product Content End -->
                                </div>
                                <!-- Single Product End -->
                                <!-- Single Product Start -->
                                <div class="single-product">
                                    <!-- Product Image Start -->
                                    <div class="pro-img">
                                        <a href="product.html">
                                            <img class="primary-img" src="{{asset('site')}}/img/products/32.jpg" alt="single-product">
                                            <img class="secondary-img" src="{{asset('site')}}/img/products/33.jpg" alt="single-product">
                                        </a>
                                        <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                    </div>
                                    <!-- Product Image End -->
                                    <!-- Product Content Start -->
                                    <div class="pro-content">
                                        <div class="pro-info">
                                            <h4><a href="product.html">kallery kids  weare</a></h4>
                                            <p><span class="price">$98.50</span></p>
                                        </div>
                                        <div class="pro-actions">
                                            <div class="actions-primary">
                                                <a href="cart.html" title="Add to Cart"> + Add To Cart</a>
                                            </div>
                                            <div class="actions-secondary">
                                                <a href="compare.html" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                <a href="wishlist.html" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Product Content End -->
                                </div>
                                <!-- Single Product End -->
                                 <!-- Single Product Start -->
                                <div class="single-product">
                                    <!-- Product Image Start -->
                                    <div class="pro-img">
                                        <a href="product.html">
                                            <img class="primary-img" src="{{asset('site')}}/img/products/1.jpg" alt="single-product">
                                            <img class="secondary-img" src="{{asset('site')}}/img/products/7.jpg" alt="single-product">
                                        </a>
                                        <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                    </div>
                                    <!-- Product Image End -->
                                    <!-- Product Content Start -->
                                    <div class="pro-content">
                                        <div class="pro-info">
                                            <h4><a href="product.html">Poly and Bark Vortex Side</a></h4>
                                            <p><span class="price">$84.45</span></p>
                                        </div>
                                        <div class="pro-actions">
                                            <div class="actions-primary">
                                                <a href="cart.html" title="Add to Cart"> + Add To Cart</a>
                                            </div>
                                            <div class="actions-secondary">
                                                <a href="compare.html" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                <a href="wishlist.html" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Product Content End -->
                                </div>
                                <!-- Single Product End -->
                            </div>
                            <!-- Arrivals Product Activation End Here -->
                        </div>
                        <!-- #fshion End Here -->
                        <div id="beauty2" class="tab-pane fade">
                            <!-- Arrivals Product Activation Start Here -->
                            <div class="best-seller-pro-active owl-carousel">
                                <!-- Single Product Start -->
                                <div class="single-product">
                                    <!-- Product Image Start -->
                                    <div class="pro-img">
                                        <a href="product.html">
                                            <img class="primary-img" src="{{asset('site')}}/img/products/43.jpg" alt="single-product">
                                            <img class="secondary-img" src="{{asset('site')}}/img/products/42.jpg" alt="single-product">
                                        </a>
                                        <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                    </div>
                                    <!-- Product Image End -->
                                    <!-- Product Content Start -->
                                    <div class="pro-content">
                                        <div class="pro-info">
                                            <h4><a href="product.html">Poly and Bark Vortex Side</a></h4>
                                            <p><span class="price">$84.45</span></p>
                                        </div>
                                        <div class="pro-actions">
                                            <div class="actions-primary">
                                                <a href="cart.html" title="Add to Cart"> + Add To Cart</a>
                                            </div>
                                            <div class="actions-secondary">
                                                <a href="compare.html" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                <a href="wishlist.html" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Product Content End -->
                                </div>
                                <!-- Single Product End -->
                                 <!-- Single Product Start -->
                                <div class="single-product">
                                    <!-- Product Image Start -->
                                    <div class="pro-img">
                                        <a href="product.html">
                                            <img class="primary-img" src="{{asset('site')}}/img/products/41.jpg" alt="single-product">
                                            <img class="secondary-img" src="{{asset('site')}}/img/products/39.jpg" alt="single-product">
                                        </a>
                                        <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                    </div>
                                    <!-- Product Image End -->
                                    <!-- Product Content Start -->
                                    <div class="pro-content">
                                        <div class="pro-info">
                                            <h4><a href="product.html">Poly and Bark Vortex Side</a></h4>
                                            <p><span class="price">$84.45</span></p>
                                        </div>
                                        <div class="pro-actions">
                                            <div class="actions-primary">
                                                <a href="cart.html" title="Add to Cart"> + Add To Cart</a>
                                            </div>
                                            <div class="actions-secondary">
                                                <a href="compare.html" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                <a href="wishlist.html" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Product Content End -->
                                </div>
                                <!-- Single Product End -->
                                <!-- Single Product Start -->
                                <div class="single-product">
                                    <!-- Product Image Start -->
                                    <div class="pro-img">
                                        <a href="product.html">
                                            <img class="primary-img" src="{{asset('site')}}/img/products/5.jpg" alt="single-product">
                                            <img class="secondary-img" src="{{asset('site')}}/img/products/6.jpg" alt="single-product">
                                        </a>
                                        <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                    </div>
                                    <!-- Product Image End -->
                                    <!-- Product Content Start -->
                                    <div class="pro-content">
                                        <div class="pro-info">
                                            <h4><a href="product.html">Poly and Bark Vortex Side</a></h4>
                                            <p><span class="price">$84.45</span></p>
                                        </div>
                                        <div class="pro-actions">
                                            <div class="actions-primary">
                                                <a href="cart.html" title="Add to Cart"> + Add To Cart</a>
                                            </div>
                                            <div class="actions-secondary">
                                                <a href="compare.html" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                <a href="wishlist.html" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Product Content End -->
                                </div>
                                <!-- Single Product End -->
                                 <!-- Single Product Start -->
                                <div class="single-product">
                                    <!-- Product Image Start -->
                                    <div class="pro-img">
                                        <a href="product.html">
                                            <img class="primary-img" src="{{asset('site')}}/img/products/9.jpg" alt="single-product">
                                            <img class="secondary-img" src="{{asset('site')}}/img/products/10.jpg" alt="single-product">
                                        </a>
                                        <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                    </div>
                                    <!-- Product Image End -->
                                    <!-- Product Content Start -->
                                    <div class="pro-content">
                                        <div class="pro-info">
                                            <h4><a href="product.html">Poly and Bark Vortex Side</a></h4>
                                            <p><span class="price">$84.45</span></p>
                                        </div>
                                        <div class="pro-actions">
                                            <div class="actions-primary">
                                                <a href="cart.html" title="Add to Cart"> + Add To Cart</a>
                                            </div>
                                            <div class="actions-secondary">
                                                <a href="compare.html" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                <a href="wishlist.html" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Product Content End -->
                                </div>
                                <!-- Single Product End -->
                                <!-- Single Product Start -->
                                <div class="single-product">
                                    <!-- Product Image Start -->
                                    <div class="pro-img">
                                        <a href="product.html">
                                            <img class="primary-img" src="{{asset('site')}}/img/products/11.jpg" alt="single-product">
                                            <img class="secondary-img" src="{{asset('site')}}/img/products/12.jpg" alt="single-product">
                                        </a>
                                        <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                    </div>
                                    <!-- Product Image End -->
                                    <!-- Product Content Start -->
                                    <div class="pro-content">
                                        <div class="pro-info">
                                            <h4><a href="product.html">Poly and Bark Vortex Side</a></h4>
                                            <p><span class="price">$84.45</span></p>
                                        </div>
                                        <div class="pro-actions">
                                            <div class="actions-primary">
                                                <a href="cart.html" title="Add to Cart"> + Add To Cart</a>
                                            </div>
                                            <div class="actions-secondary">
                                                <a href="compare.html" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                <a href="wishlist.html" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Product Content End -->
                                </div>
                                <!-- Single Product End -->
                                 <!-- Single Product Start -->
                                <div class="single-product">
                                    <!-- Product Image Start -->
                                    <div class="pro-img">
                                        <a href="product.html">
                                            <img class="primary-img" src="{{asset('site')}}/img/products/3.jpg" alt="single-product">
                                            <img class="secondary-img" src="{{asset('site')}}/img/products/4.jpg" alt="single-product">
                                        </a>
                                        <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                    </div>
                                    <!-- Product Image End -->
                                    <!-- Product Content Start -->
                                    <div class="pro-content">
                                        <div class="pro-info">
                                            <h4><a href="product.html">Poly and Bark Vortex Side</a></h4>
                                            <p><span class="price">$84.45</span></p>
                                        </div>
                                        <div class="pro-actions">
                                            <div class="actions-primary">
                                                <a href="cart.html" title="Add to Cart"> + Add To Cart</a>
                                            </div>
                                            <div class="actions-secondary">
                                                <a href="compare.html" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                <a href="wishlist.html" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Product Content End -->
                                </div>
                                <!-- Single Product End -->
                            </div>
                            <!-- Arrivals Product Activation End Here -->
                        </div>
                        <!-- #beauty End Here -->
                        <div id="electronics2" class="tab-pane fade show active">
                            <!-- Arrivals Product Activation Start Here -->
                            <div class="best-seller-pro-active owl-carousel">
                                <!-- Single Product Start -->
                                <div class="single-product">
                                    <!-- Product Image Start -->
                                    <div class="pro-img">
                                        <a href="product.html">
                                            <img class="primary-img" src="{{asset('site')}}/img/products/17.jpg" alt="single-product">
                                            <img class="secondary-img" src="{{asset('site')}}/img/products/18.jpg" alt="single-product">
                                        </a>
                                        <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                    </div>
                                    <!-- Product Image End -->
                                    <!-- Product Content Start -->
                                    <div class="pro-content">
                                        <div class="pro-info">
                                            <h4><a href="product.html">Flos Chasen S2 Suspension</a></h4>
                                            <p><span class="price">$84.45</span></p>
                                        </div>
                                        <div class="pro-actions">
                                            <div class="actions-primary">
                                                <a href="cart.html" title="Add to Cart"> + Add To Cart</a>
                                            </div>
                                            <div class="actions-secondary">
                                                <a href="compare.html" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                <a href="wishlist.html" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Product Content End -->
                                </div>
                                <!-- Single Product End -->
                                 <!-- Single Product Start -->
                                <div class="single-product">
                                    <!-- Product Image Start -->
                                    <div class="pro-img">
                                        <a href="product.html">
                                            <img class="primary-img" src="{{asset('site')}}/img/products/19.jpg" alt="single-product">
                                            <img class="secondary-img" src="{{asset('site')}}/img/products/20.jpg" alt="single-product">
                                        </a>
                                        <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                    </div>
                                    <!-- Product Image End -->
                                    <!-- Product Content Start -->
                                    <div class="pro-content">
                                        <div class="pro-info">
                                            <h4><a href="product.html">Country Squire Florist</a></h4>
                                            <p><span class="price">$84.45</span></p>
                                        </div>
                                        <div class="pro-actions">
                                            <div class="actions-primary">
                                                <a href="cart.html" title="Add to Cart"> + Add To Cart</a>
                                            </div>
                                            <div class="actions-secondary">
                                                <a href="compare.html" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                <a href="wishlist.html" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Product Content End -->
                                </div>
                                <!-- Single Product End -->
                                <!-- Single Product Start -->
                                <div class="single-product">
                                    <!-- Product Image Start -->
                                    <div class="pro-img">
                                        <a href="product.html">
                                            <img class="primary-img" src="{{asset('site')}}/img/products/20.jpg" alt="single-product">
                                            <img class="secondary-img" src="{{asset('site')}}/img/products/21.jpg" alt="single-product">
                                        </a>
                                        <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                    </div>
                                    <!-- Product Image End -->
                                    <!-- Product Content Start -->
                                    <div class="pro-content">
                                        <div class="pro-info">
                                            <h4><a href="product.html">Concord Fabric Single</a></h4>
                                            <p><span class="price">$84.45</span></p>
                                        </div>
                                        <div class="pro-actions">
                                            <div class="actions-primary">
                                                <a href="cart.html" title="Add to Cart"> + Add To Cart</a>
                                            </div>
                                            <div class="actions-secondary">
                                                <a href="compare.html" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                <a href="wishlist.html" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Product Content End -->
                                </div>
                                <!-- Single Product End -->
                                 <!-- Single Product Start -->
                                <div class="single-product">
                                    <!-- Product Image Start -->
                                    <div class="pro-img">
                                        <a href="product.html">
                                            <img class="primary-img" src="{{asset('site')}}/img/products/21.jpg" alt="single-product">
                                            <img class="secondary-img" src="{{asset('site')}}/img/products/22.jpg" alt="single-product">
                                        </a>
                                        <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                    </div>
                                    <!-- Product Image End -->
                                    <!-- Product Content Start -->
                                    <div class="pro-content">
                                        <div class="pro-info">
                                            <h4><a href="product.html">Poly and Bark Vortex Side</a></h4>
                                            <p><span class="price">$84.45</span></p>
                                        </div>
                                        <div class="pro-actions">
                                            <div class="actions-primary">
                                                <a href="cart.html" title="Add to Cart"> + Add To Cart</a>
                                            </div>
                                            <div class="actions-secondary">
                                                <a href="compare.html" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                <a href="wishlist.html" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Product Content End -->
                                </div>
                                <!-- Single Product End -->
                                <!-- Single Product Start -->
                                <div class="single-product">
                                    <!-- Product Image Start -->
                                    <div class="pro-img">
                                        <a href="product.html">
                                            <img class="primary-img" src="{{asset('site')}}/img/products/23.jpg" alt="single-product">
                                            <img class="secondary-img" src="{{asset('site')}}/img/products/24.jpg" alt="single-product">
                                        </a>
                                        <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                    </div>
                                    <!-- Product Image End -->
                                    <!-- Product Content Start -->
                                    <div class="pro-content">
                                        <div class="pro-info">
                                            <h4><a href="product.html">Gpoly and Bark Eames Style</a></h4>
                                            <p><span class="price">$84.45</span></p>
                                        </div>
                                        <div class="pro-actions">
                                            <div class="actions-primary">
                                                <a href="cart.html" title="Add to Cart"> + Add To Cart</a>
                                            </div>
                                            <div class="actions-secondary">
                                                <a href="compare.html" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                <a href="wishlist.html" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Product Content End -->
                                </div>
                                <!-- Single Product End -->
                                 <!-- Single Product Start -->
                                <div class="single-product">
                                    <!-- Product Image Start -->
                                    <div class="pro-img">
                                        <a href="product.html">
                                            <img class="primary-img" src="{{asset('site')}}/img/products/24.jpg" alt="single-product">
                                            <img class="secondary-img" src="{{asset('site')}}/img/products/25.jpg" alt="single-product">
                                        </a>
                                        <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                    </div>
                                    <!-- Product Image End -->
                                    <!-- Product Content Start -->
                                    <div class="pro-content">
                                        <div class="pro-info">
                                            <h4><a href="product.html">Vortex and Bark Vortex Side</a></h4>
                                            <p><span class="price">$84.45</span></p>
                                        </div>
                                        <div class="pro-actions">
                                            <div class="actions-primary">
                                                <a href="cart.html" title="Add to Cart"> + Add To Cart</a>
                                            </div>
                                            <div class="actions-secondary">
                                                <a href="compare.html" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                <a href="wishlist.html" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Product Content End -->
                                </div>
                                <!-- Single Product End -->
                                <!-- Single Product Start -->
                                <div class="single-product">
                                    <!-- Product Image Start -->
                                    <div class="pro-img">
                                        <a href="product.html">
                                            <img class="primary-img" src="{{asset('site')}}/img/products/26.jpg" alt="single-product">
                                            <img class="secondary-img" src="{{asset('site')}}/img/products/27.jpg" alt="single-product">
                                        </a>
                                        <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                    </div>
                                    <!-- Product Image End -->
                                    <!-- Product Content Start -->
                                    <div class="pro-content">
                                        <div class="pro-info">
                                            <h4><a href="product.html">Bark and Vortex Side</a></h4>
                                            <p><span class="price">$84.45</span></p>
                                        </div>
                                        <div class="pro-actions">
                                            <div class="actions-primary">
                                                <a href="cart.html" title="Add to Cart"> + Add To Cart</a>
                                            </div>
                                            <div class="actions-secondary">
                                                <a href="compare.html" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                <a href="wishlist.html" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Product Content End -->
                                </div>
                                <!-- Single Product End -->
                                 <!-- Single Product Start -->
                                <div class="single-product">
                                    <!-- Product Image Start -->
                                    <div class="pro-img">
                                        <a href="product.html">
                                            <img class="primary-img" src="{{asset('site')}}/img/products/28.jpg" alt="single-product">
                                            <img class="secondary-img" src="{{asset('site')}}/img/products/29.jpg" alt="single-product">
                                        </a>
                                        <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                    </div>
                                    <!-- Product Image End -->
                                    <!-- Product Content Start -->
                                    <div class="pro-content">
                                        <div class="pro-info">
                                            <h4><a href="product.html">Electronic and Bark Vortex</a></h4>
                                            <p><span class="price">$84.45</span></p>
                                        </div>
                                        <div class="pro-actions">
                                            <div class="actions-primary">
                                                <a href="cart.html" title="Add to Cart"> + Add To Cart</a>
                                            </div>
                                            <div class="actions-secondary">
                                                <a href="compare.html" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                <a href="wishlist.html" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Product Content End -->
                                </div>
                                <!-- Single Product End -->
                            </div>
                            <!-- Arrivals Product Activation End Here -->
                        </div>
                        <!-- #electronics End Here -->
                    </div>
                    <!-- Tab Content End -->
                </div>
                <!-- main-product-tab-area-->
            </div>
            <!-- Container End -->
        </div>
        <!-- Arrivals Products Area End Here -->
        <!-- Like Products Area Start Here -->
        <div class="like-product ptb-95 off-white-bg pt-sm-50 pb-sm-55 ">
            <div class="container">
                <div class="like-product-area"> 
                    <h2 class="section-ttitle2 mb-30">You May Like </h2>
                    <!-- Arrivals Product Activation Start Here -->
                    <div class="like-pro-active owl-carousel">
                        <!-- Double Product Start -->
                        <div class="double-product">
                            <!-- Single Product Start -->
                            <div class="single-product">
                                <!-- Product Image Start -->
                                <div class="pro-img">
                                    <a href="product.html">
                                        <img class="primary-img" src="{{asset('site')}}/img/products/17.jpg" alt="single-product">
                                        <img class="secondary-img" src="{{asset('site')}}/img/products/18.jpg" alt="single-product">
                                    </a>
                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                </div>
                                <!-- Product Image End -->
                                <!-- Product Content Start -->
                                <div class="pro-content">
                                    <div class="pro-info">
                                        <h4><a href="product.html">Flos Chasen S2 Suspension</a></h4>
                                        <p><span class="price">$84.45</span><del class="prev-price">$105.50</del></p>
                                        <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                    </div>
                                    <div class="pro-actions">
                                        <div class="actions-primary">
                                            <a href="cart.html" title="Add to Cart"> + Add To Cart</a>
                                        </div>
                                        <div class="actions-secondary">
                                            <a href="compare.html" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                            <a href="wishlist.html" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Product Content End -->
                            </div>
                            <!-- Single Product End -->
                             <!-- Single Product Start -->
                            <div class="single-product">
                                <!-- Product Image Start -->
                                <div class="pro-img">
                                    <a href="product.html">
                                        <img class="primary-img" src="{{asset('site')}}/img/products/19.jpg" alt="single-product">
                                        <img class="secondary-img" src="{{asset('site')}}/img/products/20.jpg" alt="single-product">
                                    </a>
                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                </div>
                                <!-- Product Image End -->
                                <!-- Product Content Start -->
                                <div class="pro-content">
                                    <div class="pro-info">
                                        <h4><a href="product.html">Country Squire Florist</a></h4>
                                        <p><span class="price">$84.45</span><del class="prev-price">$105.50</del></p>
                                        <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                    </div>
                                    <div class="pro-actions">
                                        <div class="actions-primary">
                                            <a href="cart.html" title="Add to Cart"> + Add To Cart</a>
                                        </div>
                                        <div class="actions-secondary">
                                            <a href="compare.html" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                            <a href="wishlist.html" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Product Content End -->
                            </div>
                            <!-- Single Product End -->
                        </div>
                        <!-- Double Product End -->
                        <!-- Double Product Start -->
                        <div class="double-product">
                            <!-- Single Product Start -->
                            <div class="single-product">
                                <!-- Product Image Start -->
                                <div class="pro-img">
                                    <a href="product.html">
                                        <img class="primary-img" src="{{asset('site')}}/img/products/39.jpg" alt="single-product">
                                        <img class="secondary-img" src="{{asset('site')}}/img/products/38.jpg" alt="single-product">
                                    </a>
                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                </div>
                                <!-- Product Image End -->
                                <!-- Product Content Start -->
                                <div class="pro-content">
                                    <div class="pro-info">
                                        <h4><a href="product.html">Robert Welch Knife Block</a></h4>
                                        <p><span class="price">$100.45</span><del class="prev-price">$150.50</del></p>
                                        <div class="label-product l_sale">30<span class="symbol-percent">%</span></div>
                                    </div>
                                    <div class="pro-actions">
                                        <div class="actions-primary">
                                            <a href="cart.html" title="Add to Cart"> + Add To Cart</a>
                                        </div>
                                        <div class="actions-secondary">
                                            <a href="compare.html" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                            <a href="wishlist.html" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Product Content End -->
                            </div>
                            <!-- Single Product End -->
                             <!-- Single Product Start -->
                            <div class="single-product">
                                <!-- Product Image Start -->
                                <div class="pro-img">
                                    <a href="product.html">
                                        <img class="primary-img" src="{{asset('site')}}/img/products/36.jpg" alt="single-product">
                                        <img class="secondary-img" src="{{asset('site')}}/img/products/37.jpg" alt="single-product">
                                    </a>
                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                </div>
                                <!-- Product Image End -->
                                <!-- Product Content Start -->
                                <div class="pro-content">
                                    <div class="pro-info">
                                        <h4><a href="product.html">Poly and Bark Vortex Side</a></h4>
                                        <p><span class="price">$90.50</span><del class="prev-price">$120.50</del></p>
                                        <div class="label-product l_sale">15<span class="symbol-percent">%</span></div>
                                    </div>
                                    <div class="pro-actions">
                                        <div class="actions-primary">
                                            <a href="cart.html" title="Add to Cart"> + Add To Cart</a>
                                        </div>
                                        <div class="actions-secondary">
                                            <a href="compare.html" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                            <a href="wishlist.html" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Product Content End -->
                            </div>
                            <!-- Single Product End -->
                        </div>
                        <!-- Double Product End -->                        
                        <!-- Double Product Start -->
                        <div class="double-product">
                            <!-- Single Product Start -->
                            <div class="single-product">
                                <!-- Product Image Start -->
                                <div class="pro-img">
                                    <a href="product.html">
                                        <img class="primary-img" src="{{asset('site')}}/img/products/20.jpg" alt="single-product">
                                        <img class="secondary-img" src="{{asset('site')}}/img/products/21.jpg" alt="single-product">
                                    </a>
                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                </div>
                                <!-- Product Image End -->
                                <!-- Product Content Start -->
                                <div class="pro-content">
                                    <div class="pro-info">
                                        <h4><a href="product.html">Concord Fabric Single</a></h4>
                                        <p><span class="price">$84.45</span><del class="prev-price">$105.50</del></p>
                                        <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                    </div>
                                    <div class="pro-actions">
                                        <div class="actions-primary">
                                            <a href="cart.html" title="Add to Cart"> + Add To Cart</a>
                                        </div>
                                        <div class="actions-secondary">
                                            <a href="compare.html" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                            <a href="wishlist.html" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Product Content End -->
                            </div>
                            <!-- Single Product End -->
                             <!-- Single Product Start -->
                            <div class="single-product">
                                <!-- Product Image Start -->
                                <div class="pro-img">
                                    <a href="product.html">
                                        <img class="primary-img" src="{{asset('site')}}/img/products/21.jpg" alt="single-product">
                                        <img class="secondary-img" src="{{asset('site')}}/img/products/22.jpg" alt="single-product">
                                    </a>
                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                </div>
                                <!-- Product Image End -->
                                <!-- Product Content Start -->
                                <div class="pro-content">
                                    <div class="pro-info">
                                        <h4><a href="product.html">Poly and Bark Vortex Side</a></h4>
                                        <p><span class="price">$84.45</span><del class="prev-price">$105.50</del></p>
                                        <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                    </div>
                                    <div class="pro-actions">
                                        <div class="actions-primary">
                                            <a href="cart.html" title="Add to Cart"> + Add To Cart</a>
                                        </div>
                                        <div class="actions-secondary">
                                            <a href="compare.html" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                            <a href="wishlist.html" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Product Content End -->
                            </div>
                            <!-- Single Product End -->
                        </div>
                        <!-- Double Product End -->
                        <!-- Double Product Start -->
                        <div class="double-product">
                            <!-- Single Product Start -->
                            <div class="single-product">
                                <!-- Product Image Start -->
                                <div class="pro-img">
                                    <a href="product.html">
                                        <img class="primary-img" src="{{asset('site')}}/img/products/23.jpg" alt="single-product">
                                        <img class="secondary-img" src="{{asset('site')}}/img/products/24.jpg" alt="single-product">
                                    </a>
                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                </div>
                                <!-- Product Image End -->
                                <!-- Product Content Start -->
                                <div class="pro-content">
                                    <div class="pro-info">
                                        <h4><a href="product.html">Gpoly and Bark Eames Style</a></h4>
                                        <p><span class="price">$84.45</span><del class="prev-price">$105.50</del></p>
                                        <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                    </div>
                                    <div class="pro-actions">
                                        <div class="actions-primary">
                                            <a href="cart.html" title="Add to Cart"> + Add To Cart</a>
                                        </div>
                                        <div class="actions-secondary">
                                            <a href="compare.html" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                            <a href="wishlist.html" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Product Content End -->
                            </div>
                            <!-- Single Product End -->
                             <!-- Single Product Start -->
                            <div class="single-product">
                                <!-- Product Image Start -->
                                <div class="pro-img">
                                    <a href="product.html">
                                        <img class="primary-img" src="{{asset('site')}}/img/products/24.jpg" alt="single-product">
                                        <img class="secondary-img" src="{{asset('site')}}/img/products/25.jpg" alt="single-product">
                                    </a>
                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                </div>
                                <!-- Product Image End -->
                                <!-- Product Content Start -->
                                <div class="pro-content">
                                    <div class="pro-info">
                                        <h4><a href="product.html">Vortex and Bark Vortex Side</a></h4>
                                        <p><span class="price">$84.45</span><del class="prev-price">$105.50</del></p>
                                        <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                    </div>
                                    <div class="pro-actions">
                                        <div class="actions-primary">
                                            <a href="cart.html" title="Add to Cart"> + Add To Cart</a>
                                        </div>
                                        <div class="actions-secondary">
                                            <a href="compare.html" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                            <a href="wishlist.html" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Product Content End -->
                            </div>
                            <!-- Single Product End -->
                        </div>
                        <!-- Double Product End -->
                        <!-- Double Product Start -->
                        <div class="double-product">
                            <!-- Single Product Start -->
                            <div class="single-product">
                                <!-- Product Image Start -->
                                <div class="pro-img">
                                    <a href="product.html">
                                        <img class="primary-img" src="{{asset('site')}}/img/products/26.jpg" alt="single-product">
                                        <img class="secondary-img" src="{{asset('site')}}/img/products/27.jpg" alt="single-product">
                                    </a>
                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                </div>
                                <!-- Product Image End -->
                                <!-- Product Content Start -->
                                <div class="pro-content">
                                    <div class="pro-info">
                                        <h4><a href="product.html">Bark and Vortex Side</a></h4>
                                        <p><span class="price">$84.45</span><del class="prev-price">$105.50</del></p>
                                        <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                    </div>
                                    <div class="pro-actions">
                                        <div class="actions-primary">
                                            <a href="cart.html" title="Add to Cart"> + Add To Cart</a>
                                        </div>
                                        <div class="actions-secondary">
                                            <a href="compare.html" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                            <a href="wishlist.html" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Product Content End -->
                            </div>
                            <!-- Single Product End -->
                             <!-- Single Product Start -->
                            <div class="single-product">
                                <!-- Product Image Start -->
                                <div class="pro-img">
                                    <a href="product.html">
                                        <img class="primary-img" src="{{asset('site')}}/img/products/28.jpg" alt="single-product">
                                        <img class="secondary-img" src="{{asset('site')}}/img/products/29.jpg" alt="single-product">
                                    </a>
                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                </div>
                                <!-- Product Image End -->
                                <!-- Product Content Start -->
                                <div class="pro-content">
                                    <div class="pro-info">
                                        <h4><a href="product.html">Electronic and Bark Vortex</a></h4>
                                        <p><span class="price">$84.45</span><del class="prev-price">$105.50</del></p>
                                        <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                    </div>
                                    <div class="pro-actions">
                                        <div class="actions-primary">
                                            <a href="cart.html" title="Add to Cart"> + Add To Cart</a>
                                        </div>
                                        <div class="actions-secondary">
                                            <a href="compare.html" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                            <a href="wishlist.html" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Product Content End -->
                            </div>
                            <!-- Single Product End -->
                        </div>
                        <!-- Double Product End -->
                        <!-- Double Product Start -->
                        <div class="double-product">
                            <!-- Single Product Start -->
                            <div class="single-product">
                                <!-- Product Image Start -->
                                <div class="pro-img">
                                    <a href="product.html">
                                        <img class="primary-img" src="{{asset('site')}}/img/products/42.jpg" alt="single-product">
                                        <img class="secondary-img" src="{{asset('site')}}/img/products/43.jpg" alt="single-product">
                                    </a>
                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                </div>
                                <!-- Product Image End -->
                                <!-- Product Content Start -->
                                <div class="pro-content">
                                    <div class="pro-info">
                                        <h4><a href="product.html">Utensils and Knives Block</a></h4>
                                        <p><span class="price">$84.45</span><del class="prev-price">$105.50</del></p>
                                        <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                    </div>
                                    <div class="pro-actions">
                                        <div class="actions-primary">
                                            <a href="cart.html" title="Add to Cart"> + Add To Cart</a>
                                        </div>
                                        <div class="actions-secondary">
                                            <a href="compare.html" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                            <a href="wishlist.html" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Product Content End -->
                            </div>
                            <!-- Single Product End -->
                             <!-- Single Product Start -->
                            <div class="single-product">
                                <!-- Product Image Start -->
                                <div class="pro-img">
                                    <a href="product.html">
                                        <img class="primary-img" src="{{asset('site')}}/img/products/40.jpg" alt="single-product">
                                        <img class="secondary-img" src="{{asset('site')}}/img/products/41.jpg" alt="single-product">
                                    </a>
                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                </div>
                                <!-- Product Image End -->
                                <!-- Product Content Start -->
                                <div class="pro-content">
                                    <div class="pro-info">
                                        <h4><a href="product.html">Terra Xpress HE Cooking </a></h4>
                                        <p><span class="price">$84.45</span><del class="prev-price">$300.50</del></p>
                                        <div class="label-product l_sale">25<span class="symbol-percent">%</span></div>
                                    </div>
                                    <div class="pro-actions">
                                        <div class="actions-primary">
                                            <a href="cart.html" title="Add to Cart"> + Add To Cart</a>
                                        </div>
                                        <div class="actions-secondary">
                                            <a href="compare.html" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                            <a href="wishlist.html" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Product Content End -->
                            </div>
                            <!-- Single Product End -->
                        </div>
                        <!-- Double Product End -->
                        <!-- Double Product Start -->
                        <div class="double-product">
                            <!-- Single Product Start -->
                            <div class="single-product">
                                <!-- Product Image Start -->
                                <div class="pro-img">
                                    <a href="product.html">
                                        <img class="primary-img" src="{{asset('site')}}/img/products/35.jpg" alt="single-product">
                                        <img class="secondary-img" src="{{asset('site')}}/img/products/36.jpg" alt="single-product">
                                    </a>
                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                </div>
                                <!-- Product Image End -->
                                <!-- Product Content Start -->
                                <div class="pro-content">
                                    <div class="pro-info">
                                        <h4><a href="product.html">Bark and  Vortex Side</a></h4>
                                        <p><span class="price">$69.20</span><del class="prev-price">$145.50</del></p>
                                        <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                    </div>
                                    <div class="pro-actions">
                                        <div class="actions-primary">
                                            <a href="cart.html" title="Add to Cart"> + Add To Cart</a>
                                        </div>
                                        <div class="actions-secondary">
                                            <a href="compare.html" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                            <a href="wishlist.html" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Product Content End -->
                            </div>
                            <!-- Single Product End -->
                             <!-- Single Product Start -->
                            <div class="single-product">
                                <!-- Product Image Start -->
                                <div class="pro-img">
                                    <a href="product.html">
                                        <img class="primary-img" src="{{asset('site')}}/img/products/34.jpg" alt="single-product">
                                        <img class="secondary-img" src="{{asset('site')}}/img/products/35.jpg" alt="single-product">
                                    </a>
                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                </div>
                                <!-- Product Image End -->
                                <!-- Product Content Start -->
                                <div class="pro-content">
                                    <div class="pro-info">
                                        <h4><a href="product.html">Compary and Bark Vortex Shewe</a></h4>
                                        <p><span class="price">$84.45</span><del class="prev-price">$105.50</del></p>
                                        <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                    </div>
                                    <div class="pro-actions">
                                        <div class="actions-primary">
                                            <a href="cart.html" title="Add to Cart"> + Add To Cart</a>
                                        </div>
                                        <div class="actions-secondary">
                                            <a href="compare.html" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                            <a href="wishlist.html" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Product Content End -->
                            </div>
                            <!-- Single Product End -->
                        </div>
                        <!-- Double Product End -->
                        <!-- Double Product Start -->
                        <div class="double-product">
                            <!-- Single Product Start -->
                            <div class="single-product">
                                <!-- Product Image Start -->
                                <div class="pro-img">
                                    <a href="product.html">
                                        <img class="primary-img" src="{{asset('site')}}/img/products/32.jpg" alt="single-product">
                                        <img class="secondary-img" src="{{asset('site')}}/img/products/33.jpg" alt="single-product">
                                    </a>
                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                </div>
                                <!-- Product Image End -->
                                <!-- Product Content Start -->
                                <div class="pro-content">
                                    <div class="pro-info">
                                        <h4><a href="product.html">kallery kids  weare</a></h4>
                                        <p><span class="price">$84.45</span><del class="prev-price">$105.50</del></p>
                                        <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                    </div>
                                    <div class="pro-actions">
                                        <div class="actions-primary">
                                            <a href="cart.html" title="Add to Cart"> + Add To Cart</a>
                                        </div>
                                        <div class="actions-secondary">
                                            <a href="compare.html" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                            <a href="wishlist.html" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Product Content End -->
                            </div>
                            <!-- Single Product End -->
                             <!-- Single Product Start -->
                            <div class="single-product">
                                <!-- Product Image Start -->
                                <div class="pro-img">
                                    <a href="product.html">
                                        <img class="primary-img" src="{{asset('site')}}/img/products/1.jpg" alt="single-product">
                                        <img class="secondary-img" src="{{asset('site')}}/img/products/7.jpg" alt="single-product">
                                    </a>
                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                </div>
                                <!-- Product Image End -->
                                <!-- Product Content Start -->
                                <div class="pro-content">
                                    <div class="pro-info">
                                        <h4><a href="product.html">Poly and Bark Vortex Side</a></h4>
                                        <p><span class="price">$84.45</span><del class="prev-price">$105.50</del></p>
                                        <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                    </div>
                                    <div class="pro-actions">
                                        <div class="actions-primary">
                                            <a href="cart.html" title="Add to Cart"> + Add To Cart</a>
                                        </div>
                                        <div class="actions-secondary">
                                            <a href="compare.html" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                            <a href="wishlist.html" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Product Content End -->
                                <span class="sticker-new">new</span>
                            </div>
                            <!-- Single Product End -->
                        </div>
                        <!-- Double Product End -->                        
                    </div>
                    <!-- Arrivals Product Activation End Here -->
                </div>
                <!-- main-product-tab-area-->
            </div>
            <!-- Container End -->
        </div>
        <!-- Lile Products Area End Here -->
        <!-- Brand Banner Area Start Here -->
        <div class="main-brand-banner pt-95 pb-100 pt-sm-55 pb-sm-60">
            <div class="container">
                <div class="section-ttitle mb-20">
                    <h2>Best Seller</h2>
               </div>
                <div class="row no-gutters">
                    <div class="col-lg-3">
                        <div class="col-img">
                            <img src="{{asset('site')}}/img/banner/h1-band1.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <!-- Brand Banner Start -->
                        <div class="brand-banner owl-carousel">
                            <div class="single-brand">
                                <a href="#"><img class="img" src="{{asset('site')}}/img/brand/1.jpg" alt="brand-image"></a>
                                <a href="#"><img src="{{asset('site')}}/img/brand/2.jpg" alt="brand-image"></a>
                                <a href="#"><img src="{{asset('site')}}/img/brand/3.jpg" alt="brand-image"></a>
                            </div>
                            <div class="single-brand">
                                <a href="#"><img class="img" src="{{asset('site')}}/img/brand/1.jpg" alt="brand-image"></a>
                                <a href="#"><img src="{{asset('site')}}/img/brand/2.jpg" alt="brand-image"></a>
                                <a href="#"><img src="{{asset('site')}}/img/brand/3.jpg" alt="brand-image"></a>
                            </div>
                            <div class="single-brand">
                                <a href="#"><img src="{{asset('site')}}/img/brand/1.jpg" alt="brand-image"></a>
                                <a href="#"><img src="{{asset('site')}}/img/brand/2.jpg" alt="brand-image"></a>
                                <a href="#"><img src="{{asset('site')}}/img/brand/3.jpg" alt="brand-image"></a>

                            </div>
                            <div class="single-brand">
                                <a href="#"><img src="{{asset('site')}}/img/brand/2.jpg" alt="brand-image"></a>
                                <a href="#"><img src="{{asset('site')}}/img/brand/3.jpg" alt="brand-image"></a>
                                <a href="#"><img src="{{asset('site')}}/img/brand/4.jpg" alt="brand-image"></a>
                            </div>
                            <div class="single-brand">
                                <a href="#"><img src="{{asset('site')}}/img/brand/2.jpg" alt="brand-image"></a>
                                <a href="#"><img src="{{asset('site')}}/img/brand/3.jpg" alt="brand-image"></a>
                                <a href="#"><img src="{{asset('site')}}/img/brand/4.jpg" alt="brand-image"></a>
                            </div>
                            <div class="single-brand">
                                <a href="#"><img src="{{asset('site')}}/img/brand/2.jpg" alt="brand-image"></a>
                                <a href="#"><img src="{{asset('site')}}/img/brand/3.jpg" alt="brand-image"></a>
                                <a href="#"><img src="{{asset('site')}}/img/brand/4.jpg" alt="brand-image"></a>
                            </div>
                            <div class="single-brand">
                                <a href="#"><img src="{{asset('site')}}/img/brand/2.jpg" alt="brand-image"></a>
                                <a href="#"><img src="{{asset('site')}}/img/brand/3.jpg" alt="brand-image"></a>
                                <a href="#"><img src="{{asset('site')}}/img/brand/4.jpg" alt="brand-image"></a>
                            </div>
                        </div>
                        <!-- Brand Banner End -->                        

                    </div>
                    <div class="col-lg-3">
                        <div class="col-img">
                            <img src="{{asset('site')}}/img/banner/h1-band2.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <!-- Container End -->
        </div>
        <!-- Brand Banner Area End Here -->
        <div class="big-banner pb-100 pb-sm-60">
            <div class="container big-banner-box">
                <div class="col-img">
                    <a href="#">
                    <img src="{{asset('site')}}/img/banner/5.jpg" alt="">
                    </a>
                </div>
                <div class="col-img">
                    <a href="#">
                    <img src="{{asset('site')}}/img/banner/h1-banner3.jpg" alt="">
                    </a>
                </div>
            </div>
            <!-- Container End -->
        </div>
        <!-- Support Area Start Here -->
        <div class="support-area bdr-top">
            <div class="container">
                <div class="d-flex flex-wrap text-center">
                    <div class="single-support">
                        <div class="support-icon">
                            <i class="lnr lnr-gift"></i>
                        </div>
                        <div class="support-desc">
                            <h6>Great Value</h6>
                            <span>Nunc id ante quis tellus faucibus dictum in eget.</span>
                        </div>
                    </div>
                    <div class="single-support">
                        <div class="support-icon">
                            <i class="lnr lnr-rocket" ></i>
                        </div>
                        <div class="support-desc">
                            <h6>Worlwide Delivery</h6>
                            <span>Quisque posuere enim augue, in rhoncus diam dictum non</span>
                        </div>
                    </div>
                    <div class="single-support">
                        <div class="support-icon">
                           <i class="lnr lnr-lock"></i>
                        </div>
                        <div class="support-desc">
                            <h6>Safe Payment</h6>
                            <span>Duis suscipit elit sem, sed mattis tellus accumsan.</span>
                        </div>
                    </div>
                    <div class="single-support">
                        <div class="support-icon">
                           <i class="lnr lnr-enter-down"></i>
                        </div>
                        <div class="support-desc">
                            <h6>Shop Confidence</h6>
                            <span>Faucibus dictum suscipit eget metus. Duis  elit sem, sed.</span>
                        </div>
                    </div>
                    <div class="single-support">
                        <div class="support-icon">
                           <i class="lnr lnr-users"></i>
                        </div>
                        <div class="support-desc">
                            <h6>24/7 Help Center</h6>
                            <span>Quisque posuere enim augue, in rhoncus diam dictum non.</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Container End -->
        </div>
        <!-- Support Area End Here -->
@stop