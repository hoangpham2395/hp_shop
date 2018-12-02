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
    @include('layouts.frontend.structure.header_mobile')
</header>
<div class="bg-body"></div>

@yield('content')

<footer class="hidden-xs" style="background-color: #fff;">
  @include('layouts.frontend.structure.footer')
</footer>

<a class="btn-top" href="javascript:void(0);" title="Top" style="display: none;"><i class="fa fa-angle-up"></i></a>
<a href="tel:{{getConstant('HOTLINE')}}" title="Gọi ngay: {{getConstant('HOTLINE')}}" class="visible-xs suntory-alo-phone suntory-alo-green" id="suntory-alo-phoneIcon">
    <div class="suntory-alo-ph-circle"></div>
    <div class="suntory-alo-ph-circle-fill"></div>
    <div class="suntory-alo-ph-img-circle"><i class="fa fa-phone"></i></div>
</a>

<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MKBHS2G"
  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>

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