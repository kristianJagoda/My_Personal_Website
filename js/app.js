$(function() {
    //Slide Menu
    var menu = $('.menu');
    var links = menu.find('a');


    links.on("click", function(e) {
        var target = $($(this).attr("href"));

        if (target.length) {
            event.preventDefault();
            $("html, body").animate({
                scrollTop: target.offset().top
            }, 2000);
        }
    });









});
