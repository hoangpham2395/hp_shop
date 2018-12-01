$(document).ready(function() {
    $('.p-color ul li').tooltip({show: {effect:"none", delay:0}});
    if($(".btn-top").length > 0){
        $(window).scroll(function () {
            var e = $(window).scrollTop();
            if (e > 300) {
                $(".btn-top").show()
            } else {
                $(".btn-top").hide()
            }
        });
        $(".btn-top").click(function () {
            $('body,html').animate({
                scrollTop: 0
            })
        })
    }
    jQuery("#owl-contact-1").owlCarousel({
        autoPlay: 5000,
        items : 1, //10 items above 1000px browser width
        itemsDesktop : [1024,1], //5 items between 1024px and 901px
        itemsDesktopSmall : [900,3], // 3 items betweem 900px and 601px
        itemsTablet: [600,3], //2 items between 600 and 0;
        itemsMobile : [320,2],
        navigation : false,
        slideSpeed: 300,
        paginationSpeed: 400,
        pagination : false
    });
    jQuery("#owl-contact-2").owlCarousel({
        autoPlay: 5000,
        items : 1, //10 items above 1000px browser width
        itemsDesktop : [1024,1], //5 items between 1024px and 901px
        itemsDesktopSmall : [900,2], // 3 items betweem 900px and 601px
        itemsTablet: [600,2], //2 items between 600 and 0;
        itemsMobile : [320,2],
        navigation : false,
        slideSpeed: 300,
        paginationSpeed: 400,
        pagination : false
    });
    jQuery("#owl-contact-3").owlCarousel({
        autoPlay: 5000,
        items : 1, //10 items above 1000px browser width
        itemsDesktop : [1024,1], //5 items between 1024px and 901px
        itemsDesktopSmall : [900,2], // 3 items betweem 900px and 601px
        itemsTablet: [600,2], //2 items between 600 and 0;
        itemsMobile : [320,2],
        navigation : false,
        slideSpeed: 300,
        paginationSpeed: 400,
        pagination : false
    });
    jQuery("#owl-category").owlCarousel({
        autoPlay: 5000,
        items : 1, //10 items above 1000px browser width
        itemsDesktop : [1024,1], //5 items between 1024px and 901px
        itemsDesktopSmall : [900,1], // 3 items betweem 900px and 601px
        itemsTablet: [600,1], //2 items between 600 and 0;
        itemsMobile : [320,1],
        navigation : true,
        slideSpeed: 300,
        paginationSpeed: 400,
        pagination : true
    });
    jQuery("#owl-mobile-phone").owlCarousel({
        autoPlay: 5000,
        items : 7, //10 items above 1000px browser width
        itemsDesktop : [1024,5], //5 items between 1024px and 901px
        itemsDesktopSmall : [900,4], // 3 items betweem 900px and 601px
        itemsTablet: [600,3], //2 items between 600 and 0;
        itemsMobile : [320,2],
        navigation : false,
        slideSpeed: 300,
        paginationSpeed: 400,
        pagination : false
    });
    jQuery("#owl-collection").owlCarousel({
        autoPlay: false,
        items : 5, //10 items above 1000px browser width
        itemsDesktop : [1024,4], //5 items between 1024px and 901px
        itemsDesktopSmall : [900,3], // 3 items betweem 900px and 601px
        itemsTablet: [600,2], //2 items between 600 and 0;
        itemsMobile : [320,2],
        navigation : true,
        navigationText : ["<a class=\"flex-prev\"></a>","<a class=\"flex-next\"></a>"],
        slideSpeed : 500,
        pagination : false
    });
    jQuery("#owl-collection2").owlCarousel({
        autoPlay: false,
        items : 5, //10 items above 1000px browser width
        itemsDesktop : [1024,4], //5 items between 1024px and 901px
        itemsDesktopSmall : [900,3], // 3 items betweem 900px and 601px
        itemsTablet: [600,2], //2 items between 600 and 0;
        itemsMobile : [320,2],
        navigation : true,
        navigationText : ["<a class=\"flex-prev\"></a>","<a class=\"flex-next\"></a>"],
        slideSpeed : 500,
        pagination : false
    });
    jQuery("#owl-collection3").owlCarousel({
        autoPlay: false,
        items : 5, //10 items above 1000px browser width
        itemsDesktop : [1024,4], //5 items between 1024px and 901px
        itemsDesktopSmall : [900,3], // 3 items betweem 900px and 601px
        itemsTablet: [600,2], //2 items between 600 and 0;
        itemsMobile : [320,2],
        navigation : true,
        navigationText : ["<a class=\"flex-prev\"></a>","<a class=\"flex-next\"></a>"],
        slideSpeed : 500,
        pagination : false
    });
    jQuery("#owl-collection4").owlCarousel({
        autoPlay: false,
        items : 5, //10 items above 1000px browser width
        itemsDesktop : [1024,4], //5 items between 1024px and 901px
        itemsDesktopSmall : [900,3], // 3 items betweem 900px and 601px
        itemsTablet: [600,2], //2 items between 600 and 0;
        itemsMobile : [320,2],
        navigation : true,
        navigationText : ["<a class=\"flex-prev\"></a>","<a class=\"flex-next\"></a>"],
        slideSpeed : 500,
        pagination : false
    });
    jQuery("#owl-prod").owlCarousel({
        autoPlay: 5000,
        items : 1, //10 items above 1000px browser width
        itemsDesktop : [1024,1], //5 items between 1024px and 901px
        itemsDesktopSmall : [900,1], // 3 items betweem 900px and 601px
        itemsTablet: [600,1], //2 items between 600 and 0;
        itemsMobile : [320,1],
        navigation : true,
        slideSpeed: 300,
        paginationSpeed: 400,
        pagination : true
    });

    $('.box-detail').click(function() {
        url = $(this).data('url');
        window.location.href = url;
    });

    $('.bxslider').bxSlider({
        pagerCustom: '#bx-pager',
        auto:true,
    });

    $('.p_bxslider').bxSlider({
        pagerCustom: '#p-pager',
        controls:false,
    });
    $('.video_bxslider').bxSlider({
        pagerCustom: '#video-pager',
        video: true,
        controls:false,
    });
    $('#video-pager').bxSlider({
        slideWidth: 150,
        minSlides: 1,
        maxSlides: 4,
        slideMargin: 10,
        Pager:false,
    });




    $('#cmtappend').on('click', '.btn-rep', function() {
        $(this).parent('.media-btn-reply').find('.cmt-reply').toggle();
    });
    $('.p-color li:nth-child(2)').addClass('color-active');
    // $('.p-color li').click(function(event) {
    // 	$('.p-color li').removeClass('color-active');
    // 	$(this).addClass('color-active');
    // });
    color = $('.color1').data('color');
    $('#colorpick').val(color);
    $('.color1').click(function() {
        $('.p-color li').removeClass('color-active');
        $('.color1').addClass('color-active');
        color = $('.color1').data('color');
        $('#colorpick').val(color);
    });
    $('.color2').click(function() {
        $('.p-color li').removeClass('color-active');
        $('.color2').addClass('color-active');
        color = $('.color2').data('color');
        $('#colorpick').val(color);
    });
    $('.color3').click(function() {
        $('.p-color li').removeClass('color-active');
        $('.color3').addClass('color-active');
        color = $('.color3').data('color');
        $('#colorpick').val(color);
    });
    $('.color4').click(function() {
        $('.p-color li').removeClass('color-active');
        $('.color4').addClass('color-active');
        color = $('.color4').data('color');
        $('#colorpick').val(color);
    });
    $('.color5').click(function() {
        $('.p-color li').removeClass('color-active');
        $('.color5').addClass('color-active');
        color = $('.color5').data('color');
        $('#colorpick').val(color);
    });
    $('.color6').click(function() {
        $('.p-color li').removeClass('color-active');
        $('.color6').addClass('color-active');
        color = $('.color6').data('color');
        $('#colorpick').val(color);
    });

    color = $('.color1').data('color');
    $('#colorpick1').val(color);
    $('.color1').click(function() {
        $('.p-color li').removeClass('color-active');
        $('.color1').addClass('color-active');
        color = $('.color1').data('color');
        $('#colorpick1').val(color);
    });
    $('.color2').click(function() {
        $('.p-color li').removeClass('color-active');
        $('.color2').addClass('color-active');
        color = $('.color2').data('color');
        $('#colorpick1').val(color);
    });
    $('.color3').click(function() {
        $('.p-color li').removeClass('color-active');
        $('.color3').addClass('color-active');
        color = $('.color3').data('color');
        $('#colorpick1').val(color);
    });
    $('.color4').click(function() {
        $('.p-color li').removeClass('color-active');
        $('.color4').addClass('color-active');
        color = $('.color4').data('color');
        $('#colorpick1').val(color);
    });
    $('.color5').click(function() {
        $('.p-color li').removeClass('color-active');
        $('.color5').addClass('color-active');
        color = $('.color5').data('color');
        $('#colorpick1').val(color);
    });
    $('.color6').click(function() {
        $('.p-color li').removeClass('color-active');
        $('.color6').addClass('color-active');
        color = $('.color6').data('color');
        $('#colorpick1').val(color);
    });
    
    $('.btn-ul').on('click', function(e){
        e.preventDefault();
        var $this = $(this);
        $this.parents('.ct-pk-type').find('.ulh2').stop().slideToggle();
        return false;
    });
    var mq = window.matchMedia( "(max-width: 769px)" );
    if (mq.matches) {
        $('.p-description').find('iframe').attr({
            width: '100%',
            height: '230'
        });

        $('.sidebar').click(function() {
            $('.pop-up-menu-xs').slideToggle('fast');
            $('.bg-body').toggleClass('bg-active');
        });
        $('.toggle-up').click(function() {
            $('.pop-up-menu-xs').slideToggle('fast');
            $('.bg-body').toggleClass('bg-active');

        });
        $('.search-view').click(function() {
            $('.search-view-pop-up').slideToggle('fast');
        });

        $('.ft-h4-1').click(function() {
            $('.ft-info-box-1 ').slideToggle('fast');
            $('.ft-info-box-2 ').css('display', 'none');
        });
        $('.ft-h4-2').click(function() {
            $('.ft-info-box-2 ').slideToggle('fast');
            $('.ft-info-box-1').css('display', 'none');
        });

        $('.btn-ul').click(function() {
            $('.ulh1 ').slideToggle('fast');
            $('.ulh2 ').css('display', 'none');
        });
         $('.btn-ul2').click(function() {
            $('.ulh2 ').slideToggle('fast');
            $('.ulh1 ').css('display', 'none');
        });

        $('.span-category').click(function() {
            $('.ul-category').slideToggle('fast');
        });
        $('.span-price').click(function() {
            $('.ul-price').slideToggle('fast');
        });
        // =====
        $('#get-p-pk').appendTo('#p-pk-only-mb');
        startSlide = $('#startSlide').val();
        $('.mb-slide').bxSlider({
            minSlides: 3,
            maxSlides: 3,
            moveSlides: 1,
            slideWidth: 0,
            startSlide:startSlide,
        });

    } else {

    }
    $('.pk-slide').bxSlider({
        slideWidth: 300,
        minSlides:2,
        maxSlides: 4,
        slideMargin: 10,
        Pager:false,
    });
    $('.btn-rate').click(function() {
        $('.review-form').toggle();
    });


    $('.p-color li').click(function() {
        base_url = window.location.origin+'/';
        oldprice = $(this).data('price');
        hcmprice = $(this).data('price-hcm');

        city = $('#priceHCM').val();
        //alert(oldprice);
        
        
        imagecolor = $(this).data('imagecolor');
        $('.active-change-image').html('');
        $('.active-change-image').html('<img src="'+base_url+imagecolor+'" class="img-responsive" />');
        // alert(runout);
        //$('.setprice').text(number_format(oldprice)+'đ');
        if (city == 1) {
            $('.setprice').text(number_format(oldprice)+'đ');
            runout = $(this).data('runout');
        } else {
            $('.setprice').text(number_format(parseInt(hcmprice))+'đ');
            runout = $(this).data('runout-hcm');
        }

        //$('.setprice').html();
        $('#change-run-out').text(runout);
        if ($('#guarantee_golden').is(':checked')) {
            changeBaoHanhVang();
        }

    });


    var sm = window.matchMedia( "(min-width: 769px) and (max-width:991px)" );
    if (sm.matches) {
        $('.top-order').appendTo('#append-sm');
    }

    $('.btn-cate').on('click', function(e){
        e.preventDefault();
        var $this = $(this);
        $this.parents('.category-blog').find('.category-blog-sub').stop().slideToggle();
        return false;
    });
    var lastScrollTop = 200;
    $(window).scroll(function(event){
       var st = $(this).scrollTop();
       if (st > lastScrollTop){
           $('.header-bottom').addClass('slide-down');
           $('.header-bottom').removeClass('slide-up');
       } else if (st == 0) {
           $('.header-bottom').removeClass('slide-up');
       } else {
           $('.header-bottom').addClass('slide-up');
           $('.header-bottom').removeClass('slide-down');
       }
       lastScrollTop = st;
    }); 
});
function number_format(number, decimals, decPoint, thousandsSep){
    decimals = decimals || 0;
    number = parseFloat(number);

    if(!decPoint || !thousandsSep){
        decPoint = '.';
        thousandsSep = ',';
    }

    var roundedNumber = Math.round( Math.abs( number ) * ('1e' + decimals) ) + '';
    // add zeros to decimalString if number of decimals indicates it
    roundedNumber = (1 > number && -1 < number && roundedNumber.length <= decimals)
        ? Array(decimals - roundedNumber.length + 1).join("0") + roundedNumber
        : roundedNumber;
    var numbersString = decimals ? roundedNumber.slice(0, decimals * -1) : roundedNumber.slice(0);
    var checknull = parseInt(numbersString) || 0;

    // check if the value is less than one to prepend a 0
    numbersString = (checknull == 0) ? "0": numbersString;
    var decimalsString = decimals ? roundedNumber.slice(decimals * -1) : '';

    var formattedNumber = "";
    while(numbersString.length > 3){
        formattedNumber = thousandsSep + numbersString.slice(-3) + formattedNumber;
        numbersString = numbersString.slice(0,-3);
    }

    return (number < 0 ? '-' : '') + numbersString + formattedNumber + (decimalsString ? (decPoint + decimalsString) : '');
}