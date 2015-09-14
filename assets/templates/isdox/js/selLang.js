/**
 * selection active language
 */

$(document).ready(function () {
    var url = location.href;
    if(url.indexOf('/en/') + 1) {
        $(".en").addClass("select");
    }else{
        $(".ru").addClass("select");
    }
});