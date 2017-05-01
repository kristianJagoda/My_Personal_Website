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

    // Get the form.
    var form = $('#form');
    // Get the messages div.
    var formMessages = $('#form-messages');

    $(form).on('submit', function(e) {
        e.preventDefault();
        // Serialize the form data.
        var formData = $(form).serialize();

        // Submit the form using AJAX.
        $.ajax({
                type: 'POST',
                url: $(form).attr('action'),
                data: formData
            })
            .done(function(response) {
                // Make sure that the formMessages div has the 'success' class.

                $('.form-div').fadeOut();
                // Set the message text.
                $(formMessages).text(response);
                $(formMessages).removeClass('error').addClass('success').fadeIn();


            })
            .fail(function(data) {
                // Make sure that the formMessages div has the 'error' class.
                $(formMessages).removeClass('success').addClass('error');


                // Set the message text.
                if (data.responseText !== '') {
                    $(formMessages).text(data.responseText);
                } else {
                    $(formMessages).text('An error occured and your message could not be sent.');
                }
            });


    });









});
