jQuery(document).ready(function($) {

    // Quem somos
    var $quemSomos = $('.quem-somos');

    $quemSomos.hide();

    $(".saiba-mais").click(function () {

        $quemSomos.slideToggle('fast');
        $(this).toggleClass('active');

    });

});




