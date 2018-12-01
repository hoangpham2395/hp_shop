<!DOCTYPE html>
<!-- saved from url=(0022)https://hungmobile.vn/ -->
<html lang="vi">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{{getConstant('APP_NAME')}}</title>
  <meta name="description" content="Chuyên phân phối Điện Thoại Xách Tay và Điện Thoại Chính Hãng ✅ Giá Tốt nhất thị trường cùng với Chất Lượng chuẩn chính hãng 100% ✅ Đầy đủ Điện Thoại Samsung, iPhone, Xiaomi, HTC, SONY,... ✅ Mua Trả góp Điện Thoại với lãi suất 0%. ">
  <meta name="keywords" content="Điện thoại xách tay, điện thoại nhật bản, điện thoại mỹ, điện thoại samsung, điện thoại hàn quốc, điện thoại sony, điện thoại xiaomi,">
  <meta name="copyright" content="{{getConstant('APP_URL')}}">
  <link rel="shortcut icon" type="image/x-icon" href="{{getConstant('LOGO_URL')}}">

  @include('layouts.frontend.load.css')

  @include('layouts.frontend.load.js')
</head>
<body>
  <img src="./index_files/pixel.gif" style="display: none">
  <header style="padding: 0">
    @include('layouts.frontend.structure.header')   
    @include('layouts.frontend.structure.navbar')
        
<div class="header-mobile">
    <div class="container">
        <div class="header__logo hidden-lg hidden-md">
            <a href="https://hungmobile.vn/"><img src="./index_files/logo-mobile.png" class="img-responsive"></a>
        </div>
        <div class="pop-up-menu-xs col-xs-12 ">
            <ul>
                <li>
                    <a href="https://hungmobile.vn/dien-thoai.html"><img src="./index_files/icon-phone-mb.png" height="30px">
                        <p>Điện thoại</p>
                    </a>
                </li>
                <li>
                    <a href="https://hungmobile.vn/xiaomi.html"><img src="./index_files/icon-xiaomi-mb.png" height="30px">
                        <p>Xiaomi</p>
                    </a>
                </li>
                <li>
                    <a href="https://hungmobile.vn/samsung.html"><img src="./index_files/icon-samsung-mb.png" height="30px">
                        <p>Samsung</p>
                    </a>
                </li>
                <li>
                    <a href="https://hungmobile.vn/apple-iphone.html"><img src="./index_files/icon-apple-mb.png" height="30px">
                        <p>iPhone</p>
                    </a>
                </li>
                <li>
                    <a href="https://hungmobile.vn/phu-kien.html"><img src="./index_files/icon-pk-mb.png" height="30px">
                        <p>Phụ kiện</p>
                    </a>
                </li>
                <li>
                    <a href="https://hungmobile.vn/tin-moi-nhat.html"><img src="./index_files/icon-news-mb.png" height="30px">
                        <p>Tin tức</p>
                    </a>
                </li>
                <li>
                    <a href="https://hungmobile.vn/mua-hang-tra-gop.html"><img src="./index_files/icon-tragop-mb.png" height="30px">
                        <p>Trả góp</p>
                    </a>
                </li>
                <li>
                    <a href="https://hungmobile.vn/huong-dan-mua-hang-tu-xa.html"><img src="./index_files/icon-gh-mb.png" height="30px">
                        <p>Mua từ xa</p>
                    </a>
                </li>
                <li>
                    <a href="https://hungmobile.vn/khuyen-mai.html"><img src="./index_files/sale-mb.png" height="30px">
                        <p>Xả hàng</p>
                    </a>
                </li>
                <li>
                    <a href="https://hungmobile.vn/khuyen-mai.html"><img src="./index_files/icon-km-mb.png" height="30px">
                        <p>Khuyến mại</p>
                    </a>
                </li>
                <li>
                    <a href="https://hungmobile.vn/?khuvuc=hanoi" class="">
                        <img src="./index_files/hanoi.png" height="30px">
                        <p>Hà Nội</p>
                    </a>
                </li>
                <li>
                    <a href="https://hungmobile.vn/?khuvuc=hcm" class="">
                        <img src="./index_files/hcm.png" height="30px">
                        <p>Hồ Chí Minh</p>
                        
                    </a>
                </li>

            </ul>
            <div class="toggle-up">
                <img src="./index_files/arrow-up.png" width="15%">
            </div>
        </div>

        <div class="header__search hidden-lg hidden-md">
            <form action="https://hungmobile.vn/timkiem" method="get">
                <div class="search-group">
                    <input type="text" class="form-control" name="search" id="search_data" onkeyup="ajaxSearch()" placeholder="Nhập từ khóa cần tìm ...">
                    <button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
                </div>
            </form>
        </div>
        <div class="sidebar visible-xs">
            <img src="./index_files/sidebar.png" alt="" width="45">
        </div>
    </div>
</div>
<div class="header-mobile-bottom hidden-lg hidden-md hidden-sm" style="height: 40px;background: white;">
    <div class="pull-left" style="margin: 10px 5px;">
        <strong style="color: red;">
            <a style="color: red; font-size: 12px;" href="tel:090.154.8866"><i class="fa fa-phone"></i> 090.154.8866 </a>
        </strong>
    </div>
    <div class="pull-right" style="margin: 5px;">
     <strong style="width: auto !important;">Khu vực:</strong>

     <select class="single-option-selector" name="" id="header-change-location-mobile" onchange="location = this.value;">
         <!--                                    <option value="0" disabled="" selected="">-- Chọn khu vực --</option>-->
         <option value="?khuvuc=hanoi" selected="">Hà Nội</option>
         <option value="?khuvuc=hcm">Hồ Chí Minh</option>
     </select>
 </div>
</div>
</header>
<div class="bg-body"></div>
<style>
#header-change-location {
    border: 1px solid grey;
    padding-left: 25px;
    -webkit-appearance: menulist !important;
    -moz-appearance: menulist !important;
    height: 30px;
    vertical-align: middle;
    background: transparent !important;
    color: red;
}
#header-change-location-mobile {
    border: 1px solid grey;
    padding-left: 25px;
    -webkit-appearance: menulist !important;
    -moz-appearance: menulist !important;
    height: 30px;
    vertical-align: middle;
    background-image: none !important;
    background-position: unset !important;
    background-size: unset !important;
    background-repeat: unset !important;
}
</style>

<script type="text/javascript">
    jQuery(document).ready(function() {
        $('.randomPost1').jCarouselLite({
            vertical: true,
            visible: 1,
            auto:3000,
            speed:1000
        });
    });
</script>


<h1 class="hidden"></h1>
<div id="slide">
    <div class="container-fluid">
        <div class="row display-flex">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-8">
                <div class="bx-wrapper" style="max-width: 100%;"><div class="bx-viewport" style="width: 100%; overflow: hidden; position: relative; height: 311px;"><ul class="bxslider" style="width: 815%; position: relative; transition-duration: 0.5s; transform: translate3d(-2508px, 0px, 0px);"><li style="float: left; list-style: none; position: relative; width: 836px;" class="bx-clone"><a href="http://khuyenmai.hungmobile.vn/iphone-bao-hanh-15-thang-gia-re/"><img src="./index_files/3f67a6d4bc2f5c71053e_5bdd7490be54f_03_11_2018_17_12_32_(1)_5bdeca47aace3_04_11_2018_17_30_31_5bfc00c3a1980_26_11_2018_21_18_43.jpg"></a></li>
                    <li style="float: left; list-style: none; position: relative; width: 836px;"><a href="http://khuyenmai.hungmobile.vn/sinh-nhat-hungmobile-23-quan-hoa-1-tuoi/"><img src="./index_files/sinh_nhật_23_quan_hoa_5bfc00eaa66d1_26_11_2018_21_19_22.jpg"></a></li>
                    <li style="float: left; list-style: none; position: relative; width: 836px;"><a href="http://khuyenmai.hungmobile.vn/samsung-xach-tay-so-1-viet-nam/"><img src="./index_files/40222243_2219051801665788_664215421016080384_o_5bfa9c8f22080_25_11_2018_19_58_55.jpg"></a></li>
                    <li style="float: left; list-style: none; position: relative; width: 836px;"><a href="http://khuyenmai.hungmobile.vn/khuyen-mai-dien-thoai-xiaomi/"><img src="./index_files/sdf_5bbadcc556bed_08_10_2018_11_27_49_5bfa9d4c7ce02_25_11_2018_20_02_04.jpg"></a></li>
                    <li style="float: left; list-style: none; position: relative; width: 836px;"><a href="https://hungmobile.vn/nokia-x7.html"><img src="./index_files/08ccf68e99d77a8923c6_5c0103ba16542_30_11_2018_16_32_42.jpg"></a></li>
                    <li style="float: left; list-style: none; position: relative; width: 836px;"><a href="https://hungmobile.vn/timkiem?search=black+shark"><img src="./index_files/c2bf1dfd72a491fac8b5_5c0103c559415_30_11_2018_16_32_53.jpg"></a></li>
                    <li style="float: left; list-style: none; position: relative; width: 836px;"><a href="http://khuyenmai.hungmobile.vn/iphone-bao-hanh-15-thang-gia-re/"><img src="./index_files/3f67a6d4bc2f5c71053e_5bdd7490be54f_03_11_2018_17_12_32_(1)_5bdeca47aace3_04_11_2018_17_30_31_5bfc00c3a1980_26_11_2018_21_18_43.jpg"></a></li>
                    
                    <li style="float: left; list-style: none; position: relative; width: 836px;" class="bx-clone"><a href="http://khuyenmai.hungmobile.vn/sinh-nhat-hungmobile-23-quan-hoa-1-tuoi/"><img src="./index_files/sinh_nhật_23_quan_hoa_5bfc00eaa66d1_26_11_2018_21_19_22.jpg"></a></li></ul></div><div class="bx-controls bx-has-controls-direction"><div class="bx-controls-direction"><a class="bx-prev" href="https://hungmobile.vn/">Prev</a><a class="bx-next" href="https://hungmobile.vn/">Next</a></div></div></div>
                    <div id="bx-pager" class="hidden-xs clearfix">
                        <a data-slide-index="0" class="">
                            <h3><span class="arrow-up"></span>Mừng Sinh Nhật - Giật Quà To</h3>
                        </a>
                        <a data-slide-index="1" class="">
                            <h3><span class="arrow-up"></span>Samsung xách tay số 1 Việt Nam</h3>
                        </a>
                        <a data-slide-index="2" class="active">
                            <h3><span class="arrow-up"></span>Xiaomi nguyên Seal - Bảo hành 15 tháng</h3>
                        </a>
                        <a data-slide-index="3" class="">
                            <h3><span class="arrow-up"></span>Nokia X7 - Rẻ Nhất Cho Cấu Hình Cao Nhất</h3>
                        </a>
                        <a data-slide-index="4" class="">
                            <h3><span class="arrow-up"></span>Black Shark Helo - Cỗ máy chơi game</h3>
                        </a>
                        <a data-slide-index="5" class="">
                            <h3><span class="arrow-up"></span>iPhone - BH 1 đổi 1 trong 15 Tháng.</h3>
                        </a>
                        
                        
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4 pl0 slide-right ">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 hidden-xs">
                            <div class="slider-blog">
                                <div class="blog-title clearfix">
                                    <h3>Tin tức</h3>
                                    <div class="hot_news" style="width: 66%;line-height: 10px;">
                                        <span id="dot"><span class="ping"></span></span>
                                        <marquee scrollamount="5" onmouseover="this.stop()" onmouseout="this.start()" width="100%" style="line-height: 39px;">
                                            <a href="http://bitly.com/cmsn-hm-23-quan-hoa" rel="nofollow">
                                                Mừng sinh nhật - Giật quà to: Nokia X7 giá 230K, áp dụng ngay HÔM NAY &gt;&gt;&gt; Xem chi tiết 
                                            </a>

                                        </marquee>

                                    </div>
                                </div>
                                <div class="blog-content">
                                    <div class="media">
                                        <div class="pull-left">
                                            <a href="https://hungmobile.vn/tong-hop-smartphone-nokia-x-quyet-kho-mau-de-gianh-lai-thi-truong.html"><img src="./index_files/nokia-6-2018-15_5bdec6ab2eae0_04_11_2018_17_15_07.jpg" width="90px"></a>
                                        </div>
                                        <div class="media-body">
                                            <h4 class="media-heading">
                                                <a href="https://hungmobile.vn/tong-hop-smartphone-nokia-x-quyet-kho-mau-de-gianh-lai-thi-truong.html">Tổng hợp smartphone Nokia X (2018): Quyết khô máu để giành lại thị trường</a>
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-6 col-sm-6 hidden-xs">
                            <div class="banner">
                                <a href="http://khuyenmai.hungmobile.vn/iphone-bao-hanh-15-thang-gia-re/" target="_blank">
                                    <img src="./index_files/482c0a1d238ac3d49a9b_5be416bc5f4c2_08_11_2018_17_58_04_5c0104058ccc7_30_11_2018_16_33_57.jpg" alt="" class="img-responsive">
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-6 col-sm-6 hidden-xs">
                            <div class="banner">
                                <a href="https://hungmobile.vn/samsung-galaxy-note-9.html" target="_blank">
                                    <img src="./index_files/87ec24d6488fabd1f29e_5c01040b20ea3_30_11_2018_16_34_03.jpg" alt="" class="img-responsive">
                                </a>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="product-sales">
        <div class="container-fluid">
            <div class="product-sales-title">
                <h3>Bán chạy nhất</h3>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="product-sales-item">
                        <div class="product-sales-img">
                            <a href="http://khuyenmai.hungmobile.vn/sinh-nhat-hungmobile-23-quan-hoa-1-tuoi/"><img src="./index_files/sinh_nhật_23_5bfc0026070e0_26_11_2018_21_16_06.jpg" style="width: 100%"></a>
                        </div>
                        <div class="product-sales-content">
                            <h3 style="min-height: 50px;"><a href="http://khuyenmai.hungmobile.vn/sinh-nhat-hungmobile-23-quan-hoa-1-tuoi/">Mừng Sinh Nhật - Nokia X7 giá cực sốc</a></h3>
                            <div class="prod-price">
                                <span>230,000đ</span>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="product-sales-item">
                        <div class="product-sales-img">
                            <a href="https://hungmobile.vn/galaxy-s7-s7-edge.html"><img src="./index_files/67e6dda8cf4f2f11765e_5c01063e26567_30_11_2018_16_43_26.jpg" style="width: 100%"></a>
                        </div>
                        <div class="product-sales-content">
                            <h3 style="min-height: 50px;"><a href="https://hungmobile.vn/galaxy-s7-s7-edge.html">Galaxy S7 Edge - Tuyển chọn nguyên zin - Đảm bảo chống nước.</a></h3>
                            <div class="prod-price">
                                <span>5,150,000đ</span>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="product-sales-item">
                        <div class="product-sales-img">
                            <a href="https://hungmobile.vn/nokia-x7.html"><img src="./index_files/b9dc926cfe351d6b4424_5c01052d83de3_30_11_2018_16_38_53.jpg" style="width: 100%"></a>
                        </div>
                        <div class="product-sales-content">
                            <h3 style="min-height: 50px;"><a href="https://hungmobile.vn/nokia-x7.html">Nokia X7 - Bảo hành 15 tháng giá rẻ nhất</a></h3>
                            <div class="prod-price">
                                <span>5,690,000đ</span>
                            </div>
                        </div>

                    </div>
                </div>
                
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="product-sales-item">
                        <div class="product-sales-img">
                            <a href="https://hungmobile.vn/galaxy-note-8.html"><img src="./index_files/0d289e99f2c0119e48d1_5c0104fe7b8cc_30_11_2018_16_38_06.jpg" style="width: 100%"></a>
                        </div>
                        <div class="product-sales-content">
                            <h3 style="min-height: 50px;"><a href="https://hungmobile.vn/galaxy-note-8.html">Note 8 FullBox Giá Rẻ Nhất Thị Trường</a></h3>
                            <div class="prod-price">
                                <span>9,490,000đ</span>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="product-sales-item">
                        <div class="product-sales-img">
                            <a href="https://hungmobile.vn/timkiem?search=iphone+6s"><img src="./index_files/675d30ed5cb4bfeae6a5_5c0104e060d87_30_11_2018_16_37_36.jpg" style="width: 100%"></a>
                        </div>
                        <div class="product-sales-content">
                            <h3 style="min-height: 50px;"><a href="https://hungmobile.vn/timkiem?search=iphone+6s">iPhone 6S Quốc tế Likenew 1 đổi 1 trong cả 15 tháng. </a></h3>
                            <div class="prod-price">
                                <span>4,490,000đ</span>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="product-sales-item">
                        <div class="product-sales-img">
                            <a href="https://hungmobile.vn/iphone-x-64gb-cu-xach-tay-gia-re.html"><img src="./index_files/928d833def640c3a5575_5c01053d2d7e4_30_11_2018_16_39_09.jpg" style="width: 100%"></a>
                        </div>
                        <div class="product-sales-content">
                            <h3 style="min-height: 50px;"><a href="https://hungmobile.vn/iphone-x-64gb-cu-xach-tay-gia-re.html">iPhone X Bảo hành 1 đổi 1 trong cả 15 tháng</a></h3>
                            <div class="prod-price">
                                <span>17,390,000đ</span>
                            </div>
                        </div>

                    </div>
                </div>
                
            </div>
            
        </div>
    </div>

    <section id="content">
        <div class="container-fluid">
            <div class="ct-heading clearfix">
                <h2 class="col-lg-2 col-md-4 col-sm-4 col-xs-6 cth2">Sản phẩm nổi bật
                    <!-- <span class="ct-tringle"></span> --></h2>
                    <div class="col-lg-5 col-md-4 col-sm-4 col-xs-3 ct-vendor">
                        <span class="hidden-lg btn-ul">Hãng: <i class="fa fa-caret-down"></i></span>
                        <ul class="ulh1">
                            <li><h2><a href="https://hungmobile.vn/apple-iphone.html">iPhone</a></h2></li>
                            <li><h2><a href="https://hungmobile.vn/samsung.html">Samsung</a></h2></li>
                            <li><h2><a href="https://hungmobile.vn/xiaomi.html">Xiaomi</a></h2></li>
                            <li><h2><a href="https://hungmobile.vn/sony.html">Sony</a></h2></li>
                            <li><h2><a href="https://hungmobile.vn/nokia.html">Nokia</a></h2></li>
                            <li><h2><a href="https://hungmobile.vn/hang-thanh-ly.html">Hàng Thanh Lý</a></h2></li>
                            
                        </ul>
                    </div>
                    <div class="col-lg-5 col-md-4 col-sm-4 col-xs-3 ct-price">
                        <span class="hidden-lg btn-ul2">Giá: <i class="fa fa-caret-down"></i></span>
                        <ul class="ulh2">
                            <li><h2><a href="https://hungmobile.vn/dien-thoai?range=1.html">Dưới 3 triệu</a></h2></li>
                            <li><h2><a href="https://hungmobile.vn/dien-thoai?range=2.html">Từ 3 - 5 triệu</a></h2></li>
                            <li><h2><a href="https://hungmobile.vn/dien-thoai?range=3.html">Từ 5 - 7 triệu</a></h2></li>
                            <li class="ulh2-children hidden-md hidden-sm hidden-xs">
                                <h2 class="btn-a"><a>Giá khác <span class="fa fa-caret-down"></span></a></h2>
                                <ul class="ulh3">
                                    <li><h3><a href="https://hungmobile.vn/dien-thoai?range=4.html%22">Từ 7 - 9 triệu</a></h3></li>
                                    <li><h3><a href="https://hungmobile.vn/dien-thoai?range=5.html">Từ 9 - 12 triệu</a></h3></li>
                                    <li><h3><a href="https://hungmobile.vn/dien-thoai?range=6.html">Trên 12 triệu</a></h3></li>
                                </ul>
                            </li>
                            <li class="hidden-lg"><h2><a href="https://hungmobile.vn/dien-thoai?range=4.html%22">Từ 7 - 9 triệu</a></h2></li>
                            <li class="hidden-lg"><h2><a href="https://hungmobile.vn/dien-thoai?range=5.html">Từ 9 - 12 triệu</a></h2></li>
                            <li class="hidden-lg"><h2><a href="https://hungmobile.vn/dien-thoai?range=6.html">Trên 12 triệu</a></h2></li>
                        </ul>
                    </div>
                </div>

                <div class="ct-product">
                    <div class="boder-pro">
                        <div class="ct-box20">
                            <a href="https://hungmobile.vn/samsung-galaxy-note-9-512gb-xach-tay-han-quoc-cu.html"><img src="./index_files/note-9-xanh_5b7e71b332632_23_08_2018_15_34_59_5be637fef245e_10_11_2018_08_44_30.jpg" alt="" class="img-responsive"></a>
                            <div class="box-content">
                                <h3 style="font-size:17px;" class="product-name"><a href="https://hungmobile.vn/samsung-galaxy-note-9-512gb-xach-tay-han-quoc-cu.html" class="pro-name">Galaxy Note 9 Hàn 512GB Likenew (Đẹp 99%)</a></h3>
                                <p class="new-price">
                                    14,890,000đ
                                </p>
                                <p class="old-price">Giá cũ:
                                    <span>17,090,000đ</span>
                                </p>
                            </div>
                            <a href="https://hungmobile.vn/samsung-galaxy-note-9-512gb-xach-tay-han-quoc-cu.html" style="display:inline-block">
                            </a><div class="box-detail" data-url="https://hungmobile.vn/samsung-galaxy-note-9-512gb-xach-tay-han-quoc-cu.html"><a href="https://hungmobile.vn/samsung-galaxy-note-9-512gb-xach-tay-han-quoc-cu.html" style="display:inline-block">
                            </a><a href="https://hungmobile.vn/samsung-galaxy-note-9-512gb-xach-tay-han-quoc-cu.html" class="pro-name">Galaxy Note 9 Hàn 512GB Likenew (Đẹp 99%)</a>
                            <p class="new-price">
                                14,890,000đ
                            </p>
                            <p class="old-price">Giá cũ:
                                <span>17,090,000đ</span>
                            </p>
                            
                            <hr>
                            <div>
                                <div style="text-align: center;"><span style="font-size:16px"><strong><a href="http://bitly.com/cmsn-hm-23-quan-hoa"><span style="color:rgb(255, 0, 0)">MỪNG SINH NHẬT - GIẬT QUÀ TO</span></a></strong><span style="color:rgb(255, 0, 0)"><strong>:&nbsp;(Áp dụng từ 27/11 - 02/12)</strong></span></span></div>

                                <ul style="margin-left:40px">
                                   <li style="text-align:left">Mua&nbsp;<a href="https://hungmobile.vn/nokia-x7.html">Nokia X7</a>&nbsp;giá chỉ 230K&nbsp;</li>
                                   <li style="text-align:left">Mua&nbsp;<a href="https://hungmobile.vn/vong-deo-tay-thong-minh-xiaomi-mi-band-3.html">Mi band 3</a>&nbsp;giá chỉ 23K</li>
                                   <li style="text-align:left">Săn phụ kiện đồng giá từ 23K&nbsp;<em>(duy nhất ngày 02/12)</em></li>
                                   <li style="text-align:left">Tặng ngay Arun 5600mAh cho CS3: 690 Lê Hồng Phong</li>
                               </ul>

                               <p style="margin-left:80px">&gt;&gt; Chi tiết xem&nbsp;<em><strong><a href="http://bitly.com/cmsn-hm-23-quan-hoa" rel="nofollow">Tại Đây</a></strong></em></p>

                               <p style="text-align:center"><strong><a href="http://khuyenmai.hungmobile.vn/samsung-xach-tay-so-1-viet-nam/" rel="nofollow" target="_blank"><span style="color:rgb(255, 0, 0)"><span style="font-size:16px">SAMSUNG XÁCH TAY SỐ 1 VIỆT NAM</span></span></a></strong></p>

                               <p>-&nbsp;GÓI&nbsp;KM 1:&nbsp;Sạc + cáp Samsung&nbsp;chính hãng trị giá&nbsp;250.000 VNĐ, tai nghe Samsung J7&nbsp;trị giá&nbsp;100.000 VNĐ</p>
                           </div>

                           <p>-&nbsp;GÓI&nbsp;KM 2:&nbsp;Sạc + cáp Samsung&nbsp;chính hãng trị giá&nbsp;250.000 VNĐ, gậy selfie mini trị giá&nbsp;150.000 VNĐ</p>

                           <p>- Tặng ngay que chọc sim cao cấp trị giá&nbsp;20.000 VNĐ</p>

                           <p>​-&nbsp;TRẢ GÓP LÃI SUẤT 0%&nbsp;qua thẻ tín dụng.&nbsp;<a href="https://hungmobile.vn/mua-hang-tra-gop/samsung-galaxy-note-9-512gb-xach-tay-han-quoc-cu.html" rel="nofollow">Chi tiết.</a></p>

                           <p>​-&nbsp;Giao Hàng&nbsp;COD Toàn Quốc&nbsp;(Nhận hàng và thanh toán&nbsp;tại nhà)&nbsp;<a href="https://hungmobile.vn/huong-dan-mua-hang-tu-xa.html" rel="nofollow" style="text-align: justify;">Xem chi tiết</a></p>

                       </div>
                       
                   </div>
                   <div class="ct-box20">
                    <a href="https://hungmobile.vn/nokia-x7-2018-128gb-ram-6gb-xach-tay-gia-re.html"><img src="./index_files/50d004e7d56b35356c7a_5be10a157730e_06_11_2018_10_27_17.jpg" alt="" class="img-responsive"></a>
                    <div class="box-content">
                        <h3 style="font-size:17px;" class="product-name"><a href="https://hungmobile.vn/nokia-x7-2018-128gb-ram-6gb-xach-tay-gia-re.html" class="pro-name">Nokia X7 (2018) 128GB, Ram 6GB mới Nguyên Seal</a></h3>
                        <p class="new-price">
                            7,190,000đ
                        </p>
                        <p class="old-price">Giá cũ:
                            <span>7,950,000đ</span>
                        </p>
                    </div>
                    <a href="https://hungmobile.vn/nokia-x7-2018-128gb-ram-6gb-xach-tay-gia-re.html" style="display:inline-block">
                    </a><div class="box-detail" data-url="https://hungmobile.vn/nokia-x7-2018-128gb-ram-6gb-xach-tay-gia-re.html"><a href="https://hungmobile.vn/nokia-x7-2018-128gb-ram-6gb-xach-tay-gia-re.html" style="display:inline-block">
                    </a><a href="https://hungmobile.vn/nokia-x7-2018-128gb-ram-6gb-xach-tay-gia-re.html" class="pro-name">Nokia X7 (2018) 128GB, Ram 6GB mới Nguyên Seal</a>
                    <p class="new-price">
                        7,190,000đ
                    </p>
                    <p class="old-price">Giá cũ:
                        <span>7,950,000đ</span>
                    </p>
                    
                    <hr>
                    <div style="text-align: center;"><span style="font-size:16px"><strong><a href="http://bitly.com/cmsn-hm-23-quan-hoa"><span style="color:rgb(255, 0, 0)">MỪNG SINH NHẬT - GIẬT QUÀ TO</span></a></strong><span style="color:rgb(255, 0, 0)"><strong>:&nbsp;(Áp dụng từ 27/11 - 02/12)</strong></span></span></div>

                    <ul style="margin-left:40px">
                       <li style="text-align:left">Mua&nbsp;<a href="https://hungmobile.vn/nokia-x7.html">Nokia X7</a>&nbsp;giá chỉ 230K&nbsp;</li>
                       <li style="text-align:left">Mua&nbsp;<a href="https://hungmobile.vn/vong-deo-tay-thong-minh-xiaomi-mi-band-3.html">Mi band 3</a>&nbsp;giá chỉ 23K</li>
                       <li style="text-align:left">Săn phụ kiện đồng giá từ 23K&nbsp;<em>(duy nhất ngày 02/12)</em></li>
                       <li style="text-align:left">Tặng ngay Arun 5600mAh cho CS3: 690 Lê Hồng Phong</li>
                   </ul>

                   <p style="margin-left:80px">&gt;&gt; Chi tiết xem&nbsp;<em><strong><a href="http://bitly.com/cmsn-hm-23-quan-hoa" rel="nofollow">Tại Đây</a></strong></em></p>

                   <hr>
                   <p>- Tặng ngay&nbsp;COMBO 1 Trị Giá 250K&nbsp;(gậy Selfie +&nbsp;Kính CL +&nbsp;Thánh Sim 3G)&nbsp;hoặc&nbsp;COMBO 2&nbsp;Trị Giá 300K&nbsp;(tai nghe Piston + Kính CL)&nbsp;khi mua Bảo Hành Vàng&nbsp;<a href="https://hungmobile.vn/chinh-sach-bao-hanh.html#bao-hanh-nokia">(Chi tiết)</a></p>

                   <p>- Tặng&nbsp;Ốp lưng Silicon&nbsp;chính hãng (kèm theo hộp)</p>

                   <p>- Có Tiếng Việt và hỗ trợ mạng 4G đầy đủ.</p>

                   <p>- Máy mới 100%, Hộp Nguyên Seal Niêm Phong của NSX.</p>

                   <p>- Hỗ trợ&nbsp;Mua Trả Góp 0%&nbsp;qua thẻ tín dụng.&nbsp;<a href="https://hungmobile.vn/mua-hang-tra-gop/nokia-x7-2018-64gb-ram-6gb-gia-re.html" rel="nofollow" target="_blank">Chi tiết.</a></p>

                   <p>​-&nbsp;Giao Hàng&nbsp;COD Toàn Quốc&nbsp;(Nhận hàng và thanh toán&nbsp;tại nhà)&nbsp;<a href="https://hungmobile.vn/huong-dan-mua-hang-tu-xa.html" rel="nofollow" style="text-align: justify;">Xem chi tiết</a></p>

               </div>
               
           </div>
           <div class="ct-box20">
            <a href="https://hungmobile.vn/iphone-se-16gb-quoc-te-cu-gia-re.html"><img src="./index_files/se_nhỏ_(1)_5bdc88403d3b4_03_11_2018_00_24_16.jpg" alt="" class="img-responsive"></a>
            <div class="box-content">
                <h3 style="font-size:17px;" class="product-name"><a href="https://hungmobile.vn/iphone-se-16gb-quoc-te-cu-gia-re.html" class="pro-name">iPhone SE 16GB Quốc Tế Likenew (Đẹp 99%)</a></h3>
                <p class="new-price">
                    2,990,000đ
                </p>
                <p class="old-price">Giá cũ:
                    <span>4,250,000đ</span>
                </p>
            </div>
            <a href="https://hungmobile.vn/iphone-se-16gb-quoc-te-cu-gia-re.html" style="display:inline-block">
            </a><div class="box-detail" data-url="https://hungmobile.vn/iphone-se-16gb-quoc-te-cu-gia-re.html"><a href="https://hungmobile.vn/iphone-se-16gb-quoc-te-cu-gia-re.html" style="display:inline-block">
            </a><a href="https://hungmobile.vn/iphone-se-16gb-quoc-te-cu-gia-re.html" class="pro-name">iPhone SE 16GB Quốc Tế Likenew (Đẹp 99%)</a>
            <p class="new-price">
                2,990,000đ
            </p>
            <p class="old-price">Giá cũ:
                <span>4,250,000đ</span>
            </p>
            
            <hr>
            <div>
                <div style="text-align: center;"><span style="font-size:16px"><strong><a href="http://bitly.com/cmsn-hm-23-quan-hoa"><span style="color:rgb(255, 0, 0)">MỪNG SINH NHẬT - GIẬT QUÀ TO</span></a></strong><span style="color:rgb(255, 0, 0)"><strong>:&nbsp;(Áp dụng từ 27/11 - 02/12)</strong></span></span></div>

                <ul style="margin-left:40px">
                   <li style="text-align:left">Mua&nbsp;<a href="https://hungmobile.vn/nokia-x7.html">Nokia X7</a>&nbsp;giá chỉ 230K&nbsp;</li>
                   <li style="text-align:left">Mua&nbsp;<a href="https://hungmobile.vn/vong-deo-tay-thong-minh-xiaomi-mi-band-3.html">Mi band 3</a>&nbsp;giá chỉ 23K</li>
                   <li style="text-align:left">Săn phụ kiện đồng giá từ 23K&nbsp;<em>(duy nhất ngày 02/12)</em></li>
                   <li style="text-align:left">Tặng ngay Arun 5600mAh cho CS3: 690 Lê Hồng Phong</li>
               </ul>

               <p style="margin-left:80px">&gt;&gt; Chi tiết xem&nbsp;<em><strong><a href="http://bitly.com/cmsn-hm-23-quan-hoa" rel="nofollow">Tại Đây</a></strong></em></p>

               <p style="text-align:center"><strong><span style="color:rgb(255, 0, 0)">1&nbsp;ĐỔI 1 TRONG 15 THÁNG (CẢ NGUỒN + MÀN HÌNH)</span></strong></p>

               <div>
                <p>- Tặng ngay bộ Sạc Cáp cao cấp trị giá&nbsp;250.000 VNĐ</p>
            </div>

            <p style="text-align:justify">- Tặng ngay que chọc Sim cao cấp trị giá&nbsp;20.000 VNĐ</p>

            <p style="text-align:justify">- Tặng ngay iRing cao cấp trị giá 30.000 VNĐ</p>

            <p style="text-align:justify">-&nbsp;TRẢ GÓP LÃI SUẤT 0%, qua thẻ tín dụng.&nbsp;<a href="https://hungmobile.vn/mua-hang-tra-gop/iphone-7-32gb-xach-tay-cu-gia-re.html" rel="nofollow">Xem chi tiết.</a></p>

            <p style="text-align:justify">-&nbsp;Giao Hàng&nbsp;COD Toàn Quốc&nbsp;(Nhận hàng và thanh toán tại nhà)&nbsp;<a href="https://hungmobile.vn/huong-dan-mua-hang-tu-xa.html" rel="nofollow">Xem chi tiết</a></p>
        </div>

    </div>
    
</div>
<div class="ct-box20">
    <a href="https://hungmobile.vn/xiaomi-mi-mix-3-2018-256gb-ram-8-xach-tay-gia-re.html"><img src="./index_files/mi-mix3-nho_5be002d85e3b0_05_11_2018_15_44_08.jpg" alt="" class="img-responsive"></a>
    <div class="box-content">
        <h3 style="font-size:17px;" class="product-name"><a href="https://hungmobile.vn/xiaomi-mi-mix-3-2018-256gb-ram-8-xach-tay-gia-re.html" class="pro-name">Xiaomi Mi Mix 3 (2018) 256GB Ram 8GB Mới Nguyên Seal</a></h3>
        <p class="new-price">
            14,090,000đ
        </p>
    </div>
    <a href="https://hungmobile.vn/xiaomi-mi-mix-3-2018-256gb-ram-8-xach-tay-gia-re.html" style="display:inline-block">
    </a><div class="box-detail" data-url="https://hungmobile.vn/xiaomi-mi-mix-3-2018-256gb-ram-8-xach-tay-gia-re.html"><a href="https://hungmobile.vn/xiaomi-mi-mix-3-2018-256gb-ram-8-xach-tay-gia-re.html" style="display:inline-block">
    </a><a href="https://hungmobile.vn/xiaomi-mi-mix-3-2018-256gb-ram-8-xach-tay-gia-re.html" class="pro-name">Xiaomi Mi Mix 3 (2018) 256GB Ram 8GB Mới Nguyên Seal</a>
    <p class="new-price">
        14,090,000đ
    </p>
    
    <hr>
    <div style="text-align: center;">
        <div><span style="font-size:16px"><strong><a href="http://bitly.com/cmsn-hm-23-quan-hoa"><span style="color:rgb(255, 0, 0)">MỪNG SINH NHẬT - GIẬT QUÀ TO</span></a></strong><span style="color:rgb(255, 0, 0)"><strong>:&nbsp;(Áp dụng từ 27/11 - 02/12)</strong></span></span></div>

        <ul style="margin-left:40px">
           <li style="text-align:left">Mua&nbsp;<a href="https://hungmobile.vn/nokia-x7.html">Nokia X7</a>&nbsp;giá chỉ 230K&nbsp;</li>
           <li style="text-align:left">Mua&nbsp;<a href="https://hungmobile.vn/vong-deo-tay-thong-minh-xiaomi-mi-band-3.html">Mi band 3</a>&nbsp;giá chỉ 23K</li>
           <li style="text-align:left">Săn phụ kiện đồng giá từ 23K&nbsp;<em>(duy nhất ngày 02/12)</em></li>
           <li style="text-align:left">Tặng ngay Arun 5600mAh cho CS3: 690 Lê Hồng Phong</li>
       </ul>

       <p style="margin-left:80px; text-align:left">&gt;&gt; Chi tiết xem&nbsp;<em><strong><a href="http://bitly.com/cmsn-hm-23-quan-hoa" rel="nofollow">Tại Đây</a></strong></em></p>

       <hr>
       <p style="text-align: left;">- Tặng ngay&nbsp;COMBO 1 Trị Giá 250K&nbsp;(gậy Selfie +&nbsp;Iring +&nbsp;Thánh Sim 3G)&nbsp;hoặc&nbsp;COMBO 2&nbsp;Trị Giá 300K&nbsp;(tai nghe Piston + Iring)&nbsp;khi mua Bảo Hành Vàng&nbsp;<a href="https://hungmobile.vn/chinh-sach-bao-hanh.html#bao-hanh-xiaomi" rel="nofollow">(Chi tiết)</a></p>
   </div>

   <p style="text-align:justify">- Tặng&nbsp;Ốp Lưng&nbsp;chính hãng (kèm theo hộp)</p>

   <p style="text-align:justify">-&nbsp;Giảm Giá 30%&nbsp;khi mua phụ kiện kèm theo</p>

   <p style="text-align:justify">- Hỗ trợ&nbsp;Mua Trả Góp 0%&nbsp;qua thẻ tín dụng.</p>

   <p style="text-align:justify">-&nbsp;Giao Hàng&nbsp;COD Toàn Quốc&nbsp;(Nhận hàng và thanh toán tại nhà)&nbsp;<a href="https://hungmobile.vn/huong-dan-mua-hang-tu-xa.html" rel="nofollow">Xem chi tiết</a></p>

   <p>&nbsp;</p>

</div>

</div>
<div class="ct-box20">
    <a href="https://hungmobile.vn/xiaomi-black-shark-helo-8gb-128gb-xach-tay-gia-re.html"><img src="./index_files/72f54e0f75f195afcce0_5bdacfafc05b4_01_11_2018_17_04_31.jpg" alt="" class="img-responsive"></a>
    <div class="box-content">
        <h3 style="font-size:17px;" class="product-name"><a href="https://hungmobile.vn/xiaomi-black-shark-helo-8gb-128gb-xach-tay-gia-re.html" class="pro-name">Black Shark Helo Ram 8GB 128GB Gaming Phone</a></h3>
        <p class="new-price">
            12,250,000đ
        </p>
    </div>
    <a href="https://hungmobile.vn/xiaomi-black-shark-helo-8gb-128gb-xach-tay-gia-re.html" style="display:inline-block">
    </a><div class="box-detail" data-url="https://hungmobile.vn/xiaomi-black-shark-helo-8gb-128gb-xach-tay-gia-re.html"><a href="https://hungmobile.vn/xiaomi-black-shark-helo-8gb-128gb-xach-tay-gia-re.html" style="display:inline-block">
    </a><a href="https://hungmobile.vn/xiaomi-black-shark-helo-8gb-128gb-xach-tay-gia-re.html" class="pro-name">Black Shark Helo Ram 8GB 128GB Gaming Phone</a>
    <p class="new-price">
        12,250,000đ
    </p>
    
    <hr>
    <div style="text-align: center;"><span style="font-size:16px"><strong><a href="http://bitly.com/cmsn-hm-23-quan-hoa"><span style="color:rgb(255, 0, 0)">MỪNG SINH NHẬT - GIẬT QUÀ TO</span></a></strong><span style="color:rgb(255, 0, 0)"><strong>:&nbsp;(Áp dụng từ 27/11 - 02/12)</strong></span></span></div>

    <ul style="margin-left:40px">
       <li style="text-align:left">Mua&nbsp;<a href="https://hungmobile.vn/nokia-x7.html">Nokia X7</a>&nbsp;giá chỉ 230K&nbsp;</li>
       <li style="text-align:left">Mua&nbsp;<a href="https://hungmobile.vn/vong-deo-tay-thong-minh-xiaomi-mi-band-3.html">Mi band 3</a>&nbsp;giá chỉ 23K</li>
       <li style="text-align:left">Săn phụ kiện đồng giá từ 23K&nbsp;<em>(duy nhất ngày 02/12)</em></li>
       <li style="text-align:left">Tặng ngay Arun 5600mAh cho CS3: 690 Lê Hồng Phong</li>
   </ul>

   <p style="margin-left:80px">&gt;&gt; Chi tiết xem&nbsp;<em><strong><a href="http://bitly.com/cmsn-hm-23-quan-hoa" rel="nofollow">Tại Đây</a></strong></em></p>

   <hr>
   <p>- Tặng ngay&nbsp;COMBO 1 Trị Giá 250K&nbsp;(gậy Selfie&nbsp;+&nbsp;Thánh Sim 3G)&nbsp;hoặc&nbsp;COMBO 2&nbsp;Trị Giá 300K&nbsp;(tai nghe Piston + Thánh Sim 3G)&nbsp;khi mua Bảo Hành Vàng&nbsp;<a href="https://hungmobile.vn/chinh-sach-bao-hanh.html#bao-hanh-xiaomi" rel="nofollow">(Chi tiết)</a></p>

   <p style="text-align:justify">- Tặng&nbsp;GamePad&nbsp;chính hãng (kèm theo hộp)</p>

   <p style="text-align:justify">- Tặng&nbsp;Ốp Lưng&nbsp;chính hãng (kèm theo hộp)</p>

   <p style="text-align:justify">-&nbsp;Giảm Giá 30%&nbsp;khi mua phụ kiện kèm theo</p>

   <p style="text-align:justify">-&nbsp;TRẢ GÓP LÃI SUẤT 0%&nbsp;qua thẻ tín dụng.&nbsp;<a href="https://hungmobile.vn/mua-hang-tra-gop/xiaomi-black-shark-helo-8gb-128gb-xach-tay-gia-re.html" rel="nofollow">Xem chi tiết</a></p>

   <p style="text-align:justify">-&nbsp;Giao Hàng&nbsp;COD Toàn Quốc&nbsp;(Nhận hàng và thanh toán tại nhà)&nbsp;<a href="https://hungmobile.vn/huong-dan-mua-hang-tu-xa.html" rel="nofollow">Xem chi tiết</a></p>

</div>

</div>
<div class="ct-box20">
    <a href="https://hungmobile.vn/samsung-galaxy-a7-2018-chinh-hang-gia-re.html"><img src="./index_files/a7_2018_nhỏ_5bd51af321b45_28_10_2018_09_12_03.jpg" alt="" class="img-responsive"></a>
    <div class="box-content">
        <h3 style="font-size:17px;" class="product-name"><a href="https://hungmobile.vn/samsung-galaxy-a7-2018-chinh-hang-gia-re.html" class="pro-name">Samsung Galaxy A7 2018 Chính hãng FPT</a></h3>
        <p class="new-price">
            6,890,000đ
        </p>
        <p class="old-price">Giá cũ:
            <span>7,690,000đ</span>
        </p>
    </div>
    <a href="https://hungmobile.vn/samsung-galaxy-a7-2018-chinh-hang-gia-re.html" style="display:inline-block">
    </a><div class="box-detail" data-url="https://hungmobile.vn/samsung-galaxy-a7-2018-chinh-hang-gia-re.html"><a href="https://hungmobile.vn/samsung-galaxy-a7-2018-chinh-hang-gia-re.html" style="display:inline-block">
    </a><a href="https://hungmobile.vn/samsung-galaxy-a7-2018-chinh-hang-gia-re.html" class="pro-name">Samsung Galaxy A7 2018 Chính hãng FPT</a>
    <p class="new-price">
        6,890,000đ
    </p>
    <p class="old-price">Giá cũ:
        <span>7,690,000đ</span>
    </p>
    
    <hr>
    <div style="text-align: center;"><span style="font-size:16px"><strong><a href="http://bitly.com/cmsn-hm-23-quan-hoa"><span style="color:rgb(255, 0, 0)">MỪNG SINH NHẬT - GIẬT QUÀ TO</span></a></strong><span style="color:rgb(255, 0, 0)"><strong>:&nbsp;(Áp dụng từ 27/11 - 02/12)</strong></span></span></div>

    <ul style="margin-left:40px">
       <li style="text-align:left">Mua&nbsp;<a href="https://hungmobile.vn/nokia-x7.html">Nokia X7</a>&nbsp;giá chỉ 230K&nbsp;</li>
       <li style="text-align:left">Mua&nbsp;<a href="https://hungmobile.vn/vong-deo-tay-thong-minh-xiaomi-mi-band-3.html">Mi band 3</a>&nbsp;giá chỉ 23K</li>
       <li style="text-align:left">Săn phụ kiện đồng giá từ 23K&nbsp;<em>(duy nhất ngày 02/12)</em></li>
       <li style="text-align:left">Tặng ngay Arun 5600mAh cho CS3: 690 Lê Hồng Phong</li>
   </ul>

   <p style="margin-left:80px">&gt;&gt; Chi tiết xem&nbsp;<em><strong><a href="http://bitly.com/cmsn-hm-23-quan-hoa" rel="nofollow">Tại Đây</a></strong></em></p>

   <p>-&nbsp;Ưu đãi&nbsp;giảm giá 30%&nbsp;&nbsp;khi mua các phụ kiện chính hãng kèm theo.</p>

   <p>- Máy có đầy đủ hộp và phụ kiện chính hãng: Sạc nhanh, Cáp USB, Tai nghe, que lấy sim, Sách HD.</p>

   <p>-&nbsp;TRẢ GÓP LÃI SUẤT 0%&nbsp;qua thẻ tín dụng.<a href="https://hungmobile.vn/mua-hang-tra-gop/samsung-galaxy-note-9-128gb-chinh-hang-gia-re" rel="nofollow">&nbsp;Chi tiết.</a></p>

   <p>-&nbsp;Giao Hàng&nbsp;COD Toàn Quốc&nbsp;(Nhận hàng và thành toàn tại nhà)&nbsp;<a href="https://hungmobile.vn/huong-dan-mua-hang-tu-xa.html">Xem chi tiết</a></p>

</div>

</div>
<div class="ct-box20">
    <a href="https://hungmobile.vn/nokia-x7-2018-64gb-ram-6gb-xach-tay-gia-re.html"><img src="./index_files/50d004e7d56b35356c7a_5be10a00adea9_06_11_2018_10_26_56.jpg" alt="" class="img-responsive"></a>
    <div class="box-content">
        <h3 style="font-size:17px;" class="product-name"><a href="https://hungmobile.vn/nokia-x7-2018-64gb-ram-6gb-xach-tay-gia-re.html" class="pro-name">Nokia X7 (2018) 64GB, Ram 6GB mới Nguyên Seal</a></h3>
        <p class="new-price">
            6,290,000đ
        </p>
        <p class="old-price">Giá cũ:
            <span>7,290,000đ</span>
        </p>
    </div>
    <a href="https://hungmobile.vn/nokia-x7-2018-64gb-ram-6gb-xach-tay-gia-re.html" style="display:inline-block">
    </a><div class="box-detail" data-url="https://hungmobile.vn/nokia-x7-2018-64gb-ram-6gb-xach-tay-gia-re.html"><a href="https://hungmobile.vn/nokia-x7-2018-64gb-ram-6gb-xach-tay-gia-re.html" style="display:inline-block">
    </a><a href="https://hungmobile.vn/nokia-x7-2018-64gb-ram-6gb-xach-tay-gia-re.html" class="pro-name">Nokia X7 (2018) 64GB, Ram 6GB mới Nguyên Seal</a>
    <p class="new-price">
        6,290,000đ
    </p>
    <p class="old-price">Giá cũ:
        <span>7,290,000đ</span>
    </p>
    
    <hr>
    <div style="text-align: center;"><span style="font-size:16px"><strong><a href="http://bitly.com/cmsn-hm-23-quan-hoa"><span style="color:rgb(255, 0, 0)">MỪNG SINH NHẬT - GIẬT QUÀ TO</span></a></strong><span style="color:rgb(255, 0, 0)"><strong>:&nbsp;(Áp dụng từ 27/11 - 02/12)</strong></span></span></div>

    <ul style="margin-left:40px">
       <li style="text-align:left">Mua&nbsp;<a href="https://hungmobile.vn/nokia-x7.html">Nokia X7</a>&nbsp;giá chỉ 230K&nbsp;</li>
       <li style="text-align:left">Mua&nbsp;<a href="https://hungmobile.vn/vong-deo-tay-thong-minh-xiaomi-mi-band-3.html">Mi band 3</a>&nbsp;giá chỉ 23K</li>
       <li style="text-align:left">Săn phụ kiện đồng giá từ 23K&nbsp;<em>(duy nhất ngày 02/12)</em></li>
       <li style="text-align:left">Tặng ngay Arun 5600mAh cho CS3: 690 Lê Hồng Phong</li>
   </ul>

   <p style="margin-left:80px">&gt;&gt; Chi tiết xem&nbsp;<em><strong><a href="http://bitly.com/cmsn-hm-23-quan-hoa" rel="nofollow">Tại Đây</a></strong></em></p>

   <hr>
   <p>- Tặng ngay&nbsp;COMBO 1 Trị Giá 250K&nbsp;(gậy Selfie +&nbsp;Kính CL +&nbsp;Thánh Sim 3G)&nbsp;hoặc&nbsp;COMBO 2&nbsp;Trị Giá 300K&nbsp;(tai nghe Piston + Kính CL)&nbsp;khi mua Bảo Hành Vàng&nbsp;<a href="https://hungmobile.vn/chinh-sach-bao-hanh.html#bao-hanh-nokia">(Chi tiết)</a></p>

   <p>- Tặng&nbsp;Ốp lưng Silicon&nbsp;chính hãng (kèm theo hộp)</p>

   <p>- Có Tiếng Việt và hỗ trợ mạng 4G đầy đủ.</p>

   <p>- Máy mới 100%, Hộp Nguyên Seal Niêm Phong của NSX.</p>

   <p>- Hỗ trợ&nbsp;Mua Trả Góp 0%&nbsp;qua thẻ tín dụng.&nbsp;<a href="https://hungmobile.vn/mua-hang-tra-gop/nokia-x7-2018-64gb-ram-6gb-gia-re.html" rel="nofollow" target="_blank">Chi tiết.</a></p>

   <p>​-&nbsp;Giao Hàng&nbsp;COD Toàn Quốc&nbsp;(Nhận hàng và thanh toán&nbsp;tại nhà)&nbsp;<a href="https://hungmobile.vn/huong-dan-mua-hang-tu-xa.html" rel="nofollow" style="text-align: justify;">Xem chi tiết</a></p>

</div>

</div>
<div class="ct-box20">
    <a href="https://hungmobile.vn/nokia-x7-2018-64gb-ram-4gb-gia-re.html"><img src="./index_files/50d004e7d56b35356c7a_5be10a2338c6e_06_11_2018_10_27_31.jpg" alt="" class="img-responsive"></a>
    <div class="box-content">
        <h3 style="font-size:17px;" class="product-name"><a href="https://hungmobile.vn/nokia-x7-2018-64gb-ram-4gb-gia-re.html" class="pro-name">Nokia X7 (2018) 64GB, Ram 4GB mới Nguyên Seal</a></h3>
        <p class="new-price">
            5,690,000đ
        </p>
        <p class="old-price">Giá cũ:
            <span>6,290,000đ</span>
        </p>
    </div>
    <a href="https://hungmobile.vn/nokia-x7-2018-64gb-ram-4gb-gia-re.html" style="display:inline-block">
    </a><div class="box-detail" data-url="https://hungmobile.vn/nokia-x7-2018-64gb-ram-4gb-gia-re.html"><a href="https://hungmobile.vn/nokia-x7-2018-64gb-ram-4gb-gia-re.html" style="display:inline-block">
    </a><a href="https://hungmobile.vn/nokia-x7-2018-64gb-ram-4gb-gia-re.html" class="pro-name">Nokia X7 (2018) 64GB, Ram 4GB mới Nguyên Seal</a>
    <p class="new-price">
        5,690,000đ
    </p>
    <p class="old-price">Giá cũ:
        <span>6,290,000đ</span>
    </p>
    
    <hr>
    <div style="text-align: center;"><span style="font-size:16px"><strong><a href="http://bitly.com/cmsn-hm-23-quan-hoa"><span style="color:rgb(255, 0, 0)">MỪNG SINH NHẬT - GIẬT QUÀ TO</span></a></strong><span style="color:rgb(255, 0, 0)"><strong>:&nbsp;(Áp dụng từ 27/11 - 02/12)</strong></span></span></div>

    <ul style="margin-left:40px">
       <li style="text-align:left">Mua&nbsp;<a href="https://hungmobile.vn/nokia-x7.html">Nokia X7</a>&nbsp;giá chỉ 230K&nbsp;</li>
       <li style="text-align:left">Mua&nbsp;<a href="https://hungmobile.vn/vong-deo-tay-thong-minh-xiaomi-mi-band-3.html">Mi band 3</a>&nbsp;giá chỉ 23K</li>
       <li style="text-align:left">Săn phụ kiện đồng giá từ 23K&nbsp;<em>(duy nhất ngày 02/12)</em></li>
       <li style="text-align:left">Tặng ngay Arun 5600mAh cho CS3: 690 Lê Hồng Phong</li>
   </ul>

   <p style="margin-left:80px">&gt;&gt; Chi tiết xem&nbsp;<em><strong><a href="http://bitly.com/cmsn-hm-23-quan-hoa" rel="nofollow">Tại Đây</a></strong></em></p>

   <hr>
   <p>- Tặng ngay&nbsp;COMBO 1 Trị Giá 250K&nbsp;(gậy Selfie +&nbsp;Kính CL +&nbsp;Thánh Sim 3G)&nbsp;hoặc&nbsp;COMBO 2&nbsp;Trị Giá 300K&nbsp;(tai nghe Piston + Kính CL)&nbsp;khi mua Bảo Hành Vàng&nbsp;<a href="https://hungmobile.vn/chinh-sach-bao-hanh.html#bao-hanh-nokia">(Chi tiết)</a></p>

   <p>- Tặng&nbsp;Ốp lưng Silicon&nbsp;chính hãng (kèm theo hộp)</p>

   <p>- Có Tiếng Việt và hỗ trợ mạng 4G đầy đủ.</p>

   <p>- Máy mới 100%, Hộp Nguyên Seal Niêm Phong của NSX.</p>

   <p>- Hỗ trợ&nbsp;Mua Trả Góp 0%&nbsp;qua thẻ tín dụng.&nbsp;<a href="https://hungmobile.vn/mua-hang-tra-gop/nokia-x6-2018-64gb-ram-6gb-gia-re.html" rel="nofollow" target="_blank">Chi tiết.</a></p>

   <p>​-&nbsp;Giao Hàng&nbsp;COD Toàn Quốc&nbsp;(Nhận hàng và thanh toán&nbsp;tại nhà)&nbsp;<a href="https://hungmobile.vn/huong-dan-mua-hang-tu-xa.html" rel="nofollow" style="text-align: justify;">Xem chi tiết</a></p>

</div>

</div>
<div class="ct-box20">
    <a href="https://hungmobile.vn/samsung-galaxy-s9-han-64gb-cu-fullbox.html"><img src="./index_files/s9_5bc82a0a5db64_18_10_2018_13_36_58.jpg" alt="" class="img-responsive"></a>
    <div class="box-content">
        <h3 style="font-size:17px;" class="product-name"><a href="https://hungmobile.vn/samsung-galaxy-s9-han-64gb-cu-fullbox.html" class="pro-name">Galaxy S9 Hàn 64GB LikeNew Fullbox </a></h3>
        <p class="new-price">
            10,290,000đ
        </p>
        <p class="old-price">Giá cũ:
            <span>11,890,000đ</span>
        </p>
    </div>
    <a href="https://hungmobile.vn/samsung-galaxy-s9-han-64gb-cu-fullbox.html" style="display:inline-block">
    </a><div class="box-detail" data-url="https://hungmobile.vn/samsung-galaxy-s9-han-64gb-cu-fullbox.html"><a href="https://hungmobile.vn/samsung-galaxy-s9-han-64gb-cu-fullbox.html" style="display:inline-block">
    </a><a href="https://hungmobile.vn/samsung-galaxy-s9-han-64gb-cu-fullbox.html" class="pro-name">Galaxy S9 Hàn 64GB LikeNew Fullbox </a>
    <p class="new-price">
        10,290,000đ
    </p>
    <p class="old-price">Giá cũ:
        <span>11,890,000đ</span>
    </p>
    
    <hr>
    <div style="text-align: center;"><span style="font-size:16px"><strong><a href="http://bitly.com/cmsn-hm-23-quan-hoa"><span style="color:rgb(255, 0, 0)">MỪNG SINH NHẬT - GIẬT QUÀ TO</span></a></strong><span style="color:rgb(255, 0, 0)"><strong>:&nbsp;(Áp dụng từ 27/11 - 02/12)</strong></span></span></div>

    <ul style="margin-left:40px">
       <li style="text-align:left">Mua&nbsp;<a href="https://hungmobile.vn/nokia-x7.html">Nokia X7</a>&nbsp;giá chỉ 230K&nbsp;</li>
       <li style="text-align:left">Mua&nbsp;<a href="https://hungmobile.vn/vong-deo-tay-thong-minh-xiaomi-mi-band-3.html">Mi band 3</a>&nbsp;giá chỉ 23K</li>
       <li style="text-align:left">Săn phụ kiện đồng giá từ 23K&nbsp;<em>(duy nhất ngày 02/12)</em></li>
       <li style="text-align:left">Tặng ngay Arun 5600mAh cho CS3: 690 Lê Hồng Phong</li>
   </ul>

   <p style="margin-left:80px">&gt;&gt; Chi tiết xem&nbsp;<em><strong><a href="http://bitly.com/cmsn-hm-23-quan-hoa" rel="nofollow">Tại Đây</a></strong></em></p>

   <p style="text-align:center"><strong><a href="http://khuyenmai.hungmobile.vn/samsung-xach-tay-so-1-viet-nam/" rel="nofollow" target="_blank"><span style="color:rgb(255, 0, 0)"><span style="font-size:16px">SAMSUNG XÁCH TAY SỐ 1 VIỆT NAM</span></span></a></strong></p>

   <p><span style="color:rgb(0, 0, 0); font-family:roboto,robotodraft,helvetica,arial,sans-serif">- Tặng ngay que chọc sim cao cấp trị giá 20.000 VNĐ</span></p>

   <p>-&nbsp;Ưu đãi&nbsp;giảm giá 30%&nbsp;&nbsp;khi mua các phụ kiện chính hãng kèm theo.<br>
    <br>
    <span style="color:rgb(0, 0, 0); font-family:roboto,robotodraft,helvetica,arial,sans-serif">​- TRẢ GÓP LÃI SUẤT 0% qua thẻ tín dụng.&nbsp;<a href="https://hungmobile.vn/mua-hang-tra-gop.html" rel="nofollow" target="_blank">Chi tiết</a>.</span><br>
    <br>
    <span style="color:rgb(0, 0, 0); font-family:roboto,robotodraft,helvetica,arial,sans-serif">​- Giao Hàng COD Toàn Quốc (Nhận hàng và thanh toán tại nhà)&nbsp;<a href="https://hungmobile.vn/huong-dan-mua-hang-tu-xa.html" rel="nofollow">Xem chi tiết</a></span></p>

</div>

</div>
<div class="ct-box20">
    <a href="https://hungmobile.vn/samsung-galaxy-s9-han-64gb-moi-fullbox.html"><img src="./index_files/s9_5bc82eaa7ce0f_18_10_2018_13_56_42.jpg" alt="" class="img-responsive"></a>
    <div class="box-content">
        <h3 style="font-size:17px;" class="product-name"><a href="https://hungmobile.vn/samsung-galaxy-s9-han-64gb-moi-fullbox.html" class="pro-name">Galaxy S9 Hàn 64GB New Fullbox (ĐBH)</a></h3>
        <p class="new-price">
            10,790,000đ
        </p>
        <p class="old-price">Giá cũ:
            <span>11,890,000đ</span>
        </p>
    </div>
    <a href="https://hungmobile.vn/samsung-galaxy-s9-han-64gb-moi-fullbox.html" style="display:inline-block">
    </a><div class="box-detail" data-url="https://hungmobile.vn/samsung-galaxy-s9-han-64gb-moi-fullbox.html"><a href="https://hungmobile.vn/samsung-galaxy-s9-han-64gb-moi-fullbox.html" style="display:inline-block">
    </a><a href="https://hungmobile.vn/samsung-galaxy-s9-han-64gb-moi-fullbox.html" class="pro-name">Galaxy S9 Hàn 64GB New Fullbox (ĐBH)</a>
    <p class="new-price">
        10,790,000đ
    </p>
    <p class="old-price">Giá cũ:
        <span>11,890,000đ</span>
    </p>
    
    <hr>
    <div style="text-align: center;"><span style="font-size:16px"><strong><a href="http://bitly.com/cmsn-hm-23-quan-hoa"><span style="color:rgb(255, 0, 0)">MỪNG SINH NHẬT - GIẬT QUÀ TO</span></a></strong><span style="color:rgb(255, 0, 0)"><strong>:&nbsp;(Áp dụng từ 27/11 - 02/12)</strong></span></span></div>

    <ul style="margin-left:40px">
       <li style="text-align:left">Mua&nbsp;<a href="https://hungmobile.vn/nokia-x7.html">Nokia X7</a>&nbsp;giá chỉ 230K&nbsp;</li>
       <li style="text-align:left">Mua&nbsp;<a href="https://hungmobile.vn/vong-deo-tay-thong-minh-xiaomi-mi-band-3.html">Mi band 3</a>&nbsp;giá chỉ 23K</li>
       <li style="text-align:left">Săn phụ kiện đồng giá từ 23K&nbsp;<em>(duy nhất ngày 02/12)</em></li>
       <li style="text-align:left">Tặng ngay Arun 5600mAh cho CS3: 690 Lê Hồng Phong</li>
   </ul>

   <p style="margin-left:80px">&gt;&gt; Chi tiết xem&nbsp;<em><strong><a href="http://bitly.com/cmsn-hm-23-quan-hoa" rel="nofollow">Tại Đây</a></strong></em></p>

   <p style="text-align:center"><strong><a href="http://khuyenmai.hungmobile.vn/samsung-xach-tay-so-1-viet-nam/" rel="nofollow" target="_blank"><span style="color:rgb(255, 0, 0)"><span style="font-size:16px">SAMSUNG XÁCH TAY SỐ 1 VIỆT NAM</span></span></a></strong></p>

   <p><span style="color:rgb(0, 0, 0); font-family:roboto,robotodraft,helvetica,arial,sans-serif">- Tặng ngay que chọc sim cao cấp trị giá 20.000 VNĐ</span></p>

   <p>-&nbsp;Ưu đãi&nbsp;giảm giá 30%&nbsp;&nbsp;khi mua các phụ kiện chính hãng kèm theo.<br>
    <br>
    <span style="color:rgb(0, 0, 0); font-family:roboto,robotodraft,helvetica,arial,sans-serif">​- TRẢ GÓP LÃI SUẤT 0% qua thẻ tín dụng.&nbsp;<a href="https://hungmobile.vn/mua-hang-tra-gop.html" rel="nofollow" target="_blank">Chi tiết</a>.</span><br>
    <br>
    <span style="color:rgb(0, 0, 0); font-family:roboto,robotodraft,helvetica,arial,sans-serif">​- Giao Hàng COD Toàn Quốc (Nhận hàng và thanh toán tại nhà)&nbsp;<a href="https://hungmobile.vn/huong-dan-mua-hang-tu-xa.html" rel="nofollow">Xem chi tiết</a></span></p>

</div>

</div>
<div class="ct-box20">
    <a href="https://hungmobile.vn/samsung-galaxy-s9-plus-han-64gb-moi-fullbox.html"><img src="./index_files/s9+_5bc7ef32f2ff2_18_10_2018_09_25_54.jpg" alt="" class="img-responsive"></a>
    <div class="box-content">
        <h3 style="font-size:17px;" class="product-name"><a href="https://hungmobile.vn/samsung-galaxy-s9-plus-han-64gb-moi-fullbox.html" class="pro-name">Galaxy S9 Plus Hàn 64GB New Fullbox (ĐBH)</a></h3>
        <p class="new-price">
            12,190,000đ
        </p>
        <p class="old-price">Giá cũ:
            <span>13,850,000đ</span>
        </p>
    </div>
    <a href="https://hungmobile.vn/samsung-galaxy-s9-plus-han-64gb-moi-fullbox.html" style="display:inline-block">
    </a><div class="box-detail" data-url="https://hungmobile.vn/samsung-galaxy-s9-plus-han-64gb-moi-fullbox.html"><a href="https://hungmobile.vn/samsung-galaxy-s9-plus-han-64gb-moi-fullbox.html" style="display:inline-block">
    </a><a href="https://hungmobile.vn/samsung-galaxy-s9-plus-han-64gb-moi-fullbox.html" class="pro-name">Galaxy S9 Plus Hàn 64GB New Fullbox (ĐBH)</a>
    <p class="new-price">
        12,190,000đ
    </p>
    <p class="old-price">Giá cũ:
        <span>13,850,000đ</span>
    </p>
    
    <hr>
    <div style="text-align: center;"><span style="font-size:16px"><strong><a href="http://bitly.com/cmsn-hm-23-quan-hoa"><span style="color:rgb(255, 0, 0)">MỪNG SINH NHẬT - GIẬT QUÀ TO</span></a></strong><span style="color:rgb(255, 0, 0)"><strong>:&nbsp;(Áp dụng từ 27/11 - 02/12)</strong></span></span></div>

    <ul style="margin-left:40px">
       <li style="text-align:left">Mua&nbsp;<a href="https://hungmobile.vn/nokia-x7.html">Nokia X7</a>&nbsp;giá chỉ 230K&nbsp;</li>
       <li style="text-align:left">Mua&nbsp;<a href="https://hungmobile.vn/vong-deo-tay-thong-minh-xiaomi-mi-band-3.html">Mi band 3</a>&nbsp;giá chỉ 23K</li>
       <li style="text-align:left">Săn phụ kiện đồng giá từ 23K&nbsp;<em>(duy nhất ngày 02/12)</em></li>
       <li style="text-align:left">Tặng ngay Arun 5600mAh cho CS3: 690 Lê Hồng Phong</li>
   </ul>

   <p style="margin-left:80px">&gt;&gt; Chi tiết xem&nbsp;<em><strong><a href="http://bitly.com/cmsn-hm-23-quan-hoa" rel="nofollow">Tại Đây</a></strong></em></p>

   <p style="text-align:center"><strong><a href="http://khuyenmai.hungmobile.vn/samsung-xach-tay-so-1-viet-nam/" rel="nofollow" target="_blank"><span style="color:rgb(255, 0, 0)"><span style="font-size:16px">SAMSUNG XÁCH TAY SỐ 1 VIỆT NAM</span></span></a></strong></p>

   <p><span style="color:rgb(0, 0, 0); font-family:roboto,robotodraft,helvetica,arial,sans-serif">- Tặng ngay que chọc sim cao cấp trị giá 20.000 VNĐ</span><br>
    <br>
    <span style="color:rgb(0, 0, 0); font-family:roboto,robotodraft,helvetica,arial,sans-serif">​- TRẢ GÓP LÃI SUẤT 0% qua thẻ tín dụng.&nbsp;<a href="https://hungmobile.vn/mua-hang-tra-gop.html" rel="nofollow" target="_blank">Chi tiết</a>.</span><br>
    <br>
    <span style="color:rgb(0, 0, 0); font-family:roboto,robotodraft,helvetica,arial,sans-serif">​- Giao Hàng COD Toàn Quốc (Nhận hàng và thanh toán tại nhà)&nbsp;<a href="https://hungmobile.vn/huong-dan-mua-hang-tu-xa.html" rel="nofollow">Xem chi tiết</a></span></p>

</div>

</div>
<div class="ct-box20">
    <a href="https://hungmobile.vn/samsung-galaxy-s9-han-64gb-gia-re.html"><img src="./index_files/s9nho_5bc3f83fd5fc1_15_10_2018_09_15_27.jpg" alt="" class="img-responsive"></a>
    <div class="box-content">
        <h3 style="font-size:17px;" class="product-name"><a href="https://hungmobile.vn/samsung-galaxy-s9-han-64gb-gia-re.html" class="pro-name">Samsung Galaxy S9 Hàn 64GB New Fullbox</a></h3>
        <p class="new-price">
            11,490,000đ
        </p>
        <p class="old-price">Giá cũ:
            <span>12,590,000đ</span>
        </p>
    </div>
    <a href="https://hungmobile.vn/samsung-galaxy-s9-han-64gb-gia-re.html" style="display:inline-block">
    </a><div class="box-detail" data-url="https://hungmobile.vn/samsung-galaxy-s9-han-64gb-gia-re.html"><a href="https://hungmobile.vn/samsung-galaxy-s9-han-64gb-gia-re.html" style="display:inline-block">
    </a><a href="https://hungmobile.vn/samsung-galaxy-s9-han-64gb-gia-re.html" class="pro-name">Samsung Galaxy S9 Hàn 64GB New Fullbox</a>
    <p class="new-price">
        11,490,000đ
    </p>
    <p class="old-price">Giá cũ:
        <span>12,590,000đ</span>
    </p>
    
    <hr>
    <div style="text-align: center;"><span style="font-size:16px"><strong><a href="http://bitly.com/cmsn-hm-23-quan-hoa"><span style="color:rgb(255, 0, 0)">MỪNG SINH NHẬT - GIẬT QUÀ TO</span></a></strong><span style="color:rgb(255, 0, 0)"><strong>:&nbsp;(Áp dụng từ 27/11 - 02/12)</strong></span></span></div>

    <ul style="margin-left:40px">
       <li style="text-align:left">Mua&nbsp;<a href="https://hungmobile.vn/nokia-x7.html">Nokia X7</a>&nbsp;giá chỉ 230K&nbsp;</li>
       <li style="text-align:left">Mua&nbsp;<a href="https://hungmobile.vn/vong-deo-tay-thong-minh-xiaomi-mi-band-3.html">Mi band 3</a>&nbsp;giá chỉ 23K</li>
       <li style="text-align:left">Săn phụ kiện đồng giá từ 23K&nbsp;<em>(duy nhất ngày 02/12)</em></li>
       <li style="text-align:left">Tặng ngay Arun 5600mAh cho CS3: 690 Lê Hồng Phong</li>
   </ul>

   <p style="margin-left:80px">&gt;&gt; Chi tiết xem&nbsp;<em><strong><a href="http://bitly.com/cmsn-hm-23-quan-hoa" rel="nofollow">Tại Đây</a></strong></em></p>

   <p style="text-align:center"><strong><a href="http://khuyenmai.hungmobile.vn/samsung-xach-tay-so-1-viet-nam/" rel="nofollow" target="_blank"><span style="color:rgb(255, 0, 0)"><span style="font-size:16px">SAMSUNG XÁCH TAY SỐ 1 VIỆT NAM</span></span></a></strong></p>

   <p>-&nbsp;Ưu đãi&nbsp;giảm giá 30%&nbsp;&nbsp;khi mua các phụ kiện chính hãng kèm theo.</p>

   <div>
    <p>- Máy có đầy đủ hộp và phụ kiện chính hãng: Sạc nhanh, Cáp USB, Tai nghe, Ốp lưng, que lấy sim, Sách HD.</p>
</div>

<p style="text-align:justify">​-&nbsp;TRẢ GÓP LÃI SUẤT 0%&nbsp;qua thẻ tín dụng.</p>

<p style="text-align:justify">​-&nbsp;Giao Hàng&nbsp;COD Toàn Quốc&nbsp;(Nhận hàng và thanh toán&nbsp;tại nhà)&nbsp;<a href="https://hungmobile.vn/huong-dan-mua-hang-tu-xa.html" rel="nofollow">Xem chi tiết</a></p>

</div>

</div>
<div class="ct-box20">
    <a href="https://hungmobile.vn/xiaomi-redmi-note-5-pro-ram-128gb-6gb-xach-tay-gia-re.html"><img src="./index_files/1724de685bd3bb8de2c2_5bf513340fe1f_21_11_2018_15_11_32.jpg" alt="" class="img-responsive"></a>
    <div class="box-content">
        <h3 style="font-size:17px;" class="product-name"><a href="https://hungmobile.vn/xiaomi-redmi-note-5-pro-ram-128gb-6gb-xach-tay-gia-re.html" class="pro-name">Xiaomi Redmi Note 5 Pro 128GB (Ram 6GB) Mới Nguyên Seal</a></h3>
        <p class="new-price">
            5,390,000đ
        </p>
        <p class="old-price">Giá cũ:
            <span>5,790,000đ</span>
        </p>
    </div>
    <a href="https://hungmobile.vn/xiaomi-redmi-note-5-pro-ram-128gb-6gb-xach-tay-gia-re.html" style="display:inline-block">
    </a><div class="box-detail" data-url="https://hungmobile.vn/xiaomi-redmi-note-5-pro-ram-128gb-6gb-xach-tay-gia-re.html"><a href="https://hungmobile.vn/xiaomi-redmi-note-5-pro-ram-128gb-6gb-xach-tay-gia-re.html" style="display:inline-block">
    </a><a href="https://hungmobile.vn/xiaomi-redmi-note-5-pro-ram-128gb-6gb-xach-tay-gia-re.html" class="pro-name">Xiaomi Redmi Note 5 Pro 128GB (Ram 6GB) Mới Nguyên Seal</a>
    <p class="new-price">
        5,390,000đ
    </p>
    <p class="old-price">Giá cũ:
        <span>5,790,000đ</span>
    </p>
    
    <hr>
    <div style="text-align: center;">
        <div><span style="font-size:16px"><strong><a href="http://bitly.com/cmsn-hm-23-quan-hoa"><span style="color:rgb(255, 0, 0)">MỪNG SINH NHẬT - GIẬT QUÀ TO</span></a></strong><span style="color:rgb(255, 0, 0)"><strong>:&nbsp;(Áp dụng từ 27/11 - 02/12)</strong></span></span></div>

        <ul style="margin-left:40px">
           <li style="text-align:left">Mua&nbsp;<a href="https://hungmobile.vn/nokia-x7.html">Nokia X7</a>&nbsp;giá chỉ 230K&nbsp;</li>
           <li style="text-align:left">Mua&nbsp;<a href="https://hungmobile.vn/vong-deo-tay-thong-minh-xiaomi-mi-band-3.html">Mi band 3</a>&nbsp;giá chỉ 23K</li>
           <li style="text-align:left">Săn phụ kiện đồng giá từ 23K&nbsp;<em>(duy nhất ngày 02/12)</em></li>
           <li style="text-align:left">Tặng ngay Arun 5600mAh cho CS3: 690 Lê Hồng Phong</li>
       </ul>

       <p style="margin-left:80px; text-align:left">&gt;&gt; Chi tiết xem&nbsp;<em><strong><a href="http://bitly.com/cmsn-hm-23-quan-hoa" rel="nofollow">Tại Đây</a></strong></em></p>

       <hr>
       <p style="text-align: left;">- Tặng ngay&nbsp;COMBO 1 Trị Giá 250K&nbsp;(gậy Selfie +&nbsp;Kính CL +&nbsp;Thánh Sim 3G)&nbsp;hoặc&nbsp;COMBO 2&nbsp;Trị Giá 300K&nbsp;(tai nghe Piston + Kính CL)&nbsp;khi mua Bảo Hành Vàng&nbsp;<a href="https://hungmobile.vn/chinh-sach-bao-hanh.html#bao-hanh-xiaomi" rel="nofollow">(Chi tiết)</a></p>
   </div>

   <p style="text-align:justify">- Tặng&nbsp;Ốp Lưng Slicon&nbsp;trong suốt chính hãng (kèm theo hộp)</p>

   <p style="text-align:justify">-&nbsp;Giảm Giá 30%&nbsp;khi mua phụ kiện kèm theo</p>

   <p style="text-align:justify">- Hỗ trợ&nbsp;Mua Trả Góp 0%&nbsp;qua thẻ tín dụng.</p>

   <p style="text-align:justify">-&nbsp;Giao Hàng&nbsp;COD Toàn Quốc&nbsp;(Nhận hàng và thanh toán tại nhà)&nbsp;<a href="https://hungmobile.vn/huong-dan-mua-hang-tu-xa.html" rel="nofollow">Xem chi tiết</a></p>

</div>

</div>
<div class="ct-box20">
    <a href="https://hungmobile.vn/samsung-galaxy-s9-plus-my-cu-gia-re.html"><img src="./index_files/s9_5b25cd03852a7_17_06_2018_09_52_51_5bb6c46397fba_05_10_2018_08_54_43.jpg" alt="" class="img-responsive"></a>
    <div class="box-content">
        <h3 style="font-size:17px;" class="product-name"><a href="https://hungmobile.vn/samsung-galaxy-s9-plus-my-cu-gia-re.html" class="pro-name">Galaxy S9 Plus Mỹ Likenew (Đẹp 99%)</a></h3>
        <p class="new-price">
            10,990,000đ
        </p>
        <p class="old-price">Giá cũ:
            <span>12,390,000đ</span>
        </p>
    </div>
    <a href="https://hungmobile.vn/samsung-galaxy-s9-plus-my-cu-gia-re.html" style="display:inline-block">
    </a><div class="box-detail" data-url="https://hungmobile.vn/samsung-galaxy-s9-plus-my-cu-gia-re.html"><a href="https://hungmobile.vn/samsung-galaxy-s9-plus-my-cu-gia-re.html" style="display:inline-block">
    </a><a href="https://hungmobile.vn/samsung-galaxy-s9-plus-my-cu-gia-re.html" class="pro-name">Galaxy S9 Plus Mỹ Likenew (Đẹp 99%)</a>
    <p class="new-price">
        10,990,000đ
    </p>
    <p class="old-price">Giá cũ:
        <span>12,390,000đ</span>
    </p>
    
    <hr>
    <div>
        <div style="text-align: center;"><span style="font-size:16px"><strong><a href="http://bitly.com/cmsn-hm-23-quan-hoa"><span style="color:rgb(255, 0, 0)">MỪNG SINH NHẬT - GIẬT QUÀ TO</span></a></strong><span style="color:rgb(255, 0, 0)"><strong>:&nbsp;(Áp dụng từ 27/11 - 02/12)</strong></span></span></div>

        <ul style="margin-left:40px">
           <li style="text-align:left">Mua&nbsp;<a href="https://hungmobile.vn/nokia-x7.html">Nokia X7</a>&nbsp;giá chỉ 230K&nbsp;</li>
           <li style="text-align:left">Mua&nbsp;<a href="https://hungmobile.vn/vong-deo-tay-thong-minh-xiaomi-mi-band-3.html">Mi band 3</a>&nbsp;giá chỉ 23K</li>
           <li style="text-align:left">Săn phụ kiện đồng giá từ 23K&nbsp;<em>(duy nhất ngày 02/12)</em></li>
           <li style="text-align:left">Tặng ngay Arun 5600mAh cho CS3: 690 Lê Hồng Phong</li>
       </ul>

       <p style="margin-left:80px">&gt;&gt; Chi tiết xem&nbsp;<em><strong><a href="http://bitly.com/cmsn-hm-23-quan-hoa" rel="nofollow">Tại Đây</a></strong></em></p>

       <p style="text-align:center"><strong><a href="http://khuyenmai.hungmobile.vn/samsung-xach-tay-so-1-viet-nam/" rel="nofollow" target="_blank"><span style="color:rgb(255, 0, 0)"><span style="font-size:16px">SAMSUNG XÁCH TAY SỐ 1 VIỆT NAM</span></span></a></strong></p>

       <p>-&nbsp;GÓI&nbsp;KM 1:&nbsp;Sạc + cáp Samsung&nbsp;chính hãng trị giá&nbsp;250.000 VNĐ, tai nghe Samsung J7&nbsp;trị giá&nbsp;100.000 VNĐ</p>
   </div>

   <p>-&nbsp;GÓI&nbsp;KM 2:&nbsp;Sạc + cáp Samsung&nbsp;chính hãng trị giá&nbsp;250.000 VNĐ, gậy selfie mini trị giá&nbsp;150.000 VNĐ</p>

   <p>- Tặng ngay que chọc sim cao cấp trị giá&nbsp;20.000 VNĐ</p>

   <p>​-&nbsp;TRẢ GÓP LÃI SUẤT 0%&nbsp;qua thẻ tín dụng.&nbsp;<a href="https://hungmobile.vn/mua-hang-tra-gop/samsung-galaxy-s7-edge-likenew-thi-truong-my.html" rel="nofollow">Chi tiết.</a></p>

   <p>​-&nbsp;Giao Hàng&nbsp;COD Toàn Quốc&nbsp;(Nhận hàng và thanh toán&nbsp;tại nhà)&nbsp;<a href="https://hungmobile.vn/huong-dan-mua-hang-tu-xa.html" rel="nofollow" style="text-align: justify;">Xem chi tiết</a></p>

</div>

</div>
<div class="ct-box20">
    <a href="https://hungmobile.vn/xiaomi-redmi-note-6-pro-32gb-chinh-hang-dgw.html"><img src="./index_files/redmi-note-6pro_5bb483f3154eb_03_10_2018_15_55_15.jpg" alt="" class="img-responsive"></a>
    <div class="box-content">
        <h3 style="font-size:17px;" class="product-name"><a href="https://hungmobile.vn/xiaomi-redmi-note-6-pro-32gb-chinh-hang-dgw.html" class="pro-name">Xiaomi Redmi Note 6 Pro (32GB) Chính Hãng DGW</a></h3>
        <p class="new-price">
            4,750,000đ
        </p>
        <p class="old-price">Giá cũ:
            <span>5,290,000đ</span>
        </p>
    </div>
    <a href="https://hungmobile.vn/xiaomi-redmi-note-6-pro-32gb-chinh-hang-dgw.html" style="display:inline-block">
    </a><div class="box-detail" data-url="https://hungmobile.vn/xiaomi-redmi-note-6-pro-32gb-chinh-hang-dgw.html"><a href="https://hungmobile.vn/xiaomi-redmi-note-6-pro-32gb-chinh-hang-dgw.html" style="display:inline-block">
    </a><a href="https://hungmobile.vn/xiaomi-redmi-note-6-pro-32gb-chinh-hang-dgw.html" class="pro-name">Xiaomi Redmi Note 6 Pro (32GB) Chính Hãng DGW</a>
    <p class="new-price">
        4,750,000đ
    </p>
    <p class="old-price">Giá cũ:
        <span>5,290,000đ</span>
    </p>
    
    <hr>
    <p style="text-align:center"><strong><span style="color:rgb(255, 0, 0)"><span style="font-size:16px">CHÍNH HÃNG DGW - CÓ SẴN TIẾNG VIỆT</span></span></strong></p>

    <p style="text-align:justify"><span style="color:rgb(0, 0, 0)">- Tặng&nbsp;Ốp Lưng Slicon&nbsp;trong suốt chính hãng (kèm theo hộp)</span></p>

    <p style="text-align:justify"><span style="color:rgb(0, 0, 0)">-&nbsp;Giảm Giá 30%&nbsp;khi mua phụ kiện kèm theo</span></p>

    <p style="text-align:justify"><span style="color:rgb(0, 0, 0)">- Hỗ trợ&nbsp;Mua Trả Góp 0%&nbsp;qua thẻ tín dụng.</span></p>

    <p style="text-align:justify">-&nbsp;Giao Hàng&nbsp;COD Toàn Quốc&nbsp;(Nhận hàng và thanh toán tại nhà)&nbsp;<a href="https://hungmobile.vn/huong-dan-mua-hang-tu-xa.html" rel="nofollow">Xem chi tiết</a></p>

</div>

</div>
<div class="ct-box20">
    <a href="https://hungmobile.vn/xiaomi-mi-8-lite-64gb-ram-4gb-gia-re.html"><img src="./index_files/1e1c70c373d2938ccac3_5bb2cc17190e6_02_10_2018_08_38_31.jpg" alt="" class="img-responsive"></a>
    <div class="box-content">
        <h3 style="font-size:17px;" class="product-name"><a href="https://hungmobile.vn/xiaomi-mi-8-lite-64gb-ram-4gb-gia-re.html" class="pro-name">Xiaomi Mi 8 Lite 64GB (Ram 4GB) Mới Nguyên Seal</a></h3>
        <p class="new-price">
            4,850,000đ
        </p>
        <p class="old-price">Giá cũ:
            <span>6,450,000đ</span>
        </p>
    </div>
    <a href="https://hungmobile.vn/xiaomi-mi-8-lite-64gb-ram-4gb-gia-re.html" style="display:inline-block">
    </a><div class="box-detail" data-url="https://hungmobile.vn/xiaomi-mi-8-lite-64gb-ram-4gb-gia-re.html"><a href="https://hungmobile.vn/xiaomi-mi-8-lite-64gb-ram-4gb-gia-re.html" style="display:inline-block">
    </a><a href="https://hungmobile.vn/xiaomi-mi-8-lite-64gb-ram-4gb-gia-re.html" class="pro-name">Xiaomi Mi 8 Lite 64GB (Ram 4GB) Mới Nguyên Seal</a>
    <p class="new-price">
        4,850,000đ
    </p>
    <p class="old-price">Giá cũ:
        <span>6,450,000đ</span>
    </p>
    
    <hr>
    <p style="text-align:center"><span style="font-size:16px"><strong><a href="http://bitly.com/cmsn-hm-23-quan-hoa"><span style="color:rgb(255, 0, 0)">MỪNG SINH NHẬT - GIẬT QUÀ TO</span></a></strong><span style="color:rgb(255, 0, 0)"><strong>:&nbsp;(Áp dụng từ 27/11 - 02/12)</strong></span></span></p>

    <ul style="margin-left:40px">
       <li style="text-align:left">Mua&nbsp;<a href="https://hungmobile.vn/nokia-x7.html">Nokia X7</a>&nbsp;giá chỉ 230K&nbsp;</li>
       <li style="text-align:left">Mua&nbsp;<a href="https://hungmobile.vn/vong-deo-tay-thong-minh-xiaomi-mi-band-3.html">Mi band 3</a>&nbsp;giá chỉ 23K</li>
       <li style="text-align:left">Săn phụ kiện đồng giá từ 23K&nbsp;<em>(duy nhất ngày 02/12)</em></li>
       <li style="text-align:left">Tặng ngay Arun 5600mAh cho CS3: 690 Lê Hồng Phong</li>
   </ul>

   <p style="margin-left:80px">&gt;&gt; Chi tiết xem&nbsp;<em><strong><a href="http://bitly.com/cmsn-hm-23-quan-hoa" rel="nofollow">Tại Đây</a></strong></em></p>

   <hr>
   <p>- Tặng ngay&nbsp;COMBO 1 Trị Giá 250K&nbsp;(gậy Selfie +&nbsp;Iring +&nbsp;Thánh Sim 3G)&nbsp;hoặc&nbsp;COMBO 2&nbsp;Trị Giá 300K&nbsp;(tai nghe Piston + Iring)&nbsp;khi mua Bảo Hành Vàng&nbsp;<a href="https://hungmobile.vn/chinh-sach-bao-hanh.html#bao-hanh-xiaomi" rel="nofollow">(Chi tiết)</a></p>

   <p style="text-align:justify">- Tặng&nbsp;Ốp Lưng Slicon&nbsp;trong suốt chính hãng (kèm theo hộp)</p>

   <p style="text-align:justify">-&nbsp;Giảm Giá 30%&nbsp;khi mua phụ kiện kèm theo</p>

   <p style="text-align:justify">- Hỗ trợ&nbsp;Mua Trả Góp 0%&nbsp;qua thẻ tín dụng.</p>

   <p style="text-align:justify">-&nbsp;Giao Hàng&nbsp;COD Toàn Quốc&nbsp;(Nhận hàng và thanh toán tại nhà)&nbsp;<a href="https://hungmobile.vn/huong-dan-mua-hang-tu-xa.html" rel="nofollow">Xem chi tiết</a></p>

   <p style="text-align:center">&nbsp;</p>

</div>

</div>
<div class="ct-box20">
    <a href="https://hungmobile.vn/xiaomi-qin-ai-1s-gia-re.html"><img src="./index_files/qin-ai-1s(01)_5ba9f604ce8fc_25_09_2018_15_47_00.jpg" alt="" class="img-responsive"></a>
    <div class="box-content">
        <h3 style="font-size:17px;" class="product-name"><a href="https://hungmobile.vn/xiaomi-qin-ai-1s-gia-re.html" class="pro-name">Xiaomi Qin AI 1s Mới 100% Nguyên Seal</a></h3>
        <p class="new-price">
            1,390,000đ
        </p>
        <p class="old-price">Giá cũ:
            <span>1,790,000đ</span>
        </p>
    </div>
    <a href="https://hungmobile.vn/xiaomi-qin-ai-1s-gia-re.html" style="display:inline-block">
    </a><div class="box-detail" data-url="https://hungmobile.vn/xiaomi-qin-ai-1s-gia-re.html"><a href="https://hungmobile.vn/xiaomi-qin-ai-1s-gia-re.html" style="display:inline-block">
    </a><a href="https://hungmobile.vn/xiaomi-qin-ai-1s-gia-re.html" class="pro-name">Xiaomi Qin AI 1s Mới 100% Nguyên Seal</a>
    <p class="new-price">
        1,390,000đ
    </p>
    <p class="old-price">Giá cũ:
        <span>1,790,000đ</span>
    </p>
    
    <hr>
    <p>- Tặng ngay&nbsp;Thánh sim 4G trị giá 50K&nbsp;khi mua Bảo Hành Vàng&nbsp;<a href="https://hungmobile.vn/chinh-sach-bao-hanh.html#bao-hanh-xiaomi" rel="nofollow" style="text-align: justify;">(Chi tiết)</a></p>

    <p style="text-align:justify">-&nbsp;Giảm Giá 30%&nbsp;khi mua phụ kiện kèm theo</p>

    <p style="text-align:justify">- Hỗ trợ&nbsp;Mua Trả Góp 0%&nbsp;qua thẻ tín dụng.</p>

    <p style="text-align:justify">-&nbsp;Giao Hàng&nbsp;COD Toàn Quốc&nbsp;(Nhận hàng và thanh toán tại nhà)&nbsp;<a href="https://hungmobile.vn/huong-dan-mua-hang-tu-xa.html" rel="nofollow">Xem chi tiết</a></p>

</div>

</div>
<div class="ct-box20">
    <a href="https://hungmobile.vn/xiaomi-mi-8-pro-128gb-ram-6gb-gia-re.html"><img src="./index_files/mi-8pro_5ba8be981256c_24_09_2018_17_38_16.jpg" alt="" class="img-responsive"></a>
    <div class="box-content">
        <h3 style="font-size:17px;" class="product-name"><a href="https://hungmobile.vn/xiaomi-mi-8-pro-128gb-ram-6gb-gia-re.html" class="pro-name">Xiaomi Mi 8 Pro 128GB (Ram 6GB) Mới Nguyên Seal</a></h3>
        <p class="new-price">
            9,950,000đ
        </p>
        <p class="old-price">Giá cũ:
            <span>11,990,000đ</span>
        </p>
    </div>
    <a href="https://hungmobile.vn/xiaomi-mi-8-pro-128gb-ram-6gb-gia-re.html" style="display:inline-block">
    </a><div class="box-detail" data-url="https://hungmobile.vn/xiaomi-mi-8-pro-128gb-ram-6gb-gia-re.html"><a href="https://hungmobile.vn/xiaomi-mi-8-pro-128gb-ram-6gb-gia-re.html" style="display:inline-block">
    </a><a href="https://hungmobile.vn/xiaomi-mi-8-pro-128gb-ram-6gb-gia-re.html" class="pro-name">Xiaomi Mi 8 Pro 128GB (Ram 6GB) Mới Nguyên Seal</a>
    <p class="new-price">
        9,950,000đ
    </p>
    <p class="old-price">Giá cũ:
        <span>11,990,000đ</span>
    </p>
    
    <hr>
    <div style="text-align: center;"><span style="font-size:16px"><strong><a href="http://bitly.com/cmsn-hm-23-quan-hoa"><span style="color:rgb(255, 0, 0)">MỪNG SINH NHẬT - GIẬT QUÀ TO</span></a></strong><span style="color:rgb(255, 0, 0)"><strong>:&nbsp;(Áp dụng từ 27/11 - 02/12)</strong></span></span></div>

    <ul style="margin-left:40px">
       <li style="text-align:left">Mua&nbsp;<a href="https://hungmobile.vn/nokia-x7.html">Nokia X7</a>&nbsp;giá chỉ 230K&nbsp;</li>
       <li style="text-align:left">Mua&nbsp;<a href="https://hungmobile.vn/vong-deo-tay-thong-minh-xiaomi-mi-band-3.html">Mi band 3</a>&nbsp;giá chỉ 23K</li>
       <li style="text-align:left">Săn phụ kiện đồng giá từ 23K&nbsp;<em>(duy nhất ngày 02/12)</em></li>
       <li style="text-align:left">Tặng ngay Arun 5600mAh cho CS3: 690 Lê Hồng Phong</li>
   </ul>

   <p style="margin-left:80px">&gt;&gt; Chi tiết xem&nbsp;<em><strong><a href="http://bitly.com/cmsn-hm-23-quan-hoa" rel="nofollow">Tại Đây</a></strong></em></p>

   <hr>
   <p>- Tặng ngay&nbsp;COMBO 1 Trị Giá 250K&nbsp;(gậy Selfie +&nbsp;Iring +&nbsp;Thánh Sim 3G)&nbsp;hoặc&nbsp;COMBO 2&nbsp;Trị Giá 300K&nbsp;(tai nghe Piston + Iring)&nbsp;khi mua Bảo Hành Vàng&nbsp;<a href="https://hungmobile.vn/chinh-sach-bao-hanh.html#bao-hanh-xiaomi" rel="nofollow">(Chi tiết)</a></p>

   <p style="text-align:justify">- Tặng&nbsp;Ốp Lưng Slicon&nbsp;trong suốt chính hãng (kèm theo hộp)</p>

   <p style="text-align:justify">-&nbsp;Giảm Giá 30%&nbsp;khi mua phụ kiện kèm theo</p>

   <p style="text-align:justify">- Hỗ trợ&nbsp;Mua Trả Góp 0%&nbsp;qua thẻ tín dụng.</p>

   <p style="text-align:justify">-&nbsp;Giao Hàng&nbsp;COD Toàn Quốc&nbsp;(Nhận hàng và thanh toán tại nhà)&nbsp;<a href="https://hungmobile.vn/huong-dan-mua-hang-tu-xa.html" rel="nofollow">Xem chi tiết</a></p>

</div>

</div>
<div class="ct-box20">
    <a href="https://hungmobile.vn/iphone-se-32gb-cu-gia-re.html"><img src="./index_files/se_nhỏ_(1)_5bdc88095ac31_03_11_2018_00_23_21.jpg" alt="" class="img-responsive"></a>
    <div class="box-content">
        <h3 style="font-size:17px;" class="product-name"><a href="https://hungmobile.vn/iphone-se-32gb-cu-gia-re.html" class="pro-name">iPhone SE 32GB Quốc Tế Likenew (Đẹp 99%)</a></h3>
        <p class="new-price">
            3,490,000đ
        </p>
        <p class="old-price">Giá cũ:
            <span>4,250,000đ</span>
        </p>
    </div>
    <a href="https://hungmobile.vn/iphone-se-32gb-cu-gia-re.html" style="display:inline-block">
    </a><div class="box-detail" data-url="https://hungmobile.vn/iphone-se-32gb-cu-gia-re.html"><a href="https://hungmobile.vn/iphone-se-32gb-cu-gia-re.html" style="display:inline-block">
    </a><a href="https://hungmobile.vn/iphone-se-32gb-cu-gia-re.html" class="pro-name">iPhone SE 32GB Quốc Tế Likenew (Đẹp 99%)</a>
    <p class="new-price">
        3,490,000đ
    </p>
    <p class="old-price">Giá cũ:
        <span>4,250,000đ</span>
    </p>
    
    <hr>
    <div>
        <div style="text-align: center;"><span style="font-size:16px"><strong><a href="http://bitly.com/cmsn-hm-23-quan-hoa"><span style="color:rgb(255, 0, 0)">MỪNG SINH NHẬT - GIẬT QUÀ TO</span></a></strong><span style="color:rgb(255, 0, 0)"><strong>:&nbsp;(Áp dụng từ 27/11 - 02/12)</strong></span></span></div>

        <ul style="margin-left:40px">
           <li style="text-align:left">Mua&nbsp;<a href="https://hungmobile.vn/nokia-x7.html">Nokia X7</a>&nbsp;giá chỉ 230K&nbsp;</li>
           <li style="text-align:left">Mua&nbsp;<a href="https://hungmobile.vn/vong-deo-tay-thong-minh-xiaomi-mi-band-3.html">Mi band 3</a>&nbsp;giá chỉ 23K</li>
           <li style="text-align:left">Săn phụ kiện đồng giá từ 23K&nbsp;<em>(duy nhất ngày 02/12)</em></li>
           <li style="text-align:left">Tặng ngay Arun 5600mAh cho CS3: 690 Lê Hồng Phong</li>
       </ul>

       <p style="margin-left:80px">&gt;&gt; Chi tiết xem&nbsp;<em><strong><a href="http://bitly.com/cmsn-hm-23-quan-hoa" rel="nofollow">Tại Đây</a></strong></em></p>

       <p style="text-align:center"><strong><span style="color:rgb(255, 0, 0)">1&nbsp;ĐỔI 1 TRONG 15 THÁNG (CẢ NGUỒN + MÀN HÌNH)</span></strong></p>

       <div>
        <p>- Tặng ngay bộ Sạc Cáp cao cấp trị giá&nbsp;250.000 VNĐ</p>
    </div>

    <p style="text-align:justify">- Tặng ngay que chọc Sim cao cấp trị giá&nbsp;20.000 VNĐ</p>

    <p style="text-align:justify">- Tặng ngay iRing cao cấp trị giá 30.000 VNĐ</p>

    <p style="text-align:justify">-&nbsp;TRẢ GÓP LÃI SUẤT 0%, qua thẻ tín dụng.&nbsp;<a href="https://hungmobile.vn/mua-hang-tra-gop/iphone-7-32gb-xach-tay-cu-gia-re.html" rel="nofollow">Xem chi tiết.</a></p>

    <p style="text-align:justify">-&nbsp;Giao Hàng&nbsp;COD Toàn Quốc&nbsp;(Nhận hàng và thanh toán tại nhà)&nbsp;<a href="https://hungmobile.vn/huong-dan-mua-hang-tu-xa.html" rel="nofollow">Xem chi tiết</a></p>

    <p style="text-align:center">&nbsp;</p>
</div>

</div>

</div>
<div class="ct-box20">
    <a href="https://hungmobile.vn/xiaomi-redmi-note-5-32gb-ram-3gb-chinh-hang.html"><img src="./index_files/dã_chỉnh_sửa_5b91cfb0e35d7_07_09_2018_08_09_04.jpg" alt="" class="img-responsive"></a>
    <div class="box-content">
        <h3 style="font-size:17px;" class="product-name"><a href="https://hungmobile.vn/xiaomi-redmi-note-5-32gb-ram-3gb-chinh-hang.html" class="pro-name">Xiaomi Redmi Note 5 32GB (Ram 3GB) Chính Hãng DGW</a></h3>
        <p class="new-price">
            3,890,000đ
        </p>
        <p class="old-price">Giá cũ:
            <span>4,790,000đ</span>
        </p>
    </div>
    <a href="https://hungmobile.vn/xiaomi-redmi-note-5-32gb-ram-3gb-chinh-hang.html" style="display:inline-block">
    </a><div class="box-detail" data-url="https://hungmobile.vn/xiaomi-redmi-note-5-32gb-ram-3gb-chinh-hang.html"><a href="https://hungmobile.vn/xiaomi-redmi-note-5-32gb-ram-3gb-chinh-hang.html" style="display:inline-block">
    </a><a href="https://hungmobile.vn/xiaomi-redmi-note-5-32gb-ram-3gb-chinh-hang.html" class="pro-name">Xiaomi Redmi Note 5 32GB (Ram 3GB) Chính Hãng DGW</a>
    <p class="new-price">
        3,890,000đ
    </p>
    <p class="old-price">Giá cũ:
        <span>4,790,000đ</span>
    </p>
    
    <hr>
    <div style="text-align: center;"><span style="font-size:16px"><strong><a href="http://bitly.com/cmsn-hm-23-quan-hoa"><span style="color:rgb(255, 0, 0)">MỪNG SINH NHẬT - GIẬT QUÀ TO</span></a></strong><span style="color:rgb(255, 0, 0)"><strong>:&nbsp;(Áp dụng từ 27/11 - 02/12)</strong></span></span></div>

    <ul style="margin-left:40px">
       <li style="text-align:left">Mua&nbsp;<a href="https://hungmobile.vn/nokia-x7.html">Nokia X7</a>&nbsp;giá chỉ 230K&nbsp;</li>
       <li style="text-align:left">Mua&nbsp;<a href="https://hungmobile.vn/vong-deo-tay-thong-minh-xiaomi-mi-band-3.html">Mi band 3</a>&nbsp;giá chỉ 23K</li>
       <li style="text-align:left">Săn phụ kiện đồng giá từ 23K&nbsp;<em>(duy nhất ngày 02/12)</em></li>
       <li style="text-align:left">Tặng ngay Arun 5600mAh cho CS3: 690 Lê Hồng Phong</li>
   </ul>

   <p style="margin-left:80px">&gt;&gt; Chi tiết xem&nbsp;<em><strong><a href="http://bitly.com/cmsn-hm-23-quan-hoa" rel="nofollow">Tại Đây</a></strong></em></p>

   <hr>
   <p style="margin-left:80px">&nbsp;</p>

   <p style="text-align:center"><strong><span style="color:rgb(255, 0, 0)"><span style="font-size:16px">CHÍNH HÃNG DGW - CÓ SẴN TIẾNG VIỆT</span></span></strong></p>

   <p style="text-align:justify"><span style="color:rgb(0, 0, 0)">- Tặng&nbsp;Ốp Lưng Slicon&nbsp;trong suốt chính hãng (kèm theo hộp)</span></p>

   <p style="text-align:justify"><span style="color:rgb(0, 0, 0)">-&nbsp;Giảm Giá 30%&nbsp;khi mua phụ kiện kèm theo</span></p>

   <p style="text-align:justify"><span style="color:rgb(0, 0, 0)">- Hỗ trợ&nbsp;Mua Trả Góp 0%&nbsp;qua thẻ tín dụng.</span></p>

   <p style="text-align:justify">-&nbsp;Giao Hàng&nbsp;COD Toàn Quốc&nbsp;(Nhận hàng và thanh toán tại nhà)&nbsp;<a href="https://hungmobile.vn/huong-dan-mua-hang-tu-xa.html" rel="nofollow">Xem chi tiết</a></p>

</div>

</div>

<div id="append"></div>
</div>

<div class="ct-more">
    <button class="loadmore">Hiển thị thêm &nbsp;&nbsp;<img src="./index_files/more.png" alt=""></button>
</div>
<div class="ct-banner clearfix">
    <div class="row">
        <div class="col-sm-6 col-md-6 col-lg-6">
            <a href="https://hungmobile.vn/huong-dan-mua-hang-tu-xa.html" target="_blank">
                <img src="./index_files/ship_cod_5af94272ed903_14_05_2018_15_01_54_5b6a7108bcf03_08_08_2018_11_26_48_5b83ce78273a3_27_08_2018_17_12_08.jpg" alt="" class="img-responsive">
            </a>
        </div>
        <div class="col-sm-6 col-md-6 col-lg-6">
            <a href="https://hungmobile.vn/mua-hang-tra-gop.html" target="_blank">
                <img src="./index_files/tra-gop_copy_5af94276e9365_14_05_2018_15_01_58_5b6a712ae0a02_08_08_2018_11_27_22_5b83ce7b3c3f6_27_08_2018_17_12_11.jpg" alt="" class="img-responsive">
            </a>
        </div>
        
    </div>
</div>


<div class="ct-heading clearfix">
    <h2 class="col-md-1 col-sm-3 col-xs-6 cth2">Phụ kiện <!-- <span class="ct-tringle"></span> --></h2>
    <div class="col-md-11 col-sm-9 col-xs-6 ct-pk-type">
        <span class="hidden-lg btn-ul">Chọn loại: <i class="fa fa-caret-down"></i></span>
        <ul class="ulh2">
            <li><h2><a href="https://hungmobile.vn/op-lung.html">Ốp lưng</a></h2></li>
            <li><h2><a href="https://hungmobile.vn/bao-da.html">Bao da</a></h2></li>
            <li><h2><a href="https://hungmobile.vn/sac.html">Sạc</a></h2></li>
            <li><h2><a href="https://hungmobile.vn/cap-usb.html">Cáp USB</a></h2></li>
            <li><h2><a href="https://hungmobile.vn/pin-du-phong.html">Pin dự phòng</a></h2></li>
            <li><h2><a href="https://hungmobile.vn/tai-nghe.html">Tai nghe</a></h2></li>
            <li><h2><a href="https://hungmobile.vn/kinh-cuong-luc.html">Kính cường lực</a></h2></li>
            <li><h2><a href="https://hungmobile.vn/dan-man-hinh.html">Dán màn hình</a></h2></li>
            
        </ul>
    </div>
</div>
<div class="ct-pk">
    <div class="ct-box-pk">
        <a href="https://hungmobile.vn/gay-chup-hinh-tu-suong-hang-xin.html"><img src="./index_files/gay-chup-anh_596aea9838be5_16_07_2017_11_24_56.jpg" alt="Gậy chụp Sefile Monopod" class="img-responsive"></a>
        <div class="pk-content">
            <a href="https://hungmobile.vn/gay-chup-hinh-tu-suong-hang-xin.html" class="pro-name">Gậy chụp Sefile Monopod</a>
            <p class="new-price">
                
                80,000đ
                
            </p>
        </div>
    </div>
    <div class="ct-box-pk">
        <a href="https://hungmobile.vn/tai-nghe-iphone-chinh-hang.html"><img src="./index_files/tai-nghe-iphone-jin_594337d411cac_16_06_2017_08_43_48.jpg" alt="Tai nghe iPhone 6s Chính Hãng Apple" class="img-responsive"></a>
        <div class="pk-content">
            <a href="https://hungmobile.vn/tai-nghe-iphone-chinh-hang.html" class="pro-name">Tai nghe iPhone 6s Chính Hãng Apple</a>
            <p class="new-price">
                
                360,000đ
                
            </p>
        </div>
    </div>
    <div class="ct-box-pk">
        <a href="https://hungmobile.vn/bao-da-passposrt-chinh-hang.html"><img src="./index_files/bao-da-blackbery-passpost(06)_5942744b2bdbf_15_06_2017_18_49_31.jpg" alt="Bao da passposrt chính hãng" class="img-responsive"></a>
        <div class="pk-content">
            <a href="https://hungmobile.vn/bao-da-passposrt-chinh-hang.html" class="pro-name">Bao da passposrt chính hãng</a>
            <p class="new-price">
                
                220,000đ
                
            </p>
        </div>
    </div>
    <div class="ct-box-pk">
        <a href="https://hungmobile.vn/cap-usb-jellico.html"><img src="./index_files/cap-usb-jellico_59410d81aef0d_14_06_2017_17_18_41.jpg" alt="cáp usb jellico chính hãng" class="img-responsive"></a>
        <div class="pk-content">
            <a href="https://hungmobile.vn/cap-usb-jellico.html" class="pro-name">cáp usb jellico chính hãng</a>
            <p class="new-price">
                
                150,000đ
                
            </p>
        </div>
    </div>
    <div class="ct-box-pk">
        <a href="https://hungmobile.vn/tai-nghe-sony-extra-bass-mdr-xb450ap.html"><img src="./index_files/tai-nghe-sony-extra-bass-mdr-xb450ap_594102c1da638_14_06_2017_16_32_49.jpg" alt="Tai nghe sony extra bass mdr-xb450ap" class="img-responsive"></a>
        <div class="pk-content">
            <a href="https://hungmobile.vn/tai-nghe-sony-extra-bass-mdr-xb450ap.html" class="pro-name">Tai nghe sony extra bass mdr-xb450ap</a>
            <p class="new-price">
                
                200,000đ
                
            </p>
        </div>
    </div>
    <div class="ct-box-pk">
        <a href="https://hungmobile.vn/jack-chuyen-tai-nghe-iphone-7-titan.html"><img src="./index_files/jax-chuyen-doi-tu-cong-lightning-sang-cong-tai-nghe-3,5-mm_5940ed8fa3922_14_06_2017_15_02_23.jpg" alt="jack chuyển tai nghe Iphone 7 TITAN" class="img-responsive"></a>
        <div class="pk-content">
            <a href="https://hungmobile.vn/jack-chuyen-tai-nghe-iphone-7-titan.html" class="pro-name">jack chuyển tai nghe Iphone 7 TITAN</a>
            <p class="new-price">
                
                90,000đ
                
            </p>
        </div>
    </div>
    <div class="ct-box-pk">
        <a href="https://hungmobile.vn/sac-khong-day-samsung-chinh-hang.html"><img src="./index_files/sac-khong-day-samsung_5940e249aaa88_14_06_2017_14_14_17.jpg" alt="Sạc không dây Samsung chính hãng" class="img-responsive"></a>
        <div class="pk-content">
            <a href="https://hungmobile.vn/sac-khong-day-samsung-chinh-hang.html" class="pro-name">Sạc không dây Samsung chính hãng</a>
            <p class="new-price">
                
                360,000đ
                
            </p>
        </div>
    </div>
    
</div>
<div class="ct-news">
    <div class="row">
        <div class="new-tile col-sm-12">
            <span>Tin tức nổi bật</span>
            <a href="https://hungmobile.vn/tin-moi-nhat.html" class="pull-right">Xem nhiều tin hơn</a>
        </div>

        <div class="col-sm-4 col-md-4 col-lg-4">
           <div class="media">
               <a class="pull-left" href="https://hungmobile.vn/so-sanh-nokia-x7-2018-xiaomi-mi-8-se-khi-nokia-di-truoc-xiaomi-mot-buoc.html">
                   <img class="media-object" src="./index_files/dsc08523_copy_5be109a24e09e_06_11_2018_10_25_22_5be1756f1e4c6_06_11_2018_18_05_19.jpg" alt="Image">
                   <div class=""></div>
               </a>
               <div class="media-body">
                   <a href="https://hungmobile.vn/so-sanh-nokia-x7-2018-xiaomi-mi-8-se-khi-nokia-di-truoc-xiaomi-mot-buoc.html">So sánh Nokia X7 (2018)- Xiaomi Mi 8 SE: Khi Nokia đi trước Xiaomi một bước</a>
               </div>
           </div>
       </div>
       <div class="col-sm-4 col-md-4 col-lg-4">
           <div class="media">
               <a class="pull-left" href="https://hungmobile.vn/tong-hop-smartphone-nokia-x-quyet-kho-mau-de-gianh-lai-thi-truong.html">
                   <img class="media-object" src="./index_files/nokia-x5-2018(08)_5b694563f17fa_07_08_2018_14_08_19_5bdd6a3c5ed41_03_11_2018_16_28_28.jpg" alt="Image">
                   <div class=""></div>
               </a>
               <div class="media-body">
                   <a href="https://hungmobile.vn/tong-hop-smartphone-nokia-x-quyet-kho-mau-de-gianh-lai-thi-truong.html">Tổng hợp smartphone Nokia X (2018):  Quyết khô máu để giành lại thị trường</a>
               </div>
           </div>
       </div>
       <div class="col-sm-4 col-md-4 col-lg-4">
           <div class="media">
               <a class="pull-left" href="https://hungmobile.vn/danh-gia-noia-x7-2018-va-5-cai-nhat-manh-nhat-uu-viet-nhat-tot-nhat-dau-tu-nhat-dep-nhat.html">
                   <img class="media-object" src="./index_files/img_8162_5bd445a94698e_27_10_2018_18_02_01_5bdbacf1c5fe1_02_11_2018_08_48_33.jpg" alt="Image">
                   <div class=""></div>
               </a>
               <div class="media-body">
                   <a href="https://hungmobile.vn/danh-gia-noia-x7-2018-va-5-cai-nhat-manh-nhat-uu-viet-nhat-tot-nhat-dau-tu-nhat-dep-nhat.html">Câu chuyện Noia X7 2018 và 5 cái nhất: Mạnh nhất - Ưu Việt nhất - Tốt nhất - Đầu tư nhất - Đẹp nhất</a>
               </div>
           </div>
       </div>
       
   </div>
</div>
</div>
</div>
</section>
<input type="hidden" name="" value="1" id="home">

<!-- MODAL POPUP PROMOTION-->
<script>
    limit = $('.ct-box20').length;
    if (limit < 20) {
        $('.loadmore').hide();
    }
    ;
    jQuery(document).ready(function ($) {
        $('#popupModal').modal('show');
    });
</script>
<footer class="hidden-xs" style="background-color: #fff;">
  @include('layouts.frontend.structure.footer')
</footer>

<a class="btn-top" href="javascript:void(0);" title="Top" style="display: none;"><i class="fa fa-angle-up"></i></a>
<a href="tel:0901548866" title="Gọi ngay: 090 154 8866" class="visible-xs suntory-alo-phone suntory-alo-green" id="suntory-alo-phoneIcon">
    <div class="suntory-alo-ph-circle"></div>
    <div class="suntory-alo-ph-circle-fill"></div>
    <div class="suntory-alo-ph-img-circle"><i class="fa fa-phone"></i></div>
</a>
<style>
.banners-fixed {
    position: fixed;
    bottom: 0px;
    width: 100%;
    z-index: 1;
}
.banners-fixed .row {
    position: relative;
}
.banners-fixed .row .fixed_close {
    background: url(../images/211.png) no-repeat center center transparent;
    border: none;
    position: absolute;
    top: 10px;
    right: 10px;
}
.close_popup{
    top: 0;
    position: absolute;
    right: 0;
    cursor: pointer;
}
@media (min-width: 3px){
    .layout {
        width: 960px;
        margin:auto;
    }
}
@media (min-width: 2px){
    .layout {
        width: 960px;
        margin:auto;
    }
}

</style>
<script type="text/javascript">
    $(document).ready(function(){
        $('.close_popup img').click(function(){
            $('.banners .layout').hide();
        })
    })
</script>

<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MKBHS2G"
  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  









  <style>#cfacebook { position:fixed;bottom:0px;left:20px;z-index:999999999999999;width:250px;height:auto;overflow:hidden; } #cfacebook .fchat { float:left;width:100%;height:270px;overflow:hidden;display:none;background-color:#fff; } #cfacebook .fchat .fb-page { margin-top:-130px;float:left; } #cfacebook a.chat_fb { float:left;padding:0 12px;width:250px;color:#fff;text-decoration:none;height:40px;line-height:40px;text-shadow:0 1px 0 rgba(0,0,0,0.1);background-color:#3a5795;border:0;z-index:9999999;margin-right:12px;font-size:18px; } </style>
  <script>
      jQuery(document).ready(function () {
          jQuery(".chat_fb").click(function() {
            jQuery('.fchat').toggle('slow');
        });
      });
  </script>













  <script>
   function ajaxSearch() {
      var input_data = $('#search_data').val();
      if (input_data.length === 0) {
         $('#suggestions').hide();
     } else {
         var post_data = {
            'search_data': input_data
        };
        $.ajax({
            type: "POST",
            url: base_url + "bluesoft_c/autocomplete/",
            data: post_data,
            success: function (data) {
               if (data.length > 0) {
                  $('#suggestions').show();
                  $('#autoSuggestionsList').html(data);
              }
          }
      });

    }
}

function ajaxSearchPro() {
  var input_data = $('#search_text').val();
  type = $('#searchtype').val();
  firstpro = $('#firstpro').val();
  if (input_data.length === 0) {
     $('#result').hide();
 } else {
     var post_data = {
        'search_data': input_data,
        'type':type,
        'firstpro':firstpro,
    };
    $.ajax({
        type: "POST",
        url: base_url + "bluesoft_c/searchsosanh/",
        data: post_data,
        success: function (data) {
           if (data.length > 0) {
              $('#result').show();
              $('#resultList').html(data);
          }
      }
  });

}
}

page=1;


$('.loadmore').click(function(){
	page++;
	cat = $('#getcat').val();
	order = $('#order').val();
	home = $('#home').val();
	stt= '0';
	range = '';

  $.ajax({
     type: "POST",
     url: base_url+ "bluesoft_c/loadmoreproduct/",
     data:{
        page:page,
        cat:cat,
        stt:stt,
        order:order,
        range:range,
        home:home
        
    },
    success: function(data) {
        if ($.trim(data)){
           $('#append').append(data);
           
       }else{
           $('.loadmore').text('Hết rồi');
       }
       
   }
});
});





loadmore1('.desc-height','#desc-more','desc',493);
loadmore('#faq-height','#lodmorefaq','faq',500);
loadmore('#rvappend','#rvmore','rv',460);
loadmore('#cmtmore','cmt',500);
function loadmore(elm,btn,agurment,height){
  agurment = $(elm).height();
  x = height;
  if (agurment > height+50) {
     $(elm).height(height)
     $(btn).click(function() {
        a = height + x;
        if (a >= agurment) {
           a = agurment;
           $(btn).hide();
           $(elm).find('.frog').hide();
       };
       $(elm).height(a);
       x=x+height;
       
   });
 }else{
     $(btn).hide();
     $(elm).find('.frog').hide();
 }
}
function loadmore1(elm,btn,agurment,height){
  agurment = $(elm).height();
  x = height;
  if (agurment > height+500) {
     $(elm).height(height)
     $(btn).click(function() {
        a = height + 5000;
        if (a >= agurment) {
           a = agurment;
           $(btn).hide();
           $(elm).find('.frog').hide();
       };
       $(elm).height(a);
       x=5000;
       
   });
 }else{
     $(btn).hide();
     $(elm).find('.frog').hide();
 }
}
</script>
<div id="fb-root" class=" fb_reset"><div style="position: absolute; top: -10000px; height: 0px; width: 0px;"><div><iframe name="fb_xdm_frame_https" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" id="fb_xdm_frame_https" aria-hidden="true" title="Facebook Cross Domain Communication Frame" tabindex="-1" src="./index_files/7LloFuHvA7I.html" style="border: none;"></iframe></div></div><div style="position: absolute; top: -10000px; height: 0px; width: 0px;"><div></div></div></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.8&appId=417943841895951";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
</script>

<!-- Start of widget script --><script type="text/javascript">function loadJsAsync(t,e){var n=document.createElement("script");n.type="text/javascript",n.src=t,n.addEventListener("load",function(t){e(null,t)},!1);var a=document.getElementsByTagName("head")[0];a.appendChild(n)}window.addEventListener("DOMContentLoaded",function(){loadJsAsync("https://webchat.caresoft.vn:8090/js/CsChat.js?v=2.0",function(){var t={domain:"hungmobile"};embedCsChat(t)})},!1);</script><!-- End of widget script -->


<style>.fb-livechat, .fb-widget { display: none } .ctrlq.fb-button, .ctrlq.fb-close { position: fixed; left: 24px; cursor: pointer } .ctrlq.fb-button { z-index: 999; background: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/PjwhRE9DVFlQRSBzdmcgIFBVQkxJQyAnLS8vVzNDLy9EVEQgU1ZHIDEuMS8vRU4nICAnaHR0cDovL3d3dy53My5vcmcvR3JhcGhpY3MvU1ZHLzEuMS9EVEQvc3ZnMTEuZHRkJz48c3ZnIGVuYWJsZS1iYWNrZ3JvdW5kPSJuZXcgMCAwIDEyOCAxMjgiIGhlaWdodD0iMTI4cHgiIGlkPSJMYXllcl8xIiB2ZXJzaW9uPSIxLjEiIHZpZXdCb3g9IjAgMCAxMjggMTI4IiB3aWR0aD0iMTI4cHgiIHhtbDpzcGFjZT0icHJlc2VydmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiPjxnPjxyZWN0IGZpbGw9IiMwMDg0RkYiIGhlaWdodD0iMTI4IiB3aWR0aD0iMTI4Ii8+PC9nPjxwYXRoIGQ9Ik02NCwxNy41MzFjLTI1LjQwNSwwLTQ2LDE5LjI1OS00Niw0My4wMTVjMCwxMy41MTUsNi42NjUsMjUuNTc0LDE3LjA4OSwzMy40NnYxNi40NjIgIGwxNS42OTgtOC43MDdjNC4xODYsMS4xNzEsOC42MjEsMS44LDEzLjIxMywxLjhjMjUuNDA1LDAsNDYtMTkuMjU4LDQ2LTQzLjAxNUMxMTAsMzYuNzksODkuNDA1LDE3LjUzMSw2NCwxNy41MzF6IE02OC44NDUsNzUuMjE0ICBMNTYuOTQ3LDYyLjg1NUwzNC4wMzUsNzUuNTI0bDI1LjEyLTI2LjY1N2wxMS44OTgsMTIuMzU5bDIyLjkxLTEyLjY3TDY4Ljg0NSw3NS4yMTR6IiBmaWxsPSIjRkZGRkZGIiBpZD0iQnViYmxlX1NoYXBlIi8+PC9zdmc+) center no-repeat #0084ff; width: 60px; height: 60px; text-align: center; bottom: 30px; border: 0; outline: 0; border-radius: 60px; -webkit-border-radius: 60px; -moz-border-radius: 60px; -ms-border-radius: 60px; -o-border-radius: 60px; box-shadow: 0 1px 6px rgba(0, 0, 0, .06), 0 2px 32px rgba(0, 0, 0, .16); -webkit-transition: box-shadow .2s ease; background-size: 80%; transition: all .2s ease-in-out } .ctrlq.fb-button:focus, .ctrlq.fb-button:hover { transform: scale(1.1); box-shadow: 0 2px 8px rgba(0, 0, 0, .09), 0 4px 40px rgba(0, 0, 0, .24) } .fb-widget { background: #fff; z-index: 1000; position: fixed; width: 360px; height: 435px; overflow: hidden; opacity: 0; bottom: 0; left: 24px; border-radius: 6px; -o-border-radius: 6px; -webkit-border-radius: 6px; box-shadow: 0 5px 40px rgba(0, 0, 0, .16); -webkit-box-shadow: 0 5px 40px rgba(0, 0, 0, .16); -moz-box-shadow: 0 5px 40px rgba(0, 0, 0, .16); -o-box-shadow: 0 5px 40px rgba(0, 0, 0, .16) } .fb-credit { text-align: center; margin-top: 8px } .fb-credit a { transition: none; color: #bec2c9; font-family: Helvetica, Arial, sans-serif; font-size: 12px; text-decoration: none; border: 0; font-weight: 400 } .ctrlq.fb-overlay { z-index: 0; position: fixed; height: 100vh; width: 100vw; -webkit-transition: opacity .4s, visibility .4s; transition: opacity .4s, visibility .4s; top: 0; left: 0; background: rgba(0, 0, 0, .05); display: none } .ctrlq.fb-close { z-index: 4; padding: 0 6px; background: #365899; font-weight: 700; font-size: 11px; color: #fff; margin: 8px; border-radius: 3px } .ctrlq.fb-close::after { content: "X"; font-family: sans-serif } .bubble { width: 20px; height: 20px; background: #c00; color: #fff; position: absolute; z-index: 999999999; text-align: center; vertical-align: middle; top: -2px; left: -5px; border-radius: 50%; } .bubble-msg { width: 120px; left: 62px; top: 0px; position: relative; background: rgba(59, 89, 152, .8); color: #fff; padding: 5px 8px; border-radius: 8px; text-align: center; font-size: 13px; } </style>
<div class="fb-livechat" style="display: block;"> <div class="ctrlq fb-overlay"></div><div class="fb-widget"> <div class="ctrlq fb-close"></div><div class="fb-page fb_iframe_widget" data-href="https://www.facebook.com/sieuthididonghungmobile" data-tabs="messages" data-width="360" data-height="400" data-small-header="true" data-hide-cover="true" data-show-facepile="false" fb-xfbml-state="rendered" fb-iframe-plugin-query="app_id=417943841895951&amp;container_width=0&amp;height=400&amp;hide_cover=true&amp;href=https%3A%2F%2Fwww.facebook.com%2Fsieuthididonghungmobile&amp;locale=vi_VN&amp;sdk=joey&amp;show_facepile=false&amp;small_header=true&amp;tabs=messages&amp;width=360"><span style="vertical-align: bottom; width: 360px; height: 400px;"><iframe name="f17c3a2ddbf4dc" width="360px" height="400px" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" title="fb:page Facebook Social Plugin" src="./index_files/page.html" class="" style="border: none; visibility: visible; width: 360px; height: 400px;"></iframe></span></div><div class="fb-credit"> <a href="https://chanhtuoi.com/" target="_blank">Powered by Chanhtuoi</a> </div><div id="fb-root"></div></div><a style="text-decoration: none;" href="https://m.me/sieuthididonghungmobile" title="Gửi tin nhắn cho chúng tôi qua Facebook" class="ctrlq fb-button hidden-xs"> <div class="bubble">1</div><div class="bubble-msg">Bạn cần hỗ trợ?</div></a></div>
<script>$(document).ready(function() { function detectmob() { if( navigator.userAgent.match(/Android/i) || navigator.userAgent.match(/webOS/i) || navigator.userAgent.match(/iPhone/i) || navigator.userAgent.match(/iPad/i) || navigator.userAgent.match(/iPod/i) || navigator.userAgent.match(/BlackBerry/i) || navigator.userAgent.match(/Windows Phone/i) ) { return true; } else { return false; } } var t= { delay: 125, overlay: $(".fb-overlay"), widget: $(".fb-widget"), button: $(".fb-button") } ; setTimeout(function() { $("div.fb-livechat").fadeIn() } , 8 * t.delay); if(!detectmob()) { $(".ctrlq").on("click", function(e) { e.preventDefault(), t.overlay.is(":visible") ? (t.overlay.fadeOut(t.delay), t.widget.stop().animate( { bottom: 0, opacity: 0 } , 2 * t.delay, function() { $(this).hide("slow"), t.button.show() } )) : t.button.fadeOut("medium", function() { t.widget.stop().show().animate( { bottom: "30px", opacity: 1 } , 2 * t.delay), t.overlay.fadeIn(t.delay) } ) } ) } } );</script>

<script type="text/javascript" id="">!function(b,e,f,g,a,c,d){b.fbq||(a=b.fbq=function(){a.callMethod?a.callMethod.apply(a,arguments):a.queue.push(arguments)},b._fbq||(b._fbq=a),a.push=a,a.loaded=!0,a.version="2.0",a.queue=[],c=e.createElement(f),c.async=!0,c.src=g,d=e.getElementsByTagName(f)[0],d.parentNode.insertBefore(c,d))}(window,document,"script","https://connect.facebook.net/en_US/fbevents.js");fbq("init","825319630811754");fbq("track","PageView");</script>
<noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=825319630811754&amp;ev=PageView&amp;noscript=1"></noscript>


<meta name="google-site-verification" content="LQatqMYlBmJHuuKaJEwHOUSUcK3C82NqoXs33oUhHj0">
<script type="text/javascript" id="">!function(b,e,f,g,a,c,d){b.fbq||(a=b.fbq=function(){a.callMethod?a.callMethod.apply(a,arguments):a.queue.push(arguments)},b._fbq||(b._fbq=a),a.push=a,a.loaded=!0,a.version="2.0",a.queue=[],c=e.createElement(f),c.async=!0,c.src=g,d=e.getElementsByTagName(f)[0],d.parentNode.insertBefore(c,d))}(window,document,"script","https://connect.facebook.net/en_US/fbevents.js");fbq("init","1731725490195838");fbq("set","agent","tmgoogletagmanager","1731725490195838");fbq("track","PageView");</script>
<noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=1731725490195838&amp;ev=PageView&amp;noscript=1"></noscript>

<script type="text/javascript" id="">(function(e,b,c,d){a=b.createElement(c);m=b.getElementsByTagName(c)[0];a.async=1;a.src=d;m.parentNode.insertBefore(a,m)})(window,document,"script","https://static.mepuzz.com/sdk/v2/MePuzzSDK.min.js");var appId="jBDexY746b";</script>
</body></html>