<div class="header-mobile">
    <div class="container">
        <div class="header__logo hidden-lg hidden-md">
            <a href="{{getConstant('APP_URL')}}"><img src="{{getConstant('LOGO_URL')}}" class="img-responsive"></a>
        </div>
        <div class="pop-up-menu-xs col-xs-12 ">
            <ul>
                <li>
                    <a href="{{route('frontend.product.index')}}"><img src="{{asset('/images/frontend/icon-phone-mb.png')}}" height="30px">
                        <p>Điện thoại</p>
                    </a>
                </li>
                <li>
                    <a href="{{route('frontend.product.xiaomi')}}"><img src="{{asset('/images/frontend/icon-xiaomi-mb.png')}}" height="30px">
                        <p>Xiaomi</p>
                    </a>
                </li>
                <li>
                    <a href="{{route('frontend.product.samsung')}}"><img src="{{asset('/images/frontend/icon-samsung-mb.png')}}" height="30px">
                        <p>Samsung</p>
                    </a>
                </li>
                <li>
                    <a href="{{route('frontend.product.iphone')}}"><img src="{{asset('/images/frontend/icon-apple-mb.png')}}" height="30px">
                        <p>iPhone</p>
                    </a>
                </li>
                <li>
                    <a href="{{route('frontend.product.phukien')}}"><img src="{{asset('/images/frontend/icon-pk-mb.png')}}" height="30px">
                        <p>Phụ kiện</p>
                    </a>
                </li>
                <li>
                    <a href="{{route('frontend.product.news')}}"><img src="{{asset('/images/frontend/icon-news-mb.png')}}" height="30px">
                        <p>Tin tức</p>
                    </a>
                </li>
                <li>
                    <a href="{{route('frontend.product.muatragop')}}"><img src="{{asset('/images/frontend/icon-tragop-mb.png')}}" height="30px">
                        <p>Trả góp</p>
                    </a>
                </li>
                <li>
                    <a href="{{route('frontend.product.muatuxa')}}"><img src="{{asset('/images/frontend/icon-gh-mb.png')}}" height="30px">
                        <p>Mua từ xa</p>
                    </a>
                </li>
                <li>
                    <a href="{{route('frontend.product.hangthanhly')}}"><img src="{{asset('/images/frontend/sale-mb.png')}}" height="30px">
                        <p>Hàng thanh lý</p>
                    </a>
                </li>
            </ul>
            <div class="toggle-up">
                <img src="{{asset('/images/frontend/arrow-up.png')}}" width="15%">
            </div>
        </div>

        <div class="header__search hidden-lg hidden-md">
            {!! Form::open(['route' => 'home.search', 'method' => 'GET']) !!}
                <div class="search-group">
                    {!! Form::text('search', Request::input('search'), ['class' => 'form-control', 'id' => 'search_data', 'onkeyup' => 'ajaxSearch()', 'placeholder' => 'Nhập từ khóa cần tìm ...']) !!}
                    <button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
                </div>
            {!! Form::close() !!}
        </div>
        <div class="sidebar visible-xs">
            <img src="{{asset('/images/frontend/sidebar.png')}}" alt="" width="45">
        </div>
    </div>
</div>
<div class="header-mobile-bottom hidden-lg hidden-md hidden-sm" style="height: 40px;background: white;">
    <div class="pull-left" style="margin: 10px 5px;">
        <strong style="color: red;">
            <a style="color: red; font-size: 12px;" href="tel:{{getConstant('HOTLINE')}}"><i class="fa fa-phone"></i> {{getConstant('HOTLINE')}} </a>
        </strong>
    </div>
    <div class="pull-right" style="margin: 5px;">
       <strong style="width: auto !important;">Khu vực:</strong>

       <select class="single-option-selector" name="" id="header-change-location-mobile" onchange="location = this.value;">
           <option value="" selected="">Hà Nội</option>
           <!-- <option value="?khuvuc=hcm">Hồ Chí Minh</option> -->
       </select>
   </div>
</div>