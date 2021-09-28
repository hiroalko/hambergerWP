$('.p-header__sp-title').on('click',function(){
    $('.l-sidebar').toggleClass('active');
    $('body').css('position', 'fixed');
    $('.l-sidebar__overlay').toggleClass('active');
});
// 押したらサイドバーが現れる
$('.batsu').click(function() {
    $('.l-sidebar').toggleClass('active');
    $('body').css('position', 'relative');
    $('.l-sidebar__overlay').toggleClass('active');
});
// 押したらサイドバーが消える
       