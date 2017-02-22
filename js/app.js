$(function() {

    //Smooth Scrolling Menu
    (function() {

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

    })();

    //Form validation
    (function() {
    var form = $('form.form');
    var button = $('input[type="submit"]');
    console.log(form, button);
    form.on('submit', function(e){
      e.preventDefault();


    });
    })();






});
