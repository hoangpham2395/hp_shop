<div class="header-bottom hidden-sm hidden-xs">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 col-md-5 col-lg-5 menu-xs logo-sm">
                <div class="header-logo ">
                    <div class="clearfix">
                        <!-- Logo -->
                        <div class="logo col-lg-5 col-md-6" style="padding-right: 0px;">
                            <a href="{{getConstant('APP_URL')}}"><img src="{{getConstant('LOGO_URL')}}" alt="Logo" class="img-responsive"></a>
                        </div>
                        <!-- Search -->
                        <div class="search col-lg-7 col-md-6">
                            {!! Form::open(['route' => 'home.search', 'method' => 'GET']) !!}
                                <div class="search-group">
                                    {!! Form::text('search', Request::input('search'), ['class' => 'form-control', 'id' => 'search_data', 'onkeyup' => 'ajaxSearch()', 'placeholder' => 'Gõ từ khóa tìm kiếm ...']) !!}
                                    <button class="btn btn-default" type="submit"></button>
                                </div>
                                <!-- <div id="suggestions">
                                    <div id="autoSuggestionsList"></div>
                                </div> -->
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
            <!--  -->
            <div class="col-sm-6 col-md-7 col-lg-7 hidden-xs hidden-sm menu-sm">
                <div class="header-menu">
                    <div class="row">
                        <div class="menu col-sm-12">
                            <ul>
                                <li class="pop-hover">
                                    <a href="#">
                                        <img src="{{asset('/images/frontend/icon-phone.png')}}" width="30px">
                                        <p>Điện thoại</p>
                                    </a>
                                    <!-- Sub menu -->
                                    <div class="pop-up-menu">
                                        <a href="{{route('frontend.product.index')}}"></a>
                                    <div class="row">
                                        <a href="{{route('frontend.product.index')}}"></a>
                                        <div class="col-sm-12 pop-up-box-right">
                                            <a href="{{route('frontend.product.index')}}">
                                                <p style="color: #464646;font-weight: bold;">Điện thoại</p>
                                            </a>
                                            <ul>
                                                <li><a href="{{route('frontend.product.iphone')}}">iPhone</a></li>
                                                <li><a href="{{route('frontend.product.samsung')}}">Samsung</a></li>
                                                <li><a href="{{route('frontend.product.xiaomi')}}">Xiaomi</a></li>
                                            </ul>
                                            <ul>
                                                <li><a href="{{route('frontend.product.nokia')}}">Nokia</a></li>
                                                <li><a href="{{route('frontend.product.secondhand')}}">Hàng 99%</a></li>
                                                <li><a href="{{route('frontend.product.hangthanhly')}}">Hàng Thanh Lý</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li class="pop-hover">
                                    <a href="{{route('frontend.product.xiaomi')}}">
                                        <img src="{{asset('/images/frontend/icon-xiaomi.png')}}" width="30px">
                                        <p>Xiaomi</p>
                                    </a>
                                </li>
                                <li class="pop-hover">
                                    <a href="{{route('frontend.product.samsung')}}">
                                        <img src="{{asset('images/frontend/icon-samsung.png')}}">
                                        <p>Samsung</p>
                                    </a>
                                </li>
                                <li class="pop-hover">
                                    <a href="{{route('frontend.product.iphone')}}">
                                        <img src="{{asset('images/frontend/icon-apple.png')}}" width="30px">
                                        <p>iPhone</p>
                                    </a>
                                </li>
                                <li class="pop-hover">
                                    <a href="{{route('frontend.product.phukien')}}">
                                        <img src="{{asset('/images/frontend/icon-pk.png')}}" width="30px">
                                        <p>Phụ kiện</p>
                                    </a>
                                    <!-- <div class="pop-up-menu ">
                                        <a href="{{route('frontend.product.phukien')}}"></a>
                                        <div class="row">
                                            <a href="{{route('frontend.product.phukien')}}"></a>
                                            <div class="col-sm-12 pop-up-box-right">
                                                <a href="https:{{route('frontend.product.phukien')}}">
                                                    <p style="color: #464646;font-weight: bold;">Sản phẩm</p>
                                                </a>
                                                <ul>
                                                    <a href="{{route('frontend.product.phukien')}}"></a>
                                                    <li>
                                                        <a href="{{route('frontend.product.phukien')}}"></a>
                                                        <a href="#">Ốp lưng</a>
                                                    </li>
                                                    <li><a href="#">Bao da</a></li>
                                                    <li><a href="#">Sạc</a></li>
                                                </ul>
                                                <ul>
                                                    <li><a href="#">Cáp USB</a></li>
                                                    <li><a href="#">Pin dự phòng</a></li>
                                                    <li><a href="#">Tai nghe</a></li>
                                                </ul>
                                                <ul>
                                                    <li><a href="#">Kính cường lực</a></li>
                                                    <li><a href="#">Dán màn hình</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div> -->
                                </li>
                                <li class="pop-hover">
                                    <a href="{{route('frontend.product.news')}}">
                                        <img src="{{asset('images/frontend/icon-news.png')}}" width="30px">
                                        <p>Tin tức</p>
                                    </a>
                                </li>
                                <li class="pop-hover">
                                    <a href="{{route('frontend.product.muatragop')}}">
                                        <img src="{{asset('images/frontend/icon-tragop.png')}}" width="30px">
                                        <p>Trả góp 0%</p>
                                    </a>
                                </li>
                                <li class="pop-hover">
                                    <a href="{{route('frontend.product.muatuxa')}}">
                                        <img src="{{asset('images/frontend/icon-gh.png')}}" width="60px">
                                        <p>Mua từ xa</p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>