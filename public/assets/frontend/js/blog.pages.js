//------------- Page loading -------------//
$(window).on('load', function() {
    "use strict";
    $('#loader').fadeOut(1000);
    $('#loading').delay(350).fadeOut('slow');
});

//------------- On scroll add shadow on header and Count number on scroll for static -------------//
$(function(){
    "use strict";
    var a = 0;
    $(window).on("scroll", function(){
        if($(this).scrollTop() >= 50){
            // Add shadow class on header
            $("#header").addClass("header-shadow");
            
            // --------- Counter on scroll ---------//
            var oTop = $('#counter').offset().top - window.innerHeight;
            if (a == 0 && $(window).scrollTop() > oTop) {
                $('.counter-value').each(function() {
                    var $this = $(this),
                    countTo = $this.attr('data-count');
                $({
                    countNum: $this.text()
                    }).animate({
                        countNum: countTo
                    },

                    {
                        duration: 2000,
                        easing: 'swing',
                        step: function() {
                            $this.text(Math.floor(this.countNum));
                        },
                        complete: function() {
                            $this.text(this.countNum);
                        }

                    });
                });
                a = 1;
            }
        } else {
            // Remove shadow class on header
            $("#header").removeClass("header-shadow");
        }
    });
});

//------------- Animation init -------------//
$(function() {
    "use strict";
    if ($("#parallaxAos")[0]) {
        AOS.init({
            easing: 'ease-in-out-sine'
        });
    }
});

//------------- Set Image in Background -------------//
$(function ($) {
    "use strict";
    var setBack = $(".setImgBack");
    setBack.css('background-image', function () {
        return 'url(' + $(this).find('img').attr('src') + ')';
    });
});

//------------- Newsletter -------------//
(function($) {
    "use strict";
    if ($("#subscribe")[0]) {
        $("#subscribe").validate({
            // if valid, post data via AJAX
            submitHandler: function(form) {
                $.post("php/subscribe.php", { email: $("#newsletterEmail").val() }, function(data) {
                    $('#response').html(data);
                });
            },

            // all fields are required
            rules: {
                email: {
                    required: true,
                    email: true
                }
            }
        });
    }
})(jQuery);

//------------- Contact Form Validation -------------//
var url="php/contact.php";
(function($) {
    "use strict";
    if ($("#contact-frm")[0]) {
        $('#contact-frm').submit(function(event) {
            event.preventDefault();
            var name = $('#name').val();
            var email = $('#email').val();
            var msg = $('#msg').val();

            var form = $(this);
            $.ajax({
                type: "post",
                url: url,
                data: "name="+name+"&email="+email+"&msg="+msg,
            }).done(function(data) {
                if (data==="true") {
                    {
                        $('#success').empty();$('#success').append("Your message has been sent. We'll be in touch with you soon").removeClass('error');
                    }
                } 
                else {
                    $('#success').empty();$('#success').append("Sending fail, Please try again letter").addClass('error');
                }
            }).fail(function(data) {
                $('#success').append("Sending fail, Please try again letter").addClass('error');
            });
        });
    }
})(jQuery);