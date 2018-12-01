<div class="hidden-xs hidden-sm" style="background-color: #282828">
  <div class="container-fluid">
    <div class="row">
      <div class="address col-lg-4 col-md-4 col-sm-4 col-xs-12">
        <h4 style="font-weight:normal;">
          <div class="address"> 
            <span style="width: auto !important;"><i class="fa fa-map-marker"></i> Chọn nơi mua:</span>
            <select class="single-option-selector" name="" id="header-change-location" onchange="location = this.value;">
              <option value="?khuvuc=hanoi" selected="">Hà Nội</option>
              <!-- <option value="?khuvuc=hcm">Hồ Chí Minh</option> -->
            </select>
          </div>
        </h4>            
      </div>
      <div class="hotline col-lg-4 col-md-4 col-sm-4 col-xs-12">
        <div class="phone-number">
          <p>
            <span><i class="fa fa-phone"></i> Hotline:</span>
            <a href="tel:{{getConstant('HOTLINE')}}">{{getConstant('HOTLINE')}}</a>
          </p>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-5 col-xs-12">
        <div class="social">
          <a href="{{getConstant('YOUTUBE_URL')}}" target="_blank"><i class="fa fa-youtube-play"></i> Youtube</a>
          <a href="{{getConstant('FB_URL')}}" target="_blank"><i class="fa fa-facebook"></i> Facebook</a>
          <a href="{{getConstant('GROUP_URL')}}" target="_blank"><i class="fa fa-flag"></i> Cộng đồng</a>               
        </div>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
  $(document).ready(function(){
    $(".location-select").mouseover(function(){
      $(".hcm-location").css("display", "block");
    });
    $(".location-select").mouseout(function(){
      $(".hcm-location").css("display", "none");
    });
  });
</script> 