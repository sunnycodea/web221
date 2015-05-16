
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
    var jsond = {};
    $.ajax({
        type: "post",
        url: "wh_svr/cgi/getTheme.php",
        dataType:'json',
        beforeSend: function(XMLHttpRequest){
            //ShowLoading();
        },
        success: function(data, textStatus){
            jsond = data;
            $('#pagination-demo').twbsPagination({
                totalPages: Object.keys(jsond).length, 
                visiblePages: 6,
                nmap:jsond,
                first: '<',
                prev: '<<',
                next: '>>',
                last: '>',
                loop: true,
                onPageClick: function (event, page) {
                    //调整分页器的宽度，使之对齐
                    $("#pagination-demo").css('width','967px');
                    $(".first a").css('width','40px');
                    $(".pre a").css('width','50px');
                    $(".next a").css('width','50px');
                    $(".last a").css('width','43px');
                    $(".page a").css('width','130px');
                    $(".pagination").css('display','inherit');

                    $(".theme").remove();
                    $.ajax({
                        type: "get",
                        url: "wh_svr/cgi/getRoute.php",
                        dataType:'json', 
                        data:{  
                            iThemeID : jsond[page].id
                        },     
                        beforeSend: function(XMLHttpRequest){
                            //ShowLoading();
                        },
                        success: function(data, textStatus){
                            var rditems = createThemeDivItems(page,data);
                            $("#hehe").after(rditems);
                            $(".mouseky").each(function(index, element){
                                var rid = $(element).attr('route_id');
                    　　        $(element).click(function(){
                                    var myiframe = '<iframe scrolling="auto"  id="poiframe" src="../page_day.html" style="height: 419px;width: 708px;"></iframe>';
                                    TINY.box.show(myiframe,0,0,0,1);
                                });
                            });
                        },
                        complete: function(XMLHttpRequest, textStatus){
                            //HideLoading();
                        },
                        error: function(XMLHttpRequest, textStatus, errorThrown){
                            //请求出错处理
                            //console.log(textStatus);
                            //console.log(XMLHttpRequest.status);
                            //console.log(XMLHttpRequest.readyState);
                        }
                    });
                }
            });
            $("#pagination-demo").css('width','967px');
            $(".first a").css('width','40px');
            $(".pre a").css('width','50px');
            $(".next a").css('width','50px');
            $(".last a").css('width','43px');
            $(".page a").css('width','130px');
            $(".pagination").css('display','inherit');
            //$("item",data).each(function(i, domEle){
            ///   $(".ajax.ajaxResult").append("<li>"+$(domEle).children("title").text()+"</li>");
            //});
        },
        complete: function(XMLHttpRequest, textStatus){
            //HideLoading();
        },
        error: function(XMLHttpRequest, textStatus, errorThrown){
            //请求出错处理
            //console.log(textStatus);
            //console.log(XMLHttpRequest.status);
            //console.log(XMLHttpRequest.readyState);
        }
    });
   /* var data_set = {'1':{'title':'title1','brief':'brief1','price':'1111','route_id':'11'},
                    '2':{'title':'title2','brief':'brief2','price':'2222'},
                    '3':{'title':'title3','brief':'brief3','price':'3333'},
                    '4':{'title':'title4','brief':'brief4','price':'4444'},
                    '5':{'title':'title5','brief':'brief5','price':'5555'},
                    '6':{'title':'title6','brief':'brief6','price':'6666'},
                    '7':{'title':'title7','brief':'brief7','price':'7777'},
                    '9':{'title':'title8','brief':'brief8','price':'8888'},
                    '10':{'title':'title9','brief':'brief9','price':'9999'},
                    '11':{'title':'title10','brief':'brief10','price':'1010'}
            };*/

    var createThemeDivItems = function ( page,data_set) {
        var themeContainer = $('<div></div>');
        themeContainer.addClass("theme");
        themeContainer.attr('pnum', page);

        themeContainer.append(createRouteDivItems(page,Object.keys(data_set).length,data_set));
        return themeContainer;
    };
    
    var createRouteDivItems = function (page, route_num,data_set) {
        var $divItems = $();
        for (var i=1;i<=route_num;i++)
        {
            if(i%2==1){
              var  rowContent = $('<div></div>');
            }
            rowContent = createRouteItem(rowContent,data_set[i].iRouteID,data_set[i].title,data_set[i].brief,data_set[i].price)
            $divItems = $divItems.add(rowContent);
        }
        return $divItems;
        
    };
    var createRouteItem = function (rowContent,RouteID,title,brief,price){
        var mouseContent = $('<div></div>'),
            tfoContent = $('<div></div>'),
            titleContent = $('<h4></h4>'),
            briefContent = $('<p></p>'),
            pfoContent = $('<div></div>'),
            priceContent = $('<p></p>'),
            itemText = null;

        rowContent.addClass("row yabohe row-margin-top clearfix");

        mouseContent.addClass("col-md-6 column mouseky");
        mouseContent.attr('route_id',RouteID);

        tfoContent.addClass("col-md-6 column info" );
        titleContent.addClass("title" ).html(title);
        briefContent.addClass("brief" ).html(brief);
        tfoContent.append(titleContent);
        tfoContent.append(briefContent);

        pfoContent.addClass("col-md-6 column info" );
        priceContent.addClass("price" ).html(price);
        pfoContent.append(priceContent);

        mouseContent.append(tfoContent);
        mouseContent.append(pfoContent);

        rowContent.append(mouseContent);
        return rowContent;
    }
    $.ajax({
        type: "get",
        url: "wh_svr/cgi/getRoute.php",
        dataType:'json', 
        data:{  
             iThemeID : 1001
        },   
        beforeSend: function(XMLHttpRequest){
            //ShowLoading();
        },
        success: function(data, textStatus){
            var rditems = createThemeDivItems(1,data);
            $("#hehe").after(rditems);
            $(".mouseky").each(function(index, element){
                var rid = $(element).attr('route_id');
    　　        $(element).click(function(){
                    var myiframe = '<iframe scrolling="auto"  id="poiframe" src="../page_day.html?route_id='+rid+'" style="height: 419px;width: 708px;"></iframe>';
                    TINY.box.show(myiframe,0,0,0,1);
                    //TINY.box.twalpha($("#tinymask").get(0),81,1,1);
                });
            });
            
        },
        complete: function(XMLHttpRequest, textStatus){
            //HideLoading();
        },
        error: function(XMLHttpRequest, textStatus, errorThrown){
            //请求出错处理
            //console.log(textStatus);
            //console.log(XMLHttpRequest.status);
            //console.log(XMLHttpRequest.readyState);
        }
    });

});

