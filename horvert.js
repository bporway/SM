//check if horizontal image, adjust vertical centering
    if ($(this).children('img').width()>$(this).children('img').height()) {
        $('.sm-main-image').css("bottom","11px");
    }
    else {

        $('.sm-main-image').css("bottom","40px");
    }