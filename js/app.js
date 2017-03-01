$(function() {

    //Smooth Scrolling Menu
    (function() {

        var menu = $('.menu');
        var links = menu.find('a');


        links.on('click', function(e) {
            var target = $($(this).attr('href'));

            if (target.length) {
                event.preventDefault();
                $('html, body').animate({
                    scrollTop: target.offset().top
                }, 2000);
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
            button.css('border', 'none');
        });


    })();

    //Tooltip
    (function() {
        var tooltip = $('.tooltip');

        tooltip.hover(function() {

            var title = $(this).attr('title');
            $(this).data('tipText', title).removeAttr('title');
            var newP = $('<p class="form_tooltip"></p>');
            newP.text(title).appendTo('body').fadeIn('slow');
        }, function() {

            $(this).attr('title', $(this).data('tipText'));
            $('.form_tooltip').remove();

        }).mousemove(function(e) {
            var mouseX = e.pageX + 20;
            var mouseY = e.pageY + 10;
            $('.form_tooltip')
                .css({
                    top: mouseY,
                    left: mouseX
                });
        });

    })();


    //Form validation
    (function() {

        var form = $('form.form');

        form.on('submit', function(e) {
            e.preventDefault();

            var nameVal = $('.name_input').val();
            var emailVal = $('.email_input').val();
            var messageVal = $('.text_textarea').val();
            var divSuccess = $('.success');
            var success = '';

            //If form properly validated, show the message to user
            if (nameVal.length > 5) {
                if (emailVal.indexOf('@') > -1 && emailVal.length > 5) {
                    if (messageVal.length > 5) {
                        success = "Thank you for sending the form.";
                        divSuccess.text(success).css('display', 'block');
                    }
                }
            }





        });
    })();
});
