$(document).ready(function() {
    $('#div1').css('right', -$('#wrapper').width()).show().addClass('is-hidden');
    $('#icon_menu_login').click(function(e) {
        e.preventDefault();
        $(".login-btn").hide();
        $("#div1").animate({'right': $('#wrapper').width()});
        $('#div2').animate({'right': 0}).removeClass('is-hidden');
    });
    $('#icon_menu_back').click(function(e) {
        e.preventDefault();
        $("#div2").animate({'right': -$('#wrapper').width()}).addClass('is-hidden');
        $('#div1').animate({'right': 0}, function() {
            $(".login-btn").show();
        });
    });
    $(window).resize(function() {
        if ($("#div2").css("right") !== '0px')
            $("#div2").css({right: -$('#wrapper').width()});

        //console.log($('#wrapper').width());
    });
});