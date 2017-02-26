$(function() {

    //Smooth Scrolling Menu
    (function() {

        var menu = $('.menu');
        var links = menu.find('a');


        links.on("click", function(e) {
            var target = $($(this).attr('href'));

            if (target.length) {
                event.preventDefault();
                $('html, body').animate({
                    scrollTop: target.offset().top
                }, 2000);
            }
        });

    })();

    //Form validation
    (function() {
        var form = $('form.form');
        var button = $('input[type="submit"]');


        form.on('submit', function(e) {
            e.preventDefault();

            var nameVal = $('.name_input').val();
            var emailVal = $('.email_input').val();
            var textareaVal = $('.text_textarea').val();
            var error = '';


            if (nameVal.length > 5) {
                if (emailVal.indexOf('@') > -1 && emailVal.length > 5) {
                    if (textareaVal.length > 5) {

                        alert("fucking amazing!");

                    } else {
                        error += "Enter at least 5 characters.";
                        console.log(error);
                    }

                } else {
                    error += "Your email address need to include \"@\" and be at least 5 character long.";
                    console.log(error);
                }

            } else {
                error += "Your name cannot be shorter than 5 characters.";
                console.log(error);
            }



        });

    })();

    //Scroll to Top
    (function() {

        var button = $('.button');


        button.click(function() {
            $("html, body").animate({
                scrollTop: 0
            }, 2000);
            return false;
        });





    })();



});
