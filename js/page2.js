
$(document).ready(function(){
    $("#nav_title4").click(function(){
        //$("#navbar4").style.backgroundColor='#ff0000';
        alert("haha");

    });
    //    $("#slide_left_bottom").floatdiv({left:"6px",top:"180px"});
    //    $("#slide_right_bottom").floatdiv({left:"1240px",top:"440px"});
});
$(document).ready(function(){
    // set up hover panels
    // although this can be done without JavaScript, we've attached these events
    // because it causes the hover to be triggered when the element is tapped on a touch device
    $('.hover').hover(function(){
        $(this).addClass('flip');
    },function(){
        $(this).removeClass('flip');
    });
    //$('.col-md-2').hide();
    //$('.col-md-2').slideDown('900000');
    //$('.col-md-2').animate({height:"0px"},0);
    //$('.col-md-2').animate({height:"120px"},1000);
    $('.col-md-2').css('display','none');
    $('#nav-1').parent().css('display','block');
    $('#nav-1').css('margin-top','-200px');
    $('#nav-1').stop().animate({
                marginTop: "0px"
            }, {
                duration: 1000,
                easing: "easeOutBounce",
                complete: function(){
                    $('#nav-2').parent().css('display','block');
                    $('#nav-2').css('margin-top','-200px');
                    $('#nav-2').stop().animate({
                        marginTop: "0px"
                        }, {
                            duration: 1000,
                            easing: "easeOutBounce",
                            complete: function(){
                                $('#nav-3').parent().css('display','block');
                                $('#nav-3').css('margin-top','-200px');
                                $('#nav-3').stop().animate({
                                    marginTop: "0px"
                                    }, {
                                        duration: 1000,
                                        easing: "easeOutBounce",
                                        complete: function(){
                                            $('#nav-4').parent().css('display','block');
                                            $('#nav-4').css('margin-top','-200px');
                                            $('#nav-4').stop().animate({
                                                marginTop: "0px"
                                                }, {
                                                    duration: 1000,
                                                    easing: "easeOutBounce",
                                            });
                                        }
                                });
                            }
                    });
                }
    });

});
