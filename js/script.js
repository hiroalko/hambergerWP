jQuery(function ($) {
    $('.p-header__sp-title').on('click', function () {
        $('.l-sidebar').toggleClass('active');
        $('body').css('position', 'fixed');
        $('.l-sidebar__overlay').toggleClass('active');
    });

    $('.batsu').click(function () {
        $('.l-sidebar').toggleClass('active');
        $('body').css('position', 'relative');
        $('.l-sidebar__overlay').toggleClass('active');
    });

});
console.log("tekkun");
