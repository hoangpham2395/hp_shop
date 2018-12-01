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