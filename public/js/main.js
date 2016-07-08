$(document).ready(function () {
    var showChar = 300;
    var ellipsestext = "...";
    var moretext = "(more)";
    var lesstext = "(less)";
    $('.more').each(function () {
        var content = $(this).html();

        if (content.length > showChar) {

            var c = content.substr(0, showChar);
            var h = content.substr(showChar - 1, content.length - showChar);

            var html = c + '<span class="moreelipses">' + ellipsestext + '</span>&nbsp;<span class="morecontent"><span>' + h + '</span>&nbsp;&nbsp;<a href="" class="morelink">' + moretext + '</a></span>';

            $(this).html(html);
        }

    });

    $(".morelink").click(function () {
        if ($(this).hasClass("less")) {
            $(this).removeClass("less");
            $(this).html(moretext);
        } else {
            $(this).addClass("less");
            $(this).html(lesstext);
        }
        $(this).parent().prev().toggle();
        $(this).prev().toggle();
        return false;
    });
});


jQuery(document).ready(function($) {
    $('.search').click(
        function() {
            $('.blur').css("z-index","9").fadeIn();
            $(this).css({
                "marginRight": "20px",
                "backgroundColor": "white"
            })
            $(".askbtn").text("suali tesdiqle")
            $(".searchbar").addClass('m10') 
        $(".sag").css("display","none");
    });
    $(".askbtn").click(function(event) {
        if($(".search").val().length == 0){
            $(".search").val("?")
        }
        $('.blur').css("z-index","9").fadeIn();
            $(".search").css({
                "marginRight": "20px",
                "backgroundColor": "white"
            })
            $(".askbtn").text("suali tesdiqle")
            $(".searchbar").addClass('m10')
        $(".sag").css("display","none");    });
    $('.blur').click(function(e) {
        $(this).fadeOut(function() {
        });
        $('.search').css({
                "marginRight": "0px",
                "backgroundColor": "lightgray"
            })
        $(".sag").css("display","block");
        $(".searchbar").removeClass('m10');
         $(".askbtn").text("sual ver")
        
        

    });


});

    $(document).ready(function(){
        $("#back-top").hide();
        $(function () {
            $(window).scroll(function () {
                if ($(this).scrollTop() > 600) {
                    $('#back-top').fadeIn();

                } else {
                    $('#back-top').fadeOut();
                }
            });
            $('#back-top').click(function () {
                $('body,html').animate({
                    scrollTop: 0
                }, 400);
                return false;
            });
        });
        $(".profil").hover(function(event) {
            $(".prof").toggle()
        });
        $(".prof").hover(function(event) {
            $(".prof").toggle()
        });
         $(window).scroll(function () {
                if ($(this).scrollTop() > 50) {
                    $('.head').addClass('fixed')

                } else {
                    $('.head').removeClass('fixed')
                }
            });
});