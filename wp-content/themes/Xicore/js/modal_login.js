
    $(".toggle-password").on('click', function () {
        let type = $('#password_register').attr('type');
        if (type !== 'text') {
            $('#password_register').attr('type', 'text');
            $('.toggle-password').removeClass('d-none');
            $(this).addClass('d-none');
        } else {
            $('#password_register').attr('type', 'password');
            $('.toggle-password').removeClass('d-none');
            $(this).addClass('d-none');
        }
    });
    $(".toggle-password-login").on('click', function () {
        let type = $('#password_login').attr('type');
        if (type !== 'text') {
            $('#password_login').attr('type', 'text');
            $('.toggle-password-login').removeClass('d-none');
            $(this).addClass('d-none');
        } else {
            $('#password_login').attr('type', 'password');
            $('.toggle-password-login').removeClass('d-none');
            $(this).addClass('d-none');
        }
    });


    const tabs = document.querySelectorAll(".tabs");
    const tab = document.querySelectorAll(".tab");
    const panel = document.querySelectorAll(".panel");

    function onTabClick(event) {

        for (let i = 0; i < tab.length; i++) {
            tab[i].classList.remove("active");
        }

        for (let i = 0; i < panel.length; i++) {
            panel[i].classList.remove("active");
        }
        event.target.classList.add('active');
        let classString = event.target.getAttribute('data-target');
        console.log(classString);
        document.getElementById('panels').getElementsByClassName(classString)[0].classList.add("active");
    }
    for (let i = 0; i < tab.length; i++) {
        tab[i].addEventListener('click', onTabClick, false);
    }

    $('#prediction-link-body').owlCarousel({
        margin:10,
        autoWidth:true,
        items:4,
        dots: false,
    });