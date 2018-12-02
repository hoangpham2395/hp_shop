var base_url = 'http://dev.hpshop.vn/';

jQuery(document).ready(function() {
    jQuery("#owl-collection").owlCarousel({
        autoPlay: false,
        items : 5, //10 items above 1000px browser width
        itemsDesktop : [1024,4], //5 items between 1024px and 901px
        itemsDesktopSmall : [900,3], // 3 items betweem 900px and 601px
        itemsTablet: [600,2], //2 items between 600 and 0;
        itemsMobile : [320,1],
        navigation : true,
        navigationText : ["<a class=\"flex-prev\"></a>","<a class=\"flex-next\"></a>"],
        slideSpeed : 500,
        pagination : false
    });
    jQuery("#owl-demo").owlCarousel({
       autoPlay: 5000,
        items : 1, //10 items above 1000px browser width
        itemsDesktop : [1024,1], //5 items between 1024px and 901px
        itemsDesktopSmall : [900,1], // 3 items betweem 900px and 601px
        itemsTablet: [600,1], //2 items between 600 and 0;
        itemsMobile : [320,1],
        navigation : true,
        navigationText : ["<a class=\"flex-prev\"></a>","<a class=\"flex-next\"></a>"],
        pagination : true
    });
});
$(function() {
    $(".twentytwenty-container[data-orientation!='vertical']").twentytwenty({
        default_offset_pct: 0.7
    });
    $(".twentytwenty-container[data-orientation='vertical']").twentytwenty({
        default_offset_pct: 0.3,
        orientation: 'vertical'
    });
});



// Google Tag Manager
(function(w,d,s,l,i)
{
    w[l]=w[l]||[];w[l].push({
        'gtm.start': new Date().getTime(),
        event:'gtm.js'
    });
    var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),
    dl=l!='dataLayer'?'&l='+l:'';
    j.async=true;
    j.src= 'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','1731725490195838');        

// Google Tag Manager
(function (w, d, s, l, i) {
    w[l] = w[l] || [];
    w[l].push({
        'gtm.start':
        new Date().getTime(), event: 'gtm.js'
    });
    var f = d.getElementsByTagName(s)[0],
    j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : '';
    j.async = true;
    j.src =
    'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
    f.parentNode.insertBefore(j, f);
})(window, document, 'script', 'dataLayer', 'GTM-MKBHS2G');

$(document).ready(function(){
    $('.close_popup img').click(function(){
        $('.banners .layout').hide();
    })
});

jQuery(document).ready(function () {
    jQuery(".chat_fb").click(function() {
        jQuery('.fchat').toggle('slow');
    });
});

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

page = 1;

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