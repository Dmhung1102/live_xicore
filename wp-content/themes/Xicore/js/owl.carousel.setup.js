$('#categories-link-body').owlCarousel({
    margin:10,
    autoWidth:true,
    items:4,
    dots: false,
    loop: true
});
// $('#categories-link-body-2').owlCarousel({
//     margin:10,
//     autoWidth:true,
//     items:4,
//     dots: false,
//     loop: true
// });
$('#watch-page-body-premier-league').owlCarousel({
    margin:10,
    autoWidth:true,
    items:4,
    dots: false,
    loop:true
});

$('#watch-page-body-featured-analysis').owlCarousel({
    margin:10,
    autoWidth:true,
    items:3,
    dots: false,
    loop:false
})

$('#watch-page-body-news-video').owlCarousel({
    margin:10,
    autoWidth:true,
    items:4,
    dots: false
})

$('#watch-inner-header-body-inner-img').owlCarousel({
    margin:10,
    loop:true,
    autoWidth:true,
    items:4
})

$('#owl-carousel-watch-page-header').owlCarousel({
    margin: 10,
    responsive: {
        0: {
            items: 1  // số ảnh hiển thị ở kích thước màn hình dưới 600px
        },
        600: {
            items: 2  // số ảnh hiển thị ở kích thước màn hình từ 600px trở lên
        },
        1000: {
            items: 4  // số ảnh hiển thị ở kích thước màn hình từ 1000px trở lên
        }
    }
});
var owl = $('#categories-link-body-2');
owl.owlCarousel({
    items:1,
    loop:true,
    margin:10,
    autoplay:false,
    autoplayTimeout:2000,
    autoplayHoverPause:true
});
$('.play').on('click',function(){
    owl.trigger('play.owl.autoplay',[1000])
})
$('.stop').on('click',function(){
    owl.trigger('stop.owl.autoplay')
})


