/*Code taken from: https://github.com/bigspotteddog/ScrollToFixed*/

$(document).ready(function() {

    $('#timeline').scrollToFixed({
        marginTop: 10,
        limit: function() {
            var limit = $('#limit').offset().top - $('#timeline').outerHeight(true) - 10;
            return limit;
        }});
});

