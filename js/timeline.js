/*Código tirado de: https://github.com/bigspotteddog/ScrollToFixed*/


$(document).ready(function() {
    $('#menu').scrollToFixed();
    
    /*

    $('.footer').scrollToFixed( {
        bottom: 0,
        limit: $('.footer').offset().top
    });*/

    $('#timeline').scrollToFixed({
        marginTop: $('#menu').outerHeight() + 10,
        limit: function() {
            var limit = $('#footer').offset().top - $('#timeline').outerHeight(true) - 10;
            return limit;
        }/*,
        zIndex: 999*/});
});

