if (document.documentElement.clientWidth > 768) {
$('ul.nav li.dropdown').hover(function () {
    $(this).find('.dropdown-menu').stop(true, true).fadeIn(250);
}, function () {
    $(this).find('.dropdown-menu').stop(true, true).fadeOut(250);
});
}
