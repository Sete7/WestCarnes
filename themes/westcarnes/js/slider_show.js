$(function () {
    var slideAuto = setInterval(slideGo, 3000);
    $('.slide_nav.go').click(function () {
        clearInterval(slideAuto);
        slideGo();
    });
    $('.slide_nav.back').click(function () {
        clearInterval(slideAuto);
        slideBack();
    });

    $('.slide_nav.go').dblclick(function () {
        slideAuto = setInterval(slideGo, 3000);
    });
    function slideGo() {
        if ($('.slider_item.first').next().length) {
            $('.slider_item.first').fadeOut(400, function () {
                $(this).removeClass('first').next().fadeIn().addClass('first');
            });
        } else {
            $('.slider_item.first').fadeOut(400, function () {
                $('.slider_item').removeClass('first');
                $('.slider_item:eq(0)').fadeIn().addClass('first');
            });
        }
    }
    function slideBack() {
        if ($('.slider_item.first').index() >= $('.slider_item').length) {
            $('.slider_item.first').fadeOut(400, function () {
                $(this).removeClass('first').prev().fadeIn().addClass('first');
            });
        } else {
            $('.slider_item.first').fadeOut(400, function () {
                $('.slider_item').removeClass('first');
                $('.slider_item:last-of-type').fadeIn().addClass('first');
            });
        }
    }
});

