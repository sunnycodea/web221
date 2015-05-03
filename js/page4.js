
function refresh()
{
    $("a.list-group-item").css("background","transparent");
    $("a.list-group-item").css("color","#fff");
    $("a.list-group-item").css("border","none");
}

$(document).ready(function(){
    refresh();
    // add
    $(".list-group a").each(function(i){

        $(this).click(function(){
        	/*modified in 2015-05-03*/
            $(this).css("background","#BBE70D");
            $(this).css("color","#fff");
            $(this).css("border","none");
            $(".list-group a:gt(" + i + ")").each(function(){
                $(this).mouseover(function(){
                    $(this).css("background","#BBE70D");
                })
                .mouseout(function(){
                    $(this).css("background","transparent");
                });
                $(this).css("background", "transparent");
            });

            $(".list-group a:lt(" + i + ")").each(function(){
                $(this).mouseover(function(){
                    $(this).css("background","#BBE70D");
                })
                .mouseout(function(){
                    $(this).css("background","transparent");
                });
                $(this).css("background", "transparent");
            });

            $(this).mouseout(function(){		
                $(this).css("background","#BBE70D");
            });
            /*******************************/
            $divList = $("#right-nav").children("div");
            $divList.hide(); 
            $divList.eq(i).show();

        });
    });
});

