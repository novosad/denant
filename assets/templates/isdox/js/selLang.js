/**
 * selection active language
 */

$(document).ready(function () {
    var url = location.href;
    if (url.indexOf('/en/') + 1) {
        $(".en").addClass("select");
    }
    else if (url.indexOf('/fr/') + 1){
        $(".fr").addClass("select");
    }
    else {
        $(".ru").addClass("select");
    }
});