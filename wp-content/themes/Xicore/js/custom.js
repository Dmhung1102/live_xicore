$('#close-fixed-mobile-menu').click(function (){
    $('#fixed-mobile-menu').toggleClass('d-none');
    $('#fixed-mobile-menu').toggleClass('d-lg-none');
    $('body').css('overflow', 'auto');
});
$('#menu-mobile-home').click(function (){
    $('#fixed-mobile-menu').removeClass('d-none');
    $('#fixed-mobile-menu').addClass('d-lg-none');
    $('body').css('overflow', 'hidden');

});

$('#date_slider').owlCarousel({
    loop:false,
    // margin:10,
    nav:false,
    items: 6,
    dots: false,
    arrow: false,
    // stagePadding: 10,
    center: true,
});

$('#matchStatisticsSlider').owlCarousel({
    loop: true,
    margin:10,
    nav:false,
    dots: true,
    arrow: false,
    items: 1,
    autoplay:true,
    autoplayTimeout:3000,
});

$('#favorite_banner_slider').owlCarousel({
    margin:10,
    autoWidth:true,
    items:4,
    dots: false,
});

$('#favorite_banner_slider_team').owlCarousel({
    margin:10,
    autoWidth:true,
    items:4,
    dots: false,
});




var todayItem = $("#date_slider .item.active");

// Lấy vị trí của "TODAY" trong danh sách các items
var todayIndex = $("#date_slider .item").index(todayItem);

// Số lượng items trong carousel
var itemCount = $("#date_slider .item").length;

// Số lượng items phải di chuyển để đưa "TODAY" vào giữa
var moveAmount = Math.floor(itemCount / 2) - todayIndex;

// Di chuyển carousel
$("#date_slider").trigger('to.owl.carousel', [moveAmount, 0]);

$(document).on('click', '.owl-item', function() {
    owlIndex = $(this).index();
    $('.owl-item a').removeClass('active');
    console.log($(this));
    $(this).children('a').addClass('active');
    $('.owl-stage-outer').trigger('to.owl.carousel', owlIndex);
});
$(document).ready(function () {

    $('#calendar_open_button').on('click', function () {
        $('#match_row_calendar').toggleClass('d-none');
        $('#match_row_calendar_opened').toggleClass('d-none');
        $('#match_row_calendar_opened').toggleClass('d-flex');
        $('#calendar_opened_box').toggleClass('d-none');
        $('#calendar_opened_mask').toggleClass('d-none');
    });

    $('#close_date_picker').on('click', function () {
        $('#match_row_calendar').toggleClass('d-none');
        $('#match_row_calendar_opened').toggleClass('d-none');
        $('#match_row_calendar_opened').toggleClass('d-flex');
        $('#calendar_opened_box').toggleClass('d-none');
        $('#calendar_opened_mask').toggleClass('d-none');
    });

    $('.favorite_tab').on('click', function () {
        $('.favorite_tab').removeClass('active');
        $(this).addClass('active');
        var tab = $(this).data('tab');
        $('.favorite_tab_content').addClass('d-none');
        $(tab).removeClass('d-none');
    })

    $('.navbar_account_button').on('click', function () {
        let modal = $(this).data('bs-target');
        $(modal).modal('show');
        $('#menuOffCanvas').offcanvas('hide');
    })

    $('.open_modal_offcanvas').on('click', function () {
        let modal = $(this).data('bs-target');
        $(modal).modal('show');
        $('#menuOffCanvas').offcanvas('hide');
    })

    $('.match_detail_header_button').on('click', function () {
        let target = $(this).data('target');
        $('.match_detail_header').addClass('d-none');
        $(target).removeClass('d-none');
    })

    $(document).ready(function () {
        const data = {"contestantId":"9dlxuym0eab00j9ggrdr87soj","formationUsed":"3412","player":[{"playerId":"91n9wzn3qq2789zq8vdmfrd62","firstName":"Jonas Kurt","lastName":"Urbig","shortFirstName":"Jonas","shortLastName":"Urbig","matchName":"J. Urbig","shirtNumber":40,"position":"Goalkeeper","positionSide":"Centre","formationPlace":"1"},{"playerId":"b5tekxzjb2mm5bmxlaihb8mei","firstName":"Maximilian Solomon","lastName":"Dietz","shortFirstName":"Maximilian","shortLastName":"Dietz","matchName":"M. Dietz","shirtNumber":33,"position":"Defender","positionSide":"Left/Centre","formationPlace":"4"},{"playerId":"ci8x7nlhl8rkjenupa7tzihnt","firstName":"Damian","lastName":"Michalski","shortFirstName":"Damian","shortLastName":"Michalski","matchName":"D. Michalski","shirtNumber":4,"position":"Defender","positionSide":"Centre","formationPlace":"5"},{"playerId":"48ut25gtrubzjh2pzdyp7xuqd","firstName":"Gideon","lastName":"Jung","shortFirstName":"Gideon","shortLastName":"Jung","matchName":"G. Jung","shirtNumber":23,"position":"Defender","positionSide":"Centre/Right","formationPlace":"6"},{"playerId":"2ni3t3qktwmetm4vy9uz2gzbp","firstName":"Oussama","lastName":"Haddadi","shortFirstName":"Oussama","shortLastName":"Haddadi","matchName":"O. Haddadi","shirtNumber":5,"position":"Midfielder","positionSide":"Left","formationPlace":"3"},{"playerId":"7shjpquxjrt16pxuuv6end42d","firstName":"Julian Wesley","lastName":"Green","shortFirstName":"Julian","shortLastName":"Green","matchName":"J. Green","shirtNumber":37,"position":"Midfielder","positionSide":"Left/Centre","formationPlace":"8"},{"playerId":"bh5gxk1kd65fnph0s6kgxt8q2","firstName":"Robert","lastName":"Wagner","shortFirstName":"Robert","shortLastName":"Wagner","matchName":"R. Wagner","shirtNumber":22,"position":"Midfielder","positionSide":"Centre/Right","formationPlace":"7"},{"playerId":"cx771rvpay5m6ltl3gk0u3g4q","firstName":"Simon","lastName":"Asta","shortFirstName":"Simon","shortLastName":"Asta","matchName":"S. Asta","shirtNumber":2,"position":"Midfielder","positionSide":"Right","formationPlace":"2"},{"playerId":"277xa3ka9se9p5nzga0sunavp","firstName":"Branimir","lastName":"Hrgota","shortFirstName":"Branimir","shortLastName":"Hrgota","matchName":"B. Hrgota","shirtNumber":10,"position":"Attacking Midfielder","positionSide":"Centre","formationPlace":"9","captain":"yes"},{"playerId":"8h7u0a26g2yckx955e1g2kdbe","firstName":"Armindo","lastName":"Sieb","shortFirstName":"Armindo","shortLastName":"Sieb","matchName":"A. Sieb","shirtNumber":30,"position":"Striker","positionSide":"Left/Centre","formationPlace":"11"},{"playerId":"pjbuqt8wiwm2ql2tfvvcn59m","firstName":"Tim","lastName":"Lemperle","shortFirstName":"Tim","shortLastName":"Lemperle","matchName":"T. Lemperle","shirtNumber":19,"position":"Striker","positionSide":"Centre/Right","formationPlace":"10"},{"playerId":"1u8g2tnzcqmi4t0dpza7b146i","firstName":"Dickson","lastName":"Abiama","shortFirstName":"Dickson","shortLastName":"Abiama","matchName":"D. Abiama","shirtNumber":11,"position":"Substitute","subPosition":"Attacker"},{"playerId":"dbcos1m75e92poeg68sr823je","firstName":"Jomaine Ellay","lastName":"Consbruch","shortFirstName":"Jomaine","shortLastName":"Consbruch","matchName":"J. Consbruch","shirtNumber":14,"position":"Substitute","subPosition":"Midfielder"},{"playerId":"3abavmbqh6vt0xgcx6zo4mgru","firstName":"Lukas","lastName":"Emanuel Petkov","shortFirstName":"Lukas","shortLastName":"Petkov","matchName":"L. Petkov","shirtNumber":16,"position":"Substitute","subPosition":"Midfielder"},{"playerId":"dldx0lpfwxc7eb0bc092m48a1","firstName":"Orestis","lastName":"Kiomourtzoglou","shortFirstName":"Orestis","shortLastName":"Kiomourtzoglou","matchName":"O. Kiomourtzoglou","shirtNumber":13,"position":"Substitute","subPosition":"Midfielder"},{"playerId":"xtbkmjbqwop0n2jvmnovidp1","firstName":"Andreas Christopher","lastName":"Linde","shortFirstName":"Andreas","shortLastName":"Linde","matchName":"A. Linde","shirtNumber":1,"position":"Substitute","subPosition":"Goalkeeper"},{"playerId":"5b1lhnvze645m8ilnxavzqw9h","firstName":"Marco","lastName":"Meyerhöfer","shortFirstName":"Marco","shortLastName":"Meyerhöfer","matchName":"M. Meyerhöfer","shirtNumber":18,"position":"Substitute","subPosition":"Defender"},{"playerId":"csdd9p7ai8i0s4b2akm9is8yy","firstName":"Oualid","lastName":"Mhamdi","shortFirstName":"Oualid","shortLastName":"Mhamdi","matchName":"O. Mhamdi","shirtNumber":3,"position":"Substitute","subPosition":"Defender"},{"playerId":"5s3o96wdlqzi15p0xhtfgsbf9","firstName":"Dennis","lastName":"Srbeny","shortFirstName":"Dennis","shortLastName":"Srbeny","matchName":"D. Srbeny","shirtNumber":7,"position":"Substitute","subPosition":"Attacker"},{"playerId":"9e4xq8tojxnrntko58ni4s7sa","firstName":"Kerim","lastName":"Çalhanoğlu","shortFirstName":"Kerim","shortLastName":"Çalhanoglu","matchName":"K. Çalhanoğlu","shirtNumber":21,"position":"Substitute","subPosition":"Defender"}],"teamOfficial":{"id":"a5k78t7t27ihjzexg00n14yj9","firstName":"Alexander","lastName":"Zorniger","shortFirstName":"Alexander","shortLastName":"Zorniger","type":"manager"}};

    });


    $('.bookmark_button').on('click', function () {
        $(this).toggleClass('orange_active_svg');
        console.log(data);
    })
});
$('.slider-for').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    fade: true,
    asNavFor: '.slider-nav'
});
$('.slider-nav').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    asNavFor: '.slider-for',
    dots: true,
    centerMode: true,
    focusOnSelect: true
});




