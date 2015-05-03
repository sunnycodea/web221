
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

    var jsond =  {'1':{'name':'test1','id':'10001'},
        '2':{'name':'test2','id':'10002'},
        '3':{'name':'test3','id':'10003'},
        '4':{'name':'test4','id':'10004'},
        '5':{'name':'test5','id':'10005'},
        '6':{'name':'test6','id':'10006'},
        '7':{'name':'test7','id':'10007'},
        '8':{'name':'test8','id':'10008'},
        '9':{'name':'test9','id':'10009'},
        '10':{'name':'test10','id':'100010'},
        '11':{'name':'test11','id':'100011'},
    };
    $.ajax({
        type: "post",
        url: "http://localhost/page_travel.html",
        dataType:'json',
        data:{  
            type: 'theme'
        },   
        beforeSend: function(XMLHttpRequest){
            //ShowLoading();
        },
        success: function(data, textStatus){
            jsond = data;
            //$("item",data).each(function(i, domEle){
            ///   $(".ajax.ajaxResult").append("<li>"+$(domEle).children("title").text()+"</li>");
            //});
        },
        complete: function(XMLHttpRequest, textStatus){
            //HideLoading();
        },
        error: function(XMLHttpRequest, textStatus, errorThrown){
            //请求出错处理
            console.log(textStatus);
            //console.log(XMLHttpRequest.status);
            //console.log(XMLHttpRequest.readyState);
        }
    });
    var data_set = {'0':{'title':'title1','brief':'brief1','price':'1111'},
                    '1':{'title':'title2','brief':'brief2','price':'2222'},
                    '2':{'title':'title3','brief':'brief3','price':'3333'},
                    '3':{'title':'title4','brief':'brief4','price':'4444'},
                    '4':{'title':'title5','brief':'brief5','price':'5555'},
                    '5':{'title':'title6','brief':'brief6','price':'6666'},
                    '6':{'title':'title7','brief':'brief7','price':'7777'},
                    '7':{'title':'title8','brief':'brief8','price':'8888'},
                    '8':{'title':'title9','brief':'brief9','price':'9999'},
                    '9':{'title':'title10','brief':'brief10','price':'1010'}
            };
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
            $(".theme").remove();
            /*
            $(".theme").each(function(key, obj){
                pgnumber = $(obj).attr('pgnum');
                console.log(pgnumber);
                //pagetmp=page%2+1;
                if(pagetmp==pgnumber){
                    $(obj).css('display','block');
                }else{
                    $(obj).css('display','none');
                }
                $('.mouseky').each(function(key, obj){
                    var myVar = $(obj).find('.price').html('hello') ;
                     //console.log(myVar);
                     
                });
               
            });*/ 
            $.ajax({
                type: "post",
                url: "http://localhost/page_travel.html",
                dataType:'json', 
                data:{  
                    type: 'route',  
                    theme_id : jsond[page].id
                },     
                beforeSend: function(XMLHttpRequest){
                    //ShowLoading();
                },
                success: function(data, textStatus){
                    var rditems = createThemeDivItems(page,data);
                    $("#hehe").after(rditems);
                    //$("item",data).each(function(i, domEle){
                    ///   $(".ajax.ajaxResult").append("<li>"+$(domEle).children("title").text()+"</li>");
                    //});
                },
                complete: function(XMLHttpRequest, textStatus){
                    //HideLoading();
                },
                error: function(XMLHttpRequest, textStatus, errorThrown){
                    //请求出错处理
                    console.log(textStatus);
                    //console.log(XMLHttpRequest.status);
                    //console.log(XMLHttpRequest.readyState);
                }
            });
            var rditems = createThemeDivItems(page,data_set);
            $("#hehe").after(rditems);
        }
    });

    var createThemeDivItems = function ( page,data_set) {
        var themeContainer = $('<div></div>');
        themeContainer.addClass("theme");
        themeContainer.attr('pnum', page);

        themeContainer.append(createRouteDivItems(page,10,data_set));
        return themeContainer;
    };
    
    var createRouteDivItems = function (page, route_num,data_set) {
        var $divItems = $();

        for (var i=0;i<route_num;i++)
        {
            if(i%2==0){
              var  rowContent = $('<div></div>');
            }
            rowContent = createRouteItem(rowContent,data_set[i].title+page,data_set[i].brief+page,data_set[i].price*page)
            $divItems = $divItems.add(rowContent);
        }
        return $divItems;
        
    };
    var createRouteItem = function (rowContent,title,brief,price){
        var mouseContent = $('<div></div>'),
            tfoContent = $('<div></div>'),
            titleContent = $('<h4></h4>'),
            briefContent = $('<p></p>'),
            pfoContent = $('<div></div>'),
            priceContent = $('<p></p>'),
            itemText = null;

        rowContent.addClass("row yabohe row-margin-top clearfix");

        mouseContent.addClass("col-md-6 column mouseky");

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
        type: "post",
        url: "http://localhost/page_travel.html",
        dataType:'json', 
        data:{  
            type: 'route',  
            page_num : jsond[1].id
        },   
        beforeSend: function(XMLHttpRequest){
            //ShowLoading();
        },
        success: function(data, textStatus){
            var rditems = createThemeDivItems(1,data);
            $("#hehe").after(rditems);
            //$("item",data).each(function(i, domEle){
            ///   $(".ajax.ajaxResult").append("<li>"+$(domEle).children("title").text()+"</li>");
            //});
        },
        complete: function(XMLHttpRequest, textStatus){
            //HideLoading();
        },
        error: function(XMLHttpRequest, textStatus, errorThrown){
            //请求出错处理
            console.log(textStatus);
            //console.log(XMLHttpRequest.status);
            //console.log(XMLHttpRequest.readyState);
        }
    });
    var rditems = createThemeDivItems(1,data_set);
    $("#hehe").after(rditems);
});
