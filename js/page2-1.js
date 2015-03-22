
function select_show(that,i) {
    $(that).css("background","#422AAB");
    $(that).css("color","#fff");
    $(".list-group a:gt(" + i + ")").css("background", "transparent");
    $(".list-group a:lt(" + i + ")").css("background", "transparent");
    $divList = $("#right-content").children("div");
    $divList.hide(); 
    $divList.eq(i).show();
}

function hash_tab(leftList,tab_num) {
    if (tab_num < 0) {
        return ; 
    } else {
        var myspp = leftList.submenus[tab_num].getElementsByTagName("span")[0];
        leftList.toggleMenu(myspp.parentNode);
        var dict = {
            '0' : 0,
            '1' : 3,
            '2' : 5,
        };
		var that = $(".list-group div a").eq(dict[tab_num]);
        select_show(that,dict[tab_num]);
    }
}

$(document).ready(function(){
    var leftList;
    leftList = new LList("left_list");
    leftList.init();
    $(".list-group div a").each(function(i){
        $(this).click(function(){
            select_show(this,i);
        });
    });
    var tab_num = window.location.hash.substr(-1) - 1;
    hash_tab(leftList,tab_num);

    $("#slide_left_bottom").floatdiv({left:"6px",top:"180px"});
    $("#slide_right_bottom").floatdiv({left:"1240px",top:"440px"});

});
